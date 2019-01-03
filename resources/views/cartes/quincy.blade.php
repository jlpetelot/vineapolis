@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.quincy.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Quincy et Reuilly</h3>
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
                            <img src="{{ asset('img/quincy.jpg') }}" alt="Quincy">
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
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Quincy
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Reuilly
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

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
                                                                                <h5>Quincy</h5>
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
                                                                                <h6 class="quincy">Présentation</h6>
                                                                                <p>
                                                                                    Le Quincy est un vin blanc AOC produit dans le Vignoble de la Loire,
                                                                                    dans le département du Cher, sur les communes de Quincy et de Brinay.
                                                                                </p>
                                                                                <h6 class="quincy">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : harmonieuse et structurée<br/>
                                                                                    Robe : or pâle<br/>
                                                                                    Arômes : agrumes, fruits à chair blanche, fruits exotiques, fleurs blanches, bourgeons de cassis<br/>
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="quincy">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : fromages de chèvre
                                                                                </p>
                                                                                <h6 class="quincy">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : quincy<br/>
                                                                                    &middot; Appellation principale : quincy<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 269 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 15 000 hl. Env.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : blancs<br/>
                                                                                    &middot; Cépages dominants : sauvignon<br/>
                                                                                    &middot; Rendement moyen : 65 à 75 hl/ha
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
                                                                                <h5>Reuilly</h5>
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
                                                                                <h6 class="chablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Reuilly est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, dans le Cher et dans l’Indre.
                                                                                </p>
                                                                                <h6 class="chablis">caractère :</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Bouche : dense et fruitée<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Bouche : ronde et délicate<br/>
                                                                                    Robe : saumon<br/>
                                                                                    Arômes : fruits à chair jaune<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : dense et persistante<br/>
                                                                                    Robe : or pâle<br/>
                                                                                    Arômes : fleurs blanches, agrumes, minéral
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="chablis">garde, température et gastronomie</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 4 ans<br/>
                                                                                    Accords mets/vins : poissons, volailles<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : plats exotiques<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : 2 ans<br/>
                                                                                    Accords mets/vins : poissons, fruits de mer, fromages
                                                                                </p>
                                                                                <h6 class="chablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : reuilly<br/>
                                                                                    &middot; Appellation principale : reuilly<br/>
                                                                                    &middot; Vignoble : de la Loire<br/>
                                                                                    &middot; Superficie plantée : 210 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 10 500 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique dégradé<br/>
                                                                                    &middot; Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : pinot noir, sauvignon, pinot gris<br/>
                                                                                    &middot; Rendement moyen : 59 à 75 hl./ha.
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
                @include('layouts.4emeniveau.quincy.droite')
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
                            <h3 class="jaunechampagne gras mapecran">Vins de Quincy et Reuilly</h3>
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
                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h6 class="jaunechampagne">Communes et lieux-dits de Quincy</h6>
                            <br/>
                            <h5 class="gras">QUINCY</h5>
                            <p style="font-size: 10px">
                                Beauces (Les)<br/>
                                Brosses (Les)<br/>
                                Bruniers (Les)<br/>
                                Chagnerons (Les)<br/>
                                Chavoches (Les)<br/>
                                Clos de Bel Air<br/>
                                Clos de la Victoire<br/>
                                Coteaux (Les)<br/>
                                Coudereaux (Les)<br/>
                                Croix (Les)<br/>
                                Curoguenins (Les)<br/>
                                Garenne (La)<br/>
                                Grande Pièce (La)<br/>
                                Grandes Vignes (Les)<br/>
                                Gravoches (Les)<br/>
                                Mirebeau<br/>
                                Petites Vignes (Les)<br/>
                                Plante (La)<br/>
                                Pointe (La)<br/>
                                Rimonés (Les)<br/>
                                Thuzières (La)
                            </p>
                            <h5 class="gras">BRINAY</h5>
                            <p style="font-size: 10px">
                                Balandors (Les)<br/>
                                Caillotte (La)<br/>
                                Crèves Cœurs (Les)<br/>
                                Follets (Les)<br/>
                                Grande Pièce (La)<br/>
                                Grands Champs (Les)<br/>
                                Noira (La)<br/>
                                Nouzats (Les)<br/>
                                Petit Chamoux (Le)<br/>
                                Plante aux Moreaux<br/>
                                Pressoir (Le)<br/>
                                Rouilles (Les)<br/>
                                Taille aux Agneaux (La)<br/>
                                Terrages (Les)<br/>
                                Terres Fortes (Les)<br/>
                                Vallée Major (La)<br/>
                                Vigne de Fosse<br/>
                                Vignes de Chamoux
                            </p>
                        </div><!-- ../col-md-2 -->
                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h6 class="jaunechampagne">Communes et lieux-dits de Reuilly</h6>
                            <br/>
                            <h5 class="gras">REUILLY</h5>
                            <p style="font-size: 10px">
                                Beaumonts (Les)<br/>
                                Beauregard<br/>
                                Boissières (Les)<br/>
                                Caillates (Les)<br/>
                                Chatillons (Les)<br/>
                                Clos des Messieurs<br/>
                                Coignons (Les)<br/>
                                Congés (Les)<br/>
                                Enaudes (Les)<br/>
                                Ferrières (Les)<br/>
                                Grande Pièce (La)<br/>
                                Grandes Vignes (Les)<br/>
                                Hopiteau (L’)<br/>
                                Landries (Les)<br/>
                                Lignis (Les)<br/>
                                Montcocu<br/>
                                Pierres Plates (Les)<br/>
                                Raie (La)<br/>
                                Rogeles (Les)<br/>
                                Sablons (Les)<br/>
                                Vigne des Champs
                            </p>
                            <h5 class="gras">CHÉRY</h5>
                            <p style="font-size: 10px">
                                Brûlés (Les)<br/>
                                Sables (Les)<br/>
                                Varennes (Les)
                            </p>
                            <h5 class="gras">DIOU</h5>
                            <p style="font-size: 10px">
                                Galifardes (Les)<br/>
                                Orme (L’)<br/>
                                Petit Tribut (Le)<br/>
                                Plantes (Les)<br/>
                                Voie des Vignes (La)
                            </p>
                            <h5 class="gras">LAZENAY</h5>
                            <p style="font-size: 10px">
                                Batailles (Les)<br/>
                                Plantes (Les)<br/>
                                Varennes (Les)
                            </p>
                            <h5 class="gras">LURY-SUR-ARNON</h5>
                            <p style="font-size: 10px">
                                Ombets (Les)<br/>
                                Vignoble de Mussey
                            </p>
                            <h5 class="gras">PREUILLY</h5>
                            <p style="font-size: 10px">
                                Commanderie (La)<br/>
                                Justices (Les)<br/>
                                Pointe de la Motte<br/>
                                Terres du Moulin<br/>
                                Vignes de la Motte
                            </p>
                        </div><!-- ../col-md-2 -->
                        <div class="col-md-8">
                            <div id="quincyreuillymapmodal"></div>
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
@include('layouts.4emeniveau.quincy.appelsjsquincy')

@include('layouts.4emeniveau.footer')
