@include('layouts.header')

@include('layouts.2emeniveau.menu')

        <!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
            <div id="pagehome"><!-- page1erniveau -->
                <div class="container"><!-- Container Général -->
                    <div class="row"><!-- Row -->

                        <!-- =========================== ANNONCES GAUCHES ============================-->
                        @include('layouts.2emeniveau.bourgogne.gauche')
                        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

                        <!-- =================================== CARTE ================================-->
                        <div id="cartes"><!-- cartebourgogne -->

                            <div id="textecartes">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                                <div id="titremap">
                                    <p>Vins de Bourgogne.</p>
                                </div>
                            </div>
                            <div id="bourgognemap"></div>

                            <!-- =============== LE TEXTE 1 ==============-->
                            <section id="marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>La Bourgogne</h3>
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
                                                <p>Le vignoble de Bourgogne s’étend du nord de Chablis jusqu’au sud du Mâconnais,
                                                    sur 250 km de long. Il est localisé dans les département de l’Yonne (89),
                                                    la Côte d’Or (21) et la Saône et Loire (71). Il produit 3 % de la production française,
                                                    6,5 % de la production française d’AOC, et 0,4 % de la production mondiale de vin.</p>
                                                <p>En 2011, 1413 vins différents sont dénombrés sur le Vignoble de Bourgogne.
                                                    Les cépages dominants sont le Pinot Noir et le Gamay pour les vins rouges,
                                                    et le Chardonnay et l’Aligoté pour les vins blancs. On y trouve également les
                                                    cépages César et Tressot pour les rouges, Sacy et Melon de Bourgogne pour les blancs.</p>
                                                <p>Le climat y est tempéré océanique à tendance continentale.</p>
                                                <p>Le sol est de type argilo-calcaire.</p>
                                                <h6>Appellations régionales :</h6>
                                                <p>Bourgogne générique : rouge, blanc et clairet. 2813 hectares plantés.</p>
                                                <p>Bourgogne-Passe-Tout-Grains : rouge, cépages pinot noir et gamay
                                                    (seul vin d’assemblage de Bourgogne). 695 hectares plantés.
                                                </p>
                                                <p>Coteaux Bourguignons : cépages pinot noir, gGamay, César et Tressot pour les rouges. Cépages Chardonnay, aligoté,
                                                    Melon de Bourgogne et Sacy pour les blancs. 135 hectares plantés.</p>
                                                <p>Crémant de Bourgogne : vin effervescent. Peuvent être utilisés, les cépages :
                                                    aligoté, chardonnay et pinot noir (seul ou assemblé). 115 hectares plantés.
                                                </p>
                                                <p>Bourgogne Mousseux : vin effervescent. Peuvent être utilisés, les cépages : pinot noir,
                                                    gamay, aligoté, melon de Bourgogne et Sacy. 600 hectares plantés.</p>
                                                <h6>Ses sous-vignobles sont : </h6>
                                                <p>&middot; Vignoble de Chablis.<br/>
                                                    &middot; Vignoble Auxerrois.<br/>
                                                    &middot; Vignoble de la Côte Chalonnaise.<br/>
                                                    &middot; Vignoble des Côtes de Beaune.<br/>
                                                    &middot; Vignoble des Côtes de Nuits.<br/>
                                                    &middot; Vignoble du Mâconnais.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>origines :</h6>
                                                <p>Les origines du vin en Bourgogne font débat. Selon certaines hypothèses s’appuyant sur des manuscrits du peuple des Eduens,
                                                    les 1eres vignes auraient été introduites via la Suisse au VIe siècle av. J.C. </p>
                                                <p>Selon d’autres historiens, ce seraient les grecs qui en seraient à l’origine
                                                    au Ve siècle av. J.C.</p>
                                                <p>Ce dont nous sommes sûrs, grâce à des sources archéologiques, c’est que les romains importaient
                                                    du vin du futur territoire bourguignon dès de IIe siècle av. J.C.</p>
                                                <p>L’édit de 92 après J.C. établi par l’Empereur Domitien et interdisant la plantation de vignes en Gaulle confirme la présence d’un vignoble en Bourgogne. Domitien souhaitait par cet édit, annihiler toute concurrence aux vins romains. Ce n’est que plus tard que, la Bourgogne étant devenu un carrefour commercial majeur, l’édit fut supprimé par Probus,
                                                    ce qui permis le développement de la viticulture en Bourgogne.</p>
                                                <h6>Le Vignoble de Bourgogne en quelques chiffres :</h6>
                                                <p>&middot; Superficie plantées : 29 500 hectares en 2008, dont 25 000 en AOC/AOP.<br/>
                                                    &middot; Superficie en production : 27 626 hectares.<br/>
                                                    &middot; Hectolitres de vins produit / an : 1 500 000.<br/>
                                                    &middot; Bouteilles commercialisées / an : 200 000 000.<br/>
                                                    &middot; Nombre de domaines : 3800 dont 1300 metteurs en bouteilles, 250 maisons de négoce et 23 caves coopératives.<br/>
                                                    &middot; Rendement moyen à l’année : de 35 hl/ha. (Romanée Conti) à 70 hl/ha. (Chablis et Petit Chablis).<br/>
                                                    &middot; Production : 60,5 % de vin blanc sec, 31,5 % de vin rouge et rosé, 8 % de vin effervescent.<br/>
                                                    &middot; Heure d’ensoleillement / an : 1900 à 2100.</p>
                                            </div>
                                        </div><!-- ../col-md-12 -->
                                    </div><!-- ../row -->
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
                                                    <h3>Vignobles du grand Auxerrois</h3>
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
                                        </div><!-- ../col-md-12 -->
                                    </div><!-- ../row -->

                                    <div class="row"><!--row -->
                                        <div class="col-md-12"><!-- col-md-12 -->
                                            <div class="col-md-6">
                                                <h6></h6>
                                                <p>Le vignoble du grand auxerrois se situe dans le département de l’Yonne (89) en Bourgogne.
                                                    Il forme un croissant commençant au sud- sud-est d’Auxerre -
                                                    Le vézelien autour de Vézelay - et termine à son nord-ouest -
                                                    Le Jovinien autour de Joigny. -
                                                </p>
                                                <p>Il regroupe plusieurs petits « sous-vignobles, » divisés en 4 terroirs :</p>
                                                <p>L’auxerrois : comprenant une dizaine de communes : Irancy,
                                                    Saint-Bris le Vineux, Coulanges la Vineuse et Chitry pour les principales.</p>
                                                <p>Le Tonnerrois : comprenant les communes de Tonnerre et d’Epineuil
                                                    dans la vallée de l’Armançon.</p>
                                                <p>Le Jovinien : Il comprend Joigny, Champvallon et Volgré, le long de l’Yonne.</p>
                                                <p>Le Vézelien : sur les coteaux du village de Vézelay, dans la vallée de la Cure.</p>
                                                <p>Le vignoble du grand auxerrois produit des vins rouges, blancs et rosés avec comme cépages principaux le chardonnay et l’aligoté pour les blancs, le pinot noir et le gamay pour les rouges et rosés. Moins rependu, on trouve également les cépages Sacy et melon en blanc, et césar en rouge (notamment à Irancy). Dans la commune de Saint-Bris-Le Vineux, c’est uniquement le cépage sauvignon qui fait loi (vin blanc).
                                                </p>
                                                <p><span class="rouge">Liste appellations village AOC : </span>Irancy, Saint-Bris-le-Vineux
                                                </p>
                                                <p><span class="rouge">Liste appellations régionales propres au vignoble du grand auxerrois : </span>Bourgogne Chitry, Bourgogne Côte Saint Jacques, Bourgogne côte d’Auxerre, Bourgogne Coulanges la Vineuse, Bourgogne Epineuil, Bourgogne Tonnerre et Bourgogne-Vézelay.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>ORIGINES :</h6>
                                                <p>Vraisemblablement, les premières Vignes dans la région d’Auxerre auraient été plantées au 1er siècle de notre ère. Elles se seraient véritablement développées sous l’Empereur Probus, au IIe siècle.
                                                </p>
                                                <h6>fiche d’identité :</h6>
                                                <p><span class="rouge">Désignation : Basse-Bourgogne.</span><br/>
                                                    &middot; Appellations : Irancy, Saint-Bris le Vineux, appellations régionales.<br/>
                                                    &middot; Localisation : Yonne (89).<br/>
                                                    &middot; Superficie plantée : 931,36 ha. en 2008.<br/>
                                                </p>
                                                <p><span class="rouge">Superficie de production : </span><br/>
                                                    &middot; Nombre de communes : 48.<br/>
                                                    &middot; Cépage dominant : Chardonnay et aligoté pour les blancs, pinot noir et gamay pour les rouges.<br/>
                                                    &middot; Production : Vin rouge, rosé et blanc.<br/>
                                                    &middot; Climat : tempéré océanique à tendance continental.<br/>
                                                    &middot; Sol : argilo-calcaire ou marneux.<br/>
                                                    &middot; Production en hectolitres : 40 404 hl, soit 5 373 730 de bouteilles environ.<br/>
                                                    &middot; Rendement moyen à l’hectare : de 45 hl/ha.
                                                    (Irancy, Vézelay) à 75 hl/ha (certains blancs comme le Chitry).
                                                </p>
                                            </div>
                                        </div><!-- ../col-md-12 -->
                                    </div><!--../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 2 ==============-->

                            <!-- =============== LE TEXTE 3 ==============-->
                            <section id="marque2marque1"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Bourgogne Côtes d’Auxerre&nbsp;</h3>
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
                                                <h6>le vignoble :</h6>
                                                <p>Le Bourgogne Côtes d’Auxerre est une dénomination géographique dans l’AOC Bourgogne.
                                                    Il est produit près d’Auxerre dans les communes de Angy, Auxerre, Quenne, Vaux,
                                                    Saint-Bris-le-Vineux, Vincelottes et Champs-sur-Yonne. Les vignes sont plantées
                                                    de part et d’autre de la rivière Yonne. </p>
                                                <h6>caractère :</h6>
                                                <p>Le vin de St-Bris possède une robe claire, paille pâle, or léger avec des reflets de
                                                    vert clair. C’est un vin fruité et frais avec des notes d’agrumes
                                                    (mandarine, pamplemousse), de pêche et de feuille de cassis.
                                                    On relève parfois même des notes de litchi. C’est un vin blanc sec, frais et léger. </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>Température de service entre 10 et 12 °C et entre 8 et 10 °C pour l’apéritif.
                                                    Le vin d’Irancy se déguste jeune mais peut-être gardé quelques années.
                                                    Il accompagne merveilleusement bien les poissons et les crustacés, notamment
                                                    les huitres mais aussi le fromage de chèvre. </p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                                    &middot; Appellation : Bourgogne Côtes d’Auxerre.<br/>
                                                    &middot; Vignoble : Bourgogne.<br/>
                                                    &middot; Sous-vignoble : Vignoble du Grand Auxerrois.<br/>
                                                    &middot; Sol : marno-calcaire.<br/>
                                                    &middot; Climat : tempéré océanique à tendance continental.<br/>
                                                    &middot; Heure d’ensoleillement : 1758 heures / an.<br/>
                                                    &middot; Cépages dominants : pinot noir pour les rouges et rosé, chardonnay pour les blancs.<br/>
                                                    &middot; Superficie plantée : 213 ha. (en 2008), 123 ha. Pour les rouges, 90 ha. Pour les blancs.<br/>
                                                    &middot; Superficie de production : 197,96 ha. Pour les rouges,
                                                    75,65 ha. Pour les blancs (en 2011).
                                                </p>

                                                <span class="rouge">Pieds à l’hectare : </span><br/>
                                                &middot; Production en hectolitre / an : 4 100 hl (soit 545 3000 bouteilles).<br/>
                                                &middot; Rendement moyen / an : 55hl/ha. Pour les rouges, 60 hl/ha. Pour les blancs.</p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 3 ==============-->

                            <!-- =============== LE TEXTE 4 ==============-->
                            <section id="marque2marque2"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Irancy&nbsp;</h3>
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
                                                <h6>le vignoble :</h6>
                                                <p>L’Irancy est un vin rouge produit dans le vignoble du Grand Auxerrois dans l’Yonne (89)
                                                    en Bourgogne. Il est produit sur les communes d’Irancy, de Vincelottes
                                                    et de Cravant. Son cépage principal est le pinot noir, mais le vin
                                                    d’appellation Irancy a la particularité d’être composé également de
                                                    10 % de cépage césar. Parmi les climats principaux à Irancy, on trouve 
                                                    : Côte de Moutier, Les Cailles, Le Mazelots, Palotte et Veaupessiot</p>
                                                <h6>caractère :</h6>
                                                <p>Avec sa robe pourpre voire grenat, l’Irancy est un vin très fruité.
                                                    On retrouve effectivement de fortes notes de fruits rouges (framboise,
                                                    cassis, mûre, cerise, etc.), d’épices et parfois de réglisse. </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>Température de service entre 16 et 17 °C.</p>
                                                <p>Le vin d’Irancy se déguste dès 3 à 4 ans. On conseille,
                                                    pour les vins de plus de 5 ans d’âge, de les carafe afin d’en exalter tous les aromes.
                                                </p>
                                                <p>Il accompagne à merveilleusement bien les volailles, pâtés et les travers de
                                                    porc mais aussi de nombreux fromages tels que le soumaintrain,
                                                    l’époisses ou encore le camembert.</p>
                                                <p>Temps de garde : 10 à 20 ans.</p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                                    &middot; Appellation : Irancy.<br/>
                                                    &middot; Vignoble : Bourgogne.<br/>
                                                    &middot; Sous-vignoble : Vignoble du Grand Auxerrois.<br/>
                                                    &middot; Sol : argilo-calcaire.<br/>
                                                    &middot; Climat : tempéré océanique à tendance continental.<br/>
                                                    &middot; Heure d’ensoleillement : 1758 heures / an.<br/>
                                                    &middot; Cépages dominants : pinot noir et césar.<br/>
                                                    &middot; Superficie plantée : 160 ha (en 2008).<br/>
                                                    &middot; Pieds à l’hectare : 7000 pieds.<br/>
                                                    &middot; Production en hectolitre / an : 6 600 hl (soit 877 800 bouteilles).<br/>
                                                    &middot; Rendement moyen : 45 à 56 hl/ha.<br/></p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 4 ==============-->

                            <!-- =============== LE TEXTE 5 ==============-->
                            <section id="marque2marque3"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!-- row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Saint-Bris-Le-Vineux&nbsp;</h3>
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
                                                <h6>le vignoble :</h6>
                                                <p>Le Saint-Bris est un vin blanc AOC du Vignoble du Bourgogne,
                                                    produit dans le sous-vignoble du Grand Auxerrois. Il peut être produit dans
                                                    les communes de Chitry, Irancy, Quenne, Saint-Bris-le-Vineux et Vincellotte.</p>
                                                <p>Ses cépages dominant sont le sauvignon et le sauvignon gris.
                                                    Le vin d’appellation St-Bris-le-vineux a en effet la particularité
                                                    d’être le seul vin de Bourgogne produit à partir d’un cépage sauvignon.
                                                    D’ailleurs, son appellation fût d’abord « Sauvignon saint-bris » avant
                                                    de devenir « Saint-Bris » en 2003.</p>
                                                <h6>caractère :</h6>
                                                <p>Le vin de Saintt-Bris possède une robe claire, paille pâle, or léger avec des reflets
                                                    de vert clair. C’est un vin fruité et frais avec des notes d’agrumes
                                                    (mandarine, pamplemousse), de pêche et de feuille de cassis.
                                                    On relève parfois même des notes de litchi. C’est un vin blanc sec, frais et léger.
                                                </p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p>Température de service entre 10 et 12 °C et entre 8 et 10 °C pour l’apéritif.<br/>
                                                    Le vin de Saint-Bris se déguste jeune mais peut-être gardé quelques années.<br/>
                                                    Il accompagne merveilleusement bien les poissons et les crustacés,
                                                    notamment les huitres mais aussi le fromage de chèvre.</p>
                                            </div>

                                            <div class="col-md-6">
                                                <h6>fiche d’identité :</h6>
                                                <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                                    &middot; Appellation : St-Bris.<br/>
                                                    &middot; Vignoble : Bourgogne.<br/>
                                                    &middot; Sous-vignoble : Vignoble du Grand Auxerrois.<br/>
                                                    &middot; Sol : marno-calcaire.<br/>
                                                    &middot; Climat : tempéré océanique à tendance continental.<br/>
                                                    &middot; Heure d’ensoleillement : 1758 heures / an.<br/>
                                                    &middot; Cépages dominants : sauvignon et sauvignon gris.<br/>
                                                    &middot; Superficie plantée : 103 ha. (en 2008).<br/>
                                                    &middot; Pieds à l’hectare : 7000 pieds.<br/>
                                                    &middot; Production en hectolitre / an : 4 100 hl (soit 545 3000 bouteilles).<br/>
                                                    &middot; Rendement moyen : 58 à 70 hl/ha.<br/></p>
                                            </div>
                                        </div>
                                    </div><!-- ../row -->
                                </div><!-- ../commentaires3 -->
                            </section><!-- ../section -->
                            <!-- =============== ../LE TEXTE 5 ==============-->

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

                            <!-- =============== LE TEXTE 10 ==============-->
                            <section id="marque7"><!-- section -->
                                <div class="commentaires3"><!-- commentaires3 -->
                                    <div class="row"><!--row -->
                                        <div class="col-md-12">
                                            <ul>
                                                <li>
                                                    <h3>Vignobles des Côtes de Beaune&nbsp;</h3>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user blanccasse"></i>
                                                    <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                                </li>
                                                <li class="auteur">
                                                    <i class="fa fa-calendar blanccasse"></i>
                                                    <span class="pad3px blanccasse">Rédigé le 22 décembre 2015</span>
                                                </li>
                                                <hr>
                                            </ul>
                                        </div><!-- ../col-md-12 -->
                                    </div><!-- ../row -->

                                    <div class="row"><!--row -->
                                        <div class="col-md-12"><!-- col-md-12 -->
                                            <div class="col-md-6">
                                                <h6>présentation</h6>
                                                <p>Le Beaune est un vin AOC produit sur la commune de Beaune en Côte d’Or. Le vin y est majoritairement
                                                    rouge (pinot noir) mais du vin blanc y est également produit (chardonnay). 42 climats de cette
                                                    appellation sont classés en 1er Cru avec notamment : Aux Cras, La Mignotte, Belissand,
                                                    Les Bressandes, Les Chouacheux, Clos des Ursules, Clos de l’Eau, Blanches Fleurs, Les Toussaints,
                                                    Les Teutons, Sur les Grèves, etc.</p>
                                                <h6>caractère</h6>
                                                <p><span class="rouge">Pour les rouges : </span> Avec des notes de fruits rouges et noirs,
                                                    puis en vieillissant d’épices et de truffe, les vins de Beaune possèdent une robe vive
                                                    et écarlate. Ce sont des vins bien charpentés.</p>
                                                <p><span class="vert">Pour les blancs : </span>Le Beaune blanc a une robe couleur or
                                                    avec les reflets verts propres au chardonnay. On retrouve dans ces vins dans notes
                                                    de fougère, d’amande, de fleurs blanches, de miel et de cannelle. Ce sont des vins gras
                                                    et moelleux surtout avec l’âge.</p>
                                                <h6>garde, température et gastronomie :</h6>
                                                <p><span class="rouge">Pour les rouges : </span> Température de service entre 14 et 16 °C.
                                                    Il s’accordera avec des gibiers à poils. Pour ce qui est des fromages,
                                                    préférez des fromages fort comme l’Époisse, le Munster ou le Maroilles.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6></h6>
                                                <p><span class="vert">Pour les blancs : </span>Température de service entre 10 et 12 °C.
                                                    Parfait avec les volailles, le veau ainsi que les tajines de poissons.
                                                    A maturité, il accompagnera parfaitement les fromages de chèvre et le Comté.</p>
                                                <h6>fiche d’identité :</h6>
                                                <p>&middot; Désignation : Côtes de Beaune.<br/>
                                                    &middot; Appellation : Beaune.<br/>
                                                    &middot; Vignoble : Bourgogne.<br/>
                                                    &middot; Sous‐vignoble : Vignoble des Côtes de Beaune.<br/>
                                                    &middot; Sol : argilo‐calcaire.<br/>
                                                    &middot; Climat : tempéré océanique à tendance continentale.<br/>
                                                    &middot; Production : Rouges et blancs.<br/>
                                                    &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs).<br/>
                                                    &middot; Superficie en production : 360 ha environ pour les rouges, 50 ha environ pour les blancs (en 2011).<br/>
                                                    &middot; Rendement moyen à l’année (hl) : 16 120 hl.<br/>
                                                    &middot; Rendement moyen : 40 à 58 hl/ha pour les rouges, 45 à 64 hl/ha pour les blancs.</p>
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
                                                <i class="fa fa-book" aria-hidden="true"></i>&nbsp;La Bourgogne
                                            </a>
                                            <ul>
                                                <li><a href="{{ url('france/bourgogne/chablis') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Chablis
                                                    </a>
                                                </li>
                                                <li><a href="{{ url('/france/bourgogne/cote-chalonnaise-et-couchoise') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Côte Chalonnaise
                                                    </a>
                                                </li>
                                                <li><a href="{{ url('/france/bourgogne/beaune-et-cotes-de-beaune') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Côtes de Beaune
                                                    </a>
                                                </li>
                                                <li><a href="{{ url('france/bourgogne/cote-de-nuits') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Côtes de Nuits
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#marque2">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Grand Auxerrois
                                                    </a>
                                                    <ul id="sousmenuderoulant">
                                                        <li>
                                                            <a href="#marque2marque1">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Bourgogne Côtes d’Auxerre
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque2marque2">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Irancy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#marque2marque3">
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                &nbsp;Saint-Bris-Le-Vineux
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('/france/bourgogne/macon') }}">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        &nbsp;Macon
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
                        @include('layouts.2emeniveau.bourgogne.droite')
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
                                    <div class="col-md-2"><!-- col-md-2 -->
                                        <h6 class="bourgogne">VIGNOBLE DU GRAND AUXERROIS</h6>
                                        <span class="rougebourgogne">Châtillonnais</span>
                                        <p class="bourgogne">Appellations régionales de la Bourgogne</p>
                                        <span class="rougebourgogne">Chablisien</span>
                                        <p class="bourgogne">Petit Chablis<br/>
                                            Chablis<br/>
                                            Chablis 1er cru<br/>
                                            Chablis Grand Cru<br/>
                                            Les Bougros, Preuses, Vaudésir, Grenouilles, Valmur, Les Clos, Blanchot</p>
                                        <span class="rougebourgogne">Auxerrois</span>
                                        <p class="bourgogne">Bourgogne Côtes d’Auxerre<br/>
                                            Irancy<br/>
                                            Bourgogne Coulanges-la-Vineuse<br/>
                                            Bourgogne Chitry<br/>
                                            Saint-Bris</p>
                                        <span class="rougebourgogne">Tonnerrois</span>
                                        <p class="bourgogne">Bourgogne Épineuil<br/>
                                            Bourgogne Tonnerre</p>
                                        <span class="rougebourgogne">Jovinien</span>
                                        <p class="bourgogne">Bourgogne Côte Saint-Jacques</p>
                                        <span class="rougebourgogne">Vézelien</span>
                                        <p class="bourgogne">Bourgogne Vézelay</p>
                                        <h6 class="bourgogne">DIJONNAIS</h6>
                                        <p class="bourgogne">Appellations régionales de la Bourgogne<br/>
                                            Bourgogne Le Chapître</p>
                                        <h6 class="bourgogne">VIGNOBLE DE LA CÔTE DE NUITS</h6>
                                        <p class="bourgogne">Côte de Nuits Villages<br/>
                                            Marsannay<br/>
                                            Marsannay rosé<br/>
                                            Fixin<br/>
                                            Fixin 1er cru<br/>
                                            Gevrey-Chambertin<br/>
                                            Gevrey-Chambertin 1er Cru
                                            Grands Crus de Gevrey-Chambertin n : Chambertin, Chambertin Clos-de-Bèze, Chapelle-Chambertin, Charmes-Chambertin, Griotte-Chambertin, Latricières-Chambertin, Mazis-Chambertin, Mazoyères-Chambertin, Ruchottes-Chambertin<br/>
                                            Morey-Saint-Denis<br/>
                                            Morey-Saint-Denis 1er Cru<br/>
                                            Grands Crus de Morey-Saint-Denis : Clos de la Roche, Clos Saint-Denis, Clos des Lambrays, Clos de Tart, Bonnes Mares (partie)<br/>
                                            Chambolle-Musigny<br/>
                                            Chambolle-Musigny 1er Cru<br/>
                                            Grands Crus de Chambolle-Musigny : Bonnes Mares (partie), Musigny<br/>
                                            Vougeot<br/>
                                            Vougeot 1er Cru<br/>
                                            Grand Cru de Vougeot : Clos de Vougeot<br/>
                                            Vosne-Romanée<br/>
                                            Vosne-Romanée 1er Cru<br/>
                                            Grands Crus de Vosne Romanée : Romanée<br/>
                                            Saint-Vivant, Richebourg, Romanée Conti, La Romanée, La Tâche, La Grande Rue, et sur la commune de Flagey-Echezeaux : Echezeaux, Grands Echezeaux<br/>
                                            Nuits ou Nuits-Saint-Georges<br/>
                                            Nuits ou Nuits-Saint-Georges 1er Cru</p>
                                        <span class="rougebourgogne">Hautes-Côtes de Nuits</span>
                                        <p class="bourgogne">Bourgogne Hautes-Côtes de Nuits</p>
                                    </div><!-- ../col-md-2 -->
                                    <div class="col-md-2">
                                        <h6 class="bourgogne">VIGNOBLE DE LA CÔTE DE BEAUNE</h6>
                                        <p class="bourgogne">Côte de Beaune-Villages<br/>
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
                                            Savigny-lès-Beaune 1er Cru<br/>
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
                                            Grands Cru de Puligny-Montrachet : Chevalier-Montrachet, Bâtard-Montrachet, Bienvenues-Bâtard-Montrachet (Partie), Montrachet (Partie)<br/>
                                            Chassagne-Montrachet<br/>
                                            Chassagne-Montrachet 1er Cru<br/>
                                            Grands Crus de Chassagne Montrachet : Bâtard-Montrachet (Partie), Criôts-Bâtard- Montrachet, Montrachet (Partie)<br/>
                                            Saint-Aubin<br/>
                                            Saint-Aubin 1er Cru<br/>
                                            Santenay<br/>
                                            Santenay 1er Cru<br/>
                                            Maranges<br/>
                                            Maranges 1er Cru<br/></p>
                                        <span class="rougebourgogne">Hautes-Côtes de Beaune</span>
                                        <p class="bourgogne">Bourgogne-Hautes-Côtes de Beaune</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="bourgogne">Vignoble de la Côte Chalonnaise</h6>
                                        <p class="bourgogne">Bourgogne Côte Chalonnaise<br/>
                                            Bouzero<br/>
                                            Rully<br/>
                                            Rully 1er<br/>
                                            Mercurey<br/>
                                            Mercurey 1er Cru<br/>
                                            Givry<br/>
                                            Givry 1er Cru<br/>
                                            Montagny<br/>
                                            Montagny 1er Cru</p>
                                        <span class="rougebourgogne">Couchois</span>
                                        <p class="bourgogne">Bourgogne Côtes du Couchois</p>
                                        <h6 class="bourgogne">Vignoble du mâconnais</h6>
                                        <p class="bourgogne">Mâcon<br/>
                                            Mâcon supérieur<br/>
                                            Mâcon rouge<br/>
                                            Mâcon blanc<br/>
                                            Pinot Chardonnay Mâcon<br/>
                                            Mâcon rosé<br/>
                                            Mâcon-villages<br/>
                                            Pouilly-Fuissé<br/>
                                            Pouilly-Vinzelles<br/>
                                            Pouilly-Loché<br/>
                                            Saint-Véran<br/>
                                            Viré-Clessé<p/>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="bourgognemapmodal"></div>
                                    </div>
                                </div><!-- ../col-md-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.2emeniveau.bourgogne.appelsjsbourgogne')
