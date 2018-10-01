<?php

/* so-megastore/template/extension/module/so_latest_blog/default_items.twig */
class __TwigTemplate_c3556d1da64fc3315d8318019e8bd621923a9179a5d6dd5648cb6159d68a9130 extends Twig_Template
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
\t";
        // line 2
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "simple")) {
            // line 3
            echo "\t<div class=\"item\">
\t\t";
            // line 4
            if (($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "thumb", array()) && (isset($context["blog_image"]) ? $context["blog_image"] : null))) {
                // line 5
                echo "\t\t\t<div class=\"media-left\">
\t\t\t\t<a href=\"";
                // line 6
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\">
\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                // line 7
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array());
                echo "\" class=\"lazyload\">
\t\t\t\t</a>
\t\t\t\t";
                // line 9
                if ((isset($context["display_date_added"]) ? $context["display_date_added"] : null)) {
                    // line 10
                    echo "\t\t\t\t<div class=\"entry-date font-ct\">
\t\t\t\t\t<div class=\"day-time\">";
                    // line 11
                    echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date_modified", array()), "j");
                    echo "</div>
\t\t\t\t\t<div class=\"month-time\">";
                    // line 12
                    echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date_modified", array()), "M");
                    echo "</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t";
                }
                // line 15
                echo "\t\t\t</div>
\t\t";
            }
            // line 17
            echo "\t\t<div class=\"media-body\">
\t\t\t";
            // line 18
            if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                // line 19
                echo "\t\t\t\t<h4 class=\"media-heading\">
\t\t\t\t\t<a href=\"";
                // line 20
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\">";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title_maxlength", array());
                echo "</a>
\t\t\t\t</h4>
\t\t\t";
            }
            // line 23
            echo "\t\t\t<div class=\"media-content\">
\t\t\t\t";
            // line 24
            if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                // line 25
                echo "\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t";
                // line 26
                echo twig_slice($this->env, strip_tags($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "description", array())), 0, 200);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t
\t\t\t\t";
            // line 30
            if ((((isset($context["display_author"]) ? $context["display_author"] : null) || (isset($context["display_comment"]) ? $context["display_comment"] : null)) || (isset($context["display_view"]) ? $context["display_view"] : null))) {
                // line 31
                echo "\t\t\t\t\t<div class=\"media-subcontent\">
\t\t\t\t\t\t";
                // line 32
                if ((isset($context["display_author"]) ? $context["display_author"] : null)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t<span class=\"media-author\">";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t";
                if ((isset($context["display_comment"]) ? $context["display_comment"] : null)) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<span class=\"media-comment\">";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "comment_count", array());
                    echo " ";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "text_comment", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t";
                if ((isset($context["display_view"]) ? $context["display_view"] : null)) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<span class=\"media-view\">";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "view_count", array());
                    echo " ";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "text_view", array());
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t
\t\t\t\t";
            // line 44
            if ((isset($context["display_readmore"]) ? $context["display_readmore"] : null)) {
                // line 45
                echo "\t\t\t\t\t<div class=\"readmore\">
\t\t\t\t\t\t<a href=\"";
                // line 46
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" class=\"readmore\">";
                echo (isset($context["readmore_text"]) ? $context["readmore_text"] : null);
                echo "<i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 49
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        } else {
            // line 53
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"media-left\">
\t\t\t";
            // line 55
            if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
                echo "\t\t
\t\t\t\t<a href=\"";
                // line 56
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\">
\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                // line 57
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array());
                echo "\" class=\"lazyload\">
\t\t\t\t</a>
\t\t\t";
            }
            // line 60
            echo "\t\t\t";
            if ((isset($context["display_date_added"]) ? $context["display_date_added"] : null)) {
                // line 61
                echo "\t\t\t\t<div class=\"entry-date font-ct\">
\t\t\t\t\t<div class=\"day-time\">";
                // line 62
                echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date_modified", array()), "j");
                echo "</div>
\t\t\t\t\t<div class=\"month-time\">";
                // line 63
                echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "date_modified", array()), "M");
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 66
            echo "\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<div class=\"media-content\">
\t\t\t\t\t

\t\t\t\t\t";
            // line 71
            if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                // line 72
                echo "\t\t\t\t\t\t<h4 class=\"media-heading font-title\">
\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\">";
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title_maxlength", array());
                echo "</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 77
            if ((((isset($context["display_author"]) ? $context["display_author"] : null) || (isset($context["display_comment"]) ? $context["display_comment"] : null)) || (isset($context["display_view"]) ? $context["display_view"] : null))) {
                // line 78
                echo "\t\t\t\t\t\t<div class=\"media-subcontent\">
\t\t\t\t\t\t\t";
                // line 79
                if ((isset($context["display_comment"]) ? $context["display_comment"] : null)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t<span class=\"media-comment\"><i class=\"fa fa-comments\"></i> ";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "comment_count", array());
                    echo " ";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "text_comment", array());
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 82
                echo "
\t\t\t\t\t\t\t";
                // line 83
                if ((isset($context["display_author"]) ? $context["display_author"] : null)) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<span class=\"media-author\"><i class=\"fa fa-tags\"></i> ";
                    echo twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "author", array()));
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 88
                if ((isset($context["display_view"]) ? $context["display_view"] : null)) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t<span class=\"media-view\">";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "view_count", array());
                    echo " ";
                    echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "text_view", array());
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 93
            echo "
\t\t\t\t\t";
            // line 94
            if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                // line 95
                echo "\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t";
                // line 96
                echo twig_slice($this->env, strip_tags($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "description", array())), 0, 200);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t";
            if ((isset($context["display_readmore"]) ? $context["display_readmore"] : null)) {
                // line 100
                echo "\t\t\t\t\t\t<div class=\"readmore font-title\">
\t\t\t\t\t\t\t<a href=\"";
                // line 101
                echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "link", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" class=\"readmore\">";
                echo (isset($context["readmore_text"]) ? $context["readmore_text"] : null);
                echo " <i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t</div>
\t\t\t</div>
    \t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_latest_blog/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 104,  293 => 101,  290 => 100,  287 => 99,  281 => 96,  278 => 95,  276 => 94,  273 => 93,  269 => 91,  261 => 89,  259 => 88,  255 => 86,  249 => 84,  247 => 83,  244 => 82,  236 => 80,  234 => 79,  231 => 78,  229 => 77,  226 => 76,  214 => 73,  211 => 72,  209 => 71,  202 => 66,  196 => 63,  192 => 62,  189 => 61,  186 => 60,  178 => 57,  172 => 56,  168 => 55,  164 => 53,  158 => 49,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  136 => 41,  128 => 39,  125 => 38,  117 => 36,  114 => 35,  108 => 33,  106 => 32,  103 => 31,  101 => 30,  98 => 29,  92 => 26,  89 => 25,  87 => 24,  84 => 23,  72 => 20,  69 => 19,  67 => 18,  64 => 17,  60 => 15,  54 => 12,  50 => 11,  47 => 10,  45 => 9,  38 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* 	{% if type_show == 'simple' %}*/
/* 	<div class="item">*/
/* 		{% if blog.thumb and blog_image %}*/
/* 			<div class="media-left">*/
/* 				<a href="{{ blog.link }}" target="{{ item_link_target }}">*/
/* 					<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ blog.thumb }}" alt="{{ blog.title  }}" class="lazyload">*/
/* 				</a>*/
/* 				{% if display_date_added %}*/
/* 				<div class="entry-date font-ct">*/
/* 					<div class="day-time">{{ blog.date_modified|date("j") }}</div>*/
/* 					<div class="month-time">{{ blog.date_modified|date("M") }}</div>*/
/* 				</div>					*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<div class="media-body">*/
/* 			{% if display_title %}*/
/* 				<h4 class="media-heading">*/
/* 					<a href="{{ blog.link }}" title="{{ blog.title }}" target="{{ item_link_target }}">{{ blog.title_maxlength }}</a>*/
/* 				</h4>*/
/* 			{% endif %}*/
/* 			<div class="media-content">*/
/* 				{% if display_description %}*/
/* 					<div class="description">*/
/* 						{{ blog.description|striptags|slice(0, 200) }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if display_author or display_comment or display_view %}*/
/* 					<div class="media-subcontent">*/
/* 						{% if display_author %}*/
/* 							<span class="media-author">{{ blog.author }}</span>*/
/* 						{% endif %}*/
/* 						{% if display_comment %}*/
/* 							<span class="media-comment">{{ blog.comment_count }} {{ blog.text_comment }}</span>*/
/* 						{% endif %}*/
/* 						{% if display_view %}*/
/* 							<span class="media-view">{{ blog.view_count }} {{ blog.text_view }}</span>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if display_readmore %}*/
/* 					<div class="readmore">*/
/* 						<a href="{{ blog.link }}" target="{{ item_link_target }}" class="readmore">{{ readmore_text }}<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% else %}*/
/* 		<div class="item">*/
/* 			<div class="media-left">*/
/* 			{% if blog_image %}		*/
/* 				<a href="{{ blog.link }}" target="{{ item_link_target }}">*/
/* 					<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ blog.thumb }}" alt="{{ blog.title  }}" class="lazyload">*/
/* 				</a>*/
/* 			{% endif %}*/
/* 			{% if display_date_added %}*/
/* 				<div class="entry-date font-ct">*/
/* 					<div class="day-time">{{ blog.date_modified|date("j") }}</div>*/
/* 					<div class="month-time">{{ blog.date_modified|date("M") }}</div>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="media-body">*/
/* 				<div class="media-content">*/
/* 					*/
/* */
/* 					{% if display_title %}*/
/* 						<h4 class="media-heading font-title">*/
/* 							<a href="{{ blog.link }}" title="{{ blog.title }}" target="{{ item_link_target }}">{{ blog.title_maxlength }}</a>*/
/* 						</h4>*/
/* 					{% endif %}*/
/* 					*/
/* 					{% if display_author or display_comment or display_view %}*/
/* 						<div class="media-subcontent">*/
/* 							{% if display_comment %}*/
/* 								<span class="media-comment"><i class="fa fa-comments"></i> {{ blog.comment_count }} {{ blog.text_comment }}</span>*/
/* 							{% endif %}*/
/* */
/* 							{% if display_author %}*/
/* 								<span class="media-author"><i class="fa fa-tags"></i> {{ blog.author|capitalize }}</span>*/
/* 							{% endif %}*/
/* */
/* 							*/
/* 							{% if display_view %}*/
/* 								<span class="media-view">{{ blog.view_count }} {{ blog.text_view }}</span>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					{% if display_description %}*/
/* 						<div class="description">*/
/* 							{{ blog.description|striptags|slice(0, 200) }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if display_readmore %}*/
/* 						<div class="readmore font-title">*/
/* 							<a href="{{ blog.link }}" target="{{ item_link_target }}" class="readmore">{{ readmore_text }} <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/*     	</div>*/
/* 	{% endif %}*/
/* */
