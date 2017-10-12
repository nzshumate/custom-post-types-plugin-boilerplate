<?php
/*
Plugin Name: Nate's Super Post Types
Description: Custom post types boilerplate for any website.
Author: Nathan Shumate
Author URI: http://nathan-shumate.com
*/

add_action( 'init', 'test_pt' );

function test_pt() {

register_post_type( 'tests', array(
  'labels' => array(
    'name' => 'tests',
    'singular_name' => 'test',
   ),
  'description' => 'Current Tests',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields' )
));
}

?>
