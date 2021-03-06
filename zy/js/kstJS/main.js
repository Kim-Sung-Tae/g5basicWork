var swiper = new Swiper(".open_intro .mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: ".open_intro .swiper-button-next",
      prevEl: ".open_intro .swiper-button-prev",
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
  });

  //   main sledier 용

  var swipermain = new Swiper(".mainSlider .mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: ".mainSlider .swiper-button-next",
      prevEl: ".mainSlider .swiper-button-prev",
    },
   
  });

 // main_notice / main_event   indicate 로 활용 


var swipermain2 = new Swiper(".main_notice_event .mySwiper",{

  spaceBetween: 30,
  effect:"fade",
  pagination: {
    el: ".main_notice_event .tabstitle",
    clickable: true,
    observer: true, 
    observeParents: true,
    renderBullet: function (i, className) {

      var names = [];
      $(".main_notice_event .swiper-wrapper .swiper-slide").each(function (i) {
                names.push($(this).data("name"));
      });

     
      return '<span class="' + className + '">' + names[i] + "  </span>";
    },
  },
  // autoplay: {
  //   delay: 5000,
  //   disableOnInteraction: false,
  // },


});


