/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE SANCERRE =============================
    $('#sancerremapmodal').vectorMap({
        map: 'sancerre',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursSancerre,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE SANCERRE ============================

});