<?php

/**
 * Load the PHP export of your ACF config in non-development environments
 *
 * To prevent loading this file (e.g. in development), add the following to your wp-config.php:
 * define('USE_LOCAL_ACF_CONFIGURATION', true);
 */
if ( ! defined( 'USE_LOCAL_ACF_CONFIGURATION' ) || ! USE_LOCAL_ACF_CONFIGURATION ) {
  require_once dirname( __FILE__ ) . '/advanced-custom-field-export.php';
}
