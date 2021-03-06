<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="content" class="page article-push" data-template-name="page-support">
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		<div class="post-content">
			<div class="row medium-collapse">
				<div class="post-header small-12 medium-10 medium-offset-1 columns">
					<h1 class="post-title"><?php exodus_custom_field('headline'); ?></h1>
					<?php if ($subline = exodus_get_custom_field('subline')): ?>
						<div class="post-subline">
							<?php echo $subline; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
				<div class="row medium-collapse small-collapse">
					<div class="small-12 columns">
						<div style="width:100%;height:240px;background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;"></div>
					</div>
				</div>
			<?php endif; ?>

			<section class="section-panel pad">
				<h2>Frequently Asked Questions</h2>
				<?php 
					
					if( have_rows('faqs') ): 
					
					while( have_rows('faqs') ): the_row(); 
						$question = get_sub_field('question');
						$answer = get_sub_field('answer');
						$faq_subhead = get_sub_field('faq_subhead');
					
						if ( $faq_subhead ) { ?>
							<h4><?php echo $faq_subhead; ?></h4>
						<?php } ?>
				 	<button class="accordion-title"><?php echo $question; ?></button>
					<div class="accordian-panel">
					  <p><?php echo $answer; ?></p>
					</div>

				<?php 
					
					endwhile;
					endif; 
				?>

			</section>

			<?php exodus_support_articles(); ?>
		</div>


	</article><!-- #post-<?php the_ID(); ?> -->

	<?php exodus_home_section( 'nonprofit' ); ?>
<?php endwhile; ?>

</div>
<?php get_footer(); ?>

