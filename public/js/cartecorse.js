/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE CORSE =============================
    $('#mapcorse').vectorMap({
        map: 'corse',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "#c3e6fa",
        colors: couleursCorse,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE CORSE ============================

});