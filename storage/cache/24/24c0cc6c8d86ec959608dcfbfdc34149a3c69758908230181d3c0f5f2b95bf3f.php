<?php

/* extension/module/so_categories.twig */
class __TwigTemplate_e028628112a0d26425ea35601d5d2408b0513e532a1d717af5fd427fd6d24ff5 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "\" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "\" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 11
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "heading_title_so"), "method");
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array(), "any", true, true)) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 26
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 29
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 33
        echo "    \t
    \t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 36
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 39
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\" style=\"padding-left: 15px;\">
\t\t\t\t\t\t\t<li ";
        // line 42
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 43
        $context["i"] = 1;
        // line 44
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo "class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 47
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 50
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 51
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 56
        $context["module_row"] = 1;
        // line 57
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t<div  id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 67
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 70
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 72
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 78
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 81
            $context["i"] = 0;
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 85
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-head_name\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                    echo "\" name=\"head_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array(), "any", true, true)) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            // line 103
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 109
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 112
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 119
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 125
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 128
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_youtech\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#module\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 139
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#source_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#category_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#image_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"module\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-deviceclass_sfx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 167
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_deviceclass_sfx_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_deviceclass_sfx"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"deviceclass_sfx\" rows=\"5\" class=\"form-control\" id=\"input-deviceclass_sfx\">";
            // line 171
            echo $this->getAttribute($context["module"], "deviceclass_sfx", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_column0\"> <span data-toggle=\"tooltip\" title=\"";
            // line 176
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column0_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"category_column0\" id=\"input-category_column0\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_columns"]) ? $context["list_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "category_column0", array()))) ? ("selected") : (""));
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_column1\"> <span data-toggle=\"tooltip\" title=\"";
            // line 189
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column1_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"category_column1\" id=\"input-category_column1\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_columns"]) ? $context["list_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "category_column1", array()))) ? ("selected") : (""));
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_column2\"> <span data-toggle=\"tooltip\" title=\"";
            // line 202
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column2_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"category_column2\" id=\"input-category_column2\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_columns"]) ? $context["list_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "category_column2", array()))) ? ("selected") : (""));
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_column3\"> <span data-toggle=\"tooltip\" title=\"";
            // line 215
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column3_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"category_column3\" id=\"input-category_column3\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_columns"]) ? $context["list_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "category_column3", array()))) ? ("selected") : (""));
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_column4\"> <span data-toggle=\"tooltip\" title=\"";
            // line 228
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column4_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"category_column4\" id=\"input-category_column4\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list_columns"]) ? $context["list_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "category_column4", array()))) ? ("selected") : (""));
                // line 234
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-theme\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 242
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_theme_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_theme"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme\" id=\"input-theme\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "theme", array()))) ? ("selected") : (""));
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 257
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"item_link_target\" id=\"input-open_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item_link_targets"]) ? $context["item_link_targets"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "item_link_target", array()))) ? ("selected") : (""));
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group input-accmouseenter_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-accmouseenter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 272
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_accmouseenter_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_accmouseenter"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"accmouseenter\" id=\"input-accmouseenter\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accmouseenters"]) ? $context["accmouseenters"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "accmouseenter", array()))) ? ("selected") : (""));
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"source_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 290
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 294
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category[]\" value=\"";
                // line 298
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 303
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array(), "any", true, true)) {
                // line 304
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-child_category\"> <span data-toggle=\"tooltip\" title=\"";
            // line 309
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 313
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 315
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 317
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 318
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 322
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 324
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 327
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 329
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-category_depth_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_depth\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 334
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_depth\" value=\"";
            // line 337
            echo $this->getAttribute($context["module"], "category_depth", array());
            echo "\" id=\"input-category_depth\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 339
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array(), "any", true, true)) {
                // line 340
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-source_limit_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-source_limit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 346
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"source_limit\" value=\"";
            // line 350
            echo $this->getAttribute($context["module"], "source_limit", array());
            echo "\" id=\"input-source_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 352
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array(), "any", true, true)) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 355
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"category_option\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<u style=\"color:#4e9e41\">";
            // line 361
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_options"), "method");
            echo "</u>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_title_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 365
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_title_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_title_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 370
            if ($this->getAttribute($context["module"], "cat_title_display", array())) {
                // line 371
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_title_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 372
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 374
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_title_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 375
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 379
            if ($this->getAttribute($context["module"], "cat_title_display", array())) {
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_title_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 381
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 383
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_title_display\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 384
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_title_maxcharacs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 392
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_title_maxcharacs_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_title_maxcharacs"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cat_title_maxcharacs\" value=\"";
            // line 396
            echo $this->getAttribute($context["module"], "cat_title_maxcharacs", array());
            echo "\" id=\"input-cat_title_maxcharacs\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 398
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cat_title_maxcharacs", array(), "any", true, true)) {
                // line 399
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cat_title_maxcharacs", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 401
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<u style=\"color:#4e9e41\">";
            // line 404
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_sub_category_options"), "method");
            echo "</u>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_sub_title_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 408
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_sub_title_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_sub_title_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 413
            if ($this->getAttribute($context["module"], "cat_sub_title_display", array())) {
                // line 414
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_sub_title_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 415
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 417
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_sub_title_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 418
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 420
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 422
            if ($this->getAttribute($context["module"], "cat_sub_title_display", array())) {
                // line 423
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_sub_title_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 424
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 426
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_sub_title_display\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 427
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 429
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_sub_title_maxcharacs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 435
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_sub_title_maxcharacs_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_sub_title_maxcharacs"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cat_sub_title_maxcharacs\" value=\"";
            // line 439
            echo $this->getAttribute($context["module"], "cat_sub_title_maxcharacs", array());
            echo "\" id=\"input-cat_sub_title_maxcharacs\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 441
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cat_sub_title_maxcharacs", array(), "any", true, true)) {
                // line 442
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cat_sub_title_maxcharacs", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 444
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_all_product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 448
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_all_product_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_all_product"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 453
            if ($this->getAttribute($context["module"], "cat_all_product", array())) {
                // line 454
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_all_product\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 455
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_show"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 457
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_all_product\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 458
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_show"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 460
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 462
            if ($this->getAttribute($context["module"], "cat_all_product", array())) {
                // line 463
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_all_product\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 464
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_hide"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 466
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"cat_all_product\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 467
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_hide"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 469
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 478
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 483
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 484
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 485
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 487
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 488
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 490
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 492
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 493
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 494
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 496
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 497
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 499
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 505
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 509
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 511
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array(), "any", true, true)) {
                // line 512
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 514
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 518
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 522
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 524
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array(), "any", true, true)) {
                // line 525
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 527
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-placeholder_path\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 531
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_placeholder_path_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_placeholder_path"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"placeholder_path\" value=\"";
            // line 535
            echo $this->getAttribute($context["module"], "placeholder_path", array());
            echo "\" id=\"input-placeholder_path\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 537
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "placeholder_path", array(), "any", true, true)) {
                // line 538
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "placeholder_path", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 540
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"advanced_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 546
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\"> ";
            // line 549
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo " </textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 554
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\"> ";
            // line 557
            echo $this->getAttribute($context["module"], "post_text", array());
            echo " </textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 563
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 568
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 569
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 570
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 572
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 573
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 575
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 577
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 578
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 579
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 581
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\"  checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 582
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 584
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 590
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 594
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 596
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array(), "any", true, true)) {
                // line 597
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 599
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 604
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
    \t</div>\t
  \t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('input[name=\\'category\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_categories/autocomplete&user_token=";
        // line 616
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'category\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-category' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-category').append('<div id=\"featured-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t\t}
\t\t});
\t\t\t
\t\t\$('#featured-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t});
//--></script>
\t<script type=\"text/javascript\"><!--
\t\t\$('#so_youtech a:first').tab('show');
\t\t
\t\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t\t\$('#input-source_limit_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t\t\$('#input-source_limit_form').show();
\t\t}

\t\t\$(\"input[name='child_category']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').hide();
\t\t\t\t\$('#input-source_limit_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').show();
\t\t\t\t\$('#input-source_limit_form').show();
\t\t\t}
\t\t});

\t\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-cache_time_form').show();
\t\t}

\t\t\$(\"input[name='use_cache']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').show();
\t\t\t}
\t\t});
\t\t
\t\tvar theme = \$(\"#input-theme\").val();
\t\tif(theme != 'theme4')
\t\t{
\t\t\t\$(\".input-accmouseenter_form\").hide();
\t\t}else{
\t\t\t\$(\".input-accmouseenter_form\").show();
\t\t}

\t\t\$(\"#input-theme\").change(function(){
\t\t\tvar theme = \$(this).val();
\t\t\tif(theme != 'theme4')
\t\t\t{
\t\t\t\t\$(\".input-accmouseenter_form\").hide();
\t\t\t}else{
\t\t\t\t\$(\".input-accmouseenter_form\").show();
\t\t\t}
\t\t});

\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
\t\t});
//--></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 716
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 717
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
\t\t\tif(\$('#column-left').hasClass('active')){
\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t}else{
\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t}
\t\t\t\$('#button-menu').click(function(){
\t\t\t\t\$('.remove-caching').remove();
\t\t\t\tif(\$(this).parents().find('#column-left').hasClass('active')){
\t\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t\t}else{
\t\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t\t}
\t\t\t});
\t\t});
\t\tfunction remove_cache(){
\t\t\tvar success_remove = '";
        // line 733
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 736
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
\t\t\t\tdata: {\tis_ajax_cache_lite: 1},
\t\t\t\tsuccess: function () {
\t\t\t\t\tvar html = '<div class=\"alert alert-success cls-remove-cache\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\t\tif(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
\t\t\t\t\t\t\$('.page-header .container-fluid').append(html);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});
\t\t}
\t</script>
</div>
";
        // line 748
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1599 => 748,  1584 => 736,  1578 => 733,  1559 => 717,  1553 => 716,  1450 => 616,  1438 => 606,  1430 => 604,  1423 => 599,  1417 => 597,  1415 => 596,  1410 => 594,  1401 => 590,  1393 => 584,  1388 => 582,  1385 => 581,  1380 => 579,  1377 => 578,  1375 => 577,  1371 => 575,  1366 => 573,  1363 => 572,  1358 => 570,  1355 => 569,  1353 => 568,  1343 => 563,  1334 => 557,  1326 => 554,  1318 => 549,  1310 => 546,  1302 => 540,  1296 => 538,  1294 => 537,  1289 => 535,  1280 => 531,  1274 => 527,  1268 => 525,  1266 => 524,  1261 => 522,  1252 => 518,  1246 => 514,  1240 => 512,  1238 => 511,  1233 => 509,  1224 => 505,  1216 => 499,  1211 => 497,  1208 => 496,  1203 => 494,  1200 => 493,  1198 => 492,  1194 => 490,  1189 => 488,  1186 => 487,  1181 => 485,  1178 => 484,  1176 => 483,  1166 => 478,  1155 => 469,  1150 => 467,  1147 => 466,  1142 => 464,  1139 => 463,  1137 => 462,  1133 => 460,  1128 => 458,  1125 => 457,  1120 => 455,  1117 => 454,  1115 => 453,  1105 => 448,  1099 => 444,  1093 => 442,  1091 => 441,  1086 => 439,  1077 => 435,  1069 => 429,  1064 => 427,  1061 => 426,  1056 => 424,  1053 => 423,  1051 => 422,  1047 => 420,  1042 => 418,  1039 => 417,  1034 => 415,  1031 => 414,  1029 => 413,  1019 => 408,  1012 => 404,  1007 => 401,  1001 => 399,  999 => 398,  994 => 396,  985 => 392,  977 => 386,  972 => 384,  969 => 383,  964 => 381,  961 => 380,  959 => 379,  955 => 377,  950 => 375,  947 => 374,  942 => 372,  939 => 371,  937 => 370,  927 => 365,  920 => 361,  912 => 355,  906 => 353,  904 => 352,  899 => 350,  890 => 346,  884 => 342,  878 => 340,  876 => 339,  871 => 337,  863 => 334,  856 => 329,  851 => 327,  848 => 326,  843 => 324,  840 => 323,  838 => 322,  834 => 320,  829 => 318,  826 => 317,  821 => 315,  818 => 314,  816 => 313,  807 => 309,  802 => 306,  796 => 304,  794 => 303,  790 => 301,  781 => 298,  774 => 297,  770 => 296,  765 => 294,  756 => 290,  745 => 281,  732 => 279,  729 => 278,  725 => 277,  715 => 272,  707 => 266,  694 => 264,  691 => 263,  687 => 262,  677 => 257,  669 => 251,  656 => 249,  653 => 248,  649 => 247,  639 => 242,  631 => 236,  618 => 234,  615 => 233,  611 => 232,  602 => 228,  595 => 223,  582 => 221,  579 => 220,  575 => 219,  566 => 215,  559 => 210,  546 => 208,  543 => 207,  539 => 206,  530 => 202,  523 => 197,  510 => 195,  507 => 194,  503 => 193,  494 => 189,  487 => 184,  474 => 182,  471 => 181,  467 => 180,  458 => 176,  450 => 171,  441 => 167,  430 => 159,  422 => 154,  414 => 149,  406 => 144,  398 => 139,  387 => 130,  382 => 128,  377 => 127,  372 => 125,  367 => 124,  365 => 123,  356 => 119,  349 => 114,  344 => 112,  339 => 111,  334 => 109,  329 => 108,  327 => 107,  318 => 103,  313 => 100,  307 => 98,  305 => 97,  301 => 95,  290 => 93,  286 => 92,  281 => 89,  275 => 88,  267 => 86,  265 => 85,  252 => 84,  249 => 83,  244 => 82,  242 => 81,  234 => 78,  229 => 75,  223 => 73,  221 => 72,  214 => 70,  206 => 67,  198 => 63,  190 => 60,  187 => 59,  184 => 58,  179 => 57,  177 => 56,  171 => 52,  165 => 51,  163 => 50,  157 => 47,  149 => 46,  142 => 45,  137 => 44,  135 => 43,  125 => 42,  119 => 39,  113 => 36,  108 => 33,  101 => 29,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ objlang.get('entry_button_save') }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ objlang.get('entry_button_save') }}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }}" ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit') }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }}" ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new') }}</a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ objlang.get('entry_button_cancel') }}" class="btn btn-danger"><i class="fa fa-reply"></i>  {{ objlang.get('entry_button_cancel') }}</a>*/
/* 			</div>*/
/* 			<h1>{{ objlang.get('heading_title_so') }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error.warning is defined %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		{% if success is defined and success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/*     	*/
/*     	<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 					<div class="row">*/
/* 						<ul class="nav nav-tabs" role="tablist" style="padding-left: 15px;">*/
/* 							<li {% if selectedid == 0 %} class="active" {% endif %}><a href="{{ link }}"> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 							{% set i=1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %}class="active" {% endif %}>*/
/* 									<a href="{{ link }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}"  >*/
/* 										<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 									</a>*/
/* 								</li>*/
/* 								{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							{% set module_row = 1 %}*/
/* 							{% for module in modules %}*/
/* 								{% if selectedid %}*/
/* 									<div class="pull-right">*/
/* 										<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div  id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<input type="hidden" name="action" id="action" value=""/>*/
/* 										*/
/* 										<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }}">{{ objlang.get('entry_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }}">{{ objlang.get('entry_head_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 														<input type="hidden" class="form-control" id="input-head_name" placeholder="{{ objlang.get('entry_head_name') }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" name="head_name">*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<select  class="form-control" id="language">*/
/* 													{% for language in languages %}*/
/* 													<option value="{{ language.language_id }}">{{ language.name }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											{% if error.head_name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.head_name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }}">{{ objlang.get('entry_display_title_module') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 													{% if module.disp_title_module %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }}">{{ objlang.get('entry_status') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="status" id="input-status" class="form-control">*/
/* 													{% if module.status %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="tab-pane">*/
/* 									<ul class="nav nav-tabs" id="so_youtech">*/
/* 										<li>*/
/* 											<a href="#module" data-toggle="tab">*/
/* 												{{ objlang.get('entry_module') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#source_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_source_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#category_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_category_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#image_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_image_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#advanced_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_advanced_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 										<div class="tab-pane" id="module">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-deviceclass_sfx">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_deviceclass_sfx_desc') }}">{{ objlang.get('entry_deviceclass_sfx') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="deviceclass_sfx" rows="5" class="form-control" id="input-deviceclass_sfx">{{ module.deviceclass_sfx }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category_column0"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column0_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="category_column0" id="input-category_column0" class="form-control">*/
/* 															{% for option_id, option_value in list_columns %}*/
/* 																{% set selected = option_id == module.category_column0 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category_column1"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column1_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="category_column1" id="input-category_column1" class="form-control">*/
/* 															{% for option_id, option_value in list_columns %}*/
/* 																{% set selected = option_id == module.category_column1 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>						*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category_column2"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column2_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="category_column2" id="input-category_column2" class="form-control">*/
/* 															{% for option_id, option_value in list_columns %}*/
/* 																{% set selected = option_id == module.category_column2 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>						*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category_column3"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column3_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="category_column3" id="input-category_column3" class="form-control">*/
/* 															{% for option_id, option_value in list_columns %}*/
/* 																{% set selected = option_id == module.category_column3 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category_column4"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column4_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="category_column4" id="input-category_column4" class="form-control">*/
/* 															{% for option_id, option_value in list_columns %}*/
/* 																{% set selected = option_id == module.category_column4 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-theme">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_theme_desc') }}">{{ objlang.get('entry_theme') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="theme" id="input-theme" class="form-control">*/
/* 															{% for option_id, option_value in themes %}*/
/* 																{% set selected = option_id == module.theme ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-open_link">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_open_link_desc') }}">{{ objlang.get('entry_open_link') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="item_link_target" id="input-open_link" class="form-control">*/
/* 															{% for option_id, option_value in item_link_targets %}*/
/* 																{% set selected = option_id == module.item_link_target ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group input-accmouseenter_form">*/
/* 												<label class="col-sm-3 control-label" for="input-accmouseenter">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_accmouseenter_desc') }}">{{ objlang.get('entry_accmouseenter') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="accmouseenter" id="input-accmouseenter" class="form-control">*/
/* 															{% for option_id, option_value in accmouseenters %}*/
/* 																{% set selected = option_id == module.accmouseenter ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 							*/
/* 										<div class="tab-pane" id="source_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_desc') }}">{{ objlang.get('entry_category') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category" value="" placeholder="{{ objlang.get('entry_category') }}" id="input-category" class="form-control" />*/
/* 														<div id="featured-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for category in module.categorys %}*/
/* 																<div id="featured-category{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/* 																<input type="hidden" name="category[]" value="{{ category.category_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.category is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-child_category"> <span data-toggle="tooltip" title="{{ objlang.get('entry_child_category_desc') }}">{{ objlang.get('entry_child_category') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="1" checked="checked" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="1" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="0" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="0"  checked="checked" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-category_depth_form">*/
/* 												<label class="col-sm-3 control-label" for="input-category_depth"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_depth_desc') }}">{{ objlang.get('entry_category_depth') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category_depth" value="{{ module.category_depth }}" id="input-category_depth" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.category_depth is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category_depth }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-source_limit_form">*/
/* 												<label class="col-sm-3 control-label" for="input-source_limit">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_source_limit_desc') }}">{{ objlang.get('entry_source_limit') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="source_limit" value="{{ module.source_limit }}" id="input-source_limit" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.source_limit is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.source_limit }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 							*/
/* 										<div class="tab-pane" id="category_option">*/
/* 											<label class="col-sm-12">*/
/* 												<u style="color:#4e9e41">{{ objlang.get('entry_category_options') }}</u>*/
/* 											</label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_title_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cat_title_display_desc') }}">{{ objlang.get('entry_cat_title_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_title_display %}*/
/* 																<input type="radio" name="cat_title_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_title_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_title_display %}*/
/* 																<input type="radio" name="cat_title_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_title_display" value="0"  checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_title_maxcharacs">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_cat_title_maxcharacs_desc') }}">{{ objlang.get('entry_cat_title_maxcharacs') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="cat_title_maxcharacs" value="{{ module.cat_title_maxcharacs }}" id="input-cat_title_maxcharacs" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.cat_title_maxcharacs is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.cat_title_maxcharacs }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<label class="col-sm-12">*/
/* 												<u style="color:#4e9e41">{{ objlang.get('entry_sub_category_options') }}</u>*/
/* 											</label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_sub_title_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cat_sub_title_display_desc') }}">{{ objlang.get('entry_cat_sub_title_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_sub_title_display %}*/
/* 																<input type="radio" name="cat_sub_title_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_sub_title_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_sub_title_display %}*/
/* 																<input type="radio" name="cat_sub_title_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_sub_title_display" value="0"  checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_sub_title_maxcharacs">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_cat_sub_title_maxcharacs_desc') }}">{{ objlang.get('entry_cat_sub_title_maxcharacs') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="cat_sub_title_maxcharacs" value="{{ module.cat_sub_title_maxcharacs }}" id="input-cat_sub_title_maxcharacs" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.cat_sub_title_maxcharacs is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.cat_sub_title_maxcharacs }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_all_product">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cat_all_product_desc') }}">{{ objlang.get('entry_cat_all_product') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_all_product %}*/
/* 																<input type="radio" name="cat_all_product" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_show') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_all_product" value="1" />*/
/* 																{{ objlang.get('text_show') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.cat_all_product %}*/
/* 																<input type="radio" name="cat_all_product" value="0" />*/
/* 																{{ objlang.get('text_hide') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="cat_all_product" value="0"  checked="checked" />*/
/* 																{{ objlang.get('text_hide') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 							*/
/* 										<div class="tab-pane" id="image_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_product_image_desc') }}">{{ objlang.get('entry_product_image') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="0"  checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }}">{{ objlang.get('entry_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="width" value="{{ module.width }}" id="input-width" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-height">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }}">{{ objlang.get('entry_height') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="height" value="{{ module.height }}" id="input-height" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-placeholder_path">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_placeholder_path_desc') }}">{{ objlang.get('entry_placeholder_path') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="placeholder_path" value="{{ module.placeholder_path }}" id="input-placeholder_path" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.placeholder_path is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.placeholder_path }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 							*/
/* 										<div class="tab-pane" id="advanced_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }}">{{ objlang.get('entry_pre_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="pre_text" id="input-pre_text" class="form-control"> {{ module.pre_text }} </textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }}">{{ objlang.get('entry_post_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="post_text" id="input-post_text" class="form-control"> {{ module.post_text }} </textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }}">{{ objlang.get('entry_use_cache') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="0"  checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-cache_time_form">*/
/* 												<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }}">{{ objlang.get('entry_cache_time') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.cache_time is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.cache_time }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% set module_row = module_row + 1 %}						*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/*     	</div>	*/
/*   	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('input[name=\'category\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_categories/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['category_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'category\']').val('');*/
/* 				*/
/* 				$('#featured-category' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-category').append('<div id="featured-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category[]" value="' + item['value'] + '" /></div>');	*/
/* 			}*/
/* 		});*/
/* 			*/
/* 		$('#featured-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('#so_youtech a:first').tab('show');*/
/* 		*/
/* 		if($("input[name='child_category']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-category_depth_form').hide();*/
/* 			$('#input-source_limit_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-category_depth_form').show();*/
/* 			$('#input-source_limit_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='child_category']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-category_depth_form').hide();*/
/* 				$('#input-source_limit_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-category_depth_form').show();*/
/* 				$('#input-source_limit_form').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='use_cache']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-cache_time_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-cache_time_form').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		var theme = $("#input-theme").val();*/
/* 		if(theme != 'theme4')*/
/* 		{*/
/* 			$(".input-accmouseenter_form").hide();*/
/* 		}else{*/
/* 			$(".input-accmouseenter_form").show();*/
/* 		}*/
/* */
/* 		$("#input-theme").change(function(){*/
/* 			var theme = $(this).val();*/
/* 			if(theme != 'theme4')*/
/* 			{*/
/* 				$(".input-accmouseenter_form").hide();*/
/* 			}else{*/
/* 				$(".input-accmouseenter_form").show();*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head-name"]').val($(this).val());*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript">*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ objlang.get("entry_button_clear_cache") }}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/* 			if($('#column-left').hasClass('active')){*/
/* 				$('#column-left #stats').after(button);*/
/* 			}else{*/
/* 				$('#column-left #stats').after(button_min);*/
/* 			}*/
/* 			$('#button-menu').click(function(){*/
/* 				$('.remove-caching').remove();*/
/* 				if($(this).parents().find('#column-left').hasClass('active')){*/
/* 					$('#column-left #stats').after(button);*/
/* 				}else{*/
/* 					$('#column-left #stats').after(button_min);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 		function remove_cache(){*/
/* 			var success_remove = '{{ success_remove }}';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{ linkremove }}',*/
/* 				data: {	is_ajax_cache_lite: 1},*/
/* 				success: function () {*/
/* 					var html = '<div class="alert alert-success cls-remove-cache"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/* 					if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/* 						$('.page-header .container-fluid').append(html);*/
/* 					}*/
/* 				},*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* </div>*/
/* {{ footer }}*/
