/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE POMEROL =============================
	$('#mappomerol').vectorMap({
	    map: 'pomerol',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursPomerol,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE POMEROL ============================

});