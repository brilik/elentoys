<?php
/**
 * Template Name: Обо мне
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
    <div class="main-wrapper about-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <section class="about-section block-desktop">
            <div class="blog-section__top"
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
        </section>
        <section class="about-section block-table">
            <div class="blog-section__top"
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
        </section>
        <section class="about-section block-phone">
            <div class="blog-section__top"
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

        <div class="about-section__author">
            <div class="wrapper">
                <div class="about-author__box">
                    <div class="about-author__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-1.png" alt="">
                    </div>
                    <div class="about-author__description">
                        <div class="about-author__name">
                            Привееет! Меня зовут Элен =) Спасибо, что зашел на мой сайт!
                        </div>
                        <div class="about-author__comment">
                            Я люблю создавать плюшевых персонажей и занимаюсь этим с самого детства. <br>
                            Каждая игрушка для меня особенна, в каждого героя я закладываю свой характер.


                        </div>
                        <div class="about-author__text">
                            Хочешь узнать, как я это делаю? Листай ниже!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="about-section__situation">
            <div class="wrapper">

                <h2 class="h2 h2_pink">
                    <span class="h2__icon">ч</span>
                    <span class="about-name">
                            Творческая обстановка
                        </span>
                    <span class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <div class="about-situation__box">
                    <div class="about-situation__description">
                        Моя творческая обстановка выстраивается сама по себе, все что нужно всегда под рукой:
                        <ul class="about-situation__list">
                            <li class="about-situation__item">
                                <span class="nav__icon">У</span>
                                Подушечки с иголками
                            </li>
                            <li class="about-situation__item">
                                <span class="nav__icon">У</span>
                                Катушки
                            </li>
                            <li class="about-situation__item">
                                <span class="nav__icon">У</span>
                                Также мои неизменные <br>
                                люшевые друзья - Тоторо, Котик
                                и Заяц.
                            </li>
                        </ul>

                    </div>
                    <div class="about-situation__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img5.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <?php $left = get_field('left'); ?>
        <?php $right = get_field('right'); ?>
        <section class="about-section__seven"
                 style="background-image: url(<?php echo $left['4_img']; ?>)"
                 data-mob-href="<?php echo $left['4_img_mob']; ?>"
                 data-tab-href="<?php echo $left['4_img_tab']; ?>">
            <div class="wrapper">
                <h2 class="h2 h2_pink">
                    <span class="h2__icon">ч</span>
                    <span class="about-name"><?php echo $right['title']; ?></span>
                    <span class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <div class="about-seven__text">
                    <?php echo $right['desc']; ?>
                </div>
            </div>
        </section>

        <section class="about-section__slice">
            <div class="wrapper">
                <div class="about-slice__box">
                    <div class="about-slice__dog">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dog.png" alt="">

                    </div>
                    <div class="about-slice__text">
                        <h2 class="h2 h2_pink">
                            <span class="h2__icon">ч</span>
                            <span class="about-name">
                                    Разрезай <br>
                                    и властвуй

                                </span>
                            <span class="h2__icon h2__icon_reverse">ч</span>
                        </h2>
                        <p>Для каждой игрушки я делаю индивидуальную выкройку, по которой из ткани сшиваю объемного
                            персонажа.</p>
                    </div>

                    <div class="about-author__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slice.png" alt="">
                        <div class="about-slice__pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buttons.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="about-section__favorite">
            <div class="wrapper">
                <h2 class="h2 h2_pink">
                    <span class="h2__icon">ч</span>
                    <span class="about-name">
                            Напихивание
                            <span>
                               (мое любимое!)
                            </span>
                        </span>
                    <span class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <div class="about-favorite__text">
                    Именно на этом этапе игрушки приобретают объем. Для наполнения холлофайбером я использую особую
                    технологию, чтобы каждая деталька игрушки была плотно набита.
                </div>
                <div class="about-favorite__wrap">
                    <div class="about-favorite__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gir.png" alt="">
                    </div>
                </div>

            </div>
        </section>

        <?php $left = get_field('7_left'); ?>
        <?php $right = get_field('7_right'); ?>
        <section class="about-section__eye"
                 style="background-image: url(<?php echo $left['img']; ?>)"
                 data-mob-href="<?php echo $left['img_mob']; ?>"
                 data-tab-href="<?php echo $left['img_tab']; ?>">
            <div class="wrapper">
                <div class="about-eye__box">
                    <div class="about-eye__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img12.png" alt="">
                    </div>
                    <div class="about-eye__description">
                        <h2 class="h2 h2_pink">
                            <span class="h2__icon">ч</span>
                            <span class="about-name"><?php echo $right['title']; ?></span>
                            <span class="h2__icon h2__icon_reverse">ч</span>
                        </h2>
                        <?php echo $right['desc']; ?>
                        <ul class="about-eye__list">
                            <li class="about-eye__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img9.png" alt="">
                            </li>
                            <li class="about-eye__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img10.png" alt="">
                            </li>
                            <li class="about-eye__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img11.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section__detail">
            <div class="wrapper">
                <div class="about-detail__pict">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img16.png" alt="">
                </div>
                <div class="about-detail__box">
                    <div class="about-detail__description">
                        <h2 class="h2 h2_pink">
                            <span class="h2__icon">ч</span>
                            <span class="about-name">
                                    Детали, <br>
детали!

                                </span>
                            <span class="h2__icon h2__icon_reverse">ч</span>
                        </h2>
                        <p>
                            Чтобы полноценно сложился образ любимого персонажа, я прорабатываю его до мельчайших
                            деталей, подыскиваю подходящую фурнитуру.
                        </p>
                        <ul class="about-detail__list">
                            <li class="about-detail__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img17.png" alt="">
                            </li>
                            <li class="about-detail__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img18.png" alt="">
                            </li>
                            <li class="about-detail__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img19.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="about-detail__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img15.png" alt="">
                        <div class="about-detail__pic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section__other">
            <div class="wrapper">
                <h2 class="h2 h2_pink">
                    <span class="h2__icon">ч</span>
                    <span class="about-name">
                            Другие увлечения
                        </span>
                    <span class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <p>
                    Помимо плюшевых героев, я люблю создавать глазки, расписывая кабошон, валять
                    из шерсти, лепить из глины.
                </p>
                <ul class="about-section__list">
                    <li class="about-section__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img20.png" alt="">
                    </li>
                    <li class="about-section__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img21.png" alt="">
                    </li>
                    <li class="about-section__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img22.png" alt="">
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>