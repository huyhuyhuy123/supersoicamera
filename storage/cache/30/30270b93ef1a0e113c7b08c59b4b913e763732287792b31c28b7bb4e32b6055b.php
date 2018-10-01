<?php

/* so-megastore/template/extension/module/so_html_content/default.twig */
class __TwigTemplate_cd2bbe25eb71c28124e41d3ae306d6c3a72eed529275fba2b816e53b0a044169 extends Twig_Template
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
        echo "<div class=\"module ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " \">
  ";
        // line 2
        if ( !twig_test_empty(trim((isset($context["heading_title"]) ? $context["heading_title"] : null)))) {
            echo " 
    <h2>";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo " </h2>
  ";
        }
        // line 4
        echo " 
  
  ";
        // line 6
        echo (isset($context["html"]) ? $context["html"] : null);
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_html_content/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="module {{ class_suffix }} ">*/
/*   {% if heading_title|trim is not empty %} */
/*     <h2>{{ heading_title }} </h2>*/
/*   {% endif %} */
/*   */
/*   {{ html }} */
/* </div>*/
