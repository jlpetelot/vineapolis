@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================ -->
            @include('layouts.4emeniveau.chambollemusigny.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CONTENU ================================-->
            <div class="col-lg-8"><!-- contenu -->
                <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                    <!-- ===================== LE BLOC CARTE ============================-->
                    <div class="col-lg-12"><!-- col-lg-12 -->
                        <div class="cadrecarte1"><!-- cadrecarte1 -->
                            <div class="textetitre">
                                <h3>Vins de Chambolle-Musigny et Morey-Saint-Denis</h3>
                            </div>
                            <a href="#modalgoogle">
                                <i class="fa fa-map-marker grand" data-toggle="tooltip"
                                   data-placement="left3" title="Tous vos Chambolle-Musigny et Morey-Saint-Denis sur Google Map">
                                </i>
                            </a>
                            <div class="clear"></div>
                            <!-- ======================== LA CARTE ============================== -->
                            <!-- carte -->
                            <div id="carte3emeniveau">
                                <img src="{{ asset('img/chambolle-musigny.jpg') }}" alt="Chambolle-Musigny">
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
                                                        <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Chambolle-Musigny
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                            Bonnes-mares
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Clos-de-la-roche
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                    <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                    <li role="presentation">
                                                        <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                            Clos de Tart
                                                        </a>
                                                    </li>
                                                    <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->


                                                    <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - MENU AVEC DROPDOWN -->
                                                    <li role="presentation" class="dropdown">
                                                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                            Autres Chambolle-Musigny et Morey-Saint-Denis<span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                            <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet6" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                                    Clos des Lambrays
                                                                </a>
                                                            </li>
                                                            <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - 7ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet7" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">
                                                                    Clos Saint-Denis
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - FIN 7ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - 8ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet8" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown8">
                                                                    Morey-Saint-Denis
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - FIN 8ÈME NAVIGATION -->

                                                            <!-- CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - 9ÈME NAVIGATION -->
                                                            <li>
                                                                <a href="#onglet9" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown9">
                                                                    Musigny
                                                                </a>
                                                            </li>
                                                            <!-- FIN CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - FIN 9ÈME NAVIGATION -->
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
                                                                    <div class="titre">Chambolle-Musigny</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Chambolle-Musigny est un vin rouge AOC produit
                                                                    sur la commune de Chambolle-Musigny en Côte d’Or.
                                                                    Il est classé parmi les appellations village du Vignoble de la Côte de Nuits.
                                                                    La commune de Chambolle-Musigny produit également deux Grands Crus :
                                                                    le Musigny et le Bonnes-Mares. L’appellation comporte
                                                                    24 climats classés en 1er cru avec par exemple :
                                                                    Les Amoureuses, Les Borniques, Les ComboVes, Les Charmes,
                                                                    Les Haux Doix, Les Noirots, Les Plantes ou encore Les Sentiers.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : complexe et riche. Structure solide<br/>
                                                                    Robe : rubis vif et brillant<br/>
                                                                    Arômes : petits fruits rouges, violettes. Plus âgé : épices, fruit mûr voir la truffe, musc, réglisses
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 14 à 16 °C<br/>
                                                                    Accords mets/vin : gibier à plume, viande rouge, chapon, agneau ou veau rôti, brillât-savarin, reblochon, brie<br/>
                                                                    Temps de garde : 10 à 20 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Chambolle-Musigny<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 152 ha. environ dont 56 ha. environ en 1er Cru<br/>
                                                                    &middot; Production (en hectolitres) : 6 127 hl environ dont 2 177 hl environ en 1er Cru<br/>
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
                                                                    <div class="titre">Bonnes-Mares</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 19 juillet 2050</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Bonnes-Mares est un vin rouge (pinot noir) AOC produit sur les communes
                                                                    de Chambolle-Musigny et Morey-Saint-Denis en Côte d’Or.
                                                                    Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : rond, puissant, tannique, grasse et corsé<br/>
                                                                    Robe : intense<br/>
                                                                    Arômes : petits fruits rouges et noirs (cassis, groseille, framboise),
                                                                    épices, Violette, humus et sous-bois
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 14 à 16 °C<br/>
                                                                    Accords mets/vin : gibiers à poils et à plumes, sauce au vin, volailles, civet, fromages forts<br/>
                                                                    Temps de garde : 30 à 50 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Bonnes-Mares<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 15 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 465 hl<br/>
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
                                                                    <div class="titre">Clos de la Roche</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Clos de la Roche est un vin rouge AOC produit sur la commune de Morey-Saint-Denis en Côte d’Or. Il est classé parmi parmi les Grands Crus du Vignoble de la Côte de Nuits.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : charpentée, puissante. Belle longueur en bouche<br/>
                                                                    Robe : rubis presque framboise<br/>
                                                                    Arômes : humus, truffe, petits fruits rouges et noirs, terre mouillée, réglisse
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 12 à 14 °C (jeune), 15 à 17 °C (âgé)<br/>
                                                                    Accords mets/vin : jambon en sauce, gibiers à poils, rable de lièvre, vacherin, mont d’or<br/>
                                                                    Temps de garde : 10 à 15 ans (20 ans pour certains millésimes)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Clos de la Roche<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 16,8 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 579 hl environ, soit 77 007 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 3ÈME TEXTE -->

                                                    <!-- CONDITIONS 5ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet5" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Clos de Tart</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Clos de Tart est un vin rouge AOC produit sur la commune de Morey-Saint-Denis en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits. Cette appellaLon a également la parLcularité de n’avoir eu que 3 propriétaires depuis le moyen âge
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : robuste, tannique et complexe<br/>
                                                                    Robe : rubis sombre<br/>
                                                                    Arômes : fraise, violette
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 18 à 20 °C<br/>
                                                                    Accords mets/vin : gibiers à plumes, volailles, fromages forts<br/>
                                                                    Temps de garde : 10 à 15 ans (20 ans pour les grands millésimes)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Clos de Tart<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 17,5 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 209 hl environ, soit 27 797 bouteilles en moyenne<br/>
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
                                                                    <div class="titre">Clos des Lambrays</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Clos des Lambrays est un vin rouge AOC produit sur la commune de Morey-Saint-Denis en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : rond, profond et grave<br/>
                                                                    Robe : rubis sombre<br/>
                                                                    Arômes : fraise, violette
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 18 à 20 °C<br/>
                                                                    Accords mets/vin : gibiers à plumes, volailles, fromages forts<br/>
                                                                    Temps de garde : 10 à 15 ans (20 ans pour les grands millésimes)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Clos des Lambrays<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 8 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 255 hl environ, soit 33 915 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 5ÈME TEXTE -->

                                                    <!-- CONDITIONS 7ÈME TEXTE -->
                                                    <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet7" aria-labelledby="home-tab">
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <div class="titre">Clos Saint-Denis</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Clos Saint-Denis est un vin rouge AOC produit sur la commune de Morey-Saint-Denis en Côte d’Or. Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits. Le Clos Saint-Denis est apparut au 11ème siècle, fruit du labeur des chanoines de Vergy
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : robuste, tannique et complexe<br/>
                                                                    Robe : rubis sombre<br/>
                                                                    Arômes : fraise, violette
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 18 à 20 °C<br/>
                                                                    Accords mets/vin : gibiers à plumes, volailles, cuisine asiaZque, fromages forts<br/>
                                                                    Temps de garde : 10 à 15 ans (20 ans pour les grands millésimes)
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Clos Saint-Denis<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 100 %<br/>
                                                                    &middot; Cépage dominant : Pinot noir<br/>
                                                                    &middot; Superficie de production : 6 ha. environ<br/>
                                                                    &middot; Production (en hectolitres) : 214 hl environ, soit 28 462 bouteilles en moyenne<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha
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
                                                                    <div class="titre">Morey-Saint-Denis</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Morey-Saint-Denis est un vin majoritairement rouge AOC produit sur la commune de Morey-Saint-Denis en Côte d’Or. Le Morey-Saint-Denis blanc existe également mais est produit dans une bien moindre quantité (3 %). Il est classé parmi les appellaOons village du Vignoble de la Côte de Nuits. La Commune de Morey- Saint-Denis produit également 5 Grands Crus. L’appellation comporte 20 climats classés en 1er cru avec par exemple : Aux Charmes, Clos Baulet, Côte Rotie, Les Blanchards, Les Façonnières, Les Millandes, Les Sorbès, Monts Luisants, etc.
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : ample, ferme et équilibrée<br/>
                                                                    Robe : rubis, carmin à reflets violacés<br/>
                                                                    Arômes : fruits noirs et rouges. Parfois arômes de réglisses. Avec l’âge, cuir, sous-bois
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 13 à 15 °C<br/>
                                                                    Accords mets/vin : gibier à poil, entrecôte, côte de boeuf, fromage à croute lavée
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Morey-Saint-Denis<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges 97 %, blancs 3 %<br/>
                                                                    &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                                                    &middot; Superficie de production : 110 ha. environ dont 5 ha. environ en blanc<br/>
                                                                    &middot; Production (en hectolitres) : 3 882 hl environ dont 200 hl environ en blanc<br/>
                                                                    &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                                                    <div class="titre">Musigny</div>
                                                                    <li>
                                                                        <i class="fa fa-user"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 4 mars 2049</span>
                                                                    </li>
                                                                </ul>
                                                                <h5 class="textetitre3">PRÉSENTATION</h5>
                                                                <p>
                                                                    Le Musigny est un vin majoritairement rouge (pinot noir) AOC produit sur la commune de Chambolle-Musigny en Côte d’Or. Du vin blanc (chardonnay) y est également produit, en moindre quantité.Il est classé parmi les Grands Crus du Vignoble de la Côte de Nuits
                                                                </p>
                                                                <h5 class="textetitre3">CARACTÈRE</h5>
                                                                <p>
                                                                    Bouche : long en bouche<br/>
                                                                    Robe : pourpre<br/>
                                                                    Arômes : violette, cassis, framboise, églanRne, cuir, humus, fourrure
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                                <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                                <p>
                                                                    Température de service : 14 à 16 °C<br/>
                                                                    Accords mets/vin : volailles rôties, gibiers à plumes, agneaux rôtis, brie de Meaux<br/>
                                                                    Temps de garde : 15 à 30 ans
                                                                </p>
                                                                <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                                <p>
                                                                    &middot; Désignation : Côte de Nuits<br/>
                                                                    &middot; Appellation principale : Musigny<br/>
                                                                    &middot; Vignoble : Bourgogne<br/>
                                                                    &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                    &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                    &middot; Production : rouges et blancs<br/>
                                                                    &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                                                    &middot; Superficie de production : 10 ha. environ en rouge, 1 ha. environ en blanc<br/>
                                                                    &middot; Production (en hectolitres) : 310 hl. environ dont 24 hl. environ de blancs<br/>
                                                                    &middot; Rendement moyen : 35 à 49 hl/ha. pour les rouges, 40 à 54 hl/ha. pour les blancs
                                                                </p>
                                                            </div><!-- End col-lg-6 -->
                                                        </div><!-- End row -->
                                                    </div>
                                                    <!-- FIN CONDITIONS 9ÈME TEXTE -->

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
                    @include('layouts.4emeniveau.chambollemusigny.droite')
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
                                <h3 class="rougegevrey gras">Les vignobles de Chambolle-Musigny et Morey-Saint-Denis</h3>
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
                                <div id="mapchambollemusigny"></div>
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
@include('layouts.4emeniveau.chambollemusigny.appelsjschambollemusigny')

@include('layouts.4emeniveau.footer')
