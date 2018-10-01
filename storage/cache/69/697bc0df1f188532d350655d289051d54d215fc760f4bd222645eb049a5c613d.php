<?php

/* so-mobile/template/soconfig/listing.twig */
class __TwigTemplate_a57648ad7831fa95a36631da2c17c537b1fe9e8a973e070c39436b29c6d9602c extends Twig_Template
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
        echo "
";
        // line 12
        echo "<div class=\"sidebar-overlay \"></div>
<div class=\"product-filter filters-panel clearfix\">
\t<div class=\"col-xs-4 view-mode\">
\t\t<div class=\"list-view\">
\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid \" title=\"";
        // line 16
        echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
        echo "\"><i class=\"fa fa-th-large\"></i></button>
\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default list \" title=\"";
        // line 17
        echo (isset($context["button_list"]) ? $context["button_list"] : null);
        echo "\"><i class=\"fa  fa-th-list\"></i></button>
\t\t</div>
\t</div>

\t<div class=\"col-xs-4 \">
\t";
        // line 22
        if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
            // line 23
            echo "\t\t<a href=\"javascript:void(0)\" class=\"btn btn-primary open-sidebar \"><i class=\"fa fa-bars\"></i>";
            echo (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null);
            echo "</a>
\t";
        }
        // line 25
        echo "\t</div>

\t<div class=\"short-by-show form-inline text-right col-xs-4\">
\t\t<div class=\"form-group short-by\">
\t\t\t<i class=\"fa fa-sort-amount-asc\" aria-hidden=\"true\"></i>
\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 32
            echo "\t\t\t\t";
            if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                // line 33
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t
\t\t\t\t<option value=\"";
                // line 36
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
\t\t\t\t
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</select>
\t\t</div>
\t\t
\t</div>
\t
 
</div>
";
        // line 48
        echo "<div class=\"products-list row \">
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "\t\t<div class=\"product-layout \">
\t\t\t<div class=\"product-item-container\">
\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t<div class=\"product-image-container \">
\t\t\t\t\t\t<a href=\"";
            // line 54
            echo $this->getAttribute($context["product"], "href", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \">
\t\t\t\t\t\t\t<img  src=\"";
            // line 55
            echo $this->getAttribute($context["product"], "thumb", array());
            echo " \"  title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"img-1 img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
            // line 61
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "new_status"), "method") && $this->getAttribute($context["product"], "date_available", array()))) {
                echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                // line 62
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                echo " </span>
\t\t\t\t\t\t";
            }
            // line 63
            echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 66
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                echo " 
\t\t\t\t\t\t";
                // line 67
                if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t ";
                    // line 69
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 71
                echo " 
\t\t\t\t\t\t";
            }
            // line 72
            echo " 
\t\t\t\t\t</div> 

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 80
            if ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "addcart_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "wishlist_status"), "method")) || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "compare_status"), "method"))) {
                echo " 
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t";
                // line 82
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "addcart_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                    // line 83
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><span><!-- ";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo " --><i class=\"fa fa-shopping-cart\"></i></span></button>
\t\t\t\t\t\t";
                }
                // line 85
                echo "
\t\t\t\t\t\t";
                // line 86
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "wishlist_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                    // line 87
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t\t";
                }
                // line 89
                echo "
\t\t\t\t\t\t";
                // line 90
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "compare_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                    // line 91
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-retweet\"></i></button>
\t\t\t\t\t\t";
                }
                // line 93
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 96
            echo "
\t\t\t\t\t";
            // line 97
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 101
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t";
                    } else {
                        // line 103
                        echo "   
\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t";
                    }
                    // line 105
                    echo " 
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 110
            echo " 

\t\t\t\t\t<h4><a href=\"";
            // line 112
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>

\t\t\t\t\t";
            // line 114
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t";
                // line 116
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"price-new\"> 
 ";
                    // line 118
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                        echo " 
 ";
                        // line 119
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                            echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                            // line 120
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "</a> 
 ";
                        }
                        // line 121
                        echo " 
 ";
                    } else {
                        // line 122
                        echo " 
 ";
                        // line 123
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " 
 ";
                    }
                    // line 124
                    echo " 
  </span>
\t\t\t\t\t\t";
                } else {
                    // line 126
                    echo "   
\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 127
                    echo $this->getAttribute($context["product"], "special", array());
                    echo " </span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 128
                echo " 
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 130
            echo " 
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t";
            // line 138
            echo "\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "</div>

";
        // line 143
        echo "<div class=\"product-filter filters-panel clearfix\">
\t<div class=\"col-xs-12 text-center\">";
        // line 144
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t<div class=\"col-xs-12 text-center\">";
        // line 145
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
reinitView();

function reinitView() {

\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\$(this).parent().find('button').removeClass('active');
\t\t\$(this).addClass('active');
\t});\t
\t// Product List
\t\$('#list-view').click(function() {
\t\t\$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');
\t\tlocalStorage.setItem('listview', 'list');
\t});

\t// Product Grid
\t\$('#grid-view').click(function() {
\t\t\$('#content .product-layout').attr('class', 'product-layout product-grid col-xs-6');
\t\tlocalStorage.setItem('listview', 'grid');
\t});

\t
\t// Product Table
\t
\tif(localStorage.getItem('listview')== null) localStorage.setItem('listview', 'grid');
\tif (localStorage.getItem('listview') == 'list'){
\t\t\$('#list-view').trigger('click');
\t} else {
\t\t\$('#grid-view').trigger('click');
\t}
}

//--></script> ";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/soconfig/listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 145,  354 => 144,  351 => 143,  347 => 140,  340 => 138,  331 => 130,  326 => 128,  319 => 127,  316 => 126,  311 => 124,  306 => 123,  303 => 122,  299 => 121,  290 => 120,  286 => 119,  282 => 118,  277 => 116,  272 => 114,  265 => 112,  261 => 110,  255 => 107,  248 => 105,  243 => 103,  236 => 101,  232 => 100,  226 => 97,  223 => 96,  218 => 93,  211 => 91,  207 => 90,  204 => 89,  197 => 87,  193 => 86,  190 => 85,  179 => 83,  175 => 82,  170 => 80,  160 => 72,  156 => 71,  150 => 69,  145 => 67,  140 => 66,  136 => 63,  131 => 62,  126 => 61,  116 => 55,  110 => 54,  104 => 50,  100 => 49,  97 => 48,  88 => 40,  82 => 39,  74 => 36,  71 => 35,  63 => 33,  60 => 32,  56 => 31,  48 => 25,  42 => 23,  40 => 22,  32 => 17,  28 => 16,  22 => 12,  19 => 10,);
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
/* {#====  Variables Device_res ==== #}*/
/* */
/* {#==== filters panel Top==== #}*/
/* <div class="sidebar-overlay "></div>*/
/* <div class="product-filter filters-panel clearfix">*/
/* 	<div class="col-xs-4 view-mode">*/
/* 		<div class="list-view">*/
/* 			<button type="button" id="grid-view" class="btn btn-default grid " title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>*/
/* 			<button type="button" id="list-view" class="btn btn-default list " title="{{ button_list }}"><i class="fa  fa-th-list"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-xs-4 ">*/
/* 	{% if column_left  %}*/
/* 		<a href="javascript:void(0)" class="btn btn-primary open-sidebar "><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 	{% endif %}*/
/* 	</div>*/
/* */
/* 	<div class="short-by-show form-inline text-right col-xs-4">*/
/* 		<div class="form-group short-by">*/
/* 			<i class="fa fa-sort-amount-asc" aria-hidden="true"></i>*/
/* 			<select id="input-sort" class="form-control" onchange="location = this.value;">*/
/* 				{% for sorts in sorts %}*/
/* 				{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 					<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 				{% else %}*/
/* 				*/
/* 				<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 				*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/*  */
/* </div>*/
/* {#==== Product List|Grid ==== #}*/
/* <div class="products-list row ">*/
/* 	{% for  product in products %}*/
/* 		<div class="product-layout ">*/
/* 			<div class="product-item-container">*/
/* 				<div class="left-block">*/
/* 					<div class="product-image-container ">*/
/* 						<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 							<img  src="{{ product.thumb }} "  title="{{ product.name }} " class="img-1 img-responsive" />*/
/* 						</a>*/
/* 					</div>*/
/* 					*/
/* 					<div class="box-label">*/
/* 						{#===== New Label=======#}*/
/* 						{% if soconfig.get_settings('new_status') and product.date_available %} */
/* 							<span class="label-product label-new">{{ objlang.get('text_new')}} </span>*/
/* 						{% endif %} */
/* 						*/
/* 						{#=======Discount Label======= #}*/
/* 						{% if soconfig.get_settings('discount_status')  %} */
/* 						{% if product.price  and  product.special  %} */
/* 							<span class="label-product label-sale">*/
/* 								 {{ product.discount }}*/
/* 							</span>*/
/* 						{% endif %} */
/* 						{% endif %} */
/* 					</div> */
/* */
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<div class="right-block">*/
/* 					*/
/* 					{% if soconfig.get_settings('addcart_status') or soconfig.get_settings('wishlist_status') or soconfig.get_settings('compare_status') %} */
/* 					<div class="button-group">*/
/* 						{% if soconfig.get_settings('addcart_status') %} */
/* 							<button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span><!-- {{ button_cart }} --><i class="fa fa-shopping-cart"></i></span></button>*/
/* 						{% endif %}*/
/* */
/* 						{% if soconfig.get_settings('wishlist_status') %} */
/* 							<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i></button>*/
/* 						{% endif %}*/
/* */
/* 						{% if soconfig.get_settings('compare_status') %} */
/* 							<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-retweet"></i></button>*/
/* 						{% endif %}*/
/* */
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if soconfig.get_settings('rating_status') %} */
/* 					<div class="ratings">*/
/* 						<div class="rating-box">*/
/* 						{% for i in 1..5 %}*/
/* 						{% if product.rating < i %} */
/* 							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 						{% else %}   */
/* 							<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 						{% endif %} */
/* 						{% endfor %}*/
/* */
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %} */
/* */
/* 					<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* */
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
/* 					{% endif %} */
/* 					*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 		{# ====End Clearfix fluid grid layout =======#}*/
/* 	*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {#==== filters panel Bottom==== #}*/
/* <div class="product-filter filters-panel clearfix">*/
/* 	<div class="col-xs-12 text-center">{{ results }}</div>*/
/* 	<div class="col-xs-12 text-center">{{ pagination }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* reinitView();*/
/* */
/* function reinitView() {*/
/* */
/* 	$('.view-mode .list-view button').bind("click", function() {*/
/* 		$(this).parent().find('button').removeClass('active');*/
/* 		$(this).addClass('active');*/
/* 	});	*/
/* 	// Product List*/
/* 	$('#list-view').click(function() {*/
/* 		$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');*/
/* 		localStorage.setItem('listview', 'list');*/
/* 	});*/
/* */
/* 	// Product Grid*/
/* 	$('#grid-view').click(function() {*/
/* 		$('#content .product-layout').attr('class', 'product-layout product-grid col-xs-6');*/
/* 		localStorage.setItem('listview', 'grid');*/
/* 	});*/
/* */
/* 	*/
/* 	// Product Table*/
/* 	*/
/* 	if(localStorage.getItem('listview')== null) localStorage.setItem('listview', 'grid');*/
/* 	if (localStorage.getItem('listview') == 'list'){*/
/* 		$('#list-view').trigger('click');*/
/* 	} else {*/
/* 		$('#grid-view').trigger('click');*/
/* 	}*/
/* }*/
/* */
/* //--></script> */
