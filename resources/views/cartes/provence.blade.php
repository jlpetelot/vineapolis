@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.provence.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Provence</h3>
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
                            <img src="{{ asset('img/provence.jpg') }}" alt="Saumur">
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
                                                        Vignoble de Provence
                                                    </a>
                                                </li>
                                                <!-- FIN 1ER ONGLET -->

                                                <!-- 2ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Côtes de Provence
                                                    </a>
                                                </li>
                                                <!-- FIN 2ÈME ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Coteaux d'Aix-en-Provence
                                                    </a>
                                                </li>
                                                <!-- FIN 3ÈME ONGLET -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Coteaux Varois-en-Provence
                                                    </a>
                                                </li>
                                                <!-- FIN 4ÈME ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Coteaux des Baux-de-Provence
                                                    </a>
                                                </li>
                                                <!-- FIN 5ÈME ONGLET -->

                                                <!-- 6ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet6" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Pierrevert
                                                    </a>
                                                </li>
                                                <!-- FIN 6ÈME ONGLET -->

                                                <!-- 7ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet7" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Bandol
                                                    </a>
                                                </li>
                                                <!-- FIN 7ÈME ONGLET -->

                                                <!-- 8ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet8" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Bellet
                                                    </a>
                                                </li>
                                                <!-- FIN 8ÈME ONGLET -->

                                                <!-- 9ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet9" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Cassis
                                                    </a>
                                                </li>
                                                <!-- FIN 9ÈME ONGLET -->

                                                <!-- 10ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet10" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Palette
                                                    </a>
                                                </li>
                                                <!-- FIN 10ÈME ONGLET -->



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
                                                                                <h5>Vignoble de Provence</h5>
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
                                                                                <h6 class="rosejura">Présentation</h6>
                                                                                <p>
                                                                                    Le vignoble de Provence s’étend du sud d’Avignon jusqu’à Nice sur environ 200 kms.
                                                                                    Les vins qui y sont produits sont très hétérogènes. Du fait de la grande superficie du vignoble,
                                                                                    on y trouve de nombreuses différences au niveau du climat, des sols ainsi que des vents.
                                                                                </p>
                                                                                <p>
                                                                                    Le vignoble produit des vins blancs, rouges et rosés, ces derniers étant les plus renommés.
                                                                                </p>
                                                                                <p>
                                                                                    Le vignoble de Provence produit 8 appellations d’origine contrôlées :<br/>
                                                                                    &middot; Côtes-de-Provence<br/>
                                                                                    &middot; Coteaux-d'Aix-en-Provence<br/>
                                                                                    &middot; Coteaux-Varois-en-Provence<br/>
                                                                                    &middot; Coteaux-des-Baux-de-Provence<br/>
                                                                                    &middot; Pierrevert<br/>
                                                                                    &middot; Bandol<br/>
                                                                                    &middot; Bellet<br/>
                                                                                    &middot; Cassis<br/>
                                                                                    &middot; Palette
                                                                                </p>
                                                                                <p>
                                                                                    Les 3 premières appellations produisent 96 % des vins de Provence.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rosejura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Superficie : 25 000 hectares environ<br/>
                                                                                    &middot; Hectolitres de vins produit / an : 1 000 000 hectolitres environ<br/>
                                                                                    &middot; Vins produits : blancs, rouges et rosés<br/>
                                                                                    &middot; Rendement à l’hectare : variable selon les appellations - entre 55 et 66 hl./ha.<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, cinsault, Rbouren, syrah, cabernet sauvignon, carignon, barbaroux, calitor, claireWe, rolle, semillon, ugni blanc.<br/>
                                                                                    &middot; Climat : tempéré méditerranéen

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
                                                <!-- ===================== FIN TEXTE 1 ============================-->

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
                                                                                <h5>Côtes de Provence</h5>
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
                                                                                    Le Côtes de Provence est un vin AOC produit sur une grande partie du Vignoble de Provence (dans le Var, les Bouches du Rhône ainsi que dans une commune des Alpes-MariBmes). Ses vins peuvent être rouges, rosés ou blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : grenat, reflets mauve<br/>
                                                                                    Arômes : fruits rouges et noirs, thym, épices, anis, laurier, cuir<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : fine et équilibrée<br/>
                                                                                    Robe : pétale de rose, saumonée<br/>
                                                                                    Arômes : fruits rouges et noirs, thym, épices, anis, laurier<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : structurée et généreuse<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : agrumes, thym, écorce de pin, épices, acacia
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Accords mets/vin : viandes rouges grillées<br/>
                                                                                    Temps de garde : 10 ans<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : fromages, viandes blanches<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : poissons grillés
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-de-Provence<br/>
                                                                                    &middot; Appellation principale : Côtes-de-Provence<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Sol : grès rouge, calcaires, marnes<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 3 261 ha.<br/>
                                                                                    &middot; Cépages dominants : grenache, morvèdre, cinsault, Bbouren, syrah, clairette, vermentino, ugni blanc<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Superficie en production : 18 000 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 1 000 000 hl. environ<br/>
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
                                                <!-- ===================== FIN TEXTE 2 ============================-->

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
                                                                                <h5>Côteaux d’Aix-en-Provence</h5>
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
                                                                                    Le Côteaux d’Aix-en-Provence est un vin AOC produit sur aux alentours de la ville d’Aix en Provence (Bouches du Rhône), dans le Vignoble de Provence. Ses vins peuvent être rouges ou rosés, et plus rarement, blancs. Les vins de cette appellation figurent parmi les meilleurs vins de Provence.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : fraîche et mentholée<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : fraise, framboise, pêche, poire, Plleul, acacia<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : équilibrée<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges et noirs, foin, menthe, thym, laurier, violette<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : fraîche
                                                                                    Robe : or pâle, reflets jade
                                                                                    Arômes : agrumes, acacia, tilleul, genêt
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : tapas, apéritif<br/>
                                                                                    Temps de garde : à consommer dans sa jeunesse<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : daube provençale<br/>
                                                                                    Temps de garde : plus de 10 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : poissons à la plancha, fromages de provence
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côteaux d’Aix-en-Provence<br/>
                                                                                    &middot; Appellation principale : Côteaux d’Aix-en-Provence<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Sol : argilo-calcaire, sableux ou caillouteux<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Superficie plantée : 3 261 ha.<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, cinsault, syrah, counoise, mourvèdre et vermentino<br/>
                                                                                    &middot; Production : rouges (40 %), rosés (55 %), blancs (5 %)<br/>
                                                                                    &middot; Superficie en production : 3 500 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 180 000 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 3 ============================-->

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
                                                                                <h5>Coteaux Varois-en-Provence</h5>
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
                                                                                    Le Coteaux Varois-en-Provence est un vin AOC produit sur une partie du département du Var dans
                                                                                    le Vignoble de Provence. Ses vins peuvent être rouges, rosés ou blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : fine, ronde et délicate<br/>
                                                                                    Robe : pétale de rose, saumon pâle<br/>
                                                                                    Arômes : peBts fruits rouges, pêche<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : dense et puissante<br/>
                                                                                    Robe : garance, reflets mauve<br/>
                                                                                    Arômes : fruits rouges, notes minérales et végétales, foin, cuir, réglisse<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : dense et fraîche<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : acacia, aubépine, agrume (pamplemousse, citron)
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : fromages, charcuterie, cuisine asiatique<br/>
                                                                                    Temps de garde : entre 2 et 4 ans<br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers<br/>
                                                                                    Temps de garde : 10 ans et plus<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Temperature de service : 10 °C<br/>
                                                                                    Accords mets/vin : poissons, coquillages, crustacés, apériBf
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Coteaux Varois-en-Provence<br/>
                                                                                    &middot; Appellation principale : Coteaux Varois-en-Provence<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Sol : grès, calcaires, marnes<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, cinsault, syrah, clairette, vermenBno, ugni blanc, grenache blanc<br/>
                                                                                    &middot; Production : rouges (40 %), rosés (55 %), blancs (5 %)<br/>
                                                                                    &middot; Superficie en production : 2 560 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 140 800 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 50 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 4 ============================-->

                                                <!-- ======================= TEXTE 5 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet5" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Coteaux des Baux-de-Provence</h5>
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
                                                                                <h6 class="rougebourgogne">Présentation</h6>
                                                                                <p>
                                                                                    Le Coteaux des Baux-de-Provence ou Les-Baux-de-Provence est un vin AOC produit sur aux alentours des Baux de Provence, dans les Alpilles (Bouches du Rhône) dans le Vignoble de Provence. Ses vins peuvent être rouges ou rosés.
                                                                                </p>
                                                                                <h6 class="rougebourgogne">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : dense, ronde et longue<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : fruits rouges, anis, fenouil<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : puissante<br/>
                                                                                    Robe : grenat, reflets violets<br/>
                                                                                    Arômes : mure, groseille, thym, romarin, fourrure, cuir
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougebourgogne">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : tapenade, poissons grillés

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : daube provençale<br/>
                                                                                    Temps de garde : 10 ans
                                                                                </p>
                                                                                <h6 class="rougebourgogne">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Coteaux des Baux-de-Provence<br/>
                                                                                    &middot; Appellation principale : Coteaux des Baux-de-Provence<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Sol : grès, calcaires, marnes<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Cépages dominants : grenache, morvèdre, cinsault, syrah<br/>
                                                                                    &middot; Production : rouges (75 %), rosés (25 %)<br/>
                                                                                    &middot; Superficie en production : 280 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 15 500 hl. environ<br/>
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
                                                <!-- ===================== FIN TEXTE 5 ============================-->

                                                <!-- ======================= TEXTE 6 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet6" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Pierrevert</h5>
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
                                                                                    Le Pierrevert est un vin AOC produit dans le Vignoble de Provence, sur la rive droite de la Durance. Le village de Pierrevert, autour duquel poussent les vignes de cetee appellation, est situé au pied de la montagne du Luberon. Ses vins peuvent être rouges ou rosés, et plus rarement, blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : ronde et fraiche<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fraise, cassis, framboise, notes florale<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : dense et puissante<br/>
                                                                                    Robe : rouge soutenu<br/>
                                                                                    Arômes : cassis, myrElle, clous de girofle, épices<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : agrumes et fleurs blanches
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : apéritif<br/>
                                                                                    Temps de garde : à consommer dans sa jeunesse<br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers<br/>
                                                                                    Temps de garde : 5 ans maximum<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Accords mets/vin : fromages de chèvre<br/>
                                                                                    Temps de garde : 2 ans maximum<br/><br/>
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Pierrevert<br/>
                                                                                    &middot; Appellation principale : Pierrevert<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Sol : argile-calcaire<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Cépages dominants : grenache, grenache blanc, syrah, vermenEno, clairette, ugni blanc<br/>
                                                                                    &middot; Production : rouges (30 %), rosés (60 %), blancs (10 %)<br/>
                                                                                    &middot; Superficie en production : 300 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 15 000 hl. environ<br/>
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
                                                <!-- ===================== FIN TEXTE 6 ============================-->

                                                <!-- ======================= TEXTE 7 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet7" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Bandol</h5>
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
                                                                                    Le Bandol est un vin AOC produit dans le Vignoble de Provence, autour de la ville de Bandol, dans le Var. Ses vins peuvent être rouges ou rosés, et plus rarement, blancs. Ces vins font parti des grands vins de Provence.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : fraîche et gourmande<br/>
                                                                                    Robe : saumonée<br/>
                                                                                    Arômes : fruits rouges et à chair blanche<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : dense et structurée<br/>
                                                                                    Robe : pourpre sombre<br/>
                                                                                    Arômes : réglisse, cannelle, épices<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : jaune paille, reflets verts<br/>
                                                                                    Arômes : genet, Glleul, agrumes (pamplemousse notamment)
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : apéritif, poissons, bouillabaisse<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers, daube, agneau<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : entre 10 et 12 °C<br/>
                                                                                    Accords mets/vin : fromages de chèvre et poissons<br/>
                                                                                    Temps de garde : 2 ans maximum<br/><br/>
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Bandol<br/>
                                                                                    &middot; Appellation principale : Bandol<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, cinsault, bourboulenc, clairebe, ugni blanc, sauvignon, marsanne, rolle et sémillon<br/>
                                                                                    &middot; Production : rouges (31 %), rosés (64 %), blancs (5 %)<br/>
                                                                                    &middot; Superficie en production : 1 500 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 55 000 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 7 ============================-->

                                                <!-- ======================= TEXTE 8 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet8" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Bellet</h5>
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
                                                                                    Le Bellet (également appelé « vin de Bellet ») est un vin AOC produit dans le Vignoble de Provence, dans la ville de Nice (Alpes Maritimes). Il est produit en milieu urbain sur des terrasses à l’ouest de la ville. Ses vins peuvent être rouges, rosés ou blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : ronde et délicate<br/>
                                                                                    Robe : pivoine<br/>
                                                                                    Arômes : fruits rouges (framboise), rose, églantine<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : charpentée et puissante<br/>
                                                                                    Robe : grenat foncé<br/>
                                                                                    Arômes : cerise, prune, épices<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : tilleul, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : poissons au barbecue
                                                                                    Temps de garde : pas un vin de garde<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 14 °C<br/>
                                                                                    Accords mets/vin : daube provençale<br/>
                                                                                    Temps de garde : maximum 15 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : apéritif<br/>
                                                                                    Temps de garde : 10 ans<br/><br/>
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Bellet<br/>
                                                                                    &middot; Appellation principale : Bellet<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Sol : poudingue<br/>
                                                                                    &middot; Cépages dominants : braquet, folle noire, rolle<br/>
                                                                                    &middot; Production : rouges (42 %), rosés (23 %), blancs (35 %)<br/>
                                                                                    &middot; Superficie en production : 47 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : de 900 à 1390 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 8 ============================-->

                                                <!-- ======================= TEXTE 9 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet9" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Cassis</h5>
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
                                                                                    Le Cassis est un vin AOC produit dans le Vignoble de Provence, dans la ville de Cassis, entre les calanques et le cap Canaille (Bouches du Rhône). C’est la 1eère AOC a avoir été reconnue en Provence (en 1936). Les vins qui y sont produits peuvent êtres rouges, rosés ou blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : ronde et délicate<br/>
                                                                                    Robe : pétale de rose<br/>
                                                                                    Arômes : fruités, floraux<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : charpentée et puissante<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges, thym, laurier<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : jaune or<br/>
                                                                                    Arômes : fleurs blanches, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : apéritif<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : daube provençale, grillades<br/>
                                                                                    Temps de garde : dans les 3 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : anchoïade, bouillabaisse<br/>
                                                                                    Temps de garde : 8 ans
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Cassis<br/>
                                                                                    &middot; Appellation principale : Cassis<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Cépages dominants : marsanne, claireee, grenache, mourvèdre, cinsault<br/>
                                                                                    &middot; Production : rouges (2 %), rosés (27 %), blancs (71 %)<br/>
                                                                                    &middot; Superficie en production : 200 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 8000 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 45 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 9 ============================-->

                                                <!-- ======================= TEXTE 10 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet10" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Palette</h5>
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
                                                                                    Le Palette est un vin AOC produit dans le Vignoble de Provence, dans et autour de la ville d’Aix en Provence. Les vignes étant situées dans un cirque naturel les protégeant du mistral, elles jouissent d’un micro-climat leur permettant la production de vins de grande qualité. Le Palette peut être rouge, rosé ou blanc.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Bouche : ample et grasse<br/>
                                                                                    Robe : rose saumon<br/>
                                                                                    Arômes : fraise, cerise<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Bouche : riche et puissante<br/>
                                                                                    Robe : rubis soutenu reflets violacés<br/>
                                                                                    Arômes : fruits noirs, sous-bois<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : fine et ronde<br/>
                                                                                    Robe : or pâle, reflets verts<br/>
                                                                                    Arômes : fleurs blanches, agrumes, fruits à chair blanche
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rosés :<br/>
                                                                                    Température de service : entre 10 et 13 °C<br/>
                                                                                    Accords mets/vin : poissons à la plancha
                                                                                    Temps de garde : maximum 5 ans<br/><br/>

                                                                                    Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : daube provençale<br/>
                                                                                    Temps de garde : au moins 3 ans, plus de 15 pour les grandes années<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vin : poissons nobles (du bar par exemple)<br/>
                                                                                    Temps de garde : au moins 5 ans
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Palette<br/>
                                                                                    &middot; Appellation principale : Palette<br/>
                                                                                    &middot; Vignoble : de Provence<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Cépages dominants : marsanne, claire4e, claire4e rose, bourboulenc, araignan, grenache, mourvèdre, cinsault<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Superficie en production : 245 ha. environ<br/>
                                                                                    &middot; Production (hectolitres) : 2000 hl. environ<br/>
                                                                                    &middot; Rendement moyen : 45 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 10 ============================-->

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
                @include('layouts.4emeniveau.provence.droite')
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
                            <h3 class="gras mapecran">Vins de Provence</h3>
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
                        <div id="provencemapmodal"></div>
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
@include('layouts.4emeniveau.provence.appelsjsprovence')

@include('layouts.4emeniveau.footer')
