@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.aloxecorton.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles d'Aloxe-Corton</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/aloxe-carton.jpg') }}" alt="Aloxe-Carton">
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
                                                        Aloxe-Corton
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Corton-Charlemagne
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet3" id="home-tab" role="tab" data-toggle="tab" aria-controls="profile">
                                                        Corton
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
                                                                <div class="titre">Aloxe-­Corton</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le vin d'Aloxe-­Corton est un AOC produit sur les communes de Ladoix-­Serrigny et Aloxe-­Corton, enCôte d’Or. Le vin produit est un vin rouge à cépage pinot noir. 14 climats de cette appellation sont classés en 1er Cru : Clos des Maréchaudes, Clos du Chapitre, La Coutière, La Maréchaude, La Toppe au Vent, Les Chaillots, Les Fourrières, Les Guerets, LesMaréchaudes, Les Moutottes, Les Paulands, Les Petites Faulières, Les Valozières, Les Vercots
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Le vin d’appellation Aloxe-­corton possède une belle robe rubis foncé, grenat. Dans sa jeunesse, on y retrouve des notes de fruits rouges (cerise, fraise, framboise) et de fruits noirs (mûre, cassis). En vieillissant, son bouquet s’enrichit d’arômes plus floraux comme la pivoine et le jasmin mais également d’arômes de cuir et de truffe. Il a un corps ferme et bien structuré
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service entre 15 et 16 °C<br/>
                                                                Il s’accordera avec des viandes rouges, des volailles ainsi que
                                                                des fromages à pâte molle et forts : époisses, livarot, etc.<br/>
                                                                Temps de garde : le vin Aloxe-Corton s’ouvre après 3 à 5 ans de garde. Il se garde maximum 15 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Aloxe-­Corton<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges 100 %<br/>
                                                                &middot; Cépage dominant : Pinot noir<br/>
                                                                &middot; Superficie de production : 118 ha. environ<br/>
                                                                &middot; Production en hectolitre / an : environ 4 940 hl<br/>
                                                                &middot; Rendement moyen : 40 à 58 hl/ha. (40 à 56 hl/ha. en 1er Cru)
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
                                                                <div class="titre">Corton-­Charlemagne</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Corton-­Charlemagne est un Grand Cru AOC blanc produit sur une partie des communes d’Aloxe-­ Corton et de Pernand-­Vergelesse, en Côte d’Or (21). L’aire de production englobe également l’appellation Charlemagne qui n’est aujourd’hui, plus revendiquée. Il est classé parmi les Grands Crus bourguignons des Côtes de Beaune
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Avec une robe or pale et les reflets verts du Chardonnay (avec une tendance à s’ambrer avec l’âge), on trouve dans ce vin des notes de beurre, de cannelle, de pomme au four, d’agrume, d’ananas et de silex. Parfois des notes de miel, voir de cuir et de truffe à maturité. Le Corton-‐Charlemagne est bien rond en bouche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service entre 12 et 14 °C<br/>
                                                                A l’image de ce vin, on lui préférera des mets puissants et noble tels que le foie-­‐gras bien sur, mais également les crustacés comme le homard ou le tourteau. Il s’allie également à merveille avec les fromages bleus
                                                                Temps de garde : meilleur au bout d’une dizaine d’année, se conserve de 20 à 25 ans<br/>
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Corton-­Charlemagne<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Production : rouges 100 %<br/>
                                                                &middot; Cépage dominant : Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 56,61 ha. (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : 2244 hl<br/>
                                                                &middot; Rendement moyen : 40 à 54 hl/ha
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
                                                                <div class="titre">Corton</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 05 septembre 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Corton est vin AOC majoritairement rouge (97,5 %) produit sur une partie des communes d’Aloxe-­Corton, de Ladoix-­Serrigny et de Pernand-Vergelesse, en Côte d’Or (21). Le vin produit sur les communes d’Aloxe-­Corton et de Pernand-­Vergelesse, peut selon les parcelles, bénéficiez de l’appellation Corton (Pinot Noir donc rouge) ou Corton-­‐Charlemagne (Chardonnay donc blanc). Il est classé parmis les Grands Crus bourguignons des Côtes de Beaune
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                On retrouve certaines différences entre les caractères des vins en raison de la grande superficie de l’appellation et de la variété des climats qui la compose.
                                                            </p>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br>
                                                                Une robe pourpre soutenu voire rouge très sombre pour ce vin à l’accent fruité (myrtille, groseille) tirant avec l’âge vers des notes plus épicées (réglisse, poivre) et de cuir. Puissant et corsé, il a du corps. Gras en bouche il s’épanouit en vieillissant
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br>
                                                                Avec une robe or clair et des reflets vert (caractérisIque de son cépage chardonnay) on trouve dans ce vin des notes de beurre et de cannelle mêlées à une forte mineralité (silex)
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                <span class="rouge gras">Pour le Rouge :</span><br>
                                                                Température de service entre 14 et 16 °C<br>
                                                                Le Corton s’accorde très bien avec des viandes fortes (gibier, boeuf) ainsi qu’avec des fromages puissant et intense comme les bleus<br>
                                                                Temps de garde : 4 à 12 ans
                                                            </p>
                                                            <p>
                                                                <span class="jaune gras">Pour le blanc :</span><br>
                                                                Température de service entre 12 et 14 °C<br>
                                                                Poissons, fruits de mer, fromage de chèvre ou encore volaille à la crème s’allieront parfaitement à un Corton blanc
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                &middot; Désignation : Côtes de Beaune<br/>
                                                                &middot; Appellation principale : Corton<br/>
                                                                &middot; Vignoble : Bourgogne<br/>
                                                                &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                                &middot; Sol : argilo-calcaire<br/>
                                                                &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                                &middot; Heure d’ensoleillement : de 1900 à 2100 heures / an<br/>
                                                                &middot; Production : rouge (97,5 %) et blancs (2,5 %)<br/>
                                                                &middot; Cépage dominant : Pinot Noir (rouge) et Chardonnay (blanc)<br/>
                                                                &middot; Superficie de production : 95,61 ha. (91,53 ha. en rouge, 4,09 ha. en blanc) (en 2011)<br/>
                                                                &middot; Production en hectolitre / an : 3647 hl (3498 hl en rouge, 149 hl en blanc)<br/>
                                                                &middot; Rendement moyen : 35 à 49 hl/ha pour le rouge et 40 à 54 hl/ha pour le blanc
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
                @include('layouts.4emeniveau.aloxecorton.droite')
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
                            <h3 style="color: #e52372; font-weight: 700;">Les vignobles d'Aloxe-Corton</h3>
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
                            <div id="mapaloxecarton"></div>
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
@include('layouts.4emeniveau.aloxecorton.appelsjsaloxecorton')

@include('layouts.4emeniveau.footer')
