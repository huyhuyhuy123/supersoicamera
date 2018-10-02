<?php

/* so-megastore/template/product/product.twig */
class __TwigTemplate_f0eb2d5ddde0d31753f282964c37929fcd68e3a7893d2f1b45b777601771679a extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

";
        // line 4
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/breadcrumbs.twig"), "so-megastore/template/product/product.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 7
        if ((isset($context["url_asidePosition"]) ? $context["url_asidePosition"] : null)) {
            $context["col_position"] = (isset($context["url_asidePosition"]) ? $context["url_asidePosition"] : null);
        } else {
            // line 8
            $context["col_position"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_position"), "method");
        }
        // line 9
        echo "
";
        // line 10
        if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
            echo " ";
            $context["col_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
        } else {
            // line 11
            $context["col_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["url_productGallery"]) ? $context["url_productGallery"] : null)) {
            echo " ";
            $context["productGallery"] = (isset($context["url_productGallery"]) ? $context["url_productGallery"] : null);
        } else {
            // line 14
            $context["productGallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "thumbnails_position"), "method");
        }
        // line 15
        echo "
";
        // line 16
        if ((isset($context["url_sidebarsticky"]) ? $context["url_sidebarsticky"] : null)) {
            echo " ";
            $context["sidebar_sticky"] = (isset($context["url_sidebarsticky"]) ? $context["url_sidebarsticky"] : null);
        } else {
            // line 17
            echo " ";
            $context["sidebar_sticky"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_sidebar_sticky"), "method");
        }
        // line 18
        echo "
";
        // line 19
        $context["desktop_canvas"] = ((((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) ? ("desktop-offcanvas") : (""));
        // line 20
        echo "
<div class=\"content-main container product-detail  ";
        // line 21
        echo (isset($context["desktop_canvas"]) ? $context["desktop_canvas"] : null);
        echo "\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 25
        echo "
\t\t";
        // line 26
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "outside")) {
            // line 27
            echo "\t\t\t";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
\t\t\t
\t\t\t";
            // line 29
            if (((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) {
                // line 30
                echo "\t\t\t\t";
                $context["class_pos"] = "col-sm-12";
                // line 31
                echo "\t    \t";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 32
                echo "\t    \t\t";
                $context["class_pos"] = "col-md-6 col-xs-12 fluid-allsidebar";
                // line 33
                echo "\t\t    ";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 34
                echo "\t\t    \t";
                $context["class_pos"] = "col-md-9 col-sm-12 col-xs-12 fluid-sidebar";
                // line 35
                echo "\t\t    ";
            } else {
                // line 36
                echo "\t\t    \t";
                $context["class_pos"] = "col-sm-12";
                // line 37
                echo "\t\t    ";
            }
            // line 38
            echo "\t\t";
        } else {
            // line 39
            echo "\t\t\t";
            $context["class_pos"] = "col-sm-12";
            // line 40
            echo "\t\t";
        }
        // line 41
        echo "\t\t";
        // line 42
        echo "    \t
\t\t<div id=\"content\" class=\"product-view ";
        // line 43
        echo (isset($context["class_pos"]) ? $context["class_pos"] : null);
        echo "\"> 
\t\t
\t\t";
        // line 46
        echo "\t\t";
        if (((isset($context["productGallery"]) ? $context["productGallery"] : null) == "grid")) {
            // line 47
            echo "\t\t\t";
            $context["class_left_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 48
            echo "\t\t\t";
            $context["class_right_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 49
            echo "\t\t";
        } elseif (((isset($context["productGallery"]) ? $context["productGallery"] : null) == "list")) {
            // line 50
            echo "\t\t\t";
            $context["class_left_gallery"] = "col-md-5 col-sm-12 col-xs-12";
            // line 51
            echo "\t\t\t";
            $context["class_right_gallery"] = "col-md-7 col-sm-12 col-xs-12";
            // line 52
            echo "\t\t";
        } elseif (((isset($context["productGallery"]) ? $context["productGallery"] : null) == "left")) {
            // line 53
            echo "\t\t\t";
            $context["class_left_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 54
            echo "\t\t\t";
            $context["class_right_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 55
            echo "\t\t\t";
        } elseif (((isset($context["productGallery"]) ? $context["productGallery"] : null) == "bottom")) {
            // line 56
            echo "\t\t";
            $context["class_left_gallery"] = "col-md-5 col-sm-12 col-xs-12";
            // line 57
            echo "\t\t\t";
            $context["class_right_gallery"] = "col-md-7 col-sm-12 col-xs-12";
            // line 58
            echo "\t\t";
        } else {
            // line 59
            echo "\t\t\t";
            $context["class_left_gallery"] = "col-md-12 col-sm-12 col-xs-12";
            // line 60
            echo "\t\t\t";
            $context["class_right_gallery"] = "col-md-12 col-sm-12 col-xs-12 col-gallery-slider";
            // line 61
            echo "\t\t";
        }
        // line 62
        echo "
\t\t";
        // line 64
        echo "\t\t";
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 65
            echo "\t\t\t";
            $context["class_canvas"] = ((((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
            // line 66
            echo "\t\t\t<a href=\"javascript:void(0)\" class=\" open-sidebar ";
            echo (isset($context["class_canvas"]) ? $context["class_canvas"] : null);
            echo "\"><i class=\"fa fa-bars\"></i>";
            echo (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null);
            echo "</a>
\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t";
        }
        // line 69
        echo "

\t\t<div class=\"content-product-mainheader clearfix\"> 
\t\t\t<div class=\"row\">\t
\t\t\t";
        // line 74
        echo "\t\t\t<div class=\"content-product-left  ";
        echo (isset($context["class_left_gallery"]) ? $context["class_left_gallery"] : null);
        echo "\" >
\t\t\t\t";
        // line 75
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 76
            echo "\t\t\t\t\t<div class=\"so-loadeding\" ></div>
\t\t\t\t\t";
            // line 78
            echo "\t\t\t\t\t";
            if (((isset($context["productGallery"]) ? $context["productGallery"] : null) == "left")) {
                // line 79
                echo "\t\t\t\t\t \t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/product/gallery/gallery-left.twig"), "so-megastore/template/product/product.twig", 79)->display($context);
                // line 80
                echo "
\t\t\t\t\t";
            } elseif ((            // line 81
(isset($context["productGallery"]) ? $context["productGallery"] : null) == "bottom")) {
                // line 82
                echo "\t\t\t\t\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/product/gallery/gallery-bottom.twig"), "so-megastore/template/product/product.twig", 82)->display($context);
                // line 83
                echo "
\t\t\t\t\t";
            } elseif ((            // line 84
(isset($context["productGallery"]) ? $context["productGallery"] : null) == "grid")) {
                // line 85
                echo "\t\t\t\t\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/product/gallery/gallery-grid.twig"), "so-megastore/template/product/product.twig", 85)->display($context);
                // line 86
                echo "
\t\t\t\t\t";
            } elseif ((            // line 87
(isset($context["productGallery"]) ? $context["productGallery"] : null) == "list")) {
                // line 88
                echo "\t\t\t\t\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/product/gallery/gallery-list.twig"), "so-megastore/template/product/product.twig", 88)->display($context);
                // line 89
                echo "
\t\t\t\t\t";
            } elseif ((            // line 90
(isset($context["productGallery"]) ? $context["productGallery"] : null) == "slider")) {
                // line 91
                echo "\t\t\t\t\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/product/gallery/gallery-slider.twig"), "so-megastore/template/product/product.twig", 91)->display($context);
                // line 92
                echo "\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t";
        }
        // line 94
        echo "\t\t\t</div>
        \t";
        // line 96
        echo "
\t\t\t";
        // line 98
        echo "\t\t\t<div class=\"content-product-right ";
        echo (isset($context["class_right_gallery"]) ? $context["class_right_gallery"] : null);
        echo "\" itemprop=\"offerDetails\" itemscope itemtype=\"http://schema.org/Product\">

\t\t\t\t<div class=\"title-product\">
\t\t\t\t\t\t <h1 itemprop=\"name\">";
        // line 101
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 104
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 105
            echo "\t\t\t\t\t";
            // line 106
            echo "\t\t\t\t\t<div class=\"box-review\"  itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
\t\t\t\t\t\t";
            // line 107
            if ((isset($context["count_reviews"]) ? $context["count_reviews"] : null)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\">
\t\t\t\t\t\t\t\t<meta itemprop=\"ratingCount\" content=\"";
                // line 109
                echo (isset($context["count_reviews"]) ? $context["count_reviews"] : null);
                echo "\">
\t\t\t\t\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 110
                echo (isset($context["count_reviews"]) ? $context["count_reviews"] : null);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 116
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 117
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"reviews_button\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 120
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
\t\t\t\t\t\t";
            // line 121
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_order"), "method")) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t<span class=\"order-num\">";
                echo (isset($context["orders"]) ? $context["orders"] : null);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 127
        echo "
\t\t\t\t";
        // line 128
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 129
            echo "\t\t\t\t\t";
            // line 130
            echo "\t\t\t\t\t<div class=\"product_page_price price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t\t\t";
            // line 131
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 132
                echo "\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t<span itemprop=\"price\" content=\"";
                // line 133
                echo (isset($context["price_value"]) ? $context["price_value"] : null);
                echo "\" id=\"price-old\"> 
 ";
                // line 134
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ((isset($context["price_0"]) ? $context["price_0"] : null) <= 0))) {
                    echo " 
 ";
                    // line 135
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                        echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                        // line 136
                        echo (isset($context["base"]) ? $context["base"] : null);
                        echo "index.php?route=extension/module/so_call_for_price&product_id=";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                        echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold; font-size: 18px;\"><i class=\"fa fa-phone\" style=\"font-size: 18px;\"></i> ";
                        echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                        echo "</a> 
 ";
                    }
                    // line 137
                    echo " 
 ";
                } else {
                    // line 138
                    echo " 
  
 ";
                    // line 140
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ((isset($context["price_0"]) ? $context["price_0"] : null) <= 0))) {
                        echo " 
 ";
                        // line 141
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                            echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 142
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                            echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</a> 
 ";
                        }
                        // line 143
                        echo " 
 ";
                    } else {
                        // line 144
                        echo " 
 ";
                        // line 145
                        echo (isset($context["price"]) ? $context["price"] : null);
                        echo " 
 ";
                    }
                    // line 146
                    echo " 
  
 ";
                }
                // line 148
                echo " 
 </span>
\t\t\t\t\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 150
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "\" />
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t<span itemprop=\"price\" content=\"";
                // line 156
                echo (isset($context["special_value"]) ? $context["special_value"] : null);
                echo "\" id=\"price-special\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 157
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t   <span class=\"price-old\" id=\"price-old\"> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t   </span>
\t\t\t\t\t\t   
\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 165
            if (((isset($context["special"]) ? $context["special"] : null) && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method"))) {
                echo " 
\t\t\t\t\t\t";
                // line 167
                echo "\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t ";
                // line 168
                echo (isset($context["discount"]) ? $context["discount"] : null);
                echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            }
            // line 170
            echo " 

\t\t\t\t\t\t 
 ";
            // line 173
            if ((((isset($context["tax"]) ? $context["tax"] : null) && $this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array())) && ((isset($context["price_0"]) ? $context["price_0"] : null) > 0))) {
                echo " 
 
\t\t\t\t\t\t\t<div class=\"price-tax\"><span>";
                // line 175
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo "</span> <span id=\"price-tax\"> ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo " </span></div>
\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t

\t\t\t\t";
        // line 182
        if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
            echo " 
\t\t\t\t\t<ul class=\"list-unstyled text-success\">
\t\t\t\t\t";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                echo " 
\t\t\t\t\t\t<li><strong>";
                // line 185
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo " ";
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo " ";
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</strong> </li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 188
        echo " \t

\t\t\t\t<div class=\"product-box-desc\">
\t\t\t\t\t<div class=\"inner-box-desc\">

\t\t\t\t\t\t";
        // line 193
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 194
            echo "\t\t\t\t\t\t\t        <div class=\"brand\" itemprop=\"brand\" itemscope itemtype=\"http://schema.org/Brand\">
\t\t\t\t\t\t\t        <span>";
            // line 195
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " </span><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" itemprop=\"url\"><span itemprop=\"name\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo " </span></a></div>
\t\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 198
        if ((isset($context["model"]) ? $context["model"] : null)) {
            // line 199
            echo "\t\t\t\t\t\t<div class=\"model\"><span>";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo " </span> ";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 202
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 203
            echo "\t\t\t\t\t\t\t<div class=\"reward\"><span>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 205
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"stock\"><span>";
        // line 206
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</span> <i class=\"fa fa-check-square-o\"></i> ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</div>\t
\t\t\t\t\t</div>\t

\t\t\t\t\t";
        // line 209
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enablesold"), "method")) {
            // line 210
            echo "\t\t\t\t\t<div class=\"inner-box-sold \">
\t\t\t\t\t\t<div class=\"viewed\"><span>";
            // line 211
            echo (isset($context["text_viewed"]) ? $context["text_viewed"] : null);
            echo "</span> <span class=\"label label-primary\">";
            echo (isset($context["viewed"]) ? $context["viewed"] : null);
            echo "</span></div>\t
\t\t\t\t\t\t";
            // line 212
            if ((isset($context["sold"]) ? $context["sold"] : null)) {
                // line 213
                echo "\t\t\t\t\t\t<div class=\"sold\"><span>";
                echo (isset($context["text_sold_ready"]) ? $context["text_sold_ready"] : null);
                echo "</span> <span class=\"label label-success\"> ";
                echo (isset($context["sold"]) ? $context["sold"] : null);
                echo " </span></div>\t
\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t</div>\t
\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 218
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enablesizechart"), "method")) {
            // line 219
            echo "\t\t\t\t\t\t<a class=\"image-popup-sizechart\" href=\"image/";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "img_sizechart"), "method");
            echo "\" >";
            echo (isset($context["text_size_chart"]) ? $context["text_size_chart"] : null);
            echo " </a>\t
\t\t\t\t    ";
        }
        // line 221
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 224
        if ((isset($context["description_short"]) ? $context["description_short"] : null)) {
            // line 225
            echo "\t\t\t\t\t <div class=\"short_description form-group\" itemprop=\"description\">
\t\t\t\t\t\t<h3>";
            // line 226
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_overview"), "method");
            echo "</h3>
\t\t                ";
            // line 227
            echo (isset($context["description_short"]) ? $context["description_short"] : null);
            echo "       
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 230
        echo "
\t\t\t\t";
        // line 232
        echo "\t\t\t\t";
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && (isset($context["special_end_date"]) ? $context["special_end_date"] : null))) {
            // line 233
            echo "\t\t\t\t\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "so-megastore/template/product/product.twig", 233)->display(array_merge($context, array("product" => (isset($context["product"]) ? $context["product"] : null), "special_end_date" => (isset($context["special_end_date"]) ? $context["special_end_date"] : null))));
            // line 234
            echo "\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"product\">\t
\t\t\t\t\t";
        // line 238
        if ((isset($context["options"]) ? $context["options"] : null)) {
            echo " 
\t\t\t\t\t<h3>";
            // line 239
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
 
 ";
            // line 241
            if ((((isset($context["option_data"]) ? $context["option_data"] : null) && $this->getAttribute((isset($context["option_data"]) ? $context["option_data"] : null), "product_option_value", array(), "any", true, true)) && $this->getAttribute((isset($context["option_data"]) ? $context["option_data"] : null), "product_option_value", array()))) {
                echo " 
 <ul id=\"so-colorswatch-selector-";
                // line 242
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "\" class='so-colorswatch-productpage-icons'> 
 ";
                // line 243
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_data"]) ? $context["option_data"] : null), "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    echo " 
 <li class=\"option-item\"> 
 <a class=\"\" 
 data-product-option-value-id=\"";
                    // line 246
                    echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                    echo "\" 
 data-option-value-id=\"";
                    // line 247
                    echo $this->getAttribute($context["option_value"], "option_value_id", array());
                    echo "\" 
 data-color-image=\"";
                    // line 248
                    echo $this->getAttribute($context["option_value"], "color_image", array());
                    echo "\" 
 data-color-thumb-image=\"";
                    // line 249
                    echo $this->getAttribute($context["option_value"], "color_thumb_image", array());
                    echo "\" 
 style=\"width: ";
                    // line 250
                    echo (isset($context["width_product_page"]) ? $context["width_product_page"] : null);
                    echo "px; height: ";
                    echo (isset($context["height_product_page"]) ? $context["height_product_page"] : null);
                    echo "px; background-image: url('";
                    echo $this->getAttribute($context["option_value"], "image", array());
                    echo "')\"> 
 </a> 
 </li> 
 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo " 
 <li class=\"selected-option\"><span></span></li> 
 </ul> 
 <script type=\"text/javascript\"> 
 var \$window_width = \$(window).width(); 
 var ProductOptionId = '";
                // line 258
                echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                echo "'; 
 var default_image = \$('.large-image img').attr('src'); 
 jQuery(document).ready(function(\$) { 
 \$('#input-option";
                // line 261
                echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                echo "').parent().hide(); 
 
 \$('#input-option";
                // line 263
                echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                echo " option').each(function(){ 
 var text = \$(this).text().replace(/\\s{2,}/g, ' '); 
 var val = \$(this).attr('value'); 
 \$('.so-colorswatch-productpage-icons li a').each(function(index, el){ 
 if(\$(el).data('product-option-value-id')== val){ 
 \$(el).attr('title', text); 
 } 
 }) 
 }) 
 
 ";
                // line 273
                if (((isset($context["colorswatch_type"]) ? $context["colorswatch_type"] : null) == "click")) {
                    echo " 
 \$(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){ 
 e.preventDefault(); 
 var option_value_id = \$(this).children('a').data('product-option-value-id'); 
 var option_id = \$(this).children('a').data('option-value-id'); 
 
 if (\$(this).hasClass('checked')) { 
 \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); 
 \$(this).removeClass('checked'); 
 \$('#input-option";
                    // line 282
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val('').trigger('change'); 
 \$('.so-colorswatch-productpage-icons li.selected-option > span').html(''); 
 
 \$('.large-image img').attr('src', default_image); 
 } 
 else { 
 \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); 
 \$(this).removeClass('checked').addClass('checked'); 
 \$('#input-option";
                    // line 290
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val(option_value_id).trigger('change'); 
 \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title')); 
 
 if (\$(this).children('a').data('color-image') != '') { 
 \$('.large-image img').attr('src', \$(this).children('a').data('color-image')); 
 } 
 else { 
 \$('.large-image img').attr('src', default_image); 
 } 
 
 \$('#thumb-slider a.thumbnail').removeClass('active'); 
 } 
 }) 
 ";
                } else {
                    // line 303
                    echo " 
 if (\$window_width > 1199) { 
 \$('.so-colorswatch-productpage-icons li.option-item').hover(function(e){ 
 e.preventDefault(); 
 var option_value_id = \$(this).children('a').data('product-option-value-id'); 
 var option_id = \$(this).children('a').data('option-value-id'); 
 
 \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); 
 if (\$(this).hasClass('checked')) { 
 \$(this).removeClass('checked'); 
 \$('#input-option";
                    // line 313
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val('').trigger('change'); 
 \$('.large-image img').attr('src', default_image); 
 
 } 
 else { 
 \$(this).removeClass('checked').addClass('checked'); 
 \$('#input-option";
                    // line 319
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val(option_value_id).trigger('change'); 
 \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title')); 
 
 if (\$(this).children('a').data('color-image') != '') { 
 \$('.large-image img').attr('src', \$(this).children('a').data('color-image')); 
 } 
 else { 
 \$('.large-image img').attr('src', default_image); 
 } 
 \$('#thumb-slider a.thumbnail').removeClass('active'); 
 } 
 }); 
 } 
 else { 
 \$(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){ 
 e.preventDefault(); 
 var option_value_id = \$(this).children('a').data('product-option-value-id'); 
 var option_id = \$(this).children('a').data('option-value-id'); 
 
 \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); 
 if (\$(this).hasClass('checked')) { 
 \$(this).removeClass('checked'); 
 \$('#input-option";
                    // line 341
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val('').trigger('change'); 
 \$('.large-image img').attr('src', default_image); 
 
 } 
 else { 
 \$(this).removeClass('checked').addClass('checked'); 
 \$('#input-option";
                    // line 347
                    echo (isset($context["product_option_id"]) ? $context["product_option_id"] : null);
                    echo "').val(option_value_id).trigger('change'); 
 \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title')); 
 
 if (\$(this).children('a').data('color-image') != '') { 
 \$('.large-image img').attr('src', \$(this).children('a').data('color-image')); 
 } 
 else { 
 \$('.large-image img').attr('src', default_image); 
 } 
 \$('#thumb-slider a.thumbnail').removeClass('active'); 
 } 
 }) 
 } 
 ";
                }
                // line 360
                echo " 
 }) 
 </script> 
 ";
            }
            // line 363
            echo " 
 
\t\t\t\t\t";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 366
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 367
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 368
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 369
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 370
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control width50\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 371
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t";
                    // line 372
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 373
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 374
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 375
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
\t\t\t\t\t\t\t\t";
                        }
                        // line 377
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 382
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 383
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 384
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 385
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 386
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 387
                    $context["radio_style"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "radio_style"), "method");
                    // line 388
                    echo "\t\t\t\t\t\t\t\t";
                    $context["radio_type"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (" radio-type-button") : (""));
                    // line 389
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 390
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 391
                        $context["radio_image"] = (($this->getAttribute($context["option_value"], "image", array())) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 392
                        $context["radio_price"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (($this->getAttribute($context["option_value"], "price_prefix", array()) . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"radio ";
                        // line 394
                        echo ((isset($context["radio_image"]) ? $context["radio_image"] : null) . (isset($context["radio_type"]) ? $context["radio_type"] : null));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 396
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 397
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 398
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 399
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo " \" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "  ";
                            echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 400
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 401
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 402
                        if (($this->getAttribute($context["option_value"], "price", array()) && ((isset($context["radio_style"]) ? $context["radio_style"] : null) != "1"))) {
                            echo " (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo " )";
                        }
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 407
                    echo "\t
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
                    // line 409
                    if ((isset($context["radio_style"]) ? $context["radio_style"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 412
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t\t   \$('#input-option";
                        // line 413
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "  span').removeClass(\"active\");
\t\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
                    }
                    // line 418
                    echo " 

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 423
                echo "
\t\t\t\t\t\t";
                // line 424
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 425
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 426
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  \t<div id=\"input-option";
                    // line 427
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 428
                    $context["radio_style"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "radio_style"), "method");
                    // line 429
                    echo "\t\t\t\t\t\t\t\t";
                    $context["radio_type"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (" radio-type-button") : (""));
                    // line 430
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 431
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 432
                        $context["radio_image"] = (($this->getAttribute($context["option_value"], "image", array())) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 433
                        $context["radio_price"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (($this->getAttribute($context["option_value"], "price_prefix", array()) . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"checkbox  ";
                        // line 435
                        echo ((isset($context["radio_image"]) ? $context["radio_image"] : null) . (isset($context["radio_type"]) ? $context["radio_type"] : null));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 437
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 438
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 439
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 440
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo " \" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "  ";
                            echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 441
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 443
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 444
                        if (($this->getAttribute($context["option_value"], "price", array()) && ((isset($context["radio_style"]) ? $context["radio_style"] : null) != "1"))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            // line 445
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo " )
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 446
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 451
                    echo "\t
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
                    // line 453
                    if ((isset($context["radio_style"]) ? $context["radio_style"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 456
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
                    }
                    // line 461
                    echo " 

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 466
                echo "
\t\t\t\t\t\t";
                // line 467
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 468
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 469
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 470
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 473
                echo "
\t\t\t\t\t\t";
                // line 474
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 475
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 476
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  <textarea name=\"option[";
                    // line 477
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 480
                echo "
\t\t\t\t\t\t";
                // line 481
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 482
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  <label class=\"control-label\">";
                    // line 483
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  <button type=\"button\" id=\"button-upload";
                    // line 484
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t  <input type=\"hidden\" name=\"option[";
                    // line 485
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 488
                echo "
\t\t\t\t\t\t";
                // line 489
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 490
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 491
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  <div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 493
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 499
                echo "
\t\t\t\t\t\t";
                // line 500
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 501
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 502
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t  <div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 504
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 510
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 511
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 512
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 513
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 515
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 521
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "\t\t\t\t\t";
        }
        // line 524
        echo "
\t\t\t\t\t<div class=\"box-cart clearfix form-group\">
\t\t\t\t\t\t";
        // line 526
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 527
            echo "\t\t\t\t\t\t<h3>";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 530
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 531
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 532
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 534
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t  <div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 538
        echo "\t\t\t\t\t  
\t\t\t\t\t\t<div class=\"form-group box-info-product\">
\t\t\t\t\t\t\t<div class=\"option quantity\">
\t\t\t\t\t\t\t\t<div class=\"input-group quantity-control\">
\t\t\t\t\t\t\t\t\t  <span class=\"input-group-addon product_quantity_down fa fa-minus\"></span>
\t\t\t\t\t\t\t\t\t  <input class=\"form-control\" type=\"text\" name=\"quantity\" value=\"";
        // line 543
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 544
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t  <span class=\"input-group-addon product_quantity_up fa fa-plus\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"detail-action\">
\t\t\t\t\t\t\t\t";
        // line 550
        echo "\t\t\t\t\t\t\t\t<div class=\"cart\"> 
 ";
        // line 551
        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ((isset($context["price_0"]) ? $context["price_0"] : null) <= 0))) {
            echo " 
 ";
            // line 552
            if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array()) == "0"))) {
                echo " 
 ";
                // line 553
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                    echo " 
 <input type=\"button\" value=\"";
                    // line 554
                    echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                    echo "\" data-fancybox data-type=\"ajax\" data-src=\"";
                    echo (isset($context["base"]) ? $context["base"] : null);
                    echo "index.php?route=extension/module/so_call_for_price&product_id=";
                    echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-mega btn-lg callforprice\"> 
 ";
                } else {
                    // line 555
                    echo " 
 <input type=\"button\" value=\"";
                    // line 556
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-mega btn-lg\" style=\"cursor: default; background: #eee; color: #ccc; border: 1px solid #eee; text-shadow: none; box-shadow: none;\"> 
 ";
                }
                // line 557
                echo " 
 ";
            } else {
                // line 558
                echo " 
 ";
                // line 559
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                    echo " 
 <input type=\"button\" value=\"";
                    // line 560
                    echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                    echo "\" data-fancybox data-type=\"ajax\" data-src=\"";
                    echo (isset($context["base"]) ? $context["base"] : null);
                    echo "index.php?route=extension/module/so_call_for_price&product_id=";
                    echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-mega btn-lg \"> 
 ";
                }
                // line 561
                echo " 
 ";
            }
            // line 562
            echo " 
 ";
        } else {
            // line 563
            echo " 
 <input type=\"button\" value=\"";
            // line 564
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" id=\"button-cart\" class=\"btn btn-mega btn-lg\" /> 
 ";
        }
        // line 565
        echo " 
 </div>
\t\t\t\t\t\t\t\t<div class=\"add-to-links wish_comp\">
\t\t\t\t\t\t\t\t\t<ul class=\"blank\">
\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"wishlist.add(";
        // line 570
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ");\"><i class=\"fa fa-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"compare.add(";
        // line 573
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ");\"><i class=\"fa fa-retweet\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t";
        // line 582
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 583
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 585
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 587
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_page_button"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_socialshare"), "method"))) {
            // line 588
            echo "\t\t\t\t\t<div class=\"form-group social-share clearfix\">
\t\t\t\t\t\t";
            // line 589
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_socialshare"), "method")), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 592
        echo "\t\t\t\t\t<!-- Go to www.addthis.com/dashboard to customize your tools -->
\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5\"></script>
\t\t\t\t\t
\t\t\t\t\t ";
        // line 595
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 596
            echo "\t\t\t\t\t<div id=\"tab-tags\">
\t\t\t\t\t\t";
            // line 597
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
\t\t\t\t\t\t";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 599
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a class=\"btn btn-primary btn-sm\" href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>
\t\t\t\t\t\t";
                } else {
                    // line 600
                    echo " 
\t\t\t\t\t\t";
                    // line 601
                    if ( !twig_test_empty($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"))) {
                        // line 602
                        echo "\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm 22\" href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                        echo "</a> ";
                    }
                    // line 603
                    echo "\t\t\t\t\t\t";
                }
                // line 604
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 609
        echo "
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 614
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 618
        echo "\t\t";
        if ((isset($context["content_top"]) ? $context["content_top"] : null)) {
            // line 619
            echo "\t\t<div class=\"content-product-maintop form-group clearfix\">
\t\t\t";
            // line 620
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 623
        echo "\t\t<div class=\"content-product-mainbody clearfix row\">
\t\t\t
\t\t\t";
        // line 625
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "inside")) {
            // line 626
            echo "\t\t\t";
            // line 627
            echo "\t\t\t\t";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
\t\t\t    ";
            // line 628
            if (((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) {
                // line 629
                echo "\t\t\t\t\t";
                $context["class_left"] = "col-sm-12";
                // line 630
                echo "\t\t    \t";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 631
                echo "\t\t    \t\t";
                $context["class_left"] = "col-md-6 col-column3";
                // line 632
                echo "\t\t\t    ";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 633
                echo "\t\t\t    \t";
                $context["class_left"] = "col-md-9 col-sm-12 col-xs-12";
                // line 634
                echo "\t\t\t    ";
            } else {
                // line 635
                echo "\t\t\t    \t";
                $context["class_left"] = "col-sm-12";
                // line 636
                echo "\t\t\t    ";
            }
            // line 637
            echo "\t\t\t";
        } else {
            // line 638
            echo "\t\t\t\t";
            $context["class_left"] = "col-sm-12";
            // line 639
            echo "\t\t\t";
        }
        // line 640
        echo "
\t\t    <div class=\"content-product-content ";
        // line 641
        echo (isset($context["class_left"]) ? $context["class_left"] : null);
        echo "\">
\t\t\t\t<div class=\"content-product-midde clearfix\">
\t\t\t\t\t";
        // line 644
        echo "\t\t\t\t\t";
        $context["related_position"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "tabs_position"), "method") == 1)) ? ("vertical-tabs") : (""));
        // line 645
        echo "\t\t\t\t\t";
        $context["tabs_position"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "tabs_position"), "method");
        // line 646
        echo "\t\t\t\t\t";
        $context["showmore"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshowmore"), "method");
        // line 647
        echo "\t\t\t\t\t";
        if ((isset($context["showmore"]) ? $context["showmore"] : null)) {
            echo " ";
            $context["class_showmore"] = "showdown";
            // line 648
            echo "\t\t\t\t\t";
        } else {
            echo " ";
            $context["class_showmore"] = "showup";
            // line 649
            echo "\t\t\t\t\t";
        }
        // line 650
        echo "
\t\t\t\t\t<div class=\"producttab \">
\t\t\t\t\t\t<div class=\"tabsslider ";
        // line 652
        echo (isset($context["related_position"]) ? $context["related_position"] : null);
        echo " ";
        if (((isset($context["tabs_position"]) ? $context["tabs_position"] : null) == 1)) {
            echo " ";
            echo "vertical-tabs";
            echo " ";
        } else {
            echo " ";
            echo "horizontal-tabs";
            echo " ";
        }
        echo " col-xs-12\">
\t\t\t\t\t\t\t";
        // line 654
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["tabs_position"]) ? $context["tabs_position"] : null) == 2)) {
            // line 655
            echo "\t\t\t\t\t\t\t<ul class=\"nav nav-tabs font-sn\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-description\">";
            // line 656
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t         
\t\t\t\t\t            ";
            // line 659
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 660
                echo "\t\t\t\t\t           \t <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 662
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 663
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshipping"), "method")) {
                // line 664
                echo "\t\t\t\t\t\t\t\t <li><a href=\"#tab-contentshipping\" data-toggle=\"tab\">";
                echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 666
            echo "
\t\t\t\t\t\t\t\t";
            // line 667
            if ((isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null)) {
                // line 668
                echo "\t\t\t\t\t           \t <li><a href=\"#tab-customhtml\" data-toggle=\"tab\">";
                echo (isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 670
            echo "
\t\t\t\t\t\t\t\t";
            // line 671
            if ((isset($context["product_video"]) ? $context["product_video"] : null)) {
                // line 672
                echo "\t\t\t\t\t           \t <li><a class=\"thumb-video\" href=\"";
                echo (isset($context["product_video"]) ? $context["product_video"] : null);
                echo "\"><i class=\"fa fa-youtube-play fa-lg\"></i> ";
                echo (isset($context["tab_video"]) ? $context["tab_video"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 674
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t";
            // line 680
            echo "\t\t\t\t\t\t\t";
        } elseif (((isset($context["tabs_position"]) ? $context["tabs_position"] : null) == 1)) {
            // line 681
            echo "\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs col-lg-3 col-sm-4\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-description\">";
            // line 682
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t            ";
            // line 684
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 685
                echo "\t\t\t\t\t           \t <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 687
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 688
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshipping"), "method")) {
                // line 689
                echo "\t\t\t\t\t\t\t\t <li><a href=\"#tab-contentshipping\" data-toggle=\"tab\">";
                echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 691
            echo "
\t\t\t\t\t\t\t\t";
            // line 692
            if ((isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null)) {
                // line 693
                echo "\t\t\t\t\t           \t <li><a href=\"#tab-customhtml\" data-toggle=\"tab\">";
                echo (isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 695
            echo "\t\t\t\t\t            
\t\t\t\t\t\t\t\t";
            // line 696
            if ((isset($context["product_video"]) ? $context["product_video"] : null)) {
                // line 697
                echo "\t\t\t\t\t           \t <li><a class=\"thumb-video\" href=\"";
                echo (isset($context["product_video"]) ? $context["product_video"] : null);
                echo "\"><i class=\"fa fa-youtube-play fa-lg\"></i> ";
                echo (isset($context["tab_video"]) ? $context["tab_video"] : null);
                echo "</a></li>
\t\t\t\t\t            ";
            }
            // line 699
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 703
        echo "
\t\t\t\t\t\t\t<div class=\"tab-content ";
        // line 704
        if (((isset($context["tabs_position"]) ? $context["tabs_position"] : null) == 1)) {
            echo " ";
            echo "col-lg-9 col-sm-8";
            echo " ";
        }
        echo " col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 707
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 708
            echo "\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-property-title\" > ";
            echo (isset($context["text_product_specifics"]) ? $context["text_product_specifics"] : null);
            echo "</h3>
\t\t\t\t\t\t              \t<ul class=\"product-property-list util-clearfix\">
\t\t\t\t\t\t\t                ";
            // line 710
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 711
                echo "\t\t\t\t\t\t\t               
\t\t\t\t\t\t\t                \t
\t\t\t\t\t\t\t\t                ";
                // line 713
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 714
                    echo "\t\t\t\t\t\t\t\t                <li class=\"property-item\">
\t\t\t\t\t\t\t\t                  <span class=\"propery-title\">";
                    // line 715
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</span>
\t\t\t\t\t\t\t\t                  <span class=\"propery-des\">";
                    // line 716
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</span>
\t\t\t\t\t\t\t\t                </li>
\t\t\t\t\t\t\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 719
                echo "\t\t\t\t\t\t\t                 \t
\t\t\t\t\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 721
            echo "\t\t\t\t\t\t              \t</ul>
\t\t\t\t\t\t            ";
        }
        // line 723
        echo "
\t\t\t\t\t\t            <h3 class=\"product-property-title\" > ";
        // line 724
        echo (isset($context["text_product_description"]) ? $context["text_product_description"] : null);
        echo "</h3>
\t\t\t\t\t\t            <div id=\"collapse-description\" class=\"desc-collapse ";
        // line 725
        echo (isset($context["class_showmore"]) ? $context["class_showmore"] : null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 726
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t\t\t";
        // line 729
        if ((isset($context["showmore"]) ? $context["showmore"] : null)) {
            // line 730
            echo "\t\t\t\t\t\t\t\t\t<div class=\"button-toggle\">
\t\t\t\t\t\t\t\t         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
\t\t\t\t\t\t\t\t            <span class=\"toggle-more\">";
            // line 732
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
            echo " <i class=\"fa fa-angle-down\"></i></span> 
\t\t\t\t\t\t\t\t            <span class=\"toggle-less\">";
            // line 733
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t\t\t\t\t\t\t\t\t</a>        
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 737
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t

\t\t\t\t\t            ";
        // line 740
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 741
            echo "\t\t\t\t\t            <div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t            <form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t                <div id=\"review\"></div>
\t\t\t\t\t\t                <h3>";
            // line 744
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h3>
\t\t\t\t\t\t                ";
            // line 745
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 746
                echo "\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t                    <label class=\"control-label\" for=\"input-name\">";
                // line 748
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t\t\t                    <input type=\"text\" name=\"name\" value=\"";
                // line 749
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t                    <label class=\"control-label\" for=\"input-review\">";
                // line 754
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
\t\t\t\t\t\t                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t                    <div class=\"help-block\">";
                // line 756
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t                    <label class=\"control-label\">";
                // line 761
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
\t\t\t\t\t\t                    &nbsp;&nbsp;&nbsp; ";
                // line 762
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t                    &nbsp;";
                // line 772
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t                ";
                // line 774
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
\t\t\t\t\t\t                
\t\t\t\t\t\t                  <div class=\"pull-right\">
\t\t\t\t\t\t                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 777
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t               
\t\t\t\t\t\t                ";
            } else {
                // line 781
                echo "\t\t\t\t\t\t                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
\t\t\t\t\t\t                ";
            }
            // line 783
            echo "\t\t\t\t\t\t            </form>
\t\t\t\t\t            </div>
\t\t\t\t\t            ";
        }
        // line 786
        echo "
\t\t\t\t\t            ";
        // line 787
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshipping"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_contentshipping"), "method"))) {
            // line 788
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contentshipping\">
\t\t\t\t\t\t\t\t\t";
            // line 789
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_contentshipping"), "method")), "method");
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 792
        echo "
\t\t\t\t\t\t\t\t";
        // line 793
        if ((isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null)) {
            // line 794
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane \" id=\"tab-customhtml\">";
            echo (isset($context["product_tabcontent"]) ? $context["product_tabcontent"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 796
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 803
        echo "\t\t\t\t";
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "related_status"), "method"))) {
            // line 804
            echo "\t\t\t\t<div class=\"content-product-bottom clearfix\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t  <li class=\"active\"><a data-toggle=\"tab\" href=\"#product-related\">";
            // line 806
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</a></li> 
\t\t\t\t\t  <li><a data-toggle=\"tab\" href=\"#product-upsell\">";
            // line 807
            echo (isset($context["text_upsell"]) ? $context["text_upsell"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t  \t<div id=\"product-related\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t";
            // line 811
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/related_product.twig"), "so-megastore/template/product/product.twig", 811)->display($context);
            // line 812
            echo "\t\t\t\t\t  \t</div>
\t\t\t\t\t  \t<div id=\"product-upsell\" class=\"tab-pane fade\">
\t\t\t\t\t  \t\t";
            // line 815
            echo "\t\t\t\t\t  \t\t";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 821
        echo "
\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 825
        echo "\t\t\t";
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "inside")) {
            echo " ";
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo " ";
        }
        // line 826
        echo "
\t\t</div>
\t\t
    \t
    </div>
    ";
        // line 832
        echo "    ";
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "outside")) {
            echo " ";
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo " ";
        }
        // line 833
        echo "    </div>
</div>

<script type=\"text/javascript\">
<!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>

<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/soconfig/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t\$('.text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
 
 ";
        // line 881
        if ((isset($context["option_data"]) ? $context["option_data"] : null)) {
            echo " 
 if(ProductOptionId != undefined && ProductOptionId==i.replace('_', '-')){ 
 \$('.so-colorswatch-productpage-icons').after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>'); 
 } 
 ";
        }
        // line 885
        echo " 
 
\t\t\t\t\t\t
\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
\t\t\t\t
\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('#wrapper').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"fa fa-close close\" data-dismiss=\"alert\"></button></div>');
\t\t\t\t\$('#cart  .total-shopping-cart ').html(json['total'] );
\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t
\t\t\t\ttimer = setTimeout(function () {
\t\t\t\t\t\$('.alert').addClass('fadeOut');
\t\t\t\t}, 4000);
\t\t\t\t\$('.so-groups-sticky .popup-mycart .popup-content').load('index.php?route=extension/module/so_tools/info .popup-content .cart-header');
\t\t\t}
\t\t\t
\t\t
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});

//--></script> 

<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');
    \$('#review').load(this.href);
    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 1004
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1008
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//--></script>



<script type=\"text/javascript\"><!--
\t\$(document).ready(function() {
\t\t
\t\t// Initialize the sticky scrolling on an item 
\t\tsidebar_sticky = '";
        // line 1044
        echo (isset($context["sidebar_sticky"]) ? $context["sidebar_sticky"] : null);
        echo "';
\t\t
\t\tif(sidebar_sticky=='left'){
\t\t\t\$(\".left_column\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}else if (sidebar_sticky=='right'){
\t\t\t\$(\".right_column\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}else if (sidebar_sticky=='all'){
\t\t\t\$(\".content-aside\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}
\t\t

\t\t\$(\"#thumb-slider .image-additional\").each(function() {
\t\t\t\$(this).find(\"[data-index='0']\").addClass('active');
\t\t});
\t\t
\t\t\$('.product-options li.radio').click(function(){
\t\t\t\$(this).addClass(function() {
\t\t\t\tif(\$(this).hasClass(\"active\")) return \"\";
\t\t\t\treturn \"active\";
\t\t\t});
\t\t\t
\t\t\t\$(this).siblings(\"li\").removeClass(\"active\");
\t\t\t\$(this).parent().find('.selected-option').html('<span class=\"label label-success\">'+ \$(this).find('img').data('original-title') +'</span>');
\t\t})
\t\t
\t\t\$('.thumb-video').magnificPopup({
\t\t  type: 'iframe',
\t\t  iframe: {
\t\t\tpatterns: {
\t\t\t   youtube: {
\t\t\t\t  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
\t\t\t\t  id: 'v=', // String that splits URL in a two parts, second part should be %id%
\t\t\t\t  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
\t\t\t\t\t},
\t\t\t\t}
\t\t\t}
\t\t});
\t});
//--></script>


<script type=\"text/javascript\">
var ajax_price = function() {
\t\$.ajax({
\t\ttype: 'POST',
\t\turl: 'index.php?route=extension/soconfig/liveprice/index',
\t\tdata: \$('.product-detail input[type=\\'text\\'], .product-detail input[type=\\'hidden\\'], .product-detail input[type=\\'radio\\']:checked, .product-detail input[type=\\'checkbox\\']:checked, .product-detail select, .product-detail textarea'),
\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\tif (json.success) {
\t\t\t\tchange_price('#price-special', json.new_price.special);
\t\t\t\tchange_price('#price-tax', json.new_price.tax);
\t\t\t\tchange_price('#price-old', json.new_price.price);
\t\t\t}
\t\t}
\t});
}

var change_price = function(id, new_price) {\$(id).html(new_price);}
\$('.product-detail input[type=\\'text\\'], .product-detail input[type=\\'hidden\\'], .product-detail input[type=\\'radio\\'], .product-detail input[type=\\'checkbox\\'], .product-detail select, .product-detail textarea, .product-detail input[name=\\'quantity\\']').on('change', function() {
\tajax_price();
});
</script>

";
        // line 1117
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2449 => 1117,  2373 => 1044,  2334 => 1008,  2327 => 1004,  2206 => 885,  2198 => 881,  2148 => 833,  2141 => 832,  2134 => 826,  2127 => 825,  2122 => 821,  2112 => 815,  2108 => 812,  2106 => 811,  2099 => 807,  2095 => 806,  2091 => 804,  2088 => 803,  2080 => 796,  2074 => 794,  2072 => 793,  2069 => 792,  2063 => 789,  2060 => 788,  2058 => 787,  2055 => 786,  2050 => 783,  2044 => 781,  2035 => 777,  2029 => 774,  2024 => 772,  2011 => 762,  2007 => 761,  1999 => 756,  1994 => 754,  1986 => 749,  1982 => 748,  1978 => 746,  1976 => 745,  1972 => 744,  1967 => 741,  1965 => 740,  1960 => 737,  1953 => 733,  1949 => 732,  1945 => 730,  1943 => 729,  1937 => 726,  1933 => 725,  1929 => 724,  1926 => 723,  1922 => 721,  1915 => 719,  1906 => 716,  1902 => 715,  1899 => 714,  1895 => 713,  1891 => 711,  1887 => 710,  1881 => 708,  1879 => 707,  1869 => 704,  1866 => 703,  1860 => 699,  1852 => 697,  1850 => 696,  1847 => 695,  1841 => 693,  1839 => 692,  1836 => 691,  1830 => 689,  1828 => 688,  1825 => 687,  1819 => 685,  1817 => 684,  1812 => 682,  1809 => 681,  1806 => 680,  1799 => 674,  1791 => 672,  1789 => 671,  1786 => 670,  1780 => 668,  1778 => 667,  1775 => 666,  1769 => 664,  1767 => 663,  1764 => 662,  1758 => 660,  1756 => 659,  1750 => 656,  1747 => 655,  1744 => 654,  1730 => 652,  1726 => 650,  1723 => 649,  1718 => 648,  1713 => 647,  1710 => 646,  1707 => 645,  1704 => 644,  1699 => 641,  1696 => 640,  1693 => 639,  1690 => 638,  1687 => 637,  1684 => 636,  1681 => 635,  1678 => 634,  1675 => 633,  1672 => 632,  1669 => 631,  1666 => 630,  1663 => 629,  1661 => 628,  1656 => 627,  1654 => 626,  1652 => 625,  1648 => 623,  1642 => 620,  1639 => 619,  1636 => 618,  1631 => 614,  1625 => 609,  1613 => 604,  1610 => 603,  1603 => 602,  1601 => 601,  1598 => 600,  1588 => 599,  1584 => 598,  1580 => 597,  1577 => 596,  1575 => 595,  1570 => 592,  1564 => 589,  1561 => 588,  1559 => 587,  1555 => 585,  1549 => 583,  1547 => 582,  1535 => 573,  1529 => 570,  1522 => 565,  1515 => 564,  1512 => 563,  1508 => 562,  1504 => 561,  1493 => 560,  1489 => 559,  1486 => 558,  1482 => 557,  1475 => 556,  1472 => 555,  1461 => 554,  1457 => 553,  1453 => 552,  1449 => 551,  1446 => 550,  1438 => 544,  1434 => 543,  1427 => 538,  1421 => 534,  1410 => 532,  1406 => 531,  1402 => 530,  1395 => 527,  1393 => 526,  1389 => 524,  1386 => 523,  1379 => 521,  1366 => 515,  1359 => 513,  1352 => 512,  1350 => 511,  1347 => 510,  1334 => 504,  1327 => 502,  1320 => 501,  1318 => 500,  1315 => 499,  1302 => 493,  1295 => 491,  1288 => 490,  1286 => 489,  1283 => 488,  1275 => 485,  1267 => 484,  1263 => 483,  1256 => 482,  1254 => 481,  1251 => 480,  1239 => 477,  1233 => 476,  1226 => 475,  1224 => 474,  1221 => 473,  1209 => 470,  1203 => 469,  1196 => 468,  1194 => 467,  1191 => 466,  1184 => 461,  1175 => 456,  1169 => 453,  1165 => 451,  1154 => 446,  1147 => 445,  1143 => 444,  1139 => 443,  1135 => 441,  1126 => 440,  1122 => 439,  1116 => 438,  1110 => 437,  1105 => 435,  1100 => 433,  1096 => 432,  1090 => 431,  1087 => 430,  1084 => 429,  1082 => 428,  1078 => 427,  1074 => 426,  1067 => 425,  1065 => 424,  1062 => 423,  1055 => 418,  1046 => 413,  1042 => 412,  1036 => 409,  1032 => 407,  1014 => 402,  1010 => 401,  1007 => 400,  998 => 399,  994 => 398,  988 => 397,  982 => 396,  977 => 394,  972 => 392,  968 => 391,  962 => 390,  959 => 389,  956 => 388,  954 => 387,  950 => 386,  946 => 385,  939 => 384,  937 => 383,  934 => 382,  929 => 379,  922 => 377,  915 => 375,  913 => 374,  906 => 373,  902 => 372,  898 => 371,  892 => 370,  886 => 369,  879 => 368,  877 => 367,  874 => 366,  870 => 365,  866 => 363,  860 => 360,  843 => 347,  834 => 341,  809 => 319,  800 => 313,  788 => 303,  771 => 290,  760 => 282,  748 => 273,  735 => 263,  730 => 261,  724 => 258,  717 => 253,  703 => 250,  699 => 249,  695 => 248,  691 => 247,  687 => 246,  679 => 243,  675 => 242,  671 => 241,  666 => 239,  662 => 238,  657 => 235,  654 => 234,  651 => 233,  648 => 232,  645 => 230,  639 => 227,  635 => 226,  632 => 225,  630 => 224,  625 => 221,  617 => 219,  615 => 218,  612 => 217,  608 => 215,  600 => 213,  598 => 212,  592 => 211,  589 => 210,  587 => 209,  579 => 206,  576 => 205,  568 => 203,  566 => 202,  563 => 201,  555 => 199,  553 => 198,  550 => 197,  541 => 195,  538 => 194,  536 => 193,  529 => 188,  525 => 187,  513 => 185,  507 => 184,  502 => 182,  498 => 180,  493 => 177,  486 => 175,  481 => 173,  476 => 170,  470 => 168,  467 => 167,  463 => 165,  460 => 164,  450 => 157,  444 => 156,  440 => 154,  433 => 150,  429 => 148,  424 => 146,  419 => 145,  416 => 144,  412 => 143,  403 => 142,  399 => 141,  395 => 140,  391 => 138,  387 => 137,  378 => 136,  374 => 135,  370 => 134,  366 => 133,  363 => 132,  361 => 131,  358 => 130,  356 => 129,  354 => 128,  351 => 127,  346 => 124,  340 => 122,  338 => 121,  334 => 120,  330 => 118,  324 => 117,  317 => 116,  313 => 115,  308 => 112,  303 => 110,  299 => 109,  294 => 108,  292 => 107,  289 => 106,  287 => 105,  285 => 104,  279 => 101,  272 => 98,  269 => 96,  266 => 94,  263 => 93,  260 => 92,  257 => 91,  255 => 90,  252 => 89,  249 => 88,  247 => 87,  244 => 86,  241 => 85,  239 => 84,  236 => 83,  233 => 82,  231 => 81,  228 => 80,  225 => 79,  222 => 78,  219 => 76,  217 => 75,  212 => 74,  206 => 69,  197 => 66,  194 => 65,  191 => 64,  188 => 62,  185 => 61,  182 => 60,  179 => 59,  176 => 58,  173 => 57,  170 => 56,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  155 => 51,  152 => 50,  149 => 49,  146 => 48,  143 => 47,  140 => 46,  135 => 43,  132 => 42,  130 => 41,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  95 => 29,  89 => 27,  87 => 26,  84 => 25,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  61 => 16,  58 => 15,  55 => 14,  50 => 13,  47 => 12,  44 => 11,  39 => 10,  36 => 9,  33 => 8,  29 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* {#====  Loader breadcrumbs ==== #}*/
/* {% include theme_directory~'/template/soconfig/breadcrumbs.twig' %}*/
/* */
/* {#====  Variables url parameter ==== #}*/
/* {% if url_asidePosition %}{% set col_position = url_asidePosition %}*/
/* {% else %}{% set col_position = soconfig.get_settings('catalog_col_position') %}{% endif %}*/
/* */
/* {% if url_asideType %} {% set col_canvas = url_asideType %}*/
/* {% else %}{% set col_canvas = soconfig.get_settings('catalog_col_type') %}{% endif %}*/
/* */
/* {% if url_productGallery %} {% set productGallery = url_productGallery %}*/
/* {% else %}{% set productGallery = soconfig.get_settings('thumbnails_position') %}{% endif %}*/
/* */
/* {% if url_sidebarsticky %} {% set sidebar_sticky = url_sidebarsticky %}*/
/* {% else %} {% set sidebar_sticky = soconfig.get_settings('catalog_sidebar_sticky') %}{% endif %}*/
/* */
/* {% set desktop_canvas = col_canvas =='off_canvas' ? 'desktop-offcanvas' : '' %}*/
/* */
/* <div class="content-main container product-detail  {{desktop_canvas}}">*/
/* 	<div class="row">*/
/* 		*/
/* 		{#==== Column Left Outside ==== #}*/
/* */
/* 		{% if col_position== 'outside' %}*/
/* 			{{ column_left }}*/
/* 			*/
/* 			{% if col_canvas =='off_canvas' %}*/
/* 				{% set class_pos = 'col-sm-12' %}*/
/* 	    	{% elseif column_left and column_right %}*/
/* 	    		{% set class_pos = 'col-md-6 col-xs-12 fluid-allsidebar' %}*/
/* 		    {% elseif column_left or column_right %}*/
/* 		    	{% set class_pos = 'col-md-9 col-sm-12 col-xs-12 fluid-sidebar' %}*/
/* 		    {% else %}*/
/* 		    	{% set class_pos = 'col-sm-12' %}*/
/* 		    {% endif %}*/
/* 		{% else %}*/
/* 			{% set class_pos = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		{#==== End Column Outside ==== #}*/
/*     	*/
/* 		<div id="content" class="product-view {{class_pos}}"> */
/* 		*/
/* 		{#====  Product Gallery ==== #}*/
/* 		{% if productGallery =='grid' %}*/
/* 			{% set class_left_gallery  = 'col-md-6 col-sm-12 col-xs-12' %}*/
/* 			{% set class_right_gallery = 'col-md-6 col-sm-12 col-xs-12' %}*/
/* 		{% elseif productGallery =='list' %}*/
/* 			{% set class_left_gallery  = 'col-md-5 col-sm-12 col-xs-12' %}*/
/* 			{% set class_right_gallery = 'col-md-7 col-sm-12 col-xs-12' %}*/
/* 		{% elseif productGallery =='left' %}*/
/* 			{% set class_left_gallery  = 'col-md-6 col-sm-12 col-xs-12' %}*/
/* 			{% set class_right_gallery = 'col-md-6 col-sm-12 col-xs-12' %}*/
/* 			{% elseif productGallery =='bottom' %}*/
/* 		{% set class_left_gallery  = 'col-md-5 col-sm-12 col-xs-12' %}*/
/* 			{% set class_right_gallery = 'col-md-7 col-sm-12 col-xs-12' %}*/
/* 		{% else %}*/
/* 			{% set class_left_gallery  = 'col-md-12 col-sm-12 col-xs-12' %}*/
/* 			{% set class_right_gallery = 'col-md-12 col-sm-12 col-xs-12 col-gallery-slider' %}*/
/* 		{% endif %}*/
/* */
/* 		{#====  Button Sidebar canvas==== #}*/
/* 		{% if column_left or column_right %}*/
/* 			{% set class_canvas = col_canvas =='off_canvas' ? '' : 'hidden-lg hidden-md' %}*/
/* 			<a href="javascript:void(0)" class=" open-sidebar {{class_canvas}}"><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 			<div class="sidebar-overlay "></div>*/
/* 		{% endif %}*/
/* */
/* */
/* 		<div class="content-product-mainheader clearfix"> */
/* 			<div class="row">	*/
/* 			{#========== Product Left ============#}*/
/* 			<div class="content-product-left  {{ class_left_gallery }}" >*/
/* 				{% if images %}*/
/* 					<div class="so-loadeding" ></div>*/
/* 					{#==== Gallery -  Thumbnails ==== #}*/
/* 					{% if productGallery=='left' %}*/
/* 					 	{% include theme_directory~'/template/product/gallery/gallery-left.twig' %}*/
/* */
/* 					{% elseif productGallery=='bottom' %}*/
/* 						{% include theme_directory~'/template/product/gallery/gallery-bottom.twig' %}*/
/* */
/* 					{% elseif productGallery=='grid' %}*/
/* 						{% include theme_directory~'/template/product/gallery/gallery-grid.twig' %}*/
/* */
/* 					{% elseif productGallery=='list' %}*/
/* 						{% include theme_directory~'/template/product/gallery/gallery-list.twig' %}*/
/* */
/* 					{% elseif productGallery=='slider' %}*/
/* 						{% include theme_directory~'/template/product/gallery/gallery-slider.twig' %}*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 			</div>*/
/*         	{#========== //Product Left ============#}*/
/* */
/* 			{#========== Product Right ============#}*/
/* 			<div class="content-product-right {{ class_right_gallery }}" itemprop="offerDetails" itemscope itemtype="http://schema.org/Product">*/
/* */
/* 				<div class="title-product">*/
/* 						 <h1 itemprop="name">{{heading_title}}</h1>*/
/* 					</div>*/
/* 				*/
/* 				{% if review_status %}*/
/* 					{#======== Review - Rating ========== #}*/
/* 					<div class="box-review"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">*/
/* 						{% if count_reviews %}*/
/* 								<meta itemprop="ratingValue" content="{{rating}}">*/
/* 								<meta itemprop="ratingCount" content="{{count_reviews}}">*/
/* 								<meta itemprop="reviewCount" content="{{count_reviews}}">*/
/* 						{% endif %}*/
/* 						*/
/* 						<div class="rating">*/
/* 							<div class="rating-box">*/
/* 							{% for i in 1..5 %}*/
/* 								{% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/* 							{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 						<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>*/
/* 						{% if soconfig.get_settings('product_order') %}*/
/* 									<span class="order-num">{{orders}}</span>*/
/* 						{% endif %}*/
/* 					*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 				{% if price %}*/
/* 					{#========= Product - Price ========= #}*/
/* 					<div class="product_page_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/* 						{% if not special %}*/
/* 							<span class="price-new">*/
/* 								<span itemprop="price" content="{{ price_value }}" id="price-old"> */
/*  {% if (cfp_setting.module_so_call_for_price_status and price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '0' %} */
/*  <a data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" href="javascript:;" class="callforprice" style="color: #ff0000; font-weight: bold; font-size: 18px;"><i class="fa fa-phone" style="font-size: 18px;"></i> {{ text_price_0 }}</a> */
/*  {% endif %} */
/*  {% else %} */
/*   */
/*  {% if (cfp_setting.module_so_call_for_price_status and price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '0' %} */
/*  <a data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" href="javascript:;" class="callforprice" style="color: #ff0000; font-weight: bold;"><i class="fa fa-phone"></i> {{ text_price_0 }}</a> */
/*  {% endif %} */
/*  {% else %} */
/*  {{ price }} */
/*  {% endif %} */
/*   */
/*  {% endif %} */
/*  </span>*/
/* 								<meta itemprop="priceCurrency" content="{{currency}}" />*/
/* 							</span>*/
/* */
/* 						{% else %}*/
/* 						*/
/* 							<span class="price-new">*/
/* 								<span itemprop="price" content="{{special_value}}" id="price-special">{{ special }}</span>*/
/* 								<meta itemprop="priceCurrency" content="{{currency}}" />*/
/* 							</span>*/
/* 						   <span class="price-old" id="price-old"> */
/* 								*/
/* 						   </span>*/
/* 						   */
/* 						{% endif %}*/
/* 						*/
/* 						{% if special and soconfig.get_settings('discount_status')   %} */
/* 						{#=======Discount Label======= #}*/
/* 						<span class="label-product label-sale">*/
/* 							 {{ discount }}*/
/* 						</span>*/
/* 						{% endif %} */
/* */
/* 						 */
/*  {% if ((tax) and (cfp_setting.module_so_call_for_price_status) and (price_0 > 0)) %} */
/*  */
/* 							<div class="price-tax"><span>{{ text_tax }}</span> <span id="price-tax"> {{ tax }} </span></div>*/
/* 						{% endif %}*/
/* 					 */
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* */
/* 				{% if discounts %} */
/* 					<ul class="list-unstyled text-success">*/
/* 					{% for discount in discounts %} */
/* 						<li><strong>{{ discount.quantity }} {{ text_discount }} {{ discount.price }}</strong> </li>*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 				{% endif %} 	*/
/* */
/* 				<div class="product-box-desc">*/
/* 					<div class="inner-box-desc">*/
/* */
/* 						{% if manufacturer %}*/
/* 							        <div class="brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">*/
/* 							        <span>{{ text_manufacturer }} </span><a href="{{ manufacturers }}" itemprop="url"><span itemprop="name">{{ manufacturer }} </span></a></div>*/
/* 							{% endif %}*/
/* 						*/
/* 						{% if model %}*/
/* 						<div class="model"><span>{{ text_model }} </span> {{ model }}</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if reward %}*/
/* 							<div class="reward"><span>{{ text_reward }}</span> {{ reward }}</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						<div class="stock"><span>{{ text_stock }}</span> <i class="fa fa-check-square-o"></i> {{ stock }}</div>	*/
/* 					</div>	*/
/* */
/* 					{% if soconfig.get_settings('product_enablesold')   %}*/
/* 					<div class="inner-box-sold ">*/
/* 						<div class="viewed"><span>{{ text_viewed }}</span> <span class="label label-primary">{{ viewed }}</span></div>	*/
/* 						{% if sold %}*/
/* 						<div class="sold"><span>{{ text_sold_ready }}</span> <span class="label label-success"> {{ sold }} </span></div>	*/
/* 						{% endif %}*/
/* 					</div>	*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if soconfig.get_settings('product_enablesizechart') %}*/
/* 						<a class="image-popup-sizechart" href="image/{{soconfig.get_settings('img_sizechart')}}" >{{ text_size_chart }} </a>	*/
/* 				    {% endif %}*/
/* */
/* 				</div>*/
/* 				*/
/* 				{% if description_short %}*/
/* 					 <div class="short_description form-group" itemprop="description">*/
/* 						<h3>{{objlang.get('text_overview')}}</h3>*/
/* 		                {{ description_short }}       */
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 				{#===== Show CountDown Product =======#}*/
/* 				{% if soconfig.get_settings('countdown_status') and special_end_date %}*/
/* 					{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:special_end_date} %}*/
/* 				{% endif %}*/
/* 				*/
/* 				*/
/* 				<div id="product">	*/
/* 					{% if options %} */
/* 					<h3>{{ text_option }}</h3>*/
/*  */
/*  {% if option_data and option_data.product_option_value is defined and option_data.product_option_value %} */
/*  <ul id="so-colorswatch-selector-{{ product_id }}" class='so-colorswatch-productpage-icons'> */
/*  {% for option_value in option_data.product_option_value %} */
/*  <li class="option-item"> */
/*  <a class="" */
/*  data-product-option-value-id="{{ option_value.product_option_value_id }}" */
/*  data-option-value-id="{{ option_value.option_value_id }}" */
/*  data-color-image="{{ option_value.color_image }}" */
/*  data-color-thumb-image="{{ option_value.color_thumb_image }}" */
/*  style="width: {{ width_product_page }}px; height: {{ height_product_page }}px; background-image: url('{{ option_value.image }}')"> */
/*  </a> */
/*  </li> */
/*  {% endfor %} */
/*  <li class="selected-option"><span></span></li> */
/*  </ul> */
/*  <script type="text/javascript"> */
/*  var $window_width = $(window).width(); */
/*  var ProductOptionId = '{{ product_option_id }}'; */
/*  var default_image = $('.large-image img').attr('src'); */
/*  jQuery(document).ready(function($) { */
/*  $('#input-option{{ product_option_id }}').parent().hide(); */
/*  */
/*  $('#input-option{{ product_option_id}} option').each(function(){ */
/*  var text = $(this).text().replace(/\s{2,}/g, ' '); */
/*  var val = $(this).attr('value'); */
/*  $('.so-colorswatch-productpage-icons li a').each(function(index, el){ */
/*  if($(el).data('product-option-value-id')== val){ */
/*  $(el).attr('title', text); */
/*  } */
/*  }) */
/*  }) */
/*  */
/*  {% if colorswatch_type == 'click' %} */
/*  $(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){ */
/*  e.preventDefault(); */
/*  var option_value_id = $(this).children('a').data('product-option-value-id'); */
/*  var option_id = $(this).children('a').data('option-value-id'); */
/*  */
/*  if ($(this).hasClass('checked')) { */
/*  $('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); */
/*  $(this).removeClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val('').trigger('change'); */
/*  $('.so-colorswatch-productpage-icons li.selected-option > span').html(''); */
/*  */
/*  $('.large-image img').attr('src', default_image); */
/*  } */
/*  else { */
/*  $('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); */
/*  $(this).removeClass('checked').addClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val(option_value_id).trigger('change'); */
/*  $('.so-colorswatch-productpage-icons li.selected-option > span').html($(this).children('a').attr('title')); */
/*  */
/*  if ($(this).children('a').data('color-image') != '') { */
/*  $('.large-image img').attr('src', $(this).children('a').data('color-image')); */
/*  } */
/*  else { */
/*  $('.large-image img').attr('src', default_image); */
/*  } */
/*  */
/*  $('#thumb-slider a.thumbnail').removeClass('active'); */
/*  } */
/*  }) */
/*  {% else %} */
/*  if ($window_width > 1199) { */
/*  $('.so-colorswatch-productpage-icons li.option-item').hover(function(e){ */
/*  e.preventDefault(); */
/*  var option_value_id = $(this).children('a').data('product-option-value-id'); */
/*  var option_id = $(this).children('a').data('option-value-id'); */
/*  */
/*  $('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); */
/*  if ($(this).hasClass('checked')) { */
/*  $(this).removeClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val('').trigger('change'); */
/*  $('.large-image img').attr('src', default_image); */
/*  */
/*  } */
/*  else { */
/*  $(this).removeClass('checked').addClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val(option_value_id).trigger('change'); */
/*  $('.so-colorswatch-productpage-icons li.selected-option > span').html($(this).children('a').attr('title')); */
/*  */
/*  if ($(this).children('a').data('color-image') != '') { */
/*  $('.large-image img').attr('src', $(this).children('a').data('color-image')); */
/*  } */
/*  else { */
/*  $('.large-image img').attr('src', default_image); */
/*  } */
/*  $('#thumb-slider a.thumbnail').removeClass('active'); */
/*  } */
/*  }); */
/*  } */
/*  else { */
/*  $(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){ */
/*  e.preventDefault(); */
/*  var option_value_id = $(this).children('a').data('product-option-value-id'); */
/*  var option_id = $(this).children('a').data('option-value-id'); */
/*  */
/*  $('.so-colorswatch-productpage-icons li.option-item').removeClass('checked'); */
/*  if ($(this).hasClass('checked')) { */
/*  $(this).removeClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val('').trigger('change'); */
/*  $('.large-image img').attr('src', default_image); */
/*  */
/*  } */
/*  else { */
/*  $(this).removeClass('checked').addClass('checked'); */
/*  $('#input-option{{ product_option_id }}').val(option_value_id).trigger('change'); */
/*  $('.so-colorswatch-productpage-icons li.selected-option > span').html($(this).children('a').attr('title')); */
/*  */
/*  if ($(this).children('a').data('color-image') != '') { */
/*  $('.large-image img').attr('src', $(this).children('a').data('color-image')); */
/*  } */
/*  else { */
/*  $('.large-image img').attr('src', default_image); */
/*  } */
/*  $('#thumb-slider a.thumbnail').removeClass('active'); */
/*  } */
/*  }) */
/*  } */
/*  {% endif %} */
/*  }) */
/*  </script> */
/*  {% endif %} */
/*  */
/* 					{% for option in options %}*/
/* 						*/
/* 						{% if option.type == 'select' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 							<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 							<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control width50">*/
/* 								<option value="">{{ text_select }}</option>*/
/* 							{% for option_value in option.product_option_value %}*/
/* 								<option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/* 								{% if option_value.price %}*/
/* 									({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 								{% endif %}*/
/* 								</option>*/
/* 							{% endfor %}*/
/* 						  </select>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if option.type == 'radio' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  	<label class="control-label">{{ option.name }}</label>*/
/* 							<div id="input-option{{ option.product_option_id }}">*/
/* 								{% set radio_style 	 = soconfig.get_settings('radio_style') %}*/
/* 								{% set radio_type 	 = radio_style ? ' radio-type-button':'' %}*/
/* */
/* 								{% for option_value in option.product_option_value %} */
/* 								{% set radio_image 	=  option_value.image ? 'option_image' : '' %} */
/* 								{% set radio_price 	=  radio_style ? option_value.price_prefix ~ option_value.price : '' %} */
/* 								*/
/* 									<div class="radio {{ radio_image ~ radio_type }}">*/
/* 										<label>							*/
/* 											<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/* 											<span class="option-content-box" data-title="{{ option_value.name}} {{ radio_price }}" data-toggle='tooltip'>*/
/* 												{% if option_value.image %} */
/* 													<img src="{{ option_value.image }} " alt="{{ option_value.name}}  {{radio_price}}" /> */
/* 												{% endif %} */
/* 												<span class="option-name">{{ option_value.name }} </span>*/
/* 												{% if option_value.price  and  radio_style  != '1' %} ({{ option_value.price_prefix }} {{ option_value.price }} ){% endif %} */
/* 											  */
/* 											</span>*/
/* 										</label>*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								 */
/* 								{% if radio_style %} */
/* 								<script type="text/javascript">*/
/* 									 $(document).ready(function(){*/
/* 										  $('#input-option{{ option.product_option_id }} ').on('click', 'span', function () {*/
/* 											   $('#input-option{{ option.product_option_id }}  span').removeClass("active");*/
/* 											   $(this).toggleClass("active");*/
/* 										  });*/
/* 									 });*/
/* 								</script>*/
/* 								{% endif %} */
/* */
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'checkbox' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  	<label class="control-label">{{ option.name }}</label>*/
/* 						  	<div id="input-option{{ option.product_option_id }}">*/
/* 								{% set radio_style 	 = soconfig.get_settings('radio_style') %}*/
/* 								{% set radio_type 	 = radio_style ? ' radio-type-button':'' %}*/
/* */
/* 								{% for option_value in option.product_option_value %} */
/* 								{% set radio_image 	=  option_value.image ? 'option_image' : '' %} */
/* 								{% set radio_price 	=  radio_style ? option_value.price_prefix ~ option_value.price : '' %} */
/* 								*/
/* 									<div class="checkbox  {{ radio_image ~ radio_type }}">*/
/* 										<label>*/
/* 											<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/* 											<span class="option-content-box" data-title="{{ option_value.name}} {{ radio_price }}" data-toggle='tooltip'>*/
/* 												{% if option_value.image %} */
/* 													<img src="{{ option_value.image }} " alt="{{ option_value.name}}  {{radio_price}}" /> */
/* 												{% endif %} */
/* */
/* 												<span class="option-name">{{ option_value.name }} </span>*/
/* 												{% if option_value.price  and  radio_style  != '1' %} */
/* 													({{ option_value.price_prefix }} {{ option_value.price }} )*/
/* 												{% endif %} */
/* 											  */
/* 											</span>*/
/* 										</label>*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								 */
/* 								{% if radio_style %} */
/* 								<script type="text/javascript">*/
/* 									 $(document).ready(function(){*/
/* 										  $('#input-option{{ option.product_option_id }} ').on('click', 'span', function () {*/
/* 											   $(this).toggleClass("active");*/
/* 										  });*/
/* 									 });*/
/* 								</script>*/
/* 								{% endif %} */
/* */
/* 							</div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'text' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						  <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'textarea' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						  <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'file' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  <label class="control-label">{{ option.name }}</label>*/
/* 						  <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 						  <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'date' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						  <div class="input-group date">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 							<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/* 							</span></div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if option.type == 'datetime' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						  <div class="input-group datetime">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 							<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 							</span></div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if option.type == 'time' %}*/
/* 						<div class="form-group{% if option.required %} required {% endif %}">*/
/* 							<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 							<div class="input-group time">*/
/* 							<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 							<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 							</span></div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/* 					{% endfor %}*/
/* 					{% endif %}*/
/* */
/* 					<div class="box-cart clearfix form-group">*/
/* 						{% if recurrings %}*/
/* 						<h3>{{ text_payment_recurring }}</h3>*/
/* 						<div class="form-group required">*/
/* 							<select name="recurring_id" class="form-control">*/
/* 							<option value="">{{ text_select }}</option>*/
/* 							{% for recurring in recurrings %}*/
/* 							<option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* 							{% endfor %}*/
/* 							</select>*/
/* 						  <div class="help-block" id="recurring-description"></div>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 					  */
/* 						<div class="form-group box-info-product">*/
/* 							<div class="option quantity">*/
/* 								<div class="input-group quantity-control">*/
/* 									  <span class="input-group-addon product_quantity_down fa fa-minus"></span>*/
/* 									  <input class="form-control" type="text" name="quantity" value="{{ minimum }}" />*/
/* 									  <input type="hidden" name="product_id" value="{{ product_id }}" />								  */
/* 									  <span class="input-group-addon product_quantity_up fa fa-plus"></span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="detail-action">*/
/* 								{# =========button Cart ======#}*/
/* 								<div class="cart"> */
/*  {% if (cfp_setting.module_so_call_for_price_status and price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_hide_cart is defined and cfp_setting.module_so_call_for_price_hide_cart == '0' %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <input type="button" value="{{ text_price_0 }}" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" data-loading-text="{{ text_loading }}" class="btn btn-mega btn-lg callforprice"> */
/*  {% else %} */
/*  <input type="button" value="{{ button_cart }}" data-loading-text="{{ text_loading }}" class="btn btn-mega btn-lg" style="cursor: default; background: #eee; color: #ccc; border: 1px solid #eee; text-shadow: none; box-shadow: none;"> */
/*  {% endif %} */
/*  {% else %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <input type="button" value="{{ text_price_0 }}" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" data-loading-text="{{ text_loading }}" class="btn btn-mega btn-lg "> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% else %} */
/*  <input type="button" value="{{ button_cart }}" data-loading-text="{{ text_loading }}" id="button-cart" class="btn btn-mega btn-lg" /> */
/*  {% endif %} */
/*  </div>*/
/* 								<div class="add-to-links wish_comp">*/
/* 									<ul class="blank">*/
/* 										<li class="wishlist">*/
/* 											<a onclick="wishlist.add({{ product_id }});"><i class="fa fa-heart"></i></a>*/
/* 										</li>*/
/* 										<li class="compare">*/
/* 											<a onclick="compare.add({{ product_id }});"><i class="fa fa-retweet"></i></a>*/
/* 										</li>*/
/* 										*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="clearfix"></div>*/
/* 						{% if minimum > 1 %}*/
/* 							<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* */
/* 					{% if soconfig.get_settings('product_page_button') and soconfig.get_settings('product_socialshare') %}*/
/* 					<div class="form-group social-share clearfix">*/
/* 						{{ soconfig.decode_entities( soconfig.get_settings('product_socialshare') ) }}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* 					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>*/
/* 					*/
/* 					 {% if tags %}*/
/* 					<div id="tab-tags">*/
/* 						{{ text_tags }}*/
/* 						{% for i in 0..tags|length %}*/
/* 						{% if i < (tags|length - 1) %} <a class="btn btn-primary btn-sm" href="{{ tags[i].href }}">{{ tags[i].tag }}</a>*/
/* 						{% else %} */
/* 						{% if tags[i] is not empty  %}*/
/* 						<a class="btn btn-primary btn-sm 22" href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/* 						{% endif %}*/
/* 						{% endfor %} */
/* 						*/
/* 					 */
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 				</div>*/
/* 					*/
/* 			</div>*/
/* 			{#========== //Product Right ============#}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{#====  content_Top==== #}*/
/* 		{% if content_top %}*/
/* 		<div class="content-product-maintop form-group clearfix">*/
/* 			{{ content_top }}*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<div class="content-product-mainbody clearfix row">*/
/* 			*/
/* 			{% if col_position== 'inside' %}*/
/* 			{#====  Column left inside==== #}*/
/* 				{{ column_left }}*/
/* 			    {% if col_canvas =='off_canvas' %}*/
/* 					{% set class_left = 'col-sm-12' %}*/
/* 		    	{% elseif column_left and column_right %}*/
/* 		    		{% set class_left = 'col-md-6 col-column3' %}*/
/* 			    {% elseif column_left or column_right %}*/
/* 			    	{% set class_left = 'col-md-9 col-sm-12 col-xs-12' %}*/
/* 			    {% else %}*/
/* 			    	{% set class_left = 'col-sm-12' %}*/
/* 			    {% endif %}*/
/* 			{% else %}*/
/* 				{% set class_left = 'col-sm-12' %}*/
/* 			{% endif %}*/
/* */
/* 		    <div class="content-product-content {{ class_left }}">*/
/* 				<div class="content-product-midde clearfix">*/
/* 					{#========== TAB BLOCK ============#}*/
/* 					{% set related_position = soconfig.get_settings('tabs_position') == 1 ? 'vertical-tabs' : ''  %}*/
/* 					{% set tabs_position	= soconfig.get_settings('tabs_position')  %}*/
/* 					{% set showmore			= soconfig.get_settings('product_enableshowmore')  %}*/
/* 					{% if showmore %} {% set class_showmore = 'showdown' %}*/
/* 					{% else %} {% set class_showmore = 'showup' %}*/
/* 					{% endif %}*/
/* */
/* 					<div class="producttab ">*/
/* 						<div class="tabsslider {{related_position}} {% if tabs_position == 1 %} {{'vertical-tabs'}} {% else %} {{'horizontal-tabs'}} {% endif %} col-xs-12">*/
/* 							{#========= Tabs - Bottom horizontal =========#}*/
/* 							{% if tabs_position == 2 %}*/
/* 							<ul class="nav nav-tabs font-sn">*/
/* 								<li class="active"><a data-toggle="tab" href="#tab-description">{{ tab_description }}</a></li>*/
/* 								*/
/* 					         */
/* 					            {% if review_status %}*/
/* 					           	 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/* 					            {% endif %}*/
/* 								*/
/* 								{% if soconfig.get_settings('product_enableshipping') %}*/
/* 								 <li><a href="#tab-contentshipping" data-toggle="tab">{{ tab_shipping}}</a></li>*/
/* 								{% endif %}*/
/* */
/* 								{% if product_tabtitle %}*/
/* 					           	 <li><a href="#tab-customhtml" data-toggle="tab">{{ product_tabtitle}}</a></li>*/
/* 					            {% endif %}*/
/* */
/* 								{% if product_video %}*/
/* 					           	 <li><a class="thumb-video" href="{{product_video}}"><i class="fa fa-youtube-play fa-lg"></i> {{ tab_video}}</a></li>*/
/* 					            {% endif %}*/
/* 								*/
/* 								*/
/* 								*/
/* 							</ul>*/
/* */
/* 							{#========= Tabs - Left vertical =========#}*/
/* 							{% elseif tabs_position == 1  %}*/
/* 								<ul class="nav nav-tabs col-lg-3 col-sm-4">*/
/* 								<li class="active"><a data-toggle="tab" href="#tab-description">{{ tab_description }}</a></li>*/
/* 								*/
/* 					            {% if review_status %}*/
/* 					           	 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/* 					            {% endif %}*/
/* 								*/
/* 								{% if soconfig.get_settings('product_enableshipping')  %}*/
/* 								 <li><a href="#tab-contentshipping" data-toggle="tab">{{ tab_shipping}}</a></li>*/
/* 								{% endif %}*/
/* */
/* 								{% if product_tabtitle %}*/
/* 					           	 <li><a href="#tab-customhtml" data-toggle="tab">{{ product_tabtitle}}</a></li>*/
/* 					            {% endif %}*/
/* 					            */
/* 								{% if product_video %}*/
/* 					           	 <li><a class="thumb-video" href="{{product_video}}"><i class="fa fa-youtube-play fa-lg"></i> {{ tab_video}}</a></li>*/
/* 					            {% endif %}*/
/* 								*/
/* 								*/
/* 								</ul>*/
/* 							{% endif %}*/
/* */
/* 							<div class="tab-content {% if tabs_position == 1  %} {{ 'col-lg-9 col-sm-8' }} {% endif %} col-xs-12">*/
/* 								<div class="tab-pane active" id="tab-description">*/
/* 									*/
/* 									{% if attribute_groups %}*/
/* 										<h3 class="product-property-title" > {{text_product_specifics}}</h3>*/
/* 						              	<ul class="product-property-list util-clearfix">*/
/* 							                {% for attribute_group in attribute_groups %}*/
/* 							               */
/* 							                	*/
/* 								                {% for attribute in attribute_group.attribute %}*/
/* 								                <li class="property-item">*/
/* 								                  <span class="propery-title">{{ attribute.name }}</span>*/
/* 								                  <span class="propery-des">{{ attribute.text }}</span>*/
/* 								                </li>*/
/* 								                {% endfor %}*/
/* 							                 	*/
/* 							                {% endfor %}*/
/* 						              	</ul>*/
/* 						            {% endif %}*/
/* */
/* 						            <h3 class="product-property-title" > {{text_product_description}}</h3>*/
/* 						            <div id="collapse-description" class="desc-collapse {{class_showmore}}">*/
/* 										{{ description }}*/
/* 									</div>	*/
/* */
/* 									{% if showmore %}*/
/* 									<div class="button-toggle">*/
/* 								         <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">*/
/* 								            <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/* 								            <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>           */
/* 										</a>        */
/* 									</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								*/
/* */
/* 					            {% if review_status %}*/
/* 					            <div class="tab-pane" id="tab-review">*/
/* 						            <form class="form-horizontal" id="form-review">*/
/* 						                <div id="review"></div>*/
/* 						                <h3>{{ text_write }}</h3>*/
/* 						                {% if review_guest %}*/
/* 						                <div class="form-group required">*/
/* 						                  <div class="col-sm-12">*/
/* 						                    <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 						                    <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/* 						                  </div>*/
/* 						                </div>*/
/* 						                <div class="form-group required">*/
/* 						                  <div class="col-sm-12">*/
/* 						                    <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/* 						                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/* 						                    <div class="help-block">{{ text_note }}</div>*/
/* 						                  </div>*/
/* 						                </div>*/
/* 						                <div class="form-group required">*/
/* 						                  <div class="col-sm-12">*/
/* 						                    <label class="control-label">{{ entry_rating }}</label>*/
/* 						                    &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/* 						                    <input type="radio" name="rating" value="1" />*/
/* 						                    &nbsp;*/
/* 						                    <input type="radio" name="rating" value="2" />*/
/* 						                    &nbsp;*/
/* 						                    <input type="radio" name="rating" value="3" />*/
/* 						                    &nbsp;*/
/* 						                    <input type="radio" name="rating" value="4" />*/
/* 						                    &nbsp;*/
/* 						                    <input type="radio" name="rating" value="5" />*/
/* 						                    &nbsp;{{ entry_good }}</div>*/
/* 						                </div>*/
/* 						                {{ captcha }}*/
/* 						                */
/* 						                  <div class="pull-right">*/
/* 						                    <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/* 						                  </div>*/
/* 						               */
/* 						                {% else %}*/
/* 						                {{ text_login }}*/
/* 						                {% endif %}*/
/* 						            </form>*/
/* 					            </div>*/
/* 					            {% endif %}*/
/* */
/* 					            {% if soconfig.get_settings('product_enableshipping') and soconfig.get_settings('product_contentshipping') %}*/
/* 								<div class="tab-pane" id="tab-contentshipping">*/
/* 									{{ soconfig.decode_entities( soconfig.get_settings('product_contentshipping') ) }}*/
/* 								</div>*/
/* 								{% endif %}*/
/* */
/* 								{% if product_tabtitle %}*/
/* 								<div class="tab-pane " id="tab-customhtml">{{ product_tabcontent }}</div>*/
/* 								{% endif %}*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				{#====  Related_Product==== #}*/
/* 				{% if products and soconfig.get_settings('related_status') %}*/
/* 				<div class="content-product-bottom clearfix">*/
/* 					<ul class="nav nav-tabs">*/
/* 					  <li class="active"><a data-toggle="tab" href="#product-related">{{ text_related }}</a></li> */
/* 					  <li><a data-toggle="tab" href="#product-upsell">{{ text_upsell }}</a></li>*/
/* 					</ul>*/
/* 					<div class="tab-content">*/
/* 					  	<div id="product-related" class="tab-pane fade in active">*/
/* 							{% include theme_directory~'/template/soconfig/related_product.twig' %}*/
/* 					  	</div>*/
/* 					  	<div id="product-upsell" class="tab-pane fade">*/
/* 					  		{#====  content_bottom==== #}*/
/* 					  		{{ content_bottom }}*/
/* 					  	</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				{% endif %}*/
/* */
/* 				*/
/* 			</div>*/
/* 			{#====  Column Right inside==== #}*/
/* 			{% if col_position== 'inside' %} {{ column_right }} {% endif %}*/
/* */
/* 		</div>*/
/* 		*/
/*     	*/
/*     </div>*/
/*     {#====  Column Right outside==== #}*/
/*     {% if col_position== 'outside' %} {{ column_right }} {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* <!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/soconfig/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert').remove();*/
/* 			$('.text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/*  */
/*  {% if option_data %} */
/*  if(ProductOptionId != undefined && ProductOptionId==i.replace('_', '-')){ */
/*  $('.so-colorswatch-productpage-icons').after('<div class="text-danger">' + json['error']['option'][i] + '</div>'); */
/*  } */
/*  {% endif %} */
/*  */
/* 						*/
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* 				*/
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('.text-danger').remove();*/
/* 				$('#wrapper').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');*/
/* 				$('#cart  .total-shopping-cart ').html(json['total'] );*/
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 				*/
/* 				timer = setTimeout(function () {*/
/* 					$('.alert').addClass('fadeOut');*/
/* 				}, 4000);*/
/* 				$('.so-groups-sticky .popup-mycart .popup-content').load('index.php?route=extension/module/so_tools/info .popup-content .cart-header');*/
/* 			}*/
/* 			*/
/* 		*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* */
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/*     $('#review').load(this.href);*/
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* //--></script>*/
/* */
/* */
/* */
/* <script type="text/javascript"><!--*/
/* 	$(document).ready(function() {*/
/* 		*/
/* 		// Initialize the sticky scrolling on an item */
/* 		sidebar_sticky = '{{sidebar_sticky}}';*/
/* 		*/
/* 		if(sidebar_sticky=='left'){*/
/* 			$(".left_column").stick_in_parent({*/
/* 			    offset_top: 10,*/
/* 			    bottoming   : true*/
/* 			});*/
/* 		}else if (sidebar_sticky=='right'){*/
/* 			$(".right_column").stick_in_parent({*/
/* 			    offset_top: 10,*/
/* 			    bottoming   : true*/
/* 			});*/
/* 		}else if (sidebar_sticky=='all'){*/
/* 			$(".content-aside").stick_in_parent({*/
/* 			    offset_top: 10,*/
/* 			    bottoming   : true*/
/* 			});*/
/* 		}*/
/* 		*/
/* */
/* 		$("#thumb-slider .image-additional").each(function() {*/
/* 			$(this).find("[data-index='0']").addClass('active');*/
/* 		});*/
/* 		*/
/* 		$('.product-options li.radio').click(function(){*/
/* 			$(this).addClass(function() {*/
/* 				if($(this).hasClass("active")) return "";*/
/* 				return "active";*/
/* 			});*/
/* 			*/
/* 			$(this).siblings("li").removeClass("active");*/
/* 			$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');*/
/* 		})*/
/* 		*/
/* 		$('.thumb-video').magnificPopup({*/
/* 		  type: 'iframe',*/
/* 		  iframe: {*/
/* 			patterns: {*/
/* 			   youtube: {*/
/* 				  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).*/
/* 				  id: 'v=', // String that splits URL in a two parts, second part should be %id%*/
/* 				  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. */
/* 					},*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* //--></script>*/
/* */
/* */
/* <script type="text/javascript">*/
/* var ajax_price = function() {*/
/* 	$.ajax({*/
/* 		type: 'POST',*/
/* 		url: 'index.php?route=extension/soconfig/liveprice/index',*/
/* 		data: $('.product-detail input[type=\'text\'], .product-detail input[type=\'hidden\'], .product-detail input[type=\'radio\']:checked, .product-detail input[type=\'checkbox\']:checked, .product-detail select, .product-detail textarea'),*/
/* 		dataType: 'json',*/
/* 			success: function(json) {*/
/* 			if (json.success) {*/
/* 				change_price('#price-special', json.new_price.special);*/
/* 				change_price('#price-tax', json.new_price.tax);*/
/* 				change_price('#price-old', json.new_price.price);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* var change_price = function(id, new_price) {$(id).html(new_price);}*/
/* $('.product-detail input[type=\'text\'], .product-detail input[type=\'hidden\'], .product-detail input[type=\'radio\'], .product-detail input[type=\'checkbox\'], .product-detail select, .product-detail textarea, .product-detail input[name=\'quantity\']').on('change', function() {*/
/* 	ajax_price();*/
/* });*/
/* </script>*/
/* */
/* {{ footer }} */
/* */
