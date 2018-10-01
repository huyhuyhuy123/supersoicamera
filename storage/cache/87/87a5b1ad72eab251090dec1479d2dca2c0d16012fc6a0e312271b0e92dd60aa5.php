<?php

/* so-mobile/template/extension/module/so_deals/default2.twig */
class __TwigTemplate_da6e148736f91762f30115c3eeb0ad59c0b69967343ef2d292bdd2f702b04cbd extends Twig_Template
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
        // line 7
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
    ";
        // line 8
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 9
            echo "\t\t<h3 class=\"modtitle\">";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 11
        echo "\t
\t";
        // line 12
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 13
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 14
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 17
        echo "\t<div class=\"modcontent\">
\t\t";
        // line 18
        if ((array_key_exists("list", $context) && (isset($context["list"]) ? $context["list"] : null))) {
            // line 19
            echo "\t\t    ";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 20
            echo "\t\t    ";
            $context["class_respl"] = ((((((((("preset00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " preset01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " preset02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " preset03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " preset04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
            // line 21
            echo "\t\t    ";
            $context["i"] = 0;
            // line 22
            echo "\t\t    ";
            $context["count_item"] = twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null));
            // line 23
            echo "\t\t    ";
            if (((isset($context["include_js"]) ? $context["include_js"] : null) == "owlCarousel")) {
                echo "\t
\t\t    \t";
                // line 24
                $this->loadTemplate(((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_carousel.twig"), "so-mobile/template/extension/module/so_deals/default2.twig", 24)->display($context);
                // line 25
                echo "\t\t    ";
            } elseif (((isset($context["include_js"]) ? $context["include_js"] : null) == "slick")) {
                // line 26
                echo "\t\t    \t";
                echo twig_include($this->env, $context, ((((isset($context["config_theme"]) ? $context["config_theme"] : null) . "/template/extension/module/so_deals/") . (isset($context["store_layout"]) ? $context["store_layout"] : null)) . "_slick.twig"));
                echo "
\t\t    ";
            } else {
                // line 28
                echo "\t\t    \t";
                echo "";
                echo "
\t\t    ";
            }
            // line 30
            echo "\t\t";
        } else {
            // line 31
            echo "\t    \t<div class=\"alert alert-danger\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 32
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>
\t    ";
        }
        // line 36
        echo "\t</div>
\t
\t";
        // line 38
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 39
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 40
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_deals/default2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  119 => 40,  116 => 39,  114 => 38,  110 => 36,  103 => 32,  100 => 31,  97 => 30,  91 => 28,  85 => 26,  82 => 25,  80 => 24,  75 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  61 => 18,  58 => 17,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  38 => 9,  36 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/* //<![CDATA[*/
/* 	var listdeal{{ module }} = [];*/
/* //]]>*/
/* </script>*/
/* */
/* <div class="module {{ direction_class }} {{ class_suffix }}">*/
/*     {% if disp_title_module %}*/
/* 		<h3 class="modtitle">{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if pre_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ pre_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="modcontent">*/
/* 		{% if list is defined and list %}*/
/* 		    {% set tag_id = 'so_deals_' ~ random() ~ "now"|date("mdYHis") %}*/
/* 		    {% set class_respl = 'preset00-'~nb_column0~' preset01-'~nb_column1~' preset02-'~nb_column2~' preset03-'~nb_column3~' preset04-'~nb_column4 %}*/
/* 		    {% set i = 0 %}*/
/* 		    {% set count_item = list|length %}*/
/* 		    {% if include_js == 'owlCarousel'  %}	*/
/* 		    	{% include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_carousel.twig') %}*/
/* 		    {% elseif include_js == 'slick' %}*/
/* 		    	{{ include (config_theme~'/template/extension/module/so_deals/'~store_layout~'_slick.twig') }}*/
/* 		    {% else %}*/
/* 		    	{{ '' }}*/
/* 		    {% endif %}*/
/* 		{% else %}*/
/* 	    	<div class="alert alert-danger"><i class="fa fa-info-circle"></i> */
/* 				{{ objlang.get('text_noitem') }}*/
/* 				<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 			</div>*/
/* 	    {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	{% if post_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
