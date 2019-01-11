<!-- Main Panel -->
<?php 
	$main_panel_title = get_field('main_panel_title');
	$main_panel_highlight = get_field('main_panel_highlight');
	$main_panel_link_url = get_field('main_panel_link_url');
	$main_panel_link_text = get_field('main_panel_link_text');
	$main_panel_main_text = get_field('main_panel_main_text'); 

	$video_link = get_field('video_link');
?>

<div class="pad">
	<h2 class="heading"><?php echo $main_panel_title; ?></h2>
</div>

<section class="section-panel grid-half">

	<?php 
		// If there is a video link, show the video
		if(get_field('video_link'))
		{ ?>
			<div>
				<div id="orangeBlock" style="padding: 0px;">
					<video style="width: 100%;" playsinline controls loop="" muted="false" autostart="0" title="Exodus90 Intro" poster="" class="small">
					<source src="<?php echo $video_link; ?>" type="video/mp4">
					</video>
					<a href="<?php echo $main_panel_link_url; ?>">
						<?php echo $main_panel_link_text; ?>
						</a>
				</div>
			</div>
	<?php 
		// If no video link, just show the version with text.
		} else { ?>
			<div id="orangeBlock" class="block-orange">
				<p><?php echo $main_panel_highlight; ?></p>
				<a href="<?php echo $main_panel_link_url; ?>"><?php echo $main_panel_link_text; ?></a>
			</div>
		<?php }
	 ?>
	
	<div class="main-text">
		<?php echo $main_panel_main_text;// Main text ?>
	</div>
</section>