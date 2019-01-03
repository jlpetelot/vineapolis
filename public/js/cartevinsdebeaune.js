/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE BEAUNE =============================
	$('#mapbeaune').vectorMap({
	    map: 'beaune',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBeaune,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE BEAUNE  ============================

});