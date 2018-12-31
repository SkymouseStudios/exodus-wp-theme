
<?php if ( !( is_home() || is_front_page() ) ) { ?>
	<?php 
		$header_button_text = get_field('header_button_text');
		$header_button_url = get_field('header_button_url');
	 ?>

	<?php // Show the button in the header
		if ( $header_button_text ) { ?>
		<h4>The Exodus begins January 21st.</h4>
		<h1 id="countdown"></h1>
		<a style="text-align: center;" class="button button-orange" href="<?php echo $header_button_url; ?>"><?php echo $header_button_text; ?></a>
	<?php } ?>
<?php } else { ?>
	<form class="app-sign-up">
    	<fieldset class="input">
        <input type="email" name="email" id="exp_email" placeholder="Email address">
        <input style="background-color: #EF643A" type="submit" value="Sign up!">
    	</fieldset>
    	<p class="kill-margin">Free to start! No risk, and no credit card required.</p>
		<p class="tiny-text">Only $9.99 / month after.</p>
	</form>
<?php } ?>