$(document).ready(function(){function o(){var o=$(window).height();$(".headline").height(o),$(".post-content").css({marginTop:o})}o(),$(window).resize(o),$(".slider").owlCarousel({loop:!0,margin:20,autoWidth:!0,nav:!1}),$(".scroll-arrow-down a").click(function(o){o.preventDefault(),$("html, body").stop(!0,!1).animate({scrollTop:$(".post-content").offset().top})})});