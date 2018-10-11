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

<footer class="ninety-bg" style="background: #2C3842;">
	<div class="row">
        <p style="float:left; color: white;">&copy;<?php echo date("Y"); ?> Exodus 90</p>
        <a style="float:right" href="https://www.iubenda.com/privacy-policy/8280995/full-legal">Privacy Policy</a>
    </div>
</footer>

<?php wp_footer(); ?>

<?php if ($embed_magnific_js) { ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
        $(function() {
            $('.product-images > a').magnificPopup({type: 'image', gallery: { enabled: true }});
        });
    </script>
<?php } ?>
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
