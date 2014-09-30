<?php

/*
Plugin Name: Obvious Post States
Plugin URI: https://github.com/ryansommers/slate
Description: Make your WordPress post state text (draft, pending, sticky, etc) stand out.
Author: Ryan Sommers
Version: 1.0.0
Author URI: http://ryansommers.com
*/

function obvious_post_states_files() {
  wp_enqueue_style( 'obvious-post-states', plugins_url('obvious-post-states.css', __FILE__) );
  wp_enqueue_script( 'obvious-post-states', plugins_url( "js/obvious-post-states.js", __FILE__ ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'obvious_post_states_files' );
add_action( 'login_enqueue_scripts', 'obvious_post_states_files' );
?>
