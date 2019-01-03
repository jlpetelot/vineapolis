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

    <!-- Css carte -->
    <link href="{{ asset('css/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css" />

    <!-- Appel jQuery par Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery 1.11.2 local (LES AUTRES JQUERY NE FONCTIONNENT PAS) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>

    <!-- Css boostrap et perso -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="screen">

</head>

<body>
<!-- ========================== PAGE, DIV QUI CONTROLE TOUT LE DÉPLACEMENT DU SITE ================-->
<div id="page"><!-- page -->

    <!-- ======================================== MENU ====================================-->
    <div id="customnavbarouverte"><!-- Customnavbar -->
        <!-- ====================================== LOGO ==================================-->
        <div class="logo-box2">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ asset('img/logo.png') }}">
            </a>
        </div>
        <!-- ==================================== FIN LOGO ================================-->

        <!-- ====================================== MENU ==================================-->
        <div id="menu-box"><!-- menu-box -->
            <ul class="menu">
                <li><a href="{{ url('/') }}"
                    @if ($header == 'Vineapolis | Bienvenue')
                        class="active"
                    @endif
                    >Accueil</a>
                </li>
                </li>
                <li><a href="{{ route('touslesvins.recherche') }}"
                       @if ($header == 'Vineapolis | Tous les vins')
                       class="active"
                       @elseif($header == 'Vineapolis | Détail du vin')
                       class="active"
                            @endif
                    >Tous les vins</a>
                </li>
                <li><a href="{{ route('oenologie') }}"
                       @if ($header == 'Vineapolis | Oenologie')
                       class="active"
                            @endif
                    >Oenologie</a>
                </li>
                <li><a href="{{ route('newsletter') }}"
                       @if ($header == 'Vineapolis | Newsletter')
                       class="active"
                            @endif
                    >Newsletter</a>
                </li>
                <li><a href="{{ route('contact') }}"
                    @if ($header == 'Vineapolis | Contact') class="active"
                    @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                    @elseif ($header == 'Vineapolis | Contact Vigneron') class="active"
                    @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                    @endif
                    >Contact</a>
                </li>
            </ul>
        </div><!-- ../menu-box -->
        <a class="show-menu"></a>
        <!-- ======================================= FOOTER MENU ====================================-->
        <div id="header-foot"><!-- header-foot -->
            <div class="social-box"><!-- social-box -->
                <ul class="social-icons"><!-- social-icons -->
                    <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/user/Team8Tuto" target="_blank" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
                </ul><!-- ../social-icons -->
            </div><!-- ../social-box -->
        </div><!-- ../header-foot -->
        <!-- ===================================== FIN FOOTER MENU ===================================-->
    </div><!-- Fin Customnavbar -->
    <!-- =========================================== FIN MENU ========================================-->

    <!-- ======================================== MENU OUVERT ====================================-->
    <div id="menuouvert">
        <div id="customnavbar"><!-- Customnavbar -->
            <!-- =================================== CACHER LE MENU ==========================-->
            <a class="hide-menu" href="javascript:;"><i class="fa fa-long-arrow-left"></i></a>
            <!-- ================================= FIN CACHER LE MENU =========================-->
            <!-- ====================================== LOGO ==================================-->
            <div class="logo-box"><!-- logo-box -->
                <a href="{{ url('/') }}">
                    <img alt="" src="{{ asset('img/logo.png') }}"></a>
            </div><!-- ../logo-box -->
            <!-- ==================================== FIN LOGO ================================-->
            <!-- ====================================== MENU ==================================-->
            <div id="menu-box"><!-- menu-box -->
                <ul class="menu">
                    <li><a href="{{ url('/') }}"
                           @if ($header == 'Vineapolis | Bienvenue')
                           class="active"
                                @endif
                        >Accueil</a>
                    </li>
                    </li>
                    <li><a href="{{ route('touslesvins.recherche') }}"
                           @if ($header == 'Vineapolis | Tous les vins')
                           class="active"
                           @elseif($header == 'Vineapolis | Détail du vin')
                           class="active"
                                @endif
                        >Tous les vins</a>
                    </li>
                    <li><a href="{{ route('oenologie') }}"
                           @if ($header == 'Vineapolis | Oenologie')
                           class="active"
                                @endif
                        >Oenologie</a>
                    </li>
                    <li><a href="{{ route('newsletter') }}"
                           @if ($header == 'Vineapolis | Newsletter')
                           class="active"
                                @endif
                        >Newsletter</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                        @if ($header == 'Vineapolis | Contact') class="active"
                        @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                        @elseif ($header == 'Vineapolis | Contact Vigneron') class="active"
                        @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                        @endif
                        >Contact</a>
                    </li>
                </ul>
            </div><!-- ../menu-box -->
            <a href="javascript:;" class="show-menu active"><i class="fa fa-bars"></i></a>
            <!-- ======================================= FOOTER MENU ====================================-->
            <div id="header-foot"><!-- header-foot -->
                <div class="social-box"><!-- social-box -->
                    <ul class="social-icons"><!-- social-icons -->
                        <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/user/Team8Tuto" target="_blank" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
                    </ul><!-- ../social-icons -->
                </div><!-- ../social-box -->
            </div><!-- ../header-foot -->
            <!-- ===================================== FIN FOOTER MENU ===================================-->
        </div><!-- ../Customnavbar -->
    </div>
    <!-- ======================================== FIN MENU OUVERT ====================================-->

    <!-- ======================================== MENU PETITS ÉCRANS ====================================-->
    <!-- Fixed navbar -->
    <div id="menupetitecran">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}"
                            @if ($header == 'Vineapolis | Bienvenue')
                            class="active"
                            @endif
                            >Accueil</a>
                        </li>
                        </li>
                        <li><a href="{{ route('touslesvins.recherche') }}"
                            @if ($header == 'Vineapolis | Tous les vins')
                            class="active"
                            @elseif($header == 'Vineapolis | Détail du vin')
                            class="active"
                            @endif
                            >Tous les vins</a>
                        </li>
                        <li><a href="{{ route('oenologie') }}"
                            @if ($header == 'Vineapolis | Oenologie')
                            class="active"
                            @endif
                            >Oenologie</a>
                        </li>
                        <li><a href="{{ route('newsletter') }}"
                            @if ($header == 'Vineapolis | Newsletter')
                            class="active"
                            @endif
                            >Newsletter</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                            @if ($header == 'Vineapolis | Contact') class="active"
                            @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                            @elseif ($header == 'Vineapolis | Contact Vigneron') class="active"
                            @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                            @endif
                            >Contact</a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- ======================================== ../MENU PETITS ÉCRANS ====================================-->