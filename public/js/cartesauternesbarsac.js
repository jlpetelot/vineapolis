/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE SAUTERNES-BARSAC =============================
	$('#mapsauternesbarsac').vectorMap({
	    map: 'sauternesbarsac',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursSauternesbarsac,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE SAUTERNES-BARSAC ============================

});