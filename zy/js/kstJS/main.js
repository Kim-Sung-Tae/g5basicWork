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

  var swipermain = new Swiper(".mainSlider .mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: ".mainSlider .swiper-button-next",
      prevEl: ".mainSlider .swiper-button-prev",
    },
   
  });