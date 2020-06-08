<?php
/**
 * Integration with sliders.
 */

function ultra_sliders_get_options() {
	$options = array( '' => __( 'None', 'ultra' ) );
	
	if ( class_exists( 'MetaSliderPlugin' ) ) {
		$sliders = get_posts( array(
			'post_type' => 'ml-slider',
			'numberposts' => 200,

		) );

		foreach ( $sliders as $slider ) {
			$options[ 'meta:' . $slider->ID ] = __( 'MetaSlider: ', 'ultra' ) . $slider->post_title;
		}
	}
	
	if ( class_exists( 'SmartSlider3' ) ) {
		global $wpdb;
		$sliders = $wpdb->get_results( "SELECT id, title FROM " . $wpdb->prefix . "nextend2_smartslider3_sliders LIMIT 200" );
		
		foreach( $sliders as $slider ) {
			$options[ 'smart:' . $slider->id ] = __( 'Smart Slider: ', 'ultra' ) . $slider->title;
		}
	}

	return $options;
}

function ultra_smartslider_install_link() {
	if ( function_exists( 'siteorigin_plugin_activation_install_url' ) ) {
		return siteorigin_plugin_activation_install_url( 'smart-slider-3', 'SmartSlider' );
	} else {
		return 'http://downloads.wordpress.org/plugin/smart-slider-3.zip';
	}
}

function ultra_smartslider_affiliate( $source ) {
	return 'purothemes';
}
add_filter( 'smartslider3_hoplink', 'ultra_smartslider_affiliate' );

if ( ! defined( 'METASLIDER_AFFILIATE_ID' ) ) {
	define( 'METASLIDER_AFFILIATE_ID', '4' );
}

function ultra_metaslider_affiliate_link_replace() {
	$url = add_query_arg( 'afref', METASLIDER_AFFILIATE_ID, 'https://www.metaslider.com/upgrade/' );
	return $url;
}
add_filter( 'metaslider_hoplink', 'ultra_metaslider_affiliate_link_replace' );

function ultra_metaslider_affiliate_banner_link_replace( $link ) {
	if ( strpos( $link, 'metaslider.com' ) ) {
		$link = add_query_arg( 'afref', METASLIDER_AFFILIATE_ID, $link );
	}
	return $link;
}
add_filter( 'updraftplus_com_link', 'ultra_metaslider_affiliate_banner_link_replace' );
