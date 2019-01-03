/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE NUITS-SAINT-GEORGES =============================
	$('#mapnuits').vectorMap({
	    map: 'nuits',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursNuits,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE NUITS-SAINT-GEORGES ============================

});