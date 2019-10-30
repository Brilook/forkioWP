$.noConflict();
jQuery( document ).ready(function( $ ) {        



// DROP-DOWN MENU

$(document).ready(function () {
    $(function () {
        $('.menu-link').click(function () {
            $(this).toggleClass('menu-link_active');
            $('.header-nav_items').slideToggle(500);
        });
    });
    });
    // $('.carousel').slick({
    //     autoplay: true,
    //     autoplaySpeed: 5000,
    // });
    $('.single-item').slick();
    $(window).resize(function () {
      
        var widthWind = $(this).width();
    
        if (widthWind > 481) {
           $('.subscribe-title').text("Order callbak");
           $('.subscribe-btn').text("call me!");
        }
        else {
            $('.subscribe-title').text("Subscribe To Stay In Touch");
            $('.subscribe-btn').text("Subscribe");
         }
    });


    // scroll-up
    var lastScrollPosition = 0;

    $('#scroll-up').click( function(){
        if ( $(document).scrollTop() > "0") {
            $('html, body').animate({scrollTop:0},1000);
            lastScrollPosition = $(document).scrollTop();
            }
    });
    $(document).scroll( function(){
        if ($(document).scrollTop() > 0 ){
            $('#scroll-up').fadeIn();
        } else {
            $('#scroll-up').fadeOut();

        }
    });



    

 

    });