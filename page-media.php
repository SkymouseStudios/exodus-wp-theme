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

			<div class="row uncontained medium-collapse small-collapes ninety-bg">
				<div class="small-10 medium-9 medium-offset-1 columns" style="text-align: center;">
						<div style="margin: 20px"></div>
						<a class="button button-orange button-larger" href="#Ads">Ads</a>
						<a class="button button-orange button-larger" href="#Bulletins">Bulletins</a>
						<a class="button button-orange button-larger" href="#Logos">Logos</a>
						<div style="margin: 20px"></div>
						<a class="button button-orange button-larger" href="#Posters">Posters</a>
						<a class="button button-orange button-larger" href="#ProductPhotos">Product Photos</a>
						<a class="button button-orange button-larger" href="#Screenshots">Screenshots</a>
						<div style="margin: 20px"></div>
						<a class="button button-orange button-larger" href="#SocialMedia">Social Media</a>
						<a class="button button-orange button-larger" href="#Video">Video</a>
				</div>
			</div>


		
	<!-- Block 1 : Ads -->
	<?php if( have_rows('media_files') ): ?>
		<?php while( have_rows('media_files') ): the_row(); 
			$gallery = get_sub_field('ads');
			$size = 'medium';
			?>
				<div class="exodus-support-articles">
					<div class="row medium-collapse">
						<div class="small-10 small-offset-1 medium-12 medium-offset-0 columns">
							<div class="small-12 medium-3 columns">
								<h3 id="Ads">Ads</h3>
								<p>These Exodus 90 ads are perfect for printing in your bulletin, adding to your church email newsletter or placing on your parish website.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Ads.zip">Download All</a>
							</div>
							
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								        <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="Bulletins">Bulletins</h3>
								<p>Share the message of Exodus 90 in your church bulletin with these specially designed ads that make it effortless.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Bulletin-Ads.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="Logos">Logos</h3>
								<p>Our logos can be used for partnerships, custom advertisements or t-shirts — it's all up to your own imagination.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Logos.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="Posters">Posters</h3>
								<p>Print and hang these posters in your Parish Hall, Youth Center or your home office to keep you motivated and reach other men in your life.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Posters.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="ProductPhotos">Product Photos</h3>
								<p>These Exodus 90 ads are perfect for printing in your bulletin, adding to your church email newsletter or placing on your parish website.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Product-Photos.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="Screenshots">Screenshots</h3>
								<p>Give your phone and computer a facelift with our free backgrounds that keep you focused and provide an opportunity to witness to others.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Screenshots.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="SocialMedia">Social Media Graphics</h3>
								<p>Share these graphics with your group as you all begin to detach from technology and begin freeing yourselves.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Social-Media-Graphics.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
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
							<div class="small-12 medium-3 columns">
								<h3 id="Video">Video</h3>
								<p>Share our Exodus 90 video with you friends, family and colleagues. Embed it on your website or show it during your weekly bible study.</p>
								<hr>
								<a class="button button-orange button-larger" href="https://exodus90.com/wp-content/uploads/2018/07/Videos.zip">Download All</a>
							</div>
							<?php 
								if( $gallery ): ?>
								    <ul class="small-12 medium-9 columns">
								        <?php foreach( $gallery as $image ): ?>
								            <li>
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
		<hr style="height: 15px; background-color: #EF643A;">
	<!-- END Block 8 -->

	</article>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>

