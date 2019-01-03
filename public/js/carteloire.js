$(document).ready(function() {

    // ========================= CARTE DES VINS DE LA LOIRE ET DU CENTRE =============================
    $('#loiremap ').vectorMap({
        map: 'loire_fr',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursdelaLoire,
        borderColor: "transparent",
        selectedColor: "#373737",
        enableZoom: false,
        showTooltip: true,

        /* Conditions d'apparition du Tooltip suivant les régions */
        onRegionOver: function(event, code, region)
        {
            /* Conditions des textes pour la Loire et le Centre */
            if(
                region == "Echelle"
                || region == "Villes"
                || region == "Tracés"
                || region == "villetexte"
                || region == "apellationsnoires"
                || region == "apellationsblanches"
                || region == "routes"
                || region == "eau"
            )
            {
                onRegionOver.showTooltip(false);
            }
        },

        /* Conditions des régions cliquables */
        onRegionClick: function(event, code, region)
        {
            /* Conditions Pouilly */
            if (region == "Pouilly") window.location.href = '/france/loire/pouilly';
            /* Conditions Sancerre */
            if (region == "Sancerre") window.location.href = '/france/loire/sancerre-menetou-salon';
            /* Conditions Quincy-Reuilly */
            if (region == "Quincy-Reuilly") window.location.href = '/france/loire/quincy-reuilly';
            /* Conditions Saumur-Champigny */
            if (region == "Saumur-Champigny") window.location.href = '/france/loire/saumur-champigny';
        }
    });
    // ======================== FIN DES VINS DE LA LOIRE ET DU CENTRE ============================

    // ========================= CARTE DES VINS DE LA LOIRE ET DU CENTRE MODALE =============================
    $('#loiremapmodal').vectorMap({
        map: 'loiremodal',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursdelaLoiremodal,
        borderColor: "transparent",
        selectedColor: "#373737",
        enableZoom: true,
        showTooltip: false,

        /* Conditions des régions cliquables */
        onRegionClick: function(event, code, region)
        {
            /* Conditions Pouilly */
            if (region == "Pouilly") window.location.href = '/france/loire/pouilly';
            /* Conditions Sancerre */
            if (region == "Sancerre") window.location.href = '/france/loire/sancerre-menetou-salon';
            /* Conditions Quincy-Reuilly */
            if (region == "Quincy-Reuilly") window.location.href = '/france/loire/quincy-reuilly';
            /* Conditions Saumur-Champigny */
            if (region == "Saumur-Champigny") window.location.href = '/france/loire/saumur-champigny';
        }
    });
    // ======================== FIN DES VINS DE LA LOIRE ET DU CENTRE MODALE ============================

});
