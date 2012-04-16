<?php

/*
 *  Describe what this does
 */

class PluginName{
 
    static function init() {
 
        add_action('init', array(__CLASS__, 'register_script'));
        add_action('wp_footer', array(__CLASS__, 'print_script'));
    }
  

  // Example for efficiently adding jQuery plugins into project
    static function register_script() {

        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }
 
    static function print_script() { 
        wp_print_scripts('jquery');

    }
}

PluginName::init();