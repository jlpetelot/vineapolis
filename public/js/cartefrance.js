/* Carte jQuery */

$(document).ready(function() {

    // ==================== CARTE GÉNÉRALE DE LA FRANCE ===========================

    $('#francemap').vectorMap({
        map: 'france',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursFrance,
        selectedColor: "#373737",
        enableZoom: false,
        showTooltip: true,

        /* Conditions d'apparition du Tooltip suivant les régions */
        onRegionOver: function(event, code, region)
        {
            /* Conditions des textes pour la France */
            if(
                region == "Contour de la carte"
                || region == "Fleuves"
                || region == "Noms des appellations"
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
                region == "Contour de la carte"
                || region == "Fleuves"
                || region == "Noms des appellations"
                || region == "Vins et Eaux-de-vie du Calvados"
                || region == "La Loire"
            )
            {
                event.preventDefault();
            }
            /* Conditions pour les Vins de la Loire et du centre */
            if(region == "Vins de la Loire et du Centre")
            {
                window.location.href="/france/loire";
            }
            /* Conditions pour les Vins de la Champagne */
            if(region == "Vins de la Champagne")
            {
                window.location.href="france/champagne";
            }
            /* Conditions pour les Vins du Beaujolais */
            if(region == "Vins du Beaujolais")
            {
                window.location.href="france/beaujolais";
            }
            /* Conditions pour les Vins de Bourgogne */
            if(region == "Vins de Bourgogne")
            {
                window.location.href="france/bourgogne";
            }
            /* Conditions pour les Vins du Jura */
            if(region == "Vins du Jura")
            {
                window.location.href="/france/jura";
            }
            /* Conditions pour les Vins du Bugey */
            if(region == "Vins de Bugey")
            {
                window.location.href="/france/bugey";
            }
            /* Conditions pour les Vins de Savoie */
            if(region == "Vins de Savoie")
            {
                window.location.href="/france/savoie";
            }
            /* Conditions pour les Vins de Bordeaux */
            if(region == "Vins de Bordeaux")
            {
                window.location.href="/france/bordeaux";
            }
            /* Conditions pour les Vins de Corse */
            if(region == "Vins de Corse")
            {
                window.location.href="france/corse";
            }
            /* Conditions pour l'Alsace */
            if(region == "Vins d'Alsace")
            {
                window.location.href="/france/alsace";
            }
            /* Conditions pour l'Auvergne */
            if(region == "Les vins en Auvergne")
            {
                window.location.href="/france/auvergne";
            }
            /* Conditions pour les Côtes du Rhône Septentrionaux */
            if(region == "Côtes du Rhône Septentrional")
            {
                window.location.href="/france/cotes-du-rhone-septentrional";
            }
            /* Conditions pour les Côtes du Rhône Méridional */
            if(region == "Côtes du Rhône Méridional")
            {
                window.location.href="/france/cotes-du-rhone-meridional";
            }
            /* Conditions pour les Vins du Languedoc-Roussillon */
            if(region == "Vins du Languedoc-Roussillon")
            {
                window.location.href="/france/languedoc-roussillon";
            }
            /* Conditions pour les Vins de Provence */
            if(region == "Vins de Provence")
            {
                window.location.href="/france/provence";
            }
            /* Conditions pour les Vins du Sud-Ouest */
            if(region == "Vins du Sud-Ouest")
            {
                window.location.href="/france/sud-ouest";
            }
            /* Conditions pour les eaux-de-vie d'Armagnac */
            if(region == "Eaux-de-vie d'Armagnac")
            {
                window.location.href="/france/armagnac";
            }
            /* Conditions pour les eaux-de-vie et liqueurs de Cognac */
            if(region == "Eaux-de-vie et liqueurs de Cognac")
            {
                window.location.href="/france/cognac";
            }
            /* Conditions pour la Lorraine */
            if(region == "Vins de la Lorraine")
            {
                window.location.href="/france/lorraine";
            }
        }
    });
    // =================== FIN CARTE GÉNÉRALE DE LA FRANCE =========================

});