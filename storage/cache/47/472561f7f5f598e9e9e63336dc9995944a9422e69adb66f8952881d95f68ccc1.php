<?php

/* so-megastore/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_38f089288301c4bf1a4a30b7c531f5ff267223f82c1281500db3315fa3e16596 extends Twig_Template
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
        if (((isset($context["layout"]) ? $context["layout"] : null) == "layout_default")) {
            // line 2
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "so-megastore/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } elseif ((        // line 3
(isset($context["layout"]) ? $context["layout"] : null) == "layout_popup")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "so-megastore/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        } else {
            // line 6
            echo "\t ";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout15.twig"), "so-megastore/template/extension/module/so_newletter_custom_popup/default.twig", 6)->display($context);
            echo "\t
";
        }
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if layout == "layout_default" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_default.twig'  %}*/
/* {% elseif layout == "layout_popup" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig' %}*/
/* {% else %}*/
/* 	 {% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout15.twig' %}	*/
/* {% endif %}*/
/* */
/* */
