<?php

/* so-mobile/template/extension/module/so_super_category/default_js.twig */
class __TwigTemplate_5f78721b138a8d6bcd391f2b5f35bb15ab43aaa300a81de4c84c2496712e8bfa extends Twig_Template
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
        echo "<script type=\"text/javascript\">
//<![CDATA[
jQuery(document).ready(function (\$) {
\t(function (element) {
\t\t var type_show = '";
        // line 5
        echo (isset($context["type_show"]) ? $context["type_show"] : null);
        echo "';
\t\tvar \$element = \$(element),
\t\t\t\$tab = \$('.spcat-tab', \$element),
\t\t\t\$tab_label = \$('.spcat-tab-label', \$tab),
\t\t\t\$tabs = \$('.spcat-tabs', \$element),
\t\t\tajax_url = \$tabs.parents('.spcat-tabs-container').attr('data-ajaxurl'),
\t\t\teffect = \$tabs.parents('.spcat-tabs-container').attr('data-effect'),
\t\t\tdelay = \$tabs.parents('.spcat-tabs-container').attr('data-delay'),
\t\t\tduration = \$tabs.parents('.spcat-tabs-container').attr('data-duration'),
\t\t\trl_moduleid = \$tabs.parents('.spcat-tabs-container').attr('data-modid'),
\t\t\t\$items_content = \$('.spcat-items', \$element),
\t\t\t\$items_inner = \$('.spcat-items-inner', \$items_content),
\t\t\t\$items_first_active = \$('.spcat-items-selected', \$element),
\t\t\t\$load_more = \$('.spcat-loadmore', \$element),
\t\t\t\$btn_loadmore = \$('.spcat-loadmore-btn', \$load_more),
\t\t\t\$select_box = \$('.spcat-selectbox', \$element),
\t\t\t\$id_cate = \$('.spcat-tab', \$element).attr('data-id-cate'),
\t\t\t\$tab_label_select = \$('.spcat-tab-selected', \$element),
\t\t\tsetting = '";
        // line 23
        echo (isset($context["setting"]) ? $context["setting"] : null);
        echo "',
\t\t\tcategory_id = \$('.sp-cat-title-parent', \$element).attr('data-catids');
\t\t\t

\t\tenableSelectBoxes();
\t\tfunction enableSelectBoxes() {
\t\t\t\$tab_wrap = \$('.spcat-tabs-wrap', \$element);
\t\t\t\t\$tab_label_select.html(\$('.spcat-tab', \$element).filter('.tab-sel').children('.spcat-tab-label').html());
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$tab_wrap.addClass('spcat-selectbox');
\t\t\t} else {
\t\t\t\t\$tab_wrap.removeClass('spcat-selectbox');
\t\t\t}
\t\t}

\t\t\$('span.spcat-tab-selected, span.spcat-tab-arrow', \$element).click(function () {
\t\t\tif (\$('.spcat-tabs', \$element).hasClass('spcat-open')) {
\t\t\t\t\$('.spcat-tabs', \$element).removeClass('spcat-open');
\t\t\t} else {
\t\t\t\t\$('.spcat-tabs', \$element).addClass('spcat-open');
\t\t\t}
\t\t});

\t\t\$(window).resize(function () {
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$('.spcat-tabs-wrap', \$element).addClass('spcat-selectbox');
\t\t\t} else {
\t\t\t\t\$('.spcat-tabs-wrap', \$element).removeClass('spcat-selectbox');
\t\t\t}
\t\t});

\t\tfunction showAnimateItems(el) {
\t\t\tvar \$_items = \$('.new-spcat-item', el), nub = 0;
\t\t\t\$('.spcat-loadmore-btn', el).fadeOut('fast');
\t\t\t\$_items.each(function (i) {
\t\t\t\tnub++;
\t\t\t\tswitch(effect) {
\t\t\t\t\tcase 'none' : \$(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
\t\t\t\t\tdefault: animatesItems(\$(this),nub*delay,i,el);
\t\t\t\t}
\t\t\t\tif (i == \$_items.length - 1) {
\t\t\t\t\t\$('.spcat-loadmore-btn', el).fadeIn(delay);
\t\t\t\t}
\t\t\t\t\$(this).removeClass('new-spcat-item');
\t\t\t});
\t\t}

\t\tfunction animatesItems(\$this,fdelay,i,el) {
\t\t\tvar \$_items = \$('.spcat-item', el);
\t\t\t\$this.attr(\"style\",
\t\t\t\t\"-webkit-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-o-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-webkit-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-o-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"animation-delay:\" + fdelay + \"ms;\").delay(fdelay).animate({
\t\t\t\t\topacity: 1,
\t\t\t\t\tfilter: 'alpha(opacity = 100)'
\t\t\t\t}, {
\t\t\t\t\tdelay: 100
\t\t\t\t});
\t\t\tif (i == (\$_items.length - 1)) {
\t\t\t\t\$(\".spcat-items-inner\").addClass(\"play\");
\t\t\t}
\t\t}

\t\tshowAnimateItems(\$items_first_active);
\t\t\$tab.on('click.spcat-tab', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('tab-sel')) return false;
\t\t\tif (\$this.parents('.spcat-tabs').hasClass('spcat-open')) {
\t\t\t\t\$this.parents('.spcat-tabs').removeClass('spcat-open');
\t\t\t}
\t\t\t\$tab.removeClass('tab-sel');
\t\t\t\$this.addClass('tab-sel');
\t\t\tvar items_active = \$this.attr('data-active-content');

\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\$items_content.removeClass('spcat-items-selected');
\t\t\t_items_active.addClass('spcat-items-selected');
\t\t\t\$tab_label_select.html(\$tab.filter('.tab-sel').children('.spcat-tab-label').html());
\t\t\tvar \$loading = \$('.spcat-loading', _items_active);
\t\t\tvar loaded = _items_active.hasClass('spcat-items-loaded');
\t\t\tif (!loaded && !_items_active.hasClass('spcat-process')) {
\t\t\t\t_items_active.addClass('spcat-process');
\t\t\t\tvar field_order = \$this.attr('data-field_order');
\t\t\t\t\$loading.show();
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: ajax_url,
\t\t\t\t\tdata: {
\t\t\t\t\t\tspcat_module_id: rl_moduleid,
\t\t\t\t\t\tis_ajax_super_category: 1,
\t\t\t\t\t\tajax_limit_start: 0,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tfieldorder:field_order,
\t\t\t\t\t\tsetting : setting,
\t\t\t\t\t\tajax_reslisting_start: 0,
\t\t\t\t\t\tlbmoduleid: '";
        // line 122
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "'
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$('.spcat-items-inner', _items_active).html(data.items_markup);
\t\t\t\t\t\t\t_items_active.addClass('spcat-items-loaded').removeClass('spcat-process');
\t\t\t\t\t\t\t\$loading.remove();
\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t\tif(type_show == 'slider'){
\t\t\t\t\t\t\t\tvar \$tag_id = \$('#";
        // line 132
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "'),
\t\t\t\t\t\t\t\t\tparent_active = \t\$('.spcat-items-selected', \$tag_id),
\t\t\t\t\t\t\t\t\ttotal_product = parent_active.data('total'),
\t\t\t\t\t\t\t\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\t\t\t\t\t\t\t\tnb_column0 = ";
        // line 136
        echo (isset($context["product_column0"]) ? $context["product_column0"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnb_column1 = ";
        // line 137
        echo (isset($context["product_column1"]) ? $context["product_column1"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnb_column2 = ";
        // line 138
        echo (isset($context["product_column2"]) ? $context["product_column2"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnb_column3 = ";
        // line 139
        echo (isset($context["product_column3"]) ? $context["product_column3"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnb_column4 = ";
        // line 140
        echo (isset($context["product_column4"]) ? $context["product_column4"] : null);
        echo ";

\t\t\t\t\t\t\t\ttab_active.owlCarousel2({
\t\t\t\t\t\t\t\t\trtl: ";
        // line 143
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnav: ";
        // line 144
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\t\t\tmargin: 0,
\t\t\t\t\t\t\t\t\tloop:  ";
        // line 147
        echo (isset($context["slider_display_loop"]) ? $context["slider_display_loop"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tautoplay: ";
        // line 148
        echo (isset($context["slider_auto_play"]) ? $context["slider_auto_play"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tautoplayHoverPause: ";
        // line 149
        echo (isset($context["slider_auto_hover_pause"]) ? $context["slider_auto_hover_pause"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tautoplayTimeout: ";
        // line 150
        echo (isset($context["slider_auto_interval_timeout"]) ? $context["slider_auto_interval_timeout"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tautoplaySpeed: ";
        // line 151
        echo (isset($context["slider_auto_play_speed"]) ? $context["slider_auto_play_speed"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tmouseDrag: ";
        // line 152
        echo (isset($context["slider_mouse_drag"]) ? $context["slider_mouse_drag"] : null);
        echo ",
\t\t\t\t\t\t\t\t\ttouchDrag: ";
        // line 153
        echo (isset($context["slider_touch_drag"]) ? $context["slider_touch_drag"] : null);
        echo ",
\t\t\t\t\t\t\t\t\tnavRewind: true,
\t\t\t\t\t\t\t\t\tnavText: [ '', '' ],
\t\t\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\t\t\titems: nb_column4,
\t\t\t\t\t\t\t\t\t\t\tnav: (total_product/";
        // line 159
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo ") >= nb_column4  ? ";
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo " : false,
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t480: {
\t\t\t\t\t\t\t\t\t\t\titems: nb_column3,
\t\t\t\t\t\t\t\t\t\t\tnav: (total_product/";
        // line 163
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo ") >= nb_column3 ? ";
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo " : false,
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t768: {
\t\t\t\t\t\t\t\t\t\t\titems: nb_column2,
\t\t\t\t\t\t\t\t\t\t\tnav: (total_product/";
        // line 167
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo ") >= nb_column2 ? ";
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo " : false,
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t992: { 
\t\t\t\t\t\t\t\t\t\t\titems: nb_column1,
\t\t\t\t\t\t\t\t\t\t\tnav: (total_product/";
        // line 171
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo ") >= nb_column1 ? ";
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo " : false,
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t1200: {
\t\t\t\t\t\t\t\t\t\t\titems: nb_column0,
\t\t\t\t\t\t\t\t\t\t\tnav: (total_product/";
        // line 175
        echo (isset($context["rows"]) ? $context["rows"] : null);
        echo ") >= nb_column0  ? ";
        echo (isset($context["slider_display_navigation"]) ? $context["slider_display_navigation"] : null);
        echo " : false,
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
                         \t}
\t\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tdataType: 'json'
\t\t\t\t});

\t\t\t} else {
\t\t\t\t\$('.spcat-item', \$items_content).removeAttr('style').addClass('new-spcat-item').css('opacity',0);
\t\t\t\tshowAnimateItems(_items_active);
\t\t\t}
\t\t});

\t\tfunction updateStatus(\$el) {
\t\t\t\$('.spcat-loadmore-btn', \$el).removeClass('loading');
\t\t\tvar countitem = \$('.spcat-item', \$el).length;
\t\t\t\$('.spcat-image-loading', \$el).css({display: 'none'});
\t\t\t\$('.spcat-loadmore-btn', \$el).parent().attr('data-rl_start', countitem);
\t\t\tvar rl_total = \$('.spcat-loadmore-btn', \$el).parent().attr('data-rl_total');
\t\t\tvar rl_load = \$('.spcat-loadmore-btn', \$el).parent().attr('data-rl_load');
\t\t\tvar rl_allready = \$('.spcat-loadmore-btn', \$el).parent().attr('data-rl_allready');

\t\t\tif (countitem >= rl_total) {
\t\t\t\t\$('.spcat-loadmore-btn', \$el).addClass('loaded');
\t\t\t\t\$('.spcat-image-loading', \$el).css({display: 'none'});
\t\t\t\t\$('.spcat-loadmore-btn', \$el).attr('data-label', rl_allready);
\t\t\t\t\$('.spcat-loadmore-btn', \$el).removeClass('loading');
\t\t\t}
\t\t}

\t\t\$btn_loadmore.on('click.loadmore', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('loaded') || \$this.hasClass('loading')) {
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\t\$this.addClass('loading');
\t\t\t\t\$('.spcat-image-loading', \$this).css({display: 'inline-block'});
\t\t\t\tvar rl_start = \$this.parent().attr('data-rl_start'),
\t\t\t\t\trl_moduleid = \$this.parent().attr('data-modid'),
\t\t\t\t\trl_ajaxurl = \$this.parent().attr('data-ajaxurl'),
\t\t\t\t\teffect = \$this.parent().attr('data-effect'),
\t\t\t\t\tfield_order = \$this.parent().attr('data-field_order'),
\t\t\t\t\titems_active = \$this.parent().attr('data-active-content');
\t\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: rl_ajaxurl,
\t\t\t\t\tdata: {
\t\t\t\t\t\tspcat_module_id: rl_moduleid,
\t\t\t\t\t\tis_ajax_super_category: 1,
\t\t\t\t\t\tajax_reslisting_start: rl_start,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tfieldorder: field_order,
\t\t\t\t\t\tsetting : setting,
\t\t\t\t\t\tload_more:1,
\t\t\t\t\t\tlbmoduleid: '";
        // line 236
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "'
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$(data.items_markup).insertAfter(\$('.spcat-item', _items_active).nextAll().last());
\t\t\t\t\t\t\t\$('.spcat-image-loading', \$this).css({display: 'none'});
\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t}
\t\t\t\t\t}, dataType: 'json'
\t\t\t\t});
\t\t\t}
\t\t\treturn false;
\t\t});
\t\t
\t\t";
        // line 254
        if ((((isset($context["show_category_type"]) ? $context["show_category_type"] : null) == 1) && ((isset($context["display_slide_category"]) ? $context["display_slide_category"] : null) == 1))) {
            // line 255
            echo "\t\t\tvar \$cat_slider_inner = \$('.cat_slider_inner',element);
\t\t\t\$cat_slider_inner.owlCarousel2({
\t\t\t\trtl: ";
            // line 257
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\tcenter: ";
            // line 258
            echo (isset($context["subcategory_center"]) ? $context["subcategory_center"] : null);
            echo ",
\t\t\t\tnav: ";
            // line 259
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo ",
\t\t\t\tloop: ";
            // line 260
            echo (isset($context["subcategory_display_loop"]) ? $context["subcategory_display_loop"] : null);
            echo ",
\t\t\t\tstartPosition: ";
            // line 261
            echo (isset($context["subcategory_start_position"]) ? $context["subcategory_start_position"] : null);
            echo ",
\t\t\t\tslideBy: ";
            // line 262
            echo (isset($context["subcategory_slideby"]) ? $context["subcategory_slideby"] : null);
            echo ",
\t\t\t\tmargin: ";
            // line 263
            echo (isset($context["subcategory_margin_right"]) ? $context["subcategory_margin_right"] : null);
            echo ",
\t\t\t\tnavText: [ 'prev', 'next' ],
\t\t\t\tautoplay: ";
            // line 265
            echo (isset($context["subcategory_auto_play"]) ? $context["subcategory_auto_play"] : null);
            echo ",
\t\t\t\tautoplayHoverPause: ";
            // line 266
            echo (isset($context["subcategory_auto_hover_pause"]) ? $context["subcategory_auto_hover_pause"] : null);
            echo ",
\t\t\t\tautoplayTimeout: ";
            // line 267
            echo (isset($context["subcategory_auto_interval_timeout"]) ? $context["subcategory_auto_interval_timeout"] : null);
            echo ",
\t\t\t\tautoplaySpeed: ";
            // line 268
            echo (isset($context["subcategory_auto_play_speed"]) ? $context["subcategory_auto_play_speed"] : null);
            echo ",
\t\t\t\tnavSpeed: ";
            // line 269
            echo (isset($context["subcategory_navigation_speed"]) ? $context["subcategory_navigation_speed"] : null);
            echo ",
\t\t\t\tmouseDrag: ";
            // line 270
            echo (isset($context["subcategory_mouse_drag"]) ? $context["subcategory_mouse_drag"] : null);
            echo ",
\t\t\t\ttouchDrag: ";
            // line 271
            echo (isset($context["subcategory_touch_drag"]) ? $context["subcategory_touch_drag"] : null);
            echo ",
\t\t\t\tdots: false,
\t\t\t\tautoWidth: false,
\t            navClass: [ 'owl2-prev', 'owl2-next' ],
\t\t\t\tresponsive: {
\t\t\t\t\t0: {
\t\t\t\t\t\titems: ";
            // line 277
            echo (isset($context["category_column4"]) ? $context["category_column4"] : null);
            echo ",
\t\t\t\t\t\tnav: (";
            // line 278
            echo twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
            echo " - 1 > ";
            echo (isset($context["category_column4"]) ? $context["category_column4"] : null);
            echo ") ? ";
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t480: {
\t\t\t\t\t\titems: ";
            // line 281
            echo (isset($context["category_column3"]) ? $context["category_column3"] : null);
            echo ",
\t\t\t\t\t\tnav: (";
            // line 282
            echo twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
            echo " - 1 > ";
            echo (isset($context["category_column3"]) ? $context["category_column3"] : null);
            echo ") ? ";
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t768: {
\t\t\t\t\t\titems: ";
            // line 285
            echo (isset($context["category_column2"]) ? $context["category_column2"] : null);
            echo ",
\t\t\t\t\t\tnav: (";
            // line 286
            echo twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
            echo " - 1 > ";
            echo (isset($context["category_column2"]) ? $context["category_column2"] : null);
            echo ") ? ";
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t992: {
\t\t\t\t\t\titems: ";
            // line 289
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo ",
\t\t\t\t\t\tnav: (";
            // line 290
            echo twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
            echo " - 1 > ";
            echo (isset($context["category_column1"]) ? $context["category_column1"] : null);
            echo ") ? ";
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo " : false
\t\t\t\t\t},
\t\t\t\t\t1200: {
\t\t\t\t\t\titems: ";
            // line 293
            echo (isset($context["category_column0"]) ? $context["category_column0"] : null);
            echo ",
\t\t\t\t\t\tnav: (";
            // line 294
            echo twig_length_filter($this->env, (isset($context["category_tree"]) ? $context["category_tree"] : null));
            echo " - 1 > ";
            echo (isset($context["category_column0"]) ? $context["category_column0"] : null);
            echo ") ? ";
            echo (isset($context["subcategory_display_navigation"]) ? $context["subcategory_display_navigation"] : null);
            echo " : false
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t";
        }
        // line 299
        echo "\t})('#";
        echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
        echo "');
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_super_category/default_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 299,  484 => 294,  480 => 293,  470 => 290,  466 => 289,  456 => 286,  452 => 285,  442 => 282,  438 => 281,  428 => 278,  424 => 277,  415 => 271,  411 => 270,  407 => 269,  403 => 268,  399 => 267,  395 => 266,  391 => 265,  386 => 263,  382 => 262,  378 => 261,  374 => 260,  370 => 259,  366 => 258,  362 => 257,  358 => 255,  356 => 254,  335 => 236,  269 => 175,  260 => 171,  251 => 167,  242 => 163,  233 => 159,  224 => 153,  220 => 152,  216 => 151,  212 => 150,  208 => 149,  204 => 148,  200 => 147,  194 => 144,  190 => 143,  184 => 140,  180 => 139,  176 => 138,  172 => 137,  168 => 136,  161 => 132,  148 => 122,  46 => 23,  25 => 5,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* jQuery(document).ready(function ($) {*/
/* 	(function (element) {*/
/* 		 var type_show = '{{ type_show }}';*/
/* 		var $element = $(element),*/
/* 			$tab = $('.spcat-tab', $element),*/
/* 			$tab_label = $('.spcat-tab-label', $tab),*/
/* 			$tabs = $('.spcat-tabs', $element),*/
/* 			ajax_url = $tabs.parents('.spcat-tabs-container').attr('data-ajaxurl'),*/
/* 			effect = $tabs.parents('.spcat-tabs-container').attr('data-effect'),*/
/* 			delay = $tabs.parents('.spcat-tabs-container').attr('data-delay'),*/
/* 			duration = $tabs.parents('.spcat-tabs-container').attr('data-duration'),*/
/* 			rl_moduleid = $tabs.parents('.spcat-tabs-container').attr('data-modid'),*/
/* 			$items_content = $('.spcat-items', $element),*/
/* 			$items_inner = $('.spcat-items-inner', $items_content),*/
/* 			$items_first_active = $('.spcat-items-selected', $element),*/
/* 			$load_more = $('.spcat-loadmore', $element),*/
/* 			$btn_loadmore = $('.spcat-loadmore-btn', $load_more),*/
/* 			$select_box = $('.spcat-selectbox', $element),*/
/* 			$id_cate = $('.spcat-tab', $element).attr('data-id-cate'),*/
/* 			$tab_label_select = $('.spcat-tab-selected', $element),*/
/* 			setting = '{{ setting }}',*/
/* 			category_id = $('.sp-cat-title-parent', $element).attr('data-catids');*/
/* 			*/
/* */
/* 		enableSelectBoxes();*/
/* 		function enableSelectBoxes() {*/
/* 			$tab_wrap = $('.spcat-tabs-wrap', $element);*/
/* 				$tab_label_select.html($('.spcat-tab', $element).filter('.tab-sel').children('.spcat-tab-label').html());*/
/* 			if ($(window).innerWidth() <= 991) {*/
/* 				$tab_wrap.addClass('spcat-selectbox');*/
/* 			} else {*/
/* 				$tab_wrap.removeClass('spcat-selectbox');*/
/* 			}*/
/* 		}*/
/* */
/* 		$('span.spcat-tab-selected, span.spcat-tab-arrow', $element).click(function () {*/
/* 			if ($('.spcat-tabs', $element).hasClass('spcat-open')) {*/
/* 				$('.spcat-tabs', $element).removeClass('spcat-open');*/
/* 			} else {*/
/* 				$('.spcat-tabs', $element).addClass('spcat-open');*/
/* 			}*/
/* 		});*/
/* */
/* 		$(window).resize(function () {*/
/* 			if ($(window).innerWidth() <= 991) {*/
/* 				$('.spcat-tabs-wrap', $element).addClass('spcat-selectbox');*/
/* 			} else {*/
/* 				$('.spcat-tabs-wrap', $element).removeClass('spcat-selectbox');*/
/* 			}*/
/* 		});*/
/* */
/* 		function showAnimateItems(el) {*/
/* 			var $_items = $('.new-spcat-item', el), nub = 0;*/
/* 			$('.spcat-loadmore-btn', el).fadeOut('fast');*/
/* 			$_items.each(function (i) {*/
/* 				nub++;*/
/* 				switch(effect) {*/
/* 					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;*/
/* 					default: animatesItems($(this),nub*delay,i,el);*/
/* 				}*/
/* 				if (i == $_items.length - 1) {*/
/* 					$('.spcat-loadmore-btn', el).fadeIn(delay);*/
/* 				}*/
/* 				$(this).removeClass('new-spcat-item');*/
/* 			});*/
/* 		}*/
/* */
/* 		function animatesItems($this,fdelay,i,el) {*/
/* 			var $_items = $('.spcat-item', el);*/
/* 			$this.attr("style",*/
/* 				"-webkit-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-moz-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-o-animation:" + effect +" "+ duration +"ms;"*/
/* 				+ "-moz-animation-delay:" + fdelay + "ms;"*/
/* 				+ "-webkit-animation-delay:" + fdelay + "ms;"*/
/* 				+ "-o-animation-delay:" + fdelay + "ms;"*/
/* 				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({*/
/* 					opacity: 1,*/
/* 					filter: 'alpha(opacity = 100)'*/
/* 				}, {*/
/* 					delay: 100*/
/* 				});*/
/* 			if (i == ($_items.length - 1)) {*/
/* 				$(".spcat-items-inner").addClass("play");*/
/* 			}*/
/* 		}*/
/* */
/* 		showAnimateItems($items_first_active);*/
/* 		$tab.on('click.spcat-tab', function () {*/
/* 			var $this = $(this);*/
/* 			if ($this.hasClass('tab-sel')) return false;*/
/* 			if ($this.parents('.spcat-tabs').hasClass('spcat-open')) {*/
/* 				$this.parents('.spcat-tabs').removeClass('spcat-open');*/
/* 			}*/
/* 			$tab.removeClass('tab-sel');*/
/* 			$this.addClass('tab-sel');*/
/* 			var items_active = $this.attr('data-active-content');*/
/* */
/* 			var _items_active = $(items_active,$element);*/
/* 			$items_content.removeClass('spcat-items-selected');*/
/* 			_items_active.addClass('spcat-items-selected');*/
/* 			$tab_label_select.html($tab.filter('.tab-sel').children('.spcat-tab-label').html());*/
/* 			var $loading = $('.spcat-loading', _items_active);*/
/* 			var loaded = _items_active.hasClass('spcat-items-loaded');*/
/* 			if (!loaded && !_items_active.hasClass('spcat-process')) {*/
/* 				_items_active.addClass('spcat-process');*/
/* 				var field_order = $this.attr('data-field_order');*/
/* 				$loading.show();*/
/* 				$.ajax({*/
/* 					type: 'POST',*/
/* 					url: ajax_url,*/
/* 					data: {*/
/* 						spcat_module_id: rl_moduleid,*/
/* 						is_ajax_super_category: 1,*/
/* 						ajax_limit_start: 0,*/
/* 						categoryid: category_id,*/
/* 						fieldorder:field_order,*/
/* 						setting : setting,*/
/* 						ajax_reslisting_start: 0,*/
/* 						lbmoduleid: '{{ moduleid }}'*/
/* 					},*/
/* 					success: function (data) {*/
/* 						if (data.items_markup != '') {*/
/* 							$('.spcat-items-inner', _items_active).html(data.items_markup);*/
/* 							_items_active.addClass('spcat-items-loaded').removeClass('spcat-process');*/
/* 							$loading.remove();*/
/* 							showAnimateItems(_items_active);*/
/* 							updateStatus(_items_active);*/
/* 							if(type_show == 'slider'){*/
/* 								var $tag_id = $('#{{ tag_id }}'),*/
/* 									parent_active = 	$('.spcat-items-selected', $tag_id),*/
/* 									total_product = parent_active.data('total'),*/
/* 									tab_active = $('.ltabs-items-inner',parent_active),*/
/* 									nb_column0 = {{ product_column0 }},*/
/* 									nb_column1 = {{ product_column1 }},*/
/* 									nb_column2 = {{ product_column2 }},*/
/* 									nb_column3 = {{ product_column3 }},*/
/* 									nb_column4 = {{ product_column4 }};*/
/* */
/* 								tab_active.owlCarousel2({*/
/* 									rtl: {{ direction }},*/
/* 									nav: {{ slider_display_navigation }},*/
/* 									dots: false,*/
/* 									margin: 0,*/
/* 									loop:  {{ slider_display_loop }},*/
/* 									autoplay: {{ slider_auto_play }},*/
/* 									autoplayHoverPause: {{ slider_auto_hover_pause }},*/
/* 									autoplayTimeout: {{ slider_auto_interval_timeout }},*/
/* 									autoplaySpeed: {{ slider_auto_play_speed }},*/
/* 									mouseDrag: {{ slider_mouse_drag }},*/
/* 									touchDrag: {{ slider_touch_drag }},*/
/* 									navRewind: true,*/
/* 									navText: [ '', '' ],*/
/* 									responsive: {*/
/* 										0: {*/
/* 											items: nb_column4,*/
/* 											nav: (total_product/{{rows }}) >= nb_column4  ? {{ slider_display_navigation }} : false,*/
/* 										},*/
/* 										480: {*/
/* 											items: nb_column3,*/
/* 											nav: (total_product/{{ rows }}) >= nb_column3 ? {{ slider_display_navigation }} : false,*/
/* 										},*/
/* 										768: {*/
/* 											items: nb_column2,*/
/* 											nav: (total_product/{{ rows }}) >= nb_column2 ? {{ slider_display_navigation }} : false,*/
/* 										},*/
/* 										992: { */
/* 											items: nb_column1,*/
/* 											nav: (total_product/{{ rows }}) >= nb_column1 ? {{ slider_display_navigation }} : false,*/
/* 											},*/
/* 										1200: {*/
/* 											items: nb_column0,*/
/* 											nav: (total_product/{{ rows }}) >= nb_column0  ? {{ slider_display_navigation }} : false,*/
/* 										},*/
/* 									}*/
/* 								});*/
/*                          	}*/
/* 							if(typeof(_SoQuickView) != 'undefined'){*/
/* 								_SoQuickView();*/
/* 							}*/
/* 						}*/
/* 					},*/
/* 					dataType: 'json'*/
/* 				});*/
/* */
/* 			} else {*/
/* 				$('.spcat-item', $items_content).removeAttr('style').addClass('new-spcat-item').css('opacity',0);*/
/* 				showAnimateItems(_items_active);*/
/* 			}*/
/* 		});*/
/* */
/* 		function updateStatus($el) {*/
/* 			$('.spcat-loadmore-btn', $el).removeClass('loading');*/
/* 			var countitem = $('.spcat-item', $el).length;*/
/* 			$('.spcat-image-loading', $el).css({display: 'none'});*/
/* 			$('.spcat-loadmore-btn', $el).parent().attr('data-rl_start', countitem);*/
/* 			var rl_total = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_total');*/
/* 			var rl_load = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_load');*/
/* 			var rl_allready = $('.spcat-loadmore-btn', $el).parent().attr('data-rl_allready');*/
/* */
/* 			if (countitem >= rl_total) {*/
/* 				$('.spcat-loadmore-btn', $el).addClass('loaded');*/
/* 				$('.spcat-image-loading', $el).css({display: 'none'});*/
/* 				$('.spcat-loadmore-btn', $el).attr('data-label', rl_allready);*/
/* 				$('.spcat-loadmore-btn', $el).removeClass('loading');*/
/* 			}*/
/* 		}*/
/* */
/* 		$btn_loadmore.on('click.loadmore', function () {*/
/* 			var $this = $(this);*/
/* 			if ($this.hasClass('loaded') || $this.hasClass('loading')) {*/
/* 				return false;*/
/* 			} else {*/
/* 				$this.addClass('loading');*/
/* 				$('.spcat-image-loading', $this).css({display: 'inline-block'});*/
/* 				var rl_start = $this.parent().attr('data-rl_start'),*/
/* 					rl_moduleid = $this.parent().attr('data-modid'),*/
/* 					rl_ajaxurl = $this.parent().attr('data-ajaxurl'),*/
/* 					effect = $this.parent().attr('data-effect'),*/
/* 					field_order = $this.parent().attr('data-field_order'),*/
/* 					items_active = $this.parent().attr('data-active-content');*/
/* 				var _items_active = $(items_active,$element);*/
/* 				$.ajax({*/
/* 					type: 'POST',*/
/* 					url: rl_ajaxurl,*/
/* 					data: {*/
/* 						spcat_module_id: rl_moduleid,*/
/* 						is_ajax_super_category: 1,*/
/* 						ajax_reslisting_start: rl_start,*/
/* 						categoryid: category_id,*/
/* 						fieldorder: field_order,*/
/* 						setting : setting,*/
/* 						load_more:1,*/
/* 						lbmoduleid: '{{ moduleid }}'*/
/* 					},*/
/* 					success: function (data) {*/
/* 						if (data.items_markup != '') {*/
/* 							$(data.items_markup).insertAfter($('.spcat-item', _items_active).nextAll().last());*/
/* 							$('.spcat-image-loading', $this).css({display: 'none'});*/
/* 							showAnimateItems(_items_active);*/
/* 							updateStatus(_items_active);*/
/* 						}*/
/* 						if(typeof(_SoQuickView) != 'undefined'){*/
/* 							_SoQuickView();*/
/* 						}*/
/* 					}, dataType: 'json'*/
/* 				});*/
/* 			}*/
/* 			return false;*/
/* 		});*/
/* 		*/
/* 		{% if show_category_type == 1 and display_slide_category == 1 %}*/
/* 			var $cat_slider_inner = $('.cat_slider_inner',element);*/
/* 			$cat_slider_inner.owlCarousel2({*/
/* 				rtl: {{ direction }},*/
/* 				center: {{ subcategory_center }},*/
/* 				nav: {{ subcategory_display_navigation }},*/
/* 				loop: {{ subcategory_display_loop }},*/
/* 				startPosition: {{ subcategory_start_position }},*/
/* 				slideBy: {{ subcategory_slideby }},*/
/* 				margin: {{ subcategory_margin_right }},*/
/* 				navText: [ 'prev', 'next' ],*/
/* 				autoplay: {{ subcategory_auto_play }},*/
/* 				autoplayHoverPause: {{ subcategory_auto_hover_pause }},*/
/* 				autoplayTimeout: {{ subcategory_auto_interval_timeout }},*/
/* 				autoplaySpeed: {{ subcategory_auto_play_speed }},*/
/* 				navSpeed: {{ subcategory_navigation_speed }},*/
/* 				mouseDrag: {{ subcategory_mouse_drag }},*/
/* 				touchDrag: {{ subcategory_touch_drag }},*/
/* 				dots: false,*/
/* 				autoWidth: false,*/
/* 	            navClass: [ 'owl2-prev', 'owl2-next' ],*/
/* 				responsive: {*/
/* 					0: {*/
/* 						items: {{ category_column4 }},*/
/* 						nav: ({{ category_tree|length }} - 1 > {{ category_column4 }}) ? {{ subcategory_display_navigation }} : false*/
/* 					},*/
/* 					480: {*/
/* 						items: {{ category_column3 }},*/
/* 						nav: ({{ category_tree|length }} - 1 > {{ category_column3 }}) ? {{ subcategory_display_navigation }} : false*/
/* 					},*/
/* 					768: {*/
/* 						items: {{ category_column2 }},*/
/* 						nav: ({{ category_tree|length }} - 1 > {{ category_column2 }}) ? {{ subcategory_display_navigation }} : false*/
/* 					},*/
/* 					992: {*/
/* 						items: {{ nb_column1 }},*/
/* 						nav: ({{ category_tree|length }} - 1 > {{ category_column1 }}) ? {{ subcategory_display_navigation }} : false*/
/* 					},*/
/* 					1200: {*/
/* 						items: {{ category_column0 }},*/
/* 						nav: ({{ category_tree|length }} - 1 > {{ category_column0 }}) ? {{ subcategory_display_navigation }} : false*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		{% endif %}*/
/* 	})('#{{ tag_id }}');*/
/* });*/
/* //]]>*/
/* </script>*/
