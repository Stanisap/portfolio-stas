<?php
/**
 * portfolio-stas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio-stas
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'portfolio_stas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function portfolio_stas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on portfolio-stas, use a find and replace
		 * to change 'portfolio-stas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'portfolio-stas', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'portfolio-stas' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'portfolio_stas_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'portfolio_stas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_stas_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'portfolio_stas_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_stas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_stas_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio-stas' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio-stas' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_stas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_stas_scripts() {
	//wp_enqueue_style( 'portfolio-stas-style', get_template_directory_uri(), array(), _S_VERSION );
	wp_style_add_data( 'portfolio-stas-style', 'rtl', 'replace' );
    wp_enqueue_style( 'portfolio-stas-normalize', get_template_directory_uri() . '/assets/css/normalize.css', 0, null );
    wp_enqueue_style( 'portfolio-stas-main', get_template_directory_uri() . '/assets/css/main.css' , 0, null );
    wp_enqueue_style( 'portfolio-stas-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , 0, null );
    wp_enqueue_style( 'portfolio-stas-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' , 0, null );
    wp_enqueue_style( 'portfolio-stas-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' , 0, null );
    wp_enqueue_style( 'portfolio-stas-carousel', get_template_directory_uri() . '/assets/css/responsive.css' , 0, null );
    wp_enqueue_style( 'portfolio-stas-style', get_template_directory_uri() . '/assets/css/style.css' , 0, null );


    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'portfolio-stas-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-appear', get_template_directory_uri() . '/assets/js/appear.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-showHide', get_template_directory_uri() . '/assets/js/showHide.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), null, true );
    wp_enqueue_script( 'portfolio-scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-maps.googlepis', 'https://maps.googleapis.com/maps/api/js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-showHide', get_template_directory_uri() . '/assets/showHide.js', array(), null, true );
    wp_enqueue_script( 'portfolio-stas-showHide', get_template_directory_uri() . '/assets/showHide.js', array(), null, true );


    //<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    //<script src="js/vendor/jquery-1.11.2.min.js"></script>





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_stas_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

