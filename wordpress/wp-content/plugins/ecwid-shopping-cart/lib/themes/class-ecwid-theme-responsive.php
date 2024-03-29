<?php

require_once ECWID_THEMES_DIR . '/class-ecwid-theme-base.php';

class Ecwid_Theme_Responsive extends Ecwid_Theme_Base
{
	public $has_advanced_layout = true;

	public function __construct()
	{
		parent::__construct();

		if ( $this->need_advanced_layout() ) {
			wp_enqueue_style( 'ecwid-theme-adjustments' , plugins_url( 'ecwid-shopping-cart/css/themes/responsive-adjustments.css' ), array(), false, 'all' );
			wp_enqueue_script( 'ecwid-theme', plugins_url( 'ecwid-shopping-cart/js/themes/responsive.js' ), array( 'jquery' ), false, true );

			add_filter( 'ecwid_minicart_shortcode_content', array( $this, 'minicart_shortcode_content' ) );
		}

		wp_enqueue_style( 'ecwid-open-sans' , 'http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic-ext,cyrillic,greek-ext,vietnamese,greek,latin-ext');
		wp_enqueue_style( 'dashicons' );
		wp_enqueue_style( 'ecwid-theme-fixes' , plugins_url( 'ecwid-shopping-cart/css/themes/responsive.css' ), array(), false, 'all' );

		add_filter('body_class', array($this, 'body_class'));

		add_action('ecwid_shop_page_created', array($this, 'on_create_store_page'));
		add_action('switch_theme', array($this, 'switch_theme'));
	}

	public function minicart_shortcode_content( $content )
	{

		if ( get_the_ID() == get_option( 'ecwid_store_page_id' ) ) {
			$content = '<script type="text/javascript"> xMinicart("style=","layout=Mini"); </script>';
		}

		return $content;
	}

	public function body_class($classes)
	{
		if (get_option('ecwid_show_search_box')) {
			$classes[] = 'ecwid-with-search';
		}

		return $classes;
	}

	public function on_create_store_page($page_id)
	{
		update_post_meta($page_id, '_wp_page_template', 'full-width-page.php');
	}
}

global $ecwid_current_theme;
$ecwid_current_theme = new Ecwid_Theme_Responsive();