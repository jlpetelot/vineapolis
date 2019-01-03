@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pommard.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles de Pommard</h3>
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
                            <img src="{{ asset('img/pommard.jpg') }}" alt="Beaune">
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
                                        <!-- TEXTE -->
                                        <div class="row"><!-- row -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <ul class="commentairesonglets">
                                                    <h5>Pommard</h5>
                                                    <li>
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <span class="pad3px">Rédigé le 11 mai 2022</span>
                                                    </li>

                                                </ul>
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h5 class="textetitre3">PRÉSENTATION</h5>
                                                    <p>Le Pommard est un vin AOC produit sur la commune de Pommard en Côte d’Or.
                                                        C’est un vin rouge à cépage pinot noir. 28 climats de cette appellation
                                                        sont classés en 1er Cru avec notamment : Les Rugiens, Les Epenots,
                                                        Les Jarolières, Le Village, Les Pézerolles, etc.
                                                    </p>
                                                    <h5 class="textetitre3">CARACTÈRE</h5>
                                                    <p>Avec des arômes de fruits rouges (groseille) et noirs (mûre, myrtille),
                                                        puis en vieillissant de cuir, de chocolat et de poivre, les Pommard
                                                        possèdent une robe profonde, rouge, rubis foncé
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                            </div><!-- End col-lg-6 -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                    <p>Température de service entre 14 et 16 °C<br/>
                                                        Il s’accordera avec les gibiers de toutes sortes, à plumes ou à poils,
                                                        mais également avec de belles pièces de boeuf, la volaille et l’agneau.
                                                        Préférez avec le Pommard des fromages forts comme l’Epoisses,
                                                        le Langres ou le Soumaintrain<br/>
                                                        Temps de garde : Le Pommard s’ouvre pleinement avec l’âge et demandera
                                                        à être bonifié une dizaine d’années (astringent jusqu’à ses 4 ans environ)
                                                    </p>
                                                    <h5 class="textetitre3">FICHE D’IDENTITÉ</h5>
                                                    <p>
                                                        &middot; Désignation : Côtes de Beaune<br/>
                                                        &middot; Appellation principale : Volnay<br/>
                                                        &middot; Vignoble : Pommard<br/>
                                                        &middot; Sous-vignoble : Vignoble des Côtes de Beaune<br/>
                                                        &middot; Sol : argilo-calcaire<br/>
                                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                        &middot; Production : rouges
                                                        &middot; Cépages dominants : Pinot noir<br/>
                                                        &middot; Superficie en production : 320 ha. environ (en 2011)<br/>
                                                        &middot; Production en hectolitres / an : 14 565 hl<br/>
                                                        &middot; Rendement moyen : 40 à 58 hl/ha. (40 à 56 hl/ha. en 1er Cru)
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
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.pommard.droite')
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
                            <h3 style="color: #e20342; font-weight: 700;">Les vignobles de Pommard</h3>
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
                            <div id="mappommard"></div>
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
@include('layouts.4emeniveau.pommard.appelsjspommard')

@include('layouts.4emeniveau.footer')
