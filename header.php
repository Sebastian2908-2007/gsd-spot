<?php 
/** Header
 * @package gsdspot
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Gsd Spot</title>
    <?php wp_head() ?>
</head>
<body <?php body_class();?>>
<?php if(function_exists('wp_body_open')) {wp_body_open();}?>
   

    <header >
        <?php get_template_part('template-parts/header/navbar');?>
    </header>
    

