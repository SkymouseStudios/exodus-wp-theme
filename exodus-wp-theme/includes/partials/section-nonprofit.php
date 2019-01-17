<?php 
	// Get the values on the frontpage
	$nonprofit_headline = exodus_get_custom_field( 'nonprofit_headline', $id );
	$nonprofit_subhead = exodus_get_custom_field( 'nonprofit_subhead', $id );

	if ( $nonprofit_headline ) { ?>
		
		<section class="section-panel">

			<div class="photo-wall">

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

			<div class="the-world"></div>

			<div class="pad text-center">
				<h2><?php echo $nonprofit_headline; ?></h2>
				<p class="subheading"><?php echo $nonprofit_subhead; ?></p>
			</div>
		</section>	
<?php 
	} ?>