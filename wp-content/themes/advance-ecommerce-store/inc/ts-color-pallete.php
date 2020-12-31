<?php
	
	$advance_ecommerce_store_theme_color = get_theme_mod('advance_ecommerce_store_theme_color');

	$advance_ecommerce_store_custom_css = '';

	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#sidebar .tagcloud a:hover,.top-menu,.main-menu, .account a i, span.cart-value, .categry-title, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .product-service, .second-border a:hover, #footer input[type="submit"], .copyright, woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar h3, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce span.onsale, #footer .tagcloud a:hover, input[type="submit"],#res-sidebar input[type="submit"],#comments a.comment-reply-link ,.tags p a:hover,#sidebar .tagcloud a, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .read-moresec a.button{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .=' #footer .woocommerce a.button:hover, .woocommerce button.button:hover{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).' !important;';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#footer h3, .woocommerce-message::before, #footer h3,.woocommerce-message::before, .primary-navigation ul ul a, .primary-navigation a:hover, #footer li a:hover,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation a:focus,.sf-arrows ul .sf-with-ul:after, .sf-arrows ul li > .sf-with-ul:focus:after,.sf-arrows ul li:hover > .sf-with-ul:after,.sf-arrows .sfHover > .sf-with-ul:after,.primary-navigation li a:hover, .primary-navigation li:hover a,.tags i,.metabox a:hover,#footer a.rsswidget, .primary-navigation ul ul li:hover > a{';
			$advance_ecommerce_store_custom_css .='color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='.woocommerce-message, hr.slidehr,.primary-navigation ul ul{';
			$advance_ecommerce_store_custom_css .='border-top-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='#footer .tagcloud a:hover,.page-box, #footer input[type="search"],.primary-navigation ul, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
			$advance_ecommerce_store_custom_css .='border-color: '.esc_attr($advance_ecommerce_store_theme_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}
	if($advance_ecommerce_store_theme_color != false){
		$advance_ecommerce_store_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_theme_color).'!important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// media
	$advance_ecommerce_store_custom_css .='@media screen and (max-width:1000px) {';
	if($advance_ecommerce_store_theme_color){
	$advance_ecommerce_store_custom_css .='#res-sidebar, .primary-navigation ul ul a,.primary-navigation a:focus, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul,#contact-info{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($advance_ecommerce_store_theme_color).' 120%);
		}';
	}
	$advance_ecommerce_store_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_theme_options','Default');
    if($advance_ecommerce_store_theme_lay == 'Default'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='max-width: 100%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_ecommerce_store_custom_css .='width: 97.3%';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Container'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_ecommerce_store_custom_css .='width: 97.7%';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Box Container'){
		$advance_ecommerce_store_custom_css .='body{';
			$advance_ecommerce_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='#header{';
			$advance_ecommerce_store_custom_css .='right:0';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_slider_content_alignment','Left');
    if($advance_ecommerce_store_theme_lay == 'Left'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:left; left:15%; right:45%;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Center'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:center; left:20%; right:20%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='hr.slidehr{';
			$advance_ecommerce_store_custom_css .='margin: 0 auto;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Right'){
		$advance_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_ecommerce_store_custom_css .='text-align:right; left:45%; right:15%;';
		$advance_ecommerce_store_custom_css .='}';
		$advance_ecommerce_store_custom_css .='hr.slidehr{';
			$advance_ecommerce_store_custom_css .='margin: 0 0 0 auto;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_slider_image_opacity','0.7');
	if($advance_ecommerce_store_theme_lay == '0'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.1'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.1';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.2'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.2';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.3'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.3';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.4'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.4';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.5'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.5';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.6'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.6';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.7'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.7';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.8'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.8';
		$advance_ecommerce_store_custom_css .='}';
		}else if($advance_ecommerce_store_theme_lay == '0.9'){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:0.9';
		$advance_ecommerce_store_custom_css .='}';
		}

	/*------------------------------ Button Settings option-----------------------*/
	$advance_ecommerce_store_button_padding_top_bottom = get_theme_mod('advance_ecommerce_store_button_padding_top_bottom');
	$advance_ecommerce_store_button_padding_left_right = get_theme_mod('advance_ecommerce_store_button_padding_left_right');
	if($advance_ecommerce_store_button_padding_top_bottom != false || $advance_ecommerce_store_button_padding_left_right != false){
		$advance_ecommerce_store_custom_css .='.second-border a, #slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_button_padding_top_bottom).'px; padding-left: '.esc_attr($advance_ecommerce_store_button_padding_left_right).'px; padding-right: '.esc_attr($advance_ecommerce_store_button_padding_left_right).'px; display:inline-block;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_button_border_radius = get_theme_mod('advance_ecommerce_store_button_border_radius');
	if($advance_ecommerce_store_button_border_radius != false){
		$advance_ecommerce_store_custom_css .='.second-border a,#slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_button_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/
	$advance_ecommerce_store_stickyheader = get_theme_mod( 'advance_ecommerce_store_responsive_sticky_header',false);
	if($advance_ecommerce_store_stickyheader == true && get_theme_mod( 'advance_ecommerce_store_sticky_header', false) == false){
    	$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:static;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_stickyheader == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:fixed;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_stickyheader == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='.fixed-header{';
			$advance_ecommerce_store_custom_css .='position:static;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_slider = get_theme_mod( 'advance_ecommerce_store_responsive_slider',false);
	if($advance_ecommerce_store_slider == true && get_theme_mod( 'advance_ecommerce_store_slider_hide', false) == false){
    	$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_slider == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_slider == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_slider = get_theme_mod( 'advance_ecommerce_store_responsive_scroll',true);
	if($advance_ecommerce_store_slider == true && get_theme_mod( 'advance_ecommerce_store_enable_disable_scroll', true) == false){
    	$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='display:none !important;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_slider == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='display:block !important;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_slider == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#scroll-top{';
			$advance_ecommerce_store_custom_css .='display:none !important;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_ = get_theme_mod( 'advance_ecommerce_store_responsive_sidebar',true);
    if($advance_ecommerce_ == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#sidebar{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_ == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#sidebar{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	$advance_ecommerce_store_loader = get_theme_mod( 'advance_ecommerce_store_responsive_preloader', true);
	if($advance_ecommerce_store_loader == true && get_theme_mod( 'advance_ecommerce_store_preloader_option', true) == false){
    	$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} ';
	}
    if($advance_ecommerce_store_loader == true){
    	$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:block;';
		$advance_ecommerce_store_custom_css .='} }';
	}else if($advance_ecommerce_store_loader == false){
		$advance_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$advance_ecommerce_store_custom_css .='#loader-wrapper{';
			$advance_ecommerce_store_custom_css .='display:none;';
		$advance_ecommerce_store_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$advance_ecommerce_store_theme_lay = get_theme_mod( 'advance_ecommerce_store_background_skin_mode','Transparent Background');
    if($advance_ecommerce_store_theme_lay == 'With Background'){
		$advance_ecommerce_store_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$advance_ecommerce_store_custom_css .='background-color: #fff;';
		$advance_ecommerce_store_custom_css .='}';
	}else if($advance_ecommerce_store_theme_lay == 'Transparent Background'){
		$advance_ecommerce_store_custom_css .='#sidebar aside,.slider-category, .page-box-single{';
			$advance_ecommerce_store_custom_css .='background-color: transparent;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$advance_ecommerce_store_top_bottom_product_button_padding = get_theme_mod('advance_ecommerce_store_top_bottom_product_button_padding', 10);
	if($advance_ecommerce_store_top_bottom_product_button_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_top_bottom_product_button_padding).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_left_right_product_button_padding = get_theme_mod('advance_ecommerce_store_left_right_product_button_padding', 16);
	if($advance_ecommerce_store_left_right_product_button_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_left_right_product_button_padding).'px; padding-right: '.esc_attr($advance_ecommerce_store_left_right_product_button_padding).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_product_button_border_radius = get_theme_mod('advance_ecommerce_store_product_button_border_radius', 0);
	if($advance_ecommerce_store_product_button_border_radius != false){
		$advance_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_product_button_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_show_related_products = get_theme_mod('advance_ecommerce_store_show_related_products',true);
	if($advance_ecommerce_store_show_related_products == false){
		$advance_ecommerce_store_custom_css .='.related.products{';
			$advance_ecommerce_store_custom_css .='display: none;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_show_wooproducts_border = get_theme_mod('advance_ecommerce_store_show_wooproducts_border', false);
	if($advance_ecommerce_store_show_wooproducts_border == true){
		$advance_ecommerce_store_custom_css .='.products li{';
			$advance_ecommerce_store_custom_css .='border: 1px solid #767676;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_top_bottom_wooproducts_padding = get_theme_mod('advance_ecommerce_store_top_bottom_wooproducts_padding',0);
	if($advance_ecommerce_store_top_bottom_wooproducts_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($advance_ecommerce_store_top_bottom_wooproducts_padding).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_left_right_wooproducts_padding = get_theme_mod('advance_ecommerce_store_left_right_wooproducts_padding',0);
	if($advance_ecommerce_store_left_right_wooproducts_padding != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='padding-left: '.esc_attr($advance_ecommerce_store_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($advance_ecommerce_store_left_right_wooproducts_padding).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_wooproducts_border_radius = get_theme_mod('advance_ecommerce_store_wooproducts_border_radius',0);
	if($advance_ecommerce_store_wooproducts_border_radius != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='border-radius: '.esc_attr($advance_ecommerce_store_wooproducts_border_radius).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_wooproducts_box_shadow = get_theme_mod('advance_ecommerce_store_wooproducts_box_shadow',0);
	if($advance_ecommerce_store_wooproducts_box_shadow != false){
		$advance_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$advance_ecommerce_store_custom_css .='box-shadow: '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($advance_ecommerce_store_wooproducts_box_shadow).'px #eee;';
		$advance_ecommerce_store_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$advance_ecommerce_store_copyright_content_align = get_theme_mod('advance_ecommerce_store_copyright_content_align');
	if($advance_ecommerce_store_copyright_content_align != false){
		$advance_ecommerce_store_custom_css .='.copyright{';
			$advance_ecommerce_store_custom_css .='text-align: '.esc_attr($advance_ecommerce_store_copyright_content_align).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_content_font_size = get_theme_mod('advance_ecommerce_store_footer_content_font_size', 16);
	if($advance_ecommerce_store_footer_content_font_size != false){
		$advance_ecommerce_store_custom_css .='.copyright p{';
			$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_footer_content_font_size).'px !important;';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_copyright_padding = get_theme_mod('advance_ecommerce_store_copyright_padding', 15);
	$advance_ecommerce_store_custom_css .='.copyright{';
		$advance_ecommerce_store_custom_css .='padding-top: '.esc_attr($advance_ecommerce_store_copyright_padding).'px; padding-bottom: '.esc_attr($advance_ecommerce_store_copyright_padding).'px;';
	$advance_ecommerce_store_custom_css .='}';

	$advance_ecommerce_store_footer_widget_bg_color = get_theme_mod('advance_ecommerce_store_footer_widget_bg_color');
	if($advance_ecommerce_store_footer_widget_bg_color != false){
		$advance_ecommerce_store_custom_css .='#footer{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_footer_widget_bg_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}

	$advance_ecommerce_store_footer_widget_bg_image = get_theme_mod('advance_ecommerce_store_footer_widget_bg_image');
	if($advance_ecommerce_store_footer_widget_bg_image != false){
		$advance_ecommerce_store_custom_css .='#footer{';
			$advance_ecommerce_store_custom_css .='background: url('.esc_attr($advance_ecommerce_store_footer_widget_bg_image).');';
		$advance_ecommerce_store_custom_css .='}';
	}

	// scroll to top
	$advance_ecommerce_store_scroll_font_size_icon = get_theme_mod('advance_ecommerce_store_scroll_font_size_icon', 22);
	if($advance_ecommerce_store_scroll_font_size_icon != false){
		$advance_ecommerce_store_custom_css .='#scroll-top .fas{';
			$advance_ecommerce_store_custom_css .='font-size: '.esc_attr($advance_ecommerce_store_scroll_font_size_icon).'px;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// Slider Height 
	$advance_ecommerce_store_slider_image_height = get_theme_mod('advance_ecommerce_store_slider_image_height');
	$advance_ecommerce_store_custom_css .='#slider img{';
		$advance_ecommerce_store_custom_css .='height: '.esc_attr($advance_ecommerce_store_slider_image_height).'px;';
	$advance_ecommerce_store_custom_css .='}';

	// Display Blog Post 
	$advance_ecommerce_store_display_blog_page_post = get_theme_mod( 'advance_ecommerce_store_display_blog_page_post','In Box');
    if($advance_ecommerce_store_display_blog_page_post == 'Without Box'){
		$advance_ecommerce_store_custom_css .='.page-box{';
			$advance_ecommerce_store_custom_css .='border:none; margin:25px 0;';
		$advance_ecommerce_store_custom_css .='}';
	}

	// slider overlay
	$advance_ecommerce_store_slider_overlay = get_theme_mod('advance_ecommerce_store_slider_overlay', true);
	if($advance_ecommerce_store_slider_overlay == false){
		$advance_ecommerce_store_custom_css .='#slider img{';
			$advance_ecommerce_store_custom_css .='opacity:1;';
		$advance_ecommerce_store_custom_css .='}';
	} 
	$advance_ecommerce_store_slider_image_overlay_color = get_theme_mod('advance_ecommerce_store_slider_image_overlay_color', true);
	if($advance_ecommerce_store_slider_overlay != false){
		$advance_ecommerce_store_custom_css .='#slider{';
			$advance_ecommerce_store_custom_css .='background-color: '.esc_attr($advance_ecommerce_store_slider_image_overlay_color).';';
		$advance_ecommerce_store_custom_css .='}';
	}






