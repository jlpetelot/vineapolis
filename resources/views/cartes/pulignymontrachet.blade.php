@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pulignymontrachet.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles de Puligny-Montrachet</h3>
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
                            <img src="{{ asset('img/puligny.jpg') }}" alt="Aloxe-Carton">
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
                                                        Puligny-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Bâtard-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Bienvenues-Bâtard-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Blagny
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME  ONGLET - FIN 4ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Chevalier-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME  ONGLET - FIN 5ÈME NAVIGATION -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- CONDITIONS 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Puligny-Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Puligny-Montrachet est un vin AOC produit sur la commune de Puligny-Montrachet en Côte d’Or. Les vins produits y sont blancs (chardonnay) et en très moindre quantité, rouges (pinot noir). L’appellation compte 17 climats classés en 1er Cru : Champ Canet, Champ Gain, Clavaillon, Clos de la Garenne, Clos de la Mouchère, Hameau de Blagny, La Garenne, La Truffière, Le Cailleret, Les Chalumaux, Les CombeYes, Les Demoiselles, Les FolaQères, Les Perrières, Les Pucelles, Les Referts et Sous le Puits. La commune de Puligny-Montrachet produit également 5 Grands Crus
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Robe : dorée avec des reflets verts<br/>
                                                                Arômes : aubépine, raisin, noiseYe, citronnelle, pâte d’amande, ambre, beurre, croissant chaud, silex
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges</span><br>
                                                                Bouche : Tendre et charnue<br>
                                                                Robe : rubis<br>
                                                                Arômes : petits fruits rouges et noirs, avec l’âge de cuir, de fourrure et de musc
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : volailles en sauce, foie gras, homard, poissons grillés, chèvre, reblochon
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges</span><br>
                                                                Température de service : 14 à 16 °C<br>
                                                                Accords mets/vin : volailles rôQes, porc, veau, comté
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Puligny-Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs (97 %) et rouges (3 %)<br/>
                                                                &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs)<br/>
                                                                &middot; Superficie de production : 212 ha. environ (210 ha. environ en blanc, 1 ha. environ en rouge) (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : 10 770 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                                                <div class="titre">Bâtard-­Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Bâtard-­‐Montrachet est un Grand Cru AOC blanc produit sur une partie des communes de Puligny-­Montrachet et de Chassagne-­Montrachet, en Côte d’Or (21). Il fait parF des Grands Crus les plus méridionaux du département
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le Bâtard-­Montrachet à une robe couleur or avec des reflets émeraude, tendant vers le jaune en vieillissant. On y retrouve des notes de beurre et de croissant chaud, ainsi que des nuances épicées, de miel et de fruits secs
                                                            </p>

                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 14 °C<br>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lotte mais également les poules et poulardes<br>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Bâtard-Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 11,13 ha. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : environ 535 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha
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
                                                                <div class="titre">Bienvenues-­Bâtard-­Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Bienvenues-­Bâtard-­Montrachet est un Grand Cru AOC blanc produit sur une parGe de lacommune de Puligny-­Montrachet, en Côte d’Or (21). Il fait partie des Grands Crus les plus méridionaux du département
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le Bienvenue-­Bâtard-­Montrachet à une robe couleur or avec des reflets émeraude, tendant vers le jaune en vieillissant. On y retrouve des notes de beurre et de croissant chaud, ainsi que des nuances épicées, de miel et de fruits secs
                                                            </p>

                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lotte mais également les poules et poulardes<br>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Bienvenues-­Bâtard-Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 3,57. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : environ 180 hl<br/>
                                                                &middot; Rendement moyen : 40 à 54 hl/ha
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
                                                                <div class="titre">Blagny</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Blagny est un vin AOC produit sur les communes de Meursault et de Puligny-Montrachet en Côte d’Or. Les vins produits y sont exclusivement rouges (pinot noir). En effet, les vins blancs produits sur ces communes bénéficient des appellations Meursault ou Puligny-Montrachet, seuls les rouges bénéficient de l’appellation Blagny
                                                            </p>
                                                            <p>
                                                                L’appellation compte 7 climats classés en 1er Cru : Hameau de Blagny, La Garenne ou Sur La Garenne, La Jeunellotte, La Pièce sous le Bois, Sous Blagny, Sous le Dos d’Ane, Sous le Puits.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Robe : rubis pourpre / cerise noire<br/>
                                                                Arômes : peSts fruits rouges et noirs (fraises, cassis, groseilles) puis avec l’âge le cuir, le cacao, le poivre et la réglisse
                                                            </p>

                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lotte mais également les poules et poulardes<br>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Blagny<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges (100 %)<br/>
                                                                &middot; Cépage dominant : Pinot noir<br/>
                                                                &middot; Superficie de production : 5 ha. environ<br/>
                                                                &middot; Production en hectolitre / an : 202 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges (40 à 56 hl/ha. pour les 1er Crus)
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
                                                                <div class="titre">Chevalier-­Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Chevalier-­Montrachet est un Grand Cru AOC blanc produit sur une parFe de la commune de Puligny-­Montrachet, en Côte d’Or (21). Il fait partie des Grands Crus les plus méridionaux du département
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le Chevalier-­Montrachet à une robe couleur or avec des reflets émeraude, tendant vers le jaune en vieillissant. On y retrouve des notes de beurre et de croissant chaud, ainsi que des nuances épicées, de miel et de fruits secs
                                                            </p>

                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : entre 12 à 12 °C<br>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lotte mais également les poules et poulardes<br>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation : Chevalier-­Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Blancs<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 7,47 ha. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : environ 859 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 5ÈME TEXTE -->

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
                @include('layouts.4emeniveau.pulignymontrachet.droite')
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
                            <h3 style="color: #ffd400; font-weight: 700;">Les vignobles de Puligny-Montrachet</h3>
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
                            <div id="mappuligny"></div>
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
@include('layouts.4emeniveau.pulignymontrachet.appelsjspulignymontrachet')

@include('layouts.4emeniveau.footer')
