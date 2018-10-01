<?php

/* so-mobile/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_ad3ee1d9a4442b2983e81df8291257bbfba8eab7bedd0ea1e36178bf442b223a extends Twig_Template
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
        echo "<!-- default Grid  -->
<div class=\"module ";
        // line 2
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t";
        // line 3
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
\t\t<h3 class=\"modtitle\"><span>";
            // line 4
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</span></h3>
\t";
        }
        // line 6
        echo "
\t";
        // line 7
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 9
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t";
        // line 15
        if (twig_test_empty((isset($context["products"]) ? $context["products"] : null))) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 17
            echo (isset($context["text_noproduct"]) ? $context["text_noproduct"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null));
            echo "\t
\t\t\t";
            // line 23
            $context["cls_btn_page"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 24
            $context["btn_type"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 25
            echo "\t\t\t
\t\t\t";
            // line 26
            $context["tag_id"] = ("so_extra_slider_" . (isset($context["suffix"]) ? $context["suffix"] : null));
            // line 27
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 28
            echo "\t\t\t";
            $context["btn_prev"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#171") : ("&#139"));
            // line 29
            echo "\t\t\t";
            $context["btn_next"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#187") : ("&#155"));
            // line 30
            echo "\t\t\t";
            $context["i"] = 0;
            // line 31
            echo "
\t\t\t<div id=\"";
            // line 32
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "\" class=\"so-extraslider ";
            echo (isset($context["cls_btn_page"]) ? $context["cls_btn_page"] : null);
            echo " ";
            echo (isset($context["class_respl"]) ? $context["class_respl"] : null);
            echo " ";
            echo (isset($context["btn_type"]) ? $context["btn_type"] : null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list \" data-effect=\"";
            // line 34
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "\">
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 36
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 37
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 39
                echo " 

\t\t\t\t\t\t\t<div class=\"product-layout product-grid ";
                // line 41
                echo (isset($context["products_style"]) ? $context["products_style"] : null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 44
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "nameFull", array());
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    // line 49
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\"   data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 57
                    echo " ";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 61
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 62
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if ((((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 66
                    if ((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 67
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        if (((isset($context["nb_column0"]) ? $context["nb_column0"] : null) != 6)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden hidden-xs hidden-sm hidden-md\">";
                            // line 69
                            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 73
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 74
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo " \" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 77
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 80
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" ></a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 94
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["k"] = ($context["k"] + 1);
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 97
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 99
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 100
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 104
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t

\t\t\t\t\t\t\t\t\t\t\t";
                // line 113
                if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 115
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 116
                    echo $this->getAttribute($context["product"], "name", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if ((isset($context["display_price"]) ? $context["display_price"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 125
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 127
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 128
                        echo $this->getAttribute($context["product"], "special", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 129
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 133
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 137
                    echo $this->getAttribute($context["product"], "description", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 152
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ($context["i"] == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 154
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "\t 
\t\t\t\t</div>
\t\t\t\t<!--End extraslider-inner -->

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".extraslider-inner\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 166
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 167
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 168
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo " ';

\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 179
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 186
            echo "
\t\t\t\t\t\t\t/*";
            // line 187
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 190
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 193
            echo "*/

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 198
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 199
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 200
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 201
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 202
            echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 203
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 204
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 205
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 206
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 207
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo " ,
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 210
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 211
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 212
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 213
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 214
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 218
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 219
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 220
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 221
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 222
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 229
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 235
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 241
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 247
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item);
\t\t\t\t        \tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t        \t\t_getAnimate(\$item_active);
\t\t\t\t        \t} else {
\t\t\t\t        \t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t        \t}
\t\t\t\t        });
\t\t\t\t        function _getAnimate(\$el) {
\t\t\t\t        \tif (_effect == \"none\") return;
\t\t\t\t        \t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t        \t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\tvar \$_el = \$(this);
\t\t\t\t        \t\tvar i= i + 1;
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t}).animate({
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t});
\t\t\t\t        \t\tif (i == \$el.size() - 1) {
\t\t\t\t        \t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t        \t\t}
\t\t\t\t        \t});
\t\t\t\t        }
\t\t\t\t        function _UngetAnimate(\$el) {
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"animation\": \"\",
\t\t\t\t        \t\t\t\"-webkit-animation\": \"\",
\t\t\t\t        \t\t\t\"-moz-animation\": \"\",
\t\t\t\t        \t\t\t\"-o-animation\": \"\",
\t\t\t\t        \t\t});
\t\t\t\t        \t});
\t\t\t\t        } 
\t\t\t\t\t})(\"#";
            // line 292
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 299
        echo "\t
\t</div> 
\t";
        // line 301
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 303
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 306
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 306,  717 => 303,  712 => 301,  708 => 299,  698 => 292,  651 => 247,  641 => 241,  633 => 235,  623 => 229,  613 => 222,  609 => 221,  605 => 220,  601 => 219,  597 => 218,  590 => 214,  586 => 213,  582 => 212,  578 => 211,  574 => 210,  568 => 207,  564 => 206,  560 => 205,  556 => 204,  552 => 203,  548 => 202,  544 => 201,  540 => 200,  536 => 199,  532 => 198,  525 => 193,  519 => 190,  512 => 187,  509 => 186,  499 => 179,  485 => 168,  481 => 167,  477 => 166,  465 => 156,  457 => 154,  451 => 152,  436 => 139,  430 => 137,  425 => 135,  421 => 133,  415 => 130,  410 => 129,  406 => 128,  403 => 127,  397 => 125,  392 => 123,  387 => 121,  384 => 120,  377 => 116,  369 => 115,  364 => 113,  360 => 111,  356 => 110,  350 => 107,  343 => 106,  340 => 105,  336 => 104,  332 => 102,  327 => 100,  320 => 99,  315 => 97,  308 => 95,  305 => 94,  301 => 93,  298 => 92,  295 => 91,  293 => 90,  284 => 83,  273 => 80,  269 => 78,  262 => 77,  258 => 76,  255 => 75,  248 => 74,  244 => 73,  241 => 72,  236 => 70,  231 => 69,  227 => 68,  221 => 67,  217 => 66,  212 => 64,  208 => 62,  203 => 61,  199 => 60,  195 => 58,  189 => 57,  185 => 56,  180 => 53,  172 => 51,  165 => 49,  158 => 48,  156 => 47,  147 => 45,  139 => 44,  133 => 41,  129 => 39,  122 => 37,  119 => 36,  115 => 35,  111 => 34,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  69 => 22,  61 => 17,  58 => 16,  56 => 15,  51 => 12,  45 => 9,  40 => 7,  37 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- default Grid  -->*/
/* <div class="module {{direction_class}} {{ class_suffix }}">*/
/* 	{% if disp_title_module %} */
/* 		<h3 class="modtitle"><span>{{ head_name }}</span></h3>*/
/* 	{% endif %}*/
/* */
/* 	{% if pre_text|trim is not empty  %} */
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="modcontent">*/
/* 		*/
/* 		{% if products is empty %}*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> */
/* 				{{ text_noproduct }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* */
/* 		{% else %}*/
/* 			{% set count_item 	= products|length %}	*/
/* 			{% set cls_btn_page =  (button_page  ==  'top') ? 'buttom-type1':'button-type2' %}	*/
/* 			{% set btn_type 	=  (button_page  ==  'top') ? 'button-type1':'button-type2'%}*/
/* 			*/
/* 			{% set tag_id = 'so_extra_slider_'~suffix %}*/
/* 			{% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 			{% set btn_prev = (button_page == 'top') ? '&#171':'&#139' %}*/
/* 			{% set btn_next = (button_page == 'top') ? '&#187':'&#155' %}*/
/* 			{% set i = 0 %}*/
/* */
/* 			<div id="{{tag_id}}" class="so-extraslider {{cls_btn_page}} {{class_respl}} {{btn_type}}">*/
/* 				<!-- Begin extraslider-inner -->*/
/* 				<div class="extraslider-inner products-list " data-effect="{{effect}}">*/
/* 					{% for i, product in products %}*/
/* 						{% set i = i + 1 %}*/
/* 						{% if i % nb_rows  ==  1  or  nb_rows  ==  1 %} */
/* 						<div class="item ">*/
/* 						{% endif %} */
/* */
/* 							<div class="product-layout product-grid {{ products_style }} ">*/
/* 								<div class="product-item-container">*/
/* 									<div class="left-block">									*/
/* 										<div class="product-image-container {% if product_image_num  == 2 %} {{ 'second_img' }} {% endif %}	">*/
/* 											<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 													*/
/* 												{% if product_image_num ==2 %}*/
/* 													<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-thumb1 lazyload" alt="{{ product.nameFull }}">*/
/* 													<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-thumb2 lazyload" alt="{{ product.nameFull }}">*/
/* 												{% else %}*/
/* 													<img class="lazyload"   data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.nameFull }}">*/
/* 												{% endif %}*/
/* 											</a>						*/
/* 										</div>*/
/* 										<div class="box-label">*/
/* 											{% if product.special  and  display_sale  %} */
/* 												<span class="label-product label-sale">{# {{ objlang.get('text_sale') }} #} {{ product.discount }}  </span>*/
/* 											{% endif %} */
/* */
/* 											{% if product.productNew  and  display_new  %} */
/* 												<span class="label-product label-new">{{ objlang.get('text_new') }} </span>*/
/* 											{% endif %} 											*/
/* 										</div>*/
/* 										{% if display_addtocart  or  display_wishlist  or  display_compare %} */
/* 											<div class="button-group text-center">*/
/* 												{% if display_addtocart  %} */
/* 												<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');"><i class="fa fa-shopping-cart"></i>*/
/* 													{% if nb_column0  !=  6 %} */
/* 													<span class="hidden hidden-xs hidden-sm hidden-md">{{ objlang.get('button_cart') }} </span>*/
/* 													{% endif %} */
/* 												</button>*/
/* 												{% endif %} */
/* 												{% if display_wishlist  %} */
/* 												<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 												{% endif %} */
/* 												{% if display_compare %} */
/* 												<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i></button>*/
/* 												{% endif %} */
/* */
/* 												<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.href }}" target="{{ item_link_target }}" ></a>*/
/* 												*/
/* 											</div>*/
/* 										{% endif %} */
/* 																	*/
/* 									</div>*/
/* */
/* 									<div class="right-block">*/
/* 										*/
/* 										<div class="caption">*/
/* 											{% if display_rating %}*/
/* 												{% if product.rating %}*/
/* 													<div class="rating">*/
/* 														{% for k in 1..5 %}*/
/* 															{% set k = k + 1 %}*/
/* 															{% if product.rating < k %} */
/* 																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 														 	{% else %}   */
/* 																<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 															{% endif %} */
/* 														{% endfor %} */
/* 													</div>*/
/* 												{% else %}  */
/* 												<div class="rating">*/
/* 													{% for j in 1..5 %}*/
/* 														{% set j = j + 1 %}*/
/* 														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 													{% endfor %} */
/* 													*/
/* 												</div>*/
/* 												{% endif %}	*/
/* 											{% endif %}		*/
/* */
/* 											{% if display_title %} */
/* 												<h4>*/
/* 													<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 														{{ product.name }} */
/* 													</a>*/
/* 												</h4>*/
/* 											{% endif %}*/
/* 								*/
/* 											{% if display_price %} */
/* 												<div  class="price">*/
/* 													{% if not product.special %} */
/* 														<span class="price-new">*/
/* 															{{ product.price }} */
/* 														</span>*/
/* 													{% else %}   */
/* 														<span class="price-new">{{ product.special }} </span>*/
/* 														<span class="price-old">{{ product.price }} </span>*/
/* 													{% endif %} */
/* 													*/
/* 												</div>*/
/* 											{% endif %} */
/* 											*/
/* 											{% if display_description %} */
/* 												<div class="item-des">*/
/* 													{{ product.description }} */
/* 												</div>*/
/* 											{% endif %} */
/* 																						*/
/* 										</div>*/
/* 										*/
/* 									</div>*/
/* */
/* 									*/
/* 					*/
/* 								</div>*/
/* 								<!-- End item-wrap-inner -->*/
/* 							</div>*/
/* 							<!-- End item-wrap -->*/
/* */
/* 						{% if i % nb_rows  ==  0  or  i  ==  count_item %} */
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 					{% endfor %}	 */
/* 				</div>*/
/* 				<!--End extraslider-inner -->*/
/* */
/* 				<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				jQuery(document).ready(function ($) {*/
/* 					(function (element) {*/
/* 						var $element = $(element),*/
/* 								$extraslider = $(".extraslider-inner", $element),*/
/* 								_delay = {{ delay }} ,*/
/* 								_duration = {{ duration }} ,*/
/* 								_effect = '{{ effect }} ';*/
/* */
/* 						$extraslider.on("initialized.owl.carousel2", function () {*/
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							}*/
/* 							else {*/
/* 								var $item = $(".owl2-item", $element);*/
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 							}*/
/* 							{% if dots  ==  "true" %} */
/* 							if ($(".owl2-dot", $element).length < 2) {*/
/* 								$(".owl2-prev", $element).css("display", "none");*/
/* 								$(".owl2-next", $element).css("display", "none");*/
/* 								$(".owl2-dot", $element).css("display", "none");*/
/* 							}*/
/* 							{% endif %}*/
/* */
/* 							/*{% if button_page  ==  "top" %} */
/* 								$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 							{% else %}  */
/* 								$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 								$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 							{% endif %}*//* */
/* */
/* 						});*/
/* */
/* 						$extraslider.owlCarousel2({*/
/* 							rtl: {{ direction}},*/
/* 							margin: {{ margin }},*/
/* 							slideBy: {{ slideBy }},*/
/* 							autoplay: {{ autoplay }},*/
/* 							autoplayHoverPause: {{ autoplayHoverPause  }},*/
/* 							autoplayTimeout: {{ autoplayTimeout }} ,*/
/* 							autoplaySpeed: {{ autoplaySpeed }} ,*/
/* 							startPosition: {{ startPosition }} ,*/
/* 							mouseDrag: {{ mouseDrag }},*/
/* 							touchDrag: {{ touchDrag }} ,*/
/* 							*/
/* 							responsive: {*/
/* 								0: 	{ items: {{ nb_column4 }} } ,*/
/* 								480: { items: {{ nb_column3 }} },*/
/* 								768: { items: {{ nb_column2 }} },*/
/* 								992: { items: {{ nb_column1 }} },*/
/* 								1200: {items: {{ nb_column0 }}}*/
/* 							},*/
/* 							dotClass: "owl2-dot",*/
/* 							dotsClass: "owl2-dots",*/
/* 							dots: {{ dots }} ,*/
/* 							dotsSpeed:{{ dotsSpeed }} ,*/
/* 							nav: {{ nav }} ,*/
/* 							loop: {{ loop }} ,*/
/* 							navSpeed: {{ navSpeed }} ,*/
/* 							navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],*/
/* 							navClass: ["owl2-prev", "owl2-next"]*/
/* */
/* 						});*/
/* */
/* 						$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	_UngetAnimate($item_active);*/
/* 				        	_getAnimate($item_active);*/
/* 				        });*/
/* 				        $extraslider.on("translated.owl.carousel2", function (e) {*/
/* 				        	{% if dots  ==  "true" %} */
/* 				        	if ($(".owl2-dot", $element).length < 2) {*/
/* 				        		$(".owl2-prev", $element).css("display", "none");*/
/* 				        		$(".owl2-next", $element).css("display", "none");*/
/* 				        		$(".owl2-dot", $element).css("display", "none");*/
/* 				        	}*/
/* 				        	{% endif %} */
/* 				        	var $item_active = $(".owl2-item.active", $element);*/
/* 				        	var $item = $(".owl2-item", $element);*/
/* 				        	_UngetAnimate($item);*/
/* 				        	if ($item_active.length > 1 && _effect != "none") {*/
/* 				        		_getAnimate($item_active);*/
/* 				        	} else {*/
/* 				        		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 				        	}*/
/* 				        });*/
/* 				        function _getAnimate($el) {*/
/* 				        	if (_effect == "none") return;*/
/* 				        	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 				        	$extraslider.removeClass("extra-animate");*/
/* 				        	$el.each(function (i) {*/
/* 				        		var $_el = $(this);*/
/* 				        		var i= i + 1;*/
/* 				        		$(this).css({*/
/* 				        			"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"animation": _effect + " " + _duration + "ms ease both",*/
/* 				        			"-webkit-animation-delay": +i * _delay + "ms",*/
/* 				        			"-moz-animation-delay": +i * _delay + "ms",*/
/* 				        			"-o-animation-delay": +i * _delay + "ms",*/
/* 				        			"animation-delay": +i * _delay + "ms",*/
/* 				        			*/
/* 				        		}).animate({*/
/* 				        			*/
/* 				        		});*/
/* 				        		if (i == $el.size() - 1) {*/
/* 				        			$extraslider.addClass("extra-animate");*/
/* 				        		}*/
/* 				        	});*/
/* 				        }*/
/* 				        function _UngetAnimate($el) {*/
/* 				        	$el.each(function (i) {*/
/* 				        		$(this).css({*/
/* 				        			"animation": "",*/
/* 				        			"-webkit-animation": "",*/
/* 				        			"-moz-animation": "",*/
/* 				        			"-o-animation": "",*/
/* 				        		});*/
/* 				        	});*/
/* 				        } */
/* 					})("#{{ tag_id  }} ");*/
/* 				});*/
/* 				//]]>*/
/* 			</script>*/
/* */
/* 			</div>*/
/* 		{% endif %}*/
/* 	*/
/* 	</div> */
/* 	{% if post_text|trim is not empty  %} */
/* 		<div class="form-group">*/
/* 			{{ post_text  }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
