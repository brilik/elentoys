<?php

function elentoys_the_social($ulClass, $isPopup = 0)
{

    $out = (string)'';
    $count = 0;

    if (get_field('vertical', 'options')):

        $out .= '<ul class="' . $ulClass . '">';

        if($isPopup == 2) {

            while(has_sub_field('vertical', 'options')) {

                $fileName = ( get_sub_field('icon') === 'whatsapp' )? 'wp' : get_sub_field('icon');

                if( $fileName == 'twitter' || $fileName == 'skype' || $fileName == '' || $fileName == 'wp' || $fileName == 'viber' ) continue;

                $out .= '<li class="new-soc__item item'.++$count.'">
                                <a href="'.get_sub_field('link').'" class="new-soc__link">
                                    <img src="'. get_template_directory_uri() .'/assets/img/social/'.$fileName.'2.svg"
                                         alt="">
                                </a>
                            </li>';

            }

        } else if ($isPopup == 1) {

            while (has_sub_field('vertical', 'options')) {

                $fileName = ( get_sub_field('icon') === 'whatsapp' )? 'wp' : get_sub_field('icon');
                $out .= '<li class="backcall-list__item">
                    <a href="'.get_sub_field('link').'" class="backcall-list__link '.$fileName.'">
                    <img src="' . get_template_directory_uri() . '/assets/img/social/' . $fileName . '.svg" alt=""></a></li>';
            }

        } else {

            while (has_sub_field('vertical', 'options')) {

                $out .= '<li class="social__item">
                    <a href="' . get_sub_field('link') . '" class="social__link">
                    <i class="icon-' . get_sub_field('icon') . '"></i></a></li>';

            }
        }

        $out .= '</ul>';

    endif;

    echo $out;

}