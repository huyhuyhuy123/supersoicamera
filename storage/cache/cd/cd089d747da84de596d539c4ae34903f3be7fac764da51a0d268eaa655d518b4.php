<?php

/* so-megastore/template/common/footer.twig */
class __TwigTemplate_70219e2f2f52bbce71423873402da9bc8f4966331cdea92d7a0b3d5ab266595d extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "1")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer1.twig"), "so-megastore/template/common/footer.twig", 4)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        }
        // line 6
        echo "

\t
";
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method")) {
            // line 12
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method") == 1)) {
                // line 13
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 14
                echo "\t";
            } else {
                // line 15
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 16
                echo "\t";
            }
            // line 17
            echo "\t<section class=\"social-widgets visible-lg ";
            echo (isset($context["social_sidebar"]) ? $context["social_sidebar"] : null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 19
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 21
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/facebook.php?account_fb=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "facebook"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 25
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 29
            echo " 

\t\t\t";
            // line 31
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-02 twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 33
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/twitter.php?account_twitter=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "twitter"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 37
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 41
            echo " 

\t\t\t";
            // line 43
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-03 youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t";
                // line 48
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")), "method");
                    echo "
\t\t\t\t\t\t";
                }
                // line 50
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 54
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 58
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  134 => 54,  127 => 50,  121 => 49,  119 => 48,  111 => 43,  107 => 41,  99 => 37,  90 => 33,  85 => 31,  81 => 29,  73 => 25,  64 => 21,  59 => 19,  53 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 13,  38 => 12,  36 => 11,  33 => 10,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# =========== Show Header==============#}*/
/* */
/* {% if soconfig.get_settings('typefooter') =='1'%}*/
/* 	{% include theme_directory~'/template/footer/footer1.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% endif %}*/
/* */
/* */
/* 	*/
/* {# =========== Show BackToTop==============#}*/
/* */
/* {% if soconfig.get_settings('social_sidebar')  %}*/
/* 	{% if soconfig.get_settings('social_sidebar') == 1 %}*/
/* 		{% set  social_sidebar = 'socialwidgets-left'%}*/
/* 	{% else %}*/
/* 		{% set  social_sidebar = 'socialwidgets-right'%}*/
/* 	{% endif %}*/
/* 	<section class="social-widgets visible-lg {{social_sidebar}} ">*/
/* 		<ul class="items">*/
/* 			{% if soconfig.get_settings('social_fb_status') %} */
/* 			<li class="item item-01 facebook">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/facebook.php?account_fb={{soconfig.get_settings('facebook')}} " class="tab-icon"><span class="fa fa-facebook"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>FACEBOOK</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_twitter_status') %} */
/* 			<li class="item item-02 twitter">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/twitter.php?account_twitter={{ soconfig.get_settings('twitter')}} " class="tab-icon"><span class="fa fa-twitter"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>TWITTER FEEDS</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_custom_status') %} */
/* 			<li class="item item-03 youtube">*/
/* 				<div class="tab-icon"><span class="fa fa-youtube"></span></div>*/
/* 				<div class="tab-content">*/
/* 					<div class="loading">*/
/* 						{% if soconfig.get_settings('video_code') %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('video_code') ) }}*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 		</ul>*/
/* 	</section>*/
/* 	*/
/* {% endif %} */
/* */
/* </div>*/
/* </body>*/
/* </html>*/
