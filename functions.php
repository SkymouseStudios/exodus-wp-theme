<?php
/**
 * Theme functions.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

require_once dirname(__FILE__) . '/functions/advanced-custom-fields.php';


require_once dirname( __FILE__ ) . '/includes/admin.php';
require_once dirname( __FILE__ ) . '/includes/utility.php';

/** Enable additional theme features */
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', 'image_size_custom');
function image_size_custom() {
    add_image_size('support_grid_thumb', 289, 222, array('center', 'center'));
}

/**
 * Custom "Read More" links.
 *
 * @global $post
 *
 * @param string $more Won't be used.
 * @return string A "continue reading" link to the post.
 */
function themename_excerpt_more( $more ) {
	global $post;

	return sprintf(
		'<a href="%s" title="%s" class="read-more">%s</a>',
		esc_url( get_permalink( $post->ID ) ),
		esc_attr( sprintf( __( 'Continue reading "%s"', '%Text_Domain%' ), get_the_title( $post->ID ) ) ),
		esc_html__( 'Continue reading&hellip;', '%Text_Domain%' )
	);
}
add_filter( 'excerpt_more', 'themename_excerpt_more' );

/**
 * Register dynamic sidebars.
 */
function themename_register_dynamic_sidebars() {
	$sidebars = array(
		array(
			'id'   => 'primary-sidebar',
			'name' => __( 'Primary sidebar', '%Text_Domain%' ),
		),
	);

	foreach ( $sidebars as $sidebar ) {
		register_sidebar( $sidebar );
	}
}
add_action( 'widgets_init', 'themename_register_dynamic_sidebars' );

/**
 * Register site navigation menus.
 */
function themename_register_nav_menus() {
	register_nav_menus(
		array(
			'primary-nav' => __( 'Primary Navigation', '%Text_Domain%' ),
		)
	);
}
add_action( 'init', 'themename_register_nav_menus' );

/**
 * Register and enqueue theme styles and scripts.
 */
function themename_register_styles_scripts() {

	/* Stylesheets */
	wp_register_style('bitter', '//fonts.googleapis.com/css?family=Bitter:400,700');
	wp_register_style('roboto', '//fonts.googleapis.com/css?family=Roboto:400,700');
	wp_register_style( 'googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,800');
	wp_register_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.css', null, null, 'all' );

	// Editor stylesheets.
	add_editor_style( 'assets/css/editor.css' );

	/* Scripts */
	wp_register_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/vendor/masonry.pkgd.min.js', array(), null, true );
	wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), null, true );

	if ( ! is_admin() && ! is_login_page() ) {
		wp_enqueue_style( 'bitter' );;
		wp_enqueue_style( 'roboto' );
		wp_enqueue_style( 'styles' );

		wp_enqueue_script( 'masonry' );
		wp_enqueue_script( 'scripts' );
	}
}
add_action( 'init', 'themename_register_styles_scripts' );

function exodus_register_styles_scripts() {
    
    /** Stylesheets **/
    // wp_register_style('googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic', null, null, 'all');
    
    if (!is_admin() && !is_login_page()) {
        wp_enqueue_style('styles');
        wp_enqueue_style('googlefonts');
    }

}
add_action('init', 'exodus_register_styles_scripts');

/**
 * Generates and outputs the theme's #site-logo
 * The front page will be a <h1> tag while the interior pages will be links to the homepage
 *
 * @return void
 *
 * @uses get_bloginfo()
 * @uses is_front_page()
 * @uses site_url()
 */
function exodus_site_logo() {
	printf(
		'<a href="%s" id="site-logo" title="%s">%s</a>',
		esc_attr(site_url('/' )),
		esc_html(get_bloginfo('name')),
		'<img src="' . get_stylesheet_directory_uri() . '/assets/img/logo.svg" alt="' . esc_html(get_bloginfo('name')) . '" />'
	);
}

register_nav_menus(array('primary-nav' => 'Primary Navigation'));
if (!function_exists('primary_navigation')) {
    function primary_navigation() {
        wp_nav_menu(array('container' => false, 'theme_location' => 'primary-nav'));
    }
}

/**
 * Shortcut for `echo exodus_get_custom_field( ... )`, accepts the same arguments
 * @param str $key The custom field key
 * @param int $id The post ID
 * @param mixed $default What to return if there's no custom field value
 * @return void
 * @uses exodus_get_custom_field()
 */
function exodus_custom_field( $key, $id=false, $default='' ) {
  echo exodus_get_custom_field( $key, $id, $default );
}

/**
 * Get a custom field stored in the Advanced Custom Fields plugin
 * By running it through this function, we ensure that we don't die if the plugin is uninstalled/disabled (and thus the
 * function is undefined)
 * @global $post
 * @param str $key The key to look for
 * @param int $id The post ID
 * @param mixed $default What to return if there's nothing
 * @return mixed (dependent upon $echo)
 * @uses get_field()
 */
function exodus_get_custom_field( $key, $id=false, $default='' ) {
  global $post;
  $key = trim( filter_var( $key, FILTER_SANITIZE_STRING ) );
  $result = '';

  if ( function_exists( 'get_field' ) ) {
    $result = ( isset( $post->ID ) && ! $id ? get_field( $key ) : get_field( $key, $id ) );

    if ( $result == '' ) {
      $result = $default;
    }
  } else { // get_field() is undefined, most likely due to the plugin being inactive
    $result = $default;
  }
  return $result;
}

/**
 * Lists support articles with it's image and title image, each linking to the article.
 */
function exodus_support_articles() {
	// @todo Make a template file. Pass needed variables.
	echo '<div class="exodus-support-articles">';
		echo '<h3 class="text-center">Support Articles</h3>';
		echo '<div class="row medium-collapse">';
			echo '<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">';
				echo '<ul>';
					$args = array('numberposts' => -1, 'order' => 'ASC');
					$posts = get_posts($args);
				  	foreach ($posts as $post) {
		            	echo '<li class="small-12 medium-4 medium-uncentered columns">';
		            		echo '<div class="support-article-wrapper">';
								$title = get_the_title($post->ID);
								$permalink = get_the_permalink($post->ID);
								echo '<a rel="bookmark" class="article-image" href="' . $permalink . '" title="' . $title . '">';
								if ($image = get_the_post_thumbnail($post->ID, 'support_grid_thumb')) {
									echo $image;
								} else {
									// @todo Enter a placeholder, maybe the Category name
									// echo '<div class="placeholder-image">Placeholder</div>';
								}
								echo '</a>';
								echo '<a rel="bookmark" class="title" href="' . $permalink . '" title="' . $title . '">' . $title . '</a>';
								echo '<a rel="bookmark" class="article-read-more" href="' . $permalink . '" title="' . $title . '">Read more &raquo;</a>';
							echo '</div>';
				    	echo '</li>';
				    }
				echo '</ul>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}

/**
 * Get specified $fields from the repeater with slug $key
 * @global $post
 * @param str $key The custom field slug of the repeater
 * @param int $id The post ID (will use global $post if not specified)
 * @param array $fields The sub-fields to retrieve
 * @return array
 * @uses exodus_get_custom_field()
 * @uses has_sub_field()
 * @uses get_sub_field()
 */
function exodus_get_repeater_content( $key, $id=null, $fields=array() ) {
  global $post;
  if ( ! $id ) $id = $post->ID;
  $values = array();

  if ( exodus_get_custom_field( $key, $id, false ) && function_exists( 'has_sub_field' ) && function_exists( 'get_sub_field' ) ) {

    while ( has_sub_field( $key, $id ) ) {
      $value = array();
      foreach ( $fields as $field ){
        $value[$field] = get_sub_field( $field );
      }
      if( ! empty( $value ) ) {
        $values[] = $value;
      }
    }
  }
  return $values;
}

/**
 * Homepage tier generator.
 */
function exodus_home_promotion_tier( $tier_name ) {
	if (empty($tier_name)) return false;

	$id = get_option('page_on_front');

	include(dirname(__FILE__) . '/includes/partials/home-promotion-tier.php');
}

/**
 * Get Products
 *
 * @return array
 */
function exodus_get_products() {

    $query = new WP_Query(array(
        'post_type' => 'product',
        'post_status' => 'publish'
    ));

    $products = [];
    foreach($query->posts as $post) {
        $products[] = [
            'id'                            => $post->ID,
            'title'                         => trim($post->post_title),
            'name'                          => trim($post->post_name),
            'shopify_product_slug'          => trim(exodus_get_custom_field('shopify_product_slug', $post->ID)),
            'price'                         => trim(exodus_get_custom_field('price', $post->ID)),
            'remote_available'              => exodus_get_custom_field('remote_available', $post->ID),
            'background_image'              => exodus_get_custom_field('background_image', $post->ID),
            'overview_image'                => exodus_get_custom_field('overview_image', $post->ID),
            'short_description'             => trim(exodus_get_custom_field('short_description', $post->ID)),
            'product_detail_introduction'   => trim(exodus_get_custom_field('product_detail_introduction', $post->ID)),
            'product_properties'            => exodus_get_custom_field('product_properties', $post->ID)
        ];
    }

    wp_reset_query();

    return $products;

}

/**
 * Sort Products By Price
 *
 * @param $products
 *
 * @return mixed
 */
function exodus_sort_products_by_price($products) {

    usort($products, function($a, $b) { return $a['price'] - $b['price']; });

    return $products;

}

/**
 * Provides a standard format for the page title depending on the view. This is
 * filtered so that plugins can provide alternative title formats.
 *
 * @param       string    $title    Default title text for current view.
 * @param       string    $sep      Optional separator.
 * @return      string              The filtered title.
 * @package     mayer
 * @subpackage  includes
 * @version     1.0.0
 * @since       1.0.0
 */
function mayer_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	} // end if
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	} // end if
	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( __( 'Page %s', 'mayer' ), max( $paged, $page ) ) . " $sep $title";
	} // end if
	return $title;
} // end mayer_wp_title
add_filter( 'wp_title', 'mayer_wp_title', 10, 2 );
