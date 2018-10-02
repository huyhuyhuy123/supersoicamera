<?php

/* extension/module/so_newletter_custom_popup/so_newletter_custom_popup.twig */
class __TwigTemplate_f4892c226e89f1de98a35b96840e55c233201b1cd5fa853ce5f6f2322fc852a0 extends Twig_Template
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
    \t<div class=\"container-fluid\">
\t      \t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo " \" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo " \" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo " \" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "</a>
\t\t\t</div>
\t\t      <h1>";
        // line 11
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t      <ul class=\"breadcrumb\">
\t\t        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t      </ul>
    \t</div>
  \t</div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 27
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>  ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 30
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "  
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 34
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t";
        // line 42
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li ";
        // line 45
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo " > <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo " \"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t";
        // line 46
        $context["i"] = 1;
        // line 47
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  
\t\t\t\t\t\t\t<li role=\"presentation\" ";
            // line 48
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\"";
            }
            echo " >
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo " \"  >
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 50
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 53
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
        // line 61
        $context["module_row"] = 1;
        // line 62
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  \t
\t\t\t\t\t\t";
            // line 63
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                echo " 
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
                // line 65
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 67
            echo " 

\t\t\t\t\t\t<div  id=\"tab-module";
            // line 69
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 72
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 73
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 76
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " \" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 78
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 79
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 85
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            $context["i"] = 0;
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                // line 92
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array())) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array())) : (""));
                echo "\"  class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? ("hide ") : ("first-name "));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 100
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 101
                echo $this->getAttribute($context["language"], "name", array());
                echo " 
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo " 
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 106
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 107
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 113
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 118
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 119
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 120
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 121
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 122
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 130
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 134
            if ($this->getAttribute($context["module"], "status", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 135
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 136
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 137
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 138
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 139
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_youtech\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#so_module_module\" data-toggle=\"tab\">";
            // line 150
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#content_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_content_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#newsletter_subscribers_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_newsletter_subscribers"), "method");
            echo "\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#html_Email_template\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 164
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_html_Email_template"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 169
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
            // line 175
            echo "<div class=\"tab-pane\" id=\"so_module_module\"> 
\t\t\t\t\t\t\t\t\t";
            // line 177
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 179
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 183
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-expired\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_expired_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_expired"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"expired\" value=\"";
            // line 191
            echo $this->getAttribute($context["module"], "expired", array());
            echo " \" id=\"input-expired\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "expired", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 194
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "expired", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-layout\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_layout_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_layout"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout\" id=\"input-layout\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "layout", array()))) ? ("selected") : (""));
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 216
            echo $this->getAttribute($context["module"], "width", array());
            echo " \" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\" style=\"margin-top: 10px;color: red\">";
            // line 218
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_note"), "method");
            echo " </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 222
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image_bg_display\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 223
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_bg_display_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_bg_display"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 228
            if ($this->getAttribute($context["module"], "image_bg_display", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"image_bg_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 230
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 231
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"image_bg_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 233
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 234
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 237
            if ( !$this->getAttribute($context["module"], "image_bg_display", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"image_bg_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 239
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 240
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"image_bg_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 242
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 249
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-image\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image"), "method");
            echo " </label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 251
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo " \" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo " \" /></a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
            // line 252
            echo (isset($context["image"]) ? $context["image"] : null);
            echo " \" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-color_bg_form\"> ";
            // line 257
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-color_bg\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_color_bg_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_color_bg"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group col-sm-1\">
\t\t\t\t\t\t\t\t\t          \t<input type=\"text\" name=\"color_bg\" value=\"";
            // line 260
            echo $this->getAttribute($context["module"], "color_bg", array());
            echo "\" id=\"input-color_bg\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 267
            echo "<div class=\"tab-pane\" id=\"content_option\"> 
\t\t\t\t\t\t\t\t<!--Content Option -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-border_display\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 271
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_display_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_display"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 276
            if ($this->getAttribute($context["module"], "title_display", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"title_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 278
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 279
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"title_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 281
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 282
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 285
            if ( !$this->getAttribute($context["module"], "title_display", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"title_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 287
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 288
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"title_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 290
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 291
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_youtech_content\">
\t\t\t\t\t\t\t\t\t\t";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#content_";
                // line 299
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 300
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 301
                echo $this->getAttribute($context["language"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo " 
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"content_";
                // line 309
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-title_form\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title_";
                // line 311
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_desc"), "method");
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title"), "method");
                echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description_content[";
                // line 314
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" value=\"";
                echo (($this->getAttribute((isset($context["description_content"]) ? $context["description_content"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["description_content"]) ? $context["description_content"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                echo "\" id=\"input-title_";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 316
                if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title", array())) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                    // line 317
                    echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title", array());
                    echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 319
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"sign-up-option\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-newsletter_promo\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-newsletter_promo_";
                // line 323
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_newsletter_promo_desc"), "method");
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_newsletter_promo"), "method");
                echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description_content[";
                // line 326
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][newsletter_promo]\" value=\"";
                echo (($this->getAttribute((isset($context["description_content"]) ? $context["description_content"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["description_content"]) ? $context["description_content"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "newsletter_promo", array())) : (""));
                echo "\" id=\"input-newsletter_promo_";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 328
                if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "newsletter_promo", array())) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                    // line 329
                    echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "newsletter_promo", array());
                    echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 331
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  ";
            // line 340
            echo "<div class=\"tab-pane\" id=\"newsletter_subscribers_option\"> 
\t\t\t\t\t\t\t\t\t<!--newsletter subscribers option -->
\t\t\t\t\t\t\t\t\t<div id=\"history\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 345
            echo "<div class=\"tab-pane\" id=\"html_Email_template\">  ";
            // line 346
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-title_form\"> <!--title -->
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email_template_subject\"> <span data-toggle=\"tooltip\" title=\"";
            // line 347
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_email_template_subject_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_email_template_subject"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-pencil-square-o\"></i> Subject:</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email_template_subject\" value=\"";
            // line 351
            echo $this->getAttribute($context["module"], "email_template_subject", array());
            echo "\" id=\"input-email_template_subject\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> <!--Content Email -->
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-content_email\"> <span data-toggle=\"tooltip\" title=\"";
            // line 357
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_content_email_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_content_email"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"content_email\" placeholder=\"";
            // line 360
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_content_email"), "method");
            echo "\" id=\"input-content_email\" class=\"form-control\" data-toggle=\"summernote\">";
            echo $this->getAttribute($context["module"], "content_email", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 367
            echo "<div class=\"tab-pane\" id=\"advanced_option\"> ";
            // line 368
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 369
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 372
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 380
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 385
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 386
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 391
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 393
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 394
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 396
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 397
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 400
            if ( !$this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 402
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 403
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 405
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 406
            echo "   
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\"> ";
            // line 412
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 413
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 417
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 419
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 420
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 422
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 426
            echo "</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 429
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 430
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t  
        </form>\t\t
      </div>
    </div>
  </div>
 
  
<script type=\"text/javascript\"><!--
\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
\t{
\t\t\$('#input-cache_time_form').hide();
\t}else
\t{
\t\t\$('#input-cache_time_form').show();
\t}
\t\$(\"input[name='use_cache']\").change(function(){
\t\tval = \$(this).val();
\t\tif(val ==0){
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else{
\t\t\t\$('#input-cache_time_form').show();
\t\t}
\t});
\t\$('#so_youtech a:first').tab('show');
\t\$('#so_youtech_content a:first').tab('show');
\t\$('#so_email_template a:first').tab('show');

\t\$('#language').change(function(){
\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t_input.removeClass('hide');
\t});

\t\$('.first-name').change(function(){
\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
\t});

\t\$('#input-color_bg').colpick({
\t\tlayout:'hex',
\t\tsubmit:0,
\t\tcolorScheme:'dark',
\t\tonChange:function(hsb,hex,rgb,el,bySetColor) {
\t\t\t\$(el).css('border-color','#'+hex);
\t\t\t// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
\t\t\tif(!bySetColor) \$(el).val(hex);
\t\t}
\t}).keyup(function(){
\t\t\$(this).colpickSetColor(this.value);

\t});
\tvar this_value_bg = \$('#input-color_bg').val();
\t\$('#input-color_bg').css('border-left', '25px solid #' + this_value_bg);
\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 487
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\tfunction mailing_all() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all&user_token=";
        // line 491
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=";
        echo (isset($context["selectedid"]) ? $context["selectedid"] : null);
        echo " ',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 499
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 500
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction mailing_selected(subscribe_id) {
\t\t
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_selected&user_token=";
        // line 510
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=";
        echo (isset($context["selectedid"]) ? $context["selectedid"] : null);
        echo "&subscribe_id='+ subscribe_id,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 519
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction mailing_all_selected() {
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_selected&user_token=";
        // line 528
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=";
        echo (isset($context["selectedid"]) ? $context["selectedid"] : null);
        echo " ',
\t\t\tdata: \$('#history input[type=\\'checkbox\\']:checked'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 537
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction mailing_all_not_notified() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_not_notified&user_token=";
        // line 546
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=";
        echo (isset($context["selectedid"]) ? $context["selectedid"] : null);
        echo " ',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 554
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo " ');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tfunction mailing_all_approved() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_approved&user_token=";
        // line 564
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=";
        echo (isset($context["selectedid"]) ? $context["selectedid"] : null);
        echo " ',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 572
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction revert_yet_send() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/revert_yet_send&user_token=";
        // line 581
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 586
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction approve_selected(subscribe_id) {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/approve_selected&user_token=";
        // line 595
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&subscribe_id=' + subscribe_id,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 600
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction approve_all_selected() {
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/approve_all_selected&user_token=";
        // line 609
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdata: \$('#history input[type=\\'checkbox\\']:checked'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 618
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction approve_all_not_approved() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/approve_all_not_approved&user_token=";
        // line 627
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 635
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tfunction delete_selected(subscribe_id) {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/delete_selected&user_token=";
        // line 645
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&subscribe_id=' + subscribe_id,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 650
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction delete_all() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all&user_token=";
        // line 659
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 667
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction delete_all_selected() {
\t\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all_selected&user_token=";
        // line 676
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdata: \$('#history input[type=\\'checkbox\\']:checked'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 685
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction delete_all_not_approved() {
\t\t\$.ajax({
\t\t\ttype: 'get',
\t\t\turl:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all_not_approved&user_token=";
        // line 694
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token=";
        // line 702
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t\t\t\t\t\$('#history').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\t//--></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 712
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo " \" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 713
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo " \" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
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
        // line 729
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo " ';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 732
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo " ',
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
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
\t<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  

</div>
";
        // line 749
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/so_newletter_custom_popup/so_newletter_custom_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1479 => 749,  1459 => 732,  1453 => 729,  1434 => 713,  1428 => 712,  1415 => 702,  1404 => 694,  1392 => 685,  1380 => 676,  1368 => 667,  1357 => 659,  1345 => 650,  1337 => 645,  1324 => 635,  1313 => 627,  1301 => 618,  1289 => 609,  1277 => 600,  1269 => 595,  1257 => 586,  1249 => 581,  1237 => 572,  1224 => 564,  1211 => 554,  1198 => 546,  1186 => 537,  1172 => 528,  1160 => 519,  1146 => 510,  1133 => 500,  1129 => 499,  1116 => 491,  1109 => 487,  1051 => 431,  1045 => 430,  1043 => 429,  1038 => 426,  1033 => 422,  1028 => 420,  1024 => 419,  1019 => 417,  1010 => 413,  1007 => 412,  1000 => 406,  995 => 405,  991 => 403,  986 => 402,  981 => 400,  976 => 397,  971 => 396,  967 => 394,  962 => 393,  957 => 391,  947 => 386,  944 => 385,  937 => 380,  928 => 377,  921 => 372,  912 => 369,  910 => 368,  908 => 367,  897 => 360,  889 => 357,  880 => 351,  871 => 347,  868 => 346,  866 => 345,  860 => 340,  854 => 335,  844 => 331,  839 => 329,  835 => 328,  826 => 326,  816 => 323,  810 => 319,  805 => 317,  801 => 316,  792 => 314,  782 => 311,  777 => 309,  770 => 307,  765 => 304,  755 => 301,  747 => 300,  743 => 299,  736 => 297,  728 => 291,  723 => 290,  719 => 288,  714 => 287,  709 => 285,  704 => 282,  699 => 281,  695 => 279,  690 => 278,  685 => 276,  675 => 271,  672 => 270,  668 => 267,  659 => 260,  650 => 257,  643 => 252,  637 => 251,  631 => 249,  624 => 243,  619 => 242,  615 => 240,  610 => 239,  605 => 237,  600 => 234,  595 => 233,  591 => 231,  586 => 230,  581 => 228,  571 => 223,  568 => 222,  562 => 218,  557 => 216,  548 => 213,  541 => 207,  528 => 205,  525 => 204,  521 => 203,  511 => 199,  507 => 196,  502 => 194,  498 => 193,  493 => 191,  484 => 188,  477 => 183,  468 => 179,  465 => 178,  463 => 177,  460 => 175,  452 => 169,  444 => 164,  436 => 159,  428 => 154,  421 => 150,  410 => 141,  405 => 139,  401 => 138,  398 => 137,  393 => 136,  389 => 135,  385 => 134,  375 => 130,  368 => 124,  363 => 122,  359 => 121,  356 => 120,  351 => 119,  347 => 118,  343 => 117,  333 => 113,  328 => 109,  323 => 107,  319 => 106,  314 => 103,  305 => 101,  301 => 100,  295 => 99,  289 => 95,  272 => 92,  267 => 90,  261 => 89,  257 => 88,  248 => 85,  243 => 81,  238 => 79,  234 => 78,  227 => 76,  219 => 73,  216 => 72,  211 => 69,  207 => 67,  199 => 65,  194 => 63,  187 => 62,  185 => 61,  177 => 55,  169 => 53,  163 => 50,  155 => 49,  149 => 48,  142 => 47,  140 => 46,  130 => 45,  125 => 42,  121 => 40,  115 => 37,  110 => 34,  103 => 30,  96 => 27,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   	<div class="page-header">*/
/*     	<div class="container-fluid">*/
/* 	      	<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ objlang.get('entry_button_save') }} " class="btn btn-primary"><i class="fa fa-save"></i> {{ objlang.get('entry_button_save')}}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }} " ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit')}}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }} " ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new')}}</a>*/
/* 				<a href="{{ cancel}} " data-toggle="tooltip" title="{{ objlang.get('entry_button_cancel') }} " class="btn btn-danger"><i class="fa fa-reply"></i>  {{ objlang.get('entry_button_cancel')}}</a>*/
/* 			</div>*/
/* 		      <h1>{{ heading_title_so }}</h1>*/
/* 		      <ul class="breadcrumb">*/
/* 		        {% for breadcrumb in breadcrumbs %}*/
/* 		        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		        {% endfor %}*/
/* 		      </ul>*/
/*     	</div>*/
/*   	</div>*/
/*   <div class="container-fluid">*/
/*     {% if error.warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i>  {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}  */
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 			{#//Nav tabs #}*/
/* 			<div class="row">*/
/* 				<div class="col-xs-12">*/
/* 					<ul class="nav nav-tabs" role="tablist">*/
/* 						<li {% if selectedid  == 0  %} class="active" {% endif %} > <a href="{{ link }} "> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 						{% set i = 1%}*/
/* 						{% for key, module in moduletabs %}  */
/* 							<li role="presentation" {% if module.module_id == selectedid  %} class="active"{% endif %} >*/
/* 							<a href="{{ link }}&module_id={{ module.module_id}}" aria-controls="bannermodule-{{ key }} "  >*/
/* 								<span class="fa fa-pencil"></span> {{ module.name}}*/
/* 							</a>*/
/* 							</li>*/
/* 							{% set i = i + 1 %}  */
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					{% set module_row = 1 %}*/
/* 					{% for key, module in modules %}  	*/
/* 						{% if selectedid %} */
/* 						<div class="pull-right">*/
/* 							<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 						<div  id="tab-module{{module_row}}" class="col-sm-12">*/
/* 							<div class="form-group"> */
/* 								{# Module Name #}*/
/* 								<input type="hidden" name="action" id="action" value=""/>*/
/* 								<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }} ">{{ objlang.get('entry_name') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }} " id="input-name" class="form-control" />*/
/* 									</div>*/
/* 									{% if error.name %} */
/* 									<div class="text-danger col-sm-12">{{ error.name }} </div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								{# Header title #}*/
/* 								<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }} ">{{ objlang.get('entry_head_name') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										{% set i=0 %}											*/
/* 										{% for language in languages %} */
/* 											{% set i = i + 1 %}		*/
/* 											*/
/* 											<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id}}" value="{{ module_description[language.language_id].head_name ? module_description[language.language_id].head_name : '' }}"  class="form-control {{ i > 1 ? 'hide ' : 'first-name '}}" />*/
/* 											*/
/* 										{% endfor %}*/
/* 										 */
/* 									</div>*/
/* 									<div class="col-sm-3">*/
/* 										<select  class="form-control" id="language">*/
/* 											{% for language in languages %} */
/* 											<option value="{{ language.language_id }}">*/
/* 												{{ language.name }} */
/* 											</option>*/
/* 											{% endfor %} */
/* 										</select>*/
/* 									</div>*/
/* 									{% if error.head_name %} */
/* 									<div class="text-danger col-sm-12">{{ error.head_name }} </div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								{# Display header title #}*/
/* 								<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }} ">{{ objlang.get('entry_display_title_module') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 											{% if module.disp_title_module %} */
/* 												<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 												<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 											{% else %}   */
/* 												<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 												<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 											 {% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group"> */
/* 								{# Status #}*/
/* 								<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }} ">{{ objlang.get('entry_status') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<select name="status" id="input-status" class="form-control">*/
/* 											{% if module.status %} */
/* 												<option value="1" selected="selected">{{ objlang.get('text_enabled') }} </option>*/
/* 												<option value="0">{{ objlang.get('text_disabled') }} </option>*/
/* 											{% else %}   */
/* 												<option value="1">{{ objlang.get('text_enabled') }} </option>*/
/* 												<option value="0" selected="selected">{{ objlang.get('text_disabled') }} </option>*/
/* 											 {% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="tab-pane">*/
/* 							<ul class="nav nav-tabs" id="so_youtech">*/
/* 								<li>*/
/* 									<a href="#so_module_module" data-toggle="tab">{{ objlang.get('entry_module' )}}	</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#content_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_content_option' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#newsletter_subscribers_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_newsletter_subscribers' )}}	*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#html_Email_template" data-toggle="tab">*/
/* 										{{ objlang.get('entry_html_Email_template' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#advanced_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_advanced_option' )}}	*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="so_module_module"> */
/* 									{# General Option #}*/
/* 									<div class="form-group"> {# Class suffix  #}*/
/* 										<label class="col-sm-3 control-label" for="input-class_suffix">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }} ">{{ objlang.get('entry_class_suffix') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--Time expired cookie-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-expired"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_expired_desc') }} ">{{ objlang.get('entry_expired') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="expired" value="{{ module.expired }} " id="input-expired" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.expired %} */
/* 											<div class="text-danger col-sm-12">{{ error.expired }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--layout-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-layout"><span data-toggle="tooltip" title="{{ objlang.get('entry_layout_desc') }} ">{{ objlang.get('entry_layout') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="layout" id="input-layout" class="form-control">*/
/* 													{% for option_id, option_value in layouts %}*/
/* 														{% set selected = option_id  == module.layout ? 'selected' :'' %}*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!--width--> #}*/
/* 										<label class="col-sm-3 control-label" for="input-width"><span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }} ">{{ objlang.get('entry_width') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="width" value="{{ module.width }} " id="input-width" class="form-control" />*/
/* 											</div>*/
/* 											<div class="col-sm-3" style="margin-top: 10px;color: red">{{ objlang.get('entry_width_note') }} </div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--Display image background -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-image_bg_display">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_image_bg_display_desc') }} ">{{ objlang.get('entry_image_bg_display') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.image_bg_display %} */
/* 														<input type="radio" name="image_bg_display" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="image_bg_display" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.image_bg_display %} */
/* 														<input type="radio" name="image_bg_display" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="image_bg_display" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--Image-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-image">{{ objlang.get('entry_image') }} </label>*/
/* 										<div class="col-sm-9">*/
/* 											<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }} " alt="" title="" data-placeholder="{{ placeholder }} " /></a>*/
/* 											<input type="hidden" name="image" value="{{ image }} " id="input-image" />*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group" id="input-color_bg_form"> {# <!--color_bg --> #}*/
/* 										<label class="col-sm-3 control-label" for="input-color_bg"><span data-toggle="tooltip" title="{{ objlang.get('entry_color_bg_desc') }} ">{{ objlang.get('entry_color_bg') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="input-group col-sm-1">*/
/* 									          	<input type="text" name="color_bg" value="{{module.color_bg}}" id="input-color_bg" class="form-control" />*/
/* 									        </div>*/
/* 												*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="content_option"> */
/* 								<!--Content Option -->*/
/* 									<div class="form-group"> {# <!--Display title popup -->  #}*/
/* 										<label class="col-sm-2 control-label" for="input-border_display">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_title_display_desc') }} ">{{ objlang.get('entry_title_display') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-10">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.title_display %} */
/* 														<input type="radio" name="title_display" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="title_display" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.title_display %} */
/* 														<input type="radio" name="title_display" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="title_display" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<ul class="nav nav-tabs" id="so_youtech_content">*/
/* 										{% for language in languages %} */
/* 										<li>*/
/* 											<a href="#content_{{ language.language_id }}" data-toggle="tab">*/
/* 												<img src="language/{{ language.code}}/{{ language.code}}.png" title="{{ language.name }}" />*/
/* 												{{ language.name }}*/
/* 											</a>*/
/* 										</li>*/
/* 										{% endfor %} */
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 										{% for language in languages %} */
/* 										*/
/* 										<div class="tab-pane" id="content_{{ language.language_id }}"> */
/* 											<div class="form-group" id="input-title_form"> */
/* 												<label class="col-sm-2 control-label" for="input-title_{{language.language_id }}"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_title_desc') }} ">{{ objlang.get('entry_title') }} </span></label>*/
/* 												<div class="col-sm-10">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="description_content[{{language.language_id}}][title]" value="{{ description_content[language.language_id] ? description_content[language.language_id].title : '' }}" id="input-title_{{ language.language_id }}" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.title %} */
/* 														<div class="text-danger col-sm-12">{{ error.title }} </div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div id="sign-up-option">*/
/* 												<div class="form-group" id="input-newsletter_promo"> */
/* 													<label class="col-sm-2 control-label" for="input-newsletter_promo_{{ language.language_id }}"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_newsletter_promo_desc') }} ">{{ objlang.get('entry_newsletter_promo') }} </span></label>*/
/* 													<div class="col-sm-10">*/
/* 														<div class="col-sm-10">*/
/* 															<input type="text" name="description_content[{{ language.language_id }}][newsletter_promo]" value="{{ description_content[language.language_id] ? description_content[language.language_id].newsletter_promo : '' }}" id="input-newsletter_promo_{{ language.language_id }}" class="form-control" />*/
/* 														</div>*/
/* 														{% if error.newsletter_promo %} */
/* 															<div class="text-danger col-sm-12">{{ error.newsletter_promo }} </div>*/
/* 														{% endif %}*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										{% endfor %} */
/* 									</div>*/
/* 								*/
/* 								</div>*/
/* 							  {# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="newsletter_subscribers_option"> */
/* 									<!--newsletter subscribers option -->*/
/* 									<div id="history"></div>*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="html_Email_template">  {# Content Option #}*/
/* 									<div class="form-group" id="input-title_form"> <!--title -->*/
/* 										<label class="col-sm-2 control-label" for="input-email_template_subject"> <span data-toggle="tooltip" title="{{ objlang.get('entry_email_template_subject_desc') }} ">{{ objlang.get('entry_email_template_subject') }} </span></label>*/
/* 										<div class="col-sm-10">*/
/* 											<div class="col-sm-10 input-group">*/
/* 												<span class="input-group-addon"><i class="fa fa-pencil-square-o"></i> Subject:</span>*/
/* 												<input type="text" name="email_template_subject" value="{{ module.email_template_subject }}" id="input-email_template_subject" class="form-control" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> <!--Content Email -->*/
/* 										<label class="col-sm-2 control-label" for="input-content_email"> <span data-toggle="tooltip" title="{{ objlang.get('entry_content_email_desc') }}">{{ objlang.get('entry_content_email') }}</span></label>*/
/* 										<div class="col-sm-10">*/
/* 											<div class="col-sm-10">*/
/* 												<textarea name="content_email" placeholder="{{ objlang.get('entry_content_email') }}" id="input-content_email" class="form-control" data-toggle="summernote">{{ module.content_email }}</textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="advanced_option"> {# Advanced Option #}*/
/* 									<div class="form-group"> {# Pre-text #}*/
/* 										<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }} ">{{ objlang.get('entry_pre_text') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }}</textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Post-text #}*/
/* 										<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }}">{{ objlang.get('entry_post_text') }}</span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text}}</textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Use Cache #}*/
/* 										<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }} ">{{ objlang.get('entry_use_cache') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.use_cache %} */
/* 														<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="use_cache" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.use_cache %} */
/* 														<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="use_cache" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}   */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group" id="input-cache_time_form"> {# Cache Time #}*/
/* 										<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }} ">{{ objlang.get('entry_cache_time') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.cache_time %} */
/* 											<div class="text-danger col-sm-12">{{ error.cache_time }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						{% set module_row = module_row + 1 %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			*/
/* 		  */
/*         </form>		*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*  */
/*   */
/* <script type="text/javascript"><!--*/
/* 	if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 	{*/
/* 		$('#input-cache_time_form').hide();*/
/* 	}else*/
/* 	{*/
/* 		$('#input-cache_time_form').show();*/
/* 	}*/
/* 	$("input[name='use_cache']").change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==0){*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* 	});*/
/* 	$('#so_youtech a:first').tab('show');*/
/* 	$('#so_youtech_content a:first').tab('show');*/
/* 	$('#so_email_template a:first').tab('show');*/
/* */
/* 	$('#language').change(function(){*/
/* 		var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 		$('[id^="input-head-name-"]').addClass('hide');*/
/* 		_input.removeClass('hide');*/
/* 	});*/
/* */
/* 	$('.first-name').change(function(){*/
/* 		$('input[name="head-name"]').val($(this).val());*/
/* 	});*/
/* */
/* 	$('#input-color_bg').colpick({*/
/* 		layout:'hex',*/
/* 		submit:0,*/
/* 		colorScheme:'dark',*/
/* 		onChange:function(hsb,hex,rgb,el,bySetColor) {*/
/* 			$(el).css('border-color','#'+hex);*/
/* 			// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.*/
/* 			if(!bySetColor) $(el).val(hex);*/
/* 		}*/
/* 	}).keyup(function(){*/
/* 		$(this).colpickSetColor(this.value);*/
/* */
/* 	});*/
/* 	var this_value_bg = $('#input-color_bg').val();*/
/* 	$('#input-color_bg').css('border-left', '25px solid #' + this_value_bg);*/
/* 	$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 	function mailing_all() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all&user_token={{ user_token }}&module_id={{ selectedid }} ',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function mailing_selected(subscribe_id) {*/
/* 		*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_selected&user_token={{ user_token }}&module_id={{selectedid}}&subscribe_id='+ subscribe_id,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* */
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function mailing_all_selected() {*/
/* 		$.ajax({*/
/* 			type: 'post',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_selected&user_token={{ user_token }}&module_id={{ selectedid }} ',*/
/* 			data: $('#history input[type=\'checkbox\']:checked'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function mailing_all_not_notified() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_not_notified&user_token={{ user_token }}&module_id={{ selectedid }} ',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }} ');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	function mailing_all_approved() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/mailing_all_approved&user_token={{ user_token }}&module_id={{ selectedid }} ',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function revert_yet_send() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/revert_yet_send&user_token={{ user_token }}',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function approve_selected(subscribe_id) {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/approve_selected&user_token={{ user_token }}&subscribe_id=' + subscribe_id,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function approve_all_selected() {*/
/* 		$.ajax({*/
/* 			type: 'post',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/approve_all_selected&user_token={{ user_token }}',*/
/* 			data: $('#history input[type=\'checkbox\']:checked'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function approve_all_not_approved() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/approve_all_not_approved&user_token={{ user_token }}',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	function delete_selected(subscribe_id) {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/delete_selected&user_token={{ user_token }}&subscribe_id=' + subscribe_id,*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function delete_all() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all&user_token={{ user_token }}',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function delete_all_selected() {*/
/* 		$.ajax({*/
/* 			type: 'post',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all_selected&user_token={{ user_token }}',*/
/* 			data: $('#history input[type=\'checkbox\']:checked'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i>' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function delete_all_not_approved() {*/
/* 		$.ajax({*/
/* 			type: 'get',*/
/* 			url:  'index.php?route=extension/module/so_newletter_custom_popup/delete_all_not_approved&user_token={{ user_token }}',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.alert, .text-danger').remove();*/
/* 				if (json['error']) {*/
/* 					$('#history').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 				if (json['success']) {*/
/* 					$('#history').load('index.php?route=extension/module/so_newletter_custom_popup/history&user_token={{ user_token }}');*/
/* 					$('#history').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	//--></script>*/
/* 	<script type="text/javascript">*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }} " class="btn btn-danger"><i class="fa fa-remove"></i> {{ objlang.get('entry_button_clear_cache')}}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }} " class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
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
/* 			var success_remove = '{{ success_remove}} ';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{ linkremove }} ',*/
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
/* 	<script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* 	<link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* 	<script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*   */
/* */
/* </div>*/
/* {{ footer }}*/
/* */
