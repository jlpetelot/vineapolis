@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.beaujolais.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vins du Beaujolais</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos Beaujolais sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/beaujolais.jpg') }}" alt="Beaujolais">
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
                                                        Vignoble du Beaujolais
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Beaujolais
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Beaujolais-Villages
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Brouilly
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Côte-de-Brouilly
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - MENU AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Autres Beaujolais<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet6" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                                Chénas
                                                            </a>
                                                        </li>
                                                        <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - 7ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet7" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">
                                                                Chiroubles
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - FIN 7ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - 8ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet8" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown8">
                                                                Fleurie
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - FIN 8ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - 9ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet9" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown9">
                                                                Julienas
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 9ÈME ONGLET - FIN 9ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 10ÈME ONGLET - 10ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet10" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown10">
                                                                Morgon
                                                            </a>
                                                        </li>
                                                        <!-- CONDITIONS DE PRÉSENCE DU 10ÈME ONGLET - 10ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 11ÈME ONGLET - 11ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet11" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown11">
                                                                Moulin-à-Vent
                                                            </a>
                                                        </li>
                                                        <!-- CONDITIONS DE PRÉSENCE DU 11ÈME ONGLET - 11ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 12ÈME ONGLET - 12ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet12" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown12">
                                                                Régnié
                                                            </a>
                                                        </li>
                                                        <!-- CONDITIONS DE PRÉSENCE DU 12ÈME ONGLET - 12ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 13ÈME ONGLET - 13ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet13" role="tab" id="dropdown8-tab" data-toggle="tab" aria-controls="dropdown13">
                                                                Saint-Amour
                                                            </a>
                                                        </li>
                                                        <!-- CONDITIONS DE PRÉSENCE DU 13ÈME ONGLET - 13ÈME NAVIGATION -->
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
                                                                <div class="titre">Vignoble du Beaujolais</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">&nbsp;</h5>
                                                            <p>
                                                                Le vignoble du Beaujolais se situe dans le département du Rhône ainsi
                                                                que sur certaines communes de Saône et Loire. Comprenant environ 23 000 hectares,
                                                                le vin produit y est majoritairement rouge, à cépage gamay. Le vignoble du Beaujolais
                                                                produit 12 appellations d’origines contrôlée : Beaujolais, Beaujolais Villages,
                                                                Brouilly, Chénas, Chiroubles, Côte de Brouilly, Fleurie, Juliénas, Morgon,
                                                                Moulin-à-Vent, Régnié et Saint-Amour. Le vignoble est très connu grâce
                                                                à la renommée du Beaujolais nouveau, mis en vente dès la fin de sa
                                                                vinification, le troisième jeudi de novembre dans le monde entier
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">&nbsp;</h5>
                                                            <p>
                                                                &middot; Superficie plantée : 23 000 hectares environ en 2008<br/>
                                                                &middot; Hectolitres de vins produit / an : 1 000 000 hectolitres en 2008<br/>
                                                                &middot; Vins produits : rouges et rosé (95 %) et blancs (5 %)<br/>
                                                                &middot; Rendement à l’hectare : maximum 52 hl./ha. pour les rouges, maximum 72 hl/ha. en blanc<br/>
                                                                &middot; Cépages dominants : Gamay pour les rouges et rosés, Chardonnay pour les blancs<br/>
                                                                &middot; Sols : argilo-calcaire et granitique<br/>
                                                                &middot; Climat : Tempéré océanique à tendance continentale<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 1ER TEXTE -->

                                                <!-- CONDITIONS 2ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Beaujolais</div>
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
                                                                Le Beaujolais est un vin AOC produit sur l’intégralité du vignoble du Beaujolais. L’appellation peut désigner 6 vins différents : le beaujolais blanc (seulement 3 % de la récolte, gardé pour la consommation locale), le beaujolais rouge (la plus grosse partie de la production), le beaujolais supérieur, le beaujolais rosé, le beaujolais rouge nouveau (ou primeur) et le beaujolais rosé nouveau (ou primeur)
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rougegevrey gras">Les rouges</span><br/>
                                                                Bouche : complexe et riche. Structure solide<br/>
                                                                Robe : cerise pale<br/>
                                                                Arômes : fruits rouges, banane
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Les rosés</span><br/>
                                                                Bouche : gourmande<br/>
                                                                Robe : rose pale<br/>
                                                                Arômes : fruité
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rougegevrey gras">Les rouges</span><br/>
                                                                Température de service : 14 à 16 °C<br/>
                                                                Accords mets/vin : charcuterie<br/>
                                                                Garde : 3 à 4 ans
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Les rosés</span><br/>
                                                                Température de service : 10 °C<br/>
                                                                Accords mets/vin : aperitif<br/>
                                                                Garde : dans l’année
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Beaujolais<br/>
                                                                &middot; Appellation principale : Beaujolais<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : argilo-calcaire et granitique<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges et rosé (97 %)°, blancs<br/>
                                                                &middot; Cépages dominants : Gamay pour les rouges, chardonnay pour les blancs<br/>
                                                                &middot; Superficie de production : 7000 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 317 500 hl<br/>
                                                                &middot; Rendement moyen : 64 à 69 hl/ha. pour les rouges, 60 hl/ha. pour les blancs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 2ÈME TEXTE -->

                                                <!-- CONDITIONS 3ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Beaujolais-Villages</div>
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
                                                                Le Beaujolais-Villages est un vin AOC produit sur la moitié septentrionale du vignoble du Beaujolais. Majoritairement rouge à cépage gamay, une partie de la récolte est vendue en primeur, c’est le Beaujolais-Villages nouveau
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rougegevrey gras">Les rouges</span><br/>
                                                                Bouche : souple, légère et gourmande<br/>
                                                                Robe : cerise avec reflets violets<br/>
                                                                Arômes : fraise, cassis, framboise, bananes, violette
                                                            </p>
                                                            <p>
                                                                <span class="jaunechampagne gras">Les blancs</span><br/>
                                                                Bouche : souple et légère<br/>
                                                                Robe : jaune pâle<br/>
                                                                Arômes : fruits exoDques, fruits à chair blanche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rougegevrey gras">Les rouges</span><br/>
                                                                Température de service : 13°C<br/>
                                                                Accords mets/vin : charcuterie<br/>
                                                                Garde : ce n’est pas un vin de garde
                                                            </p>
                                                            <p>
                                                                <span class="jaunechampagne gras">Les blancs</span><br/>
                                                                Température de service : 10 à 12 °C<br/>
                                                                Accords mets/vin : poissons, apéritif
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Beaujolais-Villages<br/>
                                                                &middot; Appellation principale : Beaujolais-Villages<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : argilo-calcaire et granitique<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges et rosés, blancs<br/>
                                                                &middot; Cépages dominants : Gamay pour les rouges et rosés, chardonnay pour les blancs<br/>
                                                                &middot; Superficie de production : 5 185 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 225 025 hl. environ<br/>
                                                                &middot; Rendement moyen : 60 à 65 hl/ha. pour les rouges, 58 à 70 hl/ha. pour les blancs
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
                                                                <div class="titre">Brouilly</div>
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
                                                                Le Brouilly est un vin rouge AOC produit dans le vignoble du Beaujolais dans le département du Rhône. Le Brouilly doit sont nom au mont Brouilly, au centre de l’aire géographique de l’appellation
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : friand, dense et fin<br/>
                                                                Robe : rubis, brillante et soutenu<br/>
                                                                Arômes : fraise, framboise, violette
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 12 à 13°C<br/>
                                                                Accords mets/vin : charcuterie, volaille de bresse, apériNf, abats<br/>
                                                                Garde : jusqu’à 6 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Brouilly<br/>
                                                                &middot; Appellation principale : Brouilly<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : sableuse<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 1 325 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 66 450 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
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
                                                                <div class="titre">Côte-de-Brouilly</div>
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
                                                                Le Côte-de-Brouilly est un vin rouge AOC produit dans le vignoble du Beaujolais, sur les pentes du Mont Brouilly à qui l’appellation doit son nom, dans le département du Rhône. Elle s’étend sur 4 communes : Cerclé, Odenas, Quincié-en-Beaujolais et Saint-Lager
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : vive et charpentée, plus ronde avec l’âge<br/>
                                                                Robe : rouge grenat sombre<br/>
                                                                Arômes : fruits rouges (fraise, framboise), floraux ( violette, iris, pivoine), poivrée
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16°C<br/>
                                                                Accords mets/vin : charcuteries, volailles rôties, gibiers, veau<br/>
                                                                Garde : entre 3 et 8 ans selon les cuvées
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte-de-Brouilly<br/>
                                                                &middot; Appellation principale : Côte-de-Brouilly<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granites et schistes<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 320 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 15 455 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
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
                                                                <div class="titre">Chénas</div>
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
                                                                Le Chénas est un vin rouge AOC produit dans le vignoble du Beaujolais à cheval sur les départements du Rhône et de la Saône et Loire
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : charpentée et puissantes<br/>
                                                                Robe : rubis, grenat<br/>
                                                                Arômes : fruits rouges et noirs, pivoine, rose, épices
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 16°C<br/>
                                                                Accords mets/vin : parfait avec le gibiers<br/>
                                                                Garde : 8 à 10 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Chénas<br/>
                                                                &middot; Appellation principale : Chénas<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granite et limons<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 255 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 9 355 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
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
                                                                <div class="titre">Chiroubles</div>
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
                                                                Le Chiroubles est un vin rouge AOC produit dans le vignoble du Beaujolais, sur la commune de Chiroubles dans le département du Rhône. Etant situé à une altitude de 250 à 450 mètres, le Chiroubles est le cru le plus haut du beaujolais et est localisé entre les appellaLons Morgon et Fleurie
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : fine, tendre et fruitée<br/>
                                                                Robe : rubis<br/>
                                                                Arômes : fruits rouges (fraise des bois, framboise), floraux (rose, violette, iris, muguet, pivoine)
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16°C<br/>
                                                                Accords mets/vin : charcuteries lyonnaises<br/>
                                                                Garde : entre 3 et 8 ans selon les cuvées
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Chiroubles<br/>
                                                                &middot; Appellation principale : Chiroubles<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : sable granitique<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 350 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 16 475 hl. environ<br/>
                                                                &middot; Rendement moyen : maximum 52 hl/ha
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
                                                                <div class="titre">Fleurie</div>
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
                                                                Le Fleurie est un vin rouge AOC produit dans le vignoble du Beaujolais dans le département du Rhône. Ses vins sont souvent considérés comme les plus féminins en raison de leur finesse. L’appellation comporte 13 climats dont La Chapelle des Bois, Champagne, Les Moriers, La Roilette et la Madone
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : vive et franche<br/>
                                                                Robe : vermillon<br/>
                                                                Arômes : cerise, framboise, violette, iris, rose
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 12 à 13°C<br/>
                                                                Accords mets/vin : viandes blanches, volailles rôties<br/>
                                                                Garde : entre 3 et 8 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Fleurie<br/>
                                                                &middot; Appellation principale : Fleurie<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granitique<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 855 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 38 925 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
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
                                                                <div class="titre">Julienas</div>
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
                                                                Le Julienas est un vin rouge AOC produit dans le vignoble du Beaujolais à la limite entre les départements du Rhône et de Saône et Loire. Le Julienas est un des crus du Beaujolais les plus septentrionaux. Son nom serait une référence à l’Empereur Jules César
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : charpenté et nerveux<br/>
                                                                Robe : rubis intense<br/>
                                                                Arômes : fraise, violeOe, cerise, groseille, pivoine, cannelle, épices
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br/>
                                                                Accords mets/vin : fromages, volailles rôtis<br/>
                                                                Garde : entre 3 et 8 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Julienas<br/>
                                                                &middot; Appellation principale : Julienas<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granitique et sédimentaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 585 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 21 865 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
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
                                                                <div class="titre">Morgon</div>
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
                                                                Le Morgon est un vin rouge AOC produit dans le vignoble du Beaujolais dans le département du Rhône. Le Morgon est produit sur la commune de Villié-Morgon. C’est en surface la plus grande appellation du Vignoble du Beaujolais après le Brouilly. Deux lieux-dits de l’appellation sont réputés : Les Charmes et La Côte du Py. Le slogan de l’appellation Morgon est « Morgon : le fruit d’un Beaujolais, le charme d’un Bourgogne. » Car, de part sa puissance, il rappelle les vins de ce vignoble
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : charpenté et charnu<br/>
                                                                Robe : pourpre à reflets rubis, acajou avec l’âge<br/>
                                                                Arômes : fruits rouges (groseille) à noyaux (abricot, cerise, prune, pêche), sous bois
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br/>
                                                                Accords mets/vin : gibiers, canards rôtis<br/>
                                                                Garde : entre 3 et 8 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Morgon<br/>
                                                                &middot; Appellation principale : Morgon<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granitique et schistes<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 1 126 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 55 050 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 10ÈME TEXTE -->

                                                <!-- CONDITIONS 11ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet11" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Moulin-à-Vent</div>
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
                                                                Le Moulin-à-Vent est un vin rouge AOC produit dans le vignoble du Beaujolais à la limites des départements du Rhône et de la Saône et Loire. Le Moulin-à-Vent est produit sur les communes de Chénas et de Romanèche-Thorins. Sa dénominaNon vient d’un ancien moulin à vent, classé monument historique et se situant au centre du vignoble
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : longue<br/>
                                                                Robe : grenat sombre<br/>
                                                                Arômes : violette, cerise, puis iris, truffe, musc, épices et fruits murs avec l’âge
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br/>
                                                                Accords mets/vin : tournedos, viandes rouges rôties, coq au vin, gibiers, etc.<br/>
                                                                Garde : entre 5 et 10 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Moulin-à-Vent<br/>
                                                                &middot; Appellation principale : Moulin-à-Vent<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : granitique<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 665 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 30 145 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 11ÈME TEXTE -->

                                                <!-- CONDITIONS 12ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet12" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Régnié</div>
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
                                                                Le Régnié est un vin rouge AOC produit dans le vignoble du Beaujolais dans le département du Rhône. L’appellation Régnié est produite sur les communes de Regnié-Durette et de Lantignié. C’est le cru du vignoble du Beaujolais le plus récent à avoir été créé
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : fine et élégante<br/>
                                                                Robe : rouge cerise / rouge rubis<br/>
                                                                Arômes : fruits rouges (groseille, cassis, framboise), pêche mûre, violette
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 14 à 16 °C<br/>
                                                                Accords mets/vin : charcuteries, lapin<br/>
                                                                Garde : entre 3 et 5 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Régnié<br/>
                                                                &middot; Appellation principale : Régnié<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : sablonneux et argileux avec sous-sol de granite rose<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 400 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 17 400 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 12ÈME TEXTE -->

                                                <!-- CONDITIONS 13ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet13" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Saint-Amour</div>
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
                                                                LLe Saint-Amour est un vin rouge AOC produit dans le vignoble du Beaujolais dans le département de la Saône-et-Loire. L’appellation Saint-Amour est produite sur la commune de Saint-Amour-Bellevue. De part son nom (qui viendrait d’un soldat romain), il est souvent consommé lors de la Saint-Valentin
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : tendre, agréable et puissante<br/>
                                                                Robe : rubis, pourpre<br/>
                                                                Arômes : fruits rouges, pivoine, pêche, abricot
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 15 °C<br/>
                                                                Accords mets/vin : volailles, viandes rouges<br/>
                                                                Garde : entre 4 et 5 ans
                                                            </p>

                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Saint-Amour<br/>
                                                                &middot; Appellation principale : Saint-Amour<br/>
                                                                &middot; Vignoble : Beaujolais<br/>
                                                                &middot; Sol : argilo-silicieux<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges<br/>
                                                                &middot; Cépage dominant : Gamay<br/>
                                                                &middot; Superficie de production : 310 ha. environ en 2010<br/>
                                                                &middot; Production en hectolitre / an : 14 855 hl. environ<br/>
                                                                &middot; Rendement moyen : 58 à 63 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 13ÈME TEXTE -->

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
                @include('layouts.4emeniveau.beaujolais.droite')
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
                            <h3 class="rougegevrey gras">Les vins du Beaujolais</h3>
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
                            <div id="francemapbeaujolais"></div>
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
@include('layouts.4emeniveau.beaujolais.appelsjbeaujolais')

@include('layouts.4emeniveau.footer')
