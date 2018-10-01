<?php

/* so-megastore/template/account/login.twig */
class __TwigTemplate_3d414d2ca187cf5dfc0071b1cfbd3b6a99d5cbf989feca5768c5c08b910eccd3 extends Twig_Template
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
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
   ";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "        ";
            $context["class"] = "col-sm-6 fluid-allsidebar";
            // line 17
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "        ";
            $context["class"] = "col-md-9 col-sm-12 fluid-sidebar";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well \">
            <h2>";
        // line 26
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 27
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</strong></p>
            <p>";
        // line 28
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            <a href=\"";
        // line 29
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
           
 <div class=\"well col-sm-12\"> 
 
            <h2>";
        // line 35
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 36
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
            <form action=\"";
        // line 37
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 43
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 45
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
               
 <input type=\"submit\" value=\"";
        // line 47
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary pull-left\" /> 
 
              ";
        // line 49
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 50
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 52
        echo "            </form>
 
 ";
        // line 54
        if ((array_key_exists("setting", $context) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array()))) {
            echo " 
 <column id=\"column-login\" class=\"col-sm-8 pull-right\"> 
 <div class=\"row\"> 
 ";
            // line 57
            if (array_key_exists("warning", $context)) {
                echo " 
 <div class=\"alert alert-warning\"><i class=\"fa fa-check-circle\"></i> ";
                // line 58
                echo (isset($context["warning"]) ? $context["warning"] : null);
                echo "</div> 
 ";
            }
            // line 59
            echo " 
 
 <div class=\"social_login pull-right\" id=\"so_sociallogin\"> 
 ";
            // line 62
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbstatus", array())) {
                echo " 
 ";
                // line 63
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 64
                    echo (isset($context["fblink"]) ? $context["fblink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 65
                    echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 66
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                    echo "\" 
 title=\"";
                    // line 67
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 70
                    echo " 
 <a href=\"";
                    // line 71
                    echo (isset($context["fblink"]) ? $context["fblink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 72
                echo " 
 ";
            }
            // line 73
            echo " 
 
 ";
            // line 75
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twitstatus", array())) {
                echo " 
 ";
                // line 76
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 77
                    echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 78
                    echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 79
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                    echo "\" 
 title=\"";
                    // line 80
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 83
                    echo " 
 <a href=\"";
                    // line 84
                    echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 85
                echo " 
 ";
            }
            // line 86
            echo " 
 
 ";
            // line 88
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googlestatus", array())) {
                echo " 
 ";
                // line 89
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 90
                    echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 91
                    echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 92
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                    echo "\" 
 title=\"";
                    // line 93
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 96
                    echo " 
 <a href=\"";
                    // line 97
                    echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 98
                echo " 
 ";
            }
            // line 99
            echo " 
 
 ";
            // line 101
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkstatus", array())) {
                echo " 
 ";
                // line 102
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 103
                    echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 104
                    echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 105
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                    echo "\" 
 title=\"";
                    // line 106
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 109
                    echo " 
 <a href=\"";
                    // line 110
                    echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 111
                echo " 
 ";
            }
            // line 112
            echo " 
 </div> 
 </div> 
 </column> 
 ";
        }
        // line 116
        echo " 
 
          </div>
        </div>
      </div>
      ";
        // line 121
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 122
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
 
 <style> 
 @media(max-width:991px){ 
 #column-login,.social_login,.socalicon{ 
 float:none !important; 
 width:100%; 
 } 
 .account-login .btn-primary{ 
 float:none !important; 
 } 
 .social_login { 
 padding:0 10px; 
 } 
 } 
 </style> 
 
";
        // line 140
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-megastore/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 140,  383 => 122,  379 => 121,  372 => 116,  365 => 112,  361 => 111,  356 => 110,  353 => 109,  346 => 106,  342 => 105,  338 => 104,  334 => 103,  330 => 102,  326 => 101,  322 => 99,  318 => 98,  313 => 97,  310 => 96,  303 => 93,  299 => 92,  295 => 91,  291 => 90,  287 => 89,  283 => 88,  279 => 86,  275 => 85,  270 => 84,  267 => 83,  260 => 80,  256 => 79,  252 => 78,  248 => 77,  244 => 76,  240 => 75,  236 => 73,  232 => 72,  227 => 71,  224 => 70,  217 => 67,  213 => 66,  209 => 65,  205 => 64,  201 => 63,  197 => 62,  192 => 59,  187 => 58,  183 => 57,  177 => 54,  173 => 52,  167 => 50,  165 => 49,  160 => 47,  153 => 45,  147 => 44,  143 => 43,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*    {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6 fluid-allsidebar' %}*/
/*     {% elseif column_left or column_right %}*/
/*         {% set class = 'col-md-9 col-sm-12 fluid-sidebar' %}*/
/*     {% else %}*/
/*         {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <div class="well ">*/
/*             <h2>{{ text_new_customer }}</h2>*/
/*             <p><strong>{{ text_register }}</strong></p>*/
/*             <p>{{ text_register_account }}</p>*/
/*             <a href="{{ register }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*            */
/*  <div class="well col-sm-12"> */
/*  */
/*             <h2>{{ text_returning_customer }}</h2>*/
/*             <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                 <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*                */
/*  <input type="submit" value="{{ button_login }}" class="btn btn-primary pull-left" /> */
/*  */
/*               {% if redirect %}*/
/*               <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*               {% endif %}*/
/*             </form>*/
/*  */
/*  {% if setting is defined and setting.so_sociallogin_enable %} */
/*  <column id="column-login" class="col-sm-8 pull-right"> */
/*  <div class="row"> */
/*  {% if warning is defined %} */
/*  <div class="alert alert-warning"><i class="fa fa-check-circle"></i> {{ warning }}</div> */
/*  {% endif %} */
/*  */
/*  <div class="social_login pull-right" id="so_sociallogin"> */
/*  {% if setting.so_sociallogin_fbstatus %} */
/*  {% if setting.so_sociallogin_button == 'image' %} */
/*  <a class="social-icon" href="{{ fblink }}"> */
/*  <img class="img-responsive" src="{{ fbimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_fbtitle }}" */
/*  title="{{ setting.so_sociallogin_fbtitle }}" */
/*  /> */
/*  </a> */
/*  {% else %} */
/*  <a href="{{ fblink }}" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a> */
/*  {% endif %} */
/*  {% endif %} */
/*  */
/*  {% if setting.so_sociallogin_twitstatus %} */
/*  {% if setting.so_sociallogin_button == 'image' %} */
/*  <a class="social-icon" href="{{ twitlink }}"> */
/*  <img class="img-responsive" src="{{ twitimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_twittertitle }}" */
/*  title="{{ setting.so_sociallogin_twittertitle }}" */
/*  /> */
/*  </a> */
/*  {% else %} */
/*  <a href="{{ twitlink }}" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a> */
/*  {% endif %} */
/*  {% endif %} */
/*  */
/*  {% if setting.so_sociallogin_googlestatus %} */
/*  {% if setting.so_sociallogin_button == 'image' %} */
/*  <a class="social-icon" href="{{ googlelink }}"> */
/*  <img class="img-responsive" src="{{ googleimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_googletitle }}" */
/*  title="{{ setting.so_sociallogin_googletitle }}" */
/*  /> */
/*  </a> */
/*  {% else %} */
/*  <a href="{{ googlelink }}" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a> */
/*  {% endif %} */
/*  {% endif %} */
/*  */
/*  {% if setting.so_sociallogin_linkstatus %} */
/*  {% if setting.so_sociallogin_button == 'image' %} */
/*  <a class="social-icon" href="{{ linkdinlink }}"> */
/*  <img class="img-responsive" src="{{ linkdinimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_linkedintitle }}" */
/*  title="{{ setting.so_sociallogin_linkedintitle }}" */
/*  /> */
/*  </a> */
/*  {% else %} */
/*  <a href="{{ linkdinlink }}" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a> */
/*  {% endif %} */
/*  {% endif %} */
/*  </div> */
/*  </div> */
/*  </column> */
/*  {% endif %} */
/*  */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/*  */
/*  <style> */
/*  @media(max-width:991px){ */
/*  #column-login,.social_login,.socalicon{ */
/*  float:none !important; */
/*  width:100%; */
/*  } */
/*  .account-login .btn-primary{ */
/*  float:none !important; */
/*  } */
/*  .social_login { */
/*  padding:0 10px; */
/*  } */
/*  } */
/*  </style> */
/*  */
/* {{ footer }}*/
