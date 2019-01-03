/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DE L'AVEYRON =============================
    $('#aveyronmapmodal').vectorMap({
        map: 'aveyron',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursAveyron,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DE L'AVEYRON ============================
});