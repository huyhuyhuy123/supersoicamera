<?php

/* extension/module/simple_blog/article_form.twig */
class __TwigTemplate_e20af08436b34753da6b603b278ee8c9ce1efb8162cc1be0cdb206edd1c9103b extends Twig_Template
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
                    <button type=\"submit\" form=\"form-blog-article\" data-toggle=\"tooltip\" title=\"";
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
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <ul class=\"breadcrumb\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "                </ul>
            </div>
        </div>
        
        <div class=\"container-fluid\">
            ";
        // line 21
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 22
            echo "                <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 26
        echo "            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
                </div>
                
                <div class=\"panel-body\">
                    <form action=\"";
        // line 33
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog-article\" class=\"form-horizontal\">
                        
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
        \t\t\t\t\t<li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>\t\t\t\t\t
        \t\t\t\t\t<li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_related"]) ? $context["tab_related"] : null);
        echo "</a></li>
                            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
                        </ul>
                        
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-general\">
                                
                                <ul class=\"nav nav-tabs\" id=\"language\">
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
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
        // line 50
        echo "                                </ul>
                                
                                 <div class=\"tab-content\">
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "                                        <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                            
                                            <div class=\"form-group required\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 57
            echo (isset($context["help_title"]) ? $context["help_title"] : null);
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <input type=\"text\" name=\"article_description[";
            // line 59
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][article_title]\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "article_title", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "article_title", array())) : (""));
            echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            if ($this->getAttribute((isset($context["error_article_title"]) ? $context["error_article_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) {
                // line 61
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_article_title"]) ? $context["error_article_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>
        \t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group required\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 67
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"article_description[";
            // line 69
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" id=\"description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "description", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
        \t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if ($this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", true, true)) {
                // line 71
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>
        \t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 73
            echo "                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 77
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"article_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" class=\"form-control\">";
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "meta_description", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 84
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <textarea name=\"article_description[";
            // line 86
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" class=\"form-control\">";
            echo (($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "meta_keyword", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                 </div>
                            </div>
                            
                            <div class=\"tab-pane\" id=\"tab-data\">
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 97
        echo (isset($context["help_featured_image"]) ? $context["help_featured_image"] : null);
        echo "\">";
        echo (isset($context["entry_featured_image"]) ? $context["entry_featured_image"] : null);
        echo "
                                    </label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                                \t\t\t<img src=\"";
        // line 101
        echo (isset($context["thumb2"]) ? $context["thumb2"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" />
                                \t\t</a>
                                        <input type=\"hidden\" name=\"featured_image\" value=\"";
        // line 103
        echo (isset($context["featured_image"]) ? $context["featured_image"] : null);
        echo "\" id=\"input-image\" />
                                    </div>
                                </div> 
                                
                                <table id=\"additional\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
        \t\t\t\t\t        \t<tr>
        \t\t\t\t\t            \t<td class=\"text-left\">";
        // line 110
        echo (isset($context["entry_additional_description"]) ? $context["entry_additional_description"] : null);
        echo "</td>
        \t\t\t\t\t            \t<td></td>
        \t\t\t\t\t\t\t\t</tr>
        \t\t\t\t\t\t\t</thead>    
                                    
                                    ";
        // line 115
        $context["module_row"] = 0;
        // line 116
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article_addition_description"]) ? $context["article_addition_description"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["additional_description"]) {
            // line 117
            echo "                                        <tbody id=\"additional-description";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\">
                                            <tr>
                                                <td class=\"text-left\">
                                                    
                                                    ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 122
                echo "        \t \t\t\t\t\t\t\t\t\t\t\t<div id=\"\">
        \t \t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"article_addition_description[";
                // line 123
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][additional]\" id=\"description-";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["additional_description"], $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "additional", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["additional_description"], $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "additional", array())) : (""));
                echo "</textarea>
        \t \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 124
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" align=\"top\" />
        \t \t\t\t\t\t\t\t\t\t\t\t</div>
        \t \t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                                    
                                                </td>
                                                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#additional-description";
            // line 129
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        ";
            // line 133
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 134
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['additional_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addDescription();\" data-toggle=\"tooltip\" title=\"";
        // line 140
        echo (isset($context["button_add_description"]) ? $context["button_add_description"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                            </td>
                                        </tr>
                                    </tfoot>                                    
                                </table>
                            </div>
                            
                            <div class=\"tab-pane\" id=\"tab-option\">
                            
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 150
        echo (isset($context["entry_allow_comment"]) ? $context["entry_allow_comment"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <select name=\"allow_comment\" class=\"form-control\">
     \t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 153
        echo ((((isset($context["allow_comment"]) ? $context["allow_comment"] : null) == 1)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
     \t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 154
        echo ((((isset($context["allow_comment"]) ? $context["allow_comment"] : null) == 0)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
     \t\t\t\t\t\t\t\t\t</select>
                                    </div>
                                </div>   
                                
                                <div class=\"form-group required\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 160
        echo (isset($context["entry_author_name"]) ? $context["entry_author_name"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <input type=\"text\" name=\"author_name\" value=\"";
        // line 162
        echo (isset($context["author_name"]) ? $context["author_name"] : null);
        echo "\" class=\"form-control\" />
    \t\t\t\t\t            \t<input type=\"hidden\" name=\"simple_blog_author_id\" value=\"";
        // line 163
        echo (isset($context["simple_blog_author_id"]) ? $context["simple_blog_author_id"] : null);
        echo "\" />
    \t\t\t\t\t            \t";
        // line 164
        if ((isset($context["error_author_name"]) ? $context["error_author_name"] : null)) {
            // line 165
            echo "    \t\t\t\t\t            \t\t<span class=\"text-danger\">";
            echo (isset($context["error_author_name"]) ? $context["error_author_name"] : null);
            echo "</span>
    \t\t\t\t\t            \t";
        }
        // line 167
        echo "                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 171
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto; margin-bottom:0;\">
                                            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 175
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        ";
            // line 177
            if (twig_in_filter($this->getAttribute($context["category"], "simple_blog_category_id", array()), (isset($context["article_category"]) ? $context["article_category"] : null))) {
                // line 178
                echo "        \t\t\t\t\t\t\t                    \t<input type=\"checkbox\" name=\"article_category[]\" value=\"";
                echo $this->getAttribute($context["category"], "simple_blog_category_id", array());
                echo "\" checked=\"checked\" />
        \t\t\t\t\t\t\t                    \t";
                // line 179
                echo $this->getAttribute($context["category"], "name", array());
                echo "
        \t\t\t\t\t\t\t                    ";
            } else {
                // line 181
                echo "        \t\t\t\t\t\t\t\t                    <input type=\"checkbox\" name=\"article_category[]\" value=\"";
                echo $this->getAttribute($context["category"], "simple_blog_category_id", array());
                echo "\" />
        \t\t\t\t\t\t\t\t                    ";
                // line 182
                echo $this->getAttribute($context["category"], "name", array());
                echo "
        \t\t\t\t\t\t\t                    ";
            }
            // line 184
            echo "                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                        </div>
                                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 188
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
                                    </div>
                                </div> 
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 193
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto; margin-bottom:0;\">
                                            ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 197
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        ";
            // line 199
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["article_store"]) ? $context["article_store"] : null))) {
                // line 200
                echo "        \t\t\t\t\t\t\t\t                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
        \t\t\t\t\t\t\t\t                    ";
                // line 201
                echo $this->getAttribute($context["store"], "name", array());
                echo "
        \t\t\t\t\t\t\t                    ";
            } else {
                // line 203
                echo "        \t\t\t\t\t\t\t\t                    <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
        \t\t\t\t\t\t\t\t                    ";
                // line 204
                echo $this->getAttribute($context["store"], "name", array());
                echo "
        \t\t\t\t\t\t\t                    ";
            }
            // line 206
            echo "                                                    </label>
                                                </div>   
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                                 
                                        </div>                                        
                                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 210
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>                                      
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 215
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <input type=\"text\" name=\"sort_order\" value=\"";
        // line 217
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" class=\"form-control\" />
                                    </div>
                                </div>  
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 222
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <select name=\"status\" class=\"form-control\">
    \t\t\t\t\t            \t\t<option value=\"1\" ";
        // line 225
        echo ((((isset($context["status"]) ? $context["status"] : null) == 1)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
    \t\t\t\t\t            \t\t<option value=\"0\" ";
        // line 226
        echo ((((isset($context["status"]) ? $context["status"] : null) == 0)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
    \t\t\t\t\t            \t</select>
                                    </div>
                                </div> 
                            </div>
                            
                            <div class=\"tab-pane\" id=\"tab-related\">
                                
                                <div class=\"form-group\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 235
        echo (isset($context["help_article_related_method"]) ? $context["help_article_related_method"] : null);
        echo "\">";
        echo (isset($context["entry_article_related_method"]) ? $context["entry_article_related_method"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <select name=\"related_article\" onchange=\"getRelatedMethod(this.value);\" class=\"form-control\">
     \t\t\t\t\t\t\t\t\t\t<option value=\"category_wise\" ";
        // line 238
        echo ((((isset($context["related_article"]) ? $context["related_article"] : null) == "category_wise")) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["entry_category_wise"]) ? $context["entry_category_wise"] : null);
        echo "</option>
     \t\t\t\t\t\t\t\t\t\t<option value=\"manufacturer_wise\" ";
        // line 239
        echo ((((isset($context["related_article"]) ? $context["related_article"] : null) == "manufacturer_wise")) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["entry_manufacturer_wise"]) ? $context["entry_manufacturer_wise"] : null);
        echo "</option>
     \t\t\t\t\t\t\t\t\t\t<option value=\"product_wise\" ";
        // line 240
        echo ((((isset($context["related_article"]) ? $context["related_article"] : null) == "product_wise")) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["entry_product_wise"]) ? $context["entry_product_wise"] : null);
        echo "</option>
     \t\t\t\t\t\t\t\t\t</select>
                                    </div>
                                </div> 
                                
                                <div class=\"form-group\" id=\"category-wise\" style=\"display:none\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 246
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto; margin-bottom:0;\">
                                            ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["default_categories"]) ? $context["default_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 250
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"category_wise[]\" value=\"";
            // line 252
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\"
                                                            ";
            // line 253
            if (array_key_exists("category_ids", $context)) {
                // line 254
                echo "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["category_ids"]) ? $context["category_ids"] : null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 255
                    echo "                                                                    ";
                    if (($this->getAttribute((isset($context["category_ids"]) ? $context["category_ids"] : null), "i", array()) == $this->getAttribute($context["category"], "category_id", array()))) {
                        // line 256
                        echo "                                                                        ";
                        echo "checked='checked'";
                        echo "
                                                                    ";
                    }
                    // line 258
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "                                                            ";
            }
            // line 260
            echo "                                                        />                  
                                                        ";
            // line 261
            echo $this->getAttribute($context["category"], "name", array());
            echo " 
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                        </div>
                                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 266
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
                                    </div>
                                </div> 
                                
                                <div class=\"form-group\" id=\"manufacturer-wise\" style=\"display:none\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 271
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto; margin-bottom:0;\">
                                            ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["default_manufacturers"]) ? $context["default_manufacturers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 275
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"manufacturer_wise[]\" value=\"";
            // line 277
            echo $this->getAttribute($context["manufacturer"], "manufacturer_id", array());
            echo "\"
                                                        ";
            // line 278
            if (array_key_exists("manufacturer_ids", $context)) {
                // line 279
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["manufacturer_ids"]) ? $context["manufacturer_ids"] : null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 280
                    echo "                                                                ";
                    if (($this->getAttribute((isset($context["manufacturer_ids"]) ? $context["manufacturer_ids"] : null), "i", array()) == $this->getAttribute($context["manufacturer"], "manufacturer_id", array()))) {
                        // line 281
                        echo "                                                                    ";
                        echo "checked='checked'";
                        echo "
                                                                ";
                    }
                    // line 283
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "                                                        ";
            }
            // line 285
            echo "                                                        />                    
                    \t\t\t\t\t\t\t        ";
            // line 286
            echo $this->getAttribute($context["manufacturer"], "name", array());
            echo "
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                                        </div>
                                        <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\">";
        // line 291
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</a> / <a onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</a>
                                    </div>
                                </div> 
                                
                                <div class=\"form-group\" id=\"product-wise\" style=\"display:inherit\">
                                    <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 296
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                                    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                        <input type=\"text\" name=\"product\" value=\"\" class=\"form-control\" />
                                        <div id=\"product-wise-list\" class=\"well well-sm\" style=\"height: 150px; overflow: auto; margin-bottom:0;\">                      
                                            ";
        // line 300
        if (array_key_exists("products", $context)) {
            // line 301
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 302
                echo "                                                    <div id=\"product-wise-list";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["product"], "name", array());
                echo "
                                            \t\t\t<input type=\"hidden\" name=\"product_wise[]\" value=\"";
                // line 303
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" />
                                            \t\t</div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "                                            ";
        }
        echo "                     
                                        </div>
                                        
                                    </div>
                                </div> 
                                
                                <div class=\"form-group\">
                                    <h3 class=\"text-center\">";
        // line 313
        echo (isset($context["entry_blog_related_articles"]) ? $context["entry_blog_related_articles"] : null);
        echo "</h3>
                                </div>
                                
                                <table id=\"related-article\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
        \t\t\t\t\t        \t<tr>
        \t\t\t\t\t            \t<td class=\"text-left\"> <span data-toggle=\"tooltip\" title=\"";
        // line 319
        echo (isset($context["help_related_article_name"]) ? $context["help_related_article_name"] : null);
        echo "\">";
        echo (isset($context["entry_related_article_name"]) ? $context["entry_related_article_name"] : null);
        echo "</td>
        \t\t\t\t\t            \t<td class=\"text-left\">";
        // line 320
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
        \t\t\t\t\t            \t<td class=\"text-left\">";
        // line 321
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</td>
        \t\t\t\t\t            \t<td></td>
        \t\t\t\t\t\t\t\t</tr>
        \t\t\t\t\t\t\t</thead>   
                                    
                                    ";
        // line 326
        $context["article_row"] = 0;
        // line 327
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_related_articles"]) ? $context["blog_related_articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["related_articles"]) {
            // line 328
            echo "                                        
                                        <tbody id=\"article-row";
            // line 329
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "\">
        \t\t\t\t\t\t\t\t\t<tr>
        \t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
        \t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"blog_related_articles[";
            // line 332
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "][article_title]\" value=\"";
            echo $this->getAttribute($context["related_articles"], "article_title", array());
            echo "\" id=\"article-title-";
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "\" onkeyup=\"getArticles(";
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo ", this.value);\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"blog_related_articles[";
            // line 333
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "][simple_blog_article_related_id]\" value=\"";
            echo $this->getAttribute($context["related_articles"], "simple_blog_article_related_id", array());
            echo "\" />
        \t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
        \t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"blog_related_articles[";
            // line 336
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["related_articles"], "sort_order", array());
            echo "\" class=\"form-control\" />
        \t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t<td class=\"left\">
        \t\t\t\t\t\t\t\t\t\t\t<select name=\"blog_related_articles[";
            // line 339
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "][status]\" class=\"form-control\">
        \t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            if ($this->getAttribute($context["related_articles"], "status", array())) {
                // line 341
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 342
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
        \t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 344
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 345
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
        \t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 347
            echo "        \t\t\t\t\t\t\t\t\t\t\t</select>
        \t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#article-row";
            // line 350
            echo (isset($context["article_row"]) ? $context["article_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                                                </td>\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t        </tbody>
                                        
                                        ";
            // line 355
            $context["article_row"] = ((isset($context["article_row"]) ? $context["article_row"] : null) + 1);
            // line 356
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_articles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                                    
                                    <tfoot>
        \t            \t\t\t\t<tr>
        \t              \t\t\t\t\t<td colspan=\"3\"></td>
        \t              \t\t\t\t\t<td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addArticles();\" data-toggle=\"tooltip\" title=\"";
        // line 362
        echo (isset($context["button_add_articles"]) ? $context["button_add_articles"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                            </td>
        \t            \t\t\t\t</tr>
        \t          \t\t\t\t</tfoot>
                                    
                                </table>
                                
                            </div>
                            <div class=\"tab-pane\" id=\"tab-seo\">
                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 371
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 376
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                                <td class=\"text-left\">";
        // line 377
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 382
            echo "                                            <tr>
                                                <td class=\"text-left\">";
            // line 383
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                                <td class=\"text-left\">
                                                    ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 386
                echo "                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-addon\"><img src=\"language/";
                // line 387
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                                                            <input type=\"text\" name=\"seo_url[";
                // line 388
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
                // line 390
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 391
                    echo "                                                            <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                                                        ";
                }
                // line 392
                echo " 
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "                                        </tbody>                                  
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </form>
                </div>            
        </div>
        
    </div>
    
    <script type=\"text/javascript\">
        
        ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 411
            echo "            \$('#description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({height: 300});
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "    
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
    </script>
    
    <script type=\"text/javascript\">
\t\t";
        // line 419
        $context["module_row"] = 0;
        // line 420
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article_addition_description"]) ? $context["article_addition_description"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 421
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 422
                echo "                \$('#description-";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "').summernote({height: 100});  
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            echo "            ";
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 425
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "\t</script>
    
    <script type=\"text/javascript\">
        
        \$('input[name=\\'author_name\\']').autocomplete({
        \t'source': function(request, response) {
        \t\t\$.ajax({
                    url: 'index.php?route=extension/module/simple_blog/author/autocomplete&user_token=";
        // line 433
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&author_name=' +  encodeURIComponent(request),
        \t\t\tdataType: 'json',
        \t\t\tsuccess: function(json) {
        \t\t\t\tresponse(\$.map(json, function(item) {
        \t\t\t\t\treturn {
        \t\t\t\t\t\tlabel: item['name'],
        \t\t\t\t\t\tvalue: item['simple_blog_author_id']
        \t\t\t\t\t}
        \t\t\t\t}));
        \t\t\t}
        \t\t});
        \t},
        \t'select': function(item) {
        \t\t\$('input[name=\\'author_name\\']').val(item['label']);
                \$('input[name=\\'simple_blog_author_id\\']').val(item['value']);
        \t}
        });    
        
    </script>
    
    <script type=\"text/javascript\">
        
        var module_row = ";
        // line 455
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";
        
        function addDescription() {
            html  = '<tbody id=\"additional-description' + module_row + '\">';
            
            html += '   <tr>';
            html += '       <td class=\"text-left\">';
            html += '           ';
            ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 464
            echo "                html += '<div id=\"\">'
\t\t\t\thtml += '\t<textarea name=\"article_addition_description[' + module_row + '][";
            // line 465
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][additional]\" id=\"description-' + module_row + '-";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"></textarea> <img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" align=\"top\" />';
\t\t\t\thtml += '</div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "            html += '           ';
            html += '       </td>';
            
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#additional-description' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 471
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            
            html += '   </tr>';
            
            html += '</tbody>';
            
            \$('#additional tfoot').before(html);
            
            ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 480
            echo "                \$('#description-' + module_row + '-";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({height: 100});    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        echo "            
            module_row++;            
        }
           
    </script>
    
    
    <script type=\"text/javascript\">
\t\t\$(document).ready(function() {\t\t\t
\t\t\t";
        // line 491
        if (((isset($context["related_article"]) ? $context["related_article"] : null) == "product_wise")) {
            // line 492
            echo "\t\t\t\t\$(\"#category-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"inherit\"});\t\t\t\t
\t\t\t";
        } elseif ((        // line 495
(isset($context["related_article"]) ? $context["related_article"] : null) == "category_wise")) {
            // line 496
            echo "\t\t\t\t\$(\"#category-wise\").css({display: \"inherit\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"none\"});\t
\t\t\t";
        } elseif ((        // line 499
(isset($context["related_article"]) ? $context["related_article"] : null) == "manufacturer_wise")) {
            // line 500
            echo "\t\t\t\t\$(\"#category-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"inherit\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"none\"});\t
\t\t\t";
        }
        // line 504
        echo "\t\t});
\t</script>
    
    <script type\"text/javacript\">
\t\tfunction getRelatedMethod(value) {
\t\t\tif(value == 'product_wise') {
\t\t\t\t\$(\"#category-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"inherit\"});\t
\t\t\t} else if(value == 'category_wise') {
\t\t\t\t\$(\"#category-wise\").css({display: \"inherit\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"none\"});\t
\t\t\t} else if(value == 'manufacturer_wise') {
\t\t\t\t\$(\"#category-wise\").css({display: \"none\"});
\t\t\t\t\$(\"#manufacturer-wise\").css({display: \"inherit\"});
\t\t\t\t\$(\"#product-wise\").css({display: \"none\"});
\t\t\t}
\t\t}
\t</script>\t
    
    <script type=\"text/javascript\">
    
        \$('input[name=\\'product\\']').autocomplete({
        \t'source': function(request, response) {
        \t\t\$.ajax({
        \t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 530
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
        \t\t\tdataType: 'json',\t\t\t
        \t\t\tsuccess: function(json) {
        \t\t\t\tresponse(\$.map(json, function(item) {
        \t\t\t\t\treturn {
        \t\t\t\t\t\tlabel: item['name'],
        \t\t\t\t\t\tvalue: item['product_id']
        \t\t\t\t\t}
        \t\t\t\t}));
        \t\t\t}
        \t\t});
        \t},
        \t'select': function(item) {
        \t\t\$('input[name=\\'product\\']').val('');
        \t\t
        \t\t\$('#product-wise-list' + item['value']).remove();
        \t\t
        \t\t\$('#product-wise-list').append('<div id=\"product-wise-list' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_wise[]\" value=\"' + item['value'] + '\" /></div>');\t
        \t}
        });
        
        \$('#product-wise-list').delegate('.fa-minus-circle', 'click', function() {
        \t\$(this).parent().remove();
        });
        
    </script>
    
    <script type=\"text/javascript\">
\t\tvar article_row = ";
        // line 558
        echo (isset($context["article_row"]) ? $context["article_row"] : null);
        echo ";
\t\t
\t\tfunction addArticles() {
\t\t\t
\t\t\thtml  = '<tbody id=\"article-row' + article_row + '\">';
\t\t\thtml += '\t<tr>';
\t\t\thtml += '\t\t<td class=\"text-left\">';
\t\t\thtml += '\t\t\t<input type=\"text\" name=\"blog_related_articles[' + article_row + '][article_title]\" value=\"\" id=\"article-title-' + article_row + '\" onkeyup=\"getArticles(' + article_row + ', this.value);\" class=\"form-control\" /> <input type=\"hidden\" name=\"blog_related_articles[' + article_row + '][simple_blog_article_related_id]\" value=\"0\" />';
\t\t\thtml += '\t\t</td>';\t\t\t
\t\t\thtml += '\t\t<td class=\"text-left\">';
\t\t\thtml += '\t\t\t<input type=\"text\" name=\"blog_related_articles[' + article_row + '][sort_order]\" value=\"\" class=\"form-control\" />';
\t\t\thtml += '\t\t</td>';\t\t\t
\t\t\thtml += '\t\t<td class=\"text-left\">';
\t\t\thtml += '\t\t\t<select name=\"blog_related_articles[' + article_row + '][status]\" class=\"form-control\">';
\t\t\thtml +='\t\t\t\t<option value=\"1\">";
        // line 572
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>';
\t\t\thtml +='\t\t\t\t<option value=\"0\">";
        // line 573
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>';
\t\t\thtml += '\t\t\t</select>';
\t\t\thtml += '\t\t</td>';\t\t\t
\t\t\thtml += '\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#article-row' + article_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 576
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\thtml += '\t</tr>';
\t\t\thtml += '</tbody>';
\t\t\t
\t\t\t\$('#related-article tfoot').before(html);\t
\t\t\t
\t\t\tarticle_row++;\t\t
\t\t}\t\t
\t</script>
    
    <script type=\"text/javascript\">
        function getArticles(article_row, value) {
            \$('input[name=\\'blog_related_articles[' + article_row + '][article_title]\\']').autocomplete({
            \t'source': function(request, response) {
            \t\t\$.ajax({
                        url: 'index.php?route=extension/module/simple_blog/article/autocomplete_article&user_token=";
        // line 591
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&simple_blog_article_id=";
        echo (isset($context["simple_blog_article_id"]) ? $context["simple_blog_article_id"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
            \t\t\tdataType: 'json',
            \t\t\tsuccess: function(json) {
            \t\t\t\tresponse(\$.map(json, function(item) {
            \t\t\t\t\treturn {
            \t\t\t\t\t\tlabel: item['article_title'],
            \t\t\t\t\t\tvalue: item['simple_blog_article_id']
            \t\t\t\t\t}
            \t\t\t\t}));
            \t\t\t}
            \t\t});
            \t},
            \t'select': function(item) {
            \t\t\$('input[name=\\'filter_name\\']').val(item['label']);
                    \$('input[name=\\'blog_related_articles[' + article_row + '][article_title]\\']').val(item['label']);
\t\t\t\t\t\$('input[name=\\'blog_related_articles[' + article_row + '][simple_blog_article_related_id]\\']').val(item['value']);
            \t}
            });    
        }
    </script>
    
";
        // line 612
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog/article_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1340 => 612,  1314 => 591,  1296 => 576,  1290 => 573,  1286 => 572,  1269 => 558,  1238 => 530,  1210 => 504,  1204 => 500,  1202 => 499,  1197 => 496,  1195 => 495,  1190 => 492,  1188 => 491,  1177 => 482,  1168 => 480,  1164 => 479,  1153 => 471,  1148 => 468,  1131 => 465,  1128 => 464,  1124 => 463,  1113 => 455,  1088 => 433,  1079 => 426,  1073 => 425,  1070 => 424,  1059 => 422,  1054 => 421,  1049 => 420,  1047 => 419,  1039 => 413,  1030 => 411,  1026 => 410,  1011 => 397,  1003 => 394,  996 => 392,  990 => 391,  988 => 390,  975 => 388,  967 => 387,  964 => 386,  960 => 385,  955 => 383,  952 => 382,  948 => 381,  941 => 377,  937 => 376,  929 => 371,  917 => 362,  910 => 357,  904 => 356,  902 => 355,  892 => 350,  887 => 347,  882 => 345,  877 => 344,  872 => 342,  867 => 341,  865 => 340,  861 => 339,  853 => 336,  845 => 333,  835 => 332,  829 => 329,  826 => 328,  821 => 327,  819 => 326,  811 => 321,  807 => 320,  801 => 319,  792 => 313,  781 => 306,  772 => 303,  765 => 302,  760 => 301,  758 => 300,  751 => 296,  741 => 291,  738 => 290,  728 => 286,  725 => 285,  722 => 284,  716 => 283,  710 => 281,  707 => 280,  702 => 279,  700 => 278,  696 => 277,  692 => 275,  688 => 274,  682 => 271,  672 => 266,  669 => 265,  659 => 261,  656 => 260,  653 => 259,  647 => 258,  641 => 256,  638 => 255,  633 => 254,  631 => 253,  627 => 252,  623 => 250,  619 => 249,  613 => 246,  602 => 240,  596 => 239,  590 => 238,  582 => 235,  568 => 226,  562 => 225,  556 => 222,  548 => 217,  543 => 215,  533 => 210,  529 => 208,  521 => 206,  516 => 204,  511 => 203,  506 => 201,  501 => 200,  499 => 199,  495 => 197,  491 => 196,  485 => 193,  475 => 188,  472 => 187,  464 => 184,  459 => 182,  454 => 181,  449 => 179,  444 => 178,  442 => 177,  438 => 175,  434 => 174,  428 => 171,  422 => 167,  416 => 165,  414 => 164,  410 => 163,  406 => 162,  401 => 160,  390 => 154,  384 => 153,  378 => 150,  365 => 140,  358 => 135,  352 => 134,  350 => 133,  341 => 129,  337 => 127,  324 => 124,  312 => 123,  309 => 122,  305 => 121,  297 => 117,  292 => 116,  290 => 115,  282 => 110,  272 => 103,  265 => 101,  256 => 97,  248 => 91,  235 => 86,  230 => 84,  220 => 79,  215 => 77,  209 => 73,  203 => 71,  201 => 70,  193 => 69,  188 => 67,  182 => 63,  176 => 61,  174 => 60,  168 => 59,  161 => 57,  154 => 54,  150 => 53,  145 => 50,  128 => 48,  124 => 47,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  92 => 33,  85 => 29,  80 => 26,  72 => 22,  70 => 21,  63 => 16,  52 => 14,  48 => 13,  43 => 11,  36 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/*     {{ column_left }}*/
/*     */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <button type="submit" form="form-blog-article" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                     <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*                 </div>*/
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
/*                     <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*                 </div>*/
/*                 */
/*                 <div class="panel-body">*/
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-blog-article" class="form-horizontal">*/
/*                         */
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*         					<li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>					*/
/*         					<li><a href="#tab-related" data-toggle="tab">{{ tab_related }}</a></li>*/
/*                             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*                         </ul>*/
/*                         */
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-general">*/
/*                                 */
/*                                 <ul class="nav nav-tabs" id="language">*/
/*                                     {% for language in languages %}*/
/*                                         <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                                 */
/*                                  <div class="tab-content">*/
/*                                     {% for language in languages %}*/
/*                                         <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                             */
/*                                             <div class="form-group required">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_title }}">{{ entry_title }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <input type="text" name="article_description[{{ language.language_id }}][article_title]" value="{{ article_description[language.language_id].article_title is defined ? article_description[language.language_id].article_title : '' }}" class="form-control" />*/
/*         											{% if error_article_title[language.language_id] is defined %}*/
/*         												<span class="text-danger">{{ error_article_title[language.language_id] }}</span>*/
/*         											{% endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group required">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_description }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="article_description[{{ language.language_id }}][description]" id="description{{ language.language_id }}" class="form-control">{{ article_description[language.language_id].description is defined ? article_description[language.language_id].description : '' }}</textarea>*/
/*         											{% if error_description[language.language_id] is defined %}*/
/*         												<span class="text-danger">{{ error_description[language.language_id] }}</span>*/
/*         											{% endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_meta_description }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="article_description[{{ language.language_id }}][meta_description]" class="form-control">{{ article_description[language.language_id].meta_description is defined ? article_description[language.language_id].meta_description : '' }}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_meta_keyword }}</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <textarea name="article_description[{{ language.language_id }}][meta_keyword]" class="form-control">{{ article_description[language.language_id].meta_keyword is defined ? article_description[language.language_id].meta_keyword : '' }}</textarea>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                  </div>*/
/*                             </div>*/
/*                             */
/*                             <div class="tab-pane" id="tab-data">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">*/
/*                                         <span data-toggle="tooltip" title="{{ help_featured_image }}">{{ entry_featured_image }}*/
/*                                     </label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <a href="" id="thumb-image" data-toggle="image" class="img-thumbnail">*/
/*                                 			<img src="{{ thumb2 }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/*                                 		</a>*/
/*                                         <input type="hidden" name="featured_image" value="{{ featured_image }}" id="input-image" />*/
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <table id="additional" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*         					        	<tr>*/
/*         					            	<td class="text-left">{{ entry_additional_description }}</td>*/
/*         					            	<td></td>*/
/*         								</tr>*/
/*         							</thead>    */
/*                                     */
/*                                     {% set module_row = 0 %}*/
/*                                     {% for additional_description in article_addition_description %}*/
/*                                         <tbody id="additional-description{{ module_row }}">*/
/*                                             <tr>*/
/*                                                 <td class="text-left">*/
/*                                                     */
/*                                                     {% for language in languages %}*/
/*         	 											<div id="">*/
/*         	 												<textarea name="article_addition_description[{{ module_row }}][{{ language.language_id }}][additional]" id="description-{{ module_row }}-{{ language.language_id }}" class="form-control">{{ additional_description[language.language_id].additional is defined ? additional_description[language.language_id].additional : "" }}</textarea>*/
/*         	 												<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" align="top" />*/
/*         	 											</div>*/
/*         	 										{% endfor %}*/
/*                                                     */
/*                                                 </td>*/
/*                                                 <td class="text-left"><button type="button" onclick="$('#additional-description{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         </tbody>*/
/*                                         {% set module_row = module_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     */
/*                                     <tfoot>*/
/*                                         <tr>*/
/*                                             <td></td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button" onclick="addDescription();" data-toggle="tooltip" title="{{ button_add_description }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </tfoot>                                    */
/*                                 </table>*/
/*                             </div>*/
/*                             */
/*                             <div class="tab-pane" id="tab-option">*/
/*                             */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_allow_comment }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <select name="allow_comment" class="form-control">*/
/*      										<option value="1" {{ allow_comment == 1 ? "selected='selected'" : '' }}>{{ text_yes }}</option>*/
/*      										<option value="0" {{ allow_comment == 0 ? "selected='selected'" : '' }}>{{ text_no }}</option>*/
/*      									</select>*/
/*                                     </div>*/
/*                                 </div>   */
/*                                 */
/*                                 <div class="form-group required">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_author_name }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <input type="text" name="author_name" value="{{ author_name }}" class="form-control" />*/
/*     					            	<input type="hidden" name="simple_blog_author_id" value="{{ simple_blog_author_id }}" />*/
/*     					            	{% if error_author_name %}*/
/*     					            		<span class="text-danger">{{ error_author_name }}</span>*/
/*     					            	{% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_category }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <div class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0;">*/
/*                                             {% for category in categories %}*/
/*                                                 <div class="checkbox">*/
/*                                                     <label>*/
/*                                                         {% if category.simple_blog_category_id in article_category %}*/
/*         							                    	<input type="checkbox" name="article_category[]" value="{{ category.simple_blog_category_id }}" checked="checked" />*/
/*         							                    	{{ category.name }}*/
/*         							                    {% else %}*/
/*         								                    <input type="checkbox" name="article_category[]" value="{{ category.simple_blog_category_id }}" />*/
/*         								                    {{ category.name }}*/
/*         							                    {% endif %}*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_store }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <div class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0;">*/
/*                                             {% for store in stores %}*/
/*                                                 <div class="checkbox">*/
/*                                                     <label>*/
/*                                                         {% if store.store_id in article_store %}*/
/*         								                    <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*         								                    {{ store.name }}*/
/*         							                    {% else %}*/
/*         								                    <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" />*/
/*         								                    {{ store.name }}*/
/*         							                    {% endif %}*/
/*                                                     </label>*/
/*                                                 </div>   */
/*                                             {% endfor %}                                 */
/*                                         </div>                                        */
/*                                         <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>                                      */
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_sort_order }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <input type="text" name="sort_order" value="{{ sort_order }}" class="form-control" />*/
/*                                     </div>*/
/*                                 </div>  */
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <select name="status" class="form-control">*/
/*     					            		<option value="1" {{ status == 1 ? "selected='selected'" : '' }}>{{ text_enabled }}</option>*/
/*     					            		<option value="0" {{ status == 0 ? "selected='selected'" : '' }}>{{ text_disabled }}</option>*/
/*     					            	</select>*/
/*                                     </div>*/
/*                                 </div> */
/*                             </div>*/
/*                             */
/*                             <div class="tab-pane" id="tab-related">*/
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_article_related_method }}">{{ entry_article_related_method }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <select name="related_article" onchange="getRelatedMethod(this.value);" class="form-control">*/
/*      										<option value="category_wise" {{ related_article == 'category_wise' ? "selected='selected'" : '' }}>{{ entry_category_wise }}</option>*/
/*      										<option value="manufacturer_wise" {{ related_article == 'manufacturer_wise' ? "selected='selected'" : '' }}>{{ entry_manufacturer_wise }}</option>*/
/*      										<option value="product_wise" {{ related_article == 'product_wise' ? "selected='selected'" : '' }}>{{ entry_product_wise }}</option>*/
/*      									</select>*/
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <div class="form-group" id="category-wise" style="display:none">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_category }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <div class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0;">*/
/*                                             {% for category in default_categories %}*/
/*                                                 <div class="checkbox">*/
/*                                                     <label>*/
/*                                                         <input type="checkbox" name="category_wise[]" value="{{ category.category_id }}"*/
/*                                                             {% if category_ids is defined %}*/
/*                                                                 {% for i in 0..category_ids|length %}*/
/*                                                                     {% if category_ids.i == category.category_id %}*/
/*                                                                         {{ "checked='checked'" }}*/
/*                                                                     {% endif %}*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         />                  */
/*                                                         {{ category.name }} */
/*                                                     </label>*/
/*                                                 </div>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <div class="form-group" id="manufacturer-wise" style="display:none">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_manufacturer }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <div class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0;">*/
/*                                             {% for manufacturer in default_manufacturers %}*/
/*                                                 <div class="checkbox">*/
/*                                                     <label>*/
/*                                                         <input type="checkbox" name="manufacturer_wise[]" value="{{ manufacturer.manufacturer_id }}"*/
/*                                                         {% if manufacturer_ids is defined %}*/
/*                                                             {% for i in 0..manufacturer_ids|length %}*/
/*                                                                 {% if manufacturer_ids.i == manufacturer.manufacturer_id %}*/
/*                                                                     {{ "checked='checked'" }}*/
/*                                                                 {% endif %}*/
/*                                                             {% endfor %}*/
/*                                                         {% endif %}*/
/*                                                         />                    */
/*                     							        {{ manufacturer.name }}*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <a onclick="$(this).parent().find(':checkbox').prop('checked', true);">{{ text_select_all }}</a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);">{{ text_unselect_all }}</a>*/
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <div class="form-group" id="product-wise" style="display:inherit">*/
/*                                     <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_product }}</label>*/
/*                                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                         <input type="text" name="product" value="" class="form-control" />*/
/*                                         <div id="product-wise-list" class="well well-sm" style="height: 150px; overflow: auto; margin-bottom:0;">                      */
/*                                             {% if products is defined %}*/
/*                                                 {% for product in products %}*/
/*                                                     <div id="product-wise-list{{ product.product_id }}"><i class="fa fa-minus-circle"></i> {{ product.name }}*/
/*                                             			<input type="hidden" name="product_wise[]" value="{{ product.product_id }}" />*/
/*                                             		</div>*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}                     */
/*                                         </div>*/
/*                                         */
/*                                     </div>*/
/*                                 </div> */
/*                                 */
/*                                 <div class="form-group">*/
/*                                     <h3 class="text-center">{{ entry_blog_related_articles }}</h3>*/
/*                                 </div>*/
/*                                 */
/*                                 <table id="related-article" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*         					        	<tr>*/
/*         					            	<td class="text-left"> <span data-toggle="tooltip" title="{{ help_related_article_name }}">{{ entry_related_article_name }}</td>*/
/*         					            	<td class="text-left">{{ entry_sort_order }}</td>*/
/*         					            	<td class="text-left">{{ entry_status }}</td>*/
/*         					            	<td></td>*/
/*         								</tr>*/
/*         							</thead>   */
/*                                     */
/*                                     {% set article_row = 0 %}*/
/*                                     {% for related_articles in blog_related_articles %}*/
/*                                         */
/*                                         <tbody id="article-row{{ article_row }}">*/
/*         									<tr>*/
/*         										<td class="text-left">*/
/*         											<input type="text" name="blog_related_articles[{{ article_row }}][article_title]" value="{{ related_articles.article_title }}" id="article-title-{{ article_row }}" onkeyup="getArticles({{ article_row }}, this.value);" class="form-control" />*/
/*         											<input type="hidden" name="blog_related_articles[{{ article_row }}][simple_blog_article_related_id]" value="{{ related_articles.simple_blog_article_related_id }}" />*/
/*         										</td>										*/
/*         										<td class="text-left">*/
/*         											<input type="text" name="blog_related_articles[{{ article_row }}][sort_order]" value="{{ related_articles.sort_order }}" class="form-control" />*/
/*         										</td>										*/
/*         										<td class="left">*/
/*         											<select name="blog_related_articles[{{ article_row }}][status]" class="form-control">*/
/*         												{% if related_articles.status %}*/
/*         													<option value="1" selected="selected">{{ text_enabled }}</option>*/
/*         													<option value="0">{{ text_disabled }}</option>*/
/*         												{% else %}*/
/*         													<option value="1">{{ text_enabled }}</option>*/
/*         													<option value="0" selected="selected">{{ text_disabled }}</option>*/
/*         												{% endif %}*/
/*         											</select>*/
/*         										</td>										*/
/*         										<td class="text-left">*/
/*                                                     <button type="button" onclick="$('#article-row{{ article_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/*                                                 </td>										*/
/*         									</tr>*/
/* 								        </tbody>*/
/*                                         */
/*                                         {% set article_row = article_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     */
/*                                     <tfoot>*/
/*         	            				<tr>*/
/*         	              					<td colspan="3"></td>*/
/*         	              					<td class="text-left">*/
/*                                                 <button type="button" onclick="addArticles();" data-toggle="tooltip" title="{{ button_add_articles }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>*/
/*                                             </td>*/
/*         	            				</tr>*/
/*         	          				</tfoot>*/
/*                                     */
/*                                 </table>*/
/*                                 */
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
/*                         </div>                        */
/*                     </form>*/
/*                 </div>            */
/*         </div>*/
/*         */
/*     </div>*/
/*     */
/*     <script type="text/javascript">*/
/*         */
/*         {% for language in languages %}*/
/*             $('#description{{ language.language_id }}').summernote({height: 300});*/
/*         {% endfor %}*/
/*     */
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*     </script>*/
/*     */
/*     <script type="text/javascript">*/
/* 		{% set module_row = 0 %}*/
/* 		{% for module in article_addition_description %}*/
/* 			{% for language in languages %}*/
/*                 $('#description-{{ module_row }}-{{ language.language_id }}').summernote({height: 100});  */
/* 			{% endfor %}*/
/*             {% set module_row = module_row + 1 %}*/
/* 		{% endfor %}*/
/* 	</script>*/
/*     */
/*     <script type="text/javascript">*/
/*         */
/*         $('input[name=\'author_name\']').autocomplete({*/
/*         	'source': function(request, response) {*/
/*         		$.ajax({*/
/*                     url: 'index.php?route=extension/module/simple_blog/author/autocomplete&user_token={{ user_token }}&author_name=' +  encodeURIComponent(request),*/
/*         			dataType: 'json',*/
/*         			success: function(json) {*/
/*         				response($.map(json, function(item) {*/
/*         					return {*/
/*         						label: item['name'],*/
/*         						value: item['simple_blog_author_id']*/
/*         					}*/
/*         				}));*/
/*         			}*/
/*         		});*/
/*         	},*/
/*         	'select': function(item) {*/
/*         		$('input[name=\'author_name\']').val(item['label']);*/
/*                 $('input[name=\'simple_blog_author_id\']').val(item['value']);*/
/*         	}*/
/*         });    */
/*         */
/*     </script>*/
/*     */
/*     <script type="text/javascript">*/
/*         */
/*         var module_row = {{ module_row }};*/
/*         */
/*         function addDescription() {*/
/*             html  = '<tbody id="additional-description' + module_row + '">';*/
/*             */
/*             html += '   <tr>';*/
/*             html += '       <td class="text-left">';*/
/*             html += '           ';*/
/*             {% for language in languages %}*/
/*                 html += '<div id="">'*/
/* 				html += '	<textarea name="article_addition_description[' + module_row + '][{{ language.language_id }}][additional]" id="description-' + module_row + '-{{ language.language_id }}" class="form-control"></textarea> <img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" align="top" />';*/
/* 				html += '</div>';*/
/*             {% endfor %}*/
/*             html += '           ';*/
/*             html += '       </td>';*/
/*             */
/*             html += '  <td class="text-left"><button type="button" onclick="$(\'#additional-description' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             */
/*             html += '   </tr>';*/
/*             */
/*             html += '</tbody>';*/
/*             */
/*             $('#additional tfoot').before(html);*/
/*             */
/*             {% for language in languages %}*/
/*                 $('#description-' + module_row + '-{{ language.language_id }}').summernote({height: 100});    */
/*             {% endfor %}*/
/*             */
/*             module_row++;            */
/*         }*/
/*            */
/*     </script>*/
/*     */
/*     */
/*     <script type="text/javascript">*/
/* 		$(document).ready(function() {			*/
/* 			{% if related_article == 'product_wise' %}*/
/* 				$("#category-wise").css({display: "none"});*/
/* 				$("#manufacturer-wise").css({display: "none"});*/
/* 				$("#product-wise").css({display: "inherit"});				*/
/* 			{% elseif related_article == 'category_wise' %}*/
/* 				$("#category-wise").css({display: "inherit"});*/
/* 				$("#manufacturer-wise").css({display: "none"});*/
/* 				$("#product-wise").css({display: "none"});	*/
/* 			{% elseif related_article == 'manufacturer_wise' %}*/
/* 				$("#category-wise").css({display: "none"});*/
/* 				$("#manufacturer-wise").css({display: "inherit"});*/
/* 				$("#product-wise").css({display: "none"});	*/
/* 			{% endif %}*/
/* 		});*/
/* 	</script>*/
/*     */
/*     <script type"text/javacript">*/
/* 		function getRelatedMethod(value) {*/
/* 			if(value == 'product_wise') {*/
/* 				$("#category-wise").css({display: "none"});*/
/* 				$("#manufacturer-wise").css({display: "none"});*/
/* 				$("#product-wise").css({display: "inherit"});	*/
/* 			} else if(value == 'category_wise') {*/
/* 				$("#category-wise").css({display: "inherit"});*/
/* 				$("#manufacturer-wise").css({display: "none"});*/
/* 				$("#product-wise").css({display: "none"});	*/
/* 			} else if(value == 'manufacturer_wise') {*/
/* 				$("#category-wise").css({display: "none"});*/
/* 				$("#manufacturer-wise").css({display: "inherit"});*/
/* 				$("#product-wise").css({display: "none"});*/
/* 			}*/
/* 		}*/
/* 	</script>	*/
/*     */
/*     <script type="text/javascript">*/
/*     */
/*         $('input[name=\'product\']').autocomplete({*/
/*         	'source': function(request, response) {*/
/*         		$.ajax({*/
/*         			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*         			dataType: 'json',			*/
/*         			success: function(json) {*/
/*         				response($.map(json, function(item) {*/
/*         					return {*/
/*         						label: item['name'],*/
/*         						value: item['product_id']*/
/*         					}*/
/*         				}));*/
/*         			}*/
/*         		});*/
/*         	},*/
/*         	'select': function(item) {*/
/*         		$('input[name=\'product\']').val('');*/
/*         		*/
/*         		$('#product-wise-list' + item['value']).remove();*/
/*         		*/
/*         		$('#product-wise-list').append('<div id="product-wise-list' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_wise[]" value="' + item['value'] + '" /></div>');	*/
/*         	}*/
/*         });*/
/*         */
/*         $('#product-wise-list').delegate('.fa-minus-circle', 'click', function() {*/
/*         	$(this).parent().remove();*/
/*         });*/
/*         */
/*     </script>*/
/*     */
/*     <script type="text/javascript">*/
/* 		var article_row = {{ article_row }};*/
/* 		*/
/* 		function addArticles() {*/
/* 			*/
/* 			html  = '<tbody id="article-row' + article_row + '">';*/
/* 			html += '	<tr>';*/
/* 			html += '		<td class="text-left">';*/
/* 			html += '			<input type="text" name="blog_related_articles[' + article_row + '][article_title]" value="" id="article-title-' + article_row + '" onkeyup="getArticles(' + article_row + ', this.value);" class="form-control" /> <input type="hidden" name="blog_related_articles[' + article_row + '][simple_blog_article_related_id]" value="0" />';*/
/* 			html += '		</td>';			*/
/* 			html += '		<td class="text-left">';*/
/* 			html += '			<input type="text" name="blog_related_articles[' + article_row + '][sort_order]" value="" class="form-control" />';*/
/* 			html += '		</td>';			*/
/* 			html += '		<td class="text-left">';*/
/* 			html += '			<select name="blog_related_articles[' + article_row + '][status]" class="form-control">';*/
/* 			html +='				<option value="1">{{ text_enabled }}</option>';*/
/* 			html +='				<option value="0">{{ text_disabled }}</option>';*/
/* 			html += '			</select>';*/
/* 			html += '		</td>';			*/
/* 			html += '		<td class="text-left"><button type="button" onclick="$(\'#article-row' + article_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 			html += '	</tr>';*/
/* 			html += '</tbody>';*/
/* 			*/
/* 			$('#related-article tfoot').before(html);	*/
/* 			*/
/* 			article_row++;		*/
/* 		}		*/
/* 	</script>*/
/*     */
/*     <script type="text/javascript">*/
/*         function getArticles(article_row, value) {*/
/*             $('input[name=\'blog_related_articles[' + article_row + '][article_title]\']').autocomplete({*/
/*             	'source': function(request, response) {*/
/*             		$.ajax({*/
/*                         url: 'index.php?route=extension/module/simple_blog/article/autocomplete_article&user_token={{ user_token }}&simple_blog_article_id={{ simple_blog_article_id }}&filter_name=' +  encodeURIComponent(request),*/
/*             			dataType: 'json',*/
/*             			success: function(json) {*/
/*             				response($.map(json, function(item) {*/
/*             					return {*/
/*             						label: item['article_title'],*/
/*             						value: item['simple_blog_article_id']*/
/*             					}*/
/*             				}));*/
/*             			}*/
/*             		});*/
/*             	},*/
/*             	'select': function(item) {*/
/*             		$('input[name=\'filter_name\']').val(item['label']);*/
/*                     $('input[name=\'blog_related_articles[' + article_row + '][article_title]\']').val(item['label']);*/
/* 					$('input[name=\'blog_related_articles[' + article_row + '][simple_blog_article_related_id]\']').val(item['value']);*/
/*             	}*/
/*             });    */
/*         }*/
/*     </script>*/
/*     */
/* {{ footer }}*/
