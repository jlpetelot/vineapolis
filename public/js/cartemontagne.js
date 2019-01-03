/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE CHAMPGNES MONTAGNES DE REIMS ET COTE DES BLANCS =============================
	$('#montagne').vectorMap({
	    map: 'montagne',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursMontagne,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE CHAMPGNES MONTAGNES DE REIMS ET COTE DES BLANCS ============================

});