$(function(){
  var swiper = new Swiper(".mySwiper01", {
    pagination: {
  el: ".swiper-pagination",
  type: "fraction",
},
scrollbar: {
  el: ".swiper-scrollbar",
  draggable: true,
  hide: false,

},
autoplay: {
  delay: 2500,
  disableOnInteraction: false
},

});



var swiper = new Swiper(".mySwiper02", {
  slidesPerView: 3.4,
  spaceBetween: 15,
  freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



})
