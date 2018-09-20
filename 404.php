<?php
/**
 * 404 Page Not Found.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

get_header(); ?>


<div class="header" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/404.jpg) no-repeat center; background-size: cover; height: 80vh; padding-top: 25%;">
	<h1 class="post-title">
		You've wandered into the desert.
	</h1>
	<div class="post-subline">
		We're sorry but the page you're looking for doesn't exist.
	</div>
	<a style="margin-top: 20px;" class="button button-orange" href="/get-started">Start your Exodus</a>
</div>

<?php get_footer();
