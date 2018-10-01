<?php

/* so-megastore/template/soconfig/listing.twig */
class __TwigTemplate_ffda3f9299adaeb9ce67c001fea5fbeed17331ed9bf8d3bef8a56f75e9d314bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        if ((isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null)) {
            echo " ";
            $context["thumbgallery"] = (isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null);
        } else {
            // line 11
            echo " ";
            $context["thumbgallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "card_gallery"), "method");
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null)) {
            echo " ";
            $context["cartinfo"] = (isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null);
        } else {
            // line 14
            echo " ";
            $context["cartinfo"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_position"), "method");
        }
        // line 15
        echo "

";
        // line 18
        echo "<div class=\"product-filter product-filter-top filters-panel\">
  <div class=\"row\">
\t\t<div class=\"col-sm-5 view-mode\">
\t\t\t";
        // line 21
        $context["category_route"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_route", array(), "method");
        // line 22
        echo "\t\t\t
\t\t\t";
        // line 23
        if ((((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null)) && ((isset($context["category_route"]) ? $context["category_route"] : null) == "product/category"))) {
            // line 24
            echo "\t\t\t\t";
            if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
                echo " ";
                $context["btn_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
                // line 25
                echo "\t\t\t\t";
            } else {
                $context["btn_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
                // line 26
                echo "\t\t\t\t";
            }
            // line 27
            echo "
\t\t\t\t";
            // line 28
            $context["class_btn_canvas"] = ((((isset($context["btn_canvas"]) ? $context["btn_canvas"] : null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
            // line 29
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"open-sidebar ";
            echo (isset($context["class_btn_canvas"]) ? $context["class_btn_canvas"] : null);
            echo "\"><i class=\"fa fa-bars\"></i>";
            echo (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t";
        }
        // line 32
        echo "\t\t\t<div class=\"list-view\">
\t\t\t\t<div class=\"btn btn-gridview\">";
        // line 33
        echo (isset($context["text_gridview"]) ? $context["text_gridview"] : null);
        echo "</div>
\t\t\t\t<button type=\"button\" id=\"grid-view-2\" class=\"btn btn-view hidden-sm hidden-xs\">2</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-3\" class=\"btn btn-view hidden-sm hidden-xs \">3</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-4\" class=\"btn btn-view hidden-sm hidden-xs\">4</button>
\t\t\t  \t<button type=\"button\" id=\"grid-view-5\" class=\"btn btn-view hidden-sm hidden-xs\">5</button>
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid hidden-lg hidden-md\" title=\"";
        // line 38
        echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
        echo "\"><i class=\"fa fa-th-large\"></i></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list \" title=\"";
        // line 39
        echo (isset($context["button_list"]) ? $context["button_list"] : null);
        echo "\"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t<button type=\"button\" id=\"table-view\" class=\"btn btn-view\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"short-by-show form-inline text-right col-md-7 col-sm-7 col-xs-12\">
\t\t\t<div class=\"form-group short-by\">
\t\t\t\t<label class=\"control-label\" for=\"input-sort\">";
        // line 47
        echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
        echo "</label>
\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 51
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 52
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t
\t\t\t\t\t<option value=\"";
                // line 55
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-limit\">";
        // line 63
        echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
        echo "</label>
\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 66
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                // line 67
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["limits"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["limits"], "text", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group product-compare hidden-sm hidden-xs\"><a href=\"";
        // line 74
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" id=\"compare-total\" class=\"btn btn-default\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></div>
\t\t</div>
\t
  </div>
</div>
";
        // line 80
        echo "
<div class=\"products-list row nopadding-xs\">
\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 83
            echo "\t
\t\t<div class=\"product-layout \">
\t\t\t<div class=\"product-item-container\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t";
            // line 87
            if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) && $this->getAttribute($context["product"], "image_galleries", array()))) {
                // line 88
                echo "
\t\t\t\t\t";
                // line 89
                if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 1)) {
                    // line 90
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__left";
                    // line 91
                    echo "\t\t\t\t\t";
                } elseif (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 2)) {
                    // line 92
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__right";
                    // line 93
                    echo "\t\t\t\t\t";
                } else {
                    // line 94
                    echo "\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__bottom";
                    // line 95
                    echo "\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t<div class=\"product-card__gallery ";
                echo (isset($context["class_thumbgallery"]) ? $context["class_thumbgallery"] : null);
                echo "\">
\t\t\t\t\t\t    <div class=\"item-img thumb-active\" data-src=\"";
                // line 97
                echo $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "thumb", array(), "array");
                echo "\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                echo $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "cart", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"></div>
\t\t\t\t\t\t\t";
                // line 98
                $context["total_gallery"] = 3;
                // line 99
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "image_galleries", array()));
                foreach ($context['_seq'] as $context["number_gallery"] => $context["image_gallery"]) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["number_gallery"] < (isset($context["total_gallery"]) ? $context["total_gallery"] : null))) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t<div class=\"item-img\" data-src=\"";
                        echo $this->getAttribute($context["image_gallery"], "thumb", array());
                        echo "\"><img class=\"lazyload \" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["image_gallery"], "cart", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['number_gallery'], $context['image_gallery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t\t<div class=\"product-image-container\">
\t\t\t\t\t
\t\t\t\t\t\t<a href=\"";
            // line 109
            echo $this->getAttribute($context["product"], "href", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \">
\t\t\t\t\t\t\t<img  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 110
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\"  title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"lazyload img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
            // line 115
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                // line 116
                echo "\t\t\t\t\t
\t\t\t\t\t\t";
                // line 117
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "so-megastore/template/soconfig/listing.twig", 117)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                // line 118
                echo "\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 121
            if (($this->getAttribute($context["product"], "quantity", array()) == 0)) {
                // line 122
                echo "\t\t\t\t\t\t<div class=\"label-stock label label-success \">";
                echo $this->getAttribute($context["product"], "stock_status", array());
                echo "</div> 
\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 125
            if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                echo " 
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 128
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                    // line 130
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 132
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div> 
\t\t\t\t\t";
            }
            // line 135
            echo " 

\t\t\t\t\t";
            // line 138
            echo "\t\t\t\t\t";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "right")) {
                // line 139
                echo "\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--right";
                // line 140
                echo "\t\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 141
                echo "\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--static";
                // line 142
                echo "\t\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "center")) {
                // line 143
                echo "\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--center";
                // line 144
                echo "\t\t\t\t\t";
            } else {
                // line 145
                echo "\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--left";
                // line 146
                echo "\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t<div class=\"button-group ";
            echo (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null);
            echo "\">
\t\t\t\t\t\t";
            // line 148
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method") && ((isset($context["cartinfo"]) ? $context["cartinfo"] : null) != "bottom"))) {
                // line 149
                echo "\t\t\t\t\t\t\t 
 ";
                // line 150
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                    echo " 
 ";
                    // line 151
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array()) == "0"))) {
                        echo " 
 ";
                        // line 152
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                            echo " 
 <button class=\"addToCart btn-button callforprice\" type=\"button\" data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 153
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\"><i class=\"fa fa-phone\"></i><span>";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</span></button> 
 ";
                        } else {
                            // line 154
                            echo " 
 <button class=\"addToCart btn-button\" type=\"button\" title=\"";
                            // line 155
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\" style=\"cursor: default; background-color: #eee; color: #ccc;\"><i class=\"fa fa-shopping-basket\"></i><span>";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span></button> 
 ";
                        }
                        // line 156
                        echo " 
 ";
                    } else {
                        // line 157
                        echo " 
 ";
                        // line 158
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                            echo " 
 <button class=\"addToCart btn-button callforprice\" type=\"button\" data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 159
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\"><i class=\"fa fa-phone\"></i><span>";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</span></button> 
 ";
                        }
                        // line 160
                        echo " 
 ";
                    }
                    // line 161
                    echo " 
 ";
                } else {
                    // line 162
                    echo " 
 <button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    // line 163
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><i class=\"fa fa-shopping-basket\"></i><span>";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button> 
 ";
                }
                // line 164
                echo " 
 \t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                // line 168
                echo "\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i><span>";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></button>
\t\t\t\t\t\t";
            }
            // line 169
            echo " 

\t\t\t\t\t\t";
            // line 171
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                // line 172
                echo "\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-random\"></i><span>";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></button>
\t\t\t\t\t\t";
            }
            // line 173
            echo " 

\t\t\t\t\t\t";
            // line 175
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                // line 176
                echo "\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                echo "\" data-fancybox-type=\"iframe\"  href=\"";
                echo $this->getAttribute($context["product"], "href_quickview", array());
                echo "\"> <i class=\"fa fa-eye\"></i><span>";
                echo (isset($context["text_quickview"]) ? $context["text_quickview"] : null);
                echo "</span> </a>
\t\t\t\t\t\t";
            }
            // line 177
            echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t<h4><a href=\"";
            // line 182
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>
\t\t\t\t\t<div class=\"rate-history\">
\t\t\t\t\t\t";
            // line 184
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
                // line 187
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 188
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 190
                        echo "   
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t";
                    }
                    // line 192
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"rating-num\"  href=\"";
                // line 196
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" rel=\"nofollow\" target=\"_blank\" >";
                echo $this->getAttribute($context["product"], "reviews", array());
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 199
            echo "
\t\t\t\t\t\t";
            // line 200
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_order"), "method")) {
                // line 201
                echo "\t\t\t\t\t\t<div class=\"order-num\">";
                echo $this->getAttribute($context["product"], "orders", array());
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t";
            // line 207
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t";
                // line 209
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"price-new\"> 
 ";
                    // line 211
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                        echo " 
 ";
                        // line 212
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                            echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 213
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</a> 
 ";
                        }
                        // line 214
                        echo " 
 ";
                    } else {
                        // line 215
                        echo " 
 ";
                        // line 216
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " 
 ";
                    }
                    // line 217
                    echo " 
  </span>
\t\t\t\t\t\t";
                } else {
                    // line 219
                    echo "   
\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 220
                    echo $this->getAttribute($context["product"], "special", array());
                    echo " </span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 221
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 224
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t<p>";
            // line 226
            echo $this->getAttribute($context["product"], "description", array());
            echo " </p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 228
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method") && ((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom"))) {
                // line 229
                echo "\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t</div>

\t\t\t\t";
            // line 233
            if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method"))) {
                // line 234
                echo "\t\t\t\t<div class=\"list-block\">

\t\t\t\t\t";
                // line 236
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_status"), "method")) {
                    // line 237
                    echo "\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><i class=\"fa fa-shopping-basket\"></i></button>
\t\t\t\t\t";
                }
                // line 238
                echo " 

\t\t\t\t\t";
                // line 240
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_wishlist_status"), "method")) {
                    // line 241
                    echo "\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t";
                }
                // line 242
                echo " 

\t\t\t\t\t";
                // line 244
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_Compare_status"), "method")) {
                    // line 245
                    echo "\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t\t\t";
                }
                // line 246
                echo " 

\t\t\t\t\t";
                // line 251
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 252
            echo " 
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t\t";
            // line 258
            echo "\t
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "</div>

";
        // line 263
        echo "<div class=\"product-filter product-filter-bottom filters-panel\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-left\">";
        // line 265
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-right\">";
        // line 266
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t</div>
</div>

<script type=\"text/javascript\"><!--
reinitView();

function reinitView() {

\t\$( '.product-card__gallery .item-img').hover(function() {
\t\t\$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
\t\tvar thumb_src = \$(this).attr(\"data-src\");
\t\t\$(this).closest('.product-item-container').find('img.img-responsive').attr(\"src\",thumb_src);
\t}); 

\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\$(this).parent().find('button').removeClass('active');
\t\t\$(this).addClass('active');
\t});\t
\t// Product List
\t\$('#list-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
\t\tlocalStorage.setItem('listview', 'list');
\t});

\t// Product Grid
\t\$('#grid-view').click(function() {
\t\tvar cols = \$('.left_column , .right_column ').length;

\t\t
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
\t\t
\t\tlocalStorage.setItem('listview', 'grid');
\t});

\t// Product Grid 2
\t\$('#grid-view-2').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-2');
\t});

\t// Product Grid 3
\t\$('#grid-view-3').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-3');
\t});

\t// Product Grid 4
\t\$('#grid-view-4').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-4');
\t});

\t// Product Grid 5
\t\$('#grid-view-5').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
\t\tlocalStorage.setItem('listview', 'grid-5');
\t});

\t// Product Table
\t\$('#table-view').click(function() {
\t\t\$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
\t\tlocalStorage.setItem('listview', 'table');
\t})

\t
\t";
        // line 332
        if ((isset($context["url_listview"]) ? $context["url_listview"] : null)) {
            // line 333
            echo "\t\tlocalStorage.setItem('listview', '";
            echo (isset($context["url_listview"]) ? $context["url_listview"] : null);
            echo "');
\t";
        } else {
            // line 335
            echo "\t\tif(localStorage.getItem('listview')== null) localStorage.setItem('listview', '";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_catalog_mode"), "method");
            echo "');
\t";
        }
        // line 337
        echo "
\tif (localStorage.getItem('listview') == 'table') {
\t\t\$('#table-view').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-2'){
\t\t\$('#grid-view-2').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-3'){
\t\t\$('#grid-view-3').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-4'){
\t\t\$('#grid-view-4').trigger('click');
\t} else if (localStorage.getItem('listview') == 'grid-5'){
\t\t\$('#grid-view-5').trigger('click');
\t} else {
\t\t\$('#list-view').trigger('click');
\t}
\t

}

//--></script> ";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/soconfig/listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 337,  851 => 335,  845 => 333,  843 => 332,  774 => 266,  770 => 265,  766 => 263,  762 => 260,  747 => 258,  740 => 252,  736 => 251,  732 => 246,  724 => 245,  722 => 244,  718 => 242,  710 => 241,  708 => 240,  704 => 238,  694 => 237,  692 => 236,  688 => 234,  686 => 233,  682 => 231,  670 => 229,  668 => 228,  663 => 226,  659 => 224,  654 => 221,  647 => 220,  644 => 219,  639 => 217,  634 => 216,  631 => 215,  627 => 214,  618 => 213,  614 => 212,  610 => 211,  605 => 209,  600 => 207,  594 => 203,  588 => 201,  586 => 200,  583 => 199,  575 => 196,  571 => 194,  564 => 192,  559 => 190,  552 => 188,  548 => 187,  542 => 184,  535 => 182,  528 => 177,  518 => 176,  516 => 175,  512 => 173,  502 => 172,  500 => 171,  496 => 169,  486 => 168,  483 => 167,  478 => 164,  467 => 163,  464 => 162,  460 => 161,  456 => 160,  447 => 159,  443 => 158,  440 => 157,  436 => 156,  429 => 155,  426 => 154,  417 => 153,  413 => 152,  409 => 151,  405 => 150,  402 => 149,  400 => 148,  395 => 147,  392 => 146,  389 => 145,  386 => 144,  383 => 143,  380 => 142,  377 => 141,  374 => 140,  371 => 139,  368 => 138,  364 => 135,  358 => 132,  352 => 130,  346 => 128,  341 => 125,  338 => 124,  332 => 122,  330 => 121,  327 => 120,  323 => 118,  321 => 117,  318 => 116,  315 => 115,  306 => 110,  300 => 109,  295 => 106,  291 => 104,  285 => 103,  275 => 101,  272 => 100,  267 => 99,  265 => 98,  257 => 97,  252 => 96,  249 => 95,  246 => 94,  243 => 93,  240 => 92,  237 => 91,  234 => 90,  232 => 89,  229 => 88,  227 => 87,  221 => 83,  204 => 82,  200 => 80,  190 => 74,  186 => 72,  180 => 71,  172 => 69,  164 => 67,  161 => 66,  157 => 65,  152 => 63,  146 => 59,  140 => 58,  132 => 55,  129 => 54,  121 => 52,  118 => 51,  114 => 50,  108 => 47,  97 => 39,  93 => 38,  85 => 33,  82 => 32,  73 => 29,  71 => 28,  68 => 27,  65 => 26,  61 => 25,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  44 => 18,  40 => 15,  36 => 14,  31 => 13,  28 => 12,  24 => 11,  19 => 10,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {#====  Variables url parameter ==== #}*/
/* {% if url_thumbgallery %} {% set thumbgallery = url_thumbgallery %}*/
/* {% else %} {% set thumbgallery = soconfig.get_settings('card_gallery') %}{% endif %}*/
/* */
/* {% if url_cartinfo %} {% set cartinfo = url_cartinfo %}*/
/* {% else %} {% set cartinfo = soconfig.get_settings('desktop_addcart_position') %}{% endif %}*/
/* */
/* */
/* {#==== filters panel Top==== #}*/
/* <div class="product-filter product-filter-top filters-panel">*/
/*   <div class="row">*/
/* 		<div class="col-sm-5 view-mode">*/
/* 			{% set category_route = soconfig.get_route() %}*/
/* 			*/
/* 			{% if (column_left or column_right ) and category_route =='product/category' %}*/
/* 				{% if url_asideType %} {% set btn_canvas = url_asideType %}*/
/* 				{% else %}{% set btn_canvas = soconfig.get_settings('catalog_col_type') %}*/
/* 				{% endif %}*/
/* */
/* 				{% set class_btn_canvas = (btn_canvas =='off_canvas') ? '' : 'hidden-lg hidden-md' %}*/
/* 				<a href="javascript:void(0)" class="open-sidebar {{class_btn_canvas}}"><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay "></div>*/
/* 			{% endif %}*/
/* 			<div class="list-view">*/
/* 				<div class="btn btn-gridview">{{text_gridview}}</div>*/
/* 				<button type="button" id="grid-view-2" class="btn btn-view hidden-sm hidden-xs">2</button>*/
/* 			  	<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>*/
/* 			  	<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>*/
/* 			  	<button type="button" id="grid-view-5" class="btn btn-view hidden-sm hidden-xs">5</button>*/
/* 				<button type="button" id="grid-view" class="btn btn-default grid hidden-lg hidden-md" title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>*/
/* 				<button type="button" id="list-view" class="btn btn-default list " title="{{ button_list }}"><i class="fa fa-bars"></i></button>*/
/* 				<button type="button" id="table-view" class="btn btn-view"><i class="fa fa-table" aria-hidden="true"></i></button>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* 		<div class="short-by-show form-inline text-right col-md-7 col-sm-7 col-xs-12">*/
/* 			<div class="form-group short-by">*/
/* 				<label class="control-label" for="input-sort">{{ text_sort }}</label>*/
/* 				<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 					*/
/* 					{% for sorts in sorts %}*/
/* 					{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 						<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 					{% else %}*/
/* 					*/
/* 					<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 					*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label class="control-label" for="input-limit">{{ text_limit }}</label>*/
/* 				<select id="input-limit" class="form-control" onchange="location = this.value;">*/
/* 					{% for limits in limits %}*/
/* 					{% if limits.value == limit %}*/
/* 					<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="form-group product-compare hidden-sm hidden-xs"><a href="{{ compare }}" id="compare-total" class="btn btn-default">{{ text_compare }}</a></div>*/
/* 		</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/* {#==== Product List|Grid ==== #}*/
/* */
/* <div class="products-list row nopadding-xs">*/
/* 	{% for  product in products %}*/
/* 	*/
/* 		<div class="product-layout ">*/
/* 			<div class="product-item-container">*/
/* 				<div class="left-block">*/
/* 					{% if thumbgallery   and product.image_galleries %}*/
/* */
/* 					{% if thumbgallery == 1 %}*/
/* 						{% set  class_thumbgallery = 'product-card__left' %}*/
/* 					{% elseif thumbgallery == 2 %}*/
/* 						{% set  class_thumbgallery = 'product-card__right' %}*/
/* 					{% else %}*/
/* 						{% set  class_thumbgallery = 'product-card__bottom' %}*/
/* 					{% endif %}*/
/* 					<div class="product-card__gallery {{class_thumbgallery}}">*/
/* 						    <div class="item-img thumb-active" data-src="{{product.first_gallery['thumb']}}"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{product.first_gallery['cart']}}" alt="{{ product.name }}"></div>*/
/* 							{% set total_gallery = 3 %}*/
/* 							{% for number_gallery,image_gallery in product.image_galleries %}*/
/* 								{% if number_gallery < total_gallery %}*/
/* 								<div class="item-img" data-src="{{image_gallery.thumb}}"><img class="lazyload " data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{image_gallery.cart}}" alt="{{ product.name }}"></div>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="product-image-container">*/
/* 					*/
/* 						<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 							<img  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}"  title="{{ product.name }} " class="lazyload img-responsive" />*/
/* 						</a>*/
/* 					</div>*/
/* 					*/
/* 					{#===== Show CountDown Product =======#}*/
/* 					{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 					*/
/* 						{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 					*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.quantity== 0 %}*/
/* 						<div class="label-stock label label-success ">{{ product.stock_status}}</div> */
/* 					{% endif %}*/
/* 					*/
/* 					{% if product.price  and  product.special  %} */
/* 					<div class="box-label">*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						*/
/* 					</div> */
/* 					{% endif %} */
/* */
/* 					{#=======Show Group_cart_info ======= #}*/
/* 					{% if cartinfo == 'right' %}*/
/* 						{% set class_cart_info = 'cartinfo--right' %}*/
/* 					{% elseif cartinfo == 'bottom' %}*/
/* 						{% set class_cart_info = 'cartinfo--static' %}*/
/* 					{% elseif cartinfo == 'center' %}*/
/* 						{% set class_cart_info = 'cartinfo--center' %}*/
/* 					{% else %}*/
/* 						{% set class_cart_info = 'cartinfo--left' %}*/
/* 					{% endif %}*/
/* 					<div class="button-group {{class_cart_info}}">*/
/* 						{% if soconfig.get_settings('desktop_addcart_status') and (cartinfo != 'bottom') %}*/
/* 							 */
/*  {% if (cfp_setting.module_so_call_for_price_status and product.price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_hide_cart is defined and cfp_setting.module_so_call_for_price_hide_cart == '0' %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <button class="addToCart btn-button callforprice" type="button" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}"><i class="fa fa-phone"></i><span>{{ text_price_0 }}</span></button> */
/*  {% else %} */
/*  <button class="addToCart btn-button" type="button" title="{{ button_cart}}" style="cursor: default; background-color: #eee; color: #ccc;"><i class="fa fa-shopping-basket"></i><span>{{ button_cart }}</span></button> */
/*  {% endif %} */
/*  {% else %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <button class="addToCart btn-button callforprice" type="button" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}"><i class="fa fa-phone"></i><span>{{ text_price_0 }}</span></button> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% else %} */
/*  <button class="addToCart btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-basket"></i><span>{{ button_cart }}</span></button> */
/*  {% endif %} */
/*  							*/
/* 						{% endif %}*/
/* 						{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 						<button class="wishlist btn-button" type="button" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i><span>{{ button_wishlist }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 						<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i><span>{{ button_compare }}</span></button>*/
/* 						{% endif %} */
/* */
/* 						{% if soconfig.get_settings('quick_status') %}*/
/* 							<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ product.href_quickview }}"> <i class="fa fa-eye"></i><span>{{ text_quickview}}</span> </a>*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="right-block">*/
/* 					<h4><a href="{{ product.href }}">{{ product.name }} </a></h4>*/
/* 					<div class="rate-history">*/
/* 						{% if soconfig.get_settings('rating_status') %} */
/* 						<div class="ratings">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 							{% if product.rating < i %} */
/* 								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% else %}   */
/* 								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 							{% endif %} */
/* 							{% endfor %}*/
/* */
/* 							</div>*/
/* 							<a class="rating-num"  href="{{ product.href }}" rel="nofollow" target="_blank" >{{product.reviews}}</a>*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if soconfig.get_settings('product_order') %}*/
/* 						<div class="order-num">{{product.orders}}</div>*/
/* 						{% endif %}*/
/* 						*/
/* 					</div>*/
/* */
/* 					*/
/* 					{% if product.price %} */
/* 					<div class="price">*/
/* 						{% if not product.special %} */
/* 							<span class="price-new"> */
/*  {% if (cfp_setting.module_so_call_for_price_status and product.price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '0' %} */
/*  <a data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" href="javascript:;" class="callforprice" style="color: #ff0000; font-weight: bold;"><i class="fa fa-phone"></i> {{ text_price_0 }}</a> */
/*  {% endif %} */
/*  {% else %} */
/*  {{ product.price }} */
/*  {% endif %} */
/*   </span>*/
/* 						{% else %}   */
/* 							<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 						{% endif %} */
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="description">*/
/* 						<p>{{ product.description }} </p>*/
/* 					</div>*/
/* 					{% if soconfig.get_settings('desktop_addcart_status') and (cartinfo == 'bottom') %}*/
/* 							<button class="addToCart btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span>{{ button_cart }}</span></button>							*/
/* 						{% endif %}*/
/* 				</div>*/
/* */
/* 				{% if soconfig.get_settings('desktop_addcart_status') or soconfig.get_settings('desktop_wishlist_status') or  soconfig.get_settings('desktop_Compare_status') %}*/
/* 				<div class="list-block">*/
/* */
/* 					{% if soconfig.get_settings('desktop_addcart_status') %}*/
/* 					<button class="addToCart btn-button" type="button" title="{{ button_cart }}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-basket"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_wishlist_status') %}*/
/* 					<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{% if soconfig.get_settings('desktop_Compare_status') %}*/
/* 					<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i></button>*/
/* 					{% endif %} */
/* */
/* 					{# {% if soconfig.get_settings('quick_status') %}*/
/* 						<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ our_url.link('extension/soconfig/quickview','product_id='~product.product_id) }}"> <i class="fa fa-eye"></i></a>*/
/* 					{% endif %}  #}*/
/* 				</div>*/
/* 				{% endif %} */
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		{# ====End Clearfix fluid grid layout =======#}*/
/* 	*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {#==== filters panel Bottom==== #}*/
/* <div class="product-filter product-filter-bottom filters-panel">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* 		<div class="col-sm-6 text-right">{{ results }}</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* reinitView();*/
/* */
/* function reinitView() {*/
/* */
/* 	$( '.product-card__gallery .item-img').hover(function() {*/
/* 		$(this).addClass('thumb-active').siblings().removeClass('thumb-active');*/
/* 		var thumb_src = $(this).attr("data-src");*/
/* 		$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);*/
/* 	}); */
/* */
/* 	$('.view-mode .list-view button').bind("click", function() {*/
/* 		$(this).parent().find('button').removeClass('active');*/
/* 		$(this).addClass('active');*/
/* 	});	*/
/* 	// Product List*/
/* 	$('#list-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');*/
/* 		localStorage.setItem('listview', 'list');*/
/* 	});*/
/* */
/* 	// Product Grid*/
/* 	$('#grid-view').click(function() {*/
/* 		var cols = $('.left_column , .right_column ').length;*/
/* */
/* 		*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');*/
/* 		*/
/* 		localStorage.setItem('listview', 'grid');*/
/* 	});*/
/* */
/* 	// Product Grid 2*/
/* 	$('#grid-view-2').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-2');*/
/* 	});*/
/* */
/* 	// Product Grid 3*/
/* 	$('#grid-view-3').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-3');*/
/* 	});*/
/* */
/* 	// Product Grid 4*/
/* 	$('#grid-view-4').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-4');*/
/* 	});*/
/* */
/* 	// Product Grid 5*/
/* 	$('#grid-view-5').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');*/
/* 		localStorage.setItem('listview', 'grid-5');*/
/* 	});*/
/* */
/* 	// Product Table*/
/* 	$('#table-view').click(function() {*/
/* 		$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');*/
/* 		localStorage.setItem('listview', 'table');*/
/* 	})*/
/* */
/* 	*/
/* 	{% if url_listview %}*/
/* 		localStorage.setItem('listview', '{{url_listview}}');*/
/* 	{% else %}*/
/* 		if(localStorage.getItem('listview')== null) localStorage.setItem('listview', '{{soconfig.get_settings('product_catalog_mode')}}');*/
/* 	{% endif %}*/
/* */
/* 	if (localStorage.getItem('listview') == 'table') {*/
/* 		$('#table-view').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-2'){*/
/* 		$('#grid-view-2').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-3'){*/
/* 		$('#grid-view-3').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-4'){*/
/* 		$('#grid-view-4').trigger('click');*/
/* 	} else if (localStorage.getItem('listview') == 'grid-5'){*/
/* 		$('#grid-view-5').trigger('click');*/
/* 	} else {*/
/* 		$('#list-view').trigger('click');*/
/* 	}*/
/* 	*/
/* */
/* }*/
/* */
/* //--></script> */
