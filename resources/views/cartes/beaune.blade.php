@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.beaune.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>1ers crus et Grands crus de Beaune</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos Beaune sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/beaune.jpg') }}" alt="Beaune">
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
                                                        Beaune
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ÈME ONGLET - 2ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Hautes Côtes de Beaune
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ÈME ONGLET - FIN 2ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Chorey-lès-beaune
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet4" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Savigny-les-beaune
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
                                                                <div class="titre">Beaune</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 11 mai 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Beaune est un vin AOC produit sur la commune de Beaune en Côte d’Or. Le vin y est majoritairement rouge (pinot noir) mais du vin blanc y est également produit (chardonnay). 42 climats de ceOe appellaPon sont classés en 1er Cru avec notamment : Aux Cras, La Mignotte, Belissand, Les Bressandes, Les Chouacheux, Clos des Ursules, Clos de l’Eau, Blanches Fleurs, Les Toussaints, Les Teutons, Sur les Grèves, etc.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Avec des notes de fruits rouges et noirs, puis en vieillissant d’épices et de truffe, les vins de Beaune possèdent une robe vive et écarlate. Ce sont des vins bien charpentés
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Le Beaune blanc a une robe couleur or avec les reflets verts propres au chardonnay. On retrouve dans ces vins dans notes de de fougère, d’amande, de fleurs blanches, de miel et de cannelle. Ce sont des vins gras et moelleux surtout avec l’âge
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Température de service entre 14 et 16 °C<br>
                                                                Il s’accordera avec des gibiers à poils. Pour ce qui est des fromages, préférez des fromages fort comme l’Epoisse, le Munster ou le Maroilles
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Température de service entre 10 et 12 °C<br>
                                                                Parfait avec les volailles, le veau ainsi que les tajines de poissons. A maturité il accompagnera parfaitement les fromages de chèvre et le Comté
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Beaune<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : Rouges et blancs<br/>
                                                                &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs)<br/>
                                                                &middot; Superficie en production : 360 ha. environ pour les rouges, 50 ha. environ pour les blancs (en 2011)<br/>
                                                                &middot; Rendement moyen à l’année : 35 à 49 hl/ha pour le rouge et 40 à 54 hl/ha pour le blanc<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                                                <div class="titre">Hautes Côtes de Beaune</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 11 mai 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Bourgogne Hautes Côtes de Beaune est un vin AOC produit vin produit sur plusieurs communes à l'ouest du vignoble de la côte de Beaune : En Côte d’Or sur 12 communes des Hautes Côtes et sur les hauteurs de 10 communes de la Côte de Beaune. En Saône et Loire sur 4 communes des Hautes Côtes et sur 3 communes de la Côte de Beaune. Les vins produits y sont majoritairement rouges et rosé (pinot noir) et en moindre quanWté, blancs (chardonnay)
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Bouche : ferme dans sa jeunesse mais équilibré et harmonieux à maturité<br>
                                                                Robe : pourpre<br>
                                                                Arômes : fruités (grio[e, framboise, cassis), réglisse et sous bois.
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Bouche : frais et élégant<br>
                                                                Robe : or pâle, paille<br>
                                                                Arômes : fleurs blanches, miel
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Température de service : 14 à 16 °C<br>
                                                                Accords mets/vin : viandes rôties, filet mignon de porc, petit salé, gigot d’agneau, époisse, soumaintrain<br>
                                                                Temps de garde : 3 à 5 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Température de service : 10 à 13 °C<br>
                                                                Accords mets/vin : escargots, poissons, wons de légume, crustacé, fromages bleus, gruyère<br>
                                                                Temps de garde : entre 2 et 5 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Beaune<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges (97 %) et blancs (3 %)<br/>
                                                                &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs)<br/>
                                                                &middot; Superficie en production : 801 ha. environ (663 ha. environ en rouges et rosés, 138 ha. environ en rouge) (en 2011)<br/>
                                                                &middot; Production (en hectolitres) : 39 090 hl<br/>
                                                                &middot; Rendement moyen : 50 à 56 hl/ha. pour les rouges, 55 à 72 hl/ha. pour les blancs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 2ÈME TEXTE -->

                                                <!-- CONDITIONS 3ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Chorey-lès-Beaune</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 11 mai 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Chorey-lès-Beaune est un vin AOC produit sur la commune de Chorey-lès-Beaune en Côte d’Or. Le vin produit y est majoritairement rouge (pinot noir), du blanc (chardonnay) y est également produit en moindre quantité. Parmi les lieux-dits composant ceVe appellation on trouve notamment : Le Grand, La Maladérotte, Les Ratosses, Les Beaumonts, Les Crais, Les Petites Rcipes, Saussy ou encore Trot Garnier.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Modérément tannique, souple et léger<br>
                                                                Robe : pourpre, reflets violets<br>
                                                                Nez : fruits rouge et noirs (mûres, framboise, grioVes), réglisse, sous-bois. Avec l’âge : pain d’épice, cuir, animal
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Vif quand il est jeune, vin souple et bien gras à maturité. Frais et onctueux.<br>
                                                                Robe : or clair<br>
                                                                Arômes : fleur blanche, citronnelle, noisette
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Température de service entre 12 et 13 °C dans sa jeunesse, 15 à 16 °C à maturité<br>
                                                                Accords mets/vin : abats, entrées chaudes, charcuterie, risoVos, volailles rôTes, boeuf bouilli, cuisine tex-mec<br>
                                                                Temps de garde : 5 à 10 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Température de service entre 10 et 12 °C<br>
                                                                Accords mets/vin : camemberts, bris, pâtés, terrines, poissons cru ou au four, veau en sauce, blanquette de volaille, fruits de mer en sauce, crabe<br>
                                                                Temps de garde : 3 à 8 ans.
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Beaune<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Rouges (96 %) et blancs (4 %)<br/>
                                                                &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs)<br/>
                                                                &middot; Superficie en production : 134 ha. environ (124 ha. environ en rouge, 10 ha. environ en blanc) (en 2011)<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                                                                <div class="titre">Savigny-lès-Beaune</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 11 mai 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Savigny-lès-Beaune est un vin AOC produit sur les communes de Savigny-lès-Beaune en Côte d’Or.
                                                                Cette appellation comporte 22 climats classés en 1er Cru, dont :
                                                                Aux Clous, Au Fourneaux, Aux Serpentières, Champs Chevrey, La Dominode, Les Talmettes,
                                                                Les Jarrons, Les Narbantons, Redrescul, Les Vergelesses, etc. Les vins produits
                                                                y sont majoritairement rouges (pinot noir) mais également blanc (chardonnay)
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Bouche : rond et puissant<br>
                                                                Robe : pourpre<br>
                                                                Arômes : fleurs (violeJe), peKts fruits noirs et rouges (cassis, framboise, cerise)
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Bouche : grasse<br>
                                                                Robe : or ou paille pâle<br>
                                                                Arômes : beurre, brioche, agrumes (citron, pamplemousse)
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges :</span><br>
                                                                Température de service : 14 et 16 °C<br>
                                                                Accords mets/vin : boeuf, foie gras poêlé, volaille rôtie, chaource, reblochon, cantal<br>
                                                                Temps de garde : 5 à 10 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs :</span><br>
                                                                Température de service : 11 à 13 °C<br>
                                                                Accords mets/vin : poissons d’eaux douces en sauce, omelettes,
                                                                oeufs brouillés, gruyère, fromage de chèvre<br>
                                                                Temps de garde : demande entre 4 à 8 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Beaune<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges (89 %) et blancs (11 %)
                                                                &middot; Cépages dominants : Pinot noir (pour les rouges) Chardonnay (pour les blancs)<br/>
                                                                &middot; Superficie en production : 345 ha. environ (300 ha. environ en rouge, 45 ha. environ en blanc) (en 2011)<br/>
                                                                &middot; Production (en hectolitres) : 15 320 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs
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
                @include('layouts.4emeniveau.beaune.droite')
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
                            <h3 style="color: #e52372; font-weight: 700;">Les vignobles de Beaune</h3>
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
                            <div id="mapbeaune"></div>
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
@include('layouts.4emeniveau.beaune.appelsjsbeaune')

@include('layouts.4emeniveau.footer')
