<?php

/* extension/module/simple_blog/author_list.twig */
class __TwigTemplate_156ec7093505f49e0721e4bdb0d70e315ae9105d92575c76cc407a2dedddf967 extends Twig_Template
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
                    <a href=\"";
        // line 6
        echo (isset($context["insert"]) ? $context["insert"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_insert"]) ? $context["button_insert"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-blog-author').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
                    ";
        // line 8
        if (array_key_exists("found_user_view_all", $context)) {
            // line 9
            echo "\t  \t\t\t\t\t<a href=\"";
            echo (isset($context["view_all_ticket"]) ? $context["view_all_ticket"] : null);
            echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_view_all"]) ? $context["button_view_all"] : null);
            echo "\"><i class=\"fa fa-eye\"></i></a>
\t  \t\t\t\t";
        }
        // line 11
        echo "                </div>                
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
            ";
        // line 28
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 29
            echo "                <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                </div>
            ";
        }
        // line 33
        echo "            
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 36
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
                </div>
                
                <div class=\"panel-body\">
                    <form action=\"";
        // line 40
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog-author\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                    
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        
                                        <td class=\"text-left\">
                                            ";
        // line 49
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ba.name")) {
            // line 50
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author_name"]) ? $context["column_author_name"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 52
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_author_name"]) ? $context["column_author_name"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 54
        echo "                                        </td>
\t\t\t\t                
                                        <td class=\"text-left\">
                                            ";
        // line 57
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ba.status")) {
            // line 58
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 60
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 62
        echo "                                        </td>\t
\t\t\t\t                        
                                        <td class=\"text-right\">
                                            ";
        // line 65
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ba.date_added")) {
            // line 66
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
        \t\t\t                \t\t";
        } else {
            // line 68
            echo "        \t\t\t                \t\t\t<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
        \t\t\t                \t\t";
        }
        // line 70
        echo "                                        </td>
                                        
        \t\t\t\t                <td class=\"text-right\">";
        // line 72
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    ";
        // line 78
        if ((isset($context["authors"]) ? $context["authors"] : null)) {
            // line 79
            echo "\t\t\t          \t\t\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 80
                echo "                                            <tr>
                                                <td class=\"text-center\">
                                                    ";
                // line 82
                if (twig_in_filter((isset($context["selected"]) ? $context["selected"] : null), $this->getAttribute($context["author"], "simple_blog_author_id", array()))) {
                    // line 83
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["author"], "simple_blog_author_id", array());
                    echo "\" checked=\"checked\" />
                                                    ";
                } else {
                    // line 85
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["author"], "simple_blog_author_id", array());
                    echo "\" />
                                                    ";
                }
                // line 87
                echo "                                                </td>
                                                
                                                <td class=\"text-left\">";
                // line 89
                echo $this->getAttribute($context["author"], "name", array());
                echo "</td>
        \t            \t\t\t\t\t\t<td class=\"text-left\">";
                // line 90
                echo $this->getAttribute($context["author"], "status", array());
                echo "</td>
        \t            \t\t\t\t\t\t<td class=\"text-right\">";
                // line 91
                echo $this->getAttribute($context["author"], "date_added", array());
                echo "</td>
                                                <td class=\"text-right\">
                                                    <a href=\"";
                // line 93
                echo $this->getAttribute($context["author"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                    ";
        } else {
            // line 98
            echo "                                        <tr>
        \t\t\t          \t\t\t\t<td class=\"text-center\" colspan=\"5\">";
            // line 99
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        \t\t\t          \t\t\t</tr>
                                    ";
        }
        // line 102
        echo "                                </tbody>
                                
                            </table>
                        </div>
                    </form>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left\">";
        // line 108
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right\">";
        // line 109
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                    </div>
                </div>    
            </div>        
        </div>        
    </div>   
    
";
        // line 116
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/simple_blog/author_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 116,  288 => 109,  284 => 108,  276 => 102,  270 => 99,  267 => 98,  264 => 97,  252 => 93,  247 => 91,  243 => 90,  239 => 89,  235 => 87,  229 => 85,  223 => 83,  221 => 82,  217 => 80,  212 => 79,  210 => 78,  201 => 72,  197 => 70,  189 => 68,  179 => 66,  177 => 65,  172 => 62,  164 => 60,  154 => 58,  152 => 57,  147 => 54,  139 => 52,  129 => 50,  127 => 49,  115 => 40,  108 => 36,  103 => 33,  95 => 29,  93 => 28,  90 => 27,  82 => 23,  80 => 22,  73 => 17,  62 => 15,  58 => 14,  53 => 12,  50 => 11,  42 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}    */
/*     <div id="content">*/
/*         <div class="page-header">*/
/*             <div class="container-fluid">*/
/*                 <div class="pull-right">*/
/*                     <a href="{{ insert }}" data-toggle="tooltip" title="{{ button_insert }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                     <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-blog-author').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*                     <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-blog-author">*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-bordered table-hover">*/
/*                                 <thead>*/
/*                                     */
/*                                     <tr>*/
/*                                         <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                                         */
/*                                         <td class="text-left">*/
/*                                             {% if sort == 'ba.name' %}*/
/*         			                			<a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_author_name }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_name }}">{{ column_author_name }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>*/
/* 				                */
/*                                         <td class="text-left">*/
/*                                             {% if sort == 'ba.status' %}*/
/*         			                			<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*         			                		{% else %}*/
/*         			                			<a href="{{ sort_status }}">{{ column_status }}</a>*/
/*         			                		{% endif %}*/
/*                                         </td>	*/
/* 				                        */
/*                                         <td class="text-right">*/
/*                                             {% if sort == 'ba.date_added' %}*/
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
/*                                     {% if authors %}*/
/* 			          			        {% for author in authors %}*/
/*                                             <tr>*/
/*                                                 <td class="text-center">*/
/*                                                     {% if selected in author.simple_blog_author_id %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ author.simple_blog_author_id }}" checked="checked" />*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ author.simple_blog_author_id }}" />*/
/*                                                     {% endif %}*/
/*                                                 </td>*/
/*                                                 */
/*                                                 <td class="text-left">{{ author.name }}</td>*/
/*         	            						<td class="text-left">{{ author.status }}</td>*/
/*         	            						<td class="text-right">{{ author.date_added }}</td>*/
/*                                                 <td class="text-right">*/
/*                                                     <a href="{{ author.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% else %}*/
/*                                         <tr>*/
/*         			          				<td class="text-center" colspan="5">{{ text_no_results }}</td>*/
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
/*                 </div>    */
/*             </div>        */
/*         </div>        */
/*     </div>   */
/*     */
/* {{ footer }}*/
