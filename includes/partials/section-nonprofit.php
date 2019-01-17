<?php 
	// Get the values on the frontpage
	$nonprofit_headline = exodus_get_custom_field( 'nonprofit_headline', $id );
	$nonprofit_subhead = exodus_get_custom_field( 'nonprofit_subhead', $id );

	if ( $nonprofit_headline ) { ?>
		
		<section class="section-panel">

			<div class="photo-wall">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_050.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_064.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
				<img src="https://exodus90.com/wp-content/uploads/2019/01/Exodus_Seek_060.png" alt="">
			</div>

			<div class="the-world"></div>

			<div class="pad text-center">
				<h2><?php echo $nonprofit_headline; ?></h2>
				<p class="subheading"><?php echo $nonprofit_subhead; ?></p>
			</div>
		</section>	
<?php 
	} ?>