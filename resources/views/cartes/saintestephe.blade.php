@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.saintestephe.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Saint-Estèphe</h3>
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
                            <img src="{{ asset('img/saint-estephe.jpg') }}" alt="Mâcon">
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
                                                                    <h5>Saint-Estèphe</h5>
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
                                                                    <h6 class="margauxrouge">Présentation</h6>
                                                                    <p>Le Saint-Estèphe est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit dans la commune de Saint-Estèphe.
                                                                    </p>
                                                                    <h6 class="rougesaintestephe">caractère :</h6>
                                                                    <p> Bouche : longue et puissante<br/>
                                                                        Robe : rubis reflets noirs<br/>
                                                                        Arômes : fruits murs, violette, café, épices, réglisse
                                                                    </p>
                                                                </div><!-- ../textes3emeniveau -->
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougesaintestephe">garde, température et gastronomie</h6>
                                                                    <p> Température de service : 16 °C<br/>
                                                                        Temps de garde : 10 à 20 ans<br/>
                                                                        Accords mets/vins : petits gibiers
                                                                    </p>
                                                                    <h6 class="rougesaintestephe">fiche d’identité :</h6>
                                                                    <p> &middot; Désignation : Saint-Estèphe<br/>
                                                                        &middot; Appellation principale : Saint-Estèphe<br/>
                                                                        &middot; Vignoble : de Bordeaux<br/>
                                                                        &middot; Superficie plantée : 1 230 ha.<br/>
                                                                        &middot; Production (en hectolitres) : 54 200 hl.<br/>
                                                                        &middot; Climat : océanique<br/>
                                                                        &middot; Vins produits : rouges<br/>
                                                                        &middot; Cépages dominants : merlot, cabernet sauvignon<br/>
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
                @include('layouts.4emeniveau.saintestephe.droite')
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
                            <h3 class="rougesaintestephe gras">Vins de Saint-Estèphe</h3>
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
                            <h5 class="rougesaintestephe gras">CRUS CLASSÉS DE 1855</h5>
                            <p>
                                Ch. Cos d’Estournel<br/>
                                Ch. Montrose<br/>
                                Ch. Calon-Ségur<br/>
                                Ch. Lafon-Rochet<br/>
                                Ch. Cos-Labory
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-1 plus20px enplus"><!-- col-md-2 -->
                            <br/><br/>
                            <p style="margin-left: -70px; color: #666;">
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Troisième Cru<br/>
                                Quatrième Cru<br/>
                                Cinquième Cru<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougesaintestephe gras">AUTRES CRUS</h5>
                            <p style="font-size: 12px">
                                Ch. Argilus du Roi<br/>
                                Ch. Beau-Site<br/>
                                Ch. Beau-Site Haut Vignoble<br/>
                                Ch. Bel-Air<br/>
                                Ch. Bel-Air Ortet<br/>
                                Ch. Bellevue<br/>
                                Ch. le Boscq<br/>
                                Ch. Brame-Hame<br/>
                                Ch. Capbern-Gasqueton<br/>
                                Ch. Clauzet<br/>
                                Ch. de Côme<br/>
                                Ch. la Commanderie<br/>
                                Ch. Coutelin-Merville<br/>
                                Ch. le Crock<br/>
                                Ch. la Croix de Marbuzet<br/>
                                Ch. Domeyne<br/>
                                Ch. Gros Caillou<br/>
                                Ch. Haut-Beauséjour<br/>
                                Ch. Haut Coteau<br/>
                                Ch. Haut-Marbuzet<br/>
                                Ch. la Haye<br/>
                                Ch. Laffitte-Carcasset<br/>
                                Ch. Lavillotte<br/>
                                Ch. Lilian Ladouys<br/>
                                Ch. Mac Carthy<br/>
                                Marquis de Saint-Estèphe<br/>
                                Ch. Martin<br/>
                                Ch. Meyney<br/>
                                Ch. Morin<br/>
                                Ch. les Ormes de Pez<br/>
                                Ch. Petit Bocq<br/>
                                Ch. la Peyre<br/>
                                Ch. de Pez<br/>
                                Ch. Phélan-Ségur<br/>
                                Ch. Picard<br/>
                                Ch. Plantier Rose<br/>
                                Ch. Pomys<br/>
                                Dom. de la Ronceray<br/>
                                Ch. la Rose Brana<br/>
                                Ch. la Rousselière<br/>
                                Ch. Saint-Estèphe<br/>
                                Ch. Ségur de Cabanac<br/>
                                Ch. Serilhan<br/>
                                Ch. Tour de Marbuzet<br/>
                                Ch. Tour de Pez<br/>
                                Ch. Tour des Termes<br/>
                                Ch. Tour Saint-Fort<br/>
                                Ch. Tronquoy-Lalande<br/>
                                Ch. Valrose
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mapsaintestephe"></div>
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
@include('layouts.4emeniveau.saintestephe.appelsjssaintestephe')

@include('layouts.4emeniveau.footer')
