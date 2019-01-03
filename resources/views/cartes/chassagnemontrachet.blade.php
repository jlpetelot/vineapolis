@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.chassagnemontrachet.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles de Chassagne-Montrachet</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos Chassagne-Montrachet sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/chassagne.jpg') }}" alt="Aloxe-Carton">
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
                                                        Chassagne-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Criots-Bâtard-Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Montrachet
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME  ONGLET - FIN 3ÈME NAVIGATION -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- CONDITIONS 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Chassagne-Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Chassagne-Montrachet est un vin AOC produit sur les communes de Chassage-Montrachet
                                                                et de Remigny. Il jouit de la notoriété des 3 Grands Crus produits sur la même commune
                                                                : le Montrachet, le Bâtard-Montrachet et le Criots-Bâtard-Montrachet.
                                                                Ses vins sont à 60 % blancs et à 40 % rouges.
                                                                55 de ses climats sont classés en 1er cru avec par exemple :
                                                                Clos Saint Jean, Chassagne, Les Pasquelles, Les Brusonnes,
                                                                Guerchères, Les Grands Clos, La Romanée, Les Chaumes, etc.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Le Chassagne-Montrachet a une robe lamé or avec les reflets verts du cépage chardonnay.
                                                                Des arômes d’aubépine, d’acacia, de chèvrefeuille, de verveines et
                                                                de noisettes composent son bouquet. On retrouve également des notes de silex,
                                                                lui conférant une belle minéralité. Avec l’âge, des arômes de miel
                                                                et de poire mûre apparaissent. Bien gras et moelleux au palais
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges</span><br>
                                                                Un beau rouge vif avec des reflets violet pour un vin aux
                                                                arômes de griotte, de fraise des bois, de groseille et de noyau de cerise.
                                                                Ses tanins sont un peu ferme dans sa jeunesse
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="jaune gras">Pour les blancs</span><br>
                                                                Température de service entre 12 et 14 °C<br>
                                                                Parfait avec les viandes blancs comme la volaille et le veau,
                                                                mais aussi avec le poisson, notamment le saumon. En 1er Cru,
                                                                dégustez le avec du homard ou du foie gras cuit
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour les Rouges</span><br>
                                                                Température de service entre 15 et 16 °C<br>
                                                                Puissant et tanique, il s’accordera avec des mets forts comme l’agneau
                                                                ou le porc grillé, mais aussi avec des volailles au curry.
                                                                En 1er Cru, il accompagne parfaitement les gibiers à plumes
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Chassagne-Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Blancs (60 %) et Rouges (40 %)<br/>
                                                                &middot; Cépages dominants : Chardonnay (blancs) et Pinot noir (rouges)<br/>
                                                                &middot; Superficie de production : 197,66 ha. pour les blancs et 106,45 ha. pour les rouges<br/>
                                                                &middot; Production en hectolitre / an : environ 14 985 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 54 hl/ha. pour les blancs
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
                                                                <div class="titre">Criots-­Bâtard-­Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Criots-­Bâtard-­Montrachet est un Grand Cru AOC blanc produit
                                                                sur une partie de la commune de Chassagne-Montrachet, en Côte d’Or (21).
                                                                Il fait partie des Grands Crus les plus méridionaux du département
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le Criots-­Bâtard-­Montrachet à une robe couleur or avec des reflets émeraude, tendant vers le jaune en vieillissant. On y retrouve des notes de beurre et de croissant chaud, ainsi que des nuances épicées, de miel et de fruits secs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service entre 12 et 14 °C<br/>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lotte mais également les poules et poulardes<br/>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Criots-­Bâtard-­Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Blancs<br/>
                                                                &middot; Cépages dominants : Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 1,57 ha. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : environ 75 hl<br/>
                                                                &middot; Rendement moyen : 40 à 54 hl/ha
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
                                                                <div class="titre">Montrachet</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 5 avril 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Montrachet est un Grand Cru AOC blanc produit sur une partie des
                                                                communes de Puligny-Montrachet et de Chassagne-Montrachet, en Côte d’Or (21).
                                                                Il fait partie des Grands Crus les plus méridionaux du département
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le Montrachet à une robe couleur or avec des reflets émeraude, tendant vers le jaune en vieillissant. On y retrouve des notes de beurre et de croissant chaud, ainsi que des nuances épicées, de miel et de fruits secs
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service entre 12 et 14 °C<br/>
                                                                Il s’accordera avec des mets nobles comme le foie gras, les crustacés (homard, langouste, tourteau), les poissons fins et fermes tel que la lo]e mais également les poules et poulardes<br/>
                                                                Temps de garde : C’est un vin de garde, garde minimum 10 à 15 ans, il se conserve plus de 20 ans pour les grandes années
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Montrachet<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : Blancs<br/>
                                                                &middot; Cépages dominants : Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 7,80 ha. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : environ 375 hl<br/>
                                                                &middot; Rendement moyen : 40 à 54 hl/ha
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 3ÈME TEXTE -->

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
                @include('layouts.4emeniveau.chassagnemontrachet.droite')
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
                            <h3 style="color: #ffc800; font-weight: 700;">Les vignobles de Chassagne-Montrachet</h3>
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
                            <div id="mapchassagne"></div>
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
@include('layouts.4emeniveau.chassagnemontrachet.appelsjschassagnemontrachet')

@include('layouts.4emeniveau.footer')
