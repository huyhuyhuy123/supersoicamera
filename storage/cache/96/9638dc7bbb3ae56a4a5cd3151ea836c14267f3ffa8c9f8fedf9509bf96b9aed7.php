<?php

/* so-mobile/template/product/product.twig */
class __TwigTemplate_f7b45ffcb97616974b861e884350b10c8a1311c77734a13ada5cc0ec06834a2e extends Twig_Template
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

<div class=\"container page-category\">
\t
  <div class=\"row\">";
        // line 5
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    
    <div id=\"content\" class=\"col-xs-12\">
    
\t\t<div class=\"row product-view product-detail\"> 
\t\t
\t\t";
        // line 12
        echo "\t\t<div class=\"content-product-left  col-xs-12\">
\t\t\t<div class=\"so-loadeding\" ></div>
\t\t\t";
        // line 14
        if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
            // line 15
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-primary open-sidebar \"><i class=\"fa fa-bars\"></i>";
            echo (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t";
        }
        // line 18
        echo "\t\t\t
\t\t\t";
        // line 19
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 20
            echo "\t\t\t\t
\t\t\t\t";
            // line 22
            echo "\t\t\t\t<div class=\"large-image \">
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "new_status"), "method") && (isset($context["day_number_boolean"]) ? $context["day_number_boolean"] : null))) {
                echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                // line 26
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                echo " </span>
\t\t\t\t\t\t";
            }
            // line 27
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 30
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                echo " 
\t\t\t\t\t\t";
                // line 31
                if (((isset($context["price"]) ? $context["price"] : null) && (isset($context["special"]) ? $context["special"] : null))) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                    // line 33
                    echo (isset($context["discount"]) ? $context["discount"] : null);
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 35
                echo " 
\t\t\t\t\t\t";
            }
            // line 36
            echo " 
\t\t\t\t\t</div> 
\t\t\t\t\t<img itemprop=\"image\" class=\"product-image-zoom\" src=\"";
            // line 38
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-zoom-image=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 42
            echo "\t\t\t\t<div id=\"thumb-slider\" class=\"full_slider contentslider contentslider--default\" data-rtl=\"";
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"10\"  data-items_column0=\"4\" data-items_column1=\"3\" data-items_column2=\"5\"
\t\t\t\tdata-items_column3=\"4\" data-items_column4=\"3\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"image-additional\">
\t\t\t\t\t\t<a data-index=\"";
                // line 46
                echo $context["key"];
                echo "\" class=\"img thumbnail \" data-image=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 47
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t";
        }
        // line 55
        echo "\t\t</div>
        ";
        // line 57
        echo "
\t\t";
        // line 59
        echo "\t\t<div class=\"content-product-right col-xs-12\">
\t\t\t
\t\t\t
\t\t\t";
        // line 62
        if ((isset($context["model"]) ? $context["model"] : null)) {
            // line 63
            echo "\t\t\t\t<div class=\"model font-ct\"><span>";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo " </span> ";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</div>
\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t
\t\t\t";
        // line 66
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 67
            echo "\t\t\t";
            // line 68
            echo "\t\t\t<div class=\"box-review\">
\t\t\t\t<div class=\"rating\">
\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "\t\t\t\t\t\t";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 73
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 78
        echo "\t\t
\t\t\t";
        // line 79
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 80
            echo "\t\t\t";
            // line 81
            echo "\t\t\t<div class=\"product_page_price price\" itemprop=\"offerDetails\" itemscope itemtype=\"http://data-vocabulary.org/Offer\">
\t\t\t\t";
            // line 82
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 83
                echo "\t\t\t        <span class=\"price-new\"><span itemprop=\"price\" id=\"price-old\"> 
 ";
                // line 84
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ((isset($context["price_0"]) ? $context["price_0"] : null) <= 0))) {
                    echo " 
 ";
                    // line 85
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                        echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                        // line 86
                        echo (isset($context["base"]) ? $context["base"] : null);
                        echo "index.php?route=extension/module/so_call_for_price&product_id=";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                        echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold; font-size: 18px;\"><i class=\"fa fa-phone\" style=\"font-size: 18px;\"></i> ";
                        echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                        echo "</a> 
 ";
                    }
                    // line 87
                    echo " 
 ";
                } else {
                    // line 88
                    echo " 
  
 ";
                    // line 90
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ((isset($context["price_0"]) ? $context["price_0"] : null) <= 0))) {
                        echo " 
 ";
                        // line 91
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                            echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 92
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                            echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</a> 
 ";
                        }
                        // line 93
                        echo " 
 ";
                    } else {
                        // line 94
                        echo " 
 ";
                        // line 95
                        echo (isset($context["price"]) ? $context["price"] : null);
                        echo " 
 ";
                    }
                    // line 96
                    echo " 
  
 ";
                }
                // line 98
                echo " 
 </span></span>
\t\t\t     ";
            } else {
                // line 101
                echo "\t\t\t        <span class=\"price-new\"><span itemprop=\"price\" id=\"price-special\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span></span>
\t\t\t\t   <span class=\"price-old\" id=\"price-old\">";
                // line 102
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
\t\t\t     ";
            }
            // line 104
            echo "\t\t\t\t
\t\t\t\t  
 ";
            // line 106
            if ((((isset($context["tax"]) ? $context["tax"] : null) && $this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array())) && ((isset($context["price_0"]) ? $context["price_0"] : null) > 0))) {
                echo " 
 
\t\t\t\t\t<div class=\"price-tax\"><span>";
                // line 108
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo "</span> ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t
\t\t\t\t";
            // line 111
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                echo " 
\t\t\t\t\t<ul class=\"list-unstyled\t\">
\t\t\t\t\t";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    echo " 
\t\t\t\t\t\t<li>";
                    // line 114
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo " ";
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo " ";
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo " </li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 117
            echo " \t 
\t\t\t</div>
\t\t\t\t
\t\t\t";
        }
        // line 121
        echo "\t\t\t
\t\t\t<div class=\"box-link\">
\t\t\t\t<div class=\"add-to-links wish_comp\">
\t\t\t\t\t<ul class=\"blank\">
\t\t\t\t\t\t";
        // line 125
        if ((isset($context["product_video"]) ? $context["product_video"] : null)) {
            // line 126
            echo "\t\t\t           \t<li class=\"compare\"> <a class=\"thumb-video\" href=\"";
            echo (isset($context["product_video"]) ? $context["product_video"] : null);
            echo "\"><i class=\"fa fa-youtube-play fa-lg\"></i> </a> </li>
\t\t\t        \t";
        }
        // line 128
        echo "
\t\t\t        \t";
        // line 129
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "wishlist_status"), "method")) {
            echo " 
\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t<a onclick=\"wishlist.add(";
            // line 131
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo ");\"><i class=\"fa fa-heart\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 134
        echo "
\t\t\t\t\t\t";
        // line 135
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "compare_status"), "method")) {
            echo " 
\t\t\t\t\t\t<li class=\"compare\">
\t\t\t\t\t\t\t<a onclick=\"compare.add(";
            // line 137
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo ");\"><i class=\"fa fa-retweet\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"product-box-desc\">
\t\t\t\t<ul class=\"inner-box-desc\">
\t\t\t\t\t";
        // line 146
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 147
            echo "\t\t\t\t\t\t<li class=\"brand\"><span>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " </span><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 150
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 151
            echo "\t\t\t\t\t\t<li class=\"reward\"><span>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
\t\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t\t
\t\t\t\t\t<li class=\"stock\"><span>";
        // line 154
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</span> <i class=\"fa fa-check-square-o\"></i>";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>\t
\t\t\t\t</ul>\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"product\">\t
\t\t\t\t";
        // line 159
        if ((isset($context["options"]) ? $context["options"] : null)) {
            echo " 
\t\t\t\t<div class=\"options-mobi clearfix\">
\t\t\t\t
\t\t\t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 163
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 164
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 165
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<select name=\"option[";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control width50\">
\t\t\t\t\t\t\t<option value=\"\">";
                    // line 167
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 168
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 169
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
\t\t\t\t\t\t\t";
                        // line 170
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 178
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 179
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 180
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 181
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div id=\"input-option";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 183
                    $context["radio_style"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "radio_style"), "method");
                    // line 184
                    echo "\t\t\t\t\t\t\t";
                    $context["radio_type"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (" radio-type-button") : (""));
                    // line 185
                    echo "
\t\t\t\t\t\t\t";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t";
                        // line 187
                        $context["radio_image"] = (($this->getAttribute($context["option_value"], "image", array())) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t";
                        // line 188
                        $context["radio_price"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (($this->getAttribute($context["option_value"], "price_prefix", array()) . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"radio ";
                        // line 190
                        echo ((isset($context["radio_image"]) ? $context["radio_image"] : null) . (isset($context["radio_type"]) ? $context["radio_type"] : null));
                        echo "\">
\t\t\t\t\t\t\t\t\t<label>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 192
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 193
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 195
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo " \" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "  ";
                            echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 196
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 197
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 198
                        if (($this->getAttribute($context["option_value"], "price", array()) && ((isset($context["radio_style"]) ? $context["radio_style"] : null) != "1"))) {
                            echo " (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo " )";
                        }
                        echo " 
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "\t
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
                    // line 205
                    if ((isset($context["radio_style"]) ? $context["radio_style"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 208
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t   \$('#input-option";
                        // line 209
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "  span').removeClass(\"active\");
\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 219
                echo "
\t\t\t\t\t";
                // line 220
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 221
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 222
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  \t<div id=\"input-option";
                    // line 223
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 224
                    $context["radio_style"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "radio_style"), "method");
                    // line 225
                    echo "\t\t\t\t\t\t\t";
                    $context["radio_type"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (" radio-type-button") : (""));
                    // line 226
                    echo "
\t\t\t\t\t\t\t";
                    // line 227
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t";
                        // line 228
                        $context["radio_image"] = (($this->getAttribute($context["option_value"], "image", array())) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t";
                        // line 229
                        $context["radio_price"] = (((isset($context["radio_style"]) ? $context["radio_style"] : null)) ? (($this->getAttribute($context["option_value"], "price_prefix", array()) . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"checkbox  ";
                        // line 231
                        echo ((isset($context["radio_image"]) ? $context["radio_image"] : null) . (isset($context["radio_type"]) ? $context["radio_type"] : null));
                        echo "\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 233
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 234
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 235
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 236
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo " \" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "  ";
                            echo (isset($context["radio_price"]) ? $context["radio_price"] : null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 237
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 239
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 240
                        if (($this->getAttribute($context["option_value"], "price", array()) && ((isset($context["radio_style"]) ? $context["radio_style"] : null) != "1"))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t(";
                            // line 241
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo " )
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 242
                        echo " 
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 247
                    echo "\t
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
                    // line 249
                    if ((isset($context["radio_style"]) ? $context["radio_style"] : null)) {
                        echo " 
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 252
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                    }
                    // line 257
                    echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 262
                echo "
\t\t\t\t\t";
                // line 263
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 264
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 265
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 266
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 269
                echo "
\t\t\t\t\t";
                // line 270
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 271
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 272
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  <textarea name=\"option[";
                    // line 273
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 276
                echo "
\t\t\t\t\t";
                // line 277
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 278
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  <label class=\"control-label\">";
                    // line 279
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  <button type=\"button\" id=\"button-upload";
                    // line 280
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t  <input type=\"hidden\" name=\"option[";
                    // line 281
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 284
                echo "
\t\t\t\t\t";
                // line 285
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 286
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 287
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  <div class=\"input-group date\">
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 289
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 295
                echo "
\t\t\t\t\t";
                // line 296
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 297
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 298
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t  <div class=\"input-group datetime\">
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 300
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 307
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 308
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 309
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 311
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 317
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 321
        echo "\t\t\t\t


\t\t\t\t<div class=\"box-cart clearfix\">
\t\t\t\t\t";
        // line 325
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 326
            echo "\t\t\t\t\t<h3>";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
            // line 329
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
\t\t\t\t\t\t";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 331
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t  <div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 337
        echo "\t\t\t\t  
\t\t\t\t\t<div class=\"form-group box-info-product\">
\t\t\t\t\t\t<div class=\"option quantity\">
\t\t\t\t\t\t\t<div class=\"input-group quantity-control\">
\t\t\t\t\t\t\t\t  <span class=\"input-group-addon product_quantity_down fa fa-minus\"></span>
\t\t\t\t\t\t\t\t  <input class=\"form-control\" type=\"text\" name=\"quantity\" value=\"";
        // line 342
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 343
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  <span class=\"input-group-addon product_quantity_up fa fa-plus\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-action\">
\t\t\t\t\t\t\t";
        // line 349
        echo "\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t<input type=\"button\"  value=\"";
        // line 350
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" id=\"button-cart\" class=\"btn btn-mega btn-lg \" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
        // line 357
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 358
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 360
        echo "
\t\t\t\t\t";
        // line 361
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_page_button"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_socialshare"), "method"))) {
            // line 362
            echo "\t\t\t\t\t<div class=\"form-group social-share clearfix\">
\t\t\t\t\t\t";
            // line 363
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_socialshare"), "method")), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 366
        echo "\t\t\t\t\t<!-- Go to www.addthis.com/dashboard to customize your tools -->
\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5\"></script>

\t\t\t\t\t";
        // line 369
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 370
            echo "\t\t\t\t\t<div id=\"tab-tags\" class=\"box-info-product\">
\t\t\t\t        ";
            // line 371
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
\t\t\t\t        ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 373
                echo "\t\t\t\t        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a class=\"btn btn-primary btn-sm\" href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>
\t\t\t\t        ";
                } else {
                    // line 374
                    echo " 
\t\t\t\t        ";
                    // line 375
                    if ( !twig_test_empty($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"))) {
                        // line 376
                        echo "\t\t\t\t        <a class=\"btn btn-primary btn-sm 22\" href=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                        echo "</a> ";
                    }
                    // line 377
                    echo "\t\t\t\t        ";
                }
                // line 378
                echo "\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t        
\t\t\t\t     
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 383
        echo "

\t\t\t\t</div>

\t\t\t</div>
\t\t\t\t
\t\t</div>
\t\t";
        // line 391
        echo "
\t\t<div class=\"content-product-midde clearfix\">
\t\t\t";
        // line 394
        echo "\t\t\t";
        $context["tabs_position"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "tabs_position"), "method");
        // line 395
        echo "\t\t\t";
        $context["showmore"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshowmore"), "method");
        // line 396
        echo "\t\t\t";
        if ((isset($context["showmore"]) ? $context["showmore"] : null)) {
            echo " ";
            $context["class_showmore"] = "showdown";
            // line 397
            echo "\t\t\t";
        } else {
            echo " ";
            $context["class_showmore"] = "showup";
            // line 398
            echo "\t\t\t";
        }
        // line 399
        echo "\t\t\t<div class=\"producttab \">
\t\t\t\t<div class=\"tabsslider col-xs-12\">
\t\t\t\t\t";
        // line 402
        echo "\t\t\t\t\t<ul class=\"nav nav-tabs font-sn\">
\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-description\">";
        // line 403
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>

\t\t\t            ";
        // line 405
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 406
            echo "\t\t\t           \t <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
\t\t\t            ";
        }
        // line 408
        echo "
\t\t\t            ";
        // line 409
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshipping"), "method")) {
            // line 410
            echo "\t\t\t\t\t\t <li><a href=\"#tab-contentshipping\" data-toggle=\"tab\">";
            echo (isset($context["tab_shipping"]) ? $context["tab_shipping"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 412
        echo "
\t\t\t\t\t\t";
        // line 413
        if ((isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null)) {
            // line 414
            echo "\t\t\t           \t <li><a href=\"#tab-customhtml\" data-toggle=\"tab\">";
            echo (isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null);
            echo "</a></li>
\t\t\t            ";
        }
        // line 416
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</ul>

\t\t\t
\t\t\t\t\t<div class=\"tab-content col-xs-12\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">
\t\t\t\t\t\t\t";
        // line 423
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 424
            echo "\t\t\t\t\t\t\t\t<h3 class=\"product-property-title\" > ";
            echo (isset($context["text_product_specifics"]) ? $context["text_product_specifics"] : null);
            echo "</h3>
\t\t\t\t              \t<ul class=\"product-property-list util-clearfix\">
\t\t\t\t\t                ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 427
                echo "\t\t\t\t\t               
\t\t\t\t\t                \t
\t\t\t\t\t\t                ";
                // line 429
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 430
                    echo "\t\t\t\t\t\t                <li class=\"property-item\">
\t\t\t\t\t\t                  <span class=\"propery-title\">";
                    // line 431
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</span>
\t\t\t\t\t\t                  <span class=\"propery-des\">";
                    // line 432
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</span>
\t\t\t\t\t\t                </li>
\t\t\t\t\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 435
                echo "\t\t\t\t\t                 \t
\t\t\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "\t\t\t\t              \t</ul>
\t\t\t\t            ";
        }
        // line 439
        echo "
\t\t\t\t            <h3 class=\"product-property-title\" > ";
        // line 440
        echo (isset($context["text_product_description"]) ? $context["text_product_description"] : null);
        echo "</h3>
\t\t\t\t            <div id=\"collapse-description\" class=\"desc-collapse ";
        // line 441
        echo (isset($context["class_showmore"]) ? $context["class_showmore"] : null);
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 442
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t";
        // line 445
        if ((isset($context["showmore"]) ? $context["showmore"] : null)) {
            // line 446
            echo "\t\t\t\t\t\t\t<div class=\"button-toggle\">
\t\t\t\t\t\t         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
\t\t\t\t\t\t            <span class=\"toggle-more\">";
            // line 448
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
            echo " <i class=\"fa fa-angle-down\"></i></span> 
\t\t\t\t\t\t            <span class=\"toggle-less\">";
            // line 449
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t\t\t\t\t\t\t</a>        
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 453
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t            ";
        // line 457
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 458
            echo "\t\t\t            <div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t            <form  id=\"form-review\">
\t\t\t\t                <div id=\"review\"></div>
\t\t\t\t                <h3 class=\"modtitle\">";
            // line 461
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h3>
\t\t\t\t                ";
            // line 462
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 463
                echo "\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t                  
\t\t\t\t                    <label class=\"control-label\" for=\"input-name\">";
                // line 465
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t                    <input type=\"text\" name=\"name\" value=\"";
                // line 466
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t                 
\t\t\t\t                </div>
\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t                  
\t\t\t\t                    <label class=\"control-label\" for=\"input-review\">";
                // line 471
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
\t\t\t\t                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t                    <div class=\"help-block\">";
                // line 473
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
\t\t\t\t                
\t\t\t\t                </div>
\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t                 
\t\t\t\t                    <label class=\"control-label\">";
                // line 478
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
\t\t\t\t                    &nbsp;&nbsp;&nbsp; ";
                // line 479
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t                    &nbsp;
\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t                    &nbsp;
\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t                    &nbsp;
\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t                    &nbsp;
\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t                    &nbsp;";
                // line 489
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "
\t\t\t\t                </div>
\t\t\t\t                ";
                // line 491
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
\t\t\t\t               
\t\t\t\t                  <div class=\"form-group\">
\t\t\t\t                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 494
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
\t\t\t\t                  </div>
\t\t\t\t               
\t\t\t\t                ";
            } else {
                // line 498
                echo "\t\t\t\t                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
\t\t\t\t                ";
            }
            // line 500
            echo "\t\t\t\t            </form>
\t\t\t            </div>
\t\t\t            ";
        }
        // line 503
        echo "
\t\t\t            ";
        // line 504
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enableshipping"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_contentshipping"), "method"))) {
            // line 505
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contentshipping\">
\t\t\t\t\t\t\t\t";
            // line 506
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_contentshipping"), "method")), "method");
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 509
        echo "
\t\t\t\t\t\t";
        // line 510
        if ((isset($context["product_tabtitle"]) ? $context["product_tabtitle"] : null)) {
            // line 511
            echo "\t\t\t\t\t\t<div class=\"tab-pane \" id=\"tab-customhtml\">";
            echo (isset($context["product_tabcontent"]) ? $context["product_tabcontent"] : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 513
        echo "\t\t\t           

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t</div>

\t\t";
        // line 522
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 523
            echo "\t\t<div class=\"content-product-bottom clearfix\">
\t\t\t";
            // line 524
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/related_product.twig"), "so-mobile/template/product/product.twig", 524)->display($context);
            // line 525
            echo "\t\t</div>
\t\t";
        }
        // line 527
        echo "
\t</div> 

    \t";
        // line 531
        echo "    </div>
    ";
        // line 532
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    </div>
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
\t\t\t
\t\t\t\t\$('#wrapper').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"fa fa-close close\" data-dismiss=\"alert\"></button></div>');
\t\t\t\t\$('#cart  .total-shopping-cart ').html(json['total'] );
\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\$('.text-danger').remove();
\t\t\t\ttimer = setTimeout(function () {
\t\t\t\t\t\$('.alert').addClass('fadeOut');
\t\t\t\t}, 4000);
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
        // line 695
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 699
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
\t
\t\tvar zoomCollection = '.large-image img';
\t\t\$( zoomCollection ).elevateZoom({
\t\t\tzoomType        :\"none\",
\t\t\tlensSize    :'200',
\t\t\teasing:true,
\t\t\t
\t\t\tgallery:'thumb-slider',
\t\t\tcursor: 'pointer',
\t\t\tgalleryActiveClass: \"active\",
\t\t});
\t\t\$(zoomCollection).bind('touchstart', function(){
\t\t    \$(zoomCollection).unbind('touchmove');
\t\t});

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
\t
\t\t
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
        // line 804
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1707 => 804,  1599 => 699,  1592 => 695,  1426 => 532,  1423 => 531,  1418 => 527,  1414 => 525,  1412 => 524,  1409 => 523,  1407 => 522,  1396 => 513,  1390 => 511,  1388 => 510,  1385 => 509,  1379 => 506,  1376 => 505,  1374 => 504,  1371 => 503,  1366 => 500,  1360 => 498,  1351 => 494,  1345 => 491,  1340 => 489,  1327 => 479,  1323 => 478,  1315 => 473,  1310 => 471,  1302 => 466,  1298 => 465,  1294 => 463,  1292 => 462,  1288 => 461,  1283 => 458,  1281 => 457,  1275 => 453,  1268 => 449,  1264 => 448,  1260 => 446,  1258 => 445,  1252 => 442,  1248 => 441,  1244 => 440,  1241 => 439,  1237 => 437,  1230 => 435,  1221 => 432,  1217 => 431,  1214 => 430,  1210 => 429,  1206 => 427,  1202 => 426,  1196 => 424,  1194 => 423,  1185 => 416,  1179 => 414,  1177 => 413,  1174 => 412,  1168 => 410,  1166 => 409,  1163 => 408,  1157 => 406,  1155 => 405,  1150 => 403,  1147 => 402,  1143 => 399,  1140 => 398,  1135 => 397,  1130 => 396,  1127 => 395,  1124 => 394,  1120 => 391,  1111 => 383,  1099 => 378,  1096 => 377,  1089 => 376,  1087 => 375,  1084 => 374,  1074 => 373,  1070 => 372,  1066 => 371,  1063 => 370,  1061 => 369,  1056 => 366,  1050 => 363,  1047 => 362,  1045 => 361,  1042 => 360,  1036 => 358,  1034 => 357,  1022 => 350,  1019 => 349,  1011 => 343,  1007 => 342,  1000 => 337,  994 => 333,  983 => 331,  979 => 330,  975 => 329,  968 => 326,  966 => 325,  960 => 321,  956 => 319,  949 => 317,  936 => 311,  929 => 309,  922 => 308,  920 => 307,  917 => 306,  904 => 300,  897 => 298,  890 => 297,  888 => 296,  885 => 295,  872 => 289,  865 => 287,  858 => 286,  856 => 285,  853 => 284,  845 => 281,  837 => 280,  833 => 279,  826 => 278,  824 => 277,  821 => 276,  809 => 273,  803 => 272,  796 => 271,  794 => 270,  791 => 269,  779 => 266,  773 => 265,  766 => 264,  764 => 263,  761 => 262,  754 => 257,  745 => 252,  739 => 249,  735 => 247,  724 => 242,  717 => 241,  713 => 240,  709 => 239,  705 => 237,  696 => 236,  692 => 235,  686 => 234,  680 => 233,  675 => 231,  670 => 229,  666 => 228,  660 => 227,  657 => 226,  654 => 225,  652 => 224,  648 => 223,  644 => 222,  637 => 221,  635 => 220,  632 => 219,  625 => 214,  616 => 209,  612 => 208,  606 => 205,  602 => 203,  584 => 198,  580 => 197,  577 => 196,  568 => 195,  564 => 194,  558 => 193,  552 => 192,  547 => 190,  542 => 188,  538 => 187,  532 => 186,  529 => 185,  526 => 184,  524 => 183,  520 => 182,  516 => 181,  509 => 180,  507 => 179,  504 => 178,  499 => 175,  492 => 173,  485 => 171,  483 => 170,  476 => 169,  472 => 168,  468 => 167,  462 => 166,  456 => 165,  449 => 164,  446 => 163,  442 => 162,  436 => 159,  426 => 154,  423 => 153,  415 => 151,  413 => 150,  410 => 149,  400 => 147,  398 => 146,  390 => 140,  384 => 137,  379 => 135,  376 => 134,  370 => 131,  365 => 129,  362 => 128,  356 => 126,  354 => 125,  348 => 121,  342 => 117,  338 => 116,  326 => 114,  320 => 113,  315 => 111,  312 => 110,  305 => 108,  300 => 106,  296 => 104,  291 => 102,  286 => 101,  281 => 98,  276 => 96,  271 => 95,  268 => 94,  264 => 93,  255 => 92,  251 => 91,  247 => 90,  243 => 88,  239 => 87,  230 => 86,  226 => 85,  222 => 84,  219 => 83,  217 => 82,  214 => 81,  212 => 80,  210 => 79,  207 => 78,  201 => 74,  195 => 73,  188 => 72,  184 => 71,  179 => 68,  177 => 67,  175 => 66,  172 => 65,  164 => 63,  162 => 62,  157 => 59,  154 => 57,  151 => 55,  145 => 51,  131 => 47,  123 => 46,  120 => 45,  116 => 44,  110 => 42,  98 => 38,  94 => 36,  90 => 35,  84 => 33,  79 => 31,  74 => 30,  70 => 27,  65 => 26,  60 => 25,  56 => 22,  53 => 20,  51 => 19,  48 => 18,  41 => 15,  39 => 14,  35 => 12,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* <div class="container page-category">*/
/* 	*/
/*   <div class="row">{{ column_left }}*/
/*     */
/*     <div id="content" class="col-xs-12">*/
/*     */
/* 		<div class="row product-view product-detail"> */
/* 		*/
/* 		{#========== Product Left ============#}*/
/* 		<div class="content-product-left  col-xs-12">*/
/* 			<div class="so-loadeding" ></div>*/
/* 			{% if column_left  %}*/
/* 				<a href="javascript:void(0)" class="btn btn-primary open-sidebar "><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 				<div class="sidebar-overlay "></div>*/
/* 			{% endif %}*/
/* 			*/
/* 			{% if images %}*/
/* 				*/
/* 				{#==== Gallery - Large image  ==== #}*/
/* 				<div class="large-image ">*/
/* 					<div class="box-label">*/
/* 						{#===== New Label==============#}*/
/* 						{% if soconfig.get_settings('new_status') and day_number_boolean %} */
/* 							<span class="label-product label-new">{{ objlang.get('text_new')}} </span>*/
/* 						{% endif %} */
/* 						*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 						{% if price  and  special  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						{% endif %} */
/* 					</div> */
/* 					<img itemprop="image" class="product-image-zoom" src="{{popup}}" data-zoom-image="{{popup}}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 				</div>*/
/* 				*/
/* 				{#==== Gallery - Bottom Thumbnails ==== #}*/
/* 				<div id="thumb-slider" class="full_slider contentslider contentslider--default" data-rtl="{{direction}}" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10"  data-items_column0="4" data-items_column1="3" data-items_column2="5"*/
/* 				data-items_column3="4" data-items_column4="3" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">*/
/* 					{% for key,image in images %}*/
/* 						<div class="image-additional">*/
/* 						<a data-index="{{key}}" class="img thumbnail " data-image="{{image.popup}}" title="{{ heading_title }}">*/
/* 							<img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 						</a>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 			{% endif %}*/
/* 		</div>*/
/*         {#========== //Product Left ============#}*/
/* */
/* 		{#========== Product Right ============#}*/
/* 		<div class="content-product-right col-xs-12">*/
/* 			*/
/* 			*/
/* 			{% if model %}*/
/* 				<div class="model font-ct"><span>{{ text_model }} </span> {{ model }}</div>*/
/* 			{% endif %}*/
/* 					*/
/* 			{% if review_status %}*/
/* 			{#======== Review - Rating ========== #}*/
/* 			<div class="box-review">*/
/* 				<div class="rating">*/
/* 					<div class="rating-box">*/
/* 					{% for i in 1..5 %}*/
/* 						{% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/* 					{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		*/
/* 			{% if price %}*/
/* 			{#========= Product - Price ========= #}*/
/* 			<div class="product_page_price price" itemprop="offerDetails" itemscope itemtype="http://data-vocabulary.org/Offer">*/
/* 				{% if not special %}*/
/* 			        <span class="price-new"><span itemprop="price" id="price-old"> */
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
/*  </span></span>*/
/* 			     {% else %}*/
/* 			        <span class="price-new"><span itemprop="price" id="price-special">{{ special }}</span></span>*/
/* 				   <span class="price-old" id="price-old">{{ price }}</span>*/
/* 			     {% endif %}*/
/* 				*/
/* 				  */
/*  {% if ((tax) and (cfp_setting.module_so_call_for_price_status) and (price_0 > 0)) %} */
/*  */
/* 					<div class="price-tax"><span>{{ text_tax }}</span> {{ tax }}</div>*/
/* 				{% endif %}*/
/* 			*/
/* 				{% if discounts %} */
/* 					<ul class="list-unstyled	">*/
/* 					{% for discount in discounts %} */
/* 						<li>{{ discount.quantity }} {{ text_discount }} {{ discount.price }} </li>*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 				{% endif %} 	 */
/* 			</div>*/
/* 				*/
/* 			{% endif %}*/
/* 			*/
/* 			<div class="box-link">*/
/* 				<div class="add-to-links wish_comp">*/
/* 					<ul class="blank">*/
/* 						{% if product_video %}*/
/* 			           	<li class="compare"> <a class="thumb-video" href="{{product_video}}"><i class="fa fa-youtube-play fa-lg"></i> </a> </li>*/
/* 			        	{% endif %}*/
/* */
/* 			        	{% if soconfig.get_settings('wishlist_status') %} */
/* 						<li class="wishlist">*/
/* 							<a onclick="wishlist.add({{ product_id }});"><i class="fa fa-heart"></i></a>*/
/* 						</li>*/
/* 						{% endif %}*/
/* */
/* 						{% if soconfig.get_settings('compare_status') %} */
/* 						<li class="compare">*/
/* 							<a onclick="compare.add({{ product_id }});"><i class="fa fa-retweet"></i></a>*/
/* 						</li>*/
/* 						{% endif %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="product-box-desc">*/
/* 				<ul class="inner-box-desc">*/
/* 					{% if manufacturer %}*/
/* 						<li class="brand"><span>{{ text_manufacturer }} </span><a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if reward %}*/
/* 						<li class="reward"><span>{{ text_reward }}</span> {{ reward }}</li>*/
/* 					{% endif %}*/
/* 					*/
/* 					<li class="stock"><span>{{ text_stock }}</span> <i class="fa fa-check-square-o"></i>{{ stock }}</li>	*/
/* 				</ul>		*/
/* 			</div>*/
/* 			*/
/* 			<div id="product">	*/
/* 				{% if options %} */
/* 				<div class="options-mobi clearfix">*/
/* 				*/
/* 				{% for option in options %}*/
/* 					{% if option.type == 'select' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control width50">*/
/* 							<option value="">{{ text_select }}</option>*/
/* 						{% for option_value in option.product_option_value %}*/
/* 							<option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/* 							{% if option_value.price %}*/
/* 								({{ option_value.price_prefix }}{{ option_value.price }})*/
/* 							{% endif %}*/
/* 							</option>*/
/* 						{% endfor %}*/
/* 					  </select>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if option.type == 'radio' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  	<label class="control-label">{{ option.name }}</label>*/
/* 						<div id="input-option{{ option.product_option_id }}">*/
/* 							{% set radio_style 	 = soconfig.get_settings('radio_style') %}*/
/* 							{% set radio_type 	 = radio_style ? ' radio-type-button':'' %}*/
/* */
/* 							{% for option_value in option.product_option_value %} */
/* 							{% set radio_image 	=  option_value.image ? 'option_image' : '' %} */
/* 							{% set radio_price 	=  radio_style ? option_value.price_prefix ~ option_value.price : '' %} */
/* 							*/
/* 								<div class="radio {{ radio_image ~ radio_type }}">*/
/* 									<label>							*/
/* 										<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/* 										<span class="option-content-box" data-title="{{ option_value.name}} {{ radio_price }}" data-toggle='tooltip'>*/
/* 											{% if option_value.image %} */
/* 												<img src="{{ option_value.image }} " alt="{{ option_value.name}}  {{radio_price}}" /> */
/* 											{% endif %} */
/* 											<span class="option-name">{{ option_value.name }} </span>*/
/* 											{% if option_value.price  and  radio_style  != '1' %} ({{ option_value.price_prefix }} {{ option_value.price }} ){% endif %} */
/* 										  */
/* 										</span>*/
/* 									</label>*/
/* 								</div>*/
/* 							{% endfor %}	*/
/* 							 */
/* 							{% if radio_style %} */
/* 							<script type="text/javascript">*/
/* 								 $(document).ready(function(){*/
/* 									  $('#input-option{{ option.product_option_id }} ').on('click', 'span', function () {*/
/* 										   $('#input-option{{ option.product_option_id }}  span').removeClass("active");*/
/* 										   $(this).toggleClass("active");*/
/* 									  });*/
/* 								 });*/
/* 							</script>*/
/* 							{% endif %} */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'checkbox' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  	<label class="control-label">{{ option.name }}</label>*/
/* 					  	<div id="input-option{{ option.product_option_id }}">*/
/* 							{% set radio_style 	 = soconfig.get_settings('radio_style') %}*/
/* 							{% set radio_type 	 = radio_style ? ' radio-type-button':'' %}*/
/* */
/* 							{% for option_value in option.product_option_value %} */
/* 							{% set radio_image 	=  option_value.image ? 'option_image' : '' %} */
/* 							{% set radio_price 	=  radio_style ? option_value.price_prefix ~ option_value.price : '' %} */
/* 							*/
/* 								<div class="checkbox  {{ radio_image ~ radio_type }}">*/
/* 									<label>*/
/* 										<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/* 										<span class="option-content-box" data-title="{{ option_value.name}} {{ radio_price }}" data-toggle='tooltip'>*/
/* 											{% if option_value.image %} */
/* 												<img src="{{ option_value.image }} " alt="{{ option_value.name}}  {{radio_price}}" /> */
/* 											{% endif %} */
/* */
/* 											<span class="option-name">{{ option_value.name }} </span>*/
/* 											{% if option_value.price  and  radio_style  != '1' %} */
/* 												({{ option_value.price_prefix }} {{ option_value.price }} )*/
/* 											{% endif %} */
/* 										  */
/* 										</span>*/
/* 									</label>*/
/* 								</div>*/
/* 							{% endfor %}	*/
/* 							 */
/* 							{% if radio_style %} */
/* 							<script type="text/javascript">*/
/* 								 $(document).ready(function(){*/
/* 									  $('#input-option{{ option.product_option_id }} ').on('click', 'span', function () {*/
/* 										   $(this).toggleClass("active");*/
/* 									  });*/
/* 								 });*/
/* 							</script>*/
/* 							{% endif %} */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'text' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 					  <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'textarea' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 					  <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'file' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  <label class="control-label">{{ option.name }}</label>*/
/* 					  <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 					  <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'date' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 					  <div class="input-group date">*/
/* 						<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 						<span class="input-group-btn">*/
/* 						<button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/* 						</span></div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if option.type == 'datetime' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 					  <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 					  <div class="input-group datetime">*/
/* 						<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 						<span class="input-group-btn">*/
/* 						<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 						</span></div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if option.type == 'time' %}*/
/* 					<div class="form-group{% if option.required %} required {% endif %}">*/
/* 						<label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/* 						<div class="input-group time">*/
/* 						<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 						<span class="input-group-btn">*/
/* 						<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 						</span></div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* */
/* */
/* 				<div class="box-cart clearfix">*/
/* 					{% if recurrings %}*/
/* 					<h3>{{ text_payment_recurring }}</h3>*/
/* 					<div class="form-group required">*/
/* 						<select name="recurring_id" class="form-control">*/
/* 						<option value="">{{ text_select }}</option>*/
/* 						{% for recurring in recurrings %}*/
/* 						<option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* 						{% endfor %}*/
/* 						</select>*/
/* 					  <div class="help-block" id="recurring-description"></div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				  */
/* 					<div class="form-group box-info-product">*/
/* 						<div class="option quantity">*/
/* 							<div class="input-group quantity-control">*/
/* 								  <span class="input-group-addon product_quantity_down fa fa-minus"></span>*/
/* 								  <input class="form-control" type="text" name="quantity" value="{{ minimum }}" />*/
/* 								  <input type="hidden" name="product_id" value="{{ product_id }}" />								  */
/* 								  <span class="input-group-addon product_quantity_up fa fa-plus"></span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="detail-action">*/
/* 							{# =========button Cart ======#}*/
/* 							<div class="cart">*/
/* 								<input type="button"  value="{{ button_cart }}" data-loading-text="{{ text_loading }}" id="button-cart" class="btn btn-mega btn-lg " />*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="clearfix"></div>*/
/* 					{% if minimum > 1 %}*/
/* 						<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if soconfig.get_settings('product_page_button') and soconfig.get_settings('product_socialshare') %}*/
/* 					<div class="form-group social-share clearfix">*/
/* 						{{ soconfig.decode_entities( soconfig.get_settings('product_socialshare') ) }}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					<!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* 					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5"></script>*/
/* */
/* 					{% if tags %}*/
/* 					<div id="tab-tags" class="box-info-product">*/
/* 				        {{ text_tags }}*/
/* 				        {% for i in 0..tags|length %}*/
/* 				        {% if i < (tags|length - 1) %} <a class="btn btn-primary btn-sm" href="{{ tags[i].href }}">{{ tags[i].tag }}</a>*/
/* 				        {% else %} */
/* 				        {% if tags[i] is not empty  %}*/
/* 				        <a class="btn btn-primary btn-sm 22" href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/* 				        {% endif %}*/
/* 				        {% endfor %} */
/* 				        */
/* 				     */
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* */
/* 				</div>*/
/* */
/* 			</div>*/
/* 				*/
/* 		</div>*/
/* 		{#========== //Product Right ============#}*/
/* */
/* 		<div class="content-product-midde clearfix">*/
/* 			{#========== TAB BLOCK ============#}*/
/* 			{% set tabs_position	= soconfig.get_settings('tabs_position')  %}*/
/* 			{% set showmore			= soconfig.get_settings('product_enableshowmore')  %}*/
/* 			{% if showmore %} {% set class_showmore = 'showdown' %}*/
/* 			{% else %} {% set class_showmore = 'showup' %}*/
/* 			{% endif %}*/
/* 			<div class="producttab ">*/
/* 				<div class="tabsslider col-xs-12">*/
/* 					{#========= Tabs - Bottom horizontal =========#}*/
/* 					<ul class="nav nav-tabs font-sn">*/
/* 						<li class="active"><a data-toggle="tab" href="#tab-description">{{ tab_description }}</a></li>*/
/* */
/* 			            {% if review_status %}*/
/* 			           	 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/* 			            {% endif %}*/
/* */
/* 			            {% if soconfig.get_settings('product_enableshipping') %}*/
/* 						 <li><a href="#tab-contentshipping" data-toggle="tab">{{ tab_shipping}}</a></li>*/
/* 						{% endif %}*/
/* */
/* 						{% if product_tabtitle %}*/
/* 			           	 <li><a href="#tab-customhtml" data-toggle="tab">{{ product_tabtitle}}</a></li>*/
/* 			            {% endif %}*/
/* */
/* 						*/
/* 					</ul>*/
/* */
/* 			*/
/* 					<div class="tab-content col-xs-12">*/
/* 						<div class="tab-pane active" id="tab-description">*/
/* 							{% if attribute_groups %}*/
/* 								<h3 class="product-property-title" > {{text_product_specifics}}</h3>*/
/* 				              	<ul class="product-property-list util-clearfix">*/
/* 					                {% for attribute_group in attribute_groups %}*/
/* 					               */
/* 					                	*/
/* 						                {% for attribute in attribute_group.attribute %}*/
/* 						                <li class="property-item">*/
/* 						                  <span class="propery-title">{{ attribute.name }}</span>*/
/* 						                  <span class="propery-des">{{ attribute.text }}</span>*/
/* 						                </li>*/
/* 						                {% endfor %}*/
/* 					                 	*/
/* 					                {% endfor %}*/
/* 				              	</ul>*/
/* 				            {% endif %}*/
/* */
/* 				            <h3 class="product-property-title" > {{text_product_description}}</h3>*/
/* 				            <div id="collapse-description" class="desc-collapse {{class_showmore}}">*/
/* 								{{ description }}*/
/* 							</div>	*/
/* */
/* 							{% if showmore %}*/
/* 							<div class="button-toggle">*/
/* 						         <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">*/
/* 						            <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/* 						            <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>           */
/* 								</a>        */
/* 							</div>*/
/* 							{% endif %}*/
/* */
/* 						</div>*/
/* 						*/
/* */
/* 			            {% if review_status %}*/
/* 			            <div class="tab-pane" id="tab-review">*/
/* 				            <form  id="form-review">*/
/* 				                <div id="review"></div>*/
/* 				                <h3 class="modtitle">{{ text_write }}</h3>*/
/* 				                {% if review_guest %}*/
/* 				                <div class="form-group required">*/
/* 				                  */
/* 				                    <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 				                    <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/* 				                 */
/* 				                </div>*/
/* 				                <div class="form-group required">*/
/* 				                  */
/* 				                    <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/* 				                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/* 				                    <div class="help-block">{{ text_note }}</div>*/
/* 				                */
/* 				                </div>*/
/* 				                <div class="form-group required">*/
/* 				                 */
/* 				                    <label class="control-label">{{ entry_rating }}</label>*/
/* 				                    &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/* 				                    <input type="radio" name="rating" value="1" />*/
/* 				                    &nbsp;*/
/* 				                    <input type="radio" name="rating" value="2" />*/
/* 				                    &nbsp;*/
/* 				                    <input type="radio" name="rating" value="3" />*/
/* 				                    &nbsp;*/
/* 				                    <input type="radio" name="rating" value="4" />*/
/* 				                    &nbsp;*/
/* 				                    <input type="radio" name="rating" value="5" />*/
/* 				                    &nbsp;{{ entry_good }}*/
/* 				                </div>*/
/* 				                {{ captcha }}*/
/* 				               */
/* 				                  <div class="form-group">*/
/* 				                    <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/* 				                  </div>*/
/* 				               */
/* 				                {% else %}*/
/* 				                {{ text_login }}*/
/* 				                {% endif %}*/
/* 				            </form>*/
/* 			            </div>*/
/* 			            {% endif %}*/
/* */
/* 			            {% if soconfig.get_settings('product_enableshipping') and soconfig.get_settings('product_contentshipping') %}*/
/* 							<div class="tab-pane" id="tab-contentshipping">*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('product_contentshipping') ) }}*/
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if product_tabtitle %}*/
/* 						<div class="tab-pane " id="tab-customhtml">{{ product_tabcontent }}</div>*/
/* 						{% endif %}*/
/* 			           */
/* */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* */
/* 		</div>*/
/* */
/* 		{% if products %}*/
/* 		<div class="content-product-bottom clearfix">*/
/* 			{% include theme_directory~'/template/soconfig/related_product.twig' %}*/
/* 		</div>*/
/* 		{% endif %}*/
/* */
/* 	</div> */
/* */
/*     	{# {{ content_bottom }} #}*/
/*     </div>*/
/*     {{ column_right }}*/
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
/* 			*/
/* 				$('#wrapper').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');*/
/* 				$('#cart  .total-shopping-cart ').html(json['total'] );*/
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 				$('.text-danger').remove();*/
/* 				timer = setTimeout(function () {*/
/* 					$('.alert').addClass('fadeOut');*/
/* 				}, 4000);*/
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
/* 	*/
/* 		var zoomCollection = '.large-image img';*/
/* 		$( zoomCollection ).elevateZoom({*/
/* 			zoomType        :"none",*/
/* 			lensSize    :'200',*/
/* 			easing:true,*/
/* 			*/
/* 			gallery:'thumb-slider',*/
/* 			cursor: 'pointer',*/
/* 			galleryActiveClass: "active",*/
/* 		});*/
/* 		$(zoomCollection).bind('touchstart', function(){*/
/* 		    $(zoomCollection).unbind('touchmove');*/
/* 		});*/
/* */
/* 		*/
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
/* 	*/
/* 		*/
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
