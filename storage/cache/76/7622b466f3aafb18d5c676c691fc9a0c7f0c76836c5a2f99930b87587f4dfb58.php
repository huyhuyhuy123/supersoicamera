<?php

/* so-mobile/template/extension/module/so_super_category/default.twig */
class __TwigTemplate_b12bc99b3f0eaa5137e261734f925b64991577c6a66a9071153ca35e9f45e240 extends Twig_Template
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
        $context["limit"] = (isset($context["limitation"]) ? $context["limitation"] : null);
        // line 2
        $context["nbcolumn0"] = ((((isset($context["product_column0"]) ? $context["product_column0"] : null) >= (isset($context["_count_item"]) ? $context["_count_item"] : null))) ? ((isset($context["_count_item"]) ? $context["_count_item"] : null)) : ((isset($context["product_column0"]) ? $context["product_column0"] : null)));
        // line 3
        $context["nbcolumn1"] = ((((isset($context["product_column1"]) ? $context["product_column1"] : null) >= (isset($context["_count_item"]) ? $context["_count_item"] : null))) ? ((isset($context["_count_item"]) ? $context["_count_item"] : null)) : ((isset($context["product_column1"]) ? $context["product_column1"] : null)));
        // line 4
        $context["nbcolumn2"] = ((((isset($context["product_column2"]) ? $context["product_column2"] : null) >= (isset($context["_count_item"]) ? $context["_count_item"] : null))) ? ((isset($context["_count_item"]) ? $context["_count_item"] : null)) : ((isset($context["product_column2"]) ? $context["product_column2"] : null)));
        // line 5
        $context["nbcolumn3"] = ((((isset($context["product_column3"]) ? $context["product_column3"] : null) >= (isset($context["_count_item"]) ? $context["_count_item"] : null))) ? ((isset($context["_count_item"]) ? $context["_count_item"] : null)) : ((isset($context["product_column3"]) ? $context["product_column3"] : null)));
        // line 6
        $context["nbcolumn4"] = ((((isset($context["product_column4"]) ? $context["product_column4"] : null) >= (isset($context["_count_item"]) ? $context["_count_item"] : null))) ? ((isset($context["_count_item"]) ? $context["_count_item"] : null)) : ((isset($context["product_column4"]) ? $context["product_column4"] : null)));
        // line 7
        $context["class_spcat"] = ((((((((("spcat00-" . (isset($context["nbcolumn0"]) ? $context["nbcolumn0"] : null)) . " spcat01-") . (isset($context["nbcolumn1"]) ? $context["nbcolumn1"] : null)) . " spcat02-") . (isset($context["nbcolumn2"]) ? $context["nbcolumn2"] : null)) . " spcat03-") . (isset($context["nbcolumn3"]) ? $context["nbcolumn3"] : null)) . " spcat04-") . (isset($context["nbcolumn4"]) ? $context["nbcolumn4"] : null));
        // line 8
        echo "
";
        // line 9
        $context["count_item"] = twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
        // line 10
        $context["nb_column0"] = ((((isset($context["category_column0"]) ? $context["category_column0"] : null) >= (isset($context["count_item"]) ? $context["count_item"] : null))) ? ((isset($context["count_item"]) ? $context["count_item"] : null)) : ((isset($context["category_column0"]) ? $context["category_column0"] : null)));
        // line 11
        $context["nb_column1"] = ((((isset($context["category_column1"]) ? $context["category_column1"] : null) >= (isset($context["count_item"]) ? $context["count_item"] : null))) ? ((isset($context["count_item"]) ? $context["count_item"] : null)) : ((isset($context["category_column1"]) ? $context["category_column1"] : null)));
        // line 12
        $context["nb_column2"] = ((((isset($context["category_column2"]) ? $context["category_column2"] : null) >= (isset($context["count_item"]) ? $context["count_item"] : null))) ? ((isset($context["count_item"]) ? $context["count_item"] : null)) : ((isset($context["category_column2"]) ? $context["category_column2"] : null)));
        // line 13
        $context["nb_column3"] = ((((isset($context["category_column3"]) ? $context["category_column3"] : null) >= (isset($context["count_item"]) ? $context["count_item"] : null))) ? ((isset($context["count_item"]) ? $context["count_item"] : null)) : ((isset($context["category_column3"]) ? $context["category_column3"] : null)));
        // line 14
        $context["nb_column4"] = ((((isset($context["category_column3"]) ? $context["category_column3"] : null) >= (isset($context["count_item"]) ? $context["count_item"] : null))) ? ((isset($context["count_item"]) ? $context["count_item"] : null)) : ((isset($context["category_column4"]) ? $context["category_column4"] : null)));
        // line 15
        echo "
<div class=\"module ";
        // line 16
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["advanced_mod_class_suffix"]) ? $context["advanced_mod_class_suffix"] : null);
        echo "\">
\t";
        // line 17
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 18
            echo "\t\t<h3 class=\"modtitle\">";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 20
        echo "\t
\t";
        // line 21
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 22
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 23
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 26
        echo "\t<div class=\"modcontent\">
\t\t<!--[if lt IE 9]>
\t\t<div id=\"";
        // line 28
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-sp-cat msie lt-ie9 first-load\"><![endif]-->
\t\t<!--[if IE 9]>
\t\t<div id=\"";
        // line 30
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-sp-cat msie first-load\"><![endif]-->
\t\t<!--[if gt IE 9]><!-->
\t\t<div id=\"";
        // line 32
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "\" class=\"so-sp-cat first-load\"><!--<![endif]-->
\t\t\t<div class=\"spcat-wrap \">
\t\t\t\t";
        // line 34
        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_cat.twig"));
        echo "
\t\t\t\t<div class=\"spcate-right\">
\t\t\t\t\t<div class=\"spcat-tabs-container\"
\t\t\t\t\t\t data-delay=\"";
        // line 37
        echo (isset($context["product_delay"]) ? $context["product_delay"] : null);
        echo "\"
\t\t\t\t\t\t data-duration=\"";
        // line 38
        echo (isset($context["product_duration"]) ? $context["product_duration"] : null);
        echo "\"
\t\t\t\t\t\t data-effect=\"";
        // line 39
        echo (isset($context["effect"]) ? $context["effect"] : null);
        echo "\"
\t\t\t\t\t\t data-ajaxurl=\"";
        // line 40
        echo (isset($context["ajaxurl"]) ? $context["ajaxurl"] : null);
        echo "\" data-modid=\"";
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!--Begin Tabs-->
\t\t\t\t\t\t";
        // line 43
        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_tabs.twig"));
        echo "
\t\t\t\t\t\t<!-- End Tabs-->
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 47
        if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 48
            echo "\t\t\t\t\t\t<div class=\"spcat-items-container\"><!--Begin Items-->
\t\t\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                $context["child_items"] = (($this->getAttribute($context["items"], "child", array(), "any", true, true)) ? ($this->getAttribute($context["items"], "child", array())) : (""));
                // line 51
                echo "\t\t\t\t\t\t\t\t";
                $context["cls_device"] = (isset($context["class_spcat"]) ? $context["class_spcat"] : null);
                // line 52
                echo "\t\t\t\t\t\t\t\t";
                $context["cls_animate"] = (isset($context["effect"]) ? $context["effect"] : null);
                // line 53
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = ((($this->getAttribute($context["items"], "sel", array(), "any", true, true) && ($this->getAttribute($context["items"], "sel", array()) == "sel"))) ? (" spcat-items-selected spcat-items-loaded") : (""));
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (((isset($context["cls"]) ? $context["cls"] : null) . " items-category-") . $this->getAttribute($context["items"], "category_id", array()));
                // line 55
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"spcat-items ";
                // line 56
                echo (isset($context["cls"]) ? $context["cls"] : null);
                echo "\" data-total=\"";
                echo $this->getAttribute($context["items"], "count", array());
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"products-list spcat-items-inner ";
                // line 57
                echo (((isset($context["cls_device"]) ? $context["cls_device"] : null) . " ") . (isset($context["cls_animate"]) ? $context["cls_animate"] : null));
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 58
                if (( !twig_test_empty((isset($context["child_items"]) ? $context["child_items"] : null)) && twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null)))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loading\"></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 65
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["classloaded"] = (((((isset($context["limit"]) ? $context["limit"] : null) >= $this->getAttribute($context["items"], "count", array())) || ((isset($context["limit"]) ? $context["limit"] : null) == 0))) ? ("loaded") : (""));
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 68
                    echo $this->getAttribute($context["items"], "category_id", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-field_order=\"";
                    // line 69
                    echo $this->getAttribute($context["items"], "category_id", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start=\"";
                    // line 70
                    echo (isset($context["limit"]) ? $context["limit"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total=\"";
                    // line 71
                    echo $this->getAttribute($context["items"], "count", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready=\"";
                    // line 72
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "all_ready_label"), "method");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl=\"";
                    // line 73
                    echo (isset($context["ajaxurl"]) ? $context["ajaxurl"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-modid=\"";
                    // line 74
                    echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_load=\"";
                    // line 75
                    echo (isset($context["limit"]) ? $context["limit"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loadmore-btn ";
                    // line 76
                    echo (isset($context["classloaded"]) ? $context["classloaded"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 77
                    echo (((isset($context["classloaded"]) ? $context["classloaded"] : null)) ? ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "all_ready_label"), "method")) : ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "load_more_label"), "method")));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spcat-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t\t\t";
        // line 89
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 90
            echo "\t\t\t\t\t\t<div class=\"form-group banner-custom\">
\t\t\t\t\t\t\t";
            // line 91
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t</div>
\t\t\t\t<!--End Items-->
\t\t\t</div>

\t\t\t";
        // line 98
        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_js.twig"));
        echo "
\t\t</div>
\t</div> <!--/.modcontent-->

\t
</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_super_category/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 98,  288 => 94,  282 => 91,  279 => 90,  277 => 89,  274 => 88,  268 => 86,  264 => 84,  249 => 82,  241 => 77,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  217 => 71,  213 => 70,  209 => 69,  205 => 68,  202 => 67,  199 => 66,  197 => 65,  193 => 63,  189 => 61,  183 => 59,  181 => 58,  177 => 57,  171 => 56,  168 => 55,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  153 => 50,  136 => 49,  133 => 48,  131 => 47,  124 => 43,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  98 => 34,  93 => 32,  88 => 30,  83 => 28,  79 => 26,  73 => 23,  70 => 22,  68 => 21,  65 => 20,  59 => 18,  57 => 17,  51 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set limit = limitation %}*/
/* {% set nbcolumn0 = product_column0 >= _count_item ? _count_item : product_column0 %}*/
/* {% set nbcolumn1 = product_column1 >= _count_item ? _count_item : product_column1 %}*/
/* {% set nbcolumn2 = product_column2 >= _count_item ? _count_item : product_column2 %}*/
/* {% set nbcolumn3 = product_column3 >= _count_item ? _count_item : product_column3 %}*/
/* {% set nbcolumn4 = product_column4 >= _count_item ? _count_item : product_column4 %}*/
/* {% set class_spcat = 'spcat00-' ~ nbcolumn0 ~ ' spcat01-' ~ nbcolumn1 ~ ' spcat02-' ~ nbcolumn2 ~ ' spcat03-' ~ nbcolumn3 ~ ' spcat04-' ~ nbcolumn4 %}*/
/* */
/* {% set count_item = category_tree|length %}*/
/* {% set nb_column0 = category_column0 >= count_item ? count_item : category_column0 %}*/
/* {% set nb_column1 = category_column1 >= count_item ? count_item : category_column1 %}*/
/* {% set nb_column2 = category_column2 >= count_item ? count_item : category_column2 %}*/
/* {% set nb_column3 = category_column3 >= count_item ? count_item : category_column3 %}*/
/* {% set nb_column4 = category_column3 >= count_item ? count_item : category_column4 %}*/
/* */
/* <div class="module {{ direction_class }} {{ advanced_mod_class_suffix }}">*/
/* 	{% if disp_title_module %}*/
/* 		<h3 class="modtitle">{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if pre_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="modcontent">*/
/* 		<!--[if lt IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat msie lt-ie9 first-load"><![endif]-->*/
/* 		<!--[if IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat msie first-load"><![endif]-->*/
/* 		<!--[if gt IE 9]><!-->*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat first-load"><!--<![endif]-->*/
/* 			<div class="spcat-wrap ">*/
/* 				{{ include (theme_config~"/template/extension/module/so_super_category/default_cat.twig") }}*/
/* 				<div class="spcate-right">*/
/* 					<div class="spcat-tabs-container"*/
/* 						 data-delay="{{ product_delay }}"*/
/* 						 data-duration="{{ product_duration }}"*/
/* 						 data-effect="{{ effect }}"*/
/* 						 data-ajaxurl="{{ ajaxurl }}" data-modid="{{ moduleid }}">*/
/* 						*/
/* 						<!--Begin Tabs-->*/
/* 						{{ include (theme_config~"/template/extension/module/so_super_category/default_tabs.twig") }}*/
/* 						<!-- End Tabs-->*/
/* 					</div>*/
/* */
/* 					{% if tabs is not empty %}*/
/* 						<div class="spcat-items-container"><!--Begin Items-->*/
/* 							{% for items in tabs %}*/
/* 								{% set child_items = items.child is defined ? items.child : '' %}*/
/* 								{% set cls_device = class_spcat %}*/
/* 								{% set cls_animate = effect %}*/
/* 								{% set cls = items.sel is defined and items.sel == "sel" ? ' spcat-items-selected spcat-items-loaded' : '' %}*/
/* 								{% set cls = cls ~ ' items-category-' ~ items.category_id %}*/
/* 								*/
/* 								<div class="spcat-items {{ cls }}" data-total="{{ items.count }}">*/
/* 									<div class="products-list spcat-items-inner {{ cls_device ~ ' ' ~ cls_animate }}">*/
/* 										{% if child_items is not empty and child_items|length %}*/
/* 											{{ include (theme_config~"/template/extension/module/so_super_category/default_items.twig") }}*/
/* 										{% else %}*/
/* 											<div class="spcat-loading"></div>*/
/* 										{% endif %}*/
/* 									</div>*/
/* 								*/
/* 									{% if type_show == "loadmore" %}*/
/* 										{% set classloaded = limit >= items.count or limit == 0 ? 'loaded' : '' %}*/
/* 										<div class="spcat-loadmore"*/
/* 											 data-active-content=".items-category-{{ items.category_id }}"*/
/* 											 data-field_order="{{ items.category_id }}"*/
/* 											 data-rl_start="{{ limit }}"*/
/* 											 data-rl_total="{{ items.count }}"*/
/* 											 data-rl_allready="{{ objlang.get('all_ready_label') }}"*/
/* 											 data-ajaxurl="{{ ajaxurl }}"*/
/* 											 data-modid="{{ moduleid }}"*/
/* 											 data-rl_load="{{ limit }}">*/
/* 											<div class="spcat-loadmore-btn {{ classloaded }}"*/
/* 												 data-label="{{ classloaded ? objlang.get('all_ready_label') : objlang.get('load_more_label') }}">*/
/* 												<span class="spcat-image-loading"></span>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					{% else %}*/
/* 						{{ objlang.get('text_noitem') }}*/
/* 					{% endif %}*/
/* */
/* 					{% if post_text != '' %}*/
/* 						<div class="form-group banner-custom">*/
/* 							{{ post_text }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<!--End Items-->*/
/* 			</div>*/
/* */
/* 			{{ include (theme_config~"/template/extension/module/so_super_category/default_js.twig") }}*/
/* 		</div>*/
/* 	</div> <!--/.modcontent-->*/
/* */
/* 	*/
/* </div>*/
