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
		$section_subtitle = get_field('section_subtitle');
		$quote_callout_img = get_field('quote_callout_img');
		$quote_callout_text = get_field('quote_callout_text');
		$quote_callout_person = get_field('quote_callout_person');

		$guest_logo = get_field('guest_logo');
	?>
	
	<!-- Panel 1 Header -->
	<div id="HomeHero" class="hero">
		<div class="orange-top">
			<?php if ( !( is_home() || is_front_page() ) ) { ?>
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
			

			<section>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/are-you-ready-for-more.svg" alt="Are You Ready For More">
				
				<div class="big-text"><?php exodus_custom_field('subline'); ?></div>
			</section>

			<?php get_template_part( 'includes/partials/app-signup' ); ?>
		</div><!-- end orange -->
			

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		
		<div class="post-content margin-t">
			
			<!-- Panel 2 Video -->
			<div style="text-align: center" class="margin-b">
				<img class="icon pad" src="https://exodus90.com/wp-content/uploads/2018/12/mountain.png" alt="Mountain Icon">
			</div>

			<div class="sectionizer-header pad margin-t">
				<h2>Welcome to Exodus 90</h2>
				<p>A 90-day spiritual exercise for Catholic men.</p>
			</div>

			<section class="section-special-bg section-blank">
				<video playsinline controls loop="" muted="false" autoplay="" title="Exodus90 Intro" poster="https://exodus90.com/wp-content/uploads/2018/08/exodus-90-bg.png" class="">
					<source src="https://exodus90.com/wp-content/uploads/2018/08/Exodus-90Draft4-2.mp4" type="video/mp4">
				</video>

				<div style="text-align: center">
					<h4 style="padding-bottom: 15px;">Join 7,000+ men across the globe <br>in the Exodus brotherhood.</h4>
					<?php get_template_part( 'includes/partials/app-signup' ); ?>
				</div>
			</section>

				
			<!-- Panel 3 (Repeat Sections) -->
			
			<div class="sectionizer-header">
				<h2><?php echo $section_title; ?></h2>
				<p><?php echo $section_subtitle; ?></p>
			</div>
			

			<section class="section-special-bg">

				<div class="accordion">
					<ul>
				<?php 
				if( have_rows('section') ):

			 	// loop through the rows of data
			    while ( have_rows('section') ) : the_row();  ?>
					<li>
			            <input type="radio" name="select" class="accordion-select" checked />
			            <div class="accordion-title">
			                <span>
			                	<h4><?php the_sub_field('subhead');?></h4>
								<h5><?php the_sub_field('title');?></h5>
			                </span>
			            </div>
			            <div class="accordion-content">
			                <?php the_sub_field('text'); ?>
			            </div>
			            <div class="accordion-separator"></div>
			        </li> 
				<?php
				    endwhile;
					endif;
				?>
					</ul>
				</div> 
			 
			</section>

			<!-- Panel 4 (Reviews) -->

			<section>
				<div class="sectionizer-header">
					<h2>Exodus 90 changes the world.</h2>
					<p>Exodus is a non-profit working to change the world, one free man at a time. All proceeds goes towards reaching more men, keeping our systems running and furthering the Exodus Mission.</p>
				</div>
			
				<div class="partners">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/archdiocese-of-new-orleans.png" alt="">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/uCatholic-Logo_272px.png" alt="">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/cropped-logo-1.png" alt="">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/logo2-e1546293119462.jpg" alt="">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/chastity-project-logo.png" alt="">
					<img src="https://exodus90.com/wp-content/uploads/2018/12/OSV_spine_stack.jpeg" alt="">
				</div>
			</section>

			<!-- Callout -->
			<section class="section-callout">
				<h2>Start your own fraternity of Catholic men.</h2>
				<?php get_template_part( 'includes/partials/app-signup' ); ?>
			</section>
			
		</div><!-- end post-content -->
	</article>

	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
