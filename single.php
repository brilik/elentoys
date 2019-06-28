<?php get_template_part('tpl-part/head'); ?>
<?php
add_filter('the_content', function ($content) {

    $content = str_replace('p><img', 'div class="note-section__img"><img', $content);
    $content = str_replace('></p>', '/></div>', $content);
    $content = str_replace('strong>', 'b>', $content);

    return $content;
});

$customSlider = get_field('customSlider');
$toysLeft = $customSlider['left'];
$toysRight = $customSlider['right'];
$toysLeftTab = $customSlider['left_tab'];
$toysRightTab = $customSlider['right_tab'];
$toysLeftMob = $customSlider['left_mob'];
$toysRightMob = $customSlider['right_mob'];
?>
    <!-- BEGIN CONTENT -->
    <main class="content">
        <?php while (have_posts()) : the_post(); ?>
            <section class="blog-section">
                <div class="blog-section__top block-desktop"
                     data-mob-href="<?php echo $customSlider['imgMob']; ?>"
                     data-tab-href="<?php echo $customSlider['imgTab']; ?>"
                     style="background: <?php echo $customSlider['back_color']; ?> url('<?php echo $customSlider['imgDesc']; ?>') no-repeat;">
                    <div class="blog-top__wrap">
                        <h1 class="blog-top__title">Запись блога</h1>
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
                        <h1 class="blog-top__title">Запись блога</h1>
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
                        <h1 class="blog-top__title">Запись блога</h1>
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
                        <div class="note-section__product">
                            <h2 class="note-section__title">
                                <span class="nav__icon">У</span>
                                <span class="product-section__name">
                                    <?php elentoys_the_delivery_text(get_the_title(), '<br>', 0); ?>
                                </span>
                                <span class="nav__icon">У</span>
                            </h2>
                            <div class="note-section__pretitle">
                                <?php elentoys_the_delivery_text(get_the_title(), '<br>', 1); ?>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </main>
    <!-- CONTENT EOF   -->
<?php get_header(); ?>

<?php get_footer(); ?>