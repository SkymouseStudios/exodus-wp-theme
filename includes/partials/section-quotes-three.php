<!-- Testimonial block (Shows Three) -->
		
<?php 
if( have_rows('quote') ): ?>
	<section class="section-panel section-three-quotes team-grid">
<?php  
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
   ?>
	</section>
   <?php
endif;
	?>