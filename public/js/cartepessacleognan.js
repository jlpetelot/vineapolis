/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE PESSAC-LEOGNAN =============================
	$('#mappessacleognan').vectorMap({
	    map: 'pessacleognan',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursPessacleognan,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE PESSAC-LEOGNAN ============================

});