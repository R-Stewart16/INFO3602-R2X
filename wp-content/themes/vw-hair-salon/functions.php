<?php
/**
 * VW Hair Salon functions and definitions
 *
 * @package VW Hair Salon
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'vw_hair_salon_setup' ) ) :
 
function vw_hair_salon_setup() {

	$GLOBALS['content_width'] = apply_filters( 'vw_hair_salon_content_width', 640 );
	
	load_theme_textdomain( 'vw-hair-salon', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-hair-salon-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vw-hair-salon' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	//selective refresh for sidebar and widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_hair_salon_font_url() ) );

	// Theme Activation Notice
	global $pagenow;
	
	if (is_admin() || ('themes.php' == $pagenow)) {
		add_action('admin_notices', 'vw_hair_salon_activation_notice');
	}
}
endif;
add_action( 'after_setup_theme', 'vw_hair_salon_setup' );

// Notice after Theme Activation
function vw_hair_salon_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
		echo '<p>'. esc_html__( 'Thank you for choosing VW Hair Salon theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Hair Salon theme.', 'vw-hair-salon' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=vw_hair_salon_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-hair-salon' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function vw_hair_salon_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-hair-salon' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-hair-salon' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-hair-salon' ),
		'description'   => __( 'Appears on page sidebar', 'vw-hair-salon' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'vw-hair-salon' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-hair-salon' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'vw-hair-salon' ),
		'description'   => __( 'Appears on footer 1', 'vw-hair-salon' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'vw-hair-salon' ),
		'description'   => __( 'Appears on footer 2', 'vw-hair-salon' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'vw-hair-salon' ),
		'description'   => __( 'Appears on footer 3', 'vw-hair-salon' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'vw-hair-salon' ),
		'description'   => __( 'Appears on footer 4', 'vw-hair-salon' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Icon', 'vw-hair-salon' ),
		'description'   => __( 'Appears on top bar', 'vw-hair-salon' ),
		'id'            => 'social-icon',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'vw-hair-salon' ),
		'description'   => __( 'Appears on shop page', 'vw-hair-salon' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'vw-hair-salon' ),
		'description'   => __( 'Appears on single product page', 'vw-hair-salon' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_hair_salon_widgets_init' );


function university_adjust_queries($query){
	if(!is_admin() AND is_post_type_archive('testimonials') AND $query->is_main_query()){
		$query->set('orderby', 'author');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', -1);

		wp_reset_postdata();
	}
   
   
	if(!is_admin() AND is_post_type_archive('specials') AND $query->is_main_query()){
		
		$query->set('orderby', 'title');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', -1);
		
		  wp_reset_postdata();
	}
}
add_action('pre_get_posts', 'university_adjust_queries');

/* Theme Font URL */
function vw_hair_salon_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'Poppins';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Gabriela';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family' => rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_hair_salon_scripts() {
	wp_enqueue_style( 'vw-hair-salon-font', vw_hair_salon_font_url(), array() );
	wp_enqueue_style( 'vw-hair-salon-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_enqueue_style( 'vw-hair-salon-block-patterns-style-frontend', get_theme_file_uri('/inc/block-patterns/css/block-frontend.css') );
	wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'vw-hair-salon-basic-style', get_stylesheet_uri() );	
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'vw-hair-salon-basic-style',$vw_hair_salon_custom_css );
	wp_enqueue_style( 'vw-hair-salon-effect', esc_url(get_template_directory_uri()).'/css/effect.css' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish-js', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'vw-hair-salon-custom-scripts-jquery', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'vw-hair-salon-jquery-wow', esc_url(get_template_directory_uri()) . '/js/wow.js', array('jquery') );
	wp_enqueue_style( 'vw-hair-salon-animate-css', esc_url(get_template_directory_uri()).'/css/animate.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'vw_hair_salon_scripts' );

/**
 * Enqueue block editor style
 */
function vw_hair_salon_block_editor_styles() {
	wp_enqueue_style( 'vw-hair-salon-font', vw_hair_salon_font_url(), array() );
    wp_enqueue_style( 'vw-hair-salon-block-patterns-style-editor', get_theme_file_uri( '/inc/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
}
add_action( 'enqueue_block_editor_assets', 'vw_hair_salon_block_editor_styles' );

/*radio button sanitization*/

function vw_hair_salon_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function vw_hair_salon_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function vw_hair_salon_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function vw_hair_salon_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function vw_hair_salon_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'vw_hair_salon_loop_columns');
	if (!function_exists('vw_hair_salon_loop_columns')) {
	function vw_hair_salon_loop_columns() {
		return get_theme_mod( 'vw_hair_salon_products_per_row', '3' ); 
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'vw_hair_salon_products_per_page' );
function vw_hair_salon_products_per_page( $cols ) {
  	return  get_theme_mod( 'vw_hair_salon_products_per_page',9);
}

/* Excerpt Limit Begin */
function vw_hair_salon_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

define('VW_HAIR_SALON_FREE_THEME_DOC',__('https://www.vwthemesdemo.com/docs/free-vw-hair-salon/','vw-hair-salon'));
define('VW_HAIR_SALON_SUPPORT',__('https://wordpress.org/support/theme/vw-hair-salon/','vw-hair-salon'));
define('VW_HAIR_SALON_REVIEW',__('https://wordpress.org/support/theme/vw-hair-salon/reviews/','vw-hair-salon'));
define('VW_HAIR_SALON_BUY_NOW',__('https://www.vwthemes.com/themes/hair-salon-wordpress-theme/','vw-hair-salon'));
define('VW_HAIR_SALON_LIVE_DEMO',__('https://vwthemes.net/hair-salon-pro/','vw-hair-salon'));
define('VW_HAIR_SALON_PRO_DOC',__('https://www.vwthemesdemo.com/docs/vw-hair-salon-pro/','vw-hair-salon'));
define('VW_HAIR_SALON_FAQ',__('https://www.vwthemes.com/faqs/','vw-hair-salon'));
define('VW_HAIR_SALON_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','vw-hair-salon'));
define('VW_HAIR_SALON_CONTACT',__('https://www.vwthemes.com/contact/','vw-hair-salon'));
define('VW_HAIR_SALON_CREDIT',__('https://www.vwthemes.com/themes/free-hair-salon-wordpress-theme/','vw-hair-salon'));

if ( ! function_exists( 'vw_hair_salon_credit' ) ) {
	function vw_hair_salon_credit(){
		echo "<a href=".esc_url(VW_HAIR_SALON_CREDIT)." target='_blank'>".esc_html__('Hair Salon WordPress Theme','vw-hair-salon')."</a>";
	}
}

function vw_hair_salon_logo_title_hide_show(){
	if(get_theme_mod('vw_hair_salon_logo_title_hide_show') == '1' ) {
		return true;
	}
	return false;
}

function vw_hair_salon_tagline_hide_show(){
	if(get_theme_mod('vw_hair_salon_tagline_hide_show') == '1' ) {
		return true;
	}
	return false;
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Social Custom Widgets */
require get_template_directory() . '/inc/themes-widgets/social-icon.php';

/* Customizer additions. */
require get_template_directory() . '/inc/themes-widgets/about-us-widget.php';

/* Customizer additions. */
require get_template_directory() . '/inc/themes-widgets/contact-us-widget.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getstarted/getstarted.php';

/* typography */
require get_template_directory() . '/inc/typography/ctypo.php';

/* Block Pattern */
require get_template_directory() . '/inc/block-patterns/block-patterns.php';

/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';

/* Plugin Activation */
require get_template_directory() . '/inc/getstarted/plugin-activation.php';