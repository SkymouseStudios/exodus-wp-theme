<?php
/**
 * Default single page
 *
 * @package %Theme_Name%
 * @author %Author%
 */
get_header(); ?>

<div id="content" class="page article-push">
    <article id="post-42" class="primary post-42 page type-page status-publish has-post-thumbnail hentry" role="main">
        <div class="post-content">
            <div class="row">
                <div class="post-header medium-10 medium-offset-1 columns">
                    <h1 class="post-title">Remote Fraternities</h1>
                    <?php if ($subline = exodus_get_custom_field('subline')): ?>
                        <div class="post-subline">
                            <p><?php echo $subline; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($postThumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID))): ?>
                <div class="row the-image medium-collapse small-collapse">
                    <div class="small-12 columns">
                        <div style="width:100%;height:240px;background: url(<?php echo $postThumbnail; ?>) no-repeat center;background-size: cover;"></div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row the-content">
                <div class="small-12 medium-8 medium-offset-2 columns">
                    <?php
                        $post = get_post();
                        echo $post->post_content;
                    ?>
                </div>
            </div>

        </div>
    </article>
</div>

<div class="row pricing-tiers-introduction">
    <div class="small-12 medium-12 text-center columns">
        <p>Take the first step to freedom today. Choose one of three Exodus program options. We provide Exodus through three delivery methods to meet your teams goals.</p>
    </div>
</div>

<?php require('partial-product-tiers.php') ?>

<br><br>

<?php require('partial-preview-email-signup.php'); ?>

<?php get_footer(); ?>
