<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>


<div id="content" class="page article-push" data-template-name="page-support">
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?> role="main">
		<div class="post-content">
			
		<!-- PAGE HEADER TITLE -->
			<div class="row medium-collapse">
				<div class="post-header small-12 medium-10 medium-offset-1 columns">
					<h1 class="post-title"><?php exodus_custom_field('headline'); ?></h1>
					<?php if ($subline = exodus_get_custom_field('subline')): ?>
						<div class="post-subline">
							<?php echo $subline; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

		<!-- PAGE HEADER IMAGE -->
			<?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
				<div class="row medium-collapse small-collapse">
					<div class="small-12 columns">
						<div style="width:100%;height:240px;background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;"></div>
					</div>
				</div>
			<?php endif; ?>

		<!-- DESCRIPTION OF PAGE -->
			<div class="row uncontained blue-bg medium-collapse small-collapse ninety-bg ninety-bg-reverse">
				<img class="make-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-mark-circle.png" alt="" />
				<div class="small-10 small-offset-1 medium-6 medium-offset-3 columns">
					<div id="ask-a-question" class="pad-top pad-bottom">
						
						<h3>It all starts with you.</h3>
						<p>We hope you've been changed, but the journey of exodus is only the beginning. Once we are freed, we are called free others around us. Sharing with your friends, family, workplace and parish are all ways you can make the difference. </p>
						<p>Here are some free resources to help you do just that!</p>

						<a class="button" href="https://exodus90.com/wp-content/uploads/2018/03/Exodus90-Media-Pack-3-28-2018.zip">Download Everything!</a>
					</div>
				</div>
			</div>

		<!-- MEDIA FILES TO DOWNLOAD -->
			<div class="exodus-support-articles">
				<h3 class="text-center">Individual Media Files</h3>

				

				
				<div class="row medium-collapse">
					<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
						<?php 

							$images = get_field('media_file');
							$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

							if( $images ): ?>
							    <ul>
							        <?php foreach( $images as $image ): ?>
							            <li class="small-12 medium-4 medium-uncentered columns">
			            					<div class="support-article-wrapper">
							            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
							            
							            <h4><?php echo $image['title']; ?></h4>

							         
										<?php echo $image['caption']; ?>
										<a rel="bookmark" class="article-read-more" href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>">Download</a>
							        	<?php endforeach; ?>
							        </div>
							        </li>
							    </ul>
						<?php endif; ?>

			


					</div>
				</div>
			</div>
		</div>

	</article>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

