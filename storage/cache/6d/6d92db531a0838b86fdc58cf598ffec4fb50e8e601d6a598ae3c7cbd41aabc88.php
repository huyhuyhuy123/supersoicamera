<?php

/* so-mobile/template/common/header.twig */
class __TwigTemplate_70f58c162c84fb31a475b8b47820b803bafb025852d502308a4200c0fa4b91f9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\"> 
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 18
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 22
        if (((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo "
";
        } elseif ((        // line 23
(isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"), "method");
            echo " 
";
        } else {
            // line 24
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo " ";
        }
        // line 25
        echo "
";
        // line 26
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        echo "
";
        // line 27
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/lib.css"), "method");
        echo "

";
        // line 29
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/ratchet/ratchet-rtl.css"), "method");
            echo " 
";
        } else {
            // line 30
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/ratchet/ratchet.css"), "method");
            echo " ";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 35
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "method");
        echo "
";
        // line 36
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "method");
        echo "
";
        // line 37
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/libs.js"), "method");
        echo "
";
        // line 38
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"), "method");
        echo "

";
        // line 40
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barnav"), "method")) {
            // line 41
            echo "\t";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/mobile/topnav.js"), "method");
            echo "
";
        }
        // line 42
        echo " 
";
        // line 43
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/mobile/so.mobile.js"), "method");
        echo "
";
        // line 44
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/ratchet/ratchet.js"), "method");
        echo "


";
        // line 47
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 48
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => $context["script"]), "method");
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

";
        // line 53
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compassMobile", array());
        echo "
";
        // line 54
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssExclude"), "method")), "method");
        echo "
";
        // line 55
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsExclude"), "method")), "method");
        echo "


";
        // line 59
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "murl_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mbody_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "murl_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 60
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "murl_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mheading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "murl_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 61
        if ((isset($context["mselector_body"]) ? $context["mselector_body"] : null)) {
            // line 62
            echo "\t<style type=\"text/css\">
\t\t";
            // line 63
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mbody_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["mselector_body"]) ? $context["mselector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mfamily_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 64
                echo "  ";
                echo ((((isset($context["mselector_body"]) ? $context["mselector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mnormal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 66
        echo " 


";
        // line 69
        if ((isset($context["mselector_heading"]) ? $context["mselector_heading"] : null)) {
            // line 70
            echo "\t<style type=\"text/css\">
\t\t";
            // line 71
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mheading_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["mselector_heading"]) ? $context["mselector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mfamily_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 72
                echo "  ";
                echo ((((isset($context["mselector_heading"]) ? $context["mselector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mnormal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 74
        echo " 



";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 81
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "

</head>

";
        // line 88
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 89
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 90
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " mobilelayout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mobilelayout"), "method"));
        // line 91
        echo "\t
<body class=\"";
        // line 92
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
";
        // line 93
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/panel_left.twig"), "so-mobile/template/common/header.twig", 93)->display($context);
        // line 94
        echo "
<div id=\"wrapper\">  
";
        // line 97
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "bottombar_status"), "method")) {
            // line 98
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/panel_bar.twig"), "so-mobile/template/common/header.twig", 98)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
        }
        // line 101
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barnav"), "method")) {
            // line 102
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "1")) {
                // line 103
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-mobile/template/common/header.twig", 103)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 104
                echo "\t";
            } elseif (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "2")) {
                // line 105
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header2.twig"), "so-mobile/template/common/header.twig", 105)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 106
                echo "\t";
            } elseif (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "3")) {
                // line 107
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header3.twig"), "so-mobile/template/common/header.twig", 107)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 108
                echo "\t";
            }
        }
        // line 110
        echo "
<!-- Begin Main Content -->
<div class=\"content\">

";
        // line 115
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "barnav"), "method") == 0)) {
            // line 116
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "1")) {
                // line 117
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-mobile/template/common/header.twig", 117)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 118
                echo "\t";
            } elseif (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "2")) {
                // line 119
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header2.twig"), "so-mobile/template/common/header.twig", 119)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 120
                echo "\t";
            } elseif (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method") == "3")) {
                // line 121
                echo "\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header3.twig"), "so-mobile/template/common/header.twig", 121)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mtypeheader"), "method"))));
                // line 122
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "so-mobile/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 122,  356 => 121,  353 => 120,  350 => 119,  347 => 118,  344 => 117,  341 => 116,  339 => 115,  333 => 110,  329 => 108,  326 => 107,  323 => 106,  320 => 105,  317 => 104,  314 => 103,  311 => 102,  309 => 101,  305 => 98,  303 => 97,  299 => 94,  297 => 93,  293 => 92,  290 => 91,  288 => 90,  286 => 89,  284 => 88,  278 => 83,  269 => 81,  264 => 80,  251 => 79,  245 => 74,  237 => 72,  230 => 71,  227 => 70,  225 => 69,  220 => 66,  212 => 64,  205 => 63,  202 => 62,  200 => 61,  192 => 60,  184 => 59,  178 => 55,  174 => 54,  170 => 53,  166 => 50,  155 => 49,  151 => 48,  147 => 47,  141 => 44,  137 => 43,  134 => 42,  128 => 41,  126 => 40,  121 => 38,  117 => 37,  113 => 36,  109 => 35,  106 => 33,  97 => 32,  94 => 31,  90 => 30,  84 => 29,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 23,  56 => 22,  52 => 19,  46 => 18,  40 => 17,  35 => 15,  31 => 14,  22 => 10,  19 => 9,);
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
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"> */
/* {% if description %}<meta name="description" content="{{ description }}" />{% endif %}*/
/* {% if keywords %}<meta name="keywords" content="{{ keywords }}" />{% endif %}*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/* */
/* {# =========== Begin General CSS ==============#}*/
/* {% if direction=='ltr' %} {{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}*/
/* {% elseif direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}} {% endif %}*/
/* */
/* {{soconfig.addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/lib.css')}}*/
/* */
/* {% if direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/ratchet/ratchet-rtl.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/ratchet/ratchet.css')}} {% endif %}*/
/* */
/* {% for style in styles %}{{ soconfig.addCss(style.href)}}{% endfor %}*/
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/lazysizes/lazysizes.min.js')}}*/
/* */
/* {% if soconfig.get_settings('barnav') %}*/
/* 	{{soconfig.addJs('catalog/view/javascript/soconfig/js/mobile/topnav.js')}}*/
/* {% endif %} */
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/mobile/so.mobile.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/ratchet/ratchet.js')}}*/
/* */
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* {% for script in scripts %} {{soconfig.addJs(script)}} {% endfor %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* {{soconfig.scss_compassMobile}}*/
/* {{soconfig.css_out(soconfig.get_settings('cssExclude'))}}*/
/* {{soconfig.js_out(soconfig.get_settings('jsExclude'))}}*/
/* */
/* */
/* {# =========== Begin Google Font ==============#}*/
/* {% if soconfig.get_settings('murl_body')  and  soconfig.get_settings('mbody_status') ==  'google' %} <link href='{{ soconfig.get_settings('murl_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('murl_heading')  and  soconfig.get_settings('mheading_status') ==  'google' %} <link href='{{ soconfig.get_settings('murl_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if mselector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('mbody_status') == 'google' %} {{ (mselector_body~'{font-family:'~ soconfig.get_settings('mfamily_body')~'}') }}*/
/* 		{% else %}  {{ mselector_body~'{font-family:'~ soconfig.get_settings('mnormal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* {% if mselector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('mheading_status') == 'google' %} {{ (mselector_heading~'{font-family:'~ soconfig.get_settings('mfamily_heading')~'}') }}*/
/* 		{% else %}  {{ mselector_heading~'{font-family:'~ soconfig.get_settings('mnormal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* */
/* </head>*/
/* */
/* {# =========== Add class Body ==============#}*/
/* {% set cls_body = class ~ ' ' %}*/
/* {% set cls_body = cls_body ~ direction %}*/
/* {% set cls_body = cls_body ~ ' mobilelayout-'~soconfig.get_settings('mobilelayout')%}*/
/* 	*/
/* <body class="{{cls_body}}">*/
/* {% include theme_directory~'/template/soconfig/panel_left.twig' %}*/
/* */
/* <div id="wrapper">  */
/* {# =========== Show Panel Bar==============#}*/
/* {% if soconfig.get_settings('bottombar_status') %}*/
/* 	{% include theme_directory~'/template/soconfig/panel_bar.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* {% endif %}*/
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('barnav') %}*/
/* 	{% if soconfig.get_settings('mtypeheader') =='1'%}*/
/* 		{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% elseif soconfig.get_settings('mtypeheader') =='2'%}*/
/* 		{% include theme_directory~'/template/header/header2.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% elseif soconfig.get_settings('mtypeheader') == '3' %}*/
/* 		{% include theme_directory~'/template/header/header3.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* <!-- Begin Main Content -->*/
/* <div class="content">*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('barnav') == 0 %}*/
/* 	{% if soconfig.get_settings('mtypeheader') =='1'%}*/
/* 		{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% elseif soconfig.get_settings('mtypeheader') =='2'%}*/
/* 		{% include theme_directory~'/template/header/header2.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% elseif soconfig.get_settings('mtypeheader') == '3' %}*/
/* 		{% include theme_directory~'/template/header/header3.twig' with {typeheader: soconfig.get_settings('mtypeheader')} %}*/
/* 	{% endif %}*/
/* {% endif %}*/
