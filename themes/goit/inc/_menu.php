<?php
// Register menus

function goit_register_menus()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu'
    ));
}

add_action('after_setup_theme', 'goit_register_menus');