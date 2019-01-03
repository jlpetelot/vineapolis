/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE LA BOURGOGNE =============================
	$('#bourgognemap').vectorMap({
	    map: 'bourgogne',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBourgogne,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition du Tooltip suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la Bourgogne */
	    	if(
	    		region == "Echelle de la carte"
	    		|| region == "Grandes régions vinicoles"
	    		|| region == "Grandes villes"
	    		|| region == "Fleuves et rivières"
	    		|| region == "Villes physiques"
	    		|| region == "Région vinicole d'Auxerre"
	    		|| region == "Région vinicole de Bourgogne"
	    		|| region == "Appellations du Grand Auxerrois"
	    		|| region == "Appellations de Bourgogne"
	    		|| region == "Appellations du Mâconnais"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

	   	/* Conditions des textes pour la Bourgogne */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions du textes cliquable ou non */
	    	if(
	    		region == "Echelle de la carte"
	    		|| region == "Grandes régions vinicoles"
	    		|| region == "Grandes villes"
	    		|| region == "Fleuves et rivières"
	    		|| region == "Villes physiques"
	    		|| region == "Région vinicole d'Auxerre"
	    		|| region == "Région vinicole de Bourgogne"
	    		|| region == "Appellations du Grand Auxerrois"
	    		|| region == "Appellations de Bourgogne"
	    		|| region == "Appellations du Mâconnais"
	    		|| region == "Vignobles de l'Auxerrois"
	    		|| region == "Vignobles de Vézelay/Jovinien/Châtillon"
	    	) 
	    	{
	    		event.preventDefault();
	    	}

            /* Conditions des Vignobles de chablis */
            else if ( region == "Vignobles de Chablis" )
            {
                window.location.href = '/france/bourgogne/chablis';
            }
            /* Fin conditions des Vignobles de chablis */

	    	/* Conditions Côte Chalonnaise et Couchoise */
	    	else if (
                region == "Vignobles de la Côte Chalonnaise"
                || region == "Vignobles du Couchois"
            )
	    	{
	        	window.location.href = '/france/bourgogne/cote-chalonnaise-et-couchoise';
	        }
	        /* Fin conditions Côte Chalonnaise et Couchoise */

	        /* Conditions Vignobles des Hautes Côtes de Beaune */
	    	else if (
                region == "Vignobles des Hautes Côtes de Beaune"
            || region == "Vignobles de Beaune et des Côtes de Beaune"
            )
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune';
	        }

            /* Conditions Vignobles de Aloxe-Carton  et  Aloxe-Carton Grands crus rouges */
            else if (
                region == "Aloxe-Carton"
            || region == "Aloxe-Carton Grands Crus rouges"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton';
            }

	        /* Conditions Vignobles des Hautes Côtes de Nuits */
	    	else if (
                region == "Vignobles des Hautes côtes de Nuit"
                || region == "Vignobles de la Côte de Nuits"
            )
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits';
	        }
            /* ../Conditions Vignobles des Hautes Côtes de Nuits */

            /* Conditions Vignobles du Maconnais */
            else if (region == "Vignobles du Maconnais")
            {
                window.location.href = '/france/bourgogne/macon';
            }
            /* ../Conditions Vignobles du Maconnais */
            /* Le reste */
	    	else 
	    	{
	        	var departement = enleveraccentsetmettreunderscores(region);
	        	window.location.href = departement;
	        }
	    }
	});
	// ======================== FIN CARTE DE LA BOURGOGNE ============================

	// ========================= CARTE DE LA BOURGOGNE MODAL =============================
	$('#bourgognemapmodal').vectorMap({
	    map: 'bourgogne_modal',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursBourgognemodal,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,
	    /* Conditions des textes pour la Bourgogne modale */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Echelle de la carte"
	    		|| region == "Grandes régions vinicoles"
	    		|| region == "Grandes villes"
	    		|| region == "Fleuves et rivières"
	    		|| region == "Villes physiques"
	    		|| region == "villes"
	    		|| region == "Région vinicole d'Auxerre"
	    		|| region == "Région vinicole de Bourgogne"
	    		|| region == "Appellations du Grand Auxerrois"
	    		|| region == "Appellations de Bourgogne"
	    		|| region == "Appellations du Mâconnais"
	    		|| region == "Vignobles de l'Auxerrois"
	    		|| region == "Vignobles de Vézelay/Jovinien/Châtillon"
	    	) 
	    	{
	    		event.preventDefault();
	    	}
            /* Conditions des Vignobles de chablis */
            else if ( region == "Vignobles de Chablis" )
            {
                window.location.href = '/france/bourgogne/chablis';
            }
            /* Fin conditions des Vignobles de chablis */

            /* Conditions Côte Chalonnaise et Couchoise */
            else if (
                region == "Vignobles de la Côte Chalonnaise"
                || region == "Vignobles du Couchois"
            )
            {
                window.location.href = '/france/bourgogne/cote-chalonnaise-et-couchoise';
            }
            /* Fin conditions Côte Chalonnaise et Couchoise */

            /* Conditions Vignobles des Hautes Côtes de Beaune */
            else if (
                region == "Vignobles des Hautes Côtes de Beaune"
                || region == "Vignobles de Beaune et des Côtes de Beaune"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune';
            }

            /* Conditions Vignobles des Hautes Côtes de Nuits */
            else if (
                region == "Vignobles des Hautes côtes de Nuit"
                || region == "Vignobles de la Côte de Nuits"
            )
            {
                window.location.href = '/france/bourgogne/cote-de-nuits';
            }
            /* ../Conditions Vignobles des Hautes Côtes de Nuits */

            /* Conditions Vignobles du Maconnais */
            else if (region == "Vignobles du Maconnais")
            {
                window.location.href = '/france/bourgogne/macon';
            }
            /* ../Conditions Vignobles du Maconnais */
            /* Le reste */
            else
            {
                var departement = enleveraccentsetmettreunderscores(region);
                window.location.href = departement;
            }
	    }
	});
	// ======================== FIN CARTE DE LA BOURGOGNE MODAL ============================
});