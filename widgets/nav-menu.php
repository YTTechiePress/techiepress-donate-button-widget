<?php

namespace TechiePress\ElementorWidgets\Widgets;

use Elementor\Widget_Base;

/**
 * Have the widget code for the Custom Elementor Nav Menu.
 */

class Nav_Menu extends Widget_Base {
    
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
        // TODO: Add out own category in Elementor.
        return ['techiepress'];

        // pro-elements
        // woocommerce-elements
        // general
        // basic
    }

    public function _register_control() {

    }

    protected function render() {
        ?>
            <div>Hello widget</div>
        <?php
    }

    protected function _content_template() {
        ?>
            <div>Hello widget</div>
        <?php
    }

}