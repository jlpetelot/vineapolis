/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE CORSE =============================
    $('#alsacemapmodal').vectorMap({
        map: 'alsace',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursAlsace,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE CORSE ============================

});