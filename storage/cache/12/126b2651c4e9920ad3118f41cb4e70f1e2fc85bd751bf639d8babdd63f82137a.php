<?php

/* default/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_69c25759fda41a08c111544a2b3f6dc1a1c650f50fa41c8a0fbc7a291ecb8299 extends Twig_Template
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
        echo "
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
\t\t<h3 class=\"modtitle\">";
            // line 4
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 6
        echo "
\t";
        // line 7
        if ((isset($context["pre_text"]) ? $context["pre_text"] : null)) {
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
\t\t\t\t<div class=\"extraslider-inner\" data-effect=\"";
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

\t\t\t\t\t\t\t<div class=\"item-wrap ";
                // line 41
                echo (isset($context["products_style"]) ? $context["products_style"] : null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"item-wrap-inner\">
\t\t\t\t\t\t\t\t\t<div class=\"item-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 45
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-sale\">";
                    // line 46
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_sale"), "method");
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 49
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-new\">";
                    // line 50
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" class=\"img-thumb1\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 55
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "\" class=\"img-thumb2\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 57
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "nameFull", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 59
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                // line 63
                if (((((((isset($context["display_title"]) ? $context["display_title"] : null) || (isset($context["display_description"]) ? $context["display_description"] : null)) || (isset($context["display_price"]) ? $context["display_price"] : null)) || (isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 65
                    if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 67
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\" target=\"";
                        echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "nameFull", array());
                        echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        echo $this->getAttribute($context["product"], "name", array());
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 73
                    if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "rating", array())) {
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 76
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                                // line 77
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["k"] = ($context["k"] + 1);
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["product"], "rating", array()) < $context["k"])) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                } else {
                                    // line 80
                                    echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 82
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 83
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 85
                            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 87
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 88
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["j"] = ($context["j"] + 1);
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 90
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 97
                    if ((((((isset($context["display_description"]) ? $context["display_description"] : null) || (isset($context["display_price"]) ? $context["display_price"] : null)) || (isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Begin item-content -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 100
                        if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 102
                            echo $this->getAttribute($context["product"], "description", array());
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 106
                        if ((isset($context["display_price"]) ? $context["display_price"] : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"content_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 108
                            if ( !$this->getAttribute($context["product"], "special", array())) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price product-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 110
                                echo $this->getAttribute($context["product"], "price", array());
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 112
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price product-price\">";
                                // line 113
                                echo $this->getAttribute($context["product"], "special", array());
                                echo " </span>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                // line 114
                                echo $this->getAttribute($context["product"], "price", array());
                                echo " </span>&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 115
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 118
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 120
                        if ((((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null) || (isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 122
                            if ((isset($context["display_addtocart"]) ? $context["display_addtocart"] : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                                // line 123
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo " ');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 124
                                if (((isset($context["nb_column0"]) ? $context["nb_column0"] : null) != 6)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                                    // line 125
                                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 126
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 128
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 129
                            if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                                // line 130
                                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                                echo " \" onclick=\"wishlist.add('";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 131
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 132
                            if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                                // line 133
                                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                                echo " \" onclick=\"compare.add('";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 134
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 136
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End item-content -->
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End item-info -->
\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 149
                if (((($context["i"] % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ($context["i"] == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 151
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
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
            // line 163
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 164
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 165
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
            // line 176
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 183
            echo "
\t\t\t\t\t\t\t";
            // line 184
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 187
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 191
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 195
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 196
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 197
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 198
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 199
            echo (isset($context["autoplayHoverPause"]) ? $context["autoplayHoverPause"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 200
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 201
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 202
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 203
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 204
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 207
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 208
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 209
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 210
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 211
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 215
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 216
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 217
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 218
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 219
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 220
            echo (isset($context["btn_prev"]) ? $context["btn_prev"] : null);
            echo " \", \"";
            echo (isset($context["btn_next"]) ? $context["btn_next"] : null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 226
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 232
            echo " 

\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {

\t\t\t\t\t\t\t";
            // line 241
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 247
            echo " 

\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t\t\t\t\t\t_UngetAnimate(\$item);

\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});

\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction _getAnimate(\$el) {
\t\t\t\t\t\t\tif (_effect == \"none\") return;
\t\t\t\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t}).animate({
\t\t\t\t\t\t\t\t\topacity: 1
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t})(\"#";
            // line 301
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 308
        echo "\t
\t</div> 
\t";
        // line 310
        if ((isset($context["post_text"]) ? $context["post_text"] : null)) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 312
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 315
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 315,  721 => 312,  716 => 310,  712 => 308,  702 => 301,  646 => 247,  636 => 241,  625 => 232,  615 => 226,  604 => 220,  600 => 219,  596 => 218,  592 => 217,  588 => 216,  584 => 215,  577 => 211,  573 => 210,  569 => 209,  565 => 208,  561 => 207,  555 => 204,  551 => 203,  547 => 202,  543 => 201,  539 => 200,  535 => 199,  531 => 198,  527 => 197,  523 => 196,  519 => 195,  513 => 191,  507 => 187,  500 => 184,  497 => 183,  487 => 176,  473 => 165,  469 => 164,  465 => 163,  453 => 153,  445 => 151,  439 => 149,  431 => 143,  425 => 140,  418 => 136,  413 => 134,  406 => 133,  402 => 132,  399 => 131,  392 => 130,  388 => 129,  385 => 128,  380 => 126,  375 => 125,  371 => 124,  367 => 123,  363 => 122,  358 => 120,  354 => 118,  348 => 115,  343 => 114,  339 => 113,  336 => 112,  330 => 110,  325 => 108,  320 => 106,  316 => 104,  310 => 102,  305 => 100,  299 => 97,  294 => 94,  290 => 93,  284 => 90,  277 => 89,  274 => 88,  270 => 87,  266 => 85,  261 => 83,  254 => 82,  249 => 80,  242 => 78,  239 => 77,  235 => 76,  232 => 75,  229 => 74,  227 => 73,  223 => 71,  216 => 68,  208 => 67,  203 => 65,  198 => 63,  192 => 59,  185 => 57,  182 => 56,  175 => 55,  168 => 54,  166 => 53,  162 => 51,  157 => 50,  153 => 49,  149 => 47,  144 => 46,  140 => 45,  133 => 41,  129 => 39,  122 => 37,  119 => 36,  115 => 35,  111 => 34,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  78 => 24,  74 => 23,  69 => 22,  61 => 17,  58 => 16,  56 => 15,  51 => 12,  45 => 9,  40 => 7,  37 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <div class="module {{direction_class}} {{ class_suffix }}">*/
/* 	{% if disp_title_module %} */
/* 		<h3 class="modtitle">{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* */
/* 	{% if pre_text  %} */
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
/* 				<div class="extraslider-inner" data-effect="{{effect}}">*/
/* 					{% for i, product in products %}*/
/* 						{% set i = i + 1 %}*/
/* 						{% if i % nb_rows  ==  1  or  nb_rows  ==  1 %} */
/* 						<div class="item ">*/
/* 						{% endif %} */
/* */
/* 							<div class="item-wrap {{ products_style }} ">*/
/* 								<div class="item-wrap-inner">*/
/* 									<div class="item-image">*/
/* 										<div class="item-img-info">*/
/* 											{% if product.special  and  display_sale  %} */
/* 												<span class="label label-sale">{{ objlang.get('text_sale') }} </span>*/
/* 											{% endif %} */
/* */
/* 											{% if product.productNew  and  display_new  %} */
/* 												<span class="label label-new">{{ objlang.get('text_new') }} </span>*/
/* 											{% endif %} */
/* */
/* 											{% if product_image_num  == 2 %}*/
/* 												<img src="{{ product.thumb}}" class="img-thumb1" alt="{{ product.nameFull }}">*/
/* 												<img src="{{ product.thumb2}}" class="img-thumb2" alt="{{ product.nameFull }}">*/
/* 											{% else %} */
/* 												<img src="{{ product.thumb}}" alt="{{ product.nameFull }}">*/
/* 											{% endif %}*/
/* */
/* 										</div>*/
/* 									</div>*/
/* */
/* 									{% if display_title   or  display_description  or  display_price    or  display_addtocart  or  display_wishlist  or  display_compare  %} */
/* 										<div class="item-info">*/
/* 											{% if display_title %} */
/* 												<div class="item-title">*/
/* 													<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.nameFull }} "  >*/
/* 														{{ product.name }} */
/* 													</a>*/
/* 												</div>*/
/* 											{% endif %} */
/* */
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
/* 											*/
/* */
/* 											{% if display_description  or  display_price or  display_addtocart  or  display_wishlist  or  display_compare  %} */
/* 												<!-- Begin item-content -->*/
/* 												<div class="item-content">*/
/* 													{% if display_description %} */
/* 														<div class="item-des">*/
/* 															{{ product.description }} */
/* 														</div>*/
/* 													{% endif %} */
/* */
/* 													{% if display_price %} */
/* 														<div  class="content_price">*/
/* 															{% if not product.special %} */
/* 																<span class="price product-price">*/
/* 																	{{ product.price }} */
/* 																</span>*/
/* 															{% else %}   */
/* 																<span class="old-price product-price">{{ product.special }} </span>&nbsp;&nbsp;*/
/* 																<span class="price-old">{{ product.price }} </span>&nbsp;*/
/* 															{% endif %} */
/* 															*/
/* 														</div>*/
/* 													{% endif %} */
/* */
/* 													{% if display_addtocart  or  display_wishlist  or  display_compare %} */
/* 														<div class="button-container">*/
/* 															{% if display_addtocart  %} */
/* 															<button type="button" onclick="cart.add('{{ product.product_id }} ');"><i class="fa fa-shopping-cart"></i>*/
/* 																{% if nb_column0  !=  6 %} */
/* 																<span class="hidden-xs hidden-sm hidden-md">{{ objlang.get('button_cart') }} </span>*/
/* 																{% endif %} */
/* 															</button>*/
/* 															{% endif %} */
/* 															{% if display_wishlist  %} */
/* 															<button type="button" data-toggle="tooltip" title="{{ objlang.get('button_wishlist') }} " onclick="wishlist.add('{{ product.product_id }} ');"><i class="fa fa-heart"></i></button>*/
/* 															{% endif %} */
/* 															{% if display_compare %} */
/* 															<button type="button" data-toggle="tooltip" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }} ');"><i class="fa fa-exchange"></i></button>*/
/* 															{% endif %} */
/* 														</div>*/
/* 													{% endif %} */
/* */
/* 												</div>*/
/* 												<!-- End item-content -->*/
/* 											{% endif %} */
/* 										</div>*/
/* 										<!-- End item-info -->*/
/* 									{% endif %} */
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
/* 							{% if button_page  ==  "top" %} */
/* 								$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 							{% else %}  */
/* 								$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 								$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 							{% endif %}*/
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
/* 							autoWidth: false,*/
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
/* 							navText: ["{{ btn_prev }} ", "{{ btn_next }} "],*/
/* 							navClass: ["owl2-prev", "owl2-next"]*/
/* */
/* 						});*/
/* */
/* 						$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 							{% if dots  ==  "true" %} */
/* 							if ($(".owl2-dot", $element).length < 2) {*/
/* 								$(".owl2-prev", $element).css("display", "none");*/
/* 								$(".owl2-next", $element).css("display", "none");*/
/* 								$(".owl2-dot", $element).css("display", "none");*/
/* 							}*/
/* 							{% endif %} */
/* */
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							_UngetAnimate($item_active);*/
/* 							_getAnimate($item_active);*/
/* 						});*/
/* */
/* 						$extraslider.on("translated.owl.carousel2", function (e) {*/
/* */
/* 							{% if dots  ==  "true" %} */
/* 							if ($(".owl2-dot", $element).length < 2) {*/
/* 								$(".owl2-prev", $element).css("display", "none");*/
/* 								$(".owl2-next", $element).css("display", "none");*/
/* 								$(".owl2-dot", $element).css("display", "none");*/
/* 							}*/
/* 							{% endif %} */
/* */
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							var $item = $(".owl2-item", $element);*/
/* */
/* 							_UngetAnimate($item);*/
/* */
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							} else {*/
/* */
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* */
/* 							}*/
/* 						});*/
/* */
/* 						function _getAnimate($el) {*/
/* 							if (_effect == "none") return;*/
/* 							//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 							$extraslider.removeClass("extra-animate");*/
/* 							$el.each(function (i) {*/
/* 								var $_el = $(this);*/
/* 								$(this).css({*/
/* 									"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-webkit-animation-delay": +i * _delay + "ms",*/
/* 									"-moz-animation-delay": +i * _delay + "ms",*/
/* 									"-o-animation-delay": +i * _delay + "ms",*/
/* 									"animation-delay": +i * _delay + "ms",*/
/* 									"opacity": 1*/
/* 								}).animate({*/
/* 									opacity: 1*/
/* 								});*/
/* */
/* 								if (i == $el.size() - 1) {*/
/* 									$extraslider.addClass("extra-animate");*/
/* 								}*/
/* 							});*/
/* 						}*/
/* */
/* 						function _UngetAnimate($el) {*/
/* 							$el.each(function (i) {*/
/* 								$(this).css({*/
/* 									"animation": "",*/
/* 									"-webkit-animation": "",*/
/* 									"-moz-animation": "",*/
/* 									"-o-animation": "",*/
/* 									"opacity": 1*/
/* 								});*/
/* 							});*/
/* 						}*/
/* */
/* 					})("#{{ tag_id  }} ");*/
/* 				});*/
/* 				//]]>*/
/* 			</script>*/
/* */
/* 			</div>*/
/* 		{% endif %}*/
/* 	*/
/* 	</div> */
/* 	{% if post_text  %} */
/* 		<div class="form-group">*/
/* 			{{ post_text  }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* </div>*/
