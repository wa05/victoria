
if(window.matchMedia('(max-width: 480px)').matches) {
  var weight = $(window).height();
  $('.fullheight').css('height', weight);
  
};
var main = function(){
/*eslint no-undef: "error"*/

/*eslint no-unused-vars: "error"*/
  /* global $ */
setTimeout(function() {
    $('#preloader').fadeOut('300');
  },1050);


$('.nav li, .nav li a').click(function (e) {
		e.preventDefault();
		$('ul.nav > li').removeClass('active');
            $(this).addClass('active');

});

$('#menux').click(function(){
    $('#menu').fadeIn(300).removeClass('hidden').addClass('visible');  
});
$('#closer').click(function(){
    $('#menu').fadeOut(600).addClass('hidden');  
});


if(window.matchMedia('(max-width: 480px)').matches) {
  var weight = $(window).height();
  $('.fullheight').css('height', weight);
};
    
 $('.carousel-inner').carousel({
  interval: 9999999999999
});
    
     
$(function(){
  
    $('.nav li a[href*= "#" ]:not([href= "#" ])').click(function() {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if(target.length){
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

  var topoffset = 35;
	$('body').scrollspy({
		target: 'header .navbar',
		offset: topoffset
	});


if (window.matchMedia('(min-width: 800px)').matches) {
  var hash = $(this).find('li.active a').attr('href');
  if(hash !== '#inicio') {
      $('header nav').removeClass('hidden');
      $('header nav').fadeIn(600).addClass('visible');
      $('.go-top').removeClass('hidden');
  }else{
      $('header nav').fadeOut('slow').removeClass('visible');
      $('header nav').addClass('hidden');
       $('.go-top').addClass('hidden');
  }
  // Add an inbody class to nav when scrollspy event fires
  $('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
    var hasho = $(this).find('li.active a').attr('href');
    if(hasho !== '#inicio') {
      $('header nav').removeClass('hidden');
      $('header nav').fadeIn(600).addClass('visible');
      $('.go-top').removeClass('hidden');
  } else {
      $('header nav').fadeOut('slow').removeClass('visible');
      $('header nav').addClass('hidden');
      $('.go-top').addClass('hidden');
  }
  });
}else{
      $('header nav').removeClass('hidden');
}
     
  
};



$(document).ready(main);
