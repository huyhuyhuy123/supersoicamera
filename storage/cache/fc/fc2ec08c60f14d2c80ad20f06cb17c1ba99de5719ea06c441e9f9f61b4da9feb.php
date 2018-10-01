<?php

/* so-megastore/template/extension/module/so_deals/default2.twig */
class __TwigTemplate_1e49b21e2ee53cd3c89db829519b851bb41e17f9bd2ea737bcd2fea21e3dbe49 extends Twig_Template
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
        echo "<script>
//<![CDATA[
\tvar listdeal";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " = [];
//]]>
</script>
<div class=\"module ";
        // line 6
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t";
        // line 7
        if ( !twig_test_empty(trim((isset($context["pre_text"]) ? $context["pre_text"] : null)))) {
            // line 8
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 9
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "\t<div class=\"head-title\">

\t\t";
        // line 14
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 15
            echo "\t\t\t<h2 class=\"modtitle font-ct\"><span>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</span></h2>
\t\t";
        }
        // line 17
        echo "\t\t
\t\t";
        // line 18
        if ((isset($context["display_countdown"]) ? $context["display_countdown"] : null)) {
            // line 19
            echo "\t\t\t<div class=\"cslider-item-timer\">
\t\t\t\t<span>";
            // line 20
            echo (isset($context["text_end_in"]) ? $context["text_end_in"] : null);
            echo "</span>
\t\t\t\t<div class=\"product_time_maxprice\"></div>
\t\t\t</div>
\t\t\t";
            // line 23
            $context["maxPriceToDate"] = "";
            // line 24
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                echo "\t\t\t\t";
                $context["maxPriceToDate"] = $this->getAttribute($context["product"], "specialPriceToDate", array());
                // line 26
                echo "\t\t\t\t";
                if (((isset($context["maxPriceToDate"]) ? $context["maxPriceToDate"] : null) < $this->getAttribute($context["product"], "specialPriceToDate", array()))) {
                    // line 27
                    echo "\t\t\t\t\t";
                    $context["maxPriceToDate"] = $this->getAttribute($context["product"], "specialPriceToDate", array());
                    // line 28
                    echo "\t\t\t\t";
                }
                // line 29
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tlistdeal";
            // line 33
            echo (isset($context["module"]) ? $context["module"] : null);
            echo ".push('product_time_maxprice|";
            echo (isset($context["maxPriceToDate"]) ? $context["maxPriceToDate"] : null);
            echo "')
\t\t\t\t//]]> 
\t\t\t</script>
\t\t";
        }
        // line 37
        echo "\t</div>
\t<div class=\"modcontent\">
\t\t";
        // line 39
        if ((array_key_exists("list", $context) && (isset($context["list"]) ? $context["list"] : null))) {
            // line 40
            echo "\t\t\t";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 41
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 42
            echo "\t\t\t";
            $context["i"] = 0;
            // line 43
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null));
            // line 44
            echo "\t\t\t";
            if (((isset($context["include_js"]) ? $context["include_js"] : null) == "owlCarousel")) {
                // line 45
                echo "\t\t\t\t";
                $this->loadTemplate(((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_carousel.twig"), "so-megastore/template/extension/module/so_deals/default2.twig", 45)->display($context);
                // line 46
                echo "\t\t\t";
            } elseif (((isset($context["include_js"]) ? $context["include_js"] : null) == "slick")) {
                // line 47
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, ((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_slick.twig"));
                echo "
\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t";
                echo "";
                echo "
\t\t\t";
            }
            // line 51
            echo "\t\t";
        } else {
            // line 52
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 53
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t</div>
\t";
        // line 58
        if ( !twig_test_empty(trim((isset($context["post_text"]) ? $context["post_text"] : null)))) {
            // line 59
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 60
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 63
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_deals/default2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 63,  171 => 60,  168 => 59,  166 => 58,  163 => 57,  156 => 53,  153 => 52,  150 => 51,  144 => 49,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  115 => 39,  111 => 37,  102 => 33,  97 => 30,  91 => 29,  88 => 28,  85 => 27,  82 => 26,  79 => 25,  74 => 24,  72 => 23,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  52 => 15,  50 => 14,  46 => 12,  40 => 9,  37 => 8,  35 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/* //<![CDATA[*/
/* 	var listdeal{{ module }} = [];*/
/* //]]>*/
/* </script>*/
/* <div class="module {{ direction_class }} {{ class_suffix }}">*/
/* 	{% if pre_text|trim is not empty %}*/
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="head-title">*/
/* */
/* 		{% if disp_title_module %}*/
/* 			<h2 class="modtitle font-ct"><span>{{ head_name }}</span></h2>*/
/* 		{% endif %}*/
/* 		*/
/* 		{% if display_countdown %}*/
/* 			<div class="cslider-item-timer">*/
/* 				<span>{{ text_end_in }}</span>*/
/* 				<div class="product_time_maxprice"></div>*/
/* 			</div>*/
/* 			{% set maxPriceToDate ='' %}*/
/* 			{% for product in list %}*/
/* 				{% set maxPriceToDate =  product.specialPriceToDate  %}*/
/* 				{% if maxPriceToDate < product.specialPriceToDate  %}*/
/* 					{% set maxPriceToDate =  product.specialPriceToDate  %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 			*/
/* 			<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				listdeal{{ module }}.push('product_time_maxprice|{{ maxPriceToDate }}')*/
/* 				//]]> */
/* 			</script>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="modcontent">*/
/* 		{% if list is defined and list %}*/
/* 			{% set tag_id = 'so_deals_' ~ random() ~ "now"|date("mdYHis") %}*/
/* 			{% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 			{% set i = 0 %}*/
/* 			{% set count_item = list|length %}*/
/* 			{% if include_js == 'owlCarousel' %}*/
/* 				{% include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_carousel.twig') %}*/
/* 			{% elseif include_js == 'slick' %}*/
/* 				{{ include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_slick.twig') }}*/
/* 			{% else %}*/
/* 				{{ '' }}*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> */
/* 				{{ objlang.get('text_noitem') }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% if post_text|trim is not empty %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
