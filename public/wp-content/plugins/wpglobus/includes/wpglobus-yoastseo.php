<?php
/**
 * File: wpglobus-yoastseo.php
 *
 * @package WPGlobus\Yoast
 */

/**
 * @since 1.9.14
 * 21.04.2018 - 73
 */ 
$wpglobus_yoastseo_latest_version = '73';

if ( defined('WPSEO_VERSION') && defined('WPSEO_PREMIUM_PLUGIN_FILE') ) {
	/**
	 * Start with Yoast SEO Premium.
	 */
	if ( version_compare( WPSEO_VERSION, '3.9', '>=' ) ) {
		/**
		 * Support Yoast SEO Premium version 3.9 or later.
		 */
		if ( version_compare( WPGLOBUS_VERSION, '1.8', '>=' ) ) {
			/**
			 * Version of file must be latest.
			 */
			$ver = $wpglobus_yoastseo_latest_version; 
			require_once "vendor/class-wpglobus-yoastseo$ver.php";
			WPGlobus_YoastSEO::controller($ver);
		} else {
			require_once 'vendor/class-wpglobus-yoastseo44.php';
			WPGlobus_YoastSEO::controller();
		}
	} else {
		require_once 'vendor/class-wpglobus-yoastseo38.php';
		WPGlobus_YoastSEO::controller();		
	}
	
} else {

	if ( defined( 'WPSEO_VERSION' ) ) {

		if ( version_compare( WPSEO_VERSION, '3.8', '>=' ) ) {

			if ( version_compare( WPSEO_VERSION, '4.0', '>=' ) ) {
				
				$version = '40';
				$version = version_compare( WPSEO_VERSION, '4.1', '>=' ) ? '41' : $version;
				$version = version_compare( WPSEO_VERSION, '4.4', '>=' ) ? '44' : $version;
				$version = version_compare( WPSEO_VERSION, '4.8', '>=' ) ? '48' : $version;
				$version = version_compare( WPSEO_VERSION, '5.9', '>=' ) ? '59' : $version;
				$version = version_compare( WPSEO_VERSION, '7.3', '>=' ) ? $wpglobus_yoastseo_latest_version : $version;
				
				require_once "vendor/class-wpglobus-yoastseo$version.php";
				
				if ( version_compare( WPSEO_VERSION, '4.8', '>=' ) ) {
					WPGlobus_YoastSEO::controller($version);
				} else {
					WPGlobus_YoastSEO::controller();
				}
				
			} else {
				
				require_once 'vendor/class-wpglobus-yoastseo38.php';
				WPGlobus_YoastSEO::controller();
			
			}
			
		} else if ( version_compare( WPSEO_VERSION, '3.4', '>=' ) ) {

			require_once 'vendor/class-wpglobus-yoastseo34.php';
			WPGlobus_YoastSEO::controller();

		} else {

			if ( version_compare( WPSEO_VERSION, '3.3.0', '>=' ) ) {
				require_once 'vendor/class-wpglobus-yoastseo33.php';
				WPGlobus_YoastSEO::controller();
			} else if ( version_compare( WPSEO_VERSION, '3.2.0', '>=' ) ) {
				require_once 'vendor/class-wpglobus-yoastseo32.php';
				WPGlobus_YoastSEO::controller();
			}

		}

	}

} // class

# --- EOF
