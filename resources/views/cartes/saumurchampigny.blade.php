@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.saumurchampigny.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Saumur-Champigny</h3>
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
                            <img src="{{ asset('img/saumur.jpg') }}" alt="Saumur">
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
                                                        Saumur
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Saumur-Champigny
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Cabernet de Saumur
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME  ONGLET -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Côteaux de Saumur
                                                    </a>
                                                </li>
                                                <!-- ../4ÈME  ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Crémant de Loire
                                                    </a>
                                                </li>
                                                <!-- ../5ÈME  ONGLET -->

                                                <!-- 6ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet6" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Rosé de Loire
                                                    </a>
                                                </li>
                                                <!-- ../6ÈME  ONGLET -->


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
                                                                                <h5>Saumur</h5>
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
                                                                                    Le Saumur est un vin rouge, blanc, mousseux rosé ou mousseux blanc AOC produit dans le Vignoble de la Loire,
                                                                                    dans le Maine-et-Loire, la Vienne et les Deux-Sèvres.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Rouges :<br/>
                                                                                    Bouche : fraiche et gourmande<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges, violette, pivoine, réglisse<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : minérale<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fleurs blanches, fruits à chair blanche<br/><br/>

                                                                                    Mousseux rosés :<br/>
                                                                                    Bouche : puissante<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Mousseux blancs :<br/>
                                                                                    Bouche : mousse légère<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : amande, noisettes, fruits à chair blanche, vanille
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : viandes rouges<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 13 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : fruits de mer<br/><br/>

                                                                                    Mousseux rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : dessert<br/><br/>

                                                                                    Mousseux blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : apéritif
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : saumur<br/>
                                                                                    &middot; Appellation principale : saumur<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 1 400 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 76 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : cabernet franc, chenin<br/>
                                                                                    &middot; Rendement moyen : 50 à 69 hl./ha.
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
                                                                                <h5>Saumur-Champigny</h5>
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
                                                                                <h6 class="menetou">Présentation</h6>
                                                                                <p>
                                                                                    Le Saumur-Champigny est un vin rouge AOC produit dans le Vignoble de la Loire,
                                                                                    sur le département du Maine-et-Loire, dans la sous-région de production de l’Anjou.
                                                                                </p>
                                                                                <h6 class="menetou">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : légère et dense<br/>
                                                                                    Robe : rubis intense<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, iris, violette, poivre
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="menetou">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : agneaux, charcuteries
                                                                                <h6 class="menetou">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Saumur-Champigny<br/>
                                                                                    &middot; Appellation principale : Saumur-Champigny<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 1 580 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 83 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : cabernet franc<br/>
                                                                                    &middot; Rendement moyen : 57 à 69 hl/ha.
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
                                                                                <h5>Cabernet de Saumur</h5>
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
                                                                                <h6 class="rose">Présentation</h6>
                                                                                <p>
                                                                                    Le Cabernet de Saumur est un vin rosé, sec ou tendre,
                                                                                    AOC produit dans le Vignoble de la Loire. Il est produit
                                                                                    sur 38 communes dans le Maine-et-Loire, les Deux-Sèvres et la Vienne.
                                                                                </p>
                                                                                <h6 class="rose">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : légère et fraîche<br/>
                                                                                    Robe : framboise<br/>
                                                                                    Arômes : fleurs blanches, fruits rouges, pommes, fougères
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rose">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 7 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : apéritif, viandes blanche
                                                                                <h6 class="rose">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : cabernet de saumur<br/>
                                                                                    &middot; Appellation principale : cabernet de saumur<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 100 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 4 100 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon
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
                                                                                <h5>Côteaux de Saumur</h5>
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
                                                                                <h6 class="quincy">Présentation</h6>
                                                                                <p>
                                                                                    Le Côteaux de Saumur est un vin blanc moelleux AOC produit dans le Vignoble de la Loire,
                                                                                    sur les département du Maine-et-Loire, des Deux-Sèvres et de la Vienne,
                                                                                    dans la sous-région de production de l’Anjou.
                                                                                </p>
                                                                                <h6 class="quincy">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : équilibrée et fine<br/>
                                                                                    Robe : or soutenu<br/>
                                                                                    Arômes : fruits exotiques, miel, coing, abricot, pomme
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="quincy">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : desserts, foie gras
                                                                                <h6 class="quincy">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : côteaux-de-saumur<br/>
                                                                                    &middot; Appellation principale : côteaux-de-saumur<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 11.5 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 195 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : blancs moelleux<br/>
                                                                                    &middot; Cépages dominants : chenin<br/>
                                                                                    &middot; Rendement moyen : 35 à 40 hl/ha.<br/>
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
                                                                                <h5>Crémant de Loire</h5>
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
                                                                                <h6 class="chablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Crémant de Loire est un vin mousseux blanc ou rosé AOC produit dans le Vignoble de la Loire,
                                                                                    dans les sous-régions de production de l’anjou, saumur et touraine.
                                                                                </p>
                                                                                <h6 class="chablis">caractère :</h6>
                                                                                <p>
                                                                                    Blancs :<br/>
                                                                                    Bouche : mousse onctueuse<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fruits à chair blanche, noisettes, amandes, vanille<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Bouche : gourmande<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : petits fruits rouges
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="chablis">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : apéritif, fruits de mer<br/><br/>

                                                                                    Rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : desserts
                                                                                </p>
                                                                                <h6 class="chablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : crémant-de-loire<br/>
                                                                                    &middot; Appellation principale : crémant-de-loire<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 1 605 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 93 355 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : mousseux blancs (90 %) et rosés (10 %)<br/>
                                                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon, pinot noir, groleau, pineau d’Aunis, chardonnay, chenin
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
                                                <!-- ===================== TEXTE 5 ============================-->

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
                                                                                <h5>Rosé de Loire</h5>
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
                                                                                <h6 class="rose">Présentation</h6>
                                                                                <p>
                                                                                    Le Rosé de Loire est un vin rosé AOC produit dans le Vignoble de la Loire,
                                                                                    dans les aires d’appellation anjou, saumur et tourraine..
                                                                                </p>
                                                                                <h6 class="rose">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : légère et vive<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fruits rouges, violette, bonbon anglais
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rose">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : charcuteries, salades
                                                                                <h6 class="rose">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : rosé-de-loire<br/>
                                                                                    &middot; Appellation principale : rosé-de-loire<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 1000 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 60 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rosés<br/>
                                                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon, grolleau, pineau d’aunis, gamay et côt rosés<br/>
                                                                                    &middot; Rendement moyen : 60 à 72 hl/ha.
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
                                                <!-- ===================== TEXTE 6 ============================-->

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
                @include('layouts.4emeniveau.saumurchampigny.droite')
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
                            <h3 class="jaunechampagne gras mapecran">Vins de Saumur-Champigny</h3>
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
                        <div class="col-md-2">
                            <h4 class="bourgogne saumurchampigny gras">APPELLATIONS</h4>
                                <p class="typosaumurchampigny">
                                    Saumur-Champigny&nbsp;<i class="fa fa-circle saumurchampigny pull-right marge1" aria-hidden="true"></i><br/>
                                    Saumur rouge&nbsp;<i class="fa fa-circle saumurrouge pull-right marge1" aria-hidden="true"></i><br/>
                                    Saumur blanc&nbsp;<i class="fa fa-circle saumurblanc pull-right marge1" aria-hidden="true"></i><br/>
                                    Saumur Puy-Notre-Dame&nbsp;<i class="fa fa-circle saumurpuynotredame pull-right marge1" aria-hidden="true"></i><br/>
                                    Coteaux de Saumur&nbsp;<i class="fa fa-circle coteauxdesaumur pull-right marge1" aria-hidden="true"></i><br/>
                                    Cabernet de Saumur&nbsp;<i class="fa fa-circle cabernetdesaumur pull-right marge1" aria-hidden="true"></i>
                                </p>
                            <h4 class="bourgogne saumurchampigny gras">COMMUNES DU SAUMUROIS</h4>
                                <p class="typosaumurchampigny">
                                    Artannes-sur-Thouet&nbsp;
                                    <span class="pull-right marge1">
                                        <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                        <i class="fa fa-circle saumurblanc marge4" aria-hidden="true"></i>
                                        <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                    </span>
                                    <div class="clearfix">
                                        <div class="moins10px">
                                            Berrie
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Brézé
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Brossay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Chacé
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurchampigny marge3 marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Cizay-la-Madeleine
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Coudray-Macouard (Le)
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Courchamps
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Curcay-sur-Dive
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Distré
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Doué-la-Fontaine
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Epieds
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Fontevrault-l’Abbaye
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Forges
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge4" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Glénouse
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Meigné
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Montreuil-Bellay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Montsoreau
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurchampigny marge3 marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Parnay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurchampigny marge3 marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Pouancay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Puy-Notre-Dame
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Ranton
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Rou-Marson
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge4" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saint-Cyr-en-Bourg
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurchampigny marge3 marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saint-Just-sur-Dive
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge4" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saint-Léger-de-Montbrillais
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                            </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saint-Martin de Mâcon
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saix
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Saumur
                                            <span class="pull-right marge1">
                                               <i class="fa fa-circle saumurchampigny" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Souzay-Champigny
                                            <span class="pull-right marge1">
                                               <i class="fa fa-circle saumurchampigny marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Ternay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Tourtenay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Trois-Moutiers (Les)
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Turquant
                                            <span class="pull-right marge1">
                                               <i class="fa fa-circle saumurchampigny marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Umes (Les)
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Varrains
                                            <span class="pull-right marge1">
                                               <i class="fa fa-circle saumurchampigny" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc marge3" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Vaudelnay
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="marge2">
                                            Verchers-sur-Layon (Les)
                                            <span class="pull-right marge1">
                                                <i class="fa fa-circle saumurrouge" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurblanc" aria-hidden="true"></i>
                                                <i class="fa fa-circle saumurpuynotredame" aria-hidden="true"></i>
                                                <i class="fa fa-circle coteauxdesaumur" aria-hidden="true"></i>
                                                <i class="fa fa-circle cabernetdesaumur" aria-hidden="true"></i>
                                            </span><br/>
                                        </div>
                                    </div>
                                </p>
                        </div>
                        <div class="col-md-10">
                            <div id="saumurmapmodal"></div>
                        </div>
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
@include('layouts.4emeniveau.saumurchampigny.appelsjssaumurchampigny')

@include('layouts.4emeniveau.footer')
