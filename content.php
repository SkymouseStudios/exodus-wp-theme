<?php
/**
 * Default implementation of the WordPress loop.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

if ( is_singular() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main" data-template-name="content">
		<h1 class="post-title"><?php the_title(); ?></h1>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
<?php endif;