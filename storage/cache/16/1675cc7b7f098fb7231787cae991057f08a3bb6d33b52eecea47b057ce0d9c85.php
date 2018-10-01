<?php

/* so-megastore/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_b2e47d011c93720bfe6707dbb2bafd7011c4d5f4acd81c6856c69eff3db6b97b extends Twig_Template
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
        echo "<div class=\"responsive megamenu-style-dev\">
\t";
        // line 2
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 3
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 5
        echo "\t
\t";
        // line 6
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "disp_title_module", array()) && (isset($context["head_name"]) ? $context["head_name"] : null))) {
            // line 7
            echo "\t\t<h3>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 9
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\" container-megamenu ";
        // line 10
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "full_width", array()) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            echo " ";
            echo "vertical ";
            echo " ";
        } else {
            echo " ";
            echo "horizontal";
            echo " ";
        }
        echo "\">
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 12
            echo "\t\t\t<div id=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t";
            // line 17
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-verticalmenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<!-- <span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span> -->
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t<span>";
            // line 28
            echo (isset($context["navigation_text"]) ? $context["navigation_text"] : null);
            echo "</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        } else {
            // line 32
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-megamenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 42
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 44
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 46
        echo "
\t\t";
        // line 47
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 48
            echo "\t\t\t<span id=\"remove-verticalmenu\" class=\"fa fa-times\"></span>
\t\t";
        } else {
            // line 50
            echo "\t\t\t<span id=\"remove-megamenu\" class=\"fa fa-times\"></span>
\t\t";
        }
        // line 52
        echo "
\t\t\t<div class=\"megamenu-pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"megamenu\"
\t\t\t\t\tdata-transition=\"";
        // line 56
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array()) != "")) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation", array());
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) > 0) && ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array()) < 5000))) {
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "animation_time", array());
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t\t";
        // line 57
        if ((($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon") || ($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "text"))) {
            // line 58
            echo "\t\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 60
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "home_item", array()) == "icon")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<span><strong>";
                echo (isset($context["home_text"]) ? $context["home_text"] : null);
                echo "</strong></span>
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 70
            echo "\t\t\t\t\t\t\t";
            $context["class"] = "";
            // line 71
            echo "\t\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 72
            echo "\t\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 73
            echo "\t\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context["title"] = false;
            // line 75
            echo "\t\t\t\t\t\t\t";
            $context["target"] = false;
            // line 76
            echo "
\t\t\t\t\t\t\t";
            // line 77
            if (twig_in_filter("no_image", $this->getAttribute($context["row"], "icon", array()))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 79
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = $this->getAttribute($context["row"], "icon", array());
                // line 81
                echo "\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 83
            if (($this->getAttribute($context["row"], "description", array()) != "")) {
                // line 84
                echo "\t\t\t\t\t\t\t\t";
                $context["class_link"] = ((isset($context["class_link"]) ? $context["class_link"] : null) . " description");
                // line 85
                echo "\t\t\t\t\t\t\t";
            }
            // line 86
            echo "
\t\t\t\t\t\t\t";
            // line 87
            if (((((isset($context["route"]) ? $context["route"] : null) && ((isset($context["route"]) ? $context["route"] : null) == $this->getAttribute($context["row"], "route", array()))) && (isset($context["path"]) ? $context["path"] : null)) && ((isset($context["path"]) ? $context["path"] : null) == $this->getAttribute($context["row"], "path", array())))) {
                // line 88
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active_menu");
                // line 89
                echo "\t\t\t\t\t\t\t";
            }
            // line 90
            echo "
\t\t\t\t\t\t\t";
            // line 91
            if ($this->getAttribute($context["row"], "class_menu", array())) {
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . $this->getAttribute($context["row"], "class_menu", array()));
                // line 93
                echo "\t\t\t\t\t\t\t";
            }
            // line 94
            echo "
\t\t\t\t\t\t\t";
            // line 95
            if ($this->getAttribute($context["row"], "icon_font", array())) {
                // line 96
                echo "\t\t\t\t\t\t\t\t";
                $context["icon_font"] = ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . "<i class=\"") . $this->getAttribute($context["row"], "icon_font", array())) . "\"></i>");
                // line 97
                echo "\t\t\t\t\t\t\t";
            }
            // line 98
            echo "
\t\t\t\t\t\t\t";
            // line 99
            if ($this->getAttribute($context["row"], "label_item", array())) {
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                $context["label_item"] = ((((isset($context["label_item"]) ? $context["label_item"] : null) . "<span class=\"label") . $this->getAttribute($context["row"], "label_item", array())) . "\"></span>");
                // line 101
                echo "\t\t\t\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t\t\t\t";
            // line 103
            if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " with-sub-menu");
                // line 105
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["row"], "submenu_type", array()) == 1)) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " click");
                    // line 107
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " hover");
                    // line 109
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t";
            }
            // line 111
            echo "
\t\t\t\t\t\t\t";
            // line 112
            if (($this->getAttribute($context["row"], "position", array()) == 1)) {
                // line 113
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " pull-right");
                // line 114
                echo "\t\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t\t";
            // line 116
            if (($this->getAttribute($context["row"], "submenu_type", array()) == 2)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 118
                echo "\t\t\t\t\t\t\t";
            }
            // line 119
            echo "
\t\t\t\t\t\t\t";
            // line 120
            if (($this->getAttribute($context["row"], "new_window", array()) == 1)) {
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            // line 123
            echo "
\t\t\t\t\t\t\t";
            // line 124
            if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
                // line 125
                echo "\t\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 127
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 131
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='fa fa-caret-right' ></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 139
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 141
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 145
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", $this->getAttribute($context["row"], "submenu_width", array()))) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter($this->getAttribute($context["row"], "submenu_width", array()), array("%" => ""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo $this->getAttribute($context["row"], "submenu_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 151
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 154
                    $context["row_fluid"] = 0;
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 158
                            echo "\t\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 161
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 163
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 165
$context["submenu"], "content_type", array()) == 1)) {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 167
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 168
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 169
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 171
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 172
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 174
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 176
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 179
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">";
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 181
$context["submenu"], "content_type", array()) == 3)) {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 183
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 184
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 185
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 187
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 189
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 191
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 194
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 196
$context["submenu"], "content_type", array()) == 5)) {
                            // line 197
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 198
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 199
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 200
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 201
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 202
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 204
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 205
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 207
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 208
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 210
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 212
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 216
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 218
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 219
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 220
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 224
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 225
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\"  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 230
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 231
                                    echo $this->getAttribute($context["product"], "description", array());
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 232
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 233
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 234
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 235
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 236
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 238
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 240
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 241
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 243
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 244
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 245
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 246
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 247
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 249
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 250
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        }
                                        // line 252
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        // line 253
                                        if ($this->getAttribute($context["product"], "tax", array())) {
                                            // line 254
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo $this->getAttribute($context["product"], "tax", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 256
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 258
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 263
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 264
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 272
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"";
                // line 273
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\" ";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 275
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 278
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 280
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["row"], "link", array());
                    echo "\" class=\"";
                    echo (isset($context["class_link"]) ? $context["class_link"] : null);
                    echo "\" ";
                    echo (isset($context["target"]) ? $context["target"] : null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 286
                    echo ((((isset($context["icon_font"]) ? $context["icon_font"] : null) . (isset($context["icon"]) ? $context["icon"] : null)) . $this->getAttribute($this->getAttribute($context["row"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array")) . $this->getAttribute($context["row"], "description", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 288
                    echo (isset($context["label_item"]) ? $context["label_item"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 291
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 292
                if ((twig_test_iterable($this->getAttribute($context["row"], "submenu", array())) && $this->getAttribute($context["row"], "submenu", array()))) {
                    // line 293
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo $this->getAttribute($context["row"], "submenu_width", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 296
                    $context["row_fluid"] = 0;
                    // line 297
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "submenu", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array())) > 12)) {
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = $this->getAttribute($context["submenu"], "content_width", array());
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 302
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = ((isset($context["row_fluid"]) ? $context["row_fluid"] : null) + $this->getAttribute($context["submenu"], "content_width", array()));
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 304
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo $this->getAttribute($context["submenu"], "content_width", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 305
                        if (($this->getAttribute($context["submenu"], "content_type", array()) == 0)) {
                            // line 306
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 307
                            echo $this->getAttribute($context["submenu"], "html", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 309
$context["submenu"], "content_type", array()) == 1)) {
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "product", array()))) {
                                // line 311
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 312
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "image", array());
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 313
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "\" onclick=\"window.location = '";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "link", array());
                                echo "'\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "name", array());
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 315
                                if ( !$this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array())) {
                                    // line 316
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "price", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 318
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo $this->getAttribute($this->getAttribute($context["submenu"], "product", array()), "special", array());
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 320
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 323
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 2)) {
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 325
                            echo $this->getAttribute($context["submenu"], "categories", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 327
$context["submenu"], "content_type", array()) == 3)) {
                            // line 328
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable($this->getAttribute($context["submenu"], "manufactures", array()))) {
                                // line 329
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 330
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["submenu"], "manufactures", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 331
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute($context["manufacturer"], "link", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["manufacturer"], "name", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 333
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 335
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 4)) {
                            // line 336
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "show_title", array()) == 1)) {
                                // line 337
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 339
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo $this->getAttribute($context["submenu"], "class_menu", array());
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 340
                            echo $this->getAttribute($this->getAttribute($context["submenu"], "images", array()), "link", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 342
$context["submenu"], "content_type", array()) == 5)) {
                            // line 343
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array())) {
                                // line 344
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo $this->getAttribute($context["submenu"], "class_menu", array());
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 345
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "categories", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 346
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 347
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_title", array()) == 1)) {
                                        // line 348
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo $this->getAttribute($context["categories"], "href", array());
                                        echo "\" class=\"title-submenu ";
                                        echo $this->getAttribute($context["submenu"], "class_menu", array());
                                        echo "\">";
                                        echo $this->getAttribute($context["categories"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 350
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ($this->getAttribute($context["categories"], "categories", array())) {
                                        // line 351
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo $this->getAttribute($context["categories"], "categories", array());
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 353
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (($this->getAttribute($this->getAttribute($context["submenu"], "subcategory", array()), "show_image", array()) == 1)) {
                                        // line 354
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo $this->getAttribute($context["categories"], "thumb", array());
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 356
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 358
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 360
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($context["submenu"], "content_type", array()) == 6)) {
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "show_title", array()) == 1)) {
                                // line 362
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo $this->getAttribute($this->getAttribute($context["submenu"], "name", array()), (isset($context["lang_id"]) ? $context["lang_id"] : null), array(), "array");
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 364
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array())) {
                                // line 365
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "products", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 366
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = (($this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array())) ? ((12 / $this->getAttribute($this->getAttribute($context["submenu"], "productlist", array()), "col", array()))) : (4));
                                    // line 367
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo (isset($context["itempage"]) ? $context["itempage"] : null);
                                    echo " ";
                                    echo $this->getAttribute($context["submenu"], "class_menu", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 370
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 371
                                    echo $this->getAttribute($context["product"], "thumb", array());
                                    echo "\" alt=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\" title=\"";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 376
                                    echo $this->getAttribute($context["product"], "href", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["product"], "name", array());
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 377
                                    echo $this->getAttribute($context["product"], "description", array());
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 378
                                    if ($this->getAttribute($context["product"], "rating", array())) {
                                        // line 379
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 380
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 381
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                                // line 382
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 384
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 386
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 387
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 389
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 390
                                    if ($this->getAttribute($context["product"], "price", array())) {
                                        // line 391
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 392
                                        if ( !$this->getAttribute($context["product"], "special", array())) {
                                            // line 393
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 395
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo $this->getAttribute($context["product"], "special", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 396
                                            echo $this->getAttribute($context["product"], "price", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 398
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        // line 399
                                        if ($this->getAttribute($context["product"], "tax", array())) {
                                            // line 400
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo $this->getAttribute($context["product"], "tax", array());
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 402
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 404
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 409
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 410
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 411
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 413
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 417
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 419
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 426
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 427
            echo "\t\t</div>
\t";
        }
        // line 429
        echo "</div>

";
        // line 431
        if (($this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "orientation", array()) == 1)) {
            // line 432
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\tvar itemver =  ";
            // line 434
            echo $this->getAttribute((isset($context["ustawienia"]) ? $context["ustawienia"] : null), "show_itemver", array());
            echo ";
\t\tif(itemver <= \$( \".vertical ul.megamenu >li\" ).length)
\t\t\t\$('.vertical ul.megamenu').append('<li class=\"loadmore\"><i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\"> ";
            // line 436
            echo (isset($context["text_more_category"]) ? $context["text_more_category"] : null);
            echo "</span></li>');
\t\t\$('.horizontal ul.megamenu li.loadmore').remove();

\t\tvar show_itemver = itemver-1 ;
\t\t\$('ul.megamenu > li.item-vertical').each(function(i){
\t\t\tif(i>show_itemver){
\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t}
\t\t});
\t\t\$(\".megamenu .loadmore\").click(function(){
\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\">";
            // line 454
            echo (isset($context["text_more_category"]) ? $context["text_more_category"] : null);
            echo "</span>');
\t\t\t}else{
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).addClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-minus-square\"></i><span class=\"more-view\">";
            // line 462
            echo (isset($context["text_close_category"]) ? $context["text_close_category"] : null);
            echo "</span>');
\t\t\t}
\t\t});
\t});
</script>
";
        }
        // line 468
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 470
        echo (isset($context["actual_link"]) ? $context["actual_link"] : null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1293 => 470,  1289 => 468,  1280 => 462,  1269 => 454,  1248 => 436,  1243 => 434,  1239 => 432,  1237 => 431,  1233 => 429,  1229 => 427,  1227 => 426,  1219 => 420,  1213 => 419,  1209 => 417,  1203 => 413,  1196 => 411,  1193 => 410,  1190 => 409,  1180 => 404,  1176 => 402,  1170 => 400,  1168 => 399,  1165 => 398,  1160 => 396,  1155 => 395,  1149 => 393,  1147 => 392,  1144 => 391,  1142 => 390,  1139 => 389,  1135 => 387,  1129 => 386,  1125 => 384,  1121 => 382,  1118 => 381,  1114 => 380,  1111 => 379,  1109 => 378,  1105 => 377,  1099 => 376,  1087 => 371,  1083 => 370,  1074 => 367,  1071 => 366,  1066 => 365,  1063 => 364,  1057 => 362,  1054 => 361,  1051 => 360,  1047 => 358,  1040 => 356,  1034 => 354,  1031 => 353,  1025 => 351,  1022 => 350,  1012 => 348,  1010 => 347,  1007 => 346,  1003 => 345,  998 => 344,  995 => 343,  993 => 342,  988 => 340,  983 => 339,  977 => 337,  974 => 336,  971 => 335,  967 => 333,  956 => 331,  952 => 330,  947 => 329,  944 => 328,  942 => 327,  937 => 325,  932 => 324,  929 => 323,  924 => 320,  918 => 318,  912 => 316,  910 => 315,  901 => 313,  893 => 312,  888 => 311,  885 => 310,  883 => 309,  878 => 307,  873 => 306,  871 => 305,  866 => 304,  863 => 303,  860 => 302,  856 => 300,  853 => 299,  850 => 298,  845 => 297,  843 => 296,  836 => 293,  834 => 292,  831 => 291,  825 => 288,  820 => 286,  810 => 284,  803 => 280,  798 => 278,  788 => 276,  786 => 275,  779 => 273,  776 => 272,  772 => 271,  766 => 267,  756 => 264,  753 => 263,  743 => 258,  739 => 256,  733 => 254,  731 => 253,  728 => 252,  723 => 250,  718 => 249,  712 => 247,  710 => 246,  707 => 245,  705 => 244,  702 => 243,  698 => 241,  692 => 240,  688 => 238,  684 => 236,  681 => 235,  677 => 234,  674 => 233,  672 => 232,  668 => 231,  662 => 230,  650 => 225,  646 => 224,  637 => 221,  634 => 220,  629 => 219,  626 => 218,  620 => 216,  617 => 215,  614 => 214,  610 => 212,  603 => 210,  597 => 208,  594 => 207,  588 => 205,  585 => 204,  575 => 202,  573 => 201,  570 => 200,  566 => 199,  561 => 198,  558 => 197,  556 => 196,  551 => 194,  546 => 193,  540 => 191,  537 => 190,  534 => 189,  530 => 187,  519 => 185,  515 => 184,  510 => 183,  507 => 182,  505 => 181,  498 => 180,  495 => 179,  490 => 176,  484 => 174,  478 => 172,  476 => 171,  467 => 169,  459 => 168,  454 => 167,  451 => 166,  449 => 165,  442 => 164,  440 => 163,  435 => 162,  432 => 161,  429 => 160,  425 => 158,  422 => 157,  419 => 156,  414 => 155,  412 => 154,  407 => 151,  401 => 149,  395 => 147,  392 => 146,  390 => 145,  387 => 144,  381 => 141,  376 => 139,  366 => 137,  359 => 133,  354 => 131,  343 => 128,  341 => 127,  333 => 125,  331 => 124,  328 => 123,  325 => 122,  322 => 121,  320 => 120,  317 => 119,  314 => 118,  311 => 117,  309 => 116,  306 => 115,  303 => 114,  300 => 113,  298 => 112,  295 => 111,  292 => 110,  289 => 109,  286 => 108,  283 => 107,  280 => 106,  277 => 105,  274 => 104,  272 => 103,  269 => 102,  266 => 101,  263 => 100,  261 => 99,  258 => 98,  255 => 97,  252 => 96,  250 => 95,  247 => 94,  244 => 93,  241 => 92,  239 => 91,  236 => 90,  233 => 89,  230 => 88,  228 => 87,  225 => 86,  222 => 85,  219 => 84,  217 => 83,  214 => 82,  211 => 81,  208 => 80,  205 => 79,  202 => 78,  200 => 77,  197 => 76,  194 => 75,  191 => 74,  188 => 73,  185 => 72,  182 => 71,  179 => 70,  175 => 69,  172 => 68,  167 => 65,  161 => 63,  157 => 61,  155 => 60,  151 => 59,  148 => 58,  146 => 57,  132 => 56,  126 => 52,  122 => 50,  118 => 48,  116 => 47,  113 => 46,  109 => 44,  105 => 42,  103 => 41,  100 => 40,  90 => 32,  83 => 28,  69 => 17,  62 => 12,  60 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="responsive megamenu-style-dev">*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 	<div class="so-vertical-menu no-gutter">*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if ustawienia.disp_title_module and head_name %}*/
/* 		<h3>{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* 	<nav class="navbar-default">*/
/* 		<div class=" container-megamenu {% if ustawienia.full_width != 1 %} {{ 'container' }} {% endif %} {% if ustawienia.orientation == 1 %} {{ 'vertical ' }} {% else %} {{ 'horizontal' }} {% endif %}">*/
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div id="menuHeading">*/
/* 				<div class="megamenuToogle-wrapper">*/
/* 					<div class="megamenuToogle-pattern">*/
/* 						<div class="container">*/
/* 							<div><span></span><span></span><span></span></div>*/
/* 							{{ navigation_text }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" id="show-verticalmenu" data-toggle="collapse"  class="navbar-toggle">*/
/* 					<!-- <span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span> -->*/
/* 					<i class="fa fa-bars"></i>*/
/* 					<span>{{ navigation_text }}</span>*/
/* 				</button>*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle">*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<div class="vertical-wrapper">*/
/* 		{% else %}*/
/* 			<div class="megamenu-wrapper">*/
/* 		{% endif %}*/
/* */
/* 		{% if ustawienia.orientation == 1 %}*/
/* 			<span id="remove-verticalmenu" class="fa fa-times"></span>*/
/* 		{% else %}*/
/* 			<span id="remove-megamenu" class="fa fa-times"></span>*/
/* 		{% endif %}*/
/* */
/* 			<div class="megamenu-pattern">*/
/* 				<div class="container">*/
/* 					<ul class="megamenu"*/
/* 					data-transition="{% if ustawienia.animation != '' %}{{ ustawienia.animation }}{% else %}{{ 'none' }}{% endif %}" data-animationtime="{% if ustawienia.animation_time > 0 and ustawienia.animation_time < 5000 %}{{ ustawienia.animation_time }}{% else %}{{ 500 }}{% endif %}">*/
/* 						{% if ustawienia.home_item == 'icon' or ustawienia.home_item == 'text' %}*/
/* 							<li class="home">*/
/* 								<a href="{{ home }}">*/
/* 								{% if ustawienia.home_item == 'icon' %}*/
/* 									<i class="fa fa-home"></i>*/
/* 								{% else %}*/
/* 									<span><strong>{{ home_text }}</strong></span>*/
/* 								{% endif %}*/
/* 								</a>*/
/* 							</li>*/
/* 						{% endif %}*/
/* 						*/
/* 						{% for key, row in menu %}*/
/* 							{% set class 		= '' %}*/
/* 							{% set icon_font 	= '' %}*/
/* 							{% set class_link 	= 'clearfix' %}*/
/* 							{% set label_item 	= '' %}*/
/* 							{% set title 		= false %}*/
/* 							{% set target 		= false %}*/
/* */
/* 							{% if 'no_image' in row.icon %}*/
/* 								{% set icon = '' %}*/
/* 							{% else %}*/
/* 								{% set icon = row.icon %}*/
/* 							{% endif %}*/
/* 							*/
/* 							{% if row.description != '' %}*/
/* 								{% set class_link = class_link~' description' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if route and route == row.route and path and path == row.path %}*/
/* 								{% set class = class~' active_menu' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.class_menu %}*/
/* 								{% set class = class~row.class_menu %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.icon_font %}*/
/* 								{% set icon_font = icon_font~'<i class="'~row.icon_font~'"></i>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.label_item %}*/
/* 								{% set label_item = label_item~'<span class="label'~row.label_item~'"></span>' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu is iterable and row.submenu %}*/
/* 								{% set class = class~' with-sub-menu' %}*/
/* 								{% if row.submenu_type == 1 %}*/
/* 									{% set class = class~' click' %}*/
/* 								{% else %}*/
/* 									{% set class = class~' hover' %}*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.position == 1 %}*/
/* 								{% set class = class~' pull-right' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.submenu_type == 2 %}*/
/* 								{% set title = 'title="hover-intent"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if row.new_window == 1 %}*/
/* 								{% set target = 'target="_blank"' %}*/
/* 							{% endif %}*/
/* */
/* 							{% if ustawienia.orientation == 1 %}*/
/* 								<li class="item-vertical {{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 										*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 											<b class='fa fa-caret-right' ></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 								 		<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<span>*/
/* 												<strong>{{ icon_font~icon~row.name[lang_id]~row.description }}</strong>*/
/* 											</span>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										{% if '%' in row.submenu_width %}*/
/* 											<div class="sub-menu" data-subwidth ="{{ row.submenu_width|replace({'%': ''}) }}">*/
/* 										{% else %}*/
/* 											<div class="sub-menu" style="width:{{ row.submenu_width }}">*/
/* 										{% endif %}*/
/* */
/* 										<div class="content">*/
/* 											<div class="row">*/
/* 												{% set row_fluid = 0 %}*/
/* 												{% for submenu in row.submenu %}*/
/* 													{% if row_fluid+submenu.content_width > 12 %}*/
/* 														{% set row_fluid = submenu.content_width %}*/
/* 										 				</div><div class="border"></div><div class="row">*/
/* 													{% else %}*/
/* 														{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 													{% endif %}*/
/* 													<div class="col-sm-{{ submenu.content_width }}">*/
/* 														{% if submenu.content_type == 0 %}*/
/* 															<div class="html {{submenu.class_menu }}">{{ submenu.html }}</div>*/
/* 														{% elseif submenu.content_type == 1 %}*/
/* 															{% if submenu.product is iterable %}*/
/* 																<div class="product {{ submenu.class_menu }}">*/
/* 																	<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																	<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																	<div class="price">*/
/* 																		{% if not submenu.product.special %}*/
/* 																			{{ submenu.product.price }}*/
/* 																		{% else %}*/
/* 																			{{ submenu.product.special }}*/
/* 																		{% endif %}*/
/* 																	</div>*/
/* 																</div>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 2 %}*/
/* 															<div class="categories {{ submenu.class_menu }}">{{ submenu.categories }}</div>*/
/* 														{% elseif submenu.content_type == 3 %}*/
/* 															{% if submenu.manufactures is iterable %}*/
/* 																<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																	{% for manufacturer in submenu.manufactures %}*/
/* 																		<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 4 %}*/
/* 															{% if submenu.images.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															<div class="link {{ submenu.class_menu }}">*/
/* 																{{ submenu.images.link }}*/
/* 															</div>*/
/* 														{% elseif submenu.content_type == 5 %}*/
/* 															{% if submenu.subcategory.categories %}*/
/* 																<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																	{% for categories in submenu.subcategory.categories %}*/
/* 																		<li>*/
/* 																			{% if submenu.subcategory.show_title == 1 %}*/
/* 																				<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																			{% endif %}*/
/* 																			{% if categories.categories %}*/
/* 																				{{ categories.categories }}*/
/* 																			{% endif %}*/
/* 																			{% if submenu.subcategory.show_image == 1 %}*/
/* 																				<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ categories.thumb }}" alt="" >*/
/* 																			{% endif %}*/
/* 																		</li>*/
/* 																	{% endfor %}*/
/* 																</ul>*/
/* 															{% endif %}*/
/* 														{% elseif submenu.content_type == 6 %}*/
/* 															{% if submenu.productlist.show_title == 1 %}*/
/* 																<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 															{% endif %}*/
/* 															{% if submenu.productlist.products %}*/
/* 																{% for product in submenu.productlist.products %}*/
/* 																	{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																	<div class="col-xs-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																		<div class="product-thumb">*/
/* 																			<div class="image">*/
/* 																				<a href="{{ product.href }}">*/
/* 																					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  />*/
/* 																				</a>*/
/* 																			</div>*/
/* 																			<div>*/
/* 																				<div class="caption">*/
/* 																					<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 																					<p>{{ product.description }}</p>*/
/* 																					{% if product.rating %}*/
/* 																						<div class="rating">*/
/* 																							{% for i in 1..5 %}*/
/* 																								{% if product.rating < i %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% else %}*/
/* 																									<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																								{% endif %}*/
/* 																							{% endfor %}*/
/* 																						</div>*/
/* 																					{% endif %}*/
/* 																			*/
/* 																					{% if product.price %}*/
/* 																						<p class="price">*/
/* 																							{% if not product.special %}*/
/* 																								{{ product.price }}*/
/* 																					   		{% else %}*/
/* 																								<span class="price-new">{{ product.special }}</span>*/
/* 																								<span class="price-old">{{ product.price }}</span>*/
/* 																					   		{% endif %}*/
/* */
/* 																					   		{% if product.tax %}*/
/* 																								<span class="price-tax">{{ product.tax }}</span>*/
/* 																							{% endif %}*/
/* 																						</p>*/
/* 																					{% endif %}*/
/* 																		  		</div>*/
/* 																			</div>*/
/* 																	  	</div>*/
/* 																	</div>*/
/* 															 	{% endfor %}*/
/* 															{% endif %}*/
/* 														{% endif %}													*/
/* 													</div>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>				*/
/* 										</div>			*/
/* 									{% endif %}*/
/* 								</li>							*/
/* 							{% else %}						*/
/* 								<li class="{{ class }}" {{ title }}>*/
/* 									<p class='close-menu'></p>*/
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 											<b class='caret'></b>*/
/* 										</a>*/
/* 									{% else %}*/
/* 										<a href="{{ row.link }}" class="{{ class_link }}" {{ target }}>*/
/* 											<strong>*/
/* 												{{ icon_font~icon~row.name[lang_id]~row.description }}*/
/* 											</strong>*/
/* 											{{ label_item }}*/
/* 										</a>*/
/* 									{% endif %}*/
/* */
/* 									{% if row.submenu is iterable and row.submenu %}*/
/* 										<div class="sub-menu" style="width: {{ row.submenu_width }}">*/
/* 											<div class="content">*/
/* 												<div class="row">*/
/* 													{% set row_fluid = 0 %}*/
/* 													{% for submenu in row.submenu %}*/
/* 														{% if row_fluid+submenu.content_width > 12 %}*/
/* 															{% set row_fluid = submenu.content_width %}*/
/* 															</div><div class="border"></div><div class="row">*/
/* 														{% else %}*/
/* 															{% set row_fluid = row_fluid+submenu.content_width %}*/
/* 														{% endif %}*/
/* 														<div class="col-sm-{{ submenu.content_width }}">*/
/* 															{% if submenu.content_type == 0 %}*/
/* 																<div class="html {{ submenu.class_menu }}">*/
/* 																	{{ submenu.html }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 1 %}*/
/* 																{% if submenu.product is iterable %}*/
/* 																	<div class="product {{ submenu.class_menu }}">*/
/* 																		<div class="image"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ submenu.product.image }}" alt=""></a></div>*/
/* 																		<div class="name"><a href="{{ submenu.product.link }}" onclick="window.location = '{{ submenu.product.link }}'">{{ submenu.product.name }}</a></div>*/
/* 																		<div class="price">*/
/* 																			{% if not submenu.product.special %}*/
/* 																				{{ submenu.product.price }}*/
/* 																			{% else %}*/
/* 																				{{ submenu.product.special }}*/
/* 																			{% endif %}*/
/* 																		</div>*/
/* 																	</div>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 2 %}*/
/* 																<div class="categories {{ submenu.class_menu }}">*/
/* 																	{{ submenu.categories }}*/
/* 																</div>															*/
/* 															{% elseif submenu.content_type == 3 %}*/
/* 																{% if submenu.manufactures is iterable %}*/
/* 																	<ul class="manufacturer {{ submenu.class_menu }}">*/
/* 																		{% for manufacturer in submenu.manufactures %}*/
/* 																			<li><a href="{{ manufacturer.link }}">{{ manufacturer.name }}</a></li>*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 4 %}*/
/* 																{% if submenu.images.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																<div class="link {{ submenu.class_menu }}">*/
/* 																	{{ submenu.images.link }}*/
/* 																</div>*/
/* 															{% elseif submenu.content_type == 5 %}*/
/* 																{% if submenu.subcategory.categories %}*/
/* 																	<ul class="subcategory {{ submenu.class_menu }}">*/
/* 																		{% for categories in submenu.subcategory.categories %}*/
/* 																			<li>*/
/* 																				{% if submenu.subcategory.show_title == 1 %}*/
/* 																					<a href="{{ categories.href }}" class="title-submenu {{ submenu.class_menu }}">{{ categories.name }}</a>*/
/* 																				{% endif %}*/
/* 																				{% if categories.categories %}*/
/* 																					{{ categories.categories }}*/
/* 																				{% endif %}*/
/* 																				{% if submenu.subcategory.show_image == 1 %}*/
/* 																					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ categories.thumb }}" alt="" />*/
/* 																				{% endif %}*/
/* 																			</li>		*/
/* 																		{% endfor %}*/
/* 																	</ul>*/
/* 																{% endif %}*/
/* 															{% elseif submenu.content_type == 6 %}*/
/* 																{% if submenu.productlist.show_title == 1 %}*/
/* 																	<span class="title-submenu">{{ submenu.name[lang_id] }}</span>*/
/* 																{% endif %}*/
/* 																{% if submenu.productlist.products %}*/
/* 																	{% for product in submenu.productlist.products %}*/
/* 																		{% set itempage = submenu.productlist.col ? 12/submenu.productlist.col : 4 %}*/
/* 																		<div class="col-sm-{{ itempage }} {{ submenu.class_menu }}">*/
/* 																			<div class="product-thumb">*/
/* 																				<div class="image">*/
/* 																					<a href="{{ product.href }}">*/
/* 																						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"/>*/
/* 																					</a>*/
/* 																				</div>*/
/* 																				<div>*/
/* 																					<div class="caption">*/
/* 																						<h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/* 																						<p>{{ product.description }}</p>*/
/* 																						{% if product.rating %}*/
/* 																							<div class="rating">*/
/* 																								{% for i in 1..5 %}*/
/* 																									{% if product.rating < i %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% else %}*/
/* 																										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 																									{% endif %}*/
/* 																								{% endfor %}*/
/* 																							</div>*/
/* 																						{% endif %}*/
/* */
/* 																						{% if product.price %}*/
/* 																							<p class="price">*/
/* 																								{% if not product.special %}*/
/* 																									{{ product.price }}*/
/* 																							   	{% else %}*/
/* 																									<span class="price-new">{{ product.special }}</span>*/
/* 																									<span class="price-old">{{ product.price }}</span>*/
/* 																							   	{% endif %}*/
/* 																							   	*/
/* 																							   	{% if product.tax %}*/
/* 																									<span class="price-tax">{{ product.tax }}</span>*/
/* 																								{% endif %}*/
/* 																							</p>*/
/* 																						{% endif %}*/
/* 																			  		</div>*/
/* 																				</div>*/
/* 														  					</div>*/
/* 																		</div>*/
/* 													 				{% endfor %}*/
/* 																{% endif %}*/
/* 															{% endif %}*/
/* 														</div>*/
/* 													{% endfor %}*/
/* 												</div>												*/
/* 											</div>*/
/* 										</div>										*/
/* 									{% endif %}*/
/* 								</li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	{% if ustawienia.orientation == 1 %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% if ustawienia.orientation == 1 %}*/
/* <script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		var itemver =  {{ ustawienia.show_itemver }};*/
/* 		if(itemver <= $( ".vertical ul.megamenu >li" ).length)*/
/* 			$('.vertical ul.megamenu').append('<li class="loadmore"><i class="fa fa-plus-square-o"></i><span class="more-view"> {{text_more_category}}</span></li>');*/
/* 		$('.horizontal ul.megamenu li.loadmore').remove();*/
/* */
/* 		var show_itemver = itemver-1 ;*/
/* 		$('ul.megamenu > li.item-vertical').each(function(i){*/
/* 			if(i>show_itemver){*/
/* 					$(this).css('display', 'none');*/
/* 			}*/
/* 		});*/
/* 		$(".megamenu .loadmore").click(function(){*/
/* 			if($(this).hasClass('open')){*/
/* 				$('ul.megamenu li.item-vertical').each(function(i){*/
/* 					if(i>show_itemver){*/
/* 						$(this).slideUp(200);*/
/* 						$(this).css('display', 'none');*/
/* 					}*/
/* 				});*/
/* 				$(this).removeClass('open');*/
/* 				$('.loadmore').html('<i class="fa fa-plus-square-o"></i><span class="more-view">{{text_more_category}}</span>');*/
/* 			}else{*/
/* 				$('ul.megamenu li.item-vertical').each(function(i){*/
/* 					if(i>show_itemver){*/
/* 						$(this).slideDown(200);*/
/* 					}*/
/* 				});*/
/* 				$(this).addClass('open');*/
/* 				$('.loadmore').html('<i class="fa fa-minus-square"></i><span class="more-view">{{text_close_category}}</span>');*/
/* 			}*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endif %}*/
/* <script>*/
/* $(document).ready(function(){*/
/* 	$('a[href="{{ actual_link }}"]').each(function() {*/
/* 		$(this).parents('.with-sub-menu').addClass('sub-active');*/
/* 	});  */
/* });*/
/* </script>*/
