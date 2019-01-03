<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Compatibilité -->
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- TITRE DU SITE -->
    <title>
        @if (empty(Auth::user()->name))
            {{ $header }}
        @else
            {{ Auth::user()->name }}, connecté
        @endif
    </title>

    <!-- Métadonnées -->
    <meta name="Madinici" content="Jean-Luc Petelot" />
    <meta name="copyright" content="https://www.madinici.org" />
    <meta name="description" content="Phrase qui décrit l'activité" />
    <meta name="keywords" content="Les mots clés séparés par des virgules" />

    <!-- Le favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Fonts awavesome -->
    <script src="https://use.fontawesome.com/09469ca861.js"></script>

    <!-- L'url de l'api de Google (sensor dut true permet d'utiliser la géolocalisation) -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp19-Unh1wLi0eR0LX_V5gEI6a8FUb4iY&callback=initMap" type="text/javascript"></script>

    <!-- Appel jQuery par Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery 1.11.2 local (LES AUTRES JQUERY NE FONCTIONNENT PAS) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>

    <!-- Css boostrap et perso -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" media="screen">

    <!-- CSS GRANDE CARTE -->
    <link href="{{ asset('css/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />

</head>

<body>