<?php header("Content-type: text/javascript; charset: UTF-8"); ?>

var activeSlide = '';
var minContentHeight = 768;
var defaultMarginTop = 75;
var languageVar = 'en'; 

function setLanguage(langVar){
	languageVar = langVar;
}

function calcSiteLayout(){
	$('#content').css({
		width: $(window).width(),
		height: $(window).height()
	});
	
	if ($('#isPrint').css('display') == 'block'){
		$('.paper, .paper #slides, .paper #slides .slide, #save-the-date iframe').css({
			width: $(window).width(),
			height: $(window).height()
		});
	}
	else{
		if ($('#isMobile').css('display') != 'block'){
			if ($(window).height() < 768 || $(window).width() < 1300 ){
				$('#wrapper').css({
					'-webkit-transform': 'scale(.8)',
					'-ms-transform': 'scale(.8)',
					'-moz-transform': 'scale(.8)'
    	
				});
				minContentHeight = 615;
			}
			else{
				$('#wrapper').css({
					'-webkit-transform': 'scale(1)',
					'-ms-transform': 'scale(1)',
					'-moz-transform': 'scale(1)'
				});
				minContentHeight = 768;
			}
    	
			var spareMargin =  $(window).height() - minContentHeight;
			var setMargin = (spareMargin / 2 <= 0) ? 0 : (spareMargin / 2);
			$('#wrapper #content .paper').css('margin-top', setMargin+'px');
    	
			$('.paper').css({
				height: minContentHeight+'px'
			});
		}
		else{
			$('#wrapper').css({
				'-webkit-transform': 'scale(1)',
				'-ms-transform': 'scale(1)',
				'-moz-transform': 'scale(1)'
			});
		}
    	
		$('.paper #slides, .paper #slides .slide, #save-the-date iframe').css({
			height: $('.paper').height()
		});
	}

}

function showSlide(elementRef, elementTrigger, initialLoad){
	if (activeSlide != elementRef){
		$('#nav .link').removeClass('active');
		$(elementTrigger).addClass('active');
		$('#'+activeSlide).fadeOut();
		$('#'+elementRef).fadeIn();
		activeSlide = elementRef;

		if (initialLoad == false && $('.paper #slides h2').css('display') == 'block'){
			$('#nav').slideToggle();
			$('.paper #mobile-nav').text('');
		}
	}
}

function bindFormControls(){
	$('.attendance-input').on('change', function(){
		$.ajax({
			type: 'POST',
			url: '/mercedes-solari/lib/ajaxGateway.php',
			data: $('#attendance-form').serializeArray(),
			success: function(message){
				$('#form-response').html(message);
			},
			dataType: 'html'
		});
	});

	$('#reception-login form').on('submit', function(e){
		e.preventDefault();
		e.stopPropagation();
		$.ajax({
			type: 'GET',
			url: (languageVar == 'es' ? '/mercedes-solari/invitacion/email/' : '/mercedes-solari/invitation/email/'),
			data: $('#reception-login form').serializeArray(),
			success: function(message){
				if (parseInt(message) > 0){
					$('#reception').fadeOut(function(){
						$('#reception').load('../reception-info.php/?guest_id='+parseInt(message), function(){
							$('#reception').fadeIn();
							bindFormControls();
						});
					});

				}
				else{
					$('#login-message').fadeOut(function(){
						$('#login-message').html(
							(languageVar == 'es') ? 'El correo electr&oacute;nico no se encuentra en la lista de invitados. Por favor, vuelva a intentarlo.' : 
							'The email address entered was not found on the guest list. Please try again.'
						).fadeIn();
					});
				}
			},
			dataType: 'html'
		});

		return false;
	});
}

$(function(){
	$( window ).resize(function( event ) {calcSiteLayout();});
	$( window ).on('orientationchange',function( event ) {calcSiteLayout();});

	$('#mobile-nav').on('click', function(){
		$('#nav').slideToggle();
	});

	$('#nav li').on('click', function(){
		showSlide($(this).data('target'), this, false);
	});

	bindFormControls();
	
	if ($('#isPrint').css('display') == 'block'){
		$('#reception, #gifts').show();
	}
	else{
		calcSiteLayout();
		showSlide('save-the-date', '.default-link', true);
	}
	
});

