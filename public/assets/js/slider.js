// $('.sl').slick({
// autoplay:true,
// autoplaySpeed:2000,
// dots:true,
// slidesToShow: 1,
// slidesToScroll: 1,
// variableWidth: true,
// responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         // centerPadding: '40px',
//         slidesToShow: 1
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         // centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });
$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    margin: 10,
    loop: true,
    center:true,
    autoplay:1000,
    navText: [
  '<span class="arrow-owl arrow-left"></span>',
  '<span class="arrow-owl arrow-right"></span>'
],
  });
});
