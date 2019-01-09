<?php 
	$grid_title = get_field('grid_title');
	$grid_text = get_field('grid_text');
?>

<!-- Feature Grid, if it exists -->
<?php if( have_rows('grid_repeater') ): ?>
	<section>
		
		<h2 class="heading"><?php echo $grid_title; ?></h2>
		<p class="subheading"><?php echo $grid_text; ?></p>
	
	
		<div class="grid-feature">
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
