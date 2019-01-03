@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pouilly.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Pouilly</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins de {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/pouilly.jpg') }}" alt="Pouilly">
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
                                                        Pouilly-sur-Loire
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Pouilly Fumé
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Pouilly-sur-Loire</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 23 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Pouilly-sur-Loire est un vin blanc AOC produit dans le Vignoble de la Loire,
                                                                dans le département de la Nièvre et plus précisément sur les communes de Pouilly-sur-Loire,
                                                                Saint-Andelain, Tracy-sur-Loire, Mesves-sur-Loire, Garchy, Saint-Martin-sur-Nohain,
                                                                et Saint-Laurent-l’Abbaye.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : vive et fraîche<br/>
                                                                Robe : jaune pâle<br/>
                                                                Arômes : pierre à fusil, fruits secs, agrumes, fruits à chair blanche
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 10 °C<br/>
                                                                Temps de garde : 5 ans<br/>
                                                                Accords mets/vins : fruits de mer
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>Désignation : pouilly-sur-loire<br/>
                                                                Appellation principale : pouilly-sur-loire<br/>
                                                                Vignoble : de la Loire<br/>
                                                                Superficie plantée : 40 ha.<br/>
                                                                Production (en hectolitres) : 2 500 hl.<br/>
                                                                Climat : tempéré océanique<br/>
                                                                Vins produits : blancs<br/>
                                                                Cépages dominants : sauvignon et chasselas<br/>
                                                                Rendement moyen : 50 à 65 hl/ha.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- ../1ER TEXTE -->

                                                <!-- 2ND TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Pouilly Fumé</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 23 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>
                                                                Le Pouilly Fumé est un vin blanc AOC produit dans le Vignoble de la Loire,
                                                                dans le département de la Nièvre et plus précisément sur les communes
                                                                de Pouilly-sur-Loire, Saint-Andelain, Tracy-sur-Loire, Mesves-sur-Loire, Garchy,
                                                                Saint-Martin-sur-Nohain, et Saint-Laurent-l’Abbaye.
                                                                et Saint-Laurent-l’Abbaye.
                                                            </p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p>
                                                                Bouche : fine et minérale<br/>
                                                                Robe : or pâle<br/>
                                                                Arômes : pierre à fusil, silex, agrumes, fruits à chair blanche, acacia, lys
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p>
                                                                Température de service : 11 °C<br/>
                                                                Temps de garde : 15 ans<br/>
                                                                Accords mets/vins : saumon fumé
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D'IDENTITÉ</h5>
                                                            <p>
                                                                Désignation : pouilly-fumé<br/>
                                                                Appellation principale : pouilly-fumé<br/>
                                                                Vignoble : de la Loire<br/>
                                                                Superficie plantée : 1 320 ha.<br/>
                                                                Production (en hectolitres) : 70 000 hl.<br/>
                                                                Climat : tempéré océanique<br/>
                                                                Vins produits : blancs<br/>
                                                                Cépages dominants : sauvignon<br/>
                                                                Rendement moyen : 50 à 65 hl/ha.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- ../2ND TEXTE -->

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
                @include('layouts.4emeniveau.pouilly.droite')
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
                            <h3 class="jaunechampagne gras mapecran">Vins de Pouilly</h3>
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
                            <h6 class="jaunechampagne">Communes et lieux-dits de Pouilly</h6>
                            <br/>
                            <h4 class="gras">POUILLY-SUR-LOIRE</h4>
                            <p>
                                Bascouins (Les)<br/>
                                Champs de Billons (Le)<br/>
                                Chantalouette<br/>
                                Genièvres (Les)<br/>
                                Grands Champs (Les)<br/>
                                Griottes (Les)<br/>
                                Plantes Dorées (Les)<br/>
                                Roches (Les)<br/>
                                Varennes (Les)<br/>
                                Vaurigny<br/>
                                Vignes de Berges (Les)
                            </p>
                            <h4 class="gras">GARCHY</h4>
                            <p>
                                Métairie (La)
                            </p>
                            <h4 class="gras">MESVRES-SUR-LOIRE</h4>
                            <br/>
                            <h4 class="gras">SAINT-ANDELAIN</h4>
                            <p>
                                Bois (Les)<br/>
                                Breugnon<br/>
                                Chailloux (Les)<br/>
                                Chailloux (Les)<br/>
                                Champs de la Fontaine (Les)<br/>
                                Charnoie (La)<br/>
                                Chaume (La)<br/>
                                Chaumes à la Belle (Les)<br/>
                                Coques (Les)<br/>
                                Criots (Les)<br/>
                                Fouinelles (Les)<br/>
                                Galfins (Les)<br/>
                                Nozet (Le)<br/>
                                Papillons (Les)<br/>
                                Porcheronnes (Les)<br/>
                                Riaux
                            </p>
                        </div><!-- ../col-md-2 -->
                        <div class="col-md-2 plus58px enplus"><!-- col-md-2 -->
                            <h4 class="gras">SAINT-LAURENT</h4>
                            <br/>
                            <h4 class="gras">ST-MARTIN-SUR-NOHAIN</h4>
                            <p>
                                Favray<br/>
                                Grandes Brosses (Les)<br/>
                                Lumaux (Les)<br/>
                                Moques<br/>
                                Toupées (Les)<br/>
                                Vignes de Tréleau (Les)<br/>
                                Vignes de Villardeau (Les)
                            </p>
                            <h4 class="gras">TRACY-SUR-LOIRE</h4>
                            <p>
                                Beauregard<br/>
                                Champ Billard (Le)<br/>
                                Champ de la Vigne (Le)<br/>
                                Champs de Meilliers (Le)<br/>
                                Champs de Cris (Les)<br/>
                                Champs de Saint-Martin (Les)<br/>
                                Champs Gordé (Les)<br/>
                                Froids (Les)<br/>
                                Grande Chaume (La)<br/>
                                Levées (Les)<br/>
                                Mardrelles (Les)<br/>
                                Orme aux Chats (L’)<br/>
                                Perrières de Chaux (Les)<br/>
                                Petit Bois Gibault (Le)<br/>
                                Sablon (Le)
                            </p>
                        </div>

                        <div class="col-md-8">
                            <div id="pouillymapmodal"></div>
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
@include('layouts.4emeniveau.pouilly.appelsjspouilly')

@include('layouts.4emeniveau.footer')
