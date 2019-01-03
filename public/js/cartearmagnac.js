/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DE L'ARMAGNAC =============================
    $('#armagnacmapmodal').vectorMap({
        map: 'armagnac',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursArmagnac,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DE L'ARMAGNAC ============================
});