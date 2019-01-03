/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE VOSNE-ROMANÉE =============================
	$('#mapvosneromanee').vectorMap({
	    map: 'vosneromanee',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursVosneromanee,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: false,
	});
	// ======================== FIN CARTE VOSNE-ROMANÉE ============================

});