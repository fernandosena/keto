var pauseVideos;
var videoPlayers = [];
$(document).ready(function () {
    "use strict"

    //Stcky Menu
    var headertop = $(".e-sticky").outerHeight();
    $("body").css("paddingTop", headertop);

    // 
    $(".sidebar-trigger").click(function(){
        $(this).parents(".kdb-sec").toggleClass("active")
        $('body').toggleClass('overflow-hidden')
    });

    $('.kdb-left-menu li a').click(function(){
        $(this).parents(".kdb-sec").removeClass("active")
        $('body').removeClass('overflow-hidden')
        pauseVideos();
    })

    // faq list
    var $faq = $(".faq-list li .faq-title");
    $faq.on('click', function(){
        $(this).parent("li").toggleClass("active").children(".faq-content").slideToggle().parent().siblings().removeClass('active').children('.faq-content').slideUp();
    });

    // owl carousel
    var owl = $(".week-carousel").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
    });


    owl.on('changed.owl.carousel', function(event) {
        app.getDietWeek(event.item.index+1);
        app.week_num = event.item.index+1;
    })

        // nice scroll
    $(".menu-scroll").niceScroll({
        cursorcolor: "#aea8b5",
        cursorborder: "1px solid #aea8b5"
    });

    // magnific popup
    $('.video-popup').magnificPopup({
       /* disableOn: 700,*/
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Chosen
    $('.chosen-select').chosen();

    $('.next-back-link').on('click',function (e) {
        e.preventDefault()
        var target = $(this).attr('href');
            $(target+'-nav').tab('show')
    });

    pauseVideos = function () {
        $.each(videoPlayers, function (k,el) {
            el.pause();
        })
    }
    $('iframe').each(
        function () {
            videoPlayers.push(new Vimeo.Player(this))
        }
    )
    
});

