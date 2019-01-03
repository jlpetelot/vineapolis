@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.saintjulien.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Saint-Julien</h3>
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
                            <img src="{{ asset('img/saint-julien.jpg') }}" alt="Mâcon">
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

                                        <!-- ======================= LE CONTENU ============================== -->
                                        <!-- ======================= LE CONTENU ============================== -->
                                        <div class="row"><!-- row -->
                                            <div class="col-lg-12"><!-- col-lg-12 -->
                                                <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                    <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                        <!-- TEXTE -->
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <h5>Saint-Julien</h5>
                                                                    <li>
                                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="pad3px">Rédigé le 01 février 2022</span>
                                                                    </li>

                                                                </ul>
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougesaintjulien">Présentation</h6>
                                                                    <p>Le Saint-Julien est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur les communes de Saint-Julien-Beychevelle, Cussac-Fort-Médoc et Saint-Laurent-Médoc.
                                                                    </p>
                                                                    <h6 class="rougesaintestephe">caractère :</h6>
                                                                    <p> Bouche : veloutée et délicate<br/>
                                                                        Robe : rubis profonde<br/>
                                                                        Arômes : fruits rouges et noirs, pruneaux, café, cacao, boîte à tabac
                                                                    </p>
                                                                </div><!-- ../textes3emeniveau -->
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougesaintjulien">garde, température et gastronomie</h6>
                                                                    <p> Température de service : 16 °C<br/>
                                                                        Temps de garde : 10 à 20 ans<br/>
                                                                        Accords mets/vins : boeuf, petit gibiers
                                                                    </p>
                                                                    <h6 class="rougesaintjulien">fiche d’identité :</h6>
                                                                    <p>
                                                                        &middot; Désignation : Saint-Julien<br/>
                                                                        &middot; Appellation principale : Saint-Julien<br/>
                                                                        &middot; Vignoble : de Bordeaux<br/>
                                                                        &middot; Superficie plantée : 920 ha.<br/>
                                                                        &middot; Production (en hectolitres) : 41 775 hl.<br/>
                                                                        &middot; Climat : océanique<br/>
                                                                        &middot; Vins produits : rouges<br/>
                                                                        &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon, côt, petit verdot, carménère<br/>
                                                                        &middot; Rendement moyen : 57 à 63 hl/ha.
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
                                        <!-- ===================== FIN CONTENU ============================-->
                                        <!-- ===================== FIN CONTENU ============================-->

                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================-->

                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.saintjulien.droite')
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
                            <h3 class="rougesaintjulien gras">Vins de Saint-Julien</h3>
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
                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougesaintjulien gras">CRUS CLASSÉS DE 1855</h5>
                            <p>
                                Ch. Léoville-Las-Cases<br/>
                                Ch. Léoville-Poyferré<br/>
                                Ch. Léoville-Barton<br/>
                                Ch. Gruaud-Larose<br/>
                                Ch. Ducru-Beaucaillou<br/>
                                Ch. Lagrange<br/>
                                Ch. Langoa-Barton<br/>
                                Ch. Saint-Pierre<br/>
                                Ch. Talbot<br/>
                                Ch. Branaire-Ducru<br/>
                                Ch. Beychevelle
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-1 plus20px enplus"><!-- col-md-2 -->
                            <br/><br/>
                            <p style="margin-left: -70px; color: #666;">
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Quatrième Cru<br/>
                                Quatrième Cru<br/>
                                Quatrième Cru<br/>
                                Quatrième Cru
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougesaintjulien gras">AUTRES CRUS</h5>
                            <p>
                                Ch. la Bridane<br/>
                                Ch. Capdelong<br/>
                                Ch. Capdet<br/>
                                Dom. Castaing<br/>
                                Ch. Finegrave<br/>
                                Ch. du Glana<br/>
                                Ch. Gloria<br/>
                                Ch. Hortevie<br/>
                                Dom. du Jaugaret<br/>
                                Ch. Lalande<br/>
                                Ch. Lalande Borie<br/>
                                Ch. Moulin de la Bridane<br/>
                                Ch. Moulin de la Rose<br/>
                                Ch. Moulin Riche<br/>
                                Ch. les Ormes<br/>
                                Ch. Terrey Gros Cailloux<br/>
                                Ch. Teynac
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mapsaintjulien"></div>
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
@include('layouts.4emeniveau.saintjulien.appelsjssaintjulien')

@include('layouts.4emeniveau.footer')
