<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Compatibilité -->
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>
        @if (empty(Auth::user()->name))
            {{ $header }}
        @else
            {{ Auth::user()->name }} connecté
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

    <!-- Css carte -->
    <link href="{{ asset('css/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />

    <!-- Appel jQuery par Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery 1.11.2 local (LES AUTRES JQUERY NE FONCTIONNENT PAS) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>

    <!-- Css boostrap et perso -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="screen">


    @if ($header == "Vineapolis | Bienvenue")
        <script type="text/javascript">
            $('#barre').css('box-shadow', 'none');

            $(document).ready(function()
            {
                temps1 = setTimeout(chargement, 2500);
                temps2 = setTimeout(dechargement, 15000);
            });
            function chargement () {
                //au chargement de la page je règle le marginTop de #barre à 0 (il etait fixé à -50px dans le css) en 500ms
                $('#barre').animate({
                    marginTop: "0"
                }, 500);
                //au clic sur #fermer qui est la croix j'anime le marginTop de #barre à -35px pour le faire remonter et laisser le border bottom apparent
                $("#fermer").mousedown(function() {
                    $('#barre').animate({
                        marginTop: "-60px"
                    }, 500);
                });
            }
            function dechargement () {
                //au chargement de la page je règle le marginTop de #barre à 0 (il etait fixé à -50px dans le css) en 500ms
                $('#barre').animate({
                    marginTop: "-60px"
                }, 500);
                $('#afficherletrait').fadeIn();
                $('#fermer').fadeOut();
                clearTimeout(temps1);
                clearTimeout(temps2);
            }
        </script>
        <style>
            #barre {
                width: 100%;
                position: fixed;
                z-index: 9999;
                background: rgba(153,153,51,0.9);
                padding:10px 0;
                text-align: center;
                font-size:12px;
                margin-top:-50px;
                color: #ccc;
                box-shadow: 0px 3px 5px rgba(17,17,17,0.9);
            }
            #fermer { display: block; cursor: pointer; margin-right:20px; float:right; margin-top: -10px; }
            .fa-times { color: #ccc; }
            a.annonce { color: #fff; font-weight: normal; }
            a.annonce:hover { color: #7a143d; }
        </style>
        <div id="barre">
            Vous élaborez des vins de qualité,
            faites-les mieux connaître et multipliez vos ventes avec VINEAPOLIS <small>&reg;</small> :
            <a href="{{ route('annonceurs') }}" class="annonce">je deviens annonceur</a>
            <div id="fermer">
                <i class="fa fa-times fa-3x" aria-hidden="true"></i>
            </div>
        </div>
    @endif

</head>



<!-- Preloader -->
<div id="preloader"><img src="{{ asset('img/preloader.gif') }}" alt="" /></div>
<!-- ../Preloader -->
<!-- Preloader hide -->
<div class="preloader_hide"></div>
<!-- ../Preloader hide -->