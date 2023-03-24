<?php
/** 
 * Theme functions
 * @package gsdspot
*/






if(!defined('GSDSPOT_DIR_PATH')) {
  define('GSDSPOT_DIR_PATH',untrailingslashit(get_template_directory() ) );
};

require_once GSDSPOT_DIR_PATH . '/inc/helpers/autoloader.php';



function gsdspot_get_theme_instance() {
    //print_r('get inst ran func.php');
    GSDSPOT_THEME\Inc\GSDSPOT_THEME::get_instance();
};

gsdspot_get_theme_instance();

function gsd_enqueue_scripts() {

    /**register our custom stylesheet*/
wp_register_style(
    /**stylesheet name */
'style-css',
/**src of stylesheet */
get_stylesheet_uri(),
/**stylesheet dependencies */
[],
/**version of stylesheet in this case its made dynamic */
filemtime(get_template_directory() . '/style.css'),
/**defined for all media types*/
'all'
  );

  /**register bootstrap css */
wp_register_style(
    /**stylesheet name */
'bootstrap-css',
/**src of stylesheet */
get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',
//'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css',
/**stylesheet dependencies */
[],
/**version of stylesheet in this case its made dynamic */
false,
/**defined for all media types*/
'all'
  );



  /**register custom script */
  wp_register_script(
    /**script name */
  'main-js',
  /**get location of script */
  get_template_directory_uri() . '/assets/main.js',
  /**dependencies */
  [],
  /**version of script in this case we update dynamically */
  filemtime(get_template_directory() . '/assets/main.js'),
  /**include in footer or not*/
  true
);

  /**register bootstrap script */
  wp_register_script(
    /**script name */
  'bootstrap-js',
  /**get location of script */
 //'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js',
  get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js',
  /**dependencies */
  ['jquery'],
  /**version of script in this case we update dynamically */
 false,
  /**include in footer or not*/
  true
);


/**enqueue  style.css */
wp_enqueue_style('style-css');
/**enqueue bootstrap.css */
wp_enqueue_style('bootstrap-css');
/**enqueue main.js */
wp_enqueue_script('main-js');
/**enqueue bootstrap js */
wp_enqueue_script('bootstrap-js');


};
add_action('wp_enqueue_scripts','gsd_enqueue_scripts');
?>
