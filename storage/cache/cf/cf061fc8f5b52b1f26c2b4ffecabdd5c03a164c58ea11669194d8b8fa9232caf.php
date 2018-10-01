<?php

/* so-mobile/template/extension/module/so_super_category/default_cat.twig */
class __TwigTemplate_14e5e212ed16060bba65f90a279f6404fa6f9a4813390a993fa9c54a29373b8a extends Twig_Template
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
        echo "<div class=\"category-wrap-cat\">
    ";
        // line 2
        if (( !twig_test_empty((isset($context["category_parent"]) ? $context["category_parent"] : null)) && ((isset($context["display_slide_category"]) ? $context["display_slide_category"] : null) == 1))) {
            // line 3
            echo "        <div class=\"title-imageslider  sp-cat-title-parent\">
            <a title=\"";
            // line 4
            echo $this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "name", array());
            echo "\"
               href=\"";
            // line 5
            echo $this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "link", array());
            echo "\"
                target=\"";
            // line 6
            echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
            echo "\">
                ";
            // line 7
            echo (((((isset($context["category_title_maxlength"]) ? $context["category_title_maxlength"] : null) != 0) && (twig_length_filter($this->env, $this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "name", array())) > (isset($context["category_title_maxlength"]) ? $context["category_title_maxlength"] : null)))) ? ((twig_slice($this->env, strip_tags($this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "name", array())), 0, (isset($context["category_title_maxlength"]) ? $context["category_title_maxlength"] : null)) . "..")) : ($this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "name", array())));
            echo "
            </a>
        </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (( !twig_test_empty((isset($context["category_tree"]) ? $context["category_tree"] : null)) && twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null)))) {
            // line 13
            echo "        <div id=\"";
            echo (isset($context["tag"]) ? $context["tag"] : null);
            echo "\" class=\"slider\">
            ";
            // line 14
            if ((array_key_exists("category_tree", $context) && (twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null)) > 0))) {
                // line 15
                echo "                ";
                if (( !twig_test_empty((isset($context["category_parent"]) ? $context["category_parent"] : null)) && ((isset($context["display_slide_category"]) ? $context["display_slide_category"] : null) == 1))) {
                    // line 16
                    echo "                    ";
                    if (((isset($context["show_category_type"]) ? $context["show_category_type"] : null) == 0)) {
                        // line 17
                        echo "                        ";
                        $context["cls_type"] = " so_category_type_default";
                        // line 18
                        echo "                    ";
                    } else {
                        // line 19
                        echo "                        ";
                        $context["cls_type"] = "";
                        // line 20
                        echo "                    ";
                    }
                    // line 21
                    echo "                    <div class=\"cat_slider_inner";
                    echo (isset($context["cls_type"]) ? $context["cls_type"] : null);
                    echo "\">
                        ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category_tree"]) ? $context["category_tree"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["cat_tree"]) {
                        if (($this->getAttribute((isset($context["category_parent"]) ? $context["category_parent"] : null), "name", array()) != $this->getAttribute($context["cat_tree"], "name", array()))) {
                            echo "\t\t\t\t\t       
                            <div class=\"item\">
                                <div class=\"item-inner\">
                                    <div class=\"cat_slider_image hidden\">
                                        <a href=\"";
                            // line 26
                            echo $this->getAttribute($context["cat_tree"], "link", array());
                            echo "\"
                                           title=\"";
                            // line 27
                            echo $this->getAttribute($context["cat_tree"], "name", array());
                            echo "\" target=\"";
                            echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                            echo "\">
                                            <img src=\"";
                            // line 28
                            echo $this->getAttribute($context["cat_tree"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["cat_tree"], "name", array());
                            echo "\">
                                        </a>
                                    </div>

                                    ";
                            // line 32
                            if (((isset($context["display_title_sub_category"]) ? $context["display_title_sub_category"] : null) && (twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null)) > 1))) {
                                // line 33
                                echo "                                        <div class=\"cat_slider_title\">
                                            <a href=\"";
                                // line 34
                                echo $this->getAttribute($context["cat_tree"], "link", array());
                                echo "\"
                                               title=\"";
                                // line 35
                                echo $this->getAttribute($context["cat_tree"], "name", array());
                                echo "\" target=\"";
                                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                                echo "\">
                                                ";
                                // line 36
                                echo $this->getAttribute($context["cat_tree"], "name_maxlength", array());
                                echo "
                                            </a>
                                        </div>
                                    ";
                            }
                            // line 40
                            echo "                                </div>
                            </div>
                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat_tree'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                    </div>
                ";
                }
                // line 45
                echo "            ";
            }
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_super_category/default_cat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 48,  148 => 46,  145 => 45,  141 => 43,  132 => 40,  125 => 36,  119 => 35,  115 => 34,  112 => 33,  110 => 32,  101 => 28,  95 => 27,  91 => 26,  81 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  51 => 13,  49 => 12,  46 => 11,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="category-wrap-cat">*/
/*     {% if category_parent is not empty and display_slide_category == 1 %}*/
/*         <div class="title-imageslider  sp-cat-title-parent">*/
/*             <a title="{{ category_parent.name }}"*/
/*                href="{{ category_parent.link }}"*/
/*                 target="{{ item_link_target }}">*/
/*                 {{ category_title_maxlength != 0 and category_parent.name|length > category_title_maxlength ? category_parent.name|striptags|slice(0, category_title_maxlength) ~ '..' : category_parent.name }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if category_tree is not empty and category_tree|length %}*/
/*         <div id="{{ tag }}" class="slider">*/
/*             {% if category_tree is defined and category_tree|length > 0 %}*/
/*                 {% if category_parent is not empty and display_slide_category == 1 %}*/
/*                     {% if show_category_type == 0 %}*/
/*                         {% set cls_type = " so_category_type_default" %}*/
/*                     {% else %}*/
/*                         {% set cls_type = "" %}*/
/*                     {% endif %}*/
/*                     <div class="cat_slider_inner{{ cls_type }}">*/
/*                         {% for cat_tree in category_tree if category_parent.name != cat_tree.name %}					       */
/*                             <div class="item">*/
/*                                 <div class="item-inner">*/
/*                                     <div class="cat_slider_image hidden">*/
/*                                         <a href="{{ cat_tree.link }}"*/
/*                                            title="{{ cat_tree.name }}" target="{{ item_link_target }}">*/
/*                                             <img src="{{ cat_tree.image }}" alt="{{ cat_tree.name }}">*/
/*                                         </a>*/
/*                                     </div>*/
/* */
/*                                     {% if display_title_sub_category and category_tree|length > 1 %}*/
/*                                         <div class="cat_slider_title">*/
/*                                             <a href="{{ cat_tree.link }}"*/
/*                                                title="{{ cat_tree.name }}" target="{{ item_link_target }}">*/
/*                                                 {{ cat_tree.name_maxlength }}*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
