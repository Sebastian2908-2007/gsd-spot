<?php
/**
 * Bootstraps the theme
 * @package gsdspot
 */
namespace GSDSPOT_THEME\Inc;

use GSDSPOT_THEME\Inc\Traits\Singleton;

class GSDSPOT_THEME {
    use Singleton;

    protected function __construct() {
        
        $this->set_hooks();
;    }

    protected function set_hooks() {
        //add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }
}