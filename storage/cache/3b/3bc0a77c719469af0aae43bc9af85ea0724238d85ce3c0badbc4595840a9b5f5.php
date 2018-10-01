<?php

/* so-mobile/template/header/header1.twig */
class __TwigTemplate_35481be4879d4ffa04a81b378bfe982f762d080ad343ca83bc496f5b2269f655 extends Twig_Template
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
        // line 2
        $context["barStatic"] = (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barnav"), "method")) ? ("") : ("bar-static"));
        // line 3
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "is_mobile_page", array(), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "is_home_page", array(), "method"))) {
            // line 4
            echo "\t<header class=\" bar bar-nav bar-navhome typeheader-";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method");
            echo " ";
            echo (isset($context["barStatic"]) ? $context["barStatic"] : null);
            echo "\">
\t\t<div class=\"row navbar-bar \">
\t\t
\t\t\t<div class=\"navbar-menu col-xs-2\">
\t\t\t   <a class=\"toggle-panel\" href=\"#panel-menu\">
\t\t\t   \t<span class=\"icon-bar\"></span>
\t\t\t   \t<span class=\"icon-bar bar2\"></span>
\t\t\t   \t<span class=\"icon-bar\"></span>
\t\t\t   </a>
\t\t\t</div>

\t\t\t<div class=\"navbar-logo col-xs-3\">
\t\t\t\t";
            // line 16
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logoMobile", array(), "method");
            echo "
\t\t\t</div>
\t\t\t<div class=\"navbar-search col-xs-7\">
\t\t\t\t";
            // line 19
            echo (isset($context["search_block"]) ? $context["search_block"] : null);
            echo "
\t\t\t</div>

\t\t</div>
\t</header>
";
        } else {
            // line 26
            echo "\t<header class=\"bar bar-nav ";
            echo (isset($context["barStatic"]) ? $context["barStatic"] : null);
            echo "\">
\t\t<a class=\"btn btn-link btn-nav pull-left\" href=\"#\" onClick=\"history.go(-1); return false;\">
\t\t\t<span class=\"icon icon-left-nav\"></span>
\t\t</a>
\t\t<a class=\"btn btn-link btn-nav pull-right toggle-panel\" href=\"#panel-menu\">
\t\t\t<span class=\"icon icon-bars\"></span>
\t\t</a>
\t\t<h1 class=\"title\">";
            // line 33
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
\t</header>
";
        }
    }

    public function getTemplateName()
    {
        return "so-mobile/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 33,  56 => 26,  47 => 19,  41 => 16,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Check Home page=====#}*/
/* {% set barStatic = soconfig.get_settings('barnav') ? '' : 'bar-static' %}*/
/* {% if soconfig.is_mobile_page() or soconfig.is_home_page() %}*/
/* 	<header class=" bar bar-nav bar-navhome typeheader-{{soconfig.get_settings('mtypeheader')}} {{barStatic}}">*/
/* 		<div class="row navbar-bar ">*/
/* 		*/
/* 			<div class="navbar-menu col-xs-2">*/
/* 			   <a class="toggle-panel" href="#panel-menu">*/
/* 			   	<span class="icon-bar"></span>*/
/* 			   	<span class="icon-bar bar2"></span>*/
/* 			   	<span class="icon-bar"></span>*/
/* 			   </a>*/
/* 			</div>*/
/* */
/* 			<div class="navbar-logo col-xs-3">*/
/* 				{{soconfig.get_logoMobile()}}*/
/* 			</div>*/
/* 			<div class="navbar-search col-xs-7">*/
/* 				{{search_block}}*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</header>*/
/* {% else %}*/
/* {#=====Check Subpage page =====#}*/
/* 	<header class="bar bar-nav {{barStatic}}">*/
/* 		<a class="btn btn-link btn-nav pull-left" href="#" onClick="history.go(-1); return false;">*/
/* 			<span class="icon icon-left-nav"></span>*/
/* 		</a>*/
/* 		<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">*/
/* 			<span class="icon icon-bars"></span>*/
/* 		</a>*/
/* 		<h1 class="title">{{title}}</h1>*/
/* 	</header>*/
/* {% endif %}*/
