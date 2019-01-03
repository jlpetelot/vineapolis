/* Carte jQuery */

$(document).ready(function() {
    // ========================= CARTE DES CÔTES DU RHÔNE MÉRIDIONAL =============================
    $('#cotesdurhonemerimapmodal').vectorMap({
        map: 'cotesdurhonemeri',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursCotesdurhonemeri,
        borderColor: "transparent",
        selectedColor: "#ffffff",
        enableZoom: true,
        showTooltip: false
    });
    // ======================== FIN CARTE DES CÔTES DU RHÔNE MÉRIDIONAL ============================
});