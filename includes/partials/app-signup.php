<?php 
	$header_button_text = get_field('header_button_text');
	$header_button_url = get_field('header_button_url');
	$header_content = get_field('header_content');

	 // Show the button in the header
	if ( $header_content ) { 
		echo $header_content;
	 }

	if ( $header_button_text ) { ?>
		<a class="button button-orange button-full-width" href="<?php echo $header_button_url; ?>"><?php echo $header_button_text; ?></a>
	<?php } ?>