<?php
/**
 * Home promotion tier template.
 */
?>
<div class="home-promotion-tier">
	<div class="row">
		<div class="small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
			<?php if ($top_text = exodus_get_custom_field($tier_name . '_top_text', $id)) { ?>
				<div class="top-text">
					<?php echo $top_text; ?>
				</div>
			<?php } ?>	
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<?php $alignment = exodus_get_custom_field($tier_name . '_image_alignment', $id); ?>
			<?php if ($image = exodus_get_custom_field($tier_name . '_image', $id)) { ?>
				<div class="small-12 large-6 large-push-6 columns">
					<div class="text-center image">
						<img src="<?php echo $image['url']; ?>" alt="" />
					</div>
				</div>
			<?php } ?>
			<?php if ($side_text = exodus_get_custom_field($tier_name . '_side_text', $id)) { ?>
				<div class="small-12 large-6 large-pull-6 columns">
					<div class="side-text <?php echo $alignment == 'left' ? 'medium-uncentered opposite' : ''; ?>">
						<?php echo $side_text; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="row">
		<?php if ($button_link = exodus_get_custom_field($tier_name . '_button_link', $id)) { ?>
			<div class="small-12 columns text-center">
				<a class="button" href="<?php echo $button_link; ?>"><?php exodus_custom_field($tier_name . '_button_text', $id); ?></a>
			</div>
		<?php } ?>
	</div>
</div>