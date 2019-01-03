/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE PULIGNY-MONTRACHET =============================
	$('#mappuligny').vectorMap({
	    map: 'puligny',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursPuligny,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE PULIGNY-MONTRACHET ============================

});