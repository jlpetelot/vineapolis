/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE SAINT-EMILION =============================
	$('#mapsaintemilion').vectorMap({
	    map: 'saintemilion',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursSaintemilion,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE SAINT-EMILION ============================

});