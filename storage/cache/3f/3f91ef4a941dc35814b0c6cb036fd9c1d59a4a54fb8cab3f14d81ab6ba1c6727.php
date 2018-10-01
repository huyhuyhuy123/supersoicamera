<?php

/* so-mobile/template/extension/module/so_filter_shop_by/default_subcategory.twig */
class __TwigTemplate_8a236bd75a5725a92d48e20ad55f0336e566e45bfc6c725beebfd25ebef151d4 extends Twig_Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Subcategory\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo $this->getAttribute((isset($context["obj_lang"]) ? $context["obj_lang"] : null), "get", array(0 => "text_subcategory"), "method");
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t";
        // line 11
        if ( !twig_test_empty((isset($context["subcategory_all"]) ? $context["subcategory_all"] : null))) {
            // line 12
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subcategory_all"]) ? $context["subcategory_all"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "\t\t\t\t\t";
                if (((twig_length_filter($this->env, (isset($context["subcate_id"]) ? $context["subcate_id"] : null)) > 0) && ((isset($context["subcate_id"]) ? $context["subcate_id"] : null) != ""))) {
                    // line 14
                    echo "\t\t\t\t\t\t";
                    $context["class"] = (((twig_in_filter($this->getAttribute($context["item"], "subcate_id", array()), twig_split_filter($this->env, (isset($context["subcate_id"]) ? $context["subcate_id"] : null), ",")) == true)) ? ("opt_active") : (""));
                    // line 15
                    echo "\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t";
                    $context["class"] = "";
                    // line 17
                    echo "\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t<div class=\"so-filter-option-sub so-filter-option opt-select ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " ";
                echo ((($this->getAttribute($context["item"], "subcate_count_product", array()) > 0)) ? ("opt_enable") : ("opt_disable"));
                echo "\" data-type=\"subcategory\" data-subcategory_value= \"";
                echo $this->getAttribute($context["item"], "subcate_id", array());
                echo "\" data-count_product=\"";
                echo $this->getAttribute($context["item"], "subcate_count_product", array());
                echo "\" data-list_product=\"";
                echo $this->getAttribute($context["item"], "subcate_list_product", array());
                echo "\">
\t\t\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t\t\t<div class=\"option-input\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><img src=\"";
                // line 23
                echo $this->getAttribute($context["item"], "subcate_image", array());
                echo "\"> ";
                echo $this->getAttribute($context["item"], "subcate_name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"option-count ";
                // line 24
                if ((twig_length_filter($this->env, (isset($context["subcate_id"]) ? $context["subcate_id"] : null)) > 0)) {
                    echo " ";
                    echo (((twig_in_filter($this->getAttribute($context["item"], "subcate_id", array()), twig_split_filter($this->env, (isset($context["subcate_id"]) ? $context["subcate_id"] : null), ",")) == true)) ? ("opt_close") : (""));
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<span>";
                // line 25
                echo $this->getAttribute($context["item"], "subcate_count_product", array());
                echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t";
        }
        // line 32
        echo "\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_filter_shop_by/default_subcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  99 => 31,  87 => 25,  79 => 24,  73 => 23,  56 => 18,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  36 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}
/* <li class="so-filter-options" data-option="Subcategory">*/
/* 	<div class="so-filter-heading">*/
/* 		<div class="so-filter-heading-text">*/
/* 			<span>{{ obj_lang.get('text_subcategory') }}</span>*/
/* 		</div>*/
/* 		<i class="fa fa-chevron-down"></i>*/
/* 	</div>*/
/* */
/* 	<div class="so-filter-content-opts">*/
/* 		<div class="so-filter-content-opts-container">*/
/* 			{% if subcategory_all is not empty %}*/
/* 				{% for item in subcategory_all %}*/
/* 					{% if subcate_id|length > 0 and subcate_id != "" %}*/
/* 						{% set class = item.subcate_id in subcate_id|split(',') == true ? 'opt_active' : '' %}*/
/* 					{% else %}*/
/* 						{% set class = "" %}*/
/* 					{% endif %}*/
/* 					<div class="so-filter-option-sub so-filter-option opt-select {{ class }} {{ item.subcate_count_product > 0 ? 'opt_enable' : 'opt_disable' }}" data-type="subcategory" data-subcategory_value= "{{ item.subcate_id }}" data-count_product="{{ item.subcate_count_product }}" data-list_product="{{ item.subcate_list_product }}">*/
/* 						<div class="so-option-container">*/
/* 							<div class="option-input">*/
/* 								<span class="fa fa-square-o"></i>*/
/* 							</div>*/
/* 							<label><img src="{{ item.subcate_image }}"> {{ item.subcate_name }}</label>*/
/* 							<div class="option-count {% if subcate_id|length > 0 %} {{ item.subcate_id in subcate_id|split(',') == true ? 'opt_close' : '' }} {% endif %}">*/
/* 								<span>{{ item.subcate_count_product }}</span>*/
/* 								<i class="fa fa-times"></i>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </li>*/
/* */
