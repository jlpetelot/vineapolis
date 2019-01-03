@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.macon.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Mâcon</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins de {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/macon.jpg') }}" alt="Mâcon">
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
                                                        Vignoble du Mâconnais
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Mâcon
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Mâcon-Villages
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 5ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Pouilly-Fuissé
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - FIN 4ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                <li>
                                                    <a href="#onglet5" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                        Pouilly-Loché
                                                    </a>
                                                </li>
                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET ET SUIVANTS - MENU AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Autres Mâcon<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">

                                                        <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet6" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown7">
                                                                Pouilly-Vinzelles
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - FIN 6ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - 7ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet7" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown8">
                                                                Saint-Véran
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 7ÈME ONGLET - FIN 7ÈME NAVIGATION -->

                                                        <!-- CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - 8ÈME NAVIGATION -->
                                                        <li>
                                                            <a href="#onglet8" role="tab" id="dropdown7-tab" data-toggle="tab" aria-controls="dropdown9">
                                                                Viré-Clessé
                                                            </a>
                                                        </li>
                                                        <!-- FIN CONDITIONS DE PRÉSENCE DU 8ÈME ONGLET - FIN 8ÈME NAVIGATION -->
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
                                                                <div class="titre">Vignoble du Mâconnais</div>
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
                                                                Le vignoble du Mâconnais se situe dans le département de la Saône et Loire en Bourgogne. Il forme une bande d’environ 35 km sur 10 km de large, s’étendant de Tournu à Mâcon. C’est une subdivision du vignoble de Bourgogne. Ce vignoble produit majoritairement des vins blancs (80 %) à cépage Chardonnay. Quelques rouges y sont également produit, mais à la différence du reste du Vignoble de Bourgogne où ces derniers sont à cépage Pinot Noir, les rouges produit dans le Vignoble du Mâconnais sont de cépage Gamay Noir
                                                            </p>
                                                            <p>
                                                                Liste des 5 appellations propres au vignoble du Mâconnais : Mâcon, Mâcon-Villages, Pouilly-Fuissé, Pouilly-Loché, Pouilly-Vinzelles, Saint-Véran, Viré-Clessé
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Vignoble du Mâconnais<br/>
                                                                &middot; Appellations : Mâcon, Mâcon-Villages, Pouilly-Fuissé, Pouilly-Loché, Pouilly-Vinzelles, Saint-Véran, Viré-Clessé, appellations régionales<br/>
                                                                &middot; Localisation : Saône et Loire (71)<br/>
                                                                &middot; Superficie plantée : Environ 6920 ha<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Vin blanc (85 %) et blanc (15 %)<br/>
                                                                &middot; Cépages dominants : Chardonnay pour les blancs, pinot noir pour les rouges<br/>
                                                                &middot; Production (en hectolitres) : 366 456 hl. environ en moyenne<br/>
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
                                                                <div class="titre">Mâcon</div>
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
                                                                Le Mâcon est un vin blanc, rouge ou rosé AOC. L’appellation comprend 27 dénominations
                                                                géographiques (par exemple, Mâcon-Fuissé, Mâcon-Loché, Mâcon-Lugny, etc.)
                                                                Il est classé parmi les appellations village du Vignoble Mâconnais.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Bouche : ronde et suave<br>
                                                                Robe : or blanc ou jaune paille<br>
                                                                Arômes : agrume, acacia, rose, citronnelle
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges</span><br>
                                                                Bouche : charnue et structurée<br>
                                                                Robe : cerise, rubis, reflets violacés<br>
                                                                Arômes : petits fruits rouges et noirs, sous bois, pruneau, champignon
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Température de service : 10 à 12 °C<br/>
                                                                Accords mets/vin : volailles, poissons, fromages de chèvre<br/>
                                                                Temps de garde : jusqu’à 3 ans environ
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les rouges</span><br>
                                                                Température de service : 14 à 15 °C selon l’âge<br/>
                                                                Accords mets/vin : charcuterie, boeuf, lapin, salades<br/>
                                                                Temps de garde : jusqu’à 3 ans environ
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Pour les rosés</span><br>
                                                                Température de service : 11 à 12 °C selon l’âge<br/>
                                                                Accords mets/vin : couscous, charcuterie, omeledes, hamburgers<br/>
                                                                Temps de garde : jusqu’à 2 ans environ
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Mâcon<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnaiss<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs, rouges et rosés<br/>
                                                                &middot; Cépages dominants : Chardonnay (blancs), Gamay et Pinot Noir (rouges et rosés)<br/>
                                                                &middot; Superficie de production : 1 907 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 123 406 hl environ<br/>
                                                                &middot; Rendement moyen : 55 à 70 hl/ha. pour les rouges, 60 à 75 hl/ha. pour les blancs
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
                                                                <div class="titre">Mâcon-Villages</div>
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
                                                                Le Mâcon-Villages est un vin blanc AOC à cépage Chardonnay produit sur 26 communes
                                                                du mâconnais en Saone et Loire. Il est classé parmi les appellations village
                                                                du Vignoble Mâconnais.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : ronde et suave<br>
                                                                Robe : or blanc ou jaune paille<br>
                                                                Arômes : agrume, acacia, rose, citronnelle, fougère
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : volailles, poissons, fromages de chèvre, ratatouille, Saint-Nectaire<br>
                                                                Temps de garde : jusqu’à 5 ans environ
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Mâcon-Villages<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnaiss<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 1 336 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 81 195 hl environ<br/>
                                                                &middot; Rendement moyen : 58 à 73 hl/ha
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
                                                                <div class="titre">Pouilly-Fuissé</div>
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
                                                                Le Pouilly-Fuissé est un vin blanc AOC produit sur les communes de Fuissé,
                                                                Soluté-Pouilly, Vergisson et Chaintré, en Saone et Loire.
                                                                Il est classé parmi les appellations village du Vignoble Mâconnais.
                                                                Le Pouilly-Fuissé est souvent surnommé le « Roi du Maconnais. »
                                                                Il ne faut pas le confondre avec le Pouilly-Fumé, produit en bord de Loire.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : riche, fine et distinguée<br/>
                                                                Robe : or pâle à soutenu, reflets verts du chardonnay<br/>
                                                                Arômes : notes très minérales, fleurs blanches (acacia, Mlleul), pierre à fusil, amandes grillées, noisettes, miel
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : grenouilles, volailles, quenelle en sauce, crustacés, foie gras cuit, sushis, gougères, fromages de chèvre
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Pouilly-Fuissé<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnaiss<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 757 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 42 929 hl environ<br/>
                                                                &middot; Rendement moyen : 58 à 70 hl/ha
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
                                                                <div class="titre">Pouilly-Loché</div>
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
                                                                Le Pouilly-Loché est un vin blanc AOC à cépage Chardonnay, produit sur la commune de Loché en Saône et Loire. Il est classé parmi les appellations village du Vignoble Mâconnais
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : opulente, vive et minérale<br/>
                                                                Robe : or-vert<br/>
                                                                Arômes : agrumes, acacia, aubépine, pamplemousse, avec l’âge : poire, abricot, fruits secs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : poissons, fruits de mer, huitres, crustacés, viandes blanches, fromages dechèvre<br>
                                                                Temps de garde : entre 2 et 5 ans, voir 10 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Pouilly-Loché<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnaiss<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 32 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 1 825 hl environ<br/>
                                                                &middot; Rendement moyen : 50 à 70 hl/ha
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
                                                                <div class="titre">Pouilly-Vinzelles</div>
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
                                                                Le Pouilly-Vinzelles est un vin blanc AOC à cépage Chardonnay, produit sur les communes de Vinzelles et de Loché en Saône et Loire. Il est classé parmi les appellations village du Vignoble Mâconnais
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : opulente, ample et minérale<br/>
                                                                Robe : or pâle<br/>
                                                                Arômes : agrumes, acacia, miel, abricot
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : poissons au beurre blancs, crustacés, andouilleVes, fromages de chèvre locaux<br>
                                                                Temps de garde : entre 5 et 10 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Pouilly-Vinzelles<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnais<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 52 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 2 717 hl environ<br/>
                                                                &middot; Rendement moyen : 50 à 70 hl/ha
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
                                                                <div class="titre">Saint-Véran</div>
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
                                                                Le Saint-Véran est un vin blanc AOC à cépage Chardonnay, produit sur les communes de Châne, Chasselas, Davayé, Leynes, Prissé, Saint-Vérand, Saint-Amour, Bellevue et Solutré-Pouilly en Saône et Loire. Le nom de la commune de Saint-Vérand prend un « d » contrairement au nom de l’appellation. Il est classé parmi les appellations village du Vignoble Mâconnais
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : franche, grasse et fraîche<br/>
                                                                Robe : or brillante<br/>
                                                                Arômes : poire, amande, cannelle, noisette, chèvrefeuille, fougère, pêche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 9 à 13 °C selon l’âge<br>
                                                                Accords mets/vin : poissons, fruits de mer, certain fromages (chèvre, bleu, beaufort, etc.)<br>
                                                                Temps de garde : jusqu’à 6 ans, plus pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Saint-Véran<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnais<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 679 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 40 832 hl environ<br/>
                                                                &middot; Rendement moyen : 55 à 70 hl/ha
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
                                                                <div class="titre">Viré-Clessé</div>
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
                                                                Le Viré-Clessé est un vin blanc AOC à cépage Chardonnay, produit sur les communes de Clessé, Laizé, Monbellet et Viré en Saone et Loire. Cette appellation remplace les anciennes appellations « Mâcon-Clessé » et « Mâcon-Viré. » Il est classé parmi les appellations village du Vignoble Mâconnais
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : persistante, vive et ronde<br/>
                                                                Robe : or-vert, or cendré<br/>
                                                                Arômes : fruités, rose, aubépine, acacia, citron lime, minéraux
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 9 à 13 °C selon l’âge<br>
                                                                Accords mets/vin : veau, crustacés, poissons, volailles, camembert, fromages de chèvre<br>
                                                                Temps de garde : jusqu’à 5 ans environ
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Mâcon<br/>
                                                                &middot; Appellation principale : Viré-Clessé<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble du Mâconnais<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : blancs 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 400 ha. environ en 2008<br/>
                                                                &middot; Production (en hectolitres) : 22 875 hl environ<br/>
                                                                &middot; Rendement moyen : 55 à 70 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 8ÈME TEXTE -->

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
                @include('layouts.4emeniveau.macon.droite')
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
                            <h3 class="rougegevrey gras">Les vignobles de Mâcon</h3>
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
                            <div id="francemapmacon"></div>
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
@include('layouts.4emeniveau.macon.appelsjsmacon')

@include('layouts.4emeniveau.footer')
