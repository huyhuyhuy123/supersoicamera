<?php

/* so-megastore/template/extension/module/so_super_category/default_tabs.twig */
class __TwigTemplate_734173d8efc1c4cf078b24371a0f6a19d4a47359d70120f4ee2e87ced3f055fa extends Twig_Template
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
        if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 2
            echo "    <div class=\"spcat-tabs-wrap\">
        <span class='spcat-tab-selected'></span>
        <span class='spcat-tab-arrow'>&#9660;</span>
        <ul class=\"spcat-tabs cf\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 7
                echo "                <li class=\"spcat-tab ";
                echo (($this->getAttribute($context["tab"], "sel", array(), "any", true, true)) ? (" tab-sel tab-loaded") : (""));
                echo "\"
                    data-active-content=\".items-category-";
                // line 8
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
                    data-field_order=\"";
                // line 9
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
                    >
\t\t\t\t\t<span class=\"spcat-tab-label\">";
                // line 11
                echo $this->getAttribute($context["tab"], "title", array());
                echo "</span>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_super_category/default_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  45 => 11,  40 => 9,  36 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if tabs is not empty %}*/
/*     <div class="spcat-tabs-wrap">*/
/*         <span class='spcat-tab-selected'></span>*/
/*         <span class='spcat-tab-arrow'>&#9660;</span>*/
/*         <ul class="spcat-tabs cf">*/
/*             {% for tab in tabs %}*/
/*                 <li class="spcat-tab {{ tab.sel is defined ? ' tab-sel tab-loaded' : '' }}"*/
/*                     data-active-content=".items-category-{{ tab.category_id }}"*/
/*                     data-field_order="{{ tab.category_id }}"*/
/*                     >*/
/* 					<span class="spcat-tab-label">{{ tab.title }}</span>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
