<?php
/**
* Template Name: Landing Page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>

<div class="page">
<?php while ( have_posts() ) : the_post(); ?>

	<section id="landing" class="section-panel grid-half">
	
		<div class="align">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
				
				<div class="post-content">
					<?php the_content(); ?>


				</div>
			</article><!-- #post-<?php the_ID(); ?> -->

		</div>
		
		<div class="align" style="background-color: #EF7449;">
			
			<div id="secondPanel" class="header">

			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Exodus 90"></span>
			<h1 class="post-title">
				<?php exodus_custom_field('headline'); ?>
			</h1>
			
			<?php if ( $subline = exodus_get_custom_field('subline')) { ?>
				<div class="post-subline">
					<?php echo $subline; ?>
				</div>
			<?php } ?>

				<div data-vl-widget="embedForm"></div>
				<!-- <div data-vl-widget="milestoneWidget"></div> -->
			</div>
		</div>

    </section>

<?php endwhile; ?>
</div>
<?php get_footer(); ?>

