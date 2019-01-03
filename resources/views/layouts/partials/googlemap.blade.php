<script type="text/javascript">
    // window.onload = function () {} permet de forcer le chargement de la carte
    window.onload = function ()
    {
        /* LES LOCATIONS ET MARQUEURS */
        var domaine = '/img/marker.png';

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

        /* CARTE DE GOOGLE MAP */
        var map = new google.maps.Map(document.getElementById('cartegoogle'), {
            zoom: {{ $vin->zoom }},
            center: new google.maps.LatLng({{ $vin->latlong }}),
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