<!-- BEGIN FOOTER -->

<footer>
    <div class="wrapper">
        <!--
                        <div class="privacy-policy">
                            <a href="#" class="privacy-policy__link">Политика конфеденциальности</a>
                            <span>Handmade toys 2019</span>
                        </div>
        -->
        <a href="<?php echo home_url(); ?>" class="logo logo_footer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
        </a>
        <!--
                        <div class="call ml-auto">
                            <div class="icon">Н<i class="zmdi zmdi-phone"></i></div>
                            <div class="call__info">
                                <a href="tel:+380937929001" class="call__number">+ 3 8(093) 79-29-001</a>
                                <a href="#" class="call__link">Заказать бесплатный звонок</a>
                            </div>
                        </div>
        -->
    </div>
</footer>

<!-- FOOTER EOF   -->

<?php get_template_part('tpl-part/popup/backcall') ?>

</div>

<div class="icon-load">
    <div class="icon-load-box">
        <div class="icon-load-img icon-load-img-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.svg" alt=""></div>
        <div class="icon-load-img icon-load-img-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.svg" alt=""></div>
        <div class="icon-load-img icon-load-img-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img3.svg" alt=""></div>
    </div>
</div>

<!-- BODY EOF   -->

<?php wp_footer(); ?>
</body>

</html>