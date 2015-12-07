console.log('loaded')

$(function() {
  var $homeSlider = $('#home-slider')

  $homeSlider.slick({
    centerMode: true,
    centerPadding: (($(window).width() - 650)/2) + 'px',
    slidesToShow: 1,
    prevArrow: '#slick-prev-button',
    nextArrow: '#slick-next-button',
    responsive: [
      {
        breakpoint: 700,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
          autoplay: true
        }
      }
    ]
  });

  $(window).on('resize', function(){

    $homeSlider.slick('slickSetOption', 'centerPadding', (($(window).width() - 650)/2) + 'px', true)

  })
})

