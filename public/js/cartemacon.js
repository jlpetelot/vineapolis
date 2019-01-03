/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE MÂCONNAISE =============================
	$('#francemapmacon').vectorMap({
	    map: 'macon',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursMacon,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE MÂCONNAISE ============================

});