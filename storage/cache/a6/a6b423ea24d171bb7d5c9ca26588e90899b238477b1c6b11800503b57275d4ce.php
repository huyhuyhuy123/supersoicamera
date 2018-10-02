<?php

/* so-megastore/template/extension/simple_blog/article.twig */
class __TwigTemplate_e42315c98f63b107e977e82d9c5a78c2d55701d0157f2fbb5a6fd1987403e062 extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

\t<div class=\"breadcrumbs \">
\t\t<div class=\"container\">
\t      \t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</ul>
\t    </div>
\t</div>
    <div class=\"container product-listing\">
        
        <div class=\"row\">
            ";
        // line 16
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "                ";
            $context["class"] = "col-sm-6 fluid-allsidebar";
            // line 19
            echo "            ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "                ";
            $context["class"] = "col-md-9 col-sm-12 fluid-sidebar";
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "                ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "            ";
        }
        // line 24
        echo "            
            <div id=\"content\" class=\"";
        // line 25
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
                ";
        // line 26
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                
                ";
        // line 28
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 29
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"open-sidebar hidden-lg hidden-md\"><i class=\"fa fa-bars\"></i>";
            echo (isset($context["text_sidebar"]) ? $context["text_sidebar"] : null);
            echo "</a>
\t\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t";
        // line 33
        if ((array_key_exists("error_no_database", $context) && ((isset($context["error_no_database"]) ? $context["error_no_database"] : null) == ""))) {
            // line 34
            echo "\t            <div class=\"blog-category clearfix\">
\t\t\t\t\t <div class=\"blog-header\">
\t\t\t\t\t\t<h3>";
            // line 36
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3>
\t\t\t\t\t\t";
            // line 37
            if ((isset($context["image"]) ? $context["image"] : null)) {
                echo "\t
\t\t\t\t\t\t<img  src=\"";
                // line 38
                echo (isset($context["image"]) ? $context["image"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t";
            echo (((array_key_exists("description", $context) && (isset($context["description"]) ? $context["description"] : null))) ? ((isset($context["description"]) ? $context["description"] : null)) : (""));
            echo "
\t\t\t\t\t</div>\t
\t\t\t\t

\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t<div class=\"product-filter product-filter-top filters-panel\">
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4 view-mode\">
\t\t\t\t\t\t\t\t\t<div class=\"list-view\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-view hidden-sm hidden-xs\">1</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view-2\" class=\"btn btn-view \">2</button>
\t\t\t\t\t\t\t\t\t  \t<button type=\"button\" id=\"grid-view-3\" class=\"btn btn-view hidden-sm hidden-xs \">3</button>
\t\t\t\t\t\t\t\t\t  \t<button type=\"button\" id=\"grid-view-4\" class=\"btn btn-view hidden-sm hidden-xs\">4</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-view list \"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t                <div class=\"blog-listitem row\">
\t                    ";
            // line 62
            if ((isset($context["articles"]) ? $context["articles"] : null)) {
                // line 63
                echo "\t                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
                foreach ($context['_seq'] as $context["id_article"] => $context["article"]) {
                    // line 64
                    echo "
\t\t                        <div class=\"blog-item \">
\t\t                        \t<div class=\"blog-item-inner clearfix\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 67
                    if ($this->getAttribute($context["article"], "image", array())) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemBlogImg clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  class=\"popup-gallery\" href=\"";
                        // line 71
                        echo $this->getAttribute($context["article"], "image", array());
                        echo "\"><img  src=\"";
                        echo $this->getAttribute($context["article"], "image", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["article"], "article_title", array());
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 75
                        $context["datetotime"] = $this->getAttribute($context["article"], "date_added", array());
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
                        echo (isset($context["datetotime"]) ? $context["datetotime"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"itemBlogContent clearfix \">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">

\t\t\t\t\t\t\t\t\t\t  \t\t<div class=\"article-title font-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 89
                    echo $this->getAttribute($context["article"], "href", array());
                    echo "\">";
                    echo twig_capitalize_string_filter($this->env, $this->getAttribute($context["article"], "article_title", array()));
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"article-description\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    // line 95
                    echo $this->getAttribute($context["article"], "description", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-meta\">
\t\t\t\t\t\t\t\t\t\t  \t\t\t<span class=\"author hidden\"><i class=\"fa fa-user\"></i><span>Post by </span>";
                    // line 98
                    echo $this->getAttribute($context["article"], "author_name", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    if ($this->getAttribute($context["article"], "allow_comment", array())) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_count\"><a href=\"";
                        echo $this->getAttribute($context["article"], "comment_href", array());
                        echo "#comment-section\">";
                        echo $this->getAttribute($context["article"], "total_comment", array());
                        echo "</a><i class=\"fa fa-comments\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-readmore font-title\" href=\"";
                    // line 104
                    echo $this->getAttribute($context["article"], "href", array());
                    echo "\">";
                    echo (isset($context["button_continue_reading"]) ? $context["button_continue_reading"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t                    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id_article'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t                    ";
            } else {
                // line 115
                echo "\t                        <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center\">";
                // line 116
                echo (isset($context["text_no_found"]) ? $context["text_no_found"] : null);
                echo "</h3>
\t\t\t\t\t\t\t</div>
\t                    ";
            }
            // line 119
            echo "\t                </div> 
\t\t\t\t\t
\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\treinitView();
\t\t\t\t\tfunction getParameterByName(name, url) {
\t\t\t\t\t    if (!url) url = window.location.href;
\t\t\t\t\t    name = name.replace(/[\\[\\]]/g, \"\\\\\$&\");
\t\t\t\t\t    var regex = new RegExp(\"[?&]\" + name + \"(=([^&#]*)|&|#|\$)\"),
\t\t\t\t\t        results = regex.exec(url);
\t\t\t\t\t    if (!results) return null;
\t\t\t\t\t    if (!results[2]) return '';
\t\t\t\t\t    return decodeURIComponent(results[2].replace(/\\+/g, \" \"));
\t\t\t\t\t}
\t\t\t\t\tfunction reinitView() {
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\t\t\t\t\t\$(this).parent().find('button').removeClass('active');
\t\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\t});\t
\t\t\t\t\t\t// Product List
\t\t\t\t\t\t\$('#list-view').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-list col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-list');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid
\t\t\t\t\t\t\$('#grid-view').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-1 col-sm-12 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-grid');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 2
\t\t\t\t\t\t\$('#grid-view-2').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-2');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 3
\t\t\t\t\t\t\$('#grid-view-3').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-3');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 4
\t\t\t\t\t\t\$('#grid-view-4').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-4');
\t\t\t\t\t\t});

\t\t\t\t\t\tvar url_blogview = getParameterByName('blogview'); // \"lorem\"
\t\t\t\t\t\tif(localStorage.getItem('blogview')== null) localStorage.setItem('blogview', '";
            // line 169
            echo (isset($context["simple_blog_columns"]) ? $context["simple_blog_columns"] : null);
            echo "');
\t\t\t\t\t\tif(url_blogview){
\t\t\t\t\t\t\tif (url_blogview == 'blog-grid') {
\t\t\t\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t\t\t\t}  else if (url_blogview == 'blog-2'){
\t\t\t\t\t\t\t\t\$('#grid-view-2').trigger('click');
\t\t\t\t\t\t\t} else if (url_blogview == 'blog-3' ){
\t\t\t\t\t\t\t\t\$('#grid-view-3').trigger('click');
\t\t\t\t\t\t\t} else if (url_blogview == 'blog-4'){
\t\t\t\t\t\t\t\t\$('#grid-view-4').trigger('click');
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t}else{

\t\t\t\t\t\t\tif (localStorage.getItem('blogview') == 'blog-grid') {
\t\t\t\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t\t\t\t}  else if (localStorage.getItem('blogview') == 'blog-2'){
\t\t\t\t\t\t\t\t\$('#grid-view-2').trigger('click');
\t\t\t\t\t\t\t} else if (localStorage.getItem('blogview') == 'blog-3' ){
\t\t\t\t\t\t\t\t\$('#grid-view-3').trigger('click');
\t\t\t\t\t\t\t} else if (localStorage.getItem('blogview') == 'blog-4'){
\t\t\t\t\t\t\t\t\$('#grid-view-4').trigger('click');
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}

\t\t\t\t\t//--></script> 
\t\t\t\t\t";
            // line 201
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 202
                echo "\t                <div class=\"product-filter product-filter-bottom filters-panel clearfix\" >
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12\"><div>";
                // line 205
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 211
            echo "\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t";
            // line 212
            echo (isset($context["error_no_database"]) ? $context["error_no_database"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t
                ";
        // line 216
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
            </div>            
            
            ";
        // line 219
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
        </div>        
    </div> 

";
        // line 223
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/simple_blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 223,  388 => 219,  382 => 216,  379 => 215,  373 => 212,  370 => 211,  366 => 209,  359 => 205,  354 => 202,  352 => 201,  317 => 169,  265 => 119,  259 => 116,  256 => 115,  253 => 114,  235 => 104,  231 => 102,  223 => 100,  221 => 99,  217 => 98,  211 => 95,  200 => 89,  193 => 84,  181 => 76,  179 => 75,  168 => 71,  163 => 68,  161 => 67,  156 => 64,  151 => 63,  149 => 62,  130 => 45,  122 => 40,  115 => 38,  111 => 37,  107 => 36,  103 => 34,  101 => 33,  98 => 32,  91 => 29,  89 => 28,  84 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  53 => 16,  45 => 10,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/* */
/* 	<div class="breadcrumbs ">*/
/* 		<div class="container">*/
/* 	      	<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 	    </div>*/
/* 	</div>*/
/*     <div class="container product-listing">*/
/*         */
/*         <div class="row">*/
/*             {{ column_left }}*/
/*             {% if column_left and column_right %}*/
/*                 {% set class = 'col-sm-6 fluid-allsidebar' %}*/
/*             {% elseif column_left or column_right %}*/
/*                 {% set class = 'col-md-9 col-sm-12 fluid-sidebar' %}*/
/*             {% else %}*/
/*                 {% set class = 'col-sm-12' %}*/
/*             {% endif %}*/
/*             */
/*             <div id="content" class="{{ class }}">*/
/*                 {{ content_top }}*/
/*                 */
/*                 {% if column_left or column_right %}*/
/* 				<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>{{ text_sidebar }}</a>*/
/* 					<div class="sidebar-overlay "></div>*/
/* 				{% endif %}*/
/* */
/* 				{% if error_no_database is defined and error_no_database == '' %}*/
/* 	            <div class="blog-category clearfix">*/
/* 					 <div class="blog-header">*/
/* 						<h3>{{ heading_title }}</h3>*/
/* 						{% if image  %}	*/
/* 						<img  src="{{ image }}" alt="{{heading_title }}" />*/
/* 						{% endif %}*/
/* 						{{ description is defined and description ? description : '' }}*/
/* 					</div>	*/
/* 				*/
/* */
/* 					{#==== filters panel Top==== #}*/
/* 					<div class="product-filter product-filter-top filters-panel">*/
/* 						  <div class="row">*/
/* 								<div class="col-sm-4 view-mode">*/
/* 									<div class="list-view">*/
/* 										<button type="button" id="grid-view" class="btn btn-view hidden-sm hidden-xs">1</button>*/
/* 										<button type="button" id="grid-view-2" class="btn btn-view ">2</button>*/
/* 									  	<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>*/
/* 									  	<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>*/
/* 										<button type="button" id="list-view" class="btn btn-view list "><i class="fa fa-bars"></i></button>*/
/* 										*/
/* 									</div>*/
/* 								</div>*/
/* 							*/
/* 						  </div>*/
/* 					</div>*/
/* */
/* 	                <div class="blog-listitem row">*/
/* 	                    {% if articles %}*/
/* 	                        {% for id_article, article in articles %}*/
/* */
/* 		                        <div class="blog-item ">*/
/* 		                        	<div class="blog-item-inner clearfix">*/
/* 										{% if article.image %}*/
/* 											<div class="itemBlogImg clearfix">*/
/* 												<div class="article-image">*/
/* 													<div>*/
/* 														<a  class="popup-gallery" href="{{ article.image }}"><img  src="{{ article.image }}" alt="{{ article.article_title }}" /></a>*/
/* 													</div>*/
/* 													<div class="article-date">*/
/* 														<div class="date">*/
/* 															{% set datetotime = article.date_added %}*/
/* 														   {{ datetotime }}*/
/* 														</div>*/
/* 													</div>*/
/* */
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										<div class="itemBlogContent clearfix ">*/
/* 											*/
/* 											<div class="blog-content">*/
/* */
/* 										  		<div class="article-title font-title">*/
/* 													<h4><a href="{{ article.href }}">{{ article.article_title|capitalize }}</a></h4>*/
/* 												</div>*/
/* 												*/
/* 										  		*/
/* 												*/
/* 											 	<p class="article-description" >*/
/* 													 {{ article.description }}*/
/* 												</p>*/
/* 												<div class="blog-meta">*/
/* 										  			<span class="author hidden"><i class="fa fa-user"></i><span>Post by </span>{{ article.author_name }}</span>*/
/* 													{% if article.allow_comment %}*/
/* 														<span class="comment_count"><a href="{{ article.comment_href }}#comment-section">{{ article.total_comment }}</a><i class="fa fa-comments"></i></span>*/
/* 													{% endif %}*/
/* 													*/
/* 												</div>*/
/* 												<a class="btn-readmore font-title" href="{{ article.href }}">{{ button_continue_reading }}*/
/* 													<i class="fa fa-arrow-circle-right"></i>*/
/* 												</a>*/
/* */
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 		                        </div>*/
/* 															*/
/* 	                    	{% endfor %}*/
/* 	                    {% else %}*/
/* 	                        <div class="col-xs-12">*/
/* 								<h3 class="text-center">{{ text_no_found }}</h3>*/
/* 							</div>*/
/* 	                    {% endif %}*/
/* 	                </div> */
/* 					*/
/* 					<script type="text/javascript"><!--*/
/* 					reinitView();*/
/* 					function getParameterByName(name, url) {*/
/* 					    if (!url) url = window.location.href;*/
/* 					    name = name.replace(/[\[\]]/g, "\\$&");*/
/* 					    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),*/
/* 					        results = regex.exec(url);*/
/* 					    if (!results) return null;*/
/* 					    if (!results[2]) return '';*/
/* 					    return decodeURIComponent(results[2].replace(/\+/g, " "));*/
/* 					}*/
/* 					function reinitView() {*/
/* 						*/
/* 						$('.view-mode .list-view button').bind("click", function() {*/
/* 							$(this).parent().find('button').removeClass('active');*/
/* 							$(this).addClass('active');*/
/* 						});	*/
/* 						// Product List*/
/* 						$('#list-view').click(function() {*/
/* 							$('#content .blog-item').attr('class', 'blog-item blog-list col-xs-12');*/
/* 							localStorage.setItem('blogview', 'blog-list');*/
/* 						});*/
/* */
/* 						// Product Grid*/
/* 						$('#grid-view').click(function() {*/
/* 							$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-1 col-sm-12 col-xs-12');*/
/* 							localStorage.setItem('blogview', 'blog-grid');*/
/* 						});*/
/* */
/* 						// Product Grid 2*/
/* 						$('#grid-view-2').click(function() {*/
/* 							$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');*/
/* 							localStorage.setItem('blogview', 'blog-2');*/
/* 						});*/
/* */
/* 						// Product Grid 3*/
/* 						$('#grid-view-3').click(function() {*/
/* 							$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');*/
/* 							localStorage.setItem('blogview', 'blog-3');*/
/* 						});*/
/* */
/* 						// Product Grid 4*/
/* 						$('#grid-view-4').click(function() {*/
/* 							$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');*/
/* 							localStorage.setItem('blogview', 'blog-4');*/
/* 						});*/
/* */
/* 						var url_blogview = getParameterByName('blogview'); // "lorem"*/
/* 						if(localStorage.getItem('blogview')== null) localStorage.setItem('blogview', '{{simple_blog_columns}}');*/
/* 						if(url_blogview){*/
/* 							if (url_blogview == 'blog-grid') {*/
/* 								$('#grid-view').trigger('click');*/
/* 							}  else if (url_blogview == 'blog-2'){*/
/* 								$('#grid-view-2').trigger('click');*/
/* 							} else if (url_blogview == 'blog-3' ){*/
/* 								$('#grid-view-3').trigger('click');*/
/* 							} else if (url_blogview == 'blog-4'){*/
/* 								$('#grid-view-4').trigger('click');*/
/* 							} else{*/
/* 								$('#list-view').trigger('click');*/
/* 							}*/
/* 							*/
/* 						}else{*/
/* */
/* 							if (localStorage.getItem('blogview') == 'blog-grid') {*/
/* 								$('#grid-view').trigger('click');*/
/* 							}  else if (localStorage.getItem('blogview') == 'blog-2'){*/
/* 								$('#grid-view-2').trigger('click');*/
/* 							} else if (localStorage.getItem('blogview') == 'blog-3' ){*/
/* 								$('#grid-view-3').trigger('click');*/
/* 							} else if (localStorage.getItem('blogview') == 'blog-4'){*/
/* 								$('#grid-view-4').trigger('click');*/
/* 							} else{*/
/* 								$('#list-view').trigger('click');*/
/* 							}*/
/* 						}*/
/* 						*/
/* 					}*/
/* */
/* 					//--></script> */
/* 					{% if pagination %}*/
/* 	                <div class="product-filter product-filter-bottom filters-panel clearfix" >*/
/* 						<div class="row">*/
/* 							*/
/* 							<div class="col-md-12"><div>{{ pagination }}</div></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				{% else %}*/
/* 					<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>*/
/* 						{{ error_no_database }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/*                 {{ content_bottom }}*/
/*             </div>            */
/*             */
/*             {{ column_right }}*/
/*         </div>        */
/*     </div> */
/* */
/* {{ footer }}*/
/* */
