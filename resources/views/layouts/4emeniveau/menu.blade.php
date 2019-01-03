<!-- ========================== PAGE, DIV QUI CONTROLE TOUT LE DÉPLACEMENT DU SITE ================-->
<div id="page"><!-- page -->

    <!-- ======================================== MENU ====================================-->
    <div id="customnavbarouverte"><!-- Customnavbar -->
        <!-- ====================================== LOGO ==================================-->
        <div class="logo-box2">
            <a href="{{ url('/') }}">
                <img alt="" src="{{ asset('img/logo.png') }}">
            </a>
        </div>
        <!-- ==================================== FIN LOGO ================================-->

        <!-- ====================================== MENU ==================================-->
        <div id="menu-box"><!-- menu-box -->
            <ul class="menu">
                <li><a href="{{ url('/') }}"
                    @if (
                    $header == 'Vineapolis | Bienvenue'
                    || $header == 'Vineapolis | Champagnes Montagne-de-Reims'
                    || $header == 'Vineapolis | Champagnes de la Vallee de la Marne'
                    || $header == 'Vineapolis | Corse'
                    || $header == 'Vineapolis | Gevrey-Chambertin'
                    || $header == 'Vineapolis | Chablis Grands Crus'
                    || $header == 'Vineapolis | Côte Chalonnaise'
                    || $header == 'Vineapolis | Aloxe-Corton'
                    || $header == 'Vineapolis | Vins et Grands Crus de Beaune'
                    || $header == 'Vineapolis | Volnay'
                    || $header == 'Vineapolis | Pommard'
                    || $header == 'Vineapolis | Chassagne-Montrachet'
                    || $header == 'Vineapolis | Puligny-Montrachet'
                    || $header == 'Vineapolis | Vougeot'
                    || $header == 'Vineapolis | Chambolle-Musigny'
                    || $header == 'Vineapolis | Vosne-Romanée'
                    || $header == 'Vineapolis | Nuits-Saint-Georges'
                    || $header == 'Vineapolis | Mâcon'
                    || $header == "Vineapolis | Vins d'Alsace"
                    || $header == "Vineapolis | Vins du Beaujolais"
                    || $header == "Vineapolis | Vins de Lorraine"
                    || $header == "Vineapolis | Vins de Pouilly"
                    || $header == "Vineapolis | Vins de Sancerre et Menetou-Salon"
                    || $header == "Vineapolis | Vins de Quincy et Reuilly"
                    || $header == "Vineapolis | Vins de Saumur-Champigny"
                    || $header == "Vineapolis | Vins d'Auvergne"
                    || $header == "Vineapolis | Cognac"
                    || $header == "Vineapolis | Vins de Margaux"
                    || $header == "Vineapolis | Vins de Moulis et Listrac"
                    || $header == "Vineapolis | Vins de Pauilac"
                    || $header == "Vineapolis | Vins de Saint-Estèphe"
                    || $header == "Vineapolis | Vins de Saint-Julien"
                    || $header == "Vineapolis | Vins de Pessac-Léognan"
                    || $header == "Vineapolis | Vins de Pomerol"
                    || $header == "Vineapolis | Vins de Saint-Émilion"
                    || $header == "Vineapolis | Vins de Sauternes"
                    || $header == "Vineapolis | Vins du Jura"
                    || $header == "Vineapolis | Vins du Languedoc-Roussillon"
                    || $header == "Vineapolis | Vins de Provence"
                    || $header == "Vineapolis | Vins de Saint-Peray et Cornas"
                    || $header == "Vineapolis | Côtes du Rhône Méridional"
                    || $header == "Vineapolis | Vins de Bugey"
                    || $header == "Vineapolis | Vins de Savoie"
                    || $header == "Vineapolis | Vins de l'Aveyron"
                    || $header == "Vineapolis | Armagnac"
                    )
                        class="active"
                    @endif
                    >Accueil</a>
                </li>
                <li><a href="{{ route('touslesvins.recherche') }}"
                    @if ($header == 'Vineapolis | Tous les vins')
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
                <li>
                   <a href="{{ route('contact') }}"
                   @if ($header == 'Vineapolis | Contact') class="active"
                   @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                   @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                   @endif>
                   Contact</a>
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
                       @if (
                       $header == 'Vineapolis | Bienvenue'
                       || $header == 'Vineapolis | Champagnes Montagne-de-Reims'
                       || $header == 'Vineapolis | Champagnes de la Vallee de la Marne'
                       || $header == 'Vineapolis | Corse'
                       || $header == 'Vineapolis | Gevrey-Chambertin'
                       || $header == 'Vineapolis | Chablis Grands Crus'
                       || $header == 'Vineapolis | Côte Chalonnaise'
                       || $header == 'Vineapolis | Aloxe-Corton'
                       || $header == 'Vineapolis | Vins et Grands Crus de Beaune'
                       || $header == 'Vineapolis | Volnay'
                       || $header == 'Vineapolis | Pommard'
                       || $header == 'Vineapolis | Chassagne-Montrachet'
                       || $header == 'Vineapolis | Puligny-Montrachet'
                       || $header == 'Vineapolis | Vougeot'
                       || $header == 'Vineapolis | Chambolle-Musigny'
                       || $header == 'Vineapolis | Vosne-Romanée'
                       || $header == 'Vineapolis | Nuits-Saint-Georges'
                       || $header == 'Vineapolis | Mâcon'
                       || $header == "Vineapolis | Vins d'Alsace"
                       || $header == "Vineapolis | Vins du Beaujolais"
                       || $header == "Vineapolis | Vins de Lorraine"
                       || $header == "Vineapolis | Vins de Pouilly"
                       || $header == "Vineapolis | Vins de Sancerre et Menetou-Salon"
                       || $header == "Vineapolis | Vins de Quincy et Reuilly"
                       || $header == "Vineapolis | Vins de Saumur-Champigny"
                       || $header == "Vineapolis | Vins d'Auvergne"
                       || $header == "Vineapolis | Cognac"
                       || $header == "Vineapolis | Vins de Margaux"
                       || $header == "Vineapolis | Vins de Moulis et Listrac"
                       || $header == "Vineapolis | Vins de Pauilac"
                       || $header == "Vineapolis | Vins de Saint-Estèphe"
                       || $header == "Vineapolis | Vins de Saint-Julien"
                       || $header == "Vineapolis | Vins de Pessac-Léognan"
                       || $header == "Vineapolis | Vins de Pomerol"
                       || $header == "Vineapolis | Vins de Saint-Émilion"
                       || $header == "Vineapolis | Vins de Sauternes"
                       || $header == "Vineapolis | Vins du Jura"
                       || $header == "Vineapolis | Vins du Languedoc-Roussillon"
                       || $header == "Vineapolis | Vins de Provence"
                       || $header == "Vineapolis | Vins de Saint-Peray et Cornas"
                       || $header == "Vineapolis | Côtes du Rhône Méridional"
                       || $header == "Vineapolis | Vins de Bugey"
                       || $header == "Vineapolis | Vins de Savoie"
                       || $header == "Vineapolis | Vins de l'Aveyron"
                       || $header == "Vineapolis | Armagnac"
                       )
                            class="active"
                       @endif
                        >Accueil</a>
                    </li>
                    <li><a href="{{ route('touslesvins.recherche') }}"
                        @if ($header == 'Vineapolis | Tous les vins')
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
                    <li>
                        <a href="{{ route('contact') }}"
                       @if ($header == 'Vineapolis | Contact') class="active"
                       @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                       @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                       @endif>
                       Contact</a>
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
                            @if (
                           $header == 'Vineapolis | Bienvenue'
                           || $header == 'Vineapolis | Champagnes Montagne-de-Reims'
                           || $header == 'Vineapolis | Champagnes de la Vallee de la Marne'
                           || $header == 'Vineapolis | Corse'
                           || $header == 'Vineapolis | Gevrey-Chambertin'
                           || $header == 'Vineapolis | Chablis Grands Crus'
                           || $header == 'Vineapolis | Côte Chalonnaise'
                           || $header == 'Vineapolis | Aloxe-Corton'
                           || $header == 'Vineapolis | Vins et Grands Crus de Beaune'
                           || $header == 'Vineapolis | Volnay'
                           || $header == 'Vineapolis | Pommard'
                           || $header == 'Vineapolis | Chassagne-Montrachet'
                           || $header == 'Vineapolis | Puligny-Montrachet'
                           || $header == 'Vineapolis | Vougeot'
                           || $header == 'Vineapolis | Chambolle-Musigny'
                           || $header == 'Vineapolis | Vosne-Romanée'
                           || $header == 'Vineapolis | Nuits-Saint-Georges'
                           || $header == 'Vineapolis | Mâcon'
                           || $header == "Vineapolis | Vins d'Alsace"
                           || $header == "Vineapolis | Vins du Beaujolais"
                           || $header == "Vineapolis | Vins de Lorraine"
                           || $header == "Vineapolis | Vins de Pouilly"
                           || $header == "Vineapolis | Vins de Sancerre et Menetou-Salon"
                           || $header == "Vineapolis | Vins de Quincy et Reuilly"
                           || $header == "Vineapolis | Vins de Saumur-Champigny"
                           || $header == "Vineapolis | Vins d'Auvergne"
                           || $header == "Vineapolis | Cognac"
                           || $header == "Vineapolis | Vins de Margaux"
                           || $header == "Vineapolis | Vins de Moulis et Listrac"
                           || $header == "Vineapolis | Vins de Pauilac"
                           || $header == "Vineapolis | Vins de Saint-Estèphe"
                           || $header == "Vineapolis | Vins de Saint-Julien"
                           || $header == "Vineapolis | Vins de Pessac-Léognan"
                           || $header == "Vineapolis | Vins de Pomerol"
                           || $header == "Vineapolis | Vins de Saint-Émilion"
                           || $header == "Vineapolis | Vins de Sauternes"
                           || $header == "Vineapolis | Vins du Jura"
                           || $header == "Vineapolis | Vins du Languedoc-Roussillon"
                           || $header == "Vineapolis | Vins de Provence"
                           || $header == "Vineapolis | Vins de Saint-Peray et Cornas"
                           || $header == "Vineapolis | Côtes du Rhône Méridional"
                           || $header == "Vineapolis | Vins de Bugey"
                           || $header == "Vineapolis | Vins de Savoie"
                           || $header == "Vineapolis | Vins de l'Aveyron"
                           || $header == "Vineapolis | Armagnac"
                           )
                               class="active"
                           @endif
                            >Accueil</a>
                        </li>
                        <li><a href="{{ route('touslesvins.recherche') }}"
                               @if ($header == 'Vineapolis | Tous les vins')
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
                        <li>
                            <a href="{{ route('contact') }}"
                            @if ($header == 'Vineapolis | Contact') class="active"
                            @elseif ($header == 'Vineapolis | Contact Vignerons') class="active"
                            @elseif ($header == 'Vineapolis | Contact Annonceurs') class="active"
                            @endif>
                            Contact</a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- ======================================== ../MENU PETITS ÉCRANS ====================================-->