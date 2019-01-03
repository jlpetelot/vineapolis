@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.jura.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins du Jura</h3>
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
                            <img src="{{ asset('img/jura.jpg') }}" alt="Saumur">
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
                                                        Vignobles du Jura
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Côtes-du-Jura
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        L'Arbois
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME ONGLET -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Château-Chalon
                                                    </a>
                                                </li>
                                                <!-- ../4ÈME ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        L'Etoile
                                                    </a>
                                                </li>
                                                <!-- ../5ÈME ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet6" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Crémant du Jura
                                                    </a>
                                                </li>
                                                <!-- ../5ÈME ONGLET -->

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
                                                                                <h5>Vignobles du Jura</h5>
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
                                                                                <p>
                                                                                    Le vignoble du Jura se situe dans le Jura en Franche-Comté. Il s’étends sur 70 km de long pour 6 km de large.
                                                                                    Comprenant environ 2000 hectares, il est l’un des plus peMts vignoble de France.
                                                                                    Le climat y est tempéré conMnental avec influence montagnarde.
                                                                                    Le sol est de type marno-calcaire.
                                                                                </p>
                                                                                <h6 class="couleurjura">appellations géographique :</h6>
                                                                                <p>
                                                                                    &middot; Château-Chalon<br/>
                                                                                    &middot; Arbois<br/>
                                                                                    &middot; L’Etoile<br/>
                                                                                    &middot; Côtes-du-Jura
                                                                                </p>
                                                                                <h6 class="couleurjura">appellations produit :</h6>
                                                                                <p>
                                                                                    &middot; Crémant du Jura<br/>
                                                                                    &middot; Macvin du Jura
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="couleurjura">En 2010, la production est de 100 000 hectolitres avec :</h6>
                                                                                <p>
                                                                                    &middot; 25 % de rouges et rosés (cépages poulsard, trousseau ainsi que pinot noir (principalement en assemblage)a<br/>
                                                                                    &middot; 50 % de blancs dont le vin jaune (cépage chardonnay et savagnin)a<br/>
                                                                                    &middot; 20 % de Crémant du Jura<br/>
                                                                                    &middot; 3 % de macvin (savagnin, chardonnay et pinot noir)<br/>
                                                                                    &middot; 2 % de vin de paille
                                                                                </p>
                                                                                <p>
                                                                                    Le savagnin est le cépage phare des vins du Jura, très ancien et qualitaMf, il est appelé « Traminer » dans le
                                                                                    pays germanique).
                                                                                    En vendange tardive et après une vinificaMon de 6 ans, il donne le très réputé vin jaune, vendu dans les
                                                                                    bouteilles de 62 cl appelés « Clavelin. »
                                                                                </p>
                                                                                <h6 class="couleurjura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Superficie plantées : 1 814 hectares en 2008<br/>
                                                                                    &middot; Hectolitres de vins produit / an : 78 000 hectolitres en 2008<br/>
                                                                                    &middot; Vins produits : rouges, blancs, rosés, crémant, jaune et de paille<br/>
                                                                                    &middot; Cépages dominants : poulsard, trousseau et pinot noir pour les rouges et rosés, chardonnay et savagnin
                                                                                    pour les blancs.
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
                                                <!-- ===================== TEXTE 1 ============================-->

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
                                                                                <h5>Côtes du Jura</h5>
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
                                                                                    Le Côtes du Jura est un vin AOC produit sur les 105 communes du vignoble du Jura. Elle s’étends
                                                                                    sur tout le vignoble, du nord au sud. Le Côtes-du-Jura peut produire tous les types de vins : blanc, rouge, rosé, jaune ou de paille. C’est l’appellation la plus étendue du vignoble du Jura. En blanc et jaune, le cépage savagnin y est
                                                                                    privilégié, le poulsard et le trousseau pour les rouges.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et vive<br/>
                                                                                    Robe : rouge violacée<br/>
                                                                                    Arômes : fruits rouges et noir, cuir, sous-bois, humus<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde<br/>
                                                                                    Robe : jaune, reflets or<br/>
                                                                                    Arômes : amande, noix, nèfle<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Bouche : équilibrée et soyeuse<br/>
                                                                                    Robe : jaune, or ambré<br/>
                                                                                    Arômes : noix, abricot, coing, amande, épices<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Bouche : équilibrée<br/>
                                                                                    Robe : or paille<br/>
                                                                                    Arômes : fruits de la passion, fruits exoQques, abricot
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temps de garde : 2 ans minimum<br/>
                                                                                    Accords mets/vin : gibiers, volailles rôties<br/>
                                                                                    Température de service : 16 °C<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Temps de garde : ce n’est pas un vin de garde<br/>
                                                                                    Accords mets/vin : fromages comme le Comté<br/>
                                                                                    Température de service : 13 °C<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Temps de garde : très longues, jusqu’à 100 ans<br/>
                                                                                    Accords mets/vin : poulardes de Bresse, vieux comté<br/>
                                                                                    Temperature de service : 16 °C<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Temps de garde : jusqu’à 20 ans selon les millésimes<br/>
                                                                                    Accords mets/vin : tartes aux fruits, desserts à base de fruits<br/>
                                                                                    Température de service : entre 7 et 8 °C
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-du-Jura<br/>
                                                                                    &middot; Appellation principale : Côtes-du-Jura<br/>
                                                                                    &middot; Vignoble : Jura<br/>
                                                                                    &middot; Sol : marno-calcaire<br/>
                                                                                    &middot; Climat : tempéré continental à tendance montagnarde<br/>
                                                                                    &middot; Production : blancs, rouges, rosés, jaunes, de paille<br/>
                                                                                    &middot; Cépages dominants : savagnin, chardonnay, poulsard, trousseau<br/>
                                                                                    &middot; Superficie en production : 640 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 20 540 hl environ<br/>
                                                                                    &middot; Rendement moyen : 55 à 66 hl/ha. pour les rouges, 60 à 72 hl/ha. pour les blancs, 20 hl/ha. pour
                                                                                    &middot; les vins de paille
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
                                                                                <h5>L’Arbois</h5>
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
                                                                                <h6 class="couleurjura">Présentation</h6>
                                                                                <p>
                                                                                    L’Arbois est un vin AOC produit sur les 12 communes du vignoble du Jura : Abergement-le-grand,
                                                                                    Arbois, Les Arsures, Les Planches-près-Arbois, Mathenay, Mesnay, Molamboz, MonOgny-lès-
                                                                                    Arsures, Pupillin, St-Cyr-Montmalin, Vadans et VillePe-lès-Arbois.Le vin d’Arbois peut-être blancs, rouges, jaune et de paille.
                                                                                </p>
                                                                                <p>
                                                                                    Cépages des blancs : Chardonnay, Savagnin, Pinot gris (plus rare)<br/>
                                                                                    Cépages des rouges : Trousseau, Poulsard<br/>
                                                                                    Cépages des jaunes : Savagnin
                                                                                </p>
                                                                                <h6 class="couleurjura">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : légère et parfumé<br/>
                                                                                    Robe : claire presque rosée<br/>
                                                                                    Arômes : fruits rouges<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : gras, opulent, dense<br/>
                                                                                    Robe : or<br/>
                                                                                    Arômes : fruits à chaire blanche, noix<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Bouche : équilibrée et soyeuse<br/>
                                                                                    Robe : jaune, or ambré<br/>
                                                                                    Arômes : noix, pain grillé, noisePe, muscade, acacia<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Bouche : dense et structurée<br/>
                                                                                    Robe : or jaune<br/>
                                                                                    Arômes : caramel, fruits confits, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="couleurjura">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Temps de garde : 3 à 5 ans<br/>
                                                                                    Accords mets/vin : viandes rouges en sauce<br/>
                                                                                    Température de service :entre 14 et 16 °C<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vin : fromages comme le Comté<br/>
                                                                                    Température de service : 11 °C<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Temps de garde : très longues, jusqu’à 100 ans<br/>
                                                                                    Accords mets/vin : cuisine exoOque, viandes et poisson à la crème, champignons, comté, mont
                                                                                    d’or, fromages persillés<br/>
                                                                                    Temperature de service : 14 °C<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Temps de garde : jusqu’à 20 ans selon les millésimes<br/>
                                                                                    Accords mets/vin : Foie gras, desserts à base de fruits, fromages à pâte persillée<br/>
                                                                                    Température de service : entre 7 et 8 °C
                                                                                </p>
                                                                                <h6 class="couleurjura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Arbois<br/>
                                                                                    &middot; Appellation principale : Arbois<br/>
                                                                                    &middot; Vignoble : Jura<br/>
                                                                                    &middot; Sol : marno-calcaire<br/>
                                                                                    &middot; Climat : tempéré continental à tendance montagnarde<br/>
                                                                                    &middot; Production : blancs, rouges, rosés, jaunes, de paille<br/>
                                                                                    &middot; Cépages dominants : savagnin, chardonnay, poulsard, trousseau<br/>
                                                                                    &middot; Superficie en production : 800 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 30 000 hl environ<br/>
                                                                                    &middot; Rendement moyen : 55 à 66 hl/ha. pour les rouges, 60 à 72 hl/ha. pour les blancs, 20 hl/ha. pour les vins de paille
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
                                                <!-- ===================== TEXTE 3 ============================-->

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
                                                                                <h5>Château-Chalon</h5>
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
                                                                                <h6 class="couleurjura">Présentation</h6>
                                                                                <p>
                                                                                    Le Château-Chalon est un vin jaune AOC produit sur les communes de Ménétru-le-Vignoble,
                                                                                    Comblants, Château-Chalon et Nevy-sur-Seille.
                                                                                    C’est un vin à cépage savagnin (appelé « traminer » dans les pays germaniques).
                                                                                    Le vin jaune possède un procédé de fabrication spécial, en effetn il doit être conservé au minimum 6
                                                                                    ans et 3 mois en fut de chêne, sans soutirage et sans ouillage. Il est ensuite mis dans des bouteilles
                                                                                    de 62 cl (car c’est le volume obtenu avec 1 litre après 6 années de vieillissement) appelées
                                                                                    « clavelin? » Cette contenance est unique dans l’Union Européenne et a dû obtenir une
                                                                                    autorisation spéciale par dérogation du Parlement Européen.
                                                                                </p>
                                                                                <h6 class="couleurjura">caractère :</h6>
                                                                                <p> Bouche : massive et saisissante<br/>
                                                                                    Robe : jaune dorée, brillante<br/>
                                                                                    Arômes : noix, fruits secs, épices, fruits à chair blanche
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="couleurjura">garde, température et gastronomie</h6>
                                                                                <p> Accords mets/vin : cuisine exotique, viandes et poisson à la crème, champignons, comté, mont-d’or, fromages persillés
                                                                                </p>
                                                                                <h6 class="couleurjura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Château-Chalon<br/>
                                                                                    &middot; Appellation principale : Château-Chalon<br/>
                                                                                    &middot; Vignoble : Jura<br/>
                                                                                    &middot; Sol : marno-calcaire<br/>
                                                                                    &middot; Climat : tempéré continental à tendance montagnarde<br/>
                                                                                    &middot; Production : jaunes 100%<br/>
                                                                                    &middot; Cépages dominants : savagnin<br/>
                                                                                    &middot; Superficie en production : 48 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 1 620 hl environ<br/>
                                                                                    &middot; Rendement moyen : 50 hl/ha
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
                                                <!-- ===================== TEXTE 3 ============================-->

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
                                                                                <h5>L’Etoile</h5>
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
                                                                                <h6 class="couleurjura">Présentation</h6>
                                                                                <p>
                                                                                    L’Etoile est un vin AOC produit sur 4 communes du vignoble du Jura : L’Etoile, Plainoiseau,
                                                                                    Quintigny et Saint-Didier.
                                                                                    Son nom provient des 5 collines qui entourent le village et qui forment une étoile.
                                                                                    L’appellation l’Etoile peut-être uIlisé pour des vins blancs, jaune ou de paille.
                                                                                </p>
                                                                                <h6 class="couleurjura">caractère :</h6>
                                                                                <p>
                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde et vivace<br/>
                                                                                    Robe : or jaune soutenu<br/>
                                                                                    Arômes : acacia, tilleul, miel<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Bouche : franche et persistante<br/>
                                                                                    Robe : or limpide<br/>
                                                                                    Arômes : fruits secs, noix, vanille<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Bouche : dense et équilibrée<br/>
                                                                                    Robe : tuilée<br/>
                                                                                    Arômes : coing, fruits confits, prune
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="couleurjura">garde, température et gastronomie</h6>
                                                                                <p> Les blancs :<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vin : fromages comme le Comté<br/>
                                                                                    Température de service : 11 °C<br/><br/>

                                                                                    Les Jaunes :<br/>
                                                                                    Temps de garde : très longues, jusqu’à 100 ans<br/>
                                                                                    Accords mets/vin : excellent avec un Comté<br/>
                                                                                    Temperature de service : ambiante<br/><br/>

                                                                                    Vin de paille :<br/>
                                                                                    Temps de garde : jusqu’à 20 ans selon les millésimes<br/>
                                                                                    Accords mets/vin : Foie gras, desserts à base de fruits, fromages à pâte persillée:<br/>
                                                                                    Température de service : entre 7 et 8 °C
                                                                                </p>
                                                                                <h6 class="couleurjura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : L’Etoile<br/>
                                                                                    &middot; Appellation principale : L’Etoile<br/>
                                                                                    &middot; Vignoble : Jura<br/>
                                                                                    &middot; Sol : marno-calcaire<br/>
                                                                                    &middot; Climat : tempéré continental à tendance montagnarde<br/>
                                                                                    &middot; Production : blancs, jaunes, vins de paille<br/>
                                                                                    &middot; Cépages dominants : savagnin, chardonnay<br/>
                                                                                    &middot; Superficie en production : 56 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 2 345 hl environ<br/>
                                                                                    &middot; Rendement moyen : 60 à 72 hl/ha. pour les blancs, 20 hl/ha. pour les vins de paille
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
                                                <!-- ===================== TEXTE 5 ============================-->

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
                                                                                <h5>Crémant du Jura</h5>
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
                                                                                <h6 class="rosejura">Présentation</h6>
                                                                                <p>
                                                                                    Le Crémant du Jura est un vin effervescent AOC, blanc ou rosé.
                                                                                    Les cépages autorisés pour sa producIon sont le Poulsard, le Pinot Noir, le Trousseau, le Chardonnay et le Savagnin. Le pinot noir et le Chardonnay sont toutefois les plus uIlisés.
                                                                                </p>
                                                                                <h6 class="rosejura">caractère :</h6>
                                                                                <p>
                                                                                    Les blancs :<br/>
                                                                                    Bouche : fin, délicat, bulles fines<br/>
                                                                                    Robe : or soutenu, reflets dorés<br/>
                                                                                    Arômes : fruits à chair blanches, poire, pommes, acacia<br/><br/>

                                                                                    Les Rosés :<br/>
                                                                                    Bouche : délicate<br/>
                                                                                    Robe : rose soutenue<br/>
                                                                                    Arômes : fruits rouges acidulés, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rosejura">garde, température et gastronomie</h6>
                                                                                <p> Les blancs :<br/>
                                                                                    Temps de garde : maximum 5 ans<br/>
                                                                                    Accords mets/vin : poissons poilés, apériIf<br/>
                                                                                    Température de service : 8 °C<br/>

                                                                                    Les Rosés :<br/>
                                                                                    Accords mets/vin : apéritif<br/>
                                                                                    Température de service : 8 °C
                                                                                </p>
                                                                                <h6 class="rosejura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Crémant du Jura<br/>
                                                                                    &middot; Appellation principale : Crémant du Jura<br/>
                                                                                    &middot; Vignoble : Jura<br/>
                                                                                    &middot; Sol : marno-calcaire<br/>
                                                                                    &middot; Climat : tempéré continental à tendance montagnarde<br/>
                                                                                    &middot; Production : : blancs, rouges, rosés, jaunes, vins de paille<br/>
                                                                                    &middot; Cépages dominants : savagnin, chardonnay, poulsard, trousseau<br/>
                                                                                    &middot; Superficie en production : 56 ha. environ<br/>
                                                                                    &middot; Production (en hectolitres) : 17 500 hl environ<br/>
                                                                                    &middot; Rendement moyen : maximum 74 à 80 hl/ha.
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
                                                <!-- ===================== TEXTE 6 ============================-->

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
                @include('layouts.4emeniveau.jura.droite')
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
                            <h3 class="gras mapecran">Vins du Jura</h3>
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
                        <div id="juramapmodal"></div>
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
@include('layouts.4emeniveau.jura.appelsjsjura')

@include('layouts.4emeniveau.footer')
