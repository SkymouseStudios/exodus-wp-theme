<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id="content" class="get-started full-width article-push" data-template-name="page-get-started">

    <div class="row">
        <div class="small-12 medium-6 medium-centered columns">
                <?php the_content(); ?>
        </div>
    </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
