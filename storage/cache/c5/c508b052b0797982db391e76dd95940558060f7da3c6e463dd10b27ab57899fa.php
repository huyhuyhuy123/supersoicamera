<?php

/* extension/module/modification_manager/form.twig */
class __TwigTemplate_463e8c660c48004467bb458f2b846fb12dc737e04145bbe14ff51edcc9a7b9dd extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-modification\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          ";
        // line 7
        if ((isset($context["refresh"]) ? $context["refresh"] : null)) {
            echo " <button type=\"submit\" onclick=\"\$('#form-modification').attr('action', '";
            echo (isset($context["refresh"]) ? $context["refresh"] : null);
            echo " ').submit()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
            echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> + <i class=\"fa fa-refresh\"></i></button>";
        }
        // line 8
        echo "        <a href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
      <ul class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
      ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 23
        echo "      ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo " </h3>
        <i class=\"fa ";
        // line 31
        if ($this->getAttribute((isset($context["modification"]) ? $context["modification"] : null), "status", array())) {
            echo " fa-check-circle-o fa-2x pull-right text-success";
        } else {
            echo "fa-times-circle-o fa-2x pull-right text-danger";
        }
        echo "\" style=\"font-size:2em\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo " \"></i>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\" class=\"form-horizontal\">
            ";
        // line 35
        if ((isset($context["error_xml"]) ? $context["error_xml"] : null)) {
            echo " <div class=\"text-danger\">";
            echo (isset($context["error_xml"]) ? $context["error_xml"] : null);
            echo " </div>";
        }
        // line 36
        echo "          <textarea name=\"xml\" id=\"input-xml\" class=\"form-control\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modification"]) ? $context["modification"] : null), "xml", array()));
        echo "</textarea>
        </form>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\">
  #input-xml + .CodeMirror {
    height: auto;
  }
</style>
<script type=\"text/javascript\"><!--
\tvar el = document.getElementById(\"input-xml\");
\tif (el) {
\t\teditor = CodeMirror.fromTextArea(el, {
\t\t\tmode: \"xml\",
\t\t\tinteger: 2,
\t\t\tlineNumbers: true,
\t\t\tviewportMargin: Infinity,
\t\t\tautofocus: true,
\t\t\talignCDATA: true,
\t\t\tlineWrapping: true,
\t\t\tindentWithTabs: true,
\t\t\tindentUnit: 2,
\t\t\tstyleActiveLine: true,
\t\t\tautoCloseTags: true
\t\t});

\t\tif (editor) {
\t\t\tvar editorChanged = false;

\t\t\teditor.on('change', function(){
\t\t\t\tif (editorChanged == false) {
\t\t\t\t\twindow.onbeforeunload = function() {
\t\t\t\t\t\treturn 'Confirm that you want to leave - data you have entered may not be saved';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\teditorChanged = true;
\t\t\t});

\t\t\t\$('#form-modification').bind('submit',function() {
\t\t\t\t\$(this).addClass('form-saving');

\t\t\t\tif (editorChanged) {
\t\t\t\t\twindow.onbeforeunload = null;
\t\t\t\t}
\t\t\t});
\t\t}
\t}
\t//--></script>
";
        // line 87
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/modification_manager/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 87,  125 => 36,  119 => 35,  115 => 34,  103 => 31,  99 => 30,  95 => 28,  87 => 24,  84 => 23,  76 => 19,  74 => 18,  68 => 14,  57 => 12,  53 => 11,  48 => 9,  41 => 8,  33 => 7,  29 => 6,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-modification" data-toggle="tooltip" title="{{ button_save }} " class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*           {% if refresh %} <button type="submit" onclick="$('#form-modification').attr('action', '{{ refresh }} ').submit()" data-toggle="tooltip" title="{{ button_refresh }} " class="btn btn-primary"><i class="fa fa-save"></i> + <i class="fa fa-refresh"></i></button>{% endif %}*/
/*         <a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }} </h1>*/
/*       <ul class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*       {% if error_warning %}*/
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if success %}*/
/*         <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*       {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }} </h3>*/
/*         <i class="fa {% if modification.status %} fa-check-circle-o fa-2x pull-right text-success{% else %}fa-times-circle-o fa-2x pull-right text-danger{% endif %}" style="font-size:2em" data-toggle="tooltip" title="{{ text_enabled }} "></i>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }} " method="post" enctype="multipart/form-data" id="form-modification" class="form-horizontal">*/
/*             {% if error_xml %} <div class="text-danger">{{ error_xml }} </div>{% endif %}*/
/*           <textarea name="xml" id="input-xml" class="form-control">{{ modification.xml|escape }}</textarea>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <style type="text/css">*/
/*   #input-xml + .CodeMirror {*/
/*     height: auto;*/
/*   }*/
/* </style>*/
/* <script type="text/javascript"><!--*/
/* 	var el = document.getElementById("input-xml");*/
/* 	if (el) {*/
/* 		editor = CodeMirror.fromTextArea(el, {*/
/* 			mode: "xml",*/
/* 			integer: 2,*/
/* 			lineNumbers: true,*/
/* 			viewportMargin: Infinity,*/
/* 			autofocus: true,*/
/* 			alignCDATA: true,*/
/* 			lineWrapping: true,*/
/* 			indentWithTabs: true,*/
/* 			indentUnit: 2,*/
/* 			styleActiveLine: true,*/
/* 			autoCloseTags: true*/
/* 		});*/
/* */
/* 		if (editor) {*/
/* 			var editorChanged = false;*/
/* */
/* 			editor.on('change', function(){*/
/* 				if (editorChanged == false) {*/
/* 					window.onbeforeunload = function() {*/
/* 						return 'Confirm that you want to leave - data you have entered may not be saved';*/
/* 					}*/
/* 				}*/
/* */
/* 				editorChanged = true;*/
/* 			});*/
/* */
/* 			$('#form-modification').bind('submit',function() {*/
/* 				$(this).addClass('form-saving');*/
/* */
/* 				if (editorChanged) {*/
/* 					window.onbeforeunload = null;*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}*/
/* 	//--></script>*/
/* {{ footer}} */
