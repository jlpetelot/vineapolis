@include('layouts.header')

@include('layouts.2emeniveau.menu')



<!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
<div><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->

            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.2emeniveau.champagne.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartechampagne-->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins de la Champagne.</p>
                    </div>
                </div>
                <div id="champagnemap"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <h3>La Champagne&nbsp;</h3>
                                </li>
                                <li>
                                    <i class="fa fa-user blanccasse"></i>
                                    <span class="pad3px padright5px blanccasse">Dominique Gourault</span>
                                </li>
                                <li class="auteur">
                                    <i class="fa fa-calendar blanccasse"></i>
                                    <span class="pad3px blanccasse">Rédigé le 20 mai 2017</span>
                                </li>
                                <hr>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h6>Le vignoble</h6>
                                <p>Le vignoble de Champagne se situe dans la région Champagne-Ardennes (majoritairement) ainsi qu’en
                                    Seine et Marne et dans l’Aisne.</p>
                                <p>En plus du bien connu Champagne (ou Vin de Champagne), le vignoble produit également des vins rouges,
                                    rosés et blancs, appelés « Côteaux-Champenois, » ainsi que le « rosé des Riceys. »</p>

                                Le vignoble produit donc des mousseux, des vins blancs, rouges et rosés.
                            </div>
                            <div class="col-md-6">
                                <h6>Le vignoble de Champagne produit 3 A.O.C :</h6>
                                &middot; Champagne.<br/>
                                &middot; Côteaux-Champenois.<br/>
                                &middot; Rosé des Riceys.<br/>
                                &middot; Superficie plantée : 34 500 ha.<br/>
                                &middot; Hectolitres de vins produit / an : 2 540 000 hectolitres environ en 2010 (soir 352 millions de bouteilles).<br/>
                                &middot; Vins produits : blancs, rouges, rosés, mousseux.<br/>
                                &middot; Cépages dominants : pinot noir, pinot meunier, chardonnay.<br/>
                                &middot; Climat : Tempéré océanique à légère tendance continentale.<br/>
                                &middot; Sol : calcaires ou marneux.</p>
                            </div>
                        </div>
                    </div>
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->


                <!-- =============== LE MENU ==============-->
                <nav id="menu">
                    <nav id="menu">
                        <ul>
                            <li class="menucarte">
                                <a href="#cartes">
                                    <i class="fa fa-map" aria-hidden="true"></i>&nbsp;Carte des vins
                                </a>
                            </li>
                            <ul id="menuderoulant">
                                <li>
                                    <a href="#marque1">
                                        <i class="fa fa-book" aria-hidden="true"></i>&nbsp;La champagne
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('france/champagne/vallee-de-la-marne') }}">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                Champagnes de la Vallée de la Marne
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('france/champagne/montagne-de-reims-et-cote-des-blancs') }}">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                Grands crus de la Côte des Blancs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="menuinfo">
                                <a href="#">
                                    <i class="fa fa-info-circle fa-3x" data-toggle="tooltip" data-placement="right" title="Cliquez sur les régions vinicoles de la carte dont l'intitulé apparaît au survol de la souris.&nbsp;Certains intitulés vous dirigeront vers une carte plus détaillée. D'autres disparaîtront."></i>
                                </a>
                            </li>
                            <li class="menumodal">
                                <a href="#modal">
                                    <i class="fa fa-desktop fa-2x" data-toggle="tooltip" data-placement="right2"
                                       title="Voir les parcelles en plein écran"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </nav><!-- =============== LE MENU ==============-->

            </div><!-- cartebourgogne -->
            <!-- ================================= FIN CARTE ===============================-->

            <!-- ============================= ANNONCES DROITES =============================-->
            @include('layouts.2emeniveau.champagne.droite')
            <!-- ========================== FIN ANNONCES DROITES ==========================-->
        </div><!-- End Row -->
        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Champagne</h3>
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
                        <div class="col-md-2"><!-- col-md-2 -->
                            <h6 class="jaunechampagne">Communes Premiers Crus</h6>
                            <p>Avenay-Val-d’Or<br/>
                                Bergères-lès-Vertus<br/>
                                Bezannes<br/>
                                Billy-le-Grand<br/>
                                Bisseuil<br/>
                                Chamery<br/>
                                Champillon<br/>
                                Chigny-les-Roses<br/>
                                Chouilly<br/>
                                Coligny (Val-des-Marais)<br/>
                                Cormontreuil<br/>
                                Coulommes-la-Montagne<br/>
                                Cuis<br/>
                                Cumières<br/>
                                Dizy<br/>
                                Ecueil<br/>
                                Etréchy<br/>
                                Grauves<br/>
                                Hautvillers<br/>
                                Jouy-lès-Reims<br/>
                                Ludes<br/>
                                Mareuil-sur-Aÿ<br/>
                                Les Mesneux<br/>
                                Montbré<br/>
                                Mutigny<br/>
                                Pargny-lès-Reims<br/>
                                Pierry<br/>
                                Rilly-la-Montagne<br/>
                                Sacy<br/>
                                Sermiers<br/>
                                Taissy<br/>
                                Tauxières-Mutry<br/>
                                Tours-sur-Marne<br/>
                                Trépail<br/>
                                Trois-Puits<br/>
                                Vaudemanges<br/>
                                Vertus<br/>
                                Ville-Dommange<br/>
                                Villeneuve-Renneville<br/>
                                Villers-Allerand<br/>
                                Villers-aux-Nœuds<br/>
                                Villers-Marmery<br/>
                                Voipreux<br/></p>
                        </div><!-- ../col-md-2 -->
                        <div class="col-md-2">
                            <h6 class="jaunechampagne">Communes grands Crus</h6>
                            <p>Avize<br/>
                                Aÿ<br/>
                                Beaumont-sur-Vesle<br/>
                                Bouzy<br/>
                                Chouilly<br/>
                                Cramant<br/>
                                Louvois<br/>
                                Mailly-Champagne<br/>
                                Le Mesnil-sur-Oger<br/>
                                Oger<br/>
                                Oiry<br/>
                                Puisieulx<br/>
                                Sillery<br/>
                                Tours-sur-Marne<br/>
                                Verzenay<br/></p>
                        </div>
                        <div class="col-md-6">
                            <div id="champagnemapmodal"></div>
                        </div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->


@include('layouts.footer')

@include('layouts.2emeniveau.champagne.appelsjschampagne')
