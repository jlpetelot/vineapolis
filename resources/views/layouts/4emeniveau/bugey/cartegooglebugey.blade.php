<!-- ============================ MODAL CARTE GOOGLE ==================================== -->
<div id="modalgoogle"><!-- Bloccarte Google -->
    <div class="modalgoogle-content-3emeniveau">
        <div class="row">
            <div class="col-md-12" id="modalentetegoogle"><!-- col-md-12 -->
                <div class="col-md-5 margehaute10px">
                    <h3 class="vert gras">
                        Tous vos vins de Bugey sur Google Map
                    </h3>
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
        var bugey = "{{ asset('img/marker-chablis.png') }}";

        var locations = [
            ['<h4>'+"Martine et Bernard Mollex"+'</h4>'+
            '<div>'+"Clos d'Arvières - 131, chemin de la cascade"+'</div>'+
            '<div>'+"Tél. : +33 (0)4 50 56 10 02"+'</div>'+
            '<p>'+"01 420 Syssel-Corbonod"+'</p>'+
            '<a href="http://www.vinsalsace.com/fr/" target="_blank">http://www.vinsalsace.com/fr/  </a>',
                45.9747692,
                5.8180872,
                bugey
            ]
        ];

        /* CARTE DE GOOGLE MAP */
        var map = new google.maps.Map(document.getElementById('cartegoogle'), {
            zoom: 10,
            center: new google.maps.LatLng(45.9747692,5.8180872),
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