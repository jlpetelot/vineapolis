@include('layouts.header')

@include('layouts.2emeniveau.menubordeaux')

        <!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
            <div id="pagehome"><!-- page1erniveau -->
                <div class="container"><!-- Container Général -->
                    <div class="row"><!-- Row -->

                        <!-- =========================== ANNONCES GAUCHES ============================-->
                        @include('layouts.2emeniveau.bordeaux.gauche')
                        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

                        <!-- =================================== CARTE ================================-->
                        <div id="cartes"><!-- cartebourgogne -->

                            <div id="textecartes">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div id="titremap">
                                    <p>Vins de Bordeaux</p>
                                </div>
                            </div>
                            <div id="bordeauxmap"></div>

                            <!-- =============== LE TEXTE 1 ==============-->
                            <section id="marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Vignoble de Bordeaux&nbsp;</h3>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user blanccasse"></i>
                                                    <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                                </li>
                                                <li class="auteur">
                                                    <i class="fa fa-calendar blanccasse"></i>
                                                    <span class="pad3px blanccasse">Rédigé le 10 janvier 2019</span>
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
                                                    Le vignoble bordelais s’étend sur tout le département de la Gironde.<br/>
                                                    Il produit 39 A.O.C. : Barsac, Blaye, Bordeaux, Bordeaux supérieur, Cadillac, Canon Fronsac, Cérons, Côtes de Blaye, Côtes de Bordeaux, Côtes de Bordeaux-Saint-Macaire, Côtes de Bourg, Bourg et Bourgeais, Crémant de Bordeaux, Entre-deux-mers, Fronsac, Graves, Graves de Vayres, Graves supérieures, Haut-Médoc, Lalande-de-Pomerol, Listrac-Médoc, Loupiac, Lussac-Saint-Emilion, Margaux, Médoc, Montagne-saint-Emilion, Moulis, Pauillac, Pessac-Léognan, Pomerol, Premières Côtes de Bordeaux, Puisseguin-Saint-Emilion, Saint-Emilion, Saint-Emilion Grand Cru, Saint-Est-phe, Saint-George-Saint-Emilion, Saint-Julien, Sainte-Croix-du-Mont, Sainte-Foy-Bordeaux, Sauternes
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>&middot; Superficie plantée : 118 000 ha.<br/>
                                                    &middot; Hectolitres de vin produits : 5 983 000 hectolitres<br/>
                                                    &middot; Vins produits : rouges, blancs, mousseux et liquoreux<br/>
                                                    &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sémillon, sauvignon et muscadelle<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Sol : argilo-calcaire ou sables et graviers
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 1 ==============-->

                            <!-- =============== LE TEXTE 2 ==============-->
                            <section id="marque1marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Bordeaux&nbsp;</h3>
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
                                                    Le Bordeaux est un vin AOC rouge, rosé, blanc ou clairet produit dans le Vignoble de Bordeaux.
                                                    C’est l’appellation générique de ce vignoble.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : délicate
                                                <p>
                                                    Robe : rouge profond<br/>
                                                    Arômes : fruités
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Bouche : équilibrée et agréable
                                                <p>
                                                    Robe : jaune pâle
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Accords mets/vins : poissons, fruits de mer, crustacés
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Température de service : 8 °C
                                                <p>Accords mets/vins : fruits de mer, poissons, apéritif
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Bordeaux<br/>
                                                    &middot; Appellation principale : Bordeaux<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 49 955 ha.<br/>
                                                    &middot; Production (en hectolitres) : 2 254 225 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges (75 %), blancs (15 %), rosés (8 %), clairet (2 %)<br/>
                                                    &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sauvignon, sémillon, muscadelle<br/>
                                                    &middot; Rendement moyen : 55 à 77 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 2 ==============-->

                            <!-- =============== LE TEXTE 3 ==============-->
                            <section id="marque1marque2"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Bordeaux Supérieur&nbsp;</h3>
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
                                                    Le Bordeaux-supérieur est un vin AOC rouge ou blanc produit dans le Vignoble de Bordeaux. Comme l’appellation bordeaux, elle est produite sur l’ensemble du vignoble, mais avec des vignes plus âgées.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : ronde et puissante
                                                <p>
                                                    Robe : grenat<br/>
                                                    Arômes : fruits rouges et noirs, cacao, épices
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Bouche : dense et riche
                                                <p>
                                                    Robe : jaune<br/>
                                                    Arômes : vanille, agrumes
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Temps de garde : 5 ans<br/>
                                                    Accords mets/vins : côte de boeuf
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Température de service : 8 °C
                                                <p>
                                                    Temps de garde : 3 à 5 ans<br/>
                                                    Accords mets/vins : poissons grillés
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Bordeaux-supérieur<br/>
                                                    &middot; Appellation principale : Bordeaux-supérieur<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges (75 %), blancs (15 %), rosés (8 %), clairet (2 %)<br/>
                                                    &middot; Cépages dominants : merlot, cabernet franc, sauvignon, sémillon<br/>
                                                    &middot; Rendement moyen : 49 à 66 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 3 ==============-->

                            <!-- =============== LE TEXTE 4 ==============-->
                            <section id="marque1marque3"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Côtes-de-Bordeaux&nbsp;</h3>
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
                                                    Le Côtes-de-Bordeaux est un vin à majorité rouge, avec quelques blancs et liquoreux AOC produit dans le Vignoble de Bordeaux. L’appellation compte 4 dénominations géographiques : Blaye-côtes-de-Bordeaux, Cadillac-côtes-de-bordeaux, Castillon-côtes-de-bordeaux, francs-côtes-de-bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : corsée
                                                <p>
                                                    Robe : rouge profond<br/>
                                                    Arômes : fruits mûrs, vanille, cuir, truffe, sous-bois, venaison
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Bouche : grasse et élégante
                                                <p>
                                                    Robe : jaune reflets verts<br/>
                                                    Arômes : fruits secs, figue, poire, agrumes, vanilles, miel, genêt
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Temps de garde : de 3 à 8 ans<br/>
                                                    Accords mets/vins : viandes rouges, volaille, gibier
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Température de service : 10 à 12 °C
                                                <p>
                                                    Temps de garde : de 2 à 5 ans<br/>
                                                    Accords mets/vins : fruits de mer, poissons, apéritif
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Côtes-de-Bordeaux<br/>
                                                    &middot; Appellation principale : Côtes-de-Bordeaux<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 10 300 ha.<br/>
                                                    &middot; Production (en hectolitres) : 635 555 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges (99 %), blancs et liquoreux (1 %)<br/>
                                                    &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sauvignon, sémillon, muscadelle<br/>
                                                    &middot; Rendement moyen : 37 à 72 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 4 ==============-->

                            <!-- =============== LE TEXTE 5 ==============-->
                            <section id="marque1marque4"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Côtes-de-Bordeaux-Saint-Macaire&nbsp;</h3>
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
                                                    Le Côtes-de-Bordeaux-Saint-Macaire est un vin blanc AOC produit dans le Vignoble de Bordeaux, autour de la commune de Saint-Macaire en Gironde.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <span class="jaunefonce">Moelleux : </span>
                                                Bouche : dense et délicate
                                                <p>
                                                    Robe : jaune or<br/>
                                                    Arômes : notes florales, torréfaction
                                                </p>
                                                <h6 class="jaunefonce">garde, température et gastronomie :</h6>
                                                <span class="jaunefonce">Moelleux : </span>
                                                Température de service : 10 °C
                                                <p>
                                                    Accords mets/vins : desserts exotiques, foie gras
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Côtes-de-Bordeaux-Saint-Macaire<br/>
                                                    &middot; Appellation principale : Côtes-de-Bordeaux-Saint-Macaire<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs, moelleux, liquoreux<br/>
                                                    &middot; Superficie : 53 hectares<br/>
                                                    &middot; Production (en hl.) : 1010 hl.<br/>
                                                    &middot; Cépages dominants : semillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 37 à 65 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 5 ==============-->

                            <!-- =============== LE TEXTE 6 ==============-->
                            <section id="marque1marque5"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Premières-Côtes-de-Bordeaux&nbsp;</h3>
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
                                                    Le Premières-Côtes-de-Bordeaux est un vin blanc AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Bouche : grasse et douce
                                                    Robe : or<br/>
                                                    Arômes : acacia, tilleul, miel, agrumes
                                                </p>
                                                <p>
                                                    Température de service : 11 °C
                                                    Temps de garde : 4 à 8 ans<br/>
                                                    Accords mets/vins : apéritif, foie gras, volailles, plats exotiques
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Premières-Côtes-de-Bordeaux<br/>
                                                    &middot; Appellation principale : Premières-Côtes-de-Bordeaux<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 195 ha.<br/>
                                                    &middot; Production (en hectolitres) : 8 865 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs et moelleux<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 45 à 55 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 7 ==============-->

                            <!-- =============== LE TEXTE 7 ==============-->
                            <section id="marque1marque6"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Crémant-de-Bordeaux&nbsp;</h3>
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
                                                    Le Crémant-de-Bordeaux est un vin blanc ou rosé mousseux AOC produit sur l’ensemble du Vignoble de Bordeaux.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Arômes : fleurs, agrumes
                                                </p>
                                                <p>
                                                    Température de service : 8 °C<br/>
                                                    Accords mets/vins : apéritif
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Crémant-de-Bordeaux<br/>
                                                    &middot; Appellation principale : Crémant-de-Bordeaux<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : mousseux<br/>
                                                    &middot; Production (en hl.) : 19 560 hl.<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 72 à 78 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 7 ==============-->

                            <!-- =============== LE TEXTE 8 ==============-->
                            <section id="marque2"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Blaye&nbsp;</h3>
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
                                                    Le Blaye est un vin rouge AOC produit dans le Vignoble de Bordeaux, sur la rive droite de la Gironde.
                                                </p>
                                                <h6>caractère :</h6>
                                                <p>
                                                    Bouche : équilibrée et puissante<br/>
                                                    Robe : grenat profonde<br/>
                                                    Arômes : fruits rouges, épices, chocolat, vanille
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 16 °C<br/>
                                                    Temps de garde : 5 ans<br/>
                                                    Accords mets/vins : viandes rouges
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="rouge">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Blaye<br/>
                                                    &middot; Appellation principale : Blaye<br/>
                                                    &middot; Vignoble : de Bordeaux
                                                    &middot; Superficie plantée : 49 ha.
                                                    &middot; Production (en hectolitres) : 2 100 hl.
                                                    &middot; Climat : océanique
                                                    &middot; Vins produits : rouges
                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon et merlot
                                                    &middot; Rendement moyen : 48 à 60 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 8 ==============-->

                            <!-- =============== LE TEXTE 9 ==============-->
                            <section id="marque2marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Côtes-de-Blaye&nbsp;</h3>
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
                                                    Le Côtes-de-Blaye est un vin blanc AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Arômes : fleurs, agrumes
                                                </p>
                                                <p>
                                                    Température de service : 8 °C<br/>
                                                    Accords mets/vins : apéritif
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Côtes-de-Blaye<br/>
                                                    &middot; Appellation principale : Côtes-de-Blaye<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs secs<br/>
                                                    &middot; Production (en hl.) : 1000 à 2000 hl.<br/>
                                                    &middot; Cépages dominants : colombard, ugni blanc<br/>
                                                    &middot; Rendement moyen : 60 à 72 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 9 ==============-->

                            <!-- =============== LE TEXTE 10 ==============-->
                            <section id="marque3"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Cadillac&nbsp;</h3>
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
                                                    Le Cadillac est un vin blanc liquoreux AOC produit dans le Vignoble de Bordeaux, sur 22 communes située autour de Cadillac en Gironde.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Bouche : structurée et généreuse<br/>
                                                    Robe : or, ambrée en vieillissant<br/>
                                                    Arômes : acacia, tilleul, abricot, vanille, miel
                                                </p>
                                                <h6 class="jaunefonce">garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 8 °Cbr/>
                                                    Temps de garde : 10 ansbr/>
                                                    Accords mets/vins : roquefort, foie gras
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Cadillac<br/>
                                                    &middot; Appellation principale : Cadillac<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 128 ha.<br/>
                                                    &middot; Production (en hectolitres) : 6000 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs liquoreux<br/>
                                                    &middot; Cépages dominants : semillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 37 à 40 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 10 ==============-->

                            <!-- =============== LE TEXTE 11 ==============-->
                            <section id="marque4"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Cérons&nbsp;</h3>
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
                                                    Le Cérons est un vin liquoreux AOC produit dans le Vignoble de Bordeaux, autour de la commune de Cérons. Son aire de production et voisine avec celle du Sauternes.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Bouche : souple et ronde<br/>
                                                    Robe : or brillante<br/>
                                                    Arômes : miel, tilleul, abricot sec
                                                </p>
                                                <h6 class="jaunefonce">garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 8 à 9 °C<br/>
                                                    Temps de garde : de 5 à 15 ans<br/>
                                                    Accords mets/vins : volailles, foie gras, fromages à pâte persillée
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Cérons<br/>
                                                    &middot; Appellation principale : Cérons<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 38 ha.<br/>
                                                    &middot; Production (en hectolitres) : 1 335 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : liquoreux<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 40 à 44 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 11 ==============-->

                            <!-- =============== LE TEXTE 12 ==============-->
                            <section id="marque5"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Côtes-de-Bourg&nbsp;</h3>
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
                                                    Le Côtes-de-Bourg, appelé également « Bourg » ou « Bourgeais, » est un vin rouge ou blanc AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : ronde et charpentée
                                                <p>
                                                    Robe : rouge sombre<br/>
                                                    Arômes : fruits rouges et noirs, épices, vanille
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Bouche : grasse et harmonieuse
                                                <p>
                                                    Robe : jaune reflets verts<br/>
                                                    Arômes : fleurs blanches
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Temps de garde : de 3 à 8 ans<br/>
                                                    Accords mets/vins : viandes rouges, gibier, fromages à pâte cuite, charcuterie
                                                </p>
                                                <span class="vert">Pour les blancs : </span>
                                                Temps de garde : de 2 à 3 an
                                                <p>
                                                    Accords mets/vins : fruits de mer, poissons en sauce, viandes blanches, tartes
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Côtes-de-Bourg<br/>
                                                    &middot; Appellation principale : Côtes-de-Bourg<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 3 920 ha.<br/>
                                                    &middot; Production (en hectolitres) : 210 600 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges et blancs<br/>
                                                    &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sauvignon, sémillon, muscadelle<br/>
                                                    &middot; Rendement moyen : 55 à 65 hl/ha. pour les rouges, 60 à 71 hl/ha. pour les blancs
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 12 ==============-->

                            <!-- =============== LE TEXTE 13 ==============-->
                            <section id="marque6"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Entre-Deux-Mers&nbsp;</h3>
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
                                                    L'Entre-Deux-Mers est un vin blanc sec AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 class="jaunefonce">caractère :</h6>
                                                <p>
                                                    Bouche : souple et ronde<br/>
                                                    Robe : or brillante<br/>
                                                    Arômes : miel, tilleul, abricot sec
                                                </p>
                                                <h6 class="jaunefonce">garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 8 à 9 °C<br/>
                                                    Temps de garde : de 5 à 15 ans<br/>
                                                    Accords mets/vins : volailles, foie gras, fromages à pâte persillée
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Entre-Deux-Mers<br/>
                                                    &middot; Appellation principale : Entre-Deux-Mers<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 1 480 ha.<br/>
                                                    &middot; Production (en hectolitres) : 59 050 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 65 à 75 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 13 ==============-->

                            <!-- =============== LE TEXTE 14 ==============-->
                            <section id="marque7"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Fronsac&nbsp;</h3>
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
                                                    Le Fronsac est un vin rouge AOC produit dans le Vignoble de Bordeaux, autour de Fronsac au sud-est de Bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <p>
                                                    Bouche : dense et profonde<br/>
                                                    Robe : grenat soutenu<br/>
                                                    Arômes : fruits rouges et noirs, vanille, fèves de cacao, prunes
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 16 °C<br/>
                                                    Temps de garde : 5 ans<br/>
                                                    Accords mets/vins : tournedos rossini
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Fronsac<br/>
                                                    &middot; Appellation principale : Fronsac<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 830 ha.<br/>
                                                    &middot; Production (en hectolitres) : 44 400 hl.<br/>
                                                    &middot; Climat : tempéré océanique<br/>
                                                    &middot; Vins produits : rouges<br/>
                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon, merlot<br/>
                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 14 ==============-->

                            <!-- =============== LE TEXTE 15 ==============-->
                            <section id="marque9"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Canon-Fronsac&nbsp;</h3>
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
                                                    Le Canon-Fronsac est un vin rouge AOC produit dans le Vignoble de Bordeaux, autour de Fronsac au sud-est de Bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <p>
                                                    Bouche : dense et charnue<br/>
                                                    Robe : rubis pourpre<br/>
                                                    Arômes : fruits rouges et noirs, vanille, fèves de cacao
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 16 °C<br/>
                                                    Temps de garde : 20 ans<br/>
                                                    Accords mets/vins : entrecôte, lamproie à la bordelaise
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Canon-Fronsac<br/>
                                                    &middot; Appellation principale : Canon-Fronsac<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 300 ha.<br/>
                                                    &middot; Production (en hectolitres) : 16 200 hl.<br/>
                                                    &middot; Climat : tempéré océanique<br/>
                                                    &middot; Vins produits : rouges<br/>
                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon, merlot<br/>
                                                    &middot; Rendement moyen : 53 à 63 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 15 ==============-->

                            <!-- =============== LE TEXTE 16 ==============-->
                            <section id="marque8"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Graves&nbsp;</h3>
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
                                                    Le Graves est un vin rouge ou blanc AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : puissante et équilibrée
                                                <p>
                                                    Robe : rubis pourpre<br/>
                                                    Arômes : violette, fumée, fruits rouges, épices, moka, gibiers
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Bouche : charnue et fraîche
                                                <p>
                                                    Robe : jaune pâle<br/>
                                                    Arômes : agrumes, genêt, fruits exotiques
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Accords mets/vins : viandes rouges, gibier, fromages
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Accords mets/vins : fruits de mer, poissons en sauce, viandes blanches
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Graves<br/>
                                                    &middot; Appellation principale : Graves<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 3 420 ha.<br/>
                                                    &middot; Production (en hectolitres) : 138 835 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges (75 %) et blancs (25 %)<br/>
                                                    &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sauvignon, sémillon, muscadelle<br/>
                                                    &middot; Rendement moyen : 55 à 65 hl/ha. pour les rouges 58 à 65 hl./ha. pour les blancs
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 16 ==============-->

                            <!-- =============== LE TEXTE 17 ==============-->
                            <section id="marque8marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Graves-Supérieures&nbsp;</h3>
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
                                                    Le Graves-Supérieures est un vin blanc moelleux AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 class="jaunepale">caractère :</h6>
                                                <p>
                                                    Bouche : ronde et ample<br/>
                                                    Robe : jaune or<br/>
                                                    Arômes : fruits confits
                                                </p>
                                                <h6 class="jaunepale">garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 7 à 10 °C<br/>
                                                    Temps de garde : 3 à 10 ans<br/>
                                                    Accords mets/vins : desserts, foie gras
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 class="jaunepale">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Graves-Supérieures<br/>
                                                    &middot; Appellation principale : Graves-Supérieures<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 234 ha.<br/>
                                                    &middot; Production (en hectolitres) : 10 763 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : blancs moelleux<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 40 à 48 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 17 ==============-->

                            <!-- =============== LE TEXTE 18 ==============-->
                            <section id="marque8marque2"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Graves-de-Vayres&nbsp;</h3>
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
                                                    Le Graves-de-Vayres est un vin AOC rouge ou blanc produit dans le Vignoble de Bordeaux, sur les communes de Vayres et d’Arveyres en Gironde.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : généreuse
                                                <p>
                                                    Robe : grenat soutenu<br/>
                                                    Arômes : fruits rouges et noirs, moka, cacao
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Bouche : généreuse
                                                <p>
                                                    Robe : jaune paille<br/>
                                                    Arômes : acacia, agrumes, herbe, foin
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Temps de garde : 5 ans<br/>
                                                    Accords mets/vins : viande rouge
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Température de service : 8 °C
                                                <p>
                                                    Temps de garde : 3 ans<br/>
                                                    Accords mets/vins : fruits de mer, apéritif
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Graves-de-Vayres<br/>
                                                    &middot; Appellation principale : Graves-de-Vayres<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges, blancs<br/>
                                                    &middot; Superficie : 660 hectares<br/>
                                                    &middot; Production (en hl.) : 35 300 hl.<br/>
                                                    &middot; Cépages dominants : semillon, sauvignon, merlot<br/>
                                                    &middot; Rendement moyen : 50 à 72 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 18 ==============-->

                            <!-- =============== LE TEXTE 19 ==============-->
                            <section id="marque10"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Loupiac&nbsp;</h3>
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
                                                    Le Loupiac est un vin blanc liquoreux AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 style="color:#ff9e1d!important;">caractère :</h6>
                                                <p>
                                                    Bouche : grasse et équilibrée<br/>
                                                    Robe : dorée<br/>
                                                    Arômes : fruits confits, figue, miel, agrumes
                                                </p>
                                                <h6 style="color:#ff9e1d!important;">garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 6 à 8 °C<br/>
                                                    Temps de garde : 3 à 30 ans<br/>
                                                    Accords mets/vins : apéritif, foie gras, volailles
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 style="color:#ff9e1d!important;">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Loupiac<br/>
                                                    &middot; Appellation principale : Loupiac<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 350 ha.<br/>
                                                    &middot; Production (en hectolitres) : 12 550 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : liquoreux<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 40 à 44 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 19 ==============-->

                            <!-- =============== LE TEXTE 20 ==============-->
                            <section id="marque11"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Sainte-Croix-du-Mont&nbsp;</h3>
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
                                                <h6 style="color:#ff9e1d!important;"></h6>
                                                <p>
                                                    Le Sainte-Croix-du-Mont est un vin liquoreux AOC produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6 style="color:#ff9e1d!important;">caractère :</h6>
                                                <p>
                                                    Bouche : ample et complexe<br/>
                                                    Robe : jaune or<br/>
                                                    Arômes : figue, acacia, raisin sec, chèvrefeuille, pêche, abricot
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>
                                                    Température de service : 7 à 8 °C<br/>
                                                    Temps de garde : 3 ans<br/>
                                                    Accords mets/vins : apéritif, foie gras, volailles, desserts, poissons fins
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6 style="color:#ff9e1d!important;">fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Sainte-croix-du-mont<br/>
                                                    &middot; Appellation principale : Sainte-croix-du-mont<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Superficie plantée : 400 ha.<br/>
                                                    &middot; Production (en hectolitres) : 14 000 hl.<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : liquoreux<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, muscadelle<br/>
                                                    &middot; Rendement moyen : 40 à 44 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 20 ==============-->

                            <!-- =============== LE TEXTE 21 ==============-->
                            <section id="marque12"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Sainte-Foy-Bordeaux&nbsp;</h3>
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
                                                    Le Sainte-Foy-Bordeaux est un vin AOC rouge ou blanc produit dans le Vignoble de Bordeaux.
                                                </p>
                                                <h6>caractère :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Bouche : dense et profonde
                                                <p>
                                                    Robe : rouge profond<br/>
                                                    Arômes : fruits rouges et noirs, pivoine, cèdre
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Bouche : souple et harmieuse
                                                <p>
                                                    Robe : jaune pâle<br/>
                                                    Arômes : acacia, agrumes, tilleul
                                                </p>
                                                <span class="jaunechablis">Pour les liquoreux : </span>
                                                Bouche : dense
                                                <p>
                                                    Arômes : miel, cire, pâtes de fruits, notes florales
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <span class="rouge">Pour les rouges : </span>
                                                Température de service : 16 °C
                                                <p>
                                                    Temps de garde : 5 à 10 ans<br/>
                                                    Accords mets/vins : agneau
                                                </p>
                                                <span class="jaunepale">Pour les blancs : </span>
                                                Température de service : 11 °C
                                                <p>
                                                    Temps de garde : 5 à 10 ans<br/>
                                                    Accords mets/vins : agneau
                                                </p>
                                                <span class="jaunechablis">Pour les liquoreux : </span>
                                                Température de service : 8 °C
                                                <p>
                                                    Temps de garde : 10 ans<br/>
                                                    Accords mets/vins : apéritifs, foie gras, desserts
                                                </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>
                                                    &middot; Désignation : Sainte-Foy-Bordeaux<br/>
                                                    &middot; Appellation principale : Sainte-Foy-Bordeaux<br/>
                                                    &middot; Vignoble : de Bordeaux<br/>
                                                    &middot; Climat : océanique<br/>
                                                    &middot; Vins produits : rouges, blancs, moelleux et liquoreux<br/>
                                                    &middot; Superficie : 372 hectares<br/>
                                                    &middot; Production (en hl.) : 17 250 hl.<br/>
                                                    &middot; Cépages dominants : sémillon, sauvignon, cabernet sauvignon, cabernet franc, merlot<br/>
                                                    &middot; Rendement moyen : 37 à 72 hl/ha.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 21 ==============-->

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
                                                <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Les Bordeaux
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#marque1">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Vignoble de Bordeaux
                                                    </a>
                                                    <ul id="sousmenuderoulant">
                                                        <li>
                                                            <a href="#marque1marque1">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Bordeaux
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque1marque2">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Bordeaux Supérieur
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque1marque3">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Côtes-de-Bordeaux
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque1marque4">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Côtes-de-Bordeaux-Saint-Macaire
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque1marque5">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Premières-Côtes-de-Bordeaux
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque1marque6">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Crémant-de-Bordeaux
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#marque2">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Blaye
                                                    </a>
                                                    <ul id="sousmenuderoulant">
                                                        <li>
                                                            <a href="#marque2marque1">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Côtes-de-Blaye
                                                            </a>
                                                        </li>
                                                    </ul>
                                                <li>
                                                    <a href="#marque3">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Cadillac
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque4">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Cérons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque5">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Côtes-de-Bourg
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque6">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Entre-Deux-Mers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque7">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Fronsac
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque9">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Canon-Fronsac
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque8">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Graves
                                                    </a>
                                                    <ul id="sousmenuderoulant">
                                                        <li>
                                                            <a href="#marque8marque1">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Graves-Supérieures
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque8marque2">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Graves-de-Vayres
                                                            </a>
                                                        </li>
                                                    </ul>
                                                <li>
                                                <li>
                                                    <a href="{{ route('medoc') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Médoc
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="{{ route('pessacleognan') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Pessac-Léognan
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="#marque10">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Loupiac
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="{{ route('pomerol') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Pomerol
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="{{ route('saintemilion') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Saint-Émilion
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="#marque11">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Sainte-Croix-du-Mont
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="#marque12">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Sainte-Foy-Bordeaux
                                                    </a>
                                                <li>
                                                <li>
                                                    <a href="{{ route('sauternes') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Sauternes
                                                    </a>
                                                <li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <li class="menuinfo">
                                        <a href="#">
                                            <i class="fa fa-info-circle fa-3x" data-toggle="tooltip" data-placement="right" title="Cliquez sur les régions vinicoles de la carte dont l'intitulé apparaît au survol de la souris.&nbsp;Certains intitulés vous dirigeront vers une carte plus détaillée. D'autres disparaîtront."></i>
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

                        </div><!-- cartebourgogne -->
                        <!-- ================================= FIN CARTE ===============================-->

                        <!-- ============================= ANNONCES DROITES =============================-->
                        @include('layouts.2emeniveau.bordeaux.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

                    </div><!-- End Row -->
                    <!-- ==================================== MODAL  ===================================-->
                    <div id="modal">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                                    <div class="col-md-5 margehaute10px">
                                        <h3 class="vert gras">Bordeaux</h3>
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
                                    <div id="bordeauxmapmodal"></div>
                                </div><!-- ../col-md-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.2emeniveau.bordeaux.appelsjsbordeaux')
