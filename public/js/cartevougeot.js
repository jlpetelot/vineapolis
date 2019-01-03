/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE VOUGEOT =============================
	$('#mapvougeot').vectorMap({
	    map: 'vougeot',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursVougeot,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE VOUGEOT ============================

});