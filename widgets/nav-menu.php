<?php

namespace TechiePress\ElementorWidgets\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Stack;
use Elementor\Controls_Manager;

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
        return 'TechiePress Menu';
        // return __( 'TechiePress Menu', 'techiepress-elementor-widgets' );
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
        $settings = $this->get_settings_for_display();
        
        echo wp_nav_menu(
            array(
                'container'  => '',
                'menu_class' => 'techiepress-menu',
                'menu'       => $settings['techiepress_registered_menus']
            )
        );
    }

    // Back end.
    protected function content_template() {
        echo wp_nav_menu(
            array(
                'container'  => '',
                'menu_class' => 'techiepress-menu',
            )
        );
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            array(
                'label' => __( 'Content', 'techiepress-elementor-widgets' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ),
        );

        unset( $techiepress_menus );
        $techiepress_menus = get_registered_nav_menus();

        $default_menu = '';
        $count = 0;
        foreach ($techiepress_menus as $key => $value) {
            if ( $count == 0 ) {
                $default_menu = $key;
            }
            $count++;
        }

        // Add menus control
        $this->add_control(
            'techiepress_registered_menus',
            array(
                'label'   => __( 'Choose Menu', 'techiepress-elementor-widgets' ),
                'type'    => Controls_Manager::SELECT,
                'default' => $default_menu,
                'options' => $techiepress_menus,
            ),
        );

        $this->end_controls_section();
    }

}