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
	add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'post_destaque', 730, 9999 ); //730 pixels wide (and unlimited height)
		add_image_size( 'post_category', 300, 9999 ); //300 pixels wide (and unlimited height)
	}

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
	register_sidebar( array(
		'name'          => __( 'Sidebar Home', 'casando_sem_grana_theme' ),
		'id'            => 'sidebar-home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar Post', 'casando_sem_grana_theme' ),
		'id'            => 'sidebar-post',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Newsletter', 'casando_sem_grana_theme' ),
		'id'            => 'newsletter-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Redes Sociais', 'casando_sem_grana_theme' ),
		'id'            => 'redes-sociais-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="social-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'casando_sem_grana_theme_widgets_init' );


/**
 * Register newsletter widget area.
 */



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
* Disable Admin Bar for All Users.
*/
show_admin_bar(false);


add_filter ( 'wp_list_categories', 'span_before_link_list_categories' );
function span_before_link_list_categories( $list ) {
	$list = str_replace('<a href=','<span class="ring"></span><a href=', $list);
	return $list;
}

add_action('thesis_hook_after_post','my_related_posts');
function my_related_posts() {
	if (is_single()) {

		global $post;
		$current_post = $post->ID;
		$categories = get_the_category();

	foreach ($categories as $category) : ?>

	<div class="content-posts">
		<ul>
			<?php $posts = get_posts('numberposts=3&category='. $category->term_id . '&exclude=' . $current_post);
			foreach($posts as $post) : ?>

			<li>
				<figure>
					<div class="thumbnail th-post th-single-post">
						<?php the_post_thumbnail(); ?>
					</div>
				</figure><!-- .th-single-post -->

				<div class="title-single-post"><?php the_title(); ?></div><!-- .title-single-post -->

				<figcaption>
					<div class="excerpt-single-post"></div>
				</figcaption><!-- .excerpt-single-post -->

				<div class="info-single-post">
					<div class="date-single-post"></div><!-- .date-single-post -->
				</div><!-- .info-single-post -->
			</li>

		<?php endforeach; ?>
	<?php endforeach; ?>
		</ul>
	</div>
	<?php }	wp_reset_query();
}
	
/* My Excerpt Post Relacionados */
function my_excerpt_caracter( $limit = 25 ) {
	if ( strlen( get_the_excerpt() ) > $limit ) {
		$ini = strlen( get_the_excerpt() ) - $limit;
		$excerpt = substr(get_the_excerpt(), 0, -( $ini ));
	} else {
		$excerpt = get_the_excerpt() . '[...]';
	}

	echo $excerpt;
}

/* BREADCRUMBS - SINGLE */
function the_breadcrumb() {
    echo '<ul id="crumbs">';
    if (!is_home()) {
            echo '<li><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo "</a> /</li>";
            if (is_category() || is_single()) {
                    echo '<li>';
                    the_category('</li><li>/ ');
                    if (is_single()) {
                            echo " /</li><li>";
                            the_title();
                            echo '</li>';
                    }
            } elseif (is_page()) {
                    echo '<li>';
                    echo the_title();
                    echo '</li>';
            }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

function custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID(); ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<div class="div-avatar"><?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?></div>
	<?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
	</div>
	<span class="comment-point">•</span>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-meta commentmetadata">
		<?php
			/* translators: 1: date, 2: time */
			echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' atrás'; ?>
			<?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		?>
	</div>

	<div class="comment-text">
		<?php comment_text(); ?>

	<div class="reply">
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
	</div><!-- .comment-text -->

	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php } 
