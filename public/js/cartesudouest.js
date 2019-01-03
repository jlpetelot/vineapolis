/* Carte jQuery */

$(document).ready(function() {

    // ========================= CARTE DU SUD-OUEST =============================
    $('#sudouestmap').vectorMap({
        map: 'sudouest_fr',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleurSudouest,
        selectedColor: "#373737",
        enableZoom: false,
        showTooltip: true,

        /* Conditions d'apparition du Tooltip suivant les régions */
        onRegionOver: function(event, code, region)
        {
            /* Conditions des textes pour le Sud-Ouest */
            if(
                region == "echelle"
                || region == "contour"
                || region == "villes"
                || region == "traces"
                || region == "aoc"
                || region == "villesmoyennes"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
            )
            {
                onRegionOver.showTooltip(false);
            }
        },

        /* Conditions des clics pour les textes du Sud-Ouest */
        onRegionClick: function(element, code, region)
        {
            /* Conditions du textes cliquables ou non */
            if (
                region == "echelle"
                || region == "contour"
                || region == "villes"
                || region == "traces"
                || region == "aoc"
                || region == "villesmoyennes"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
                || region == "AOC Duras et Marmandais"
                || region == "AOC Irouléguy"
                || region == "AOC Cahors"
                || region == "AOC Brulhois"
                || region == "AOC Buzet"
                || region == "AOC Gaillac"
                || region == "Vins de Bellocq"
                || region == "Vins du Jurançon"
                || region == "AOC Quercy"
                || region == "Madiran"
                || region == "Vins de Saint-Mont"
                || region == "Vins de Tursan"
                || region == "AOC Tursan-Saint-Mont"
                || region == "AOC Saussignac"
                || region == "AOC Montbazillac"
                || region == "AOC Rosette"
                || region == "AOC Pecharmant"
                || region == "Vins du Haut Montravel"
                || region == "Vins des Côtes Montravel"
                || region == "AOC Montravel"
                || region == "AOC Villaudric"
                || region == "AOC Fronton"
                || region == "AOC Frontonnais"
            )
            {
                return false;
            }
            else if (
                region == "Vins de l'Entraygues et du Fel"
                || region == "Vins d'Estaing"
                || region == "Vins des Côtes de Millau"
                || region == "Vins de Marcillac"
            )
            {
                window.location.href = '/france/vins-du-sud-ouest/aveyron';
            }
        }
    });
    // ======================== FIN CARTE DU SUD-OUEST ============================

    // ========================= CARTE DU SUD-OUEST MODAL =============================
    $('#sudouestmapmodal').vectorMap({
        map: 'sudouest_modal',
        hoverOpacity: 0.5,
        hoverColor: false,
        backgroundColor: "transparent",
        colors: couleursSudouestmodal,
        selectedColor: "#373737",
        enableZoom: true,
        showTooltip: false,


        /* Au clic de la souris */
        onRegionClick: function(element, code, region)
        {
            /* Conditions du textes cliquables ou non */
            if (
                region == "echelle"
                || region == "contour"
                || region == "villes"
                || region == "traces"
                || region == "aoc"
                || region == "villesmoyennes"
                || region == "routes"
                || region == "eau1"
                || region == "eau2"
                || region == "AOC Duras et Marmandais"
                || region == "AOC Irouléguy"
                || region == "AOC Cahors"
                || region == "AOC Brulhois"
                || region == "AOC Buzet"
                || region == "AOC Gaillac"
                || region == "Vins de Bellocq"
                || region == "Vins du Jurançon"
                || region == "AOC Quercy"
                || region == "Madiran"
                || region == "Vins de Saint-Mont"
                || region == "Vins de Tursan"
                || region == "AOC Tursan-Saint-Mont"
                || region == "AOC Saussignac"
                || region == "AOC Montbazillac"
                || region == "AOC Rosette"
                || region == "AOC Pecharmant"
                || region == "Vins du Haut Montravel"
                || region == "Vins des Côtes Montravel"
                || region == "AOC Montravel"
                || region == "AOC Villaudric"
                || region == "AOC Fronton"
                || region == "AOC Frontonnais"
            )
            {
                return false;
            }
            else if (
                region == "Vins de l'Entraygues et du Fel"
                || region == "Vins d'Estaing"
                || region == "Vins des Côtes de Millau"
                || region == "Vins de Marcillac"
            )
            {
                window.location.href = '/france/sud-ouest/aveyron';
            }
        }
    });
    // ======================== FIN CARTE DU SUD-OUEST MODAL ============================
});