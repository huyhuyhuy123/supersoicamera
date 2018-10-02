<?php

/* extension/module/simple_blog/article_list.twig */
class __TwigTemplate_a29727f0f4d93cc90cb83d2a1e7097d9d9802a20b2d1a6eb74afca1eb120475c extends Twig_Template
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
                    <a href=\"";
        // line 8
        echo (isset($context["insert"]) ? $context["insert"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_insert"]) ? $context["button_insert"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-blog-article').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
                    ";
        // line 10
        if (array_key_exists("found_user_view_all", $context)) {
            // line 11
            echo "\t  \t\t\t\t\t<a href=\"";
            echo (isset($context["view_all_ticket"]) ? $context["view_all_ticket"] : null);
            echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_view_all"]) ? $context["button_view_all"] : null);
            echo "\"><i class=\"fa fa-eye\"></i></a>
\t  \t\t\t\t";
        }
        // line 13
        echo "                </div>                
                <h1>";
        // line 14
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <ul class=\"breadcrumb\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
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
        // line 19
        echo "                </ul>                
            </div>
        </div>
        
        <div class=\"container-fluid\">
            ";
        // line 24
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 25
            echo "                <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 29
        echo "            
            ";
        // line 30
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 31
            echo "                <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 35
        echo "            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 38
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
                </div>
                
                <div class=\"panel-body\">
                    <form action=\"";
        // line 42
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog-article\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>                                    
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>                                        
                                        <td class=\"text-left\">
                                            ";
        // line 49
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sbad.article_title")) {
            // line 50
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_article_title"]) ? $context["sort_article_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_article_title"]) ? $context["column_article_title"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 52
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_article_title"]) ? $context["sort_article_title"] : null);
            echo "\">";
            echo (isset($context["column_article_title"]) ? $context["column_article_title"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 54
        echo "                                        </td>
\t\t\t\t                
                                        <td class=\"text-left\">
                                            ";
        // line 57
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sbau.author_name")) {
            // line 58
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_author_name"]) ? $context["sort_author_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author_name"]) ? $context["column_author_name"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 60
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_author_name"]) ? $context["sort_author_name"] : null);
            echo "\">";
            echo (isset($context["column_author_name"]) ? $context["column_author_name"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 62
        echo "                                        </td>\t
\t\t\t\t                        
                                        <td class=\"text-right\">
                                            ";
        // line 65
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sba.sort_order")) {
            // line 66
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_sortorder"]) ? $context["sort_sortorder"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 68
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_sortorder"]) ? $context["sort_sortorder"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 70
        echo "                                        </td>
                                        
                                        <td class=\"text-left\">
                                            ";
        // line 73
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sba.status")) {
            // line 74
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 76
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 78
        echo "                                        </td>
                                        
                                        <td class=\"text-right\">
                                            ";
        // line 81
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sba.date_added")) {
            // line 82
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 84
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 86
        echo "                                        </td>
                                        
        \t\t\t\t                <td class=\"text-right\">";
        // line 88
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    ";
        // line 94
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 95
            echo "\t\t\t          \t\t\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 96
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 98
                if (twig_in_filter($this->getAttribute($context["article"], "simple_blog_article_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 99
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "simple_blog_article_id", array());
                    echo "\" checked=\"checked\" />
                                                    ";
                } else {
                    // line 101
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "simple_blog_article_id", array());
                    echo "\" />
                                                    ";
                }
                // line 103
                echo "                                                </td>
                                                
                                                <td class=\"text-left\">";
                // line 105
                echo $this->getAttribute($context["article"], "article_title", array());
                echo "</td>
        \t            \t\t\t\t\t\t<td class=\"text-left\">";
                // line 106
                echo $this->getAttribute($context["article"], "author_name", array());
                echo "</td>
        \t            \t\t\t\t\t\t<td class=\"text-right\">";
                // line 107
                echo $this->getAttribute($context["article"], "sort_order", array());
                echo "</td>
                        \t\t\t\t\t\t<td class=\"text-left\">";
                // line 108
                echo $this->getAttribute($context["article"], "status", array());
                echo "</td>
                        \t\t\t\t\t\t<td class=\"text-right\">";
                // line 109
                echo $this->getAttribute($context["article"], "date_added", array());
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 111
                echo $this->getAttribute($context["article"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                    ";
        } else {
            // line 116
            echo "                                        <tr>
        \t\t\t          \t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 117
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        \t\t\t          \t\t\t</tr>
                                    ";
        }
        // line 120
        echo "                                </tbody>
                                
                            </table>
                        </div>
                    </form>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left\">";
        // line 126
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right\">";
        // line 127
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>   
    
";
        // line 135
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog/article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 135,  348 => 127,  344 => 126,  336 => 120,  330 => 117,  327 => 116,  324 => 115,  312 => 111,  307 => 109,  303 => 108,  299 => 107,  295 => 106,  291 => 105,  287 => 103,  281 => 101,  275 => 99,  273 => 98,  269 => 96,  264 => 95,  262 => 94,  253 => 88,  249 => 86,  241 => 84,  231 => 82,  229 => 81,  224 => 78,  216 => 76,  206 => 74,  204 => 73,  199 => 70,  191 => 68,  181 => 66,  179 => 65,  174 => 62,  166 => 60,  156 => 58,  154 => 57,  149 => 54,  141 => 52,  131 => 50,  129 => 49,  119 => 42,  112 => 38,  107 => 35,  99 => 31,  97 => 30,  94 => 29,  86 => 25,  84 => 24,  77 => 19,  66 => 17,  62 => 16,  57 => 14,  54 => 13,  46 => 11,  44 => 10,  38 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/*     {{ column_left }}*/
/*     */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <a href="{{ insert }}" data-toggle="tooltip" title="{{ button_insert }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                     <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-blog-article').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*                     {% if found_user_view_all is defined %}*/
/* 	  					<a href="{{ view_all_ticket }}" class="btn btn-primary" data-toggle="tooltip" title="{{ button_view_all }}"><i class="fa fa-eye"></i></a>*/
/* 	  				{% endif %}*/
/*                 </div>                */
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <ul class="breadcrumb">*/
/*                     {% for breadcrumb in breadcrumbs %}*/
/*                         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>                */
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
/*             {% if success %}*/
/*                 <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                 </div>*/
/*             {% endif %}*/
/*             */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title"><i class="fa fa-list"></i> {{ heading_title }}</h3>*/
/*                 </div>*/
/*                 */
/*                 <div class="panel-body">*/
/*                     <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-blog-article">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-bordered table-hover">*/
/*                                 <thead>                                    */
/*                                     <tr>*/
/*                                         <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>                                        */
/*                                         <td class="text-left">*/
/*                                             {% if sort == 'sbad.article_title' %}*/
/*         			                			<a href="{{ sort_article_title }}" class="{{ order|lower }}">{{ column_article_title }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_article_title }}">{{ column_article_title }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>*/
/* 				                */
/*                                         <td class="text-left">*/
/*                                             {% if sort == 'sbau.author_name' %}*/
/*         			                			<a href="{{ sort_author_name }}" class="{{ order|lower }}">{{ column_author_name }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_author_name }}">{{ column_author_name }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>	*/
/* 				                        */
/*                                         <td class="text-right">*/
/*                                             {% if sort == 'sba.sort_order' %}*/
/*         			                			<a href="{{ sort_sortorder }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_sortorder }}">{{ column_sort_order }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>*/
/*                                         */
/*                                         <td class="text-left">*/
/*                                             {% if sort == 'sba.status' %}*/
/*         			                			<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_status }}">{{ column_status }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>*/
/*                                         */
/*                                         <td class="text-right">*/
/*                                             {% if sort == 'sba.date_added' %}*/
/*         			                			<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>*/
/*                                         */
/*         				                <td class="text-right">{{ column_action }}</td>*/
/*                                     </tr>*/
/*                                     */
/*                                 </thead>*/
/*                                 */
/*                                 <tbody>*/
/*                                     {% if articles %}*/
/* 			          			        {% for article in articles %}*/
/*                                             <tr>*/
/*                                                 <td class="text-center">*/
/*                                                     {% if article.simple_blog_article_id in selected %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ article.simple_blog_article_id }}" checked="checked" />*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ article.simple_blog_article_id }}" />*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 */
/*                                                 <td class="text-left">{{ article.article_title }}</td>*/
/*         	            						<td class="text-left">{{ article.author_name }}</td>*/
/*         	            						<td class="text-right">{{ article.sort_order }}</td>*/
/*                         						<td class="text-left">{{ article.status }}</td>*/
/*                         						<td class="text-right">{{ article.date_added }}</td>*/
/*                                                 <td class="text-right">*/
/*                                                     <a href="{{ article.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% else %}*/
/*                                         <tr>*/
/*         			          				<td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*         			          			</tr>*/
/*                                     {% endif %}*/
/*                                 </tbody>*/
/*                                 */
/*                             </table>*/
/*                         </div>*/
/*                     </form>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">{{ pagination }}</div>*/
/*                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">{{ results }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>   */
/*     */
/* {{ footer }}*/
