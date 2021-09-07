<?php 
function register_menu() {
    register_nav_menus(
        array(
            'primary-menu'=>'Mega Menu'
            )
        );
  }
  add_action( 'init', 'register_menu' );
