<?php
/**
 * Plugin Name: SP Image Slider
 * Plugin URI: https://www.wordpress.org/plugin/sp-image-slider
 * Description: This is a short Description of our sp image slider plugin.
 * Author: Shaped Plugin LLC
 * Author URI: https://www.shapedplugin.com
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       spis
 */

if (!defined('ABSPATH'))
   exit;





function sp_image_slider_enqueue_scripts()
{
   wp_enqueue_style('slider_css', plugin_dir_url(__FILE__) . 'css/slider_style.css');
   wp_enqueue_script('slider_script', plugin_dir_url( __FILE__) . 'javascript/slider_script.js', array('jquery'), '', 'true');
}
add_action('wp_enqueue_scripts', 'sp_image_slider_enqueue_scripts');


/*=============================
   genarate short code 
============================ */

function sp_image_slider_shortcode()
{
   ob_start();
   include(plugin_dir_path(__FILE__) . 'slider-template.php');
   return ob_get_clean();
}
add_shortcode('sp_image_slider', 'sp_image_slider_shortcode');

