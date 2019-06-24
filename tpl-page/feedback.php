<?php
/**
 * Template Name: Отзывы
 */

get_template_part('tpl-part/head');

$customSlider = get_field('customSlider');
?>

<!-- BEGIN BODY -->

	<div class="main-wrapper blog-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">
			<section class="blog-section blog-section_feedback">
                <div class="blog-section__top" style="
                     background-image: url('<?php echo get_field('review_img')['url']; ?>');
                    background-color:<?php echo $customSlider['back_color']; ?>;"
                     data-mob-href="<?php echo get_field('review_img_mob')['url']; ?>"
                     data-tab-href="<?php echo get_field('review_img_tab')['url']; ?>">
					<?php if($customSlider['toyLeft']): ?>
                    <div class="feedback-bg">
                        <img src="<?php echo $customSlider['img_toy_left']; ?>" alt="feedback-bg">
					</div>
					<?php endif; ?>
					<div class="blog-top__wrap">
						<h1 class="blog-top__title">
							отзывы
						</h1>
					</div>
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

                <!--<div class="blog-section__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog11.png" alt=""></div>-->
			</section>
		</main>

		<!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>