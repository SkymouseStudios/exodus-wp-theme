<?php
/**
* Template Name: Home Page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="Home" class="page">
	<?php while ( have_posts() ) : the_post(); ?>

	<?php
		$guest_logo = get_field('guest_logo');
		$nonprofit_headline = exodus_get_custom_field( 'nonprofit_headline', $id );
		$nonprofit_subhead = exodus_get_custom_field( 'nonprofit_subhead', $id );
	?>
	
	<!-- Panel 1 Header -->
	<div id="HomeHero" class="hero">

		<video playsinline controls loop="" muted="false" autoplay="" title="Exodus90 Intro" poster="https://exodus90.com/wp-content/uploads/2018/08/exodus-90-bg.png" class="">
			<source src="https://exodus90.com/wp-content/uploads/2018/08/Exodus-90Draft4-2.mp4" type="video/mp4">
		</video>

		<div class="orange-top">
			<?php // Partner Logo on Partner Page
				if ( !( is_home() || is_front_page() ) ) { ?>
				<div>
					<div class="guest-logos">
						<div style="flex-grow: 2"></div>
	            
	            		<?php if ( $guest_logo != null ) { ?>
	            			<img src="<?php echo $guest_logo; ?>" alt="">
	            		<?php } ?>
	            		<div style="flex-grow: 2"></div>
					</div>
				</div>
				
			<?php } ?>
			
			<section class="section-panel title-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/are-you-ready-for-more.svg" alt="Are You Ready For More">
			</section>
		</div>
		
		<section class="section-panel grid-half">
			<div>
				<p><?php exodus_custom_field('subline'); ?></p>
				<?php get_template_part( 'includes/partials/app-signup' ); ?>		
			</div>	

			<div>
				<img class="m-hide" id="Smartphone" src="https://exodus90.com/wp-content/uploads/2018/12/ihpone-1.png" alt="Smartphone mockup">
			</div>							
		</section>
	</div>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		
		<div class="post-content">

			<?php exodus_home_section( 'default' ); ?>

			<?php get_template_part('includes/partials/section', 'sign-up-callout'); ?>

			<div style="height: 500px;" data-simple-slider>
				<?php 
					if( have_rows('nonprofit_photos' , $id ) ):
				 	// loop through the rows of data
				    while ( have_rows('nonprofit_photos' , $id ) ) : the_row();
				    	$img = get_sub_field('img');
				    	?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
					<?php 
						endwhile;
						endif; ?>
			</div>

			<section class="section-panel">

	
				<div class="the-world"></div>

				<div class="pad text-center">
					<h2><?php echo $nonprofit_headline; ?></h2>
					<p class="subheading"><?php echo $nonprofit_subhead; ?></p>
				</div>
			</section>	
		

		</div><!-- end post-content -->
	</article>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
