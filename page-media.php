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
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="row uncontained medium-collapse small-collapes ninety-bg">
				<div class="small-10 small-offset-1 medium-6 medium-offset-3 columns">
					
						<?php the_field('media_description');  ?>
			
				</div>
			</div>

		
	<!-- Block 1 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('ads');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Ads</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 1 -->

	<!-- Block 2 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('bulletin_ads');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Bulletin Ads</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 2 -->

	<!-- Block 3 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('logos');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Logos</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 3 -->

	<!-- Block 4 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('posters');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Posters</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 4 -->

	<!-- Block 5 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('product_photos');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Product Photos</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 5 -->

	<!-- Block 6 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('screenshots');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Screenshots</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 6 -->

	<!-- Block 7 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('social_media_graphics');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Social Media Graphics</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 7 -->

	<!-- Block 8 -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('videos');
			$size = 'thumbnail';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<h3>Videos</h3>
							<hr>
							<?php 
								if( $gallery ): ?>
								    <ul>
								        <?php foreach( $gallery as $image ): ?>
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
			<?php 
				endwhile;
				endif;
			
			?>
		</div>
	<!-- END Block 8 -->

	</article>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

