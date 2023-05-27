<?php
function ess_load_css()
{
	wp_register_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', '4.6.2', 'all');
	wp_enqueue_style('bootstrap-style');

	wp_register_style('wow-style', get_template_directory_uri() . '/assets/plugins/wow/css/libs/animate.css', '1.0.0', 'all');
	wp_enqueue_style('wow-style');

	wp_register_style('font-awsome-style', get_template_directory_uri() . '/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css', '1.0.0', 'all');
	wp_enqueue_style('font-awsome-style');

	wp_register_style('owl-carousel-style', get_template_directory_uri() . '/assets/plugins/OwlCarousel/dist/assets/owl.carousel.min.css', '1.0.0', 'all');
	wp_enqueue_style('owl-carousel-style');

	wp_register_style('owl-theme-style', get_template_directory_uri() . '/assets/plugins/OwlCarousel/dist/assets/owl.theme.default.min.css', '1.0.0', 'all');
	wp_enqueue_style('owl-theme-style');

	wp_register_style('light-box-style', get_template_directory_uri() . '/assets/plugins/lightbox2/dist/css/lightbox.min.css', '2.0.0', 'all');
	wp_enqueue_style('light-box-style');
	//if(is_home() || is_front_page()){
	wp_register_style('main-style', get_template_directory_uri() . '/assets/css/homepage.css', '1.0.0', 'all');
	wp_enqueue_style('main-style');
	//}

	if (is_page()) {

	}

	if (is_single()) {

	}
	if (is_archive()) {

	}

}

add_action('wp_enqueue_scripts', 'ess_load_css');
function ess_load_js()
{
	wp_enqueue_script('jquery-script', 'https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js', array('jquery'), '3.6.4', true);

	wp_enqueue_script('poper-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '1.0.0', true);

	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.6.2', true);

	wp_enqueue_script('light-box-script', get_template_directory_uri() . '/assets/plugins/lightbox2/dist/js/lightbox-plus-jquery.min.js', array('jquery'), '2.0.0', true);

	wp_enqueue_script('OwlCarousel-script', get_template_directory_uri() . '/assets/plugins/OwlCarousel/dist/owl.carousel.min.js', array('jquery'), '1.0.0', true);

	wp_enqueue_script('wow-script', get_template_directory_uri() . '/assets/plugins/wow/dist/wow.min.js', array('jquery'), '1.1.0', true);

	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ess_load_js');

add_theme_support('menus');
register_nav_menus(
	array(
		'primary' => __('Primary Menu', 'ess'),
		'secondary' => __('Footer Menu', 'ess'),
	)
);

add_theme_support('custom-logo');

add_theme_support('widgets');
function oct_socail_widgets()
{
	register_sidebar(
		array(
			'name' => __('Social Bar', 'oct'),
			'id' => 'social-sidebar',
			'description' => __('Hiển thị social icon', 'oct'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Carousel Slider', 'oct'),
			'id' => 'home-slider',
			'description' => __('Hiển thị banner ra trang chủ', 'oct'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('About Title', 'oct'),
			'id' => 'about-title',
			'description' => __('Hiển thị tiêu đề phần giới thiệu ra trang chủ', 'oct'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('About Info Content', 'oct'),
			'id' => 'about-info-content',
			'description' => __('Hiển thị nội dung phần giới thiệu ra trang chủ', 'oct'),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		)
	);

}
add_action('widgets_init', 'oct_socail_widgets');

function themename_custom_logo_setup()
{
	$defaults = array(
		'height' => 100,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');