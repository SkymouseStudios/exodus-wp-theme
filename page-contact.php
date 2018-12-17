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
                <div class="post-header medium-6 medium-offset-3 columns">
                    <h1 class="post-title">Contact Us</h1>
                    <?php if ($subline = exodus_get_custom_field('subline')): ?>
                        <div class="post-subline">
                            <?php echo $subline; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="small-12 medium-4 columns">
                    <a href="/support">Support Articles</a>
                    <hr>
                    <h4>Email</h4>
                    <a href="mailto:support@exodus90.com">support@exodus90.com</a><br>
                    <hr>
                    <h4>Social</h4>
                    <a href="https://twitter.com/TCatholicMen">Twitter</a><br>
                    <a href="https://www.facebook.com/ThoseCatholicMen?_rdr=p">Facebook</a><br>
                    <a href="https://www.instagram.com/thosecatholicmen">Instagram</a>
                </div>
                <div class="small-12 medium-8 columns">
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Contact Form"]'); ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="../wp-content/themes/exodus-wp-theme/assets/js/input.js"></script>
                </div>
            </div>

        </div> <!-- Closing .page-wrap -->

        <div class="transitioner">
            <a href="http://thosecatholicmen.com"><img src="../wp-content/themes/exodus-wp-theme/assets/img/triangle.png"></a>
        </div>
        <!-- This site is converting visitors into subscribers and customers with OptinMonster - http://optinmonster.com --><div id="om-pnld7a8lds4mllfj-holder"></div><script>var pnld7a8lds4mllfj,pnld7a8lds4mllfj_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){pnld7a8lds4mllfj_poll(function(){if(window['om_loaded']){if(!pnld7a8lds4mllfj){pnld7a8lds4mllfj=new OptinMonsterApp();return pnld7a8lds4mllfj.init({u:"22112.397580",staging:0,dev:0,beta:0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="//a.optnmnstr.com/app/js/api.min.js",o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;pnld7a8lds4mllfj=new OptinMonsterApp();pnld7a8lds4mllfj.init({u:"22112.397580",staging:0,dev:0,beta:0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script><!-- / OptinMonster --><script type="text/javascript" src="../wp-includes/js/imagesloaded.min-ver=3.2.0.js"></script>
        <script type="text/javascript" src="../wp-includes/js/masonry.min-ver=3.3.2.js"></script>
        <script type="text/javascript" src="../wp-content/themes/exodus-wp-theme/assets/js/scripts.js"></script>
        <script type="text/javascript" src="../wp-content/plugins/contact-form-7/includes/js/jquery.form.min-ver=3.51.0-2014.06.20.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var _wpcf7 = {"loaderUrl":"https:\/\/exodus90.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ..."};
            /* ]]> */
        </script>
        <script type="text/javascript" src="../wp-content/plugins/contact-form-7/includes/js/scripts-ver=4.5.1.js"></script>
        <script type="text/javascript" src="../wp-content/plugins/exodus-preview-plugin/resources/assets/exodus-preview-ver=8b9b9e9f07d1bf31c173fca3ec171628.js"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/?ver=8b9b9e9f07d1bf31c173fca3ec171628"></script>
        <script type="text/javascript" src="../wp-content/plugins/exodus-purchase-plugin/resources/assets/exodus-purchase-20160202&amp;ver=8b9b9e9f07d1bf31c173fca3ec171628.js"></script>
        <script type="text/javascript" src="../wp-includes/js/wp-embed.min-ver=8b9b9e9f07d1bf31c173fca3ec171628.js"></script>
        <script type="text/javascript">var omapi_localized = { ajax: 'https://exodus90.com/wp-admin/admin-ajax.php?optin-monster-ajax-route=1', nonce: 'a3fadc71e7' };</script>


    </article></div>


<?php get_footer(); ?>
