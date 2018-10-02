<?php

/* so-megastore/template/product/gallery/gallery-bottom.twig */
class __TwigTemplate_62e0174f49b0e7d9750bd0f44a70f8c2d463a79bca16152e8d134c852823cb2e extends Twig_Template
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
        // line 3
        echo "<div class=\"large-image  ";
        echo (isset($context["class_honizol"]) ? $context["class_honizol"] : null);
        echo "\">
\t<img itemprop=\"image\" class=\"product-image-zoom lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
        // line 4
        echo (isset($context["popup"]) ? $context["popup"] : null);
        echo "\" data-zoom-image=\"";
        echo (isset($context["popup"]) ? $context["popup"] : null);
        echo "\" title=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" />
</div>

<div id=\"thumb-slider\" class=\"full_slider  contentslider--default\" data-rtl=\"";
        // line 7
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"10\"  data-items_column0=\"4\" data-items_column1=\"3\" data-items_column2=\"5\" data-items_column3=\"3\" data-items_column4=\"2\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 9
            echo "\t\t<div class=\"image-additional\">
\t\t<a data-index=\"";
            // line 10
            echo $context["key"];
            echo "\" class=\"img thumbnail \" data-image=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\">
\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 11
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" />
\t\t</a>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>
</div>


<script type=\"text/javascript\"><!--
\t\$(document).ready(function() {
\t\tvar zoomCollection = '.large-image img';
\t\t\$( zoomCollection ).elevateZoom({
\t\t\t//value zoomType (window,inner,lens)
\t\t\t";
        // line 24
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_enablezoom"), "method")) {
            // line 25
            echo "\t\t\tzoomType        : \"inner\",
\t\t\t";
        } else {
            // line 27
            echo "\t\t\tzoomType        :\"none\",
\t\t\t";
        }
        // line 29
        echo "\t\t\tlensSize    :'250',
\t\t\teasing:false,
\t\t\tscrollZoom : true,
\t\t\tgallery:'thumb-slider',
\t\t\tcursor: 'pointer',
\t\t\tgalleryActiveClass: \"active\",
\t\t});
\t\t\$(zoomCollection).bind('touchstart', function(){
\t\t    \$(zoomCollection).unbind('touchmove');
\t\t});
\t\t
\t\t";
        // line 40
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 41
            echo "\t\t\$('.large-image img').magnificPopup({
\t\t\titems: [
\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "\t\t\t\t{src: '";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "'},
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t],
\t\t\tgallery: { enabled: true, preload: [0,2] },
\t\t\ttype: 'image',
\t\t\tmainClass: 'mfp-fade',
\t\t\tcallbacks: {
\t\t\t\topen: function() {
\t\t\t\t\t";
            // line 52
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 53
                echo "\t\t\t\t\t\tvar activeIndex = parseInt(\$('#thumb-slider .img.active').attr('data-index'));
\t\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t\tvar activeIndex = 0;
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\tvar magnificPopup = \$.magnificPopup.instance;
\t\t\t\t\tmagnificPopup.goTo(activeIndex);
\t\t\t\t}
\t\t\t}

\t\t});
\t\t";
        }
        // line 64
        echo "\t});
//--></script>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/product/gallery/gallery-bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 64,  143 => 57,  139 => 55,  135 => 53,  133 => 52,  125 => 46,  116 => 44,  112 => 43,  108 => 41,  106 => 40,  93 => 29,  89 => 27,  85 => 25,  83 => 24,  72 => 15,  58 => 11,  50 => 10,  47 => 9,  43 => 8,  39 => 7,  27 => 4,  22 => 3,  19 => 1,);
    }
}
/* */
/* {#==== Gallery - Large image  ==== #}*/
/* <div class="large-image  {{class_honizol}}">*/
/* 	<img itemprop="image" class="product-image-zoom lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{popup}}" data-zoom-image="{{popup}}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* </div>*/
/* */
/* <div id="thumb-slider" class="full_slider  contentslider--default" data-rtl="{{direction}}" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10"  data-items_column0="4" data-items_column1="3" data-items_column2="5" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">*/
/* 	{% for key,image in images %}*/
/* 		<div class="image-additional">*/
/* 		<a data-index="{{key}}" class="img thumbnail " data-image="{{image.popup}}" title="{{ heading_title }}">*/
/* 			<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" />*/
/* 		</a>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	</ul>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/* 	$(document).ready(function() {*/
/* 		var zoomCollection = '.large-image img';*/
/* 		$( zoomCollection ).elevateZoom({*/
/* 			//value zoomType (window,inner,lens)*/
/* 			{% if soconfig.get_settings('product_enablezoom')%}*/
/* 			zoomType        : "inner",*/
/* 			{% else %}*/
/* 			zoomType        :"none",*/
/* 			{% endif %}*/
/* 			lensSize    :'250',*/
/* 			easing:false,*/
/* 			scrollZoom : true,*/
/* 			gallery:'thumb-slider',*/
/* 			cursor: 'pointer',*/
/* 			galleryActiveClass: "active",*/
/* 		});*/
/* 		$(zoomCollection).bind('touchstart', function(){*/
/* 		    $(zoomCollection).unbind('touchmove');*/
/* 		});*/
/* 		*/
/* 		{% if images %}*/
/* 		$('.large-image img').magnificPopup({*/
/* 			items: [*/
/* 			{% for   image in images %}*/
/* 				{src: '{{image.popup}}'},*/
/* 			{% endfor %}*/
/* 			],*/
/* 			gallery: { enabled: true, preload: [0,2] },*/
/* 			type: 'image',*/
/* 			mainClass: 'mfp-fade',*/
/* 			callbacks: {*/
/* 				open: function() {*/
/* 					{% if images %}*/
/* 						var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));*/
/* 					{% else %}*/
/* 						var activeIndex = 0;*/
/* 					{% endif %}*/
/* 					var magnificPopup = $.magnificPopup.instance;*/
/* 					magnificPopup.goTo(activeIndex);*/
/* 				}*/
/* 			}*/
/* */
/* 		});*/
/* 		{% endif %}*/
/* 	});*/
/* //--></script>*/
