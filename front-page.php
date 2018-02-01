<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="content" class="front-page full-width" data-template-name="front-page">
<?php while ( have_posts() ) : the_post(); ?>
	<?php $postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="hero text-center" id="fullpage" style="background-image: url(<?php echo $postThumbnail; ?>)">
		<div class="section" id="section0">
			<div class="hero-inner">
				<div class="hero-content">
					<div class="row">
						<div class="small-12 medium-10 medium-offset-1 columns">
							<h1><?php exodus_custom_field('headline'); ?></h1>						
						</div>
						<div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
							<div class="subline">
								<?php exodus_custom_field('subline'); ?>
							</div>	
						</div>
						<div class="small-12 columns text-center">
							<a class="button button-orange button-larger" href="<?php exodus_custom_field('home_hero_button_link'); ?>"><?php exodus_custom_field('home_hero_button_text'); ?></a>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php exodus_home_promotion_tier('home_tier_one'); ?>
	<?php if ($testimonial = exodus_get_custom_field('testimonial')) { ?>
		<div class="testimonial text-center blue-bg ninety-bg water-top water-bottom">
			<img class="make-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-mark-circle.png" alt="" />
			<div class="row">
				<div class="small-12 medium-10 medium-offset-1 columns">
					<?php echo $testimonial; ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php exodus_home_promotion_tier('home_tier_two'); ?>
    <?php exodus_home_promotion_tier('home_tier_three'); ?>
    <?php require('partial-preview-email-signup.php'); ?>
<?php endwhile; ?>

</div>
<?php get_footer(); ?>
