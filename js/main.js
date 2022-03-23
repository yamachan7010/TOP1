"use strict"
$(function() {
    $("#hamburger").click(function () {
        $(".bl_nav").fadeToggle();
        $(this).toggleClass("is-active");
        //$(this)はイベントが発生した要素
        $("body").toggleClass("is-active");
    });

    $(document).ready(function(){
        $('.js-slick').slick({
            
            autoplay: true,
            dots: true,
            autoplaySpeed: 3000,
        });
    });
});