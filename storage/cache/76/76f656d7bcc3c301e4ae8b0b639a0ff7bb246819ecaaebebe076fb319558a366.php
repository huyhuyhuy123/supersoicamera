<?php

/* so-megastore/template/header/header1.twig */
class __TwigTemplate_fe998fa87decc9a61ba8f3bf08f71fdf85818bbb83ae0056c1a0a22d78b72231 extends Twig_Template
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
        $context["hidden_headercenter"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1")) ? ("hidden-compact") : (""));
        // line 4
        echo "
<header id=\"header\" class=\" variant typeheader-";
        // line 5
        echo (((isset($context["typeheader"]) ? $context["typeheader"] : null)) ? ((isset($context["typeheader"]) ? $context["typeheader"] : null)) : ("1"));
        echo "\">
\t";
        // line 7
        echo "\t<div class=\"header-top hidden-compact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header-top-left pull-left hidden-xs\">
\t\t\t\t";
        // line 10
        if ((isset($context["header_block"]) ? $context["header_block"] : null)) {
            // line 11
            echo "\t\t\t\t\t";
            echo (isset($context["header_block"]) ? $context["header_block"] : null);
            echo "
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t</div>
\t\t\t<div class=\"header-top-right collapsed-block pull-right\">
\t\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lang_status"), "method")) {
            // line 16
            echo "\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t";
            // line 17
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message_status"), "method")) {
                // line 18
                echo "\t\t\t\t\t\t<li class=\"hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
                // line 19
                if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method"))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method")), "method");
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t";
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                // line 25
                echo "\t\t\t\t\t\t<li class=\"log logout\"><i class=\"fa fa-unlock\"></i> <a class=\"link-lg\" href=\"";
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo " \"> ";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo " </a></li>
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t<li class=\"log login\"><a class=\"link-lg\" href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo " \">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo " </a> </li>
\t\t\t\t\t\t<li class=\"log register\"> <a href=\"";
                // line 28
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t";
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li class=\"currency\"> ";
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "  </li> ";
            }
            // line 31
            echo "\t\t\t\t\t";
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo " <li class=\"language\">";
                echo (isset($context["language"]) ? $context["language"] : null);
                echo " </li>\t";
            }
            // line 32
            echo "\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 34
        echo "

\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 41
        echo "\t<div class=\"header-middle ";
        echo (isset($context["hidden_headercenter"]) ? $context["hidden_headercenter"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 46
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logo", array(), "method");
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"bottom2 col-lg-6 col-md-7 col-sm-8 col-xs-10\">
\t\t\t\t\t<div class=\"search-header-w\">
\t\t\t\t\t\t\t";
        // line 52
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"middle-right col-lg-3 col-md-2 col-sm-4 col-xs-2\">
\t\t\t\t\t<div class=\"shopping_cart\">
\t\t\t\t\t \t";
        // line 57
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 59
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "phone_status"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method"))) {
            // line 60
            echo "\t\t\t\t\t<div class=\"telephone hidden-xs hidden-sm hidden-md\" >
\t\t\t\t\t\t";
            // line 61
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method")), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"header-bottom ";
        // line 69
        echo (isset($context["hidden_headerbottom"]) ? $context["hidden_headerbottom"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"bottom1 menu-vertical col-lg-3 col-md-3 col-sm-3\">
\t\t\t\t\t";
        // line 73
        echo (isset($context["content_menu2"]) ? $context["content_menu2"] : null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu col-lg-9 col-md-9 col-sm-9\">
\t\t\t\t\t";
        // line 76
        echo (isset($context["content_menu1"]) ? $context["content_menu1"] : null);
        echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

</header>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 76,  176 => 73,  169 => 69,  162 => 64,  156 => 61,  153 => 60,  151 => 59,  146 => 57,  138 => 52,  129 => 46,  120 => 41,  112 => 34,  108 => 32,  101 => 31,  94 => 30,  87 => 28,  80 => 27,  72 => 25,  69 => 24,  65 => 22,  59 => 20,  57 => 19,  54 => 18,  52 => 17,  49 => 16,  47 => 15,  43 => 13,  37 => 11,  35 => 10,  30 => 7,  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Get variable : Config Select Block on header=====#}*/
/* {% set hidden_headercenter = soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headerbottom = soconfig.get_settings('toppanel_type') =='1'? 'hidden-compact' : '' %}*/
/* */
/* <header id="header" class=" variant typeheader-{{ typeheader ? typeheader : '1'}}">*/
/* 	{#======	HEADER TOP	=======#}*/
/* 	<div class="header-top hidden-compact">*/
/* 		<div class="container">*/
/* 			<div class="header-top-left pull-left hidden-xs">*/
/* 				{% if header_block %}*/
/* 					{{ header_block }}*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="header-top-right collapsed-block pull-right">*/
/* 				{% if soconfig.get_settings('lang_status') %}*/
/* 				<ul class="top-link list-inline lang-curr">*/
/* 					{% if soconfig.get_settings('welcome_message_status') %}*/
/* 						<li class="hidden-sm hidden-xs welcome-msg">*/
/* 							{% if soconfig.get_settings('welcome_message') is not empty %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('welcome_message') ) }}*/
/* 							{% endif %}*/
/* 						</li>*/
/* 					{% endif %}*/
/* 					{% if logged %}*/
/* 						<li class="log logout"><i class="fa fa-unlock"></i> <a class="link-lg" href="{{ logout }} "> {{ text_logout }} </a></li>*/
/* 					{% else %}*/
/* 						<li class="log login"><a class="link-lg" href="{{ login }} ">{{ text_login }} </a> </li>*/
/* 						<li class="log register"> <a href="{{ register }}">{{ text_register }}</a></li>*/
/* 					{% endif %}*/
/* 					{% if currency %}<li class="currency"> {{ currency }}  </li> {% endif %}*/
/* 					{% if language %} <li class="language">{{ language }} </li>	{% endif %}*/
/* 				</ul>*/
/* 				{% endif %}*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{#======	HEADER CENTER	=======#}*/
/* 	<div class="header-middle {{hidden_headercenter}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/* 					<div class="logo">*/
/* 				   		{{soconfig.get_logo()}}*/
/* 				   	</div>*/
/* 				</div>*/
/* */
/* 				<div class="bottom2 col-lg-6 col-md-7 col-sm-8 col-xs-10">*/
/* 					<div class="search-header-w">*/
/* 							{{ search_block }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="middle-right col-lg-3 col-md-2 col-sm-4 col-xs-2">*/
/* 					<div class="shopping_cart">*/
/* 					 	{{ cart }}*/
/* 					</div>*/
/* 					{% if soconfig.get_settings('phone_status') and soconfig.get_settings('contact_number') %}*/
/* 					<div class="telephone hidden-xs hidden-sm hidden-md" >*/
/* 						{{ soconfig.decode_entities( soconfig.get_settings('contact_number') ) }}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="header-bottom {{hidden_headerbottom}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="bottom1 menu-vertical col-lg-3 col-md-3 col-sm-3">*/
/* 					{{ content_menu2 }}*/
/* 				</div>*/
/* 				<div class="main-menu col-lg-9 col-md-9 col-sm-9">*/
/* 					{{ content_menu1 }}*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </header>*/
