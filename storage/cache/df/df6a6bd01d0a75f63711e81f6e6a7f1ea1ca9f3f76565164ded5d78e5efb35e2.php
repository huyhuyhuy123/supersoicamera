<?php

/* so-megastore/template/extension/module/so_super_category/default.twig */
class __TwigTemplate_e0a7f78f2e7652cded1e8459b135326c2e8edeed70b92ff1f55538f06de9374b extends Twig_Template
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
            echo "\t\t<h3 class=\"modtitle\">
\t\t\t<span>";
            // line 19
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</span>
\t\t\t <a class=\"view-all\" href=\"";
            // line 20
            echo $this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "link", array());
            echo "\">
                         ";
            // line 21
            echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
            echo "<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
\t\t</h3>
\t";
        }
        // line 24
        echo "\t
\t
\t<div class=\"modcontent\">
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
\t\t\t\t<div class=\"category-wrap col-lg-2 col-md-2 col-sm-8 col-xs-12\">
\t\t\t\t\t";
        // line 35
        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_cat.twig"));
        echo "
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
\t\t\t\t</div>
\t\t\t\t";
        // line 47
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            // line 48
            echo "\t\t\t\t\t";
            $context["col_wrap"] = "col-lg-6 col-md-7 col-sm-12 col-xs-12";
            // line 49
            echo "\t\t\t\t\t<div class=\"form-group col-lg-4 col-md-3 col-sm-4 col-xs-12\">
\t\t\t\t\t\t";
            // line 50
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t";
            $context["col_wrap"] = "col-lg-10 col-md-10 col-sm-12 col-xs-12";
            // line 54
            echo "\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t<div class=\"spc-wrap ";
        echo (isset($context["col_wrap"]) ? $context["col_wrap"] : null);
        echo "\">
\t\t\t\t\t";
        // line 56
        if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 57
            echo "\t\t\t\t\t\t<div class=\"spcat-items-container\"><!--Begin Items-->
\t\t\t\t\t\t\t";
            // line 58
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
                // line 59
                echo "\t\t\t\t\t\t\t\t";
                $context["child_items"] = (($this->getAttribute($context["items"], "child", array(), "any", true, true)) ? ($this->getAttribute($context["items"], "child", array())) : (""));
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                $context["cls_device"] = (isset($context["class_spcat"]) ? $context["class_spcat"] : null);
                // line 61
                echo "\t\t\t\t\t\t\t\t";
                $context["cls_animate"] = (isset($context["effect"]) ? $context["effect"] : null);
                // line 62
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = ((($this->getAttribute($context["items"], "sel", array(), "any", true, true) && ($this->getAttribute($context["items"], "sel", array()) == "sel"))) ? (" spcat-items-selected spcat-items-loaded") : (""));
                // line 63
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (((isset($context["cls"]) ? $context["cls"] : null) . " items-category-") . $this->getAttribute($context["items"], "category_id", array()));
                // line 64
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"spcat-items ";
                // line 65
                echo (isset($context["cls"]) ? $context["cls"] : null);
                echo "\" data-total=\"";
                echo $this->getAttribute($context["items"], "count", array());
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"spcat-items-inner ";
                // line 66
                echo (((isset($context["cls_device"]) ? $context["cls_device"] : null) . " ") . (isset($context["cls_animate"]) ? $context["cls_animate"] : null));
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (( !twig_test_empty((isset($context["child_items"]) ? $context["child_items"] : null)) && twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null)))) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loading\"></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 74
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["classloaded"] = (((((isset($context["limit"]) ? $context["limit"] : null) >= $this->getAttribute($context["items"], "count", array())) || ((isset($context["limit"]) ? $context["limit"] : null) == 0))) ? ("loaded") : (""));
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 77
                    echo $this->getAttribute($context["items"], "category_id", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-field_order=\"";
                    // line 78
                    echo $this->getAttribute($context["items"], "category_id", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start=\"";
                    // line 79
                    echo (isset($context["limit"]) ? $context["limit"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total=\"";
                    // line 80
                    echo $this->getAttribute($context["items"], "count", array());
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready=\"";
                    // line 81
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "all_ready_label"), "method");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl=\"";
                    // line 82
                    echo (isset($context["ajaxurl"]) ? $context["ajaxurl"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-modid=\"";
                    // line 83
                    echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_load=\"";
                    // line 84
                    echo (isset($context["limit"]) ? $context["limit"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"spcat-loadmore-btn ";
                    // line 85
                    echo (isset($context["classloaded"]) ? $context["classloaded"] : null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 86
                    echo (((isset($context["classloaded"]) ? $context["classloaded"] : null)) ? ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "all_ready_label"), "method")) : ($this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "load_more_label"), "method")));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"spcat-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 91
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
            // line 93
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t<!--End Items-->
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 101
        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_super_category/default_js.twig"));
        echo "
\t\t</div>
\t</div> <!--/.modcontent-->
\t";
        // line 104
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            // line 105
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 106
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 109
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_super_category/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 109,  315 => 106,  312 => 105,  310 => 104,  304 => 101,  298 => 97,  292 => 95,  288 => 93,  273 => 91,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  245 => 81,  241 => 80,  237 => 79,  233 => 78,  229 => 77,  226 => 76,  223 => 75,  221 => 74,  217 => 72,  213 => 70,  207 => 68,  205 => 67,  201 => 66,  195 => 65,  192 => 64,  189 => 63,  186 => 62,  183 => 61,  180 => 60,  177 => 59,  160 => 58,  157 => 57,  155 => 56,  150 => 55,  147 => 54,  144 => 53,  138 => 50,  135 => 49,  132 => 48,  130 => 47,  123 => 43,  115 => 40,  111 => 39,  107 => 38,  103 => 37,  98 => 35,  92 => 32,  87 => 30,  82 => 28,  76 => 24,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  57 => 17,  51 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/* 		<h3 class="modtitle">*/
/* 			<span>{{ head_name }}</span>*/
/* 			 <a class="view-all" href="{{ category_parent.link }}">*/
/*                          {{ text_view_all }}<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>*/
/* 		</h3>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* 	<div class="modcontent">*/
/* 		<!--[if lt IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat msie lt-ie9 first-load"><![endif]-->*/
/* 		<!--[if IE 9]>*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat msie first-load"><![endif]-->*/
/* 		<!--[if gt IE 9]><!-->*/
/* 		<div id="{{ tag_id }}" class="so-sp-cat first-load"><!--<![endif]-->*/
/* 			<div class="spcat-wrap ">*/
/* 				<div class="category-wrap col-lg-2 col-md-2 col-sm-8 col-xs-12">*/
/* 					{{ include (theme_config~"/template/extension/module/so_super_category/default_cat.twig") }}*/
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
/* 				</div>*/
/* 				{% if pre_text|trim is not empty  %}*/
/* 					{% set col_wrap = 'col-lg-6 col-md-7 col-sm-12 col-xs-12' %}*/
/* 					<div class="form-group col-lg-4 col-md-3 col-sm-4 col-xs-12">*/
/* 						{{ pre_text }}*/
/* 					</div>*/
/* 				{% else %}*/
/* 					{% set col_wrap = 'col-lg-10 col-md-10 col-sm-12 col-xs-12' %}*/
/* 				{% endif %}*/
/* 				<div class="spc-wrap {{ col_wrap }}">*/
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
/* 									<div class="spcat-items-inner {{ cls_device ~ ' ' ~ cls_animate }}">*/
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
/* 					<!--End Items-->*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			{{ include (theme_config~"/template/extension/module/so_super_category/default_js.twig") }}*/
/* 		</div>*/
/* 	</div> <!--/.modcontent-->*/
/* 	{% if post_text|trim is not empty  %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
