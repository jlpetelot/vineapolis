@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.valleemarne.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Champagnes de la Vallee de la Marne</h3>
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
                            <img src="{{ asset('img/valleemarne.jpg') }}" alt="Vallée de la Marne">
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
                                                    <h5>Côteaux Champenois</h5>
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
                                                    <h6 class="marnetitre">Présentation</h6>
                                                    <p>Le Coteaux Champenois est un vin AOC produit dans le Vignoble de Champagne, dans les régions viticoles de la Montagne de Reims, de la Vallée de la Marne, de la Côte des Blancs, de la Côte Sézanne, de la Côte des Bar et de Vitry le Francois. Les vins produits peuvent être rouges, rosés ou blancs. Ils sont assez méconnu car leur production est rare.
                                                    </p>
                                                    <h6 class="marnetitre">caractère :</h6>
                                                    <p>Rouges :<br/>
                                                        Bouche charpentée et puissante<br/>
                                                        Robe grenat pâle<br/>
                                                        Arômes violette, fruits rouges et noir<br/><br/>

                                                        Rosé :<br/>
                                                        Bouche délicate et gourmande<br/>
                                                        Robe saumonée<br/>
                                                        Arômes petits fruits rouges<br/><br/>

                                                        Blancs :<br/>
                                                        Bouche charpentée<br/>
                                                        Robe or pâle, reflets verts<br/>
                                                        Arômes beurre, brioche, agrumes<br/>
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                            </div><!-- End col-lg-6 -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h6 class="marnetitre">garde, température et gastronomie</h6>
                                                    <p>Rouges :<br/>
                                                        Temperature de service : 13 °C<br/>
                                                        Accords mets/vin : viande blanche rôtie<br/>
                                                        Temps de garde : 8 ans<br/><br/>

                                                        Rosé :<br/>
                                                        Température de service : 8 °C<br/>
                                                        Accords mets/vin : grillades<br/><br/>

                                                        Blancs :<br/>
                                                        Temperature de service : 10 °C<br/>
                                                        Accords mets/vin : fruits de mer<br/>
                                                        Temps de garde : plus de 10 ans<br/>
                                                    </p>
                                                    <h6 class="marnetitre">fiche d’identité :</h6>
                                                    <p>
                                                        &middot; Désignation : Côteaux Champenois<br/>
                                                        &middot; Appellation principale : Côteaux Champenois<br/>
                                                        &middot; Vignoble : de Champagne<br/>
                                                        &middot; Sol : calcaires et marneux<br/>
                                                        &middot; Climat : tempéré océanique à tendance continentale<br/>
                                                        &middot; Production : rouges, rosés, blancs<br/>
                                                        &middot; Cépages dominants : pinot noir, pinot meunier, chardonnay<br/>
                                                        &middot; Production en hectolitres : 550 hl. environ
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                                <!-- Présence de l'image -->
                                                <img src="{{ asset('img/champagnemarne.jpg') }}" alt="Champgne">
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
                @include('layouts.4emeniveau.valleemarne.droite')
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
                            <h3 class="rosechampagne gras">Champagnes de la Vallee de la Marne</h3>
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

                        <div id="valleemarnemodal"></div>

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <h6 class="rosechampagne">communes de la vallée de la marne</h6>
                            <p class="valleedelamarne">
                                Aÿ<br/>
                                Azy-sur-Marne<br/>
                                Barzy-sur-Marne<br/>
                                Baslieux-sous-Châtillon<br/>
                                Baulne-en-Brie<br/>
                                Belval-sous-Châtillon<br/>
                                Bézu-le-Guéry<br/>
                                Binson-et-Orquigny<br/>
                                Bisseuil<br/>
                                Blesmes<br/>
                                Bonneil<br/>
                                Boursault<br/>
                                Brasles<br/>
                                Le Breuil<br/>
                                Brugny-Vaudancourt<br/>
                                Celle-lès-Condé<br/>
                                Cerseuil<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <p class="valleedelamarne">
                                Champillon<br/>
                                Champlat-et-Boujacourt<br/>
                                Champvoisy<br/>
                                La Chapelle-Monthodon<br/>
                                Charly<br/>
                                Château-Thierry<br/>
                                Châtillon-sur-Marne<br/>
                                Chavot-Courcourt<br/>
                                Chézy-sur-Marne<br/>
                                Chierry<br/>
                                Citry<br/>
                                Condé-en-Brie<br/>
                                Connigis<br/>
                                Cormoyeux<br/>
                                Courtemont-Varennes<br/>
                                Courthiézy<br/>
                                Crézancy<br/>
                                Crouttes-sur-Marne<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <p class="valleedelamarne">
                                Cuchery<br/>
                                Cuisles<br/>
                                Cumières<br/>
                                Damery<br/>
                                Dizy<br/>
                                Domptin<br/>
                                Dormans<br/>
                                Epernay<br/>
                                Essômes-sur-Marne<br/>
                                Etampes-sur-Marne<br/>
                                Festigny<br/>
                                Fleury-la-Rivière<br/>
                                Fossoy<br/>
                                Gland<br/>
                                Hautvillers<br/>
                                Igny-Comblizy<br/>
                                Jaulgonne<br/>
                                Jonquery<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <p class="valleedelamarne">
                                Leuvrigny<br/>
                                Mancy<br/>
                                Mardeuil<br/>
                                Mareuil-le-Port<br/>
                                Mareuil-sur-Aÿ<br/>
                                Mézy-Moulins<br/>
                                Monthelon<br/>
                                Monthurel<br/>
                                Montigny<br/>
                                Montreuil-aux-Lions<br/>
                                Mont-Saint-Père<br/>
                                Morangis<br/>
                                Moslins<br/>
                                Moussy<br/>
                                Mutigny<br/>
                                Nanteuil-sur-Marne<br/>
                                Nesle-le-Repons<br/>
                                Nesles-la-Montagne<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <p class="valleedelamarne">
                                La Neuville-aux-Larris<br/>
                                Nogentel<br/>
                                Nogent-l’Artaud<br/>
                                Nogent-l’Artaud<br/>
                                Olizy<br/>
                                œuilly<br/>
                                Passy-Grigny<br/>
                                Passy-sur-Marne<br/>
                                Pavant<br/>
                                Pierry<br/>
                                Port-à-Binson<br/>
                                Reuil<br/>
                                Reuilly-Sauvigny<br/>
                                Romeny-sur-Marne<br/>
                                Romery<br/>
                                Romigny<br/>
                                Saâcy-sur-Marne<br/>
                                Saint-Agnan<br/>
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px"><!-- col-md-2 -->
                            <p class="valleedelamarne">
                                Sainte-Gemme<br/>
                                Saint-Martin-d’Ablois<br/>
                                Saulchery<br/>
                                Soilly<br/>
                                Trélou-sur-Marne<br/>
                                Troissy<br/>
                                Vandières<br/>
                                Vauciennes<br/>
                                Venteuil<br/>
                                Verneuil<br/>
                                Vincelles<br/>
                                La Ville-sous-Orbais<br/>
                                Villers-sous-Châtillon<br/>
                                Villiers-Saint-Denis<br/>
                                Vinay<br/>
                                Violaine<br/>
                            </p>
                        </div><!-- ../col-md-2 -->
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
@include('layouts.4emeniveau.valleemarne.appelsjsmontagnedereims')

@include('layouts.4emeniveau.footer')
