<?php

/* default/template/account/login.twig */
class __TwigTemplate_bd50aadf07f830e8a36e4a375ba89fece66e6737f9756eb2443363863a39b8d1 extends Twig_Template
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
<div id=\"account-login\" class=\"container\">
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
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
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
           
 <div class=\"well col-sm-12\"> 
 
            <h2>";
        // line 28
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 29
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</strong></p>
            <p>";
        // line 30
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            <a href=\"";
        // line 31
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
           
 <div class=\"well col-sm-12\"> 
 
            <h2>";
        // line 37
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 38
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
            <form action=\"";
        // line 39
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 41
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 42
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 45
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 46
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 47
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
               
 <input type=\"submit\" value=\"";
        // line 49
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary pull-left\" /> 
 
              ";
        // line 51
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 52
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 54
        echo "            </form>
 
 ";
        // line 56
        if ((array_key_exists("setting", $context) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array()))) {
            echo " 
 <column id=\"column-login\" class=\"col-sm-8 pull-right\"> 
 <div class=\"row\"> 
 ";
            // line 59
            if (array_key_exists("warning", $context)) {
                echo " 
 <div class=\"alert alert-warning\"><i class=\"fa fa-check-circle\"></i> ";
                // line 60
                echo (isset($context["warning"]) ? $context["warning"] : null);
                echo "</div> 
 ";
            }
            // line 61
            echo " 
 
 <div class=\"social_login pull-right\" id=\"so_sociallogin\"> 
 ";
            // line 64
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbstatus", array())) {
                echo " 
 ";
                // line 65
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 66
                    echo (isset($context["fblink"]) ? $context["fblink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 67
                    echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 68
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                    echo "\" 
 title=\"";
                    // line 69
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 72
                    echo " 
 <a href=\"";
                    // line 73
                    echo (isset($context["fblink"]) ? $context["fblink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 74
                echo " 
 ";
            }
            // line 75
            echo " 
 
 ";
            // line 77
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twitstatus", array())) {
                echo " 
 ";
                // line 78
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 79
                    echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 80
                    echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 81
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                    echo "\" 
 title=\"";
                    // line 82
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 85
                    echo " 
 <a href=\"";
                    // line 86
                    echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 87
                echo " 
 ";
            }
            // line 88
            echo " 
 
 ";
            // line 90
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googlestatus", array())) {
                echo " 
 ";
                // line 91
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 92
                    echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 93
                    echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 94
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                    echo "\" 
 title=\"";
                    // line 95
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 98
                    echo " 
 <a href=\"";
                    // line 99
                    echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 100
                echo " 
 ";
            }
            // line 101
            echo " 
 
 ";
            // line 103
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkstatus", array())) {
                echo " 
 ";
                // line 104
                if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "image")) {
                    echo " 
 <a class=\"social-icon\" href=\"";
                    // line 105
                    echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                    echo "\"> 
 <img class=\"img-responsive\" src=\"";
                    // line 106
                    echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
                    echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                    // line 107
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                    echo "\" 
 title=\"";
                    // line 108
                    echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                    echo "\" 
 /> 
 </a> 
 ";
                } else {
                    // line 111
                    echo " 
 <a href=\"";
                    // line 112
                    echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a> 
 ";
                }
                // line 113
                echo " 
 ";
            }
            // line 114
            echo " 
 </div> 
 </div> 
 </column> 
 ";
        }
        // line 118
        echo " 
 
          </div>
        </div>
      </div>
      ";
        // line 123
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 124
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
        // line 142
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 142,  385 => 124,  381 => 123,  374 => 118,  367 => 114,  363 => 113,  358 => 112,  355 => 111,  348 => 108,  344 => 107,  340 => 106,  336 => 105,  332 => 104,  328 => 103,  324 => 101,  320 => 100,  315 => 99,  312 => 98,  305 => 95,  301 => 94,  297 => 93,  293 => 92,  289 => 91,  285 => 90,  281 => 88,  277 => 87,  272 => 86,  269 => 85,  262 => 82,  258 => 81,  254 => 80,  250 => 79,  246 => 78,  242 => 77,  238 => 75,  234 => 74,  229 => 73,  226 => 72,  219 => 69,  215 => 68,  211 => 67,  207 => 66,  203 => 65,  199 => 64,  194 => 61,  189 => 60,  185 => 59,  179 => 56,  175 => 54,  169 => 52,  167 => 51,  162 => 49,  155 => 47,  149 => 46,  145 => 45,  137 => 42,  133 => 41,  128 => 39,  124 => 38,  120 => 37,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-login" class="container">*/
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
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*            */
/*  <div class="well col-sm-12"> */
/*  */
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
