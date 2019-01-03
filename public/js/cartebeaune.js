/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE BEAUNE ET DES CÔTES DE BEAUNE =============================
	$('#cotesdebeaunemap').vectorMap({
	    map: 'cotesdebeaune',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursCotesdebeaune,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions de l'apparition des Tooltips  */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la France */
	    	if(
	    		region == "Echelle de la carte"
	    		|| region == "Routes"
	    		|| region == "Eau"
	    		|| region == "Tracés"
	    		|| region == "Villes"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },
	    /* Fin conditions de l'apparition des Tooltips  */

		/* Conditions des textes pour Beaune et les Côtes de Beaune */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions des textes cliquables ou non */
	    	if(
	    		region == "Hautes Côtes de Beaune"
	    		|| region == "Hautes Côtes de Beaune"
	    		|| region == "Bourgogne 1"
	    		|| region == "Bourgogne 2"
	    		|| region == "1ers Crus Rouges"
	    		|| region == "1ers Crus Blancs"
	    		|| region == "Grands Crus Blancs"
	    		|| region == "Communes viticoles"
	    		|| region == "Appellations"
                || region == "Appellations Communales Blancs"
                || region == "Côtes-de-Beaune"
	    		|| region == "Grands Crus"
	    		|| region == "Echelle de la carte"
	    		|| region == "Routes"
	    		|| region == "Eau"
	    		|| region == "Tracés"
	    		|| region == "Villes"
	    	) 
	    	{
	    		event.preventDefault();
	    	}

	    	/* Conditions vins de Chassagne Montrachet */
	    	else if ( 
	    		region == "Chassagne-Montrachet 1ers Crus Blancs"
	    		|| region == "Chassagne-Montrachet Rouges"
	    		|| region == "Chassagne-Montrachet 1ers Crus Blancs"
	    		|| region == "Chassagne-Montrachet Grands Crus Blancs"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/chassagne-montrachet';
	        }
	        /* Fin conditions vins de Chassagne Chassagne Montrachet */

            /* Conditions vins de Puligny Montrachet */
            else if (region == "Puligny-Montrachet")
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/puligny-montrachet';
            }
            /* Fin conditions vins de Chassagne Puligny Montrachet */

	        /* Conditions vins d'Aloxe-Carton */
	    	else if (
                region == "Aloxe Corton"
	    		|| region == "Aloxe Corton Grands Crus Blancs"
	    		|| region == "Aloxe Corton Grands Crus Rouges"
	    		|| region == "Aloxe Corton 1ers Crus Rouges"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton';
	        }
	        /* Fin conditions vins d'Aloxe-Carton */

	        /* Conditions vins de Volnay */
	    	else if ( 
	    		region == "Volnay 1ers Crus Rouges"
	    		|| region == "Volnay Appellations Rouges"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/volnay';
	        }
	        /* Fin conditions vins de Volnay */

	        /* Conditions vins de Pommard */
	    	else if ( 
	    		region == "Pommard Rouges"
	    		|| region == "Pommard Crus Rouges"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/pommard';
	        }
	        /* Fin conditions vins de Pommard */
	   
	    	/* Conditions vins de Beaune */
	    	else if ( 
	    		region == "Beaune Appellations Communales Rouge"
	    		|| region == "Beaune 1ers crus"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/1ers-crus-et-grands-crus';
	        }
	        /* Fin conditions vins de Beaune */

	    	/* Le reste */
	    	else 
	    	{
	        	var departement = enleveraccentsetmettreunderscores(region);
	        	window.location.href = departement;
	        }
	    }
	});
	// ======================== FIN CARTE DE BEAUNE ET DES CÔTES DE BEAUNE ============================

	// ======================= CARTE DE BEAUNE ET DES CÔTES DE BEAUNE MODAL ===========================
	$('#mapbeaunemodal').vectorMap({
	    map: 'beaune_modal',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursbeaunemodal,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,

/* Conditions de l'apparition des Tooltips  */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la France */
	    	if(
	    		region == "Echelle de la carte"
	    		|| region == "Routes"
	    		|| region == "Eau"
	    		|| region == "Tracés"
	    		|| region == "Villes"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },
	    /* Fin conditions de l'apparition des Tooltips  */

		/* Conditions des textes pour Beaune et les Côtes de Beaune */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions des textes cliquables ou non */
	    	if(
	    		region == "Hautes Côtes de Beaune"
	    		|| region == "Hautes Côtes de Beaune"
	    		|| region == "Bourgogne 1"
	    		|| region == "Bourgogne 2"
	    		|| region == "1ers Crus Rouges"
	    		|| region == "1ers Crus Blancs"
	    		|| region == "Grands Crus Blancs"
	    		|| region == "Communes viticoles"
                || region == "Côtes-de-Beaune"
	    		|| region == "Appellations"
	    		|| region == "Grands Crus"
	    		|| region == "Echelle de la carte"
	    		|| region == "Routes"
	    		|| region == "Eau"
	    		|| region == "Tracés"
	    		|| region == "Villes"
	    	) 
	    	{
	    		event.preventDefault();
	    	}

            /* Conditions vins de Puligny Montrachet */
            else if (region == "Puligny-Montrachet")
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/puligny-montrachet';
            }
            /* Fin conditions vins de Chassagne Puligny Montrachet */

            /* Conditions vins d'Aloxe-Carton */
            else if (
                region == "Aloxe Corton"
                || region == "Aloxe Corton Grands Crus Blancs"
                || region == "Aloxe Corton Grands Crus Rouges"
                || region == "Aloxe Corton 1ers Crus Rouges"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton';
            }
            /* Fin conditions vins d'Aloxe-Carton */

            /* Conditions vins de Volnay */
            else if (
                region == "Volnay 1ers Crus Rouges"
                || region == "Volnay Appellations Rouges"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/volnay';
            }
            /* Fin conditions vins de Volnay */

            /* Conditions vins de Pommard */
            else if (
                region == "Pommard Rouges"
                || region == "Pommard Crus Rouges"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/pommard';
            }
            /* Fin conditions vins de Pommard */

            /* Conditions vins de Beaune */
            else if (
                region == "Beaune Appellations Communales Rouge"
                || region == "Beaune 1ers crus"
            )
            {
                window.location.href = '/france/bourgogne/beaune-et-cotes-de-beaune/1ers-crus-et-grands-crus';
            }
            /* Fin conditions vins de Beaune */

            /* Le reste */
            else
            {
                var departement = enleveraccentsetmettreunderscores(region);
                window.location.href = departement;
            }
	    }
	});
	// ====================== FIN CARTE DE BEAUNE ET DES CÔTES DE BEAUNE MODAL ==========================

});