<?php

/* so-mobile/template/product/category.twig */
class __TwigTemplate_312ab298e9b8a2ec12f3b62614d7e99bd69e15f61309223a822ab562b3fa08bc extends Twig_Template
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
        // line 2
        $context["devices"] = array("lg" => "Desktops", "md" => "Tablet Landscape", "sm" => "Tablet Portrait", "xs" => "Phones");
        // line 3
        $context["device_refine"] = "form-group ";
        // line 4
        echo "
";
        // line 5
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

<div class=\"container page-category\">
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    
    <div id=\"content\" class=\"col-xs-12\">
    \t
\t\t<div class=\"products-category clearfix\">
\t\t\t
\t\t\t";
        // line 15
        echo "\t\t\t";
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 16
            echo "\t\t\t\t<div class=\"form-group category-info\">
\t\t\t\t\t<img src=\"";
            // line 17
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"media-object\" />
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "category_more"), "method")) {
            // line 21
            echo "\t\t\t\t\t<a class=\"btn btn-block btn-outlined btn-collapse\" role=\"button\" data-toggle=\"collapse\" href=\"#collapseCategory\"> ";
            echo (isset($context["text_morecategory"]) ? $context["text_morecategory"] : null);
            echo "  </a>
\t\t\t";
        }
        // line 23
        echo "
\t\t\t
\t\t\t";
        // line 26
        echo "\t\t\t<div id=\"collapseCategory\" class=\"product-catalog__mode ";
        echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "category_more"), "method")) ? ("collapse") : (""));
        echo "\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 28
        echo (isset($context["description"]) ? $context["description"] : null);
        echo " 
\t\t\t\t</div>
\t\t\t\t";
        // line 30
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            echo " 
\t\t\t\t<div class=\"refine-search form-group\">
\t\t\t\t\t<h3 class=\"title-category\">";
            // line 32
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo " </h3>
\t\t\t\t\t<ul class=\"row refine-search__list\">
\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                echo "\t\t\t\t\t\t<li class=\"col-xs-4\">
\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo $this->getAttribute($context["category"], "href", array());
                echo " \" class=\"thumbnail\"><img src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo " \" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo " \" /> </a>
\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo $this->getAttribute($context["category"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["category"], "name", array());
                echo " </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t\t ";
        }
        // line 44
        echo "\t\t\t</div>
\t
\t  
\t\t\t";
        // line 47
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 48
            echo "\t\t\t\t";
            // line 49
            echo "\t\t\t\t
\t\t\t\t\t";
            // line 50
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/listing.twig"), "so-mobile/template/product/category.twig", 50)->display(array_merge($context, array("listingType" => (isset($context["listingType"]) ? $context["listingType"] : null))));
            // line 51
            echo "\t\t\t\t
\t\t\t";
        }
        // line 53
        echo "\t\t  
\t\t\t";
        // line 54
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 55
            echo "\t\t\t  <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t  <div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 57
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t  </div>
\t\t\t";
        }
        // line 60
        echo "\t      
\t  </div>

\t  </div>
    ";
        // line 64
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  166 => 64,  160 => 60,  152 => 57,  146 => 55,  144 => 54,  141 => 53,  137 => 51,  135 => 50,  132 => 49,  130 => 48,  128 => 47,  123 => 44,  117 => 40,  106 => 37,  98 => 36,  95 => 35,  91 => 34,  86 => 32,  81 => 30,  76 => 28,  70 => 26,  66 => 23,  60 => 21,  57 => 20,  47 => 17,  44 => 16,  41 => 15,  32 => 8,  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#====  Variables Device_res ==== #}*/
/* {% set devices = { 'lg' : 'Desktops','md' : 'Tablet Landscape','sm' : 'Tablet Portrait','xs' : 'Phones'} %}*/
/* {% set device_refine = 'form-group ' %}*/
/* */
/* {{ header }}*/
/* */
/* <div class="container page-category">*/
/*   <div class="row">{{ column_left }}*/
/*     */
/*     <div id="content" class="col-xs-12">*/
/*     	*/
/* 		<div class="products-category clearfix">*/
/* 			*/
/* 			{#===== Show Description Category =======#}*/
/* 			{% if thumb %}*/
/* 				<div class="form-group category-info">*/
/* 					<img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="media-object" />*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if soconfig.get_settings('category_more')  %}*/
/* 					<a class="btn btn-block btn-outlined btn-collapse" role="button" data-toggle="collapse" href="#collapseCategory"> {{ text_morecategory }}  </a>*/
/* 			{% endif %}*/
/* */
/* 			*/
/* 			{#===== Show Sub Category =======#}*/
/* 			<div id="collapseCategory" class="product-catalog__mode {{ soconfig.get_settings('category_more') ? 'collapse' : ''}}">*/
/* 				<div class="form-group">*/
/* 					{{ description }} */
/* 				</div>*/
/* 				{% if categories %} */
/* 				<div class="refine-search form-group">*/
/* 					<h3 class="title-category">{{ text_refine }} </h3>*/
/* 					<ul class="row refine-search__list">*/
/* 					{% for category in categories %}*/
/* 						<li class="col-xs-4">*/
/* 							<a href="{{ category.href }} " class="thumbnail"><img src="{{ category.thumb }} " alt="{{ category.name }} " /> </a>*/
/* 							<a href="{{ category.href }} ">{{ category.name }} </a>*/
/* 						</li>*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* */
/* 				</div>*/
/* 				 {% endif %}*/
/* 			</div>*/
/* 	*/
/* 	  */
/* 			{% if products %}*/
/* 				{#==== Product Listing ==== #}*/
/* 				*/
/* 					{% include theme_directory~'/template/soconfig/listing.twig' with {listingType: listingType} %}*/
/* 				*/
/* 			{% endif %}*/
/* 		  */
/* 			{% if not categories and not products %}*/
/* 			  <p>{{ text_empty }}</p>*/
/* 			  <div class="buttons">*/
/* 				<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 			  </div>*/
/* 			{% endif %}*/
/* 	      */
/* 	  </div>*/
/* */
/* 	  </div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
