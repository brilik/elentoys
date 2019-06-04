<?php

/**
 * Генерация вёрстки социальных значков.
 *
 * @param $ulClass
 * @param int $isPopup приминмает только 1, 2 или 0 (по умолчанию). 1 - в попапе, 2 - в секции
 * @param int $arrShow принимает массив социалок, которые нужно вывести. Example: telegram, inst, vk, viber
<<<<<<< HEAD
 * @param string $productName нужно использовать функцию get_the_title().
=======
>>>>>>> 39250c57ea6110edd2ffcf4ab072fa16d2c0e0d1
 * @return string
 */
function elentoys_the_social($ulClass, $isPopup = 0, $arrShow = 0, $productName = '')
{

    $out = (string)'';
    $count = $key = 0;
    $textOrder = (string)"Добрый день! \n Я хочу заказать \"$productName\"";

    if (get_field('vertical', 'options')):

        $out .= '<ul class="' . $ulClass . '">';

        if ($isPopup == 2) {

            while (has_sub_field('vertical', 'options')) {

                $fileName = (get_sub_field('icon') === 'whatsapp') ? 'wp' : get_sub_field('icon');

                if ($fileName == 'twitter' || $fileName == 'skype' || $fileName == '' || $fileName == 'wp' || $fileName == 'viber') continue;

                $out .= '<li class="new-soc__item item' . ++$count . '">
                                <a href="' . get_sub_field('link') . '" class="new-soc__link" target="_blank">
                                    <img src="' . get_template_directory_uri() . '/assets/img/social/' . $fileName . '2.svg"
                                         alt="">
                                </a>
                            </li>';

            }

        } else if ($isPopup == 1) {

            while (has_sub_field('vertical', 'options')) {

                $fileName = (get_sub_field('icon') === 'whatsapp') ? 'wp' : get_sub_field('icon');
                $out .= '<li class="backcall-list__item">
                    <a href="' . get_sub_field('link') . '" class="backcall-list__link ' . $fileName . '" target="_blank">
                    <img src="' . get_template_directory_uri() . '/assets/img/social/' . $fileName . '.svg" alt=""></a></li>';
            }

        } elseif ($isPopup === 0) {

            if( $arrShow !== 0 ) {

                while (has_sub_field('vertical', 'options')) {

                    $key = array_search(get_sub_field('icon'), $arrShow);

                    if (false !== $key) {
                        $out .= '<li class="social__item">
                        <a href="' . get_sub_field('link') . '" class="social__link" target="_blank">
                        <i class="icon-' . $arrShow[$key] . '"></i></a></li>';
                    }

                }

            } else {

                while (has_sub_field('vertical', 'options')) {

                    $out .= '<li class="social__item">
                    <a href="' . get_sub_field('link') . '" class="social__link" target="_blank">
                    <i class="icon-' . get_sub_field('icon') . '"></i></a></li>';

                }

            }

        } elseif ($isPopup === 3) {

            if( $arrShow !== 0 ) {

                while (has_sub_field('vertical', 'options')) {

                    $key = array_search(get_sub_field('icon'), $arrShow);

                    $link = $phone = get_sub_field('link');

                    if ('whatsapp' === $arrShow[$key]) {

                        $phone = elentoys_the_phone_clear($phone);
                        $link = "https://wa.me/$phone?text=".urlencode($textOrder);
                    }

                    if (false !== $key) {
                        $out .= '<li class="social__item">
                        <a href="'. $link .'" class="social__link" target="_blank">
                        <i class="icon-' . $arrShow[$key] . '"></i></a></li>';
                    }

                }

            } else {

                while (has_sub_field('vertical', 'options')) {

                    $out .= '<li class="social__item">
                    <a href="' . get_sub_field('link') . '" class="social__link" target="_blank">
                    <i class="icon-' . get_sub_field('icon') . '"></i></a></li>';

                }

            }

        }

        $out .= '</ul>';

    endif;

    return $out;

}