@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.sancerre.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Sancerre et Menetou-Salon</h3>
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
                            <img src="{{ asset('img/sancerre.jpg') }}" alt="Sancerre">
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
                                                        Sancerre
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Menetou-Salon
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
                                                                                <h5>Sancerre</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Sancerre est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire,
                                                                                    dans le Cher aux alentours de la commune de Sancerre.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Bouche : légère<br/>
                                                                                    Arômes : cerise, musc<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fruits à chair jaune, agrumes<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : vif et structurée<br/>
                                                                                    Robe : or pâle<br/>
                                                                                    Arômes : agrumes, fleurs blanches
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Température de service : 14 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : charcuterie, volaille<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : 15 ans<br/>
                                                                                    Accords mets/vins : fruits de mer
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot;Désignation : sancerre<br/>
                                                                                    &middot;Appellation principale : sancerre<br/>
                                                                                    &middot;Vignoble : de la Loire<br/>
                                                                                    &middot;Superficie plantée : 2 770 ha.<br/>
                                                                                    &middot;Production (en hectolitres) : 166 300 hl.<br/>
                                                                                    &middot;Climat : tempéré océanique dégradé<br/>
                                                                                    &middot;Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot;Cépages dominants : pinot noir, sauvignon<br/>
                                                                                    &middot;Rendement moyen : 59 à 75 hl./ha.
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

                                                <!-- ======================= TEXTE 1 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Menetou-Salon</h5>
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
                                                                                <h6 class="menetou">Présentation</h6>
                                                                                <p>
                                                                                    Le Menetou-Salon est un vin rouge, rosé ou blanc AOC produit dans le Vignoble de la Loire, dans le Cher.
                                                                                </p>
                                                                                <h6 class="menetou">caractère :</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Bouche : structurée<br/>
                                                                                    Robe : rubis<br/>
                                                                                    Arômes : fruits rouges, venaison<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Bouche : ronde et légère<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fruits à chair blanche, fruits secs<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Bouche : ample<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fleurs blanches, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="menetou">garde, température et gastronomie</h6>
                                                                                <p>Rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : gibierse<br/><br/>

                                                                                    Rosé :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vins : salades<br/><br/>

                                                                                    Blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : poissons
                                                                                </p>
                                                                                <h6 class="menetou">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot;Désignation : menetou-salon<br/>
                                                                                    &middot;Appellation principale : menetou-salon<br/>
                                                                                    &middot;Vignoble : de la Loire<br/>
                                                                                    &middot;Superficie plantée : 500 ha.<br/>
                                                                                    &middot;Production (en hectolitres) : 26 000 hl.<br/>
                                                                                    &middot;Climat : tempéré océanique dégradé<br/>
                                                                                    &middot;Vins produits : rouges, rosés, blancs<br/>
                                                                                    &middot;Cépages dominants : pinot noir, sauvignon
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
                @include('layouts.4emeniveau.sancerre.droite')
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
                            <h3 class="jaunechampagne gras mapecran">Vins de Sancerre et Menetou-Salon</h3>
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
                        <div id="sancerremapmodal"></div>
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
@include('layouts.4emeniveau.sancerre.appelsjssancerre')

@include('layouts.4emeniveau.footer')
