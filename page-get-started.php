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
        <div class="medium-8 medium-offset-2 columns request">
            <h3>Request the College Student Rate</h3>
            <p>Are you a college student? Exodus 90 offers custom discounts to men at the university level. Contact us through this form and we will get y'all setup!</p>
            <a href="/contact" class="button2">Contact Us</a>
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

    <!--<div class="email-signup form-show-processing blue-bg ninety-bg ninety-bg-reverse get-started-signup">
        <div class="row text-center">
            <div class="small-12 columns email-signup">
                <h3>Not ready to get started?</h3>
                <p class="no-margin">Enter your email below to get the free Exodus 90 starter kit delivered to your inbox.</p>
                <div class="exodus-preview-wrapper">
                    <form id="exodus-preview-default" class="exodus-preview-form">
                        <fieldset class="input">
                            <label for="exp_email">Email Address</label>
                            <input type="email" name="email" id="exp_email" placeholder="Email address">
                            <a class="button" href="get-started/index.html">Sign Up</a>
                            <div class="success-block">
                                Success!
                            </div>
                            <div class="error-block">
                                Error!
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>-->

</div>

<?php get_footer(); ?>
