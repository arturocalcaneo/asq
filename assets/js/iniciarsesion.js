'use strict'

const raizComponentes = './componentes';
const raizSecciones = './secciones';

$(document).ready(function(){
	/**
	 * Importar Componente:
	 *  -> Barra de Navegación Secundaria
	 * */
	$('#barra-navegacion').load(raizComponentes + '/barranavegacion.component.html');
});