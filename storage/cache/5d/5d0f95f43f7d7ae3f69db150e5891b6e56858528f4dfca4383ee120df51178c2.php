<?php

/* extension/module/so_newletter_custom_popup/so_newletter_subscribers.twig */
class __TwigTemplate_c9f13aacf772919db793bc7051bb03da91f4fd4855e4eebfac7c190a90d00b4d extends Twig_Template
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
        echo "<div class=\"button_action\">
\t<div class=\"btn-group\">
\t\t<button aria-expanded=\"false\" data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\" type=\"button\">
\t\t\t<i class=\"fa fa-trash-o\"></i> ";
        // line 4
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
        echo "  <span class=\"caret\"></span>
\t\t</button>
\t\t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? delete_all() : false;\">";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delete_all"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? delete_all_selected() : false;\">";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delete_selected"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? delete_all_not_approved() :false;\">";
        // line 9
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delete_all_not_approved"), "method");
        echo " </a></li>
\t\t</ul>
\t</div>
\t<div class=\"btn-group\">
\t\t<button aria-expanded=\"false\" data-toggle=\"dropdown\" class=\"btn btn btn-primary dropdown-toggle\" type=\"button\">
\t\t\t<i class=\"fa fa-thumbs-o-up\"></i> ";
        // line 14
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_approve"), "method");
        echo "  <span class=\"caret\"></span>
\t\t</button>
\t\t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? approve_all_selected() :false;\">";
        // line 17
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_approve_selected"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? approve_all_not_approved() : false;\">";
        // line 18
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_approve_all_not_approved"), "method");
        echo " </a></li>
\t\t</ul>
\t</div>
\t<div class=\"btn-group\">
\t\t<button aria-expanded=\"false\" data-toggle=\"dropdown\" class=\"btn btn btn-info dropdown-toggle\" type=\"button\">
\t\t\t<i class=\"fa fa-envelope-o\"></i> ";
        // line 23
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_mailing"), "method");
        echo "  <span class=\"caret\"></span>
\t\t</button>
\t\t<ul role=\"menu\" class=\"dropdown-menu\">
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? mailing_all() : false;\">";
        // line 26
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mailing_send_email_to_all"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? mailing_all_selected() : false;\">";
        // line 27
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mailing_send_email_to_all_selected"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? mailing_all_not_notified() : false;\">";
        // line 28
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mailing_send_email_to_all_not_notified"), "method");
        echo " </a></li>
\t\t\t<li><a onclick=\"confirm('Are you sure?') ? mailing_all_approved() : false;\">";
        // line 29
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mailing_send_email_to_all_approved_only"), "method");
        echo " </a></li>
\t\t</ul>
\t</div>
\t<div class=\"btn-group\">
\t\t<button aria-expanded=\"false\" data-toggle=\"dropdown\" class=\"btn btn btn-info dropdown-toggle\" type=\"button\" onclick=\"confirm('Are you sure?') ? revert_yet_send() : false;\">
\t\t\t<i class=\"fa fa-refresh\"></i> ";
        // line 34
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_revert_yet_send"), "method");
        echo " </span>
\t\t</button>
\t</div>
</div>
<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').attr('checked', this.checked);\" /></td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t";
        // line 45
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column_name"), "method");
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t";
        // line 48
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column_email"), "method");
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t";
        // line 51
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column_date_added"), "method");
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t";
        // line 54
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column_status"), "method");
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t";
        // line 57
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_confirm_mail"), "method");
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">";
        // line 59
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column_action"), "method");
        echo " </td>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 63
        if ((isset($context["newletter_email"]) ? $context["newletter_email"] : null)) {
            echo " 
\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newletter_email"]) ? $context["newletter_email"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " 
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 67
                echo $this->getAttribute($context["item"], "news_id", array());
                echo " \" />
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 69
                echo $this->getAttribute($context["item"], "news_email", array());
                echo " </td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 70
                echo $this->getAttribute($context["item"], "news_create_date", array());
                echo " </td>
\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t";
                // line 72
                if (($this->getAttribute($context["item"], "news_status", array()) == 0)) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label label-danger text-uppercase\">";
                    // line 73
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_not_approved"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                } else {
                    // line 74
                    echo "   
\t\t\t\t\t\t\t<span class=\"label label-success text-uppercase\">";
                    // line 75
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_approved"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 76
                echo " 
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t";
                // line 79
                if (($this->getAttribute($context["item"], "confirm_mail", array()) == 0)) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label label-danger text-uppercase\">";
                    // line 80
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_yet_send"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                } else {
                    // line 81
                    echo "   
\t\t\t\t\t\t\t<span class=\"label label-success text-uppercase\">";
                    // line 82
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_did_send"), "method");
                    echo " </span>
\t\t\t\t\t\t";
                }
                // line 83
                echo "  
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a data-original-title=\"Delete\" class=\"btn btn-warning\" title=\"\" data-toggle=\"tooltip\" onclick=\"confirm('Are you sure?') ? delete_selected('";
                // line 86
                echo $this->getAttribute($context["item"], "news_id", array());
                echo "') : false;\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" data-original-title=\"";
                // line 87
                if (($this->getAttribute($context["item"], "news_status", array()) == 0)) {
                    echo " Approve ";
                } else {
                    echo "  Not Approve ";
                }
                echo " \" title=\"\" data-toggle=\"tooltip\" onclick=\"confirm('Are you sure?') ? approve_selected('";
                echo $this->getAttribute($context["item"], "news_id", array());
                echo "') : false;\">

\t\t\t\t\t\t<i class=\"
\t\t\t\t\t\t";
                // line 90
                if (($this->getAttribute($context["item"], "news_status", array()) == 1)) {
                    echo " 
\t\t\t\t\t\t\tfa fa-thumbs-o-up
\t\t\t\t\t\t";
                } else {
                    // line 92
                    echo "   
\t\t\t\t\t\t\tfa fa-thumbs-o-down
\t\t\t\t\t\t";
                }
                // line 94
                echo " 
\t\t\t\t\t\t\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a data-original-title=\"Send email\" class=\"btn btn-info\" title=\"\" data-toggle=\"tooltip\" onclick=\"confirm('Are you sure?') ? mailing_selected(";
                // line 97
                echo $this->getAttribute($context["item"], "news_id", array());
                echo ") : false;\"><i class=\"fa fa-envelope-o\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
\t\t\t";
        } else {
            // line 102
            echo "   
\t\t\t<tr>
\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 104
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_text_no_results"), "method");
            echo " </td>
\t\t\t</tr>
\t\t\t";
        }
        // line 106
        echo " 
\t\t\t</tbody>
\t\t</table>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "extension/module/so_newletter_custom_popup/so_newletter_subscribers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 106,  260 => 104,  256 => 102,  252 => 101,  242 => 97,  237 => 94,  232 => 92,  226 => 90,  214 => 87,  210 => 86,  205 => 83,  200 => 82,  197 => 81,  192 => 80,  188 => 79,  183 => 76,  178 => 75,  175 => 74,  170 => 73,  166 => 72,  161 => 70,  157 => 69,  152 => 67,  144 => 64,  140 => 63,  133 => 59,  128 => 57,  122 => 54,  116 => 51,  110 => 48,  104 => 45,  90 => 34,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  64 => 23,  56 => 18,  52 => 17,  46 => 14,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="button_action">*/
/* 	<div class="btn-group">*/
/* 		<button aria-expanded="false" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">*/
/* 			<i class="fa fa-trash-o"></i> {{ objlang.get('entry_button_delete') }}  <span class="caret"></span>*/
/* 		</button>*/
/* 		<ul role="menu" class="dropdown-menu">*/
/* 			<li><a onclick="confirm('Are you sure?') ? delete_all() : false;">{{ objlang.get('entry_delete_all') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? delete_all_selected() : false;">{{ objlang.get('entry_delete_selected') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? delete_all_not_approved() :false;">{{ objlang.get('entry_delete_all_not_approved') }} </a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="btn-group">*/
/* 		<button aria-expanded="false" data-toggle="dropdown" class="btn btn btn-primary dropdown-toggle" type="button">*/
/* 			<i class="fa fa-thumbs-o-up"></i> {{ objlang.get('entry_button_approve') }}  <span class="caret"></span>*/
/* 		</button>*/
/* 		<ul role="menu" class="dropdown-menu">*/
/* 			<li><a onclick="confirm('Are you sure?') ? approve_all_selected() :false;">{{ objlang.get('entry_approve_selected') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? approve_all_not_approved() : false;">{{ objlang.get('entry_approve_all_not_approved') }} </a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="btn-group">*/
/* 		<button aria-expanded="false" data-toggle="dropdown" class="btn btn btn-info dropdown-toggle" type="button">*/
/* 			<i class="fa fa-envelope-o"></i> {{ objlang.get('entry_button_mailing') }}  <span class="caret"></span>*/
/* 		</button>*/
/* 		<ul role="menu" class="dropdown-menu">*/
/* 			<li><a onclick="confirm('Are you sure?') ? mailing_all() : false;">{{ objlang.get('entry_mailing_send_email_to_all') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? mailing_all_selected() : false;">{{ objlang.get('entry_mailing_send_email_to_all_selected') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? mailing_all_not_notified() : false;">{{ objlang.get('entry_mailing_send_email_to_all_not_notified') }} </a></li>*/
/* 			<li><a onclick="confirm('Are you sure?') ? mailing_all_approved() : false;">{{ objlang.get('entry_mailing_send_email_to_all_approved_only') }} </a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="btn-group">*/
/* 		<button aria-expanded="false" data-toggle="dropdown" class="btn btn btn-info dropdown-toggle" type="button" onclick="confirm('Are you sure?') ? revert_yet_send() : false;">*/
/* 			<i class="fa fa-refresh"></i> {{ objlang.get('entry_revert_yet_send') }} </span>*/
/* 		</button>*/
/* 	</div>*/
/* </div>*/
/* <form action="" method="post" enctype="multipart/form-data" id="form-product">*/
/* 	<div class="table-responsive">*/
/* 		<table class="table table-bordered table-hover">*/
/* 			<thead>*/
/* 			<tr>*/
/* 				<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);" /></td>*/
/* 				<td class="text-left">*/
/* 					{{ objlang.get('entry_column_name') }} */
/* 				</td>*/
/* 				<td class="text-left">*/
/* 					{{ objlang.get('entry_column_email') }} */
/* 				</td>*/
/* 				<td class="text-left">*/
/* 					{{ objlang.get('entry_column_date_added') }} */
/* 				</td>*/
/* 				<td class="text-left">*/
/* 					{{ objlang.get('entry_column_status') }} */
/* 				</td>*/
/* 				<td class="text-left">*/
/* 					{{ objlang.get('entry_confirm_mail') }} */
/* 				</td>*/
/* 				<td class="text-center">{{ objlang.get('entry_column_action') }} </td>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% if newletter_email %} */
/* 				{% for item in newletter_email %} */
/* 				<tr>*/
/* 					<td class="text-center">*/
/* 						<input type="checkbox" name="selected[]" value="{{ item.news_id }} " />*/
/* 					</td>*/
/* 					<td class="text-left">{{ item.news_email }} </td>*/
/* 					<td class="text-left">{{ item.news_create_date }} </td>*/
/* 					<td class="text-left">*/
/* 						{% if item.news_status  ==  0 %} */
/* 							<span class="label label-danger text-uppercase">{{ objlang.get('entry_not_approved') }} </span>*/
/* 						{% else %}   */
/* 							<span class="label label-success text-uppercase">{{ objlang.get('entry_approved') }} </span>*/
/* 						{% endif %} */
/* 					</td>*/
/* 					<td class="text-left">*/
/* 						{% if item.confirm_mail  ==  0 %} */
/* 							<span class="label label-danger text-uppercase">{{ objlang.get('entry_yet_send') }} </span>*/
/* 						{% else %}   */
/* 							<span class="label label-success text-uppercase">{{ objlang.get('entry_did_send') }} </span>*/
/* 						{% endif %}  */
/* 					</td>*/
/* 					<td class="text-center">*/
/* 						<a data-original-title="Delete" class="btn btn-warning" title="" data-toggle="tooltip" onclick="confirm('Are you sure?') ? delete_selected('{{ item.news_id }}') : false;"><i class="fa fa-trash-o"></i></a>*/
/* 						<a class="btn btn-primary" data-original-title="{% if item.news_status  ==  0 %} Approve {% else %}  Not Approve {% endif %} " title="" data-toggle="tooltip" onclick="confirm('Are you sure?') ? approve_selected('{{ item.news_id }}') : false;">*/
/* */
/* 						<i class="*/
/* 						{% if item.news_status  ==  1 %} */
/* 							fa fa-thumbs-o-up*/
/* 						{% else %}   */
/* 							fa fa-thumbs-o-down*/
/* 						{% endif %} */
/* 						"></i>*/
/* 						</a>*/
/* 						<a data-original-title="Send email" class="btn btn-info" title="" data-toggle="tooltip" onclick="confirm('Are you sure?') ? mailing_selected({{ item.news_id }}) : false;"><i class="fa fa-envelope-o"></i></a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* */
/* 			{% else %}   */
/* 			<tr>*/
/* 				<td class="text-center" colspan="8">{{ objlang.get('entry_text_no_results') }} </td>*/
/* 			</tr>*/
/* 			{% endif %} */
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* </form>*/
/* */
