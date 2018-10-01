<?php

/* so-mobile/template/extension/module/so_html_content/default.twig */
class __TwigTemplate_ddc7e56d2191848908e335ff62008f2cf976aa5c47e9c4db07fde43f5b5a56c9 extends Twig_Template
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
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
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
        return "so-mobile/template/extension/module/so_html_content/default.twig";
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
/*   {% if heading_title %} */
/*     <h2>{{ heading_title }} </h2>*/
/*   {% endif %} */
/*   */
/*   {{ html }} */
/* </div>*/
