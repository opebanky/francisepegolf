
$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

     
     // -------   Active Mobile Menu-----//

    $(".menu-bar").on('click', function(e){
        e.preventDefault();
        $("nav").toggleClass('hide');
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".main-menu").addClass('mobile-menu');
    });
     
    $('select').niceSelect();
    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });

    // -------   Signup Form-----//
    $(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    }); 



    //---- My Scrolling Behavior starts here
    $('.home').click(function(){
        $('html,body').animate({scrollTop:$("#top").offset().top},1000);
    });

    $('.about').click(function(){
        $('html,body').animate({scrollTop:$("#about").offset().top},1000);
    });

    $('.coaching').click(function(){
        $('html,body').animate({scrollTop:$("#coaching").offset().top},1000);
    });

    $('.tournaments').click(function(){
        $('html,body').animate({scrollTop:$("#tournaments").offset().top},1000);
    });

    $('.gallery').click(function(){
        $('html,body').animate({scrollTop:$("#gallery").offset().top},1000);
    });

    $('.partners').click(function(){
        $('html,body').animate({scrollTop:$("#partners").offset().top},1000);
    });

    $('.contact').click(function(){
        $('html,body').animate({scrollTop:$("#contact").offset().top},1000);
    });
    //---- Scrolling effects for menus ends here



    //--- The sticky effect is instigated here
    $(window).on('scroll',function(){
        if($(window).scrollTop() >= 200){
            $(".header-top").addClass("sticky");
        }else{
            $(".header-top").removeClass("sticky");
        }
    });

 });

