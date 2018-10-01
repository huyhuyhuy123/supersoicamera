<?php

/* so-megastore/template/product/search.twig */
class __TwigTemplate_64c5284f32f6403a9c5bcd62754a917a4d26d9b310446f67546beb6ca53e1b5f extends Twig_Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
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
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t<div class=\"form-group\">
\t\t\t<h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<label class=\"control-label\" for=\"input-search\">";
        // line 19
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
\t\t  
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t  <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t  <select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t<option value=\"0\">";
        // line 27
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 30
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 35
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 36
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 41
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 42
                        echo "\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t<div class=\"col-sm-12\" style=\"margin: 15px 0;\">
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t";
        // line 53
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 54
            echo "\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "
\t\t\t\t</label>
\t\t\t\t
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t  ";
        // line 62
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 63
            echo "\t\t\t\t  <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
\t\t\t\t  ";
        } else {
            // line 65
            echo "\t\t\t\t  <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
\t\t\t\t  ";
        }
        // line 67
        echo "\t\t\t\t  ";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "
\t\t\t  </label>
\t\t\t</div>
\t\t  </div>
\t\t 
\t\t\t
\t\t  
\t\t  <input type=\"button\" value=\"";
        // line 74
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
\t\t</div>
\t\t";
        // line 76
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 77
            echo "\t\t
\t  
\t\t";
            // line 80
            echo "\t\t<div class=\"products-category\">
\t\t";
            // line 81
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/listing.twig"), "so-megastore/template/product/search.twig", 81)->display(array_merge($context, array("listingType" => (isset($context["listingType"]) ? $context["listingType"] : null))));
            // line 82
            echo "\t\t</div>
\t  
\t  
\t\t";
        } else {
            // line 86
            echo "\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 88
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t</div>
\t\t";
        }
        // line 91
        echo "\t  
      ";
        // line 92
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 93
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 142
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-megastore/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 142,  276 => 93,  272 => 92,  269 => 91,  261 => 88,  255 => 86,  249 => 82,  247 => 81,  244 => 80,  240 => 77,  238 => 76,  233 => 74,  222 => 67,  218 => 65,  214 => 63,  212 => 62,  204 => 58,  200 => 56,  196 => 54,  194 => 53,  188 => 49,  182 => 48,  176 => 47,  170 => 46,  162 => 44,  154 => 42,  151 => 41,  146 => 40,  138 => 38,  130 => 36,  127 => 35,  122 => 34,  114 => 32,  106 => 30,  103 => 29,  99 => 28,  95 => 27,  86 => 23,  79 => 19,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/* 		<div class="form-group">*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<label class="control-label" for="input-search">{{ entry_search }}</label>*/
/* 		  */
/* 			<div class="row">*/
/* 				<div class="col-sm-3">*/
/* 				  <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/* 				</div>*/
/* 				<div class="col-sm-3">*/
/* 				  <select name="category_id" class="form-control">*/
/* 					<option value="0">{{ text_category }}</option>*/
/* 					{% for category_1 in categories %}*/
/* 					{% if category_1.category_id == category_id %}*/
/* 					<option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/* 					{% endif %}*/
/* 					{% for category_2 in category_1.children %}*/
/* 					{% if category_2.category_id == category_id %}*/
/* 					<option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 					{% endif %}*/
/* 					{% for category_3 in category_2.children %}*/
/* 					{% if category_3.category_id == category_id %}*/
/* 					<option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 					{% endfor %}*/
/* 					{% endfor %}*/
/* 				  </select>*/
/* 				</div>*/
/* 			<div class="col-sm-12" style="margin: 15px 0;">*/
/* 				<label class="checkbox-inline">*/
/* 					{% if sub_category %}*/
/* 					<input type="checkbox" name="sub_category" value="1" checked="checked" />*/
/* 					{% else %}*/
/* 					<input type="checkbox" name="sub_category" value="1" />*/
/* 					{% endif %}*/
/* 					{{ text_sub_category }}*/
/* 				</label>*/
/* 				*/
/* 				<label class="checkbox-inline">*/
/* 				  {% if description %}*/
/* 				  <input type="checkbox" name="description" value="1" id="description" checked="checked" />*/
/* 				  {% else %}*/
/* 				  <input type="checkbox" name="description" value="1" id="description" />*/
/* 				  {% endif %}*/
/* 				  {{ entry_description }}*/
/* 			  </label>*/
/* 			</div>*/
/* 		  </div>*/
/* 		 */
/* 			*/
/* 		  */
/* 		  <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/* 		</div>*/
/* 		{% if products %}*/
/* 		*/
/* 	  */
/* 		{#==== Product Listing ==== #}*/
/* 		<div class="products-category">*/
/* 		{% include theme_directory~'/template/soconfig/listing.twig' with {listingType: listingType} %}*/
/* 		</div>*/
/* 	  */
/* 	  */
/* 		{% else %}*/
/* 			<p>{{ text_empty }}</p>*/
/* 			<div class="buttons">*/
/* 				<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	  */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* {{ footer }}*/
