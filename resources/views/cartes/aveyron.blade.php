@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.aveyron.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de l'Aveyron</h3>
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
                            <img src="{{ asset('img/aveyron.jpg') }}" alt="Auvergne">
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
                                                        Côtes-de-Millau
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Entraygues-le-Fel
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Estaing
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME  ONGLET -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Marcillac
                                                    </a>
                                                </li>
                                                <!-- ../4ÈME  ONGLET -->

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
                                                                                <h5>Côtes-de-Millau</h5>
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
                                                                                    Le Côtes-de-Millau est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le departement de l’Aveyron.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : dense et généreuse<br/>
                                                                                    Robe : grenat soutenu<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, poivre<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : rafraichissante<br/>
                                                                                    Robe : rose soutenu<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : dense<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : notes florales
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
                                                                                    Accords mets/vins : gibiers<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : dans les 2 ans<br/>
                                                                                    Accords mets/vins : apéritif ou barbecue<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : fruits de mer
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-de-Millau<br/>
                                                                                    &middot; Appellation principale : Côtes-de-Millau<br/>
                                                                                    &middot; Vignoble : du Sud-Ouest<br/>
                                                                                    &middot; Superficie plantée : 50 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 2 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé avec influence montagnarde et océanique<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : syrah, cabernet sauvignon, fer servadou, mauzac, chenin<br/>
                                                                                    &middot; Rendement moyen : maximum 40 hl/ha.
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
                                                                                <h5>Entraygues-le-Fel</h5>
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
                                                                                    Le Entraygues-le-Fel est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le département de l’Aveyron, autour de la commune d’Entraygues-sur-Truyère.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : rustique<br/>
                                                                                    Robe : rouge profond<br/>
                                                                                    Arômes : fruits noirs<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : ronde et vivace<br/>
                                                                                    Robe : rose saumon<br/>
                                                                                    Arômes : petits fruits rouges<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : notes florales miel
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

                                                                                    Rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : poissons d’eau douce
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Entraygues-le-Fel<br/>
                                                                                    &middot; Appellation principale : Entraygues-le-Fel<br/>
                                                                                    &middot; Vignoble : du Sud-Ouest<br/>
                                                                                    &middot; Superficie plantée : 20 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 900 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé à tendance méditerranéenne et montagnarde<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : mauzac, chenin, cabernet franc, cabernet sauvignon, fer servadou<br/>
                                                                                    &middot; Rendement moyen : maximum 45 hl./ha.
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
                                                                                <h5>Estaing</h5>
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
                                                                                    L'Estaing est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le département de l’Aveyron. C’est l’une des plus petits vins AOC de France en superficie.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : simple et rustique<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : ronde et légère<br/>
                                                                                    Robe : rose saumon<br/>
                                                                                    Arômes : petits fruits rouges<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : floral, minéral, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vins : volailles, viandes rouges<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : fruits de mer, poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Estaing<br/>
                                                                                    &middot; Appellation principale : Estaing<br/>
                                                                                    &middot; Vignoble : du Sud-Ouest<br/>
                                                                                    &middot; Superficie plantée : 14 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 500 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé à tendance méditerranéenne et montagnarde<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : mauzac, chenin, gamay, pinot noir, cabernet franc, cabernet sauvignon, fer servadou, merlot, jurançon noir, abouriou, negret de banhars<br/>
                                                                                    &middot; Rendement moyen : maximum 50 hl./ha.
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

                                                <!-- ======================= TEXTE 4 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet4" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Marcillac</h5>
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
                                                                                    Le Marcillac est un vin rouge ou rosé AOC produit dans le Vignoble du Sud-Ouest, dans l’Aveyron, autour de la commune de Marcillac-Vallon.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>
                                                                                    Rouges :<br/>
                                                                                    Bouche : rustique et robuste
                                                                                    Robe : grenat profond
                                                                                    Arômes : fruits rouges et noirs, épices<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : ronde et fruitée<br/>
                                                                                    Robe : rose soutenu<br/>
                                                                                    Arômes : fruits rouges acidulés
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
                                                                                    Accords mets/vins : grillades, charcuterie<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : rillette
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Marcillac<br/>
                                                                                    &middot; Appellation principale : Marcillac<br/>
                                                                                    &middot; Vignoble : du Sud-Ouest<br/>
                                                                                    &middot; Superficie plantée : 161 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 500 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé avec influence montagnarde et méditerranéenne<br/>
                                                                                    &middot; Vins produits : rouges, rosés<br/>
                                                                                    &middot; Cépages dominants : fer servadou<br/>
                                                                                    &middot; Rendement moyen : 50 hl./ha.
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
                                                <!-- ===================== TEXTE 4 ============================-->

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
                @include('layouts.4emeniveau.aveyron.droite')
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
                            <h3 class="gras mapecran" style="color: #c50051">Vins de l'Aveyron</h3>
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
                        <div id="aveyronmapmodal"></div>
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
@include('layouts.4emeniveau.aveyron.appelsjsaveyron')

@include('layouts.4emeniveau.footer')
