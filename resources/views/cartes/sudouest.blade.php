@include('layouts.header')

@include('layouts.2emeniveau.menusudouest')

        <!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
<div id="pagehome"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->

            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.2emeniveau.sudouest.gauche')
                    <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartebourgogne -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins du Sud-Ouest</p>
                    </div>
                </div>
                <div id="sudouestmap"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vins du Sud-Ouest</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 30 juin 2015</span>
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
                                        Le vignoble du sud-ouest s’étend sur 13 départements, de l’Aveyron jusqu’au Pays Basque.
                                    </p>
                                    <p>
                                        Le Vignoble du Sud-Ouest produit 30 A.O.C. :<br/>
                                        Béarn, Bergerac, Brulhois, Buzet, Cahors, Coteaux du Quercy, Côtes de Bergerac, Côtes de Duras, Côtes de Millau, Côtes de Montravel, Côtes de Marmandais, Entraygues-le-Fel, Estaing, Fronton, Gaillac, Gaillac-premières-côtes, Haut-Montravel, Irouléguy, Jurançon, Madiran, Marcillac, Montbazillac, Montravel, Pacherenc du Vic-Bilh, Pécharmant, Rosette, Saint-Mont, Saint-Sardos, Saussignac, Saussignac, Tursan, Agenais, Ariège, Atlantique, Aveyron, Comté Tolosan, Coteaux de Glanes, Côtes du Lot, Côtes du Tarn, Gers, Lavilledieu, Périgord, Thézac-Perricard, Vins de la Corrèze.
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <h6>Le Vignoble de Bourgogne en quelques chiffres :</h6>
                                    <p>
                                        &middot; Superficie plantée : 47 000 ha.<br/>
                                        &middot; Hectolitres de vin produits : 2 900 000 hectolitres<br/>
                                        &middot; Vins produits : rouges (46 %), blancs (33 %), liquoreux (8 %)<br/>
                                        &middot; Cépages dominants : merlot, cabernet sauvignon, cabernet franc, sémillon, sauvignon, colombard, gros manseng, mauzac, muscadelle, petit manseng, ugni blanc, abouriou, côt, duras, fer servadou, negrette, tannat<br/>
                                        &middot; Climat : océanique à l’ouest, des pyrénées au sud et méditerranéen à l’est.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 3 ==============-->
                <section id="marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Bergerac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Bergerac est un vin rouge, blanc ou rosé AOC produit dans le Vignoble du Sud-Ouest.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : longue<br/>
                                        Robe : rouge grenat<br/>
                                        Arômes : cassis, épices, griottes
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : gourmande<br/>
                                        Robe : tire sur le gris<br/>
                                        Arômes : fruits rouges et noirs
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : suave et puissante<br/>
                                        Robe : or pâle<br/>
                                        Arômes : pêche, abricot, pamplemousse
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 3 à 5 ans<br/>
                                        Accords mets/vins : viandes rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 12 °C<br/>
                                        Accords mets/vins : charcuterie, apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : fruits de mer
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Bergerac<br/>
                                        &middot; Appellation principale : Bergerac<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 6 934 ha.<br/>
                                        &middot; Production (en hectolitres) : 348 565 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : sauvignon, cabernet franc, cabernet sauvignon, côt, muscadelle, sémillon<br/>
                                        &middot; Rendement moyen : de 60 à 77 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 3 ==============-->

                <!-- =============== LE TEXTE 4 ==============-->
                <section id="marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côtes-de-Bergerac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Côtes-de-Bergerac est un vin rouge ou blanc AOC produit dans le Vignoble du Sud-Ouest, en Dordogne. L’appellation Côtes-de-Bergerac est une appellation locale au sein de l’AOC Bergerac.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : dense et robuste<br/>
                                        Robe : rouge sombre<br/>
                                        Arômes : fruits rouges et noirs mûrs, fève de cacao, café, caramel, épices, sous-bois
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : sucrée et nerveuse<br/>
                                        Robe : jaune pâle<br/>
                                        Arômes : miel, cire
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : viandes Rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : foie gras
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Côtes-de-Bergerac<br/>
                                        &middot; Appellation principale : Côtes-de-Bergerac<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 1 600 ha.<br/>
                                        &middot; Production (en hectolitres) : 80 000 hl. environ<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, blancs<br/>
                                        &middot; Cépages dominants : cabernet franc, cabernet sauvignon, côt, merlot, muscadelle, sauvignon, semillon<br/>
                                        &middot; Rendement moyen : 50 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 4 ==============-->

                <!-- =============== LE TEXTE 5 ==============-->
                <section id="marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Montravel&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Montravel est un vin rouge ou blanc AOC produit dans le Vignoble du Sud-ouest, dans le département de la Dordogne.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : robuste et structurée<br/>
                                        Robe : rubis intense<br/>
                                        Arômes : fruits rouges et noirs, vanille, cuir, musc
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : ronde et fraîche<br/>
                                        Robe : jaune, reflets vert<br/>
                                        Arômes : épices, fruits exotiques, pierre à fusil
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 1 à 3 ans<br/>
                                        Accords mets/vins : gibiers, viandes rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : saumon fumé
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Montravel<br/>
                                        &middot; Appellation principale : Montravel<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 246 ha.<br/>
                                        &middot; Production (en hectolitres) : 1 153 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, blancs<br/>
                                        &middot; Cépages dominants : sauvignon, merlot, cabernet sauvignon<br/>
                                        &middot; Rendement moyen : maximum 50 à 60 hl./ha. en rouge, 58 à 70 hl./ha. en blanc</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 5 ==============-->

                <!-- =============== LE TEXTE 6 ==============-->
                <section id="marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côtes-de-Montravel&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Côtes-de-Montravel est un vin blanc moelleux AOC produit dans le Vignoble du Sud-Ouest, en Dordogne.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : fine et équilibrée<br/>
                                        Robe : jaune pâle<br/>
                                        Arômes : fruits confits, agrumes, abricot, pêche, poire, miel, cire
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Temps de garde : plus de 10 ans<br/>
                                        Accords mets/vins : desserts, foie gras
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Côtes-de-Montravel<br/>
                                        &middot; Appellation principale : Côtes-de-Montravel<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 49 ha.<br/>
                                        &middot; Production (en hectolitres) : 2 362 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : blancs moelleux<br/>
                                        &middot; Cépages dominants : sauvignon, sémillon, muscadelle<br/>
                                        &middot; Rendement moyen : de 50 à 60 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 6 ==============-->

                <!-- =============== LE TEXTE 7 ==============-->
                <section id="marque7"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Haut-Montravel&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Haut-Montravel est un vin blanc moelleux AOC produit dans le Vignoble du Sud-Ouest, en Dordogne.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : généreuse et équilibrée<br/>
                                        Robe : jaune pâle<br/>
                                        Arômes : fruits confits, agrumes, abricot, pêche, melon, fruits secs
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : foie gras
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Haut-Montravel<br/>
                                        &middot; Appellation principale : Haut-Montravel<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 49 ha.<br/>
                                        &middot; Production (en hectolitres) : 2 362 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : blancs moelleux<br/>
                                        &middot; Cépages dominants : sauvignon, sémillon, muscadelle<br/>
                                        &middot; Rendement moyen : de 50 à 60 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 7 ==============-->

                <!-- =============== LE TEXTE 8 ==============-->
                <section id="marque8"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Montbazillac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Montbazillac est un vin blanc liquoreux AOC produit dans le Vignoble du Sud-Ouest, en Dordogne, autour de la commune de Montbazillac.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : ample<br/>
                                        Robe : or, reflets dorés<br/>
                                        Arômes : fruits exotiques confits, miel, fleurs
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 9 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : foie gras, apéritifs, dessert
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Montbazillac<br/>
                                        &middot; Appellation principale : Montbazillac<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 3 600 ha.<br/>
                                        &middot; Production (en hectolitres) : 56 000 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : blancs liquoreux<br/>
                                        &middot; Cépages dominants : sémillon, sauvignon et muscadelle<br/>
                                        &middot; Rendement moyen : 30 à 40 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 8 ==============-->

                <!-- =============== LE TEXTE 9 ==============-->
                <section id="marque9"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Rosette&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Rosette est un vin blanc moelleux AOC produit dans le Vignoble du Sud-Ouest, en Dordogne.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : fraîche et équilibrée<br/>
                                        Robe : jaune paille<br/>
                                        Arômes : fruits à chair blanche, agrumes, fleurs blanches
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : maximum 5 ans<br/>
                                        Accords mets/vins : poissons, apéritifs
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Rosette<br/>
                                        &middot; Appellation principale : Rosette<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée :310 ha.<br/>
                                        &middot; Production (en hectolitres) : 402 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : blancs<br/>
                                        &middot; Cépages dominants : sémillon, sauvignon et muscadelle<br/>
                                        &middot; Rendement moyen : 50 à 60 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 9 ==============-->

                <!-- =============== LE TEXTE 10 ==============-->
                <section id="marque10"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saussignac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Saussignac est un vin blanc liquoreux AOC produit dans le Vignoble du Sud-Ouest, en Dordogne.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : suave et aromatique<br/>
                                        Robe : or, reflets dorés<br/>
                                        Arômes : fruits confits, fruits mûrs, abricots, cire, miel
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : maximum 5 ans<br/>
                                        Accords mets/vins : poissons, apéritifs, dessert
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Saussignac<br/>
                                        &middot; Appellation principale : Saussignac<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 49 ha.<br/>
                                        &middot; Production (en hectolitres) : 771 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : blancs liquoreux<br/>
                                        &middot; Cépages dominants : sémillon, sauvignon et muscadelle<br/>
                                        &middot; Rendement moyen : 25 à 30 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 10 ==============-->

                <!-- =============== LE TEXTE 11 ==============-->
                <section id="marque11"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Gaillac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Gaillac est un vin rouge, rosé, blanc ou mousseux AOC produit dans le Vignoble du Sud-ouest, dans le département du Tarn, au nord-est de la ville de Toulouse. Le vignoble de Gaillac est considéré par certains historiens comme « le plus vieux vignoble de France, » devant probablement sa création aux Gaulois, avant l’arrivée des Romains.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : gourmande et généreuse<br/>
                                        Robe : rubis soutenu<br/>
                                        Arômes : fruits noirs, violette, épices
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : vive<br/>
                                        Robe : rose saumon<br/>
                                        Arômes : fruits rouges, fleurs, épices, bonbon anglais
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : fraîche et délicate<br/>
                                        Robe : or<br/>
                                        Arômes : fruits à chair blanche, miel
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : entre 3 et 8 ans<br/>
                                        Accords mets/vins : viandes rouges, viandes blanches
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : fpoissons, fruits de mer
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Gaillac<br/>
                                        &middot; Appellation principale : Gaillac<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 3 923 ha.<br/>
                                        &middot; Production (en hectolitres) : 160 000 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé avec influence méditerranéenne<br/>
                                        &middot; Vins produits : rouges, rosés, blancs, mousseux<br/>
                                        &middot; Cépages dominants : len-de-l’el, mauzac, muscadelle, sauvignon, duras, fer servadou, syrah<br/>
                                        &middot; Rendement moyen : maximum 55 à 66 hl./ha. en rouge, 60 à 72 hl./ha. en blanc
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 11 ==============-->

                <!-- =============== LE TEXTE 12 ==============-->
                <section id="marque12"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Gaillac-Premières-Côtes&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Gaillac-Premières-Côtes est un vin blanc AOC produit dans le Vignoble du Sud-Ouest, dans le Tarn. Il est parmi les meilleurs vins blancs du sud-ouest.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p>
                                        Bouche : droite<br/>
                                        Robe : jaune pâle reflets verts<br/>
                                        Arômes : pommes cuites, poire, pêches, notes florales
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : fruits de mer
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Gaillac-Premières-Côtes<br/>
                                        &middot; Appellation principale : Gaillac-Premières-Côtes<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 8 ha.<br/>
                                        &middot; Production (en hectolitres) : 366 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : blancs<br/>
                                        &middot; Cépages dominants : sauvignon, mauzac, len-de-l’el, muscadelle<br/>
                                        &middot; Rendement moyen : de 45 à 54 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 12 ==============-->

                <!-- =============== LE TEXTE 13 ==============-->
                <section id="marque13"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Béarn&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Béarn est un vin blanc AOC produit dans le Vignoble du Sud-Ouest, dans les départements des Pyrénées-Atlantique, Hautes-Pyrénées et du Gers.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : riche et dense<br/>
                                        Robe : rouge sombre<br/>
                                        Arômes : fruits rouges et noirs, réglisse, poivre
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : gourmande<br/>
                                        Robe : tire sur le jaune<br/>
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : dense et équilibrée<br/>
                                        Robe : or pâle<br/>
                                        Arômes : agrumes
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : viandes rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : daubes
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : apéritifs, volailles
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Béarn<br/>
                                        &middot; Appellation principale : Béarn<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 259 ha.<br/>
                                        &middot; Production (en hectolitres) : 13 470 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : sauvignon, cabernet franc, cabernet sauvignon, tannat, petit et gros manseng<br/>
                                        &middot; Rendement moyen : de 50 à 60 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 13 ==============-->

                <!-- =============== LE TEXTE 14 ==============-->
                <section id="marque14"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Jurançon&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Jurançon est un vin blanc sec, moelleux ou liquoreux AOC produit dans le Vignoble du Sud-ouest, sur une partie des Pyrénées-Atlantiques.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Bouche : ronde et puissante<br/>
                                        Robe : jaune pâle, reflets dorés<br/>
                                        Arômes : fruits exotiques, agrumes, fruits à chair blanche, banane, épices, genêt
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Bouche : gourmande<br/>
                                        Robe : or, reflets dorés<br/>
                                        Arômes : fruits exotiques, agrumes, fleurs blanches, épices
                                    </p>
                                    <p><span class="vert">Blancs liquoreux :</span></p>
                                    <p>
                                        Bouche : profonde<br/>
                                        Robe : dorée<br/>
                                        Arômes : fruits confits, miel, épices
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Température de service : 11 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : poissons, gibiers, veau
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 7 ans<br/>
                                        Accords mets/vins : foie gras, dessert
                                    </p>
                                    <p><span class="vert">Blancs liquoreux :</span></p>
                                    <p>
                                        Temps de garde : quasiment illimité<br/>
                                        Accords mets/vins : apéritifs, digestifs
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Jurançon<br/>
                                        &middot; Appellation principale : Jurançon<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 932 ha.<br/>
                                        &middot; Production (en hectolitres) : 32 688 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé à tendance montagnarde<br/>
                                        &middot; Vins produits : blancs moelleux et liquoreux<br/>
                                        &middot; Cépages dominants : petit et gros manseng<br/>
                                        &middot; Rendement moyen : maximum 40 hl./ha. en moelleux, 60 à 66 hl./ha. en blanc sec
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 14 ==============-->

                <!-- =============== LE TEXTE 15 ==============-->
                <section id="marque15"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Madiran&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Madiran est un vin rouge AOC produit dans le Vignoble du Sud-Ouest, sur les départements du Gers, des Hautes-Pyrénées et des Pyrénées-Altlantique.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p>
                                        Bouche : puissante et charpentée
                                        Robe : noir profond<br/>
                                        Arômes : fruits rouges et noirs, cacao, moka, épices
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 20 ans<br/>
                                        Accords mets/vins : confit de canard
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Madiran<br/>
                                        &middot; Appellation principale : Madiran<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 1 273 ha.<br/>
                                        &middot; Production (en hectolitres) : 61 738 hl.<br/>
                                        &middot; Climat : tempéré océanique à tendance méditerranéenne<br/>
                                        &middot; Vins produits : rouges<br/>
                                        &middot; Cépages dominants : cabernet sauvignon, cabernet franc, fer-servadou, tannat<br/>
                                        &middot; Rendement moyen : maximum 55 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 15 ==============-->

                <!-- =============== LE TEXTE 16 ==============-->
                <section id="marque16"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Pacherenc du Vic-Bilh&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6 class="vert">présentation</h6>
                                    <p>
                                        Le Pacherenc du Vic-Bilh est un vin blanc sec, moelleux ou liquoreux AOC produit dans le Vignoble du Sud-ouest, sur les départements du Gars, des Hautes-Pyrénées et des Pyrénées-Atlantiques.
                                    </p>
                                    <h6 class="vert">Caractère :</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Bouche : souple et dense<br/>
                                        Robe : or, reflets dorés<br/>
                                        Arômes : fruits exotiques, agrumes, miel
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Bouche : équilibrée<br/>
                                        Robe : or, reflets dorés<br/>
                                        Arômes : fruits exotiques, fruits confits, miel
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="vert">garde, température et gastronomie</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Température de service : 11 °C<br/>
                                        Temps de garde : à boire jeune<br/>
                                        Accords mets/vins : fruits de mer, poissons
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 5 à 15 ans<br/>
                                        Accords mets/vins : foie gras
                                    </p>
                                    <h6 class="vert">fiche d’identité :</h6>
                                    <p> &middot; Désignation : Pacherenc du Vic-Bilh<br/>
                                        &middot; Appellation principale : Pacherenc du Vic-Bilh<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 570 ha.<br/>
                                        &middot; Production (en hectolitres) : 11 550 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé à tendance méditerranéenne<br/>
                                        &middot; Vins produits : blancs moelleux et liquoreux<br/>
                                        &middot; Cépages dominants : gros manseng, petit manseng, courbu et petit courbu<br/>
                                        &middot; Rendement moyen : maximum 40 hl./ha. en moelleux, 60 à 66 hl./ha. en blanc sec
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 16 ==============-->

                <!-- =============== LE TEXTE 17 ==============-->
                <section id="marque17"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saint-Mont&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Saint-Mont est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le département du Gers.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : dense et généreuse<br/>
                                        Robe : rouge profond<br/>
                                        Arômes : fruits noirs, réglisse
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fraîche et légère<br/>
                                        Robe : rose soutenu<br/>
                                        Arômes : petits fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Robe : jaune pâle<br/>
                                        Arômes : agrumes, fleurs blanches, noisette
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Accords mets/vins : magrets de canard, canard rôti
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 11 °C<br/>
                                        Accords mets/vins : fruits de mer
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Saint-Mont<br/>
                                        &middot; Appellation principale : Saint-Mont<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 1 200 ha.<br/>
                                        &middot; Production (en hectolitres) : 60 000 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé à tendance méditerranéenne<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : cabernet franc, cabernet sauvignon, gros manseng, petit manseng, sauvignon, tannat, fer servadou, arrufiac<br/>
                                        &middot; Rendement moyen : maximum 50 hl./ha..
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 17 ==============-->

                <!-- =============== LE TEXTE 18 ==============-->
                <section id="marque18"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Tursan&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Tursan est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans les départements du Gers et des Landes.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : puissante et robuste<br/>
                                        Robe : rouge noir<br/>
                                        Arômes : fruits rouges, épices, cuir
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fine et fraîche<br/>
                                        Robe : saumon pâle<br/>
                                        Arômes : petits fruits rouges, silex, pierre à fusil
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : vive et droite<br/>
                                        Robe : jaune paille<br/>
                                        Arômes : tilleul, verveine, fruits exotiques, agrumes
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Accords mets/vins : viandes rouges, gibiers
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : poissons, fruits de mer
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Tursan<br/>
                                        &middot; Appellation principale : Tursan<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 5 160 ha.<br/>
                                        &middot; Production (en hectolitres) : 20 000 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : cabernet franc, cabernet sauvignon, baroque, gros manseng, petit manseng, sauvignon, tannat, fer servadou
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 18 ==============-->

                <!-- =============== LE TEXTE 19 ==============-->
                <section id="marque19"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Brulhois&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Brulhois est un vin rouge ou rosé AOC produit dans le Vignoble du Sud-Ouest, dans les départements du Lot-et-Garonne, Tarn-et-Garonne et du Gers.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : ronde et puissante<br/>
                                        Robe : rouge profond<br/>
                                        Arômes : fruits noirs, vanille, épices, réglisse, sous-bois
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : ample et ronde<br/>
                                        Robe : rose soutenu<br/>
                                        Arômes : fruits rouges et noirs
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 2 à 3 ans<br/>
                                        Accords mets/vins : gibiers
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Temps de garde : 2 ans<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Brulhois<br/>
                                        &middot; Appellation principale : Brulhois<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 206 ha.<br/>
                                        &middot; Production (en hectolitres) : 11 000 hl.<br/>
                                        &middot; Climat : océanique<br/>
                                        &middot; Vins produits : rouges, rosés<br/>
                                        &middot; Cépages dominants : : sauvignon, cabernet franc, cabernet sauvignon, tannat, malbec, fer servadou<br/>
                                        &middot; Rendement moyen : maximum 50 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 19 ==============-->

                <!-- =============== LE TEXTE 20 ==============-->
                <section id="marque20"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Buzet&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Buzet est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le departement du Lot-et-Garonne.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : charnue, tannique et structurée<br/>
                                        Robe : rubis sombre<br/>
                                        Arômes : fruits rouges et noirs, pruneau
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : grasse et acide<br/>
                                        Robe : rose bonbon<br/>
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : gourmande<br/>
                                        Robe : jaune pâle<br/>
                                        Arômes : acacia, agrumes
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 3 à 10 ans<br/>
                                        Accords mets/vins : viande rouge, canard
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : charcuterie
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Buzet<br/>
                                        &middot; Appellation principale : Buzet<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 2 091 ha.<br/>
                                        &middot; Production (en hectolitres) : 115 003 hl..<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : sauvignon, cabernet franc, cabernet sauvignon, côt, merlot, muscadelle<br/>
                                        &middot; Rendement moyen : maximum 55 à 66 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 20 ==============-->

                <!-- =============== LE TEXTE 21 ==============-->
                <section id="marque21"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Cahors&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Cahors est un vin rouge AOC produit dans le Vignoble du Sud-Ouest, à l’ouest de la commune de Cahors.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p>
                                        Bouche : puissante et charnue<br/>
                                        Robe : noir brillante<br/>
                                        Arômes : fruits noirs, cerise, cassis, violette, réglisse, cannelle, sous-bois
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : gibiers
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Cahors<br/>
                                        &middot; Appellation principale : Cahors<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 4 050 ha.<br/>
                                        &middot; Production (en hectolitres) : 155 370 hl.<br/>
                                        &middot; Climat : océanique<br/>
                                        &middot; Vins produits : rouges<br/>
                                        &middot; Cépages dominants : côt, merlot, tannat<br/>
                                        &middot; Rendement moyen : 50 à 60 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 21 ==============-->

                <!-- =============== LE TEXTE 22 ==============-->
                <section id="marque22"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Coteaux-du-Quercy&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Coteaux-du-Quercy est un vin rouge ou rosé AOC produit dans le Vignoble du Sud-Ouest, dans le département du Tarn-et-Garonne et du Lot.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : dense et souple<br/>
                                        Robe : rouge profond<br/>
                                        Arômes : fruits rouges et noirs, épices, poivre
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : ronde et vive<br/>
                                        Robe : rose soutenu<br/>
                                        Arômes : fruits rouges, agrumes, fleurs blanches
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : gibiers, viandes rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Coteaux-du-Quercy<br/>
                                        &middot; Appellation principale : Coteaux-du-Quercy<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 400 ha.<br/>
                                        &middot; Production (en hectolitres) : 13 400 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé avec influence montagnarde<br/>
                                        &middot; Vins produits : rouges, rosés<br/>
                                        &middot; Cépages dominants : : cabernet franc, côt, merlot, tannat, gamay<br/>
                                        &middot; Rendement moyen : maximum 60 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 22 ==============-->

                <!-- =============== LE TEXTE 23 ==============-->
                <section id="marque23"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côtes-de-Duras&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Côtes-de-Duras est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le département du Lot-et-Garonne, autour de la commune de Duras.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : légère<br/>
                                        Robe : rouge violet<br/>
                                        Arômes : fruits rouges et noirs
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : friande et gourmande<br/>
                                        Robe : rose saumon<br/>
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : fraîche et délicate<br/>
                                        Robe : jaune pâle, reflets verts<br/>
                                        Arômes : fruités
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Accords mets/vins : viandes rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : barbecue, plats épicés, charcuterie
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : poissons, volailles, viandes blanches
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Côtes-de-Duras<br/>
                                        &middot; Appellation principale : Côtes-de-Duras<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 1 943 ha.<br/>
                                        &middot; Production (en hectolitres) : 111 660 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : merlot, côt, cabernet franc, cabernet sauvignon, semillon, muscadelle, mauzac, chenin, ondenc<br/>
                                        &middot; Rendement moyen : maximum 55 à 66 hl./ha. en rouge, 60 à 72 hl./ha. en blanc
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 23 ==============-->

                <!-- =============== LE TEXTE 24 ==============-->
                <section id="marque24"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côtes-du-Marmandais&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Côtes-du-Marmandais est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-Ouest, dans le département du Lot-et-Garonne.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : fine et ronde<br/>
                                        Robe : grenat soutenu<br/>
                                        Arômes : fruits rouges, épices, musc
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : dense et vivace et puissante<br/>
                                        Robe : rose soutenu<br/>
                                        Arômes : fruits rouges, épices
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : vive et ronde<br/>
                                        Robe : jaune pâle<br/>
                                        Arômes : agrumes, fruits à chair blanche, tilleul, acacia
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 à 10 ans<br/>
                                        Accords mets/vins : canard
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 11 °C<br/>
                                        Temps de garde : dans les 3 ans
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : fruits de mer, poissons grillés
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Côtes-du-Marmandais<br/>
                                        &middot; Appellation principale : Côtes-du-Marmandais<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 1 314 ha.<br/>
                                        &middot; Production (en hectolitres) : 37 387 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : cabernet franc, cabernet sauvignon, merlot, sauvignon<br/>
                                        &middot; Rendement moyen : maximum 55 à 66 hl/ha. en rouge et rosé, 60 à 72 hl//ha. en blanc
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 24 ==============-->

                <!-- =============== LE TEXTE 25 ==============-->
                <section id="marque25"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Fronton&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Fronton est un vin rouge ou rosé AOC produit dans le Vignoble du Sud-Ouest, autour de la ville de Fronton, à cheval sur les départements du Tarn-et-Garonne et de la Haute-Garonne.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : puissante et profonde<br/>
                                        Robe : rubis profond<br/>
                                        Arômes : fruits rouges et noirs, épices, poivre, fleurs, violette
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : aromatique et fraîche<br/>
                                        Robe : rose clair à profond<br/>
                                        Arômes : fruits rouges, agrumes, fleurs
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : gibiers, viandes rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Accords mets/vins : apéritif, plats épicés
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Fronton<br/>
                                        &middot; Appellation principale : Fronton<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 2 060 ha.<br/>
                                        &middot; Production (en hectolitres) : 65 000 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : rouges, rosés<br/>
                                        &middot; Cépages dominants : cabernet franc, côt, merlot, tannat, gamay<br/>
                                        &middot; Rendement moyen : maximum 60 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 25 ==============-->

                <!-- =============== LE TEXTE 26 ==============-->
                <section id="marque26"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Pecharmant&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Pecharmant est un vin rouge AOC produit dans le Vignoble du Sud-Ouest.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p>
                                        Bouche : longue et structurée<br/>
                                        Robe : grenat profond<br/>
                                        Arômes : fruits rouges murs, fruits cuits, fèves de cacao, café, vanille, sous-bois
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 15 ans<br/>
                                        Accords mets/vins : gibiers
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Pecharmant<br/>
                                        &middot; Appellation principale : Pecharmant<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 418 ha.<br/>
                                        &middot; Production (en hectolitres) : 14 864 hl.<br/>
                                        &middot; Climat : océanique<br/>
                                        &middot; Vins produits : rouges<br/>
                                        &middot; Cépages dominants : cabernet sauvignon, cabernet franc, merlot, malbec<br/>
                                        &middot; Rendement moyen : 45 à 54 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 26 ==============-->

                <!-- =============== LE TEXTE 27 ==============-->
                <section id="marque27"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saint-Sardos&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Le Saint-Sardos est un vin rouge ou rosé AOC produit dans le Vignoble du Sud-Ouest, dans les départements du Tarn-et-Garonne et de la Haute-Garonne.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : ronde et souple<br/>
                                        Robe : pourpre<br/>
                                        Arômes : fruits rouges et noirs, épices, réglisse
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : ronde et fraîche<br/>
                                        Robe : rose vif<br/>
                                        Arômes : fruits rouges et fleurs
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : cassoulet
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 9 °C<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Saint-Sardos<br/>
                                        &middot; Appellation principale : Saint-Sardos<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 150 ha.<br/>
                                        &middot; Production (en hectolitres) : 8 000 hl.<br/>
                                        &middot; Climat : tempéré océanique<br/>
                                        &middot; Vins produits : rouges, rosés<br/>
                                        &middot; Cépages dominants : : syrah, tannat, cabernet franc, merlot<br/>
                                        &middot; Rendement moyen : 60 hl/ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 27 ==============-->

                <!-- =============== LE TEXTE 28 ==============-->
                <section id="marque28"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Irouléguy&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 14 décembre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        L’Irouléguy est un vin rouge, rosé ou blanc AOC produit dans le Vignoble du Sud-ouest, dans le département des Pyrénées-Atlantiques. Il doit son nom au petit village basque « Irouléguy. » C’est le seul vignoble de France du pays Basque Français ; il est réparti sur 12 communes.
                                    </p>
                                    <h6>Caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : longue et charnue<br/>
                                        Robe : pourpre grenat<br/>
                                        Arômes : fleurs sauvages, épices, sous-bois, humus, fruits rouges et noirse
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : fraîche et aromatique<br/>
                                        Robe : dorée reflets verts<br/>
                                        Arômes : fleurs blanches, fruits exotiques
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : viril et souple<br/>
                                        Robe : framboise<br/>
                                        Arômes : fleurs sauvages
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 3 à 6 ans<br/>
                                        Accords mets/vins : viandes rouges, viandes blanches, confits de canard
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 1 à 3 ans<br/>
                                        Accords mets/vins : fruits de mer, poissons
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : à boire jeune<br/>
                                        Accords mets/vins : charcuteries, viandes blanches grillées et rôties
                                    </p>
                                    <h6>fiche d’identité :</h6>
                                    <p> &middot; Désignation : Irouléguy<br/>
                                        &middot; Appellation principale : Irouléguy<br/>
                                        &middot; Vignoble : du Sud-Ouest<br/>
                                        &middot; Superficie plantée : 210 ha.<br/>
                                        &middot; Production (en hectolitres) : 7 600 hl..<br/>
                                        &middot; Climat : tempéré océanique dégradé avec influence méditerranéenne et montagnarde<br/>
                                        &middot; Vins produits : rouges, rosés, blancs<br/>
                                        &middot; Cépages dominants : tannat, cabernet franc, courbu blanc, petit manseng, gros manseng<br/>
                                        &middot; Rendement moyen : maximum 55 à 60 hl./ha.
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 28 ==============-->

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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Vins du Sud-Ouest
                                </a>
                                <ul>
                                    <li><a href="{{ url('/france/sud-ouest/aveyron') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Vins de l'Aveyron
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Vins de Dordogne
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque3">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Bergerac
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côtes-de-Bergerac
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Montravel
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque6">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côtes-de-Montravel
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque7">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Haut-Montravel
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque8">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Montbazillac
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque9">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Rosette
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque10">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Saussignac
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#marque11">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Gaillac
                                        </a>
                                    </li>
                                    <li><a href="#marque12">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Gaillac-Premières-Côtes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque13">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Gers, Landes et Pyrénées
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque13">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Béarn
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque14">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Jurançon
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque15">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Madiran
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque16">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Pacherenc du Vic-Bilh
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque17">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Saint-Mont
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque18">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Tursan
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#marque19">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Gers, Tarn, Garonne, Lot
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque19">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Brulhois
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque20">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Buzet
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque21">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Cahors
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque22">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Coteaux-du-Quercy
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque23">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côtes-de-Duras
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque24">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côtes-du-Marmandais
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque25">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Fronton
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque26">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Pecharmant
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque27">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Saint-Sardos
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#marque28">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Irouléguy
                                        </a>
                                    </li>
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
            @include('layouts.2emeniveau.sudouest.droite')
                    <!-- ========================== FIN ANNONCES DROITES ==========================-->

        </div><!-- End Row -->
        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Vins de Bourgogne</h3>
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
                        <div id="sudouestmapmodal"></div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.2emeniveau.sudouest.appelsjssudouest')
