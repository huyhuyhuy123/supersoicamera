<?php

/* so-megastore/template/soconfig/breadcrumbs.twig */
class __TwigTemplate_b90b898fe5f7260ba768afa6aad6ae714a0aec2f330e57fd6d1100ba51e4d702 extends Twig_Template
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
        // line 9
        echo "<div class=\"breadcrumbs \">
\t<div class=\"container\">
       <div class=\"current-name\">\t  
\t    \t";
        // line 12
        $context["last"] = twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        // line 13
        echo "\t    \t";
        $context["i"] = 0;
        // line 14
        echo "\t     \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["breadcrumb"] => $context["crumbInfo"]) {
            echo "  
\t      \t\t";
            // line 15
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "\t    
\t      \t\t";
            // line 16
            if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["last"]) ? $context["last"] : null))) {
                echo " 
\t        \t";
                // line 17
                echo $this->getAttribute($context["crumbInfo"], "text", array());
                echo "
\t       \t";
            }
            // line 18
            echo "  
\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['breadcrumb'], $context['crumbInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t  \t</div>
      <ul class=\"breadcrumb\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/soconfig/breadcrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  64 => 23,  60 => 22,  56 => 20,  49 => 18,  44 => 17,  40 => 16,  36 => 15,  29 => 14,  26 => 13,  24 => 12,  19 => 9,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* <div class="breadcrumbs ">*/
/* 	<div class="container">*/
/*        <div class="current-name">	  */
/* 	    	{% set last = breadcrumbs|length %}*/
/* 	    	{% set i = 0 %}*/
/* 	     	{% for breadcrumb, crumbInfo in breadcrumbs %}  */
/* 	      		{% set i = i + 1 %}	    */
/* 	      		{% if i == last  %} */
/* 	        	{{ crumbInfo.text }}*/
/* 	       	{% endif %}  */
/* 	    	{% endfor %}*/
/* 	  	</div>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/* </div>*/
