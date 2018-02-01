<?php
/**
 * 404 Page Not Found.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header(); ?>

<div id="content article-push">
	<div class="row">
		<div class="small-12 medium-10 medium-offset-1 columns">
			<h1 class="post-title"><?php esc_html_e( 'Page Not Found', '%Text_Domain%' ) ?></h1>
			<p><?php esc_html_e( 'We apologize but the page you\'re looking for could not be found.', '%Text_Domain%' ); ?></p>
		</div>
	</div>
</div><!-- #content -->

<?php get_footer();
