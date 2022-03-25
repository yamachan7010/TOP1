"use strict"
$(function() {
    $("#hamburger").click(function () {
        $(".bl_nav").fadeToggle();
        $(this).toggleClass("is-active");
        //$(this)はイベントが発生した要素
        $("body").toggleClass("is-active");
    });

    const carousel = $("#carousel");
    carousel.slick({
        autoplay: true,
        dots: true,
        prevArrow: '<div id="btn-prev" class="el_work-btn el_work-btn-prev"></div>',
        nextArrow: '<div id="btn-next" class="el_work-btn el_work-btn-next"></div>',
        
    });
});
