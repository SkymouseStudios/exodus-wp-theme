<div class="email-signup form-show-processing blue-bg ninety-bg ninety-bg-reverse" style="background-color: #e5e5e5;">
    <img class="make-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-mark-circle.png" alt="" style="opacity: 0.022;" />
    <div class="row text-center">
        <div class="small-12 columns">

        	<?php $form_description = get_field('form_description'); ?>

        	<?php if( $form_description != null ):  
        		the_field('form_description');  
        	else: ?>
            	<h3 style="color: #000;">Not ready to get started?</h3>
            	<p style="color: #000;" class="no-margin">Enter email address below to get free articles about Exodus 90!</p>
        	<?php endif; ?>

            <?php echo do_shortcode('[preview]'); ?>
        </div>
    </div>
</div>