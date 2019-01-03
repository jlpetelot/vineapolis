@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.montagnedereims.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Champagnes Montagne de Reims et Côte des Blancs</h3>
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
                            <img src="{{ asset('img/montagnemap.jpg') }}" alt="gdschablis.jpg">
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
                                                    <h5>Rosé des Riceys</h5>
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
                                                    <h6 class="chablis">Présentation</h6>
                                                    <p>Le Rosé des riceys est un vin rosé AOC produit en dans le Vignoble de Champagne,
                                                        dans les régions viticoles de la Côte des Bar et de la Côte de Sézanne.
                                                        Il est considéré comme l’un des meilleurs rosé de France.
                                                    </p>
                                                    <h6 class="chablis">caractère :</h6>
                                                    <p>Bouche : généreuse et dense<br/>
                                                        Robe : rose pâle<br/>
                                                        Arômes : fruits rouges et noirs, épices, fruits secs
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                            </div><!-- End col-lg-6 -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h6 class="chablis">garde, température et gastronomie</h6>
                                                    <p>Température de service : 10 °C<br/>
                                                        Accords mets / vins : viandes blanches, crustacés, fromages<br/>
                                                        Temps de garde : dans les 3 ans
                                                    </p>
                                                    <h6 class="chablis">fiche d’identité :</h6>
                                                    <p>&middot; Désignation : Rosé des Riceys<br/>
                                                        &middot; Appellation principale : Rosé des Riceys<br/>
                                                        &middot; Vignoble : de Champagne<br/>
                                                        &middot; Sol : calcaires et marneux<br/>
                                                        &middot; Climat : tempéré océanique à influence continentale.<br/>
                                                        &middot; Production : rosés<br/>
                                                        &middot; Cépages dominants : pinot noir<br/>
                                                        &middot; Superficie en production : 716 ha. environ<br/>
                                                        &middot; Production en hectolitres : entre 600 et 800 hl. environ
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                                <!-- Présence de l'image -->
                                                <img src="{{ asset('img/champagne.jpg') }}" alt="Champgne">
                                                <!-- Fin présence de l'image  -->
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
                @include('layouts.4emeniveau.montagnedereims.droite')
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
                            <h3 class="jaunechampagne gras mapecran">Champagnes Montagne de Reims et Côte des Blancs</h3>
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
                            <h6 class="jaunechampagne">communes de la montagne de reims</h6>
                            <p>
                                Ambonnay<br/>
                                Beaumont-sur-Vesle<br/>
                                Berru<br/>
                                Bezannes<br/>
                                Billy-le-Grand<br/>
                                Bouilly<br/>
                                Bouzy<br/>
                                Branscourt<br/>
                                Cernay-lès-Reims<br/>
                                Chamery<br/>
                                Chamfleury<br/>
                                Chigny-les-Roses<br/>
                                Cormontreuil<br/>
                                Coulommes-la-Montagne<br/>
                                Courmas<br/>
                                Courcelles-Sapicourt<br/>
                                Ecueil<br/>
                                Fontaine-sur Aÿ<br/>
                                Germigny<br/>
                                Gueux<br/>
                                Janvry<br/>
                                Jonchery-sur-Vesle<br/>
                                Jouy-lès-Reims<br/>
                                Louvois<br/>
                                Ludes<br/>
                                Mailly-Champagne<br/>
                                Les Mesneux<br/>
                                Montbré<br/>
                                Nogent-l’Abbesse<br/>
                                Ormes<br/>
                                Pargny-lès-Reims<br/>
                                Pontfaverger-Moronvilliers<br/>
                                Puisieulx<br/>
                                Reims<br/>
                                Rilly-la-Montagne<br/>
                                Ronay<br/>
                                Sacy<br/>
                                Saint-Euphraise-et-Clairizet<br/>
                                Selles<br/>
                                Sermiers<br/>
                                Sillery<br/>
                                Taissy<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h6 class="jaunechampagne">communes de la montagne de reims (suite)</h6>
                            <p>
                                Tauxières-Mutry<br/>
                                Tours-sur-Marne<br/>
                                Trépail<br/>
                                Trois-Puits<br/>
                                Vaudemanges<br/>
                                Verzenay<br/>
                                Verzy<br/>
                                Ville-Dommange<br/>
                                Villers-Allerand<br/>
                                Villers-aux-Nœuds<br/>
                                Villers-Marmery<br/>
                                Vrigny<br/>
                            </p>
                            <h6 class="jaunechampagne">communes de la côte des blancs</h6>
                            <p>
                                Avize<br/>
                                Bergères-les-Vertus<br/>
                                Chouilly<br/>
                                Cramant<br/>
                                Cuis<br/>
                                Etréchy<br/>
                                Grauves<br/>
                                Le Mesnil-sur-Oger<br/>
                                Oger<br/>
                                Oiry<br/>
                                Val-des-Marais<br/>
                                Vertus<br/>
                                Villeneuve-Renneville<br/>
                                Voipreux<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-8">
                            <div id="montagne"></div>
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
@include('layouts.4emeniveau.montagnedereims.appelsjsmontagnedereims')

@include('layouts.4emeniveau.footer')
