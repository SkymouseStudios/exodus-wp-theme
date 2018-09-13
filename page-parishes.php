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

		$main_panel_title = get_field('main_panel_title');
		$main_panel_highlight = get_field('main_panel_highlight');
		$main_panel_link_url = get_field('main_panel_link_url');
		$main_panel_link_text = get_field('main_panel_link_text');
		$main_panel_main_text = get_field('main_panel_main_text');

		$section_title = get_field('section_title');

		$quote_callout_img = get_field('quote_callout_img');
		$quote_callout_text = get_field('quote_callout_text');
		$quote_callout_person = get_field('quote_callout_person');

		$contact_title = get_field('contact_title');
		$contact_text = get_field('contact_text');
		$contact_form = get_field('contact_form');

		$grid_title = get_field('grid_title');
		$grid_text = get_field('grid_text');

		$video_link = get_field('video_link');

		$header_button_text = get_field('header_button_text');
		$header_button_url = get_field('header_button_url');
	?>

	<?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
		<div class="header" style="background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;">
			<h1 class="post-title">
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
			
		<!-- Main Panel -->
			<h2><?php echo $main_panel_title; ?></h2>
			<section class="panel">

				<?php 
					// If there is a video link, show the video
					if(get_field('video_link'))
					{ ?>
						<div>
							<div id="orangeBlock" style="padding: 0px;">
								<video style="width: 100%;" playsinline controls loop="" muted="false" autostart="0" title="Exodus90 Intro" poster="" class="small">
								<source src="<?php echo $video_link; ?>" type="video/mp4">
								</video>
								<a href="<?php echo $main_panel_link_url; ?>">
									<?php echo $main_panel_link_text; ?>
									</a>
							</div>
						</div>
						

				<?php 
					// If no video link, just show the version with text.
					} else { ?>
						<div id="orangeBlock">
							<p><?php echo $main_panel_highlight; ?></p>
							<a href="<?php echo $main_panel_link_url; ?>"><?php echo $main_panel_link_text; ?></a>
						</div>
					<?php }
				 ?>
				

				<div class="main-text">
					<?php echo $main_panel_main_text;// Main text ?>
				</div>
			</section>
			

		<!-- Testmonial Callout -->
			<section id="quoteCallout">
				<img src="<?php echo $quote_callout_img['url']; ?>" alt="<?php echo $quote_callout_img['alt']; ?>" />
				<p><?php echo $quote_callout_text; ?></p>
				<p class="callout-person"><?php echo $quote_callout_person; ?></p>
			</section>

		<!-- Panels -->
			<h2><?php echo $section_title; ?></h2>
			<?php 
			if( have_rows('section') ):

		 	// loop through the rows of data
		    while ( have_rows('section') ) : the_row(); 
		    	$img = get_sub_field('img'); ?>

		        <section class="panel section-<?php the_sub_field('align'); ?>">
					<div class="words">
						<h3><?php the_sub_field('title');?></h3>
						<p><?php the_sub_field('text'); ?></p>
					</div>
					<div class="image">
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
					</div>
				</section>
			<?php
			    endwhile;
			endif;
	 		?>

	 	<!-- Feature Grid, if it exists -->
	 		<?php 
			if( have_rows('grid_repeater') ): ?>
				<section class="grid">
				<h2><?php echo $grid_title; ?></h2>
				<p class="subheading"><?php echo $grid_text; ?></p>
				
				<div id="featureGrid">
			 	<?php // loop through the rows of data
			    while ( have_rows('grid_repeater') ) : the_row(); 
			    	$img = get_sub_field('img'); ?>
					<div class="feature">
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
						<h3><?php the_sub_field('text'); ?></h3>
					</div>
			<?php
			    endwhile;
			    	echo "</div></section>"; // End the Section
				endif;
	 		?>

		<!-- Contact Form -->
			<section id="Contact">
				<h1><?php echo $contact_title; ?></h1>
				<p class="subheading"><?php echo $contact_text; ?></p>
				<?php echo do_shortcode( get_field('contact_form', false, false) ); ?>
			</section>

			<!-- Testimonial block (Shows Three) -->
			<section id="quoteBlock">
				<?php 
				if( have_rows('quote') ):

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
				endif;
		 		?>
		 	</section>

		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
    
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

