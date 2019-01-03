/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE DE QUINCY ET DE REUILLY =============================
    $('#quincyreuillymapmodal').vectorMap({
        map: 'quincyreuilly',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursQuincyreuilly,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE DE QUINCY ET DE REUILLY ============================
});