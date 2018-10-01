<?php

/* so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_default.twig */
class __TwigTemplate_25ded78f0901fca4576f067a8df28cd77235d13aa94c0c474eb37c3b28062183 extends Twig_Template
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
        $context["width_popup"] = (((isset($context["width"]) ? $context["width"] : null)) ? ((isset($context["width"]) ? $context["width"] : null)) : ("50%"));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["image_bg_display"]) ? $context["image_bg_display"] : null)) {
            // line 4
            echo "    ";
            $context["bg"] = (("background: url(image/" . (isset($context["image"]) ? $context["image"] : null)) . ")");
        } elseif (        // line 5
(isset($context["color_bg"]) ? $context["color_bg"] : null)) {
            echo " 
   ";
            // line 6
            $context["bg"] = (("background-color: #" . (isset($context["color_bg"]) ? $context["color_bg"] : null)) . "");
        }
        // line 8
        echo "


<div class=\"module ";
        // line 11
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
    <div class=\"newsletter\" style=\"width:";
        // line 12
        echo (isset($context["width_popup"]) ? $context["width_popup"] : null);
        echo "; ";
        echo (isset($context["bg"]) ? $context["bg"] : null);
        echo " ; \">
        ";
        // line 13
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
            <h3 class=\"modtitle\">";
            // line 14
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo " </h3>
        ";
        }
        // line 15
        echo " 
        
        <div class=\"title-block\">
            ";
        // line 18
        if ((isset($context["title_display"]) ? $context["title_display"] : null)) {
            // line 19
            echo "                <div class=\"page-heading font-title\">
                    ";
            // line 20
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "
                </div>
                <div class=\"promotext\">";
            // line 22
            echo (isset($context["newsletter_promo"]) ? $context["newsletter_promo"] : null);
            echo "</div>
            ";
        }
        // line 24
        echo "            ";
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 25
            echo "                <div class=\"form-group\">
                    ";
            // line 26
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
                </div>
            ";
        }
        // line 29
        echo "        </div>

        <div class=\"block_content\">
            <form method=\"post\" id=\"signup\" name=\"signup\" class=\"form-group form-inline signup send-mail\">
                <div class=\"form-group\">
                    <div class=\"input-box\">
                        <input type=\"email\" placeholder=\"";
        // line 35
        echo (isset($context["newsletter_placeholder"]) ? $context["newsletter_placeholder"] : null);
        echo "\" value=\"\" class=\"form-control\" id=\"txtemail\" name=\"txtemail\" size=\"55\">
                    </div>
                    <div class=\"subcribe\">
                        <button class=\"btn btn-primary btn-default font-title\" type=\"submit\" onclick=\"return subscribe_newsletter();\" name=\"submit\">
                            ";
        // line 39
        echo (isset($context["newsletter_button"]) ? $context["newsletter_button"] : null);
        echo "
                        </button>
                    </div>
                </div>
            </form>
            

        </div> <!--/.modcontent-->
        ";
        // line 47
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 48
            echo "            <div class=\"form-group\">
                ";
            // line 49
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
            </div>
        ";
        }
        // line 52
        echo "        
    </div>



<script type=\"text/javascript\">
    function subscribe_newsletter()
    {
        var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
        var email = \$('#txtemail').val();
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;

        if(email != \"\"){

            if(!emailpattern.test(email))
            {

                \$('.alert').remove();
                \$('.send-mail').after('<div class=\"alert alert-danger \" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
                return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',
                    success: function(json) {
                        \$('.alert').remove();
                        if(json.message == \"Subscription Successfull\") {
                            \$('.send-mail').after('<div class=\"alert alert-success\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            setTimeout(function () {
                                var this_close = \$('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                            }, 3000);

                        }else{
                            \$('.send-mail').after('<div class=\"alert alert-danger\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                        }
                        var x = document.getElementsByClassName('signup');
                            for (i = 0; i < x.length; i++) {
                            x[i].reset();
                        }
                    }
                });
                return false;
            }
        } else{
             alert(\"";
        // line 105
        echo (isset($context["text_email_require"]) ? $context["text_email_require"] : null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 105,  129 => 52,  123 => 49,  120 => 48,  118 => 47,  107 => 39,  100 => 35,  92 => 29,  86 => 26,  83 => 25,  80 => 24,  75 => 22,  70 => 20,  67 => 19,  65 => 18,  60 => 15,  55 => 14,  51 => 13,  45 => 12,  41 => 11,  36 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set width_popup =  width ? width : '50%' %}*/
/* */
/* {% if image_bg_display %}*/
/*     {% set bg   =  'background: url(image/'~image~')' %}*/
/* {% elseif color_bg %} */
/*    {%  set  bg  =  'background-color: #'~color_bg~'' %}*/
/* {% endif %}*/
/* */
/* */
/* */
/* <div class="module {{ class_suffix }}">*/
/*     <div class="newsletter" style="width:{{ width_popup }}; {{ bg }} ; ">*/
/*         {% if disp_title_module %} */
/*             <h3 class="modtitle">{{ head_name }} </h3>*/
/*         {% endif %} */
/*         */
/*         <div class="title-block">*/
/*             {% if title_display %}*/
/*                 <div class="page-heading font-title">*/
/*                     {{ title }}*/
/*                 </div>*/
/*                 <div class="promotext">{{ newsletter_promo }}</div>*/
/*             {% endif %}*/
/*             {% if pre_text != '' %}*/
/*                 <div class="form-group">*/
/*                     {{ pre_text }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="block_content">*/
/*             <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">*/
/*                 <div class="form-group">*/
/*                     <div class="input-box">*/
/*                         <input type="email" placeholder="{{ newsletter_placeholder}}" value="" class="form-control" id="txtemail" name="txtemail" size="55">*/
/*                     </div>*/
/*                     <div class="subcribe">*/
/*                         <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">*/
/*                             {{ newsletter_button  }}*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*             */
/* */
/*         </div> <!--/.modcontent-->*/
/*         {% if post_text !='' %}*/
/*             <div class="form-group">*/
/*                 {{ post_text }}*/
/*             </div>*/
/*         {% endif %}*/
/*         */
/*     </div>*/
/* */
/* */
/* */
/* <script type="text/javascript">*/
/*     function subscribe_newsletter()*/
/*     {*/
/*         var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;*/
/*         var email = $('#txtemail').val();*/
/*         var d = new Date();*/
/*         var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();*/
/*         var status   = 0;*/
/*         var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;*/
/* */
/*         if(email != ""){*/
/* */
/*             if(!emailpattern.test(email))*/
/*             {*/
/* */
/*                 $('.alert').remove();*/
/*                 $('.send-mail').after('<div class="alert alert-danger " role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Invalid Email </div>')*/
/*                 return false;*/
/*             }*/
/*             else*/
/*             {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',*/
/*                     type: 'post',*/
/*                     data: dataString,*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         $('.alert').remove();*/
/*                         if(json.message == "Subscription Successfull") {*/
/*                             $('.send-mail').after('<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                             setTimeout(function () {*/
/*                                 var this_close = $('.popup-close');*/
/*                                 this_close.parent().css('display', 'none');*/
/*                                 this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');*/
/*                             }, 3000);*/
/* */
/*                         }else{*/
/*                             $('.send-mail').after('<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                         }*/
/*                         var x = document.getElementsByClassName('signup');*/
/*                             for (i = 0; i < x.length; i++) {*/
/*                             x[i].reset();*/
/*                         }*/
/*                     }*/
/*                 });*/
/*                 return false;*/
/*             }*/
/*         } else{*/
/*              alert("{{text_email_require}}");*/
/*             $(email).focus();*/
/*             return false;*/
/*         }*/
/*     }*/
/* </script>*/
/* </div>*/
/* */
