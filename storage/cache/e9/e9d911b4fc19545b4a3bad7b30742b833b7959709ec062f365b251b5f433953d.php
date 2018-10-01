<?php

/* extension/module/so_home_slider.twig */
class __TwigTemplate_b5bc7ccf2550efb6047e10dbfcfde954608bcee9f1a8be9b200a724f239c7df4 extends Twig_Template
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
        // line 21
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>  ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 31
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "  
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 35
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 41
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t";
        // line 43
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li ";
        // line 46
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo " > <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo " \"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t";
        // line 47
        $context["i"] = 1;
        // line 48
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  
\t\t\t\t\t\t\t<li role=\"presentation\" ";
            // line 49
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\"";
            }
            echo " >
\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo " \"  >
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 51
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
        // line 62
        $context["module_row"] = 1;
        // line 63
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  \t
\t\t\t\t\t\t";
            // line 64
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                echo " 
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 68
            echo " 

\t\t\t\t\t\t<div  id=\"tab-module";
            // line 70
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 73
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tab_module\" id=\"tab_module\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 75
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 78
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " \" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 80
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 81
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 87
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t";
            // line 90
            $context["i"] = 0;
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                // line 93
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
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language_head-name\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 101
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 102
                echo $this->getAttribute($context["language"], "name", array());
                echo " 
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " 
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 108
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 114
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 118
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 119
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 120
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 121
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 122
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 123
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 131
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 135
            if ($this->getAttribute($context["module"], "status", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 136
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 137
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 138
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 139
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 140
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_youtech\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#so_module_module\" data-toggle=\"tab\" onclick=\"\$('#tab_module').val('add-module')\">";
            // line 151
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#so_module_image_option\" data-toggle=\"tab\" onclick=\"\$('#tab_module').val('add-module')\">
\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#effect_option\" data-toggle=\"tab\" onclick=\"\$('#tab_module').val('add-module')\">
\t\t\t\t\t\t\t\t\t\t";
            // line 161
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\" onclick=\"\$('#tab_module').val('add-module')\">
\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
            // line 170
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 171
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#slider_option\" data-toggle=\"tab\" onclick=\"\$('#tab_module').val('add-slide')\">
\t\t\t\t\t\t\t\t\t\t";
                // line 173
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slider_option"), "method");
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
            // line 180
            echo "<div class=\"tab-pane\" id=\"so_module_module\"> 
\t\t\t\t\t\t\t\t\t";
            // line 182
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 184
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 188
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_link\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 194
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"item_link_target\" id=\"input-open_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item_link_targets"]) ? $context["item_link_targets"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "item_link_target", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 201
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
            // line 202
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_1200\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 210
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column0_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column0\" id=\"input-column_1200\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column0", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 217
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
            // line 218
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 223
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_992\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 225
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column1_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column1\" id=\"input-column_992\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column1", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 232
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
            // line 233
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 238
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_768_991\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 240
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column2_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column2\" id=\"input-column_768_992\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column2", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 247
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
            // line 248
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 253
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_480_767\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 255
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column3_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column3\" id=\"input-column_480_767\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 261
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column3", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 262
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
            // line 263
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_0_479\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 270
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column4_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column4\" id=\"input-column_0_479\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column4", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 277
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
            // line 278
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 287
            echo "<div class=\"tab-pane\" id=\"so_module_image_option\">  ";
            // line 288
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 290
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 291
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 295
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 297
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 298
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 303
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\">
\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 304
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 308
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 310
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 311
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 312
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 319
            echo "<div class=\"tab-pane\" id=\"effect_option\"> ";
            // line 320
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"autoplay\" id=\"input-autoplay\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 326
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 327
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 328
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 329
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 330
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 331
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 332
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 338
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayTimeout\"> <b style=\"color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplayTimeout\" value=\"";
            // line 341
            echo $this->getAttribute($context["module"], "autoplayTimeout", array());
            echo "\" id=\"input-autoplayTimeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 343
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 344
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 345
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 349
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayHoverPause\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayHoverPause_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayHoverPause"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"autoplayHoverPause\" id=\"input-autoplayHoverPause\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 353
            if ($this->getAttribute($context["module"], "autoplayHoverPause", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 354
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 355
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 356
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 357
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 358
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 359
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 365
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplaySpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplaySpeed\" value=\"";
            // line 368
            echo $this->getAttribute($context["module"], "autoplaySpeed", array());
            echo "\" id=\"input-autoplaySpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 370
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 371
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 372
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 376
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-startPosition\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_startPosition_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_startPosition"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"startPosition\" value=\"";
            // line 379
            echo $this->getAttribute($context["module"], "startPosition", array());
            echo "\" id=\"input-startPosition\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 381
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 382
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 383
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 387
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-mouseDrag\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mouseDrag_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mouseDrag"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 391
            if ($this->getAttribute($context["module"], "mouseDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 393
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 394
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" />
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
            if ( !$this->getAttribute($context["module"], "mouseDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 402
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 403
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" />
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
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 412
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-touchDrag\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchDrag_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchDrag"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 416
            if ($this->getAttribute($context["module"], "touchDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 418
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 419
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 421
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 422
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 425
            if ( !$this->getAttribute($context["module"], "touchDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 427
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 428
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 430
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 431
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 438
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-animateOut\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_animateOut_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_animateOut"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"animateOut\" id=\"input-animateOut\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animateOuts"]) ? $context["animateOuts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 443
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "animateOut", array()))) ? ("selected") : (""));
                // line 444
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
            // line 446
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 451
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-animateIn\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_animateIn_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_animateIn"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"animateIn\" id=\"input-animateIn\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animateIns"]) ? $context["animateIns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "animateIn", array()))) ? ("selected") : (""));
                // line 457
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 465
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dots\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dots_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dots"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 469
            if ($this->getAttribute($context["module"], "dots", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 471
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 472
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 474
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 475
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 478
            if ( !$this->getAttribute($context["module"], "dots", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 480
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 481
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 483
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 484
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 491
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-loop\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_loop_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_loop"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 495
            if ($this->getAttribute($context["module"], "loop", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 497
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 498
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 500
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 501
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 504
            if ( !$this->getAttribute($context["module"], "loop", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 506
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 507
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 509
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 510
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 516
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navs\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navs_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navs"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 520
            if ($this->getAttribute($context["module"], "navs", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 522
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 523
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 525
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 526
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 529
            if ( !$this->getAttribute($context["module"], "navs", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 531
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 532
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 534
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 535
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t";
            // line 544
            echo "<div class=\"tab-pane\" id=\"advanced_option\"> ";
            // line 545
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 546
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 549
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 554
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 557
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 562
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 563
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 568
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 570
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 571
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 573
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 574
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 577
            if ( !$this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 579
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 580
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 582
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 583
            echo "   
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\"> ";
            // line 589
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 590
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 594
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 596
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 597
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 599
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 603
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 604
                echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"slider_option\">
\t\t\t\t\t\t\t\t\t<div class = \"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                // line 607
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-slide_title\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_desc"), "method");
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image"), "method");
                echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 611
                echo (($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "thumb", array())) ? ($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "thumb", array())) : ($this->getAttribute($context["module"], "thumb", array())));
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo (($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "thumb", array())) ? ($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "thumb", array())) : ($this->getAttribute($context["module"], "thumb", array())));
                echo " \" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
                // line 613
                echo (($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "image", array())) ? ($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "image", array())) : (""));
                echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 616
                if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "image", array())) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                    // line 617
                    echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "image", array());
                    echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 619
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                // line 622
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link\"> <span data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_link_desc"), "method");
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_link"), "method");
                echo "  </span> </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"slide_link\" value=\"";
                // line 625
                echo (($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "url", array())) ? ($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "url", array())) : (""));
                echo "\" id=\"input-link\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                // line 630
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-slide_status\"> <span data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_slide_desc"), "method");
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
                echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"slide_status\" id=\"input-slide_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 634
                if (($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "status", array()) && $this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), "status", array()))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    // line 635
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                    // line 636
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 637
                    echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                    // line 638
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 639
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                    echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 640
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class = \"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 648
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#language";
                    // line 650
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                    // line 651
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo " \" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 652
                    echo $this->getAttribute($context["language"], "name", array());
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t";
                // line 658
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language";
                    // line 659
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                    // line 661
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-slide_title\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slide_title_desc"), "method");
                    echo " \">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slide_title"), "method");
                    echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\"   name=\"slide_description[";
                    // line 664
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][slide_title]\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slide_title"), "method");
                    echo " \" id=\"input-slide_title-";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"slide_description[";
                    // line 665
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][language_id]\" value=\"";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 667
                    if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slide_title", array())) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                        // line 668
                        echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slide_title", array());
                        echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 670
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                    // line 673
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-caption\"> <span data-toggle=\"tooltip\" title=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_caption_desc"), "method");
                    echo " \">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_caption"), "method");
                    echo "  </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"slide_description[";
                    // line 676
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][slide_caption]\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_caption"), "method");
                    echo " \" id=\"input-slide_caption-";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "caption", array())) ? ($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "caption", array())) : (""));
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
                    // line 681
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo " \"> <span data-toggle=\"tooltip\" title=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description_desc"), "method");
                    echo " \">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description"), "method");
                    echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"slide_description[";
                    // line 684
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "][slide_desciption]\"  id=\"input-slide_desciption-";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "\" class=\"form-control\" data-toggle=\"summernote\">";
                    echo (($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) ? ($this->getAttribute($this->getAttribute((isset($context["slide_description"]) ? $context["slide_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 690
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"slidesContent\" class=\"col-md-12\" style=\"border:#ccc 1px solid; padding:10px; background:#f5f5f5\">
\t\t\t\t\t\t\t\t\t\t<h3 style=\"text-align:center;background:#4e9e41; color:#fff; padding: 10px;font-weight:bold\">";
                // line 693
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "label_listslide"), "method");
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<div id=\"slides\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 696
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                    // line 697
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"slides_";
                    echo $this->getAttribute($context["slide"], "id", array());
                    echo "\" class=\"panel\" style=\"border:#ccc 1px solid; padding:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-arrows \"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 703
                    echo $this->getAttribute($context["slide"], "image", array());
                    echo "\" alt=\"\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t#";
                    // line 707
                    echo $this->getAttribute($context["slide"], "id", array());
                    echo " - ";
                    echo $this->getAttribute($context["slide"], "title", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group-action pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 710
                    if ($this->getAttribute($context["slide"], "status", array())) {
                        // line 711
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 712
                        echo (isset($context["link"]) ? $context["link"] : null);
                        echo "&slide_id=";
                        echo $this->getAttribute($context["slide"], "id", array());
                        echo "&tab=slide&module_id=";
                        echo $this->getAttribute($context["module"], "moduleid", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 717
                        echo (isset($context["link"]) ? $context["link"] : null);
                        echo "&slide_id=";
                        echo $this->getAttribute($context["slide"], "id", array());
                        echo "&tab=slide&module_id=";
                        echo $this->getAttribute($context["module"], "moduleid", array());
                        echo "&delete=1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 722
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 727
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 732
            echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 737
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 738
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t  
        </form>\t\t
      </div>
    </div>

  \t</div>
 
\t";
        // line 749
        if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
            echo " 
\t<script>
\t  \$(function() {
\t    \$(\"#slides\").sortable({
\t\t\tupdate: function(event, ui) {        
\t\t\tvar arr = \$(this).sortable('toArray');
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/so_home_slider/sortposition&user_token=";
            // line 756
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&sortarray='+arr,
\t\t\t\tdataType: 'json'
\t\t\t});
\t\t  }
\t\t});
\t    \$( \"#slides\" ).disableSelection();
\t  });
\t  </script> 
\t";
        }
        // line 765
        echo "  
<script type=\"text/javascript\">
\t
\t";
        // line 768
        if (($this->getAttribute((isset($context["_GET"]) ? $context["_GET"] : null), "tab", array()) && ($this->getAttribute((isset($context["_GET"]) ? $context["_GET"] : null), "tab", array()) == "slide"))) {
            // line 769
            echo "\t\t\$('#so_youtech a:last').tab('show');
\t";
        } else {
            // line 770
            echo " 
\t\t\$('#so_youtech a:first').tab('show');
\t";
        }
        // line 773
        echo "
\t\$('#language a:first').tab('show');
\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')
\t{
\t\t\$('#input-category_depth_form').hide();
\t}else
\t{
\t\t\$('#input-category_depth_form').show();
\t}

\t\$(\"input[name='child_category']:radio\").change(function(){
\t\tif(\$(this).val() == '0')
\t\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t}
\t});

\t\$('#language_head-name').change(function(){
\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t_input.removeClass('hide');
\t});
\t\t
\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
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
\t</script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 822
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 823
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
        // line 839
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 842
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
        // line 854
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/so_home_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1980 => 854,  1965 => 842,  1959 => 839,  1940 => 823,  1934 => 822,  1883 => 773,  1878 => 770,  1874 => 769,  1872 => 768,  1867 => 765,  1855 => 756,  1845 => 749,  1833 => 739,  1827 => 738,  1825 => 737,  1818 => 732,  1811 => 727,  1801 => 722,  1789 => 717,  1777 => 712,  1774 => 711,  1772 => 710,  1764 => 707,  1757 => 703,  1747 => 697,  1743 => 696,  1737 => 693,  1732 => 690,  1716 => 684,  1705 => 681,  1692 => 676,  1683 => 673,  1679 => 670,  1674 => 668,  1670 => 667,  1663 => 665,  1653 => 664,  1644 => 661,  1640 => 659,  1634 => 658,  1630 => 656,  1620 => 652,  1612 => 651,  1608 => 650,  1601 => 648,  1591 => 640,  1586 => 639,  1582 => 638,  1579 => 637,  1574 => 636,  1570 => 635,  1566 => 634,  1556 => 630,  1549 => 625,  1540 => 622,  1536 => 619,  1531 => 617,  1527 => 616,  1521 => 613,  1514 => 611,  1504 => 607,  1500 => 604,  1498 => 603,  1493 => 599,  1488 => 597,  1484 => 596,  1479 => 594,  1470 => 590,  1467 => 589,  1460 => 583,  1455 => 582,  1451 => 580,  1446 => 579,  1441 => 577,  1436 => 574,  1431 => 573,  1427 => 571,  1422 => 570,  1417 => 568,  1407 => 563,  1404 => 562,  1397 => 557,  1388 => 554,  1381 => 549,  1372 => 546,  1370 => 545,  1368 => 544,  1358 => 535,  1353 => 534,  1349 => 532,  1344 => 531,  1339 => 529,  1334 => 526,  1329 => 525,  1325 => 523,  1320 => 522,  1315 => 520,  1305 => 516,  1298 => 510,  1293 => 509,  1289 => 507,  1284 => 506,  1279 => 504,  1274 => 501,  1269 => 500,  1265 => 498,  1260 => 497,  1255 => 495,  1245 => 491,  1237 => 484,  1232 => 483,  1228 => 481,  1223 => 480,  1218 => 478,  1213 => 475,  1208 => 474,  1204 => 472,  1199 => 471,  1194 => 469,  1184 => 465,  1177 => 459,  1164 => 457,  1161 => 456,  1157 => 455,  1147 => 451,  1141 => 446,  1128 => 444,  1125 => 443,  1121 => 442,  1111 => 438,  1103 => 431,  1098 => 430,  1094 => 428,  1089 => 427,  1084 => 425,  1079 => 422,  1074 => 421,  1070 => 419,  1065 => 418,  1060 => 416,  1050 => 412,  1043 => 406,  1038 => 405,  1034 => 403,  1029 => 402,  1024 => 400,  1019 => 397,  1014 => 396,  1010 => 394,  1005 => 393,  1000 => 391,  990 => 387,  985 => 383,  980 => 382,  976 => 381,  971 => 379,  962 => 376,  957 => 372,  952 => 371,  948 => 370,  943 => 368,  934 => 365,  927 => 359,  922 => 358,  918 => 357,  915 => 356,  910 => 355,  906 => 354,  902 => 353,  892 => 349,  887 => 345,  882 => 344,  878 => 343,  873 => 341,  864 => 338,  857 => 332,  852 => 331,  848 => 330,  845 => 329,  840 => 328,  836 => 327,  832 => 326,  822 => 322,  819 => 320,  817 => 319,  809 => 312,  804 => 311,  800 => 310,  795 => 308,  786 => 304,  783 => 303,  779 => 300,  774 => 298,  770 => 297,  765 => 295,  756 => 291,  753 => 290,  750 => 288,  748 => 287,  738 => 278,  726 => 277,  721 => 276,  717 => 275,  707 => 270,  704 => 269,  697 => 263,  685 => 262,  681 => 261,  675 => 260,  665 => 255,  661 => 253,  654 => 248,  642 => 247,  637 => 246,  633 => 245,  623 => 240,  619 => 238,  612 => 233,  600 => 232,  595 => 231,  591 => 230,  581 => 225,  577 => 223,  570 => 218,  558 => 217,  553 => 216,  549 => 215,  539 => 210,  536 => 209,  528 => 202,  516 => 201,  511 => 200,  507 => 199,  497 => 194,  494 => 193,  487 => 188,  478 => 184,  475 => 183,  473 => 182,  470 => 180,  466 => 177,  459 => 173,  455 => 171,  453 => 170,  446 => 166,  438 => 161,  430 => 156,  422 => 151,  411 => 142,  406 => 140,  402 => 139,  399 => 138,  394 => 137,  390 => 136,  386 => 135,  376 => 131,  369 => 125,  364 => 123,  360 => 122,  357 => 121,  352 => 120,  348 => 119,  344 => 118,  334 => 114,  329 => 110,  324 => 108,  320 => 107,  315 => 104,  306 => 102,  302 => 101,  296 => 100,  290 => 96,  273 => 93,  269 => 92,  263 => 91,  259 => 90,  250 => 87,  245 => 83,  240 => 81,  236 => 80,  229 => 78,  221 => 75,  217 => 73,  212 => 70,  208 => 68,  200 => 66,  195 => 64,  188 => 63,  186 => 62,  178 => 56,  170 => 54,  164 => 51,  156 => 50,  150 => 49,  143 => 48,  141 => 47,  131 => 46,  126 => 43,  122 => 41,  116 => 38,  111 => 35,  104 => 31,  97 => 28,  95 => 27,  92 => 26,  84 => 22,  82 => 21,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
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
/* */
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
/* 								<input type="hidden" name="tab_module" id="tab_module" value=""/>*/
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
/* 											<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id}}" value="{{ module_description[language.language_id].head_name ? module_description[language.language_id].head_name : '' }}"  class="form-control {{ i > 1 ? 'hide ' : 'first-name '}}" />*/
/* 											*/
/* 										{% endfor %}*/
/* 										 */
/* 									</div>*/
/* 									<div class="col-sm-3">*/
/* 										<select  class="form-control" id="language_head-name">*/
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
/* 									<a href="#so_module_module" data-toggle="tab" onclick="$('#tab_module').val('add-module')">{{ objlang.get('entry_module' )}}	</a>*/
/* 								</li>*/
/* 								*/
/* 								<li>*/
/* 									<a href="#so_module_image_option" data-toggle="tab" onclick="$('#tab_module').val('add-module')">*/
/* 										{{ objlang.get('entry_image_option' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#effect_option" data-toggle="tab" onclick="$('#tab_module').val('add-module')">*/
/* 										{{ objlang.get('entry_effect_option' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#advanced_option" data-toggle="tab" onclick="$('#tab_module').val('add-module')">*/
/* 										{{ objlang.get('entry_advanced_option' )}}	*/
/* 									</a>*/
/* 								</li>*/
/* */
/* 								{% if selectedid %}*/
/* 								<li>*/
/* 									<a href="#slider_option" data-toggle="tab" onclick="$('#tab_module').val('add-slide')">*/
/* 										{{ objlang.get('entry_slider_option' )}}									*/
/* 									</a>*/
/* 								</li>*/
/* 								{% endif %}*/
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
/* 									<div class="form-group"> {# Open link  #}*/
/* 										<label class="col-sm-3 control-label" for="input-open_link">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_open_link_desc') }} ">{{ objlang.get('entry_open_link') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="item_link_target" id="input-open_link" class="form-control">*/
/* 													{% for option_id, option_value in item_link_targets %}*/
/* 														{% set selected = option_id  == module.item_link_target ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<div class="form-group"> {# Columns 1  #}*/
/* 										<label class="col-sm-3 control-label" for="input-column_1200">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column0_desc') }} ">{{ objlang.get('entry_column') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column0" id="input-column_1200" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column0 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Columns 2  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_992">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column1_desc') }} ">{{ objlang.get('entry_column') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column1" id="input-column_992" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column1 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Columns 3  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_768_991">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column2_desc') }} ">{{ objlang.get('entry_column') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column2" id="input-column_768_992" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column2 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Columns 4  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_480_767">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column3_desc') }} ">{{ objlang.get('entry_column') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column3" id="input-column_480_767" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %} */
/* 														{% set selected = option_id  == module.nb_column3 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group "> {# Columns 5  #}*/
/* 										<label class="col-sm-3 control-label" for="input-column_0_479">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column4_desc') }} ">{{ objlang.get('entry_column') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column4" id="input-column_0_479" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column4 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							*/
/* 							*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="so_module_image_option">  {# Image Option #}*/
/* 									*/
/* 									<div class="form-group"> {# Image width #}*/
/* 										<label class="col-sm-3 control-label" for="input-width">*/
/* 											<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }} ">{{ objlang.get('entry_width') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="width" value="{{ module.width }}" id="input-width" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.width %} */
/* 											<div class="text-danger col-sm-12">{{ error.width }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Image height #}*/
/* 										<label class="col-sm-3 control-label" for="input-height">*/
/* 											<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }} ">{{ objlang.get('entry_height') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="height" value="{{ module.height }}" id="input-height" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.height %} */
/* 											<div class="text-danger col-sm-12">{{ error.height }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* */
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="effect_option"> {# <!-- Effect Options -->  #}*/
/* 									*/
/* 									<div class="form-group"> {# <!-- autoplay -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplay"> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplay_desc') }} ">{{ objlang.get('entry_autoplay') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="autoplay" id="input-autoplay" class="form-control">*/
/* 													{% if module.autoplay %} */
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 													{% else %}   */
/* 														<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 													{% endif %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- autoplayTimeout -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplayTimeout"> <b style="color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplayTimeout_desc') }} ">{{ objlang.get('entry_autoplayTimeout') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="autoplayTimeout" value="{{ module.autoplayTimeout }}" id="input-autoplayTimeout" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.autoplayTimeout %} */
/* 												<div class="text-danger col-sm-12">{{ error.autoplayTimeout }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- autoplayHoverPause -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplayHoverPause"> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplayHoverPause_desc') }} ">{{ objlang.get('entry_autoplayHoverPause') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="autoplayHoverPause" id="input-autoplayHoverPause" class="form-control">*/
/* 													{% if module.autoplayHoverPause %} */
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 													{% else %}   */
/* 														<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 													{% endif %}  */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- autoplaySpeed -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplaySpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplaySpeed_desc') }} ">{{ objlang.get('entry_autoplaySpeed') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="autoplaySpeed" value="{{ module.autoplaySpeed }}" id="input-autoplaySpeed" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.autoplaySpeed %} */
/* 												<div class="text-danger col-sm-12">{{ error.autoplaySpeed }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>									*/
/* 									<div class="form-group"> {# <!-- startPosition -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-startPosition"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_startPosition_desc') }} ">{{ objlang.get('entry_startPosition') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="startPosition" value="{{ module.startPosition }}" id="input-startPosition" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.startPosition %} */
/* 												<div class="text-danger col-sm-12">{{ error.startPosition }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- mouseDrag -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-mouseDrag"> <span data-toggle="tooltip" title="{{ objlang.get('entry_mouseDrag_desc') }} ">{{ objlang.get('entry_mouseDrag') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.mouseDrag %} */
/* 														<input type="radio" name="mouseDrag" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="mouseDrag" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.mouseDrag %} */
/* 														<input type="radio" name="mouseDrag" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="mouseDrag" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- touchDrag -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-touchDrag"> <span data-toggle="tooltip" title="{{ objlang.get('entry_touchDrag_desc') }} ">{{ objlang.get('entry_touchDrag') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.touchDrag %} */
/* 														<input type="radio" name="touchDrag" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="touchDrag" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.touchDrag %} */
/* 														<input type="radio" name="touchDrag" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="touchDrag" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>	*/
/* */
/* 									<div class="form-group"> {# <!--animateOut-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-animateOut"> <span data-toggle="tooltip" title="{{ objlang.get('entry_animateOut_desc') }} ">{{ objlang.get('entry_animateOut') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="animateOut" id="input-animateOut" class="form-control">*/
/* 													{% for option_id, option_value in animateOuts %}*/
/* 														{%  set selected = (option_id  ==  module.animateOut) ? 'selected' : '' %}*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--animateIn-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-animateIn"> <span data-toggle="tooltip" title="{{ objlang.get('entry_animateIn_desc') }} ">{{ objlang.get('entry_animateIn') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="animateIn" id="input-animateIn" class="form-control">*/
/* 													{% for option_id, option_value in animateIns %}*/
/* 														{%  set selected = (option_id  ==  module.animateIn) ? 'selected' : '' %}*/
/* 															<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 														{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!-- dots -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-dots"> <span data-toggle="tooltip" title="{{ objlang.get('entry_dots_desc') }} ">{{ objlang.get('entry_dots') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.dots %} */
/* 														<input type="radio" name="dots" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="dots" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.dots %} */
/* 														<input type="radio" name="dots" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="dots" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<div class="form-group"> {# <!-- Loop -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-loop"> <span data-toggle="tooltip" title="{{ objlang.get('entry_loop_desc') }} ">{{ objlang.get('entry_loop') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.loop %} */
/* 														<input type="radio" name="loop" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="loop" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.loop %} */
/* 														<input type="radio" name="loop" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="loop" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- navs -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-navs"> <span data-toggle="tooltip" title="{{ objlang.get('entry_navs_desc') }} ">{{ objlang.get('entry_navs') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.navs %} */
/* 														<input type="radio" name="navs" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="navs" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.navs %} */
/* 														<input type="radio" name="navs" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="navs" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									*/
/* 								</div>	*/
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
/* 										<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }} ">{{ objlang.get('entry_post_text') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }}</textarea>*/
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
/* 								{% if selectedid %}*/
/* 								<div class="tab-pane" id="slider_option">*/
/* 									<div class = "col-md-12">*/
/* 										<div class="form-group"> {# <!-- Image slide-->  #}*/
/* 											<label class="col-sm-2 control-label" for="input-slide_title"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_image_desc') }} ">{{ objlang.get('entry_image') }}  </span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="col-sm-5">*/
/* 													<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail">*/
/* 													<img src="{{ slide_description.thumb ? slide_description.thumb  : module.thumb }}" alt="" title="" data-placeholder="{{ slide_description.thumb ? slide_description.thumb : module.thumb }} " />*/
/* 													</a>*/
/* 													<input type="hidden" name="image" value="{{ slide_description.image ? slide_description.image : '' }}" id="input-image" />*/
/* 													*/
/* 												</div>*/
/* 												{% if error.image %} */
/* 													<div class="text-danger col-sm-12">{{ error.image }} </div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group"> {# <!--Link -->  #}*/
/* 											<label class="col-sm-2 control-label" for="input-link"> <span data-toggle="tooltip" title="{{ objlang.get('entry_link_desc') }} ">{{ objlang.get('entry_link') }}  </span> </label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="slide_link" value="{{ slide_description.url ? slide_description.url }}" id="input-link" class="form-control" />*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group"> {# <!--Status slide -->  #}*/
/* 											<label class="col-sm-2 control-label" for="input-slide_status"> <span data-toggle="tooltip" title="{{ objlang.get('entry_status_slide_desc') }} ">{{ objlang.get('entry_status') }}  </span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<div class="col-sm-5">*/
/* 													<select name="slide_status" id="input-slide_status" class="form-control">*/
/* 														{% if slide_description.status  and  slide_description.status %} */
/* 															<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 															<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 														{% else %}   */
/* 															<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 															<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 														{% endif %} */
/* 													</select>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class = "col-md-12">*/
/* 										<ul class="nav nav-tabs" id="language">*/
/* 											{% for language in languages %} */
/* 											<li>*/
/* 												<a href="#language{{ language.language_id }}" data-toggle="tab">*/
/* 													<img src="language/{{ language.code}}/{{ language.code }}.png" title="{{ language.name }} " />*/
/* 													{{ language.name }} */
/* 												</a>*/
/* 											</li>*/
/* 											 {% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 										{% for language in languages %} */
/* 											<div class="tab-pane" id="language{{ language.language_id }}">*/
/* 												<div class="form-group"> {# <!-- Slide title-->  #}*/
/* 												<label class="col-sm-2 control-label" for="input-slide_title"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_slide_title_desc') }} ">{{ objlang.get('entry_slide_title') }}  </span></label>*/
/* 													<div class="col-sm-10">*/
/* 														<div class="col-sm-5">*/
/* 															<input type="text"   name="slide_description[{{language.language_id }}][slide_title]" placeholder="{{ objlang.get('entry_slide_title') }} " id="input-slide_title-{{ language.language_id }}" value="{{ slide_description[language.language_id].title  ? slide_description[language.language_id].title : '' }}" class="form-control" />*/
/* 															<input type="hidden" name="slide_description[{{ language.language_id }}][language_id]" value="{{ language.language_id }}" />*/
/* 														</div>*/
/* 														{% if error.slide_title %} */
/* 															<div class="text-danger col-sm-12">{{ error.slide_title }} </div>*/
/* 														{% endif %}*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="form-group"> {# <!--Caption -->  #}*/
/* 													<label class="col-sm-2 control-label" for="input-caption"> <span data-toggle="tooltip" title="{{ objlang.get('entry_caption_desc') }} ">{{ objlang.get('entry_caption') }}  </span> </label>*/
/* 													<div class="col-sm-10">*/
/* 														<div class="col-sm-5">*/
/* 															<input type="text" name="slide_description[{{ language.language_id }}][slide_caption]" placeholder="{{ objlang.get('entry_caption') }} " id="input-slide_caption-{{ language.language_id }}" value="{{ slide_description[language.language_id].caption ? slide_description[language.language_id].caption : '' }}" class="form-control" />*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="form-group"> {# <!--Description -->  #}*/
/* 													<label class="col-sm-2 control-label" for="input-description{{ language.language_id }} "> <span data-toggle="tooltip" title="{{ objlang.get('entry_description_desc') }} ">{{ objlang.get('entry_description') }}  </span></label>*/
/* 													<div class="col-sm-10">*/
/* 														<div class="col-sm-12">*/
/* 															<textarea name="slide_description[{{ language.language_id }}][slide_desciption]"  id="input-slide_desciption-{{ language.language_id }}" class="form-control" data-toggle="summernote">{{ slide_description[language.language_id].description ? slide_description[language.language_id].description: ''}}</textarea>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div id="slidesContent" class="col-md-12" style="border:#ccc 1px solid; padding:10px; background:#f5f5f5">*/
/* 										<h3 style="text-align:center;background:#4e9e41; color:#fff; padding: 10px;font-weight:bold">{{ objlang.get('label_listslide')}}</h3>*/
/* 										<div id="slides">*/
/* */
/* 											{% for slide in slides %}*/
/* 												<div id="slides_{{ slide.id}}" class="panel" style="border:#ccc 1px solid; padding:10px;">*/
/* 													<div class="row">*/
/* 														<div class="col-lg-1">*/
/* 															<span><i class="fa fa-arrows "></i></span>*/
/* 														</div>*/
/* 														<div class="col-md-3">*/
/* 															<img src="{{ slide.image}}" alt="" class="img-thumbnail" />*/
/* 														</div>*/
/* 														<div class="col-md-8">*/
/* 															<h4 class="pull-left">*/
/* 																#{{ slide.id}} - {{ slide.title}}*/
/* 															</h4>*/
/* 															<div class="btn-group-action pull-right">*/
/* 																{% if slide.status %}*/
/* 																<a class="btn btn-default"*/
/* 																	href="{{ link}}&slide_id={{ slide.id}}&tab=slide&module_id={{ module.moduleid}}">*/
/* 																	<i class="fa fa-edit"></i>*/
/* 																	Edit*/
/* 																</a>*/
/* 																<a class="btn btn-default"*/
/* 																	href="{{ link }}&slide_id={{ slide.id}}&tab=slide&module_id={{ module.moduleid}}&delete=1">*/
/* 																	<i class="fa fa-trash"></i>*/
/* 																	Delete*/
/* 																</a>*/
/* 																{% endif %}*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 								</div>*/
/* 								{% endif %}*/
/* */
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 						{% set module_row = module_row + 1 %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 		  */
/*         </form>		*/
/*       </div>*/
/*     </div>*/
/* */
/*   	</div>*/
/*  */
/* 	{% if selectedid %} */
/* 	<script>*/
/* 	  $(function() {*/
/* 	    $("#slides").sortable({*/
/* 			update: function(event, ui) {        */
/* 			var arr = $(this).sortable('toArray');*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/module/so_home_slider/sortposition&user_token={{user_token}}&sortarray='+arr,*/
/* 				dataType: 'json'*/
/* 			});*/
/* 		  }*/
/* 		});*/
/* 	    $( "#slides" ).disableSelection();*/
/* 	  });*/
/* 	  </script> */
/* 	{% endif %}*/
/*   */
/* <script type="text/javascript">*/
/* 	*/
/* 	{% if _GET.tab  and  _GET.tab =="slide" %}*/
/* 		$('#so_youtech a:last').tab('show');*/
/* 	{% else %} */
/* 		$('#so_youtech a:first').tab('show');*/
/* 	{% endif %}*/
/* */
/* 	$('#language a:first').tab('show');*/
/* 	if($("input[name='child_category']:radio:checked").val() == '0')*/
/* 	{*/
/* 		$('#input-category_depth_form').hide();*/
/* 	}else*/
/* 	{*/
/* 		$('#input-category_depth_form').show();*/
/* 	}*/
/* */
/* 	$("input[name='child_category']:radio").change(function(){*/
/* 		if($(this).val() == '0')*/
/* 		{*/
/* 			$('#input-category_depth_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-category_depth_form').show();*/
/* 		}*/
/* 	});*/
/* */
/* 	$('#language_head-name').change(function(){*/
/* 		var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 		$('[id^="input-head-name-"]').addClass('hide');*/
/* 		_input.removeClass('hide');*/
/* 	});*/
/* 		*/
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head-name"]').val($(this).val());*/
/* 		});*/
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
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
/* 	</script>*/
/* 	<script type="text/javascript">*/
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
/* 			var success_remove = '{{success_remove}}';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{linkremove}}',*/
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
/* */
