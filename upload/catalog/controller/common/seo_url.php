<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/4/2018
 * Time: 23:00
 */
class ControllerCommonSeoUrl extends Controller {
    public function index() {
        echo 1;die;
        // Add rewrite to url class
        if ($this->config->get('config_seo_url')) {
            $this->url->addRewrite($this);
        }

        // Decode URL
        if (isset($this->request->get['_route_'])) {
            $parts2 = explode('.php', $this->request->get['_route_']);

            $parts = explode('/', $parts2[0]);
            foreach ($parts as $part) {
                $part = rtrim($part,'.php');
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias WHERE keyword = '" . $this->db->escape($part) . "'");

                if ($query->num_rows) {
                    $url = explode('=', $query->row['query']);

                    if ($url[0] == 'product_id') {
                        $this->request->get['product_id'] = $url[1];
                    }

                    if ($url[0] == 'category_id') {
                        if (!isset($this->request->get['path'])) {
                            $this->request->get['path'] = $url[1];
                        } else {
                            $this->request->get['path'] .= '_' . $url[1];
                        }
                    }

                    if ($url[0] == 'manufacturer_id') {
                        $this->request->get['manufacturer_id'] = $url[1];
                    }

                    if ($url[0] == 'information_id') {
                        $this->request->get['information_id'] = $url[1];
                    }
                } else {
                    $this->request->get['route'] = 'error/not_found';
                }
            }

            if (isset($this->request->get['product_id'])) {
                $this->request->get['route'] = 'product/product';
            } elseif (isset($this->request->get['path'])) {
                $this->request->get['route'] = 'product/category';
            } elseif (isset($this->request->get['manufacturer_id'])) {
                $this->request->get['route'] = 'product/manufacturer/info';
            } elseif (isset($this->request->get['information_id'])) {
                $this->request->get['route'] = 'information/information';
            }
            if (isset($this->request->get['route'])) {
                $this->request->get['route'] = $parts2[0];
            }
            if (isset($parts2[1])) {
                $par = explode('/',$parts2[1]);
                unset($par[0]);

                $par = array_values($par);

                $nextpara = '';
                foreach( $par as $key => $value ) {
                    if( 0 === $key%2) { //Even
                        $nextpara = $value;
                    }
                    else {
                        $this->request->get[$nextpara] = $value;
                    }
                }
            }

            if (isset($this->request->get['route'])) {
                return $this->forward($this->request->get['route']);
            }
        } elseif(isset($this->request->get['route'])){
            if ($this->request->get['route'] =='product/search') {
                $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
                if ($_SERVER["SERVER_PORT"] != "80")
                {
                    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
                }
                else
                {
                    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                }
                $this->redirect($this->rewrite($pageURL));
            }
        }
    }

    public function rewrite($link) {
        if ($this->config->get('config_seo_url')) {
            $url_data = parse_url(str_replace('&', '&', $link));

            $url = '';

            $data = array();

            parse_str($url_data['query'], $data);

            foreach ($data as $key => $value) {
                if (isset($data['route'])) {
                    if (($data['route'] == 'product/product' && $key == 'product_id') || (($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id') || ($data['route'] == 'information/information' && $key == 'information_id')) {
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "'");

                        if ($query->num_rows) {
                            $url .= '/' . $query->row['keyword'];

                            unset($data[$key]);
                        }
                    } elseif ($key == 'path') {
                        $categories = explode('_', $value);

                        foreach ($categories as $category) {
                            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_alias WHERE `query` = 'category_id=" . (int)$category . "'");

                            if ($query->num_rows) {
                                $url .= '/' . $query->row['keyword'];
                            }
                        }

                        //unset($data[$key]);
                    }
                }
            }

            if ($url) {
                unset($data['route']);

                $query = '';

                if(count($data)> 0) {

                    foreach ($data as $key => $value) {
                        $query .= '/'.$key.'/'.$value;
                    }
                }

                return $url_data['scheme'] . '://' . $url_data['host'] . (isset($url_data['port']) ? ':' . $url_data['port'] : '') . str_replace('/index.php', '', $url_data['path']) . $url . '.php'. $query;
            } else {

                $url_data = parse_url(str_replace('&', '&', $link));

                $url = '/';

                $data = array();

                parse_str($url_data['query'], $data);


                $url .= $data['route'] . '.php';
                unset($data['route']);

                if(count($data)> 0) {


                    foreach ($data as $key => $value) {
                        $url .= '/'.$key.'/'.$value;
                    }
                }

                return $url_data['scheme'] . '://' . $url_data['host'] . (isset($url_data['port']) ? ':' . $url_data['port'] : '') . str_replace('/index.php', '', $url_data['path']) . $url;
            }
        } else {
            return $link;
        }
    }
}