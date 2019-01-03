/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DU BEAUJOLAIS =============================
	$('#francemapbeaujolais').vectorMap({
	    map: 'beaujolais',
		hoverOpacity: 1,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBeaujolais,
		borderColor: "transparent",
		selectedColor: "#ffffff",
		enableZoom: true,
		showTooltip: true,
	});
	// ======================== FIN CARTE CÔTE BEAUJOLAIS ============================
	
});