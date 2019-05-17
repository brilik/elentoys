<?php

/**
 * Create post type Toys and taxonomy category
 */
add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type('toys', array(
        'label'  => __( 'Игрушки', 'elentoys' ),
        'labels' => array(
            'name'               => __('Игрушки','elentoys'), // основное название для типа записи
            'singular_name'      => __('Игрушка','elentoys'), // название для одной записи этого типа
            'add_new'            => __('Добавить игрушку','elentoys'), // для добавления новой записи
            'add_new_item'       => __('Добавление игрушек','elentoys'), // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => __('Редактирование игрушек','elentoys'), // для редактирования типа записи
            'new_item'           => __('Новое игрушка','elentoys'), // текст новой записи
            'view_item'          => __('Смотреть игрушки','elentoys'), // для просмотра записи этого типа.
            'search_items'       => __('Искать игрушки','elentoys'), // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => __('Игрушки','elentoys'), // название меню
        ),
        'description'         => '',
        'public'              => true,
        'menu_position'       => 9, // зависит от public
        'exclude_from_search' => false, // зависит от public
        'show_ui'             => true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
//        'menu_position'       => 9,
        'menu_icon'           => 'dashicons-buddicons-activity',
        'capability_type'     => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        'map_meta_cap'        => true, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor', 'author', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('toys_category' ),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

add_action( 'init', 'register_toys_taxonomy' );
function register_toys_taxonomy() {
    register_taxonomy( 'toys_category', 'toys',
        array(
            'labels' => array(
                'name'              => __('Категории игрушек', 'elentoys'),
                'singular_name'     => __('Категория игрушек', 'elentoys'),
                'search_items'      => __('Искать по категориям игрушек', 'elentoys'),
                'all_items'         => __('Все категории игрушек', 'elentoys'),
                'edit_item'         => __('Редактировать категории игрушек', 'elentoys'),
                'update_item'       => __('Обновить категории игрушек', 'elentoys'),
                'add_new_item'      => __('Добавить новую категорию игрушек', 'elentoys'),
                'new_item_name'     => __('Новое имя для категории игрушек', 'elentoys'),
                'menu_name'         => __('Категория игрушек', 'elentoys'),
            ),
            'hierarchical' => true,
            'sort' => true,
            'args' => array( 'orderby' => 'term_order' ),
            'show_admin_column' => true
        )
    );
}