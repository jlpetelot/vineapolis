@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================ -->
            @include('layouts.4emeniveau.vosne.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CONTENU ================================-->
            <div class="col-lg-8"><!-- contenu -->
                <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                    <!-- ===================== LE BLOC CARTE ============================-->
                    <div class="col-lg-12"><!-- col-lg-12 -->
                        <div class="cadrecarte1"><!-- cadrecarte1 -->
                            <div class="textetitre">
                                <h3>Les vignobles de Vosne-Romanée</h3>
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
                                <img src="{{ asset('img/vosne-romanee.jpg') }}" alt="Vosne-Romanée">
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
                                                            Vosne-Romanée
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            La-Grande-Rue
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            La-Romanée
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 6ÈME NAVIGATION -->
                                                    <li>
                                                        <a href="#onglet4" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                            Romanée-Conti
                                                        </a>
                                                    </li>
                                                    <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 6ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 4ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            La-Tâche
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - MENU AVEC DROPDOWN -->
                                                    <li role="presentation" class="dropdown">
                                                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                            Autres Vosne-Romanée<span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                            <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                            <li role="presentation">
                                                                <a href="#onglet6" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                                    Richebourg
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - 7ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet7" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">
                                                                    Romanée-Saint-Vivant
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - FIN 7ÈME NAVIGATION -->
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
                                                                    <div class="titre">Vosne-Romanée</div>
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
                                                                    Le Vosne-Romanée est un vin rouge AOC produit sur les communes Vosne-Romanée
                                                                    et Flagey-Echezeaux en Côte d’Or. Il est classé parmi
                                                                    les appellations village du Vignoble de la Côte de Nuits.
                                                                    Les Commune de Vosne-Romanée et Flagey-Echezeaux produisent
                                                                    également 8 Grands Crus à elles deux (6 pour Vosne-Romanée,
                                                                    2 pour Flagey-Echezeaux). L’appellation comporte 14 climats
                                                                    classés en 1er cru avec par exemple : Aux Brulées, Clos des Réas,
                                                                    En Orveaux, La Croix Rameau, Les Chaumes, Les Rouges, Les Suchots, etc.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : souvent corsée et voluptueuse, charnue<br/>
                                                                    Robe : rouge feu, grenat voir pourpre<br/>
                                                                    Arômes : fruits noirs et rouges (fraise, framboise, myrille, cassis), épices, avec l’âge : cerise, cuir, confit, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 14 à 16 °C<br/>
                                                                    Accords mets/vin : viandes fortes, volailles rôNes, gibier à plume, foie gras poêlé, époisses, langres
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Vosne-Romanée<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 153 ha. environ dont 56 ha. environ en 1er Cru<br/>
                                                                    &middot; Production (en hectolitres) : 6 137 hl environ dont 2 186 hl environ en 1er Cru<br/>
                                                                    &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 40 à 56 hl/ha. pour les 1er Crus
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
                                                                    <div class="titre">La-Grande-Rue</div>
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
                                                                    La-Grande-Rue est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : La-Grande-Rue<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 2 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 47 hl environ soit 6 251 bouteilles<br/>
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
                                                                    <div class="titre">La-Romanée</div>
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
                                                                    La-Romanée est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : La-Romanée<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 0,85 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 30 hl environ soit 3 990 bouteilles<br/>
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
                                                                    <div class="titre">Romanée-Conti</div>
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
                                                                    Romanée-Conti est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits. C’est le vin le plus cher au monde (plusieurs milliers d’euros par bouteille). Il est considéré comme le meilleur vin de Bourgogne
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Romanée-Conti<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 1,7 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 41 hl environ soit 5 463 bouteilles<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
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
                                                                    <div class="titre">La-Tâche</div>
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
                                                                    La-Tâche est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : La-Tâche<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 5 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 153 hl environ soit 20 349 bouteilles<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
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
                                                                    <div class="titre">Richebourg</div>
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
                                                                    Richebourg est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Richebourg<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 8 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 250 hl environ<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
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
                                                                    <div class="titre">Romanée-Saint-Vivant</div>
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
                                                                    Romanée-Saint-Vivan est un vin rouge AOC produit sur la commune de Vosne-Romanée en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : délicate, puissante, complète, flamboyante<br/>
                                                                    Robe : rubis sombre, carmin avec l’âge<br/>
                                                                    Arômes : petits fruits rouges et noirs, violeRe, sous-bois, épices, cuir, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 15 à 17 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, viandes au gout relevé<br/>
                                                                    Temps de garde : 15 à 25 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Romanée-Saint-Vivant<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 8 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 279 hl environ soit 37 107 bouteilles<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 7ÈME TEXTE -->

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
                    @include('layouts.4emeniveau.vosne.droite')
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
                                <h3 class="rougegevrey gras">Les vignobles de Vosne-Romanée</h3>
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
                                <div id="mapvosneromanee"></div>
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
@include('layouts.4emeniveau.vosne.appelsjsvosne')

@include('layouts.4emeniveau.footer')
