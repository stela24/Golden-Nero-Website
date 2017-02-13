$(document).ready(function () {

    $.each($('.fruits .fruit'), function (k, fruit) {
        var max = 0;
        if ($(fruit).is('[data-max]')) {
            max = parseInt($(fruit).attr('data-max'));
        }
        $(fruit).css({
            top: max + '%'
        });
    });

    $(window).scroll(function () {
        var topOffset = $(window).scrollTop();
        var screenMiddle = topOffset + ($(window).height() / 2);
        
        if (topOffset > $('#section4').offset().top - $(window).height()) {
            var fruits = $('.fruits .fruit');

            var pageEnd = $('#section4').height();
            var windowEnd = topOffset + $(window).height() - $('#section4').offset().top;
            var pos = (pageEnd / windowEnd * 100) - 100;

            $.each(fruits, function (k, fruit) {
                var speed = 500 / 1000;
                var min = 0;
                var max = 100;
                if ($(fruit).is('[data-speed]')) {
                    speed = parseInt($(fruit).attr('data-speed')) / 1000;
                }
                if ($(fruit).is('[data-min]')) {
                    min = parseInt($(fruit).attr('data-min'));
                }
                if ($(fruit).is('[data-max]')) {
                    max = parseInt($(fruit).attr('data-max'));
                }

                var top = pos * speed;

                if (top < min) {
                    top = min;
                }
                if (top > max) {
                    top = max;
                }

                $(fruit).css({
                    top: top + '%'
                });
            });
        }

    });

});