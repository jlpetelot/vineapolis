@include('layouts.header')

@include('layouts.2emeniveau.menuloire')

        <!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
<div id="pagehome"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->

            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.2emeniveau.loire.gauche')
                    <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartebourgogne -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins de la Loire et du Centre.</p>
                    </div>
                </div>
                <div id="loiremap"></div>

                <!-- =============== LE TEXTE 0 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Le vignoble de la Loire&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le vignoble de la Loire ou vignoble de la Vallée de la Loire s’étend sur 15 départements
                                        (Loire-Atlantique, Vendée, Maine-et-Loire, Deux-Sèvres, Vienne, Sarthe, Indre,
                                        Indre-et-Loire, Loir-et-Cher, Loiret, Nièvre, Allier, Puy-de-Dôme, Loire),
                                        tous situés au bord de la Loire et de ses affluents.
                                    </p>
                                    <p>
                                        Ce vaste vignoble regroupe 4 régions de production ou sous-vignoble :
                                        Le pays nantais, l’Anjou, la Touraine et le Centre.
                                    </p>
                                    <h6>Le Vignoble de la Loire produit 52 A.O.C.</h6>
                                    <p>
                                        Anjou, Anjou Villages, Anjou Villages Brissac, Anjou-Coteaux de la Loire,
                                        Bonnezeaux, Bourgueil, Cabernet d’Anjou, Cabernet de Saumur, Châteaumeillant,
                                        Cheverny, Chinon, Côte roannaise, Côteaux d’Ancenis, Côteaux de l’Aubance,
                                        Côteaux de Saumur, Côteaux du Giennois, Côteaux de Layon, Côteaux du Loir,
                                        Côteaux du Vendômois, Côtes d’Auvergne, Côtes du Forez, Cour-Cheverny,
                                        Crémant de Loire, Fiefs Vendéens, Gros Plant du Pays Nantais, Haut-Poitou,
                                        Jasnières, Menetou-Salon, Montlouis-sur-Loire, Muscadet, Muscadet Coteaux de la Loire,
                                        Muscadet Côtes Grandlieu, Muscadet Sèvre et Maine, Orléans, Orléans-Cléry,
                                        Pouilly-Fumé, Pouilly-sur-Loire, Quarts de Chaume, Quincy, Reuilly, Rosé d’Anjou,
                                        Rosé de Loire, Saint-Nicolas-de-Bourgueil, Saint-Pourçain, Sancerre, Saumur,
                                        Saumur-Champigny, Savennières, Touraine, Touraine Noble Joué, Valençay, Vouvray.
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Superficie plantée : 70 000 ha. dont 52 000 ha. en AOC.<br/>
                                        &middot;Sol : calcaire, mais aussi sable ou schistes<br/>
                                        &middot;Hectolitres de vin produits : 3 173 000 hectolitres (en 2010)<br/>
                                        &middot;Vins produits : rouges, rosés, blancs, mousseux et liquoreux<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon, gamay, pinot noir, chenin blanc, sauvignon, melon, chardonnay, folle blanche
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 0 ==============-->

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque2marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Anjou&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>L’anjou est un vin rouge, blanc, mousseux blanc ou mousseux rosé AOC produit
                                        dans le Vignoble de la Loire, dans la sous-région de production de l’anjou.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : souple, ronde
                                        Robe : rubis
                                        Arômes : fruits rouges, fleurs blanches
                                    </p>

                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : équilibrée
                                        Robe : jaune pâle
                                        Arômes : fruits à chair blanche, agrumes
                                    </p>
                                    <p><span class="vert">Mousseux blancs :</span></p>
                                    <p>
                                        Bouche : simple
                                        Robe : jaune paille
                                        Arômes : fruits à chair blanche
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 3 à 5 ans
                                        Accords mets/vins : volailles, lapin, viandes blanches
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : asperges, poissons
                                    </p>
                                    <p><span class="vert">Mousseux blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : desserts, apéritif
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : anjou<br/>
                                        &middot;Appellation principale : anjou<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 2 400 ha.<br/>
                                        &middot;Production (en hectolitres) : 135 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, blancs, mousseux<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon, gamay, pineau d’Aunis, chardonnay, sauvignon, chenin
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque2marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Anjou Côteaux de la Loire&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>L’Anjou-Côteaux-de-la-Loire est un vin blanc AOC produit dans le Vignoble de la Loire,
                                        sur le département du Maine-et-Loire, dans la sous-région de production de l’Anjou.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>Bouche : moelleuse
                                        Robe : or pâle
                                        Arômes : fruits à chair blanche, fruits exotiques
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>Température de service : 8 °C
                                        Temps de garde : 2 à 15 ans
                                        Accords mets/vins : desserts, foie gras
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot; Désignation : Anjou-coteaux-de-la-loire<br/>
                                        &middot; Appellation principale : Anjou-coteaux-de-la-loire<br/>
                                        &middot; Vignoble : de la Loire<br/>
                                        &middot; Superficie plantée : 28 ha.<br/>
                                        &middot; Production (en hectolitres) : 773 hl.<br/>
                                        &middot; Climat : tempéré océanique dégradé<br/>
                                        &middot; Vins produits : blancs<br/>
                                        &middot; Cépages dominants : chenin<br/>
                                        &middot; Rendement moyen : 35 à 40 hl/ha.<br/>
                                    </p>
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE TEXTE 3 ==============-->
                <section id="marque2marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Anjou-Villages&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        L’Anjou-villages est un vin rouge AOC produit dans le Vignoble de la Loire,
                                        sur les départements du Maine-et-Loire et des Deux-Sèvres,
                                        dans la sous-région de production de l’Anjou.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : puissante, charnue et tannique
                                        Robe : cerise noire
                                        Arômes : réglisse, fruits rouges et noirs
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 16 °C
                                        Temps de garde : 5 ans, 10 ans pour les grands millésimes
                                        Accords mets/vins : viandes rouges, gibiers
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : Anjou-villages<br/>
                                        &middot;Appellation principale : Anjou-villages<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 165 ha.<br/>
                                        &middot;Production (en hectolitres) : 5 340 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges<br/>
                                        &middot;Cépages dominants : cabernet franc<br/>
                                        &middot;Rendement moyen : 55 à 60 hl/ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 3 ==============-->

                <!-- =============== LE TEXTE 4 ==============-->
                <section id="marque2marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Anjou-Villages-Brissac&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        L’Anjou-Villages-Brissac est un vin rouge AOC produit dans le Vignoble de la Loire,
                                        sur le département du Maine-et-Loire, dans la sous-région de production de l’Anjou.
                                        Il est produit sur 10 communes situées autour du Château de Brissac.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : dense et profonde
                                        Robe : rouge sombre
                                        Arômes : fruits rouges et noirs mûrs, réglisse, pivoine
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 16 °C
                                        Temps de garde : 10 ans
                                        Accords mets/vins : viandes grillées, gibiers
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : Anjou-villages-brissac<br/>
                                        &middot;Appellation principale : Anjou-villages-brissac<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 87 ha.<br/>
                                        &middot;Production (en hectolitres) : 3 150 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon<br/>
                                        &middot;Rendement moyen : 50 à 56 hl/ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 4 ==============-->

                <!-- =============== LE TEXTE 5 ==============-->
                <section id="marque2marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Bonnezeaux&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Bonnezeaux est un vin blanc liquoreux AOC produit dans le Vignoble de la Loire,
                                        sur le département du Maine-et-Loire, dans la sous-région de production de l’Anjou.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : riche et délicate
                                        Robe : jaune dorée
                                        Arômes : fruits à chair blanche, acacia, poire, raisin, figue
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : jusqu’à 100 ans pour les grands millésimes
                                        Accords mets/vins : desserts, foie gras
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : Bonnezeaux<br/>
                                        &middot;Appellation principale : Bonnezeaux<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 120 ha.<br/>
                                        &middot;Production (en hectolitres) : 2 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs liquoreux<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 25 à 30 hl/ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 5 ==============-->

                <!-- =============== LE TEXTE 6 ==============-->
                <section id="marque2marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Cabernet d’Anjou&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Cabernet d’Anjou est un vin rosé AOC produit dans le Vignoble de la Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : ronde et suave
                                        Robe : pourpre
                                        Arômes : bonbon anglais, rose, groseille, framboise, menthe
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 2 ans
                                        Accords mets/vins : desserts, apéritif
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : cabernet d’anjou<br/>
                                        &middot;Appellation principale : cabernet d’anjou<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 4 450 ha.<br/>
                                        &middot;Production (en hectolitres) : 226 500 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rosé<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 6 ==============-->

                <!-- =============== LE TEXTE 8 ==============-->
                <section id="marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vignobles du Maconnais&nbsp;</h3>
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
                                    <p>Le Mâcon est un vin blanc, rouge ou rosé AOC.<br/>
                                        L’appellation comprends 27 dénominations géographique (par exemple, Mâcon-Fuissé, Mâcon-Loché, Mâcon-Lugny, etc.)<br/>
                                        Il est classé parmi les appellations village du Vignoble Mâconnais.</p>
                                    <h6>Caractère :</h6>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>Bouche : ronde et suave.<br/>
                                        Robe : or blanc ou jaune paille.<br/>
                                        Arômes : agrume, acacia, rose, citronnelle.</p>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Bouche : charnue et structurée.<br/>
                                        Robe : cerise, rubis, reflets violacés.<br/>
                                        Arômes : petits fruits rouges et noirs, sous bois, pruneau, champignon</p>
                                    <h6>garde, température et gastronomie</h6>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>Température de service : 10 à 12 °C.<br/>
                                        Accords mets/vin : volailles, poissons, fromages de chèvre.<br/>
                                        Temps de garde : jusqu’à 3 ans environ</p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Température de service : 14 à 15 °C selon l’âge.<br/>
                                        Accords mets/vin : charcuterie, bœuf, lapin, salades.<br/>
                                        Temps de garde : jusqu’à 3 ans environ.</p>
                                    <span class="rose">Rosés :</span>
                                    <p>Température de service : 11 à 12 °C selon l’âge.<br/>
                                        Accords mets/vin : couscous, charcuterie, omeledes, hamburgers.<br/>
                                        Temps de garde : jusqu’à 2 ans environ.</p>
                                    <h6>fiche d’identité :</h6>
                                    <p>&middot; Désignation : Mâcon.<br/>
                                        &middot; Appellation principale : Mâcon.<br/>
                                        &middot; Vignoble : Bourgogne.<br/>
                                        &middot; Sous-vignoble : Vignoble du Mâconnais.<br/>
                                        &middot; Sol : argilo-calcaire.<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : blancs, rouges et rosés.<br/>
                                        &middot; Cépages dominants : Chardonnay (blancs), Gamay et Pinot Noir (rouges et rosés).<br/>
                                        &middot; Superficie en production : 1 907 ha environ en 2008.<br/>
                                        &middot; Production (en hectolitres) : 123 406 hl environ.<br/>
                                        &middot; Rendement moyen : 55 à 70 hl/ha pour les rouges. 60 à 75 hl/ha pour les blancs.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 8 ==============-->

                <!-- =============== LE TEXTE 7 ==============-->
                <section id="marque2marque7"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Rosé d’Anjou&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le rosé d’Anjou est un vin rosé AOC produit dans le Vignoble de la Loire, dans la sous-région de production de l’anjou.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : équilibrée, ronde
                                        Robe : rose pâle
                                        Arômes : fruits rouges, bonbon anglais, banane, rose
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : desserts aux fruits, apéritif
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : rosé d’anjou<br/>
                                        &middot;Appellation principale : rosé d’anjou<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 2 200 ha.<br/>
                                        &middot;Production (en hectolitres) : 149 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rosé<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon, gamay, côt, pineau d’Aunis
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 7 ==============-->

                <!-- =============== LE TEXTE 8 ==============-->
                <section id="marque3marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Bourgueil&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le bourgueil est un vin rouge ou (en très petite quantité) rosé AOC produit
                                        dans le Vignoble de la Loire, en Indre-et-Loire, sur la commune de Bourgueil.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : ronde et délicate
                                        Robe : rouge grenat
                                        Arômes : fruits rouges et noirs, épices
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 10 ans
                                        Accords mets/vins : volaille
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : bourgueil<br/>
                                        &middot;Appellation principale : bourgueil<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 1 400 ha.<br/>
                                        &middot;Production (en hectolitres) : 70 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges (98 %) rosés (2%)<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon<br/>
                                        &middot;Rendement moyen : 55 à 67 hl/ha.
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 8 ==============-->

                <!-- =============== LE TEXTE 9 ==============-->
                <section id="marque3marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Chinon&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Chinon est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        sur le département de l’Indre-et-Loire, autour de la commune de Chinon.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : ronde et franche
                                        Robe : rubis
                                        Arômes : fruits rouges, épices, violette
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fruitée et vive
                                        Robe : rose clair
                                        Arômes : fruits rouges et noirs
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : fraîche
                                        Robe : jaune pâle
                                        Arômes : pomme, coing, agrumes
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C
                                        Temps de garde : 10 ans
                                        Accords mets/vins : viandes rouges, fromages
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Accords mets/vins : apéritifs, charcuteries
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : fruits de mer, poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : chinon<br/>
                                        &middot;Appellation principale : chinon<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 2 300 ha.<br/>
                                        &middot;Production (en hectolitres) : 110 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : cabernet sauvignon, cabernet franc, chenin blanc<br/>
                                        &middot;Rendement moyen : 55 à 67 hl./ha. en rouges et rosés, 55 à 69 hl./ha. en blancs
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 9 ==============-->

                <!-- =============== LE TEXTE 10 ==============-->
                <section id="marque3marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Jasnières&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Jasnières est un vin blanc AOC produit dans le Vignoble de la Loire,
                                        dans les communes de Lhomme et de Ruillé-sur-Loire sur le département de la Sarthes,
                                        dans la sous-région de production de la Touraine.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : ronde et fraîche
                                        Robe : jaune or
                                        Arômes : fruits à chair blanche, acacia, aubépine, agrumes
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 15 ans
                                        Accords mets/vins : fromages de chèvres, crustacés
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : jasnières<br/>
                                        &middot;Appellation principale : jasnières<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 65 ha.<br/>
                                        &middot;Production (en hectolitres) : 2 300 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 52 à 63 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 10 ==============-->

                <!-- =============== LE TEXTE 11 ==============-->
                <section id="marque3marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saint-Nicolas-de-Bourgeuil&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Saint-Nicolas-de-Bourgeuil est un vin rouge ou rosé AOC produit dans le Vignoble de la Loire, en Indre et Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : puissante et fine
                                        Robe : pourpre
                                        Arômes : fruits rouges et noirs
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : ronde et aromatique
                                        Robe : rose clair
                                        Arômes : fleurs
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 10 ans
                                        Accords mets/vins : viandes rouges et blanches
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Accords mets/vins : apéritif, barbecue
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : saint-nicolas-de-bourgeuil<br/>
                                        &middot;Appellation principale : saint-nicolas-de-bourgeuil<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 1 050 ha.<br/>
                                        &middot;Production (en hectolitres) : 57 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges et rosés<br/>
                                        &middot;Cépages dominants : cabernet franc, cabernet sauvignon<br/>
                                        &middot;Rendement moyen : 55 à 67 hl/ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 11 ==============-->

                <!-- =============== LE TEXTE 12 ==============-->
                <section id="marque3marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Touraine-Noble-Joué&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Touraine-Noble-Joué est un vin rosé AOC produit dans le Vignoble de la Loire,
                                        dans le département de la Nièvre en Indre et Loire (sous région de la Touraine).
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : aromatique et épicée
                                        Robe : grise, pelure d’oignon
                                        Arômes : petits fruits rouges acidulés, fruits des bois, jacinthe, pivoine
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : charcuteries
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : touraine-noble-joué<br/>
                                        &middot;Appellation principale : touraine-noble-joué<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 28 ha.<br/>
                                        &middot;Production (en hectolitres) : 1 700 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rosés<br/>
                                        &middot;Cépages dominants : pinot meunier<br/>
                                        &middot;Rendement moyen : 55 à 67 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 12 ==============-->

                <!-- =============== LE TEXTE 13 ==============-->
                <section id="marque3marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Touraine&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Touraine est un vin rouge, rosé, blanc ou mousseux AOC produit dans le Vignoble de la Loire,
                                        dans l’Indre-et-Loire et le Loir-et-Cher.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : fruitée et ronde
                                        Robe : cerise
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : légère et fraiche
                                        Robe : rose pâle
                                        Arômes : épices
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : minérale et vive
                                        Robe : jaune paille
                                        Arômes : fleurs blanche, fruits exotiques
                                    </p>
                                    <p><span class="vert">Mousseux :</span></p>
                                    <p>
                                        Bouche : bulles fines
                                        Robe : jaune pâle
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : touraine<br/>
                                        &middot;Appellation principale : touraine<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 5 300 ha.<br/>
                                        &middot;Production (en hectolitres) : 1 700 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs, mousseux<br/>
                                        &middot;Cépages dominants : pinot gris, pinot noir, pinot meunier<br/>
                                        &middot;Rendement moyen : 60 à 78 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 13 ==============-->

                <!-- =============== LE TEXTE 14 ==============-->
                <section id="marque4marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Chateaumeillant&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>Le chateaumeillant est un vin rouge ou rosé (dit « gris ») AOC produit dans le Vignoble de la Loire,
                                        entre le Cher et l’Indre.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Bouche : souple et délicate
                                        Robe : rubis violet
                                        Arômes : fruits rouges et noirs
                                    </p>
                                    <span class="rose">Rosés :</span>
                                    <p>Bouche : ronde et ronde
                                        Robe : saumonée
                                        Arômes : agrumes, violette
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Température de service : 15 °C
                                        Temps de garde : 5 ans
                                        Accords mets/vins : fromages, viandes rôties
                                    </p>
                                    <span class="rose">Rosés :</span>
                                    <p>Température de service : 9 °C
                                        Accords mets/vins : charcuteries
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : chateaumeillant<br/>
                                        &middot;Appellation principale : chateaumeillant<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 90 ha.<br/>
                                        &middot;Production (en hectolitres) : 5000 hl. Env.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges et rosés<br/>
                                        &middot;Cépages dominants : gamay<br/>
                                        &middot;Rendement moyen : 55 à 60 hl/ha.<br/>
                                    </p>
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 14 ==============-->

                <!-- =============== LE TEXTE 15 ==============-->
                <section id="marque4marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Cheverny&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>Le cheverny est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        sur le département du Loir-et-Cher, autour de la commune de Cheverny.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Bouche : souple et fruitée
                                        Robe : rubis
                                        Arômes : fruits rouges, épices
                                    </p>
                                    <span class="rose">Rosés :</span>
                                    <p>Bouche : délicate et fruitée
                                        Robe : saumon
                                        Arômes : cassis, fraise des bois
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>Bouche : ronde et équilibrée
                                        Robe : jaune pâle
                                        Arômes : agrumes, fruits à chair blanche, épices, réglisse
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>Température de service : 14 °C
                                        Temps de garde : 10 ans
                                        Accords mets/vins : viandes rouges, volailles, fromages
                                    </p>
                                    <span class="rose">Rosés :</span>
                                    <p>Température de service : 8 °C
                                        Temps de garde : dans l’année
                                        Accords mets/vins : salades, barbecue
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : fruits de mer, fromages de chèvre
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : cheverny<br/>
                                        &middot;Appellation principale : cheverny<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 607 ha.<br/>
                                        &middot;Production (en hectolitres) : 26 500 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : gamay, pinot noir, cabernet franc, côt, sauvignon, chardonnay, chenin, pineau d’Aunis<br/>
                                        &middot;Rendement moyen : 55 à 66 hl./ha. en rouges et rosés, 60 à 72 hl./ha. en blancs
                                    </p>
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 15 ==============-->

                <!-- =============== LE TEXTE 16 ==============-->
                <section id="marque4marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côteaux de l’Aubance&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Côteaux de l’Aubance est un vin blanc moelleux AOC produit dans le Vignoble de la Loire,
                                        dans le département du Maine-et-Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : équilibrée et délicate
                                        Robe : jaune or
                                        Arômes : abricot, poire, coing, oranges confites, acacia
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 5 ans
                                        Accords mets/vins : apéritifs, poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : coteaux-de-l’aubance<br/>
                                        &middot;Appellation principale : coteaux-de-l’aubance<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 179 ha.<br/>
                                        &middot;Production (en hectolitres) : 5 010 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs moelleux<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 35 à 40 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 16 ==============-->

                <!-- =============== LE TEXTE 17 ==============-->
                <section id="marque4marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côteaux du Giennois&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Côteaux du Giennois est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        sur les départements du Loir et et de la Nièvre.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : délicate et légère
                                        Robe : grenat intense
                                        Arômes : fruits rouges, venaison, cuir
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fruitée et ronde
                                        Robe : saumon pâle
                                        Arômes : fruits rouges, fruits à chair blanche
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : ronde et minérale
                                        Robe : jaune pâle
                                        Arômes : pomme, coing, agrumes, acacia, tilleul
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Accords mets/vins : viandes rouges, fromages
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : fruits de mer
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : côteaux-du-giennois<br/>
                                        &middot;Appellation principale : côteaux-du-giennois<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 190 ha.<br/>
                                        &middot;Production (en hectolitres) : 7 370 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : pinot noir, gamay, sauvignon<br/>
                                        &middot;Rendement moyen : 59 à 75 hl./ha. selon les vins
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 17 ==============-->

                <!-- =============== LE TEXTE 18 ==============-->
                <section id="marque4marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côteaux du Loir&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Côteaux du Loir est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        sur les départements de la Sarthe et de l’Indre-et-Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : ronde et vive
                                        Robe : rouge clair
                                        Arômes : fruits rouges, épices, cannelle, poivre
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : gourmande
                                        Robe : saumon pâle
                                        Arômes : fruits rouges, épices
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : souple et minérale
                                        Robe : jaune clair
                                        Arômes : fruits à chair blanche, agrume, silex, pierre à fusil
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : viandes rouges, fromages
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 5 à 10 ans
                                        Accords mets/vins : fruits de mer, poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : côteaux-du-loir<br/>
                                        &middot;Appellation principale : côteaux-du-loir<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 70 ha.<br/>
                                        &middot;Production (en hectolitres) : 3 100 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : pineau d’Aunis, chenin<br/>
                                        &middot;Rendement moyen : 55 à 65 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 18 ==============-->

                <!-- =============== LE TEXTE 19 ==============-->
                <section id="marque4marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côteaux du Vendômois&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Côteaux du Vendômois est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        dans le Loir-et-cher.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : fine et souple
                                        Robe : rouge
                                        Arômes : fruits noirs, épices, violette, fruits rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : gourmande
                                        Robe : saumon pâle
                                        Arômes : fruits rouges, épices
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : droite et structurée
                                        Robe : jaune or
                                        Arômes : fleurs blanches, coing
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 2 ans
                                        Accords mets/vins : charcuteries
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : sushis
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : fruits de mer, poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : coteaux-du-vendômois<br/>
                                        &middot;Appellation principale : coteaux-du-vendômois<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 152 ha.<br/>
                                        &middot;Production (en hectolitres) : 9 600 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : pineau d’Aunis, chenin, chardonnay, cabernet franc, pinot noir, gamay<br/>
                                        &middot;Rendement moyen : 55 à 66 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 19 ==============-->

                <!-- =============== LE TEXTE 20 ==============-->
                <section id="marque4marque7"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Cour Cheverny&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Cour Cheverny est un vin blanc AOC produit dans le Vignoble de la Loire, dans le département du Loir-et-Cher.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : sèche et fine
                                        Robe : jaune pâle
                                        Arômes : acacia, tilleul, agrumes, pierre à fusil, silex
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 5 ans
                                        Accords mets/vins : poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : cour-cheverny<br/>
                                        &middot;Appellation principale : cour-cheverny<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 50 ha.<br/>
                                        &middot;Production (en hectolitres) : 2 800 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs<br/>
                                        &middot;Cépages dominants : romorantin<br/>
                                        &middot;Rendement moyen : 60 à 72 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 20 ==============-->

                <!-- =============== LE TEXTE 21 ==============-->
                <section id="marque4marque8"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Haut Poitou&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Haut Poitou est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        dans la Vienne et les Deux-Sèvres.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : légère et fraîche
                                        Robe : rubis
                                        Arômes : fruits rouges et noirs, épices
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : souple et ronde
                                        Robe : rose pâle
                                        Arômes : petits fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : ample et ronde
                                        Robe : jaune pâle
                                        Arômes : fleurs blanches, agrumes, fruits exotiques
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : agneau
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : fromages, crustacés
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : haut-poitou<br/>
                                        &middot;Appellation principale : haut-poitou<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 754 ha.<br/>
                                        &middot;Production (en hectolitres) : 50 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : pinot noir, gamay, cabernet franc, sauvignon, fié gris<br/>
                                        &middot;Rendement moyen : 50 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 21 ==============-->

                <!-- =============== LE TEXTE 22 ==============-->
                <section id="marque4marque9"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Montlouis-sur-Loire&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Montlouis-sur-Loire est un vin blanc sec, moelleux et mousseux
                                        AOC produit dans le Vignoble de la Loire, sur deux communes du département
                                        de l’Indre-et-Loire : Montlouis-sur-Loire et Saint-Martin-le-Beau.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Bouche : ronde et vive
                                        Robe : jaune pâle
                                        Arômes : fruits à chair blanche, agrumes, bergamote, verveine
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Bouche : équilibrée
                                        Robe : jaune paille
                                        Arômes : fruits à chair blanche, fruits exotiques, litchi, verveine, coing
                                    </p>
                                    <p><span class="vert">Blancs mousseux :</span></p>
                                    <p>
                                        Bouche : fraîche, bulles fines
                                        Robe : jaune pâle
                                        Arômes : fleurs blanches, pommes
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : fromages
                                    </p>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 15 ans
                                        Accords mets/vins : foie gras, dessert, apéritif
                                    </p>
                                    <p><span class="vert">Blancs mousseux :</span></p>
                                    <p>
                                        Accords mets/vins : apéritifs
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : montlouis-sur-loire<br/>
                                        &middot;Appellation principale : montlouis-sur-loire<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 385 ha.<br/>
                                        &middot;Production (en hectolitres) : 15 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs, moelleux, mousseux<br/>
                                        &middot;Cépages dominants : chenin blanc<br/>
                                        &middot;Rendement moyen : 52 à 65 hl./ha. en blanc, 65 à 78 hl./ha. en mousseux
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 22 ==============-->

                <!-- =============== LE TEXTE 23 ==============-->
                <section id="marque4marque10"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Orléans&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        L’Orléans est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        dans le Loiret, sur 13 communes autour de la ville d’Orléans.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : légère et fraîche
                                        Robe : rubis
                                        Arômes : fruits rouges et noirs, épices
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fruitée
                                        Robe : rose pâle
                                        Arômes : petits fruits rouges, épices, menthe
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : grasse et ample
                                        Robe : jaune pâle
                                        Arômes : fleurs blanches, fleurs blanche, fruits exotiques
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 13 °C
                                        Temps de garde : 3 ans
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Accords mets/vins : apéritif
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : orléans<br/>
                                        &middot;Appellation principale : orléans<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 83 ha.<br/>
                                        &middot;Production (en hectolitres) : 2 100 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : cabernet franc, chenin<br/>
                                        &middot;Rendement moyen : 50 à 60 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 23 ==============-->

                <!-- =============== LE TEXTE 24 ==============-->
                <section id="marque4marque11"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Orléans-Cléry&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        L’Orléans-Cléry est un vin rouge AOC produit dans le Vignoble de la Loire,
                                        sur le département du Loiret, dans la sous-région de production du Centre.
                                        Il est produit sur 5 communes situées sur la rive gauche de la Loire :
                                        Cléry-Saint-André, Mareau-aux-Prés, Mézières-lez-Cléry, Olivet et Saint-Hilaire-Saint-Mesmin.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : corsé et tannique
                                        Robe : rouge soutenu
                                        Arômes : fruits rouges, épices, réglisse
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 16 °C
                                        Temps de garde : maximum 5 ans
                                        Accords mets/vins : volailles, charcuteries
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : Orléans-cléry<br/>
                                        &middot;Appellation principale : Orléans-cléry<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 28 ha.<br/>
                                        &middot;Production (en hectolitres) : 848 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges<br/>
                                        &middot;Cépages dominants : cabernet franc<br/>
                                        &middot;Rendement moyen : 50 à 65 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 24 ==============-->

                <!-- =============== LE TEXTE 25 ==============-->
                <section id="marque4marque12"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Valençay&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Valençay est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, dans l’Indre et le Loir-et-Cher.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : structurée
                                        Robe : rouge pâle
                                        Arômes : épices, fruits rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : délicate
                                        Robe : rose pâle
                                        Arômes : fruités
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : dense et minérale
                                        Robe : jaune pâle
                                        Arômes : agrumes, fleurs blanches, fruits exotiques
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 14 °C
                                        Temps de garde : 5 ans
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 15 ans
                                        Accords mets/vins : fromages de chèvre
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : valençay<br/>
                                        &middot;Appellation principale : valençay<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 165 ha.<br/>
                                        &middot;Production (en hectolitres) : 7 600 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : gamay, sauvignon<br/>
                                        &middot;Rendement moyen : 55 à 68 hl./ha.
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 25 ==============-->

                <!-- =============== LE TEXTE 26 ==============-->
                <section id="marque4marque13"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vouvray&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Vouvray est un vin blanc sec, moelleux ou mousseux AOC produit dans le Vignoble de la Loire,
                                        en Indre-et-Loire autour de la commune de Vouvray.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Bouche : équilibrée
                                        Robe : jaune paille
                                        Arômes : fruits confits, fleurs blanches
                                    </p>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Bouche : minérale et fine
                                        Robe : jaune pâle
                                        Arômes : fleurs blanche, agrumes
                                    </p>
                                    <p><span class="vert">Mousseux :</span></p>
                                    <p>
                                        Bouche : bulle fines et régulière
                                        Robe : jaune
                                        Arômes : amandes, noisettes, pommes
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : 50 ans
                                        Accords mets/vins : dessert, foie gras
                                    </p>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Accords mets/vins : charcuteries
                                    </p>
                                    <p><span class="vert">Mousseux :</span></p>
                                    <p>
                                        Température de service : 10 °C
                                        Accords mets/vins : apéritif
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : vouvray<br/>
                                        &middot;Appellation principale : vouvray<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 2000 ha.<br/>
                                        &middot;Production (en hectolitres) : 115 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs secs, moelleux et mousseux<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 52 à 78 hl./ha.
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 26 ==============-->

                <!-- =============== LE TEXTE 27 ==============-->
                <section id="marque5marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côteaux d’Ancenis&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Côteaux d’Ancenis est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                        dans le Maine-et-Loir et la Loire-Atlantique.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : vive et fruitée
                                        Robe : rouge sombre
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fruitée
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : moelleuse
                                        Robe : jaune pâle
                                        Arômes : fruits murs, fruits à chair blanche
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C
                                        Accords mets/vins : volailles, viandes rouges, gibiers
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Accords mets/vins : volailles rôties
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : desserts
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : coteaux-d’ancenis<br/>
                                        &middot;Appellation principale : coteaux-d’ancenis<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 166 ha.<br/>
                                        &middot;Production (en hectolitres) : 10 000 hl.<br/>
                                        &middot;Climat : tempéré océanique<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : gamay, pinot noir, cabernet franc, chenin<br/>
                                        &middot;Rendement moyen : 40 hl./ha.<br/>
                                        &middot;Désignation : orléans
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 27 ==============-->

                <!-- =============== LE TEXTE 28 ==============-->
                <section id="marque5marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Fiefs Vendéens&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Fiefs Vendéens est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, en Vendée.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Bouche : fine et structurée
                                        Robe : grenat
                                        Arômes : fruits rouges, venaison, cuir
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Bouche : fraîche
                                        Robe : rose pâle
                                        Arômes : fruits rouges
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Bouche : ample et vive
                                        Robe : jaune pâle
                                        Arômes : fruits à chair blanche, agrumes, coing, citron, pain grillé
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="rouge">Rouges :</span></p>
                                    <p>
                                        Température de service : 16 °C
                                        Temps de garde : peut être bu jeune
                                        Accords mets/vins : plats relevés
                                    </p>
                                    <p><span class="rose">Rosés :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : poissons, fruits de mer
                                    </p>
                                    <p><span class="vert">Blancs :</span></p>
                                    <p>
                                        Température de service : 12 °C
                                        Temps de garde : 5 ans
                                        Accords mets/vins : fruits de mer, crustacés
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : fiefs-vendéens<br/>
                                        &middot;Appellation principale : fiefs-vendéens<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 490 ha.<br/>
                                        &middot;Production (en hectolitres) : 30 000 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : rouges, rosés, blancs<br/>
                                        &middot;Cépages dominants : chenin, négrette, pinot noir, gamay<br/>
                                        &middot;Rendement moyen : 50 à 57 hl./ha.
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 28 ==============-->

                <!-- =============== LE TEXTE 29 ==============-->
                <section id="marque5marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Gros-Plant du Pays Nantais&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Gros-Plant du Pays Nantais est un vin blanc sec AOC produit dans le Vignoble de la Loire,
                                        dans le département de la Loire-Atlantique.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : vive et sèche
                                        Robe : jaune pâle
                                        Arômes : fleurs blanches, agrumes
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : à boire jeune
                                        Accords mets/vins : fruits de mer, crustacés
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : gros-plant-du-pays-nantais<br/>
                                        &middot;Appellation principale : gros-plant-du-pays-nantais<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 1 372 ha.<br/>
                                        &middot;Production (en hectolitres) : 79 380 hl.<br/>
                                        &middot;Climat : tempéré océanique<br/>
                                        &middot;Vins produits : blancs secs<br/>
                                        &middot;Cépages dominants : folle-blanche<br/>
                                        &middot;Rendement moyen : 50 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 29 ==============-->

                <!-- =============== LE TEXTE 30 ==============-->
                <section id="marque5marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Muscadet&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Muscadet est un vin blanc AOC produit dans le Vignoble de la Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="vert">Muscadet sur Lie :</span></p>
                                    <p>
                                        Bouche : vive et minérale
                                        Robe : jaune or
                                        Arômes : fleurs blanches, roche, caillou mouillé
                                    </p>
                                    <p><span class="vert">Muscadet :</span></p>
                                    <p>
                                        Bouche : droite et minérale
                                        Robe : jaune or
                                        Arômes : fleurs blanches
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="vert">Muscadet sur Lie :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 3 à 5 ans
                                        Accords mets/vins : fruits de mer
                                    </p>
                                    <p><span class="vert">Muscadet :</span></p>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 3 à 5 ans
                                        Accords mets/vins : huitres
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : muscadet<br/>
                                        &middot;Appellation principale : muscadet<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 9000 ha.<br/>
                                        &middot;Production (en hectolitres) : 727 000 hl.<br/>
                                        &middot;Climat : tempéré océanique
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 30 ==============-->

                <!-- =============== LE TEXTE 31 ==============-->
                <section id="marque5marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Muscadet Côteaux de la Loire&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Muscadet Côteaux de la Loire est un vin blanc AOC produit dans le Vignoble de la Loire,
                                        sur le département du Maine-et-Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : puissante et minérale
                                        Robe : or pâle
                                        Arômes : pierre à fusils, fleurs blanches, agrumes
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Accords mets/vins : poissons grillés
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : muscadet-côteaux-de-la-loire<br/>
                                        &middot;Appellation principale : muscadet-côteaux-de-la-loire<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 200 ha.<br/>
                                        &middot;Production (en hectolitres) : 11 900 hl.<br/>
                                        &middot;Climat : tempéré océanique<br/>
                                        &middot;Vins produits : blancs<br/>
                                        &middot;Cépages dominants : melon de Bourgogne<br/>
                                        &middot;Rendement moyen : 55 à 66 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 31 ==============-->

                <!-- =============== LE TEXTE 32 ==============-->
                <section id="marque5marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Muscadet Côtes de Grandlieu&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Muscadet Côtes de Grandlieu est un vin blanc AOC produit dans le Vignoble de la Loire,
                                        sur les départements de la Loire-Atlantique et de la Vendée.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : dense et souple
                                        Robe : jaune pâle
                                        Arômes : fleurs blanches, agrumes
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 8 °C
                                        Temps de garde : 5 ans
                                        Accords mets/vins : poissons en sauce
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : muscadet-côtes-de-grandlieu<br/>
                                        &middot;Appellation principale : muscadet-côtes-de-grandlieu<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 300 ha.<br/>
                                        &middot;Production (en hectolitres) : 10 500 hl.<br/>
                                        &middot;Climat : tempéré océanique<br/>
                                        &middot;Vins produits : blancs<br/>
                                        &middot;Cépages dominants : melon de Bourgogne<br/>
                                        &middot;Rendement moyen : 55 hl/ha.
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 32 ==============-->

                <!-- =============== LE TEXTE 33 ==============-->
                <section id="marque5marque7"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Muscadet Sèvres-et-Maine&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Muscadet Sèvres-et-Maine est un vin blanc AOC produit dans le Vignoble de la Loire,
                                        sur les départements de la Loire-Atlantique et du Maine et Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : longue et vive
                                        Robe : or bronze
                                        Arômes : agrumes, pierre à fusil, silex, iode
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 10 °C
                                        Temps de garde : 3 ans
                                        Accords mets/vins : fruits de mer
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : muscadet-sèvres-et-maine<br/>
                                        &middot;Appellation principale : muscadet-sèvres-et-maine<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 8 800 ha.<br/>
                                        &middot;Production (en hectolitres) : 418 000 hl.<br/>
                                        &middot;Climat : tempéré océanique<br/>
                                        &middot;Vins produits : blancs<br/>
                                        &middot;Cépages dominants : melon de Bourgogne<br/>
                                        &middot;Rendement moyen : 55 à 66 hl/ha.
                                </div>
                            </div><!-- ../row -->
                        </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 33 ==============-->

                <!-- =============== LE TEXTE 34 ==============-->
                <section id="marque5marque8"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Quarts-de-Chaume&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Quarts-de-Chaume est un vin blanc liquoreux AOC produit dans le Vignoble de la Loire,
                                        dans le département du Maine-et-Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Bouche : douce et généreuse
                                        Robe : dorée
                                        Arômes : agrumes, fruits à chair blanche, épices, miel, fleurs
                                    </p>

                                    <h6>garde, température et gastronomie :</h6>
                                    <p>
                                        Température de service : 9 °C
                                        Temps de garde : 20 ans pour certains millésimes
                                        Accords mets/vins : desserts, fois gras
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : quarts-de-chaume<br/>
                                        &middot;Appellation principale : quarts-de-chaume<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 54 ha.<br/>
                                        &middot;Production (en hectolitres) : 750 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blancs liquoreux<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 25 hl/ha.
                                </div><!-- ../row -->
                            </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 34 ==============-->

                <!-- =============== LE TEXTE 35 ==============-->
                <section id="marque5marque9"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Savennières&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 juillet 2029</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>presentation</h6>
                                    <p>
                                        Le Savennières est un vin blanc sec ou moelleux AOC produit dans le Vignoble de la Loire,
                                        sur les communes de Bouchemaine, La Poissonnière et Savennières dans le Maine-et-Loire.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Bouche : ample et racée
                                        Robe : jaune pâle
                                        Arômes : fruits jaunes, fruits exotiques, fleurs blanches, miel
                                    </p>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Bouche : souple et grasse
                                        Robe : jaune paille
                                        Arômes : fruits à chair blanche, fleurs blanches
                                    </p>
                                    <h6>garde, température et gastronomie :</h6>
                                    <p><span class="vert">Blancs moelleux :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : 15 ans
                                        Accords mets/vins : poissons
                                    </p>
                                    <p><span class="vert">Blancs secs :</span></p>
                                    <p>
                                        Température de service : 11 °C
                                        Temps de garde : 15 ans
                                        Accords mets/vins : viandes blanches, poissons
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                        &middot;Désignation : savennières<br/>
                                        &middot;Appellation principale : savennières<br/>
                                        &middot;Vignoble : de la Loire<br/>
                                        &middot;Superficie plantée : 120 ha.<br/>
                                        &middot;Production (en hectolitres) : 2 945 hl.<br/>
                                        &middot;Climat : tempéré océanique dégradé<br/>
                                        &middot;Vins produits : blanc sec et moelleux<br/>
                                        &middot;Cépages dominants : chenin<br/>
                                        &middot;Rendement moyen : 50 hl/ha. en blanc sec, 35 hl./ha. en moelleux
                                </div>
                            </div>
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 35 ==============-->

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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;La Loire
                                </a>
                                <ul>
                                    <li><a href="#marque2">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Anjou
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque2marque1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Anjou
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque2">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Anjou-Côteaux-de-la-Loire
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque3">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Anjou-Villages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque4">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Anjou-Villages-Brissac
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque5">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Bonnezeaux
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque6">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Cabernet d’Anjou
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque2marque7">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Rosé d’Anjou
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Bourgeuil Touraine Chinon
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque3marque1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Bourgueil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque3marque2">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Chinon
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque3marque3">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Jasnières
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque3marque4">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Saint-Nicolas-de-Bourgeuil
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque3marque5">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Touraine-Noble-Joué
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque3marque6">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Touraine
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#marque4">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;La Loire et le centre
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque4marque1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Chateaumeillant
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque2">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Cheverny
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque3">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côteaux-de-l'Aubance
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque4">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côteaux-du-Giennois
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque5">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côteaux-du-Loir
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque6">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côteaux-du-Vendômois
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque7">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Cour-Cheverny
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque8">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Haut-Poitou
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque9">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Montlouis-sur-Loire
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque10">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Orléans
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque11">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Orléans-Cléry
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque12">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Valençay
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque4marque13">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Vouvray
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#marque5">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Muscadet et Maine
                                        </a>
                                        <ul id="sousmenuderoulant">
                                            <li>
                                                <a href="#marque5marque1">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Côteaux-d'Ancenis
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque2">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Fiefs-Vendéens
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque3">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Gros-Plant-du-Pays-Nantais
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque4">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Muscadet
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque5">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Muscadet-Côteaux-de-la-Loire
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque6">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Muscadet-Côtes-de-Grandlieu
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque7">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Muscadet-Sèvres-et-Maine
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque8">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Quarts-de-Chaumes
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#marque5marque9">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    &nbsp;Savennières
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/france/loire/pouilly') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Pouilly
                                        </a>
                                    </li>
                                    <li><a href="{{ url('/france/loire/quincy-reuilly') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Quincy et Reuilly
                                        </a>
                                    </li>
                                    <li><a href="{{ url('/france/loire/sancerre-menetou-salon') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Sancerre et Menetou-Salon
                                        </a>
                                    </li>
                                    <li><a href="{{ url('/france/loire/saumur-champigny') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saumur-Champigny
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
            @include('layouts.2emeniveau.loire.droite')
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
                            <div id="loiremapmodal"></div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.2emeniveau.loire.appelsjsloire')
