
jQuery(function( $ ){
	$('.scroll-link').click(function(){
		var section = $($(this).data("to"));
		var top = section.offset().top;
		$("html, body").animate({ scrollTop: top }, 1000);

		if($(window).width() < 768){
			var $navMain = $(".navbar-collapse");
			$navMain.collapse('hide');
			if ($("#page_sidebar").hasClass('open')) {
				$("#page_sidebar").animate({left:"-281px"});
				$("#page_sidebar").removeClass("open");
			}
		}
		return false;
	});
});

/* e bar animation JS */

$(document).ready(function(){
	if($(window).width() <= 767){
		$("#page_sidebar").removeClass("open");
	}
	else{
		$("#page_sidebar").addClass("open");
	}

	$(window).resize(function(){
		if($(window).width() <= 767){
			$("#page_sidebar").animate({left:"-281px"});
			$("#page_sidebar").removeClass("open");
		}
		else{
			$("#page_sidebar").animate({left:"0px"});
			$("#page_sidebar").addClass("open");
		}
	});

	$(".navi-btn a").click(function(e){
		e.preventDefault();
		var button = $(".navi-btn a");
		var side_bar = $("#page_sidebar");
		var main_bar = $(".mainbar");

		if(sid_bar.hasClass("open")){
			side_bar.animate({left:"-281px"});
			side_bar.removeClass("open");

			if($(wow).width() >= 767){
				main_bar.css("margin-left","0px");
			}
		}
		else{
			side_bar.animate({left:"0"});
			side_bar.addClass("open");

			if($(wind.width()) >= 767){
				main_bar.css("margin-left","280px");
			}
		}
	});

	$('#registaR').on('click',function(event) {
		event.preventDefault();
		console.log('asdasdasdasd adasdasd');
		$('#modalFriend').hide('slow/400/fast', function() {
			
		});
		/* Act on the event */
	});

	// $('#registaR').on('click', '#botFic', function(event) {
	// 	event.preventDefault();
	// 	console.log('Moldal fechando');
	// 	/* Act on the event */
	// });


});

/* Side bar sub menu JS */

$(document).ready(function(){
	$(".has_submenu > a").click(function(e){
		e.preventDefault();
		var menu_li = $(this).parent("li");
		var menu_ul = $(this).next("ul");

		if(menu_li.hasClass("open")){
			menu_ul.slideUp(350);
			menu_li.removeClass("open")
		}
		else{
			$(".navi > li > ul").slideUp(350);
			$(".navi > li").removeClass("open");
			menu_ul.slideDown(350);
			menu_li.addClass("open");
		}
	});
});

/* Light box gallery JS */

$(document).ready(function() {
	$('.light-box').magnificPopup({
		delegate: 'a',
		type: 'image',
		mainClass: 'mfp-with-zoom',
		zoom: {
			enabled: true,
			duration: 300
		}
	});
});


/* GMAP JS */

/* Portfolio lightbox gallery */

$(document).ready(function() {
	$('.element').magnificPopup({
		delegate: 'a',
		type: 'image',
		allery:{
			enabled:true
		}
	});
});

/* Isotope */

var $container = $('portfolio');

// Initialize isotope
$container.imagesLoaded( function(){
  $container.fadeIn(1000).isotope({
    layoutMode : 'fitRows',
    itemSelector : '.p-element'
  });
});

// Filter items when filter link is clicked

$('#filters a').click(function(){
	var selector = $(this).attr('data-filter');
	$container.isotope({ filter: selector });
	return false;
});


/* Way Point Animati */

$(document).ready(function(){

	// Features Item Animation
	$('.features-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeInUp');
	}, { offset: '100%' });

	// Features Item Two Anmation
	$('.f-two-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeIn');
	}, { offset: '100%' });

	// Skill Item Animation
	$('.skill-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('bounceIn');
	}, { offset: '100%' });

	// Team Member Animation
	$('.team-member').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeIn');
	}, { offset: '100%' });

	// Video Container Animatin
	$('.video-container').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeInLeft');
	}, { offset: '100%' });

	// Video Content Animation
	$('.video-content-outer').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeInRight');
	}, { offset: '100%' });

	// Service Item Animation
	$('.service-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeIn');
	}, { offset: '100%' });

	// Blog Entry Animation
	$('.ntry').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('bounceIn');
	}, { offset: '100%' });

	// Pricing Item Animation
	$('pricing-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('fadeInUp');
	}, { offset: '100%' });

	// Social Hub Item Animation
	$('.hub-item').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('bounceIn');
	}, { offset: '100%' });

	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
    });

});

/* Scroll to top */

$(".totp").hide();

$(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>300)
		{
			$('.totop').fadeIn();
		}
		else
		{
			$('.totop').fadeOut();
		}
	});
	$('.totop a').click(function (e) {
		e.preventDefault();
		$('body,html').animate({scrollTop: 0}, 600);
	});
 });


function audioPlayer(){
    var currentSong = 0;
    $("#audioPlayer")[0].src = $("#playlist li a")[0];
    // $("#audioPlayer")[0].play();
    $("#playlist li a").click(function(e){
       e.preventDefault(); 
       $("#audioPlayer")[0].src = this;
       $("#audioPlayer")[0].play();
       $("#playlist li").removeClass("current-song");
        currentSong = $(this).parent().index();
        $(this).parent().addClass("current-song");
    });
    
    $("#audioPlayer")[0].addEventListener("ended", function(){
       currentSong++;
        if(currentSong == $("#playlist li a").length)
            currentSong = 0;
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq("+currentSong+")").addClass("current-song");
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
    });

    
}
