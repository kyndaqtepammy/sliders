<?php
/**
 * Plugin Name: SAPPA Sliders
 * Description: Shows sliders across the SAPPA 
 * Author: Pamela Sillah
 * */

function admin_scripts() {
  wp_enqueue_style('sapcss', plugins_url( '/css/slick.css' , __FILE__ ));
  wp_enqueue_style('saptcss', plugins_url( '/css/slick-theme.css' , __FILE__ ));
  wp_enqueue_script('sapjs', plugins_url( '/js/slick.js' , __FILE__ ), array('jquery'), true);
}
add_action( 'wp_enqueue_scripts', 'admin_scripts' );

function vertical_slider() { ?>
  <div class="sappa-carousel">
    <div><img src="<?php echo plugins_url('img/what-we-do.jpg', __FILE__ ) ?>"></div>
    <div><img src="<?php echo plugins_url('img/where-we-are.jpg', __FILE__ ) ?>"></div>
    <div><img src="<?php echo plugins_url('img/who-we-are.jpg', __FILE__ ) ?>"></div>
</div>
<?php  
}
add_shortcode('slider-1', 'vertical_slider');
 ?>
