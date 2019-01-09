<?php
/**
* Template Name: 2018 Page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>

<div class="page">
<?php while ( have_posts() ) : the_post(); ?>

	<?php 
		// Declare all vairables
		$header_button_text = get_field('header_button_text');
		$header_button_url = get_field('header_button_url');
	?>

	<?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
		<div class="header" style="background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;">
			<h1 style="color: white">
				<?php exodus_custom_field('headline'); ?>
			</h1>
			
			<?php if ( $subline = exodus_get_custom_field('subline')) { ?>
				<div class="post-subline">
					<?php echo $subline; ?>
				</div>
			<?php } ?>

			<?php // Show the button in the header
				if ( $header_button_text) { ?>
				<a class="button button-orange" href="<?php echo $header_button_url; ?>"><?php echo $header_button_text; ?></a>
			<?php } ?>
			
		</div>
	<?php endif; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		
		<div class="post-content">
		
			<?php get_template_part('includes/partials/section', 'main-panel'); ?>

			<?php get_template_part('includes/partials/section', 'quotes-single'); ?>

			<?php get_template_part('includes/partials/section', 'default'); ?>

			<?php get_template_part('includes/partials/section', 'feature-grid'); ?>

			<?php get_template_part('includes/partials/section', 'contact'); ?>

			<?php get_template_part('includes/partials/section', 'quotes-three'); ?>	

		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
    
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

