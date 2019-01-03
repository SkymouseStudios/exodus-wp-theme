
<?php if ( !( is_home() || is_front_page() ) ) { ?>
	<?php 
		$header_button_text = get_field('header_button_text');
		$header_button_url = get_field('header_button_url');
	 ?>

	<?php // Show the button in the header
		if ( $header_button_text ) { ?>
		<h4>The Exodus begins January 21st.</h4>
		<h2 id="countdown"></h2>
		<a style="text-align: center;" class="button button-orange" href="<?php echo $header_button_url; ?>"><?php echo $header_button_text; ?></a>
	<?php } ?>
<?php } else { ?>
	<button class="btn-header">
		Sign up!
	</button>
<?php } ?>