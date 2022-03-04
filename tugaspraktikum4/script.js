// Jumbotron //
$('.page-scroll').on('click', function(e){

  var tujuan = $(this).attr('href');

  var elemenTujuan = $(tujuan);

  $('body').animate({
    scrollTop: elemenTujuan.offset().top - 50
  }, 1250, 'easeInOutExpo');


e.preventDefault();

});

//PARRALAX
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();

  $('.jumbotron .container').css({
    'transform' : 'translate(0px, '+ wScroll/7 +'%)'
  });

  //About
  if( wScroll> $('.about').offset().top-250){
      $('.about').addClass('muncul');
  }else{
    $('.about').removeClass('muncul');

  }

  //Konten
  if( wScroll> $('.about').offset().top-300){
    $('.card').addClass('muncul');
  }else{
    $('.card').removeClass('muncul');
  }
  
    //Gallery
  if(wScroll> $('.gallery').offset().top-300){
    $('.gallery img').addClass('muncul');
    $('h3').addClass('muncul');
  }else{
    $('.gallery img').removeClass('muncul');
    $('h3').removeClass('muncul');
  }

});

