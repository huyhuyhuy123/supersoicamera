<?php

/* so-megastore/template/extension/module/so_super_category/default_items.twig */
class __TwigTemplate_5415d3e2f3b8c4c4524345d7fe7c760a6f98ac548fadbb8f7249ee17f5c5cc55 extends Twig_Template
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
        if ( !twig_test_empty((isset($context["child_items"]) ? $context["child_items"] : null))) {
            // line 2
            echo "\t";
            $context["k"] = ((array_key_exists("rl_loaded", $context)) ? ((isset($context["rl_loaded"]) ? $context["rl_loaded"] : null)) : (0));
            // line 3
            echo "\t";
            $context["count"] = twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null));
            // line 4
            echo "\t";
            $context["i"] = 0;
            // line 5
            echo "\t";
            if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
                // line 6
                echo "\t\t<div class=\"ltabs-items-inner owl2-carousel ltabs-slider products-list grid\">
\t";
            }
            // line 8
            echo "\t";
            $context["countItem"] = twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null));
            // line 9
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_items"]) ? $context["child_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 11
                echo "\t\t";
                $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                // line 12
                echo "\t\t";
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 1) || ((isset($context["rows"]) ? $context["rows"] : null) == 1)))) {
                    // line 13
                    echo "\t\t\t<div class=\"ltabs-item product-layout product-grid\">
        ";
                }
                // line 15
                echo "\t  \t";
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 16
                    echo "\t\t  \t<div class=\"spcat-item new-spcat-item product-layout product-grid\">
        ";
                }
                // line 17
                echo "\t\t
\t\t\t<div class=\"item-inner product-thumb product-item-container transition ";
                // line 18
                if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["countItem"]) ? $context["countItem"] : null))) {
                    echo " last-product ";
                }
                echo "\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 22
                if (($this->getAttribute($context["item"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    // line 23
                    echo "\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo $this->getAttribute($context["item"], "discount", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["item"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    // line 26
                    echo "\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 29
                if (($this->getAttribute($context["item"], "thumb", array()) && ((isset($context["product_image"]) ? $context["product_image"] : null) == 1))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<a class=\"lt-image\" 
\t\t\t\t\t\t\t   href=\"";
                    // line 31
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\"
\t\t\t\t\t\t\t\ttitle=\"";
                    // line 32
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 34
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["item"], "thumb", array());
                        echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 36
                        echo $this->getAttribute($context["item"], "thumb2", array());
                        echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\">
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["item"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 43
                if (((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null) || (isset($context["display_compare"]) ? $context["display_compare"] : null))) {
                    // line 44
                    echo "\t\t\t\t\t<div class=\"button-group cartinfo--static\">
\t\t\t\t\t\t<div class=\"button-inner so-quickview\">
\t\t\t\t\t\t\t<a class=\"lt-image hidden\" 
\t\t\t\t\t\t\t\tdata-product='";
                    // line 47
                    echo $this->getAttribute($context["item"], "product_id", array());
                    echo "' 
\t\t\t\t\t\t\t   \thref=\"";
                    // line 48
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\"
\t\t\t\t\t\t\t   \ttitle=\"";
                    // line 49
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 52
                    if (((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null) == 1)) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["item"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["display_compare"]) ? $context["display_compare"] : null) == 1)) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "\" onclick=\"compare.add('";
                        echo $this->getAttribute($context["item"], "product_id", array());
                        echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t";
                // line 64
                if (((isset($context["product_display_title"]) ? $context["product_display_title"] : null) == 1)) {
                    // line 65
                    echo "\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 66
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "name", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "name_maxlength", array());
                    echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t";
                }
                // line 69
                echo "
\t\t\t\t\t\t";
                // line 70
                if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                    // line 71
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t  \t";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 73
                        echo "\t\t\t\t\t\t\t  \t\t";
                        if (($this->getAttribute($context["item"], "rating", array()) < $context["j"])) {
                            // line 74
                            echo "\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  \t\t";
                        } else {
                            // line 76
                            echo "\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  \t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t  \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 81
                echo "
\t\t\t\t\t\t";
                // line 82
                if (($this->getAttribute($context["item"], "price", array()) && ((isset($context["product_display_price"]) ? $context["product_display_price"] : null) == 1))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t  \t";
                    // line 84
                    if (twig_test_empty($this->getAttribute($context["item"], "special", array()))) {
                        // line 85
                        echo "\t\t\t\t\t\t\t  \t\t";
                        echo $this->getAttribute($context["item"], "price", array());
                        echo "
\t\t\t\t\t\t\t  \t";
                    } else {
                        // line 87
                        echo "\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                        echo $this->getAttribute($context["item"], "special", array());
                        echo "</span>
\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                        // line 88
                        echo $this->getAttribute($context["item"], "price", array());
                        echo "</span>
\t\t\t\t\t\t\t  \t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  \t";
                    // line 91
                    if ($this->getAttribute($context["item"], "tax", array())) {
                        // line 92
                        echo "\t\t\t\t\t\t\t  \t\t<span class=\"price-tax\">";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_tax"), "method");
                        echo " ";
                        echo $this->getAttribute($context["item"], "tax", array());
                        echo "</span>
\t\t\t\t\t\t\t  \t";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 96
                echo "
\t\t\t\t\t\t";
                // line 97
                if (((isset($context["product_display_description"]) ? $context["product_display_description"] : null) == 1)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t<p>";
                    echo $this->getAttribute($context["item"], "description_maxlength", array());
                    echo "</p>
\t\t\t\t\t\t";
                }
                // line 100
                echo "
\t\t\t\t\t\t";
                // line 101
                if (((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null) == 1)) {
                    // line 102
                    echo "\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["item"], "product_id", array());
                    echo "');\"> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                    echo "</span></button>
\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t";
                // line 107
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["rows"]) ? $context["rows"] : null)) == 0) || ((isset($context["i"]) ? $context["i"] : null) == (isset($context["count"]) ? $context["count"] : null))))) {
                    // line 108
                    echo "        </div>
    \t";
                }
                // line 110
                echo "    \t
    \t";
                // line 111
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 112
                    echo "    \t</div>
    \t";
                }
                // line 114
                echo "        
        ";
                // line 115
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 116
                    echo "\t        ";
                    $context["clear"] = "clr1";
                    // line 117
                    echo "\t        ";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr2");
                        echo " ";
                    }
                    // line 118
                    echo "\t        ";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr3");
                        echo " ";
                    }
                    // line 119
                    echo "\t        ";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr4");
                        echo " ";
                    }
                    // line 120
                    echo "\t        ";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr5");
                        echo " ";
                    }
                    // line 121
                    echo "\t        ";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr6");
                        echo " ";
                    }
                    // line 122
                    echo "\t        <div class=\"";
                    echo (isset($context["clear"]) ? $context["clear"] : null);
                    echo "\"></div>
        ";
                }
                // line 123
                echo "\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "
\t";
            // line 126
            if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
                // line 127
                echo "\t\t</div>
\t";
            }
        } else {
            // line 130
            echo "\t";
            echo "Has no content to show";
            echo "
";
        }
        // line 132
        echo "

";
        // line 134
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 135
            echo "    <script type=\"text/javascript\">
    \tjQuery(document).ready(function (\$) {
    \t\tvar \$tag_id = \$('#";
            // line 137
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "'),
    \t\t\tparent_active = \$('.spcat-items-selected', \$tag_id),
    \t\t\ttotal_product = parent_active.data('total'),
    \t\t\ttab_active = \$('.ltabs-items-inner',parent_active),
    \t\t\t_delay = ";
            // line 141
            echo (isset($context["product_delay"]) ? $context["product_delay"] : null);
            echo ",
    \t\t\t_duration = ";
            // line 142
            echo (isset($context["product_duration"]) ? $context["product_duration"] : null);
            echo ",
    \t\t\t_effect = '";
            // line 143
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "',
    \t\t\tnb_column0 = ";
            // line 144
            echo (isset($context["product_column0"]) ? $context["product_column0"] : null);
            echo ",
    \t\t\tnb_column1 = ";
            // line 145
            echo (isset($context["product_column1"]) ? $context["product_column1"] : null);
            echo ",
    \t\t\tnb_column2 = ";
            // line 146
            echo (isset($context["product_column2"]) ? $context["product_column2"] : null);
            echo ",
    \t\t\tnb_column3 = ";
            // line 147
            echo (isset($context["product_column3"]) ? $context["product_column3"] : null);
            echo ",
    \t\t\tnb_column4 = ";
            // line 148
            echo (isset($context["product_column4"]) ? $context["product_column4"] : null);
            echo ";

\t\t\ttab_active.owlCarousel2({
\t\t\t\trtl: ";
            // line 151
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\tnav: ";
            // line 152
            echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
            echo ",
\t\t\t\tdots: false,
\t\t\t\tmargin: 0,
\t\t\t\tloop:  ";
            // line 155
            echo (isset($context["slider_display_loop"]) ? $context["slider_display_loop"] : null);
            echo ",
\t\t\t\tautoplay: ";
            // line 156
            echo (isset($context["slider_auto_play"]) ? $context["slider_auto_play"] : null);
            echo ",
\t\t\t\tautoplayHoverPause: ";
            // line 157
            echo (isset($context["slider_auto_hover_pause"]) ? $context["slider_auto_hover_pause"] : null);
            echo ",
\t\t\t\tautoplayTimeout: ";
            // line 158
            echo (isset($context["slider_auto_interval_timeout"]) ? $context["slider_auto_interval_timeout"] : null);
            echo ",
\t\t\t\tautoplaySpeed: ";
            // line 159
            echo (isset($context["slider_auto_play_speed"]) ? $context["slider_auto_play_speed"] : null);
            echo ",
\t\t\t\tmouseDrag: ";
            // line 160
            echo (isset($context["slider_mouse_drag"]) ? $context["slider_mouse_drag"] : null);
            echo ",
\t\t\t\ttouchDrag: ";
            // line 161
            echo (isset($context["slider_touch_drag"]) ? $context["slider_touch_drag"] : null);
            echo ",
\t\t\t\tnavRewind: true,
\t\t\t\tnavText: [ '', '' ],
\t\t\t\tresponsive: {
\t\t\t\t\t0: {
\t\t\t\t\t\titems: nb_column4,
\t\t\t\t\t\tnav: (total_product/";
            // line 167
            echo (isset($context["rows"]) ? $context["rows"] : null);
            echo ") >= nb_column4  ? ";
            echo ((((isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null) == 1)) ? ("true") : ("false"));
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t480: {
\t\t\t\t\t\titems: nb_column3,
\t\t\t\t\t\tnav: (total_product/";
            // line 171
            echo (isset($context["rows"]) ? $context["rows"] : null);
            echo ") >= nb_column3 ? ";
            echo ((((isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null) == 1)) ? ("true") : ("false"));
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t768: {
\t\t\t\t\t\titems: nb_column2,
\t\t\t\t\t\tnav: (total_product/";
            // line 175
            echo (isset($context["rows"]) ? $context["rows"] : null);
            echo ") >= nb_column2 ? ";
            echo ((((isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null) == 1)) ? ("true") : ("false"));
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t992: {
\t\t\t\t\t\titems: nb_column1,
\t\t\t\t\t\tnav: (total_product/";
            // line 179
            echo (isset($context["rows"]) ? $context["rows"] : null);
            echo ") >= nb_column1 ? ";
            echo ((((isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null) == 1)) ? ("true") : ("false"));
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t1200: {
\t\t\t\t\t\titems: nb_column0,
\t\t\t\t\t\tnav: (total_product/";
            // line 183
            echo (isset($context["rows"]) ? $context["rows"] : null);
            echo ") >= nb_column0  ? ";
            echo ((((isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null) == 1)) ? ("true") : ("false"));
            echo " : false
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\ttab_active.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\tvar \$item_active = \$(\".ltabs-items-inner .owl2-item.active\", \$tag_id);
\t\t\t\t_UngetAnimate(\$item_active);
\t\t\t});

\t\t\ttab_active.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\tvar \$item_active = \$(\".ltabs-items-inner .owl2-item.active\", \$tag_id);
\t\t\t\tvar \$item = \$(\".ltabs-items-inner .owl2-item\", \$tag_id);
\t\t\t\t_UngetAnimate(\$item);

\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t} else {
\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t}
\t\t\t});

\t\t\tvar \$item = \$(\".owl2-item\", \$tag_id);
\t\t\t_UngetAnimate(\$item);
\t\t\t_getAnimate(\$item);

\t\t\tfunction _getAnimate(\$el) {
\t\t\t\tif (_effect == \"none\") return;
\t\t\t\ttab_active.removeClass(\"extra-animate\");
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t}).animate({opacity: 1});

\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\ttab_active.addClass(\"extra-animate\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_super_category/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 183,  528 => 179,  519 => 175,  510 => 171,  501 => 167,  492 => 161,  488 => 160,  484 => 159,  480 => 158,  476 => 157,  472 => 156,  468 => 155,  462 => 152,  458 => 151,  452 => 148,  448 => 147,  444 => 146,  440 => 145,  436 => 144,  432 => 143,  428 => 142,  424 => 141,  417 => 137,  413 => 135,  411 => 134,  407 => 132,  401 => 130,  396 => 127,  394 => 126,  391 => 125,  384 => 123,  378 => 122,  371 => 121,  364 => 120,  357 => 119,  350 => 118,  343 => 117,  340 => 116,  338 => 115,  335 => 114,  331 => 112,  329 => 111,  326 => 110,  322 => 108,  320 => 107,  315 => 104,  307 => 102,  305 => 101,  302 => 100,  296 => 98,  294 => 97,  291 => 96,  287 => 94,  279 => 92,  277 => 91,  274 => 90,  269 => 88,  264 => 87,  258 => 85,  256 => 84,  253 => 83,  251 => 82,  248 => 81,  244 => 79,  238 => 78,  234 => 76,  230 => 74,  227 => 73,  223 => 72,  220 => 71,  218 => 70,  215 => 69,  203 => 66,  200 => 65,  198 => 64,  193 => 61,  188 => 58,  180 => 56,  177 => 55,  169 => 53,  167 => 52,  161 => 49,  155 => 48,  151 => 47,  146 => 44,  144 => 43,  141 => 42,  137 => 40,  129 => 38,  122 => 36,  115 => 35,  113 => 34,  108 => 32,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  88 => 26,  85 => 25,  79 => 23,  77 => 22,  68 => 18,  65 => 17,  61 => 16,  58 => 15,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  40 => 9,  37 => 8,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if child_items is not empty %}*/
/* 	{% set k = rl_loaded is defined ? rl_loaded : 0 %}*/
/* 	{% set count = child_items|length %}*/
/* 	{% set i = 0 %}*/
/* 	{% if type_show == 'slider' %}*/
/* 		<div class="ltabs-items-inner owl2-carousel ltabs-slider products-list grid">*/
/* 	{% endif %}*/
/* 	{% set countItem = child_items|length %}*/
/* 	{% for item in child_items %}*/
/* 		{% set i = i + 1 %}*/
/* 		{% set k = k + 1 %}*/
/* 		{% if type_show == 'slider' and (i % rows == 1 or rows == 1) %}*/
/* 			<div class="ltabs-item product-layout product-grid">*/
/*         {% endif %}*/
/* 	  	{% if type_show == 'loadmore' %}*/
/* 		  	<div class="spcat-item new-spcat-item product-layout product-grid">*/
/*         {% endif %}		*/
/* 			<div class="item-inner product-thumb product-item-container transition {% if i == countItem %} last-product {% endif %}">*/
/* 				<div class="left-block">*/
/* 					<div class="image">*/
/* 						<div class="box-label">*/
/* 						{% if item.special and display_sale %}*/
/* 							<span class="label-product label-sale">{{ item.discount }}</span>*/
/* 						{% endif %}*/
/* 						{% if item.productNew and display_new %}*/
/* 							<span class="label-product label-new">{{ objlang.get('text_new') }}</span>*/
/* 						{% endif %}*/
/* 						</div>*/
/* 						{% if item.thumb and product_image == 1 %}*/
/* 							<a class="lt-image" */
/* 							   href="{{ item.link }}" target="{{ item_link_target }}"*/
/* 								title="{{ item.name }}">*/
/* 								*/
/* 								{% if product_image_num ==2 %}*/
/* 									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ item.thumb }}" class="img-thumb1 lazyload" alt="{{ item.name }}">*/
/* 									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ item.thumb2 }}" class="img-thumb2 lazyload" alt="{{ item.name }}">*/
/* 								{% else %}*/
/* 									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ item.thumb }}" alt="{{ item.name }}" class="lazyload">*/
/* 								{% endif %}*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					{% if display_wishlist or display_compare %}*/
/* 					<div class="button-group cartinfo--static">*/
/* 						<div class="button-inner so-quickview">*/
/* 							<a class="lt-image hidden" */
/* 								data-product='{{item.product_id}}' */
/* 							   	href="{{ item.href }}" target="{{ item_link_target }}"*/
/* 							   	title="{{ item.name }}">*/
/* 								*/
/* 							</a>*/
/* 							{% if display_wishlist == 1 %}*/
/* 								<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ item.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 							{% endif %}*/
/* 							{% if display_compare == 1 %}*/
/* 								<button class="compare btn-button" type="button" data-toggle="tooltip" title="{{ objlang.get('button_compare') }}" onclick="compare.add('{{ item.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="right-block">*/
/* 					<div class="caption">*/
/* 						{% if product_display_title == 1 %}*/
/* 							<h4>*/
/* 								<a href="{{ item.link }}" title="{{ item.name }}" target="{{ item_link_target }}">{{ item.name_maxlength }}</a>*/
/* 							</h4>*/
/* 						{% endif %}*/
/* */
/* 						{% if display_rating %}*/
/* 							<div class="rating">*/
/* 							  	{% for j in 1..5 %}*/
/* 							  		{% if item.rating < j %}*/
/* 							  			<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							  		{% else %}*/
/* 							  			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 							  		{% endif %}*/
/* 							  	{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if item.price and product_display_price == 1 %}*/
/* 							<p class="price">*/
/* 							  	{% if item.special is empty %}*/
/* 							  		{{ item.price }}*/
/* 							  	{% else %}*/
/* 							  		<span class="price-new">{{ item.special }}</span>*/
/* 							  		<span class="price-old">{{ item.price }}</span>*/
/* 							  	{% endif %}*/
/* 							  */
/* 							  	{% if item.tax %}*/
/* 							  		<span class="price-tax">{{ objlang.get('text_tax') }} {{ item.tax }}</span>*/
/* 							  	{% endif %}*/
/* 							</p>*/
/* 						{% endif %}*/
/* */
/* 						{% if product_display_description == 1 %}*/
/* 							<p>{{ item.description_maxlength }}</p>*/
/* 						{% endif %}*/
/* */
/* 						{% if display_add_to_cart == 1 %}*/
/* 							<button class="addToCart btn-button" type="button" onclick="cart.add('{{ item.product_id }}');"> <span class="hidden-xs hidden-sm hidden-md">{{ objlang.get('button_cart') }}</span></button>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>	*/
/* 			</div>*/
/* 		{% if type_show == 'slider' and (i % rows == 0 or i == count) %}*/
/*         </div>*/
/*     	{% endif %}*/
/*     	*/
/*     	{% if type_show == 'loadmore' %}*/
/*     	</div>*/
/*     	{% endif %}*/
/*         */
/*         {% if type_show == 'loadmore' %}*/
/* 	        {% set clear = 'clr1' %}*/
/* 	        {% if k % 2 == 0 %} {% set clear = clear ~ ' clr2' %} {% endif %}*/
/* 	        {% if k % 3 == 0 %} {% set clear = clear ~ ' clr3' %} {% endif %}*/
/* 	        {% if k % 4 == 0 %} {% set clear = clear ~ ' clr4' %} {% endif %}*/
/* 	        {% if k % 5 == 0 %} {% set clear = clear ~ ' clr5' %} {% endif %}*/
/* 	        {% if k % 6 == 0 %} {% set clear = clear ~ ' clr6' %} {% endif %}*/
/* 	        <div class="{{ clear }}"></div>*/
/*         {% endif %}		*/
/* 	{% endfor %}*/
/* */
/* 	{% if type_show == 'slider' %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% else %}*/
/* 	{{ 'Has no content to show' }}*/
/* {% endif %}*/
/* */
/* */
/* {% if type_show == 'slider' %}*/
/*     <script type="text/javascript">*/
/*     	jQuery(document).ready(function ($) {*/
/*     		var $tag_id = $('#{{ tag_id }}'),*/
/*     			parent_active = $('.spcat-items-selected', $tag_id),*/
/*     			total_product = parent_active.data('total'),*/
/*     			tab_active = $('.ltabs-items-inner',parent_active),*/
/*     			_delay = {{ product_delay }},*/
/*     			_duration = {{ product_duration }},*/
/*     			_effect = '{{ effect }}',*/
/*     			nb_column0 = {{ product_column0 }},*/
/*     			nb_column1 = {{ product_column1 }},*/
/*     			nb_column2 = {{ product_column2 }},*/
/*     			nb_column3 = {{ product_column3 }},*/
/*     			nb_column4 = {{ product_column4 }};*/
/* */
/* 			tab_active.owlCarousel2({*/
/* 				rtl: {{ direction }},*/
/* 				nav: {{ slider_display_navigation }},*/
/* 				dots: false,*/
/* 				margin: 0,*/
/* 				loop:  {{ slider_display_loop }},*/
/* 				autoplay: {{ slider_auto_play }},*/
/* 				autoplayHoverPause: {{ slider_auto_hover_pause }},*/
/* 				autoplayTimeout: {{ slider_auto_interval_timeout }},*/
/* 				autoplaySpeed: {{ slider_auto_play_speed }},*/
/* 				mouseDrag: {{ slider_mouse_drag }},*/
/* 				touchDrag: {{ slider_touch_drag }},*/
/* 				navRewind: true,*/
/* 				navText: [ '', '' ],*/
/* 				responsive: {*/
/* 					0: {*/
/* 						items: nb_column4,*/
/* 						nav: (total_product/{{ rows }}) >= nb_column4  ? {{ slider_display_navigation == 1 ? "true" : "false" }} : false*/
/* 					},*/
/* 					480: {*/
/* 						items: nb_column3,*/
/* 						nav: (total_product/{{ rows }}) >= nb_column3 ? {{ slider_display_navigation == 1 ? "true" : "false" }} : false*/
/* 					},*/
/* 					768: {*/
/* 						items: nb_column2,*/
/* 						nav: (total_product/{{ rows }}) >= nb_column2 ? {{ slider_display_navigation == 1 ? "true" : "false" }} : false*/
/* 					},*/
/* 					992: {*/
/* 						items: nb_column1,*/
/* 						nav: (total_product/{{ rows }}) >= nb_column1 ? {{ slider_display_navigation == 1 ? "true" : "false" }} : false*/
/* 					},*/
/* 					1200: {*/
/* 						items: nb_column0,*/
/* 						nav: (total_product/{{ rows }}) >= nb_column0  ? {{ slider_display_navigation == 1 ? "true" : "false" }} : false*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			tab_active.on("translate.owl.carousel2", function (e) {*/
/* 				var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);*/
/* 				_UngetAnimate($item_active);*/
/* 			});*/
/* */
/* 			tab_active.on("translated.owl.carousel2", function (e) {*/
/* 				var $item_active = $(".ltabs-items-inner .owl2-item.active", $tag_id);*/
/* 				var $item = $(".ltabs-items-inner .owl2-item", $tag_id);*/
/* 				_UngetAnimate($item);*/
/* */
/* 				if ($item_active.length > 1 && _effect != "none") {*/
/* 					_getAnimate($item_active);*/
/* 				} else {*/
/* 					$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 				}*/
/* 			});*/
/* */
/* 			var $item = $(".owl2-item", $tag_id);*/
/* 			_UngetAnimate($item);*/
/* 			_getAnimate($item);*/
/* */
/* 			function _getAnimate($el) {*/
/* 				if (_effect == "none") return;*/
/* 				tab_active.removeClass("extra-animate");*/
/* 				$el.each(function (i) {*/
/* 					var $_el = $(this);*/
/* 					$(this).css({*/
/* 						"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-webkit-animation-delay": +i * _delay + "ms",*/
/* 						"-moz-animation-delay": +i * _delay + "ms",*/
/* 						"-o-animation-delay": +i * _delay + "ms",*/
/* 						"animation-delay": +i * _delay + "ms",*/
/* 						"opacity": 1*/
/* 					}).animate({opacity: 1});*/
/* */
/* 					if (i == $el.size() - 1) {*/
/* 						tab_active.addClass("extra-animate");*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			function _UngetAnimate($el) {*/
/* 				$el.each(function (i) {*/
/* 					$(this).css({*/
/* 						"animation": "",*/
/* 						"-webkit-animation": "",*/
/* 						"-moz-animation": "",*/
/* 						"-o-animation": "",*/
/* 						"opacity": 1*/
/* 					});*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 	</script>*/
/* {% endif %}*/
