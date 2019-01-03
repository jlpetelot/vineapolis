/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE ALOXE-CARTON =============================
	$('#mapaloxecarton').vectorMap({
	    map: 'aloxecarton',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursAloxecarton,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE ALOXE-CARTON  ============================

});