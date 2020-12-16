
$('.sl').slick(
  {autoplay:true,
  autoplaySpeed:2000,
  dots:true,
  });
  
  $('.sl2').slick(
    {
      slidesToShow: 3,
      infinite: true,
      slidesToScroll: 1,
      autoplay:true,
      autoplaySpeed:1700,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
            