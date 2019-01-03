/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE POMMARD =============================
	$('#mappommard').vectorMap({
	    map: 'pommard',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursPommard,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE POMMARD  ============================

});