//==========================================
//
//	HTML5
//
//==========================================
document.createElement('header');
document.createElement('hgroup');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('nav');



//==========================================
//
//	Page Top
//
//==========================================
$(function(){
	$("#pagetop a, .gotop a").click(function(){
	$('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
		return false;
	})
});



//==========================================
//
//	Hover Light
//
//==========================================
$(function(){
	$('#globalnavi a,#localnavi a,#footerContents a,#footer a,.indexBox,#pageIndex').mouseover(function(){
		$(this).css({
			'opacity': '0.7'
		});
		$(this).stop(true, false).animate({
			'opacity': '1'
		}, 700);
	});
});



//==========================================
//
//	Flat Heights
//
//==========================================
$(function(){
	$('#recommend .borderBlock').flatHeights();
});



//==========================================
//
//	add Icon
//
//==========================================



//==========================================
//
//	Icon ON-OFF
//
//==========================================
$(function(){
	$("img[src*='_off.']").hover(
		function(){this.src=this.src.replace("_off.","_on.")},
		function(){this.src=this.src.replace("_on.","_off.")}
	)
});
