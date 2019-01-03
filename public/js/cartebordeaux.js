/* Carte jQuery */

$(document).ready(function() {
	
	// ============================== CARTE DE BORDEAUX =============================
	$('#bordeauxmap').vectorMap({
	    map: 'bordeaux',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBordeaux,
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition du Tooltip suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la France */
	    	if(
	    		region == "Contour, feuves et rivières"
	    		|| region == "Noms régions"
	    		|| region == "Villes"
	    		|| region == "Villes physiques" 
	    		|| region == "Echelle"
	    		|| region == "Appellations"
	    		|| region == "Appellations rose foncé"
	    		|| region == "Appellations rose"
	    		|| region == "Appellations rouges"
	    		|| region == "Appellations corail"
	    		|| region == "Appellations Sauternes" 
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
	    		region == "Contour, feuves et rivières"
	    		|| region == "Noms régions"
	    		|| region == "Villes"
	    		|| region == "Villes physiques" 
	    		|| region == "Echelle"
	    		|| region == "Appellations"
	    		|| region == "Appellations rose foncé"
	    		|| region == "Appellations rose"
	    		|| region == "Appellations rouges"
	    		|| region == "Appellations corail"
	    		|| region == "Appellations Sauternes"
	    		|| region == "Entre-deux-mers"
	    		|| region == "Graves - Bordeaux supérieurs - Appellations régionales"
	    		|| region == "Libournais - appellations régionales"
	    		|| region == "Blayais - Bourgeais"
	    	) 
	    	{
	    		event.preventDefault();
	    	}
            /* Conditions des Vins du Médoc */
            else if ( region == "Vins du Médoc" )
            {
                window.location.href = '/france/bordeaux/medoc';
            }
            /* Fin conditions des Vins du Médoc */

            /* Conditions des Vins de Pessac-Léognan */
            else if ( region == "Pessac-Leognan" )
            {
                window.location.href = '/france/bordeaux/pessac-leognan';
            }
            /* Fin conditions des Vins de Pessac-Léognan */
            /* Conditions des Vins de Pomerol */
            else if ( region == "Pomerol" )
            {
                window.location.href = '/france/bordeaux/pomerol';
            }
            /* Fin conditions des Vins de Pomerol */
            /* Conditions des Vins de Saint-Émilion */
            else if ( region == "Saint-Emilion" )
            {
                window.location.href = '/france/bordeaux/saint-emilion';
            }
            /* Fin conditions des Vins de Saint-Émilion */
            /* Conditions des Vins de Sauternes et Barsac */
            else if ( region == "Sauternes-Barsac" )
            {
                window.location.href = '/france/bordeaux/sauternes-barsac';
            }
            /* Fin conditions des Vins de Sauternes et Barsac */
	    	else 
	    	{
	        	var departement = enleveraccentsetmettreunderscores(region);
	        	window.location.href = departement;
	        }
	    }
	});
	// ======================== FIN CARTE DE BORDEAUX ============================

	// ============================= CARTE DE BORDEAUX MODAL ===============================
	$('#bordeauxmapmodal').vectorMap({
	    map: 'bordeaux_modal',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBordeauxmodal,
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,
	    
	    /* Au clic de la souris */
	    onRegionClick: function(element, code, region)
	    {
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Contour et fleuves"
	    		|| region == "Noms régions"
	    		|| region == "Régions vinicoles"
	    		|| region == "Villes"
	    		|| region == "Villes physiques" 
	    		|| region == "Echelle"
	    		|| region == "Appellations Régionales du Libournais"
	    		|| region == "Blayais Bourgeais"
	    		|| region == "Appellations"
	    		|| region == "Appellations rose foncé"
	    		|| region == "Appellations rose"
	    		|| region == "Appellations Graves"
	    		|| region == "Appellations corail"
	    		|| region == "Carré rouge"
	    		|| region == "Carré rose"
	    		|| region == "Carré jaune"
	    		|| region == "Carré jaune clair"
	    		|| region == "Carré ocre"
	    		|| region == "Carré corail"
	    		|| region == "Carré rouge"
	    		|| region == "Raisin jaune"
	    		|| region == "Raisin rouge"
	    		|| region == "Entre-deux-mers"
	    		|| region == "Texte rouge"
	    		|| region == "Texte blanc"
	    		|| region == "Appellations Sauternes"
	    		|| region == "Graves - Bordeaux supérieurs - Appellations régionales"
	    		|| region == "Libournais - appellations régionales"
	    	) 
	    	{
	    		event.preventDefault();
	    	}
            /* Conditions des Vins du Médoc */
            else if ( region == "Vins du Médoc" )
            {
                window.location.href = '/france/bordeaux/medoc';
            }
            /* Fin conditions des Vins du Médoc */

            /* Conditions des Vins de Pessac-Léognan */
            else if ( region == "Pessac-Leognan" )
            {
                window.location.href = '/france/bordeaux/pessac-leognan';
            }
            /* Fin conditions des Vins de Pessac-Léognan */
            /* Conditions des Vins de Pomerol */
            else if ( region == "Pomerol" )
            {
                window.location.href = '/france/bordeaux/pomerol';
            }
            /* Fin conditions des Vins de Pomerol */
            /* Conditions des Vins de Saint-Émilion */
            else if ( region == "Saint-Emilion" )
            {
                window.location.href = '/france/bordeaux/saint-emilion';
            }
            /* Fin conditions des Vins de Saint-Émilion */
            /* Conditions des Vins de Sauternes et Barsac */
            else if ( region == "Sauternes-Barsac" )
            {
                window.location.href = '/france/bordeaux/sauternes-barsac';
            }
            /* Fin conditions des Vins de Sauternes et Barsac */
            else
            {
                var departement = enleveraccentsetmettreunderscores(region);
                window.location.href = departement;
            }
	    }
	});
	// ======================== FIN CARTE DE BORDEAUX MODAL ============================

});