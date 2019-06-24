<?php
/**
 * Template Name: Блог
 */

get_template_part('tpl-part/head');

global $post;

$customSlider = get_field('customSlider')
?>
    <div class="main-wrapper blog-wrapper">
    <!-- BEGIN CONTENT -->
    <main class="content">
        <section class="blog-section">
            <?php $left = get_field('bckg'); ?>
            <div class="blog-section__top"
                 style="background-image: url('<?php echo $left['banner']; ?>');
                 background-color:<?php echo $customSlider['back_color']; ?>;"
                 data-mob-href="<?php echo $left['banner_mob']; ?>"
                 data-tab-href="<?php echo $left['banner_table']; ?>">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
            <div class="blog-section__price">
                <div class="wrapper">
                    <ul class="blog-price__list">

                        <?php
                        $count = get_field('count_news');
                        $args = array(
                            'numberposts' => $count,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_status' => 'publish',
                            'include' => array(),
                            'exclude' => array(),
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        );
                        $count = 0;

                        foreach (get_posts($args) as $post) : setup_postdata($post);
                            $count++; ?>

                            <li class="blog-price__item">

                                <?php if ($count === 1): ?>
                                    <div class="blog-price__pict">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-s.png"
                                             alt="">
                                    </div>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="blog-price__img">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                                <div class="blog-price__description">
                                    <h4 class="blog-description__title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <div class="blog-description__date">
                                        <?php the_date('d. m. Y'); ?>
                                    </div>
                                    <div class="blog-description__text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn_pink">
                                        <span class="btn__icon">.</span>Читать<span class="btn__icon btn__icon_reverse">.</span>
                                    </a>
                                </div>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="blog-section__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog11.png"
                                                alt=""></div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>