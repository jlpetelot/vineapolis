/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE CHABLIS =============================
	$('#cartechablis').vectorMap({
	    map: 'chablis',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursChablis,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition du Tooltip suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	if(
	    		region == "Echelle"
	    		|| region == "ville"
	    		|| region == "trace"
	    		|| region == "communesblanches"
	    		|| region == "communesnoires"
	    		|| region == "textesgrandscrus"
	    		|| region == "routes"
	    		|| region == "eau1"
	    		|| region == "eau2"
	    		|| region == "lac"
	    		|| region == "limitesterroirs"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

	   	/* Conditions des textes pour Chablis */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions des textes cliquables ou non */
	    	if(
	    		region == "1ers Crus"
	    		|| region == "Chablis"
	    		|| region == "Petit Chablis"
	    	) 
	    	{
	    		event.preventDefault();
	    	}
	    	/* Conditions Grands Crus de Chablis */
	    	if ( region == "Grands Crus de Chablis")
	    	{
	        	window.location.href = '/france/bourgogne/chablis/grands-crus-de-chablis';
	        }
	    }
	});
	// ======================== FIN CARTE CHABLIS ============================


	// ============================= CARTE DE CHABLIS MODAL ===============================
	$('#mapmodalchablis').vectorMap({
	    map: 'modalchablis',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursChablismodal,
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,

	    /* Au clic de la souris */
	    onRegionClick: function(element, code, region)
	    {
	    	/* Conditions des textes cliquables ou non */
	    	if(
	    		region == "Echelle"
	    		|| region == "ville"
	    		|| region == "trace"
	    		|| region == "communesblanches"
	    		|| region == "communesnoires"
	    		|| region == "textesgrandscrus"
	    		|| region == "routes"
	    		|| region == "eau1"
	    		|| region == "eau2"
	    		|| region == "lac"
	    		|| region == "limitesterroirs"
	    		|| region == "1ers Crus"
	    		|| region == "Chablis"
	    		|| region == "Petit Chablis"
	    		|| region == "textejaune"
	    		|| region == "texteblanc"
	    	)
	    	{
	    		event.preventDefault();
	    	}
            /* Conditions Grands Crus de Chablis */
            if ( region == "Grands Crus de Chablis")
            {
                window.location.href = '/france/bourgogne/chablis/grands-crus-de-chablis';
            }
	    }
	});
	// ======================== FIN CARTE DE CHABLIS MODAL ============================

});