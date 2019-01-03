/* Carte jQuery */

$(document).ready(function() {
	
	// ============================== CARTE DU MÉDOC =============================
	$('#cartemedoc').vectorMap({
	    map: 'medoc',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursMedoc,
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition du Tooltip suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la France */
	    	if(
	    		region == "Contour"
	    		|| region == "Routes"
	    		|| region == "Tracé Bordeaux"
	    		|| region == "Bordeaux" 
	    		|| region == "Echelle"
	    		|| region == "Appellations"
	    		|| region == "Crus classés 1855"
	    		|| region == "Communes viticoles"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

	    /* Au clic de la souris */
	    onRegionClick: function(element, code, region)
	    {
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Contour"
	    		|| region == "Routes"
	    		|| region == "Tracé Bordeaux"
	    		|| region == "Bordeaux" 
	    		|| region == "Echelle"
	    		|| region == "Appellations"
	    		|| region == "Crus classés 1855"
	    		|| region == "Communes viticoles"
	    		|| region == "Bordeaux Médoc"
	    		|| region == "Médoc"
	    		|| region == "Haut-Médoc"
	    	) 
	    	{
	    		event.preventDefault();
	    	}

	    	/* Conditions Moulis en Médoc et Listrac */
	    	else if (
                region == "Moulis en Médoc"
                || region == "Listrac"
            )
	    	{
	        	window.location.href = '/france/bordeaux/medoc/moulis-listrac';
	        }
	        /* Fin conditions Moulis en Médoc et Listrac */

            /* Conditions Margaux */
            else if (
                region == "Margaux"
            )
            {
                window.location.href = '/france/bordeaux/medoc/margaux';
            }
            /* Fin conditions Margaux */

            /* Conditions Pauillac */
            else if (
                region == "Pauillac"
            )
            {
                window.location.href = '/france/bordeaux/medoc/pauillac';
            }
            /* Fin conditions Pauillac */

            /* Conditions Saint-Estèphe */
            else if (
                region == "Saint-Estèphe"
            )
            {
                window.location.href = '/france/bordeaux/medoc/saint-estephe';
            }
            /* Fin conditions Saint-Estèphe */

            /* Conditions Saint-Julien */
            else if (
                region == "Saint-Julien"
            )
            {
                window.location.href = '/france/bordeaux/medoc/saint-julien';
            }
            /* Fin conditions Saint-Julien */

	    	else 
	    	{
	        	var departement = enleveraccentsetmettreunderscores(region);
	        	window.location.href = departement;
	        }
	    }
	});
	// ======================== FIN CARTE DU MÉDOC ============================

	// ============================= CARTE DU MÉDOC MODAL ===============================
	$('#mapmodalmedoc').vectorMap({
	    map: 'medoc_modal',
		hoverOpacity: 0.5,
		hoverColor: false,
        backgroundColor: "transparent",
		colors: couleursMedocmodal,
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,
	    
	    /* Au clic de la souris */
	    onRegionClick: function(element, code, region)
	    {
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Contour"
	    		|| region == "Routes"
	    		|| region == "Tracé Bordeaux"
	    		|| region == "Bordeaux" 
	    		|| region == "Echelle"
	    		|| region == "Appellations"
	    		|| region == "Crus classés 1855"
	    		|| region == "Communes viticoles"
	    		|| region == "Tableau gris"
	    		|| region == "Tableau blanc"
	    		|| region == "Tableau rouge"
	    		|| region == "Bordeaux Médoc"
	    		|| region == "Médoc"
	    		|| region == "Haut-Médoc"
	    	) 
	    	{
	    		event.preventDefault();
	    	}

            /* Conditions Moulis en Médoc et Listrac */
            else if (
                region == "Moulis en Médoc"
                || region == "Listrac"
            )
            {
                window.location.href = '/france/bordeaux/medoc/moulis-listrac';
            }
            /* Fin conditions Moulis en Médoc et Listrac */

            /* Conditions Margaux */
            else if (
                region == "Margaux"
            )
            {
                window.location.href = '/france/bordeaux/medoc/margaux';
            }
            /* Fin conditions Margaux */

            /* Conditions Pauillac */
            else if (
                region == "Pauillac"
            )
            {
                window.location.href = '/france/bordeaux/medoc/pauillac';
            }
            /* Fin conditions Pauillac */

            /* Conditions Saint-Estèphe */
            else if (
                region == "Saint-Estèphe"
            )
            {
                window.location.href = '/france/bordeaux/medoc/saint-estephe';
            }
            /* Fin conditions Saint-Estèphe */

            /* Conditions Saint-Julien */
            else if (
                region == "Saint-Julien"
            )
            {
                window.location.href = '/france/bordeaux/medoc/saint-julien';
            }
            /* Fin conditions Saint-Julien */

	    	else 
	    	{
	        	var departement = enleveraccentsetmettreunderscores(region);
	        	window.location.href = departement;
	        }
	    }
	});
	// ======================== FIN CARTE DU MÉDOC MODAL ============================

});