<?php get_template_part('tpl-part/head'); global $post; ?>

    <!-- BEGIN BODY -->

    <div class="main-wrapper blog-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">

        <section class="blog-section blog-section_category">
            <div class="blog-section__top" data-mob-href="img/slide-with-bg.jpg"
                 data-tab-href="img/slide-with-bg-tab.jpg">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title">
                        <!-- Категории-->
                        <!--игрушек-->
                        <?php //single_cat_title(); ?>
                        <?php the_archive_title(); ?>
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
                                                    <?php the_field('price', get_the_ID()); ?>
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

    </main>

<?php get_header(); ?>

<?php get_footer(); ?>