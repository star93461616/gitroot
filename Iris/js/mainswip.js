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
  slidesPerView: 3.5,
  spaceBetween: 15,
  freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper03", {

scrollbar: {
el: ".swiper-scrollbar03",
draggable: true,
hide: false,

},
autoplay: {
delay: 2500,
disableOnInteraction: false
},

});

var swiper = new Swiper(".mySwiper04", {
  slidesPerView: 1,

  navigation: {
    nextEl: ".swiper-button-next02",
    prevEl: ".swiper-button-prev02",
  },
  });
})
