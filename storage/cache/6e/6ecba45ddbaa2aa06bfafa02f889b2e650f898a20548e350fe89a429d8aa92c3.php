<?php

/* so-megastore/template/product/category.twig */
class __TwigTemplate_eb43c70ae7f4d9789049bfd0047cda962197bdfff9851fa1973bd9d7fc7ffdae extends Twig_Template
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
";
        // line 4
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/breadcrumbs.twig"), "so-megastore/template/product/category.twig", 4)->display($context);
        // line 5
        echo "

";
        // line 8
        if ((isset($context["url_asidePosition"]) ? $context["url_asidePosition"] : null)) {
            $context["col_position"] = (isset($context["url_asidePosition"]) ? $context["url_asidePosition"] : null);
        } else {
            // line 9
            $context["col_position"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_position"), "method");
            echo " ";
        }
        // line 10
        echo "
";
        // line 11
        if ((isset($context["url_asideType"]) ? $context["url_asideType"] : null)) {
            echo " ";
            $context["col_canvas"] = (isset($context["url_asideType"]) ? $context["url_asideType"] : null);
        } else {
            // line 12
            $context["col_canvas"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_col_type"), "method");
        }
        // line 13
        $context["desktop_canvas"] = ((((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) ? ("desktop-offcanvas") : (""));
        // line 14
        echo "

";
        // line 16
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "inside")) {
            // line 17
            echo "<div class=\"container\">
\t";
            // line 18
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/subcategory.twig"), "so-megastore/template/product/category.twig", 18)->display($context);
            // line 19
            echo "\t
</div>
";
        }
        // line 22
        echo "
<div class=\"container product-listing content-main ";
        // line 23
        echo (isset($context["desktop_canvas"]) ? $context["desktop_canvas"] : null);
        echo "\">
  
  <div class=\"row\">";
        // line 25
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
     ";
        // line 26
        if (((isset($context["col_canvas"]) ? $context["col_canvas"] : null) == "off_canvas")) {
            // line 27
            echo "    \t";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 29
            echo "    \t";
            $context["class"] = "col-md-6 col-sm-12 col-xs-12 fluid-allsidebar";
            // line 30
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 31
            echo "    \t";
            $context["class"] = "col-md-9 col-sm-12 col-xs-12 fluid-sidebar";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "    \t";
            $context["class"] = "col-sm-12";
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <div id=\"content\" class=\"";
        // line 36
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">

    \t";
        // line 38
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t<div class=\"products-category clearfix\">

\t\t\t";
        // line 41
        if (((isset($context["col_position"]) ? $context["col_position"] : null) == "outside")) {
            // line 42
            echo "\t\t\t\t
\t\t\t\t";
            // line 43
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/subcategory.twig"), "so-megastore/template/product/category.twig", 43)->display($context);
            // line 44
            echo "\t\t\t";
        }
        // line 45
        echo "\t  
\t\t\t";
        // line 46
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 47
            echo "\t\t\t\t";
            // line 48
            echo "\t\t\t\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/listing.twig"), "so-megastore/template/product/category.twig", 48)->display(array_merge($context, array("listingType" => (isset($context["listingType"]) ? $context["listingType"] : null))));
            // line 49
            echo "\t\t\t\t
\t\t\t";
        }
        // line 51
        echo "\t\t  
\t\t\t";
        // line 52
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 53
            echo "\t\t\t  <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t  <div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 55
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t  </div>
\t\t\t";
        }
        // line 58
        echo "
\t      \t";
        // line 59
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "

\t  \t</div>
\t </div>

    ";
        // line 64
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "

    ";
        // line 66
        if ((isset($context["url_sidebarsticky"]) ? $context["url_sidebarsticky"] : null)) {
            echo " ";
            $context["sidebar_sticky"] = (isset($context["url_sidebarsticky"]) ? $context["url_sidebarsticky"] : null);
            // line 67
            echo "\t";
        } else {
            echo " ";
            $context["sidebar_sticky"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_sidebar_sticky"), "method");
        }
        // line 68
        echo "    <script type=\"text/javascript\"><!--
\t\t\$(window).load(sidebar_sticky_update);
\t\t\$(window).resize(sidebar_sticky_update);

    \tfunction sidebar_sticky_update(){
    \t\t var viewportWidth = \$(window).width();
    \t\t if (viewportWidth > 1200) {
\t    \t\t// Initialize the sticky scrolling on an item 
\t\t\t\tsidebar_sticky = '";
        // line 76
        echo (isset($context["sidebar_sticky"]) ? $context["sidebar_sticky"] : null);
        echo "';
\t\t\t\t
\t\t\t\tif(sidebar_sticky=='left'){
\t\t\t\t\t\$(\".left_column\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}else if (sidebar_sticky=='right'){
\t\t\t\t\t\$(\".right_column\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}else if (sidebar_sticky=='all'){
\t\t\t\t\t\$(\".content-aside\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
    \t}
\t\t
\t\t
\t//--></script> 

\t</div>
</div>
";
        // line 102
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 102,  200 => 76,  190 => 68,  184 => 67,  180 => 66,  175 => 64,  167 => 59,  164 => 58,  156 => 55,  150 => 53,  148 => 52,  145 => 51,  141 => 49,  138 => 48,  136 => 47,  134 => 46,  131 => 45,  128 => 44,  126 => 43,  123 => 42,  121 => 41,  115 => 38,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  81 => 26,  77 => 25,  72 => 23,  69 => 22,  64 => 19,  62 => 18,  59 => 17,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  43 => 11,  40 => 10,  36 => 9,  32 => 8,  28 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/* {#====  Loader breadcrumbs ==== #}*/
/* {% include theme_directory~'/template/soconfig/breadcrumbs.twig' %}*/
/* */
/* */
/* {#====  Variables url parameter ==== #}*/
/* {% if url_asidePosition %}{% set col_position = url_asidePosition %}*/
/* {% else %}{% set col_position = soconfig.get_settings('catalog_col_position') %} {% endif %}*/
/* */
/* {% if url_asideType %} {% set col_canvas = url_asideType %}*/
/* {% else %}{% set col_canvas = soconfig.get_settings('catalog_col_type') %}{% endif %}*/
/* {% set desktop_canvas = col_canvas =='off_canvas' ? 'desktop-offcanvas' : '' %}*/
/* */
/* */
/* {% if col_position == 'inside' %}*/
/* <div class="container">*/
/* 	{% include theme_directory~'/template/soconfig/subcategory.twig' %}*/
/* 	*/
/* </div>*/
/* {% endif %}*/
/* */
/* <div class="container product-listing content-main {{desktop_canvas}}">*/
/*   */
/*   <div class="row">{{ column_left }}*/
/*      {% if col_canvas =='off_canvas' %}*/
/*     	{% set class = 'col-sm-12' %}*/
/*     {% elseif column_left and column_right %}*/
/*     	{% set class = 'col-md-6 col-sm-12 col-xs-12 fluid-allsidebar' %}*/
/*     {% elseif column_left or column_right %}*/
/*     	{% set class = 'col-md-9 col-sm-12 col-xs-12 fluid-sidebar' %}*/
/*     {% else %}*/
/*     	{% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/*     <div id="content" class="{{ class }}">*/
/* */
/*     	{{ content_top }}*/
/* 		<div class="products-category clearfix">*/
/* */
/* 			{% if col_position== 'outside' %}*/
/* 				*/
/* 				{% include theme_directory~'/template/soconfig/subcategory.twig' %}*/
/* 			{% endif %}*/
/* 	  */
/* 			{% if products %}*/
/* 				{#==== Product Listing ==== #}*/
/* 				{% include theme_directory~'/template/soconfig/listing.twig' with {listingType: listingType} %}*/
/* 				*/
/* 			{% endif %}*/
/* 		  */
/* 			{% if not categories and not products %}*/
/* 			  <p>{{ text_empty }}</p>*/
/* 			  <div class="buttons">*/
/* 				<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 			  </div>*/
/* 			{% endif %}*/
/* */
/* 	      	{{ content_bottom }}*/
/* */
/* 	  	</div>*/
/* 	 </div>*/
/* */
/*     {{ column_right }}*/
/* */
/*     {% if url_sidebarsticky %} {% set sidebar_sticky = url_sidebarsticky %}*/
/* 	{% else %} {% set sidebar_sticky = soconfig.get_settings('catalog_sidebar_sticky') %}{% endif %}*/
/*     <script type="text/javascript"><!--*/
/* 		$(window).load(sidebar_sticky_update);*/
/* 		$(window).resize(sidebar_sticky_update);*/
/* */
/*     	function sidebar_sticky_update(){*/
/*     		 var viewportWidth = $(window).width();*/
/*     		 if (viewportWidth > 1200) {*/
/* 	    		// Initialize the sticky scrolling on an item */
/* 				sidebar_sticky = '{{sidebar_sticky}}';*/
/* 				*/
/* 				if(sidebar_sticky=='left'){*/
/* 					$(".left_column").stick_in_parent({*/
/* 					    offset_top: 10,*/
/* 					    bottoming   : true*/
/* 					});*/
/* 				}else if (sidebar_sticky=='right'){*/
/* 					$(".right_column").stick_in_parent({*/
/* 					    offset_top: 10,*/
/* 					    bottoming   : true*/
/* 					});*/
/* 				}else if (sidebar_sticky=='all'){*/
/* 					$(".content-aside").stick_in_parent({*/
/* 					    offset_top: 10,*/
/* 					    bottoming   : true*/
/* 					});*/
/* 				}*/
/* 			}*/
/*     	}*/
/* 		*/
/* 		*/
/* 	//--></script> */
/* */
/* 	</div>*/
/* </div>*/
/* {{ footer }} */
/* */
