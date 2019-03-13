<?php
/**
 * Theme footer.
 *
 * @package %Theme_Name%
 * @author %Author%
 */
global $embed_magnific_js;
?>

</div> <!-- Closing .page-wrap -->

<?php
    if ( is_page_template('page-landing.php') ) {

    } else { ?>

        <footer class="ninety-bg">
        	<div class="row">

                <div class="footer-logo">
                    <a class="" href="/" title="Exodus 90">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Exodus 90"></span>
                    </a>
                    <p><?php printf( get_bloginfo ( 'description' ) ); ?></p>
                    <p>&copy;<?php echo date("Y"); ?> Exodus 90</p>
                    <a style="color: #b66144; font-weight: 300;" href="https://www.iubenda.com/privacy-policy/8280995/full-legal">Privacy Policy</a>
                </div>
                

                <nav class="footer-navigation">
                 <?php wp_nav_menu( array( 
                        'theme_location' => 'footer-nav'
                      )); ?>
                </nav>
            </div>
        </footer>
<?php } ?>

<?php wp_footer(); ?>

<?php if ($embed_magnific_js) { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
        $(function() {
            $('.product-images > a').magnificPopup({type: 'image', gallery: { enabled: true }});
        });
    </script>
<?php } ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
    <script>
      simpleslider.getSlider();
    </script>
    
    <script type="text/javascript">
        adroll_adv_id = "VWDY6XBY2NDX3CH6SSPVWP";
        adroll_pix_id = "FZXQISG4QZC3ZMYURIGT7K";
        /* OPTIONAL: provide email to improve user identification */
        /* adroll_email = "username@example.com"; */
        (function () {
        var _onload = function(){
        if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
        if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
        var scr = document.createElement("script");
        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
        scr.setAttribute('async', 'true');
        scr.type = "text/javascript";
        scr.src = host + "/j/roundtrip.js";
        ((document.getElementsByTagName('head') || [null])[0] ||
        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
        }());
    </script>
    
</body>
</html>
