<?php

/* so-megastore/template/common/header.twig */
class __TwigTemplate_bca8b19fd46b1e2c13aedb694edb86e0b4d191accec6921bdaa2619cea2114cc extends Twig_Template
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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
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
        // line 28
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/ie9-and-up.css")), "method");
        echo "
";
        // line 29
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/custom.css")), "method");
        echo "

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_status"), "method")) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_url"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                echo " ";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $context["cssfile"]), "method");
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
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
        // line 39
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/so.system.js"), "method");
        echo "
";
        // line 40
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"), "method");
        echo "
";
        // line 41
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"), "method");
        echo "
";
        // line 42
        if (((isset($context["class"]) ? $context["class"] : null) == "information-information")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/typo/element.js"), "method");
            echo " ";
        }
        // line 43
        echo "
";
        // line 44
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/jquery.nav.js")), "method");
        echo "

";
        // line 46
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 47
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/custom.js")), "method");
        echo "
";
        // line 48
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "

";
        // line 50
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_status"), "method")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/toppanel.js"), "method");
        }
        // line 51
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/so_onepagecheckout/js/so_onepagecheckout.js"), "method");
        echo "
";
        // line 52
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
        // line 53
        echo "

";
        // line 56
        echo "
";
        // line 57
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compass", array());
        echo "
";
        // line 58
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssExclude"), "method")), "method");
        echo "
";
        // line 59
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsExclude"), "method")), "method");
        echo "


";
        // line 63
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 64
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 65
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 66
        if ((isset($context["selector_body"]) ? $context["selector_body"] : null)) {
            // line 67
            echo "\t<style type=\"text/css\">
\t\t";
            // line 68
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 69
                echo "  ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 71
        echo " 
";
        // line 72
        if ((isset($context["selector_menu"]) ? $context["selector_menu"] : null)) {
            // line 73
            echo "\t<style type=\"text/css\">
\t\t";
            // line 74
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_menu"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 75
                echo "  ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_menu"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 77
        echo " 
";
        // line 78
        if ((isset($context["selector_heading"]) ? $context["selector_heading"] : null)) {
            // line 79
            echo "\t<style type=\"text/css\">
\t\t";
            // line 80
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 81
                echo "  ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 83
        echo " 


";
        // line 87
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method")))) {
            // line 88
            echo "    <style type=\"text/css\">";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method");
            echo " </style>
";
        }
        // line 89
        echo " 

";
        // line 91
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method")))) {
            // line 92
            echo "   <script type=\"text/javascript\"><!--";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method");
            echo "  //--></script>
";
        }
        // line 93
        echo " 


";
        // line 97
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
        // line 98
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 99
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
";
        // line 103
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method") == "boxed")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 106
            echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) : ("none"));
            echo " ;\t\t
\t\t";
            // line 107
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method") != "")) {
                // line 108
                echo "\t\t\tbackground-image: url(\"image/";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method");
                echo " \");
\t\t";
            }
            // line 110
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method")) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 111
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method")) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 115
        echo " \t

</head>
";
        // line 119
        echo "
\t";
        // line 120
        $context["layoutbox"] = (( !twig_test_empty((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null))) ? ((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method")));
        // line 121
        echo "\t";
        $context["pattern"] = (( !twig_test_empty((isset($context["url_pattern"]) ? $context["url_pattern"] : null))) ? ((isset($context["url_pattern"]) ? $context["url_pattern"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "pattern"), "method")));
        // line 122
        echo "

\t";
        // line 124
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 125
        echo "\t";
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 126
        echo "\t";
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " layout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typelayout"), "method"));
        // line 127
        if (((((isset($context["layoutbox"]) ? $context["layoutbox"] : null) == "boxed") && ((isset($context["pattern"]) ? $context["pattern"] : null) != "none")) && twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method")))) {
            // line 128
            echo "\t";
            $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " pattern-") . (isset($context["pattern"]) ? $context["pattern"] : null));
        }
        // line 129
        echo " 

\t";
        // line 131
        $context["cls_wrapper"] = ("wrapper-" . (isset($context["layoutbox"]) ? $context["layoutbox"] : null));
        // line 132
        echo "\t";
        $context["cls_wrapper"] = (((isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null) . " banners-effect-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "type_banner"), "method"));
        // line 133
        echo "
\t
<body class=\"";
        // line 135
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
<div id=\"wrapper\" class=\"";
        // line 136
        echo (isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null);
        echo "\">  
 
";
        // line 139
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader"), "method")) {
            // line 140
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/preloader.twig"), "so-megastore/template/common/header.twig", 140)->display(array_merge($context, array("preloader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader_animation"), "method"))));
        }
        // line 142
        echo "
";
        // line 144
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "1")) {
            // line 145
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-megastore/template/common/header.twig", 145)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } else {
            // line 146
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 158
        echo "
<div id=\"socialLogin\"></div>
 
 ";
        // line 161
        if (((array_key_exists("setting", $context) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_popuplogin", array()))) {
            echo " 
 <div class=\"modal fade in\" id=\"so_sociallogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\"> 
 <div class=\"modal-dialog block-popup-login\"> 
 <a href=\"javascript:void(0)\" title=\"Close\" class=\"close close-login fa fa-times-circle\" data-dismiss=\"modal\"></a> 
 <div class=\"tt_popup_login\"><strong>";
            // line 165
            echo (isset($context["text_title_popuplogin"]) ? $context["text_title_popuplogin"] : null);
            echo "</strong></div> 
 <div class=\"block-content\"> 
 <div class=\" col-reg registered-account\"> 
 <div class=\"block-content\"> 
 <form class=\"form form-login\" action=\"";
            // line 169
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" method=\"post\" id=\"login-form\"> 
 <fieldset class=\"fieldset login\" data-hasrequired=\"* Required Fields\"> 
 <div class=\"field email required email-input\"> 
 <div class=\"control\"> 
 <input name=\"email\" value=\"\" autocomplete=\"off\" id=\"email\" type=\"email\" class=\"input-text\" title=\"Email\" placeholder=\"E-mail Address\" /> 
 </div> 
 </div> 
 <div class=\"field password required pass-input\"> 
 <div class=\"control\"> 
 <input name=\"password\" type=\"password\" autocomplete=\"off\" class=\"input-text\" id=\"pass\" title=\"Password\" placeholder=\"Password\" /> 
 </div> 
 </div> 
 ";
            // line 181
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) {
                echo " 
 <div class=\" form-group\"> 
 <label class=\"control-label\">";
                // line 183
                echo (isset($context["text_title_login_with_social"]) ? $context["text_title_login_with_social"] : null);
                echo "</label> 
 <div> 
 ";
                // line 185
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googlestatus", array())) {
                    echo " 
 ";
                    // line 186
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        echo " 
 <a href=\"";
                        // line 187
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                    } else {
                        // line 188
                        echo " 
 <a class=\"social-icon\" href=\"";
                        // line 189
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\"> 
 <img class=\"img-responsive\" src=\"";
                        // line 190
                        echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 191
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 title=\"";
                        // line 192
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 /> 
 </a> 
 ";
                    }
                    // line 195
                    echo " 
 ";
                }
                // line 196
                echo " 
 ";
                // line 197
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbstatus", array())) {
                    echo " 
 ";
                    // line 198
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        echo " 
 <a href=\"";
                        // line 199
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                    } else {
                        // line 200
                        echo " 
 <a href=\"";
                        // line 201
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"social-icon\"> 
 <img class=\"img-responsive\" src=\"";
                        // line 202
                        echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 203
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\" 
 title=\"";
                        // line 204
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\" 
 /> 
 </a> 
 ";
                    }
                    // line 207
                    echo " 
 ";
                }
                // line 208
                echo " 
 ";
                // line 209
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twitstatus", array())) {
                    echo " 
 ";
                    // line 210
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        echo " 
 <a href=\"";
                        // line 211
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                    } else {
                        // line 212
                        echo " 
 <a class=\"social-icon\" href=\"";
                        // line 213
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\"> 
 <img class=\"img-responsive\" src=\"";
                        // line 214
                        echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 215
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\" 
 title=\"";
                        // line 216
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\" 
 /> 
 </a> 
 ";
                    }
                    // line 219
                    echo " 
 ";
                }
                // line 220
                echo " 
 ";
                // line 221
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkstatus", array())) {
                    echo " 
 ";
                    // line 222
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        echo " 
 <a href=\"";
                        // line 223
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                    } else {
                        // line 224
                        echo " 
 <a class=\"social-icon\" href=\"";
                        // line 225
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\"> 
 <img class=\"img-responsive\" src=\"";
                        // line 226
                        echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 227
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\" 
 title=\"";
                        // line 228
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\" 
 /> 
 </a> 
 ";
                    }
                    // line 231
                    echo " 
 ";
                }
                // line 232
                echo " 
 </div> 
 </div> 
 ";
            }
            // line 235
            echo " 
 <div class=\"secondary ft-link-p\"><a class=\"action remind\" href=\"";
            // line 236
            echo (isset($context["link_forgot_password"]) ? $context["link_forgot_password"] : null);
            echo "\"><span>";
            echo (isset($context["text_forgot_password"]) ? $context["text_forgot_password"] : null);
            echo "</span></a></div> 
 <div class=\"actions-toolbar\"> 
 <div class=\"primary\"><button type=\"submit\" class=\"action login primary\" name=\"send\" id=\"send2\"><span>";
            // line 238
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</span></button></div> 
 </div> 
 </fieldset> 
 </form> 
 </div> 
 </div> 
 <div class=\"col-reg login-customer\"> 
 ";
            // line 245
            echo (isset($context["text_colregister"]) ? $context["text_colregister"] : null);
            echo " 
 <a class=\"btn-reg-popup\" title=\"";
            // line 246
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_create_account"]) ? $context["text_create_account"] : null);
            echo "</a> 
 </div> 
 <div style=\"clear:both;\"></div> 
 </div> 
 </div> 
 </div> 
 <script type=\"text/javascript\"> 
 jQuery(document).ready(function(\$) { 
 var \$window = \$(window); 
 function checkWidth() { 
 var windowsize = \$window.width(); 
 if (windowsize > 767) { 
 \$('a[href*=\"account/login\"]').click(function (e) { 
 e.preventDefault(); 
 \$(\"#so_sociallogin\").modal('show'); 
 }); 
 } 
 } 
 checkWidth(); 
 \$(window).resize(checkWidth); 
 }); 
 </script> 
 ";
        }
        // line 268
        echo " 
 
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 268,  712 => 246,  708 => 245,  698 => 238,  691 => 236,  688 => 235,  682 => 232,  678 => 231,  671 => 228,  667 => 227,  663 => 226,  659 => 225,  656 => 224,  651 => 223,  647 => 222,  643 => 221,  640 => 220,  636 => 219,  629 => 216,  625 => 215,  621 => 214,  617 => 213,  614 => 212,  609 => 211,  605 => 210,  601 => 209,  598 => 208,  594 => 207,  587 => 204,  583 => 203,  579 => 202,  575 => 201,  572 => 200,  567 => 199,  563 => 198,  559 => 197,  556 => 196,  552 => 195,  545 => 192,  541 => 191,  537 => 190,  533 => 189,  530 => 188,  525 => 187,  521 => 186,  517 => 185,  512 => 183,  507 => 181,  492 => 169,  485 => 165,  478 => 161,  473 => 158,  459 => 146,  455 => 145,  453 => 144,  450 => 142,  446 => 140,  444 => 139,  439 => 136,  435 => 135,  431 => 133,  428 => 132,  426 => 131,  422 => 129,  418 => 128,  416 => 127,  413 => 126,  410 => 125,  408 => 124,  404 => 122,  401 => 121,  399 => 120,  396 => 119,  391 => 115,  383 => 111,  378 => 110,  372 => 108,  370 => 107,  366 => 106,  360 => 103,  357 => 101,  348 => 99,  343 => 98,  330 => 97,  325 => 93,  319 => 92,  317 => 91,  313 => 89,  307 => 88,  305 => 87,  300 => 83,  292 => 81,  285 => 80,  282 => 79,  280 => 78,  277 => 77,  269 => 75,  262 => 74,  259 => 73,  257 => 72,  254 => 71,  246 => 69,  239 => 68,  236 => 67,  234 => 66,  226 => 65,  218 => 64,  210 => 63,  204 => 59,  200 => 58,  196 => 57,  193 => 56,  189 => 53,  178 => 52,  174 => 51,  170 => 50,  165 => 48,  161 => 47,  157 => 46,  152 => 44,  149 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  115 => 33,  101 => 32,  92 => 31,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 23,  56 => 22,  52 => 19,  46 => 18,  40 => 17,  35 => 15,  31 => 14,  22 => 10,  19 => 9,);
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
/* <meta name="viewport" content="width=device-width, initial-scale=1"> */
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
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/ie9-and-up.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/custom.css')}}*/
/* */
/* {% for style in styles %}{{ soconfig.addCss(style.href)}}{% endfor %}*/
/* {% if soconfig.get_settings('cssfile_status') %}{% for cssfile in soconfig.get_settings('cssfile_url') %} {{soconfig.addCss(cssfile)}} {% endfor %} {% endif %}*/
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/so.system.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/lazysizes/lazysizes.min.js')}}*/
/* {% if class=='information-information' %} {{soconfig.addJs('catalog/view/javascript/soconfig/js/typo/element.js')}} {% endif %}*/
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/jquery.nav.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* */
/* {% if soconfig.get_settings('toppanel_status') %}{{soconfig.addJs('catalog/view/javascript/soconfig/js/toppanel.js')}}{% endif %}*/
/* {{soconfig.addJs('catalog/view/javascript/so_onepagecheckout/js/so_onepagecheckout.js')}}*/
/* {% for script in scripts %} {{soconfig.addJs(script)}} {% endfor %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* */
/* {{soconfig.scss_compass}}*/
/* {{soconfig.css_out(soconfig.get_settings('cssExclude'))}}*/
/* {{soconfig.js_out(soconfig.get_settings('jsExclude'))}}*/
/* */
/* */
/* {# =========== Begin Google Font ==============#}*/
/* {% if soconfig.get_settings('url_body')  and  soconfig.get_settings('body_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_menu')  and  soconfig.get_settings('menu_status')  ==  'google' %} <link href='{{ soconfig.get_settings('url_menu') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_heading')  and  soconfig.get_settings('heading_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if selector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('body_status') == 'google' %} {{ (selector_body|raw~'{font-family:'~ soconfig.get_settings('family_body')~'}') }}*/
/* 		{% else %}  {{ selector_body|raw~'{font-family:'~ soconfig.get_settings('normal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_menu %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_menu|raw~'{font-family:'~ soconfig.get_settings('family_menu')~'}') }}*/
/* 		{% else %}  {{ selector_menu|raw~'{font-family:'~ soconfig.get_settings('normal_menu')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('heading_status') == 'google' %} {{ (selector_heading|raw~'{font-family:'~ soconfig.get_settings('family_heading')~'}') }}*/
/* 		{% else %}  {{ selector_heading|raw~'{font-family:'~ soconfig.get_settings('normal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Custom Code Editor ==============#}*/
/* {% if soconfig.get_settings('cssinput_status') and (soconfig.get_settings('cssinput_content')) is not empty %}*/
/*     <style type="text/css">{{ soconfig.get_settings('cssinput_content')  }} </style>*/
/* {% endif %} */
/* */
/* {% if soconfig.get_settings('jsinput_status') and (soconfig.get_settings('jsinput_content')) is not empty %}*/
/*    <script type="text/javascript"><!--{{ soconfig.get_settings('jsinput_content')  }}  //--></script>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* {# =========== Begin Cusom Code ==============#}*/
/* {% if soconfig.get_settings('layoutstyle') == 'boxed'  %} */
/* 	<style type="text/css">*/
/* 	body {*/
/* 		background-color:{{ soconfig.get_settings('theme_bgcolor') ? soconfig.get_settings('theme_bgcolor') : 'none' }} ;		*/
/* 		{% if soconfig.get_settings('contentbg') !='' %}*/
/* 			background-image: url("image/{{soconfig.get_settings('contentbg') }} ");*/
/* 		{% endif %}*/
/* 		background-repeat:{{ soconfig.get_settings('content_bg_mode') is not empty ? soconfig.get_settings('content_bg_mode') : 'no-repeat' }} ;*/
/* 		background-attachment:{{ soconfig.get_settings('content_attachment') is not empty ? soconfig.get_settings('content_attachment') : 'inherit' }} ;*/
/* 		background-position:top center; */
/* 	}*/
/* 	</style>*/
/* {% endif %} 	*/
/* */
/* </head>*/
/* {# =========== Add class Body ==============#}*/
/* */
/* 	{% set layoutbox =  url_layoutbox is not empty  ? url_layoutbox : soconfig.get_settings('layoutstyle') %}*/
/* 	{% set pattern  =  url_pattern is not empty    ? url_pattern : soconfig.get_settings('pattern') %}*/
/* */
/* */
/* 	{% set cls_body = class ~ ' ' %}*/
/* 	{% set cls_body = cls_body ~ direction %}*/
/* 	{% set cls_body = cls_body ~ ' layout-'~soconfig.get_settings('typelayout')%}*/
/* {% if layoutbox=='boxed' and pattern !='none' and soconfig.get_settings('contentbg') is empty %}*/
/* 	{% set cls_body = cls_body ~ ' pattern-'~pattern%}*/
/* {% endif %} */
/* */
/* 	{% set cls_wrapper = 'wrapper-'~layoutbox%}*/
/* 	{% set cls_wrapper = cls_wrapper ~ ' banners-effect-'~soconfig.get_settings('type_banner')%}*/
/* */
/* 	*/
/* <body class="{{cls_body}}">*/
/* <div id="wrapper" class="{{cls_wrapper}}">  */
/*  */
/* {# =========== Show Preloader ==============#}*/
/* {% if soconfig.get_settings('preloader')%}*/
/* 	{% include theme_directory~'/template/soconfig/preloader.twig' with {preloader: soconfig.get_settings('preloader_animation')} %}*/
/* {% endif %}*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('typeheader') =='1'%}*/
/* 	{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% else%}	*/
/* 	<style>*/
/* 		.alert-primary .alert-link {color: #002752;}*/
/* 		.alert-link {font-weight: 700;text-decoration: none;}*/
/* 		.alert-link:hover{text-decoration: underline;}*/
/* 		.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;*/
/* 		}*/
/* 	</style>*/
/* 	<div class="alert alert-primary">*/
/* 			Go to admin, find Extensions >>  <a class="alert-link" href="admin/index.php?route=marketplace/modification"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* <div id="socialLogin"></div>*/
/*  */
/*  {% if setting is defined and setting.so_sociallogin_enable and setting.so_sociallogin_popuplogin %} */
/*  <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true"> */
/*  <div class="modal-dialog block-popup-login"> */
/*  <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a> */
/*  <div class="tt_popup_login"><strong>{{ text_title_popuplogin }}</strong></div> */
/*  <div class="block-content"> */
/*  <div class=" col-reg registered-account"> */
/*  <div class="block-content"> */
/*  <form class="form form-login" action="{{ login }}" method="post" id="login-form"> */
/*  <fieldset class="fieldset login" data-hasrequired="* Required Fields"> */
/*  <div class="field email required email-input"> */
/*  <div class="control"> */
/*  <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" /> */
/*  </div> */
/*  </div> */
/*  <div class="field password required pass-input"> */
/*  <div class="control"> */
/*  <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" /> */
/*  </div> */
/*  </div> */
/*  {% if setting.so_sociallogin_enable %} */
/*  <div class=" form-group"> */
/*  <label class="control-label">{{ text_title_login_with_social }}</label> */
/*  <div> */
/*  {% if setting.so_sociallogin_googlestatus %} */
/*  {% if setting.so_sociallogin_button == 'icon' %} */
/*  <a href="{{ googlelink }}" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a> */
/*  {% else %} */
/*  <a class="social-icon" href="{{ googlelink }}"> */
/*  <img class="img-responsive" src="{{ googleimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_googletitle }}" */
/*  title="{{ setting.so_sociallogin_googletitle }}" */
/*  /> */
/*  </a> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% if setting.so_sociallogin_fbstatus %} */
/*  {% if setting.so_sociallogin_button == 'icon' %} */
/*  <a href="{{ fblink }}" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a> */
/*  {% else %} */
/*  <a href="{{ fblink }}" class="social-icon"> */
/*  <img class="img-responsive" src="{{ fbimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_fbtitle }}" */
/*  title="{{ setting.so_sociallogin_fbtitle }}" */
/*  /> */
/*  </a> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% if setting.so_sociallogin_twitstatus %} */
/*  {% if setting.so_sociallogin_button == 'icon' %} */
/*  <a href="{{ twitlink }}" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a> */
/*  {% else %} */
/*  <a class="social-icon" href="{{ twitlink }}"> */
/*  <img class="img-responsive" src="{{ twitimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_twittertitle }}" */
/*  title="{{ setting.so_sociallogin_twittertitle }}" */
/*  /> */
/*  </a> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% if setting.so_sociallogin_linkstatus %} */
/*  {% if setting.so_sociallogin_button == 'icon' %} */
/*  <a href="{{ linkdinlink }}" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a> */
/*  {% else %} */
/*  <a class="social-icon" href="{{ linkdinlink }}"> */
/*  <img class="img-responsive" src="{{ linkdinimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_linkedintitle }}" */
/*  title="{{ setting.so_sociallogin_linkedintitle }}" */
/*  /> */
/*  </a> */
/*  {% endif %} */
/*  {% endif %} */
/*  </div> */
/*  </div> */
/*  {% endif %} */
/*  <div class="secondary ft-link-p"><a class="action remind" href="{{ link_forgot_password }}"><span>{{ text_forgot_password }}</span></a></div> */
/*  <div class="actions-toolbar"> */
/*  <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>{{ text_login }}</span></button></div> */
/*  </div> */
/*  </fieldset> */
/*  </form> */
/*  </div> */
/*  </div> */
/*  <div class="col-reg login-customer"> */
/*  {{ text_colregister }} */
/*  <a class="btn-reg-popup" title="{{ text_register }}" href="{{ register }}">{{ text_create_account }}</a> */
/*  </div> */
/*  <div style="clear:both;"></div> */
/*  </div> */
/*  </div> */
/*  </div> */
/*  <script type="text/javascript"> */
/*  jQuery(document).ready(function($) { */
/*  var $window = $(window); */
/*  function checkWidth() { */
/*  var windowsize = $window.width(); */
/*  if (windowsize > 767) { */
/*  $('a[href*="account/login"]').click(function (e) { */
/*  e.preventDefault(); */
/*  $("#so_sociallogin").modal('show'); */
/*  }); */
/*  } */
/*  } */
/*  checkWidth(); */
/*  $(window).resize(checkWidth); */
/*  }); */
/*  </script> */
/*  {% endif %} */
/*  */
/* */
