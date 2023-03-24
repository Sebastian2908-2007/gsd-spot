<?php 

namespace GSDSPOT_THEME\Inc\Traits;

trait Singleton {
   public function __construct() {

   }

   public function __clone() {

   }

   final public static function get_instance() {
//print_r('run');
    static $instance = [];

    $called_class = get_called_class();

    if( !isset($instance[$called_class])) {
        $instance[$called_class] = new $called_class();
        do_action(sprintf('gsdspot_theme_singleton_init%s', $called_class));
    }
    return $instance[$called_class];

   }

}
