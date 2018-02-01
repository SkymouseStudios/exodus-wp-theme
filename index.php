<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="content" class="page article-push" data-template-name="index">
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		<div class="post-content">
			<?php if ($headline = exodus_get_custom_field('headline')) { ?>
				<div class="row">
					<div class="post-header small-10 small-offset-1 medium-6 medium-offset-3 columns">
						<h1 class="post-title"><?php echo $headline; ?></h1>
						<?php if ($subline = exodus_get_custom_field('subline')): ?>
							<div class="post-subline">
								<?php echo $subline; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php } ?>
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
    <?php require('partial-preview-email-signup.php'); ?>
	<?php exodus_home_promotion_tier('home_tier_three'); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>