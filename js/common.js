$(function() {

    $('#form-send').click(function(event) {
        event.preventDefault();
        $.magnificPopup.close();
        $('.modal-template').parent().show();
    });

    $('.modal-template').mouseup(function (e) {
        var container = $('.modal-template');
        var cross = $('.modal-template .cross');
        console.log(cross.has(e.target).length);
        console.log(container.has(e.target).length);
        if (cross.has(e.target).length != 0){
            container.parent().hide();
        }
    });

    $("#opened-police").click(function(event) {
        $('.modal-police-wrapper').parent().show();
    });
    $('#modal-police').mouseup(function (e) {
        var container = $('.modal-police-wrapper');
        var cross = $('.modal-police-wrapper .cross');
        console.log(cross.has(e.target).length);
        console.log(container.has(e.target).length);
        if (cross.has(e.target).length != 0){
            container.parent().hide();
        }
    });


    $('.control-arrow').click(function() {
        if($(this).hasClass('full_screen_menu')) {
            $(this).css({'transform': 'rotate(0deg)', 'position': 'absolute', 'left': '22px'});
            $('.menu-right').removeClass('full_opened_menu');
            $(this).removeClass('full_screen_menu');
            $('.header-left-column').removeClass('header-left-column-active');
            $('.card-projects-navigate-bar').show();
            // $('.card-projects-navigate-bar-vertical').hidden();
        }
        else {
            $(this).addClass('full_screen_menu');
            $('.header-left-column').addClass('header-left-column-active');
            $('.card-projects-navigate-bar').hide();
            // $('.card-projects-navigate-bar-vertical').show();
            $(this).css({'transform': 'rotate(180deg)', 'position': 'fixed', 'left': '185px'});
            $('.menu-right').addClass('full_opened_menu');
        }
    });

    $('.services-card').hover(function() {
        $(this).find('.s-card-btn').show();
    }, function() {
        $(this).find('.s-card-btn').hide();
    });

    $(".wrapper-callback-form-open").on('click', function () {
    }).magnificPopup({
        type: "inline",
        mainClass: 'mfp-forms',
    });

    $('[name="phone"]').mask('+7 (000) 000-00-00');

    // let input = document.getElementById('callback_phone');
    // input.oninput = function() {
    //     let value = input.value;
    //     let flag = document.getElementsByClassName('validate_flag');
    //     let label = document.getElementsByClassName('callback_phone_label');
    //     if(value.length === 18) {
    //         flag[0].classList.remove('hidden');
    //         label[0].innerText = 'Ваш номер телефона';
    //     }
    //     else {
    //         flag[0].classList.add('hidden');
    //         label[0].innerText = 'Введите ваш номер и мы перезвоним';
    //     }
    // };

    $('.hamburger-icon').click(function(){
        $(this).toggleClass('open');
        // $('.menu_mobile').toggleClass('active');
        // $('.wrapper-index').toggleClass('scroll-hidden');
    });

    // $(".scroll-bottom").click(function(e) {
    //     e.preventDefault();
    //     $("html, body").animate({
    //         scrollTop : $(".section-help").offset().top
    //     }, 800);
    // });
    //
    // $('.slider-for').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     infinite: false,
    //     fade: false,
    //     dots: false,
    //     asNavFor: '.slider-nav',
    //     autoplay: false,
    //     arrows: false,
    //     responsive: [
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 dots: true,
    //                 arrows: false,
    //             }
    //         },
    //     ]
    // });
    // $('.slider-nav').slick({
    //     infinite: false,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-for',
    //     centerMode: false,
    //     variableWidth: true,
    //     focusOnSelect: true,
    //     arrows: true,
    //     prevArrow: '<div class="arrow-prev"><i class="far fa-angle-left"></i><div>',
    //     nextArrow: '<div class="arrow-next"><i class="far fa-angle-right"></i><div>',
    //     responsive: [
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 arrows: false,
    //                 asNavFor: null,
    //             }
    //         },
    //     ]
    // });
    //
    // $('.slider-docs').slick({
    //     infinite: false,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     dots: false,
    //     centerMode: false,
    //     variableWidth: true,
    //     arrows: true,
    //     prevArrow: '<div class="arrow-prev"><i class="far fa-angle-left"></i><div>',
    //     nextArrow: '<div class="arrow-next"><i class="far fa-angle-right"></i><div>',
    //     responsive: [
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 2,
    //                 dots: true,
    //                 arrows: false,
    //             }
    //         },
    //     ]
    // });
    //
    // $(".open_docs").click(function () {
    // }).magnificPopup({
    //     type: "inline",
    //     mainClass: 'mfp-views',
    // });
    //
    // let count = $('.count progress').val();
    // let max = $('.count progress').attr('max');
    // let current = (count / max) * 100;
    // $('.progress-bar').css('width', current + '%');
    //
    //
    // $(document).ready(function(){
    //     $('.hamburger-icon').click(function(){
    //         $(this).toggleClass('open');
    //         $('.menu_mobile').toggleClass('active');
    //         $('.wrapper-index').toggleClass('scroll-hidden');
    //     });
    // });
    //
    // $('.scroll-top').click(function() {
    //     $('html, body').animate({ scrollTop: 0}, 'slow');
    // });
    //
    // if ( $(window).width() < 480 ) {
    //     $('.callback-person').appendTo('.score-person');
    //     $('.documents-person').appendTo('.score-person');
    //
    // }
    // $(window).resize(function() {
    //     if ( $(window).width() < 480 ) {
    //         $('.documents-person').appendTo('.score-person');
    //     }
    // });


});
