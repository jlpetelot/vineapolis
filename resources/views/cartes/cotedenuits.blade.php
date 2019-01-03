@include('layouts.header')

@include('layouts.3emeniveau.menu')

    <!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
    <div id="pagechablis"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.3emeniveau.cotedenuits.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartechablis -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins de la Côte de Nuits.</p>
                    </div>
                </div>
                <div id="cartecotedenuits"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vignobles de la Côte de Nuits&nbsp;</h3>
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
                                    <h6></h6>
                                    <p>Le vignoble de la Côte de Nuits se situe en Côte d’Or au nord et au sud de la ville
                                        de Nuits-Saint-Georges. Il dépend du vignoble de Bourgogne dont
                                        c’est une des parties les plus prestigieuse (qui lui vaut son surnom de 
                                        « Champs Elysées de la Bourgogne. »</p>
                                    <p>Les vins qui y sont produit sont en grandes majorité des vins rouges
                                        (à la différence de la côte de Beaune, dominé par les blancs prestigieux)
                                        à cépage pinot noir, considérés par beaucoup comme les meilleurs vins rouges du monde.</p>
                                    <p>Chacune avec ses appellations, 16 communes occupent les pentes de la Côte de Nuits,
                                        le long de la route des Grands Crus, sur 37 km, avec du nord au sud : Dijon, Chenôve,
                                        Marsannay-la-Côte, Couchey, Fixi, Brochon, Gevrey-Chambertin, Morey-Saint- Denis,
                                        Chambolle-Musigny, Vougeot, Flagey-Echézeaux, Vosne-Romanée, Nuits-Saint-George,
                                        Premeaux-Prissey, Comblanchien, Corgoloin.</p>
                                    <h6>Appellations du vignoble des Côtes de Beaune :</h6>
                                    <p><span class="rouge">22 appellations Grands Crus : </span>Chambertin, Chambertin-Clos de Bèze,
                                        Chapelle-Chambertin, Griotte-Chambertin, Latricières-Chambertin, Mazis-Chambertin,
                                        Mazoyères-Chambertin, Ruchottes-Chambertin, Clos de la Roche, Clos de Tart,
                                        Clos Saint-Denis, Clos des Lambrays, Clos de Vougeot, Échezeaux,
                                        Grands Échezeaux, Richebourg, Romanée-Conti, Romanée-Saint-Vivant,
                                        La Tâche, Musigny, Bonnes Marres, Charmes Chambertin.</p>
                                    <span class="rouge">10 appellations Villages, dont certaines ont des climats classés en 1er Cru : </span>
                                    Chambolle-Musigny, Côte de Nuits-Villages, Fixin, Gevrey-Chambertin, Marsannay, Marsannay rosé,
                                    Morey-Saint-Denis, Nuits-Saint-Georges, Vosne-Romanée, Vougeot.
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">10 appellations Villages, dont certaines ont des climats classés en 1er Cru : </span>
                                    Chambolle-Musigny, Côte de Nuits-Villages, Fixin, Gevrey-Chambertin, Marsannay, Marsannay rosé,
                                    Morey-Saint-Denis, Nuits-Saint-Georges, Vosne-Romanée, Vougeot.
                                    <h6>fiche d’identité :</h6>
                                    <p>&middot; Désignation : Côte de Nuits.<br/>
                                        &middot; Appellations : Chambertin, Chambertin-Clos de Bèze,
                                        Chapelle-Chambertin, Griotte-Chambertin, Latricières-Chambertin,
                                        Mazis-Chambertin, Mazoyères-Chambertin, Ruchottes-Chambertin, Clos de la Roche,
                                        Clos de Tart, Clos Saint-Denis, Clos des Lambrays, Clos de Vougeot,
                                        Échezeaux, Grands Échezeaux, Richebourg, Romanée-Conti, Romanée-Saint-Vivant,
                                        La Tâche, Musigny, Bonnes Marres, Charmes Chambertin, Chambolle-Musigny,
                                        Côte de Nuits-Villages, Fixin, Gevrey-Chambertin, Marsannay, Marsannay rosé,
                                        Morey-Saint-Denis, Nuits-Saint-Georges, Vosne-Romanée, Vougeot.<br/>
                                        &middot; Localisation : Côte d’Or (21).<br/>
                                        &middot; Superficie de production : 3 740 ha.<br/>
                                        &middot; Production à l’année : 104 951 hl, soit 14 millions de bouteilles.<br/>
                                        &middot; Nombre de communes : 16.<br/>
                                        &middot; Cépage dominant : Chardonnay pour les blancs, pinot noir pour les rouges.<br/>
                                        &middot; Production : Vin rouge (89 %) et vin blanc (11 %).<br/>
                                        &middot; Climat : Tempéré océanique, tendance continentale.<br/>
                                        &middot; Sol : argilo-calcaire.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
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
                                        <h3>Côte de Nuits Village&nbsp;</h3>
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
                                    <h6></h6>
                                    <p>
                                        Le Côte de Nuits Village est un vin rouge ou blanc AOC produit sur les communes de Fixin, Brochon, Premeaux, Comblanchien et Corgoloin en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits
                                    </p>
                                    <br/>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Bouche : puissante, grasse et ronde<br/>
                                        Robe : pourpre, brillante<br/>
                                        Arômes : cerise, groseille, cassis, sous-bois, épices, champignons</p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Bouche : vive, nette et élégante<br/>
                                        Robe : or clair<br/>
                                        Arômes : fleurs blanches (acacia, aubépine), pomme mûre, figue, poire, coing, prune</p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Temperature de service : 13 à 14 °C<br/>
                                        Accords mets/vin : terrines, pâtés, abats, porc rôti ou en sauce, agneau, veau braisé, époisses, langres
                                    <p>
                                    <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : 11 à 12 °C<br/>
                                        Accords mets/vin : jambon persillé, terrines, escargots, fromages de chèvre, comté, poissons grillés
                                    <p>
                                    <br/>
                                    <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Nuits.<br/>
                                        &middot; Appellation principale : Côte de Nuits Village<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                        &middot; Sol : argilo-calcaire ou marneux<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : rouges 95 %, blancs 5 %<br/>
                                        &middot; Nombre de communes : 16.<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 148 ha. environ dont 9 ha. environ en blanc<br/>
                                        &middot; Production (en hectolitres) : 6 779 hl environ dont 361 hl environ en blanc.<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
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
                                        <h3>Echezeaux&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 4 octobre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Un Echezeaux est un vin rouge AOC produit sur la commune de Flagey-Echezeaux en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits
                                    </p>
                                    <br/>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><br/>
                                        Bouche : souple, puissante et ample<br/>
                                        Robe : rubis<br/>
                                        Arômes : épices, sous-bois, pruneau, puis à maturité, le cuir, le musc, le champignon</p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        Temperature de service : 15 à 16 °C<br/>
                                        Accords mets/vin : viandes rouges, fromages au lait cru
                                        Temps de garde : 5 à 15 ans
                                    </p>

                                     <br/>
                                    <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p><br/>&middot; Désignation : Côte de Nuits<br/>
                                        &middot; Appellation principale : Echezeaux<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : rouges 100 %<br/>
                                        &middot; Cépages dominants : Pinot noir<br/>
                                        &middot; Superficie en production : 35 ha. environ<br/>
                                        &middot; Production (en hectolitres) : 1 204 hl environ<br/>
                                        &middot; Rendement moyen : 35 à 49 hl/ha
                                    </p>
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
                                        <h3>Fixin&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 4 octobre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Un Echezeaux est un vin rouge AOC produit sur la commune de Flagey-Echezeaux en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits
                                    </p>
                                    <br/>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><br/>
                                        POUR LES ROUGES :<br/>
                                        Bouche : structurée et ronde, un peu dur et tannique dans sa jeunesse<br/>
                                        Robe : violine<br/>
                                        Arômes : pivoine, violeXe, cassis, mûre, coing, grioXe, musc, poivre
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        POUR LES ROUGES :<br/>
                                        Temperature de service : 13 à 15 °C<br/>
                                        Accords mets/vin : entrecôte, porc braisé, civet de volaille, paella, tapas, nems
                                    </p>
                                    <p>
                                        POUR LES BLANCS :<br/>
                                        Temperature de service : 11 à 13 °C<br/>
                                        Accords mets/vin : jambon persillé, poissons et volailles en sauce, bleu de Bresse, crotin de Chavignol
                                    </p>

                                    <br/>
                                    <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p><br/>&middot; Désignation : Côte de Nuits<br/>
                                        &middot; Appellation principale : Fixin<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                        &middot; Production : rouges 97 %, blancs 3 %<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 100 ha. environ dont 4 ha. environ en blanc<br/>
                                        &middot; Production (en hectolitres) : 4 002 hl environ dont 704 hl environ en blanc<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
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
                                        <h3>Grands Echezeaux&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 4 octobre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Un Grands Echezeaux est un vin rouge AOC produit sur la commune de Flagey-Echezeaux en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits
                                        <br/>
                                        <span class="rouge">CARACTÈRE</span>
                                    <p>
                                        Bouche : souple, puissante et ample<br/>
                                        Robe : rubis avec nuances pourpres<br/>
                                        Arômes : épices, sous-bois, pruneau, puis à maturité, le cuir, le musc, le champignon
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        POUR LES ROUGES :<br/>
                                        Température de service : 15 à 16 °C<br/>
                                        Accords mets/vin : viandes rouges, fromages au lait crubr/>
                                        Temps de garde : 5 à 15 ans
                                    </p>
                                    <br/>
                                    <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p><br/>&middot; Désignation : Côte de Nuits<br/>
                                        &middot; Appellation principale : Grands Echezeaux<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                        &middot; Production : rouges 100 %<br/>
                                        &middot; Cépages dominants : Pinot noir<br/>
                                        &middot; Superficie en production : 8 ha. environ<br/>
                                        &middot; Production (en hectolitres) : 282 hl environ<br/>
                                        &middot; Rendement moyen : 35 à 49 hl/ha
                                    </p>
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
                                        <h3>Marsannay&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 4 octobre 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Marsannay est un vin rouge, blanc ou rosé AOC produit sur les communes de Marsannay-la- Côte, Couchey et Chenôve en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits. Elle est la seule appellation village pouvant représenter les trois couleurs de vin : rouge, blanc et rosé
                                    </p>
                                    <br/>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p>
                                        POUR LES ROUGES :<br/>
                                        Bouche : généreuse, puissante et grasse<br/>
                                        Robe : intense<br/>
                                        Arômes : fruits rouges et noirs (fraise, cassis, griottes, myrtille)
                                    </p>
                                    <p>
                                        POUR LES BLANCS :<br/>
                                        Bouche : ronde, ample et minérale<br/>
                                        Robe : or pale<br/>
                                        Arômes : fleurs blanches, agrumes
                                    </p>
                                    <p>
                                        POUR LES ROSÉS :<br/>
                                        Bouche : franche et gourmande<br/>
                                        Arômes : pêche de vigne, groseille
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        POUR LES ROUGES :<br/>
                                        Température de service : 15 à 17 °C<br/>
                                        Accords mets/vin : viandes rouges, poissons de rivière, charcuterie, gibier à plume, munster
                                    </p>
                                    <p>
                                        POUR LES BLANCS :<br/>
                                        Température de service : 12 à 13 °C<br/>
                                        Accords mets/vin : viandes blanches, risotto, cuisine de l’extrême-orient, poissons
                                    </p>
                                    <p>
                                        POUR LES ROSÉS :<br/>
                                        Température de service : 12° C<br/>
                                        Accords mets/vin : grillade d’été, salades, charcuterie, cuisine épicée
                                    </p>
                                    <br/>
                                    <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p><br/>&middot; Désignation : Côte de Nuits<br/>
                                        &middot; Appellation principale : Marsannay<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                        &middot; Production : rouges, blancs et rosés<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 222 ha. environ dont 35 ha. environ en blanc<br/>
                                        &middot; Production (en hectolitres) : 9 773 hl environ dont 6 317 hl environ en rouge, 1 758 hl en rosé, 1698 hl en rosé<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 65 hl/ha. pour les rosés, 45 à 64 hl/ha. pour les blancs
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 7 ==============-->

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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Côtes de Nuits
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('france/bourgogne/cote-de-nuits/chambolle-musigny') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Chambolle-Musigny
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Côte de Nuits Villages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque4">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Echezeaux
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque5">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Fixin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('france/bourgogne/cote-de-nuits/gevrey-chambertin') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Gevrey-Chambertin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque6">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Grands Echezeaux
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque7">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Marsannay
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('france/bourgogne/cote-de-nuits/nuits-saint-georges') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Nuits-Saint-Georges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('france/bourgogne/cote-de-nuits/vosne-romanee') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Vosne-Romanée
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('france/bourgogne/cote-de-nuits/vougeot') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Vougeot
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
            @include('layouts.3emeniveau.cotedenuits.droite')
            <!-- ========================== FIN ANNONCES DROITES ==========================-->
        </div><!-- End Row -->

        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Le vignoble de la Côte de Nuits</h3>
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
                        <div class="col-md-3"><!-- col-md-3 -->
                            <h6 class="cotedenuits">GRANDS CRUS DE LA CÔTE DE NUITS</h6>
                            <p><span style="color: #ffffff; font-weight: 700;">Gevrey-Chambertin</span> : Chambertin, Chambertin Clos-de-Bèze,
                                Chapelle-Chambertin, Charmes-Chambertin, Griotte-Chambertin,
                                Latricières-Chambertin, Mazis-Chambertin, Mazoyères-Chambertin,
                                Ruchottes-Chambertin
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Morey-Saint-Denis</span> : Clos de la Roche, Clos Saint-Denis,
                                Clos des Lambrays, Clos de Tart, Bonnes Mares
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Chambolle-Musigny</span> : Bonnes Mares, Musigny</p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Vougeot</span> : Clos de Vougeot</p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Vosne-Romanée</span> : Romanée Saint-Vivant, Richebourg, Romanée Conti,
                                La Romanée, La Tâche, La Grande Rue,
                                et sur la commune de Flagey-Echezeaux, Echezeaux, Grands Echezeaux
                            </p>
                        </div><!-- ../col-md-3 -->
                        <div class="col-md-3"><!-- col-md-3 -->
                            <h6 class="cotedenuits2">PREMIERS CRUS DE LA CÔTE DE NUIT</h6>
                            <p><span style="color: #ffffff; font-weight: 700;">Fixin 1er cru</span> :
                                Arvelets, Clos de la Perrière (également à Brochon),
                                Clos du Chapitre, Clos Napoléon, Hervelets
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Gevrey-Chambertin 1er cru</span> :
                                Au Closeau, Aux Combottes, Bel Air, Champeaux, Champonnet, Cherbaudes,
                                Clos des Varoilles, Clos du Chapitre, Clos Prieur, Clos St-Jacques,
                                Combe au Moine, Craipillot, En Ergot, Estournelles-St-Jacques, Fonteny,
                                Issarts, La Bossière, La Perrière, La Romanée, Lavault St-Jacques,
                                Les Cazetiers, Les Corbeaux, Les Goulots, Petite Chapelle, Petits Cazetiers,
                                Poissenot
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Morey-Saint-Denis 1er cru</span> :
                                Aux Charmes, Aux Cheseaux, Clos Baulet, Clos des Ormes, Clos Sorbé,
                                Côte Rotie, La Bussière, La Riotte, Le Village, Les Blanchards, Les Chaffots,
                                Les Charrières, Les Chenevery, Les Faconnières, Les Genavrières, Les Gruenchers,
                                Les Milandes, Les Ruchots, Les Sorbès, Monts Luisants
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Chambolle-Musigny 1er cru</span> :
                                Aux Beaux Bruns, Aux Combottes, Aux Echanges, Derrière la Grange, La Combe d’Orveau,
                                Les Amoureuses, Les Baudes, Les Borniques, Les Carrières, Les Chabiots, Les Charmes,
                                Les Chatelots, Les Combottes, Les Cras, Les Feusselottes, (ou les Feusselotes), Les Fuées,
                                Les Groseilles, Les Gruenchers, Les Hauts Doix, Les Noirots, Les Lavrottes, Les Plantes,
                                Les Sentiers, Les Véroilles
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Vougeot 1er cru</span> :
                                Clos de la Perrière, Le Clos Blanc, Les Crâs, Les Petits Vougeots
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Vosne-Romanée 1er cru</span> :
                                Au-dessus des Malconsorts, Aux Brulées, Aux Malconsorts, Aux Raignots, Clos des Réas,
                                Cros Parentoux, En Orveaux, La Croix Rameau, Les Beaux Monts, Les Chaumes, Les Gaudichots,
                                Les Petits Monts, Les Rouges, Les Suchots
                            </p>
                            <p class="cotedenuits"><span style="color: #ffffff; font-weight: 700;">Nuits-Saint-Georges 1er cru</span> :
                                Aux Argillas, Aux Boudots, Aux Bousselots, Aux Chaignots, Aux Champs Perdrix, Aux Cras,
                                Aux Murgers, Aux Perdrix, Aux Thorey, Aux Vignerondes, Chaines Carteaux, Château Gris,
                                Clos Arlot, Clos de la Maréchale, Clos des Argillières, Clos des Corvées, Clos des Corvées Paget,
                                Clos des Forêts St-Georges, Clos des Grandes Vignes, Clos des Porrets-Saint-Georges, Clos Saint-Marc,
                                En la Perrière Noblot, La Richemone, Les Argillières, Les Cailles, Les Chaboeufs, Les Crots,
                                Les Damodes, Les Didiers, Les Hauts Pruliers, Les Perrières, Les Porrets-St-Georges, Les Poulettes,
                                Les Procès, Les Pruliers, Les Saints-Georges, Les Terres Blanches, Les Vallerots, Les Vaucrains,
                                Roncière, Rue de Chaux
                            </p>
                        </div><!-- ../col-md-3 -->

                        <div class="col-md-6">
                            <div id="mapmodalcotedenuits"></div>
                        </div>

                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.3emeniveau.cotedenuits.appelsjscotedenuits')