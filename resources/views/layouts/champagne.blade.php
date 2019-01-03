@include('layouts.header')

    <!-- ========================== PAGE, DIV QUI CONTROLE TOUT LE DÉPLACEMENT DU SITE ================-->
    <div id="page">
        <!-- ======================================== MENU ====================================-->
        <div id="customnavbar"><!-- Customnavbar -->
            <!-- =================================== CACHER LE MENU ==========================-->
            <a class="hide-menu" href="javascript:;"><i class="fa fa-long-arrow-left"></i></a>
            <!-- ================================= FIN CACHER LE MENU =========================-->
            <!-- ====================================== LOGO ==================================-->
            <div class="logo-box">
                <a href="http://vineapolis.vineapolis.fr/"><img alt="" src="http://vineapolis.vineapolis.fr/assets/img/logo.png"></a>
            </div>
            <!-- ==================================== FIN LOGO ================================-->

            <!-- ====================================== MENU ==================================-->
            <div id="menu-box"><!-- menu-box -->
                <ul class="menu">
                    <!-- Les conditions pour la classe active -->
                    <li><a href="http://vineapolis.vineapolis.fr/"
                           class="
                                       active                                       ">Accueil</a></li>
                    <!-- Fin conditions pour la classe active -->
                    <li><a href="http://vineapolis.vineapolis.fr/tous-les-vins">Tous les vins</a></li>
                    <li><a href="http://vineapolis.vineapolis.fr/oenologie">Oenologie</a></li>
                    <li><a href="http://vineapolis.vineapolis.fr/newsletter">Newsletter</a></li>
                    <li><a href="http://vineapolis.vineapolis.fr/contact">Contact</a></li>
                </ul>
            </div><!-- Fin menu-box -->
            <a href="javascript:;" class="show-menu active">
                <i class="fa fa-bars"></i>
            </a>
            <!-- ======================================= FOOTER MENU ====================================-->
            <div id="header-foot"><!-- header-foot -->
                <div class="social-box">
                    <ul class="social-icons">
                        <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li>
                            <a href="https://www.youtube.com/user/Team8Tuto" target="_blank" class="youtube">
                                <i class="fa fa-youtube-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div><!-- Fin header-foot -->
            <!-- ===================================== FIN FOOTER MENU ===================================-->
        </div><!-- Fin Customnavbar -->
        <!-- =========================================== FIN MENU ========================================--><!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
        <div id="page1erniveau">
            <div class="container"><!-- Container Général -->
                <div class="row"><!-- Row -->

                    <!-- =========================== ANNONCES GAUCHES ============================-->
                    <div id="rolloverannonces"><!-- ===== ID POUR LES ROLLOVERS DE JAVASCRIPT ========-->

                        <!-- ANNONCES DE GAUCHE HAUTES -->
                        <ul id="vignettes1">
                            <!-- ======== 1ERE REQUETE, 1ERE VIGNETTE ==========-->
                            <li class="gauches-hautes">
                                <a href="http://voiedefait.fr" target="_blank" title="Heineken">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/heineken.jpg"
                                         alt="Heineken"
                                         title="Heineken">
                                    <div class="texte">
                                        <h5>Heineken</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ======== FIN 1ERE REQUETE, 1ERE VIGNETTE ==========-->
                            <!-- ========== 2NDE REQUETE, 2NDE VIGNETTE ============-->
                            <li class="gauches-hautes">
                                <a href="http://voiedefait.fr" target="_blank" title="Dior">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/dior.jpg"
                                         alt="Dior"
                                         title="Dior">
                                    <div class="texte">
                                        <h5>Dior</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ========== FIN 2NDE REQUETE, 2NDE VIGNETTE ============-->
                            <!-- ============ 3EME REQUETE, 3EME VIGNETTE ==============-->
                            <li class="gauches-milieu1">
                                <a href="http://voiedefait.fr" target="_blank" title="Presse">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/presse.jpg"
                                         alt="Presse"
                                         title="Presse">
                                    <div class="texte">
                                        <h5>Presse</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ============ FIN 3EME REQUETE, 3EME VIGNETTE ==============-->
                            <!-- ================ 4EME REQUETE, 4EME VIGNETTE ==============-->
                            <li class="gauches-milieu2">
                                <a href="http://voiedefait.fr" target="_blank" title="Hells">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/hells.jpg"
                                         alt="Hells"
                                         title="Hells">
                                    <div class="texte">
                                        <h5>Hells</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ================ FIN 4EME REQUETE, 4EME VIGNETTE ==============-->
                        </ul>
                        <!-- FIN ANNONCES DE GAUCHE HAUTES -->

                        <!-- ANNONCES DE GAUCHE BASSE -->
                        <ul id="vignettes2">
                            <!-- ======== 5EME REQUETE, 5EME VIGNETTE ==========-->
                            <li class="gauche-basse">
                                <a href="http://voiedefait.fr" target="_blank" title="Soju">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/soju.jpg"
                                         alt="Soju"
                                         title="Soju">
                                    <div class="texte">
                                        <h5>Soju</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ======== FIN 5EME REQUETE, 5EME VIGNETTE ==========-->
                        </ul>
                        <!-- FIN ANNONCES DE GAUCHE BASSE -->
                    </div><!-- ===== FIN ID POUR LES ROLLOVERS DE JAVASCRIPT ========-->
                    <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

                    <!-- =================================== CARTE ================================-->
                    <!-- SI IL Y A LA PRÉSENCE DE LA VARIABLE $bourgogne2emeniveau -->
                    <div id="cartechampagne">
                        <img src="http://vineapolis.vineapolis.fr/assets/img/logo.png" alt="">

                        <div id="textechampagnemap"><!-- textebourgognemap -->
                            <div id="titremap">
                                <p>Vins de la Champagne.</p>
                            </div>
                            <div id="soustitremap"><!-- soustitremap -->
                                <div class="row"><!-- Row -->
                                    <div class="col-lg-9"><!-- col-lg-9 -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto blanditiis commodi consectetur corporis cumque enim, ex explicabo hic incidunt laboriosam maxime, perspiciatis repellendus tempore temporibus, vero vitae. A, similique?</p>
                                        <div class="lirelasuiteindex">
                                            <a href="#" data-toggle="modal" data-target="#myModaltexte">
                                                <i class="fa fa-clipboard" data-toggle="tooltip" title="Lire la suite de l'article"></i>
                                                <span class="ml-5px">(lire la suite de l'article)</span>
                                            </a>
                                        </div>
                                    </div><!-- End col-lg-9 -->
                                </div><!-- End row -->
                            </div><!-- End soustitremap -->
                        </div><!-- End textebourgognemap -->
                        <a href="#">
                            <i class="fa fa-info-circle retraitfrance" data-toggle="tooltip" data-placement="right" title="Cliquez sur les régions vinicoles dont l'intitulé apparaît au survol de la souris.
                    Certains intitulés vous dirigeront vers une carte plus détaillée. Les autres, non détaillés, disparaîtront."></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#myModalcarte">
                            <i class="fa fa-desktop retraitbourgogne" data-toggle="tooltip" data-placement="right" title="Carte plein écran"></i>
                        </a>
                        <div id="champagnemap"></div>
                    </div>

                    <!-- ================================= FIN CARTE ===============================-->


                    <!-- ============================= LA FENÊTRE MODAL DU TEXTE ==============================-->
                    <div id="myModaltexte" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg-bourgogne">
                            <div class="modal-content index">

                                <div class="commentaires3">
                                    <div class="fermerboutonmodal">
                                        <button type="button" class="close2" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                        </button>
                                    </div>
                                    <ul>
                                        <li>
                                            <h3 class="padleft4px"><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                    <h4>A PHP Error was encountered</h4>

                                                    <p>Severity: Notice</p>
                                                    <p>Message:  Undefined property: stdClass::$titrearticle</p>
                                                    <p>Filename: accueil/vins_de_la_champagne.php</p>
                                                    <p>Line Number: 196</p>

                                                </div></h3>
                                        </li>
                                        <li>
                                            <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse"><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                <h4>A PHP Error was encountered</h4>

                                                <p>Severity: Notice</p>
                                                <p>Message:  Undefined property: stdClass::$auteur1</p>
                                                <p>Filename: accueil/vins_de_la_champagne.php</p>
                                                <p>Line Number: 200</p>

                                            </div></span>
                                        </li>
                                        <li class="auteur">
                                            <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse"><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                                <h4>A PHP Error was encountered</h4>

                                                <p>Severity: Notice</p>
                                                <p>Message:  Undefined property: stdClass::$auteur2</p>
                                                <p>Filename: accueil/vins_de_la_champagne.php</p>
                                                <p>Line Number: 204</p>

                                            </div></span>
                                        </li>
                                        <hr>
                                    </ul>
                                </div>

                                <div class="col-lg-12">
                                    <div class="modal3p">
                                        <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

                                            <h4>A PHP Error was encountered</h4>

                                            <p>Severity: Notice</p>
                                            <p>Message:  Undefined property: stdClass::$body</p>
                                            <p>Filename: accueil/vins_de_la_champagne.php</p>
                                            <p>Line Number: 212</p>

                                        </div>                                </div>
                                </div>
                                <div class="modal-footer2">
                                    <button type="button" class="btn btn-index" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================= FIN FENÊTRE MODAL DU TEXTE ==============================-->


                    <!-- ============================= LA FENÊTRE MODAL DE LA CARTE ==============================-->
                    <div class="modal fade" id="myModalcarte" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg2 retraitvins">
                            <div class="modal-content3">
                                <div class="cadrefermerchampagne">
                                    <h3>Vins de la Champagne.</h3>
                                    <p>
                                        (Agrandissez la carte avec les boutons + et -, puis naviguez dans celle-ci en cliquant/déplacant votre souris. <br/>En cliquant sur les aplats de couleur, vous accédez aux régions souhaitées.)
                                    </p>
                                    <div class="fermerboutton">
                                        <i class="fa fa-times-circle" data-dismiss="modal"></i>
                                    </div>
                                </div>
                                <div id="champagnemapmodal"></div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN PRÉSENCE DE LA VARIABLE $champagne2emeniveau -->
                    <!-- ============================= FIN FENÊTRE MODAL DE LA CARTE ==============================-->


                    <!-- ============================= ANNONCES DROITES =============================-->
                    <div id="rolloverannonces"><!-- ===== ID POUR LES ROLLOVERS DE JAVASCRIPT ========-->

                        <!-- ANNONCES DE DROITE HAUTES -->
                        <ul id="vignettes3">
                            <!-- ======== 6EME REQUETE, 6EME VIGNETTE ==========-->
                            <li class="droite-haute">
                                <a href="http://voiedefait.fr" target="_blank" title="Zippo">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/briquet.jpg"
                                         alt="Zippo"
                                         title="Zippo">
                                    <div class="texte">
                                        <h5>Zippo</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- ======== FIN 6EME REQUETE, 6EME VIGNETTE ==========-->
                            <!-- =========== 7EME REQUETE, 7EME VIGNETTE ===========-->
                            <li class="droite-milieu">
                                <a href="http://voiedefait.fr" target="_blank" title="Cave à vins">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/vin.jpg"
                                         alt="Cave à vins"
                                         title="Cave à vins">
                                    <div class="texte">
                                        <h5>Cave à vins</h5>
                                        <hr class="vignettes1" />
                                        <p>Accédez au site</p>
                                    </div>
                                </a>
                            </li>
                            <!-- =========== FIN 7EME REQUETE, 7EME VIGNETTE ===========-->
                        </ul>
                        <!-- FIN ANNONCES DE DROITE HAUTES -->

                        <!-- ANNONCES DE DROITE BASSE -->
                        <div class="annnoncebassedroite">
                            <ul id="vignettes4">
                                <!-- ======== 8EME REQUETE, 8EME VIGNETTE ==========-->
                                <li class="droite-basse">
                                    <a href="http://vineapolis.vineapolis.fr/accueil/signup" target="_self" title="Ici votre publicité">
                                        <img src="http://vineapolis.vineapolis.fr/assets/img/pubremplacante382x440-1.jpg" >
                                        <div class="texte">
                                            <h5>Ici votre publicité</h5>
                                            <hr class="vignettes1" />
                                            <p>Accédez aux détails</p>
                                        </div>
                                    </a>
                                </li>
                                <!-- ======== FIN 8EME REQUETE, 8EME VIGNETTE ==========-->
                            </ul>
                            <div>
                                <!-- FIN ANNONCES DE DROITE BASSE -->

                            </div><!-- ===== FIN ID POUR LES ROLLOVERS DE JAVASCRIPT ========-->
                            <!-- ========================== FIN ANNONCES DROITES ==========================-->

                        </div><!-- End Row<!-- ============================================= FOOTER =============================================-->
                        <footer id="footer">
                            <p>
                                <img src="http://vineapolis.vineapolis.fr/assets/img/logobas.png" id="logobas" alt="Logo du bas de la page"><span class="paddingdroite">|</span>
                                <a href="http://vineapolis.vineapolis.fr/conditionsgenerales">Conditions générales</a><span class="paddingdroite">|</span>
                                <a href="http://vineapolis.vineapolis.fr/contact">Contact</a><span class="paddingdroite">|</span>
                                <a class="abonnes" href="http://vineapolis.vineapolis.fr/accueil/signup">Espace annonceurs</a>
                                <span class="paddingdroite">|</span>
                                <span class="benoitfrance">Sources cartes Benoît France ®, design Jean-Luc Petelot</span>
                                <span class="paddingdroite">|</span>&nbsp;Powered by
                                <a href="http://madinici.org" target="_blank">Madinici.org</a>
                            </p>
                        </footer>
                        <!-- =========================================== FIN FOOTER ============================================-->
                    </div><!-- End Container Général -->
                </div><!-- =============================== FIN DIV PAGE 1ER NIVEAU  =======================================-->
                <div id="preloader"><img src="http://vineapolis.vineapolis.fr/assets/img/preloader.gif" alt="" /></div><!-- FIN PRELOADER -->
                <div class="preloader_hide"></div><!-- FIN PRELOADER HIDE -->
                <!-- ========================================== APPELS JAVASCRIPTS ====================================-->
                <!-- L'appel javascript de la carte vmap principale -->
                <script src="http://vineapolis.vineapolis.fr/assets/js/jquery.vmap.js" type="text/javascript"></script>
                <!-- Fin appel javascript de la carte vmap principale -->

                <script src="http://vineapolis.vineapolis.fr/assets/js/formatetexte.js" type="text/javascript"></script>
                <script type="text/javascript" src="formate.js"></script>

                <!-- js Boostrap -->
                <script type="text/javascript" src="http://vineapolis.vineapolis.fr/assets/js/bootstrap.js"></script>
                <!-- js site -->
                <script type="text/javascript" src="http://vineapolis.vineapolis.fr/assets/js/script.js"></script>


                <!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->
</body>

</html><!-- ============================== APPELS JAVASCRIPTS DE LA CARTE CHAMPAGNE ========================================-->
<script src="http://vineapolis.vineapolis.fr/assets/js/cartechampagne.js" type="text/javascript"></script>
<script src="http://vineapolis.vineapolis.fr/assets/js/jquery.vmap.cartechampagne.js" type="text/javascript"></script>
<script src="http://vineapolis.vineapolis.fr/assets/js/jquery.vmap.cartechampagnemodal.js" type="text/javascript"></script>
<!-- ============================== FIN APPELS JAVASCRIPTS DE LA CARTE CHAMPAGNE ========================================-->
