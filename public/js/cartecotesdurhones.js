/* Carte jQuery */
$(document).ready(function() {
	
	// ====================== CARTE DES CÔTES DU RHÔNE SEPTENTRIONAL ===========================
	$('#cotesdurhonesmap').vectorMap({
	    map: 'cotesdurhones_fr',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: "transparent",
		colors: couleursCotesdurhones,
		borderColor: "transparent",
		selectedColor: "#373737",
		enableZoom: false,
		showTooltip: true,

		/* Conditions d'apparition du Tooltip suivant les régions */
		onRegionOver: function(event, code, region)
	    {
	    	/* Conditions des textes pour la Bourgogne */
	    	if(
	    		region == "Echelle"
	    		|| region == "rouge1"
                || region == "rouge2"
                || region == "jaune1"
                || region == "jaune2"
                || region == "jaune3"
                || region == "rose"
                || region == "rosefonce"
                || region == "blanc"
                || region == "gris"
                || region == "orange"
                || region == "villesviticoles"
                || region == "villes"
                || region == "traces"
                || region == "villesnonviti"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
	    	) 
	    	{
	    		onRegionOver.showTooltip(false);
	    	}
	    },

	   	/* Conditions des textes pour les Côtes du Rhône Septentrional */
	    onRegionClick: function(element, code, region)
	    {
	    	/* Conditions du textes cliquables ou non */
	    	if(
	    		region == "Echelle"
                || region == "rouge1"
                || region == "rouge2"
                || region == "jaune1"
                || region == "jaune2"
                || region == "jaune3"
                || region == "rose"
                || region == "rosefonce"
                || region == "blanc"
                || region == "gris"
                || region == "orange"
                || region == "villesviticoles"
                || region == "villes"
                || region == "traces"
                || region == "villesnonviti"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
                || region == "AOC Livron"
                || region == "AOC de Die"
                || region == "Crozes-Hermitage"
                || region == "Hermitage"
                || region == "Côte Rotie"
                || region == "Château Grillet"
                || region == "Condrieu"
                || region == "Saint-Joseph"
            )
	    	{
	    		event.preventDefault();
	    	}

            /* Conditions de Saint-Peray */
            if ( region == "Cornas" || region == "Cornas" )
            {
                window.location.href = '/france/cotes-du-rhone-septentrional/saint-peray-cornas';
            }
            /* Fin Conditions de Cornas */
            /* Conditions de Saint-Peray */
            if ( region == "Saint-Peray" || region == "Cornas" )
            {
                window.location.href = '/france/cotes-du-rhone-septentrional/saint-peray-cornas';
            }
            /* Fin Conditions de Saint-Peray */
	    }
	});
	// ====================== FIN CARTE DES CÔTES DU RHÔNE SEPTENTRIONAL ==========================

    // ========================= CARTE DES CÔTES DU RHÔNE SEPTENTRIONAL MODAL =============================
    $('#cotesdurhonesmapmodal').vectorMap({
        map: 'cotesdurhones_modal',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursCotesdurhonesmodal,
        borderColor: "transparent",
        selectedColor: "#373737",
        enableZoom: true,
        showTooltip: false,
        /* Conditions des textes pour les Côtes du Rhône Septentrional modal */
        onRegionClick: function(element, code, region)
        {
            /* Conditions du textes cliquables ou non */
            if(
                region == "Echelle"
                || region == "textes"
                || region == "rouge1"
                || region == "rouge2"
                || region == "jaune1"
                || region == "jaune2"
                || region == "jaune3"
                || region == "rose"
                || region == "rosefonce"
                || region == "blanc"
                || region == "gris"
                || region == "orange"
                || region == "villesviticoles"
                || region == "villes"
                || region == "traces"
                || region == "villesnonviti"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
                || region == "AOC Livron"
                || region == "AOC de Die"
                || region == "Crozes-Hermitage"
                || region == "Hermitage"
                || region == "Côte Rotie"
                || region == "Château Grillet"
                || region == "Condrieu"
                || region == "Saint-Joseph"
            )
            {
                event.preventDefault();
            }

            /* Conditions de Saint-Peray */
            if ( region == "Cornas" || region == "Cornas" )
            {
                window.location.href = '/france/cotes-du-rhone-septentrional/saint-peray-cornas';
            }
            /* Fin Conditions de Cornas */
            /* Conditions de Saint-Peray */
            if ( region == "Saint-Peray" || region == "Cornas" )
            {
                window.location.href = '/france/cotes-du-rhone-septentrional/saint-peray-cornas';
            }
            /* Fin Conditions de Saint-Peray */
        }
    });
    // ======================== FIN DES CÔTES DU RHÔNE SEPTENTRIONAL MODAL ============================


});