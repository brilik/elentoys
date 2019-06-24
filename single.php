<?php get_template_part('tpl-part/head'); ?>
<?php
add_filter('the_content', function ($content) {

    $content = str_replace('p><img', 'div class="note-section__img"><img', $content);
    $content = str_replace('></p>', '/></div>', $content);
    $content = str_replace('strong>', 'b>', $content);

    return $content;
});

$bckg = get_field('bckg');
$customSlider = get_field('customSlider');
?>
    <!-- BEGIN CONTENT -->
    <main class="content">
        <?php while (have_posts()) : the_post(); ?>
            <section class="blog-section">
                <div class="blog-section__top" style="
                        background-image: url('<?php echo $bckg['banner']; ?>');
                        background-color:<?php echo $customSlider['back_color']; ?>;"
                     data-mob-href="<?php echo $bckg['banner_mob']; ?>"
                     data-tab-href="<?php echo $bckg['banner_table']; ?>">
                    <div class="blog-top__wrap">
                        <h1 class="blog-top__title">
                            Запись блога
                        </h1>
                    </div>
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