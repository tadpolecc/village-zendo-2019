<?php
// Genesis
include_once( get_template_directory() . '/lib/init.php' );

// Theme
define( 'CHILD_THEME_NAME', 'Village Zendo' );
define( 'CHILD_THEME_URL', 'https://tadpole.cc/' );
define( 'CHILD_THEME_VERSION', '1.0' );

// Scripts and Styles
add_action( 'wp_enqueue_scripts', 'tc_scripts' );
function tc_scripts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
}

// HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

// Force sidebar-content-sidebar layout setting
add_filter( 'genesis_site_layout', '__genesis_return_sidebar_content_sidebar' );

// Unregister layout settings
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'content-sidebar' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'full-width-content' );

// Unregister and remove markup for sidebar-primary
unregister_sidebar( 'sidebar' );
remove_action( 'genesis_after_content', 'genesis_get_sidebar' );

// Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array( 'nav', 'subnav', 'site-inner' ) );

// Custom Header
add_theme_support( 'custom-header', array(
	'flex-width' => true,
	'width' => 960,
	'flex-height' => true,
	'height' => 180,
	)
);

// Remove the header from normal location
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Add our own header inside content-sidebar-wrap

add_action( 'genesis_before_content', 'tc_vz_header' );

function tc_vz_header() {
	//IF IT'S THE HOMEPAGE, CUSTOM HEADER
	if (is_front_page() == true) {
		include('wp-content/themes/village-zendo-2018/customHeader.php');
		#include( get_template_directory() . '/customHeader.php' );
	} else { ?>
        <div class="vz-header">
            <a class="logo-img" href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
                <div class="title-area">
                    <h1 class="site-title" itemprop="headline">
                        <?php bloginfo( 'site_title' ); ?>
                    </h1>
                </div>
        </div>
	<?php }
}

// Remove the footer from normal location
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Move footer into content-sidebar-wrap
add_action( 'genesis_after_content', 'genesis_footer_markup_open', 5 );
add_action( 'genesis_after_content', 'genesis_do_footer' );
add_action( 'genesis_after_content', 'genesis_footer_markup_close', 15 );

// Move footer widget into content-sidebar-wrap above new footer
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
add_action( 'genesis_after_content', 'genesis_footer_widget_areas', 4 );

// Viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Unregister primary/secondary navigation menus
// remove_theme_support( 'genesis-menus' );
// Unregister primary navigation menu
add_theme_support( 'genesis-menus', array( 'third-menu' => __( 'Front Page Navigation Menu', 'genesis' ) ) );

// Widgets
unregister_sidebar( 'header-right' );
register_sidebar ( array(
	'name'          => 'Call to Action',
	'id'            => 'main-cta',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
	)
);

// Search bar text
add_filter( 'genesis_search_text', 'tc_search_text' );
function tc_search_text( $text ) {
	return esc_attr( 'search...' );
}

// Remove meta for CPTs
add_action ( 'get_header', 'tc_cpt_remove_post_info_genesis' );
function tc_cpt_remove_post_info_genesis() {
	if ( 'post' !== get_post_type() ) {
		remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
	}
}

// Show event dates directly under all event titles
function tc_event_date() {
	if ( function_exists( 'eo_get_the_start' ) ) {
		$start = eo_get_the_start( 'j F Y' );
		$end = eo_get_the_end( 'j F Y' );
		$occurrences = eo_get_the_occurrences_of( $post_id );
		if ( count( $occurrences ) > 1 ) {
			foreach( $occurrences as $occurrence) {
				$date = eo_format_datetime( $occurrence['start'] , 'j F' );
				echo '<li>' . $date . '</li>';
			}
			echo '</ul>';
		}
		elseif ( $start == $end ) {
			echo eo_get_the_start( 'j F' );
		}
		else {
			echo eo_get_the_start( 'j F' );
			echo ' - ';
			echo eo_get_the_end( 'j F' );
		}
		echo '<br />';
		echo eo_get_the_start( 'g:i a' );
		echo ' - ';
		echo eo_get_the_end( 'g:i a' );
		echo '<br /><br />';
	}
}

add_action( 'get_header', 'tc_event_dates' );
function tc_event_dates() {
	if ( 'event' == get_post_type() ) {
		add_action( 'genesis_entry_header', 'tc_event_date' );
	}
}

// Footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// CiviCSS
function tc_civicrm_theme_css( ) {
    $tc_css = get_bloginfo( 'stylesheet_directory' ) .'/includes/css/civicrm.css';

    return $tc_css;

}

add_filter( 'tc_civicss_override', 'tc_civicrm_theme_css' );

// Prevent automatic theme updates
function tc_hidden_theme_2015( $r, $url ) {
    if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
        return $r; // Not a theme update request. Bail immediately.
    $themes = unserialize( $r['body']['themes'] );
    unset( $themes[ get_option( 'template' ) ] );
    unset( $themes[ get_option( 'stylesheet' ) ] );
    $r['body']['themes'] = serialize( $themes );
    return $r;
}
 
add_filter( 'http_request_args', 'tc_hidden_theme_2015', 5, 2 );

// Setting the site logo doesn't cause Jetpack to set the og:image as expected,
// so force it: https://jetpack.com/tag/open-graph/
function fb_home_image( $tags ) {
    if ( is_home() || is_front_page() ) {
        // Remove the default blank image added by Jetpack
        unset( $tags['og:image'] );

        $fb_home_img = 'https://villagezendo.org/wp-content/uploads/2019/02/masthead-sharing.jpg';
        $tags['og:image'] = esc_url( $fb_home_img );
    }
    return $tags;
}
//add_filter( 'jetpack_open_graph_tags', 'fb_home_image' );
