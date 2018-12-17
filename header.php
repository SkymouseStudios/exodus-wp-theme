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

      <?php
        if ( is_page_template('page-landing.php') ) {

        } else { ?>

        <div class="navigation-wrap">
            
            <header class="reg">
                <div class="mobile-menu-icon">
                    <button class="hamburger" style="padding-right: 40px;">☰</button>
                    <button class="cross" style="padding-right: 40px; display: none;">˟</button>
                </div>
                
                <a class="exodus-logo" href="/" title="Exodus 90">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Exodus 90"></span>
                </a>
                       
                <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
                  <?php wp_nav_menu( array( 
                          'container' => false,
                          'theme_location' => 'primary-nav', 
                          'container_class' => 'primary-navigation' 
                        )); ?>
                </nav>  
            </header>

            <div class="mobile-navigation" style="display: none;">
                <?php wp_nav_menu( array( 
                          'container' => false,
                          'theme_location' => 'mobile-nav', 
                          'container_class' => 'mobile-navigation' 
                        )); ?>
            </div>
        </div>
      <?php } ?>
