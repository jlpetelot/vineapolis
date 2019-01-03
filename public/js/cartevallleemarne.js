/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE CHAMPAGNES DE LA VALLEE DE LA MARNE =============================
	$('#valleemarnemodal').vectorMap({
	    map: 'valleemarne',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursValleemarne,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE CHAMPAGNES DE LA VALLEE DE LA MARNE ============================

});