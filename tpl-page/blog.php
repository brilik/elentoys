<?php
/**
 * Template Name: Блог
 */

global $post;
get_template_part('tpl-part/head');
$customSlider = get_field('customSlider');
$toysLeft = $customSlider['left'];
$toysRight = $customSlider['right'];
$toysLeftTab = $customSlider['left_tab'];
$toysRightTab = $customSlider['right_tab'];
$toysLeftMob = $customSlider['left_mob'];
$toysRightMob = $customSlider['right_mob'];
?>
    <div class="main-wrapper blog-wrapper">
    <!-- BEGIN CONTENT -->
    <main class="content">
        <section class="blog-section">
            <?php $left = get_field('bckg'); ?>
            <div class="blog-section__top block-desktop"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title"><?php the_title(); ?></h1>
                </div>
                <?php if ($toysLeft['show']): ?>
                    <img class="toy-top" src="<?php echo $toysLeft['img']['url']; ?>"
                         alt="<?php echo $toysLeft['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysLeft['positionX']; ?>px,
                         <?php echo $toysLeft['positionY']; ?>px)!important;"
                    >
                <?php endif; ?>
                <?php if ($toysRight['show']): ?>
                    <img class="toy-top toy-top-right" src="<?php echo $toysRight['img']['url']; ?>"
                         alt="<?php echo $toysRight['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysRight['positionX']; ?>px,
                         <?php echo $toysRight['positionY']; ?>px)!important;">
                <?php endif; ?>
            </div>
            <div class="blog-section__top block-table"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title"><?php the_title(); ?></h1>
                </div>
                <?php if ($toysLeftTab['show']): ?>
                    <img class="toy-top" src="<?php echo $toysLeftTab['img']['url']; ?>"
                         alt="<?php echo $toysLeftTab['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysLeftTab['positionX']; ?>px,
                         <?php echo $toysLeftTab['positionY']; ?>px)!important;"
                    >
                <?php endif; ?>
                <?php if ($toysRightTab['show']): ?>
                    <img class="toy-top toy-top-right" src="<?php echo $toysRightTab['img']['url']; ?>"
                         alt="<?php echo $toysRightTab['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysRightTab['positionX']; ?>px,
                         <?php echo $toysRightTab['positionY']; ?>px)!important;">
                <?php endif; ?>
            </div>
            <div class="blog-section__top block-phone"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
                <div class="blog-top__wrap">
                    <h1 class="blog-top__title"><?php the_title(); ?></h1>
                </div>
                <?php if ($toysLeftMob['show']): ?>
                    <img class="toy-top" src="<?php echo $toysLeftMob['img']['url']; ?>"
                         alt="<?php echo $toysLeftMob['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysLeftMob['positionX']; ?>px,
                         <?php echo $toysLeftMob['positionY']; ?>px)!important;"
                    >
                <?php endif; ?>
                <?php if ($toysLeftMob['show']): ?>
                    <img class="toy-top toy-top-right" src="<?php echo $toysLeftMob['img']['url']; ?>"
                         alt="<?php echo $toysLeftMob['img']['alt']; ?>"
                         style="transform: translate(<?php echo $toysLeftMob['positionX']; ?>px,
                         <?php echo $toysLeftMob['positionY']; ?>px)!important;">
                <?php endif; ?>
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