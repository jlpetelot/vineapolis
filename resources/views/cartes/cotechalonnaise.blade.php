@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.cotechalonnaise.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles de la Côte Chalonnaise et Couchoise</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/chalon.jpg') }}" alt="Châlon">
                        </div>
                        <a href="#modal" id="modal3emeniveau">
                            <i class="fa fa-eye" data-toggle="tooltip"
                               data-placement="left2" title="Voir les parcelle">
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
                                                        Côte Chalonnaise et Couchoise
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Bouzeron
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Givry
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Mercurey
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 5ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet5" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Montagny
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 5ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->
                                                <li>
                                                    <a href="#onglet6" role="tab" id="dropdown6-tab" data-toggle="tab" aria-controls="dropdown6">
                                                        Rully
                                                    </a>
                                                </li>
                                                <!-- CONDITIONS DE PRÉSENCE DU 6ÈME ONGLET - 6ÈME NAVIGATION -->


                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- CONDITIONS 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Côte Chalonnaise et Couchoise</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 14 décembre 2015</span>
                                                                </li>
                                                            </ul>
                                                            <p>
                                                                Le vignoble de la côte chalonnaise se situe dans le département de la Saône
                                                                et Loire (71) en Bourgogne. Il forme une bande de 40 km par 4,
                                                                entre les vignobles des côtes deBeaune et du Mâconnais.
                                                            </p>
                                                            <p>
                                                                Ce vignoble produit aussi bien des vins rouges que des vins blancs souvent de très bonne
                                                                réputation. Le pinot noir y est le cépage le plus répandu même si on y trouve également
                                                                du Chardonnay et de l’aligoté (pour le blanc) ainsi que du gamay.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <h5 class="margehaute30px">FICHE D'IDENTITÉ</h5>
                                                            <p>&middot; Désignation : Côte Chalonnaise.<br/>
                                                                &middot; Appellations : Bouzeron, Givry, Mercurey, Montagny, Rully, appellations régionales.<br/>
                                                                &middot; Localisation : Saône et Loire (71).<br/>
                                                                &middot; Superficie plantée : Environ 4430 ha.<br/>
                                                                &middot; Nombre de communes : 48.<br/>
                                                                &middot; Cépage dominant : Chardonnay pour les blancs, pinot noir pour les rouges.<br/>
                                                                &middot; Production : Vin rouge, rosé et blanc.<br/>
                                                                &middot; Climat : Continental, été chaud, automnes secs.<br/>
                                                                &middot; Sol : argilo-calcaire.
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
                                                                <div class="titre">Bouzeron</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Bouzeron est un vin blanc sec à cépage aligoté.
                                                            </p>
                                                            <p>
                                                                Les climats de cette appellation sont : L’hermitage, La Digoine,
                                                                En Rabelot, La Tournelle, La Fortune, Le Bois du Foiret,
                                                                Le Bourg, Le Champ des Crots, Le Feulin, Les Bouchines,
                                                                Les Boycottes, Les Clous, Les Corcelles, Les Cordères, Les Fias,
                                                                Les Louères, Les Pertuzots, Les Seurrées, Sous le Bois, Vers le Petits Puits.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Avec sa robe allant de l’or pale jusqu’au paille clair, tirant parfois vers le vert d’eau,
                                                                le Bouzeron est un vin sec, fruité et minéral (silex).
                                                                Au nez, on retrouve l’acacia et les fleurs blanches, des notes citronnées,
                                                                avec parfois des arômes de miel voir de noisette. Rond et charpenté en bouche,
                                                                c’est un vin gourmand.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 9 et 11 °C à l’apéritif, entre 11 et 12°C durant le repas<br/>
                                                                Accords mets/vin : il accompagne à merveilleusement bien les huitres, crustacé,
                                                                veau, volaille, fromage de chèvre et à pâte cuite<br/>
                                                                Temps de garde : 5 à 15 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte Chalonnaise<br/>
                                                                &middot; Appellation principale : Bouzeron<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble de la Côte Chalonnaise<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Cépage dominant : Aligoté<br/>
                                                                &middot; Superficie plantée : 55,56 ha. (en 2011)<br/>
                                                                &middot; Superficie de production : 44 ha. (en 2011)<br/>
                                                                &middot; Production (en hectolitres) : 2886 hl<br/>
                                                                &middot; Rendement moyen : 55 à 66 hl/ha
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
                                                                <div class="titre">Givry</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Givry est un vin blanc ou rouge produit sur les communes de Givry, Jambles et Dracy le Fort en Saône et Loire (71) en Bourgogne. 65 % du vin qui y est produit est du rouge à cépage Pinot Noir et 15 % des blancs à cépage Chardonnay. L’appellation comprends 38 climats classés en 1er Cru avec par exemple : Clos Marceaux, Clos du Vernoy, Crauzot, La Brûlée, La PeWte Berge, Pied de Chaume, etc.
                                                            </p>
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br/>
                                                                Une robe pourpre teintée de reflets violets pour ce vin aux notes fruitées (fraise ou mûre)
                                                                qui rappelle la violette. Certains Givry ont également des arômes épicés et réglissés. Avec des tanins assez ferme lorsqu’il est jeune, et s’adoucissent en bouche après quelques années
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br/>
                                                                Des arômes de fleurs blanches (lys, Wlleul) et de fruits secs pour un vin à la robe or clair.
                                                                On y retrouve des notes de citron et de miel.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge  gras">Pour le Rouge :</span><br/>
                                                                Température de service : 14 et 15 °C<br/>
                                                                Accords mets/vin : le Givry s’accorde très bien avec les pâtées et charcuterie
                                                                mais également avec du boeufs ou de la volaille. Préféré les fromages à pâte douce
                                                                comme le reblochon ou le brie avec lesquel il s’allie à merveille.
                                                                veau, volaille, fromage de chèvre et à pâte cuite<br/>
                                                                Temps de garde : 4 à 8 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br/>
                                                                Température de service : 2 et 6 °C<br/>
                                                                Accords mets/vin : à servir avec du poisson (brochet par exemple) de la volaille ou des fromages à pâte pressée
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte Chalonnaise<br/>
                                                                &middot; Appellation principale : Givry<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble de la Côte Chalonnaise<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : rouge (85 %) et blancs (15 %)<br/>
                                                                &middot; Cépages dominants : Pinot Noir (rouge) et Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 302,36 ha. (237,52 ha. en rouge, 44,84 ha. en blanc) (en 2011)<br/>
                                                                &middot; Production (en hectolitres/an) : 12 275 hl environ<br/>
                                                                &middot; Rendement moyen : 45 à 58 hl/ha pour le rouge et 45 à 64 hl/ha pour le blanc
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
                                                                <div class="titre">Mercurey</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Mercurey est l’une des appellaCons les plus importante de la Côte Chalonnaise.
                                                                Il est produit sur les communes de Mercurey et de Saint-­‐Martin sous Montaigu.
                                                                C’est du vin rouge qui y est produit à 90 % (cépage pinot noir) et du vin blanc,
                                                                pour 10 % de la producCon (cépage chardonnay).
                                                            </p>
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br/>
                                                                Une belle robe d’une teinte rubis pour ce vin fruité aux arômes de fraise, de framboise et de cerise. Des notes épicées notamment celle du tabac peuvent également être présente. Ses tanins sont fermes lorsqu’il est jeune mais il devient rond à maturité
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span>
                                                                Avec des reflets verts / dorés, il possède des arômes de fleurs blanches
                                                                typique du cépage chardonnay, soutenus par des notes minérales. Il est savoureux et gourmand en bouche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br/>
                                                                Température de service entre 14 et 15 °C quand il est jeune, entre 15 et 16°C à maturité.<br/>
                                                                Accords mets/vin : il s’allie à merveille avec les pièces de boeuf telle que les entrecôtes,
                                                                auxquelles il donne du reflief, mais également avec l’agneaux,
                                                                les volailles mijotés et avec tous types de fromages<br/>
                                                                Temps de garde : 5 à 15 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br/>
                                                                Température de service : 11 et 13 °C<br/>
                                                                Accords mets/vin : à servir avec du poissons, des fruits de mer mais également, plus surprenant, avec la cuisine asiatique.
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte Chalonnaise<br/>
                                                                &middot; Appellation principale : Mercurey<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble de la Côte Chalonnaise<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : rouge (90 %) et blancs (10 %)<br/>
                                                                &middot; Cépages dominants : Pinot Noir (rouge) et Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 633,27 ha. (548,68 ha. en rouge, 85,59 ha. en blanc) (en 2011)<br/>
                                                                &middot; Production (en hectolitres/an) : 28 000 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha pour le rouge et 45 à 64 hl/ha pour le blanc (46 à 58 hl/ha en 1er Cru)
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
                                                                <div class="titre">Montagny</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Montagny est un vin blanc AOC à cépage chardonnay produit sur les communes de Montagny-­lès-­Buxy, Buxy, Saint-­‐Vallerin et Jully-­lès-­Buxy en Saone et Loire (71) en Bourgogne. Les vignes de Montagny sont taillées, entretenues et travaillées pour produire du vin depuis le moyen-­âge
                                                            </p>
                                                            <p>
                                                                L’appellation comprends 49 climats classés en 1er Cru : Vignes Saint-­‐Pierre, Les Combes, Saint Ytages, Les Charmelo[es, Champ Toiseau, Vignes sur le Cloux, Les Garchères, Vignes Couland, Les Bouchots, Les Burnins, Les Perrières, Les Treuffères, Montcuchot, Vigne du Soleil, Les Maroques, Les Beaux Champs, Les Macles, Creux de Beaux Champs, L'Épaule, Les PlaWères, Les Jardins, Les Coères, Saint-­‐Morille, Les Vignes Derrière, Les Bordes, Les Las, Les Gouresses, Les Paquiers, Montorge, Les Resses, Le Cloux et Sous les Feilles, La Grande Pièce, Le Clos Chaudron, Les Vignes des Prés, Le Vieux Château, Le Clouzot, Les Pidances, Les Condre[es, Les Vignes Longues, Cornevent, Mont Saint-­‐Laurent, Les Bonneveaux, Les Bassets, Les Paquiers, Les Craboule[es, Les Coères, La Moullière, Les Resses, Les Coères, Les Chaniots et Chazelle
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Typique des vins blancs bourguignons chardonnay : il possède une robe dorée, claire et limpide avec de légers reflets verts, Wrant avec l’âge sur le bouton d’or. On y retrouve des arômes de fleurs blanches avec notamment l’acacia, le chèvrefeuille, l’aubépine et sur certains vins de la violette. Des notes également minérale (pierre à fusil) et citronnée. En bouche, c’est un vin frais et structuré.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : entre 10 et 12 °C<br/>
                                                                Accords mets/vin : le Montagny s’accorde bien avec du poisson grillée ou poêlé ainsi que le veau et le fromage à pâte cuite<br/>
                                                                Temps de garde : 5 à 6 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte Chalonnaise<br/>
                                                                &middot; Appellation principale : Montagny<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble de la Côte Chalonnaise<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : Blanc<br/>
                                                                &middot; Cépage dominant : Chardonnay<br/>
                                                                &middot; Superficie de production : 326,44 ha. (dont 201,54 ha. en 1er Cru) (en 2011)<br/>
                                                                &middot; Production (en hectolitres) : 17 500 hl environ<br/>
                                                                &middot; Rendement moyen : 60 à 64 hl/ha (58 à 62 hl/ha en 1er Cru)
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
                                                                <div class="titre">Rully</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 juillet 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Rully peut être blanc à cepage chardonnay ou rouge à cépage pinot noir, exclusivement. L’appellation compte 23 climats classés en 1er Cru, citons notamment : Clos Saint Jacques, La Pucelle, Raclot, Vauvry, Les Pierres, etc.
                                                            </p>
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span>
                                                                Une robe dorée à reflets verts, fonçant avec l’âge. Des arômes d’acacia, de chèvrefeuille, de violette, de citron voir de pêche blanche. En vieillissant il peut acquérir des notes de miel, de fruits secs et de coing. Il a un palais fruité et vif, il est rond et bien gras en bouche
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br/>
                                                                Une robe allant de rubis à grenat sombre, et nez de fruits rouges et noirs mais également de réglisse. Il tire sur des arômes de fruits cuit avec l’âge. Il peut être un peu fermé quand il est jeune. Assez charnu en bouche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br/>
                                                                Température de service : entre 12 et 14 °C<br/>
                                                                Accords mets/vin : il accompagne parfaitement les poissons fins, les crustacés chauds, les volailles, en sauce notamment, ainsi que nombre de fromages à pâte cuite.<br/>
                                                                Temps de garde : 2 à 8 ans
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br/>
                                                                Température de service entre 14 et 17°C<br/>
                                                                Accords mets/vin : Connu pour très bien s’accorder avec les abats, mais aussi avec les volailles<br/>
                                                                Temps de garde : 3 à 6 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côte Chalonnaise<br/>
                                                                &middot; Appellation principale : Rully<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble de la Côte Chalonnaise<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : blanc (64 %) et rouge (36 %)<br/>
                                                                &middot; Cépages dominants : Chardonnay (blanc) et Pinot Noir (rouge)<br/>
                                                                &middot; Superficie plantée : 343,46 ha. (225,76 ha. en blanc, 117,70 ha. en rouge) (en 2011)<br/>
                                                                &middot; Production (en hectolitres/an) : 15 800 hl<br/>
                                                                &middot; Rendement moyen : 50 à 62 hl/ha pour le rouge et 50 à 64 hl/ha pour le blanc (46 à 58 hl/ha en 1er Cru)
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 6ÈME TEXTE -->

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
                @include('layouts.4emeniveau.cotechalonnaise.droite')
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
                            <h3 class="vert gras">Les vignobles de la Côte Chalonnaise et Couchoise</h3>
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
                            <div id="francemapchalon"></div>
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
@include('layouts.4emeniveau.cotechalonnaise.appelsjscotechalonnaise')

@include('layouts.4emeniveau.footer')
