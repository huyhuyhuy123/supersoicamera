<?php

/* so-megastore/template/common/maintenance.twig */
class __TwigTemplate_43aa25928874e38cbc36bf948826f72ea8e2f1d4e4307e33b6cb5c28cb2fec5b extends Twig_Template
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

<div class=\"comingsoon-page text-center comingsoon-page\" style=\"background-image:url(image/";
        // line 3
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "comingsoon_imglogo"), "method");
        echo ")\">
\t<div class=\"container\">

\t\t\t";
        // line 6
        if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "comingsoon_title"), "method"))) {
            // line 7
            echo "\t\t\t<h1 class=\"comingsoon--title\">
\t\t\t\t";
            // line 8
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "comingsoon_title"), "method");
            echo "
\t\t\t</h1>\t
\t\t\t";
        }
        // line 11
        echo "
\t\t\t";
        // line 12
        if ( !twig_test_empty((isset($context["comingsoon_content"]) ? $context["comingsoon_content"] : null))) {
            // line 13
            echo "\t\t\t<div class=\"comingsoon--content\">
\t\t\t\t";
            // line 14
            echo (isset($context["comingsoon_content"]) ? $context["comingsoon_content"] : null);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<div class=\"comingsoon--countdown\"></div>

\t\t\t<div class=\"comingsoon--newsletter\">
\t\t\t\t";
        // line 21
        echo (isset($context["content_comingsoon"]) ? $context["content_comingsoon"] : null);
        echo "
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 24
        $context["full_date"] = twig_split_filter($this->env, $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "comingsoon_date"), "method"), "-");
        // line 25
        echo "\t\t\t";
        $context["year_end"] = $this->getAttribute((isset($context["full_date"]) ? $context["full_date"] : null), 0, array(), "array");
        // line 26
        echo "\t\t\t";
        $context["month_end"] = $this->getAttribute((isset($context["full_date"]) ? $context["full_date"] : null), 1, array(), "array");
        // line 27
        echo "\t\t\t";
        $context["day_end"] = $this->getAttribute((isset($context["full_date"]) ? $context["full_date"] : null), 2, array(), "array");
        // line 28
        echo "\t\t\t<script type=\"text/javascript\">
\t\t\t \$(function () {
\t\t\t\tvar austDay = new Date(";
        // line 30
        echo (isset($context["year_end"]) ? $context["year_end"] : null);
        echo ", ";
        echo (isset($context["month_end"]) ? $context["month_end"] : null);
        echo "-1 , ";
        echo (isset($context["day_end"]) ? $context["day_end"] : null);
        echo ");
\t\t\t\t\$('.comingsoon--countdown').countdown(austDay, function(event) {
\t\t\t\t\tvar \$this = \$(this).html(event.strftime(''
\t\t\t\t\t   + '<div class=\"time-item time-day\"><div class=\"num-time\">%D</div><div class=\"name-time\">";
        // line 33
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_labelDay"), "method");
        echo " </div></div>'
\t\t\t\t\t   + '<div class=\"time-item time-hour\"><div class=\"num-time\">%H</div><div class=\"name-time\">";
        // line 34
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_labelHour"), "method");
        echo "</div></div>'
\t\t\t\t\t   + '<div class=\"time-item time-min\"><div class=\"num-time\">%M</div><div class=\"name-time\">";
        // line 35
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_labelMin"), "method");
        echo " </div></div>'
\t\t\t\t\t   + '<div class=\"time-item time-sec\"><div class=\"num-time\">%S</div><div class=\"name-time\">";
        // line 36
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_labelSec"), "method");
        echo "</div></div>'));
\t\t\t\t});
\t\t\t\t
\t\t\t});
\t\t\t</script>
\t\t\t<style type=\"text/css\">
\t\t\t\t  .common-home .container-megamenu.vertical .vertical-wrapper{display: none !important;}
\t\t\t\t  .common-home .container-megamenu.vertical:hover .vertical-wrapper{display: block !important;}
\t\t\t</style>

\t</div>
</div>

";
        // line 49
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-megastore/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  82 => 30,  78 => 28,  75 => 27,  72 => 26,  69 => 25,  67 => 24,  61 => 21,  55 => 17,  49 => 14,  46 => 13,  44 => 12,  41 => 11,  35 => 8,  32 => 7,  30 => 6,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* <div class="comingsoon-page text-center comingsoon-page" style="background-image:url(image/{{soconfig.get_settings('comingsoon_imglogo')}})">*/
/* 	<div class="container">*/
/* */
/* 			{% if soconfig.get_settings('comingsoon_title') is not empty %}*/
/* 			<h1 class="comingsoon--title">*/
/* 				{{soconfig.get_settings('comingsoon_title')}}*/
/* 			</h1>	*/
/* 			{% endif %}*/
/* */
/* 			{% if comingsoon_content is not empty %}*/
/* 			<div class="comingsoon--content">*/
/* 				{{comingsoon_content}}*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			<div class="comingsoon--countdown"></div>*/
/* */
/* 			<div class="comingsoon--newsletter">*/
/* 				{{content_comingsoon}}*/
/* 			</div>*/
/* 			*/
/* 			{% set full_date 	= soconfig.get_settings('comingsoon_date')|split('-') %}*/
/* 			{% set year_end  	= full_date[0]%}*/
/* 			{% set month_end 	= full_date[1]%}*/
/* 			{% set day_end   	= full_date[2]%}*/
/* 			<script type="text/javascript">*/
/* 			 $(function () {*/
/* 				var austDay = new Date({{year_end}}, {{month_end}}-1 , {{day_end}});*/
/* 				$('.comingsoon--countdown').countdown(austDay, function(event) {*/
/* 					var $this = $(this).html(event.strftime(''*/
/* 					   + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">{{objlang.get('text_labelDay')}} </div></div>'*/
/* 					   + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">{{objlang.get('text_labelHour')}}</div></div>'*/
/* 					   + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">{{objlang.get('text_labelMin')}} </div></div>'*/
/* 					   + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">{{objlang.get('text_labelSec')}}</div></div>'));*/
/* 				});*/
/* 				*/
/* 			});*/
/* 			</script>*/
/* 			<style type="text/css">*/
/* 				  .common-home .container-megamenu.vertical .vertical-wrapper{display: none !important;}*/
/* 				  .common-home .container-megamenu.vertical:hover .vertical-wrapper{display: block !important;}*/
/* 			</style>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* {{ footer }}*/
