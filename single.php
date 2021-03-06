<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="content" class="article article-push" data-template-name="single">
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		<div class="post-content">
			<div class="row">
				<div class="post-header small-12 medium-6 medium-offset-3 columns">
					<h1 class="post-title"><?php exodus_custom_field('headline'); ?></h1>
					<?php if ($subline = exodus_get_custom_field('subline')): ?>
						<div class="post-subline">
							<?php echo $subline; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
				<div class="row the-image medium-collapse small-collapse">
					<div class="small-12 columns">
						<div style="width:100%;height:240px;background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;"></div>
					</div>
				</div>
			<?php endif; ?>
			<div class="row the-content">
				<div class="small-12 medium-8 medium-offset-2 columns">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<?php if ($testimonial = exodus_get_custom_field('testimonial')) { ?>
		<div class="testimonial text-center blue-bg">
			<div class="row">
				<div class="small-12 medium-10 medium-offset-1 columns">
					<?php echo $testimonial; ?>
				</div>
			</div>
		</div>
	<?php } ?>

<?php endwhile; ?>
</div>
<?php get_footer(); ?>
