$(function () {
    const headerButton = document.querySelector('.header-button');
    const headerMenuWrapp = document.querySelector('.header__menu-wrapp');

    headerButton.addEventListener('click', function () {
        headerButton.classList.toggle('header-button--active');
        headerMenuWrapp.classList.toggle('header__menu-wrapp--active');
    });
    $("#phone").mask("+7(999) 999-99-99");

    $('.scroll-btn').on('click', function (e) {
        headerButton.classList.remove('header-button--active');
        headerMenuWrapp.classList.remove('header__menu-wrapp--active');
        objectSelect = $(this).attr('data-onScroll');

        if ($(this).parent().hasClass('header__menu')) {
            if ($('main').hasClass('home')) {
                $('html,body').stop().animate({ scrollTop: $(objectSelect).offset().top - $('.header').height() }, 1000);
                e.preventDefault();
            } else {
                window.location.href = "../../";
                localStorage.setItem('scroll', objectSelect);
            }
        } else {
            $('html,body').stop().animate({ scrollTop: $(objectSelect).offset().top - $('.header').height() }, 1000);
            e.preventDefault();
        }
    });
    $('.map-shadow').on('click', function () {
        $(this).fadeOut();
    });
    $(document).click(function (e) {
        if ($(e.target).closest(".map-shadow").length) return;
        $(".map-shadow").fadeIn();
        e.stopPropagation();
    });
    $('.send-btn').on('click', function () {
        let thisBtn = $(this);
        let name = $(this).parent().find('#name').val().trim();
        let phone = $(this).parent().find('#phone').val().trim();
        let mail = $(this).parent().find('#mail').val().trim();


        if (name == "" & phone == "" & mail == "") {
            return false
        } else if (name == "") {
            return false
        } else if (phone == "") {
            return false
        } else if (mail == "") {
            return false
        }

        let phpSrc;
        if ($('main').hasClass('home')) {
            phpSrc = 'app/'
        } else {
            phpSrc = '../../app/'
        }

        $.ajax({
            url: phpSrc + 'php/mail.php',
            type: 'POST',
            cache: false,
            data: { 'name': name, 'phone': phone, 'mail': mail },
            dataType: 'html',
            beforeSend: function () {
                $(this).prop('disabled', true);
            },
            success: function (data) {

                if (data) {
                    $('#name').val("");
                    $('#phone').val("");
                    $('#mail').val("");

                    if (thisBtn.parent().hasClass('second-popup')) {
                        $('.section-popup').fadeIn();
                    } else {
                        $('.first-popup').fadeOut();
                        $('.finish-popup').fadeIn();
                    }
                    if (thisBtn.parent().hasClass('form__box')) {
                    }
                } else {
                    console.log(data);
                }
                $(this).prop('disabled', false);
            },
        })
    })



    var wow = new WOW();
    wow.init();

    if ($('main').hasClass('home')) {
        let heigthIndex = 501;
        let offset = 500;
        let height = $('.why__box-line').height();

        $(window).on('scroll', scroll);
        scroll();
        function scroll() {
            let scroll = $(this).scrollTop();
            let scrollInSection = scroll + $(this).height() / 2 - $('.why__box').offset().top;


            if (scrollInSection >= 0) {
                $('.why__box-dot').fadeIn();
                offset = (height - scrollInSection) / height * 500;
                if (heigthIndex > offset) {
                    $('.line-animation').css('stroke-dashoffset', offset + '%');
                    heigthIndex = offset;
                }
                if (scrollInSection >= -200) {
                    $('.why__box-item.item-1').addClass('active');
                }
                if (scrollInSection >= 100) {
                    $('.why__box-item.item-2').addClass('active');
                }
                if (scrollInSection >= 200) {
                    $('.why__box-item.item-3').addClass('active');
                }
                if (scrollInSection >= 300) {
                    $('.why__box-item.item-4').addClass('active');
                }
                if (scrollInSection >= 400) {
                    $('.why__box-item.item-5').addClass('active');
                }
            }
            if (offset <= 140) {
                $('.line-animation').css('stroke-dashoffset', '0');
                $('.why__box-cup').addClass('active');
                $(window).off();
                $(window).on('scroll', function () {
                    $(".map-shadow").fadeIn();
                });
            }
        }
    };

    let portfolioBoxHeight = 0;
    $('.portfolio__btn').on('click', function () {
        for (const iterator of $('.portfolio-inner .portfolio-box')) {
            portfolioBoxHeight += $(iterator).innerHeight();
        }
        $('.portfolio').addClass('showAll');
        $('.portfolio-inner').css('height', portfolioBoxHeight + 'px');
    });

    $('.about__btn').on('click', function () {
        $('.aboutUs').fadeIn();
    });
    $('.popup-click').on('click', function () {
        $('.first-popup').fadeIn();
        console.log('click');
    });
    $('.popup__shadow').on('click', function () {
        $(this).parent().fadeOut();
    });
    $('.popup-close').on('click', function () {
        $(this).closest('.popup').fadeOut();
    });
    $('.done-popup .popup__btn').on('click', function () {
        $('.done-popup').fadeOut();
    });
    $('.aboutUs__btn').on('click', function (e) {
        $('.aboutUs').fadeOut();
        $('html,body').stop().animate({ scrollTop: $('.why').offset().top - $('.header').height() }, 1000);
        e.preventDefault();
    });


    jQuery('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
            if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
            // Replace image with new SVG
            $img.replaceWith($svg);
        }, 'xml');
    });



    let localScroll = localStorage.getItem('scroll');
    let objectSelect;
    if ($('main').hasClass('home') && localScroll != null) {
        localStorage.clear();
        objectSelect = localScroll;
        $('html,body').stop().animate({ scrollTop: $(objectSelect).offset().top - $('.header').height() }, 1000);
    }

});