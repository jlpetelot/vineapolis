/* Carte jQuery */

$(document).ready(function() {
	
	// ========================= CARTE DE LA CÔTE DE NUITS =============================
	$('#cartecotedenuits').vectorMap({
	    map: 'cotedenuits',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursCotedenuits,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition des Tooltips suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la Côte de Nuits */
	    	if(
	    		region == "Echelle"
	    		|| region == "routes"
	    		|| region == "Canal interieur"
	    		|| region == "lac"
	    		|| region == "eau"
	    		|| region == "Traces"
	    		|| region == "Villes"
	    		|| region == "Texte grands crus"
	    		|| region == "Texte rouge"
	    		|| region == "texte"
	    		|| region == "Communes viticoles"
	    		|| region == "Texte appellations"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

		/* Conditions des textes pour la Côte de Nuits */
	    onRegionClick: function(element, code, region)
	    {	
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Echelle"
	    		|| region == "routes"
	    		|| region == "Canal interieur"
	    		|| region == "lac"
	    		|| region == "eau"
	    		|| region == "Traces"
	    		|| region == "Villes"
	    		|| region == "Texte grands crus"
	    		|| region == "Texte rouge"
	    		|| region == "Communes viticoles"
	    		|| region == "Texte appellations"
	    		|| region == "texte"
	    		|| region == "Hautes Côtes de Nuits"
	    		|| region == "Marsannay Rosé"
	    		|| region == "Côtes de Nuits"
	    		|| region == "Bourgogne PTG"
	    		|| region == "Bourgogne"
	    		|| region == "1ers Crus rouges"
	    		|| region == "Grands Crus rouges"
	    	) 
	    	{
	    		event.preventDefault();
	    	}
	    	/* Conditions Vosne-Romanée */
	    	else if (
	    		region == "Vosne-Romanée Grands Crus Rouges"
	    		|| region == "Vosne-Romanée 1ers Crus Rouges"
	    		|| region == "Vosne-Romanée"
	    		)
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits/vosne-romanee';
	        }
            /* ../Conditions Vosne-Romanée */
	        /* Conditions Vougeot */
	        else if (
                region == "Vougeot Grands Crus Rouges"
                || region == "Grands Crus rouges"
            )
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits/vougeot';
	        }
            /* ../Conditions Vougeot */
	        /* Conditions Gevrey-Chambertin */
	        else if ( 
	        	region == "Gevrey-Chambertin Grands Crus Rouges"
	        	|| region == "Gevrey-Chambertin 1ers Crus Rouges"
	        	|| region == "Gevrey-Chambertin appellations"
	        	|| region == "Gevrey-Chambertin"
	        	)
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits/gevrey-chambertin';
	        }
	        /* Conditions Chambolle-Musigny */
	        else if (
	        	region == "Chambolle-Musigny Grands Crus Rouges"
	        	|| region == "Chambolle-Musigny 1ers Crus Rouges"
	        	|| region == "Chambolle-Musigny"
	        	)
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits/chambolle-musigny';
	        }
	        /* Conditions Nuits-Saint-Georges */
	        else if (
	        	region == "Nuits-Saint-Georges 1ers Crus Rouges"
	        	|| region == "Nuits-Saint-Georges AOC"
	        	)
	    	{
	        	window.location.href = '/france/bourgogne/cote-de-nuits/nuits-saint-georges';
	        }
	    }
	});
	// ======================== FIN CARTE DE LA CÔTE DE NUITS ============================

	// ========================= CARTE DE LA CÔTE DE NUITS MODAL =============================
	$('#mapmodalcotedenuits').vectorMap({
	    map: 'cotedenuits_modal',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursCotedenuitsmodal,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: true,
		showTooltip: false,
		
	    /* Conditions d'apparition des Tooltips suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la Côte de Nuits */
	    	if(
	    		region == "Echelle"
	    		|| region == "routes"
	    		|| region == "Canal interieur"
	    		|| region == "lac"
	    		|| region == "eau"
	    		|| region == "Traces"
	    		|| region == "Villes"
	    		|| region == "Texte grands crus"
	    		|| region == "Texte rouge"
	    		|| region == "texte"
	    		|| region == "Communes viticoles"
	    		|| region == "Texte appellations"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

        /* Conditions des textes pour la Côte de Nuits */
        onRegionClick: function(element, code, region)
        {
            /* Conditions du textes cliquables ou non */
            if(
                region == "Echelle"
                || region == "routes"
                || region == "Canal interieur"
                || region == "lac"
                || region == "eau"
                || region == "Traces"
                || region == "Villes"
                || region == "Texte grands crus"
                || region == "Texte rouge"
                || region == "Communes viticoles"
                || region == "Texte appellations"
                || region == "texte"
                || region == "Hautes Côtes de Nuits"
                || region == "Marsannay Rosé"
                || region == "Côtes de Nuits"
                || region == "Bourgogne PTG"
                || region == "Bourgogne"
                || region == "1ers Crus rouges"
                || region == "Grands Crus rouges"
            )
            {
                event.preventDefault();
            }
            /* Conditions Vosne-Romanée */
            else if (
                region == "Vosne-Romanée Grands Crus Rouges"
                || region == "Vosne-Romanée 1ers Crus Rouges"
                || region == "Vosne-Romanée"
            )
            {
                window.location.href = 'vosne-romanee';
            }
            /* Conditions Vougeot */
            else if ( region == "Vougeot Grands Crus Rouges" )
            {
                window.location.href = 'vougeot';
            }
            /* Conditions Gevrey-Chambertin */
            else if (
                region == "Gevrey-Chambertin Grands Crus Rouges"
                || region == "Gevrey-Chambertin 1ers Crus Rouges"
                || region == "Gevrey-Chambertin appellations"
                || region == "Gevrey-Chambertin"
            )
            {
                window.location.href = '/france/bourgogne/cote-de-nuits/gevrey-chambertin';
            }
            /* Conditions Chambolle-Musigny */
            else if (
                region == "Chambolle-Musigny Grands Crus Rouges"
                || region == "Chambolle-Musigny 1ers Crus Rouges"
                || region == "Chambolle-Musigny"
            )
            {
                window.location.href = '/france/bourgogne/cote-de-nuits/chambolle-musigny';
            }
            /* Conditions Nuits-Saint-Georges */
            else if (
                region == "Nuits-Saint-Georges 1ers Crus Rouges"
                || region == "Nuits-Saint-Georges AOC"
            )
            {
                window.location.href = '/france/bourgogne/cote-de-nuits/nuits-saint-georges';
            }
        }
	    
	});
	// ======================== FIN CARTE DE LA CÔTE DE NUITS MODAL ============================

});