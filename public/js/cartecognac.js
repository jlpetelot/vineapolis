/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DU COGNAC =============================
    $('#cognacmapmodal').vectorMap({
        map: 'cognac',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "#999999",
        colors: couleursCognac,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DU COGNAC ============================
});