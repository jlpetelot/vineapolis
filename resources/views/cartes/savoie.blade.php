@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.savoie.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Savoie</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/bugey.jpg') }}" alt="Savoie">
                        </div>
                        <a href="#modal" id="modal3emeniveau">
                            <i class="fa fa-eye" data-toggle="tooltip"
                               data-placement="left2" title="Voir les parcelles">
                            </i>
                        </a>
                        <!-- Fin carte -->
                        <!-- ======================== FIN CARTE ============================== -->

                        <!-- ======================= LE CONTENU ============================== -->
                        <div class="row"><!-- row -->
                            <div class="col-lg-12"><!-- col-lg-12 -->
                                <div class="cadrecarte1"><!-- cadrecarte1 -->
                                    <div class="emballage3emeniveau"><!-- détermine les padings -->

                                        <!-- ==================== LE CONTENU DES ONGLETS ========================-->
                                        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"><!-- bs-example -->
                                            <ul id="myTabs" class="nav nav-tabs" role="tablist"><!-- nav nav-tabs -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 1ER ONGLET - 1ÈRE NAVIGATION -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Vignoble de Savoie
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Vin de Savoie
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Roussette de Savoie
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                            <!-- 1ER TEXTE -->
                                            <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                <div class="row"><!-- row -->
                                                    <div class="col-lg-6"><!-- col-lg-6 -->
                                                        <ul class="commentairesonglets">
                                                            <div class="titre">Vignoble de Savoie</div>
                                                            <li>
                                                                <i class="fa fa-user"></i>
                                                                <span class="pad3px padright5px">Laura Gourault</span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                            </li>
                                                        </ul>
                                                        <h5 class="textetitre3">PRÉSENTATION</h5>
                                                        <p>
                                                            Le Vignoble de Savoie se situe dans les départements de la Savoie (28 communes) et de la Haute-Savoie (24 communes), avec également 2 communes dans l’Ain (Corbonod et Seyssel) et 1 commune dans l’Isère (Chapareillan).
                                                        </p>
                                                        <p>
                                                            Les crus blancs, Abymes et Apremont sont très réputés.
                                                        </p>
                                                    </div><!-- End col-lg-6 -->
                                                    <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                        <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                        <p>
                                                            &middot; Sols : marno-calcaires<br/>
                                                            &middot; Climat : tempéré océanique à tendance continentale et montagnarde<br/>
                                                            &middot; Production : rouges, blancs et effervescents<br/>
                                                            &middot; Cépages dominants : jacquier, roussanne, altesse, chasselas, gamay, poulsard et mondeuse<br/>
                                                            &middot; Superficie plantée : 2 200 hectares environ en 2012<br/>
                                                            &middot; Production en hectolitre : 121 000 hectolitres en 2010 (soit 16 millions de bouteilles)<br/>
                                                            &middot; Rendement à l’hectare : variable selon les appellations
                                                        </p>
                                                    </div><!-- End col-lg-6 -->
                                                </div><!-- End row -->
                                            </div>
                                            <!-- ../1ER TEXTE -->

                                            <!-- 2ND TEXTE -->
                                            <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab">
                                                <div class="row"><!-- row -->
                                                    <div class="col-lg-6"><!-- col-lg-6 -->
                                                        <ul class="commentairesonglets">
                                                            <div class="titre">Vin de Savoie</div>
                                                            <li>
                                                                <i class="fa fa-user"></i>
                                                                <span class="pad3px padright5px">Laura Gourault</span>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                            </li>
                                                        </ul>
                                                        <h5 class="textetitre3">PRÉSENTATION</h5>
                                                        <p>
                                                            Le Vin de Savoie (ou le Savoie) est un vin AOC produit dans le vignoble de Savoie-Bugey. L’appellation produit des vins blancs, rouges, rosé, pétillants et mousseux et couvre tout le Vignoble de Savoie.
                                                        </p>
                                                        <h5 class="textetitre3">CARACTÈRE</h5>
                                                        <p>
                                                            <span class="jaunefonce gras">Le blanc :</span><br/>
                                                            Bouche : puissante, dense et fruitée<br/>
                                                            Robe : jaune pale, reflets verts<br/>
                                                            Arômes : fleurs blanches, amande, noisette
                                                        </p>
                                                        <span class="rouge gras">Le rouge :</span><br/>
                                                        Bouche : puissante<br/>
                                                        Robe : pourpre, reflets violets<br/>
                                                        Arômes : fruits rouges et noirs, violette, épices
                                                        </p>
                                                        </p>
                                                        <span class="rosejura gras">Le mousseux :</span><br/>
                                                        Bouche : simple et frais
                                                        Arômes : fruités
                                                        </p>
                                                    </div><!-- End col-lg-6 -->
                                                    <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                        <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                        <p>
                                                            <span class="jaunefonce gras">Le blanc :</span><br/>
                                                            Température de service : 11 °C<br/>
                                                            Accords mets/vin : poissons<br/>
                                                            Temps de garde : 5 ans
                                                        </p>
                                                        </p>
                                                        <span class="rouge gras">Le rouge :</span><br/>
                                                        Température de service : 16 °C<br/>
                                                        Accords mets/vin : gibiers<br/>
                                                        Temps de garde : 5 ans
                                                        </p>
                                                        </p>
                                                        <span class="rosejura gras">Le mousseux :</span><br/>
                                                        Accords mets/vin : apéritifs
                                                        </p>
                                                        <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                        <p>
                                                            &middot; Désignation : Vin de Savoie<br/>
                                                            &middot; Appellation principale : Vin de Savoie<br/>
                                                            &middot; Vignoble : Savoie-Bugey<br/>
                                                            &middot; Sols : calcaire et morainiques<br/>
                                                            &middot; Climat : tempéré montagnard<br/>
                                                            &middot; Production : blancs (70 %), rouges, rosés, péHllants et mousseux<br/>
                                                            &middot; Cépages dominants : Jacquère, roussanne, altesse, chasselas, gamay et mondeuse<br/>
                                                            &middot; Superficie de production : 1 980 ha.<br/>
                                                            &middot; Production en hectolitre : 129 000 hl. environ<br/>
                                                            &middot; Rendement moyen : maximum 67 à 72 hl./ha en rouge, 71 à 78 hl./ha en rosé et blanc, 75 à 78 hl./ha. en pétillants et mousseux
                                                        </p>
                                                    </div><!-- End col-lg-6 -->
                                                </div><!-- End row -->
                                            </div>
                                            <!-- ../2ND TEXTE -->

                                                <!-- 3ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Roussette de Savoie</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Roussette de Savoie est un vin blanc sec AOC produit dans le vignoble de Savoie-Buggy dans les département de Savoie et de Haute-Savoie. L’appellation possède 4 dénominations géographiques différentes : les crus Frangy, Monthoux, Marestrel et Monterminod. Le vin blanc Roussette de Savoie est à cépage Altesse, ce dernier serait originaire de Thrace et aurait été ramené en France par Amédée VI au 14e siècle.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette de Savoie</span><br/>
                                                                Bouche : vive et franche<br/>
                                                                Robe : jaune clair, or paille<br/>
                                                                Arômes : miel, amande, noisette
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette de Savoie Marestrel</span><br/>
                                                                Bouche : ronde et ample<br/>
                                                                Robe : or pale, reflets dorés<br/>
                                                                Arômes : fruits confits et fruits secs
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette de Savoie Monthouxd</span><br/>
                                                                Bouche : souple et légère<br/>
                                                                Robe : jaune clair<br/>
                                                                Arômes : cire, fruits confits et fruits secs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette de Savoie</span><br/>
                                                                Température de service : 11 °C<br/>
                                                                Accords mets/vin : poissons<br/>
                                                                Temps de garde : à déguster dans sa jeunesse
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette de Savoie Marestrel</span><br/>
                                                                Température de service : 12 °C<br/>
                                                                Accords mets/vin : poularde sauce blanche<br/>
                                                                Temps de garde : plus de 5 ans
                                                            </p>
                                                            <span class="jaunefonce gras">Roussette de Savoie Virieu-le-Grand</span><br/>
                                                            Accords mets/vin : comté
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Roussette de Savoie<br/>
                                                                &middot; Appellation principale : Roussette de Savoie<br/>
                                                                &middot; Vignoble : Savoie-Bugey<br/>
                                                                &middot; Sols : calcaire et morainiques<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale et montagnarde<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépages dominants : Altesse<br/>
                                                                &middot; Superficie de production : 50 ha. environ<br/>
                                                                &middot; Production en hectolitre : 10 000 hl. environ<br/>
                                                                &middot; Rendement moyen : maximum 64 à 68 hl./ha.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- ../3ÈME TEXTE -->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================-->
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.savoie.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 style="color: #f29100; font-weight: 700;">Vins de Savoie</h3>
                        </div>
                        <div class="col-md-5 margehaute15px">
                            Agrandissez la carte avec les boutons + et -,
                            puis naviguez dans celle-ci en cliquant/déplacant votre souris.
                        </div>
                        <div class="col-md-offset-1 col-md-1 margehaute10px">
                            <div class="col-md-offset-8 col-md-1">
                                <a class="modal-close" href="#" title="Fermer la fenêtre">
                                    <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- ../col-md-12 -->
                    <div class="col-md-12"><!-- col-md-12 -->
                        <div id="savoiemapmodal"></div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL GRANDE CARTE  ===================================-->

        @include('layouts.cartegoogle.googlemap')

                <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->
        <div class="col-md-12" id="presenceicons"><!-- col-md-12 -->
            <ul class="petits-sociaux-icons"><!-- social-icons -->
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
            </ul><!-- ../social-icons -->
        </div><!-- ../col-md-12 -->
        <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->

    </div><!-- ../row -->
</div><!-- ../container -->
<!-- ================================================ FIN DIV PAGE =========================================-->
</div><!-- ../page -->
<!-- ========================================== APPELS JAVASCRIPTS ====================================-->
<!-- L' appel javascripts de la carte principale -->
<script src="{{ asset('js/jquery.vmap.js') }}" type="text/javascript"></script>
<!-- js Boostrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js site -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->


</body>

</html>
@include('layouts.4emeniveau.savoie.appelsjssavoie')

@include('layouts.4emeniveau.footer')
