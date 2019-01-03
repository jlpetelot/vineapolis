/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DE LA LORRAINE =============================
    $('#lorrainemapmodal').vectorMap({
        map: 'lorraine',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursLorraine,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DE LA LORRAINE ============================
});