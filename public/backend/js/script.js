var swiper = new Swiper(".mySwiperPopuler", {
  effect: "coverflow",
  grabCursor: true,
  spaceBetween: 20,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".bxs-chevron-right-circle",
    prevEl: ".bxs-chevron-left-circle",
  },
});
