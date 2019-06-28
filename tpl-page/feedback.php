<?php
/**
 * Template Name: Отзывы
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
    <!-- BEGIN BODY -->
    <div class="main-wrapper blog-wrapper">
    <!-- BEGIN CONTENT -->
    <main class="content">
        <section class="blog-section blog-section_feedback">
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
                    <?php if (get_field('review_add')): ?>
                        <ul class="feedback-list">
                            <?php while (has_sub_field('review_add')): ?>
                                <?php $block = get_sub_field('right'); ?>
                                <li class="feedback-list__item">
                                    <div class="feedback-list__img">
                                        <div class="feedback-list__img-link"></div>
                                        <img src="<?php echo get_sub_field('ava'); ?>"
                                             alt="feedback-image">
                                    </div>
                                    <div class="feedback-list__desc">
                                        <h4 class="feedback-list__desc-title">
                                            <span class="nav__icon">У</span>
                                            <div class="feedback-list__desc-name"><?php echo $block['name']; ?></div>
                                            <span class="nav__icon">У</span>
                                        </h4>
                                        <div class="blog-description__date">
                                            <?php echo $block['date']; ?>
                                        </div>
                                        <?php echo preg_replace('<p>', 'p class="feedback-list__desc-text"', $block['review']); ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <!-- CONTENT EOF   -->
<?php get_header(); ?>
<?php get_footer(); ?>