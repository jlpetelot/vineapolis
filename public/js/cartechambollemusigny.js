/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE CHAMBOLLE-MUSIGNY =============================
	$('#mapchambollemusigny').vectorMap({
	    map: 'chambollemusigny',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursChambollemusigny,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE CHAMBOLLE-MUSIGNY ============================

});