@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.alsace.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vins d'Alsace</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins d'Alsace sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/alsacesite.jpg') }}" alt="Alsace">
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
                                                        Vignoble d'Alsace
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Alsace
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Alsace Grand Cru
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Crémant d’Alsace
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME  ONGLET - FIN 4ÈME NAVIGATION -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- CONDITIONS 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Vignoble d'Alsace</div>
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
                                                                Le vignoble d'Alsace se situe dans les 2 départements d’Alsace : le Haut-Rhin et le Bas-Rhin.
                                                                Il s’étend sur toute la longueur de la région. Le vignoble produit majoritairement
                                                                des vins blancs et des mousseux (les appellations Alsace, Alsace Grand
                                                                Cru et Crémant d’Alsace) ainsi que quelques rosés et rouges (appellation Alsace).
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->

                                                            <h5 class="textetitre3"></h5>
                                                            <p>
                                                                &middot; Superficie plantée : 15 527 hectares environ en 2013<br/>
                                                                &middot; Hectolitres de vins produit / an : 1 166 900 hectolitres en 2009<br/>
                                                                &middot; Vins produits : blancs, mousseux, rouges et rosés<br/>
                                                                &middot; Appellations : Alsace, Alsace Grand Cru, Crémant d’Alsace<br/>
                                                                &middot; Rendement à l’hectare : variable selon les appellations - entre 55 et 80 hl./ha<br/>
                                                                &middot; Cépages dominants : riesling, pinot blanc, gewurztraminer, pinot gris, pinot noir et sylvaner<br/>
                                                                &middot; Climat : Tempéré continental<br/>
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
                                                                <div class="titre">Alsace</div>
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
                                                                L’appellation Alsace regroupe les 9 cépages cultivés dans la presque totalité du Vignoble d’Alsace. Il est essentiellement produit en blanc
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d'Alsace Riesling</span><br/>
                                                                Bouche : structurée, net et très fin<br/>
                                                                Robe : jaune brillante, reflets verts<br/>
                                                                Arômes : acacia, 6lleul, agrumes, notes minérales
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Gewurtztraminer</span><br>
                                                                Bouche : dense et longue<br/>
                                                                Robe : jaune foncé<br/>
                                                                Arômes : rose, litchi
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Muscat</span><br>
                                                                Robe : jaune avec reflets verdâtres<br/>
                                                                Arômes : sous-bois, miel, fleurs
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Pinot gris</span><br>
                                                                Bouche : puissante et équilibrée<br/>
                                                                Robe : jaune pale<br/>
                                                                Arômes : bourgeons de cassis<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d'Alsace Riesling</span><br/>
                                                                Temperature de service : 10 °C<br/>
                                                                Accords mets/vin : poissons grillés ou au beurre, volailles en sauce, chèvre frais, foie gras poêlé<br/>
                                                                Temps de garde : 10 ans
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Gewurtztraminer</span><br/>
                                                                Température de service : 10 °C<br/>
                                                                Accords mets/vin : munster, poissons grillés, cuisine asia6que et indienne, desserts, apéritif<br/>
                                                                Temps de garde : 10 ans
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Muscat</span><br/>
                                                                Temperature de service : 10 °C<br/>
                                                                Accords mets/vin : apéritif, cuisine alsacienne, dessert<br/>
                                                                Temps de garde : 10 ans
                                                            </p>
                                                            <p>
                                                                <span class="alsacecouleur gras">Vin d’Alsace Pinot gris</span><br/>
                                                                Temperature de service : 10 °C<br/>
                                                                Accords mets/vin : apéritif, desserts, viandes blanches, cuisine alsacienne<br/>
                                                                Temps de garde : 10 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Alsace<br/>
                                                                &middot; Appellation principale : Alsace<br/>
                                                                &middot; Vignoble : Alsace<br/>
                                                                &middot; Sol : granite, schiste, gneiss, grès ou calcaire<br/>
                                                                &middot; Climat : tempéré continental<br/>
                                                                &middot; Production : 92% blancs, 8 % rouges et rosés<br/>
                                                                &middot; Cépages dominants : riesling, gewurztraminer, muscat blanc, pinot gris, pinot noir<br/>
                                                                &middot; Superficie de production : 11 703 ha. environ<br/>
                                                                &middot; Production en hectolitre / an : 635 500 hl. environ<br/>
                                                                &middot; Rendement moyen : maximum 80 à 88 hl./ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 2ÈME TEXTE -->

                                                <!-- CONDITIONS 4ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet4" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Crémant d’Alsace</div>
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
                                                                Le Crémant d’Alsace est un vin mousseux généralement blanc, produit sur la totalité du vignoble d’Alsace. Son procédé de fabrication est le même que celui du Champagne, mais le Crémant d’Alsace à l’avantage d’être moins cher. Toutefois, il se conserve moins longtemps que le Champagne. Issu principalement du cépage pinot blanc, il est parfois élaboré avec le pinot gris, pinot noir (notamment pour le Crémant d’Alsace rosé, plus rare), riesling, auxerrois ou Chardonnay. Il représente à lui seul le quart de l’ensemble des appellations du vignoble d’Alsace.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="alsacecouleur gras">Crémant d’Alsace blanc</span><br/>
                                                                Bouche : bulles fines et régulières - fraiche et minérale<br/>
                                                                Robe : jaune pâle reflets dorés<br/>
                                                                Arômes : pêche, Illeul, acacia, pomme, poire, fruits secs, beurre
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Crémant d’Alsace rosé</span><br/>
                                                                Bouche : mousse harmonieuse - bouche dense<br/>
                                                                Robe : rose saumonée<br/>
                                                                Arômes : fruits rouges (groseille, cerise, framboise)
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="alsacecouleur gras">Crémant d’Alsace blanc</span><br/>
                                                                Temperature de service : entre 8 et 10 °C<br/>
                                                                Accords mets/vin : en apériIf avec des gougères<br/>
                                                                Temps de garde : entre 3 et 5 ans
                                                            </p>
                                                            <p>
                                                                <span class="rosechampagne gras">Crémant d’Alsace rosé</span><br/>
                                                                Temperature de service : 9 °C<br/>
                                                                Accords mets/vin : desserts, apéritif, volailles légères<br/>
                                                                Temps de garde : entre 2 et 3 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Crémant d’Alsace<br/>
                                                                &middot; Appellation principale : Crémant d’Alsace<br/>
                                                                &middot; Vignoble : Alsace<br/>
                                                                &middot; Sol : calcaire ou argilo-calcaire<br/>
                                                                &middot; Climat : tempéré continental<br/>
                                                                &middot; Production : blancs ou rosé<br/>
                                                                &middot; Cépages dominants : pinot blanc, chardonnay, auxerrois<br/>
                                                                &middot; Superficie de production : 3 017 ha. environ en 2009<br/>
                                                                &middot; Production en hectolitre / 235 705 hl. environ en 2009<br/>
                                                                &middot; Rendement moyen : 80 à 100 hl./ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 4ÈME TEXTE -->

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
                @include('layouts.4emeniveau.alsace.droite')
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
                            <h3 style="color: #f29100; font-weight: 700;">Les vins d'Alsace</h3>
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
                        <div class="col-md-6"><!-- col-md-3 -->
                            <div class="col-md-2">
                                <h6 class="couleuralsace">COMMUNES</h6><br/>
                                <p class="fontalsace">
                                    Albé<br/>
                                    Ammerschwihr<br/>
                                    Andlau<br/>
                                    Avolsheim<br/>
                                    Balbronn<br/>
                                    Barr<br/>
                                    Beblenheim<br/>
                                    Bennwihr<br/>
                                    Bergbieten<br/>
                                    Bergheim<br/>
                                    Bergholtz<br/>
                                    Bergholtz-Zell<br/>
                                    Bernardswiller<br/>
                                    Bernardvillé<br/>
                                    Berstett<br/>
                                    Berwiller<br/>
                                    Bischoffsheim<br/>
                                    Blienschwiller<br/>
                                    Boersch<br/>
                                    Bourgheim<br/>
                                    Buhl<br/>
                                    Cernay<br/>
                                    Châtenois<br/>
                                    Cléebourg<br/>
                                    Colmar<br/>
                                    Dahlenheim<br/>
                                    Dambach-la-Ville<br/>
                                    Dangolsheim<br/>
                                    Dieffenthal<br/>
                                    Dorlisheim<br/>
                                    Eguisheim<br/>
                                    Eichhoffen<br/>
                                    Epfig<br/>
                                    Ergersheim<br/>
                                    Flexbourg<br/>
                                    Furdenheim<br/>
                                    Gertwiller<br/>
                                    Gimbrett<br/>
                                    Goxwiller<br/>
                                    Gueberschwihr<br/>
                                    Guebwiller<br/>
                                    Hartmannswiller<br/>
                                    Hattstatt<br/>
                                    Heiligenstein<br/>
                                    Herrlisheim-près-Colmar<br/>
                                    Houssen<br/>
                                    Hunawihr<br/>
                                    Husseren-les-Châteaux<br/>
                                    Ingersheim<br/>
                                    Itterswiller<br/>
                                    Jungholtz<br/>
                                    Katzenthal<br/>
                                    Kaysersberg<br/>
                                    Kienheim<br/>
                                    Kientzheim<br/>
                                    Kintzheim<br/>
                                    Kirchheim<br/>
                                    Kuttolsheim<br>
                                    Leimbach<br/>
                                    Marlenheim<br/>
                                    Mittelbergheim<br/>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h6 class="couleuralsace"></h6><br/><br/>
                                <p class="fontalsace">
                                    Mittelwihr<br/>
                                    Molsheim<br/>
                                    Mutzig<br/>
                                    Niedermorschwihr<br/>
                                    Nordheim<br/>
                                    Nothalten<br/>
                                    Oberhoffen-lès-Wissembourg<br/>
                                    Obermorschwihr<br/>
                                    Obernai<br/>
                                    Odratzheim<br/>
                                    Orschwihr<br/>
                                    Orschwiller<br/>
                                    Osenbach<br/>
                                    Osthoffen<br/>
                                    Ottrott<br/>
                                    Pfaffenheim<br/>
                                    Reichsfeld<br/>
                                    Ribeauvillé<br/>
                                    Riedseltz<br/>
                                    Riquewihr<br/>
                                    Rodern<br/>
                                    Rorschwihr<br/>
                                    Rosenwiller<br/>
                                    Rosheim<br/>
                                    Rott<br/>
                                    Rouffach<br/>
                                    Saint-Hippolyte<br/>
                                    Saint-Nabor<br/>
                                    Saint-Pierre<br/>
                                    Scharrachbergheim-Irmstett<br/>
                                    Scherwiller<br/>
                                    Sigolsheim<br/>
                                    Soultz-Haut-Rhin<br/>
                                    Soultz-les-Bains<br/>
                                    Soultzmatt<br/>
                                    Steinbach<br/>
                                    Steinseltz<br/>
                                    Stotzheim<br/>
                                    Thann<br/>
                                    Traenheim<br/>
                                    Turckheim<br/>
                                    Uffholtz<br/>
                                    Vieux-Thann<br/>
                                    Villé<br/>
                                    Voegtlinshoffen<br/>
                                    Walbach<br/>
                                    Wangen<br/>
                                    Wattwiller<br/>
                                    Westhalten<br/>
                                    Westhoffen<br/>
                                    Wettolsheim<br/>
                                    Wihr-au-Val<br/>
                                    Wintzenheim<br/>
                                    Wissembourg<br/>
                                    Wolxheim<br/>
                                    Wuenheim<br/>
                                    Zellenberg<br/>
                                    Zellwiller<br/>
                                    Zimmerbach<br/>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <h6 class="couleuralsace">GRANDS CRUS</h6><br/>
                                <p class="font2alsace">
                                    Altenberg de Bergbieten<br/>
                                    Altenberg de Bergheim<br/>
                                    Altenberg de Wolxheim<br/>
                                    Brand<br/>
                                    Bruderthal<br/>
                                    Eichberg<br/>
                                    Engelberg<br/>
                                    Florimont<br/>
                                    Frankstein<br/>
                                    Froehn<br/>
                                    Furstentum<br/>
                                    Geisberg<br/>
                                    Gloeckelberg<br/>
                                    Goldert<br/>
                                    Hatschbourg<br/>
                                    Hengst<br/>
                                    Kæfferkopf<br/>
                                    Kanzlerberg<br/>
                                    Kastelberg<br/>
                                    Kessler<br/>
                                    Kirchberg de Barr<br/>
                                    Kirchberg de Ribeauvillé<br/>
                                    Kitterlé<br/>
                                    Mambourg<br/>
                                    Mandelberg<br/>
                                    Marckrain<br/>
                                    Moenchberg<br/>
                                    Muenchberg<br/>
                                    Ollwiller<br/>
                                    Osterberg<br/>
                                    Pfersigberg<br/>
                                    Pfingstberg<br/>
                                    Praelatenberg<br/>
                                    Rangen<br/>
                                    Kastelberg<br/>
                                    Kessler<br/>
                                    Kirchberg de Barr<br/>
                                    Kirchberg de Ribeauvillé<br/>
                                    Kitterlé<br/>
                                    Mambourg<br/>
                                    Mandelberg<br/>
                                    Marckrain<br/>
                                    Moenchberg<br/>
                                    Muenchberg<br/>
                                    Ollwiller<br/>
                                    Osterberg<br/>
                                    Pfersigberg<br/>
                                    Pfingstberg<br/>
                                    Praelatenberg<br/>
                                    Rangen<br/>
                                    Rosacker<br/>
                                    Særing<br/>
                                    Schlossberg<br/>
                                    Schoenenbourg<br/>
                                    Sommerberg<br/>
                                    Sonnenglanz<br/>
                                    Spiegel<br/>
                                    Sporen<br/>
                                    Steinert<br/>
                                    Steingrubler<br/>
                                    Steinklotz<br/>
                                    Vorbourg<br/>
                                    Wiebelsberg<br/>
                                    Wineck-Schlossberg<br/>
                                    Winzenberg<br/>
                                    Zinnkopflé<br/>
                                    Zotzenberg<br/>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="alsacemapmodal"></div>
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
@include('layouts.4emeniveau.alsace.appelsjsalsace')

@include('layouts.4emeniveau.footer')
