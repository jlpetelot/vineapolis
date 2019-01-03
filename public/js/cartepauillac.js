/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE PAUILLAC =============================
	$('#mappauillac').vectorMap({
	    map: 'pauillac',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursPauillac,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE PAUILLAC ============================

});