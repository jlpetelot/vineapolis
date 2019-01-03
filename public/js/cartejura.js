/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DU JURA =============================
    $('#juramapmodal').vectorMap({
        map: 'jura',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursJura,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DU JURA ============================
});