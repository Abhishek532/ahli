$(document).ready(function (){
  
  // Home page Swiper init
  const swiper = new Swiper('.mySwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 1000,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    breakpoints: {

      // when window width is >= 480px
      786: {
        slidesPerView: 3
      },
      1440: {
        slidesPerView: 4
      }
      // when window width is >= 640px

    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

  });

  // Hide directors if no img
  $(".directors img").each(function() {
    if (!$(this).attr("src")) {
      $(this).parent().parent().parent().css("display","none")
    } 
  });

  $(".courses-page img").each(function() {
    if (!$(this).attr("src")) {
      $(this).parent().css("display","none")
    } 
  });

  $(".classroom-shots video source").each(function() {
    if (!$(this).attr("src")) {
      $(this).parent().parent().parent().css("display","none")
    } 
  });

  $(".swiper-slide img").each(function() {
    if (!$(this).attr("src")) {
      $(this).css("display","none")
    } 
  });

  setInterval(function () {
    $('.swiper-button-next').click();
  }, 1000);

})