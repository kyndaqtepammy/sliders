<?php
/**
 * Plugin Name: SAPPA Sliders
 * Description: Shows sliders across the SAPPA 
 * Author: Pamela Sillah
 * */

function admin_scripts() {
  wp_enqueue_style('sapcss', plugins_url( '/css/slick.css' , __FILE__ ));
  wp_enqueue_style('saptcss', plugins_url( '/css/slick-theme.css' , __FILE__ ));
  wp_enqueue_script('sapjs', plugins_url( '/js/slick.js' , __FILE__ ), 'jquery', true);
}
add_action( 'wp_enqueue_scripts', 'admin_scripts' );
 ?>
 <div class="your-class">
  <div>your content 1</div>
  <div>your content 2</div>
  <div>your content 3</div>
</div>