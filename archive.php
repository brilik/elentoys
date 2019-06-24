<?php get_template_part('tpl-part/head');

global $post;
// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
$related_tax = 'toys_category';

// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
$cats_tags_or_taxes = wp_get_object_terms($post->ID, $related_tax, array('fields' => 'ids'));

// массив параметров для WP_Query
$args = array(
    'posts_per_page' => 5, // сколько похожих постов нужно вывести,
    'tax_query' => array(
        array(
            'taxonomy' => $related_tax,
            'field' => 'id',
            'include_children' => false, // нужно ли включать посты дочерних рубрик
            'terms' => $cats_tags_or_taxes,
            'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
        )
    )
);
$query = new WP_Query($args);

$customSlider = get_field('customSlider', 18); // 18 - template category
?>

    <!-- BEGIN BODY -->

    <div class="main-wrapper blog-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">

        <section class="blog-section blog-section_category">
            <div class="blog-section__top"
                 data-mob-href="<?php echo get_template_directory_uri(); ?>/assets/img/slide-with-bg.jpg"
                 data-tab-href="<?php echo get_template_directory_uri(); ?>/assets/img/slide-with-bg-tab.jpg"
                 style="background-color:<?php echo $customSlider['back_color']; ?>;">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title">
                        <?php single_cat_title(); ?>
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
                                <ul class="category-list jsMakeActiveCategory" data-cat="<?php single_cat_title(); ?>">
                                    <?php
                                    $option = get_field('customCat', 18);
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
                            <? if (have_posts()) : ?>
                                <ul class="toys-list">
                                    <?php while (have_posts()) : the_post(); ?>

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

                                        <?php
                                        // the_archive_description();
                                        // print_r($post);
                                        ?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="blog-section__img"><img src="img/blog11.png" alt=""></div>-->
        </section>

        <?php if ($query->have_posts()) : ?>
            <section class="section section_novelty">
                <div class="wrapper">
                    <h2 class="h2 h2_pink">
                        <span class="h2__icon">ч</span>
                        Рекомендованные
                        <span class="h2__icon h2__icon_reverse">ч</span>
                    </h2>
                    <div class="novetly-slider js-novetly-slider">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <a href="<?php the_permalink($query->post->ID); ?>">
                                <div class="novetly-slider__item">
                                    <div class="novelty-slider__picture">
                                        <span class="novelty-slider__round"></span>
                                        <?php the_post_thumbnail($query->post->ID); ?>
                                    </div>
                                    <div class="novetly-slider__text">
                                        <?php echo $query->post->post_title; ?>
                                        /
                                        <?php
                                        $cur_terms = get_the_terms($query->post->ID, $related_tax);
                                        if (is_array($cur_terms)) {
                                            echo $cur_terms[0]->name;
//                                            foreach( $cur_terms as $cur_term ){
//                                                echo $cur_term->name . ' и ';
//                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif;
        wp_reset_postdata(); ?>

    </main>

<?php get_header(); ?>

<?php get_footer(); ?>