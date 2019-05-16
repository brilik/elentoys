<?php get_template_part('tpl-part/head'); ?>

<div class="main-wrapper main-page">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <section class="section section_main">
            <div class="main-slider js-main-slider">
                <div class="main-slider__item">
                    <div class="wrapper">

                        <div class="main-slider__right">
                            <h1 class="h1"><?php bloginfo('title'); ?> </h1>
                            <div class="h1-descr"><?php bloginfo('description'); ?></div>
                            <div class="main-slider__text">
                                Страница успешно созданна.
                                Теперь небоходимо установить шаблон для страницы.
                                Это делается в админ панеле
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>