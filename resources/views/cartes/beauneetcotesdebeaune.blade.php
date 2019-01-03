@include('layouts.header')

@include('layouts.3emeniveau.menu')

        <!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
<div id="pagechablis"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.3emeniveau.beauneetcotedebeaune.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartechablis -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Les vins de Beaune et des Côtes de Beaune</p>
                    </div>
                </div>
                <div id="cotesdebeaunemap"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vignoble des Côtes de Beaune</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 11 mai 2022</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h5 class="rouge">PRÉSENTATION</h5>
                                    <p>
                                        Le vignoble des Côtes de Beaune et des Hautes Côtes de Beaune est l’une des partie les plus prestigieuses du vignoble de Bourgogne. Il est situé en Saône et Loire et en Côte d’or et s’étend sur une trentaine de kilomètres. Le vignoble produit des vins blancs et rouges mais est surtout réputé pour la qualité de ses blancs à cépage Chardonnay, considérés comme faisant part des meilleurs vins au monde
                                    </p>
                                    <p>
                                        Chacune avec ses appellations, 20 communes l’occupent avec, du nord au sud : Ladoix-­Serrigny, Aloxe-­Corton, Pernand-­Vergelesse, Chorey-­lès-Beaune, Savigny-­lès-­Beaune, Beaune, Pommard, Volnay, Monthelie, Aurey-­‐Duresses, Saint-­Romain, Meursault, Puligny-­Montrachet, Saint-­Aubin, Chassagne-­Montrachet, Remigny, Santenay, Cheilly-­lès-­Maranges, Dezizes-­lès-­Maranges et Sampigny-­lès-­Maranges.
                                    </p>
                                    <br/>
                                    <h5 class="rouge">APPELLATIONS DU VIGNOBLE DES CÔTES DE BEAUNE</h5>
                                    <p>
                                        7 appellations Grands Crus : Corton, Corton-­Charlemagne, Montrachet, Bâtard-­Montrachet, Bienvenue-­Bâtard-­Montrachet, Criots-­Bâtard-­Montrachet et Chevalier-­Montrachet. 21 appellaCons communales : Ladoix, Bourgogne la Chapelle Notre Dame, Aloxe-­Corton, Charlemagne, Chorey-­lès-­Beaune, Savigny-­‐lès-­Beaune, Beaune, Pommard, Volnay, Monthely, Aurey-­Duresses, Saint-­Romain, Meursault, Blagny, Puligny-­Montrachet, Saint-­Aubey, Chassagne-­ Montrachet, Santenay, Maranges, Côte de Beaune Villages et Bourgogne Hautes Côtes de Beaune
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="rouge">FICHE D'IDENTITE</h5>
                                    <p>
                                        Température de service entre 15 et 16 °C<br/>
                                        Il s’accordera avec des viandes rouges, des volailles ainsi que
                                        des fromages à pâte molle et forts : époisses, livarot, etc.<br/>
                                        Temps de garde : le vin Aloxe-Corton s’ouvre après 3 à 5 ans de garde. Il se garde maximum 15 ans
                                    </p>
                                    <br/>
                                    <h5 class="rouge">FICHE D'IDENTITÉ</h5>
                                    <p>
                                        &middot; Désignation : Côtes de Beaune<br/>
                                        &middot; Appellations : Corton, Corton-­Charlemagne, Montrachet, Bâtard-­‐Montrachet, Bienvenue-­Bâtard-­Montrachet, Criots-­Bâtard-­Montrachet, Chevalier-­‐Montrachet, Ladoix, Bourgogne la Chapelle Notre Dame, Aloxe-­Corton, Charlemagne, Chorey-­lès-­Beaune, Savigny-­lès-­Beaune, Beaune, Pommard, Volnay, Monthely, Aurey-­Duresses, Saint-­Romain, Meursault, Blagny, Puligny-­Montrachet, Saint-­Aubey, Chassagne-­Montrachet, Santenay, Maranges, Côte de Beaune Villages et Bourgogne Hautes Côtes de Beaune<br/>
                                        &middot; Localisation : Saone et Loire (71) et Côte d’Or (21)<br/>
                                        &middot; Superficie de production : 5950 ha<br/>
                                        &middot; Production à l’année : 214 335 hl. soit 28 millions de bouteilles<br/>
                                        &middot; Nombre de communes : 20<br/>
                                        &middot; Cépage dominant : Chardonnay pour les blancs, pinot noir pour les rouges<br/>
                                        &middot; Production : Vin rouge (57 %) et vin blanc (43 %)<br/>
                                        &middot; Climat : Tempéré océanique à tendance conCnental<br/>
                                        &middot; Sol : argilo-­‐calcaire
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Auxey-Duresses&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le vin d'Auxey-Duresses est un AOC produit sur la commune de Auxey-Duresses en Côte d’Or. Le vin produit est rouge (pinot noir) ou blanc (chardonnay). L’appellation compte 9 climats classés en 1er Cru : Bas des Duresses, Climat du Val, Clos du Val, La Chapelle, Les Bréterins, Les Duresses, Les Ecussaux, Les Grands Champs, Reugne
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Bouche : velouté, fin, souple, charnu et agréable<br/>
                                        Robe : rubis<br/>
                                        Arômes : fruits noirs (myrtille, cassis, mûre), pivoine. A maturité : cuir et épices</p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Bouche : jeune, il est vif mais se développe à maturité. Persistant<br/>
                                        Robe : paille très claire<br/>
                                        Arômes : amande, pomme, pierre à fusil</p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Temperature de service : 15 à 16 °C<br/>
                                        Accords mets/vin : charcuterie, jambons crus, brochette, lapin, veau et porc rôti, poissons grillés
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : 12 à 14 °C<br/>
                                        Accords mets/vin : crevettes, poissons, ratatouille, gruyères, fromages de chèvre
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Auxey-Duresses<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : rouges et blancs<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 133 ha. environ (93 ha. environ en rouge, 40 ha. environ en blanc) (en 2011)<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE TEXTE 3 ==============-->
                <section id="marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côtes de Beaune-Villages&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Côtes de Beaune-Villages est un vin rouge (pinot noir) AOC produit vin produit sur 16 communes de Côte d’Or et de Saône-et-Loire : Auxey-Duresses, Chassage-Montrachet, Chorey-lès- Beaune, Ladoix-Serrigny, Meursault, Monthélie, Pernand-Vergelesses, Puligny-Montrachet, Saint- Aubin, Saint-Romain, Santenay et Savigny-lès-Beaune.
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p>
                                        Bouche : souple<br/>
                                        Robe : au nord : pourpre léger / au sud : rubis foncé<br/>
                                        Arômes : fruités (fraise, groseille, cassis, mûre), réglisse et sous bois</p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        Température de service : 15 à 16 °C<br/>
                                        Accords mets/vin : porc rôti, abats, lapin, steak de boeuf, kebabs, chili con carne,
                                        maroilles, munster, époisses, tomme de Savoie, brie de Meaux.
                                    <p>
                                        <br/><span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Côtes de Beaune-Villages<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : rouges<br/>
                                        &middot; Cépages dominants : Pinot noir<br/>
                                        &middot; Superficie en production : 5 ha. environ<br/>
                                        &middot; Production (en hectolitres) : 181 hl<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha
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
                                        <h3>Ladoix&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Ladoix est un vin AOC produit sur une partie de la commune de Ladoix-­‐Serrigny. 75 % des vins de cette appellation village sont des rouges, 25 % des blancs. 11 climats y sont classés en 1er Cru : Basse MouroLes, Bois Roussot, En Naget, Hautes MaroLes, La Corvée, La Micaude, Le Clou d’Orge, Le Roget et Corton, Les Buis, Les Grêchons et Foutrières, Les Joyeuses
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Les vins rouges d’appellaAon Ladoix sont de couleur grenat brillant avec des reflets violacés. On y trouve des arômes de framboise, de cerise confite et de fruits mûrs, mais également des notes végétales (sureau) ou épicées (girofle). Il est tendre et rond en bouche
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        D’une robe couleur or, il possède des arômes d’acacia et de beurre. On découvre des notes fruitées (prune, pomme mûre, coing, figue). C’est un vin vif et ferme, il devient moelleux avec l’âge
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Temperature de service : 15 et 16 °C<br/>
                                        Accords mets/vin : s’accordera avec du jambon cru (notamment le jambon de Parme) et des viandes fibreuses (lapin, boeuf) ainsi qu’avec les abats et le gibier à plume. Les volailles au curry font également ressortir tous les arômes du Ladoix
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : 11 et 12 °C<br/>
                                        Accords mets/vin : parfait avec les coquillages et fruits de mer avec une forte saveur iodée, mais aussi avec la cuisine asiatique. Pour ce qui est des fromages, préférez des bleus, des fromages de chèvre ou encore du gruyère
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Ladoix<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : Rouges (75 %) et blancs (25 %)<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges) et Chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 78,84 ha. pour les rouges, 24,84 ha. pour les blancs<br/>
                                        &middot; Production en hectolitre / an : environ 4 312 hl<br/>
                                        &middot; Rendement moyen : 40 à 50 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                        <h3>Maranges&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Maranges est un vin AOC produit sur les communes de Cheilly-lès-Maranges, Dezize-lès-Maranges et Sampigny-lès-Maranges en Saône-et-Loire. Les vins produits y sont majoritairement rouges (pinot noir) et en moindre quanPté, blancs (chardonnay)
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Bouche : grasse et poivrée<br/>
                                        Robe : rubis<br/>
                                        Arômes : fruités (fruits rouges, cassis) et réglisse
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Bouche : subtile et souple<br/>
                                        Robe : or clair<br/>
                                        Arômes : fleurs blanches, miel et pierre à fusil
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Température de service : 14 à 16 °C<br/>
                                        Accords mets/vin : viandes rouges, volailles, noms, porc braisé<br/>
                                        Temps de garde : 3 à 4 ans
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : 12 à 13 °C<br/>
                                        Accords mets/vin : terrines de poissons, fromages à pâtes cuites, entrées froides à base de légumes
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Maranges<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : rouges (97 %) et blancs (3 %)<br/>
                                        &middot; Cépages dominants : Chardonnay (pour les blancs), Pinot noir (pour les rouges)<br/>
                                        &middot; Superficie en production : 170 ha. environ (7 ha. environ en blanc, 163 ha. environ en rouge) (en 2011)<br/>
                                        &middot; Production en hectolitre / an : 7 750 hl<br/>
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
                                        <h3>Meursault&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Meursault est un vin AOC produit sur la commune de Meursault en Côte d’Or. Les vins produits y sont blancs (chardonnay) et en moindre quantité, rouges (pinot noir).
                                    </p>
                                    <p>
                                        L’appellation compte 19 climats classés en 1er Cru : Blagny, Charmes, Clos des Perrières, Genevrières, La Jeunellotte, La Pièce sous le Bois, Le Porusot, Les Bouchères, Les Caillerets, Les Cras, Les GouUes d’Or, Les Plures, Les Ravelles, Les Santenots Blancs, Les Santenots du Milieu, Perrières, Porusot, Sous Blagny, Sous le Dos d’Ane.
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p>
                                        Long, structuré onctueux et gras en bouche<br/>
                                        Robe : or-vert limpide<br/>
                                        Arômes : grappe mûre, amande, noiseUe, aubépine, verveine, Llleul, beurre, agrumes, silex
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p>
                                        Température de service : 12 à 14 °C<br/>
                                        Accords mets/vin : viandes et poissons nobles, crustacés grillés et en sauce, fois gras, fromages bleus<br/>
                                        Temps de garde : Entre 8 et 15 ans.
                                    <p>
                                        <br/><span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Meursault<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : blancs (96 %) et rouges (4 %)<br/>
                                        &middot; Cépages dominants : Chardonnay (pour les blancs), Pinot noir (pour les rouges)<br/>
                                        &middot; Superficie en production : 395 ha. environ (382 ha. environ en blanc, 13 ha. environ en rouge) (en 2011)<br/>
                                        &middot; Production (en hectolitres) : 19 400 hl<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                        <h3>Monthélie&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Monthélie est un vin AOC produit sur la commune de Monthélie en Côte d’Or. Le vin produit y est majoritairement rouge (pinot noir), du blanc (chardonnay) y est également produit en moindre quantité.
                                    </p>
                                    <p>
                                        L’appellation compte 15 climats classés en 1er Cru : Clos des Toisières, La Taupine, Le Cas Rougeot, Le Château Gaillard, Le Clos Gauthey, Le Clou des Chênes, Le Meix Bataille, Le Village, Les Barbières, Les Champs Fulliots, Les Clous, Les Duresses, Les RioZes, Les Vignes Rondes, Sur la Velle
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Considéré comme un « vin féminin » comme le Volnay<br/>
                                        Bouche : ferme et finement panique<br/>
                                        Robe : rubis<br/>
                                        Arômes : fruits rouge et noirs (cassis, cerise), floraux (violette, pivoine), fougère et sous-bois<br/>
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Bouche : légèrement acidulée, ample et moelleuse<br/>
                                        Robe : dorée<br/>
                                        Arômes : fleurs blanches (aubépine), pomme, vanille, noisette.
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Temperature de service : 15 °C<br/>
                                        Accords mets/vin : volailles et agneaux rôtis, lapin, ris de veau, fois, andouillettes grillées, tourtes à la viande, brie, reblochon<br/>
                                        Temps de garde : 8 à 10 ans
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : 12 °C<br/>
                                        Accords mets/vin : crevettes, tajines de poissons, fromages bleus (roquefort, bleu de Bresse), livarot, époisse<br/>
                                        Temps de garde : 3 à 5 ans
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Monthélie<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : Rouges (91 %) et blancs (9 %)<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges) et Chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 124 ha. environ (110 ha. environ en rouge, 14 ha. environ en blanc) (en 2011)<br/>
                                        &middot; Production en hectolitre : 12 997 hl<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
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
                                        <h3>Pernand-­Vergelesses&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Pernand-­Vergelesses est un vin AOC produit sur la commune de Pernand-­Vergelesses en Côte d’Or. Le vin produit y est rouge (pinot noir) ou blanc (chardonnay). 8 climats de ceMe appellaNon sont classés en 1er Cru : Clos Berthet, Creux de la Net, En Caradeux, Ile des Vergelesses, Les Fichots, Sous FreNlle, Vergelesses, Village de Pernand.
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Avec des notes de framboise, de fraise et de violeMe, puis en vieillissant d’épices, les vins de Pernand-­Vergelesses possèdent une robe rubis foncée. Ce sont des vins gras et harmonieux, corsés et charnus en bouche
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Le Pernand-­Vergelesses blanc a une robe couleur or blanc, jaunissant et fonçant avec le temps. On retrouve dans ces vins dans notes de fleurs blanches allant sur des arômes miellés et épicés en vieillissant
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Temperature de service : entre 14 et 16 °C<br/>
                                        Accords mets/vin : il s’accordera avec des gibiers à plumes, du veau, du gigot d’agneau ainsi qu’avec du rôti de boeuf. Pour ce qui est des fromages, préférez des fromages comme le Reblochon ou le Mont d’Or<br/>
                                        Temps de garde : 5 à 10 ans
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Temperature de service : entre 10 et 12 °C<br/>
                                        Accords mets/vin : parfait avec les poissons en général mais plus parNculièrement avec les sushis. S’accorde également avec les pâtes ou les risoMos. Pour les fromages : Gruyères, fromages de chèvres ou les bleus feront ressortir toutes ses saveurs<br/>
                                        Temps de garde : 3 à 8 ans
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Pernand-­Vergelesses<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                        &middot; Production : Rouges (91 %) et blancs (9 %)<br/>
                                        &middot; Cépages dominants : Pinot noir (rouges) et Chardonnay (blancs)<br/>
                                        &middot; Superficie en production : 80 ha. environ pour les rouges, 78 ha. environ pour les blancs (en 2011)<br/>
                                        &middot; Production en hectolitre : 12 997 hl<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 8 ==============-->

                <!-- =============== LE TEXTE 9 ==============-->
                <section id="marque9"><!-- section -->
                    <div class="commentaires8"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saint-Romain&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Saint-Romain est un vin AOC produit sur la commune de Saint-Romain en Côte d’Or. Les vins produits y sont blancs (chardonnay) et rouges (pinot noir)
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Bouche : fine et veloutée<br/>
                                        Robe : rubis / cerise noire<br/>
                                        Arômes : peQts fruits rouges (cerises, groseilles, framboises) puis avec l’âge, fruits mûrs, épices
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Bouche : Moelleuse et minérale<br/>
                                        Robe : or pâle, reflets verdâtres<br/>
                                        Arômes : floraux (tilleuls, fleurs blanches) et minéraux
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Température de service : 13 à 15 °C<br/>
                                        Accords mets/vin : viandes blanches, volailles en sauce, brillât-savarin<br/>
                                        Temps de garde : entre 6 et 12 ans
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Température de service : 12 à 14 °C<br/>
                                        Accords mets/vin : poissons vapeur, omelettes, camembert<br/>
                                        Temps de garde : entre 3 et 10 ans
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Saint-Romain<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                        &middot; Production : blancs (55 %) et rouges (45 %)<br/>
                                        &middot; Cépages dominants : Chardonnay (pour les blancs), Pinot noir (pour les rouges)<br/>
                                        &middot; Superficie en production : 97 ha. environ (60 ha. environ en blanc, 37 ha. environ en rouge) (en 2011)<br/>
                                        &middot; Production en hectolitre : 4 045 hl<br/>
                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 9 ==============-->

                <!-- =============== LE TEXTE 10 ==============-->
                <section id="marque10"><!-- section -->
                    <div class="commentaires8"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Santenay&nbsp;</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 20 mai 2072</span>
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
                                        Le Santenay AOC produit sur les communes de Remigny et de Santenay en Côte d’Or (21). Ses vins sont en grande parLe rouges (pinot noir) à 89 % et à 11 % des blancs (chardonnay). C’est une appellation communale du vignoble des Côtes de Beaune, elle possède 12 climats classés en 1er Cru : Beauregard, Beaurepaire, Clos de Tavannes, Clos des Mouches, Clos Faubard, Clos Rousseau, Grand Clos Rousseau, La Comme, La Maladière, Les Gravières, Les Gravières-­‐Clos de Tavannes et Passetemps
                                    </p>
                                    <span class="rouge">CARACTÈRE</span>
                                    <p><span class="gras">Pour les rouges</span><br/>
                                        Le Santenay rouge possède une belle robe pourpre foncé, cerise noire. Son bouquet est floral (rose, pivoine, violette) et fruité (fruits rouge). Son corps est charpenté et souple
                                    </p>
                                    <p>
                                    <p><span class="gras">Pour les blancs</span><br/>
                                        Le Santenay blanc lui est minéral et floral, avec une robe pale. On y retrouve des arômes de noisette et de fougère. C’est un vin frais et vif.
                                    </p>
                                    <p>
                                </div>
                                <div class="col-md-6">
                                    <h6></h6>
                                    <span class="rouge">GARDE, TEMPÉRATURE ET GASTRONOMIE</span>
                                    <h6></h6>
                                    <p style="font-weight: 700">Pour les rouges</p>
                                    <p>
                                        Température de service entre 14 et 16 °C<br/>
                                        Il s’accordera avec des plats mitonnés comme le veau, des volailles laqués et caramélisé typiques de l’asie, ou bien encore avec des hamburgers maison. Il s’associe également très bien avec des fromages tels que le Brie, le Reblochon ou encore les fromages bleus<br/>
                                        Temps de garde : Entre 5 et 10 ans, 15 pour les grandes années
                                    <p>
                                        <br/>
                                    <p style="font-weight: 700">Pour les blancs</p>
                                    <p>
                                        Température de service entre 11 et 13 °C<br/>
                                        Une parfaite alliance avec des plats fluides et crémeux : pâtes, riso]o,etc; ainsi qu’avec les fromages de chèvre, les Comté et les Beaufort<br/>
                                        Temps de garde : entre 3 et 8 ans
                                    <p>
                                        <br/>
                                        <span class="rouge">FICHE D'IDENTITÉ</span>
                                    <p>&middot; Désignation : Côte de Beaune<br/>
                                        &middot; Appellation principale : Santenay<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                        &middot; Sol : argilo-calcaire<br/>
                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                        &middot; Production : Rouges (89%) et blancs (11%)<br/>
                                        &middot; Cépages dominants : Chardonnay (pour les blancs), Pinot noir (pour les rouges)<br/>
                                        &middot; Superficie en production : 280,57 ha. pour les rouges et 47,70 ha. pour les blancs<br/>
                                        &middot; Production en hectolitre / an : environ 14 705 hl<br/>
                                        &middot; Rendement moyen : 40 à 48 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 10 ==============-->

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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Côtes de Beaune
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/aloxe-corton') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Aloxe-Corton
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque2">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Auxey-Duresses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/1ers-crus-et-grands-crus') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Beaune
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/chassagne-montrachet') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Chassagne-Montrachet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Côtes de Beaune-Villages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque4">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Ladoix
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque5">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Maranges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque6">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Meursault
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque7">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Monthelie
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque8">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Pernand-Vergelesses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/pommard') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Pommard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/puligny-montrachet') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Puligny-Montrachet
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque9">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saint-Romain
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque10">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Santenay
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune/volnay') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Volnay
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
            @include('layouts.3emeniveau.beauneetcotedebeaune.droite')
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
                        <div class="col-md-5"><!-- col-md-3 -->
                            <h6 style="color: #cc33cc; margin-bottom: 20px;">VIGNOBLES DE LA CÔTE DE BEAUNE</h6>
                            <p>
                                Côte de Beaune-Villages<br/>
                                Ladoix<br/>
                                Ladoix 1er Cru<br/>
                                Grands Crus de Ladoix : Corton (partie), Corton-Charlemagne (partie)<br/>
                                Pernand-Vergelesses<br/>
                                Pernand-Vergelesses 1er cru<br/>
                                Grand Cru de Pernand-Vergelesses : Charlemagne (partie)<br/>
                                Aloxe-Corton<br/>
                                Aloxe-Corton 1er Cru<br/>
                                Grands Crus d’Aloxe-Corton : Corton, Corton Charlemagne, Charlemagne (Partie)<br/>
                                Chorey-lès-Beaune<br/>
                                Savigny-lès-Beaune<br/>
                                Savigny-lès-Beaune 1er Crun<br/>
                                Beaune<br/>
                                Beaune 1er Cru<br/>
                                Côte de Beaune<br/>
                                Pommard<br/>
                                Pommard 1er Cru<br/>
                                Volnay<br/>
                                Volnay 1er Cru<br/>
                                Volnay-Santenots<br/>
                                Monthélie<br/>
                                Monthélie 1er Cru<br/>
                                Auxey-Duresses<br/>
                                Auxey-Duresses 1er Cru<br/>
                                Saint-Romain<br/>
                                Meursault<br/>
                                Meursault-Santenots<br/>
                                Meursault 1er Cru<br/>
                                Blagny<br/>
                                Blagny 1er Cru<br/>
                                Puligny-Montrachet<br/>
                                Puligny-Montrachet 1er Cru<br/>
                                Grands Cru de Puligny-Montrachet: Chevalier-Montrachet, Bâtard-Montrachet, Bienvenues-Bâtard-Montrachet (Partie), Montrachet (Partie)<br/>
                                Chassagne-Montrachet<br/>
                                Chassagne-Montrachet 1er Cru<br/>
                                Grands Crus de Chassagne Montrachet :  Bâtard-Montrachet (Partie), Criôts-Bâtard-Montrachet, Montrachet (Partie)<br/>
                                Saint-Aubin<br/>
                                Saint-Aubin 1er Cru<br/>
                                Santenay<br/>
                                Santenay 1er Cru<br/>
                                Maranges<br/>
                                Maranges 1er Cru<br/>
                            </p>
                            </div>
                        <div class="col-md-7">
                            <div id="mapbeaunemodal"></div>
                        </div>

                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.3emeniveau.beauneetcotedebeaune.appelsjsbeauneetcotedebeaune')