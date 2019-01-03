/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE MARGAUX =============================
	$('#mapmargaux').vectorMap({
	    map: 'margaux',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursMargaux,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE MARGAUX ============================

});