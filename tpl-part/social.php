<?php

function elentoys_the_social($ulClass, $isPopup = 0)
{

    $out = (string)'';

    if (get_field('vertical', 'options')):

        $out .= '<ul class="' . $ulClass . '">';

        if ($isPopup) {

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