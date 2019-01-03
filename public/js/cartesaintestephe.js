/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE SAINT-ESTÈPHE =============================
	$('#mapsaintestephe').vectorMap({
	    map: 'saintestephe',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursSaintestephe,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE SAINT-ESTÈPHE ============================

});