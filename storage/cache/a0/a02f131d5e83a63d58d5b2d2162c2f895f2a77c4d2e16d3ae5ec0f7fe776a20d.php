<?php

/* so-mobile/template/mobile/home.twig */
class __TwigTemplate_5a2336dede14d8423f87f6817c690152e36e55b2dd57d579adad389168ac8f3d extends Twig_Template
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
        // line 4
        echo (isset($context["content_home"]) ? $context["content_home"] : null);
        echo "
    </div>

";
        // line 7
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-mobile/template/mobile/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/*     <div id="content">*/
/*         {{ content_home }}*/
/*     </div>*/
/* */
/* {{ footer }}*/
