/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE LA CÔTE CHALONNAISE =============================
	$('#francemapchalon').vectorMap({
	    map: 'couchoise_fr',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursChalonnaise,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE CÔTE CHALONNAISE ============================

});