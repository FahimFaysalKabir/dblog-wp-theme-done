<?php
  function basic_function(){
    add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  register_nav_menu('mmmm','Main Meeeenu');
  
  register_post_type( 'aftab', array(
    'public' => true,
    'labels' =>array(
      'name' =>'ami aftab vai',
      'all items' => 'aftab vai agiye cholo...',
      'add_new'   => 'amra achi tomar samne..',
      'add_new_item' => 'add new notice',

    ),
    'supports'       =>array('title','',''),
    'menu_icon'      => 'dashicons-universal-access'
  ) );
  }

  function theme_css_js_file_enqueue(){
        wp_enqueue_style('style','get_template_directory_uri()./style.css');

        wp_enqueue_style('plugin','get_template_directory_uri()./css/plugin.css');
        wp_enqueue_style('stylee','get_template_directory_uri()./css/style.css.css');
        wp_enqueue_style('icon','get_template_directory_uri()./css//images/favicon/apple-touch-icon.png');
       
        wp_enqueue_script('jquery');
        wp_enqueue_script('scripts','get_template_directory_uri()./js/scripts.js');
        wp_enqueue_script('plugin','get_template_directory_uri()./js/plugin.js');


    
   
}

 add_action('after_setup_theme','basic_function');
 add_action('wp_enqueue_script','theme_css_js_file_enqueue');
 
 include("cmb/init.php");
 include("cmb/config.php");
 include("opt/redux-core/framework.php");
 include("opt/sample/aftab.php");


?>