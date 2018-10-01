<?php

/* so-megastore/template/mobile/home.twig */
class __TwigTemplate_81c1f31caf14faf281927968bf30cd303e4c111454640f3bc32deed190418503 extends Twig_Template
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

    
    <div id=\"content\">
        
        ";
        // line 7
        echo (isset($context["content_mobile"]) ? $context["content_mobile"] : null);
        echo "
   
    </div>
   

";
        // line 12
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-megastore/template/mobile/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/* */
/*     */
/*     <div id="content">*/
/*         */
/*         {{ content_mobile }}*/
/*    */
/*     </div>*/
/*    */
/* */
/* {{ footer }}*/
