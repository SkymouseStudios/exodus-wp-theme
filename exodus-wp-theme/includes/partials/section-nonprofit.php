<?php 
	$nonprofit_headline = get_field('nonprofit_headline');
	$nonprofit_subhead = get_field('nonprofit_subhead');

	if ( $nonprofit_headline ): ?>
		<div class="the-world">
			<h2><?php echo $nonprofit_headline; ?></h2>
			<p><?php echo $nonprofit_subhead; ?></p>
		</div>
		
<?php 
	endif; ?>