<?php
get_template_part('tpl-part/head');

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
?>

<div class="main-wrapper product-wrapper">

<!-- BEGIN CONTENT -->

<main class="content">

<?php while (have_posts()) : the_post(); $cur_terms = get_the_terms($query->post->ID, $related_tax); ?>

    <section class="product-section">
        <div class="wrapper">
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-list__item">
                    <a href="<?php echo get_term_link ( $cur_terms[0]->term_id,'toys_category' ) ?>" class="breadcrumbs-list__link">
                        <?php echo $cur_terms[0]->name; ?>
                    </a>
                </li>
                <?php if ($cur_terms[1]->name && $cur_terms[1]->parent != 0): ?>
                    <li class="breadcrumbs-list__item">
                        <a href="<?php echo get_term_link ( $cur_terms[1]->term_id,'toys_category' ) ?>" class="breadcrumbs-list__link">
                            <?php echo $cur_terms[1]->name; ?>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="breadcrumbs-list__item">
                    <?php the_title(); ?>
                </li>
            </ul>
            <?php // my_breadcrumbs(); ?>
            <div class="product-section__wrapper">
                <div class="product-section__box">
                    <div class="product-section__slider">
                        <?php $slider = get_field('slider'); ?>
                        <?php if ($slider): ?>
                            <ul class="product-slider__for product-slider__for-js">
                                <?php foreach ($slider as $item): ?>
                                    <li class="product-for__item">
                                        <div class="product-for__pict">
                                            <a href="<?php echo $item['url']; ?>"
                                               data-fancybox="images"
                                               class="product-for__link js-fancybox">
                                                <img src="<?php echo $item['url']; ?>" alt="">
                                            </a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="product-section__left">
                            <button class="product-slider__arrow product-slider__next">
                                <i class="material-icons">keyboard_backspace</i>
                            </button>
                            <?php if ($slider): ?>
                                <ul class="product-slider__nav js-product-slider-nav">
                                    <?php foreach ($slider as $item): ?>
                                        <li class="slider-nav__item">
                                            <div class="slider-nav__pict">
                                                <img src="<?php echo $item['url']; ?>" alt="">
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <button class="product-slider__arrow product-slider__prev">
                                <i class="material-icons">keyboard_backspace</i>
                            </button>
                        </div>

                    </div>
                    <div class="product-section__description">
                        <h1 class="product-section__title">
                            <span class="nav__icon">У</span>
                            <span class="product-section__name">
                                    <?php the_title(); ?>
                                </span>
                            <span class="nav__icon">У</span>
                        </h1>
                        <?php
                        add_filter('the_content', 'filter_function_name_11');
                        function filter_function_name_11($content)
                        {

                            $out = '<div class="proudct-description__text text2">';
                            $content = str_replace('h4', 'b', $content);
                            $content = str_replace('p>', 'span>', $content);
                            $content = str_replace('&nbsp;', '</div><div class="proudct-description__text text2">', $content);
                            $out .= $content;
                            $out .= '</div>';

                            return $out;
                        }

                        the_content();

                        ?>
                        <div class="proudct-description__row">
                            <div class="product-description__price">
                                <?php echo number_format(get_field('price'), 0, ' ', ' '); ?>
                                <span><?php the_field('val') ?></span>
                            </div>
                            <a href="#popup-backcall" class="btn btn_pink js-fancybox"><span class="btn__icon">.</span>Заказать<span
                                        class="btn__icon btn__icon_reverse">.</span></a>
                        </div>
                        <?php echo elentoys_the_social('social social_product', 0, array('telegram', 'inst', 'vk', 'viber')); ?>
                    </div>
                </div>
            </div>

        </div>
        <!--                <a href="#" class="back-call"><i class="zmdi zmdi-phone"></i></a>-->
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

<!-- CONTENT EOF   -->

</div>

<?php endwhile;

get_header();

get_footer();
