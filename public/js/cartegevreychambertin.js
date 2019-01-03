/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE GEVREY-CHAMBERTIN =============================
	$('#mapgevreychambertin').vectorMap({
	    map: 'gevreychambertin',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursGevreychambertin,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE GEVREY-CHAMBERTIN ============================

});