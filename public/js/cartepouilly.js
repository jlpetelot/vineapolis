/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE POUILLY =============================
    $('#pouillymapmodal').vectorMap({
        map: 'pouilly',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursPouillymapmodal,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE POUILLY ============================

});