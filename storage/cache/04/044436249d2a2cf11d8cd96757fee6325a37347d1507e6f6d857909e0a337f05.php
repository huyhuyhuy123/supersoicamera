<?php

/* so-megastore/template/footer/footer1.twig */
class __TwigTemplate_bf86c7eb54efdcd2c7767a8b0132203c049353530830d0f2107ecd8c15aae1ea extends Twig_Template
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
        echo "<footer class=\"footer-container typefooter-";
        echo (((isset($context["typefooter"]) ? $context["typefooter"] : null)) ? ((isset($context["typefooter"]) ? $context["typefooter"] : null)) : ("1"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty((isset($context["footer_block1"]) ? $context["footer_block1"] : null))) {
            // line 4
            echo "\t<div class=\"footer-main collapse description-has-toggle\" id=\"collapse-footer\">
\t
\t\t";
            // line 6
            echo (isset($context["footer_block1"]) ? $context["footer_block1"] : null);
            echo "
\t\t\t
\t</div>
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#collapse-footer\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 11
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 12
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t</a>        
\t</div>
\t";
        }
        // line 16
        echo "\t
\t
\t";
        // line 18
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">
\t\t\t";
        // line 21
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment_status"), "method")) {
            echo " 
\t\t\t<div class=\"col-lg-12 col-xs-12 payment-w\">
\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 23
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment"), "method");
            echo "\"  alt=\"imgpayment\">
\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t\t</div>
\t\t<div class=\"copyright-w\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t";
        // line 30
        if (twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method"))) {
            // line 31
            echo "\t\t\t\t\t\t";
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method")), "method"), array("{year}" => twig_date_format_filter($this->env, "now", "Y")));
            echo "
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/footer/footer1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  86 => 33,  80 => 31,  78 => 30,  72 => 26,  66 => 23,  61 => 21,  56 => 18,  52 => 16,  45 => 12,  41 => 11,  33 => 6,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <footer class="footer-container typefooter-{{typefooter ? typefooter : '1'}}">*/
/* 	{#======	FOOTER TOP	=======#}  */
/* 	{% if footer_block1 is not empty %}*/
/* 	<div class="footer-main collapse description-has-toggle" id="collapse-footer">*/
/* 	*/
/* 		{{footer_block1}}*/
/* 			*/
/* 	</div>*/
/* 	<div class="button-toggle hidden-lg hidden-md">*/
/*          <a class="showmore" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">*/
/*             <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/*             <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>           */
/* 		</a>        */
/* 	</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* 	{#======	FOOTER BOTTOM	=======#} */
/* 	<div class="footer-bottom ">*/
/* 		<div class="container">*/
/* 			{% if soconfig.get_settings('imgpayment_status')%} */
/* 			<div class="col-lg-12 col-xs-12 payment-w">*/
/* 				<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/{{  soconfig.get_settings('imgpayment') }}"  alt="imgpayment">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		<div class="copyright-w">*/
/* 			<div class="container">*/
/* 				<div class="copyright">*/
/* 					{% if soconfig.get_settings('copyright') is empty %}*/
/* 						{{ powered }}*/
/* 					{% else %}*/
/* 						{{ soconfig.decode_entities(soconfig.get_settings('copyright'))|replace({'{year}': "now"|date("Y")}) }}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		*/
/* 	</div>*/
/* </footer>*/
