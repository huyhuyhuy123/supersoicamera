<?php

/* so-megastore/template/extension/simple_blog/article_info/default.twig */
class __TwigTemplate_6eae6e95e2e672b2715ed5b64c0110b14d4c176564923628e1b930d95741a190 extends Twig_Template
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
        echo "<div class=\"breadcrumbs \">
    <div class=\"container\">
       <ul class=\"breadcrumb\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </ul>
    </div>
</div>
<div class=\"container \">

    <div class=\"row\">
    
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "        ";
            $context["class"] = "col-sm-6 fluid-allsidebar";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "        ";
            $context["class"] = "col-md-9 col-sm-12 fluid-sidebar";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    
    <div id=\"content\" class=\"";
        // line 22
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
        ";
        // line 23
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
        
        <div class=\"rows form-group\">
            ";
        // line 26
        if (array_key_exists("article_info_found", $context)) {
            // line 27
            echo "                <div class=\"article-info\">
                    ";
            // line 28
            if ((isset($context["image"]) ? $context["image"] : null)) {
                // line 29
                echo "                        ";
                if (array_key_exists("featured_found", $context)) {
                    // line 30
                    echo "                            <div class=\"article-image\">
                                <img src=\"";
                    // line 31
                    echo (isset($context["image"]) ? $context["image"] : null);
                    echo "\" alt=\"";
                    echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "article_title", array());
                    echo "\"  />
                            </div>
                        ";
                } else {
                    // line 34
                    echo "                            <div class=\"article-image\">
                                <img src=\"";
                    // line 35
                    echo (isset($context["image"]) ? $context["image"] : null);
                    echo "\" alt=\"";
                    echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "article_title", array());
                    echo "\"/>
                               
                            </div>
                        ";
                }
                // line 39
                echo "                    ";
            }
            // line 40
            echo "                    <div class=\"article-title\">
                        <h3>";
            // line 41
            echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "article_title", array());
            echo "</h3>
                    </div>
                    <div class=\"article-sub-title\">
                        <span class=\"article-author\"><a href=\"";
            // line 44
            echo (isset($context["author_url"]) ? $context["author_url"] : null);
            echo "\">";
            echo (isset($context["text_posted_by"]) ? $context["text_posted_by"] : null);
            echo ": ";
            echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "author_name", array());
            echo "</a></span>
                        <span class=\"article-date\">";
            // line 45
            echo (isset($context["text_created"]) ? $context["text_created"] : null);
            echo ": ";
            echo (isset($context["article_date_modified"]) ? $context["article_date_modified"] : null);
            echo "</span>
                        ";
            // line 46
            if ($this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "allow_comment", array())) {
                // line 47
                echo "                            <span class=\"article-comment\">";
                echo (isset($context["total_comment"]) ? $context["total_comment"] : null);
                echo "</span>
                        ";
            }
            // line 49
            echo "                    </div>

                    <div class=\"article-description\" style=\"clear: both;\">
                            ";
            // line 52
            echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "description", array());
            echo "
                    </div>
                    
                    ";
            // line 55
            if ((isset($context["article_additional_description"]) ? $context["article_additional_description"] : null)) {
                // line 56
                echo "                        <div class=\"article-description\">
                             ";
                // line 57
                echo (isset($context["article_additional_description"]) ? $context["article_additional_description"] : null);
                echo "
                        </div>
                    ";
            }
            // line 60
            echo "                    <div class=\"detailt\">
                    ";
            // line 61
            if (((isset($context["simple_blog_author_information"]) ? $context["simple_blog_author_information"] : null) == "1")) {
                // line 62
                echo "                        <div class=\"panel panel-default panel--author\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
                // line 64
                echo (((isset($context["author_name"]) ? $context["author_name"] : null) . " ") . (isset($context["text_author_information"]) ? $context["text_author_information"] : null));
                echo "</h3>
                            </div>
                            
                            <div class=\"panel-body\">
                                <div class=\"author-info\">
                                    ";
                // line 69
                if ((isset($context["author_image"]) ? $context["author_image"] : null)) {
                    // line 70
                    echo "                                    <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
                                        <img src=\"";
                    // line 71
                    echo (isset($context["author_image"]) ? $context["author_image"] : null);
                    echo "\" alt=\"";
                    echo $this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "article_title", array());
                    echo "\" style=\"border: 1px solid #cccccc; padding: 5px; border-radius: 5px;\" />
                                    </div>
                                    ";
                }
                // line 74
                echo "
                                    <div class=\"col-lg-10 col-md-10 col-sm-9 col-xs-12\">
                                        ";
                // line 76
                echo (isset($context["author_description"]) ? $context["author_description"] : null);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 82
            echo "                    ";
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 83
                echo "                        <div class=\"panel panel-default panel--related\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
                // line 85
                echo (isset($context["text_related_product"]) ? $context["text_related_product"] : null);
                echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row product-layout\">
                                    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 90
                    echo "                                        <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                            <div class=\"product-thumb transition simple-blog-product\">
                                                ";
                    // line 92
                    if ($this->getAttribute($context["product"], "thumb", array())) {
                        // line 93
                        echo "                                                    <div class=\"image\"><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\" /></a></div>
                                                ";
                    }
                    // line 95
                    echo "                                                
                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"";
                    // line 97
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>  
                                                </div>
                                            </div>    
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 106
            echo "                   
                    ";
            // line 107
            if ((array_key_exists("simple_blog_related_articles", $context) && (isset($context["related_articles"]) ? $context["related_articles"] : null))) {
                // line 108
                echo "                        <div class=\"panel panel-default panel--related\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
                // line 110
                echo (isset($context["text_related_article"]) ? $context["text_related_article"] : null);
                echo "</h3>
                            </div>
                            
                            <div class=\"panel-body\">
                                <div class=\"related-article\">
                                    <div class=\"row \">
                                        ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["related_articles"]) ? $context["related_articles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["related_article"]) {
                    // line 117
                    echo "                                            <div class=\" col-sm-4 col-xs-12\">
                                                <div class=\"product-thumb\">
                                                    <div class=\"image\">
                                                        <a href=\"";
                    // line 120
                    echo $this->getAttribute($context["related_article"], "article_href", array());
                    echo "\">
                                                            <img src=\"";
                    // line 121
                    echo $this->getAttribute($context["related_article"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["related_article"], "article_title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["related_article"], "article_title", array());
                    echo "\" class=\"img-responsive\" />
                                                        </a>
                                                    </div>
                                                    <div class=\"name \">
                                                        <a href=\"";
                    // line 125
                    echo $this->getAttribute($context["related_article"], "article_href", array());
                    echo "\">";
                    echo $this->getAttribute($context["related_article"], "article_title", array());
                    echo "</a>
                                                    </div>
                                                    
                                                   
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 137
            echo "
                    

                    ";
            // line 140
            if ($this->getAttribute((isset($context["article_info"]) ? $context["article_info"] : null), "allow_comment", array())) {
                echo "                                
                        <div class=\"panel panel-default related-comment\">
                            <div class=\"panel-body\">
                                <div class=\"form-group\">
                                    <div id=\"comments\" class=\"blog-comment-info\">
                                        <div id=\"comment-list\"></div>
                                        <div id=\"comment-section\"></div>
                                        <h2 id=\"review-title\">
                                            ";
                // line 148
                echo (isset($context["text_write_comment"]) ? $context["text_write_comment"] : null);
                echo "
                                            <i class=\"fa fa-times-circle fa-lg\" id=\"reply-remove\" style=\"display:none; cursor: pointer;\" onclick=\"removeCommentId();\"></i>
                                        </h2>                           
                                        <input type=\"hidden\" name=\"blog_article_reply_id\" value=\"0\" id=\"blog-reply-id\"/>
                                        
                                        <div class=\"form-group contacts-form row\">
                                            <div class=\"col-md-6\">
                                               <b>";
                // line 155
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</b><br />
                                               <input type=\"text\" name=\"name\" value=\"\" class=\"form-control\" /><br />
                                            </div>
                                            <div class=\"col-md-12\">
                                               <b>";
                // line 159
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</b><br />
                                                <textarea name=\"text\" class=\"form-control\"></textarea>
                                                <span style=\"font-size: 11px;\">";
                // line 161
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</span>
                                                <br /><br />
                                            </div>
                                            <div class=\"col-md-12\">
                                                ";
                // line 165
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            </div>
                                          
                                        </div>
                                        
                                        <div class=\"text-left\"><a id=\"button-comment\" class=\"btn btn-info\"><span>";
                // line 170
                echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
                echo "</span></a></div>           
                                    </div>                                          
                                </div>
                            </div>                                    
                        </div>                                    
                    ";
            }
            // line 176
            echo "                    </div>
                </div>
            ";
        } else {
            // line 179
            echo "                <h3 class=\"text-center\">";
            echo (isset($context["text_no_found"]) ? $context["text_no_found"] : null);
            echo "</h3>
            ";
        }
        // line 181
        echo "        </div>
        
        ";
        // line 183
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    ";
        // line 185
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 186
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    </div>  
</div>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/simple_blog/article_info/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 186,  418 => 185,  413 => 183,  409 => 181,  403 => 179,  398 => 176,  389 => 170,  381 => 165,  374 => 161,  369 => 159,  362 => 155,  352 => 148,  341 => 140,  336 => 137,  329 => 132,  314 => 125,  303 => 121,  299 => 120,  294 => 117,  290 => 116,  281 => 110,  277 => 108,  275 => 107,  272 => 106,  266 => 102,  253 => 97,  249 => 95,  237 => 93,  235 => 92,  231 => 90,  227 => 89,  220 => 85,  216 => 83,  213 => 82,  204 => 76,  200 => 74,  192 => 71,  189 => 70,  187 => 69,  179 => 64,  175 => 62,  173 => 61,  170 => 60,  164 => 57,  161 => 56,  159 => 55,  153 => 52,  148 => 49,  142 => 47,  140 => 46,  134 => 45,  126 => 44,  120 => 41,  117 => 40,  114 => 39,  105 => 35,  102 => 34,  94 => 31,  91 => 30,  88 => 29,  86 => 28,  83 => 27,  81 => 26,  75 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  48 => 14,  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="breadcrumbs ">*/
/*     <div class="container">*/
/*        <ul class="breadcrumb">*/
/*             {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <div class="container ">*/
/* */
/*     <div class="row">*/
/*     */
/*     {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6 fluid-allsidebar' %}*/
/*     {% elseif column_left or column_right %}*/
/*         {% set class = 'col-md-9 col-sm-12 fluid-sidebar' %}*/
/*     {% else %}*/
/*         {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     */
/*     <div id="content" class="{{ class }}">*/
/*         {{ content_top }}*/
/*         */
/*         <div class="rows form-group">*/
/*             {% if article_info_found is defined %}*/
/*                 <div class="article-info">*/
/*                     {% if image %}*/
/*                         {% if featured_found is defined %}*/
/*                             <div class="article-image">*/
/*                                 <img src="{{ image }}" alt="{{ article_info.article_title }}"  />*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <div class="article-image">*/
/*                                 <img src="{{ image }}" alt="{{ article_info.article_title }}"/>*/
/*                                */
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     <div class="article-title">*/
/*                         <h3>{{ article_info.article_title }}</h3>*/
/*                     </div>*/
/*                     <div class="article-sub-title">*/
/*                         <span class="article-author"><a href="{{ author_url }}">{{ text_posted_by }}: {{ article_info.author_name }}</a></span>*/
/*                         <span class="article-date">{{ text_created }}: {{ article_date_modified }}</span>*/
/*                         {% if article_info.allow_comment %}*/
/*                             <span class="article-comment">{{ total_comment }}</span>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                     <div class="article-description" style="clear: both;">*/
/*                             {{ article_info.description }}*/
/*                     </div>*/
/*                     */
/*                     {% if article_additional_description %}*/
/*                         <div class="article-description">*/
/*                              {{ article_additional_description }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="detailt">*/
/*                     {% if simple_blog_author_information == '1' %}*/
/*                         <div class="panel panel-default panel--author">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">{{ author_name ~ " " ~ text_author_information }}</h3>*/
/*                             </div>*/
/*                             */
/*                             <div class="panel-body">*/
/*                                 <div class="author-info">*/
/*                                     {% if author_image  %}*/
/*                                     <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">*/
/*                                         <img src="{{ author_image }}" alt="{{ article_info.article_title }}" style="border: 1px solid #cccccc; padding: 5px; border-radius: 5px;" />*/
/*                                     </div>*/
/*                                     {% endif %}*/
/* */
/*                                     <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">*/
/*                                         {{ author_description }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if products %}*/
/*                         <div class="panel panel-default panel--related">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">{{ text_related_product }}</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div class="row product-layout">*/
/*                                     {% for product in products %}*/
/*                                         <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                             <div class="product-thumb transition simple-blog-product">*/
/*                                                 {% if product.thumb %}*/
/*                                                     <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*                                                 {% endif %}*/
/*                                                 */
/*                                                 <div class="caption text-center">*/
/*                                                     <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>  */
/*                                                 </div>*/
/*                                             </div>    */
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                    */
/*                     {% if simple_blog_related_articles is defined and related_articles %}*/
/*                         <div class="panel panel-default panel--related">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">{{ text_related_article }}</h3>*/
/*                             </div>*/
/*                             */
/*                             <div class="panel-body">*/
/*                                 <div class="related-article">*/
/*                                     <div class="row ">*/
/*                                         {% for related_article in related_articles %}*/
/*                                             <div class=" col-sm-4 col-xs-12">*/
/*                                                 <div class="product-thumb">*/
/*                                                     <div class="image">*/
/*                                                         <a href="{{ related_article.article_href }}">*/
/*                                                             <img src="{{ related_article.image }}" alt="{{ related_article.article_title }}" title="{{ related_article.article_title }}" class="img-responsive" />*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                     <div class="name ">*/
/*                                                         <a href="{{ related_article.article_href }}">{{ related_article.article_title }}</a>*/
/*                                                     </div>*/
/*                                                     */
/*                                                    */
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     */
/* */
/*                     {% if article_info.allow_comment %}                                */
/*                         <div class="panel panel-default related-comment">*/
/*                             <div class="panel-body">*/
/*                                 <div class="form-group">*/
/*                                     <div id="comments" class="blog-comment-info">*/
/*                                         <div id="comment-list"></div>*/
/*                                         <div id="comment-section"></div>*/
/*                                         <h2 id="review-title">*/
/*                                             {{ text_write_comment }}*/
/*                                             <i class="fa fa-times-circle fa-lg" id="reply-remove" style="display:none; cursor: pointer;" onclick="removeCommentId();"></i>*/
/*                                         </h2>                           */
/*                                         <input type="hidden" name="blog_article_reply_id" value="0" id="blog-reply-id"/>*/
/*                                         */
/*                                         <div class="form-group contacts-form row">*/
/*                                             <div class="col-md-6">*/
/*                                                <b>{{ entry_name }}</b><br />*/
/*                                                <input type="text" name="name" value="" class="form-control" /><br />*/
/*                                             </div>*/
/*                                             <div class="col-md-12">*/
/*                                                <b>{{ entry_review }}</b><br />*/
/*                                                 <textarea name="text" class="form-control"></textarea>*/
/*                                                 <span style="font-size: 11px;">{{ text_note }}</span>*/
/*                                                 <br /><br />*/
/*                                             </div>*/
/*                                             <div class="col-md-12">*/
/*                                                 {{ captcha }}*/
/*                                             </div>*/
/*                                           */
/*                                         </div>*/
/*                                         */
/*                                         <div class="text-left"><a id="button-comment" class="btn btn-info"><span>{{ button_submit }}</span></a></div>           */
/*                                     </div>                                          */
/*                                 </div>*/
/*                             </div>                                    */
/*                         </div>                                    */
/*                     {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <h3 class="text-center">{{ text_no_found }}</h3>*/
/*             {% endif %}*/
/*         </div>*/
/*         */
/*         {{ content_bottom }}*/
/*     </div>*/
/*     {{ column_left }}*/
/*     {{ column_right }}*/
/*     </div>  */
/* </div>*/
