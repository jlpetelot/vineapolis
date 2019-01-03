/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE AUVERGNE =============================
    $('#auvergnemapmodal').vectorMap({
        map: 'auvergne',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursAuvergne,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE AUVERGNE ============================

});