<?php

/* so-megastore/template/error/not_found.twig */
class __TwigTemplate_b75ebd5392bf54887518e822c69ec562fd9e1f3d89f8e08bf6d9be1395efcd50 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div id=\"content\" class=\"bg-page-404 ";
        // line 17
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " \">
        ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
        <div class=\"col-sm-7 text-center\">
                <div style=\"margin: 30px 0 50px\"><img src=\"image/catalog/404/404-img-text.png\" alt=\"\"></div>
                <h1>";
        // line 21
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <p>";
        // line 22
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</p>
                <a href=\"";
        // line 23
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\" title=\"";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a>
            </div>
        
            <div class=\"col-sm-5\">
                 <img src=\"image/catalog/404/404-image.png\" alt=\"\">
            </div>
        <?php echo \$content_bottom; ?> 
    </div>

    ";
        // line 32
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 34
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  104 => 32,  88 => 23,  84 => 22,  80 => 21,  74 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/*     <div id="content" class="bg-page-404 {{ class }} ">*/
/*         {{ content_top }}*/
/*         <div class="col-sm-7 text-center">*/
/*                 <div style="margin: 30px 0 50px"><img src="image/catalog/404/404-img-text.png" alt=""></div>*/
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <p>{{ text_error }}</p>*/
/*                 <a href="{{ continue }}" class="btn btn-primary" title="{{ button_continue }}">{{ button_continue }}</a>*/
/*             </div>*/
/*         */
/*             <div class="col-sm-5">*/
/*                  <img src="image/catalog/404/404-image.png" alt="">*/
/*             </div>*/
/*         <?php echo $content_bottom; ?> */
/*     </div>*/
/* */
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
