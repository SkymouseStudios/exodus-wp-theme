<?php
/**
* Default single page
*
* @package %Theme_Name%
* @author %Author%
*/
get_header(); ?>
<div id="content" class="get-started full-width article-push" data-template-name="page-get-started">

    <div class="row">
        <div class="post-header medium-10 medium-offset-1 columns">
            <h1 class="post-title">Get Started</h1>
            <div class="post-subline">
                <p>Take your first step to freedom by choosing your Exodus 90 program package:</p>
            </div>
        </div>
    </div>
    <div>
        <?php require('partial-product-tiers.php') ?>
    </div>

    <div class="row">
        <div class="small-12 medium-10 medium-offset-1 columns">
            <div class="small-12 medium-6 medium-uncentered columns request request-2">
                <?php the_field('college_requests');  ?>
            </div>

            <div class="small-12 medium-6 medium-uncentered columns request left">
                <?php the_field('parish_requests'); ?>
            </div>
        </div>
        

    </div>

    <div class="testimonial text-center">
        <div class="row">
            <div class="small-12 medium-10 medium-offset-1 columns">
                <p>"Exodus is a path to freedom, through learning how to carry your cross and embracing penance and suffering together in fraternity. Totally worth it!"</p>
                <p style="font-size: 15px; font-style: normal;">Recent Exodus Participant</p>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
