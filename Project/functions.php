<?php

/* Load CSS */
function project_script_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri().'/css/project.css' , array() , '1.0.0' , 'all');
}

add_action('wp_enqueue_scripts' , 'project_script_enqueue');

/* Create Menu Option */
function project_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Main Navigation');
  register_nav_menu('social', 'Social');
  register_nav_menu('update', 'Update');
}

add_action('init','project_theme_setup');
