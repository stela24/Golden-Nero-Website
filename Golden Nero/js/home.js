$(document).ready(function () {

    $('.nav-btn').click(function () {
        $(this).toggleClass('open');
        $('.ham-menu').toggleClass('visible');
        if ($(this).hasClass('open')) {
            $('.main-logo').addClass('active');
        } else {
            if ($('.sections .section.active').index() === 0) {
                $('.main-logo').removeClass('active');
            }
        }
    });

    $('.ham-menu ul a').hover(function () {
        $('.ham-menu ul a').css({
            color: '#d9d9d9'
        });
        $(this).css({
            color: '#97999b',
            fontSize: '35px',
            textDecoration: 'none'
        });
    }, function () {
        $('.ham-menu ul a').css({
            color: '#97999b'
        });
        $(this).css({
            color: '#97999b',
            fontSize: '30px'
        });
    });

    $('.food').hover(function () {
        $(this).find('.menu-hover').css('opacity', '1').addClass('menu-hover-effect');
    }, function () {
        $(this).find('.menu-hover').css('opacity', '0').removeClass('menu-hover-effect');
    });

    $('.thumb-overlay').first().css('opacity', 0);

    $('.thumb').click(function () {
        $('.thumb-overlay').css('opacity', 1);
        $(this).find('.thumb-overlay').css('opacity', 0);
    });

    setTimeout(function () {
        $('.logo').addClass('logo-animation');
    }, 1000);

    $('.blog .blog-arrow').on('click', function (e) {
        e.preventDefault();
        var pos = $('.blog-content').scrollTop();
        var height = $('.blog-content').height();
        var newPos = pos + 200;
        
        var elementRealHeight = (($('.blog-content .news').first().height() + 15) * $('.blog-content .news').length) - 15;
        
        if ($(this).hasClass('up')) {
            newPos = pos - 200;
            if (newPos < 0) {
                newPos = 0;
            }
        } else {
            if(newPos > elementRealHeight - height) {
                newPos = elementRealHeight - height;
            }
        }
        
        if(newPos === 0) {
            $('.blog-arrow.up').css('opacity', 0);
            $('.blog-arrow.down').css('opacity', 1);
        } else if(newPos > 0 && elementRealHeight > newPos + height) {
            $('.blog-arrow.up').css('opacity', 1);
            $('.blog-arrow.down').css('opacity', 1);
        } else if(elementRealHeight === newPos + height) {
            $('.blog-arrow.up').css('opacity', 1);
            $('.blog-arrow.down').css('opacity', 0);
        }

        $('.blog-content').stop(true, false).animate({
            scrollTop: newPos
        }, 1000);
    });
    
    var $dashOffset = $(".path").css("stroke-dashoffset");
    $(window).scroll(function () {
        var topOffset = $(window).scrollTop();
        var screenMiddle = topOffset + ($(window).height() / 2);

        var $percentageComplete = ((topOffset / ($(document).height() - $(window).height())) * 100) - 10;
        var $newUnit = parseInt($dashOffset, 20);
        var $offsetUnit = $percentageComplete * ($newUnit / 100);
        $(".path").css("stroke-dashoffset", $newUnit - $offsetUnit);

        var theta = topOffset / 300;

        // console.log($percentageComplete)

        if ($percentageComplete >= 23 && $percentageComplete <= 26.8)
            $('.salat-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 26.8)
            $('.salat-text').css('opacity', '1');
        else
            $('.salat-text').css('opacity', '0');

        if ($percentageComplete >= 28 && $percentageComplete <= 32)
            $('.pasta-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 32)
            $('.pasta-texts').css('opacity', '1');
        else
            $('.pasta-texts').css('opacity', '0');

        if ($percentageComplete >= 32 && $percentageComplete <= 37)
            $('.meal-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 37)
            $('.meal-text').css('opacity', '1');
        else
            $('.meal-text').css('opacity', '0');

        if ($percentageComplete >= 36 && $percentageComplete <= 38.5)
            $('.soup-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 38.5)
            $('.soup-text').css('opacity', '1');
        else
            $('.soup-text').css('opacity', '0');

        if ($percentageComplete >= 40 && $percentageComplete <= 43)
            $('.pizza-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 43)
            $('.pizza-text').css('opacity', '1');
        else
            $('.pizza-text').css('opacity', '0');

        if ($percentageComplete >= 50 && $percentageComplete <= 52.5)
            $('.desert-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 52.5)
            $('.desert-text').css('opacity', '1');
        else
            $('.desert-text').css('opacity', '0');

        if ($percentageComplete >= 55 && $percentageComplete <= 57)
            $('.mohito-img').css({transform: 'rotate(' + theta + 'rad)'});
        if ($percentageComplete >= 57)
            $('.cocktails-text').css('opacity', '1');
        else
            $('.cocktails-text').css('opacity', '0');

    });
    
    $(document).on('scroll', function() {
        if($(this).scrollTop() >= $('#section1').position().top) {
           $('.section1-overlay').css('opacity', 1);
        } else {
            $('.section1-overlay').css('opacity', 0);
        }
    });
});