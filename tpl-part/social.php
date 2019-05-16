<?php

$out = (string)'';

if (get_field('vertical', 'options')):

    $out .= '<ul class="social js-social">';

    while (has_sub_field('vertical', 'options')) {

        $out .= '<li class="social__item">
                <a href="'.get_sub_field('link').'" class="social__link">
                <i class="icon-'.get_sub_field('icon').'"></i></a></li>';

    }

    $out .= '</ul>';

endif;

echo $out;