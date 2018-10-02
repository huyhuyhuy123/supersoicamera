<?php

/* extension/module/simple_blog_category.twig */
class __TwigTemplate_ef4619c0718361b74fdfa37951148a672fcbbd55810408e54dd6668ce9e8a507 extends Twig_Template
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
        echo "
    ";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    
    <div id=\"content\">
        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <div class=\"pull-right\">
                    <button type=\"submit\" form=\"form-simple-blog-category\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                    <a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
                </div>
            
                <h1>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <ul class=\"breadcrumb\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </ul>
            </div>
        </div>
        
        <div class=\"container-fluid\">
            ";
        // line 22
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 23
            echo "                <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 27
        echo "            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
                </div>
                
                <div class=\"panel-body\">
                    <form action=\"";
        // line 34
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-simple-blog-category\" class=\"form-horizontal\">    
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 37
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <select name=\"simple_blog_category_status\" class=\"form-control\">
                                    <option value=\"1\" ";
        // line 40
        echo ((((isset($context["simple_blog_category_status"]) ? $context["simple_blog_category_status"] : null) == 1)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
    \t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 41
        echo ((((isset($context["simple_blog_category_status"]) ? $context["simple_blog_category_status"] : null) == 0)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_search_article"]) ? $context["help_search_article"] : null);
        echo "\">";
        echo (isset($context["entry_search_article"]) ? $context["entry_search_article"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                
                                <div class=\"checkbox-inline\">
                                    ";
        // line 51
        if ((isset($context["simple_blog_category_search_article"]) ? $context["simple_blog_category_search_article"] : null)) {
            // line 52
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_category_search_article\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_category_search_article\" value=\"0\" /> ";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 55
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_category_search_article\" value=\"1\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_category_search_article\" value=\"0\" checked=\"checked\" /> ";
            // line 56
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 58
        echo "                                </div>
                            </div>
                        </div>   
                        
                        <h3 class=\"text-center\">";
        // line 62
        echo (isset($context["text_category_related"]) ? $context["text_category_related"] : null);
        echo "</h3>
                        
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"module\">
\t\t\t\t\t\t\t\t\t";
        // line 67
        $context["module_row"] = 1;
        // line 68
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-module";
            echo $this->getAttribute($context["module"], "key", array());
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-module";
            echo $this->getAttribute($context["module"], "key", array());
            echo "\\']').parent().remove(); \$('#tab-module";
            echo $this->getAttribute($context["module"], "key", array());
            echo "').remove(); \$('#module a:first').tab('show');\"></i> ";
            echo (((isset($context["tab_module"]) ? $context["tab_module"] : null) . " ") . (isset($context["module_row"]) ? $context["module_row"] : null));
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            // line 70
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t\t\t<li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"tab-content\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 79
            echo "                                        <div class=\"tab-pane\" id=\"tab-module";
            echo $this->getAttribute($context["module"], "key", array());
            echo "\">                                            
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 81
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"simple_blog_category_module[";
            // line 83
            echo $this->getAttribute($context["module"], "key", array());
            echo "][status]\" class=\"form-control\">
            \t\t\t\t\t\t\t                ";
            // line 84
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 85
                echo "            \t\t\t\t\t\t\t\t                <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t\t                <option value=\"0\">";
                // line 86
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t                ";
            } else {
                // line 88
                echo "            \t\t\t\t\t\t\t\t                <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t\t                <option value=\"0\" selected=\"selected\">";
                // line 89
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t                ";
            }
            // line 91
            echo "                          \t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>                                            
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 95
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"simple_blog_category_module[";
            // line 97
            echo $this->getAttribute($context["module"], "key", array());
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["module"], "sort_order", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                </div>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script type=\"text/javascript\">
        var module_row = ";
        // line 112
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo "
  
\t\tfunction addModule() {
            
            var token = Math.random().toString(36).substr(2)
            
            html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">'
                        
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 121
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <select name=\"simple_blog_category_module[' + token + '][status]\" class=\"form-control\">'
            html += '               <option value=\"1\">";
        // line 124
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>'
            html += '               <option value=\"0\">";
        // line 125
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>'
            html += '           </select>'
            html += '       </div>'
            html += '   </div>'
            
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 131
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <input type=\"text\" name=\"simple_blog_category_module[' + token + '][sort_order]\" value=\"\" class=\"form-control\" />'
            html += '       </div>'
            html += '   </div>'
                        
            html += '</div>'
            
            \$('.tab-content:first-child').prepend(html)
            
            \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 141
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo " ' + module_row + '</a></li>')
            
            \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show')

\t\t\tmodule_row++
\t\t}
    </script>
    
    <script type=\"text/javascript\">
        \$('#module li:first-child a').tab('show');
    </script>
    
";
        // line 153
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 153,  324 => 141,  311 => 131,  302 => 125,  298 => 124,  292 => 121,  280 => 112,  268 => 102,  255 => 97,  250 => 95,  244 => 91,  239 => 89,  234 => 88,  229 => 86,  224 => 85,  222 => 84,  218 => 83,  213 => 81,  207 => 79,  203 => 78,  193 => 72,  187 => 71,  185 => 70,  174 => 69,  169 => 68,  167 => 67,  159 => 62,  153 => 58,  148 => 56,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  122 => 47,  111 => 41,  105 => 40,  99 => 37,  93 => 34,  86 => 30,  81 => 27,  73 => 23,  71 => 22,  64 => 17,  53 => 15,  49 => 14,  44 => 12,  36 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/*     {{ column_left }}*/
/*     */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <button type="submit" form="form-simple-blog-category" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                     <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*                 </div>*/
/*             */
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <ul class="breadcrumb">*/
/*                     {% for breadcrumb in breadcrumbs %}*/
/*                         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="container-fluid">*/
/*             {% if error_warning %}*/
/*                 <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                 </div>*/
/*             {% endif %}*/
/*             */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*                 </div>*/
/*                 */
/*                 <div class="panel-body">*/
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-simple-blog-category" class="form-horizontal">    */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <select name="simple_blog_category_status" class="form-control">*/
/*                                     <option value="1" {{ simple_blog_category_status == 1 ? "selected='selected'" : '' }}>{{ text_enabled }}</option>*/
/*     								<option value="0" {{ simple_blog_category_status == 0 ? "selected='selected'" : '' }}>{{ text_disabled }}</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_search_article }}">{{ entry_search_article }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 */
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_category_search_article %}*/
/*     	    							<input type="radio" name="simple_blog_category_search_article" value="1" checked="checked" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_category_search_article" value="0" /> {{ text_disabled }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_category_search_article" value="1" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_category_search_article" value="0" checked="checked" /> {{ text_disabled }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>   */
/*                         */
/*                         <h3 class="text-center">{{ text_category_related }}</h3>*/
/*                         */
/*                         <div class="row">*/
/* 							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">*/
/* 								<ul class="nav nav-pills nav-stacked" id="module">*/
/* 									{% set module_row = 1 %}*/
/* 									{% for module in modules %}*/
/* 										<li><a href="#tab-module{{ module.key }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-module{{ module.key }}\']').parent().remove(); $('#tab-module{{ module.key }}').remove(); $('#module a:first').tab('show');"></i> {{ tab_module ~ ' ' ~ module_row }}</a></li>*/
/* 										{% set module_row = module_row + 1 %}*/
/* 									{% endfor %}*/
/* 									<li id="module-add"><a onclick="addModule();"><i class="fa fa-plus-circle"></i> {{ button_module_add }}</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/*                             */
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="tab-content">*/
/*                                     {% for module in modules %}*/
/*                                         <div class="tab-pane" id="tab-module{{ module.key }}">                                            */
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<select name="simple_blog_category_module[{{ module.key }}][status]" class="form-control">*/
/*             							                {% if module.status %}*/
/*             								                <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*             								                <option value="0">{{ text_disabled }}</option>*/
/*             							                {% else %}*/
/*             								                <option value="1">{{ text_enabled }}</option>*/
/*             								                <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*             							                {% endif %}*/
/*                           							</select>*/
/* 												</div>*/
/* 											</div>                                            */
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_sort_order }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<input type="text" name="simple_blog_category_module[{{ module.key }}][sort_order]" value="{{ module.sort_order }}" class="form-control" />*/
/* 												</div>*/
/* 											</div>											*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>                            */
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <script type="text/javascript">*/
/*         var module_row = {{ module_row }}*/
/*   */
/* 		function addModule() {*/
/*             */
/*             var token = Math.random().toString(36).substr(2)*/
/*             */
/*             html  = '<div class="tab-pane" id="tab-module' + token + '">'*/
/*                         */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <select name="simple_blog_category_module[' + token + '][status]" class="form-control">'*/
/*             html += '               <option value="1">{{ text_enabled }}</option>'*/
/*             html += '               <option value="0">{{ text_disabled }}</option>'*/
/*             html += '           </select>'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/*             */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_sort_order }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <input type="text" name="simple_blog_category_module[' + token + '][sort_order]" value="" class="form-control" />'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/*                         */
/*             html += '</div>'*/
/*             */
/*             $('.tab-content:first-child').prepend(html)*/
/*             */
/*             $('#module-add').before('<li><a href="#tab-module' + token + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-module' + token + '\\\']\').parent().remove(); $(\'#tab-module' + token + '\').remove(); $(\'#module a:first\').tab(\'show\');"></i> {{ tab_module }} ' + module_row + '</a></li>')*/
/*             */
/*             $('#module a[href=\'#tab-module' + token + '\']').tab('show')*/
/* */
/* 			module_row++*/
/* 		}*/
/*     </script>*/
/*     */
/*     <script type="text/javascript">*/
/*         $('#module li:first-child a').tab('show');*/
/*     </script>*/
/*     */
/* {{ footer }}*/
