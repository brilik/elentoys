<?php
get_template_part('tpl-part/head');
$customSlider = get_field('customSlider','options');
$toysLeft = $customSlider['left'];
$toysRight = $customSlider['right'];
$toysLeftTab = $customSlider['left_tab'];
$toysRightTab = $customSlider['right_tab'];
$toysLeftMob = $customSlider['left_mob'];
$toysRightMob = $customSlider['right_mob'];
$text = get_field('text', 'options');
$btn = get_field('btn', 'options');
?>

<div class="main-wrapper wrapper-404">

    <!-- BEGIN CONTENT -->

    <main class="content content_404">
        <?php $left = get_field('404_left','options'); ?>
        <section class="section-404 block-desktop"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
            <div class="wrapper">
                <div class="section-404__wrapper">
                    <div class="section-404__box">
                        <div class="section-404__desc">
                            <h1 class="section-404__head">
                                <span class="section-404__head-before">404</span>
                                404
                                <span class="section-404__head-after">404</span>
                            </h1>
                            <h3 class="section-404__title">
                                <span class="nav__icon">У</span>
                                <span class="section-404__name"><?php _e('Страница не найдена','elentoys'); ?></span>
                                <span class="nav__icon">У</span>
                            </h3>
                            <p class="section-404__text"><?php echo $text['desk'];?></p>
                            <a href="<?php echo home_url(); ?>" class="btn btn_pink"
                               style="transform: translate(<?php echo $btn['position_desk']['x']; ?>px,
                               <?php echo $btn['position_desk']['y']; ?>px)!important;">
                                <span class="btn__icon">.</span>На главную DESKTOP<span class="btn__icon btn__icon_reverse">.</span>
                            </a>
                            <?php if ($toysLeft['show']): ?>
                                <img class="toy-top" src="<?php echo $toysLeft['img']['url']; ?>"
                                     alt="toys-right"
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
                    </div>
                </div>
            </div>
        </section>
        <section class="section-404 block-table"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
            <div class="wrapper">
                <div class="section-404__wrapper">
                    <div class="section-404__box">
                        <div class="section-404__desc">
                            <h1 class="section-404__head">
                                <span class="section-404__head-before">404</span>
                                404
                                <span class="section-404__head-after">404</span>
                            </h1>
                            <h3 class="section-404__title">
                                <span class="nav__icon">У</span>
                                <span class="section-404__name"><?php _e('Страница не найдена','elentoys'); ?></span>
                                <span class="nav__icon">У</span>
                            </h3>
                            <p class="section-404__text"><?php echo $text['tab']; ?></p>
                            <a href="<?php echo home_url(); ?>" class="btn btn_pink"
                               style="transform: translate(<?php echo $btn['position_tab']['x']; ?>px,
                               <?php echo $btn['position_tab']['y']; ?>px)!important;">>
                                <span class="btn__icon">.</span>На главную TABLE<span class="btn__icon btn__icon_reverse">.</span>
                            </a>
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
                    </div>
                </div>
            </div>
        </section>
        <section class="section-404 block-phone"
                 data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                 data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                 style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
            <div class="wrapper">
                <div class="section-404__wrapper">
                    <div class="section-404__box">
                        <div class="section-404__desc">
                            <h1 class="section-404__head">
                                <span class="section-404__head-before">404</span>
                                404
                                <span class="section-404__head-after">404</span>
                            </h1>
                            <h3 class="section-404__title">
                                <span class="nav__icon">У</span>
                                <span class="section-404__name"><?php _e('Страница не найдена','elentoys'); ?></span>
                                <span class="nav__icon">У</span>
                            </h3>
                            <p class="section-404__text"><?php echo $text['mob']; ?></p>
                            <a href="<?php echo home_url(); ?>" class="btn btn_pink"
                               style="transform: translate(<?php echo $btn['position_mob']['x']; ?>px,
                               <?php echo $btn['position_mob']['y']; ?>px)!important;">>
                                <span class="btn__icon">.</span>На главную PHONE<span class="btn__icon btn__icon_reverse">.</span>
                            </a>
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
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>