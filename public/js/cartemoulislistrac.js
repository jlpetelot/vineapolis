/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE MOULIS ET DE LISTRAC =============================
	$('#mapmoulislistrac').vectorMap({
	    map: 'mapmoulislistrac',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursMoulislistrac,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE MOULIS ET DE LISTRAC ============================

});