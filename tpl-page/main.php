<?php
/**
 * Template Name: Главная
 */

get_template_part('tpl-part/head');

global $posts, $post;

$post_type = 'toys';
$tax_type = 'toys_category';
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

                        // todo option background
                        $imgBckgr = ( $item['bckgr'] )? $item['bckgr'] : '';
                        $imgBckgrMob = ( $item['bckgr_mob'] )? $item['bckgr_mob'] : '';
                        $imgBckgrTab = ( $item['bckgr_tab'] )? $item['bckgr_tab'] : '';

                        // todo option title
                        $title = $item['title'];
                        $title_show = $item['title_show'];
                        $position_title = $item['position_title'];

                        // todo option subtitle
                        $subtitle = $item['subtitle'];
                        $subtitle_show = $item['subtitle_show'];
                        $position_subtitle = $item['position_subtitle'];

                        // todo option description
                        $desc = $item['desc'];
                        $desc_show = $item['desc_show'];
                        $position_desc = $item['position_desc'];

                        // todo option button
                        $link = array();
                        $link_show = $item['link_show'];
                        $position_btn = $item['position_btn'];

                        // todo option images toys
                        $imgLeft = $item['imgLeft'];
                        $imgLeft_show = $item['imgLeft_show'];
                        $positionImg = $item['transform']['positionImg'];
                        $positionImgY = $item['transform']['positionImgY'];

                        $imgRight = $item['imgRight'];
                        $imgRight_show = $item['imgRight_show'];
                        $positionRightImg = $item['transform_right']['positionImg'];
                        $positionRightImgY = $item['transform_right']['positionImgY'];

                        $link['title'] = (!empty($item['link']['title'])) ? $item['link']['title'] : 'Подробнее';
                        $link['url'] = (!empty($item['link']['url'])) ? $item['link']['url'] : '#';
                        $link['target'] = (!empty($item['link']['target'])) ? $item['link']['target'] : '';

                        if ($item['position'] == 2) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__img<?php echo ($count === 1) ? ' img1' : ''; ?>">
                                        <?php if($imgLeft_show): ?><img src="<?php echo $imgLeft['url'] ?>"
                                             style="transform: translate(<?php echo $positionImg; ?>px,
                                             <?php echo $positionImgY;?>px)!important;" alt="">
                                    </div><?php endif; ?>
                                    <div class="main-slider__img-bottom">
                                        <img src="<?php echo $imgRight['url'] ?>"
                                             style="transform: translate(<?php echo $positionRightImg; ?>px,
                                             <?php echo $positionRightImgY;?>px)!important; alt="">
                                    </div>
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"
                                            style="transform: translate(<?php echo $position_title['x']; ?>px,
                                            <?php echo $position_title['y'];?>px)!important;"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"
                                             style="transform: translate(<?php echo $position_subtitle['x']; ?>px,
                                             <?php echo $position_subtitle['y'];?>px)!important;"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"
                                             style="transform: translate(<?php echo $position_desc['x']; ?>px,
                                             <?php echo $position_desc['y'];?>px)!important;"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span>
                                            <?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span><?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 0) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 1) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 3) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right center-mobile">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php }

                    endforeach;

                endif; ?>
            </div>
            <div class="main-slider js-main-slider tablet-slider">

                <?php
                $section = get_field('slider_add');

                if ($section): $count = 0;

                    foreach ($section as $item): $count++;

                        if ($item['hide']) continue;

                        // todo option background
                        $imgBckgr = ( $item['bckgr'] )? $item['bckgr'] : '';
                        $imgBckgrMob = ( $item['bckgr_mob'] )? $item['bckgr_mob'] : '';
                        $imgBckgrTab = ( $item['bckgr_tab'] )? $item['bckgr_tab'] : '';

                        // todo option title
                        $title = $item['title_tab'];
                        $title_show = $item['title_tab_show'];
                        $position_title = $item['position_title_tab'];

                        // todo option subtitle
                        $subtitle = $item['subtitle_tab'];
                        $subtitle_show = $item['subtitle_tab_show'];
                        $position_subtitle = $item['position_subtitle_tab'];

                        // todo option description
                        $desc = $item['desc_tab'];
                        $desc_show = $item['desc_tab_show'];
                        $position_desc = $item['position_desc_tab'];

                        // todo option button
                        $link = array();
                        $link_show = $item['link_tab_show'];
                        $position_btn = $item['position_btn_tab'];

                        // todo option images toys
                        $imgLeft = $item['imgLeft_tab'];
                        $imgLeft_show = $item['imgLeft_show_tab'];
                        $positionImg = $item['transform_tab']['positionImg'];
                        $positionImgY = $item['transform_tab']['positionImgY'];

                        $imgRight = $item['imgRight_tab'];
                        $imgRight_show = $item['imgRight_show_tab'];
                        $positionRightImg = $item['transform_right_tab']['positionImg'];
                        $positionRightImgY = $item['transform_right_tab']['positionImgY'];

                        $link['title'] = (!empty($item['link_tab']['title'])) ? $item['link_tab']['title'] : 'Подробнее';
                        $link['url'] = (!empty($item['link_tab']['url'])) ? $item['link_tab']['url'] : '#';
                        $link['target'] = (!empty($item['link_tab']['target'])) ? $item['link_tab']['target'] : '';

                        if ($item['position'] == 2) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__img<?php echo ($count === 1) ? ' img1' : ''; ?>">
                                        <?php if($imgLeft_show): ?><img src="<?php echo $imgLeft['url'] ?>"
                                             style="transform: translate(<?php echo $positionImg; ?>px,
                                             <?php echo $positionImgY;?>px)!important;" alt="">
                                    </div><?php endif; ?>
                                    <div class="main-slider__img-bottom">
                                        <img src="<?php echo $imgRight['url'] ?>"
                                             style="transform: translate(<?php echo $positionRightImg; ?>px,
                                             <?php echo $positionRightImgY;?>px)!important; alt="">
                                    </div>
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"
                                            style="transform: translate(<?php echo $position_title['x']; ?>px,
                                            <?php echo $position_title['y'];?>px)!important;"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"
                                             style="transform: translate(<?php echo $position_subtitle['x']; ?>px,
                                             <?php echo $position_subtitle['y'];?>px)!important;"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"
                                             style="transform: translate(<?php echo $position_desc['x']; ?>px,
                                             <?php echo $position_desc['y'];?>px)!important;"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span>
                                            <?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span><?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 0) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 1) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 3) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right center-mobile">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php }

                    endforeach;

                endif; ?>
            </div>
            <div class="main-slider js-main-slider mobile-slider">

                <?php
                $section = get_field('slider_add');

                if ($section): $count = 0;

                    foreach ($section as $item): $count++;

                        if ($item['hide']) continue;

                        // todo option background
                        $imgBckgr = ( $item['bckgr'] )? $item['bckgr'] : '';
                        $imgBckgrMob = ( $item['bckgr_mob'] )? $item['bckgr_mob'] : '';
                        $imgBckgrTab = ( $item['bckgr_tab'] )? $item['bckgr_tab'] : '';

                        // todo option title
                        $title = $item['title_mob'];
                        $title_show = $item['title_mob_show'];
                        $position_title = $item['position_title_mob'];

                        // todo option subtitle
                        $subtitle = $item['subtitle_mob'];
                        $subtitle_show = $item['subtitle_mob_show'];
                        $position_subtitle = $item['position_subtitle_mob'];

                        // todo option description
                        $desc = $item['desc_mob'];
                        $desc_show = $item['desc_mob_show'];
                        $position_desc = $item['position_desc_mob'];

                        // todo option button
                        $link = array();
                        $link_show = $item['link_mob_show'];
                        $position_btn = $item['position_btn_mob'];

                        // todo option images toys
                        $imgLeft = $item['imgLeft_mob'];
                        $imgLeft_show = $item['imgLeft_show_mob'];
                        $positionImg = $item['transform_mob']['positionImg'];
                        $positionImgY = $item['transform_mob']['positionImgY'];

                        $imgRight = $item['imgRight_mob'];
                        $imgRight_show = $item['imgRight_show_mob'];
                        $positionRightImg = $item['transform_right_mob']['positionImg'];
                        $positionRightImgY = $item['transform_right_mob']['positionImgY'];

                        $link['title'] = (!empty($item['link_mob']['title'])) ? $item['link_mob']['title'] : 'Подробнее';
                        $link['url'] = (!empty($item['link_mob']['url'])) ? $item['link_mob']['url'] : '#';
                        $link['target'] = (!empty($item['link_mob']['target'])) ? $item['link_mob']['target'] : '';

                        if ($item['position'] == 2) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__img<?php echo ($count === 1) ? ' img1' : ''; ?>">
                                        <?php if($imgLeft_show): ?><img src="<?php echo $imgLeft['url'] ?>"
                                             style="transform: translate(<?php echo $positionImg; ?>px,
                                             <?php echo $positionImgY;?>px)!important;" alt=""><?php endif; ?>
                                    </div>
                                    <div class="main-slider__img-bottom">
                                        <img src="<?php echo $imgRight['url'] ?>"
                                             style="transform: translate(<?php echo $positionRightImg; ?>px,
                                             <?php echo $positionRightImgY;?>px)!important; alt="">
                                    </div>
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"
                                            style="transform: translate(<?php echo $position_title['x']; ?>px,
                                            <?php echo $position_title['y'];?>px)!important;"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"
                                             style="transform: translate(<?php echo $position_subtitle['x']; ?>px,
                                             <?php echo $position_subtitle['y'];?>px)!important;"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"
                                             style="transform: translate(<?php echo $position_desc['x']; ?>px,
                                             <?php echo $position_desc['y'];?>px)!important;"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span>
                                            <?php echo $link['title']; ?><?php endif; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 0) { ?>

                            <div class="main-slider__item main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?>
                                            <span class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 1) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else if ($item['position'] == 3) { ?>

                            <div class="main-slider__item main-slider__item_slide-center main-slider__item_with-bg"
                                 style="background-image:url(<?php echo $imgBckgr['url']; ?>)"
                                 data-mob-href="<?php echo $imgBckgrMob['url']; ?>"
                                 data-tab-href="<?php echo $imgBckgrTab['url']; ?>">
                                <div class="wrapper">
                                    <div class="main-slider__right center-mobile">
                                        <?php if($title_show): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                                        <?php if($subtitle_show): ?><div class="h1-descr"><?php echo $subtitle; ?></div><?php endif; ?>
                                        <?php if($desc_show): ?><div class="main-slider__text"><?php echo $desc; ?></div><?php endif; ?>
                                        <?php if($link_show): ?><a style="transform: translate(<?php echo $position_btn['x']; ?>px,
                                           <?php echo $position_btn['y'];?>px)!important;"
                                           href="<?php echo $link['url']; ?>" class="btn btn_pink" target="<?php echo $link['target']; ?>">
                                            <span class="btn__icon">.</span><?php echo $link['title']; ?><span
                                                    class="btn__icon btn__icon_reverse">.</span></a><?php endif; ?>
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
                            class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <?php
                $count = get_field('category_count');
                $categories = get_terms($tax_type, "orderby=name&hide_empty=0&number=$count&parent=0");

                if ($categories) {

                    echo '<div class="categories">';

                    foreach ($categories as $cat) {

                        $term = get_queried_object();
                        $image = get_field('img', $term);
                        $image = get_field('img', $cat->taxonomy . '_' . $cat->term_id);

                        echo '<a href="' . get_term_link($cat->term_taxonomy_id, $tax_type) . '" class="categories__item">
                            <div class="categories-item__pict">
                                <img src="' . $image['url'] . '" alt="' . $image['alt'] . '"
                                     class="categories__img">
                            </div>
                            <div class="categories__text">' . $cat->name . '</div>
                        </a>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <section class="section new-section"
                 style="background-image:url(<?php echo get_field('bckgr_3')['url']; ?>)"
                 data-mob-href="<?php echo get_field('bckgr_mob_3')['url']; ?>"
                 data-tab-href="<?php echo get_field('bckgr_tab_3')['url']; ?>">
            <div class="wrapper">
                <h2 class="h2 h2_black"><span class="h2__icon">Ч</span>Хотите авторскую игрушку<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="h2-descr">по индивидуальному <br class="h2-mob-br">заказу?</div>
                <div class="new-section__pretitle">
                    Я придумал совенка и хочу его сшить!
                </div>
                <div class="new-section__box">
                    <div class="new-section__img img1">
                        <img src="<?php echo get_field('author_img_left')['url']; ?>"
                             alt="<?php echo get_field('author_img_left')['alt']; ?>">
                    </div>
                    <div class="new-section__img img2">
                        <img src="<?php echo get_field('author_img_center')['url']; ?>"
                             alt="<?php echo get_field('author_img_center')['alt']; ?>">
                    </div>
                    <div class="new-section__img img3">
                        <img src="<?php echo get_field('author_img_right')['url']; ?>"
                             alt="<?php echo get_field('author_img_right')['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_novelty">
            <div class="wrapper">
                <h2 class="h2 h2_pink">
                    <span class="h2__icon">ч</span>Новинки<span class="h2__icon h2__icon_reverse">ч</span>
                </h2>
                <div class="novetly-slider js-novetly-slider">
                    <?php
                    $posts = get_posts(array(
                        'numberposts' => get_field('new_count'),
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => $post_type,
                        'suppress_filters' => true,
                    ));

                    foreach ($posts as $post) {
                        setup_postdata($post); ?>
                        <div class="novetly-slider__item">
                            <a class="novelty-slider__picture" href="<?php the_permalink(); ?>">
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
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </a>
                            <a class="novetly-slider__text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <a href="<?php the_permalink(); ?>" class="btn btn_pink"><span class="btn__icon">.</span>Заказать<span
                                        class="btn__icon btn__icon_reverse">.</span></a>
                        </div>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>

        <section class="section section_form section_form-2"
                 style="background-image:url(<?php echo get_field('how_buy_background')['url']; ?>)">
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
                            <div class="new-chat__btn2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chat-teleg.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="new-arrow__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arr-img.png" alt="">
                    </div>
                    <div class="new-soc__box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-order-img.png" alt="">
                        <?php echo elentoys_the_social('new-soc__list', 2); ?>
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
                    <?php
                    if (get_field('advantages_slider_add')):

                        while (has_sub_field('advantages_slider_add')) { ?>
                            <div class="advantages-slider__item">
                                <div class="advantages-slider__pict">
                                    <img src="<?php echo get_sub_field('img')['url']; ?>"
                                         alt="<?php echo get_sub_field('img')['alt']; ?>"
                                         class="advantages-slider__img">
                                </div>
                                <div class="advantages-slider__text">
                                    <span class="nav__icon">У</span>
                                    <?php the_sub_field('text'); ?>
                                    <span class="nav__icon">У</span>
                                </div>
                        </div>
                        <?php }

                    endif;
                    ?>
                </div>
                <div class="advantages-slider__buttons"></div>
                <div class="advantages-slider__clips"></div>
            </div>
        </section>

        <section class="section section_about-me"
                 style="background-image:url(<?php echo get_field('bckgr_7')['url']; ?>)"
                 data-mob-href="<?php echo get_field('bckgr_mob_7')['url']; ?>"
                 data-tab-href="<?php echo get_field('bckgr_tab_7')['url']; ?>">
            <div class="wrapper">
                <h2 class="h2 h2_black"><span class="h2__icon">Ч</span>Обо мне<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="about-me">
                    <div class="about-me__photo">
                        <img src="<?php echo get_field('about_photo')['url']; ?>"
                             alt="<?php echo get_field('about_photo')['url']; ?>">
                    </div>
                    <?php $block = get_field('about_right'); ?>
                    <div class="about-me__container">
                        <div class="about-me__title"><?php echo $block['title']; ?></div>
                        <div class="about-me__text"><?php echo $block['desc']; ?></div>
                        <div class="about-me__signature"><?php echo $block['sender']; ?></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_news">

            <div class="wrapper">
                <h2 class="h2 h2_pink"><span class="h2__icon">Ч</span>Новости<span
                            class="h2__icon h2__icon_reverse">Ч</span></h2>
                <div class="news">
                <?php
                $posts = get_posts(array(
                    'numberposts' => get_field('news_count'),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'suppress_filters' => true,
                ));

                foreach ($posts as $post) {
                    setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>" class="news__item">
                        <div class="news__photo">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="news__title"><?php the_title(); ?></div>
                        <div class="news__date"><?php the_date('d. m. Y'); ?></div>
                        <div class="news__text"><?php the_excerpt(); ?></div>
                    </a>
                <?php }
                wp_reset_postdata(); ?>
                </div>
                <div class="news__btn">
                    <a href="<?php the_permalink(27); ?>" class="btn btn_pink"><span class="btn__icon">.</span>Все новости<span
                                class="btn__icon btn__icon_reverse">.</span></a>
                </div>
            </div>
        </section>

    </main>

    <!-- CONTENT EOF   -->

<?php get_header(); ?>

<?php get_footer(); ?>