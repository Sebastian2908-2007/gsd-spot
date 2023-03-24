<?php
/**
 * Bootstraps the theme
 * @package gsdspot
 */
namespace GSDSPOT_THEME\inc;

use Gsdspot_theme\Inc\Traits\Singleton;

class GSDSPOT_THEME {
    use Singleton;

    protected function __construct() {
        $this->set_hooks()
;    }

    protected function set_hooks() {

    }
}