<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_get_pro extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image_id' => '',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		ob_start(); ?>
			
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Buy Premium', 'ihover' ),
	"base" 			=> "vc_get_pro",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Buy Mega Addons to explore more features', 'ihover'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/pro.png',
	'params' => array(
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( '', 'ich-vc' ). ' <a target="_blank" href="http://www.topdigitaltrends.net/mega-addons-visual-composer-wordpress-plugin/">BUY NOW MEGA ADDONS PRO TO EXPLORE MORE FEATURES</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Price Table (9 Effects)', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/price-table/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Interactive Banner 2', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/interactive-banner-2/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Modal Popup For Image Hover Effects', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/image-hover-effects-popup-demo/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Post Carousel/Grid', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/post-carousel/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Dual Button', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/dual-button/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Before After Image', 'ich-vc' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/before-after-image/">DEMO</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'Option for custom font size, color and height adjustment for mobile devices', 'ich-vc' ). ' ',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( 'In pro version, you can disable unused elements from dashboard to speed up your page loading time.', 'ich-vc' ). ' ',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
	),
) );