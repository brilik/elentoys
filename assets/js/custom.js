$(window).on('load', function () {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        $('body').addClass('ios');
    } else {
        $('body').addClass('web');
    };
    $('body').removeClass('loaded');
});

/* viewport width */
function viewport() {
	var e = window,
		a = 'inner';
	if (!('innerWidth' in window)) {
		a = 'client';
		e = document.documentElement || document.body;
	}
	return {
		width: e[a + 'Width'],
		height: e[a + 'Height']
	}
};
/* viewport width */

$(document).ready(function () {

    if ($('.header').length) {
        $(window).scroll(function () {
            var scr_top = $(window).scrollTop();
            if (scr_top > 0) {
                $('.header').addClass("active");
            } else {
                $('.header').removeClass("active")
            }
        });

        $(window).on('load', function () {
            var scr_top = $(window).scrollTop();
            if (scr_top > 0) {
                $('.header').addClass("active");
            } else {
                $('.header').removeClass("active")
            }
        });
    };

    //Fancybox
    var zoom = 1;
    
    if ($('.js-fancybox').length) {
        $('.js-fancybox').fancybox({
            buttons: [
//                "zoom",
                //"share",
                "slideShow",
                "fullScreen",
                //"download",
                "thumbs",
                "close"
            ],
            thumbs : {
                autoStart   : true,
                hideOnClose : true
            },
            baseTpl	:
                '<div class="fancybox-container" role="dialog" tabindex="-1">' +
                    '<div class="fancybox-bg"></div>' +
                    '<div class="fancybox-inner">' +
                        '<div class="fancybox-infobar">' +
                            '<span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span>' +
                        '</div>' +
                        '<div class="fancybox-toolbar">{{buttons}}<div class="fancybox-zoom"><div class="fancybox-zoom-in fancybox-button">+</div><div class="fancybox-zoom-out fancybox-button">-</div></div></div>' +
                        '<div class="fancybox-navigation">{{arrows}}</div>' +
                        '<div class="fancybox-stage"></div>' +
                        '<div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div>' +
                    '</div>' +
                '</div>',
            afterClose : function(){
                zoom = 1;
            },
            onNext: function () { zoom = 1; },
            onPrev: function () { zoom = 1; },
        });
    };
    
    
    
    $(document).on('click touchstart', '.fancybox-zoom-in', function() {
        zoom = zoom + 0.05;
        if (zoom > 1.4) {
            zoom = 1.4;
        }
        $('.fancybox-content .fancybox-image').css({ 
            'transform': 'scale(' + zoom + ')'
        });
    });
    
    $(document).on('click touchstart', '.fancybox-zoom-out', function() {
        zoom = zoom - 0.05;
        if (zoom < 0.6) {
            zoom = 0.6;
        }
        $('.fancybox-content .fancybox-image').css({ 
            'transform': 'scale(' + zoom + ')'
        });
    });

    if ($('.js-social').length) {
        $('.js-social').slick({
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><i class="icon-arrow-up"></i></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="icon-arrow-down"></i></button>'
        });
    }

    $('.js-main-slider').slick({
        prevArrow: '<div class="prev-arrow slick-prev slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        nextArrow: '<div class="next-arrow slick-next slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        infinite: false,
        dots: true,
        dotsClass: 'custom_paging',
        customPaging: function (slider, i) {
            if (slider.slideCount > 9) {
                return '<span class="current-dot">' + (i + 1) + '/' + '</span> ' + '<span>' + slider.slideCount + '</span>';
            } else {
                return '<span class="current-dot">0' + (i + 1) + '/' + '</span> ' + '<span>0' + slider.slideCount + '</span>';
            }
        },
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    adaptiveHeight:true
                }
            }
        ]
    });

    $('.js-novetly-slider').slick({
        prevArrow: '<div class="prev-arrow slick-prev slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        nextArrow: '<div class="next-arrow slick-next slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: true,
        initialSlide: 1,
        speed: 300,
        centerPadding: '0',
        dotsClass: 'custom_paging',
        customPaging: function (slider, i) {
            if (slider.slideCount > 9) {
                return '<span class="current-dot">' + (i + 1) + '/' + '</span> ' + '<span>' + slider.slideCount + '</span>';
            } else {
                return '<span class="current-dot">0' + (i + 1) + '/' + '</span> ' + '<span>0' + slider.slideCount + '</span>';
            }
        },
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    initialSlide: 2,
                    centerPadding: '60px',
                    dots: true,

                    centerMode: false
                }
            },
            {
                breakpoint: 551,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    initialSlide: 2,
                    centerPadding: '60px',
                    dots: true,
                    fade: true,
                    centerMode: false
                }
            }
        ]
    });

    $('.js-advantages-slider').slick({
        prevArrow: '<div class="prev-arrow slick-prev slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        nextArrow: '<div class="next-arrow slick-next slick-arrow"><i class="material-icons">arrow_right_alt</i></div>',
        infinite: false,
        dots: true,
        dotsClass: 'custom_paging',
        customPaging: function (slider, i) {
            if (slider.slideCount > 9) {
                return '<span class="current-dot">' + (i + 1) + '/' + '</span> ' + '<span>' + slider.slideCount + '</span>';
            } else {
                return '<span class="current-dot">0' + (i + 1) + '/' + '</span> ' + '<span>0' + slider.slideCount + '</span>';
            }
        }
    });
    if ($('.product-slider__nav-js').length) {
        $('.product-slider__nav-js').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.product-slider__for-js',
            dots: false,
            vertical: true,
            focusOnSelect: true,
            arrows: true,
            prevArrow: '.product-slider__next',
            nextArrow: '.product-slider__prev',
            responsive: [

                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        vertical: false,


                    }
                }
            ]

        })
    }
    if ($('.js-product-slider-nav').length) {
        $('.js-product-slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.product-slider__for-js',
            dots: false,
            focusOnSelect: true,
            arrows: true,
            prevArrow: '.product-slider__next',
            nextArrow: '.product-slider__prev',
            responsive: [

                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        vertical: false,


                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        infinite: true,


                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 550,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]

        })
    }
    if ($('.product-slider__for-js').length) {
        $('.product-slider__for-js').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.product-slider__nav-js',
            dots: false,


            arrows: false,
            responsive: [

                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,


                    }
                }
            ]

        })
    }
    $('.header-top__mobile-js').click(function () {
        $('body').toggleClass('active')

        return false
    })
    $('.prev-arrow, .next-arrow').click(function () {
        return false;
    });

    $('.with-subitem').click(function () {
        $(this).toggleClass("subitem-active");
        $(this).find('.subitem-list').slideToggle(150);
        return false;
    });

    $('.box-category__head').click(function () {
        $(this).parent(".box-category").toggleClass("active");
    });
    
//    Animals();
    (function Animals() {
        $animal = $('.animal-imgs');
        
        $animal.find('.animal-img').eq(0).addClass('shown');
        
        function Anim() {
            $delay = 0;

            $('.animal-img').each(function(index, item) {
                var that = $(this);
                setTimeout(function() {
                    $('.animal-img').removeClass('shown');
                    that.addClass('shown');
                }, $delay += 100);
            });
            $animal.find('.animal-img').eq(0).addClass('shown');
        };        
        
        setInterval(function () {
            Anim();
        }, 5000);
    }());
    
});

var handler = function () {

	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;

    //img
	if (viewport_wid <= 1023 && viewport_wid >= 768) {
        $src = $('.main-slider__item_with-bg, .blog-section .blog-section__top, .about-section__seven').data('tab-href');
        $('.main-slider__item_with-bg, .blog-section .blog-section__top, .about-section__seven').css("background-image", "url('" + $src + "')");
    }
    if (viewport_wid <= 767) {
        $src = $('.main-slider__item_with-bg, .blog-section .blog-section__top, .about-section__seven').data('mob-href');
        $('.main-slider__item_with-bg, .blog-section .blog-section__top, .about-section__seven').css("background-image", "url('" + $src + "')");
    }
    
}

$(window).bind('load', handler);
$(window).bind('resize', handler);

/** start
 * FOR WORDPRESS
 */
    // customization filter category toys
    function customCategoryFilter() {
        var li = $('.box-category__content > ul > li');
        var children = li.find('.children');
        var childrenLink = children.find('a');
        var like = '<span class="category-list__more"></span>';

        li.each(function () {
            $(this).addClass('category-list__item');
            $(this).prepend(like);
        });

        $('.category-list__item > a').addClass('category-list__link');
        children.addClass('subitem-list');

        children.find('li').each(function () {
            $(this).addClass('subitem-list__item');
        });

        childrenLink.each(function () {
            $(this).addClass('subitem-list__link');
        });
    }

    // Find box where more two img and customization here
    function findCountImgAndCustomImgOfContent(){
        $('.note-section__img').each(function () {
            let img = $(this).find('img');
            let countImg = img.length;

            if(countImg >= 2){
                $(this).attr('class','note-section__box');
                $(this).find('img').wrap('<div class="note-section__img">');
            }
        });
    }

    function makeActiveCurCategory(){
        var ul = $('.jsMakeActiveCategory');
        var curCat = ul.data('cat');
        var listCat = ul.find('li a');

        listCat.each(function () {
            let cur = $(this).text();

            if( cur === curCat )
                $(this).css('color','#e33576');

        });

    }

    $(document).ready(function ()
    {
        customCategoryFilter();
        findCountImgAndCustomImgOfContent();
        makeActiveCurCategory();
    });

/** end
 * FOR WORDPRESS
 */