<?php
/**
 * Template Name: Главная
 */

get_template_part('tpl-part/head');
?>

    <div class="main-wrapper main-page">

    <!-- BEGIN CONTENT -->

    <main class="content">
        <section class="section section_main">
            <div class="main-slider js-main-slider">

                <?php
                $section = get_field('slider_add');

                if ($section): $count = 0;

                    foreach ($section as $item): $count++;

                        if ($item['hide']) continue;

                        $title = $item['title'];
                        $subtitle = $item['subtitle'];
                        $link = array();
                        $desc = $item['desc'];
                        $positionImg = $item['positionImg'];
                        $imgLeft = $item['imgLeft'];
                        $imgRight = $item['imgRight'];
                        $imgBckgr = $item['bckgr'];

                        $link['title'] = (!empty($item['link']['title'])) ? $item['link']['title'] : 'Подробнее';
                        $link['url'] = (!empty($item['link']['url'])) ? $item['link']['url'] : '#';
                        $link['target'] = (!empty($item['link']['target'])) ? $item['link']['target'] : '';


                        if ($item['position'] == 2) { ?>

                            <div class="main-slider__item">
                                <div class="wrapper">
                                    <div class="main-slider__img<?php echo ($count === 1) ? ' img1' : ''; ?>">
                                        <img src="<?php echo $imgLeft['url'] ?>"
                                             style="transform: translateX(<?php echo $positionImg; ?>px)" alt="">
                                    </div>
                                    <div class="main-slider__img-bottom">
                                        <img src="<?php echo $imgRight['url'] ?>" alt="">
                                    </div>
                                    <div class="main-slider__right">
                                        <h1 class="h1"><?php echo $title; ?></h1>
                                        <div class="h1-descr"><?php echo $subtitle; ?></div>
                                        <div class="main-slider__text"><?php echo $desc; ?></div>
                                        <a href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span>
                                            <?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 0) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgr['bckgr_mob']; ?>"
                                 data-tab-href="<?php echo $imgBckgr['bckgr_tab']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <h1 class="h1"><?php echo $title; ?></h1>
                                        <div class="h1-descr"><?php echo $subtitle; ?></div>
                                        <div class="main-slider__text"><?php echo $desc; ?></div>
                                        <a href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span></a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 1) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgr['bckgr_mob']; ?>"
                                 data-tab-href="<?php echo $imgBckgr['bckgr_tab']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <h1 class="h1"><?php echo $title; ?></h1>
                                        <div class="h1-descr"><?php echo $subtitle; ?></div>
                                        <div class="main-slider__text"><?php echo $desc; ?></div>
                                        <a href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 3) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgr['bckgr_mob']; ?>"
                                 data-tab-href="<?php echo $imgBckgr['bckgr_tab']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right center-mobile">
                                        <h1 class="h1"><?php echo $title; ?></h1>
                                        <div class="h1-descr"><?php echo $subtitle; ?></div>
                                        <div class="main-slider__text"><?php echo $desc; ?></div>
                                        <a href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a>
                                    </div>
                                </div>
                            </div>

                        <?php }

                    endforeach;

                endif; ?>
            </div>
        </section>

        <section class="section section_category">
            <div class="wrapper">
                <h2 class="h2 h2_pink"><span class="h2__icon">ч</span>Категории игрушек<span
                            class="h2__icon h2__icon_reverse">ч</span></h2>
                <div class="categories">
                    <a href="#" class="categories__item">
                        <div class="categories-item__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-1.png" alt=""
                                 class="categories__img">
                        </div>

                        <div class="categories__text">Мемы</div>
                    </a>
                    <a href="#" class="categories__item">
                        <div class="categories-item__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-2.png" alt=""
                                 class="categories__img">
                        </div>
                        <div class="categories__text">Для поклонников<br>мультфильмов</div>
                    </a>
                    <a href="#" class="categories__item">
                        <div class="categories-item__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-3.png" alt=""
                                 class="categories__img">
                        </div>
                        <div class="categories__text">Аксессуары</div>
                    </a>
                    <a href="#" class="categories__item">
                        <div class="categories-item__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-4.png" alt=""
                                 class="categories__img">
                        </div>
                        <div class="categories__text">Оригинальные</div>
                    </a>
                    <a href="#" class="categories__item">
                        <div class="categories-item__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-5.png" alt=""
                                 class="categories__img">
                        </div>
                        <div class="categories__text">Для поклонников<br>видеоигр</div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section new-section">
            <div class="wrapper">
                <h2 class="h2 h2_black"><span class="h2__icon">Ч</span>Хотите авторскую игрушку<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="h2-descr">по индивидуальному <br class="h2-mob-br">заказу?</div>
                <div class="new-section__pretitle">
                    Я придумал совенка и хочу его сшить!
                </div>
                <div class="new-section__box">
                    <div class="new-section__img img1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-img2.png" alt="">
                    </div>
                    <div class="new-section__img img2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-img1.png" alt="">
                    </div>
                    <div class="new-section__img img3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-img3.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_novelty">
            <div class="wrapper">
                <h2 class="h2 h2_pink"><span class="h2__icon">ч</span>Новинки<span
                            class="h2__icon h2__icon_reverse">ч</span></h2>
                <div class="novetly-slider js-novetly-slider">
                    <div class="novetly-slider__item">
                        <a class="novelty-slider__picture" href="#">
								<span class="novelty-slider__round">
									<span class="nov-sl__line1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide.png"
                                             alt="">
									</span>
									<span class="nov-sl__line2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide2.png"
                                             alt="">
									</span>
								</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide1.png" alt="">
                        </a>
                        <a class="novetly-slider__text" href="#">Миньон</a>
                        <a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span
                                    class="btn__icon btn__icon_reverse">.</span></a>
                    </div>
                    <div class="novetly-slider__item">
                        <a class="novelty-slider__picture" href="#">
								<span class="novelty-slider__round">
									<span class="nov-sl__line1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide.png"
                                             alt="">
									</span>
									<span class="nov-sl__line2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide2.png"
                                             alt="">
									</span>
								</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide2.png" alt="">
                        </a>
                        <a class="novetly-slider__text" href="#">Волк</a>
                        <a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span
                                    class="btn__icon btn__icon_reverse">.</span></a>
                    </div>
                    <div class="novetly-slider__item">
                        <a class="novelty-slider__picture" href="#">
								<span class="novelty-slider__round">
									<span class="nov-sl__line1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide.png"
                                             alt="">
									</span>
									<span class="nov-sl__line2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide2.png"
                                             alt="">
									</span>
								</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide3.png" alt="">
                        </a>
                        <a class="novetly-slider__text" href="#">Дракон Spyro</a>
                        <a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span
                                    class="btn__icon btn__icon_reverse">.</span></a>
                    </div>
                    <div class="novetly-slider__item">
                        <a class="novelty-slider__picture" href="#">
								<span class="novelty-slider__round">
									<span class="nov-sl__line1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide.png"
                                             alt="">
									</span>
									<span class="nov-sl__line2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/el-slide2.png"
                                             alt="">
									</span>
								</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/slide1.png" alt="">
                        </a>
                        <a class="novetly-slider__text" href="#">Дракон Spyro</a>
                        <a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span
                                    class="btn__icon btn__icon_reverse">.</span></a>
                    </div>
                </div>
                <!--					<a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span class="btn__icon btn__icon_reverse">.</span></a>-->
            </div>
        </section>

        <section class="section section_form section_form-2">
            <div class="wrapper">
                <h2 class="h2 h2_black">Остались вопросы?</h2>
                <div class="h2-descr"><span class="h2__icon">Ч</span>Как заказать игрушку?<span
                            class="h2__icon h2__icon_reverse">Ч</span></div>
                <div class="new-section__form-text">
                    Мы свяжемся с Вами в ближайшее время.
                </div>
                <div class="new-block__wrapper">


                    <div class="new-section__chat">
                        <div class="new-chat__item red">
                            Здравствуйте! <br>
                            Я хочу заказать тоторо
                        </div>
                        <div class="new-chat__item blue">
                            Добрый день! <br>
                            Мне нужны картинки
                            вашего персонажа
                        </div>
                        <div class="new-chat__item red">
                            Договорились! <br>
                            Спасибо :)
                        </div>
                        <div class="new-chat__btns">
                            <div class="new-chat__btn1">
                                <div class="bouncing-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="new-chat__btn2"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/chat-teleg.png"
                                        alt=""></div>
                        </div>
                    </div>
                    <div class="new-arrow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arr-img.png" alt="">
                    </div>
                    <div class="new-soc__box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-order-img.png" alt="">
                        <ul class="new-soc__list">
                            <li class="new-soc__item item1">
                                <a href="#" class="new-soc__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/vk2.svg"
                                         alt="">
                                </a>
                            </li>
                            <li class="new-soc__item item2">
                                <a href="#" class="new-soc__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/telegram2.svg"
                                         alt="">
                                </a>
                            </li>
                            <li class="new-soc__item item3">
                                <a href="#" class="new-soc__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/fb2.svg"
                                         alt="">
                                </a>
                            </li>
                            <li class="new-soc__item item4">
                                <a href="#" class="new-soc__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/inst2.svg"
                                         alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_advantages">
            <div class="wrapper">
                <h2 class="h2 h2_pink"><span class="h2__icon">Ч</span>Приемущества<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="h2-descr">авторских игрушек на заказ</div>
                <div class="advantages-slider js-advantages-slider">
                    <div class="advantages-slider__item">
                        <div class="advantages-slider__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-3.png" alt=""
                                 class="advantages-slider__img">
                        </div>
                        <div class="advantages-slider__text"><span class="nav__icon">У</span>Детализация игрушки<span
                                    class="nav__icon">У</span></div>
                    </div>
                    <div class="advantages-slider__item">
                        <div class="advantages-slider__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-1.png" alt=""
                                 class="advantages-slider__img">
                        </div>
                        <div class="advantages-slider__text"><span class="nav__icon">У</span>Эксклюзивный стиль<span
                                    class="nav__icon">У</span></div>
                    </div>
                    <div class="advantages-slider__item">
                        <div class="advantages-slider__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-2.png" alt=""
                                 class="advantages-slider__img">
                        </div>
                        <div class="advantages-slider__text"><span class="nav__icon">У</span>Экологически чистые
                            материалы<span class="nav__icon">У</span></div>
                    </div>

                    <div class="advantages-slider__item">
                        <div class="advantages-slider__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-4.png" alt=""
                                 class="advantages-slider__img">
                        </div>
                        <div class="advantages-slider__text"><span class="nav__icon">У</span>Ручная работа<span
                                    class="nav__icon">У</span></div>
                    </div>
                    <div class="advantages-slider__item advantages-slider__item_last">
                        <div class="advantages-slider__pict">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-5.png" alt=""
                                 class="advantages-slider__img">
                        </div>
                        <div class="advantages-slider__text"><span class="nav__icon">У</span>Схожесть с персонажем<span
                                    class="nav__icon">У</span></div>
                    </div>
                </div>
                <div class="advantages-slider__buttons"></div>
                <div class="advantages-slider__clips"></div>
            </div>
        </section>

        <section class="section section_about-me">
            <div class="wrapper">
                <h2 class="h2 h2_black"><span class="h2__icon">Ч</span>Обо мне<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="about-me">
                    <div class="about-me__photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-me-photo.png" alt="">
                    </div>
                    <div class="about-me__container">
                        <div class="about-me__title">Каждая сшитая мной игрушка —<br> сделана с любовью для Вас!</div>
                        <div class="about-me__text">
                            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum
                                является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий
                                безымянный печатник создал большую коллекцию размеров и форм
                                шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
                            <p>Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул
                                в электронный дизайн. </p>
                        </div>
                        <div class="about-me__signature">С ув. ваша Елена Алексеева !</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_news">

            <div class="wrapper">
                <h2 class="h2 h2_pink"><span class="h2__icon">Ч</span>Новости<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="news">
                    <a href="#" class="news__item">
                        <div class="news__photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-1.png" alt="">
                        </div>
                        <div class="news__title">Лучший подарок - плюшевый.</div>
                        <div class="news__date">25. 12. 2018</div>
                        <div class="news__text">Идеальный подарок для людей всех возрастов. Персонаж из любимой игры или
                            мультипликационный герой неожиданно рядом.
                        </div>
                    </a>
                    <a href="#" class="news__item">
                        <div class="news__photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-2.png" alt="">
                        </div>
                        <div class="news__title">Игрушки — лучшие друзья!</div>
                        <div class="news__date">25. 12. 2018</div>
                        <div class="news__text">Превратите рисунки вашего ребенка в лучшего плюшевого друга! Это не
                            только оживит воображение, но и позволит обнять любимого персонажа.
                        </div>
                    </a>
                    <a href="#" class="news__item">
                        <div class="news__photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-3.png" alt="">
                        </div>
                        <div class="news__title">Экологически чистые материалы</div>
                        <div class="news__date">25. 12. 2018</div>
                        <div class="news__text">Мягкие и приятные на ощупь ткани с воздушным наполнителем внутри, ведь
                            игрушка это не только эстетическое наслаждение но и предмет комфорта.
                        </div>
                    </a>
                </div>
                <div class="news__btn">
                    <a href="#" class="btn btn_pink"><span class="btn__icon">.</span>Все новости<span
                                class="btn__icon btn__icon_reverse">.</span></a>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>