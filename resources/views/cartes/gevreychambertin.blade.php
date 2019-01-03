@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================ -->
           @include('layouts.4emeniveau.chambertin.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CONTENU ================================-->
            <div class="col-lg-8"><!-- contenu -->
                <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                    <!-- ===================== LE BLOC CARTE ============================-->
                    <div class="col-lg-12"><!-- col-lg-12 -->
                        <div class="cadrecarte1"><!-- cadrecarte1 -->
                            <div class="textetitre">
                                <h3>Les vignobles de Gevrey-Chambertin</h3>
                            </div>
                            <a href="#modalgoogle">
                                <i class="fa fa-map-marker grand" data-toggle="tooltip"
                                   data-placement="left3" title="Tous vos Gevrey-Chambertin sur Google Map">
                                </i>
                            </a>
                            <div class="clear"></div>
                            <!-- ======================== LA CARTE ============================== -->
                            <!-- carte -->
                            <div id="carte3emeniveau">
                                <img src="{{ asset('img/gevrey-chambertin.jpg') }}" alt="Gevrey-Chambertin">
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
                                                            Chambertin
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Chambertin-Clos-de-Beze
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Chapelle-Chambertin
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Charmes-Chambertin
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Gevrey-Chambertin
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - MENU AVEC DROPDOWN -->
                                                    <li role="presentation" class="dropdown">
                                                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                            Autres Chambertin <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                            <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet6" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                                    Griotte-Chambertin
                                                                </a>
                                                            </li>
                                                            <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - 7ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet7" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">
                                                                    Latricieres-Chambertin
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - FIN 7ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - 8ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet8" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown8">
                                                                    Mazis-Chambertin
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - FIN 8ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - 9ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet9" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown9">
                                                                    Mazoyères-Chambertin
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - FIN 9ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 10ÈME ONGLET - 10ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet10" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown10">
                                                                    Ruchottes-Chambertin
                                                                </a>
                                                            </li>
                                                            <!-- CONDITIONS DE PRÉSENCE DU 10ÈME ONGLET - 10ÈME NAVIGATION -->
                                                        </ul>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - FIN MENU AVEC DROPDOWN -->

                                                </ul><!-- End nav nav-tabs -->
                                                <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                    <!-- CONDITIONS 1ER TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Chambertin est un vin rouge AOC produit sur
                                                                    la commune de Gevrey-Chambertin en Côte d’Or.
                                                                    Il est classé parmi les Grands Crus du Vignoble
                                                                    de la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : puissante et complexe<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise),
                                                                    épices, réglisse, violette, rose, mousse et sous-bois
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 14 à 16 °C<br/>
                                                                    Accords mets/vin : mets nobles : gibiers à poils, coq au vin, volailles laquées, côte de boeuf<br/>
                                                                    Temps de garde : au moins 10 ans, plus de 20 ans pour les grands millésimes
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 13 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 484 hl<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 1ER TEXTE -->

                                                    <!-- CONDITIONS 2ND TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Chambertin-Clos-de-Beze</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Chambertin-Clos-de-Bèze est un vin rouge AOC produit
                                                                    sur la commune de Gevrey-Chambertin en Côte d’Or.
                                                                    Il est classé parmi les Grands Crus du Vignoble de
                                                                    la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise),
                                                                    épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 14 °C, à maturité : 17 à 18 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : longue garde, 15 ans et plus
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Chambertin-Clos-de-Bèze<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 14 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 477 hl environ, soit 63 441 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 2ND TEXTE -->

                                                    <!-- CONDITIONS 3ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Chapelle-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 2 juin 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Chapelle-Chambertin est un vin rouge AOC produit sur la commune de
                                                                    Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands
                                                                    Crus du Vignoble de la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise),
                                                                    épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Chapelle-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 5,5 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 172 hl environ, soit 22 876 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 3ÈME TEXTE -->

                                                    <!-- CONDITIONS 4ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet4" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Charmes-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 3 septembre 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Charmes-Chambertin est un vin rouge (pinot noir)
                                                                    AOC produit sur la commune de Gevrey-Chambertin
                                                                    en Côte d’Or. Les aires de producKon sont les
                                                                    mêmes que celles de l’appellation Mazoyères-Chambertin
                                                                    mais l’appellation Charmes-Chambertin est plus
                                                                    souvent revendiquée. Il est classé parmi les
                                                                    Grands Crus du Vignoble de la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : puissant, complexe et élégant<br/>
                                                                    Robe : rubis foncé<br/>
                                                                    Arômes : fruits rouges (cassis, groseille, framboise),
                                                                    réglisse, rose, sous-bois et épices
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, agneau, coq au vin, côte de boeuf, fromage à croûte lavée.<br/>
                                                                    Temps de garde : 10 à 20 ans (plus pour les grandes années)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Charmes-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 29 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 1 159 hl. environ soit 154 147 bouteilles<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 4ÈME TEXTE -->

                                                    <!-- CONDITIONS 5ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet5" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Gevrey-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 5 mars 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Gevrey-Chambertin est un vin rouge AOC produit sur la commune
                                                                    de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les appella?ons
                                                                    village du Vignoble de la Côte de Nuits. La commune de Gevrey-Chambertin
                                                                    produit également 9 Grands Crus. L’appellation comporte 26 climats
                                                                    classés en 1er cru avec par exemple :
                                                                    Bel Air, Champeaux, Clos des Varoilles, Clos Prieur,
                                                                    En Ergot, Fonteny, La Romanée, Les Corbeaux, Petite Chapelle,
                                                                    Poissenot, etc.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : entière et puissante, riche, structure ferme<br/>
                                                                    Robe : rubis puis carmin, cerise avec l’âge<br/>
                                                                    Arômes : réglisse, petits fruits rouges, violette, rose. Plus âgé : épices, fruit mûr voir le cuir, le sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 15 à 16 °C<br/>
                                                                    Accords mets/vin : gibier, côte de boeuf, filet de sandre, époisses, cîteaux<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Gevrey-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 402 ha. environ dont 80 ha. environ en 1er Cru<br/>
                                                                    &middot; Production (en hectolitres) : 17 730 hl environ dont 3 359 hl environ en 1er Cru<br/>
                                                                    &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 40 à 56 hl/ha. pour les 1er Crus
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 5ÈME TEXTE -->

                                                    <!-- CONDITIONS 6ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet6" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Griotte-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 3 janvier 2017</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Griotte-Chambertin est un vin rouge AOC produit sur la commune de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise), épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans (plus de 20 ans pour les grandes années)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Griotte-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 2,6 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 97 hl environ, soit 12 901 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 6ÈME TEXTE -->

                                                    <!-- CONDITIONS 7ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet7" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Latricieres-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 20 mars 2019</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Latricieres-Chambertin est un vin rouge AOC produit sur la commune de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise), épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans (plus de 20 ans pour les grandes années)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Latricieres-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 7,3 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 281 hl environ, soit 37 373 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 7ÈME TEXTE -->

                                                    <!-- CONDITIONS 8ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet8" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Mazis-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mai 2019</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Mazis-Chambertin est un vin rouge AOC produit sur la commune de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise), épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Mazis-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 8,2 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 324 hl environ, soit 43 092 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 8ÈME TEXTE -->

                                                    <!-- CONDITIONS 9ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet9" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Mazoyères-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 août 2019</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Mazoyères-Chambertin est un vin rouge AOC produit sur la commune de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise), épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Mazoyères-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 1,7 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 68 hl environ, soit 9 044 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 9ÈME TEXTE -->

                                                    <!-- CONDITIONS 10ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet10" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Ruchottes-Chambertin</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 16 août 2019</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Ruchottes-Chambertin est un vin rouge AOC produit sur la commune de Gevrey-Chambertin en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate et complexe, fin et généreux<br/>
                                                                    Robe : rubis foncé, cerise noire<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise), épices, réglisse, violette, rose, mousse et sous-bois.
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : jeune : 13 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers, boeuf bourguignon, époisses, gigot de mouton, lapin, coq au vin<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Ruchottes-Chambertin<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 3,2 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 108 hl environ, soit 14 364 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 37 à 53 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 10ÈME TEXTE -->

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
                    @include('layouts.4emeniveau.chambertin.droite')
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
                                <h3 class="rougegevrey gras">Les vignobles de Gevrey-Chambertin</h3>
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
                            <div class="col-md-12">
                                <div id="mapgevreychambertin"></div>
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
@include('layouts.4emeniveau.chambertin.appelsjschambertin')

@include('layouts.4emeniveau.footer')
