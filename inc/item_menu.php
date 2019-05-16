<?php


if( function_exists('acf_add_options_page') ) {
    // add parent
    $parent = acf_add_options_page(array(
        'menu_title'	=> __('Расширенные', 'elentoys'),
        'redirect'		=> true,
        'icon_url' 		=> 'dashicons-screenoptions',
        'position' 		=> '2.3'
    ));
    // add sub page
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройка социальных сетей',
        'menu_slug'	  	=> 'theme-social-settings',
        'menu_title' 	=> 'Соц.сети',
        'parent_slug' 	=> $parent['menu_slug'],
    ));
}