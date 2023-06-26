'use strict'

const raizComponentes = './componentes';

$(document).ready(function(){
	/**
	 * Importar Componente:
	 *  -> Barra de Navegación (Navbar)
	 * */
	$('#header').load(raizComponentes + '/header.component.html');
});