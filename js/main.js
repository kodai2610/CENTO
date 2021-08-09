//slick-----   
jQuery(function($){ //{}のローカル空間の中で$にjQueryの機能が詰め込まれた
   $('.slick').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 3000,
      prevArrow:'<div class="prev">PREV</div>',
      nextArrow:'<div class="next">NEXT</div>',
      arrows: true,
      responsive: [
         {
               breakpoint: 1200,
               settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
               infinite: true,
               centerMode: true,
               
            }
         },
         {
               breakpoint: 750,
               settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               centerMode: true,
               
            }
         }
      ]
   });
});

jQuery(function($) {
   $('.recruit_slick').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 3000,
      prevArrow: '<div class="prev">PREV</div>',
      nextArrow: '<div class="next">NEXT</div>',
      arrows: true,
      responsive: [
         {
               breakpoint: 1200,
               settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
               infinite: true,
               centerMode: true,
               
            }
         },
         {
               breakpoint: 750,
               settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               centerMode: true,
               
            }
         }
      ]
   });
})

//wordpressでは$よりjQueryで呼び出す

//ハンバーガー
jQuery(function($) {
   $(".openbtn").click(function () {
      $(this).toggleClass('active');
      $("#slide-nav").toggleClass('panelactive');
   });
   
   $("#slide-nav a").click(function () {
      $(".openbtn").removeClass('active');
      $("#slide-nav").removeClass('panelactive');
   });

});


//リンクへスクロール

jQuery(function($) {
   $('a[href*="#"]').click(function () {
      var linkHash = $(this).attr('href'); 
      var pos = $(linkHash).offset().top;	
      $('body,html').animate({scrollTop: pos}, 500); 
      return false;
   });
});
   


