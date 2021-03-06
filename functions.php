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
            if (is_single()) wp_enqueue_script('component-fotorama', get_template_directory_uri() . '/assets/js/components/fotorama.min.js', array(), false, true);
            wp_enqueue_script('script-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
        }

        // Add thumbnail for post and post type toys
        add_theme_support('post-thumbnails', array('post', 'toys'));

        // remove gravatar data. Off
        add_filter('get_avatar_data', 'del_avatar_data', 10, 2);
        function del_avatar_data($args, $id_or_email)
        {
            return false;
        }

        // remove gravatar url. Off
        add_filter('get_avatar_url', 'del_avatar_url', 10, 3);
        function del_avatar_url($url, $id_or_email, $args)
        {
            return false;
        }

        // remove gravatar url. Off
        add_filter('get_avatar_url', 'gravatar_desabler', 10, 3);
        function gravatar_desabler($url, $id_or_email, $args)
        {
            return $args['default'];
        }

        // Filter. If has children - add class.
        add_filter('category_css_class', 'add_category_parent_css', 10, 4);
        function add_category_parent_css($css_classes, $category, $depth, $args)
        {
            if ($args['has_children']) {
                $css_classes[] = 'with-subitem';
            }
            return $css_classes;
        }

        add_action('admin_menu', 'remove_admin_menu_links', 999);
        function remove_admin_menu_links()
        {
            $myMailHome = 'megabrilik@gmail.com';
            $myMailWork = 'bryl.sliceplanet@gmail.com';
            $user = wp_get_current_user();

            if ($user && isset($user->user_email)) {
                if ( ($myMailWork != $user->user_email) && ($myMailHome != $user->user_email) ) {
                    remove_menu_page('edit-comments.php');
                    remove_menu_page('edit.php?post_type=acf-field-group');
                }
            }
        }
    }
endif;
add_action('after_setup_theme', 'elentoys_setup');


/**
 * Generate main menu in header. Menu is divided into 2 parts - it left and right.
 * In center menu other classes.
 *
 * @param $menu_name
 */
function elentoys_menu($menu_name)
{

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

            $menu_list .= '<li class="nav__item' . $ctr_class['after'] . '">';
            $menu_list .= '<a href="' . $url . '" class="nav__link">' . $title . '</a>';
            $menu_list .= ($count !== $i) ? $item_love : '';
            $menu_list .= '</li>' . "\n";
        }
        $menu_list .= '</ul>';
    } else {

        $menu_list .= 'Нужно создать меню в админке!</ul>';

    }

    echo $menu_list;
}

/**
 * Delivery string to word and add to array
 *
 * @param $text
 * @param $word
 * @param $part
 */
function elentoys_the_delivery_text($text, $word, $part)
{

    $out = preg_split('/' . $word . '/', $text, null, PREG_SPLIT_NO_EMPTY);

    echo $out[$part];
}


/**
 * Clear phone.
 * Remove extra characters from phone number.
 * Input: text phone with characters.
 * Output: text phone number without characters, symbols.
 *
 * @param $textPhone
 * @param int $isPlus Add plus phone number? Example: +380992673862
 * @return string|string[]|null
 */
function elentoys_the_phone_clear($textPhone, $isPlus = 0)
{
    $pattern = '/[^0-9]/';

    if ($isPlus === 1) {
        $pattern = '![^0-9]+!';
    }

    return preg_replace($pattern, '', $textPhone);
}


/**
 * Add item menu - advanced.
 */
require get_template_directory() . '/inc/item_menu.php';

/**
 * Add item menu.
 */
require get_template_directory() . '/tpl-part/social.php';

/**
 * Register custom post type Toys
 */
require get_template_directory() . '/inc/post_type.php';

/**
 * Function bredcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';