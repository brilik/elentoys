<?php
/**
 * Template Name: Категорий
 */

get_template_part('tpl-part/head');
$customSlider = get_field('customSlider');
?>

    <div class="main-wrapper blog-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <section class="blog-section blog-section_category">
            <div class="blog-section__top"
                 data-mob-href="<?php echo get_template_directory_uri();?>/assets/img/slide-with-bg.jpg"
                 data-tab-href="<?php echo get_template_directory_uri();?>/assets/img/slide-with-bg-tab.jpg"
                 style="background-color:<?php echo $customSlider['back_color']; ?>;">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title">
                        Категории
                        игрушек
                    </h1>
                </div>
            </div>
            <div class="blog-section__price">
                <div class="wrapper">
                    <div class="category-wrapper">
                        <div class="box-category">
                            <div class="box-category__head">
                                <h3 class="box-category__head-title">Категории</h3>
                            </div>
                            <div class="box-category__content jsCategoryContent">
                                <ul class="category-list">
                                    <?php
                                    $option = get_field('customCat');
                                    $show_option_all = ( $option['show_option_all'] )? 'Перейти на главную' : '';
                                    $orderby = $option['orderby'];
                                    $order = $option['order'];
                                    $show_count = $option['show_count'];
                                    $hide_empty = $option['hide_empty'];
                                    $args = array(
                                        'type' => 'toys',
                                        'taxonomy' => 'toys_category',
                                        'show_option_all' => $show_option_all,
                                        'title_li' => false,
                                        'orderby' => $orderby,
                                        'order' => $order,
                                        'show_count' => $show_count,
                                        'hide_empty' => $hide_empty,
                                        'exclude_tree' => 7,
                                        'hierarchical' => 1,
                                        'echo' => 1,
                                        'depth' => 0,
                                    );
                                    wp_list_categories($args);
                                    ?>
                                </ul>
                            </div>
                        </div>


                        <div class="box-category-items">
                            <?php
                            $posts = get_posts(array(
                                'numberposts' => -1,
                                'category' => 0,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => array(),
                                'exclude' => array(),
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'toys',
                                'suppress_filters' => true,
                            ));
                            ?>
                            <?php if ($posts) : ?>
                                <ul class="toys-list">
                                    <?php foreach ($posts as $post): setup_postdata($post); ?>
                                        <li class="toys-list__item">
                                            <div class="toys-list__img">
                                                <a href="<?php the_permalink(); ?>" class="toys-list__link"></a>
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="toys-list__desc">
                                                <div class="toys-list__desc-title">
                                                    <a href="<?php the_permalink(); ?>"
                                                       class="name"><?php echo $post->post_title; ?></a>
                                                </div>
                                                <div class="toys-list__desc-price">
                                                    <?php echo number_format(get_field('price', get_the_ID()), 0, ' ', ' '); ?>
                                                    <span><?php the_field('val', get_the_ID()); ?></span>
                                                </div>
                                                <div class="toys-list__desc-more">
                                                    <a href="<?php the_permalink(); ?>"
                                                       class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                        <span class="btn_text">Подробнее</span>
                                                        <span class="btn__icon btn__icon_reverse">.</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach;
                                    wp_reset_postdata(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
            <!--<div class="blog-section__img"><img src="img/blog11.png" alt=""></div>-->
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>