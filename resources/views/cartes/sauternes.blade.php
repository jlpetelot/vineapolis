@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.sauternes.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Sauternes et Barsac</h3>
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
                            <img src="{{ asset('img/sauternes.jpg') }}" alt="Saumur">
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

                                                <!-- 1ER ONGLET -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Sauternes
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Barsac
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- ======================= TEXTE 1 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Sauternes</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">Présentation</h6>
                                                                                <p>
                                                                                    Le Sauternes est un vin liquoreux AOC produit dans le Vignoble de Bordeaux, sur les 5 communes de Barsac, Bommes, Fargues, Preignac et Sauternes.
                                                                                </p>
                                                                                <h6 class="jaunefonce">caractère :</h6>
                                                                                Bouche : ample et ronde<br/>
                                                                                Robe : dorée pâle<br/>
                                                                                Arômes : miel, fruits confits, agrumes, épices, fleurs blanches
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 8 à 9 °C<br/>
                                                                                    Temps de garde : de 5 à 30 ans en fonction des millésimes et du cru<br/>
                                                                                    Accords mets/vins : desserts, foie gras, crustacés, cuisine exotique
                                                                                </p>
                                                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Sauternes<br/>
                                                                                    &middot; Appellation principale : Sauternes<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 1 735 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 34 260 hl.<br/>
                                                                                    &middot; Climat : océanique<br/>
                                                                                    &middot; Vins produits : liquoreux<br/>
                                                                                    &middot; Cépages dominants : sémillon<br/>
                                                                                    &middot; Rendement moyen : 25 à 28 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 1 ============================-->

                                                <!-- ======================= TEXTE 2 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Barsac</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">Présentation</h6>
                                                                                <p>
                                                                                    Le Barsac est un vin blanc liquoreux produit dans le Vignoble de Bordeaux, exclusivement sur la commune de Barjac en Gironde.
                                                                                </p>
                                                                                <h6 class="jaunefonce">caractère :</h6>
                                                                                Bouche : dense et riche<br/>
                                                                                Robe : or brillante<br/>
                                                                                Arômes : miel, fruits confits, noisette, vanille
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 8 °C<br/>
                                                                                    Temps de garde : 10 à 100 ans (grands millésimes)<br/>
                                                                                    Accords mets/vins : foie gras, desserts aux fruits
                                                                                </p>
                                                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Barsac<br/>
                                                                                    &middot; Appellation principale : Barsac<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 465 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 6 870 hl.<br/>
                                                                                    &middot; Climat : océanique<br/>
                                                                                    &middot; Vins produits : blancs liquoreux<br/>
                                                                                    &middot; Cépages dominants : semillon, sauvignon et muscadelle<br/>
                                                                                    &middot; Rendement moyen : 25 à 28 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 2 ============================-->
                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================ -->
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.sauternes.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5">
                            <h3 class="gras mapecran">Vins de Sauternes et Barsac</h3>
                        </div>
                        <div class="col-md-5 margehaute15px textemodal">
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
                        <div class="col-md-2">
                            <h4 class="jaunefonce gras">CRUS CLASSÉS DE 1855</h4>
                            <p style="color: #333333; font-weight: 700; font-size: 16px; padding-top: 20px; margin-bottom: -5px">
                                Premiers Crus Supérieurs
                            </p>
                            <p>
                                Ch. la Tour Blanche	Sauternes<br/>
                                Ch. Lafaurie-Peyraguey<br/>
                                Ch. Clos Haut-Peyraguey<br/>
                                Ch. de Rayne Vigneau<br/>
                                Ch. Suduiraut<br/>
                                Ch. Coutet<br/>
                                Ch. Climens<br/>
                                Ch. Guiraud<br/>
                                Ch. Rieussec<br/>
                                Ch. Sigalas-Rabaud<br/>
                                Ch. Rabaud-Promis
                            </p>
                            <p style="color: #333333; font-weight: 700; font-size: 16px; padding-top: 20px; margin-bottom: -5px">
                                Seconds Crus
                            </p>
                            <p>
                                Ch. Myrat<br/>
                                Ch. Doisy-Daëne<br/>
                                Ch. Doisy-Védrines<br/>
                                Ch. Doisy Dubroca<br/>
                                Ch. Broustet<br/>
                                Ch. Nairac<br/>
                                Ch. Caillou<br/>
                                Ch. Suau<br/>
                                Ch. de Malle<br/>
                                Ch. Romer du Hayot<br/>
                                Ch. d’Arche	Sauternes<br/>
                                Ch. Filhot	Sauternes<br/>
                                Ch. Lamothe-Despujols<br/>
                                Ch. Lamothe-Guignard
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h4 class="jaunefonce gras">AUTRES CRUS</h4>
                            <p style="font-size: 9px">
                                Ch. d’Arche-Pugneau<br/>
                                Ch. d’Argilas le Pape<br/>
                                Ch. d’Armajan-des-Ormes<br/>
                                Cru d’Arrancon<br/>
                                Ch. les Arrieux<br/>
                                Ch. Augey<br/>
                                Dom. de Baboye<br/>
                                Ch. Barbier<br/>
                                Ch. Barjuneau<br/>
                                Dom. de Barjuneau-Chauvin<br/>
                                Ch. de Barrau<br/>
                                Cru Barrejats<br/>
                                Cru Bas-Peyraguey<br/>
                                Ch. Bastor-Lamontagne<br/>
                                Ch. Baulac<br/>
                                Dom. Baylieu<br/>
                                Ch. Bechereau<br/>
                                Ch. Bergeron<br/>
                                Ch. Blanquine<br/>
                                Ch.la Bouade<br/>
                                Ch. Boutoc<br/>
                                Ch. Bouyot<br/>
                                Ch. Briatte<br/>
                                Ch. Cameron<br/>
                                Ch. Candale<br/>
                                Ch. Cantegril<br/>
                                Ch. Caplane<br/>
                                Dom. de Carbonnieu<br/>
                                Ch. de Carles<br/>
                                Ch. Chanteloiseau<br/>
                                Cru Claverie<br/>
                                Ch. Closiot<br/>
                                Ch. Comet-Magey<br/>
                                Ch. de Commarque<br/>
                                Dom. de la Côte<br/>
                                Dom. de Couite<br/>
                                Ch. Coustet<br/>
                                Dom. de Coy<br/>
                                Ch. Dudon<br/>
                                l’Enclos<br/>
                                Ch. l’Ermitage<br/>
                                Ch. de Fargues<br/>
                                Dom. de Fillau<br/>
                                Clos Fontaine<br/>
                                Dom. de la Forêt<br/>
                                Ch. la Garenne<br/>
                                Dom. de la Gauche<br/>
                                Ch. Gilette<br/>
                                Ch. Grand Carreley<br/>
                                Ch. des Grandes Vignes<br/>
                                Ch. Gravas<br/>
                                Ch. Grillon<br/>
                                Ch. Guitteronde-du-Hayot<br/>
                                Dom. du Haire<br/>
                                Ch. du Haire<br/>
                                Ch. Haut-Bergeron<br/>
                                Ch. Haut-Bommes<br/>
                                Ch. Haut-Caplane<br/>
                                Ch. Haut-Claverie<br/>
                                Ch. Haut-Mayne<br/>
                                Ch. Haut-Pick<br/>
                                Cru Janonier<br/>
                                Cru du Domaine de Janton<br/>
                                Ch. Jany<br/>
                                Ch. Jan Galant<br/>
                                Dom. des Jouanous<br/>
                                Ch. du Juge<br/>
                                Ch. les Justices<br/>
                                Ch. Lafon<br/>
                                Ch. Lafon-Laroze
                            </p>

                        </div>
                        <div class="col-md-2">
                            <p style="font-size: 9px; margin-top: 10px">
                                Ch. Lamaringue<br/>
                                Ch. Lamourette<br/>
                                Ch. Lange (Picot)<br/>
                                Ch. Lange (Reglat)<br/>
                                Clos Lardit<br/>
                                Ch. Laribotte<br/>
                                Ch. Larose Monteils<br/>
                                Ch. Latrezotte<br/>
                                Ch. Lauvignac<br/>
                                Ch. Laville<br/>
                                Ch. Liot<br/>
                                Ch. Luzies<br/>
                                Dom. Magni-Thibault<br/>
                                Ch. Massereau<br/>
                                Ch. Mauras<br/>
                                Ch. du Mayne<br/>
                                Ch. le Mayne<br/>
                                Clos Mayne-Lamouroux<br/>
                                Ch. Menota<br/>
                                Ch. Monet<br/>
                                Dom. de Monteils<br/>
                                Ch. Monteils<br/>
                                Ch. Mont-Joye<br/>
                                Cru Mothes<br/>
                                Ch. Mothes-Mouret<br/>
                                Ch. Padouen<br/>
                                Dom. du Pajot<br/>
                                Clos du Pavillon<br/>
                                Ch. Pascaud-Villefranche<br/>
                                Ch. Peillon-Claverie<br/>
                                Ch. le Peloue<br/>
                                Ch. Pernaud<br/>
                                Ch. Petit-Mayne<br/>
                                Ch. Cru Peyraguey<br/>
                                Ch. Peyron<br/>
                                Ch. Piada<br/>
                                Ch. Pick Laborde<br/>
                                Clos Pilotte<br/>
                                Ch. Piot-David<br/>
                                Dom. de Pouteau<br/>
                                Cru Pouteau<br/>
                                Clos des Princes<br/>
                                Ch. Prost<br/>
                                Ch. de Quincarnon<br/>
                                Ch. Raspide<br/>
                                Ch. Raymond-Lafon<br/>
                                Dom. Raymond-Louis<br/>
                                Ch. les Regeons<br/>
                                Ch. de Rolland<br/>
                                Ch. Roumieu (Bernardet)<br/>
                                Ch. Roumieu-Goyaud<br/>
                                Ch. Roumieu-Lacoste<br/>
                                Ch. Rouquette<br/>
                                Dom. de Roussanne<br/>
                                Ch. Sahur-Lestours<br/>
                                Ch. Saint-Amand<br/>
                                Ch. Saint-Marc<br/>
                                Ch. Saint-Michel<br/>
                                Ch. Simon<br/>
                                Ch. le Sourd-Beteille<br/>
                                Dom. le Tachon<br/>
                                Ch. Thibaut<br/>
                                Ch. Trillon<br/>
                                Ch. Tucau<br/>
                                Clos des Tuileries<br/>
                                Ch. de Veyres<br/>
                                Ch. de la Vieille Tuilerie<br/>
                                Ch. Villefranche<br/>
                                Ch. Violet<br/>
                                Cru du Violet<br/>
                                Ch. Voigny

                            </p>
                        </div>
                        <div class="col-md-6">
                            <div id="mapsauternesbarsac"></div>
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
@include('layouts.4emeniveau.sauternes.appelsjssauternes')

@include('layouts.4emeniveau.footer')
