<?php
/**
 * Post archive template.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

if ( is_day() ) {
	$post_title = sprintf( __( 'Daily Archives: %s', '%Text_Domain%' ), get_the_date() );
} elseif ( is_month() ) {
	$post_title = sprintf( __( 'Monthly Archives: %s', '%Text_Domain%' ), get_the_date( 'F Y' ) );
} elseif ( is_year() ) {
	$post_title = sprintf( __( 'Yearly Archives: %s', '%Text_Domain%' ), get_the_date( 'Y' ) );
} else {
	$post_title = __( 'Blog Archives', '%Text_Domain%' );
}

get_header(); ?>

<div id="content article-push">

	<h1 class="post-title"><?php echo esc_html( $post_title ); ?></h1>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'archive' ); ?>

	<?php endwhile; ?>

	<?php the_posts_pagination(); ?>

	<?php get_sidebar( 'archive' ); ?>

</div><!-- #content -->

<?php get_footer();
