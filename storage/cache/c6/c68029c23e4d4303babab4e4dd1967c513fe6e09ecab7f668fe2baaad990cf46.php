<?php

/* so-mobile/template/extension/module/so_filter_shop_by/default_manufacturer.twig */
class __TwigTemplate_b8f59d57563e416d9f03cf63e1b6e7c81151408a49f837cde473c83f3b08698d extends Twig_Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Manufacturer\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo $this->getAttribute((isset($context["obj_lang"]) ? $context["obj_lang"] : null), "get", array(0 => "text_manufacturer"), "method");
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manufacturer_all"]) ? $context["manufacturer_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t\t\t";
            if (((twig_length_filter($this->env, (isset($context["manu_id"]) ? $context["manu_id"] : null)) > 0) && ((isset($context["manu_id"]) ? $context["manu_id"] : null) != ""))) {
                // line 13
                echo "\t\t\t\t\t";
                $context["class"] = (((twig_in_filter($this->getAttribute($context["item"], "manu_value_id", array()), twig_split_filter($this->env, (isset($context["manu_id"]) ? $context["manu_id"] : null), ",")) == true)) ? ("opt_active") : (""));
                // line 14
                echo "\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t";
                $context["class"] = "";
                // line 16
                echo "\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t
\t\t\t\t";
            // line 18
            if ($this->getAttribute((isset($context["disp_manu"]) ? $context["disp_manu"] : null), ("disp_manu_id_" . $this->getAttribute($context["item"], "manu_value_id", array())), array(), "array")) {
                // line 19
                echo "\t\t\t\t\t<div class=\"so-filter-option opt-select ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " ";
                echo ((($this->getAttribute($context["item"], "manu_count_product", array()) > 0)) ? ("opt_enable") : ("opt_disable"));
                echo "\" data-type=\"manufacturer\" data-manufacturer_value= \"";
                echo $this->getAttribute($context["item"], "manu_value_id", array());
                echo "\" data-count_product=\"";
                echo $this->getAttribute($context["item"], "manu_count_product", array());
                echo "\" data-list_product=\"";
                echo $this->getAttribute($context["item"], "manu_list_product", array());
                echo "\">
\t\t\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t\t\t<div class=\"option-input\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><img src=\"";
                // line 24
                echo $this->getAttribute($context["item"], "manu_value_image", array());
                echo "\"> ";
                echo $this->getAttribute($context["item"], "manu_value_name", array());
                echo "</label>
\t\t\t\t\t\t\t<div class=\"option-count ";
                // line 25
                if ((twig_length_filter($this->env, (isset($context["manu_id"]) ? $context["manu_id"] : null)) > 0)) {
                    echo " ";
                    echo (((twig_in_filter($this->getAttribute($context["item"], "manu_value_id", array()), $this->getAttribute((isset($context["manu_id"]) ? $context["manu_id"] : null), "split", array(0 => ","), "method")) == true)) ? ("opt_close") : (""));
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<span>";
                // line 26
                echo $this->getAttribute($context["item"], "manu_count_product", array());
                echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_filter_shop_by/default_manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  98 => 32,  89 => 26,  81 => 25,  75 => 24,  58 => 19,  56 => 18,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}
/* <li class="so-filter-options" data-option="Manufacturer">*/
/* 	<div class="so-filter-heading">*/
/* 		<div class="so-filter-heading-text">*/
/* 			<span>{{ obj_lang.get('text_manufacturer') }}</span>*/
/* 		</div>*/
/* 		<i class="fa fa-chevron-down"></i>*/
/* 	</div>*/
/* */
/* 	<div class="so-filter-content-opts">*/
/* 		<div class="so-filter-content-opts-container">*/
/* 			{% for item in manufacturer_all %}*/
/* 				{% if manu_id|length > 0 and manu_id != "" %}*/
/* 					{% set class = item.manu_value_id in manu_id|split(',') == true ? 'opt_active' : '' %}*/
/* 				{% else %}*/
/* 					{% set class = "" %}*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if disp_manu['disp_manu_id_'~item.manu_value_id] %}*/
/* 					<div class="so-filter-option opt-select {{ class }} {{ item.manu_count_product > 0 ? 'opt_enable' : 'opt_disable' }}" data-type="manufacturer" data-manufacturer_value= "{{ item.manu_value_id }}" data-count_product="{{ item.manu_count_product }}" data-list_product="{{ item.manu_list_product }}">*/
/* 						<div class="so-option-container">*/
/* 							<div class="option-input">*/
/* 								<span class="fa fa-square-o"></i>*/
/* 							</div>*/
/* 							<label><img src="{{ item.manu_value_image }}"> {{ item.manu_value_name }}</label>*/
/* 							<div class="option-count {% if manu_id|length > 0 %} {{ item.manu_value_id in manu_id.split(',') == true ? 'opt_close' : '' }} {% endif %}">*/
/* 								<span>{{ item.manu_count_product }}</span>*/
/* 								<i class="fa fa-times"></i>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </li>*/
/* */
