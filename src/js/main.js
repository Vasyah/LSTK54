$(document).ready(function(){
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    adaptiveHeight: true,
    centerMode: true,
    infinite: true,
    speed: 500,
    autoplaySpeed: 4000,
    autoplay: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    pauseOnDotsHover: true,
    responsive: [
      {
        breakpoint: 1750,
        settings:{
          slidesToShow: 2,
          centerMode: false,
      }},
      {
        breakpoint: 992,
        settings:{
          slidesToShow: 1,
          centerMode: false,
      }},
      {
        breakpoint: 768,
        settings:{
          slidesToShow: 1,
          centerMode: false,
          arrows: false,
          adaptiveHeight: true,
      }},
    ] 
  });
  $("a[href^='#']").click(function(){
    var _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
  });
  $( ".header-burger" ).click(function(){ // задаем функцию при нажатиии на элемент с классом slide-toggle
    $( ".header-menu-wrapper" ).slideToggle(); // плавно скрываем, или отображаем все элементы <div>
  });
}); // end of ready() 
