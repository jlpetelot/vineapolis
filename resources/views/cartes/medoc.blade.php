@include('layouts.header')

@include('layouts.3emeniveau.medoc.menu')

        <!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.3emeniveau.medoc.gauche')
                    <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartechablis -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins du Médoc.</p>
                    </div>
                </div>
                <div id="cartemedoc"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Médoc&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 1er juillet 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Médoc est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : puissante et profonde<br/>
                                        Robe : grenat<br/>
                                        Arômes : fruits rouges, fruits cuits, fèves de cacao, cèdre, épices
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : viandes rouges poêlées
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot; Désignation : Médoc<br/>
                                        &middot; Appellation principale : Médoc<br/>
                                        &middot; Vignoble : de Bordeaux<br/>
                                        &middot; Superficie plantée : 5 700 ha.<br/>
                                        &middot; Production (en hectolitres) : 300 000 hl.<br/>
                                        &middot; Climat : océanique<br/>
                                        &middot; Vins produits : rouges<br/>
                                        &middot; Cépages dominants : cabernet sauvignon, merlot, cabernet franc, carménère, côt, petit verdot<br/>
                                        &middot; Rendement moyen : 55 à 65 hl/ha.
                                    </p>
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Haut-Médoc&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 1er juillet 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Haut-Médoc est un vin rouge AOC produit dans le Vignoble de Bordeaux..
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : dense et profonde<br/>
                                        Robe : grenat, reflets violets<br/>
                                        Arômes : fruits rouges et noirs, épices, moka, fèves de cacao
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Accords mets/vins : viandes rouges
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot; Désignation : Haut-Médoc<br/>
                                        &middot; Appellation principale : Haut-Médoc<br/>
                                        &middot; Vignoble : de Bordeaux<br/>
                                        &middot; Superficie plantée : 4 600 ha.<br/>
                                        &middot; Production (en hectolitres) : 255 000 hl.<br/>
                                        &middot; Climat : océanique<br/>
                                        &middot; Vins produits : rouges<br/>
                                        &middot; Cépages dominants : cabernet sauvignon, merlot<br/>
                                        &middot; Rendement moyen : 55 à 65 hl/ha.
                                    </p>
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE MENU ==============-->
                <nav id="menu">
                    <ul>
                        <li class="menucarte">
                            <a href="#cartes">
                                <i class="fa fa-map" aria-hidden="true"></i>&nbsp;Carte des vins
                            </a>
                        </li>
                        <ul id="menuderoulant">
                            <li>
                                <a href="#marque1">
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Médoc
                                </a>
                                <ul>
                                    <li>
                                        <a href="#marque2">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Haut-Médoc
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('margaux') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Margaux
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('moulislistrac') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Moulis et Listrac
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pauillac') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Pauillac
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('saintestephe') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saint-Estèphe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('saintjulien') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saint-Julien
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <li class="menuinfo">
                            <a href="#">
                                <i class="fa fa-info-circle fa-3x" data-toggle="tooltip" data-placement="right"
                                   title="Cliquez sur les régions vinicoles de la carte
                                       dont l'intitulé apparaît au survol de la souris.&nbsp;
                                       Certains intitulés vous dirigeront vers une carte plus détaillée.
                                       D'autres disparaîtront."></i>
                            </a>
                        </li>
                        <li class="menumodal">
                            <a href="#modal">
                                <i class="fa fa-desktop fa-2x" data-toggle="tooltip" data-placement="right2"
                                   title="Voir les parcelles en plein écran"></i>
                            </a>
                        </li>
                    </ul>
                </nav><!-- =============== LE MENU ==============-->

            </div><!-- ../cartechablis -->
            <!-- ================================= FIN CARTE ===============================-->

            <!-- ============================= ANNONCES DROITES =============================-->
            @include('layouts.3emeniveau.medoc.droite')
                    <!-- ========================== FIN ANNONCES DROITES ==========================-->
        </div><!-- End Row -->

        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Vins du Médoc</h3>
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
                        <div class="col-md-2"><!-- col-md-3 -->
                            <h6 class="medoc">CRUS CLASSÉS DE 1985</h6>
                            <h5 class="medoc">premiers crus</h5>
                           <p class="medoc">
                               Ch. Lafite-Rothschild<br/>
                               Ch. Latour<br/>
                               Ch. Margaux<br/>
                               Ch. Mouton-Rothschild
                           </p>
                            <h5 class="medoc">Deuxièmes Crus</h5>
                            <p class="medoc">
                                Ch. Rauzan-Ségla<br/>
                                Ch. Rauzan-Gassies<br/>
                                Ch. Léoville-Las-Cases<br/>
                                Ch. Léoville-Poyferré<br/>
                                Ch. Léoville-Barton<br/>
                                Ch. Durfort-Vivens<br/>
                                Ch. Gruaud-Larose<br/>
                                Ch. Lascombes<br/>
                                Ch. Brane-Cantenac<br/>
                                Ch. Pichon-Longueville<br/>
                                Ch. Pichon-Longueville-Comtesse-de-Lalande<br/>
                                Ch. Ducru-Beaucaillou<br/>
                                Ch. Cos-d’Estournel<br/>
                                Ch. Montrose
                            </p>
                            <h5 class="medoc">Troisièmes Crus</h5>
                            <p class="medoc">
                                Ch. Kirwan (à Cantenac)<br/>
                                Ch. d’Issan (à Cantenac)<br/>
                                Ch. Lagrange<br/>
                                Ch. Langoa-Barton<br/>
                                Ch. Giscours<br/>
                                Ch. Malescot-Saint-Exupéry<br/>
                                Ch. Boyd-Cantenac<br/>
                                Ch. Cantenac-Brown (à Cantenac)<br/>
                                Ch. Palmer (à Cantenac)<br/>
                                Ch. La Lagune (à Ludon)<br/>
                                Ch. Desmirail<br/>
                                Ch. Calon-Ségur<br/>
                                Ch. Ferrière<br/>
                                Ch. Marquis-d’Alesme-Becker
                            </p>
                            <h5 class="medoc">Quatrièmes Crus</h5>
                            <p class="medoc">
                                Ch. Saint-Pierre<br/>
                                Ch. Talbot<br/>
                                Ch. Branaire-Ducru5<br/>
                                Ch. Duhart-Milon<br/>
                                Ch. Pouget (à Cantenac)<br/>
                                Ch. La Tour-Carnet (à St-Laurent)<br/>
                                Ch. Lafon-Rochet<br/>
                                Ch. Beychevelle<br/>
                                Ch. Prieuré-Lichine (à Cantenac)<br/>
                                Ch. Marquis-de-Terme
                            </p>
                            <h5 class="medoc">Cinquièmes Crus</h5>
                            <p class="medoc">
                                Ch. Pontet-Canet<br/>
                                Ch. Batailley<br/>
                                Ch. Haut-Batailley<br/>
                                Ch. Grand-Puy-Lacoste<br/>
                                Ch. Grand-Puy-Ducasse<br/>
                                Ch. Lynch-Bages<br/>
                                Ch. Lynch-Moussas<br/>
                                Ch. Dauzac (à Labarde)<br/>
                                Ch. d’Armailhac<br/>
                                Ch. du Tertre (à Arsac)<br/>
                                Ch. Haut-Bages-Libéral<br/>
                                Ch. Pedesclaux<br/>
                                Ch. Belgrave (à St-Laurent)<br/>
                                Ch. Camensac (à St-Laurent)<br/>
                                Ch. Cos-Labory<br/>
                                Ch. Clerc-Milon<br/>
                                Ch. Croizet-Bages<br/>
                                Ch. Cantemerle (à Macau)
                            </p>
                        </div><!-- ../col-md-3 -->
                        <div class="col-md-2"><!-- col-md-3 -->
                            <h6 class="medoc">&nbsp;</h6>
                            <h5 class="medoc">appellations</h5>
                            <p class="medoc">
                                Pauillac<br/>
                                Pauillac<br/>
                                Margaux<br/>
                                Pauillac
                            </p>
                            <h5 class="medoc">&nbsp;</h5>
                            <p class="medoc">
                                Margaux<br/>
                                Margaux<br/>
                                Saint-Julien<br/>
                                Saint-Julien<br/>
                                Saint-Julien<br/>
                                Margaux<br/>
                                Saint-Julien<br/>
                                Margaux<br/>
                                Margaux<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Saint-Julien<br/>
                                Saint-Estèphe<br/>
                                Saint-Estèphe
                            </p>
                            <h5 class="medoc">&nbsp;</h5>
                            <p class="medoc">
                                Margaux<br/>
                                Margaux<br/>
                                Saint-Julien<br/>
                                Saint-Julien<br/>
                                Margaux<br/>
                                Margaux<br/>
                                Margaux<br/>
                                Margaux<br/>
                                Margaux<br/>
                                Haut-Médoc<br/>
                                Margaux<br/>
                                Saint-Estèphe<br/>
                                Margaux<br/>
                                Margaux
                            </p>
                            <h5 class="medoc">&nbsp;</h5>
                            <p class="medoc">
                                Saint-Julien<br/>
                                Saint-Julien<br/>
                                Saint-Julien<br/>
                                Pauillac<br/>
                                Margaux<br/>
                                Haut-Médoc<br/>
                                Saint-Estèphe<br/>
                                Saint-Julien<br/>
                                Margaux<br/>
                                Margaux
                            </p>
                            <h5 class="medoc">&nbsp;</h5>
                            <p class="medoc">
                                Pauillac<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Margaux<br/>
                                Pauillac<br/>
                                Margaux<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Haut-Médoc<br/>
                                Haut-Médoc<br/>
                                Saint-Estèphe<br/>
                                Pauillac<br/>
                                Pauillac<br/>
                                Haut-Médoc
                            </p>
                        </div><!-- ../col-md-3 -->

                        <div class="col-md-8">
                            <div id="mapmodalmedoc"></div>
                        </div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.3emeniveau.medoc.appelsjsmedoc')