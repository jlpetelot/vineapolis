$(document).ready(function() {

    // ========================= CARTE DE LA CHAMPAGNE =============================
    $('#champagnemap').vectorMap({
        map: 'champagne',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursChampagne,
        borderColor: "transparent",
        selectedColor: "#373737",
        enableZoom: false,
        showTooltip: true,

        /* Conditions d'apparition du Tooltip suivant les régions */
        onRegionOver: function(event, code, region)
        {
            /* Conditions des textes pour la Champagne */
            if(
                region == "Echelle"
                || region == "Villes"
                || region == "Tracés"
                || region == "Texte"
                || region == "Route"
                || region == "Eau"
            )
            {
                onRegionOver.showTooltip(false);
            }
        },

        /* Conditions des régions cliquables */
        onRegionClick: function(event, code, region)
        {
            /* Conditions Champagne Montagne */
            if (
                region == "Grands Crus Montagne"
                || region == "1ers crus rosés Montagne"
                || region == "Champagnes Montagne"
                || region == "Grands Crus de la Côte des Blancs"
                || region == "1ers crus de la Côte des Blancs"
            )
            {
                window.location.href = '/france/champagne/montagne-de-reims-et-cote-des-blancs';
            }
            /* Conditions Champagne Vallée de la Marne */
            if (
                region == "1ers crus de la Vallée de la Marne"
                || region == "Champagnes de la Vallée de la Marne"
            )
            {
                window.location.href = '/france/champagne/vallee-de-la-marne';
            }
        }
    });
    // ======================== FIN CARTE DE LA CHAMPAGNE ============================


    // ========================= CARTE DE LA CHAMPAGNE MODAL =============================
    $('#champagnemapmodal').vectorMap({
        map: 'champagnemodal',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursBourgognemodal,
        borderColor: "transparent",
        selectedColor: "#373737",
        enableZoom: true,
        showTooltip: false,

        /* Conditions des textes pour la Champagne modale */
        onRegionClick: function(event, code, region)
        {
            /* Conditions Champagne Montagne */
            if (
                region == "Grands Crus Montagne"
                || region == "1ers crus rosés Montagne"
                || region == "Champagnes Montagne"
                || region == "Grands Crus de la Côte des Blancs"
                || region == "1ers crus de la Côte des Blancs"
            )
            {
                window.location.href = 'champagnes-montagne-de-reims-et-cote-des-blancs';
            }
            /* Conditions Champagne Vallée de la Marne */
            if (
                region == "1ers crus de la Vallée de la Marne"
                || region == "Champagnes de la Vallée de la Marne"
            )
            {
                window.location.href = 'champagnes-de-la-vallee-de-la-marne';
            }
        }
    });
    // ======================== FIN CARTE DE LA CHAMPAGNE MODAL ============================

});
