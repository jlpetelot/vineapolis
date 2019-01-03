<!-- ============================ MODAL CARTE GOOGLE ==================================== -->
<div id="modalgoogle"><!-- Bloccarte Google -->
    <div class="modalgoogle-content-3emeniveau">
        <div class="row">
            <div class="col-md-12" id="modalentetegoogle"><!-- col-md-12 -->
                <div class="col-md-5 margehaute10px">
                    <h3 class="vert gras">
                        Tous les vins de la Côte Chalonnaise et Couchoise sur Google Map
                    </h3>
                    <div style="margin-top: -5px">Si la carte n'apparait pas, rafraîchissez votre navigateur avec votre clavier : Ctrl + r sur Windows et Cmd + r sur Mac.</div>
                </div>


                <div class="col-md-offset-6 col-md-1 margehaute10px">
                    <div class="col-md-offset-8 col-md-1">
                        <a class="modalggogle-close" href="#" title="Fermer la fenêtre">
                            <i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div><!-- ../col-md-12 -->
            <div class="col-md-12"><!-- col-md-12 -->
                <div id="cartegoogle"></div>
            </div><!-- ../col-md-12 -->
        </div>
    </div>
</div><!-- ../Bloccarte Google -->
<!-- ============================ ../MODAL CARTE GOOGLE ==================================== -->


<!-- ============================= GOOGLE MAP JL PETELOT 2017 ============================ -->
<script type="text/javascript">
    // window.onload oblige la page à se charger
    window.onload = function ()
    {
        /* LES LOCATIONS ET MARQUEURS */
        var domaine = '/img/marker.png';

        @foreach ($vins as $vin)
            var locations = [
                ['<h4>'+"{{ $vin->societe }}"+'</h4>'+
                '<div>'+"{{ $vin->adresse }}"+'</div>'+
                '<div>'+"Tél. : "+ "{{ $vin->telephone }}"+'</div>'+
                '<p>'+'</p>'+
                '<a href="{{ $vin->site }}" target="_blank">{{ $vin->site }}</a>',
                    {{ $vin->latlong }},
                    domaine
                ]
            ];
        @endforeach

        /* CARTE DE GOOGLE MAP */
        var map = new google.maps.Map(document.getElementById('cartegoogle'), {
            zoom: 12,
            center: new google.maps.LatLng(46.824756,4.722641),
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
                /* animation :google.maps.Animation.DROP, */
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