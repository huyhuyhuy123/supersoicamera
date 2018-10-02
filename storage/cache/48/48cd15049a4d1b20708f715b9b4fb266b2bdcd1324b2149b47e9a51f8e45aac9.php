<?php

/* extension/module/so_megamenu.twig */
class __TwigTemplate_41869197e130102ab3dfe020eab71f06298237b040b6a1ef623161f0885778fb extends Twig_Template
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
    <div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t  \t<div class=\"pull-left\">
\t\t\t  \t<h1>";
        // line 6
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t\t  \t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t  \t</ul>
\t\t\t</div>
\t  \t</div>
\t</div>
    <div class=\"container-fluid\" id=\"megamenu\">
    \t";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "\t    \t<div class=\"alert alert-danger\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
\t    ";
        } elseif (        // line 18
(isset($context["success"]) ? $context["success"] : null)) {
            // line 19
            echo "\t    \t<div class=\"alert alert-success\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
\t    ";
        }
        // line 21
        echo "
\t    <div class=\"panel panel-default\">
\t\t\t<form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"rows\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li ";
        // line 27
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link_add"]) ? $context["link_add"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span>";
        echo (isset($context["button_add_module"]) ? $context["button_add_module"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 28
        $context["i"] = 1;
        // line 29
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo (isset($context["link_add"]) ? $context["link_add"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 32
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 35
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 36
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"rows megacontent\">
\t\t\t\t\t\t<div class=\"col-md-12 col-xs-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"background clearfix\">
\t\t\t\t\t\t\t\t";
        // line 43
        if ((isset($context["moduleid"]) ? $context["moduleid"] : null)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t<div class=\"left col-md-4 col-xs-12 col-sm-6 \">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "&action=create\" class=\"btn btn-primary\" > ";
            echo (isset($context["text_creat_new_item"]) ? $context["text_creat_new_item"] : null);
            echo "</a>

\t\t\t\t\t\t\t\t\t\t<a id=\"nestable-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-action=\"expand-all\" class=\"btn btn-primary\">";
            // line 48
            echo (isset($context["text_expand_all"]) ? $context["text_expand_all"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-action=\"collapse-all\" class=\"btn btn-primary\">";
            // line 49
            echo (isset($context["text_collapse_all"]) ? $context["text_collapse_all"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            echo (isset($context["nestable_list"]) ? $context["nestable_list"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<div id='sortDBfeedback' style=\"padding: 10px 0px 0px 0px\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t\t\t\t";
        // line 56
        if ((((isset($context["action_type"]) ? $context["action_type"] : null) == "create") || ((isset($context["action_type"]) ? $context["action_type"] : null) == "edit"))) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t<div class=\"right col-md-8 col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-back\" class=\"button-save\" value=\"\" title=\"Configuration\"><i class=\"fa fa-cog\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            if (((isset($context["action_type"]) ? $context["action_type"] : null) == "create")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-create\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 62
(isset($context["action_type"]) ? $context["action_type"] : null) == "edit")) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-edit\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-save\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 68
            if (((isset($context["action_type"]) ? $context["action_type"] : null) == "edit")) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t\t<h4>";
                echo (isset($context["text_edit_item"]) ? $context["text_edit_item"] : null);
                echo " ";
                echo (isset($context["edit"]) ? $context["edit"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 70
                echo (isset($context["edit"]) ? $context["edit"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t<h4>";
                echo (isset($context["text_creat_new_item"]) ? $context["text_creat_new_item"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 75
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            $context["i"] = 0;
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"name[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_description_name"]) ? $context["entry_description_name"] : null);
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["name"]) ? $context["name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["name"]) ? $context["name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 88
            echo (isset($context["text_class_menu"]) ? $context["text_class_menu"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_menu\" value=\"";
            // line 90
            echo (isset($context["class_menu"]) ? $context["class_menu"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4 class=\"button_parent_config\">";
            // line 94
            echo (isset($context["text_parent_config"]) ? $context["text_parent_config"] : null);
            echo "</h4>(";
            echo (isset($context["text_parent_item"]) ? $context["text_parent_item"] : null);
            echo ")
\t\t\t\t\t\t\t\t\t\t<div id=\"text_parent_config\" class=\"collapse\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 97
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            $context["i"] = 0;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_description_name"]) ? $context["entry_description_name"] : null);
                echo "\" id=\"input-head-des-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["description"]) ? $context["description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"des_language\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 111
            echo "Icon Thumb";
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 112
            echo (isset($context["src_icon"]) ? $context["src_icon"] : null);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"  /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
            // line 113
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 117
            echo (isset($context["text_label_item"]) ? $context["text_label_item"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"label_item\" value=\"";
            // line 119
            echo (isset($context["label_item"]) ? $context["label_item"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 124
            echo (isset($context["text_icon_font"]) ? $context["text_icon_font"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"icon_font\" value=\"";
            // line 126
            echo (isset($context["icon_font"]) ? $context["icon_font"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 131
            echo (isset($context["text_type_link"]) ? $context["text_type_link"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"type_link\" class=\"type_link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            if (((isset($context["type_link"]) ? $context["type_link"] : null) == 1)) {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Url</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Url</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input  type_link_url clearfix \" ";
            // line 143
            if (((isset($context["type_link"]) ? $context["type_link"] : null) == 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Url</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 145
            echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url", array());
            echo "\" name=\"link[url]\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input type_link_category clearfix\" ";
            // line 148
            if (((isset($context["type_link"]) ? $context["type_link"] : null) != 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 149
            echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"link[category]\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"\">";
            // line 151
            echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t\t<option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" ";
                if (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "category", array()) == $this->getAttribute($context["category"], "category_id", array()))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 159
            echo (isset($context["text_link_in_new_window"]) ? $context["text_link_in_new_window"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"new_window\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 161
            if (((isset($context["new_window"]) ? $context["new_window"] : null) == 1)) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 163
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 166
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 172
            echo (isset($context["text_status"]) ? $context["text_status"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 174
            if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 176
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 179
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 185
            echo (isset($context["text_position"]) ? $context["text_position"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 187
            if (((isset($context["position"]) ? $context["position"] : null) == 1)) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo (isset($context["text_left"]) ? $context["text_left"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 189
                echo (isset($context["text_right"]) ? $context["text_right"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                echo (isset($context["text_left"]) ? $context["text_left"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 192
                echo (isset($context["text_right"]) ? $context["text_right"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 198
            echo (isset($context["text_submenu_width"]) ? $context["text_submenu_width"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"submenu_width\" value=\"";
            // line 199
            echo (isset($context["submenu_width"]) ? $context["submenu_width"] : null);
            echo "\"> <div>";
            echo (isset($context["text_example"]) ? $context["text_example"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 203
            echo (isset($context["text_display_submenu_on"]) ? $context["text_display_submenu_on"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 205
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 0)) {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 211
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 2)) {
                // line 212
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Hover intent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Hover intent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 217
            if (((isset($context["display_submenu"]) ? $context["display_submenu"] : null) == 1)) {
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Click</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Click</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"button_content_config\">";
            // line 225
            echo (isset($context["text_content_config"]) ? $context["text_content_config"] : null);
            echo "</h4>(";
            echo (isset($context["text_content_item"]) ? $context["text_content_item"] : null);
            echo ")
\t\t\t\t\t\t\t\t\t\t<div id=\"text_content_config\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 229
            echo (isset($context["text_content_width"]) ? $context["text_content_width"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content_width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["i"];
                echo "\" ";
                if (($context["i"] == (isset($context["content_width"]) ? $context["content_width"] : null))) {
                    echo " ";
                    echo "selected=\"selected\"";
                    echo " ";
                }
                echo ">";
                echo $context["i"];
                echo "/12</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 238
            echo (isset($context["text_content_type"]) ? $context["text_content_type"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 240
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 0)) {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">HTML</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">HTML</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 246
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 1)) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Product</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Product</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 252
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 2)) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 255
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 257
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 258
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 3)) {
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Manufacture</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">Manufacture</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 263
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 264
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 4)) {
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Image</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected=\"selected\">Image</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 269
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 270
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 5)) {
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Subcategory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 273
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\" selected=\"selected\">Subcategory</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 275
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 6)) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">Product List</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 278
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\" selected=\"selected\">Product List</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"content_type0\"";
            // line 282
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 0)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type content_type_html\">
\t\t\t\t\t\t\t\t\t\t\t<h5 style=\"margin-top:20px\">HTML</h5>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"language\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#content_html_";
                // line 288
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 289
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["lang_id"] = $this->getAttribute($context["language"], "language_id", array());
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"content_html_";
                // line 298
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"content_html tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"content[html][text][";
                // line 299
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" id=\"content_html_text_";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control summernote\" data-toggle=\"summernote\">";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "html", array(), "array"), "text", array(), "array"), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "html", array(), "array"), "text", array(), "array"), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) : (""));
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type1\" ";
            // line 306
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 1)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Products:<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"content[product][id]\" value=\"";
            // line 309
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "product", array()), "id", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"product_autocomplete\" name=\"content[product][name]\" value=\"";
            // line 310
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "product", array()), "name", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type3\" ";
            // line 314
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 3)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Manufacture:<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"manufacture_autocomplete\" name=\"manufacture_autocomplete\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 319
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array(), "array"), "id", array(), "array")) {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "id", array()));
                foreach ($context['_seq'] as $context["key"] => $context["id_category"]) {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
                    echo $context["id_category"];
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "name", array()), $context["key"], array(), "array");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"content[manufacture][name][]\" value=\"";
                    // line 322
                    echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "manufacture", array()), "name", array()), $context["key"], array(), "array");
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"content[manufacture][id][]\" value=\"";
                    // line 323
                    echo $context["id_category"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['id_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type4\" ";
            // line 331
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 4)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Image:</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-content\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 334
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "image_link", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "image_link", array())) : ((isset($context["src_image_default"]) ? $context["src_image_default"] : null)));
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"  /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"content[image][link]\" value=\"";
            // line 335
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "link", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "link", array())) : ((isset($context["image_default"]) ? $context["image_default"] : null)));
            echo "\" id=\"input-image-content\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\" >
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[image][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()) == 1) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()))) {
                // line 341
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 343
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 345
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 346
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()) != 0) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "image", array()), "show_title", array()))) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 349
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 351
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type5\" ";
            // line 355
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 5)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Category</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select  multiple name=\"content[subcategory][category][]\" style=\"height: 200px;width:200px\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<option value=\"\" ";
            // line 359
            if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()) != "") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()), 0, array(), "array") == ""))) {
                echo " ";
                echo "selected";
                echo " ";
            }
            echo ">";
            echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 361
                echo "\t\t\t\t\t\t\t\t\t\t\t\t  \t\t<option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" ";
                if ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array()) != "") && twig_in_filter($this->getAttribute($context["category"], "category_id", array()), $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "category", array())))) {
                    echo " ";
                    echo "selected";
                    echo " ";
                }
                echo ">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 1</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_1]\" value=\"";
            // line 367
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_1", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_1", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 2</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_2]\" value=\"";
            // line 371
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_2", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_2", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit Level 3</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[subcategory][limit_level_3]\" value=\"";
            // line 375
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_3", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "limit_level_3", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 380
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_title", array()) != 1)) {
                // line 381
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 383
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 385
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 386
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_title", array()) != 0)) {
                // line 387
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 389
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 391
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Image</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][show_image]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 396
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_image", array()) != 1)) {
                // line 397
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 399
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 401
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 402
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "show_image", array()) != 0)) {
                // line 403
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 405
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[subcategory][columns]\">
\t\t                                            ";
            // line 413
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 1)) {
                // line 414
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 416
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 418
            echo "\t\t                                            
\t\t                                            ";
            // line 419
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 2)) {
                // line 420
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 422
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 424
            echo "
\t\t                                            ";
            // line 425
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 3)) {
                // line 426
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 428
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 430
            echo "
\t\t                                            ";
            // line 431
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 4)) {
                // line 432
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 434
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 436
            echo "
\t\t                                            ";
            // line 437
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 5)) {
                // line 438
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 440
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 442
            echo "
\t\t                                            ";
            // line 443
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "columns", array()) != 6)) {
                // line 444
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 446
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 448
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    
\t\t                                    <div class=\"input clearfix\" id=\"submenu-type\">
\t\t                                        <p>Submenu type</p>
\t\t                                        <select name=\"content[subcategory][submenu]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 455
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 1)) {
                // line 456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 458
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 460
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 461
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 2)) {
                // line 462
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 464
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 466
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" ";
            // line 469
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu", array()) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " id=\"submenu-columns\">
\t\t                                    \t<p>Submenu columns</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[subcategory][submenu_columns]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 472
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 1)) {
                // line 473
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 475
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 477
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 478
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 2)) {
                // line 479
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 481
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 483
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 484
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 3)) {
                // line 485
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 487
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" selected=\"selected\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 489
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 490
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 4)) {
                // line 491
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 493
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\" selected=\"selected\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 495
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 496
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 5)) {
                // line 497
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 499
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\" selected=\"selected\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 501
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 502
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcategory", array()), "submenu_columns", array()) != 6)) {
                // line 503
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 505
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\" selected=\"selected\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 507
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"content_type6\" ";
            // line 511
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 6)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Limit</p>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"content[productlist][limit]\" value=\"";
            // line 514
            echo (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "limit", array())) ? ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "limit", array())) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Type</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[productlist][type]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 519
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "new")) {
                // line 520
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\">New</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 522
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"new\" selected=\"selected\">New</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 524
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 525
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "special")) {
                // line 526
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"special\">Special</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"special\" selected=\"selected\">Special</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 530
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 531
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "bestseller")) {
                // line 532
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bestseller\">Best Seller</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 534
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bestseller\" selected=\"selected\">Best Seller</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 536
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 537
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "type", array()) != "popular")) {
                // line 538
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"popular\">Popular</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 540
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"popular\" selected=\"selected\">Popular</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Show Title</p>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"content[productlist][show_title]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 547
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "show_title", array()) != 1)) {
                // line 548
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 550
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 552
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 553
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "show_title", array()) != 0)) {
                // line 554
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 556
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 558
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[productlist][col]\">
\t\t                                            ";
            // line 564
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 1)) {
                // line 565
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 567
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 569
            echo "
\t\t                                            ";
            // line 570
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 2)) {
                // line 571
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 573
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 575
            echo "
\t\t                                            ";
            // line 576
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 3)) {
                // line 577
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 579
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 581
            echo "
\t\t                                            ";
            // line 582
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 4)) {
                // line 583
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 585
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 587
            echo "
\t\t                                            ";
            // line 588
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 5)) {
                // line 589
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 591
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 593
            echo "
\t\t                                            ";
            // line 594
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "productlist", array()), "col", array()) != 6)) {
                // line 595
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 597
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 599
            echo "\t\t                                        </select>
\t\t                                    </div>                                        
\t\t\t\t\t\t\t\t\t\t</div>

\t\t                                <div id=\"content_type2\" ";
            // line 603
            if (((isset($context["content_type"]) ? $context["content_type"] : null) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " class=\"content_type\">
\t\t                                    <h5 style=\"margin-top:20px\">Categories</h5>
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Add categories<br><span style=\"font-size:11px;color:#808080\">(Autocomplete)</span></p>
\t\t                                        <input type=\"text\" id=\"categories_autocomplete\" value=\"\">
\t\t                                    </div>
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Sort categories</p>
\t\t                                        <div class=\"cf nestable-lists\">
\t\t                                            <div class=\"dd\" id=\"sort_categories\">
\t\t                                                <ol class=\"dd-list\">
\t\t                                                    ";
            // line 614
            echo (isset($context["list_categories"]) ? $context["list_categories"] : null);
            echo "
\t\t                                                </ol>
\t\t                                            </div>
\t\t                                            <input type=\"hidden\" id=\"sort_categories_data\" name=\"content[categories][categories]\" value=\"";
            // line 617
            echo ((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "categories", array()))) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "categories", array())));
            echo "\" />
\t\t                                        </div>
\t\t                                    </div>
\t\t                                    
\t\t                                    <div class=\"input clearfix\">
\t\t                                        <p>Columns</p>
\t\t                                        <select name=\"content[categories][columns]\">
\t\t                                            ";
            // line 624
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 1)) {
                // line 625
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 627
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 629
            echo "
\t\t                                            ";
            // line 630
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 2)) {
                // line 631
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 633
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 635
            echo "
\t\t                                            ";
            // line 636
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 3)) {
                // line 637
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 639
                echo "\t\t                                            <option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 641
            echo "
\t\t                                            ";
            // line 642
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 4)) {
                // line 643
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 645
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 647
            echo "
\t\t                                            ";
            // line 648
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 5)) {
                // line 649
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 651
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 653
            echo "
\t\t                                            ";
            // line 654
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "columns", array()) != 6)) {
                // line 655
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 657
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 659
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" id=\"submenu-type\">
\t\t                                        <p>Submenu type</p>
\t\t                                        <select name=\"content[categories][submenu]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 665
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 1)) {
                // line 666
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 668
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">Hover</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 670
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 671
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 2)) {
                // line 672
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 674
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">Visible</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 676
            echo "\t\t                                        </select>
\t\t                                    </div>

\t\t                                    <div class=\"input clearfix\" ";
            // line 679
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu", array()) != 2)) {
                echo " ";
                echo "style=\"display:none\"";
                echo " ";
            }
            echo " id=\"submenu-columns\">
\t\t                                    \t<p>Submenu columns</p>
\t\t                                    \t<select name=\"content[categories][submenu_columns]\">
\t\t                                            ";
            // line 682
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 1)) {
                // line 683
                echo "\t\t                                            \t<option value=\"1\">1</option>
\t\t                                            ";
            } else {
                // line 685
                echo "\t\t                                            \t<option value=\"1\" selected=\"selected\">1</option>
\t\t                                            ";
            }
            // line 687
            echo "
\t\t                                            ";
            // line 688
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 2)) {
                // line 689
                echo "\t\t                                            \t<option value=\"2\">2</option>
\t\t                                            ";
            } else {
                // line 691
                echo "\t\t                                            \t<option value=\"2\" selected=\"selected\">2</option>
\t\t                                            ";
            }
            // line 693
            echo "
\t\t                                            ";
            // line 694
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 3)) {
                // line 695
                echo "\t\t                                            \t<option value=\"3\">3</option>
\t\t                                            ";
            } else {
                // line 697
                echo "\t\t                                            \t<option value=\"3\" selected=\"selected\">3</option>
\t\t                                            ";
            }
            // line 699
            echo "
\t\t                                            ";
            // line 700
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 4)) {
                // line 701
                echo "\t\t                                            \t<option value=\"4\">4</option>
\t\t                                            ";
            } else {
                // line 703
                echo "\t\t                                            \t<option value=\"4\" selected=\"selected\">4</option>
\t\t                                            ";
            }
            // line 705
            echo "
\t\t                                            ";
            // line 706
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 5)) {
                // line 707
                echo "\t\t                                            \t<option value=\"5\">5</option>
\t\t                                            ";
            } else {
                // line 709
                echo "\t\t                                            \t<option value=\"5\" selected=\"selected\">5</option>
\t\t                                            ";
            }
            // line 711
            echo "
\t\t                                            ";
            // line 712
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), "submenu_columns", array()) != 6)) {
                // line 713
                echo "\t\t                                            \t<option value=\"6\">6</option>
\t\t                                            ";
            } else {
                // line 715
                echo "\t\t                                            \t<option value=\"6\" selected=\"selected\">6</option>
\t\t                                            ";
            }
            // line 717
            echo "\t\t                                    \t</select>
\t\t                            \t\t</div>
\t\t                    \t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t    \t\t\t\t";
        } else {
            // line 723
            echo "\t\t    \t\t\t\t\t<div class=\"right col-md-8 col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-close\" class=\"button-save\" value=\"\" title=\"Close\"><i class=\"fa fa-reply\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"button-save\" class=\"button-save\" value=\"\" title=\"Save\"><i class=\"fa fa-floppy-o\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t    
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"moduleid\" value=\"";
            // line 729
            echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
            echo "\" />
\t\t    \t\t\t\t\t\t<h4><p>";
            // line 730
            echo (isset($context["text_basic_configuration"]) ? $context["text_basic_configuration"] : null);
            echo "</p></h4>
\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 732
            if ((isset($context["module_id"]) ? $context["module_id"] : null)) {
                // line 733
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<p>Import Module</p>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"import_module\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 736
                if ((isset($context["modules"]) ? $context["modules"] : null)) {
                    // line 737
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">No Import</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 738
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        // line 739
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["module"], "module_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["module"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 741
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 742
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 745
            echo "\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 747
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"name\" value=\"";
            // line 748
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 752
            echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 753
            $context["i"] = 0;
            // line 754
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 755
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 756
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"head_name[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_head_name"]) ? $context["entry_head_name"] : null);
                echo "\" id=\"input-headname-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute((isset($context["head_name"]) ? $context["head_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["head_name"]) ? $context["head_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 758
            echo "\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"head_name_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 759
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 760
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 766
            echo (isset($context["entry_display_title_module"]) ? $context["entry_display_title_module"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 768
            if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
                // line 769
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 770
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 772
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 773
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 775
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 779
            echo (isset($context["text_status"]) ? $context["text_status"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"status\">
\t\t\t\t\t                        ";
            // line 781
            if ((isset($context["status"]) ? $context["status"] : null)) {
                // line 782
                echo "\t\t\t\t\t\t                        <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t                        <option value=\"0\">";
                // line 783
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t                        ";
            } else {
                // line 785
                echo "\t\t\t\t\t\t                        <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">";
                // line 786
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t                        ";
            }
            // line 788
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 792
            echo (isset($context["text_use_cache"]) ? $context["text_use_cache"] : null);
            echo "</p>
\t\t\t\t\t\t                <label class=\"radio-inline\">
\t\t\t\t\t                        ";
            // line 794
            if ((isset($context["use_cache"]) ? $context["use_cache"] : null)) {
                // line 795
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t                        \t";
                // line 796
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t                        ";
            } else {
                // line 798
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t                        \t";
                // line 799
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t                        ";
            }
            // line 801
            echo "\t\t\t\t\t\t                </label>
\t\t\t\t\t\t                <label class=\"radio-inline\">
\t\t\t\t\t                        ";
            // line 803
            if ((isset($context["use_cache"]) ? $context["use_cache"] : null)) {
                // line 804
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"0\" />\t\t\t\t                        \t
\t\t\t\t\t                        \t";
                // line 805
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t                        ";
            } else {
                // line 807
                echo "\t\t\t\t\t                        \t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t                        \t";
                // line 808
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t                        ";
            }
            // line 810
            echo "\t\t\t\t\t\t                </label>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t                <p>";
            // line 814
            echo (isset($context["text_cache_time"]) ? $context["text_cache_time"] : null);
            echo "</p>
\t\t\t\t\t\t\t                <input type=\"text\" name=\"cache_time\" value=\"";
            // line 815
            echo (isset($context["cache_time"]) ? $context["cache_time"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t        \t\t\t\t<h4 style=\"margin-top:20px\">";
            // line 818
            echo (isset($context["text_design_configuration"]) ? $context["text_design_configuration"] : null);
            echo "</h4>        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 820
            echo (isset($context["text_orientation"]) ? $context["text_orientation"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"orientation\">
\t\t\t\t\t                        ";
            // line 822
            if ((isset($context["orientation"]) ? $context["orientation"] : null)) {
                // line 823
                echo "\t\t\t\t\t                        \t<option value=\"0\">Horizontal</option>
\t\t\t\t\t                        \t<option value=\"1\" selected=\"selected\">Vertical</option>
\t\t\t\t\t                        ";
            } else {
                // line 826
                echo "\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">Horizontal</option>
\t\t\t\t\t\t                        <option value=\"1\">Vertical</option>
\t\t\t\t\t                        ";
            }
            // line 829
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 833
            echo (isset($context["text_number_load_vertical"]) ? $context["text_number_load_vertical"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"show_itemver\" value=\"";
            // line 834
            echo (isset($context["show_itemver"]) ? $context["show_itemver"] : null);
            echo "\"  id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 838
            echo (isset($context["text_navigation_text"]) ? $context["text_navigation_text"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 839
            $context["i"] = 0;
            // line 840
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 841
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 842
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"navigation_text[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["text_navigation_text"]) ? $context["text_navigation_text"] : null);
                echo "\" id=\"input-text-navigation-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                if ($this->getAttribute((isset($context["navigation_text"]) ? $context["navigation_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute((isset($context["navigation_text"]) ? $context["navigation_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 844
            echo "\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"navigation_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 845
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 846
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 848
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 852
            echo (isset($context["text_expand_menu_bar"]) ? $context["text_expand_menu_bar"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"full_width\">
\t\t\t\t\t                        ";
            // line 854
            if ((isset($context["full_width"]) ? $context["full_width"] : null)) {
                // line 855
                echo "\t\t\t\t\t\t                        <option value=\"1\" selected=\"selected\">Yes</option>
\t\t\t\t\t\t                        <option value=\"0\">No</option>
\t\t\t\t\t                        ";
            } else {
                // line 858
                echo "\t\t\t\t\t\t                        <option value=\"1\">Yes</option>
\t\t\t\t\t\t                        <option value=\"0\" selected=\"selected\">No</option>
\t\t\t\t\t                        ";
            }
            // line 861
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 865
            echo (isset($context["text_home_item"]) ? $context["text_home_item"] : null);
            echo "</p>
\t\t\t\t\t\t                <select name=\"home_item\">
\t\t\t\t\t                        ";
            // line 867
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "icon")) {
                // line 868
                echo "\t\t\t\t\t                        \t<option value=\"icon\" selected=\"selected\">Icon</option>
\t\t\t\t\t                        ";
            } else {
                // line 870
                echo "\t\t\t\t\t                        \t<option value=\"icon\">Icon</option>
\t\t\t\t\t                        ";
            }
            // line 872
            echo "\t\t\t\t\t                        
\t\t\t\t\t                        ";
            // line 873
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "text")) {
                // line 874
                echo "\t\t\t\t\t                        \t<option value=\"text\" selected=\"selected\">Text</option>
\t\t\t\t\t                        ";
            } else {
                // line 876
                echo "\t\t\t\t\t                        \t<option value=\"text\">Text</option>
\t\t\t\t\t                        ";
            }
            // line 878
            echo "
\t\t\t\t\t                        ";
            // line 879
            if (((isset($context["home_item"]) ? $context["home_item"] : null) == "disabled")) {
                // line 880
                echo "\t\t\t\t\t                        \t<option value=\"disabled\" selected=\"selected\">Disabled</option>
\t\t\t\t\t                        ";
            } else {
                // line 882
                echo "\t\t\t\t\t                        \t<option value=\"disabled\">Disabled</option>
\t\t\t\t\t                        ";
            }
            // line 884
            echo "\t\t\t\t\t\t                </select>
\t\t\t\t\t\t\t        </div>
\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"input clearfix\">
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 888
            echo (isset($context["text_home_text"]) ? $context["text_home_text"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t";
            // line 889
            $context["i"] = 0;
            // line 890
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 891
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 892
                echo "\t\t\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"home_text[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["text_home_text"]) ? $context["text_home_text"] : null);
                echo "\" id=\"input-home-text-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                if ($this->getAttribute((isset($context["home_text"]) ? $context["home_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo " ";
                    echo $this->getAttribute((isset($context["home_text"]) ? $context["home_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 894
            echo "\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"home_text_language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 895
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 896
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 898
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>        

\t\t    \t\t\t\t\t\t<h4 style=\"margin-top:20px\">";
            // line 901
            echo (isset($context["text_jquery_animations"]) ? $context["text_jquery_animations"] : null);
            echo "</h4>        
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 903
            echo (isset($context["text_animation"]) ? $context["text_animation"] : null);
            echo "</p>
\t\t\t\t\t\t                <div>
\t\t\t\t\t                        <input type=\"radio\" value=\"slide\" name=\"animation\" ";
            // line 905
            if (((isset($context["animation"]) ? $context["animation"] : null) == "slide")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> Slide<br>
\t\t\t\t\t                        <input type=\"radio\" value=\"fade\" name=\"animation\" ";
            // line 906
            if (((isset($context["animation"]) ? $context["animation"] : null) == "fade")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> Fade<br>
\t\t\t\t\t                        <input type=\"radio\" value=\"none\" name=\"animation\" ";
            // line 907
            if (((isset($context["animation"]) ? $context["animation"] : null) == "none")) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "> None
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t        </div>
\t\t    
\t\t\t\t\t\t\t        <div class=\"input clearfix\">
\t\t\t\t\t\t                <p>";
            // line 912
            echo (isset($context["text_animation_time"]) ? $context["text_animation_time"] : null);
            echo "</p>
\t\t\t\t\t\t                <input type=\"text\" name=\"animation_time\" style=\"width:50px;margin-right:10px\" value=\"";
            // line 913
            echo (isset($context["animation_time"]) ? $context["animation_time"] : null);
            echo "\">
\t\t\t\t\t\t                <div>ms</div>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 918
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
    \$('#language a:first').tab('show');
    if(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
    {
        \$('#input-cache_time_form').hide();
    }else
    {
        \$('#input-cache_time_form').show();
    }
        
    \$(\"input[name='use_cache']\").change(function(){
        val = \$(this).val();
        if(val ==0)
        {
            \$('#input-cache_time_form').hide();
        }else
        {
           \$('#input-cache_time_form').show();
        }
    });

    jQuery(document).ready(function(\$) {
\t\t\$(\".button_parent_config\").click(function(){
\t\t\tif(\$(this).hasClass('active'))
\t\t\t\t\$(this).removeClass('active');
\t\t\telse
\t\t\t\t\$(this).addClass('active');

\t\t\t\$(\"#text_parent_config\").collapse('toggle');
\t\t});

\t\t\$(\".button_content_config\").click(function(){
\t\t\tif(\$(this).hasClass('active'))
\t\t\t\t\$(this).removeClass('active');
\t\t\telse
\t\t\t\t\$(this).addClass('active');
\t\t\t\$(\"#text_content_config\").collapse('toggle');
\t\t});

        \$('#nestable-menu').on('click', function(e)
        {
\t\t\tvar target = \$(e.target),
\t\t\t\t\taction = target.data('action');
\t\t\tif (action === 'expand-all') {
\t\t\t\t\t\$('.dd').nestable('expandAll');
\t\t\t}
\t\t\tif (action === 'collapse-all') {
\t\t\t\t\t\$('.dd').nestable('collapseAll');
\t\t\t}
        });

\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#head_name_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-headname-'+opt_select);
\t\t\t\$('[id^=\"input-headname-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#des_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-des-'+opt_select);
\t\t\t\$('[id^=\"input-head-des-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#navigation_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-text-navigation-'+opt_select);
\t\t\t\$('[id^=\"input-text-navigation-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

\t\t\$('#home_text_language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-home-text-'+opt_select);
\t\t\t\$('[id^=\"input-home-text-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});

        \$(\"select[name=content_type]\").change(function () {
            \$(\"select[name=content_type] option:selected\").each(function() {
                \$(\".content_type\").hide();
                \$(\"#content_type\" + \$(this).val()).show();
            });
        });
        \$(\"#submenu-type\").change(function () {
            \$(\"#submenu-type option:selected\").each(function() {
                if(\$(this).val() == 2) {
                    \$(\"#submenu-columns\").show();
                } else {
                    \$(\"#submenu-columns\").hide();
                }
            });
        });

\t\t\$('li','.content_type_html').first().addClass('active');
\t\t\$('.tab-pane','.content_type_html .tab-content').first().addClass('active');
        \$(\".type_link\").change(function () {
            \$(\".type_link option:selected\").each(function() {
                if(\$(this).val() == 1) {
\t\t\t\t\t\$(\".type_link_url\").hide();
\t\t\t\t\t\$(\".type_link_category\").show();
                } else {
\t\t\t\t\t\$(\".type_link_category\").hide();
\t\t\t\t\t\$(\".type_link_url\").show();
                }
            });
        });

        \$('#product_autocomplete').autocomplete({
            delay: 500,
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1041
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request) ,
                    dataType: 'json',
                    success: function(json) {
                        json.unshift({
                            'product_id':  0,
                            'name':  'None'
                        });
                        response(\$.map(json, function(item) {
                            return {
                             \tlabel: item.name,
                             \tvalue: item.product_id
                            }
                        }));
                    }
                });
            },
            select: function(event) {
                \$('#product_autocomplete').val(event.label);
                \$('input[name=\\'content[product][id]\\']').val(event.value);
                return false;
            },
            focus: function(event) {
                return false;
            }
        });

\t\t// Manufacturer
\t\t\$('input[name=\\'manufacture_autocomplete\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1071
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\t\$('input[name=\\'category\\']').val('');

\t\t\t\t\$('#product-category' + item['value']).remove();

\t\t\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"content[manufacture][id][]\" value=\"' + item['value'] + '\" /><input type=\"hidden\" name=\"content[manufacture][name][]\" value=\"' + item['label'] + '\" /></div>');
\t\t\t}
\t\t});

\t\t\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t});


        \$('#categories_autocomplete').autocomplete({
            delay: 500,
            source: function(request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1101
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  request,
                    dataType: 'json',
                    success: function(json) {
                            json.unshift({
                                'category_id':  0,
                                'name':  'None'
                            });
                            response(\$.map(json, function(item) {
                                return {
                                    label: item.name,
                                    value: item.category_id
                                }
                            }));
                    }
                });
            },
            select: function(event) {
                if(event.value > 0) {
                    \$(\"#sort_categories > .dd-list\").append('<li class=\"dd-item\" data-id=\"' + event.value + '\" data-name=\"' + event.label + '\"><a class=\"fa fa-times\"></a><div class=\"dd-handle\">' + event.label + '</div></li>');
                }
                updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
\t\t\t\t\$( \"#sort_categories .fa-times\" ).on( \"click\", function() {
\t\t\t\t\t\$(this).parent().remove();
\t\t\t\t\tupdateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
\t\t\t\t});
                return false;
            },
            focus: function(event) {
                return false;
            }
        });

        function lagXHRobjekt() {
            var XHRobjekt = null;

            try {
                ajaxRequest = new XMLHttpRequest(); // Firefox, Opera, ...
            } catch(err1) {
                try {
                    ajaxRequest = new ActiveXObject(\"Microsoft.XMLHTTP\"); // Noen IE v.
                } catch(err2) {
                    try {
                        ajaxRequest = new ActiveXObject(\"Msxml2.XMLHTTP\"); // Noen IE v.
                    } catch(err3) {
                        ajaxRequest = false;
                    }
                }
            }
            return ajaxRequest;
        }


        function menu_updatesort(jsonstring) {
            mittXHRobjekt = lagXHRobjekt();

            if (mittXHRobjekt) {
                mittXHRobjekt.onreadystatechange = function() {
                    if(ajaxRequest.readyState == 4){
                        var ajaxDisplay = document.getElementById('sortDBfeedback');
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                    }
                }
                ajaxRequest.open(\"GET\", \"index.php?route=extension/module/so_megamenu&user_token=";
        // line 1163
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&jsonstring=\" + encodeURIComponent(jsonstring), true);
                ajaxRequest.setRequestHeader(\"Content-Type\", \"application/json\");
                ajaxRequest.send(null);
            }
        }

        var updateOutput = function(e)
        {
            var list   = e.length ? e : \$(e.target),
                output = list.data('output');

            if (window.JSON) {
                menu_updatesort(window.JSON.stringify(list.nestable('serialize')));
            } else {
                alert('JSON browser support required for this demo.');
            }
        };

        \$('#nestable').nestable({
                group: 1,
                maxDepth: 4
        }).on('change', updateOutput);

        updateOutput(\$('#nestable').data('output', \$('#nestable-output')));

        var updateOutput2 = function(e)
        {
            var list   = e.length ? e : \$(e.target),
                output = list.data('output');
            if (window.JSON && typeof(output)!= 'undefined' ) {
                output.val(window.JSON.stringify(list.nestable('serialize')));
            }
        };

        \$('#sort_categories').nestable({
               group: 1,
                maxDepth: 5
        }).on('change', updateOutput2);

        updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));

       \$( \"#sort_categories .fa-times\" ).on( \"click\", function() {
               \$(this).parent().remove();
               updateOutput2(\$('#sort_categories').data('output', \$('#sort_categories_data')));
       });
                
        ///cache
        var button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1210
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "</button></div>';
        var button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1211
        echo (isset($context["button_clear_cache"]) ? $context["button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
        
        if(\$('#column-left').hasClass('active')){
            \$('#column-left #stats').after(button);
        }else{
            \$('#column-left #stats').after(button_min);
        }

        \$('#button-menu').click(function(){
            \$('.remove-caching').remove();
            if(\$(this).parents().find('#column-left').hasClass('active')){
                \$('#column-left #stats').after(button);
            }else{
                \$('#column-left #stats').after(button_min);
            }
        });
    });
        
    function remove_cache(){
        var success_remove = '";
        // line 1230
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
        \$.ajax({
            type: 'POST',
            url: '";
        // line 1233
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
            data: {\tis_ajax_cache_lite: 1},
            success: function () {
                var html = '<div class=\"alert alert-success cls-remove-cache\" style=\"margin: 5px 25px\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
                if(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
                    \$(html).insertAfter('.page-header .container-fluid');
                }
            },
        });
    }
</script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
";
        // line 1248
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2628 => 1248,  2610 => 1233,  2604 => 1230,  2582 => 1211,  2576 => 1210,  2526 => 1163,  2461 => 1101,  2428 => 1071,  2395 => 1041,  2270 => 918,  2262 => 913,  2258 => 912,  2246 => 907,  2238 => 906,  2230 => 905,  2225 => 903,  2220 => 901,  2215 => 898,  2198 => 896,  2194 => 895,  2191 => 894,  2170 => 892,  2167 => 891,  2162 => 890,  2160 => 889,  2156 => 888,  2150 => 884,  2146 => 882,  2142 => 880,  2140 => 879,  2137 => 878,  2133 => 876,  2129 => 874,  2127 => 873,  2124 => 872,  2120 => 870,  2116 => 868,  2114 => 867,  2109 => 865,  2103 => 861,  2098 => 858,  2093 => 855,  2091 => 854,  2086 => 852,  2080 => 848,  2063 => 846,  2059 => 845,  2056 => 844,  2035 => 842,  2032 => 841,  2027 => 840,  2025 => 839,  2021 => 838,  2014 => 834,  2010 => 833,  2004 => 829,  1999 => 826,  1994 => 823,  1992 => 822,  1987 => 820,  1982 => 818,  1976 => 815,  1972 => 814,  1966 => 810,  1961 => 808,  1958 => 807,  1953 => 805,  1950 => 804,  1948 => 803,  1944 => 801,  1939 => 799,  1936 => 798,  1931 => 796,  1928 => 795,  1926 => 794,  1921 => 792,  1915 => 788,  1910 => 786,  1905 => 785,  1900 => 783,  1895 => 782,  1893 => 781,  1888 => 779,  1882 => 775,  1877 => 773,  1872 => 772,  1867 => 770,  1862 => 769,  1860 => 768,  1855 => 766,  1849 => 762,  1832 => 760,  1828 => 759,  1825 => 758,  1808 => 756,  1805 => 755,  1800 => 754,  1798 => 753,  1794 => 752,  1787 => 748,  1783 => 747,  1779 => 745,  1774 => 742,  1771 => 741,  1760 => 739,  1756 => 738,  1753 => 737,  1751 => 736,  1746 => 733,  1744 => 732,  1739 => 730,  1735 => 729,  1727 => 723,  1719 => 717,  1715 => 715,  1711 => 713,  1709 => 712,  1706 => 711,  1702 => 709,  1698 => 707,  1696 => 706,  1693 => 705,  1689 => 703,  1685 => 701,  1683 => 700,  1680 => 699,  1676 => 697,  1672 => 695,  1670 => 694,  1667 => 693,  1663 => 691,  1659 => 689,  1657 => 688,  1654 => 687,  1650 => 685,  1646 => 683,  1644 => 682,  1634 => 679,  1629 => 676,  1625 => 674,  1621 => 672,  1619 => 671,  1616 => 670,  1612 => 668,  1608 => 666,  1606 => 665,  1598 => 659,  1594 => 657,  1590 => 655,  1588 => 654,  1585 => 653,  1581 => 651,  1577 => 649,  1575 => 648,  1572 => 647,  1568 => 645,  1564 => 643,  1562 => 642,  1559 => 641,  1555 => 639,  1551 => 637,  1549 => 636,  1546 => 635,  1542 => 633,  1538 => 631,  1536 => 630,  1533 => 629,  1529 => 627,  1525 => 625,  1523 => 624,  1513 => 617,  1507 => 614,  1489 => 603,  1483 => 599,  1479 => 597,  1475 => 595,  1473 => 594,  1470 => 593,  1466 => 591,  1462 => 589,  1460 => 588,  1457 => 587,  1453 => 585,  1449 => 583,  1447 => 582,  1444 => 581,  1440 => 579,  1436 => 577,  1434 => 576,  1431 => 575,  1427 => 573,  1423 => 571,  1421 => 570,  1418 => 569,  1414 => 567,  1410 => 565,  1408 => 564,  1400 => 558,  1396 => 556,  1392 => 554,  1390 => 553,  1387 => 552,  1383 => 550,  1379 => 548,  1377 => 547,  1368 => 540,  1364 => 538,  1362 => 537,  1359 => 536,  1355 => 534,  1351 => 532,  1349 => 531,  1346 => 530,  1342 => 528,  1338 => 526,  1336 => 525,  1333 => 524,  1329 => 522,  1325 => 520,  1323 => 519,  1315 => 514,  1305 => 511,  1299 => 507,  1295 => 505,  1291 => 503,  1289 => 502,  1286 => 501,  1282 => 499,  1278 => 497,  1276 => 496,  1273 => 495,  1269 => 493,  1265 => 491,  1263 => 490,  1260 => 489,  1256 => 487,  1252 => 485,  1250 => 484,  1247 => 483,  1243 => 481,  1239 => 479,  1237 => 478,  1234 => 477,  1230 => 475,  1226 => 473,  1224 => 472,  1214 => 469,  1209 => 466,  1205 => 464,  1201 => 462,  1199 => 461,  1196 => 460,  1192 => 458,  1188 => 456,  1186 => 455,  1177 => 448,  1173 => 446,  1169 => 444,  1167 => 443,  1164 => 442,  1160 => 440,  1156 => 438,  1154 => 437,  1151 => 436,  1147 => 434,  1143 => 432,  1141 => 431,  1138 => 430,  1134 => 428,  1130 => 426,  1128 => 425,  1125 => 424,  1121 => 422,  1117 => 420,  1115 => 419,  1112 => 418,  1108 => 416,  1104 => 414,  1102 => 413,  1094 => 407,  1090 => 405,  1086 => 403,  1084 => 402,  1081 => 401,  1077 => 399,  1073 => 397,  1071 => 396,  1064 => 391,  1060 => 389,  1056 => 387,  1054 => 386,  1051 => 385,  1047 => 383,  1043 => 381,  1041 => 380,  1033 => 375,  1026 => 371,  1019 => 367,  1013 => 363,  996 => 361,  992 => 360,  982 => 359,  971 => 355,  965 => 351,  961 => 349,  957 => 347,  955 => 346,  952 => 345,  948 => 343,  944 => 341,  942 => 340,  934 => 335,  928 => 334,  918 => 331,  912 => 327,  909 => 326,  900 => 323,  896 => 322,  889 => 321,  884 => 320,  882 => 319,  870 => 314,  863 => 310,  859 => 309,  849 => 306,  843 => 302,  830 => 299,  826 => 298,  823 => 297,  820 => 296,  816 => 295,  812 => 293,  796 => 289,  792 => 288,  789 => 287,  785 => 286,  774 => 282,  770 => 280,  766 => 278,  762 => 276,  759 => 275,  755 => 273,  751 => 271,  749 => 270,  746 => 269,  742 => 267,  738 => 265,  736 => 264,  733 => 263,  729 => 261,  725 => 259,  723 => 258,  720 => 257,  716 => 255,  712 => 253,  710 => 252,  707 => 251,  703 => 249,  699 => 247,  697 => 246,  694 => 245,  690 => 243,  686 => 241,  684 => 240,  679 => 238,  673 => 234,  656 => 232,  652 => 231,  647 => 229,  638 => 225,  633 => 222,  629 => 220,  625 => 218,  623 => 217,  620 => 216,  616 => 214,  612 => 212,  610 => 211,  607 => 210,  603 => 208,  599 => 206,  597 => 205,  592 => 203,  583 => 199,  579 => 198,  573 => 194,  568 => 192,  563 => 191,  558 => 189,  553 => 188,  551 => 187,  546 => 185,  540 => 181,  535 => 179,  530 => 178,  525 => 176,  520 => 175,  518 => 174,  513 => 172,  507 => 168,  502 => 166,  497 => 165,  492 => 163,  487 => 162,  485 => 161,  480 => 159,  474 => 155,  457 => 153,  453 => 152,  449 => 151,  444 => 149,  436 => 148,  430 => 145,  421 => 143,  416 => 140,  411 => 137,  406 => 134,  404 => 133,  399 => 131,  391 => 126,  386 => 124,  378 => 119,  373 => 117,  366 => 113,  360 => 112,  356 => 111,  350 => 107,  333 => 105,  329 => 104,  326 => 103,  309 => 101,  306 => 100,  301 => 99,  299 => 98,  295 => 97,  287 => 94,  280 => 90,  275 => 88,  270 => 85,  253 => 83,  249 => 82,  246 => 81,  229 => 79,  226 => 78,  221 => 77,  219 => 76,  215 => 75,  212 => 74,  206 => 72,  201 => 70,  194 => 69,  192 => 68,  189 => 67,  185 => 65,  181 => 63,  179 => 62,  176 => 61,  174 => 60,  169 => 57,  167 => 56,  164 => 55,  157 => 51,  152 => 49,  148 => 48,  140 => 45,  137 => 44,  135 => 43,  127 => 37,  121 => 36,  119 => 35,  113 => 32,  105 => 31,  98 => 30,  93 => 29,  91 => 28,  81 => 27,  74 => 23,  70 => 21,  64 => 19,  62 => 18,  57 => 17,  55 => 16,  48 => 11,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 		  	<div class="pull-left">*/
/* 			  	<h1>{{ heading_title_so }}</h1>*/
/* 			  	<ul class="breadcrumb">*/
/* 					{% for breadcrumb in breadcrumbs %}*/
/* 						<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 					{% endfor %}*/
/* 			  	</ul>*/
/* 			</div>*/
/* 	  	</div>*/
/* 	</div>*/
/*     <div class="container-fluid" id="megamenu">*/
/*     	{% if error_warning %}*/
/* 	    	<div class="alert alert-danger">{{ error_warning }}</div>*/
/* 	    {% elseif success %}*/
/* 	    	<div class="alert alert-success">{{ success }}</div>*/
/* 	    {% endif %}*/
/* */
/* 	    <div class="panel panel-default">*/
/* 			<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 				<div class="panel-body">*/
/* 					<div class="rows">*/
/* 						<ul class="nav nav-tabs" role="tablist">*/
/* 							<li {% if selectedid ==0 %}class="active" {% endif %}> <a href="{{ link_add }}"> <span class="fa fa-plus"></span>{{ button_add_module }}</a></li>*/
/* 							{% set i = 1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %} class="active" {% endif %}>*/
/* 								<a href="{{ link_add }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}"  >*/
/* 									<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 								</a>*/
/* 								</li>*/
/* 								{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* */
/* 					<div class="rows megacontent">*/
/* 						<div class="col-md-12 col-xs-12 col-sm-12">*/
/* 							<div class="background clearfix">*/
/* 								{% if moduleid %}*/
/* 									<div class="left col-md-4 col-xs-12 col-sm-6 ">*/
/* 										<a href="{{ action }}&action=create" class="btn btn-primary" > {{ text_creat_new_item }}</a>*/
/* */
/* 										<a id="nestable-menu">*/
/* 												<button type="button" data-action="expand-all" class="btn btn-primary">{{ text_expand_all }}</button>*/
/* 												<button type="button" data-action="collapse-all" class="btn btn-primary">{{ text_collapse_all }}</button>*/
/* 										</a>*/
/* 										{{ nestable_list }}*/
/* 										<div id='sortDBfeedback' style="padding: 10px 0px 0px 0px"></div>*/
/* 									</div>*/
/* 								{% endif %}*/
/* */
/* 								{% if action_type == 'create' or action_type == 'edit' %}*/
/* 									<div class="right col-md-8 col-xs-12 col-sm-6">*/
/* 										<div class="buttons clearfix">*/
/* 											<button type="submit" name="button-back" class="button-save" value="" title="Configuration"><i class="fa fa-cog"></i></button>*/
/* 											{% if action_type == 'create' %}*/
/* 												<button type="submit" name="button-create" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% elseif action_type == 'edit' %}*/
/* 												<button type="submit" name="button-edit" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% else %}*/
/* 												<button type="submit" name="button-save" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 										{% if action_type == 'edit' %}*/
/* 											<h4>{{ text_edit_item }} {{ edit }}</h4>*/
/* 											<input type="hidden" name="id" value="{{ edit }}" />*/
/* 										{% else %}*/
/* 											<h4>{{ text_creat_new_item }}</h4>*/
/* 										{% endif %}*/
/* 										<div class="input clearfix">*/
/* 											<p>{{ text_name }}</p>*/
/* 											{% set i = 0 %}*/
/* 											{% for language  in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											 	<input type="text" name="name[{{ language.language_id }}]" placeholder="{{ entry_description_name }}" id="input-head-name-{{ language.language_id }}" value="{{ name[language.language_id] ? name[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 											{% endfor %}*/
/* 											<select  class="form-control" id="language">*/
/* 												{% for language in languages %}*/
/* 													<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"> {{ language.name }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 										</div>*/
/* 										<div class="input clearfix">*/
/* 											<p>{{ text_class_menu }}</p>*/
/* 											<div class="list-language">*/
/* 												<input type="text" name="class_menu" value="{{ class_menu }}">*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 										<h4 class="button_parent_config">{{ text_parent_config }}</h4>({{ text_parent_item }})*/
/* 										<div id="text_parent_config" class="collapse">									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_description }}</p>*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 												{% set i = i + 1 %}*/
/* 												 	<input type="text" name="description[{{ language.language_id }}]" placeholder="{{ entry_description_name }}" id="input-head-des-{{ language.language_id }}" value="{{ description[language.language_id] ? description[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 												{% endfor %}*/
/* 												<select  class="form-control" id="des_language">*/
/* 												  	{% for language in languages %}*/
/* 														<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}"> {{ language.name }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ "Icon Thumb" }}</p>*/
/* 												<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ src_icon }}" alt="" title="" data-placeholder="{{ placeholder }}"  /></a>*/
/* 												<input type="hidden" name="icon" value="{{ icon }}" id="input-image" />*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_label_item }}</p>*/
/* 												<div class="list-language">*/
/* 														<input type="text" name="label_item" value="{{ label_item }}">*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_icon_font }}</p>*/
/* 												<div class="list-language">*/
/* 													<input type="text" name="icon_font" value="{{ icon_font }}">*/
/* 												</div>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_type_link }}</p>*/
/* 												<select name="type_link" class="type_link">*/
/* 													{% if type_link == 1 %}*/
/* 														<option value="0">Url</option>*/
/* 														<option value="1" selected="selected">Category</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">Url</option>*/
/* 														<option value="1">Category</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input  type_link_url clearfix " {% if type_link == 1 %} {{ 'style="display:none"' }} {% endif %}>*/
/* 												<p>Url</p>*/
/* 												<input type="text" value="{{ link.url }}" name="link[url]">*/
/* 											</div>*/
/* 										*/
/* 											<div class="input type_link_category clearfix" {% if type_link != 1 %} {{ 'style="display:none"' }} {% endif %}>*/
/* 												<p>{{ text_categories }}</p>*/
/* 												<select name="link[category]">*/
/* 												  	<option value="">{{ text_all_categories }}</option>*/
/* 												  	{% for category in categories %}*/
/* 												  		<option value="{{ category.category_id }}" {% if link.category == category.category_id %} {{ 'selected' }} {% endif %}>{{ category.name }}</option>*/
/* 												  	{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_link_in_new_window }}</p>*/
/* 												<select name="new_window">*/
/* 													{% if new_window == 1 %}*/
/* 														<option value="0">{{ text_disabled }}</option>*/
/* 														<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 														<option value="1">{{ text_enabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_status }}</p>*/
/* 												<select name="status">*/
/* 													{% if status == 1 %}*/
/* 														<option value="0">{{ text_enabled }}</option>*/
/* 														<option value="1" selected="selected">{{ text_disabled }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_enabled }}</option>*/
/* 														<option value="1">{{ text_disabled }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* */
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_position }}</p>*/
/* 												<select name="position">*/
/* 													{% if position == 1 %}*/
/* 														<option value="0">{{ text_left }}</option>*/
/* 														<option value="1" selected="selected">{{ text_right }}</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">{{ text_left }}</option>*/
/* 														<option value="1">{{ text_right }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_submenu_width }}</p>*/
/* 												<input type="text" name="submenu_width" value="{{ submenu_width }}"> <div>{{ text_example }}</div>*/
/* 											</div>*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_display_submenu_on }}</p>*/
/* 												<select name="display_submenu">*/
/* 													{% if display_submenu == 0 %}*/
/* 														<option value="0" selected="selected">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="0">Hover</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if display_submenu == 2 %}*/
/* 														<option value="2" selected="selected">Hover intent</option>*/
/* 													{% else %}*/
/* 														<option value="2">Hover intent</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if display_submenu == 1 %}*/
/* 														<option value="1" selected="selected">Click</option>*/
/* 													{% else %}*/
/* 														<option value="1">Click</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>								*/
/* 										</div>*/
/* 										<h4 class="button_content_config">{{ text_content_config }}</h4>({{ text_content_item }})*/
/* 										<div id="text_content_config" class="collapse">*/
/* 									*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_content_width }}</p>*/
/* 												<select name="content_width">*/
/* 													{% for i in 1..12 %}*/
/* 														<option value="{{ i }}" {% if i == content_width %} {{ 'selected="selected"' }} {% endif %}>{{ i }}/12</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											*/
/* 											<div class="input clearfix">*/
/* 												<p>{{ text_content_type }}</p>*/
/* 												<select name="content_type">*/
/* 													{% if content_type != 0 %}*/
/* 														<option value="0">HTML</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">HTML</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 1 %}*/
/* 														<option value="1">Product</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Product</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 2 %}*/
/* 														<option value="2">Category</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Category</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content_type != 3 %}*/
/* 														<option value="3">Manufacture</option>*/
/* 													{% else %}*/
/* 														<option value="3" selected="selected">Manufacture</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content_type != 4 %}*/
/* 														<option value="4">Image</option>*/
/* 													{% else %}*/
/* 														<option value="4" selected="selected">Image</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content_type != 5 %}*/
/* 														<option value="5">Subcategory</option>*/
/* 													{% else %}*/
/* 														<option value="5" selected="selected">Subcategory</option>*/
/* 													{% endif %}*/
/* 													{% if content_type != 6 %}*/
/* 														<option value="6">Product List</option>*/
/* 													{% else %}*/
/* 														<option value="6" selected="selected">Product List</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div id="content_type0"{% if content_type != 0 %} {{ 'style="display:none"' }} {% endif %} class="content_type content_type_html">*/
/* 											<h5 style="margin-top:20px">HTML</h5>*/
/* 											<div class="tab-pane">*/
/* 												<ul id="language" class="nav nav-tabs">*/
/* 													{% for language in languages %}*/
/* 														<li>*/
/* 															<a data-toggle="tab" href="#content_html_{{ language.language_id }}">*/
/* 																<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}*/
/* 															</a>*/
/* 														</li>*/
/* 													{% endfor %}*/
/* 												</ul>*/
/* 												<div class="tab-content">*/
/* 													{% for language in languages %}*/
/* 													{% set lang_id = language.language_id %}*/
/* 													*/
/* 													<div id="content_html_{{ language.language_id }}" class="content_html tab-pane">*/
/* 														<textarea name="content[html][text][{{ language.language_id }}]" id="content_html_text_{{ language.language_id }}" class="form-control summernote" data-toggle="summernote">{{ content['html']['text'][lang_id] ? content['html']['text'][lang_id] : '' }}</textarea>*/
/* 													</div>*/
/* 													{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type1" {% if content_type != 1 %} {{ 'style="display:none"' }} {% endif %} class="content_type">							*/
/* 											<div class="input clearfix">*/
/* 												<p>Products:<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 												<input type="hidden" name="content[product][id]" value="{{ content.product.id }}" />*/
/* 												<input type="text" id="product_autocomplete" name="content[product][name]" value="{{ content.product.name }}">*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type3" {% if content_type != 3 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Manufacture:<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 												<input type="text" id="manufacture_autocomplete" name="manufacture_autocomplete" value="">*/
/* 												<div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 													{% if content['manufacture']['id'] %}*/
/* 														{% for key, id_category in content.manufacture.id %}*/
/* 															<div id="product-category{{ id_category }}"><i class="fa fa-minus-circle"></i> {{ content.manufacture.name[key] }}*/
/* 															  	<input type="hidden" name="content[manufacture][name][]" value="{{ content.manufacture.name[key] }}" />*/
/* 															  	<input type="hidden" name="content[manufacture][id][]" value="{{ id_category }}" />*/
/* 															</div>*/
/* 														{% endfor %}*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type4" {% if content_type != 4 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Image:</p>*/
/* 												<a href="" id="thumb-image-content" data-toggle="image" class="img-thumbnail"><img src="{{ content.image.image_link ? content.image.image_link : src_image_default }}" alt="" title="" data-placeholder="{{ placeholder }}"  /></a>*/
/* 												<input type="hidden" name="content[image][link]" value="{{ content.image.link ? content.image.link : image_default }}" id="input-image-content" />*/
/* 											</div>*/
/* 											<div class="input clearfix" >*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[image][show_title]">*/
/* 													{% if content.image.show_title == 1 and content.image.show_title %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.image.show_title != 0 and content.image.show_title %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type5" {% if content_type != 5 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Category</p>*/
/* 												<select  multiple name="content[subcategory][category][]" style="height: 200px;width:200px">*/
/* 												  	<option value="" {% if content.subcategory.category != '' and content.subcategory.category[0] == "" %} {{ 'selected' }} {% endif %}>{{ text_all_categories }}</option>*/
/* 												  	{% for category in categories %}*/
/* 												  		<option value="{{ category.category_id }}" {% if content.subcategory.category != '' and category.category_id in content.subcategory.category %} {{ 'selected' }} {% endif %}>{{ category.name }}</option>*/
/* 												  	{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 1</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_1]" value="{{ content.subcategory.limit_level_1 ? content.subcategory.limit_level_1 : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 2</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_2]" value="{{ content.subcategory.limit_level_2 ? content.subcategory.limit_level_2 : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit Level 3</p>*/
/* 												<input type="text" name="content[subcategory][limit_level_3]" value="{{ content.subcategory.limit_level_3 ? content.subcategory.limit_level_3 : '' }}">*/
/* 											</div>												*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[subcategory][show_title]">*/
/* 													{% if content.subcategory.show_title != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.show_title != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Image</p>*/
/* 												<select name="content[subcategory][show_image]">*/
/* 													{% if content.subcategory.show_image != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* 													*/
/* 													{% if content.subcategory.show_image != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[subcategory][columns]">*/
/* 		                                            {% if content.subcategory.columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* 		                                            */
/* 		                                            {% if content.subcategory.columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.subcategory.columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    */
/* 		                                    <div class="input clearfix" id="submenu-type">*/
/* 		                                        <p>Submenu type</p>*/
/* 		                                        <select name="content[subcategory][submenu]">*/
/* 													{% if content.subcategory.submenu != 1 %}*/
/* 														<option value="1">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Hover</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu != 2 %}*/
/* 														<option value="2">Visible</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Visible</option>*/
/* 													{% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" {% if content.subcategory.submenu != 2 %} {{ 'style="display:none"' }} {% endif %} id="submenu-columns">*/
/* 		                                    	<p>Submenu columns</p>*/
/* 												<select name="content[subcategory][submenu_columns]">*/
/* 													{% if content.subcategory.submenu_columns != 1 %}*/
/* 														<option value="1">1</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">1</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 2 %}*/
/* 														<option value="2">2</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">2</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 3 %}*/
/* 														<option value="3">3</option>*/
/* 													{% else %}*/
/* 														<option value="3" selected="selected">3</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 4 %}*/
/* 														<option value="4">4</option>*/
/* 													{% else %}*/
/* 														<option value="4" selected="selected">4</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 5 %}*/
/* 														<option value="5">5</option>*/
/* 													{% else %}*/
/* 														<option value="5" selected="selected">5</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.subcategory.submenu_columns != 6 %}*/
/* 														<option value="6">6</option>*/
/* 													{% else %}*/
/* 														<option value="6" selected="selected">6</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div id="content_type6" {% if content_type != 6 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 											<div class="input clearfix">*/
/* 												<p>Limit</p>*/
/* 												<input type="text" name="content[productlist][limit]" value="{{ content.productlist.limit ? content.productlist.limit : '' }}">*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Type</p>*/
/* 												<select name="content[productlist][type]">*/
/* 													{% if content.productlist.type != 'new' %}*/
/* 														<option value="new">New</option>*/
/* 													{% else %}*/
/* 														<option value="new" selected="selected">New</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'special' %}*/
/* 														<option value="special">Special</option>*/
/* 													{% else %}*/
/* 														<option value="special" selected="selected">Special</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'bestseller' %}*/
/* 														<option value="bestseller">Best Seller</option>*/
/* 													{% else %}*/
/* 														<option value="bestseller" selected="selected">Best Seller</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.type != 'popular' %}*/
/* 														<option value="popular">Popular</option>*/
/* 													{% endif %}*/
/* 														<option value="popular" selected="selected">Popular</option>*/
/* 													<?php } ?>*/
/* 												</select>*/
/* 											</div>*/
/* 											<div class="input clearfix">*/
/* 												<p>Show Title</p>*/
/* 												<select name="content[productlist][show_title]">*/
/* 													{% if content.productlist.show_title != 1 %}*/
/* 														<option value="1">Yes</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Yes</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.productlist.show_title != 0 %}*/
/* 														<option value="0">No</option>*/
/* 													{% else %}*/
/* 														<option value="0" selected="selected">No</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[productlist][col]">*/
/* 		                                            {% if content.productlist.col != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.productlist.col != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>                                        */
/* 										</div>*/
/* */
/* 		                                <div id="content_type2" {% if content_type != 2 %} {{ 'style="display:none"' }} {% endif %} class="content_type">*/
/* 		                                    <h5 style="margin-top:20px">Categories</h5>*/
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Add categories<br><span style="font-size:11px;color:#808080">(Autocomplete)</span></p>*/
/* 		                                        <input type="text" id="categories_autocomplete" value="">*/
/* 		                                    </div>*/
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Sort categories</p>*/
/* 		                                        <div class="cf nestable-lists">*/
/* 		                                            <div class="dd" id="sort_categories">*/
/* 		                                                <ol class="dd-list">*/
/* 		                                                    {{ list_categories }}*/
/* 		                                                </ol>*/
/* 		                                            </div>*/
/* 		                                            <input type="hidden" id="sort_categories_data" name="content[categories][categories]" value="{{ content.categories.categories is iterable ? '' : content.categories.categories }}" />*/
/* 		                                        </div>*/
/* 		                                    </div>*/
/* 		                                    */
/* 		                                    <div class="input clearfix">*/
/* 		                                        <p>Columns</p>*/
/* 		                                        <select name="content[categories][columns]">*/
/* 		                                            {% if content.categories.columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            <option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" id="submenu-type">*/
/* 		                                        <p>Submenu type</p>*/
/* 		                                        <select name="content[categories][submenu]">*/
/* 													{% if content.categories.submenu != 1 %}*/
/* 														<option value="1">Hover</option>*/
/* 													{% else %}*/
/* 														<option value="1" selected="selected">Hover</option>*/
/* 													{% endif %}*/
/* */
/* 													{% if content.categories.submenu != 2 %}*/
/* 														<option value="2">Visible</option>*/
/* 													{% else %}*/
/* 														<option value="2" selected="selected">Visible</option>*/
/* 													{% endif %}*/
/* 		                                        </select>*/
/* 		                                    </div>*/
/* */
/* 		                                    <div class="input clearfix" {% if content.categories.submenu != 2 %} {{ 'style="display:none"' }} {% endif %} id="submenu-columns">*/
/* 		                                    	<p>Submenu columns</p>*/
/* 		                                    	<select name="content[categories][submenu_columns]">*/
/* 		                                            {% if content.categories.submenu_columns != 1 %}*/
/* 		                                            	<option value="1">1</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="1" selected="selected">1</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 2 %}*/
/* 		                                            	<option value="2">2</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="2" selected="selected">2</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 3 %}*/
/* 		                                            	<option value="3">3</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="3" selected="selected">3</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 4 %}*/
/* 		                                            	<option value="4">4</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="4" selected="selected">4</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 5 %}*/
/* 		                                            	<option value="5">5</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="5" selected="selected">5</option>*/
/* 		                                            {% endif %}*/
/* */
/* 		                                            {% if content.categories.submenu_columns != 6 %}*/
/* 		                                            	<option value="6">6</option>*/
/* 		                                            {% else %}*/
/* 		                                            	<option value="6" selected="selected">6</option>*/
/* 		                                            {% endif %}*/
/* 		                                    	</select>*/
/* 		                            		</div>*/
/* 		                    			</div>*/
/* 									</div>*/
/* 								</div>*/
/* 		    				{% else %}*/
/* 		    					<div class="right col-md-8 col-xs-12 col-sm-6">*/
/* 									<div class="buttons clearfix">*/
/* 										<button type="submit" name="button-close" class="button-save" value="" title="Close"><i class="fa fa-reply"></i></button>*/
/* 										<button type="submit" name="button-save" class="button-save" value="" title="Save"><i class="fa fa-floppy-o"></i></button>*/
/* 									</div>*/
/* 		    */
/* 									<input type="hidden" name="moduleid" value="{{ moduleid }}" />*/
/* 		    						<h4><p>{{ text_basic_configuration }}</p></h4>*/
/* 			*/
/* 									{% if module_id %}*/
/* 										<div class="input clearfix">*/
/* 											<p>Import Module</p>*/
/* 											<select name="import_module">*/
/* 												{% if modules %}*/
/* 													<option value="0">No Import</option>*/
/* 													{% for module in modules %}*/
/* 														<option value="{{ module.module_id }}">{{ module.name }}</option>*/
/* 													 {% endfor %}*/
/* 												{% endif %}*/
/* 											</select>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_name }}</p>*/
/* 						                <input type="text" name="name" value="{{ name }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ entry_head_name }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											<input type="text" name="head_name[{{ language.language_id }}]" placeholder="{{ entry_head_name }}" id="input-headname-{{ language.language_id }}" value="{{ head_name[language.language_id] ? head_name[language.language_id] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select  class="form-control" id="head_name_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* */
/* 									<div class="input clearfix">*/
/* 										<p>{{ entry_display_title_module }}</p>*/
/* 										<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 											{% if disp_title_module %}*/
/* 												<option value="1" selected="selected">{{ text_yes }}</option>*/
/* 												<option value="0">{{ text_no }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_yes }}</option>*/
/* 												<option value="0" selected="selected">{{ text_no }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 			*/
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_status }}</p>*/
/* 						                <select name="status">*/
/* 					                        {% if status %}*/
/* 						                        <option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 						                        <option value="0">{{ text_disabled }}</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="1">{{ text_enabled }}</option>*/
/* 						                        <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 			*/
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_use_cache }}</p>*/
/* 						                <label class="radio-inline">*/
/* 					                        {% if use_cache %}*/
/* 					                        	<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 					                        	{{ text_yes }}*/
/* 					                        {% else %}*/
/* 					                        	<input type="radio" name="use_cache" value="1" />*/
/* 					                        	{{ text_yes }}*/
/* 					                        {% endif %}*/
/* 						                </label>*/
/* 						                <label class="radio-inline">*/
/* 					                        {% if use_cache %}*/
/* 					                        	<input type="radio" name="use_cache" value="0" />				                        	*/
/* 					                        	{{ text_no }}*/
/* 					                        {% else %}*/
/* 					                        	<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 					                        	{{ text_no }}*/
/* 					                        {% endif %}*/
/* 						                </label>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix" id="input-cache_time_form">*/
/* 							                <p>{{ text_cache_time }}</p>*/
/* 							                <input type="text" name="cache_time" value="{{ cache_time }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 		    */
/* 			        				<h4 style="margin-top:20px">{{ text_design_configuration }}</h4>        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_orientation }}</p>*/
/* 						                <select name="orientation">*/
/* 					                        {% if orientation %}*/
/* 					                        	<option value="0">Horizontal</option>*/
/* 					                        	<option value="1" selected="selected">Vertical</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="0" selected="selected">Horizontal</option>*/
/* 						                        <option value="1">Vertical</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 							        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_number_load_vertical }}</p>*/
/* 						                <input type="text" name="show_itemver" value="{{ show_itemver }}"  id="input-name" class="form-control" />*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ text_navigation_text }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 											<input type="text" name="navigation_text[{{ language.language_id }}]" placeholder="{{ text_navigation_text }}" id="input-text-navigation-{{ language.language_id }}" value="{% if navigation_text[language.language_id] %} {{ navigation_text[language.language_id] }} {% endif %}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select class="form-control" id="navigation_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_expand_menu_bar }}</p>*/
/* 						                <select name="full_width">*/
/* 					                        {% if full_width %}*/
/* 						                        <option value="1" selected="selected">Yes</option>*/
/* 						                        <option value="0">No</option>*/
/* 					                        {% else %}*/
/* 						                        <option value="1">Yes</option>*/
/* 						                        <option value="0" selected="selected">No</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_home_item }}</p>*/
/* 						                <select name="home_item">*/
/* 					                        {% if home_item == 'icon' %}*/
/* 					                        	<option value="icon" selected="selected">Icon</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="icon">Icon</option>*/
/* 					                        {% endif %}*/
/* 					                        */
/* 					                        {% if home_item == 'text' %}*/
/* 					                        	<option value="text" selected="selected">Text</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="text">Text</option>*/
/* 					                        {% endif %}*/
/* */
/* 					                        {% if home_item == 'disabled' %}*/
/* 					                        	<option value="disabled" selected="selected">Disabled</option>*/
/* 					                        {% else %}*/
/* 					                        	<option value="disabled">Disabled</option>*/
/* 					                        {% endif %}*/
/* 						                </select>*/
/* 							        </div>*/
/* 			*/
/* 									<div class="input clearfix">*/
/* 										<p>{{ text_home_text }}</p>*/
/* 										{% set i = 0 %}*/
/* 										{% for language in languages %}*/
/* 											{% set i = i + 1 %}*/
/* 										 	<input type="text" name="home_text[{{ language.language_id }}]" placeholder="{{ text_home_text }}" id="input-home-text-{{ language.language_id }}" value="{% if home_text[language.language_id] %} {{ home_text[language.language_id] }} {% endif %}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 										{% endfor %}*/
/* 										<select  class="form-control" id="home_text_language">*/
/* 											{% for language in languages %}*/
/* 												<option value="{{ language.language_id }}"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</option>*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>        */
/* */
/* 		    						<h4 style="margin-top:20px">{{ text_jquery_animations }}</h4>        */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_animation }}</p>*/
/* 						                <div>*/
/* 					                        <input type="radio" value="slide" name="animation" {% if animation == 'slide' %} {{ 'checked' }} {% endif %}> Slide<br>*/
/* 					                        <input type="radio" value="fade" name="animation" {% if animation == 'fade' %} {{ 'checked' }} {% endif %}> Fade<br>*/
/* 					                        <input type="radio" value="none" name="animation" {% if animation == 'none' %} {{ 'checked' }} {% endif %}> None*/
/* 						                </div>*/
/* 							        </div>*/
/* 		    */
/* 							        <div class="input clearfix">*/
/* 						                <p>{{ text_animation_time }}</p>*/
/* 						                <input type="text" name="animation_time" style="width:50px;margin-right:10px" value="{{ animation_time }}">*/
/* 						                <div>ms</div>*/
/* 							        </div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $('#language a:first').tab('show');*/
/*     if($("input[name='use_cache']:radio:checked").val() == '0')*/
/*     {*/
/*         $('#input-cache_time_form').hide();*/
/*     }else*/
/*     {*/
/*         $('#input-cache_time_form').show();*/
/*     }*/
/*         */
/*     $("input[name='use_cache']").change(function(){*/
/*         val = $(this).val();*/
/*         if(val ==0)*/
/*         {*/
/*             $('#input-cache_time_form').hide();*/
/*         }else*/
/*         {*/
/*            $('#input-cache_time_form').show();*/
/*         }*/
/*     });*/
/* */
/*     jQuery(document).ready(function($) {*/
/* 		$(".button_parent_config").click(function(){*/
/* 			if($(this).hasClass('active'))*/
/* 				$(this).removeClass('active');*/
/* 			else*/
/* 				$(this).addClass('active');*/
/* */
/* 			$("#text_parent_config").collapse('toggle');*/
/* 		});*/
/* */
/* 		$(".button_content_config").click(function(){*/
/* 			if($(this).hasClass('active'))*/
/* 				$(this).removeClass('active');*/
/* 			else*/
/* 				$(this).addClass('active');*/
/* 			$("#text_content_config").collapse('toggle');*/
/* 		});*/
/* */
/*         $('#nestable-menu').on('click', function(e)*/
/*         {*/
/* 			var target = $(e.target),*/
/* 					action = target.data('action');*/
/* 			if (action === 'expand-all') {*/
/* 					$('.dd').nestable('expandAll');*/
/* 			}*/
/* 			if (action === 'collapse-all') {*/
/* 					$('.dd').nestable('collapseAll');*/
/* 			}*/
/*         });*/
/* */
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#head_name_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-headname-'+opt_select);*/
/* 			$('[id^="input-headname-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#des_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-des-'+opt_select);*/
/* 			$('[id^="input-head-des-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#navigation_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-text-navigation-'+opt_select);*/
/* 			$('[id^="input-text-navigation-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/* 		$('#home_text_language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-home-text-'+opt_select);*/
/* 			$('[id^="input-home-text-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* */
/*         $("select[name=content_type]").change(function () {*/
/*             $("select[name=content_type] option:selected").each(function() {*/
/*                 $(".content_type").hide();*/
/*                 $("#content_type" + $(this).val()).show();*/
/*             });*/
/*         });*/
/*         $("#submenu-type").change(function () {*/
/*             $("#submenu-type option:selected").each(function() {*/
/*                 if($(this).val() == 2) {*/
/*                     $("#submenu-columns").show();*/
/*                 } else {*/
/*                     $("#submenu-columns").hide();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/* 		$('li','.content_type_html').first().addClass('active');*/
/* 		$('.tab-pane','.content_type_html .tab-content').first().addClass('active');*/
/*         $(".type_link").change(function () {*/
/*             $(".type_link option:selected").each(function() {*/
/*                 if($(this).val() == 1) {*/
/* 					$(".type_link_url").hide();*/
/* 					$(".type_link_category").show();*/
/*                 } else {*/
/* 					$(".type_link_category").hide();*/
/* 					$(".type_link_url").show();*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('#product_autocomplete').autocomplete({*/
/*             delay: 500,*/
/*             source: function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request) ,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         json.unshift({*/
/*                             'product_id':  0,*/
/*                             'name':  'None'*/
/*                         });*/
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                              	label: item.name,*/
/*                              	value: item.product_id*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             select: function(event) {*/
/*                 $('#product_autocomplete').val(event.label);*/
/*                 $('input[name=\'content[product][id]\']').val(event.value);*/
/*                 return false;*/
/*             },*/
/*             focus: function(event) {*/
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/* 		// Manufacturer*/
/* 		$('input[name=\'manufacture_autocomplete\']').autocomplete({*/
/* 			'source': function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['manufacturer_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			'select': function(item) {*/
/* 				$('input[name=\'category\']').val('');*/
/* */
/* 				$('#product-category' + item['value']).remove();*/
/* */
/* 				$('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="content[manufacture][id][]" value="' + item['value'] + '" /><input type="hidden" name="content[manufacture][name][]" value="' + item['label'] + '" /></div>');*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 		});*/
/* */
/* */
/*         $('#categories_autocomplete').autocomplete({*/
/*             delay: 500,*/
/*             source: function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  request,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                             json.unshift({*/
/*                                 'category_id':  0,*/
/*                                 'name':  'None'*/
/*                             });*/
/*                             response($.map(json, function(item) {*/
/*                                 return {*/
/*                                     label: item.name,*/
/*                                     value: item.category_id*/
/*                                 }*/
/*                             }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             select: function(event) {*/
/*                 if(event.value > 0) {*/
/*                     $("#sort_categories > .dd-list").append('<li class="dd-item" data-id="' + event.value + '" data-name="' + event.label + '"><a class="fa fa-times"></a><div class="dd-handle">' + event.label + '</div></li>');*/
/*                 }*/
/*                 updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* 				$( "#sort_categories .fa-times" ).on( "click", function() {*/
/* 					$(this).parent().remove();*/
/* 					updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* 				});*/
/*                 return false;*/
/*             },*/
/*             focus: function(event) {*/
/*                 return false;*/
/*             }*/
/*         });*/
/* */
/*         function lagXHRobjekt() {*/
/*             var XHRobjekt = null;*/
/* */
/*             try {*/
/*                 ajaxRequest = new XMLHttpRequest(); // Firefox, Opera, ...*/
/*             } catch(err1) {*/
/*                 try {*/
/*                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); // Noen IE v.*/
/*                 } catch(err2) {*/
/*                     try {*/
/*                         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); // Noen IE v.*/
/*                     } catch(err3) {*/
/*                         ajaxRequest = false;*/
/*                     }*/
/*                 }*/
/*             }*/
/*             return ajaxRequest;*/
/*         }*/
/* */
/* */
/*         function menu_updatesort(jsonstring) {*/
/*             mittXHRobjekt = lagXHRobjekt();*/
/* */
/*             if (mittXHRobjekt) {*/
/*                 mittXHRobjekt.onreadystatechange = function() {*/
/*                     if(ajaxRequest.readyState == 4){*/
/*                         var ajaxDisplay = document.getElementById('sortDBfeedback');*/
/*                         ajaxDisplay.innerHTML = ajaxRequest.responseText;*/
/*                     }*/
/*                 }*/
/*                 ajaxRequest.open("GET", "index.php?route=extension/module/so_megamenu&user_token={{ user_token }}&jsonstring=" + encodeURIComponent(jsonstring), true);*/
/*                 ajaxRequest.setRequestHeader("Content-Type", "application/json");*/
/*                 ajaxRequest.send(null);*/
/*             }*/
/*         }*/
/* */
/*         var updateOutput = function(e)*/
/*         {*/
/*             var list   = e.length ? e : $(e.target),*/
/*                 output = list.data('output');*/
/* */
/*             if (window.JSON) {*/
/*                 menu_updatesort(window.JSON.stringify(list.nestable('serialize')));*/
/*             } else {*/
/*                 alert('JSON browser support required for this demo.');*/
/*             }*/
/*         };*/
/* */
/*         $('#nestable').nestable({*/
/*                 group: 1,*/
/*                 maxDepth: 4*/
/*         }).on('change', updateOutput);*/
/* */
/*         updateOutput($('#nestable').data('output', $('#nestable-output')));*/
/* */
/*         var updateOutput2 = function(e)*/
/*         {*/
/*             var list   = e.length ? e : $(e.target),*/
/*                 output = list.data('output');*/
/*             if (window.JSON && typeof(output)!= 'undefined' ) {*/
/*                 output.val(window.JSON.stringify(list.nestable('serialize')));*/
/*             }*/
/*         };*/
/* */
/*         $('#sort_categories').nestable({*/
/*                group: 1,*/
/*                 maxDepth: 5*/
/*         }).on('change', updateOutput2);*/
/* */
/*         updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/* */
/*        $( "#sort_categories .fa-times" ).on( "click", function() {*/
/*                $(this).parent().remove();*/
/*                updateOutput2($('#sort_categories').data('output', $('#sort_categories_data')));*/
/*        });*/
/*                 */
/*         ///cache*/
/*         var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ button_clear_cache }}</button></div>';*/
/*         var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/*         */
/*         if($('#column-left').hasClass('active')){*/
/*             $('#column-left #stats').after(button);*/
/*         }else{*/
/*             $('#column-left #stats').after(button_min);*/
/*         }*/
/* */
/*         $('#button-menu').click(function(){*/
/*             $('.remove-caching').remove();*/
/*             if($(this).parents().find('#column-left').hasClass('active')){*/
/*                 $('#column-left #stats').after(button);*/
/*             }else{*/
/*                 $('#column-left #stats').after(button_min);*/
/*             }*/
/*         });*/
/*     });*/
/*         */
/*     function remove_cache(){*/
/*         var success_remove = '{{ success_remove }}';*/
/*         $.ajax({*/
/*             type: 'POST',*/
/*             url: '{{ linkremove }}',*/
/*             data: {	is_ajax_cache_lite: 1},*/
/*             success: function () {*/
/*                 var html = '<div class="alert alert-success cls-remove-cache" style="margin: 5px 25px"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/*                 if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/*                     $(html).insertAfter('.page-header .container-fluid');*/
/*                 }*/
/*             },*/
/*         });*/
/*     }*/
/* </script>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* {{ footer }}*/
