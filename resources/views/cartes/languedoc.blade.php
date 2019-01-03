@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.languedoc.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins du Languedoc-Roussillon</h3>
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
                            <img src="{{ asset('img/languedocroussillon.jpg') }}" alt="Saumur">
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

                                                <!-- 1ER ONGLET -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Vignoble du Languedoc-Roussillon
                                                    </a>
                                                </li>
                                                <!-- FIN 1ER ONGLET -->

                                                <!-- 1ER ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Banyuls <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 2ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Banyuls
                                                            </a>
                                                        </li>
                                                        <!-- FIN 2ÈME ONGLET -->

                                                        <!-- 3ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Banyuls Grand Cru
                                                            </a>
                                                        </li>
                                                        <!-- 3ÈME ONGLET -->
                                                    </ul>
                                                </li>
                                                <!-- ../1ER ONGLET AVEC DROPDOWN -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Carbadès
                                                    </a>
                                                </li>
                                                <!-- 4ÈME ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Clairette du Languedoc
                                                    </a>
                                                </li>
                                                <!-- ../5ÈME ONGLET -->

                                                <!-- 6ÈME ONGLET -->
                                                <li>
                                                    <a href="#onglet6" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                        Collioure
                                                    </a>
                                                <li>
                                                <!-- ../6ÈME ONGLET -->

                                                <!-- 2ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Corbière <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">

                                                        <!-- 7ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet7" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Corbière
                                                            </a>
                                                        <li>
                                                        <!-- ../7ÈME ONGLET -->
                                                        <!-- 8ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet8" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Corbière-Boutenac
                                                            </a>
                                                        <li>
                                                        <!-- ../8ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../2ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 3ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Côtes du Roussillon <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 9ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet9" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Côtes du Roussillon
                                                            </a>
                                                        <li>
                                                        <!-- ../9ÈME ONGLET -->
                                                        <!-- 10ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet10" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Grand Roussillon
                                                            </a>
                                                        <li>
                                                        <!-- ../10ÈME ONGLET -->
                                                        <!-- 11ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet11" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Côtes du Roussillon Villages
                                                            </a>
                                                        <li>
                                                        <!-- ../11ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../3ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 4ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Crémant de Limoux <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 12ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet12" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Crémant de Limoux
                                                            </a>
                                                        <li>
                                                        <!-- ../12ÈME ONGLET -->
                                                        <!-- 13ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet13" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Limoux
                                                            </a>
                                                        <li>
                                                        <!-- ../13ÈME ONGLET -->
                                                        <!-- 14ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet14" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Faugères
                                                            </a>
                                                        <li>
                                                        <!-- ../14ÈME ONGLET -->
                                                        <!-- 15ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet15" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Fitou
                                                            </a>
                                                        <li>
                                                        <!-- ../15ÈME ONGLET -->
                                                        <!-- 16ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet16" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Languedoc
                                                            </a>
                                                        <li>
                                                         <!-- ../16ÈME ONGLET -->
                                                        <!-- 17ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet17" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Malepère
                                                            </a>
                                                        <li>
                                                        <!-- ../17ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../4ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 5ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Minervois <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 18ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet18" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Minervois
                                                            </a>
                                                        <li>
                                                            <!-- ../18ÈME ONGLET -->
                                                            <!-- 19ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet19" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Minervois-la-Livinière
                                                            </a>
                                                        <li>
                                                            <!-- ../19ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../5ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 6ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Muscats <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 20ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet20" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Muscat de Frontignan
                                                            </a>
                                                        <li>
                                                            <!-- ../20ÈME ONGLET -->
                                                            <!-- 21ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet21" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Muscat de Lunel
                                                            </a>
                                                        <li>
                                                            <!-- ../21ÈME ONGLET -->
                                                            <!-- 22ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet22" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Muscat de Mireval
                                                            </a>
                                                        <li>
                                                            <!-- ../22ÈME ONGLET -->
                                                            <!-- 23ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet23" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Muscat de Saint-Jean de Minervois
                                                            </a>
                                                        <li>
                                                            <!-- ../23ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../6ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 7ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown"><!-- dropdown -->
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Rivesaltes <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 24ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet24" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Rivesaltes
                                                            </a>
                                                        <li>
                                                        <!-- ../24ÈME ONGLET -->
                                                        <!-- 25ÈME ONGLET -->
                                                        <li>
                                                            <a href="#onglet25" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                                Muscat de Rivesaltes
                                                            </a>
                                                        <li>
                                                        <!-- ../25ÈME ONGLET -->
                                                    </ul>
                                                </li><!-- ../dropdown -->
                                                <!-- ../7ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 26ÈME ONGLET -->
                                                <li>
                                                    <a href="#onglet26" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">
                                                        Saint-Chinian
                                                    </a>
                                                <li>
                                                <!-- ../26ÈME ONGLET -->
                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- ======================= 1ER TEXTE ==============================-->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Vignoble du Languedoc-Roussillon</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 23 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <p>
                                                                Le vignoble du Languedoc-Roussillon s’étends sur une grande partie du Languedoc-Roussillon (Aude, Gard,
                                                                Hérault, Pyrénées-Orientales). Le vignoble, qui est l’un des plus anciens, produit des vins rouges, rosés, blancs, doux, de liqueur et
                                                                mousseux.
                                                            </p>
                                                            <p>
                                                                Le vignoble 26 A.O.C :<br/>
                                                                Banyuls, Banyuls Grand Cru, Cabardès, ClaireRe du Languedoc, Collioure, Corbières, Corbières-Boutenac,
                                                                Côtes du Roussillon, Côtes du Roussillon Villages, Crémant de Limoux, Fougères, Fitou, Grand Roussillon,
                                                                Languedoc, Limoux, Malepère, Maury, Minervois, Minervois-La-Livinière, Muscat de FronCgnan, Muscat de
                                                                Lunel, Muscal de Mireval, Muscat de Rivesaltes, Muscats de Saint-Jean-de-Minervois, Rivesaltes, Saint-
                                                                Chinian.
                                                            </p>
                                                        </div><!-- End col-lg-6 -->

                                                        <div class="col-lg-6 margehaute80px"><!-- col-lg-6 -->
                                                            <p>
                                                                &middot; Superficie totale : 246 000 hectares environ<br/>
                                                                &middot; Hectolitres de vins produit / an : 9 000 000 hectolitres environ<br/>
                                                                &middot; Vins produits : blancs, rouges, rosés, doux, de liqueur, mousseux<br/>
                                                                &middot; Cépages dominants : carignan, cinsault, mourvèdre, grenache, grenache blanc, syrah, bourboulenc, clairette, grenache gris, maccabeu, malvoisie, roussanne, marsanne, muscat blanc à petits grains<br/>
                                                                &middot; Climat : Tempéré méditerranéen<br/>
                                                                &middot; Sol : argilo-calcaire, schisteux, gréseux, molassiques, alluvionnaires
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- ===================== FIN 1ER TEXTE ============================-->

                                                <!-- ======================= TEXTE 2 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Banyuls</h5>
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
                                                                                    Le Banyuls est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, dans les
                                                                                    communes de Banyuls sur Mer, Colliure, Port-Vendres et Cerbère (Pyrénées-Orientales).
                                                                                    Ses vins peuvent être rouges, rosés (bien que très rares) ou blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : frais et fin<br/>
                                                                                    Robe : rubis profonde<br/>
                                                                                    Arômes : fruits noirs, fruits cuits, cacao<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : jaune or<br/>
                                                                                    Arômes : poire, miel, fruits exotiques
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : entre 12 et 14 °C<br/>
                                                                                    Accords mets/vin : apériVfs, desserts au chocolat<br/>
                                                                                    Temps de garde : plus de 15 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : foie gras, desserts aux fruits<br/>
                                                                                    Temps de garde : à boire sur le fruit<br/>
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Banyuls<br/>
                                                                                    &middot; Appellation principale : Banyuls<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Sol : schiste<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : vins doux naturels rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, muscat<br/>
                                                                                    &middot; Superficie en production : 640 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 1 850 ha. environ<br/>
                                                                                    &middot; Rendement moyen : maximum 20 à 30 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 2 ============================-->

                                                <!-- ======================= TEXTE 3 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Banyuls Grand Cru</h5>
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
                                                                                <h6 class="couleurancio">Présentation</h6>
                                                                                <p>
                                                                                    Le Banyuls Grand Cru est un vin doux naturel AOC produit dans le Vignoble du Languedoc-
                                                                                    Roussillon. Il se distingue du Banyuls ordinaire par ses méthodes d’élevage et de culture : élevé en futs
                                                                                    pendant 30 mois au minimum (contre 10 pour les Banyuls génériques).
                                                                                </p>
                                                                                <h6 class="couleurancio">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : structurée<br/>
                                                                                    Robe : acajou<br/>
                                                                                    Arômes : figue, café, cacao<br/><br/>

                                                                                    Rancios :<br/>
                                                                                    Bouche : franche et dense<br/>
                                                                                    Robe : acajou, reflets tuilés<br/>
                                                                                    Arômes : sous-bois, fruits secs, noix
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="couleurancio">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 14 °C<br/>
                                                                                    Accords mets/vin : apériGfs, desserts au chocolat<br/><br/>

                                                                                    Rancios :<br/>
                                                                                    Température de service :13 °C<br/>
                                                                                    Accords mets/vin : digesGf, gibiers, fromages
                                                                                </p>
                                                                                <h6 class="couleurancio">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Banyuls Grand Cru<br/>
                                                                                    &middot; Appellation principale : Banyuls Grand Cru<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Sol : schiste<br/>
                                                                                    &middot; Production : vins doux naturels rouges<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, muscat
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
                                                <!-- ===================== FIN TEXTE 3 ============================-->

                                                <!-- ======================= TEXTE 4 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet4" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Cabardès</h5>
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
                                                                                <h6 class="rougesombre">Présentation</h6>
                                                                                <p>
                                                                                    Le Cabardès est un vin AOC, rouge ou rosé, produit dans le Vignoble du Languedoc-Roussillon,
                                                                                    dans le département de l’Aude, au nord de la ville de Carcassonne.
                                                                                </p>
                                                                                <h6 class="rougesombre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : franche et souple<br/>
                                                                                    Robe : pourpre profonde<br/>
                                                                                    Arômes : fruits rouges et noirs, cuir, musc<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : rose soutenu<br/>
                                                                                    Arômes : fruits rouges
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougesombre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers, viandes rouges<br/>
                                                                                    Temps de garde : jusqu’à 10 ans<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : apéritif, grillades<br/>
                                                                                    Temps de garde : dans les 3 ans
                                                                                </p>
                                                                                <h6 class="rougesombre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Cabardès<br/>
                                                                                    &middot; Appellation principale : Cabardès<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence océanique<br/>
                                                                                    &middot; Sol : schiste ou marneux<br/>
                                                                                    &middot; Production : rouges et rosés<br/>
                                                                                    &middot; Cépages dominants : grenache, merlot, syrah, cabernets<br/>
                                                                                    &middot; Superficie en producWon : 550 ha. environ<br/>
                                                                                    &middot; Rendement moyen : maximum 50 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 4 ============================-->

                                                <!-- ======================= TEXTE 5 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet5" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Clairette du Languedoc</h5>
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
                                                                                <h6 class="rancioclair">Présentation</h6>
                                                                                <p>
                                                                                    Le Clairette du Languedoc est un vin blanc AOC produit dans le Vignoble du Languedoc-Roussillon,
                                                                                    dans le département de l’Hérault. Le vin produit peut être sec, moelleux ou naturel et peuvent êtres suivis des mentions rancio ou
                                                                                    vin de liqueur.
                                                                                </p>
                                                                                <h6 class="rancioclair">caractère :</h6>
                                                                                <p> Blancs secs :<br/>
                                                                                    Bouche : ronde et fruitée<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : agrumes, fruits à chair blanche, fleurs blanches<br/><br/>

                                                                                    Rancios :<br/>
                                                                                    Bouche : ample et généreuse<br/>
                                                                                    Robe : cognac<br/>
                                                                                    Arômes : abricot, coing, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rancioclair">garde, température et gastronomie</h6>
                                                                                <p> Blancs secs :<br/>
                                                                                    Temperature de service : 10 °C<br/>
                                                                                    Accords mets/vin : hors d’oeuvre, salades<br/>
                                                                                    Temps de garde : maximum 3 ans<br/><br/>

                                                                                    Rancios :<br/>
                                                                                    Accords mets/vin : foie gras, digestif
                                                                                </p>
                                                                                <h6 class="rancioclair">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Claire7e du Languedoc<br/>
                                                                                    &middot; Appellation principale : Claire7e du Languedoc<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence de la tramontane<br/>
                                                                                    &middot; Sol : terrasses caillouteuses<br/>
                                                                                    &middot; ProducLon : vins blancs secs ou moelleux, vins doux naturels<br/>
                                                                                    &middot; Cépages dominants : clairette<br/>
                                                                                    &middot; Superficie en producLon : 77 ha. environ<br/>
                                                                                    &middot; ProducLon (en hectolitres) : 3 712 hl.<br/>
                                                                                    &middot; Rendement moyen : maximum 50 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 5 ============================-->

                                                <!-- ======================= TEXTE 6 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet6" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Collioure</h5>
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
                                                                                <h6 class="rose">Présentation</h6>
                                                                                <p>
                                                                                    Le Collioure est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, dans les communes
                                                                                    de Banyuls sur Mer, Collioure, Port-Vendres et Cerbère (Pyrénées-Orientales).
                                                                                </p>
                                                                                <h6 class="rose">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : généreuse et velouté<br/>
                                                                                    Robe : grenat foncé<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices, vanille<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : profonde et minérale<br/>
                                                                                    Robe : jaune clair<br/>
                                                                                    Arômes : fruits à chair blanche, agrumes<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : délicate<br/>
                                                                                    Robe : saumon pâle<br/>
                                                                                    Arômes : fruits rouges
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rose">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 16 °C<br/>
                                                                                    Temps de garde : 5 à 10 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Accords mets/vin : poissons<br/>
                                                                                    Temps de garde : plus de 5 ans<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : barbecue, apéritif<br/>
                                                                                    Temps de garde : à boire dans sa jeunesse
                                                                                </p>
                                                                                <h6 class="rose">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Collioure<br/>
                                                                                    &middot; Appellation principale : Collioure<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Sol : schiste<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan<br/>
                                                                                    &middot; Superficie en production : 640 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 1 850 ha. environ<br/>
                                                                                    &middot; Rendement moyen : maximum 40 à 48 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 6 ============================-->

                                                <!-- ======================= TEXTE 7 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet7" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Corbière</h5>
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
                                                                                    Le Corbière est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément
                                                                                    dans le sud du département de l’Aude. L’appellation est la 1ère en volume de production sur le
                                                                                    vignoble du Languedoc-Roussillon et la 4ème de France.
                                                                                </p>
                                                                                <p>
                                                                                    Il y a 11 terroirs pour cette appellation : Boutenac, Durban, FonQroide, Largrasse, Lézignan,
                                                                                    Montagne d’Alaric, Quéribus, Saint-Victor, Serviès, Sigean et Termenès. En foncton de ces derniers, les vins ont des caractères très variés.
                                                                                </p>
                                                                                <p>Ses vins peuvent être rouges, rosés ou blancs.</p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et dense<br/>
                                                                                    Robe : grenat foncé<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices, réglisse, poivre<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : dense et ronde<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fruits à chair blanche, fleurs<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : délicate et aromatique<br/>
                                                                                    Robe : rose saumon<br/>
                                                                                    Arômes : fruits rouges, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 16 °C<br/>
                                                                                    Temps de garde : plus de 8 ans selon les années<br/>
                                                                                    Accords mets/vin : grillades, civets, daubes provencales<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vin : fruits de mer, fromages de chèvre<br/>
                                                                                    Temps de garde : dans sa jeunesse<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vin : pizzas, barbecue, salades
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Corbières<br/>
                                                                                    &middot; Appellation principale : Corbières<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Sols : très variés<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence montagnarde<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan, cinsault<br/>
                                                                                    &middot; Superficie en production : 13 187 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 551 773 hl<br/>
                                                                                    &middot; Rendement moyen : maximum 50 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 7 ============================-->

                                                <!-- ======================= TEXTE 8 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet8" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Corbière-Boutenac</h5>
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
                                                                                <h6 class="rouge">Présentation</h6>
                                                                                <p>
                                                                                    Le Corbière-Boutenac est un vin rouge AOC produit dans le Vignoble du Languedoc-Roussillon, et
                                                                                    plus précisément dans le département de l’Aude. Son aire de production comprend 10 communes
                                                                                    : Boutenac, Ferrals-les-Corbières, Fabrezan, Saint-Laurent-de-la-Cabrerisse, Thézan-des-Corbières,
                                                                                    Montséret, Saint-André-de-Roquelongue, Luc-sur-Orbieu, Ornaisons et Lézignan-Corbières.
                                                                                </p>
                                                                                <h6 class="rouge">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et dense<br/>
                                                                                    Robe : grenat profond<br/>
                                                                                    Arômes : fruits noirs, épices, garrigue
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rouge">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : au moins 4 ans<br/>
                                                                                    Accords mets/vin : gibiers à poils
                                                                                </p>
                                                                                <h6 class="rouge">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Corbières-Boutenac<br/>
                                                                                    &middot; Appellation principale : Corbières-Boutenac<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Sols : très variés<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, carignan<br/>
                                                                                    &middot; Rendement moyen : maximum 45 à 54 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 8 ============================-->

                                                <!-- ======================= TEXTE 9 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet9" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Côtes du Roussillon</h5>
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
                                                                                    Le Côtes du Roussillon est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, et plus
                                                                                    précisément autour de la ville de Perpignan et dans la plaine du Roussillon.
                                                                                </p>
                                                                                <p>Ses vins peuvent être rouges, rosés ou blancs.</p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : généreuse et dense<br/>
                                                                                    Robe : rubis grenat<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et ronde<br/>
                                                                                    Robe : dorée pâle<br/>
                                                                                    Arômes : fruits à chair blanche, fleurs blanches, agrumes, vanille<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et puissante<br/>
                                                                                    Robe : rose saumon pâle<br/>
                                                                                    Arômes : fruits rouges, bonbons anglais
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 16 °C<br/>
                                                                                    Temps de garde : plus de 4 ans selon les années<br/>
                                                                                    Accords mets/vin : grillades<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 9 °C<br/>
                                                                                    Accords mets/vin : fruits de mer<br/>
                                                                                    Temps de garde : 3 ans

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vin : apéritifs, charcuteries
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes du Roussillon<br/>
                                                                                    &middot; Appellation principale : Côtes du Roussillon<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan, cinsault, tourbat, marsanne, roussanne, macaber, lladoner pelut<br/>
                                                                                    &middot; Superficie en production : 13 187 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 551 773 hl<br/>
                                                                                    &middot; Rendement moyen : maximum 50 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 9 ============================-->

                                                <!-- ======================= TEXTE 10 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet10" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Grand Roussillon</h5>
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
                                                                                    Le Grand Roussillon est un vin AOC produit dans le Vignoble du Languedoc-Roussillon.
                                                                                </p>
                                                                                <p>Ses vins peuvent être rouges, rosés ou blancs.</p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : complete<br/>
                                                                                    Robe : grenat<br/>
                                                                                    Arômes : fruits rouges et noirs<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : délicate<br/>
                                                                                    Robe : or<br/>
                                                                                    Arômes : fruits à chair blanche, fruits confits, fruits exotiques<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : fraîche<br/>
                                                                                    Arômes : fruits rouges
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 13 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vin : desserts au chocolat<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Temperature de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : desserts<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Temperature de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : apéritif
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Grand Roussillon<br/>
                                                                                    &middot; Appellation principale : Grand Roussillon<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, grenache gris, grenache blanc
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
                                                <!-- ===================== FIN TEXTE 10 ============================-->

                                                <!-- ======================= TEXTE 11 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet11" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Côtes du Roussillon Villages</h5>
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
                                                                                <h6 class="rouge">Présentation</h6>
                                                                                <p>
                                                                                    Le Côtes du Roussillon Villages est un vin rouge AOC produit dans le Vignoble du Languedoc-
                                                                                    Roussillon, et plus précisément dans la plaine du Roussillon. C’est un vin d’assemblage qui doit réunir au moins trois cépages parmi le syrah, le mourvèdre, le
                                                                                    carignan, le grenache noir, le cinsault, le lledoner peut et le macabeu.
                                                                                </p>
                                                                                <h6 class="rouge">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante<br/>
                                                                                    Robe : grenat reflets mauve<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rouge">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temperature de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers
                                                                                </p>
                                                                                <h6 class="rouge">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes du Roussillon Villages<br/>
                                                                                    &middot; Appellation principale : Côtes du Roussillon Villages<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges<br/>
                                                                                    &middot; Production (en hectolitres) : 47 487 hl. environ<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan<br/>
                                                                                    &middot; Rendement moyen : maximum 45 à 54 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 11 ============================-->

                                                <!-- ======================= TEXTE 12 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet12" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Crémant de Limoux</h5>
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
                                                                                <h6 class="rosechampagne">Présentation</h6>
                                                                                <p>
                                                                                    Le Crémant de Limoux est un vin effervescent AOC produit dans le Vignoble du Languedoc-
                                                                                    Roussillon, et plus précisément dans la région de Limoux dans l’Aude.
                                                                                </p>
                                                                                <p>Il peut être produits en blanc ainsi qu’en rosé.</p>
                                                                                <h6 class="rosechampagne">caractère :</h6>
                                                                                <p> Les blancs :<br/>
                                                                                    Bouche : complète avec des bulles fines et une mousse dense<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : agrumes, fruits à chair blanche, fleurs blanches, tilleul<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : fraiche avec une mousse crémeuse<br/>
                                                                                    Robe : saumon soutenue<br/>
                                                                                    Arômes : agrumes, fruits rouges
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rosechampagne">garde, température et gastronomie</h6>
                                                                                <p> Les blancs :<br/>
                                                                                    Temperature de service : 8 °C<br/>
                                                                                    Temps de garde : dans les 3 ans<br/>
                                                                                    Accords mets/vin : apériYf, viandes blanches, volailles, poissons<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Temperature de service : 8 °C<br/>
                                                                                    Accords mets/vin : graYn de fruits rouges
                                                                                </p>
                                                                                <h6 class="rosechampagne">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Crémant de Limoux<br/>
                                                                                    &middot; Appellation principale : Crémant de Limoux<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Sol : argilo-calcaire<br/>
                                                                                    &middot; Production : vins effervescents blancs et rosés<br/>
                                                                                    &middot; Cépages dominants : chenin blanc, chardonnay, pinot noir<br/>
                                                                                    &middot; Production (en hectolitres) : 30 000 hl. environ<br/>
                                                                                    &middot; Rendement moyen : maximum 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 12 ============================-->

                                                <!-- ======================= TEXTE 13 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet13" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Limoux</h5>
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
                                                                                <h6 class="jaunefonce">Présentation</h6>
                                                                                <p>
                                                                                    Le Limoux est un vin AOC, rouge, blanc ou mousseux produit dans le Vignoble du Languedoc-
                                                                                    Roussillon, dans la région de Limoux.
                                                                                </p>
                                                                                <h6 class="jaunefonce">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense<br/>
                                                                                    Robe : grenat profonde<br/>
                                                                                    Arômes : fruits rouges et noirs, cuir, garrigue<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : or pâle<br/>
                                                                                    Arômes : agrumes, noiseOe, vanille, fleurs blanches<br/><br/>

                                                                                    Vin blanquette de Limoux (mousseux) :<br/>
                                                                                    Bouche : bulle fine, mousse crémeuse<br/>
                                                                                    Robe : or pâle<br/>
                                                                                    Arômes : fleurs blanches, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : viandes rouges<br/>
                                                                                    Temps de garde : plus de 5 ans<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vin : volaille<br/>
                                                                                    Temps de garde : 3 ans<br/><br/>

                                                                                    Vin blanquette de Limoux (mousseux) :<br/>
                                                                                    Accords mets/vin : dessert
                                                                                </p>
                                                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Limoux<br/>
                                                                                    &middot; Appellation principale : Limoux<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence océanique<br/>
                                                                                    &middot; Sol : schiste ou marneux<br/>
                                                                                    &middot; Produc^on : blancs, rouges ou mousseux<br/>
                                                                                    &middot; Cépages dominants : mauzac, merlot<br/>
                                                                                    &middot; Rendement moyen : maximum 60 à 70 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 13 ============================-->

                                                <!-- ======================= TEXTE 14 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet14" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Faugères</h5>
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
                                                                                    Le Faugères est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément
                                                                                    dans le département de l’Hérault. Les vins de cette appellation peuvent être blancs, rouges ou rosés.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et charnue<br/>
                                                                                    Robe : grenat foncé<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices, café, encens, thym<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fleurs, fruits rouges<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et ronde<br/>
                                                                                    Robe : jaune or<br/>
                                                                                    Arômes : Mlleul, verveine, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : au moins 5 ans<br/>
                                                                                    Accords mets/vin : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : charcuteries<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Faugères<br/>
                                                                                    &middot; Appellation principale : Faugères<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 2000 ha.<br/>
                                                                                    &middot; Production : rouges, rosés, blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan<br/>
                                                                                    &middot; Rendement moyen : maximum 45 à 54 hl./ha. en blanc, entre 50 à 60 hl./ha. en rouge
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
                                                <!-- ===================== FIN TEXTE 14 ============================-->

                                                <!-- ======================= TEXTE 15 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet15" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Fitou</h5>
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
                                                                                    Le Fitou est un vin rouge AOC, produit dans le Vignoble du Languedoc-Roussillon, dans le
                                                                                    département de l’Aude, au sud du massif des Corbières.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Bouche : puissante et charnue<br/>
                                                                                    Robe : grenat avec reflets violet<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, poivre, garrigue
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Accords mets/vin : gibiers<br/>
                                                                                    Temps de garde : 5 à 10 ans
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Fitou<br/>
                                                                                    &middot; Appellation principale : Fitou<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence montagnarde<br/>
                                                                                    &middot; Sol : schisteux<br/>
                                                                                    &middot; ProducYon : rouges<br/>
                                                                                    &middot; Cépages dominants : grenache et carignan<br/>
                                                                                    &middot; Superficie en producYon : 2 526 ha. environ<br/>
                                                                                    &middot; Rendement moyen : maximum 45 à 54 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 15 ============================-->

                                                <!-- ======================= TEXTE 16 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet16" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Languedoc</h5>
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
                                                                                    Le Languedoc est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, sur les
                                                                                    départements de l’Hérault, des Pyrénées-Orientales, de l’Aude et du Gard. Les vins de cette appellation sont majoritairement rouges et rosés mais peuvent également êtres
                                                                                    blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : généreuse et charpentée<br/>
                                                                                    Robe : rubis profond<br/>
                                                                                    Arômes : fruits rouges et noir, fleurs, épices<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : acacia, fruits rouges<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : délicate<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fruits à chair blanche, épices, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 2 à 5 ans<br/>
                                                                                    Accords mets/vin : grillades, viandes rouges<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 9 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : charcuterie, apéritif<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Languedoc<br/>
                                                                                    &middot; Appellation principale : Languedoc<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 9 522 ha.<br/>
                                                                                    &middot; Production : rouges et rosés (85 %), blancs (15 %)<br/>
                                                                                    &middot; Production (hectolitres) : 398 780 hl.<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan, cinsault, clairette, grenache blanc, marsanne, roussanne
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
                                                <!-- ===================== FIN TEXTE 16 ============================-->

                                                <!-- ======================= TEXTE 17 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet17" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Malepère</h5>
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
                                                                                <h6 class="rougesombre">Présentation</h6>
                                                                                <p>
                                                                                    Le Malepère est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, entre les
                                                                                    communes de Limoux, Castelnaudary et Carcassonne. Les vins de cette appellation peuvent être rouges ou rosés.
                                                                                </p>
                                                                                <h6 class="rougesombre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et profonde<br/>
                                                                                    Robe : violette<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, épices, sous-bois, confiture<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et dense<br/>
                                                                                    Robe : rose saumon<br/>
                                                                                    Arômes : épices, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougesombre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : à laisser murir, plus de 8 ans<br/>
                                                                                    Accords mets/vin : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vin : apéritif
                                                                                </p>
                                                                                <h6 class="rougesombre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Malepère<br/>
                                                                                    &middot; Appellation principale : Malepère<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges, rosés<br/>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc<br/>
                                                                                    &middot; Rendement moyen : maximum 50 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 17 ============================-->

                                                <!-- ======================= TEXTE 18 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet18" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Minervois</h5>
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
                                                                                    Le Minervois est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, dans les
                                                                                    départements de l’Aude et de l’Hérault. Les vins de cette appellation sont majoritairement rouges mais peuvent être blancs ou rosés.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et équilibrée<br/>
                                                                                    Robe : encre noire<br/>
                                                                                    Arômes : fruits noirs, fruits rouges, fruits mûrs, épices<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ample et fruitée<br/>
                                                                                    Robe : framboise<br/>
                                                                                    Arômes : fruits rouges et noirs<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et ronde<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fruits secs, fruits à chair blanche, vanille
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : au moins 5 ans<br/>
                                                                                    Accords mets/vin : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : apéritif<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Temps de garde : plus de 5 ans<br/>
                                                                                    Accords mets/vin : poissons grillé
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Minervois<br/>
                                                                                    &middot; Appellation principale : Minervois<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 4 172 ha.<br/>
                                                                                    &middot; Production : rouges (94 %), rosés (4 %), blancs (2 %)<br/>
                                                                                    &middot; Production (hectolitres) : 174 183 hl.<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, grenache blanc<br/>
                                                                                    &middot; Rendement moyen : maximum 48 à 60 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 18 ============================-->

                                                <!-- ======================= TEXTE 19 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet19" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Minervois-la-Livinière</h5>
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
                                                                                    Le Minervois-la-Livinière est un vin rouge AOC produit dans le Vignoble du Languedoc-Roussillon.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Bouche : ample et profonde<br/>
                                                                                    Robe : encre noire<br/>
                                                                                    Arômes : fruits noirs cuits, violette, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à laisser murir, plus de 5 ans<br/>
                                                                                    Accords mets/vin : gibiers
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Minervois-la-Livinière<br/>
                                                                                    &middot; Appellation principale : Minervois-la-Livinière<br/>
                                                                                    &middot; Vignoble : Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : rouges<br/>
                                                                                    &middot; Cépages dominants : grenache noir, mourvèdre noir, syrah noir<br/>
                                                                                    &middot; Production (en hectolitres) : 7000 hl.<br/>
                                                                                    &middot; Rendement moyen : maximum 45 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 19 ============================-->

                                                <!-- ======================= TEXTE 20 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet20" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat de Frontignan</h5>
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
                                                                                <h6 class="jaunechablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat de Frontignan est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément sur les communes de Fron>gnan et de Vic-la-Gardiole, dans l’Hérault.
                                                                                </p>
                                                                                <h6 class="jaunechablis">caractère :</h6>
                                                                                <p> Blancs<br/>
                                                                                    Bouche : dense et riche<br/>
                                                                                    Robe : or soutenue<br/>
                                                                                    Arômes : fleurs blanches, fruits exotiques, abricot
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunechablis">garde, température et gastronomie</h6>
                                                                                <p> Blancs<br/>
                                                                                    Température de service : 9 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : apéritif, fromages
                                                                                </p>
                                                                                <h6 class="jaunechablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat de Frontignan<br/>
                                                                                    &middot; Appellation principale : Muscat de Frontignan<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 790 ha.<br/>
                                                                                    &middot; Production : vin de liqueur et vin doux naturel blanc<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains<br/>
                                                                                    &middot; Rendement moyen : maximum 30 à 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 20 ============================-->

                                                <!-- ======================= TEXTE 21 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet21" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat de Lunel</h5>
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
                                                                                <h6 class="jaunechablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat de Lunel est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément sur les communes de Lunel, Lunel-Viel, Saturargues et Vérargues, dans l’Hérault.
                                                                                </p>
                                                                                <h6 class="jaunechablis">caractère :</h6>
                                                                                <p> Blancs<br/>
                                                                                    Bouche : dense et riche<br/>
                                                                                    Robe : or, reflets verts<br/>
                                                                                    Arômes : fleurs, raisins
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunechablis">garde, température et gastronomie</h6>
                                                                                <p> Blancs<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : apéritif, foie gras
                                                                                </p>
                                                                                <h6 class="jaunechablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat de Lunel<br/>
                                                                                    &middot; Appellation principale : Muscat de Lunel<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 357 ha.<br/>
                                                                                    &middot; Production : vin de liqueur et vin doux naturel blanc<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains<br/>
                                                                                    &middot; Rendement moyen : maximum 30 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 21 ============================-->

                                                <!-- ======================= TEXTE 22 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet22" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat de Mireval</h5>
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
                                                                                <h6 class="jaunechablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat de Mireval est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, dans l’Hérault.
                                                                                </p>
                                                                                <h6 class="jaunechablis">caractère :</h6>
                                                                                <p> Blancs<br/>
                                                                                    Bouche : douce et fraîche<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : rose, agrumes, fruits murs
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunechablis">garde, température et gastronomie</h6>
                                                                                <p> Blancs<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune, certains se gardent 5 ans<br/>
                                                                                    Accords mets/vin : desserts aux fruits
                                                                                </p>
                                                                                <h6 class="jaunechablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat de Mireval<br/>
                                                                                    &middot; Appellation principale : Muscat de Mireval<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 288 ha.<br/>
                                                                                    &middot; Production : vin de liqueur et vin doux naturel blanc<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains<br/>
                                                                                    &middot; Rendement moyen : maximum 25 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 22 ============================-->

                                                <!-- ======================= TEXTE 23 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet23" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat de Saint-Jean de Minervois</h5>
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
                                                                                <h6 class="jaunechablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat de Saint-Jean de Minervois est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément sur la commune de Saint-Jean de Minervois dans l’Hérault.
                                                                                </p>
                                                                                <h6 class="jaunechablis">caractère :</h6>
                                                                                <p> Blancs<br/>
                                                                                    Bouche : douce<br/>
                                                                                    Robe : viel or<br/>
                                                                                    Arômes : fruits exotiques
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunechablis">garde, température et gastronomie</h6>
                                                                                <p> Blancs<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : desserts, sorbets
                                                                                </p>
                                                                                <h6 class="jaunechablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat de Saint-Jean de Minervois<br/>
                                                                                    &middot; Appellation principale : Muscat de Saint-Jean de Minervois<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 188 ha.<br/>
                                                                                    &middot; Production : vin de liqueur et vin doux naturel blanc<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains<br/>
                                                                                    &middot; Rendement moyen : maximum 30 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 23 ============================-->

                                                <!-- ======================= TEXTE 24 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet24" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Rivesaltes</h5>
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
                                                                                    Le Rivesaltes est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, près de la commune Rivesaltes. Les vins de ceHe appellaIon sont blancs et rouges.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges (dits grenat) :<br/>
                                                                                    Robe : rubis soutenu<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Les blancs (dits ambrés) :<br/>
                                                                                    Robe : ambrée<br/>
                                                                                    Arômes : fruits secs, fruits confits
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 15 °C<br/>
                                                                                    Temps de garde : peut se garder<br/>
                                                                                    Accords mets/vin : desserts au chocolat<br/><br/>

                                                                                    Les blancs (dits ambrés) :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : plus de 30 ans<br/>
                                                                                    Accords mets/vin : foie grasé
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Rivesaltes<br/>
                                                                                    &middot; Appellation principale : Rivesaltes<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 15 600 ha.<br/>
                                                                                    &middot; Production : vin doux naturels rouges et blancs<br/>
                                                                                    &middot; Production (hectolitres) : 350 000 hl.<br/>
                                                                                    &middot; Cépages dominants : grenache, grenache blanc, macabéo, tourbat, grenache gris
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
                                                <!-- ===================== FIN TEXTE 24 ============================-->

                                                <!-- ======================= TEXTE 25 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet25" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat de Rivesaltes</h5>
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
                                                                                <h6 class="jaunechablis">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat de Rivesaltes est un vin doux naturel AOC produit dans le Vignoble du Languedoc-Roussillon, et plus précisément dans 9 communes des Pyrénées-Orientales.
                                                                                </p>
                                                                                <h6 class="jaunechablis">caractère :</h6>
                                                                                <p> Blancs<br/>
                                                                                    Bouche : puissante et concentrée<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fruits exotiques,fruits murs, agrumes, rose
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunechablis">garde, température et gastronomie</h6>
                                                                                <p> Blancs<br/>
                                                                                    Température de service : entre 6 et 7 °C<br/>
                                                                                    Accords mets/vin : foie gras, apéritifs, desserts
                                                                                </p>
                                                                                <h6 class="jaunechablis">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat de Rivesaltes<br/>
                                                                                    &middot; Appellation principale : Muscat de Rivesaltes<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 5 342 ha.<br/>
                                                                                    &middot; Production : vin doux naturel blanc<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains et muscat d’Alexandrie<br/>
                                                                                    &middot; Rendement moyen : maximum 30 à 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 25 ============================-->

                                                <!-- ======================= TEXTE 26 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet26" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Saint-Chinian</h5>
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
                                                                                    Le Saint-Chinian est un vin AOC produit dans le Vignoble du Languedoc-Roussillon, dans les départements de l’Hérault, autour de la commune de Saint-Chinian. Les vins de ceJe appellation sont majoritairement rouges et rosés mais peuvent être blancs.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et profonde<br/>
                                                                                    Robe : rouge profond<br/>
                                                                                    Arômes : fruits rouges, cacao, épices<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : puissante<br/>
                                                                                    Robe : pétale de rose<br/>
                                                                                    Arômes : fruits rouges, bonbon anglais<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ample et ronde<br/>
                                                                                    Robe : jaune soutenu<br/>
                                                                                    Arômes : ananas, agrumes, fruits à chair blanche, vanille
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : plus de 5 ans<br/>
                                                                                    Accords mets/vin : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : charcuterie<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : à boire jeune<br/>
                                                                                    Accords mets/vin : poissons
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Saint-Chinian<br/>
                                                                                    &middot; Appellation principale : Saint-Chinian<br/>
                                                                                    &middot; Vignoble : du Languedoc-Roussillon<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Superficie plantée : 3 261 ha.<br/>
                                                                                    &middot; Production : rouges et rosés (99 %), blancs (1 %)<br/>
                                                                                    &middot; Production (hectolitres) : 138 218 hl.<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, carignan
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
                                                <!-- ===================== FIN TEXTE 26 ============================-->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
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
                @include('layouts.4emeniveau.languedoc.droite')
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
                            <h3 class="gras mapecran">Vins du Languedoc-Roussillon</h3>
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
                        <div id="languedocroussillonmapmodal"></div>
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
@include('layouts.4emeniveau.languedoc.appelsjslanguedoc')

@include('layouts.4emeniveau.footer')
