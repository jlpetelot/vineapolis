/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE CHASSAGNE-MONTRACHET =============================
	$('#mapchassagne').vectorMap({
	    map: 'chassagne',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursChassagne,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE CHASSAGNE-MONTRACHET ============================

});