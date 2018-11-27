<?php
add_action('wp_enqueue_scripts', 'ajout_css_js');
function ajout_css_js(){
  //get_template_directory_uri() => racine du theme
  wp_register_script('main_script_header', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);
  wp_enqueue_script('main_script_header');
  wp_register_script('burger_script', get_template_directory_uri() . '/assets/scripts/burger.js', array('jquery'),'1.1', true);
  wp_enqueue_script('burger_script');
  wp_register_script('main_script_footer', get_template_directory_uri() . '/assets/scripts/main_footer.js', array('jquery'),'1.1', true);
  wp_enqueue_script('main_script_footer');
  wp_register_style( 'reset_style', get_template_directory_uri() . '/assets/styles/reset.css' );
  wp_enqueue_style( 'reset_style' );
  wp_register_style( 'burger_style', get_template_directory_uri() . '/assets/styles/hamburgers.min.css' );
  wp_enqueue_style( 'burger_style' );
  wp_register_style( 'header_style', get_template_directory_uri() . '/assets/styles/header.css' );
  wp_enqueue_style( 'header_style' );
  wp_register_style( 'front-page_style', get_template_directory_uri() . '/assets/styles/front-page.css' );
  wp_enqueue_style( 'front-page_style' );
  wp_register_style( 'footer_style', get_template_directory_uri() . '/assets/styles/footer.css' );
  wp_enqueue_style( 'footer_style' );  

  wp_register_style( '404_style', get_template_directory_uri() . '/assets/styles/404-page.css' );
  wp_enqueue_style( '404_style' );  
  wp_register_style( 'pages_style', get_template_directory_uri() . '/assets/styles/page.css' );
  wp_enqueue_style( 'pages_style' );  

  // Contact style
  wp_register_style( 'contact-page_style', get_template_directory_uri() . '/assets/styles/contact-page.css' );
  if(is_page('contact')){
    wp_enqueue_style( 'contact-page_style' );
  }

  
  // Modele style
  wp_register_style( 'modele_style', get_template_directory_uri() . '/assets/styles/modele-template-content.css' );
  wp_enqueue_style( 'modele_style' ); 
  
  // Explore page Syle&script
  wp_register_style( 'explore-page_style', get_template_directory_uri() . '/assets/styles/explore-page.css' );
  if(is_page('explore')){
    wp_enqueue_style( 'explore-page_style' );
  }

  if(is_page('explore')){
    wp_enqueue_script( 'explore-page', get_template_directory_uri().'/assets/scripts/explore-page.js', array('jquery'), '1.1', true );
    
  }
 
  //FAUNA page sytle
  wp_register_style( 'fauna-page_style', get_template_directory_uri() . '/assets/styles/fauna-page.css' );
  if(is_page('fauna')){
    wp_enqueue_style( 'fauna-page_style' );

    // INSERT AJAX JS
    wp_enqueue_script( 'explore-ajax', get_template_directory_uri().'/assets/scripts/explore-ajax.js', array('jquery'), '1.0', true );
  
    // pass Ajax Url to script.js
    wp_localize_script('explore-ajax', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
  }

  //Flora page sytle
  wp_register_style( 'fauna-page_style', get_template_directory_uri() . '/assets/styles/fauna-page.css' );
  if(is_page('flora')){
    wp_enqueue_style( 'fauna-page_style' );

    // INSERT AJAX JS
    wp_enqueue_script( 'explore-ajax', get_template_directory_uri().'/assets/scripts/explore-ajax.js', array('jquery'), '1.0', true );
  
    // pass Ajax Url to script.js
    wp_localize_script('explore-ajax', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
  }

  

}
add_action('wp_enqueue_scripts', 'ajout_js_scripts');


add_action( 'wp_ajax_mon_action', 'mon_action' );
add_action( 'wp_ajax_nopriv_mon_action', 'mon_action' );

function mon_action() {

	$param = $_POST['param'];

	echo $param;

	die();
}