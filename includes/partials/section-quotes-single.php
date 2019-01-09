<?php 
	$quote_callout_img = get_field('quote_callout_img');
	$quote_callout_text = get_field('quote_callout_text');
	$quote_callout_person = get_field('quote_callout_person');
?>
<!-- Testmonial Callout -->
<section class="section-single-quote">
	<img src="<?php echo $quote_callout_img['url']; ?>" alt="<?php echo $quote_callout_img['alt']; ?>" />
	<p><?php echo $quote_callout_text; ?></p>
	<p class="callout-person"><?php echo $quote_callout_person; ?></p>
</section>