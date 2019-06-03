<!-- BEGIN HEADER -->

<header class="header">
    <div class="header__top">
        <div class="wrapper">
            <a href="#" class="header-top__mobile header-top__mobile-js">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <?php echo elentoys_the_social('social-header', 0, array('vk', 'fb', 'inst', 'twitter')); ?>

            <a href="<?php echo home_url(); ?>" class="logo logo_header">
						<span class="animal-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-0.svg" alt="" class="animal-img animal-img-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-1.svg" alt="" class="animal-img animal-img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-2.svg" alt="" class="animal-img animal-img-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-3.svg" alt="" class="animal-img animal-img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-4.svg" alt="" class="animal-img animal-img-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-5.svg" alt="" class="animal-img animal-img-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-6.svg" alt="" class="animal-img animal-img-6">
                        </span>
            </a>
        </div>
    </div>
    <div class="header__bottom mt-auto">
        <div class="wrapper">
            <?php elentoys_menu( 'main' ); ?>
        </div>
    </div>
</header>

<?php echo elentoys_the_social('social js-social'); ?>

<a href="#popup-backcall" class="back-call js-fancybox"><i class="zmdi zmdi-phone"></i></a>

<!-- HEADER EOF   -->