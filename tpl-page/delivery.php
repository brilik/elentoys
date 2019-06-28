<?php
/**
 * Template Name: Доставка
 */

get_template_part('tpl-part/head');
$customSlider = get_field('customSlider');
$toysLeft = $customSlider['left'];
$toysRight = $customSlider['right'];
$toysLeftTab = $customSlider['left_tab'];
$toysRightTab = $customSlider['right_tab'];
$toysLeftMob = $customSlider['left_mob'];
$toysRightMob = $customSlider['right_mob'];
?>
    <div class="main-wrapper blog-wrapper feedback-wrapper">

        <!-- BEGIN CONTENT -->

        <main class="content">

            <section class="blog-section blog-section_feedback">
                <div class="blog-section__top block-desktop"
                     data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                     data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                     style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
                    <div class="blog-top__wrap">
                        <h1 class="blog-top__title">
                            <?php the_title(); ?>
                        </h1>
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
    </section>

    <section class="box-delivery-time">
        <div class="wrapper">
            <div class="box-delivery-time__wrap">
                <div class="box-delivery-time__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery-time-1.png" alt="">
                </div>
                <div class="box-delivery-time__info">
                    <div class="delivery-time-list-wrap">
                        <ul class="delivery-time-list">
                            <li class="delivery-time-list__item">
                                <div class="delivery-time-list__text"> - для связи с клиентом используются социальные
                                    сети
                                </div>
                            </li>
                            <li class="delivery-time-list__item">
                                <div class="delivery-time-list__text"> - сроки шитья игрушки зависят от сложности
                                    персонажа
                                </div>
                                <div class="delivery-time-list__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery-time-3.png"
                                         alt="">
                                </div>
                            </li>
                            <li class="delivery-time-list__item">
                                <div class="delivery-time-list__text delivery-time-list__text_3">- доставка почтой в
                                    любую точку мира.
                                </div>
                                <div class="delivery-town-wrap">
                                    <h2 class="h2 h2_pink"><span class="h2__icon">ч</span>Примерные сроки доставки<span
                                                class="h2__icon h2__icon_reverse">ч</span></h2>
                                    <?php if (get_field('table_add')): ?>
                                        <div class="delivery-town-box">
                                            <div class="delivery-town">
                                                <div class="delivery-town__header">
                                                    <div class="col col_1">Город</div>
                                                    <div class="col col_2">Срок</div>
                                                </div>
                                                <?php while (has_sub_field('table_add')): ?>
                                                    <div class="delivery-town__row">
                                                        <div class="col col_1"><?php the_sub_field('city'); ?></div>
                                                        <div class="col col_2"><?php the_sub_field('line'); ?></div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-feedback-toy">
        <div class="wrapper">
            <h2 class="h2 h2_pink"><span class="h2__icon">ч</span>Упаковка для игрушки<span
                        class="h2__icon h2__icon_reverse">ч</span></h2>
            <div class="box-feedback-toy__wrap">
                <div class="box-feedback-toy__info">
                    <span>Игрушки доставляются в оригинальных и вместительных рюкзаках с лототипом. <br> Сумки изготовлены из Спанбонда. Материал прочен, что позволяет использовать изделия из него очень долго. </span>
                    <div class="box-feedback-toy__info-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery-toy-1.png" alt="">
                    </div>
                </div>
                <div class="box-feedback-toy__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery-toy-bg.png" alt="">
                </div>
            </div>
        </div>
    </section>

    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>