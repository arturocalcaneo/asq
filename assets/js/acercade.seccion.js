'use strict'

$(window).scroll(function(){
	
	const headerHeight= 104.0;
	var positionWindow = $(window).scrollTop();

	var heightElement = 119.58 + headerHeight;
	var positionElement = $('#acerca-de').offset().top;
		positionElement = parseFloat( positionElement );
		positionElement = positionElement - heightElement;

	if( positionWindow >= positionElement ){ // ESTAS EN LA POSICION (OFFSET) DE '#acerca-de'
		$('.sticky-header').css({ backgroundColor: 'rgba(0,0,0,0.085)' });
	}else if(positionWindow < positionElement){
		$('.sticky-header').css({ backgroundColor: 'transparent' });
	}
});