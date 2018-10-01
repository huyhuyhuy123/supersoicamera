<?php

/* so-megastore/template/extension/module/so_filter_shop_by/default.twig */
class __TwigTemplate_77485a0fbca04705ddf77316fdf5918452f455c629ac8bd700f401e5d8501732 extends Twig_Template
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
        echo "<div class=\"module so_filter_wrap ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "\">
\t";
        // line 2
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 3
            echo "\t\t<h3 class=\"modtitle\">";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h3>
\t";
        }
        // line 5
        echo "
\t<div class=\"modcontent\">
\t\t<ul data-product_id = \"";
        // line 7
        echo (isset($context["products_arr_id"]) ? $context["products_arr_id"] : null);
        echo "\">
\t\t\t";
        // line 8
        if (((isset($context["disp_search_text"]) ? $context["disp_search_text"] : null) && ((isset($context["products_arr_id"]) ? $context["products_arr_id"] : null) != ""))) {
            // line 9
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_search.twig"));
            echo "
\t\t\t";
        }
        // line 11
        echo "\t\t\t
\t\t\t";
        // line 12
        if (((((isset($context["disp_subcategory"]) ? $context["disp_subcategory"] : null) && ((isset($context["subcategory_all"]) ? $context["subcategory_all"] : null) != "")) && (twig_length_filter($this->env, (isset($context["subcategory_all"]) ? $context["subcategory_all"] : null)) > 0)) && ((isset($context["products_arr_id"]) ? $context["products_arr_id"] : null) != ""))) {
            // line 13
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_subcategory.twig"));
            echo "
\t\t\t";
        }
        // line 15
        echo "
\t\t\t";
        // line 16
        if ((((isset($context["disp_manu_all"]) ? $context["disp_manu_all"] : null) && ((isset($context["manufacturer_all"]) ? $context["manufacturer_all"] : null) != "")) && (twig_length_filter($this->env, (isset($context["manufacturer_all"]) ? $context["manufacturer_all"] : null)) > 0))) {
            // line 17
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_manufacturer.twig"));
            echo "
\t\t\t";
        }
        // line 19
        echo "
\t\t\t";
        // line 20
        if ((((isset($context["options_all"]) ? $context["options_all"] : null) != "") && (twig_length_filter($this->env, (isset($context["options_all"]) ? $context["options_all"] : null)) > 0))) {
            // line 21
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options_all"]) ? $context["options_all"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["item"] => $context["values"]) {
                // line 22
                echo "\t\t\t\t\t";
                $context["item"] = twig_split_filter($this->env, $context["item"], "_");
                // line 23
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["item"], 1, array(), "array") == "image")) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    $context["disp_opt_id"] = ("disp_opt_id_" . $this->getAttribute($context["item"], 3, array(), "array"));
                    // line 25
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["disp_options"]) ? $context["disp_options"] : null), (isset($context["disp_opt_id"]) ? $context["disp_opt_id"] : null), array(), "array")) {
                        // line 26
                        echo "\t\t\t\t\t\t\t";
                        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_color.twig"));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t";
                    $context["disp_opt_id"] = ("disp_opt_id_" . $this->getAttribute($context["item"], 3, array(), "array"));
                    // line 30
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["disp_options"]) ? $context["disp_options"] : null), (isset($context["disp_opt_id"]) ? $context["disp_opt_id"] : null), array(), "array")) {
                        // line 31
                        echo "\t\t\t\t\t\t\t";
                        echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_option.twig"));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['item'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "
\t\t\t";
        // line 37
        if ((((isset($context["attribute_all"]) ? $context["attribute_all"] : null) != "") && (twig_length_filter($this->env, (isset($context["attribute_all"]) ? $context["attribute_all"] : null)) > 0))) {
            // line 38
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_all"]) ? $context["attribute_all"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["item"] => $context["values"]) {
                // line 39
                echo "\t\t\t\t\t";
                $context["item"] = twig_split_filter($this->env, $context["item"], "_");
                // line 40
                echo "\t\t\t\t\t";
                $context["disp_att_group_id"] = ("disp_att_group_id_" . $this->getAttribute($context["item"], 2, array(), "array"));
                // line 41
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["disp_attributes_group"]) ? $context["disp_attributes_group"] : null), (isset($context["disp_att_group_id"]) ? $context["disp_att_group_id"] : null), array(), "array")) {
                    // line 42
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_attribute.twig"));
                    echo "
\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['item'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t";
        }
        // line 46
        echo "
\t\t\t";
        // line 47
        if ((((isset($context["disp_pro_price"]) ? $context["disp_pro_price"] : null) && (((isset($context["minPrice"]) ? $context["minPrice"] : null) != 0) || ((isset($context["maxPrice"]) ? $context["maxPrice"] : null) != 0))) && ((isset($context["minPrice"]) ? $context["minPrice"] : null) != (isset($context["maxPrice"]) ? $context["maxPrice"] : null)))) {
            // line 48
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_filter_shop_by/default_product_price.twig"));
            echo "
\t\t\t";
        }
        // line 50
        echo "\t\t</ul>
\t\t";
        // line 51
        if (((isset($context["disp_reset_all"]) ? $context["disp_reset_all"] : null) && ((isset($context["products_arr_id"]) ? $context["products_arr_id"] : null) != ""))) {
            // line 52
            echo "\t\t\t<div class=\"clear_filter\">
\t\t\t<a href=\"javascript:;\" class=\"btn-default inverse btn_resetAll\">
\t\t\t\t";
            // line 55
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["obj_lang"]) ? $context["obj_lang"] : null), "get", array(0 => "text_reset_all"), "method");
            echo "
\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 59
        echo "\t</div>
</div>
<script type=\"text/javascript\">
//<![CDATA[
jQuery(window).load(function(\$){
\t\$ = typeof(\$ !== 'funtion') ? jQuery : \$;
\t
\tvar obj_class \t\t\t= \$('";
        // line 66
        echo (isset($context["in_class"]) ? $context["in_class"] : null);
        echo "').find('.product-layout').parent(),
\t\tproduct_arr_all \t= \$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\"),
\t\topt_value_id\t\t= \"";
        // line 68
        echo (isset($context["opt_id"]) ? $context["opt_id"] : null);
        echo "\",
\t\tatt_value_id\t\t= \"";
        // line 69
        echo (isset($context["att_id"]) ? $context["att_id"] : null);
        echo "\",
\t\tmanu_value_id\t\t= \"";
        // line 70
        echo (isset($context["manu_id"]) ? $context["manu_id"] : null);
        echo "\",
\t\tsubcate_value_id\t= \"";
        // line 71
        echo (isset($context["subcate_id"]) ? $context["subcate_id"] : null);
        echo "\",
\t\t\$minPrice\t\t\t= ";
        // line 72
        echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
        echo ",
\t\t\$maxPrice \t\t\t= ";
        // line 73
        echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
        echo ",
\t\t\$minPrice_new \t\t= ";
        // line 74
        echo (isset($context["minPrice_new"]) ? $context["minPrice_new"] : null);
        echo ",
\t\t\$maxPrice_new \t\t= ";
        // line 75
        echo (isset($context["maxPrice_new"]) ? $context["maxPrice_new"] : null);
        echo ",
\t\turl \t\t\t\t= '";
        // line 76
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "';
\t\ttext_search\t\t\t= \"";
        // line 77
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\";
\t
\tobj_class.addClass('so-filter-gird');
\t\$load_gif = \$('.so-filter-gird');
\t\$(\".so-filter-heading\").on(\"click\",function(){
\t\tif(\$(this).find(\".fa\").hasClass(\"fa-chevron-down\")){
\t\t\t\$(this).find(\".fa-chevron-down\").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
\t\t}else{
\t\t\t\$(this).find(\".fa-chevron-right\").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
\t\t}
\t\t\$(this).parent().children(\".so-filter-content-opts\").slideToggle(\"slow\");
\t});

\tclickOption();
\tif( opt_value_id != \"\" || att_value_id != \"\" || manu_value_id != \"\" || \$minPrice != \$minPrice_new || \$maxPrice != \$maxPrice_new || text_search != \"\" || subcate_value_id != \"\")\t{
\t\trequestAjax();
\t}else{
\t\tobj_class.find(\".product-layout\").fadeIn(\"show\");
\t}

\tfunction getUrlVars() {
\t\tvar vars = {};
\t\tvar parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
\t\t\tvars[key] = value;
\t\t});
\t\treturn vars;
\t}

\tfunction updateURL() {
\t\tif (history.pushState) {
\t\t\twindow.history.pushState({},'',url);
\t\t}
\t}

\tfunction clickOption(){
\t\t\$(\".so-filter-content-opts-container .opt-select.opt_enable\").on(\"click\",function(){
\t\t\tif (!\$(this).hasClass('opt_disable')){
\t\t\t\tvar type_li = \$(this).attr(\"data-type\");
\t\t\t\tvar att_value = \"\";
\t\t\t\tvar opt_value = \"\";
\t\t\t\tvar manu_value = \"\";
\t\t\t\t\$load_gif.addClass('loading-gif');
\t\t\t\tswitch(type_li)\t{
\t\t\t\t\tcase \"option\":
\t\t\t\t\t\topt_value = \$(this).attr(\"data-option_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(opt_value_id == \"\"){
\t\t\t\t\t\t\t\topt_value_id = opt_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\topt_value_id += \",\" + opt_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(\",\"+opt_value,\"\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(opt_value+\",\",\"\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(opt_value,\"\");
\t\t\t\t\t\t}

\t\t\t\t\t\tif(url.indexOf(\"opt_id\") != -1)\t{
\t\t\t\t\t\t\tif(opt_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'&opt_id='+opt_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&opt_id='+opt_value_id;
\t\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t\tcase \"attribute\":
\t\t\t\t\t\tatt_value = \$(this).attr(\"data-attribute_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(att_value_id == \"\"){
\t\t\t\t\t\t\t\tatt_value_id = att_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(\",\"+att_value,\"\");
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value+\",\",\"\");
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value,\"\");
\t\t\t\t\t\t\t\tatt_value_id += \",\" + att_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(\",\"+att_value,\"\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value+\",\",\"\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"att_id\") != -1){
\t\t\t\t\t\t\tif(att_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'&att_id='+att_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&att_id='+att_value_id;
\t\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"manufacturer\":
\t\t\t\t\t\tmanu_value = \$(this).attr(\"data-manufacturer_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(manu_value_id == \"\")\t{
\t\t\t\t\t\t\t\tmanu_value_id = manu_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(\",\"+manu_value,\"\");
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value+\",\",\"\");
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value,\"\");
\t\t\t\t\t\t\t\tmanu_value_id += \",\" + manu_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(\",\"+manu_value,\"\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value+\",\",\"\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"manu_id\") != -1){
\t\t\t\t\t\t\tif(manu_value_id != \"\")\t{
\t\t\t\t\t\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'&manu_id='+manu_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&manu_id='+manu_value_id;
\t\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"subcategory\":
\t\t\t\t\t\tsubcate_value = \$(this).attr(\"data-subcategory_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(subcate_value_id == \"\"){
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(\",\"+subcate_value,\"\");
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value+\",\",\"\");
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value,\"\");
\t\t\t\t\t\t\t\tsubcate_value_id += \",\" + subcate_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(\",\"+subcate_value,\"\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value+\",\",\"\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"subcate_id\") != -1)\t{
\t\t\t\t\t\t\tif(subcate_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'&subcate_id='+subcate_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&subcate_id='+subcate_value_id;
\t\t\t\t\t\t}
\t\t\t\t\t\tproduct_arr_all = \$(this).attr(\"data-list_product\");
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").css(\"display\",\"none\");

\t\t\t\tupdateURL();
\t\t\t\trequestAjax();
\t\t\t}
\t\t\treturn false;
\t\t});
\t}

\t\$.arrayIntersect = function(a, b)
\t{
\t\treturn \$.grep(a, function(i)
\t\t{
\t\t\treturn \$.inArray(i, b) > -1;
\t\t});
\t};

\tfunction getCountProduct(){
\t\tvar product_tmp = \$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\");
\t\t
\t\tproduct_arr = product_tmp.split(',');
\t\tif(product_arr == ''){
\t\t\t\$('.so-filter-option').each(function(){
\t\t\t\t\$(this).find('.option-count span').html(0);
\t\t\t});
\t\t}else{
\t\t\t\$('.so-filter-option.opt-select').each(function(){
\t\t\t\tvar product = \$(this).attr('data-list_product');
\t\t\t\tif(product != ''){
\t\t\t\t\tvar product_array = product.split(',');
\t\t\t\t\tvar length = product_array.length;
\t\t\t\t\tvar dem = 0 , a =[];
\t\t\t\t\tvar _general = \$.arrayIntersect(product_arr, product_array);
\t\t\t\t\tvar count = _general.length;
\t\t\t\t\t// for (var i = 0; i < length;i++){
\t\t\t\t\t\t// if(product_arr.indexOf(product_array[i]) > -1){
\t\t\t\t\t\t\t// count = count + 1;
\t\t\t\t\t\t\t// dem = product_array.length - product_arr.split(',').length;
\t\t\t\t\t\t// }
\t\t\t\t\t// }
\t\t\t\t\tif(count == 0){
\t\t\t\t\t\t\$(this).removeClass(\"opt_enable\").addClass(\"opt_disable\");
\t\t\t\t\t\t\$(this).attr(\"disabled\", \"disabled\");

\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).removeClass(\"opt_enable\").removeClass(\"opt_disable\").addClass(\"opt_enable\");
\t\t\t\t\t\t\$(this).removeAttr(\"disabled\");
\t\t\t\t\t}
\t\t\t\t\tvar type = \$(this).attr(\"data-type\");
\t\t\t\t\tif(count > 0 && ((att_value_id != \"\" && type == \"attribute\") || (opt_value_id != \"\" && type == \"option\"))){
\t\t\t\t\t\t\$(this).find('.option-count span').html(count);
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).find('.option-count span').html(count);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t";
        // line 314
        if ((((isset($context["disp_pro_price"]) ? $context["disp_pro_price"] : null) && (((isset($context["minPrice_new"]) ? $context["minPrice_new"] : null) != 0) || ((isset($context["maxPrice_new"]) ? $context["maxPrice_new"] : null) != 0))) && ((isset($context["minPrice"]) ? $context["minPrice"] : null) != (isset($context["maxPrice"]) ? $context["maxPrice"] : null)))) {
            // line 315
            echo "\t\tvar range = document.getElementById('slider-range');
\t\tnoUiSlider.create(range, {
\t\t\tstart: [\$minPrice_new, \$maxPrice_new],
\t\t\tstep: 1,
\t\t\tconnect: true,
\t\t\trange: {
\t\t\t\t'min': \$minPrice,
\t\t\t\t'max': \$maxPrice
\t\t\t},
\t\t\tslide: function(event, ui) {
\t            if (\$minPrice == \$maxPrice) {
\t                return false;
\t            }
\t        }
\t\t});
\t\tvar valueMin = \$('.content_min_max .input_min'),
\t\t\tvalueMax = \$('.content_min_max .input_max');

\t\trange.noUiSlider.on('change', function( values, handle ) {
\t\t\tif ( handle ) {
\t\t\t\tvalueMax.val(values[handle]);
\t\t\t\t\$maxPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\t\tif(\$maxPrice_new != \"";
            // line 338
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+\$maxPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&maxPrice='+\$maxPrice_new;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalueMin.val(values[handle]);
\t\t\t\t\$minPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\t\tif(\$minPrice_new != \"";
            // line 351
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+\$minPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&minPrice='+\$minPrice_new;
\t\t\t\t}
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();
\t\t});
\t
\t\trange.noUiSlider.on('end', function( values, handle ) {
\t\t\tif ( handle ) {
\t\t\t\t\$maxPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\t\tif(\$maxPrice_new != \"";
            // line 370
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+\$maxPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&maxPrice='+\$maxPrice_new;
\t\t\t\t}

\t\t\t} else {
\t\t\t\t\$minPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\t\tif(\$minPrice_new != \"";
            // line 383
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+\$minPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&minPrice='+\$minPrice_new;
\t\t\t\t}
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();
\t\t});
\t
\t\t\$('.content_min_max .input_min').change(function(){
\t\t\tvar valueMin = \$(this).val();
\t\t\tvar maxPrice__ = getUrlVars()[\"maxPrice\"];
\t\t\tif(typeof maxPrice__ === 'undefined'){
\t\t\t\t\$maxPrice_new = ";
            // line 402
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo ";
\t\t\t}else{
\t\t\t\t\$maxPrice_new = maxPrice__;
\t\t\t}
\t\t\tif(valueMin < ";
            // line 406
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo "){
\t\t\t\tvalueMin = ";
            // line 407
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo ";
\t\t\t\t\$(this).val(valueMin);
\t\t\t}
\t\t\tif(valueMin > ";
            // line 410
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo "){
\t\t\t\tvalueMin = ";
            // line 411
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo ";
\t\t\t\t\$(this).val(valueMin);
\t\t\t}
\t\t\trange.noUiSlider.set([valueMin,null]);
\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\tif(valueMin != \"";
            // line 416
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo "\"){
\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+valueMin);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&minPrice='+valueMin;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$minPrice_new = valueMin;
\t\t\trequestAjax();
\t\t});

\t\t\$('.content_min_max .input_max').change(function(){
\t\t\tvar valueMax = \$(this).val();
\t\t\tvar minPrice__ = getUrlVars()[\"minPrice\"];
\t\t\tif(typeof minPrice__ === 'undefined'){
\t\t\t\t\$minPrice_new = ";
            // line 435
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo ";
\t\t\t}else{
\t\t\t\t\$minPrice_new = minPrice__;
\t\t\t}
\t\t\tif(valueMax > ";
            // line 439
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo "){
\t\t\t\tvalueMax = ";
            // line 440
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo ";
\t\t\t\t\$(this).val(valueMax);
\t\t\t}
\t\t\tif(valueMax < ";
            // line 443
            echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
            echo "){
\t\t\t\tvalueMax = ";
            // line 444
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo ";
\t\t\t\t\$(this).val(valueMax);
\t\t\t}
\t\t\trange.noUiSlider.set([null, valueMax]);
\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\tif(valueMax != \"";
            // line 449
            echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
            echo "\"){
\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+valueMax);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&maxPrice='+valueMax;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$maxPrice_new = valueMax;
\t\t\trequestAjax();
\t\t});
\t";
        }
        // line 464
        echo "
\t";
        // line 465
        if ((isset($context["disp_search_text"]) ? $context["disp_search_text"] : null)) {
            // line 466
            echo "\t\t\$('#text_search').keyup(function(){
\t\t\tvar character = ";
            // line 467
            echo (isset($context["character_search"]) ? $context["character_search"] : null);
            echo ";
\t\t\ttext_search = \$(\"#text_search\").val();
\t\t\tif(text_search.length >= character){
\t\t\t\tif(url.indexOf(\"search\") != -1){
\t\t\t\t\tif(text_search != \"\"){
\t\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'&search='+text_search);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&search='+text_search;
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\t\tupdateURL();
\t\t\t\trequestAjax();
\t\t\t}
\t\t});

\t\t\$('#submit_text_search').on(\"click\",function(){
\t\t\ttext_search = \$(\"#text_search\").val();
\t\t\tif(url.indexOf(\"search\") != -1){
\t\t\t\tif(text_search != \"\"){
\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'&search='+text_search);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&search='+text_search;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();
\t\t});
\t";
        }
        // line 503
        echo "
\t";
        // line 504
        if ((isset($context["disp_reset_all"]) ? $context["disp_reset_all"] : null)) {
            // line 505
            echo "\t\t\$('.btn_resetAll').on(\"click\",function(){
\t\t\topt_value_id \t\t= \"\";
\t\t\tatt_value_id \t\t= \"\";
\t\t\tmanu_value_id \t\t= \"\";
\t\t\t\$minPrice_new\t\t= \"\",
\t\t\t\$maxPrice_new \t\t= \"\",
\t\t\ttext_search \t\t= \"\";
\t\t\tsubcate_value_id\t= \"\";
\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'');
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$('.content_min_max .input_min').val(\$minPrice);
\t\t\t\$('.content_min_max .input_max').val(\$maxPrice);
\t\t\tif((\$minPrice != 0 || \$maxPrice != 0) && (\$minPrice != \$maxPrice)){
\t\t\t\trange.noUiSlider.set([\$minPrice, \$maxPrice]);
\t\t\t}
\t\t\t
\t\t\t\$(\".so-filter-option\").removeClass(\"opt_active\");
\t\t\t\$(\".so-filter-option\").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\$(\".so-filter-option\").find(\".option-count\").removeClass(\"opt_close\");

\t\t\t\$(\".so-filter-option-sub\").removeClass(\"opt_active\");
\t\t\t\$(\".so-filter-option-sub\").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\$(\".so-filter-option-sub\").find(\".option-count\").removeClass(\"opt_close\");

\t\t\t\$(\"#text_search\").val('');
\t\t\tlocation.href= url;
\t\t});
\t";
        }
        // line 540
        echo "\t
\tfunction requestAjax(){
\t\tvar page = (getUrlVars()[\"page\"] === \"undefined\" ? \"1\" : getUrlVars()[\"page\"]);
\t\t\$.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'index.php?route=extension/module/so_filter_shop_by/filter_data',
\t\t\tdata: {
\t\t\t\tisFilterShopBy\t\t: 1,
\t\t\t\topt_value_id\t\t: opt_value_id,
\t\t\t\tatt_value_id\t\t: att_value_id,
\t\t\t\tmanu_value_id\t\t: manu_value_id,
\t\t\t\tsubcate_value_id\t: subcate_value_id,
\t\t\t\tminPrice \t\t\t: \$minPrice_new,
\t\t\t\tmaxPrice \t\t\t: \$maxPrice_new,
\t\t\t\ttext_search \t\t: text_search,
\t\t\t\tcategory_id_path\t: '";
        // line 555
        echo (isset($context["category_id_path"]) ? $context["category_id_path"] : null);
        echo "',
\t\t\t\tpage\t\t\t\t: page,
\t\t\t\tproduct_id_in        : \$('.so_filter_wrap .modcontent > ul').attr('data-product_id'),
\t\t\t\tproduct_arr_all \t: product_arr_all,
\t\t\t\tcondition_search\t: '";
        // line 559
        echo (isset($context["condition_search"]) ? $context["condition_search"] : null);
        echo "'
\t\t\t},
\t\t\tsuccess: function (data) {
\t\t\t\tobj_class.html(data['html']);
\t\t\t\tvar text_right = obj_class.find(\".product-layout\").parent().next().find('.text-right').html();
\t\t\t\tvar text_left = obj_class.find(\".product-layout\").parent().next().find('.text-left').html();
\t\t\t\tvar text_center = obj_class.find(\".product-layout\").parent().next().find('.short-by-show.text-center').html();
\t\t\t\tobj_class.next().find('.text-right').html(text_right);
\t\t\t\tobj_class.next().find('.text-left').html('');
\t\t\t\tobj_class.next().find('.short-by-show.text-center').html(text_center);
\t\t\t\tobj_class.next().find('.box-pagination.text-right').html('');
\t\t\t\tif(obj_class.find(\".product-layout\").length > 0){
\t\t\t\t\tvar html = obj_class.find(\".product-layout\").eq(0).parent().html();
\t\t\t\t\tobj_class.html(html);

\t\t\t\t}else{
\t\t\t\t\tobj_class.html('<div class=\"col-xs-12\">";
        // line 575
        echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
        echo "</div>');
\t\t\t\t\tobj_class.next().find('.text-right').css('display','none');
\t\t\t\t\tobj_class.next().find('.short-by-show.text-center').css('display','none');
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").fadeIn(\"show\");
\t\t\t\t\$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\",data['product_arr']);
\t\t\t\t\$('#grid-view').click();
\t\t\t\tgetCountProduct();
\t\t\t\t\$load_gif.removeClass('loading-gif');
\t\t\t},
\t\t\tdataType: 'json'
\t\t});
\t}

});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-megastore/template/extension/module/so_filter_shop_by/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 575,  833 => 559,  826 => 555,  809 => 540,  772 => 505,  770 => 504,  767 => 503,  728 => 467,  725 => 466,  723 => 465,  720 => 464,  702 => 449,  694 => 444,  690 => 443,  684 => 440,  680 => 439,  673 => 435,  651 => 416,  643 => 411,  639 => 410,  633 => 407,  629 => 406,  622 => 402,  600 => 383,  584 => 370,  562 => 351,  546 => 338,  521 => 315,  519 => 314,  279 => 77,  275 => 76,  271 => 75,  267 => 74,  263 => 73,  259 => 72,  255 => 71,  251 => 70,  247 => 69,  243 => 68,  238 => 66,  229 => 59,  221 => 55,  217 => 52,  215 => 51,  212 => 50,  206 => 48,  204 => 47,  201 => 46,  198 => 45,  184 => 44,  178 => 42,  175 => 41,  172 => 40,  169 => 39,  151 => 38,  149 => 37,  146 => 36,  143 => 35,  129 => 34,  126 => 33,  120 => 31,  117 => 30,  114 => 29,  111 => 28,  105 => 26,  102 => 25,  99 => 24,  96 => 23,  93 => 22,  75 => 21,  73 => 20,  70 => 19,  64 => 17,  62 => 16,  59 => 15,  53 => 13,  51 => 12,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="module so_filter_wrap {{ class_suffix }}">*/
/* 	{% if disp_title_module %}*/
/* 		<h3 class="modtitle">{{ head_name }}</h3>*/
/* 	{% endif %}*/
/* */
/* 	<div class="modcontent">*/
/* 		<ul data-product_id = "{{ products_arr_id }}">*/
/* 			{% if disp_search_text and products_arr_id != "" %}*/
/* 				{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_search.twig") }}*/
/* 			{% endif %}*/
/* 			*/
/* 			{% if disp_subcategory and subcategory_all != "" and subcategory_all|length > 0 and products_arr_id != "" %}*/
/* 				{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_subcategory.twig") }}*/
/* 			{% endif %}*/
/* */
/* 			{% if disp_manu_all and manufacturer_all != "" and manufacturer_all|length > 0 %}*/
/* 				{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_manufacturer.twig") }}*/
/* 			{% endif %}*/
/* */
/* 			{% if options_all != "" and options_all|length > 0 %}*/
/* 				{% for item, values in options_all %}*/
/* 					{% set item = item|split('_') %}*/
/* 					{% if item[1] == "image" %}*/
/* 						{% set disp_opt_id = 'disp_opt_id_'~item[3] %}*/
/* 						{% if disp_options[disp_opt_id] %}*/
/* 							{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_color.twig") }}*/
/* 						{% endif %}*/
/* 					{% else %}*/
/* 						{% set disp_opt_id = 'disp_opt_id_'~item[3] %}*/
/* 						{% if disp_options[disp_opt_id] %}*/
/* 							{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_option.twig") }}*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* */
/* 			{% if attribute_all != "" and attribute_all|length > 0 %}*/
/* 				{% for item, values in attribute_all %}*/
/* 					{% set item = item|split('_') %}*/
/* 					{% set disp_att_group_id = 'disp_att_group_id_'~item[2] %}*/
/* 					{% if disp_attributes_group[disp_att_group_id] %}*/
/* 						{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_attribute.twig") }}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* */
/* 			{% if disp_pro_price and (minPrice != 0 or maxPrice != 0) and (minPrice != maxPrice) %}*/
/* 				{{ include (theme_config~"/template/extension/module/so_filter_shop_by/default_product_price.twig") }}*/
/* 			{% endif %}*/
/* 		</ul>*/
/* 		{% if disp_reset_all and products_arr_id != "" %}*/
/* 			<div class="clear_filter">*/
/* 			<a href="javascript:;" class="btn-default inverse btn_resetAll">*/
/* 				{# <span class="fa fa-times" aria-hidden="true"></span>  #}*/
/* 				{{ obj_lang.get('text_reset_all') }}*/
/* 			</a>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* jQuery(window).load(function($){*/
/* 	$ = typeof($ !== 'funtion') ? jQuery : $;*/
/* 	*/
/* 	var obj_class 			= $('{{ in_class }}').find('.product-layout').parent(),*/
/* 		product_arr_all 	= $(".so_filter_wrap .modcontent ul").attr("data-product_id"),*/
/* 		opt_value_id		= "{{ opt_id }}",*/
/* 		att_value_id		= "{{ att_id }}",*/
/* 		manu_value_id		= "{{ manu_id }}",*/
/* 		subcate_value_id	= "{{ subcate_id }}",*/
/* 		$minPrice			= {{ minPrice }},*/
/* 		$maxPrice 			= {{ maxPrice }},*/
/* 		$minPrice_new 		= {{ minPrice_new }},*/
/* 		$maxPrice_new 		= {{ maxPrice_new }},*/
/* 		url 				= '{{ url }}';*/
/* 		text_search			= "{{ text_search }}";*/
/* 	*/
/* 	obj_class.addClass('so-filter-gird');*/
/* 	$load_gif = $('.so-filter-gird');*/
/* 	$(".so-filter-heading").on("click",function(){*/
/* 		if($(this).find(".fa").hasClass("fa-chevron-down")){*/
/* 			$(this).find(".fa-chevron-down").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');*/
/* 		}else{*/
/* 			$(this).find(".fa-chevron-right").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');*/
/* 		}*/
/* 		$(this).parent().children(".so-filter-content-opts").slideToggle("slow");*/
/* 	});*/
/* */
/* 	clickOption();*/
/* 	if( opt_value_id != "" || att_value_id != "" || manu_value_id != "" || $minPrice != $minPrice_new || $maxPrice != $maxPrice_new || text_search != "" || subcate_value_id != "")	{*/
/* 		requestAjax();*/
/* 	}else{*/
/* 		obj_class.find(".product-layout").fadeIn("show");*/
/* 	}*/
/* */
/* 	function getUrlVars() {*/
/* 		var vars = {};*/
/* 		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {*/
/* 			vars[key] = value;*/
/* 		});*/
/* 		return vars;*/
/* 	}*/
/* */
/* 	function updateURL() {*/
/* 		if (history.pushState) {*/
/* 			window.history.pushState({},'',url);*/
/* 		}*/
/* 	}*/
/* */
/* 	function clickOption(){*/
/* 		$(".so-filter-content-opts-container .opt-select.opt_enable").on("click",function(){*/
/* 			if (!$(this).hasClass('opt_disable')){*/
/* 				var type_li = $(this).attr("data-type");*/
/* 				var att_value = "";*/
/* 				var opt_value = "";*/
/* 				var manu_value = "";*/
/* 				$load_gif.addClass('loading-gif');*/
/* 				switch(type_li)	{*/
/* 					case "option":*/
/* 						opt_value = $(this).attr("data-option_value");*/
/* 						if(!$(this).hasClass("opt_active"))	{*/
/* 							$(this).addClass("opt_active");*/
/* 							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');*/
/* 							$(this).find(".option-count").addClass("opt_close");*/
/* 							if(opt_value_id == ""){*/
/* 								opt_value_id = opt_value;*/
/* 							}else{*/
/* 								opt_value_id += "," + opt_value;*/
/* 							}*/
/* 						}else{*/
/* 							$(this).removeClass("opt_active");*/
/* 							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 							$(this).find(".option-count").removeClass("opt_close");*/
/* 							opt_value_id = opt_value_id.replace(","+opt_value,"");*/
/* 							opt_value_id = opt_value_id.replace(opt_value+",","");*/
/* 							opt_value_id = opt_value_id.replace(opt_value,"");*/
/* 						}*/
/* */
/* 						if(url.indexOf("opt_id") != -1)	{*/
/* 							if(opt_value_id != ""){*/
/* 								url = url.replace(/(&opt_id=)[^\&]+/,'&opt_id='+opt_value_id);*/
/* 							}else{*/
/* 								url = url.replace(/(&opt_id=)[^\&]+/,'');*/
/* 								location.href= url;*/
/* 							}*/
/* */
/* 						}else{*/
/* 							url = url+'&opt_id='+opt_value_id;*/
/* 						}*/
/* */
/* 					break;*/
/* 					case "attribute":*/
/* 						att_value = $(this).attr("data-attribute_value");*/
/* 						if(!$(this).hasClass("opt_active"))	{*/
/* 							$(this).addClass("opt_active");*/
/* 							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');*/
/* 							$(this).find(".option-count").addClass("opt_close");*/
/* 							if(att_value_id == ""){*/
/* 								att_value_id = att_value;*/
/* 							}else{*/
/* 								att_value_id = att_value_id.replace(","+att_value,"");*/
/* 								att_value_id = att_value_id.replace(att_value+",","");*/
/* 								att_value_id = att_value_id.replace(att_value,"");*/
/* 								att_value_id += "," + att_value;*/
/* 							}*/
/* 						}else{*/
/* 							$(this).removeClass("opt_active");*/
/* 							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 							$(this).find(".option-count").removeClass("opt_close");*/
/* 							att_value_id = att_value_id.replace(","+att_value,"");*/
/* 							att_value_id = att_value_id.replace(att_value+",","");*/
/* 							att_value_id = att_value_id.replace(att_value,"");*/
/* 						}*/
/* 						if(url.indexOf("att_id") != -1){*/
/* 							if(att_value_id != ""){*/
/* 								url = url.replace(/(&att_id=)[^\&]+/,'&att_id='+att_value_id);*/
/* 							}else{*/
/* 								url = url.replace(/(&att_id=)[^\&]+/,'');*/
/* 								location.href= url;*/
/* 							}*/
/* 						}else{*/
/* 							url = url+'&att_id='+att_value_id;*/
/* 						}*/
/* 					break;*/
/* 					case "manufacturer":*/
/* 						manu_value = $(this).attr("data-manufacturer_value");*/
/* 						if(!$(this).hasClass("opt_active"))	{*/
/* 							$(this).addClass("opt_active");*/
/* 							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');*/
/* 							$(this).find(".option-count").addClass("opt_close");*/
/* 							if(manu_value_id == "")	{*/
/* 								manu_value_id = manu_value;*/
/* 							}else{*/
/* 								manu_value_id = manu_value_id.replace(","+manu_value,"");*/
/* 								manu_value_id = manu_value_id.replace(manu_value+",","");*/
/* 								manu_value_id = manu_value_id.replace(manu_value,"");*/
/* 								manu_value_id += "," + manu_value;*/
/* 							}*/
/* 						}else{*/
/* 							$(this).removeClass("opt_active");*/
/* 							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 							$(this).find(".option-count").removeClass("opt_close");*/
/* 							manu_value_id = manu_value_id.replace(","+manu_value,"");*/
/* 							manu_value_id = manu_value_id.replace(manu_value+",","");*/
/* 							manu_value_id = manu_value_id.replace(manu_value,"");*/
/* 						}*/
/* 						if(url.indexOf("manu_id") != -1){*/
/* 							if(manu_value_id != "")	{*/
/* 								url = url.replace(/(&manu_id=)[^\&]+/,'&manu_id='+manu_value_id);*/
/* 							}else{*/
/* 								url = url.replace(/(&manu_id=)[^\&]+/,'');*/
/* 								location.href= url;*/
/* 							}*/
/* 						}else{*/
/* 							url = url+'&manu_id='+manu_value_id;*/
/* 						}*/
/* 					break;*/
/* 					case "subcategory":*/
/* 						subcate_value = $(this).attr("data-subcategory_value");*/
/* 						if(!$(this).hasClass("opt_active"))	{*/
/* 							$(this).addClass("opt_active");*/
/* 							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');*/
/* 							$(this).find(".option-count").addClass("opt_close");*/
/* 							if(subcate_value_id == ""){*/
/* 								subcate_value_id = subcate_value;*/
/* 							}else{*/
/* 								subcate_value_id = subcate_value_id.replace(","+subcate_value,"");*/
/* 								subcate_value_id = subcate_value_id.replace(subcate_value+",","");*/
/* 								subcate_value_id = subcate_value_id.replace(subcate_value,"");*/
/* 								subcate_value_id += "," + subcate_value;*/
/* 							}*/
/* 						}else{*/
/* 							$(this).removeClass("opt_active");*/
/* 							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 							$(this).find(".option-count").removeClass("opt_close");*/
/* 							subcate_value_id = subcate_value_id.replace(","+subcate_value,"");*/
/* 							subcate_value_id = subcate_value_id.replace(subcate_value+",","");*/
/* 							subcate_value_id = subcate_value_id.replace(subcate_value,"");*/
/* 						}*/
/* 						if(url.indexOf("subcate_id") != -1)	{*/
/* 							if(subcate_value_id != ""){*/
/* 								url = url.replace(/(&subcate_id=)[^\&]+/,'&subcate_id='+subcate_value_id);*/
/* 							}else{*/
/* 								url = url.replace(/(&subcate_id=)[^\&]+/,'');*/
/* 								location.href= url;*/
/* 							}*/
/* 						}else{*/
/* 							url = url+'&subcate_id='+subcate_value_id;*/
/* 						}*/
/* 						product_arr_all = $(this).attr("data-list_product");*/
/* 						location.href= url;*/
/* 					break;*/
/* 				}*/
/* 				obj_class.find(".product-layout").css("display","none");*/
/* */
/* 				updateURL();*/
/* 				requestAjax();*/
/* 			}*/
/* 			return false;*/
/* 		});*/
/* 	}*/
/* */
/* 	$.arrayIntersect = function(a, b)*/
/* 	{*/
/* 		return $.grep(a, function(i)*/
/* 		{*/
/* 			return $.inArray(i, b) > -1;*/
/* 		});*/
/* 	};*/
/* */
/* 	function getCountProduct(){*/
/* 		var product_tmp = $(".so_filter_wrap .modcontent ul").attr("data-product_id");*/
/* 		*/
/* 		product_arr = product_tmp.split(',');*/
/* 		if(product_arr == ''){*/
/* 			$('.so-filter-option').each(function(){*/
/* 				$(this).find('.option-count span').html(0);*/
/* 			});*/
/* 		}else{*/
/* 			$('.so-filter-option.opt-select').each(function(){*/
/* 				var product = $(this).attr('data-list_product');*/
/* 				if(product != ''){*/
/* 					var product_array = product.split(',');*/
/* 					var length = product_array.length;*/
/* 					var dem = 0 , a =[];*/
/* 					var _general = $.arrayIntersect(product_arr, product_array);*/
/* 					var count = _general.length;*/
/* 					// for (var i = 0; i < length;i++){*/
/* 						// if(product_arr.indexOf(product_array[i]) > -1){*/
/* 							// count = count + 1;*/
/* 							// dem = product_array.length - product_arr.split(',').length;*/
/* 						// }*/
/* 					// }*/
/* 					if(count == 0){*/
/* 						$(this).removeClass("opt_enable").addClass("opt_disable");*/
/* 						$(this).attr("disabled", "disabled");*/
/* */
/* 					}else{*/
/* 						$(this).removeClass("opt_enable").removeClass("opt_disable").addClass("opt_enable");*/
/* 						$(this).removeAttr("disabled");*/
/* 					}*/
/* 					var type = $(this).attr("data-type");*/
/* 					if(count > 0 && ((att_value_id != "" && type == "attribute") || (opt_value_id != "" && type == "option"))){*/
/* 						$(this).find('.option-count span').html(count);*/
/* 					}else{*/
/* 						$(this).find('.option-count span').html(count);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}*/
/* */
/* 	{% if disp_pro_price and (minPrice_new != 0 or maxPrice_new != 0) and (minPrice != maxPrice) %}*/
/* 		var range = document.getElementById('slider-range');*/
/* 		noUiSlider.create(range, {*/
/* 			start: [$minPrice_new, $maxPrice_new],*/
/* 			step: 1,*/
/* 			connect: true,*/
/* 			range: {*/
/* 				'min': $minPrice,*/
/* 				'max': $maxPrice*/
/* 			},*/
/* 			slide: function(event, ui) {*/
/* 	            if ($minPrice == $maxPrice) {*/
/* 	                return false;*/
/* 	            }*/
/* 	        }*/
/* 		});*/
/* 		var valueMin = $('.content_min_max .input_min'),*/
/* 			valueMax = $('.content_min_max .input_max');*/
/* */
/* 		range.noUiSlider.on('change', function( values, handle ) {*/
/* 			if ( handle ) {*/
/* 				valueMax.val(values[handle]);*/
/* 				$maxPrice_new = values[handle];*/
/* 				if(url.indexOf("maxPrice") != -1){*/
/* 					if($maxPrice_new != "{{ maxPrice }}"){*/
/* 						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);*/
/* 					}else{*/
/* 						url = url.replace(/(&maxPrice=)[^\&]+/,'');*/
/* 						location.href= url;*/
/* 					}*/
/* 				}else{*/
/* 					url = url+'&maxPrice='+$maxPrice_new;*/
/* 				}*/
/* 			} else {*/
/* 				valueMin.val(values[handle]);*/
/* 				$minPrice_new = values[handle];*/
/* 				if(url.indexOf("minPrice") != -1){*/
/* 					if($minPrice_new != "{{ minPrice }}"){*/
/* 						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);*/
/* 					}else{*/
/* 						url = url.replace(/(&minPrice=)[^\&]+/,'');*/
/* 						location.href= url;*/
/* 					}*/
/* 				}else{*/
/* 					url = url+'&minPrice='+$minPrice_new;*/
/* 				}*/
/* 			}*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			requestAjax();*/
/* 		});*/
/* 	*/
/* 		range.noUiSlider.on('end', function( values, handle ) {*/
/* 			if ( handle ) {*/
/* 				$maxPrice_new = values[handle];*/
/* 				if(url.indexOf("maxPrice") != -1){*/
/* 					if($maxPrice_new != "{{ maxPrice }}"){*/
/* 						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);*/
/* 					}else{*/
/* 						url = url.replace(/(&maxPrice=)[^\&]+/,'');*/
/* 						location.href= url;*/
/* 					}*/
/* 				}else{*/
/* 					url = url+'&maxPrice='+$maxPrice_new;*/
/* 				}*/
/* */
/* 			} else {*/
/* 				$minPrice_new = values[handle];*/
/* 				if(url.indexOf("minPrice") != -1){*/
/* 					if($minPrice_new != "{{ minPrice }}"){*/
/* 						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);*/
/* 					}else{*/
/* 						url = url.replace(/(&minPrice=)[^\&]+/,'');*/
/* 						location.href= url;*/
/* 					}*/
/* 				}else{*/
/* 					url = url+'&minPrice='+$minPrice_new;*/
/* 				}*/
/* 			}*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			requestAjax();*/
/* 		});*/
/* 	*/
/* 		$('.content_min_max .input_min').change(function(){*/
/* 			var valueMin = $(this).val();*/
/* 			var maxPrice__ = getUrlVars()["maxPrice"];*/
/* 			if(typeof maxPrice__ === 'undefined'){*/
/* 				$maxPrice_new = {{ maxPrice }};*/
/* 			}else{*/
/* 				$maxPrice_new = maxPrice__;*/
/* 			}*/
/* 			if(valueMin < {{ minPrice }}){*/
/* 				valueMin = {{ minPrice }};*/
/* 				$(this).val(valueMin);*/
/* 			}*/
/* 			if(valueMin > {{ maxPrice }}){*/
/* 				valueMin = {{ maxPrice }};*/
/* 				$(this).val(valueMin);*/
/* 			}*/
/* 			range.noUiSlider.set([valueMin,null]);*/
/* 			if(url.indexOf("minPrice") != -1){*/
/* 				if(valueMin != "{{ minPrice }}"){*/
/* 					url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+valueMin);*/
/* 				}else{*/
/* 					url = url.replace(/(&minPrice=)[^\&]+/,'');*/
/* 					location.href= url;*/
/* 				}*/
/* 			}else{*/
/* 				url = url+'&minPrice='+valueMin;*/
/* 			}*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			$minPrice_new = valueMin;*/
/* 			requestAjax();*/
/* 		});*/
/* */
/* 		$('.content_min_max .input_max').change(function(){*/
/* 			var valueMax = $(this).val();*/
/* 			var minPrice__ = getUrlVars()["minPrice"];*/
/* 			if(typeof minPrice__ === 'undefined'){*/
/* 				$minPrice_new = {{ minPrice }};*/
/* 			}else{*/
/* 				$minPrice_new = minPrice__;*/
/* 			}*/
/* 			if(valueMax > {{ maxPrice }}){*/
/* 				valueMax = {{ maxPrice }};*/
/* 				$(this).val(valueMax);*/
/* 			}*/
/* 			if(valueMax < {{ minPrice }}){*/
/* 				valueMax = {{ maxPrice }};*/
/* 				$(this).val(valueMax);*/
/* 			}*/
/* 			range.noUiSlider.set([null, valueMax]);*/
/* 			if(url.indexOf("maxPrice") != -1){*/
/* 				if(valueMax != "{{ maxPrice }}"){*/
/* 					url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+valueMax);*/
/* 				}else{*/
/* 					url = url.replace(/(&maxPrice=)[^\&]+/,'');*/
/* 					location.href= url;*/
/* 				}*/
/* 			}else{*/
/* 				url = url+'&maxPrice='+valueMax;*/
/* 			}*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			$maxPrice_new = valueMax;*/
/* 			requestAjax();*/
/* 		});*/
/* 	{% endif %}*/
/* */
/* 	{% if disp_search_text %}*/
/* 		$('#text_search').keyup(function(){*/
/* 			var character = {{ character_search }};*/
/* 			text_search = $("#text_search").val();*/
/* 			if(text_search.length >= character){*/
/* 				if(url.indexOf("search") != -1){*/
/* 					if(text_search != ""){*/
/* 						url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);*/
/* 					}else{*/
/* 						url = url.replace(/(&search=)[^\&]+/,'');*/
/* 						location.href= url;*/
/* 					}*/
/* 				}else{*/
/* 					url = url+'&search='+text_search;*/
/* 				}*/
/* 				obj_class.find(".product-layout").css('display','none');*/
/* 				updateURL();*/
/* 				requestAjax();*/
/* 			}*/
/* 		});*/
/* */
/* 		$('#submit_text_search').on("click",function(){*/
/* 			text_search = $("#text_search").val();*/
/* 			if(url.indexOf("search") != -1){*/
/* 				if(text_search != ""){*/
/* 					url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);*/
/* 				}else{*/
/* 					url = url.replace(/(&search=)[^\&]+/,'');*/
/* 					location.href= url;*/
/* 				}*/
/* 			}else{*/
/* 				url = url+'&search='+text_search;*/
/* 			}*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			requestAjax();*/
/* 		});*/
/* 	{% endif %}*/
/* */
/* 	{% if disp_reset_all %}*/
/* 		$('.btn_resetAll').on("click",function(){*/
/* 			opt_value_id 		= "";*/
/* 			att_value_id 		= "";*/
/* 			manu_value_id 		= "";*/
/* 			$minPrice_new		= "",*/
/* 			$maxPrice_new 		= "",*/
/* 			text_search 		= "";*/
/* 			subcate_value_id	= "";*/
/* 			url = url.replace(/(&opt_id=)[^\&]+/,'');*/
/* 			url = url.replace(/(&att_id=)[^\&]+/,'');*/
/* 			url = url.replace(/(&manu_id=)[^\&]+/,'');*/
/* 			url = url.replace(/(&minPrice=)[^\&]+/,'');*/
/* 			url = url.replace(/(&maxPrice=)[^\&]+/,'');*/
/* 			url = url.replace(/(&search=)[^\&]+/,'');*/
/* 			url = url.replace(/(&subcate_id=)[^\&]+/,'');*/
/* 			obj_class.find(".product-layout").css('display','none');*/
/* 			updateURL();*/
/* 			$('.content_min_max .input_min').val($minPrice);*/
/* 			$('.content_min_max .input_max').val($maxPrice);*/
/* 			if(($minPrice != 0 || $maxPrice != 0) && ($minPrice != $maxPrice)){*/
/* 				range.noUiSlider.set([$minPrice, $maxPrice]);*/
/* 			}*/
/* 			*/
/* 			$(".so-filter-option").removeClass("opt_active");*/
/* 			$(".so-filter-option").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 			$(".so-filter-option").find(".option-count").removeClass("opt_close");*/
/* */
/* 			$(".so-filter-option-sub").removeClass("opt_active");*/
/* 			$(".so-filter-option-sub").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');*/
/* 			$(".so-filter-option-sub").find(".option-count").removeClass("opt_close");*/
/* */
/* 			$("#text_search").val('');*/
/* 			location.href= url;*/
/* 		});*/
/* 	{% endif %}*/
/* 	*/
/* 	function requestAjax(){*/
/* 		var page = (getUrlVars()["page"] === "undefined" ? "1" : getUrlVars()["page"]);*/
/* 		$.ajax({*/
/* 			type: 'POST',*/
/* 			url: 'index.php?route=extension/module/so_filter_shop_by/filter_data',*/
/* 			data: {*/
/* 				isFilterShopBy		: 1,*/
/* 				opt_value_id		: opt_value_id,*/
/* 				att_value_id		: att_value_id,*/
/* 				manu_value_id		: manu_value_id,*/
/* 				subcate_value_id	: subcate_value_id,*/
/* 				minPrice 			: $minPrice_new,*/
/* 				maxPrice 			: $maxPrice_new,*/
/* 				text_search 		: text_search,*/
/* 				category_id_path	: '{{ category_id_path }}',*/
/* 				page				: page,*/
/* 				product_id_in        : $('.so_filter_wrap .modcontent > ul').attr('data-product_id'),*/
/* 				product_arr_all 	: product_arr_all,*/
/* 				condition_search	: '{{ condition_search }}'*/
/* 			},*/
/* 			success: function (data) {*/
/* 				obj_class.html(data['html']);*/
/* 				var text_right = obj_class.find(".product-layout").parent().next().find('.text-right').html();*/
/* 				var text_left = obj_class.find(".product-layout").parent().next().find('.text-left').html();*/
/* 				var text_center = obj_class.find(".product-layout").parent().next().find('.short-by-show.text-center').html();*/
/* 				obj_class.next().find('.text-right').html(text_right);*/
/* 				obj_class.next().find('.text-left').html('');*/
/* 				obj_class.next().find('.short-by-show.text-center').html(text_center);*/
/* 				obj_class.next().find('.box-pagination.text-right').html('');*/
/* 				if(obj_class.find(".product-layout").length > 0){*/
/* 					var html = obj_class.find(".product-layout").eq(0).parent().html();*/
/* 					obj_class.html(html);*/
/* */
/* 				}else{*/
/* 					obj_class.html('<div class="col-xs-12">{{ text_empty }}</div>');*/
/* 					obj_class.next().find('.text-right').css('display','none');*/
/* 					obj_class.next().find('.short-by-show.text-center').css('display','none');*/
/* 				}*/
/* 				obj_class.find(".product-layout").fadeIn("show");*/
/* 				$(".so_filter_wrap .modcontent ul").attr("data-product_id",data['product_arr']);*/
/* 				$('#grid-view').click();*/
/* 				getCountProduct();*/
/* 				$load_gif.removeClass('loading-gif');*/
/* 			},*/
/* 			dataType: 'json'*/
/* 		});*/
/* 	}*/
/* */
/* });*/
/* //]]>*/
/* </script>*/
