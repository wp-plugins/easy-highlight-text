<?php
/**
 *
/**
Plugin Name: Easy Highlight Text
Plugin URI: http://jonathanmelgoza.com/wp/easy-highlight-text/
Description: This plugin allows you highlight any text, let you choose from 6 different types: success, error, tip, warning, simple and message. Just add the class "eht-success" and so on.. to any span tag and enjoy.
Author: Jonathan Melgoza
Version: 1.0
Author URI: http://jonathanmelgoza.com/
*/

function eht_add_css(){
	wp_enqueue_style('easy-highlight-text', plugins_url() . '/easy-highlight-text/css/style.css');
}
add_action('wp_enqueue_scripts', 'eht_add_css');

?>