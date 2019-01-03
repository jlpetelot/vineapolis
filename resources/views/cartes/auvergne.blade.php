@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.auvergne.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins d'Auvergne</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/auvergne.jpg') }}" alt="Auvergne">
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

                                                <!-- 1ER ONGLET -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Saint-Pourçain
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Côtes-d’Auvergne
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Côte-Roannaise
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME  ONGLET -->


                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- ======================= TEXTE 1 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Saint-Pourçain</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Saint-Pourçain est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, dans l’Allier sur la commune de Saint-Pourçain-sur-Sioule.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : ronde et souple<br/>
                                                                                    Robe : rouge cerise<br/>
                                                                                    Arômes : fruits rouges, épices, violette, poivre, pivoine<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : vive<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fruits rouges, épices<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : longue et fruitée<br/>
                                                                                    Robe : jeune pâle<br/>
                                                                                    Arômes : agrumes, fleurs blanches<br/><br/>
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Température de service : 14 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : charcuterie<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vins : poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : saint-pourçain<br/>
                                                                                    &middot; Appellation principale : saint-pourçain<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 640 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 30 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : pinot noir, sauvignon, gamay, chardonnay, sacy<br/>
                                                                                    &middot; Rendement moyen : 55 à 66 hl./ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 1 ============================-->

                                                <!-- ======================= TEXTE 2 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Côtes-d’Auvergne</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Côtes-d’Auvergne est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, dans le Puy-de-Dôme.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : équilibrée et profonde<br/>
                                                                                    Robe : rubis profond<br/>
                                                                                    Arômes : venaison, fruits rouges<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : gourmande<br/>
                                                                                    Robe : rose soutenue<br/>
                                                                                    Arômes : fruits exotiques, agrumes<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : dense et fraîche<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fleurs blanches, fruits à chair blanche<br/><br/>
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : viandes rouges<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 13 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : fruits de mer, poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : côtes-d’auvergne<br/>
                                                                                    &middot; Appellation principale : côtes-d’auvergne<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 410 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 13 930 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé sous influence montagnarde<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : gamay, pinot noir, chardonnay<br/>
                                                                                    &middot; Rendement moyen : 55 à 65 hl./ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 2 ============================-->

                                                <!-- ======================= TEXTE 3 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Côte-Roannaise</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Côte-Roannaise est un vin rouge ou rosé AOC produit dans le Vignoble de la Loire, autour de la ville de Roanne.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : gourmande et équilibrée<br/>
                                                                                    Robe : cerise<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, venaison<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : douce<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : fruits à chair blanche, fruits exotiques<br/><br/>
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Température de service : 14 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : charcuteries<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : apéritif
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : côte-roannaise<br/>
                                                                                    &middot; Appellation principale : côte-roannaise<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 210 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 11 000 hl. Env.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé sous influence montagnarde<br/>
                                                                                    &middot; Vins produits : rouges et rosés<br/>
                                                                                    &middot; Cépages dominants : gamay<br/>
                                                                                    &middot; Rendement moyen : 55 à 66 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 3 ============================-->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================ -->
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.auvergne.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5">
                            <h3 class="jaunechampagne gras mapecran">Vins d'Auvergne</h3>
                        </div>
                        <div class="col-md-5 margehaute15px textemodal">
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
                        <div id="auvergnemapmodal"></div>
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
@include('layouts.4emeniveau.auvergne.appelsjsauvergne')

@include('layouts.4emeniveau.footer')
