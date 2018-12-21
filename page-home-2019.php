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
		$section_title = get_field('section_title');
		$quote_callout_img = get_field('quote_callout_img');
		$quote_callout_text = get_field('quote_callout_text');
		$quote_callout_person = get_field('quote_callout_person');

	?>
	
	<!-- Panel 1 Header -->
	<div id="HomeHero" class="hero">
		<div class="orange-top">
			<section class="panel">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/are-you-ready-for-more.svg" alt="Are You Ready For More">
			</section>
		</div>
			
		<section class="panel">
			<div>
				<p><?php exodus_custom_field('subline'); ?></p>
				<?php get_template_part( 'includes/partials/app-signup' ); ?>		
			</div>	

			<div>
				<img class="m-hide" id="Smartphone" src="https://exodus90.com/wp-content/uploads/2018/12/ihpone-1.png" alt="Smartphone mockup">
			</div>							
		</section>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		
		<div class="post-content">
			<!-- Panel 2 Video -->
			<div style="text-align: center">
				<img class="icon pad" src="https://exodus90.com/wp-content/uploads/2018/12/mountain.png" alt="Mountain Icon">
			</div>
			
			
			<section class="panel pad">
				<video playsinline controls loop="" muted="false" autoplay="" title="Exodus90 Intro" poster="https://exodus90.com/wp-content/uploads/2018/08/exodus-90-bg.png" class="">
					<source src="https://exodus90.com/wp-content/uploads/2018/08/Exodus-90Draft4-2.mp4" type="video/mp4">
				</video>
			</section>

		<!-- Panel 3 (Repeat Sections) -->
		
		<div class="sectionizer-header pad">
			<h2><?php echo $section_title; ?></h2>
			<img class="title-background" src="https://exodus90.com/wp-content/uploads/2018/12/e90-orange.png" alt="">
		</div>
		
		<?php 
		if( have_rows('section') ):

	 	// loop through the rows of data
	    while ( have_rows('section') ) : the_row(); 
	    	$img = get_sub_field('img'); 
	    	$icon = get_sub_field('icon'); ?>

	        <section class="panel pad section-<?php the_sub_field('align'); ?>">
				<div class="words">
					<div>
						<img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
						<h4><?php the_sub_field('subhead');?></h4>
						<h3><?php the_sub_field('title');?></h3>
						<p><?php the_sub_field('text'); ?></p>
					</div>
				</div>
				<div class="image">
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
				</div>
			</section>
		<?php
		    endwhile;
		endif;
			?>

		<!-- Callout -->
		<section class="panel pad">
			<div class="grid-three-quarters ">
				<div class="ab">
					<h2 class="h1">Get Started for Free.</h2>
					<?php get_template_part( 'includes/partials/app-signup' ); ?>
				</div>
				

				<div class="c">
					<img style="max-width: 200px" src="https://exodus90.com/wp-content/uploads/2018/12/app-download-e1545415665443.jpg" alt="Apple App Download Icons">
					<img style="max-width: 200px" src="https://exodus90.com/wp-content/uploads/2018/12/app-download-1-e1545415700558.jpg" alt="Google App Download Icons">
				</div>
			</div>
		</section>
		
		
		<!-- Panel 4 (Reviews) -->
		<div class="the-world">
			<h2 class="h1">The World Over</h2>
			<p>Join 7,000+ men across the globe in the Exodus brotherhood.</p>
		</div>
		
		<?php 
		if( have_rows('quote') ): ?>
			<section id="quoteBlock">
		<?php  
		 	// loop through the rows of data
		    while ( have_rows('quote') ) : the_row(); 
		    	$img = get_sub_field('img'); ?>
				<div class="quote">
		        
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
					
					<div class="quote-words">
						
						<?php the_sub_field('text'); ?>
						<p class="small-text"><?php the_sub_field('person');?></p>
					</div>
				</div>
		<?php
		    endwhile;
		   ?>
			</section>
		   <?php
		endif;
			?>
	</div><!-- end post-content -->
	</article>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
