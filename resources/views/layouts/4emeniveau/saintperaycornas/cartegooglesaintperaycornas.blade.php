<!-- ============================ MODAL CARTE GOOGLE ==================================== -->
<div id="modalgoogle"><!-- Bloccarte Google -->
    <div class="modalgoogle-content-3emeniveau">
        <div class="row">
            <div class="col-md-12" id="modalentetegoogle"><!-- col-md-12 -->
                <div class="col-md-5 margehaute10px">
                    <h3 style="color: #c50051; font-weight: 700">
                        Vins de Saint-Peray et de Cornas
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
        var peray = "{{ asset('img/marker-chablis.png') }}";
        var cruschablis = "{{ asset('img/marker-cruschablis.png') }}";
        var gdscruschablis = "{{ asset('img/marker-gdscruschablis.png') }}";

        var locations = [
            ['<h4>'+"Domaine du Biguet"+'</h4>'+
            '<div>'+"Toulaud"+'</div>'+
            '<div>'+"Tél. : 04 75 40 49 44"+'</div>'+
            '<p>'+"07130 Saint-Peray"+'</p>'+
            '<a href="http://www.domainedubiguet.fr/" target="_blank">http://www.domainedubiguet.fr/</a>',
                44.9166029,
                4.8079548,
                peray
            ]
        ];

        /* CARTE DE GOOGLE MAP */
        var map = new google.maps.Map(document.getElementById('cartegoogle'), {
            zoom: 9,
            center: new google.maps.LatLng(44.9166029,4.807954),
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