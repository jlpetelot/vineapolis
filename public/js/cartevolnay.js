/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE VOLNAY =============================
	$('#mapvolnay').vectorMap({
	    map: 'volnay',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursVolnay,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE VOLNAY  ============================

});