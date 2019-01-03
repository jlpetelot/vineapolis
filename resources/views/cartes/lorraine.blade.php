@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.lorraine.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vins de Lorraine</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins {{ $vinzoom->localitevinicole }}
                                    sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/lorraine.jpg') }}" alt="Lorraine">
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
                                                        Vignoble de Lorraine
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Côtes-de-Toul
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Moselle
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
                                                                <div class="titre">Vignoble de Lorraine</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 mai 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">&nbsp;</h5>
                                                            <p>
                                                                Vignoble de Lorraine se situe dans les départements de la Meuse,
                                                                la Moselle et de la Meurthe-et- Moselle. Comprenant environ 180 hectares.
                                                                Le vignoble de la Lorraine est l’un des plus petits vignobles français.
                                                                Il était auparavant très étendu (jusqu’à 34 000 hectare en 1833) mais subissant
                                                                les différentes guerres entre la fin du 19e et le milieu du 20e siècle,
                                                                il s’est drastisquement réduit
                                                            </p>
                                                            <p>
                                                                L’une des particularités du Vignoble Lorraine est de produire du vin gris
                                                                à cépage gamay : le Côtes-de-Toul gris
                                                            </p>
                                                            <p>
                                                                Le vignoble de lorraine produit 2 appellations d’origine contrôlée :
                                                                l’AOC Côtes de Toul et l’AOC Moselle
                                                            </p>
                                                            <p>
                                                                Le Vignoble du Toulois, produisant l’AOC Côtes-de-Toul représente la partie
                                                                la plus grande du Vignoble deLorraine et produit environ 500 000 bouteilles à l’année.
                                                                Il produit du vin blanc (cépage auxerrois) ainsi que du vin gris
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">&nbsp;</h5>
                                                            <p>
                                                                &middot; Superficie plantées : 180 hectares environ en 2011<br/>
                                                                &middot; Hectolitres de vins produit / an : 8 700 hectolitres en 2011 (dont 6 600 en AOC ou IGP)<br/>
                                                                &middot; Vins produits : rouges et gris (95 %) et blancs secs (5 %)<br/>
                                                                &middot; Rendement à l’hectare : 54 hl./ha. pour le Côte-de-Toul, 80 hl/ha. pour le vin gris de Moselle<br/>
                                                                &middot; Cépages dominants : Gamay et pinot noir pour les rouges et gris,
                                                                Chardonnay et Auxerrois pour les blancs<br/>
                                                                &middot; Sols : argilo-calcaire<br/>
                                                                &middot; Climat : Tempéré océanique, semi-conJnental
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
                                                                <div class="titre">Côtes-de-Toul</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 mai 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le côtes-de-toul est un vin AOC produit dans le Vignoble de Lorraine, proche de la ville de Toul en Meuthe-et-Moselle. C’est le vin gris de Toul qui y est principalement produit, mais on y trouve également du vin rouge et du vin blanc
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                <span class="gras">Le gris</span><br>
                                                                Bouche : vive et ronde<br>
                                                                Robe : rose pale dite pelure d’oignon<br>
                                                                Arômes : peOts fruits rouges (baies sauvages, groseilles, cerises), lilas
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Le Rouge</span><br>
                                                                Bouche : ronde<br>
                                                                Robe : rubis pale, reflets violets<br>
                                                                Arômes : fruits rouges
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Le blanc</span><br>
                                                                Bouche : fine et délicate<br>
                                                                Robe : jaune pale, reflets verts<br>
                                                                Arômes : pomme, abricot, poire, pêche, agrumes
                                                            </p>

                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="gras">Le gris</span><br>
                                                                Température de service : 10 °C<br>
                                                                Accords mets/vin : plats lorrains, potée lorraine, pâtés en croûte, charcuteries<br>
                                                                Garde : à boire jeune
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Le Rouge</span><br>
                                                                Température de service : 14 °C<br>
                                                                Accords mets/vin : viandes rôties, canard<br>
                                                                Garde : à boire jeune
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Le blanc</span><br>
                                                                Température de service : 8 °C<br>
                                                                Accords mets/vin : fruits de mer<br>
                                                                Garde : à boire jeune
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes-de-Toul<br/>
                                                                &middot; Appellation principale : Côtes-de-Toul<br/>
                                                                &middot; Vignoble : Lorraine<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : gris, blancs et rouges<br/>
                                                                &middot; Cépages dominants : Gamay et pinot noir pour les rouges et gris, auxerrois pour les blancs<br/>
                                                                &middot; Superficie de production : 100 ha. environ<br/>
                                                                &middot; Production en hectolitre / an : 4 000 hl<br/>
                                                                &middot; Rendement moyen : maximum 60 hl/ha. en blanc et gris, 45 hl/ha. en rouge
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
                                                                <div class="titre">Moselle</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 10 mai 2017</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Moselle ou vin de Moselle est un vin AOC produit dans le Vignoble de Lorraine. Y sont produit des vins rouges, blancs ou rosés
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>

                                                            <p>
                                                                <span class="rouge gras">Le Rouge</span><br>
                                                                Bouche : légère<br>
                                                                Robe : rubis éclatante<br>
                                                                Arômes : fruits rouges, épices
                                                            </p>
                                                            <p>
                                                                <span class="rosegris gras">Le rosé-gris</span><br>
                                                                Bouche : délicate et ronde<br>
                                                                Robe : grise<br>
                                                                Arômes : fruités
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Le blanc</span><br>
                                                                Bouche : nerveuse<br>
                                                                Robe : jaune pale, reflets verts<br>
                                                                Arômes : pierre à fusil, agrumes
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Le Rouge</span><br>
                                                                Température de service : 14 °C<br>
                                                                Accords mets/vin : volailles rôties, charcuteries<br>
                                                                Garde : 3 ans
                                                            </p>
                                                            <p>
                                                                <span class="rosegris gras">Le rosé-gris</span><br>
                                                                Température de service : 8 °C<br>
                                                                Accords mets/vin : quiche lorraine
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Le blanc</span><br>
                                                                Température de service : 10 °C<br>
                                                                Accords mets/vin : fruits de mer
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Moselle<br/>
                                                                &middot; Appellation principale : Moselle<br/>
                                                                &middot; Vignoble : Lorraine<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : gris, blancs et rouges<br/>
                                                                &middot; Cépages dominants : pinot noir pour les rouges et rosés, auxerrois et pinot gris pour les blancs<br/>
                                                                &middot; Superficie de production : 35 ha. environ<br/>
                                                                &middot; Production en hectolitre / an : 1 719 hl<br/>
                                                                &middot; Rendement moyen : maximum 60 hl/ha
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
                @include('layouts.4emeniveau.lorraine.droite')
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
                            <h3 style="color:#bf2bff; font-weight: 700;">Les vins de Lorraine</h3>
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
                            <div id="lorrainemapmodal"></div>
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
@include('layouts.4emeniveau.lorraine.appelsjslorraine')

@include('layouts.4emeniveau.footer')
