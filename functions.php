<?php
/**
 * casando_sem_grana_theme functions and definitions
 *
 * @package casando_sem_grana_theme
 */
/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework/inc/options-framework.php';

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */

add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php

}

include ( dirname( __FILE__ ) . "/options.php" );
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'casando_sem_grana_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casando_sem_grana_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on casando_sem_grana_theme, use a find and replace
	 * to change 'casando_sem_grana_theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'casando_sem_grana_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'casando_sem_grana_theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casando_sem_grana_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // casando_sem_grana_theme_setup
add_action( 'after_setup_theme', 'casando_sem_grana_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function casando_sem_grana_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'casando_sem_grana_theme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'casando_sem_grana_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casando_sem_grana_theme_scripts() {
	wp_enqueue_style( 'casando_sem_grana_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'casando_sem_grana_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'casando_sem_grana_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casando_sem_grana_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


 /**
 * Chose your image for header.
 */
$args = array(
	'flex-width'    => true,
	'width'         => 651,
	'flex-height'    => true,
	'height'        => 158,
	'default-image' => get_template_directory_uri() . '/images/logo.png',
);
add_theme_support( 'custom-header', $args );

 /**
 * Get actions.js.
 */

wp_enqueue_script( 'actions', get_stylesheet_directory_uri() . '/inc/js/actions.js', array( 'jquery' ) );

function admin_casando_scripts() {
	wp_enqueue_script( 'categories-admin', get_stylesheet_directory_uri() . '/inc/js/categories-admin.js.js', array( 'jquery' ) );
	}
add_action('admin_head', 'admin_casando_scripts');

/**
* Disable Admin Bar for All Users Except for Administrators.
*/
/*add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}*/

/**
* Disable Admin Bar for All Users.
*/
show_admin_bar(false);

/**
 * Add Favicon
 */
 
/*add_action('wp_head', 'blog_favicon');
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo( 'template_url' ).'/arq/img/favicon.ico" />';
}*/

/* Limit excerpt */
//add_filter( 'excerpt_length', 'igreja_excerpt_length' );
/*function igreja_excerpt_length( $length ) {
	return 40;
}*/

/*function meu_excerpt($limit = 5) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt);
		$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
		echo "<p>" . $excerpt . " [...]</p>";

	} else {
		$excerpt = implode(" ", $excerpt);
		$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
		echo "<p>" . $excerpt . "</p>";
	}
}*/


/* Feed */
//add_filter('request', 'myfeed_request');
/*function myfeed_request($qv) {
	if (isset($qv['feed']))
		$qv['post_type'] = get_post_types();
	return $qv;
}*/

wp_enqueue_script( 'actions', get_stylesheet_directory_uri() . '/inc/js/actions.js', array( 'jquery' ) );

