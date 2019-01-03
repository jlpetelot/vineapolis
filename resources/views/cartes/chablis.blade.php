@include('layouts.header')

@include('layouts.3emeniveau.menu')

    <!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
    <div id="pagechablis"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.3emeniveau.chablis.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartechablis -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Vins de Chablis.</p>
                    </div>
                </div>
                <div id="cartechablis"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Chablis</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 30 juin 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>
                                        Vin AOP produit dans le Vignoble de Chablis en Bourgogne,
                                        le Petit Chablis est un vin blanc sec à cépage chardonnay,
                                        appelé localement « Beaunois. »
                                    </p>
                                    <p>
                                        Il peut-être produit sur toutes les communes composant le vignoble de Chablis :
                                        Beine, Béru, Chablis, La Chapelle-Vaupelteigne, Chemilly-sur-Serein,
                                        Chichée, Collans, Caugis, Fleys, Fontenay près Chablis, Lignorelles,
                                        Ligny-le-Châtel, Maligny, Poilly-sur-Serein, Préhy, Villy et Viviers.
                                    </p>
                                    <p>
                                        C’est, en terme de volume de production, la 1ère appellation du Vignoble de Chablis.
                                        L’appellation Chablis représente 66% de vins produits.
                                    </p>
                                    <p>
                                        Les vignes sont plantées sur un sol brun, calcaire.
                                        Exposées au sud ou a l’est sur les coteaux de la vallée du Serein.
                                    </p>
                                    <p>
                                        A l’intérieur de l’appellation Chablis, on trouve 18 dénominations « 1er Cru, »
                                        ce sont les vins récoltés sur les coteaux les mieux exposé, et donc les
                                        plus ensoleillés. 79 lieux dits sont regroupés en 40 clients classés Chablis 1er Cru,
                                        divisés en 18 dénominations.
                                    </p>
                                    <h6>caractère :</h6>
                                    <p>
                                        Le Chablis a une robe or pale avec de légers reflets de vert.
                                        Le nez et la bouche sont souvent minéraux (silex, pierre à fusil).
                                        Le nez est également parfois fruité (agrumes, pomme verte).
                                        On retrouve parfois des notes de menthe, de réglisse ou encore d’acacia.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>Température de service entre 9 et 12 °C, ou pour l’apéritif à 8 °C.</p>
                                    <p>Il accompagne parfaitement poissons et fruits de mer, mais aussi l’andouillette,
                                        les escargots ou encore les fromages de chèvres et fromages à pâte cuite.
                                        L’été, il est parfait avec une salade.
                                    </p>
                                    <p>Temps de garde : 3 à 5 ans.</p>
                                    <h6>fiche d'identité :</h6>
                                    <p>&middot; Désignation : Basse-Bourgogne<br/>
                                        &middot; Appellation : Chablis<br/>
                                        &middot; Vignoble : Bourgogne<br/>
                                        &middot; Sous-vignoble : Vignoble de Chablis<br/>
                                        &middot; Sol : argilo-calcaire ou marneux<br/>
                                        &middot; Climat : tempéré océanique à tendance continental<br/>
                                        &middot; Heure d’ensoleillement : 1758 heures / an<br/>
                                        &middot; Cépage dominant : chardonnay<br/>
                                        &middot; Superficie plantée : 3218 ha. (en 2008)<br/>
                                        &middot; Pieds à l’hectare : 5 500 pieds<br/>
                                        &middot; Production en hectolitre : 171 400 hl (soit 23 000 000 bouteilles)<br/>
                                        &middot; Rendement moyen : 60 à 70 hl/ha</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Petit Chablis</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 30 juin 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>Vin AOP produit dans le Vignoble de Chablis en Bourgogne,
                                        le Petit Chablis est un vin blanc sec à cépage chardonnais.
                                    </p>
                                    <p>Il peut être produit sur toutes les communes composant le vignoble chablisien : Beine, Béru,
                                        Chablis, La Chapelle-Vaupelteigne, Chemilly sur Serein, Chichée, Collans, Caugis, Fleys,
                                        Fontenay près Chablis, Lignorelles, Ligny le Châtel, Maligny, Poilly sur Serein,  Poinchy,
                                        Villy et Viviers</p>
                                    <p>Le Petit Chablis est récolté en majorité en haut de côte ou sur le plateau,
                                        à la périphérie du vignoble de Chablis, entre 230 et 280 m d’altitude.</p>
                                    <p>Il représente 17 % de la production des vins de Chablis.</p>
                                    <h6>caractère :</h6>
                                    <p>Le Petit Chablis a une robe claire, couleur or pale, parfois avec des reflets verts.
                                        On relève des notes d’agrumes et de fleurs blanche (aubépine, acacia).
                                        Il a un nez très frais, vif et minéral, avec également des arômes de silex.</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>Température de service entre 9 et 11 °C, ou pour l’apéritif à 8 °C.<br/>
                                        Il accompagne parfaitement poissons et fruits de mer, mais aussi l’andouillette,
                                        les escargots ou encore les fromages de chèvres et fromages à pâte cuite.<br/>
                                        L’été, il est parfait avec une salade.<br/>
                                        Temps de garde : 2 ans.</p>
                                    <h6>fiche d'identité :</h6>
                                    <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                        &middot; Appellation : Petit Chablis.<br/>
                                        &middot; Vignoble : Bourgogne.<br/>
                                        &middot; Sous-vignoble : Vignoble de Chablis.<br/>
                                        &middot; Sol : calcaire brun et dur ou sol limoneux et sableux.<br/>
                                        &middot; Climat : tempéré océanique à tendance continental.<br/>
                                        &middot; Heure d’ensoleillement : 1758 heures / an.<br/>
                                        &middot; Cépage dominant : chardonnay.<br/>
                                        &middot; Superficie plantée : 782,71 ha. (en 2008).<br/>
                                        &middot; Superficie de production : 772 ha.<br/>
                                        &middot; Pieds à l’hectare : 5 500 pieds.<br/>
                                        &middot; Production en hectolitre : 43 197 hl.<br/>
                                        &middot; Rendement moyen : 60 à 70 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Chablis Premiers Crus</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-user blanccasse"></i>
                                        <span class="pad3px padright5px blanccasse">Laura Gourault</span>
                                    </li>
                                    <li class="auteur">
                                        <i class="fa fa-calendar blanccasse"></i>
                                        <span class="pad3px blanccasse">Rédigé le 1er juillet 2015</span>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div><!-- ../row -->

                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h6>présentation</h6>
                                    <p>Vin AOP produit dans le Vignoble de Chablis en Bourgogne,
                                        les Chablis Premiers Crus sont des vins blancs secs à cépage chardonnais,
                                        appelé localement « Beaunois. »</p>
                                    <p>Les 1ers Crus sont une dénomination à l’intérieur de l’appellation Chablis.
                                        Ils proviennent des vignes récoltées sur les coteaux les mieux exposés et donc
                                        les plus ensoleillés de l’appellation. Ils se répartissent entre la rive gauche
                                        et la rive droite de la rivière du Serein.</p>
                                    <h6>caractère :</h6>
                                    <p>Le Petit Chablis a une robe claire, couleur or pale, parfois avec des reflets verts.
                                        On relève des notes d’agrumes et de fleurs blanche (aubépine, acacia).
                                        Il a un nez très frais, vif et minéral, avec également des arômes de silex.</p>
                                    <p>On dénombre 79 lieux-dits cadastraux répartis en 40 climats classés Chablis 1er Cru.</p>
                                    <p><span class="rouge">Ces 40 climats sont divisés en 18 dénominations
                                            (ou climats porte-drapeaux) : </span>Beauroy, Berdiot, Chaume de Talvat,
                                        Côte de Jouan, Côte de Léchet, Côte de Vaubarousse, Fourchaume,
                                        Les Beauregards, Les fourneaux, Mont de Milieu, Montmains, Montée de Tonnerre,
                                        Vaillons, Vallée de Chigot, Vau de Vey, Vau Ligneau, Vaucoupin, Vosgros</p>
                                    <p>En terme de volume de production, le Chablis Grand Cru représente 16 % des vins de Chablis.</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>garde, température et gastronomie :</h6>
                                    <p>Température de service entre 12 et 14 °C.<br/>
                                        Il accompagne à merveilles poissons et fruits de mer, les viandes blanches, les volailles, fromages de chèvre, fromages à pâte cuite, andouillette, escargots, etc.<br/>
                                        Temps de garde : 5 à 10 ans.</p>
                                    <h6>fiche d'identité :</h6>
                                    <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                        &middot; Appellation : Chablis.<br/>
                                        &middot; Dénomination : Chablis 1er Cru.<br/>
                                        &middot; Vignoble : Bourgogne.<br/>
                                        &middot; Sous-vignoble : Vignoble de Chablis.<br/>
                                        &middot; Sol : argilo-calcaire ou marneux.<br/>
                                        &middot; Climat : tempéré océanique à tendance continental.<br/>
                                        &middot; Heure d’ensoleillement : 1758 heures / an.<br/>
                                        &middot; Cépage dominant : chardonnay.<br/>
                                        &middot; Superficie plantée : 776,08 ha (en 2008).<br/>
                                        &middot; Superficie de production : 736 ha (2013).<br/>
                                        &middot; Pieds à l’hectare : 5 500 pieds.<br/>
                                        &middot; Production en hectolitre (moyenne entre 2009 et 2013) : 42 378 hl (soit 5 636 274 bouteilles).<br/>
                                        &middot; Rendement moyen : 58 à 68 hl/ha.</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE MENU ==============-->
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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Chablis
                                </a>
                                <ul>
                                    <li>
                                        <a href="#marque2">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Petit Chablis
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Chablis Premiers Crus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('france/bourgogne/chablis/grands-crus-de-chablis') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Chablis Grands Crus
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <li class="menuinfo">
                            <a href="#">
                                <i class="fa fa-info-circle fa-3x" data-toggle="tooltip" data-placement="right"
                                   title="Cliquez sur les régions vinicoles de la carte
                                       dont l'intitulé apparaît au survol de la souris.&nbsp;
                                       Certains intitulés vous dirigeront vers une carte plus détaillée.
                                       D'autres disparaîtront."></i>
                            </a>
                        </li>
                        <li class="menumodal">
                            <a href="#modal">
                                <i class="fa fa-desktop fa-2x" data-toggle="tooltip" data-placement="right2"
                                   title="Voir les parcelles en plein écran"></i>
                            </a>
                        </li>
                    </ul>
                </nav><!-- =============== LE MENU ==============-->

            </div><!-- ../cartechablis -->
            <!-- ================================= FIN CARTE ===============================-->

            <!-- ============================= ANNONCES DROITES =============================-->
            @include('layouts.3emeniveau.chablis.droite')
            <!-- ========================== FIN ANNONCES DROITES ==========================-->
        </div><!-- End Row -->

        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Le vignoble de Chablis</h3>
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
                        <div class="col-md-3"><!-- col-md-3 -->
                            <h6>CHABLIS PREMIERS CRUS</h6>
                            <p>BEAUROY, Côte de Savant, Troesmes</p>
                            <p>BERDIOT</p>
                            <p>CHAUME DE TALVAT</p>
                            <p>CÔTE DE JOUAN</p>
                            <p>CÔTE DE LÉCHET</p>
                            <p>CÔTE DE VAUBAROUSSE</p>
                            <p>FOURCHAUME</p>
                            <p>LES FOURNEAUX, Côte des Prés-Girots, Morein</p>
                            <p>MONT DE MILIEU</p>
                            <p>MONTÉE DE TONNERRE, Chapelot, Côte de Bréchain, Pied d'Aloup</p>
                            <p>MONTMAINS, Butteaux, Forêts</p>
                            <p>VALLÉE DE CHIGOT</p>
                            <p>VAILLONS, Beugnons, Chatains, les Épinottes, Les Lys, Mélinots, Roncières, Sécher</p>
                            <p>VAU DE VEY, Vaux Ragons</p>
                            <p>VAU LIGNEAU</p>
                            <p>VAUCOUPIN</p>
                            <p>VOSGROS, Vaugiraut</p>
                            <h6 class="gcruschablis">CHABLIS GRANDS CRUS</h6>
                            <a href="grands-crus-de-chablis.html#modal" target="_blank">
                                voir la carte&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- ../col-md-3 -->

                        <div class="col-md-9">
                            <div id="mapmodalchablis"></div>
                        </div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.3emeniveau.chablis.appelsjschablis')