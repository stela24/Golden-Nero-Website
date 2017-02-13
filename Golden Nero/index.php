<?php
include 'head.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Golden Nero</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script>
        paceOptions = {
            minTime: 4000,
        };
    </script>
    <link rel="stylesheet" href="css/pace-theme.css">
    <script src="js/pace.js"></script>
    <script>
        Pace.on('done', function() {
            $('.nav-btn, .ham-menu, #cd-vertical-nav, #fullpage').css({opacity: 1});
            $('#section0').addClass('section0-zoom').clearQueue();
        });
    </script>
    
    <style>
        .nav-btn, .ham-menu, #cd-vertical-nav, #fullpage {opacity: 0;}
    </style>
    
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/fotorama.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav class="ham-menu">
        <ul>
            <li><a href="#section0" data-number="1">Начало</a>
            </li>
            <li><a href="#section1" data-number="2">За нас</a>
            </li>
            <li><a href="#section2" data-number="3">Меню</a>
            </li>
            <li><a href="#section3" data-number="4">Галерия / Блог</a>
            </li>
            <li><a href="#section4" data-number="5">Контакти</a>
            </li>
        </ul>
    </nav>
    <nav id="cd-vertical-nav">
        <ul>
            <li class="lang">
                <a class="lang" href="/lang.php?l=<? if($lang == 'bg') echo 'en'; else echo 'bg'; ?>" ><? if($lang == 'bg') echo 'EN'; else echo 'BG'; ?></a>
            </li>
            <li>
                <a href="#section0" data-number="1" class="is-selected">
                    <span class="cd-dot"></span>
                    <span class="cd-label"><? echo lang('home') ?></span>
                </a>
            </li>
            <li>
                <a href="#section1" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label"><? echo lang('aboutus') ?></span>
                </a>
            </li>
            <li>
                <a href="#section2" data-number="3" class="">
                    <span class="cd-dot"></span>
                    <span class="cd-label"><? echo lang('menu') ?></span>
                </a>
            </li>
            <li>
                <a href="#section3" data-number="4">
                    <span class="cd-dot"></span>
                    <span class="cd-label"><? echo lang('gallery-blog') ?></span>
                </a>
            </li>
            <li>
                <a href="#section4" data-number="5">
                    <span class="cd-dot"></span>
                    <span class="cd-label"><? echo lang('contacts') ?></span>
                </a>
            </li>
        </ul>
        <div class="fb-nav-icon">
            <a href="https://www.facebook.com/GoldenNero.sofia/?fref=ts" target="_blank" class="fb-nav">
                <img src="images/facebook-logo-nav.png">
            </a>
        </div>
    </nav>

    <div id="fullpage">
        <div class="section" id="section0">
            <div class="logo hvr-shutter-out-horizontal"></div>
            <div class="logo-mobile"></div>
            <div class="scroll-arrow-down scroll-arrow-down1 bounce">
                <a href="#"><img src="images/scroll-arrow-down.png">
                </a>
            </div>
        </div>


        <div class="section" id="section1">
            <div class="section1-overlay"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <? echo lang('about-us-text') ?>
                    </div>
                </div>
            </div>
            <div class="scroll-arrow-down scroll-arrow-down2 bounce">
                <a href="#section2"><img src="images/scroll-arrow-down.png">
                </a>
            </div>
        </div>


        <div class="section2-mob" id="section2-mob">
            <a href="mobile-menu.php">
                <p>разгледайте
                    <br> нашето меню</p>
            </a>
        </div>
        <div class="section fp-auto-height" id="section2">
            <div class="container">
                <div class="path-holder">
                    <?php include 'path2.svg'; ?>
                    <div class="menu-intro">
                        <? echo lang('menu-intro') ?>
                    </div>
                    <div class="menu-texts">
                        <p class="salat-text"><? echo lang('salat') ?></p>
                        <p class="pasta-texts"><? echo lang('pasta') ?></p>
                        <p class="meal-text"><? echo lang('meal') ?></p>
                        <p class="soup-text"><? echo lang('breakfast') ?></p>
                        <p class="pizza-text"><? echo lang('pizza') ?></p>
                        <p class="desert-text"><? echo lang('dessert') ?></p>
                        <p class="cocktails-text"><? echo lang('cocktails') ?></p>
                    </div>
                    <div class="fork-img">
                        <img src="images/fork-img.png">
                    </div>

                    <div class="salat food">
                        <img src="images/salat.png" class="salat-img">
                        <div class="menu-hover" data-id="salats">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                    </div>
                    <div class="list"></div>
                    <div class="tomato-img"></div>
                    <div class="pasta food">
                        <img src="images/pasta.png" class="pasta-img">
                        <div class="menu-hover" data-id="pasta">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                    </div>
                    <div class="meal food">
                        <img src="images/meal.png" class="meal-img">
                        <div class="menu-hover" data-id="meal">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                    </div>
                    <div class="soup food">
                        <div class="menu-hover" data-id="breakfast">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                        <img src="images/soup-img.png" class="soup-img">
                        <img src="images/souce.png" class="souce-img">
                    </div>
                    <div class="pizza food">
                        <img src="images/pizza.png" class="pizza-img">
                        <div class="menu-hover" data-id="pizza">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                    </div>
                    <div class="desert food">
                        <div class="menu-hover" data-id="desert">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                        <img src="images/desert.png" class="desert-img">
                        <img src="images/chocolate.png" class="chocolate-img">
                    </div>
                    <div class="cocktails food">
                        <div class="menu-hover" data-id="cocktails">
                            <p><? echo lang('menu-read-more') ?></p>
                        </div>
                        <img src="images/mohito-img.png" class="mohito-img">
                        <img src="images/lime-img.png" class="lime-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="section fp-auto-height" id="section3" data-color="#000">
            <div class="container">
                <div class="col-lg-8 col-md-8">
                    <h1><? echo lang('gallery-title') ?></h1>
                    <div class="fotorama" data-nav="thumbs" data-arrows="true">
                      <a href="images/large/img1.jpg"><img src="images/thumbs/thumb1.jpg" width="144" height="96"></a>
                      <a href="images/large/img2.jpg"><img src="images/thumbs/thumb2.jpg" width="144" height="96"></a>
                      <a href="images/large/img3.jpg"><img src="images/thumbs/thumb3.jpg" width="144" height="96"></a>
                      <a href="images/large/img4.jpg"><img src="images/thumbs/thumb4.jpg" width="144" height="96"></a>
                      <a href="images/large/img5.jpg"><img src="images/thumbs/thumb5.jpg" width="144" height="96"></a>
                      <a href="images/large/img6.JPG"><img src="images/thumbs/thumb6.jpg" width="144" height="96"></a>
                      <a href="images/large/img7.JPG"><img src="images/thumbs/thumb7.jpg" width="144" height="96"></a>
                      <a href="images/large/img8.JPG"><img src="images/thumbs/thumb8.jpg" width="144" height="96"></a>
                      <a href="images/large/img9.jpg"><img src="images/thumbs/thumb9.jpg" width="144" height="96"></a>
                      <a href="images/large/img10.jpg"><img src="images/thumbs/thumb10.jpg" width="144" height="96"></a>
                      <a href="images/large/img11.jpg"><img src="images/thumbs/thumb11.jpg" width="144" height="96"></a>
                      <a href="images/large/img12.jpg"><img src="images/thumbs/thumb12.jpg" width="144" height="96"></a>
                      <a href="images/large/img13.jpg"><img src="images/thumbs/thumb13.jpg" width="144" height="96"></a>
                      <a href="images/large/img14.jpg"><img src="images/thumbs/thumb14.jpg" width="144" height="96"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h1><? echo lang('blog-title') ?></h1>
                    <div class="blog">
                        <div class="blog-arrow up">
                            <img src="images/blog-arrow.png">
                        </div>
                        <div class="blog-content">
                            <div class="news" style="background-image: url(images/posts/hitrino.png);">
                                <div class="news-overlay"></div>
                                <p>Духът на празничната доброта</p>
                                <a href="hitrino.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image: url(images/posts/black_angus_thumb.jpg);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art1') ?></p>
                                <a href="black_angus.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image: url(images/posts/wine_thumb.jpg);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art2') ?></p>
                                <a href="wine.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/blog3_thumb.jpg);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art3') ?></p>
                                <a href="surovoyadstvo.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/awards-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art4') ?></p>
                                <a href="awards.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/garden-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art5') ?></p>
                                <a href="garden.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/Garden-new-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art6') ?></p>
                                <a href="garden2.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/pizza-img.jpg);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art7') ?></p>
                                <a href="italia.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/vitoshka-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art8') ?></p>
                                <a href="vitoshka.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/year-catalog-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art9') ?></p>
                                <a href="year-catalog.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                            <div class="news" style="background-image:  url(images/posts/pasta-img.JPG);">
                                <div class="news-overlay"></div>
                                <p><? echo lang('blog-art10') ?></p>
                                <a href="pasta-blog.php" class="more-btn"><? echo lang('blog-read-more') ?></a>
                            </div>
                        </div>
                        <div class="blog-arrow down">
                            <img src="images/blog-arrow.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>
    </div>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/main.js"></script>
    \<script src="js/fotorama.js"></script>
    <script src="js/home.js"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.easings.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            
            resizeSections();
            $(window).resize(resizeSections);
            
            var currentUrl = window.location.href;
            if(currentUrl.indexOf('#blog') !== -1) {
                scrollToSection(3);
            }
            
            $(window).scroll(function() {
                var windowHeight = $(window).height();
                var topOffset = $(window).scrollTop();
                var pos = windowHeight - topOffset;
                if (pos < 0) {
                    pos = 0;
                }

                if (pos - 200 <= 0) {
                    $('#section1 p').fadeIn('slow');
                }

                $('#section1').css({
                    top: pos
                });

                var halfScreenHeight = windowHeight / 2;

                if (topOffset < halfScreenHeight) {
                    $('#cd-vertical-nav li a').removeClass('is-selected').removeClass('black-label');
                    $('#cd-vertical-nav li a[data-number="1"]').addClass('is-selected');
                } else if (topOffset >= halfScreenHeight && topOffset < $('#section2').offset().top - halfScreenHeight) {
                    $('#cd-vertical-nav li a').removeClass('is-selected').removeClass('black-label');
                    $('#cd-vertical-nav li a[data-number="2"]').addClass('is-selected');
                    if (!$('#section1 .table').hasClass('section1-tab-vis')) {
                        $('#section1 .table').addClass('section1-tab-vis');
                    }
                } else if (topOffset >= $('#section2').offset().top - halfScreenHeight && topOffset < $('#section3').offset().top - halfScreenHeight) {
                    $('#cd-vertical-nav li a').removeClass('is-selected').removeClass('black-label');
                    $('#cd-vertical-nav li a[data-number="3"]').addClass('is-selected');
                } else if (topOffset >= $('#section3').offset().top - halfScreenHeight && topOffset < $('#section4').offset().top - halfScreenHeight) {
                    $('#cd-vertical-nav li a').removeClass('is-selected').addClass('black-label');
                    $('#cd-vertical-nav li a[data-number="4"]').addClass('is-selected');
                } else if (topOffset >= $('#section4').offset().top - halfScreenHeight) {
                    $('#cd-vertical-nav li a').removeClass('is-selected').removeClass('black-label');
                    $('#cd-vertical-nav li a[data-number="5"]').addClass('is-selected');
                }
            });

            function disableScroll(e) {
                e.preventDefault();
                e.stopPropagation();
                e.cancelBubble = false;
                e.returnValue = false;
                return false;
            }

            function resizeSections() {
                var windowHeight = $(window).height();
                $('#section0, #section1').height(windowHeight);

                $('#section1').css({
                    top: windowHeight
                });
                $('#section2').css({
                    marginTop: (windowHeight + 300) * 2
                });

                var topOffset = $(window).scrollTop();
                var pos = windowHeight - topOffset;
                if (pos < 0) {
                    pos = 0;
                }

                if (pos - 200 === 0) {
                    $('#section1 table').fadeIn('slow');
                }

                $('#section1').css({
                    top: pos
                });
            }

            $('#cd-vertical-nav li a, nav.ham-menu li a').click(function(e) {
                if($(this).hasClass('lang')) {
                    return;
                }
                e.preventDefault();

                var section = ($(this).attr('data-number')) - 1;
                scrollToSection(section);
                $('nav.ham-menu').removeClass('visible');
                $('.nav-btn').removeClass('open');
            });

            $('.scroll-arrow-down1 a').click(function(e) {
                e.preventDefault();

                $('html, body').stop(true, false).animate({
                    scrollTop: $('#section1').offset().top
                });
            });

            $('.scroll-arrow-down2 a').click(function(e) {
                e.preventDefault();

                $('html, body').stop(true, false).animate({
                    scrollTop: $('#section2').offset().top
                });
            });

            $('.menu-hover').click(function () {

                var id = $(this).attr('data-id');
                var carte = $('.carte#' + id);
                
                if(carte.length === 0) {
                    $.ajax({
                        url: '/menu/'+id+'.php'
                    }).done(function(response) {
                        $('#fullpage').after(response);
                        carte = $('.carte#' + id);
                        showCart(carte);
                        $('.closeBtn').click(function () {
                            $('.carte').fadeOut();
                        });
                        $('.black-bg').click(function () {
                            $('.carte').fadeOut();
                        });
                    });
                } else {
                    showCart(carte);
                }
            });
            
            function showCart(cart) {
                $(cart).fadeIn();

                $(cart).find('.menu-gallery .item').height($(cart).find('.white-bg').height());

                var owl = $(cart).find('.menu-gallery');
                owl.owlCarousel({
                    pagination: true,
                    items: 1,
                    loop: $(cart).find('.menu-gallery .item').length > 1 ? true : false,
                    responsive: false,
                    singleItem: true,
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                });
                
                appendMenuScrollEvent();
            }
            
            function scrollToSection(num) {
                var section = $('#section' + num);
                if(!$(section).is(':visible')) {
                    section = $('#section'+num+'-mob');
                }
                var sectionPos = $(section).offset().top;

                if (num === 0) {
                    sectionPos = 0;
                } else if (num === 1 && !$('#section2-mob').is(':visible')) {
                    sectionPos = $(window).height();
                }

                $('html, body').stop(true, false).animate({
                    scrollTop: sectionPos
                });
            }
            
            function appendMenuScrollEvent() {
                $('.listing .arrow-down').on('click', function (e) {
                    e.preventDefault();
                    var pos = $(this).siblings('.listingContent').find('.list-item').scrollTop();
                    var newPos = pos + 200;
                    $(this).siblings('.arrow-up').css({opacity: 1});
                    $(this).siblings('.listingContent').find('.list-item').stop(true, false).animate({
                        scrollTop: newPos
                    }, 1000);
                });

                $('.listing .arrow-up').on('click', function (e) {
                    e.preventDefault();
                    var pos = $(this).siblings('.listingContent').find('.list-item').scrollTop();
                    var newPos = pos - 200;
                    if (newPos <= 0) {
                        newPos = 0;
                        $(this).css({opacity: 0});
                    }
                    $(this).siblings('.listingContent').find('.list-item').stop(true, false).animate({
                        scrollTop: newPos
                    }, 1000);
                });
            }
        });
    </script>

</body>

</html>