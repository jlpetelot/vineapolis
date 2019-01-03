/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE SAUMUR-CHAMPIGNY =============================
    $('#saumurmapmodal').vectorMap({
        map: 'saumur',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursSaumurmodal,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE SAUMUR-CHAMPIGNY ============================

});