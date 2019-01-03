/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE SAINT-JULIEN =============================
	$('#mapsaintjulien').vectorMap({
	    map: 'saintjulien',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursSaintjulien,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE SAINT-JULIEN ============================

});