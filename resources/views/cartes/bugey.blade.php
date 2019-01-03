@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.bugey.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Bugey</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins d'Alsace sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/bugey.jpg') }}" alt="Alsace">
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
                                                        Bugey
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Roussette du Bugey
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Seyssel
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
                                                                <div class="titre">Bugey</div>
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
                                                                Le Bugey est un vin AOC produit dans le vignoble de Savoie-Buggy dans le département de l’Ain. Majoritairement blancs ou pétillant, l’appellation produit également des vins rouges.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rougesombre gras">Les rouges</span><br/>
                                                                Bouche : puissante<br/>
                                                                Robe : pourpre à reflets violets<br/>
                                                                Arômes : fruits rouges, épices
                                                            </p>
                                                            <p>
                                                                <span class="jaunechampagne gras">Les blancs</span><br/>
                                                                Bouche : souple et légère<br/>
                                                                Robe : jaune or<br/>
                                                                Arômes : noiseTe, amande, acacia, poire, abricot
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Les mousseux</span><br/>
                                                                Bouche : harmonieuse, bulles fines<br/>
                                                                Robe : jaune pâle
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rougesombre gras">Les rouges</span><br/>
                                                                Température de service : 13°C<br/>
                                                                Accords mets/vin : gibiers en sauce
                                                            </p>
                                                            <p>
                                                                <span class="jaunechampagne gras">Les blancs</span><br/>
                                                                Température de service : 10 °C<br/>
                                                                Accords mets/vin : poissons en sauce, fruits de mer<br/>
                                                                Temps de garde : maximum 2 ans
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Les blancs</span><br/>
                                                                Température de service : 6 °C<br/>
                                                                Accords mets/vin : apéritif<br/>
                                                                Temps de garde : 5 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Bugey<br/>
                                                                &middot; Appellation principale : Bugey<br/>
                                                                &middot; Vignoble : Savoie-Bugey<br/>
                                                                &middot; Sols : calcaire et morainiques<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale et montagnarde<br/>
                                                                &middot; Production : mousseux et pétillant (51 %), blancs (40 %) et rouges (9 %)<br/>
                                                                &middot; Cépages dominants : Chardonnay, altesse, moleTe, jacquère, pinot noir, gamay, mondeuse et poulsard<br/>
                                                                &middot; Superficie de production : 490 ha. environ en 2009<br/>
                                                                &middot; Production en hectolitre : 30 335 hl. environ<br/>
                                                                &middot; Rendement moyen : variant selon les types de vins, de 53 à 71 hl./ha.
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
                                                                <div class="titre">Roussette du Bugey</div>
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
                                                                Le Roussette du Bugey est un vin blanc sec AOC produit dans le vignoble de Savoie-Bugey. L’appellation possède 2 dénominations géographiques différentes : la Roussette du Bugey Montagnieu et la Roussette du Bugey Virieu-le-grand. Le vin blanc Roussette du Bugey est à cépage Altesse (aussi connu sous le nom de rousette), ce dernier serait originaire de Thrace et aurait été ramené en France par Amédée VI au 14e siècle.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette du Bugey</span><br/>
                                                                Bouche : attaque vive<br/>
                                                                Robe : jaune paille<br/>
                                                                Arômes : fleurs blanches
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette du Bugey Montagnieu</span><br/>
                                                                Bouche : fraîche et structurée<br/>
                                                                Robe : jaune paille<br/>
                                                                Arômes : floraux et minéral
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette du Bugey Virieu-le-Grand</span><br/>
                                                                Robe : jaune paille<br/>
                                                                Arômes : truffe, fruits confits et fruits secs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette du Bugey</span><br/>
                                                                Température de service : 11 °C<br/>
                                                                Accords mets/vin : poissons, fruits de mer<br/>
                                                                Temps de garde : à déguster dans les 3 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaunefonce gras">Roussette du Bugey Montagnieu</span><br/>
                                                                Température de service : 11 °C<br/>
                                                            </p>
                                                            <span class="jaunefonce gras">Roussette du Bugey Virieu-le-Grand</span><br/>
                                                            Accords mets/vin : volaille de bresse, comté<br/>
                                                            Temps de garde : facilement plus de 5 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Roussette du Bugey<br/>
                                                                &middot; Appellation principale : Roussette du Bugey<br/>
                                                                &middot; Vignoble : Savoie-Bugey<br/>
                                                                &middot; Sols : calcaire et morainiques<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale et montagnarde<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépages dominants : Altesse<br/>
                                                                &middot; Superficie de production : 22 ha. environ<br/>
                                                                &middot; Production en hectolitre : 992 hl. environ<br/>
                                                                &middot; Rendement moyen : maximum 59 à 65 hl./ha.
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
                                                                <div class="titre">Seyssel</div>
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
                                                                Le Seyssel est un vin blanc AOC produit dans le vignoble de Savoie-Bugey. L’appellaGon produit des vins blancs secs ou des mousseux.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Seyssel</span><br/>
                                                                Bouche : dense et gras<br/>
                                                                Robe : or pale<br/>
                                                                Arômes : Glleul, violeNe, poire, pêche
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Seyssel mousseux</span><br/>
                                                                Bouche : bulles fines, équilibré<br/>
                                                                Robe : jaune très pâle<br/>
                                                                Arômes : floraux, fruits à chair blanche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaunefonce gras">Seyssel</span><br/>
                                                                Température de service : 8 à 10 °C<br/>
                                                                Accords mets/vin : boudin blanc, fondues, diots, écrevisses, viandes blanches, fromages<br/>
                                                                Temps de garde : 2 à 3 ans
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Seyssel mousseux</span><br/>
                                                                Température de service : 1 °C<br/>
                                                                Accords mets/vin : desserts, apériGfs<br/>
                                                                Temps de garde : peut-être dégusté dès sa production
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Seyssel<br/>
                                                                &middot; Appellation principale : Seyssel<br/>
                                                                &middot; Vignoble : Savoie-Bugey<br/>
                                                                &middot; Sols : calcaire et morainiques<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale et montagnarde<br/>
                                                                &middot; Production : blancs et mousseux<br/>
                                                                &middot; Cépages dominants : Altesse<br/>
                                                                &middot; Production en hectolitre : 2 500 hl. environ<br/>
                                                                &middot; Rendement moyen : maximum 58 à 62 hl./ha en blanc, 75 à 78 hl./ha en mousseux
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
                @include('layouts.4emeniveau.bugey.droite')
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
                            <h3 style="color: #f29100; font-weight: 700;">Vins de Bugey</h3>
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
                        <div id="bugeymapmodal"></div>
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
@include('layouts.4emeniveau.bugey.appelsjsbugey')

@include('layouts.4emeniveau.footer')
