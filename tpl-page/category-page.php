<?php
/**
 * Template Name: Категорий
 */

get_template_part('tpl-part/head');
?>

    <div class="main-wrapper blog-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <section class="blog-section blog-section_category">
            <div class="blog-section__top" data-mob-href="img/slide-with-bg.jpg"
                 data-tab-href="img/slide-with-bg-tab.jpg">
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

                        <!--
                        <div class="box-category-items">
                            <ul class="toys-list">
                                <li class="toys-list__item">

                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-1.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Волк</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            2 000 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>


                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-2.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Дракоша</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            1 880 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-3.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Медвеженок</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            3 200 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-4.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Миньйон</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            2 000 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-5.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Пони</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            1 880 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-6.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Крот</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            3 200 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-7.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Игрушка</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            2 000 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-8.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Игрушка</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            1 880 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="toys-list__item">
                                    <div class="toys-list__img">
                                        <a href="#" class="toys-list__link"></a>
                                        <img src="img/category/toy-9.png" alt="toy-image">
                                    </div>
                                    <div class="toys-list__desc">
                                        <div class="toys-list__desc-title">
                                            <a href="#" class="name">Медвеженок</a>
                                        </div>
                                        <div class="toys-list__desc-price">
                                            3 200 <span>руб.</span>
                                        </div>
                                        <div class="toys-list__desc-more">
                                            <a href="#" class="btn btn_read btn_pink"><span class="btn__icon">.</span>
                                                <span class="btn_text">Подробнее</span>
                                                <span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <!--<div class="blog-section__img"><img src="img/blog11.png" alt=""></div>-->
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>