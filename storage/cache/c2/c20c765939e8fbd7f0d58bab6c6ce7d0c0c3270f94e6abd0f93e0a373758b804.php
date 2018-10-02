<?php

/* so-megastore/template/extension/module/so_filter_shop_by/default_product_price.twig */
class __TwigTemplate_a6cb5baaf9375506f50a1af3030544ef4e05ce8d66aa1afca087e1784a066a76 extends Twig_Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Price\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo $this->getAttribute((isset($context["obj_lang"]) ? $context["obj_lang"] : null), "get", array(0 => "text_price"), "method");
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t<div class=\"so-filter-content-wrapper so-filter-iscroll\">
\t\t\t\t<div class=\"so-filter-options\">
\t\t\t\t\t<div class=\"so-filter-option so-filter-price\">
\t\t\t\t\t\t<div class=\"content_min_max\">
\t\t\t\t\t\t\t<div class=\"put-min put-min_max\">
\t\t\t\t\t\t\t<span class=\"name-curent\">";
        // line 16
        echo (isset($context["currencies"]) ? $context["currencies"] : null);
        echo "</span> <input type=\"text\" class=\"input_min form-control\" value=\"";
        echo (isset($context["minPrice_new"]) ? $context["minPrice_new"] : null);
        echo "\" min=\"";
        echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
        echo "\" max=\"";
        echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
        echo "\"> </div>
\t\t\t\t\t\t\t<div class=\"put-max put-min_max\"> <span class=\"name-curent\">";
        // line 17
        echo (isset($context["currencies"]) ? $context["currencies"] : null);
        echo "</span> <input type=\"text\" class=\"input_max form-control\" value=\"";
        echo (isset($context["maxPrice_new"]) ? $context["maxPrice_new"] : null);
        echo "\" min=\"";
        echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
        echo "\" max=\"";
        echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
        echo "\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_scroll\">
\t\t\t\t\t\t\t<div id=\"slider-range\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_filter_shop_by/default_product_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  39 => 16,  24 => 4,  19 => 1,);
    }
}
/* <li class="so-filter-options" data-option="Price">*/
/* 	<div class="so-filter-heading">*/
/* 		<div class="so-filter-heading-text">*/
/* 			<span>{{ obj_lang.get('text_price') }}</span>*/
/* 		</div>*/
/* 		<i class="fa fa-chevron-down"></i>*/
/* 	</div>*/
/* */
/* 	<div class="so-filter-content-opts">*/
/* 		<div class="so-filter-content-opts-container">*/
/* 			<div class="so-filter-content-wrapper so-filter-iscroll">*/
/* 				<div class="so-filter-options">*/
/* 					<div class="so-filter-option so-filter-price">*/
/* 						<div class="content_min_max">*/
/* 							<div class="put-min put-min_max">*/
/* 							<span class="name-curent">{{ currencies }}</span> <input type="text" class="input_min form-control" value="{{ minPrice_new }}" min="{{ minPrice }}" max="{{ maxPrice }}"> </div>*/
/* 							<div class="put-max put-min_max"> <span class="name-curent">{{ currencies }}</span> <input type="text" class="input_max form-control" value="{{ maxPrice_new }}" min="{{ minPrice }}" max="{{ maxPrice }}"></div>*/
/* 						</div>*/
/* 						<div class="content_scroll">*/
/* 							<div id="slider-range"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </li>*/
/* */
