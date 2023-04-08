const hostname = window.location.hostname;

let bookingHost = 'http://3.236.139.249:8080/web/';


if (hostname.includes('trenditapp.com')) {
    bookingHost = 'https://trenditapp.com/booking/';
}

$(document).ready(function () {
    function setHeight() {
        var $window = $(window); windowHeight = $(window).innerHeight(); if ($window.width() >= 1600) { $('#index-banner').css('min-height', windowHeight); }
        else { $('#header').removeClass('home-center'); }
    }; setHeight(); $(window).resize(function () { setHeight(); }); $(document).ready(function () { function setHeight() { var $window = $(window); windowHeight = $(window).innerHeight(); if ($window.width() >= 768) { $('.index-banner1').css('min-height', windowHeight); } }; setHeight(); $(window).resize(function () { setHeight(); }); }); $(document).ready(function () { function setHeight() { var $window = $(window); windowHeight = $(window).innerHeight(); if ($window.width() >= 768) { $('.index-banner2').css('min-height', windowHeight); } }; setHeight(); $(window).resize(function () { setHeight(); }); }); $('body').scrollspy({ target: ".navbar", offset: 50 }); $(window).scroll(function () { if ($(this).scrollTop() > 600) { $('.scrollup').fadeIn(); } else { $('.scrollup').fadeOut(); } }); $('.scrollup').click(function () { $("html, body").animate({ scrollTop: 0 }, 600); return false; }); $(window).load(function () { $('#btry-loader').fadeOut('slow', function () { $(this).remove(); }); }); $("#myNavbar a").on('click', function (event) { event.preventDefault(); var hash = this.hash; $('html, body').animate({ scrollTop: $(hash).offset().top }, 800, function () { window.location.hash = hash; }); }); var sides = ["left", "top", "right", "bottom"]; $("h1 span.version").text($.fn.sidebar.version); for (var i = 0; i < sides.length; ++i) { var cSide = sides[i]; $(".sidebar." + cSide).sidebar({ side: cSide }); }
    $(".sidebar-btn").on("click", function () { var $this = $(this); var action = $this.attr("data-action"); var side = $this.attr("data-side"); $(".sidebar." + side).trigger("sidebar:" + action); return false; }); $('.video').magnificPopup({
        type: 'iframe', closeOnBgClick: false, iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '<div class="mfp-title">Some caption</div>' +
                '</div>'
        }, callbacks: { markupParse: function (template, values, item) { values.title = item.el.attr('title'); } }, removalDelay: 300, mainClass: 'mfp-fade'
    }); $(".screenshot-demo").owlCarousel({ dots: false, autoplay: false, loop: true, responsiveClass: true, responsive: { 0: { items: 1, margin: 10, nav: false }, 480: { items: 2, margin: 10, nav: false }, 768: { items: 3, margin: 10, nav: false }, 992: { items: 3, margin: 100, nav: true }, 1300: { items: 5, margin: 100, nav: true } } }); $('#owl-demo').owlCarousel({ loop: true, margin: 1, dots: false, autoplay: false, responsiveClass: true, responsive: { 0: { items: 2, nav: false, dots: false }, 400: { items: 2, nav: false }, 700: { items: 4, nav: true }, 1000: { items: 5, nav: false, dots: false, loop: true }, 1400: { items: 5, margin: 1, nav: false, dots: false, loop: true } } }); var owl = $("#owl-demo2"); owl.owlCarousel({ items: 1, pagination: true, loop: true }); $(".client-owl").owlCarousel({ dots: false, autoplay: true, autoplayTimeout: 2000, smartSpeed: 1000, loop: true, margin: 20, responsiveClass: true, responsive: { 0: { items: 2, nav: true }, 400: { items: 3, nav: true }, 700: { items: 4, nav: true }, 1000: { items: 6, nav: true, loop: true } } }); if ($('.tweet').length != 0) {
        $('.tweet').twittie({ username: 'phoenixcoded', dateFormat: '%b. %d, %Y', template: '<div class="circle mb20">{{avatar}}</div><p>{{tweet}}</p> <time class="date">{{date}}</time>', count: 10, }, function () { $(".tweet ul").addClass("tweet_slider"); $(".tweet li").addClass("item"); $(".tweet_slider").owlCarousel({ dots: false, loop: true, margin: 20, responsiveClass: true, responsive: { 0: { items: 1, nav: true }, 400: { items: 1, nav: true }, 700: { items: 1, nav: true }, 1000: { items: 1, nav: true, loop: true } } }); });
    }
    var ost = 0; $(window).scroll(function () {
        var cOst = $(this).scrollTop(); if (cOst == 0) { $('.navbar').addClass('top-nav-collapse'); } else if (cOst > ost) { $('.navbar').addClass('top-nav-collapse').removeClass('default'); } else { $('.navbar').addClass('default').removeClass('top-nav-collapse'); }
        ost = cOst;
    }); $('[data-toggle="tooltip"]').tooltip(); Waves.init(); Waves.attach('.flat-buttons', ['waves-button']); Waves.attach('.float-buttons', ['waves-button', 'waves-float']); Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']); $('.counter').counterUp({ delay: 10, time: 400 }); if ($('.cd-stretchy-nav').length > 0) { var stretchyNavs = $('.cd-stretchy-nav'); stretchyNavs.each(function () { var stretchyNav = $(this), stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger'); stretchyNavTrigger.on('click', function (event) { event.preventDefault(); stretchyNav.toggleClass('nav-is-visible'); }); }); $(document).on('click', function (event) { (!$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span')) && stretchyNavs.removeClass('nav-is-visible'); }); }
    $(".fa-bar-hide").click(function () { $(".fa-bars").fadeOut("slow"); }); $(".fa-bar-show").click(function () { $(".fa-bars").fadeIn("slow"); }); $(".fa-search").click(function () { $(".search-box").show(500); }); $(".search-close").click(function () { $(".search-box").hide(500); }); var navBodyScroll = $('.nav-body .overflow'); $(window).load(function () { navBodyScroll.height($(window).height() - $('.nav-head').height() - 45); navBodyScroll.mCustomScrollbar({ theme: "dark-thick", scrollInertia: 300 }); }); $(window).resize(function () { navBodyScroll.height($(window).height() - $('.nav-head').height() - 45); }); /*var map; map = new GMaps({ el: '#map', lat: 21.2334329, lng: 72.86372, scrollwheel: false }); map.addMarker({ lat: 21.2334329, lng: 72.86372, title: 'Marker with InfoWindow', infoWindow: { content: '<p>Phoenix app landing page <br/> Buy Now at <a href="">Themeforest</a></p>' } });*/ $('.form-switch a').click(function (e) { var form = $(this).attr('href'); e.preventDefault(); $(form + '> a').click(); }); $('[data-modal-form="sign-in"]').click(function () { $('#form-2 a').click(); }); $('[data-modal-form="sign-up"]').click(function () { $('#form-1 a').click(); });

    const attemptSearch = query => {
        if (query) {
            window.location.href = `${bookingHost}?q=${query}`;
        } else {
            $('#search-wrap').addClass('shakeX');
            $('#search-wrap').one('animationend', () => {
                $('#search-wrap').removeClass('shakeX');
            });
        }
    }
    
    $('#provider-search').keyup((event) => {
        if (event.which === 13) {
            const query = event.target.value;

            attemptSearch(query);
        }
    });

    $('#btn-provider-search').click(() => {
        const query = $('#provider-search').val();

        attemptSearch(query);
    });
}); 


var $aboutcontent = $("#aboutcontent"), $aboutform = $("#aboutform"), flag = false, duration = 300; $aboutcontent.owlCarousel({ items: 1, autoplay: false, margin: 10, nav: false, dots: true }).on('changed.owl.carousel', function (e) { if (!flag) { flag = true; var a = e.property.value++; $(".about-dot").removeClass("current_dot"); $('.about-dot').eq(a).addClass("current_dot"); $aboutform.trigger('to.owl.carousel', [e.item.index, duration, true]); flag = false; } }); $aboutform.owlCarousel({ margin: 20, items: 1, nav: false, autoplay: false, center: false, dotsEach: false, dots: false, dotsContainer: '#carousel-custom-dots', }).on('click', '.owl-item', function () { $aboutcontent.trigger('to.owl.carousel', [$(this).index(), duration, true]); }).on('changed.owl.carousel', function (e) { if (!flag) { flag = true; var a = e.property.value++; $(".about-dot").removeClass("active"); $('.about-dot').eq(a).addClass("active"); $aboutcontent.trigger('to.owl.carousel', [e.item.index, duration, true]); flag = false; } });