/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE SAINT-PERAY ET CORNAS=============================
    $('#saintperaycornasmodal').vectorMap({
        map: 'saintperaycornas',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursSaintperaycornas,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false,
    });
    // ======================== FIN CARTE SAINT-PERAY ET CORNAS ============================

});