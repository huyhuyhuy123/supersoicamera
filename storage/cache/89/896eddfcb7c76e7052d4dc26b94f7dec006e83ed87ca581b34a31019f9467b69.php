<?php

/* so-mobile/template/soconfig/panel_left.twig */
class __TwigTemplate_3ae54262cbb914fb7273c27e1a32725589805ec39c51ed025af197f16b6e4788 extends Twig_Template
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
        // line 9
        echo "<div id=\"panel-menu\" class=\"side-menu panel panel-left\">
\t<div class=\"content\">
\t\t<div class=\"panel-left__top clearfix text-center\">
\t\t\t<div class=\"panel-logo\">
\t\t\t\t";
        // line 13
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logoMobile", array(), "method");
        echo "
\t\t\t</div>
\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barsearch_status"), "method")) {
            // line 16
            echo "\t\t\t\t<div class=\"panel-search\">
\t\t\t\t\t";
            // line 17
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 23
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barmega1_status"), "method")) {
            // line 24
            echo "\t\t\t";
            echo (isset($context["content_menu1"]) ? $context["content_menu1"] : null);
            echo "
\t\t";
        }
        // line 26
        echo "

\t\t";
        // line 28
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barmega2_status"), "method")) {
            // line 29
            echo "\t\t\t";
            echo (isset($context["content_menu2"]) ? $context["content_menu2"] : null);
            echo "
\t\t";
        }
        // line 31
        echo "
\t\t
\t\t<div class=\"panel-left__bottom clearfix text-center\">
\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barcompare_status"), "method")) {
            // line 35
            echo "\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
\t\t\t\t<div class=\"bot-inner\">
\t\t\t\t\t<a href=\"";
            // line 38
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barwistlist_status"), "method")) {
            // line 44
            echo "\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t<div class=\"bot-inner\">
\t\t\t\t\t<a href=\"";
            // line 47
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "
\t\t\t
\t\t\t";
        // line 53
        if ((isset($context["language"]) ? $context["language"] : null)) {
            // line 54
            echo "\t\t\t<div class=\"col-xs-6 panel-left__language\">
\t\t\t\t";
            // line 55
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
\t\t\t\t<h4>";
            // line 56
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</h4>
\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "
\t\t\t<div class=\"col-xs-6 panel-left__language\">
\t\t\t\t";
        // line 61
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
\t\t\t\t<h4>";
        // line 62
        echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/soconfig/panel_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 62,  129 => 61,  125 => 59,  119 => 56,  115 => 55,  112 => 54,  110 => 53,  106 => 51,  97 => 47,  92 => 44,  90 => 43,  87 => 42,  78 => 38,  73 => 35,  71 => 34,  66 => 31,  60 => 29,  58 => 28,  54 => 26,  48 => 24,  46 => 23,  41 => 20,  35 => 17,  32 => 16,  30 => 15,  25 => 13,  19 => 9,);
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
/* <div id="panel-menu" class="side-menu panel panel-left">*/
/* 	<div class="content">*/
/* 		<div class="panel-left__top clearfix text-center">*/
/* 			<div class="panel-logo">*/
/* 				{{soconfig.get_logoMobile()}}*/
/* 			</div>*/
/* 			{% if soconfig.get_settings('barsearch_status') %}*/
/* 				<div class="panel-search">*/
/* 					{{ search }}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		{% if soconfig.get_settings('barmega1_status') %}*/
/* 			{{content_menu1}}*/
/* 		{% endif %}*/
/* */
/* */
/* 		{% if soconfig.get_settings('barmega2_status') %}*/
/* 			{{content_menu2}}*/
/* 		{% endif %}*/
/* */
/* 		*/
/* 		<div class="panel-left__bottom clearfix text-center">*/
/* 			{% if soconfig.get_settings('barcompare_status') %}*/
/* 			<div class="col-xs-6">*/
/* 				<i class="fa fa-check-square-o" aria-hidden="true"></i>*/
/* 				<div class="bot-inner">*/
/* 					<a href="{{compare}}">{{text_compare}}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if soconfig.get_settings('barwistlist_status') %}*/
/* 			<div class="col-xs-6">*/
/* 				<i class="fa fa-heart" aria-hidden="true"></i>*/
/* 				<div class="bot-inner">*/
/* 					<a href="{{wishlist}}">{{text_wishlist}}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			*/
/* 			{% if language  %}*/
/* 			<div class="col-xs-6 panel-left__language">*/
/* 				{{ language }}*/
/* 				<h4>{{text_language}}</h4>*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			<div class="col-xs-6 panel-left__language">*/
/* 				{{ currency }}*/
/* 				<h4>{{text_currency}}</h4>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
