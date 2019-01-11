<?php 
	$contact_title = get_field('contact_title');
	$contact_text = get_field('contact_text');
	$contact_form = get_field('contact_form');
?>
<!-- Contact Form -->
<section id="Contact">
	<h2><?php echo $contact_title; ?></h2>
	<p class="subheading"><?php echo $contact_text; ?></p>
	<?php echo do_shortcode( get_field('contact_form', false, false) ); ?>
</section>