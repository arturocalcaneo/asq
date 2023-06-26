'use strict'

// Check for click events on the navbar burger icon
$(".navbar-burger").click(function() {
    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
});

if( $(window).width() > 767 ){
  $('.navbar-end').addClass('settings-for-navbar-end');
  $('.navbar').addClass('settings-for-navbar-end-menu-start');
  $('.navbar-end').addClass('settings-for-navbar-end-menu-start');
  $('.navbar-menu').addClass('settings-for-navbar-end-menu-start');
  $('.navbar-start').addClass('settings-for-navbar-end-menu-start');

  $('.navbar-burger').hide();
}else{
  $('.navbar-end').removeClass('settings-for-navbar-end');
  $('.navbar').removeClass('settings-for-navbar-end-menu-start');
  $('.navbar-end').removeClass('settings-for-navbar-end-menu-start');
  $('.navbar-menu').removeClass('settings-for-navbar-end-menu-start');
  $('.navbar-start').removeClass('settings-for-navbar-end-menu-start');

  $('.navbar-burger').show();
}

if( $(window).width() > 767 && $(window).width() < 784 ){
  $('.navbar-burger').hide();
}

$(window).resize(function(){
  if( $(window).width() > 767 ){
    $('.navbar-end').addClass('settings-for-navbar-end');
    $('.navbar').addClass('settings-for-navbar-end-menu-start');
    $('.navbar-end').addClass('settings-for-navbar-end-menu-start');
    $('.navbar-menu').addClass('settings-for-navbar-end-menu-start');
    $('.navbar-start').addClass('settings-for-navbar-end-menu-start');

    $('.navbar-burger').hide();
  }else{
    $('.navbar-end').removeClass('settings-for-navbar-end');
    $('.navbar').removeClass('settings-for-navbar-end-menu-start');
    $('.navbar-end').removeClass('settings-for-navbar-end-menu-start');
    $('.navbar-menu').removeClass('settings-for-navbar-end-menu-start');
    $('.navbar-start').removeClass('settings-for-navbar-end-menu-start');

    $('.navbar-burger').show();
  }

  if( $(window).width() > 767 && $(window).width() < 784 ){
    $('.navbar-burger').hide();
  }
});