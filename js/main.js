"use strict"
jQuery(function($) {
    $(window).on('load', function(){
        $('.loading').delay(1500).fadeOut(300);
    });
    function stopload(){
        $('.loading').delay(1000).fadeOut(700);
    }
    setTimeout('stopload()',10000);


    $(".el_hamburger").click(function () {
        $(".bl_nav").fadeToggle();
        $(this).toggleClass("is-active");
        //$(this)はイベントが発生した要素
        $("body").toggleClass("is-active");
    });

    $(window).scroll(function() {
        let value = -$(window).scrollTop() / 40;
        $('.js-parallax').css({
            transform:"translateY("+ value +"%)"
        });
    
    
        var headerH = $('#header').outerHeight(true);
        var scroll = $(window).scrollTop();
        if (scroll >= headerH){//headerの高さ以上になったら
            $('#header').addClass('fixed');//fixedというクラス名を付与
        }else{//それ以外は
            $('#header').removeClass('fixed');//fixedというクラス名を除去
        }
    });


    const carousel = $("#carousel");
    carousel.slick({
        autoplay: true,
        dots: true,
        prevArrow: '<div id="btn-prev" class="el_work-btn el_work-btn-prev"></div>',
        nextArrow: '<div id="btn-next" class="el_work-btn el_work-btn-next"></div>',
    });
    

    
    
    $("#el_footerBackToTop").click(function() {
        // 処理を記入していく
        //html,bodyに0.6秒かけて画面の一番上に戻ってください
        $("html,body").animate({
          //ここにやってほしい処理
          scrollTop: 0, //スクロールの位置を0にしてください
        },
    
        //時間
            1000 //100 →0.1秒
        );
        return false;
    });
    
    const modal = $(".bl_successArea");
    $('form').submit(function() {
        modal.fadeIn(2000);
    });
});

    