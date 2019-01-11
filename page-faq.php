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
			<div class="row uncontained blue-bg medium-collapse small-collapse ninety-bg ninety-bg-reverse">
				<img class="make-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-mark-circle.png" alt="" />
				<div class="small-10 small-offset-1 medium-6 medium-offset-3 columns">
					<div id="ask-a-question" class="pad-top pad-bottom">
						<h3 style="color: white">5 Steps to Get Started</h3>
						<p>1. Invite 5-7 other men to join you for Exodus 90. Each man is to register individually at Exodus90.com/get-started.</p>
						<p>2. Adapt your daily schedule to the Exodus 90 regimen. Read and reflect upon the daily scriptures and meditations. Act upon the action items provided each week.</p>
						<p>3. Plan and prioritize your weekly meetings. Consider setting aside social time for the fraternity each week as well.</p>
						<p>4. Assign accountability partners within your Exodus 90 fraternity.</p>
						<p>5. Pursue a priest, wise mentor, or a former Exodus 90 man to act as a spiritual director for your Exodus 90 fraternity.
						</p>
                        <button id="btn-ask-question" class="button"><a href="/what-does-day-91-look-like">What's Day 91 Look Like?</a></button>
					</div>
				</div>
			</div>

			<section>
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
	<?php exodus_home_promotion_tier('home_tier_three'); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

