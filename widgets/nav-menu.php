<?php

namespace TechiePress\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Nav_Menu extends Widget_Base {

    public function __construct( $data = [], $args = null ) {
        parent::__construct( $data , $args );

        wp_enqueue_script( 'techiepress-menu-js', plugin_dir_url( __FILE__ ) . '../assets/js/menu.js' );
        wp_enqueue_style( 'techiepress-menu-css', plugin_dir_url( __FILE__ ) . '../assets/css/menu.css' );
        
    }
    
    public function get_name() {
        return 'techiePress-menu';
    }

    public function get_title() {
        return __( 'TechiePress Menu', 'techiepress-elementor-widgets' );
    }

    public function get_icon() {
        // return 'fa fa-menu';
        return 'eicon-nav-menu';
    }

    public function get_categories() {
        return ['techiepress'];
    }

    public function _register_control() {

    }

    public function get_style_depends() {
        return ['techiepress-menu-css'];
    }

    public function get_script_depends() {
        return ['techiepress-menu-js'];
    }

    // front end.
    protected function render() {
        echo wp_nav_menu(
            array(
                'container'  => '',
                'menu_class' => 'techiepress-menu',
            )
        );
    }

    // Back end.
    protected function _content_template() {
        echo wp_nav_menu(
            array(
                'container'  => '',
                'menu_class' => 'techiepress-menu',
            )
        );
    }

}