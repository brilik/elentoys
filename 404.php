<?php get_template_part('tpl-part/head'); ?>

<div class="main-wrapper wrapper-404">

    <!-- BEGIN CONTENT -->

    <main class="content content_404">
        <section class="section-404">
            <div class="wrapper">
                <div class="section-404__wrapper">
                    <div class="section-404__box">
                        <div class="section-404__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404/404.png" alt="404-image">
                        </div>
                        <div class="section-404__desc">
                            <h1 class="section-404__head">
                                <span class="section-404__head-before">404</span>
                                404
                                <span class="section-404__head-after">404</span>
                            </h1>
                            <h3 class="section-404__title">
                                <span class="nav__icon">У</span>
                                <span class="section-404__name">Страница не найдена</span>
                                <span class="nav__icon">У</span>
                            </h3>
                            <p class="section-404__text">
                                Извините! Такой страницы не существует.
                                Все игрушки убежали. Предлагаем Вам вернуться
                                на главную страницу.
                            </p>
                            <a href="<?php echo home_url(); ?>" class="btn btn_pink">
                                <span class="btn__icon">.</span>На главную<span class="btn__icon btn__icon_reverse">.</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>