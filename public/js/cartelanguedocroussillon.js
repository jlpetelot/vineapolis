/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DU LANGUEDOC-ROUSSILLON=============================
    $('#languedocroussillonmapmodal').vectorMap({
        map: 'languedocroussillon',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "#transparent",
        colors: couleursLanguedocroussillon,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DU LANGUEDOC-ROUSSILLON============================
});