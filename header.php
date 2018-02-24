<?php
/**
 * Theme header.
 *
 * @package %Theme_Name%
 * @author %Author%
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-32x32.png">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" type="image/png">
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KKVJL4Q');</script>
  <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKVJL4Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="page-wrap">

      <div class="navigation-wrap">
          <nav class="utility-navigation">
              <ul>
                  <li class="secondary"><a href="http://thosecatholicmen.com/" target="_blank" title="Those Catholic Men" class="tcm" style="color: #231F20;">Brought to you by Those Catholic Men</a></li>
                  <li class="primary"><a href="/contact" class="utility-button" style="color: #231F20;">Contact Us</a></li>

              </ul>
          </nav>
          <header class="reg">
              <div class="mobile-menu-icon">
                  <button class="hamburger" style="padding-right: 40px;">☰</button>
                  <button class="cross" style="padding-right: 40px; display: none;">˟</button>
              </div>
              <div>
                  <ul class="primary-navigation">
                      <li>
                          <a href="/" title="Exodus 90">
                              <span class="exodus-logo"><img src="/wp-content/themes/exodus-wp-theme/assets/img/logo.svg" alt="Exodus 90"></span>
                          </a>
                      </li>
                      <div class="links">
                          <li class="item highlight"><a href="/get-started">Get Started &raquo;</a></li>
                          <li class="item"><a href="/what-does-day-91-look-like">Day 91</a></li>
                          <li class="item"><a href="/support">Support</a></li>
                          <li class="item"><a href="/about">About</a></li>
                      </div>
                  </ul>
              </div>
          </header>
          <div class="mobile-navigation" style="display: none;">
              <ul>
                  <a href="/about"><li>ABOUT</li></a>
                  <a href="/support"><li>SUPPORT</li></a>
                  <a href="/what-does-day-91-look-like"><li>DAY 91</li></a>
                  <a href="/get-started"><li class="navSpecial">GET STARTED »</li></a>
              </ul>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <script src="/wp-content/themes/exodus-wp-theme/assets/js/index.js"></script>
      </div>
