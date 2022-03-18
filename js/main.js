"use strict"
$(function() {
    $("#hamburger").click(function () {
        $(".bl_nav").fadeToggle();
        $(this).toggleClass("is-active");
        //$(this)はイベントが発生した要素
        $("body").toggleClass("is-active");
    });
});