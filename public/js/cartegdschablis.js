/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE GRANDS CRUS DE CHABLIS =============================
	$('#mapgdschablis').vectorMap({
	    map: 'gdschablis',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursGdschablis,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE GRANDS CRUS DE CHABLIS ============================

});