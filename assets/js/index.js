'use strict'

const raizComponentes = './componentes';
const raizSecciones = './secciones';

$(document).ready(function(){
	$.ajaxSetup({
		cache: false,
		async: false
	});

	/**
	 * Importar Componente:
	 *  -> Barra de Navegación (Navbar)
	 * */
	$('#header').load(raizComponentes + '/header.component.html');

	/**
	 * Importar Componente:
	 *  -> Portada (Primera Sección de Inicio)
	 * */
	$('#portada').load(raizComponentes + '/portada.component.html');

	/**
	 * Importar Componente:
	 *  -> Barra de Navegación Secundaria
	 * */
	$('#barra-navegacion').load(raizComponentes + '/barranavegacion.component.html');

	// ===================================================================================================

	/**
	 * Importar Sección:
	 *  -> Acerca de
	 * */
	$('#acerca-de').load(raizSecciones + '/acercade.seccion.html');

	// ACTIVAR EL PRIMER SILDER DE IMÁGENES
	new Swiper('.swiper.first', {
	  direction: 'horizontal',
	  loop: true,

	  // Navigation arrows
	  navigation: {
	    nextEl: '.swiper.first' + ' > .swiper-button-next',
	    prevEl: '.swiper.first' + ' > .swiper-button-prev',
	  }
	});

	/**
	 * Importar Sección:
	 *  -> Organizadores (1)
	 * */
	$('#organizadores').load(raizSecciones + '/organizadores.seccion.html');

	// ACTIVAR EL SEGUNDO SILDER DE IMÁGENES
	new Swiper('.swiper.second', {
	  direction: 'horizontal',
	  loop: true,

	  // Navigation arrows
	  navigation: {
	    nextEl: '.swiper.second' + ' > .swiper-button-next',
	    prevEl: '.swiper.second' + ' > .swiper-button-prev',
	  },
	  slidesPerView: 5,
	  spaceBetween: 15,

	  breakpoints: {
	  	1152: {
	  		slidesPerView: 5
	  	},
	  	1024: {
	  		slidesPerView: 4
	  	},
	  	512: {
	  		slidesPerView: 2
	  	},
	  	128: {
	  		slidesPerView: 1
	  	}
	  }
	});

	/**
	 * Importar Sección:
	 *  -> Organizadores (2)
	 * */
	$('#organizadores-2').load(raizSecciones + '/organizadores2.seccion.html');

	// ACTIVAR EL TERCER SILDER DE IMÁGENES
	new Swiper('.swiper.third', {
	  direction: 'horizontal',
	  loop: true,

	  // Navigation arrows
	  navigation: {
	    nextEl: '.swiper.third' + ' > .swiper-button-next',
	    prevEl: '.swiper.third' + ' > .swiper-button-prev',
	  },
	  slidesPerView: 5,
	  spaceBetween: 15,

	  breakpoints: {
	  	1152: {
	  		slidesPerView: 5
	  	},
	  	1024: {
	  		slidesPerView: 4
	  	},
	  	512: {
	  		slidesPerView: 2
	  	},
	  	128: {
	  		slidesPerView: 1
	  	}
	  }
	});

	/**
	 * Importar Sección:
	 *  -> Asesores Facultativos
	 * */

	$('#asesores-facult').load( raizSecciones + '/asesoresfacultativos.seccion.html' );

	/**
	 * Importar Sección:
	 *  -> Conteos
	 * */

	$('#contador').load( raizSecciones + '/conteos.seccion.html' );

	/**
	 * Importar Sección:
	 *  -> Patrocinadores
	 * */

	$('#patrocinadores').load( raizSecciones + '/patrocinadores.seccion.html' );
});