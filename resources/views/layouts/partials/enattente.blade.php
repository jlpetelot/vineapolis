<!-- ================================== GOOGLE MAP ========================================-->
<div class="col-md-8"><!-- col-md-8 -->
    <div id="cartegooglecontact"></div>
</div><!-- ../col-md-8 -->
<!-- ================================= FIN GOOGLE MAP =======================================-->

<!-- =========================== FIN GOOGLE MAP JL PETELOT 2017 ========================== -->
<script type="text/javascript">
    // window.onload oblige la page à se charger
    window.onload = function ()
    {
        /* LES LOCATIONS ET MARQUEURS */
        var icone = '/img/logogooglemap.png';

        var locations = [
            ['<h4>'+"Vineapolis"+'</h4>'+
            '<div>'+"9, rue des Lions"+'</div>'+
            '<p>'+"89170 Saint-Fargeau"+'</p>'+
            '<div>'+"03 86 74 11 85"+'</div>',
                47.6401907,3.07225,
                icone
            ]
        ];

        /* CARTE DE GOOGLE MAP */
        var map = new google.maps.Map(document.getElementById('cartegooglecontact'), {
            zoom: 10,
            center: new google.maps.LatLng(47.6401907,3.07225),
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL,
                position: google.maps.ControlPosition.TOP_RIGHT
            },
            scaleControl: true,
            streetViewControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        /* INITIALISATION DE GOOGLE MAP ET ANIMATION */
        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                animation :google.maps.Animation.DROP,
                icon : locations[i][3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>
<!-- =========================== FIN GOOGLE MAP JL PETELOT 2017 ========================== -->