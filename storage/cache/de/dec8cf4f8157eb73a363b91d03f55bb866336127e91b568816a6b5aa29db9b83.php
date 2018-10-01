<?php

/* extension/module/so_deals.twig */
class __TwigTemplate_af04ea4a5599e4a25cbbbcffb4e30c6e1d938c0bf51a6d37c765adc3835101ff extends Twig_Template
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
        echo (isset($context["entry_button_save"]) ? $context["entry_button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["entry_button_save"]) ? $context["entry_button_save"] : null);
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["entry_button_save_and_edit"]) ? $context["entry_button_save_and_edit"] : null);
        echo "\" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo (isset($context["entry_button_save_and_edit"]) ? $context["entry_button_save_and_edit"] : null);
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["entry_button_save_and_new"]) ? $context["entry_button_save_and_new"] : null);
        echo "\" ><i class=\"fa fa-book\"></i>  ";
        echo (isset($context["entry_button_save_and_new"]) ? $context["entry_button_save_and_new"] : null);
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["entry_button_cancel"]) ? $context["entry_button_cancel"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo (isset($context["entry_button_cancel"]) ? $context["entry_button_cancel"] : null);
        echo "</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 11
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\"";
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
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 26
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 29
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 33
        echo "\t    <div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 38
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t                <div class=\"row\">
                  \t\t<ul class=\"nav nav-tabs col-sm-12\" role=\"tablist\" style=\"padding-left: 15px;\">
\t\t                    <li ";
        // line 41
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo (isset($context["button_add_module"]) ? $context["button_add_module"] : null);
        echo "</a></li>
\t\t                    ";
        // line 42
        $context["i"] = 1;
        // line 43
        echo "\t\t                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 44
            echo "\t\t\t                    <li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t                      \t<a href=\"";
            // line 45
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\">
\t\t\t                        \t<span class=\"fa fa-pencil\"></span> ";
            // line 46
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t                       \t</a>
\t\t                      \t</li>
\t\t                      \t";
            // line 49
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 50
            echo "\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t                  \t</ul>
\t                </div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 55
        $context["module_row"] = 1;
        // line 56
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo (isset($context["entry_button_delete"]) ? $context["entry_button_delete"] : null);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t<div  id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 65
            echo (isset($context["entry_name_desc"]) ? $context["entry_name_desc"] : null);
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 68
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 76
            echo (isset($context["entry_head_name_desc"]) ? $context["entry_head_name_desc"] : null);
            echo "\">";
            echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            $context["i"] = 0;
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                echo "\" class=\"form-control";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 83
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-head_name\" placeholder=\"";
                    echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                    echo "\" name=\"head_name\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                echo $this->getAttribute($context["language"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
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
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
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
            echo (isset($context["entry_display_title_module_desc"]) ? $context["entry_display_title_module_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_title_module"]) ? $context["entry_display_title_module"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 109
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 112
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
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
            echo (isset($context["entry_status_desc"]) ? $context["entry_status_desc"] : null);
            echo "\">";
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 125
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 128
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
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
            echo (isset($context["entry_module"]) ? $context["entry_module"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#source_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            echo (isset($context["entry_source_option"]) ? $context["entry_source_option"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#items_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo (isset($context["entry_items_option"]) ? $context["entry_items_option"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#image_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo (isset($context["entry_image_option"]) ? $context["entry_image_option"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#effect_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo (isset($context["entry_effect_option"]) ? $context["entry_effect_option"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 164
            echo (isset($context["entry_advanced_option"]) ? $context["entry_advanced_option"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"module\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\"> <span data-toggle=\"tooltip\" title=\"";
            // line 171
            echo (isset($context["entry_class_suffix_desc"]) ? $context["entry_class_suffix_desc"] : null);
            echo "\">";
            echo (isset($context["entry_class_suffix"]) ? $context["entry_class_suffix"] : null);
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 174
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_link\"> <span data-toggle=\"tooltip\" title=\"";
            // line 179
            echo (isset($context["entry_open_link_desc"]) ? $context["entry_open_link_desc"] : null);
            echo "\">";
            echo (isset($context["entry_open_link"]) ? $context["entry_open_link"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"item_link_target\" id=\"input-open_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item_link_targets"]) ? $context["item_link_targets"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "item_link_target", array()))) ? ("selected") : (""));
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnailSlide\"> <span data-toggle=\"tooltip\" title=\"";
            // line 192
            echo (isset($context["entry_include_js_desc"]) ? $context["entry_include_js_desc"] : null);
            echo "\">";
            echo (isset($context["entry_include_js"]) ? $context["entry_include_js"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 196
            if (($this->getAttribute($context["module"], "include_js", array()) == "owlCarousel")) {
                // line 197
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"include_js\" value=\"owlCarousel\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                echo (isset($context["text_owl_carousel"]) ? $context["text_owl_carousel"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"include_js\" value=\"owlCarousel\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 201
                echo (isset($context["text_owl_carousel"]) ? $context["text_owl_carousel"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            if (($this->getAttribute($context["module"], "include_js", array()) == "slick")) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"include_js\" value=\"slick\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 207
                echo (isset($context["text_slick_slider"]) ? $context["text_slick_slider"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"include_js\" value=\"slick\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 210
                echo (isset($context["text_slick_slider"]) ? $context["text_slick_slider"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_1200\"> <span data-toggle=\"tooltip\" title=\"";
            // line 217
            echo (isset($context["entry_nb_column0_desc"]) ? $context["entry_nb_column0_desc"] : null);
            echo "\">";
            echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column0\" id=\"input-column_1200\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column0", array()))) ? ("selected") : (""));
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_992_1199\"><span data-toggle=\"tooltip\" title=\"";
            // line 230
            echo (isset($context["entry_nb_column1_desc"]) ? $context["entry_nb_column1_desc"] : null);
            echo "\">";
            echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column1\" id=\"input-column_992_1199\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 235
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column1", array()))) ? ("selected") : (""));
                // line 236
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_768_991\"><span data-toggle=\"tooltip\" title=\"";
            // line 243
            echo (isset($context["entry_nb_column2_desc"]) ? $context["entry_nb_column2_desc"] : null);
            echo "\">";
            echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column2\" id=\"input-column_768_991\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column2", array()))) ? ("selected") : (""));
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
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
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_480_767\"> <span data-toggle=\"tooltip\" title=\"";
            // line 256
            echo (isset($context["entry_nb_column3_desc"]) ? $context["entry_nb_column3_desc"] : null);
            echo "\">";
            echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column3\" id=\"input-column_480_767\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column3", array()))) ? ("selected") : (""));
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_0_479\"><span data-toggle=\"tooltip\" title=\"";
            // line 269
            echo (isset($context["entry_nb_column4_desc"]) ? $context["entry_nb_column4_desc"] : null);
            echo "\">";
            echo (isset($context["entry_column"]) ? $context["entry_column"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column4\" id=\"input-column_0_479\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 274
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column4", array()))) ? ("selected") : (""));
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-nb_row\"> <span data-toggle=\"tooltip\" title=\"";
            // line 282
            echo (isset($context["entry_nb_row_desc"]) ? $context["entry_nb_row_desc"] : null);
            echo "\">";
            echo (isset($context["entry_nb_row"]) ? $context["entry_nb_row"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_row\" id=\"input-nb_row\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_rows"]) ? $context["nb_rows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_row", array()))) ? ("selected") : (""));
                // line 288
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_feature\"> <span data-toggle=\"tooltip\" title=\"";
            // line 295
            echo (isset($context["entry_display_feature_desc"]) ? $context["entry_display_feature_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_feature"]) ? $context["entry_display_feature"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            if ($this->getAttribute($context["module"], "display_feature", array())) {
                // line 300
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_feature\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 301
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_feature\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 304
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 308
            if ($this->getAttribute($context["module"], "display_feature", array())) {
                // line 309
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_feature\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 310
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_feature\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 313
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 315
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\" id=\"input-product_feature_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_feature\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 320
            echo (isset($context["entry_product_feature_desc"]) ? $context["entry_product_feature_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_feature"]) ? $context["entry_product_feature"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_feature\" value=\"\" placeholder=\"";
            // line 323
            echo (isset($context["entry_product_feature"]) ? $context["entry_product_feature"] : null);
            echo "\" id=\"input-product_feature\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-product_feature\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "product_features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product_feature"]) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-product_feature";
                echo $this->getAttribute($context["product_feature"], "product_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["product_feature"], "product_name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_feature[]\" value=\"";
                // line 327
                echo $this->getAttribute($context["product_feature"], "product_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 332
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_feature", array(), "any", true, true)) {
                // line 333
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_feature", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group slick-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-position_thumbnail\"> <span data-toggle=\"tooltip\" title=\"";
            // line 338
            echo (isset($context["entry_position_thumbnail_desc"]) ? $context["entry_position_thumbnail_desc"] : null);
            echo "\">";
            echo (isset($context["entry_position_thumbnail"]) ? $context["entry_position_thumbnail"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"position_thumbnail\" id=\"input-position_thumbnail\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["position_thumbnails"]) ? $context["position_thumbnails"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 343
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "position_thumbnail", array()))) ? ("selected") : (""));
                // line 344
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
            // line 346
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"source_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 354
            echo (isset($context["entry_category_desc"]) ? $context["entry_category_desc"] : null);
            echo "\">";
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 357
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 360
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category[]\" value=\"";
                // line 361
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 366
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array(), "any", true, true)) {
                // line 367
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 369
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-child_category\"> <span data-toggle=\"tooltip\" title=\"";
            // line 372
            echo (isset($context["entry_child_category_desc"]) ? $context["entry_child_category_desc"] : null);
            echo "\">";
            echo (isset($context["entry_child_category"]) ? $context["entry_child_category"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 376
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 377
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 378
                echo (isset($context["entry_include"]) ? $context["entry_include"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 381
                echo (isset($context["entry_include"]) ? $context["entry_include"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 383
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 385
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 386
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 387
                echo (isset($context["entry_exclude"]) ? $context["entry_exclude"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 389
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 390
                echo (isset($context["entry_exclude"]) ? $context["entry_exclude"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 392
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-category_depth_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_depth\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 397
            echo (isset($context["entry_category_depth_desc"]) ? $context["entry_category_depth_desc"] : null);
            echo "\">";
            echo (isset($context["entry_category_depth"]) ? $context["entry_category_depth"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_depth\" value=\"";
            // line 400
            echo $this->getAttribute($context["module"], "category_depth", array());
            echo "\" id=\"input-category_depth\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 402
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array(), "any", true, true)) {
                // line 403
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 405
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_order\"> <span data-toggle=\"tooltip\" title=\"";
            // line 408
            echo (isset($context["entry_product_order_desc"]) ? $context["entry_product_order_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_order"]) ? $context["entry_product_order"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_sort\" id=\"input-product_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_sorts"]) ? $context["product_sorts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 413
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_sort", array()))) ? ("selected") : (""));
                // line 414
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
            // line 416
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-ordering\"> <span data-toggle=\"tooltip\" title=\"";
            // line 421
            echo (isset($context["entry_ordering_desc"]) ? $context["entry_ordering_desc"] : null);
            echo "\">";
            echo (isset($context["entry_ordering"]) ? $context["entry_ordering"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_ordering\" id=\"input-ordering\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_orderings"]) ? $context["product_orderings"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 426
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_ordering", array()))) ? ("selected") : (""));
                // line 427
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
            // line 429
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-source_limit\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 434
            echo (isset($context["entry_source_limit_desc"]) ? $context["entry_source_limit_desc"] : null);
            echo "\">";
            echo (isset($context["entry_source_limit"]) ? $context["entry_source_limit"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"source_limit\" value=\"";
            // line 437
            echo $this->getAttribute($context["module"], "source_limit", array());
            echo "\" id=\"input-source_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 439
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array(), "any", true, true)) {
                // line 440
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 442
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"items_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_title\"> <span data-toggle=\"tooltip\" title=\"";
            // line 448
            echo (isset($context["entry_display_title_desc"]) ? $context["entry_display_title_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_title"]) ? $context["entry_display_title"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 452
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 453
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 454
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 457
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 459
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 461
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 462
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 463
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 465
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 466
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 468
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-title_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 473
            echo (isset($context["entry_title_maxlength_desc"]) ? $context["entry_title_maxlength_desc"] : null);
            echo "\">";
            echo (isset($context["entry_title_maxlength"]) ? $context["entry_title_maxlength"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_maxlength\" value=\"";
            // line 476
            echo $this->getAttribute($context["module"], "title_maxlength", array());
            echo "\" id=\"input-title_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 478
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array(), "any", true, true)) {
                // line 479
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 481
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_description\"> <span data-toggle=\"tooltip\" title=\"";
            // line 484
            echo (isset($context["entry_display_description_desc"]) ? $context["entry_display_description_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_description"]) ? $context["entry_display_description"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 488
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 489
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 490
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 492
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 493
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 495
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 497
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 498
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 499
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 501
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 502
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 509
            echo (isset($context["entry_description_maxlength_desc"]) ? $context["entry_description_maxlength_desc"] : null);
            echo "\">";
            echo (isset($context["entry_description_maxlength"]) ? $context["entry_description_maxlength"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description_maxlength\" value=\"";
            // line 512
            echo $this->getAttribute($context["module"], "description_maxlength", array());
            echo "\" id=\"input-description_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 514
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array(), "any", true, true)) {
                // line 515
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 517
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> <!--Display One CountDown -->
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_countdown\"> <span data-toggle=\"tooltip\" title=\"";
            // line 520
            echo (isset($context["entry_display_countdown_desc"]) ? $context["entry_display_countdown_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_countdown"]) ? $context["entry_display_countdown"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 524
            if ($this->getAttribute($context["module"], "display_countdown", array())) {
                // line 525
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_countdown\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 526
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_countdown\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 529
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 531
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 535
            if ($this->getAttribute($context["module"], "display_countdown", array())) {
                // line 536
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_countdown\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 538
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 540
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_countdown\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 541
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 543
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> <!--Display all CountDown -->
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_countdown\"> <span data-toggle=\"tooltip\" title=\"";
            // line 548
            echo (isset($context["entry_display_all_countdown_desc"]) ? $context["entry_display_all_countdown_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_all_countdown"]) ? $context["entry_display_all_countdown"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 552
            if ($this->getAttribute($context["module"], "display_all_countdown", array())) {
                // line 553
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_all_countdown\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 554
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 556
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_all_countdown\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 557
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 559
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 563
            if ($this->getAttribute($context["module"], "display_all_countdown", array())) {
                // line 564
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_all_countdown\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 566
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 568
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_all_countdown\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 569
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 571
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_price\"> <span data-toggle=\"tooltip\" title=\"";
            // line 577
            echo (isset($context["entry_display_price_desc"]) ? $context["entry_display_price_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_price"]) ? $context["entry_display_price"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 581
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 582
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 583
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 585
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 586
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 588
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 590
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 591
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 592
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 594
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 595
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 597
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_addtocart\"> <span data-toggle=\"tooltip\" title=\"";
            // line 602
            echo (isset($context["entry_display_add_to_cart_desc"]) ? $context["entry_display_add_to_cart_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_add_to_cart"]) ? $context["entry_display_add_to_cart"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 606
            if ($this->getAttribute($context["module"], "display_addtocart", array())) {
                // line 607
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_addtocart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 608
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 610
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_addtocart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 611
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 613
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 615
            if ($this->getAttribute($context["module"], "display_addtocart", array())) {
                // line 616
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_addtocart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 617
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 619
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_addtocart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 620
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 622
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_wishlist\"> <span data-toggle=\"tooltip\" title=\"";
            // line 627
            echo (isset($context["entry_display_wishlist_desc"]) ? $context["entry_display_wishlist_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_wishlist"]) ? $context["entry_display_wishlist"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 631
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 632
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 633
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 635
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 636
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 640
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 641
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 642
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 644
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 645
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 647
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_compare\"> <span data-toggle=\"tooltip\" title=\"";
            // line 652
            echo (isset($context["entry_display_compare_desc"]) ? $context["entry_display_compare_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_compare"]) ? $context["entry_display_compare"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 656
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 657
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 658
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 660
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 661
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 663
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 665
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 666
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 667
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 669
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 670
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 672
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_rating\"> <span data-toggle=\"tooltip\" title=\"";
            // line 677
            echo (isset($context["entry_display_rating_desc"]) ? $context["entry_display_rating_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_rating"]) ? $context["entry_display_rating"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 681
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 682
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 683
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 685
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 686
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 688
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 690
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 691
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 692
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 694
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 695
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 697
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_sale\"> <span data-toggle=\"tooltip\" title=\"";
            // line 702
            echo (isset($context["entry_display_sale_desc"]) ? $context["entry_display_sale_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_sale"]) ? $context["entry_display_sale"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 706
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 707
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 708
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 710
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 711
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 713
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 715
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 716
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 717
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 719
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 720
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 722
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_new\"> <span data-toggle=\"tooltip\" title=\"";
            // line 727
            echo (isset($context["entry_display_new_desc"]) ? $context["entry_display_new_desc"] : null);
            echo "\">";
            echo (isset($context["entry_display_new"]) ? $context["entry_display_new"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 731
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 732
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 733
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 735
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 736
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 738
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 740
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 741
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 742
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 744
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 745
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 747
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-date_day_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-date_day\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 752
            echo (isset($context["entry_date_day_desc"]) ? $context["entry_date_day_desc"] : null);
            echo "\">";
            echo (isset($context["entry_date_day"]) ? $context["entry_date_day"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_day\" value=\"";
            // line 755
            echo $this->getAttribute($context["module"], "date_day", array());
            echo "\" id=\"input-date_day\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 757
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array(), "any", true, true)) {
                // line 758
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 760
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image_num\"> <span data-toggle=\"tooltip\" title=\"";
            // line 763
            echo (isset($context["entry_product_image_num_desc"]) ? $context["entry_product_image_num_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_image_num"]) ? $context["entry_product_image_num"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_image_num\" id=\"input-product_image_num\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 767
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_image_nums"]) ? $context["product_image_nums"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 768
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_image_num", array()))) ? ("selected") : (""));
                // line 769
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
            // line 771
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 779
            echo (isset($context["entry_product_image_desc"]) ? $context["entry_product_image_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_image"]) ? $context["entry_product_image"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 783
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 784
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 785
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 787
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 788
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 790
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 792
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 793
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 794
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 796
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 797
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 799
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_data\"> <span data-toggle=\"tooltip\" title=\"";
            // line 804
            echo (isset($context["entry_product_get_image_data_desc"]) ? $context["entry_product_get_image_data_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_get_image_data"]) ? $context["entry_product_get_image_data"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 808
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 809
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 810
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 812
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 813
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 815
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 817
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 818
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 819
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 821
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 822
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 824
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 829
            echo (isset($context["entry_product_get_image_image_desc"]) ? $context["entry_product_get_image_image_desc"] : null);
            echo "\">";
            echo (isset($context["entry_product_get_image_image"]) ? $context["entry_product_get_image_image"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 833
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 834
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 835
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 837
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 838
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 840
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 842
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 843
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 844
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 846
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 847
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 849
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 854
            echo (isset($context["entry_width_desc"]) ? $context["entry_width_desc"] : null);
            echo "\">";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 857
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 859
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array(), "any", true, true)) {
                // line 860
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 862
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 865
            echo (isset($context["entry_height_desc"]) ? $context["entry_height_desc"] : null);
            echo "\">";
            echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 868
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 870
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array(), "any", true, true)) {
                // line 871
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 873
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-placeholder_path\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 876
            echo (isset($context["entry_placeholder_path_desc"]) ? $context["entry_placeholder_path_desc"] : null);
            echo "\">";
            echo (isset($context["entry_placeholder_path"]) ? $context["entry_placeholder_path"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"placeholder_path\" value=\"";
            // line 879
            echo $this->getAttribute($context["module"], "placeholder_path", array());
            echo "\" id=\"input-placeholder_path\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 881
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "placeholder_path", array(), "any", true, true)) {
                // line 882
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "placeholder_path", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 884
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"effect_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-margin\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 890
            echo (isset($context["entry_margin_desc"]) ? $context["entry_margin_desc"] : null);
            echo "\">";
            echo (isset($context["entry_margin"]) ? $context["entry_margin"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"margin\" value=\"";
            // line 893
            echo $this->getAttribute($context["module"], "margin", array());
            echo "\" id=\"input-margin\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 895
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "margin", array(), "any", true, true)) {
                // line 896
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "margin", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 898
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-slideBy\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 901
            echo (isset($context["entry_slideBy_desc"]) ? $context["entry_slideBy_desc"] : null);
            echo "\">";
            echo (isset($context["entry_slideBy"]) ? $context["entry_slideBy"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"slideBy\" value=\"";
            // line 904
            echo $this->getAttribute($context["module"], "slideBy", array());
            echo "\" id=\"input-slideBy\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 906
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slideBy", array(), "any", true, true)) {
                // line 907
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slideBy", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 909
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\"> <span data-toggle=\"tooltip\" title=\"";
            // line 912
            echo (isset($context["entry_autoplay_desc"]) ? $context["entry_autoplay_desc"] : null);
            echo "\">";
            echo (isset($context["entry_autoplay"]) ? $context["entry_autoplay"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 916
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                // line 917
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 918
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 920
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 921
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 923
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 925
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                // line 926
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 927
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 929
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplay\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 930
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 932
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayTimeout\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 937
            echo (isset($context["entry_autoplayTimeout_desc"]) ? $context["entry_autoplayTimeout_desc"] : null);
            echo "\">";
            echo (isset($context["entry_autoplayTimeout"]) ? $context["entry_autoplayTimeout"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplayTimeout\" value=\"";
            // line 940
            echo $this->getAttribute($context["module"], "autoplayTimeout", array());
            echo "\" id=\"input-autoplayTimeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 942
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array(), "any", true, true)) {
                // line 943
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 945
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayHoverPause\"> <span data-toggle=\"tooltip\" title=\"";
            // line 948
            echo (isset($context["entry_autoplayHoverPause_desc"]) ? $context["entry_autoplayHoverPause_desc"] : null);
            echo "\">";
            echo (isset($context["entry_autoplayHoverPause"]) ? $context["entry_autoplayHoverPause"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 952
            if ($this->getAttribute($context["module"], "autoplayHoverPause", array())) {
                // line 953
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplayHoverPause\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 954
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 956
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplayHoverPause\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 957
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 959
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 961
            if ($this->getAttribute($context["module"], "autoplayHoverPause", array())) {
                // line 962
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplayHoverPause\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 963
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 965
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"autoplayHoverPause\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 966
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 968
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplaySpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 973
            echo (isset($context["entry_autoplaySpeed_desc"]) ? $context["entry_autoplaySpeed_desc"] : null);
            echo "\">";
            echo (isset($context["entry_autoplaySpeed"]) ? $context["entry_autoplaySpeed"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplaySpeed\" value=\"";
            // line 976
            echo $this->getAttribute($context["module"], "autoplaySpeed", array());
            echo "\" id=\"input-autoplaySpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 978
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array(), "any", true, true)) {
                // line 979
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 981
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-startPosition\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 984
            echo (isset($context["entry_startPosition_desc"]) ? $context["entry_startPosition_desc"] : null);
            echo "\">";
            echo (isset($context["entry_startPosition"]) ? $context["entry_startPosition"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"startPosition\" value=\"";
            // line 987
            echo $this->getAttribute($context["module"], "startPosition", array());
            echo "\" id=\"input-startPosition\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 989
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array(), "any", true, true)) {
                // line 990
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 992
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-mouseDrag\"> <span data-toggle=\"tooltip\" title=\"";
            // line 995
            echo (isset($context["entry_mouseDrag_desc"]) ? $context["entry_mouseDrag_desc"] : null);
            echo "\">";
            echo (isset($context["entry_mouseDrag"]) ? $context["entry_mouseDrag"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 999
            if ($this->getAttribute($context["module"], "mouseDrag", array())) {
                // line 1000
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1001
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1003
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1004
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1006
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1008
            if ($this->getAttribute($context["module"], "mouseDrag", array())) {
                // line 1009
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1010
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1012
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1013
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1015
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-touchDrag\"><span data-toggle=\"tooltip\" title=\"";
            // line 1020
            echo (isset($context["entry_touchDrag_desc"]) ? $context["entry_touchDrag_desc"] : null);
            echo "\">";
            echo (isset($context["entry_touchDrag"]) ? $context["entry_touchDrag"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1024
            if ($this->getAttribute($context["module"], "touchDrag", array())) {
                // line 1025
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1026
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1028
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1029
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1031
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1033
            if ($this->getAttribute($context["module"], "touchDrag", array())) {
                // line 1034
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1035
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1037
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1038
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1040
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-loop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1046
            echo (isset($context["entry_loop_desc"]) ? $context["entry_loop_desc"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1047
            echo (isset($context["entry_loop"]) ? $context["entry_loop"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1053
            if ($this->getAttribute($context["module"], "loop", array())) {
                // line 1054
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1055
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1057
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1058
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1060
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1062
            if ($this->getAttribute($context["module"], "loop", array())) {
                // line 1063
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1064
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1066
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1067
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1069
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-button_page\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1074
            echo (isset($context["entry_button_page_desc"]) ? $context["entry_button_page_desc"] : null);
            echo "\">";
            echo (isset($context["entry_button_page"]) ? $context["entry_button_page"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"button_page\" id=\"input-button_page\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1078
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["button_pages"]) ? $context["button_pages"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 1079
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "button_page", array()))) ? ("selected") : (""));
                // line 1080
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
            // line 1082
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dots\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1087
            echo (isset($context["entry_dots_desc"]) ? $context["entry_dots_desc"] : null);
            echo "\">";
            echo (isset($context["entry_dots"]) ? $context["entry_dots"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1091
            if ($this->getAttribute($context["module"], "dots", array())) {
                // line 1092
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1093
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1095
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1096
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1098
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1100
            if ($this->getAttribute($context["module"], "dots", array())) {
                // line 1101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1102
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1105
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dotsSpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1112
            echo (isset($context["entry_dotsSpeed_desc"]) ? $context["entry_dotsSpeed_desc"] : null);
            echo "\">";
            echo (isset($context["entry_dotsSpeed"]) ? $context["entry_dotsSpeed"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dotsSpeed\" value=\"";
            // line 1115
            echo $this->getAttribute($context["module"], "dotsSpeed", array());
            echo "\" id=\"input-dotsSpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1117
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "dotsSpeed", array(), "any", true, true)) {
                // line 1118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "dotsSpeed", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navs\"><span data-toggle=\"tooltip\" title=\"";
            // line 1123
            echo (isset($context["entry_navs_desc"]) ? $context["entry_navs_desc"] : null);
            echo "\">";
            echo (isset($context["entry_navs"]) ? $context["entry_navs"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1127
            if ($this->getAttribute($context["module"], "navs", array())) {
                // line 1128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1129
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1131
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1132
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1136
            if ($this->getAttribute($context["module"], "navs", array())) {
                // line 1137
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1138
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1140
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1141
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1143
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navSpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1148
            echo (isset($context["entry_navspeed_desc"]) ? $context["entry_navspeed_desc"] : null);
            echo "\">";
            echo (isset($context["entry_navspeed"]) ? $context["entry_navspeed"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"navSpeed\" value=\"";
            // line 1151
            echo $this->getAttribute($context["module"], "navSpeed", array());
            echo "\" id=\"input-navSpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1153
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "navSpeed", array(), "any", true, true)) {
                // line 1154
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "navSpeed", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1156
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-effect\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1159
            echo (isset($context["entry_effect_desc"]) ? $context["entry_effect_desc"] : null);
            echo "\">";
            echo (isset($context["entry_effect"]) ? $context["entry_effect"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"effect\" id=\"input-effect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 1164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "effect", array()))) ? ("selected") : (""));
                // line 1165
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
            // line 1167
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-duration\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1172
            echo (isset($context["entry_duration_desc"]) ? $context["entry_duration_desc"] : null);
            echo "\">";
            echo (isset($context["entry_duration"]) ? $context["entry_duration"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"duration\" value=\"";
            // line 1175
            echo $this->getAttribute($context["module"], "duration", array());
            echo "\" id=\"input-duration\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1177
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array(), "any", true, true)) {
                // line 1178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1180
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group owl-carousel\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-delay\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1183
            echo (isset($context["entry_delay_desc"]) ? $context["entry_delay_desc"] : null);
            echo "\">";
            echo (isset($context["entry_delay"]) ? $context["entry_delay"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"delay\" value=\"";
            // line 1186
            echo $this->getAttribute($context["module"], "delay", array());
            echo "\" id=\"input-delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1188
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array(), "any", true, true)) {
                // line 1189
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1191
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"advanced_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-store_layout\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1197
            echo (isset($context["entry_store_layout_desc"]) ? $context["entry_store_layout_desc"] : null);
            echo "\">";
            echo (isset($context["entry_store_layout"]) ? $context["entry_store_layout"] : null);
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"store_layout\" id=\"input-store_layout\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["store_layouts"]) ? $context["store_layouts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 1202
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "store_layout", array()))) ? ("selected") : (""));
                // line 1203
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
            // line 1205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1210
            echo (isset($context["entry_pre_text_desc"]) ? $context["entry_pre_text_desc"] : null);
            echo "\">";
            echo (isset($context["entry_pre_text"]) ? $context["entry_pre_text"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 1213
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1218
            echo (isset($context["entry_post_text_desc"]) ? $context["entry_post_text_desc"] : null);
            echo "\">";
            echo (isset($context["entry_post_text"]) ? $context["entry_post_text"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 1221
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1227
            echo (isset($context["entry_use_cache_desc"]) ? $context["entry_use_cache_desc"] : null);
            echo "\">";
            echo (isset($context["entry_use_cache"]) ? $context["entry_use_cache"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1232
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1233
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1234
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1236
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1237
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1239
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1241
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1242
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1243
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1246
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1248
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1254
            echo (isset($context["entry_cache_time_desc"]) ? $context["entry_cache_time_desc"] : null);
            echo "\">";
            echo (isset($context["entry_cache_time"]) ? $context["entry_cache_time"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 1258
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1260
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array(), "any", true, true)) {
                // line 1261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1263
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 1268
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 1269
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1270
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t    </div>\t
  \t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('input[name=\\'category\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_deals/autocomplete_category&user_token=";
        // line 1280
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
\t\t
\t\t\$('#featured-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t});
\t\t
\t\t/*Feature Product*/
\t\t\$('input[name=\\'product_feature\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_deals/autocomplete_product_feature&user_token=";
        // line 1309
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['product_name'],
\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'product_feature\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-product_feature' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-product_feature').append('<div id=\"featured-product_feature' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_feature[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t\t}
\t\t});
\t\t
\t\t\$('#featured-product_feature').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t});
\t\t
\t\t\$('#so_youtech a:first').tab('show');
\t\t/* Child category */
\t\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t}else\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t}

\t\t\$(\"input[name='child_category']:radio\").change(function(){
\t\t\tif(\$(this).val() == '0')
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').show();
\t\t\t}
\t\t});
\t\t
\t\t/* Include Js */
\t\tif(\$(\"input[name='include_js']:radio:checked\").val() == 'owlCarousel')\t{
\t\t\t\$('.owl-carousel').show();
\t\t\t\$('.slick-slide').hide();
\t\t}else\t{
\t\t\t\$('.owl-carousel').hide();
\t\t\t\$('.slick-slide').show();
\t\t}

\t\t\$(\"input[name='include_js']:radio\").change(function(){
\t\t\tif(\$(this).val() == 'owlCarousel')\t\t{
\t\t\t\t\$('.owl-carousel').show();
\t\t\t\t\$('.slick-slide').hide();
\t\t\t}else\t\t{
\t\t\t\t\$('.owl-carousel').hide();
\t\t\t\t\$('.slick-slide').show();
\t\t\t}
\t\t});
\t\t
\t\t/* Product Feature */
\t\tif(\$(\"input[name='display_feature']:radio:checked\").val() == '0')\t{
\t\t\t\$('#input-product_feature_form').hide();
\t\t}else\t{
\t\t\t\$('#input-product_feature_form').show();
\t\t}

\t\t\$(\"input[name='display_feature']:radio\").change(function(){
\t\t\tif(\$(this).val() == '0'){
\t\t\t\t\$('#input-product_feature_form').hide();
\t\t\t}else{
\t\t\t\t\$('#input-product_feature_form').show();
\t\t\t}
\t\t});
\t\t
\t\t/* Cache */
\t\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')\t{
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else\t{
\t\t\t\$('#input-cache_time_form').show();
\t\t}
\t\t\$(\"input[name='use_cache']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)\t\t{
\t\t\t\t\$('#input-cache_time_form').hide();
\t\t\t}else\t\t{
\t\t\t\t\$('#input-cache_time_form').show();
\t\t\t}
\t\t});
\t\t
\t\t/*language*/
\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
\t\t});
\t\t
\t\t/*Display News */
\t\tif(\$(\"input[name='display_new']:radio:checked\").val() == '0')\t{
\t\t\t\$('#input-date_day_form').hide();
\t\t}else\t{
\t\t\t\$('#input-date_day_form').show();
\t\t}
\t\t\$(\"input[name='display_new']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)\t\t{
\t\t\t\t\$('#input-date_day_form').hide();
\t\t\t}else\t\t{
\t\t\t\t\$('#input-date_day_form').show();
\t\t\t}
\t\t});
\t\t
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1428
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1429
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
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
        // line 1445
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 1448
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
\t//--></script>
</div>
";
        // line 1460
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_deals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3222 => 1460,  3207 => 1448,  3201 => 1445,  3182 => 1429,  3176 => 1428,  3054 => 1309,  3022 => 1280,  3010 => 1270,  3004 => 1269,  3002 => 1268,  2995 => 1263,  2989 => 1261,  2987 => 1260,  2982 => 1258,  2973 => 1254,  2965 => 1248,  2960 => 1246,  2957 => 1245,  2952 => 1243,  2949 => 1242,  2947 => 1241,  2943 => 1239,  2938 => 1237,  2935 => 1236,  2930 => 1234,  2927 => 1233,  2925 => 1232,  2915 => 1227,  2906 => 1221,  2898 => 1218,  2890 => 1213,  2882 => 1210,  2875 => 1205,  2862 => 1203,  2859 => 1202,  2855 => 1201,  2846 => 1197,  2838 => 1191,  2832 => 1189,  2830 => 1188,  2825 => 1186,  2817 => 1183,  2812 => 1180,  2806 => 1178,  2804 => 1177,  2799 => 1175,  2791 => 1172,  2784 => 1167,  2771 => 1165,  2768 => 1164,  2764 => 1163,  2755 => 1159,  2750 => 1156,  2744 => 1154,  2742 => 1153,  2737 => 1151,  2729 => 1148,  2722 => 1143,  2717 => 1141,  2714 => 1140,  2709 => 1138,  2706 => 1137,  2704 => 1136,  2700 => 1134,  2695 => 1132,  2692 => 1131,  2687 => 1129,  2684 => 1128,  2682 => 1127,  2673 => 1123,  2668 => 1120,  2662 => 1118,  2660 => 1117,  2655 => 1115,  2647 => 1112,  2640 => 1107,  2635 => 1105,  2632 => 1104,  2627 => 1102,  2624 => 1101,  2622 => 1100,  2618 => 1098,  2613 => 1096,  2610 => 1095,  2605 => 1093,  2602 => 1092,  2600 => 1091,  2591 => 1087,  2584 => 1082,  2571 => 1080,  2568 => 1079,  2564 => 1078,  2555 => 1074,  2548 => 1069,  2543 => 1067,  2540 => 1066,  2535 => 1064,  2532 => 1063,  2530 => 1062,  2526 => 1060,  2521 => 1058,  2518 => 1057,  2513 => 1055,  2510 => 1054,  2508 => 1053,  2499 => 1047,  2495 => 1046,  2487 => 1040,  2482 => 1038,  2479 => 1037,  2474 => 1035,  2471 => 1034,  2469 => 1033,  2465 => 1031,  2460 => 1029,  2457 => 1028,  2452 => 1026,  2449 => 1025,  2447 => 1024,  2438 => 1020,  2431 => 1015,  2426 => 1013,  2423 => 1012,  2418 => 1010,  2415 => 1009,  2413 => 1008,  2409 => 1006,  2404 => 1004,  2401 => 1003,  2396 => 1001,  2393 => 1000,  2391 => 999,  2382 => 995,  2377 => 992,  2371 => 990,  2369 => 989,  2364 => 987,  2356 => 984,  2351 => 981,  2345 => 979,  2343 => 978,  2338 => 976,  2330 => 973,  2323 => 968,  2318 => 966,  2315 => 965,  2310 => 963,  2307 => 962,  2305 => 961,  2301 => 959,  2296 => 957,  2293 => 956,  2288 => 954,  2285 => 953,  2283 => 952,  2274 => 948,  2269 => 945,  2263 => 943,  2261 => 942,  2256 => 940,  2248 => 937,  2241 => 932,  2236 => 930,  2233 => 929,  2228 => 927,  2225 => 926,  2223 => 925,  2219 => 923,  2214 => 921,  2211 => 920,  2206 => 918,  2203 => 917,  2201 => 916,  2192 => 912,  2187 => 909,  2181 => 907,  2179 => 906,  2174 => 904,  2166 => 901,  2161 => 898,  2155 => 896,  2153 => 895,  2148 => 893,  2140 => 890,  2132 => 884,  2126 => 882,  2124 => 881,  2119 => 879,  2111 => 876,  2106 => 873,  2100 => 871,  2098 => 870,  2093 => 868,  2085 => 865,  2080 => 862,  2074 => 860,  2072 => 859,  2067 => 857,  2059 => 854,  2052 => 849,  2047 => 847,  2044 => 846,  2039 => 844,  2036 => 843,  2034 => 842,  2030 => 840,  2025 => 838,  2022 => 837,  2017 => 835,  2014 => 834,  2012 => 833,  2003 => 829,  1996 => 824,  1991 => 822,  1988 => 821,  1983 => 819,  1980 => 818,  1978 => 817,  1974 => 815,  1969 => 813,  1966 => 812,  1961 => 810,  1958 => 809,  1956 => 808,  1947 => 804,  1940 => 799,  1935 => 797,  1932 => 796,  1927 => 794,  1924 => 793,  1922 => 792,  1918 => 790,  1913 => 788,  1910 => 787,  1905 => 785,  1902 => 784,  1900 => 783,  1891 => 779,  1881 => 771,  1868 => 769,  1865 => 768,  1861 => 767,  1852 => 763,  1847 => 760,  1841 => 758,  1839 => 757,  1834 => 755,  1826 => 752,  1819 => 747,  1814 => 745,  1811 => 744,  1806 => 742,  1803 => 741,  1801 => 740,  1797 => 738,  1792 => 736,  1789 => 735,  1784 => 733,  1781 => 732,  1779 => 731,  1770 => 727,  1763 => 722,  1758 => 720,  1755 => 719,  1750 => 717,  1747 => 716,  1745 => 715,  1741 => 713,  1736 => 711,  1733 => 710,  1728 => 708,  1725 => 707,  1723 => 706,  1714 => 702,  1707 => 697,  1702 => 695,  1699 => 694,  1694 => 692,  1691 => 691,  1689 => 690,  1685 => 688,  1680 => 686,  1677 => 685,  1672 => 683,  1669 => 682,  1667 => 681,  1658 => 677,  1651 => 672,  1646 => 670,  1643 => 669,  1638 => 667,  1635 => 666,  1633 => 665,  1629 => 663,  1624 => 661,  1621 => 660,  1616 => 658,  1613 => 657,  1611 => 656,  1602 => 652,  1595 => 647,  1590 => 645,  1587 => 644,  1582 => 642,  1579 => 641,  1577 => 640,  1573 => 638,  1568 => 636,  1565 => 635,  1560 => 633,  1557 => 632,  1555 => 631,  1546 => 627,  1539 => 622,  1534 => 620,  1531 => 619,  1526 => 617,  1523 => 616,  1521 => 615,  1517 => 613,  1512 => 611,  1509 => 610,  1504 => 608,  1501 => 607,  1499 => 606,  1490 => 602,  1483 => 597,  1478 => 595,  1475 => 594,  1470 => 592,  1467 => 591,  1465 => 590,  1461 => 588,  1456 => 586,  1453 => 585,  1448 => 583,  1445 => 582,  1443 => 581,  1434 => 577,  1426 => 571,  1421 => 569,  1418 => 568,  1413 => 566,  1409 => 564,  1407 => 563,  1401 => 559,  1396 => 557,  1393 => 556,  1388 => 554,  1385 => 553,  1383 => 552,  1374 => 548,  1367 => 543,  1362 => 541,  1359 => 540,  1354 => 538,  1350 => 536,  1348 => 535,  1342 => 531,  1337 => 529,  1334 => 528,  1329 => 526,  1326 => 525,  1324 => 524,  1315 => 520,  1310 => 517,  1304 => 515,  1302 => 514,  1297 => 512,  1289 => 509,  1282 => 504,  1277 => 502,  1274 => 501,  1269 => 499,  1266 => 498,  1264 => 497,  1260 => 495,  1255 => 493,  1252 => 492,  1247 => 490,  1244 => 489,  1242 => 488,  1233 => 484,  1228 => 481,  1222 => 479,  1220 => 478,  1215 => 476,  1207 => 473,  1200 => 468,  1195 => 466,  1192 => 465,  1187 => 463,  1184 => 462,  1182 => 461,  1178 => 459,  1173 => 457,  1170 => 456,  1165 => 454,  1162 => 453,  1160 => 452,  1151 => 448,  1143 => 442,  1137 => 440,  1135 => 439,  1130 => 437,  1122 => 434,  1115 => 429,  1102 => 427,  1099 => 426,  1095 => 425,  1086 => 421,  1079 => 416,  1066 => 414,  1063 => 413,  1059 => 412,  1050 => 408,  1045 => 405,  1039 => 403,  1037 => 402,  1032 => 400,  1024 => 397,  1017 => 392,  1012 => 390,  1009 => 389,  1004 => 387,  1001 => 386,  999 => 385,  995 => 383,  990 => 381,  987 => 380,  982 => 378,  979 => 377,  977 => 376,  968 => 372,  963 => 369,  957 => 367,  955 => 366,  951 => 364,  942 => 361,  935 => 360,  931 => 359,  926 => 357,  918 => 354,  908 => 346,  895 => 344,  892 => 343,  888 => 342,  879 => 338,  874 => 335,  868 => 333,  866 => 332,  862 => 330,  853 => 327,  846 => 326,  842 => 325,  837 => 323,  829 => 320,  822 => 315,  817 => 313,  814 => 312,  809 => 310,  806 => 309,  804 => 308,  800 => 306,  795 => 304,  792 => 303,  787 => 301,  784 => 300,  782 => 299,  773 => 295,  766 => 290,  753 => 288,  750 => 287,  746 => 286,  737 => 282,  730 => 277,  717 => 275,  714 => 274,  710 => 273,  701 => 269,  694 => 264,  681 => 262,  678 => 261,  674 => 260,  665 => 256,  658 => 251,  645 => 249,  642 => 248,  638 => 247,  629 => 243,  622 => 238,  609 => 236,  606 => 235,  602 => 234,  593 => 230,  586 => 225,  573 => 223,  570 => 222,  566 => 221,  557 => 217,  550 => 212,  545 => 210,  542 => 209,  537 => 207,  534 => 206,  532 => 205,  528 => 203,  523 => 201,  520 => 200,  515 => 198,  512 => 197,  510 => 196,  501 => 192,  494 => 187,  481 => 185,  478 => 184,  474 => 183,  465 => 179,  457 => 174,  449 => 171,  439 => 164,  431 => 159,  423 => 154,  415 => 149,  407 => 144,  399 => 139,  388 => 130,  383 => 128,  378 => 127,  373 => 125,  368 => 124,  366 => 123,  357 => 119,  350 => 114,  345 => 112,  340 => 111,  335 => 109,  330 => 108,  328 => 107,  319 => 103,  314 => 100,  308 => 98,  306 => 97,  302 => 95,  293 => 92,  288 => 91,  284 => 90,  279 => 87,  273 => 86,  265 => 84,  263 => 83,  250 => 82,  247 => 81,  242 => 80,  240 => 79,  232 => 76,  227 => 73,  221 => 71,  219 => 70,  212 => 68,  204 => 65,  197 => 62,  189 => 59,  186 => 58,  183 => 57,  178 => 56,  176 => 55,  170 => 51,  164 => 50,  162 => 49,  156 => 46,  148 => 45,  141 => 44,  136 => 43,  134 => 42,  124 => 41,  118 => 38,  112 => 35,  108 => 33,  101 => 29,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ entry_button_save }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ entry_button_save }}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ entry_button_save_and_edit }}" ><i class="fa fa-pencil-square-o"></i> {{ entry_button_save_and_edit }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ entry_button_save_and_new }}" ><i class="fa fa-book"></i>  {{ entry_button_save_and_new }}</a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ entry_button_cancel }}" class="btn btn-danger"><i class="fa fa-reply"></i>  {{ entry_button_cancel }}</a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title_so }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error.warning is defined %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if success is defined and success %}*/
/* 			<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 			<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	    <div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 	                <div class="row">*/
/*                   		<ul class="nav nav-tabs col-sm-12" role="tablist" style="padding-left: 15px;">*/
/* 		                    <li {% if selectedid == 0 %} class="active" {% endif %}> <a href="{{ link }}"> <span class="fa fa-plus"></span> {{ button_add_module }}</a></li>*/
/* 		                    {% set i=1 %}*/
/* 		                    {% for key, module in moduletabs %}*/
/* 			                    <li role="presentation" {% if module.module_id == selectedid %} class="active" {% endif %}>*/
/* 			                      	<a href="{{ link }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}">*/
/* 			                        	<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 			                       	</a>*/
/* 		                      	</li>*/
/* 		                      	{% set i = i + 1 %}*/
/* 		                    {% endfor %}*/
/* 	                  	</ul>*/
/* 	                </div>*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							{% set module_row = 1 %}*/
/* 							{% for module in modules %}*/
/* 								{% if selectedid %}*/
/* 									<div class="pull-right">*/
/* 										<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ entry_button_delete }}</span></a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div  id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<input type="hidden" name="action" id="action" value=""/>*/
/* 										<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_name_desc }}">{{ entry_name }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="name" value="{{ module.name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.name is defined %}*/
/* 												<div class="text-danger col-sm-12">{{ error.name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_head_name_desc }}">{{ entry_head_name }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ entry_head_name }}" id="input-head-name-{{ language.language_id }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" class="form-control{{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 														<input type="hidden" class="form-control" id="input-head_name" placeholder="{{ entry_head_name }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" name="head_name" />*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<select  class="form-control" id="language">*/
/* 													{% for language in languages %}*/
/* 													<option value="{{ language.language_id }}">*/
/* 														{{ language.name }}*/
/* 													</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											{% if error.head_name is defined %}*/
/* 												<div class="text-danger col-sm-12">{{ error.head_name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ entry_display_title_module_desc }}">{{ entry_display_title_module }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 													{% if module.disp_title_module %}*/
/* 														<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 														<option value="0">{{ text_no }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ text_yes }}</option>*/
/* 														<option value="0" selected="selected">{{ text_no }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ entry_status_desc }}">{{ entry_status }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="status" id="input-status" class="form-control">*/
/* 													{% if module.status %}*/
/* 														<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 														<option value="0">{{ text_disabled }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ text_enabled }}</option>*/
/* 														<option value="0" selected="selected">{{ text_disabled }}</option>*/
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
/* 												{{ entry_module }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#source_option" data-toggle="tab">*/
/* 												{{ entry_source_option }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#items_option" data-toggle="tab">*/
/* 												{{ entry_items_option }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#image_option" data-toggle="tab">*/
/* 												{{ entry_image_option }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#effect_option" data-toggle="tab">*/
/* 												{{ entry_effect_option }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#advanced_option" data-toggle="tab">*/
/* 												{{ entry_advanced_option }}*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 									<div class="tab-content">						*/
/* 										<div class="tab-pane" id="module">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-class_suffix"> <span data-toggle="tooltip" title="{{ entry_class_suffix_desc }}">{{ entry_class_suffix }} </span> </label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-open_link"> <span data-toggle="tooltip" title="{{ entry_open_link_desc }}">{{ entry_open_link }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="item_link_target" id="input-open_link" class="form-control">*/
/* 															{% for option_id, option_value in item_link_targets %}*/
/* 																{% set selected = option_id == module.item_link_target ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-thumbnailSlide"> <span data-toggle="tooltip" title="{{ entry_include_js_desc }}">{{ entry_include_js }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.include_js == 'owlCarousel' %}*/
/* 																<input type="radio" name="include_js" value="owlCarousel" checked="checked" />*/
/* 																{{ text_owl_carousel }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="include_js" value="owlCarousel" />*/
/* 																{{ text_owl_carousel }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.include_js == 'slick' %}*/
/* 																<input type="radio" name="include_js" value="slick" checked="checked" />*/
/* 																{{ text_slick_slider }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="include_js" value="slick" />*/
/* 																{{ text_slick_slider }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_1200"> <span data-toggle="tooltip" title="{{ entry_nb_column0_desc }}">{{ entry_column }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column0" id="input-column_1200" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column0 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_992_1199"><span data-toggle="tooltip" title="{{ entry_nb_column1_desc }}">{{ entry_column }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column1" id="input-column_992_1199" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column1 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_768_991"><span data-toggle="tooltip" title="{{ entry_nb_column2_desc }}">{{ entry_column }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column2" id="input-column_768_991" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column2 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_480_767"> <span data-toggle="tooltip" title="{{ entry_nb_column3_desc }}">{{ entry_column }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column3" id="input-column_480_767" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column3 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_0_479"><span data-toggle="tooltip" title="{{ entry_nb_column4_desc }}">{{ entry_column }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column4" id="input-column_0_479" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column4 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-nb_row"> <span data-toggle="tooltip" title="{{ entry_nb_row_desc }}">{{ entry_nb_row }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_row" id="input-nb_row" class="form-control">*/
/* 															{% for option_id, option_value in nb_rows %}*/
/* 																{% set selected = option_id == module.nb_row ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-display_feature"> <span data-toggle="tooltip" title="{{ entry_display_feature_desc }}">{{ entry_display_feature }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_feature %}*/
/* 																<input type="radio" name="display_feature" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_feature" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_feature %}*/
/* 																<input type="radio" name="display_feature" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_feature" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel" id="input-product_feature_form">*/
/* 												<label class="col-sm-3 control-label" for="input-product_feature"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_product_feature_desc }}">{{ entry_product_feature }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="product_feature" value="" placeholder="{{ entry_product_feature }}" id="input-product_feature" class="form-control" />*/
/* 														<div id="featured-product_feature" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for product_feature in module.product_features %}*/
/* 																<div id="featured-product_feature{{ product_feature.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_feature.product_name }}*/
/* 																	<input type="hidden" name="product_feature[]" value="{{ product_feature.product_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.product_feature is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.product_feature }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group slick-slide">*/
/* 												<label class="col-sm-3 control-label" for="input-position_thumbnail"> <span data-toggle="tooltip" title="{{ entry_position_thumbnail_desc }}">{{ entry_position_thumbnail }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="position_thumbnail" id="input-position_thumbnail" class="form-control">*/
/* 															{% for option_id, option_value in position_thumbnails %}*/
/* 																{% set selected = option_id == module.position_thumbnail ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="source_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_category_desc }}">{{ entry_category }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/* 														<div id="featured-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for category in module.categorys %}*/
/* 																<div id="featured-category{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/* 																	<input type="hidden" name="category[]" value="{{ category.category_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.category is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.category }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-child_category"> <span data-toggle="tooltip" title="{{ entry_child_category_desc }}">{{ entry_child_category }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="1" checked="checked" />*/
/* 																{{ entry_include }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="1" />*/
/* 																{{ entry_include }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="0" />*/
/* 																{{ entry_exclude }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="0" checked="checked" />*/
/* 																{{ entry_exclude }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-category_depth_form">*/
/* 												<label class="col-sm-3 control-label" for="input-category_depth"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_category_depth_desc }}">{{ entry_category_depth }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category_depth" value="{{ module.category_depth }}" id="input-category_depth" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.category_depth is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.category_depth }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_order"> <span data-toggle="tooltip" title="{{ entry_product_order_desc }}">{{ entry_product_order }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_sort" id="input-product_order" class="form-control">*/
/* 															{% for option_id, option_value in product_sorts %}*/
/* 																{% set selected = option_id == module.product_sort ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-ordering"> <span data-toggle="tooltip" title="{{ entry_ordering_desc }}">{{ entry_ordering }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_ordering" id="input-ordering" class="form-control">*/
/* 															{% for option_id, option_value in product_orderings %}*/
/* 																{% set selected = option_id == module.product_ordering ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-source_limit"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_source_limit_desc }}">{{ entry_source_limit }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="source_limit" value="{{ module.source_limit }}" id="input-source_limit" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.source_limit is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.source_limit }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>											*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="items_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_title"> <span data-toggle="tooltip" title="{{ entry_display_title_desc }}">{{ entry_display_title }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-title_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_title_maxlength_desc }}">{{ entry_title_maxlength }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="title_maxlength" value="{{ module.title_maxlength }}" id="input-title_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.title_maxlength is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.title_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_description"> <span data-toggle="tooltip" title="{{ entry_display_description_desc }}">{{ entry_display_description }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-description_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_description_maxlength_desc }}">{{ entry_description_maxlength }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="description_maxlength" value="{{ module.description_maxlength }}" id="input-description_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.description_maxlength is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.description_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group"> <!--Display One CountDown -->*/
/* 												<label class="col-sm-3 control-label" for="input-display_countdown"> <span data-toggle="tooltip" title="{{ entry_display_countdown_desc }}">{{ entry_display_countdown }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_countdown %}*/
/* 																<input type="radio" name="display_countdown" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_countdown" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 															*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															*/
/* 															{% if module.display_countdown %}*/
/* 																<input type="radio" name="display_countdown" value="0" />*/
/* 																*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_countdown" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group"> <!--Display all CountDown -->*/
/* 												<label class="col-sm-3 control-label" for="input-display_countdown"> <span data-toggle="tooltip" title="{{ entry_display_all_countdown_desc }}">{{ entry_display_all_countdown }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_all_countdown %}*/
/* 																<input type="radio" name="display_all_countdown" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_all_countdown" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 															*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															*/
/* 															{% if module.display_all_countdown %}*/
/* 																<input type="radio" name="display_all_countdown" value="0" />*/
/* 																*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_all_countdown" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_price"> <span data-toggle="tooltip" title="{{ entry_display_price_desc }}">{{ entry_display_price }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_addtocart"> <span data-toggle="tooltip" title="{{ entry_display_add_to_cart_desc }}">{{ entry_display_add_to_cart }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_addtocart %}*/
/* 																<input type="radio" name="display_addtocart" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_addtocart" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_addtocart %}*/
/* 																<input type="radio" name="display_addtocart" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_addtocart" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_wishlist"> <span data-toggle="tooltip" title="{{ entry_display_wishlist_desc }}">{{ entry_display_wishlist }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_compare"> <span data-toggle="tooltip" title="{{ entry_display_compare_desc }}">{{ entry_display_compare }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_rating"> <span data-toggle="tooltip" title="{{ entry_display_rating_desc }}">{{ entry_display_rating }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_sale"> <span data-toggle="tooltip" title="{{ entry_display_sale_desc }}">{{ entry_display_sale }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_new"> <span data-toggle="tooltip" title="{{ entry_display_new_desc }}">{{ entry_display_new }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-date_day_form">*/
/* 												<label class="col-sm-3 control-label" for="input-date_day"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_date_day_desc }}">{{ entry_date_day }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="date_day" value="{{ module.date_day }}" id="input-date_day" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.date_day is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.date_day }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image_num"> <span data-toggle="tooltip" title="{{ entry_product_image_num_desc }}">{{ entry_product_image_num }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_image_num" id="input-product_image_num" class="form-control">*/
/* 															{% for option_id, option_value in product_image_nums %}*/
/* 																{% set selected = option_id == module.product_image_num ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="image_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image"> <span data-toggle="tooltip" title="{{ entry_product_image_desc }}">{{ entry_product_image }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_data"> <span data-toggle="tooltip" title="{{ entry_product_get_image_data_desc }}">{{ entry_product_get_image_data }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_image"> <span data-toggle="tooltip" title="{{ entry_product_get_image_image_desc }}">{{ entry_product_get_image_image }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-width"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_width_desc }}">{{ entry_width }}</span></label>*/
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
/* 												<label class="col-sm-3 control-label" for="input-height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_height_desc }}">{{ entry_height }}</span></label>*/
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
/* 												<label class="col-sm-3 control-label" for="input-placeholder_path"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_placeholder_path_desc }}">{{ entry_placeholder_path }}</span></label>*/
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
/* 						*/
/* 										<div class="tab-pane" id="effect_option">*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-margin"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_margin_desc }}">{{ entry_margin }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="margin" value="{{ module.margin }}" id="input-margin" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.margin is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.margin }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-slideBy"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_slideBy_desc }}">{{ entry_slideBy }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="slideBy" value="{{ module.slideBy }}" id="input-slideBy" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.slideBy is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.slideBy }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplay"> <span data-toggle="tooltip" title="{{ entry_autoplay_desc }}">{{ entry_autoplay }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.autoplay %}*/
/* 																<input type="radio" name="autoplay" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="autoplay" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.autoplay %}*/
/* 																<input type="radio" name="autoplay" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="autoplay" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplayTimeout"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_autoplayTimeout_desc }}">{{ entry_autoplayTimeout }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplayTimeout" value="{{ module.autoplayTimeout }}" id="input-autoplayTimeout" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplayTimeout is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.autoplayTimeout }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplayHoverPause"> <span data-toggle="tooltip" title="{{ entry_autoplayHoverPause_desc }}">{{ entry_autoplayHoverPause }}</span></label>*/
/* 												<div class="col-sm-9">	*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.autoplayHoverPause %}*/
/* 																<input type="radio" name="autoplayHoverPause" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="autoplayHoverPause" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.autoplayHoverPause %}*/
/* 																<input type="radio" name="autoplayHoverPause" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="autoplayHoverPause" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplaySpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_autoplaySpeed_desc }}">{{ entry_autoplaySpeed }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplaySpeed" value="{{ module.autoplaySpeed }}" id="input-autoplaySpeed" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplaySpeed is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.autoplaySpeed }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-startPosition"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_startPosition_desc }}">{{ entry_startPosition }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="startPosition" value="{{ module.startPosition }}" id="input-startPosition" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.startPosition is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.startPosition }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-mouseDrag"> <span data-toggle="tooltip" title="{{ entry_mouseDrag_desc }}">{{ entry_mouseDrag }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.mouseDrag %}*/
/* 																<input type="radio" name="mouseDrag" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="mouseDrag" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.mouseDrag %}*/
/* 																<input type="radio" name="mouseDrag" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="mouseDrag" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-touchDrag"><span data-toggle="tooltip" title="{{ entry_touchDrag_desc }}">{{ entry_touchDrag }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.touchDrag %}*/
/* 																<input type="radio" name="touchDrag" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="touchDrag" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.touchDrag %}*/
/* 																<input type="radio" name="touchDrag" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="touchDrag" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-loop">*/
/* 													<span data-toggle="tooltip" title="{{ entry_loop_desc }}">*/
/* 														{{ entry_loop }}*/
/* 													</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.loop %}*/
/* 																<input type="radio" name="loop" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="loop" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.loop %}*/
/* 																<input type="radio" name="loop" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="loop" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-button_page"> <span data-toggle="tooltip" title="{{ entry_button_page_desc }}">{{ entry_button_page }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="button_page" id="input-button_page" class="form-control">*/
/* 															{% for option_id, option_value in button_pages %}*/
/* 																{% set selected = option_id == module.button_page ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-dots"> <span data-toggle="tooltip" title="{{ entry_dots_desc }}">{{ entry_dots }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.dots %}*/
/* 																<input type="radio" name="dots" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="dots" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.dots %}*/
/* 																<input type="radio" name="dots" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="dots" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>					*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-dotsSpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_dotsSpeed_desc }}">{{ entry_dotsSpeed }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="dotsSpeed" value="{{ module.dotsSpeed }}" id="input-dotsSpeed" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.dotsSpeed is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.dotsSpeed }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-navs"><span data-toggle="tooltip" title="{{ entry_navs_desc }}">{{ entry_navs }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.navs %}*/
/* 																<input type="radio" name="navs" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="navs" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.navs %}*/
/* 																<input type="radio" name="navs" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="navs" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-navSpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_navspeed_desc }}">{{ entry_navspeed }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="navSpeed" value="{{ module.navSpeed }}" id="input-navSpeed" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.navSpeed is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.navSpeed }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-effect"> <span data-toggle="tooltip" title="{{ entry_effect_desc }}">{{ entry_effect }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="effect" id="input-effect" class="form-control">*/
/* 															{% for option_id, option_value in effects %}*/
/* 																{% set selected = option_id == module.effect ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-duration"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_duration_desc }}">{{ entry_duration }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="duration" value="{{ module.duration }}" id="input-duration" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.duration is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.duration }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group owl-carousel">*/
/* 												<label class="col-sm-3 control-label" for="input-delay"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ entry_delay_desc }}">{{ entry_delay }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="delay" value="{{ module.delay }}" id="input-delay" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.delay is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.delay }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>	*/
/* 						*/
/* 										<div class="tab-pane" id="advanced_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-store_layout"> <span data-toggle="tooltip" title="{{ entry_store_layout_desc }}">{{ entry_store_layout }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="store_layout" id="input-store_layout" class="form-control">*/
/* 															{% for option_id, option_value in store_layouts %}*/
/* 																{% set selected = option_id == module.store_layout ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ entry_pre_text_desc }}">{{ entry_pre_text }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ entry_post_text_desc }}">{{ entry_post_text }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 													<span data-toggle="tooltip" title="{{ entry_use_cache_desc }}">{{ entry_use_cache }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 																{{ text_yes }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="1" />*/
/* 																{{ text_yes }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="0" />*/
/* 																{{ text_no }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 																{{ text_no }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-cache_time_form">*/
/* 												<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 													<span data-toggle="tooltip" title="{{ entry_cache_time_desc }}">{{ entry_cache_time }}</span>*/
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
/* 								{% set module_row = module_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 	    </div>	*/
/*   	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('input[name=\'category\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_deals/autocomplete_category&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
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
/* 		*/
/* 		$('#featured-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 		});*/
/* 		*/
/* 		/*Feature Product*//* */
/* 		$('input[name=\'product_feature\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_deals/autocomplete_product_feature&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['product_name'],*/
/* 								value: item['product_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'product_feature\']').val('');*/
/* 				*/
/* 				$('#featured-product_feature' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-product_feature').append('<div id="featured-product_feature' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_feature[]" value="' + item['value'] + '" /></div>');	*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#featured-product_feature').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 		});*/
/* 		*/
/* 		$('#so_youtech a:first').tab('show');*/
/* 		/* Child category *//* */
/* 		if($("input[name='child_category']:radio:checked").val() == '0')	{*/
/* 			$('#input-category_depth_form').hide();*/
/* 		}else	{*/
/* 			$('#input-category_depth_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='child_category']:radio").change(function(){*/
/* 			if($(this).val() == '0')*/
/* 			{*/
/* 				$('#input-category_depth_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-category_depth_form').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		/* Include Js *//* */
/* 		if($("input[name='include_js']:radio:checked").val() == 'owlCarousel')	{*/
/* 			$('.owl-carousel').show();*/
/* 			$('.slick-slide').hide();*/
/* 		}else	{*/
/* 			$('.owl-carousel').hide();*/
/* 			$('.slick-slide').show();*/
/* 		}*/
/* */
/* 		$("input[name='include_js']:radio").change(function(){*/
/* 			if($(this).val() == 'owlCarousel')		{*/
/* 				$('.owl-carousel').show();*/
/* 				$('.slick-slide').hide();*/
/* 			}else		{*/
/* 				$('.owl-carousel').hide();*/
/* 				$('.slick-slide').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		/* Product Feature *//* */
/* 		if($("input[name='display_feature']:radio:checked").val() == '0')	{*/
/* 			$('#input-product_feature_form').hide();*/
/* 		}else	{*/
/* 			$('#input-product_feature_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='display_feature']:radio").change(function(){*/
/* 			if($(this).val() == '0'){*/
/* 				$('#input-product_feature_form').hide();*/
/* 			}else{*/
/* 				$('#input-product_feature_form').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		/* Cache *//* */
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')	{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else	{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* 		$("input[name='use_cache']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)		{*/
/* 				$('#input-cache_time_form').hide();*/
/* 			}else		{*/
/* 				$('#input-cache_time_form').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		/*language*//* */
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head-name"]').val($(this).val());*/
/* 		});*/
/* 		*/
/* 		/*Display News *//* */
/* 		if($("input[name='display_new']:radio:checked").val() == '0')	{*/
/* 			$('#input-date_day_form').hide();*/
/* 		}else	{*/
/* 			$('#input-date_day_form').show();*/
/* 		}*/
/* 		$("input[name='display_new']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)		{*/
/* 				$('#input-date_day_form').hide();*/
/* 			}else		{*/
/* 				$('#input-date_day_form').show();*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ entry_button_clear_cache }}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
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
/* 	//--></script>*/
/* </div>*/
/* {{ footer }}*/
