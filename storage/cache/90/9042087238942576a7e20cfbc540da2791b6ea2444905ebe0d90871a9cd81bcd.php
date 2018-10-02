<?php

/* extension/module/simple_blog.twig */
class __TwigTemplate_1082376d1961e0951d303e939975760e03a336fabb5bd7e0fba662ffd83f15f9 extends Twig_Template
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
                    <button type=\"submit\" form=\"form-simple-blog\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-simple-blog\" class=\"form-horizontal\">    
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 37
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <select name=\"simple_blog_status\" class=\"form-control\">
                                    <option value=\"1\" ";
        // line 40
        echo ((((isset($context["simple_blog_status"]) ? $context["simple_blog_status"] : null) == 1)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
    \t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 41
        echo ((((isset($context["simple_blog_status"]) ? $context["simple_blog_status"] : null) == 0)) ? ("selected='selected'") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
                                </select>
                            </div>
                        </div>   
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["help_simple_blog_seo_keyword"]) ? $context["help_simple_blog_seo_keyword"] : null);
        echo "\">";
        echo (isset($context["entry_simple_blog_seo_keyword"]) ? $context["entry_simple_blog_seo_keyword"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <input type=\"text\" name=\"simple_blog_seo_keyword\" value=\"";
        // line 49
        echo (isset($context["simple_blog_seo_keyword"]) ? $context["simple_blog_seo_keyword"] : null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>  
                        
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 55
        echo (isset($context["help_simple_blog_heading"]) ? $context["help_simple_blog_heading"] : null);
        echo "\">";
        echo (isset($context["entry_simple_blog_heading"]) ? $context["entry_simple_blog_heading"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <input type=\"text\" name=\"simple_blog_footer_heading\" value=\"";
        // line 57
        echo (isset($context["simple_blog_footer_heading"]) ? $context["simple_blog_footer_heading"] : null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>   
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 62
        echo (isset($context["help_blog_module_heading"]) ? $context["help_blog_module_heading"] : null);
        echo "\">";
        echo (isset($context["entry_blog_module_heading"]) ? $context["entry_blog_module_heading"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <input type=\"text\" name=\"simple_blog_heading\" value=\"";
        // line 64
        echo (isset($context["simple_blog_heading"]) ? $context["simple_blog_heading"] : null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>   
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 69
        echo (isset($context["help_product_related_heading"]) ? $context["help_product_related_heading"] : null);
        echo "\">";
        echo (isset($context["entry_product_related_heading"]) ? $context["entry_product_related_heading"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <input type=\"text\" name=\"simple_blog_product_related_heading\" value=\"";
        // line 71
        echo (isset($context["simple_blog_product_related_heading"]) ? $context["simple_blog_product_related_heading"] : null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>  
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo (isset($context["help_comment_related_heading"]) ? $context["help_comment_related_heading"] : null);
        echo "\">";
        echo (isset($context["entry_comment_related_heading"]) ? $context["entry_comment_related_heading"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <input type=\"text\" name=\"simple_blog_comment_related_heading\" value=\"";
        // line 78
        echo (isset($context["simple_blog_comment_related_heading"]) ? $context["simple_blog_comment_related_heading"] : null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 84
        echo (isset($context["help_display_category"]) ? $context["help_display_category"] : null);
        echo "\">";
        echo (isset($context["entry_display_category"]) ? $context["entry_display_category"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"checkbox-inline\">
                                    ";
        // line 87
        if ((isset($context["simple_blog_display_category"]) ? $context["simple_blog_display_category"] : null)) {
            // line 88
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_display_category\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_display_category\" value=\"0\" /> ";
            // line 89
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 91
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_display_category\" value=\"1\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_display_category\" value=\"0\" checked=\"checked\" /> ";
            // line 92
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 94
        echo "                                </div>
                            </div>
                        </div>   
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 99
        echo (isset($context["help_comment_approval"]) ? $context["help_comment_approval"] : null);
        echo "\">";
        echo (isset($context["entry_comment_approval"]) ? $context["entry_comment_approval"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"checkbox-inline\">
                                    ";
        // line 102
        if ((isset($context["simple_blog_comment_auto_approval"]) ? $context["simple_blog_comment_auto_approval"] : null)) {
            // line 103
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_comment_auto_approval\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_comment_auto_approval\" value=\"0\" /> ";
            // line 104
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 106
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_comment_auto_approval\" value=\"1\" /> ";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_comment_auto_approval\" value=\"0\" checked=\"checked\" /> ";
            // line 107
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 109
        echo "                                </div>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo (isset($context["help_author_information"]) ? $context["help_author_information"] : null);
        echo "\">";
        echo (isset($context["entry_author_information"]) ? $context["entry_author_information"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"checkbox-inline\">
                                    ";
        // line 117
        if ((isset($context["simple_blog_author_information"]) ? $context["simple_blog_author_information"] : null)) {
            // line 118
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_author_information\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_author_information\" value=\"0\" /> ";
            // line 119
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 121
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_author_information\" value=\"1\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_author_information\" value=\"0\" checked=\"checked\" /> ";
            // line 122
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 124
        echo "                                </div>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 129
        echo (isset($context["help_related_article"]) ? $context["help_related_article"] : null);
        echo "\">";
        echo (isset($context["entry_related_article"]) ? $context["entry_related_article"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"checkbox-inline\">
                                    ";
        // line 132
        if ((isset($context["simple_blog_related_articles"]) ? $context["simple_blog_related_articles"] : null)) {
            // line 133
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_related_articles\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_related_articles\" value=\"0\" /> ";
            // line 134
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 136
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_related_articles\" value=\"1\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_related_articles\" value=\"0\" checked=\"checked\" /> ";
            // line 137
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 139
        echo "                                </div>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 144
        echo (isset($context["help_show_social_site_option"]) ? $context["help_show_social_site_option"] : null);
        echo "\">";
        echo (isset($context["entry_show_social_site_option"]) ? $context["entry_show_social_site_option"] : null);
        echo "</label>
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"checkbox-inline\">
                                    ";
        // line 147
        if ((isset($context["simple_blog_share_social_site"]) ? $context["simple_blog_share_social_site"] : null)) {
            // line 148
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_share_social_site\" value=\"1\" checked=\"checked\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_share_social_site\" value=\"0\" /> ";
            // line 149
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        } else {
            // line 151
            echo "    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_share_social_site\" value=\"1\" /> ";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "&nbsp;
    \t    \t\t\t\t\t\t\t<input type=\"radio\" name=\"simple_blog_share_social_site\" value=\"0\" checked=\"checked\" /> ";
            // line 152
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "
    \t    \t\t\t\t\t\t";
        }
        // line 154
        echo "                                </div>
                            </div>
                        </div>
                        
                        <h3 class=\"text-center\">";
        // line 158
        echo (isset($context["text_article_related"]) ? $context["text_article_related"] : null);
        echo "</h3>
                        
                        <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"module\">
\t\t\t\t\t\t\t\t\t";
        // line 163
        $context["module_row"] = 1;
        // line 164
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 165
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
            // line 166
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 167
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t\t\t\t\t\t<li id=\"module-add\"><a onclick=\"addModule();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            
                            <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                <div class=\"tab-content\">
                                    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 175
            echo "                                        <div class=\"tab-pane\" id=\"tab-module";
            echo $this->getAttribute($context["module"], "key", array());
            echo "\">
                                            
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 178
            echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"simple_blog_module[";
            // line 180
            echo $this->getAttribute($context["module"], "key", array());
            echo "][article_limit]\" value=\"";
            echo $this->getAttribute($context["module"], "article_limit", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">Width of post image</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <input type=\"text\" name=\"simple_blog_module[";
            // line 186
            echo $this->getAttribute($context["module"], "key", array());
            echo "][image_width]\" value=\"";
            echo $this->getAttribute($context["module"], "image_width", array());
            echo "\" class=\"form-control\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">Height of post image</label>
                                                <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
                                                    <input type=\"text\" name=\"simple_blog_module[";
            // line 192
            echo $this->getAttribute($context["module"], "key", array());
            echo "][image_height]\" value=\"";
            echo $this->getAttribute($context["module"], "image_height", array());
            echo "\" class=\"form-control\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 196
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"simple_blog_module[";
            // line 198
            echo $this->getAttribute($context["module"], "key", array());
            echo "][category_id]\" class=\"form-control\">
                      \t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"disabled\" style=\"font-weight: bold;\">";
            // line 199
            echo (isset($context["text_category_label"]) ? $context["text_category_label"] : null);
            echo "</option>
                      \t\t\t\t\t\t\t\t\t<option value=\"all\" ";
            // line 200
            echo ((($this->getAttribute($context["module"], "category_id", array()) == "all")) ? ("selected='selected'") : (""));
            echo ">";
            echo (isset($context["text_latest_article"]) ? $context["text_latest_article"] : null);
            echo "</option>
                      \t\t\t\t\t\t\t\t\t<option value=\"popular\" ";
            // line 201
            echo ((($this->getAttribute($context["module"], "category_id", array()) == "popular")) ? ("selected='selected'") : (""));
            echo ">";
            echo (isset($context["text_popular_article"]) ? $context["text_popular_article"] : null);
            echo "</option>
                      \t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"disabled\" style=\"font-weight: bold;\">";
            // line 202
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "</option>
                      \t\t\t\t\t\t\t\t\t";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 204
                echo "                      \t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category"], "simple_blog_category_id", array());
                echo "\" ";
                echo ((($this->getAttribute($context["category"], "simple_blog_category_id", array()) == $this->getAttribute($context["module"], "category_id", array()))) ? ("selected='selected'") : (""));
                echo ">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
                      \t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                      \t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 211
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"simple_blog_module[";
            // line 213
            echo $this->getAttribute($context["module"], "key", array());
            echo "][status]\" class=\"form-control\">
            \t\t\t\t\t\t\t                ";
            // line 214
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 215
                echo "            \t\t\t\t\t\t\t\t                <option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t\t                <option value=\"0\">";
                // line 216
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t                ";
            } else {
                // line 218
                echo "            \t\t\t\t\t\t\t\t                <option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t\t                <option value=\"0\" selected=\"selected\">";
                // line 219
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
            \t\t\t\t\t\t\t                ";
            }
            // line 221
            echo "                          \t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            
                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
            // line 226
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"simple_blog_module[";
            // line 228
            echo $this->getAttribute($context["module"], "key", array());
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["module"], "sort_order", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
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
        // line 243
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo "
  
\t\tfunction addModule() {
            
            var token = Math.random().toString(36).substr(2)
            
            html  = '<div class=\"tab-pane\" id=\"tab-module' + token + '\">'
            
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 252
        echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <input type=\"text\" name=\"simple_blog_module[' + token + '][article_limit]\" value=\"\" class=\"form-control\" />'
            html += '       </div>'
            html += '   </div>'

            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">Width of post image</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <input type=\"text\" name=\"simple_blog_module[' + token + '][image_width]\" value=\"\" class=\"form-control\" />'
            html += '       </div>'
            html += '   </div>'
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">Height of post image</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <input type=\"text\" name=\"simple_blog_module[' + token + '][image_height]\" value=\"\" class=\"form-control\" />'
            html += '       </div>'
            html += '   </div>'

            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 272
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '\t\t\t<select name=\"simple_blog_module[' + token + '][category_id]\" class=\"form-control\">'
\t\t\thtml += '\t\t\t\t<option value=\"\" disabled=\"disabled\" style=\"font-weight: bold;\">";
        // line 275
        echo (isset($context["text_category_label"]) ? $context["text_category_label"] : null);
        echo "</option>'
\t\t\thtml += '\t\t\t\t<option value=\"all\">";
        // line 276
        echo (isset($context["text_latest_article"]) ? $context["text_latest_article"] : null);
        echo "</option>'
\t\t\thtml += '\t\t\t\t<option value=\"popular\">";
        // line 277
        echo (isset($context["text_popular_article"]) ? $context["text_popular_article"] : null);
        echo "</option>'
\t\t\thtml += '\t\t\t\t<option value=\"\" disabled=\"disabled\" style=\"font-weight: bold;\">";
        // line 278
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</option>'
\t\t\t\t\t\t\t\t\t";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"";
            echo $this->getAttribute($context["category"], "simple_blog_category_id", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</option>'
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "\t\t\thtml += '\t\t\t</select>'
            html += '       </div>'
            html += '   </div>'
            
            
                      
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 289
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <select name=\"simple_blog_module[' + token + '][status]\" class=\"form-control\">'
            html += '               <option value=\"1\">";
        // line 292
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>'
            html += '               <option value=\"0\">";
        // line 293
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>'
            html += '           </select>'
            html += '       </div>'
            html += '   </div>'
            
            html += '   <div class=\"form-group\">'
            html += '       <label class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label\">";
        // line 299
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>'
            html += '       <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12\">'
            html += '           <input type=\"text\" name=\"simple_blog_module[' + token + '][sort_order]\" value=\"\" class=\"form-control\" />'
            html += '       </div>'
            html += '   </div>'
                        
            html += '</div>'
            
            \$('.tab-content:first-child').prepend(html)
            
            \$('#module-add').before('<li><a href=\"#tab-module' + token + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-module' + token + '\\\\\\']\\').parent().remove(); \$(\\'#tab-module' + token + '\\').remove(); \$(\\'#module a:first\\').tab(\\'show\\');\"></i> ";
        // line 309
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo " ' + module_row + '</a></li>')
            
            \$('#module a[href=\\'#tab-module' + token + '\\']').tab('show')

\t\t\tmodule_row++
\t\t}
    </script>
    
    <script type=\"text/javascript\">
        \$('#module li:first-child a').tab('show')
    </script>
    
    
";
        // line 322
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 322,  708 => 309,  695 => 299,  686 => 293,  682 => 292,  676 => 289,  667 => 282,  656 => 280,  652 => 279,  648 => 278,  644 => 277,  640 => 276,  636 => 275,  630 => 272,  607 => 252,  595 => 243,  583 => 233,  570 => 228,  565 => 226,  558 => 221,  553 => 219,  548 => 218,  543 => 216,  538 => 215,  536 => 214,  532 => 213,  527 => 211,  520 => 206,  507 => 204,  503 => 203,  499 => 202,  493 => 201,  487 => 200,  483 => 199,  479 => 198,  474 => 196,  465 => 192,  454 => 186,  443 => 180,  438 => 178,  431 => 175,  427 => 174,  417 => 168,  411 => 167,  409 => 166,  398 => 165,  393 => 164,  391 => 163,  383 => 158,  377 => 154,  372 => 152,  367 => 151,  362 => 149,  357 => 148,  355 => 147,  347 => 144,  340 => 139,  335 => 137,  330 => 136,  325 => 134,  320 => 133,  318 => 132,  310 => 129,  303 => 124,  298 => 122,  293 => 121,  288 => 119,  283 => 118,  281 => 117,  273 => 114,  266 => 109,  261 => 107,  256 => 106,  251 => 104,  246 => 103,  244 => 102,  236 => 99,  229 => 94,  224 => 92,  219 => 91,  214 => 89,  209 => 88,  207 => 87,  199 => 84,  190 => 78,  183 => 76,  175 => 71,  168 => 69,  160 => 64,  153 => 62,  145 => 57,  138 => 55,  129 => 49,  122 => 47,  111 => 41,  105 => 40,  99 => 37,  93 => 34,  86 => 30,  81 => 27,  73 => 23,  71 => 22,  64 => 17,  53 => 15,  49 => 14,  44 => 12,  36 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/*     {{ column_left }}*/
/*     */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <button type="submit" form="form-simple-blog" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-simple-blog" class="form-horizontal">    */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <select name="simple_blog_status" class="form-control">*/
/*                                     <option value="1" {{ simple_blog_status == 1 ? "selected='selected'" : '' }}>{{ text_enabled }}</option>*/
/*     								<option value="0" {{ simple_blog_status == 0 ? "selected='selected'" : '' }}>{{ text_disabled }}</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>   */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_simple_blog_seo_keyword }}">{{ entry_simple_blog_seo_keyword }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <input type="text" name="simple_blog_seo_keyword" value="{{ simple_blog_seo_keyword }}" class="form-control" />*/
/*                             </div>*/
/*                         </div>  */
/*                         */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_simple_blog_heading }}">{{ entry_simple_blog_heading }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <input type="text" name="simple_blog_footer_heading" value="{{ simple_blog_footer_heading }}" class="form-control" />*/
/*                             </div>*/
/*                         </div>   */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_blog_module_heading }}">{{ entry_blog_module_heading }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <input type="text" name="simple_blog_heading" value="{{ simple_blog_heading }}" class="form-control" />*/
/*                             </div>*/
/*                         </div>   */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_product_related_heading }}">{{ entry_product_related_heading }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <input type="text" name="simple_blog_product_related_heading" value="{{ simple_blog_product_related_heading }}" class="form-control" />*/
/*                             </div>*/
/*                         </div>  */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_comment_related_heading }}">{{ entry_comment_related_heading }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <input type="text" name="simple_blog_comment_related_heading" value="{{ simple_blog_comment_related_heading }}" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_display_category }}">{{ entry_display_category }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_display_category %}*/
/*     	    							<input type="radio" name="simple_blog_display_category" value="1" checked="checked" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_display_category" value="0" /> {{ text_disabled }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_display_category" value="1" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_display_category" value="0" checked="checked" /> {{ text_disabled }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>   */
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_comment_approval }}">{{ entry_comment_approval }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_comment_auto_approval %}*/
/*     	    							<input type="radio" name="simple_blog_comment_auto_approval" value="1" checked="checked" /> {{ text_yes }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_comment_auto_approval" value="0" /> {{ text_no }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_comment_auto_approval" value="1" /> {{ text_yes }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_comment_auto_approval" value="0" checked="checked" /> {{ text_no }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_author_information }}">{{ entry_author_information }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_author_information %}*/
/*     	    							<input type="radio" name="simple_blog_author_information" value="1" checked="checked" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_author_information" value="0" /> {{ text_disabled }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_author_information" value="1" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_author_information" value="0" checked="checked" /> {{ text_disabled }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_related_article }}">{{ entry_related_article }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_related_articles %}*/
/*     	    							<input type="radio" name="simple_blog_related_articles" value="1" checked="checked" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_related_articles" value="0" /> {{ text_disabled }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_related_articles" value="1" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_related_articles" value="0" checked="checked" /> {{ text_disabled }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label"><span data-toggle="tooltip" title="{{ help_show_social_site_option }}">{{ entry_show_social_site_option }}</label>*/
/*                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                 <div class="checkbox-inline">*/
/*                                     {% if simple_blog_share_social_site %}*/
/*     	    							<input type="radio" name="simple_blog_share_social_site" value="1" checked="checked" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_share_social_site" value="0" /> {{ text_disabled }}*/
/*     	    						{% else %}*/
/*     	    							<input type="radio" name="simple_blog_share_social_site" value="1" /> {{ text_enabled }}&nbsp;*/
/*     	    							<input type="radio" name="simple_blog_share_social_site" value="0" checked="checked" /> {{ text_disabled }}*/
/*     	    						{% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <h3 class="text-center">{{ text_article_related }}</h3>*/
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
/*                                         <div class="tab-pane" id="tab-module{{ module.key }}">*/
/*                                             */
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_article_limit }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<input type="text" name="simple_blog_module[{{ module.key }}][article_limit]" value="{{ module.article_limit }}" class="form-control" />*/
/* 												</div>*/
/* 											</div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Width of post image</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <input type="text" name="simple_blog_module[{{ module.key }}][image_width]" value="{{ module.image_width }}" class="form-control" />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Height of post image</label>*/
/*                                                 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/*                                                     <input type="text" name="simple_blog_module[{{ module.key }}][image_height]" value="{{ module.image_height }}" class="form-control" />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_category }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<select name="simple_blog_module[{{ module.key }}][category_id]" class="form-control">*/
/*                       									<option value="" disabled="disabled" style="font-weight: bold;">{{ text_category_label }}</option>*/
/*                       									<option value="all" {{ module.category_id == 'all' ? "selected='selected'" : '' }}>{{ text_latest_article }}</option>*/
/*                       									<option value="popular" {{ module.category_id == 'popular' ? "selected='selected'" : '' }}>{{ text_popular_article }}</option>*/
/*                       									<option value="" disabled="disabled" style="font-weight: bold;">{{ entry_category }}</option>*/
/*                       									{% for category in categories %}*/
/*                       										<option value="{{ category.simple_blog_category_id }}" {{ category.simple_blog_category_id == module.category_id ? "selected='selected'" : '' }}>{{ category.name }}</option>*/
/*                       									{% endfor %}*/
/*                       								</select> */
/* 												</div>*/
/* 											</div>*/
/*                                             */
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<select name="simple_blog_module[{{ module.key }}][status]" class="form-control">*/
/*             							                {% if module.status %}*/
/*             								                <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*             								                <option value="0">{{ text_disabled }}</option>*/
/*             							                {% else %}*/
/*             								                <option value="1">{{ text_enabled }}</option>*/
/*             								                <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*             							                {% endif %}*/
/*                           							</select>*/
/* 												</div>*/
/* 											</div>*/
/*                                             */
/*                                             <div class="form-group">*/
/* 												<label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_sort_order }}</label>*/
/* 												<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">*/
/* 													<input type="text" name="simple_blog_module[{{ module.key }}][sort_order]" value="{{ module.sort_order }}" class="form-control" />*/
/* 												</div>*/
/* 											</div>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
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
/*             */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_article_limit }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <input type="text" name="simple_blog_module[' + token + '][article_limit]" value="" class="form-control" />'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/* */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Width of post image</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <input type="text" name="simple_blog_module[' + token + '][image_width]" value="" class="form-control" />'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">Height of post image</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <input type="text" name="simple_blog_module[' + token + '][image_height]" value="" class="form-control" />'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/* */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_category }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '			<select name="simple_blog_module[' + token + '][category_id]" class="form-control">'*/
/* 			html += '				<option value="" disabled="disabled" style="font-weight: bold;">{{ text_category_label }}</option>'*/
/* 			html += '				<option value="all">{{ text_latest_article }}</option>'*/
/* 			html += '				<option value="popular">{{ text_popular_article }}</option>'*/
/* 			html += '				<option value="" disabled="disabled" style="font-weight: bold;">{{ entry_category }}</option>'*/
/* 									{% for category in categories %}*/
/* 										html += '<option value="{{ category.simple_blog_category_id }}">{{ category.name }}</option>'*/
/* 									{% endfor %}*/
/* 			html += '			</select>'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/*             */
/*             */
/*                       */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_status }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <select name="simple_blog_module[' + token + '][status]" class="form-control">'*/
/*             html += '               <option value="1">{{ text_enabled }}</option>'*/
/*             html += '               <option value="0">{{ text_disabled }}</option>'*/
/*             html += '           </select>'*/
/*             html += '       </div>'*/
/*             html += '   </div>'*/
/*             */
/*             html += '   <div class="form-group">'*/
/*             html += '       <label class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">{{ entry_sort_order }}</label>'*/
/*             html += '       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">'*/
/*             html += '           <input type="text" name="simple_blog_module[' + token + '][sort_order]" value="" class="form-control" />'*/
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
/*         $('#module li:first-child a').tab('show')*/
/*     </script>*/
/*     */
/*     */
/* {{ footer }}*/
