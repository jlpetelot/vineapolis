/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DE LA PROVENCE=============================
    $('#provencemapmodal').vectorMap({
        map: 'provence',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursProvence,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DE LA PROVENCE============================
});