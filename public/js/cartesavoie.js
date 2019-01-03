/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE SAVOIE =============================
    $('#savoiemapmodal').vectorMap({
        map: 'savoie',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursSavoie,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE SAVOIE ============================

});