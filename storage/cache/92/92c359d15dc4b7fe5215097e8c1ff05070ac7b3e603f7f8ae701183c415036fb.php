<?php

/* extension/module/simple_blog/author_form.twig */
class __TwigTemplate_72c9d9510c10db2659228a43e7a2436f87f25a2017bc5d554c69a07ce8005c9e extends Twig_Template
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
            <div class=\"container-fluid\">
                <div class=\"pull-right\">
                    <button type=\"submit\" form=\"form-blog-author\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                    <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
                </div>
                <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <ul class=\"breadcrumb\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "                </ul>
            </div>
        </div> <!-- end of page-header class -->
        
        <div class=\"container-fluid\">
            ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "                <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 24
        echo "            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
                </div>
                
                <div class=\"panel-body\">
                    <form action=\"";
        // line 31
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog-author\" class=\"form-horizontal\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-general\">
                                <div class=\"form-group required\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["help_name"]) ? $context["help_name"] : null);
        echo "\">";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <input type=\"text\" name=\"name\" value=\"";
        // line 41
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"form-control\" />
                        \t\t\t\t";
        // line 42
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 43
            echo "                        \t\t\t\t\t<span class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</span>
                        \t\t\t\t";
        }
        // line 45
        echo "                                    </div>
                                </div>                        
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 48
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 50
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["no_image"]) ? $context["no_image"] : null);
        echo "\" /></a>
                                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 51
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" />
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 56
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <select name=\"status\" class=\"form-control\">
        \t\t\t\t            \t\t<option value=\"1\" ";
        // line 59
        if (((isset($context["status"]) ? $context["status"] : null) == 1)) {
            echo " ";
            echo "selected='selected'";
            echo " ";
        }
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
        \t\t\t\t            \t\t<option value=\"0\" ";
        // line 60
        if (((isset($context["status"]) ? $context["status"] : null) == 0)) {
            echo " ";
            echo "selected='selected'";
            echo " ";
        }
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
        \t\t\t\t            \t</select>
                                    </div>
                                </div> 
                                                        
                                <ul class=\"nav nav-tabs\" id=\"language\">
                                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 67
            echo "                                        <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                </ul>
                        
                                <div class=\"tab-content\">
                                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                                        <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                            
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 76
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"author_description[";
            // line 78
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" id=\"description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 83
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"author_description[";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 90
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"author_description[";
            // line 92
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["author_description"]) ? $context["author_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-seo\">
                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 101
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 106
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 107
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 112
            echo "                                            <tr>
                                                <td class=\"text-left\">";
            // line 113
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                                <td class=\"text-left\">
                                                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 116
                echo "                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-addon\"><img src=\"language/";
                // line 117
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                                                            <input type=\"text\" name=\"seo_url[";
                // line 118
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["seo_url"]) ? $context["seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["seo_url"]) ? $context["seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                                                        </div>
                                                        ";
                // line 120
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 121
                    echo "                                                            <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                                                        ";
                }
                // line 122
                echo " 
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                        </tbody>                                  
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
    
    <script type=\"text/javascript\">
        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 140
            echo "            \$('#description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({height: 300});
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
    </script>
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog/author_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 146,  381 => 142,  372 => 140,  368 => 139,  354 => 127,  346 => 124,  339 => 122,  333 => 121,  331 => 120,  318 => 118,  310 => 117,  307 => 116,  303 => 115,  298 => 113,  295 => 112,  291 => 111,  284 => 107,  280 => 106,  272 => 101,  267 => 98,  253 => 92,  248 => 90,  238 => 85,  233 => 83,  221 => 78,  216 => 76,  209 => 73,  205 => 72,  200 => 69,  183 => 67,  179 => 66,  164 => 60,  154 => 59,  148 => 56,  140 => 51,  134 => 50,  129 => 48,  124 => 45,  118 => 43,  116 => 42,  112 => 41,  105 => 39,  97 => 34,  93 => 33,  88 => 31,  81 => 27,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}    */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <button type="submit" form="form-blog-author" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                     <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*                 </div>*/
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <ul class="breadcrumb">*/
/*                     {% for breadcrumb in breadcrumbs %}*/
/*                         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div> <!-- end of page-header class -->*/
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
/*                     <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*                 </div>*/
/*                 */
/*                 <div class="panel-body">*/
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-blog-author" class="form-horizontal">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-general">*/
/*                                 <div class="form-group required">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_name }}">{{ entry_name }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <input type="text" name="name" value="{{ name }}" class="form-control" />*/
/*                         				{% if error_name %}*/
/*                         					<span class="text-danger">{{ error_name }}</span>*/
/*                         				{% endif %}*/
/*                                     </div>*/
/*                                 </div>                        */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_image }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ no_image }}" /></a>*/
/*                                         <input type="hidden" name="image" value="{{ image }}" id="input-image" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <select name="status" class="form-control">*/
/*         				            		<option value="1" {% if status == 1 %} {{ "selected='selected'" }} {% endif %}>{{ text_enabled }}</option>*/
/*         				            		<option value="0" {% if status == 0 %} {{ "selected='selected'" }} {% endif %}>{{ text_disabled }}</option>*/
/*         				            	</select>*/
/*                                     </div>*/
/*                                 </div> */
/*                                                         */
/*                                 <ul class="nav nav-tabs" id="language">*/
/*                                     {% for language in languages %}*/
/*                                         <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                         */
/*                                 <div class="tab-content">*/
/*                                     {% for language in languages %}*/
/*                                         <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_description }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="author_description[{{ language.language_id }}][description]" id="description{{ language.language_id }}" class="form-control">{{ author_description[language.language_id] is defined ? author_description[language.language_id].description : '' }}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_meta_description }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="author_description[{{ language.language_id }}][meta_description]" class="form-control">{{ author_description[language.language_id] is defined ? author_description[language.language_id].meta_description : '' }}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_meta_keyword }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="author_description[{{ language.language_id }}][meta_keyword]" class="form-control">{{ author_description[language.language_id] is defined ? author_description[language.language_id].meta_keyword : '' }}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab-seo">*/
/*                                 <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>            */
/*                                 <div class="table-responsive">*/
/*                                     <table class="table table-bordered table-hover">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <td class="text-left">{{ entry_store }}</td>*/
/*                                                 <td class="text-left">{{ entry_keyword }}</td>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for store in stores %}*/
/*                                             <tr>*/
/*                                                 <td class="text-left">{{ store.name }}</td>*/
/*                                                 <td class="text-left">*/
/*                                                     {% for language in languages %}*/
/*                                                         <div class="input-group">*/
/*                                                             <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                                                             <input type="text" name="seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if seo_url[store.store_id][language.language_id] %}{{ seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                                                         </div>*/
/*                                                         {% if error_keyword[store.store_id][language.language_id] %}*/
/*                                                             <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                                                         {% endif %} */
/*                                                     {% endfor %}*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                         </tbody>                                  */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>        */
/*     </div>*/
/*     */
/*     <script type="text/javascript">*/
/*         {% for language in languages %}*/
/*             $('#description{{ language.language_id }}').summernote({height: 300});*/
/*         {% endfor %}*/
/*     */
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*     </script>*/
/* {{ footer }}*/
