<?php
   /*
   Plugin Name: Wave integration
   Plugin URI: https://wave-integration.com
   description: >-
   a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Daouda SENGHOR
   Author URI: https://dev@bakeli.com
   License: GPL2
   */



defined('ABSPATH') or die('Oups !');

  function wave($the_content){
 
   $promo = '<div class="promo">';
       $promo .= '<p>Bonjour Chers Bakelistes !</p>';
   $promo .= '</div>';

   return $the_content.$promo;
}
add_filter('the_content', 'wave');


function pp_style() {
   wp_enqueue_style('wave-integration', plugin_dir_url(__FILE__).'/wave-inetgration.css');
}
add_action('wp_enqueue_scripts', 'pp_style');

?>