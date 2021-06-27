<?php
/**
 * Plugin Name: TechiePress Elementor Widgets
 * Plugin URI: https://github.com/YTTechiePress/techiepress-donate-button-widget
 * Author: TechiePress
 * Author URI: https://github.com/YTTechiePress/techiepress-donate-button-widget
 * Description: Elementor Widgets from TechiePress like the donate payments button.
 * Version: 0.1.0
 * License: 0.1.0
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: techiepress-elementor-widgets
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

final class TechiePressElementorWidget {

    const VERSION = '0.1.0';
    const ELEMENTOR_MINIMUM_VERSION = '3.0.0';
    const PHP_MINIMUM_VERSION = '7.0';

    private static $_instance = null;

    public function __construct() {
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
    }

    public function i18n() {
        load_plugin_textdomain( 'techiepress-elementor-widgets' );

    }

    public function init_plugin() {
        // Check php version
        // check if elementor is installed
        // bring in the widget classes
        // bring in the controls
    }

    public function init_controls() {
        
    }

    public function init_widgets() {

    }

    public static function get_instance() {
        if ( null == self::$_instance ) {
            self::$_instance = new Self();
        }
    }

}

TechiePressElementorWidget::get_instance();