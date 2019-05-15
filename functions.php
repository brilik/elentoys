<?php

if (!function_exists('elentoys_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function elentoys_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Nineteen, use a find and replace
         * to change 'twentynineteen' to the name of your theme in all the template files.
         */
        load_theme_textdomain('elentoys', get_template_directory() . '/languages');

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menu('main', __('Главное меню', 'elentoys'));


        // Add custom class for tag body
        add_filter('body_class', 'elentoys_class_names');
        function elentoys_class_names($classes)
        {

            $classes[] = 'loaded';

            return $classes;
        }

        // Include styles & scripts
        add_action('wp_enqueue_scripts', 'elentoys_scripts');
        function elentoys_scripts()
        {
            wp_deregister_script('jquery');
            wp_enqueue_style('style-main', get_stylesheet_uri());
            wp_enqueue_style('style-custom', get_stylesheet_directory_uri() . '/assets/css/style.css');
            wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array(), false, true);
            wp_enqueue_script('jquery');
            wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js', array(), false, true);
            wp_enqueue_script('components-slick', get_template_directory_uri() . '/assets/js/components/slick.js', array(), false, true);
            wp_enqueue_script('components-jquery.fancybox', get_template_directory_uri() . '/assets/js/components/jquery.fancybox.min.js', array(), false, true);
            wp_enqueue_script('script-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
        }
    }
endif;
add_action('after_setup_theme', 'elentoys_setup');


/**
 * Generate main menu in header. Menu is divided into 2 parts - it left and right.
 * In center menu other classes.
 */
function elentoys_menu()
{

    $menu_name = 'main'; // specify custom menu name
    $menu_list = (string)'';
    $ctr_class = array(
        'after' => '',
        'before' => ''
    );

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $count = count((array)$menu_items);
        $center = ($count) / 2;

        $menu_list .= '<ul class="nav">' . "\n";

        foreach ((array)$menu_items as $key => $menu_item) {

            $i = $key;
            $j = $i++;
            $j++;

            $title = $menu_item->title;
            $url = $menu_item->url;

            if ($i === $center) {

                $item_love = '';
                $ctr_class['after'] = ' mr-auto';
                $ctr_class['before'] = ' m1-auto';

            } else if ($j === ($center + 1)) {

                $item_love = '<span class="nav__icon">У</span>';
                $ctr_class['after'] = ' m1-auto';

            } else {

                $item_love = '<span class="nav__icon">У</span>';
                $ctr_class['after'] = '';
                $ctr_class['before'] = '';

            }

            $menu_list .= "\t\t\t\t\t" . '<li class="nav__item' . $ctr_class['after'] . '">';
            $menu_list .= '<a href="' . $url . '" class="nav__link">' . $title . '</a>';
            $menu_list .= ($count !== $i)?$item_love:'';
            $menu_list .= '</li>' . "\n";
        }
        $menu_list .= "\t\t\t\t" . '</ul>' . "\n";
    }

    echo $menu_list;
}