<?php
add_action( 'after_setup_theme', 'blank_setup' );
function blank_setup() {
load_theme_textdomain( 'blank', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blank' ) ) );
}

add_filter( 'document_title_separator', 'blank_document_title_separator' );
function blank_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blank_title' );
function blank_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'blank_read_more_link' );
function blank_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'blank_excerpt_read_more_link' );
function blank_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'blank_image_insert_override' );
function blank_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'blank_widgets_init' );
function blank_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blank' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blank_pingback_header' );
function blank_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blank_enqueue_comment_reply_script' );
function blank_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blank_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blank_comment_count', 0 );
function blank_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

global $include_version;
$include_version = '1';

add_action( 'wp_enqueue_scripts', 'blank_load_scripts' );
function blank_load_scripts() {
	global $include_version;
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), $include_version, true );

	wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), $include_version, 'all');
	wp_enqueue_style( 'blank-style', get_stylesheet_uri(), array(), $include_version );
}

add_action( 'get_footer', 'blank_load_style' );
function blank_load_style() {
	global $include_version;
	//wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), $include_version, 'all');
	//wp_enqueue_style( 'blank-style', get_stylesheet_uri(), array(), $include_version );
}


function admin_style() {
	global $include_version;
  	wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/css/admin.css', array(), $include_version);
  	wp_enqueue_script('admin-js', get_template_directory_uri() . '/js/admin.js', array('jquery'), $include_version, true );
}
add_action('admin_enqueue_scripts', 'admin_style');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'post_id' => 'general_settings'
    ));
}

include_once 'blocks/register.php';

include_once 'contact/index.php';
