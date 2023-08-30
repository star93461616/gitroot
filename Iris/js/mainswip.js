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
})
