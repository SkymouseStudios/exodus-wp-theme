<?php 
	$section_title = exodus_get_custom_field( 'section_title' , $id );
	$section_subtitle = exodus_get_custom_field( 'section_subtitle' , $id );
?>
<!-- Panel 3 (Repeat Sections) -->
	
	<div class="sectionizer-header pad">
		<h2><?php echo $section_title; ?></h2>
		<img class="title-background" src="https://exodus90.com/wp-content/uploads/2018/12/e90-orange.png" alt="Orange Exodus 90 Badge">
	</div>

	<?php if ( $section_subtitle ) { ?>
		<p class="subheading"><?php echo $section_subtitle; ?></p>
	<?php } ?>
	
	<?php 

	if( have_rows('section' , $id ) ):
 	// loop through the rows of data
    while ( have_rows('section' , $id ) ) : the_row();
    	$img = get_sub_field('img'); 
    	$icon = get_sub_field('icon');
    	$align = get_sub_field('align'); 
    	$title = get_sub_field('title'); 
    	$subhead = get_sub_field('subhead'); 
    	$text = get_sub_field('text'); 
    	?>

        <section class="section-panel grid-half pad section-<?php echo $align; ?>">
			<div class="words">
				<div>
					<?php if ($icon): ?>
						<img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
					<?php endif; ?>
					
					<?php if ($subhead): ?>
						<h4><?php echo $subhead;?></h4>
					<?php endif; ?>
					
					<h3><?php echo $title;?></h3>
					<p><?php echo $text; ?></p>
				</div>
			</div>
			<div class="image">
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
			</div>
		</section>
<?php
    endwhile;
	endif;
	?>