@include('layouts.header')

@include('layouts.2emeniveau.menu')

        <!-- ========================================= PAGE 2ND NIVEAU  ==================================-->
<div id="pagehome"><!-- page1erniveau -->
    <div class="container"><!-- Container Général -->
        <div class="row"><!-- Row -->

            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.2emeniveau.rhoneseptentrional.gauche')
                    <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CARTE ================================-->
            <div id="cartes"><!-- cartebourgogne -->

                <div id="textecartes">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                    <div id="titremap">
                        <p>Côtes du Rhône Septentrional.</p>
                    </div>
                </div>
                <div id="cotesdurhonesmap"></div>

                <!-- =============== LE TEXTE 1 ==============-->
                <section id="marque1"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!-- row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Vignoble de la Vallée du Rhône</h3>
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
                                    <h6></h6>
                                    <p>Le vignoble de la Vallée du Rhône s’étend sur 1317 communes dans les départements du Rhône, de la Loire, de l’Ardèche, du Gard, de la Drôme et du Vaucluse.
                                    </p>
                                    <p>En volume de vin produit, c’est 2ème plus grand vignoble de France après le vignoble Bordelais.</p>
                                    <p>Le Vignoble de la Vallée du Rhône produit 30 A.O.C. :<br/>
                                        Beaumes de Venise, Château-Grillet, Châteauneuf-du-Pape, Châtillon-en-Diois, Clairette de Bellegarde, Clairette de Die, Condireu, Cornas, Costières de Nîmes, Côte Rôtie, Coteaux de Die, Coteaux du Lyonnais, Côtes du Rhône, Côtes du Rhône Villages, Côtes du Vivarais, Crémant de Die, Crozes-Hermitage, Gigondas, Grignan-les-Adhémar, Hermitage, Lirac, Luberon, Muscat de Beaumes-de-Venise, Ratseau, Saint-Joseph, Saint-Péray, Tavel, Vacqueyras, Ventoux, Vinsobres.</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Le vignoble de la Vallée du Rhône en quelques chiffres :</h6>
                                    <p> &middot; Superficie totale : 79 045 ha.<br/>
                                        &middot; Hectolitres de vins produit / an : 3.5 millions d’hectolitres (soit 465 millions de bouteilles)<br/>
                                        &middot; Vins produits : rouges, rosés, blancs, mousseux et vins doux naturels<br/>
                                        &middot; Cépages dominants : syrah, grenache, gamay, mourvèdre, viognier, roussanne, marsanne, grenache blanc, bourboulenc, chardonnay<br/>
                                        &middot; Climat : tempéré méditerranéen à tendance montagnarde et continentale<br/>
                                        &middot; Sol : calcaire et granit</p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 1 ==============-->

                <!-- =============== LE TEXTE 2 ==============-->
                <section id="marque2"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Château-grillé</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>Le Château-grillé est un vin blanc produit dans le Vignoble de la Vallée du Rhône sur une partie des communes de Vérin et de Saint-Michel-sur-Rhône situées dans le département de la Loire. Il a la particularité de n’être produit que par un seul domaine.
                                    </p>
                                    <h6>CARACTERE :</h6>
                                    <p>
                                        Bouche : puissante et ronde<br/>
                                        Robe : dorée, reflets verts<br/>
                                        Arômes : fruits à chair blanche, agrumes, fruits exotiques, violette, camomille
                                    </p>
                                    <h6>GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 12°C<br/>
                                        Temps de garde : plus de 10 ans<br/>
                                        Accords mets/vins : Coquilles saint-jacques
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p><span class="rouge">Superficie de production : </span><br/>
                                        &middot; Désignation : Château-grillet<br/>
                                        &middot; Appellation principale : Château-grillet<br/>
                                        &middot; Vignoble : Vallée du Rhône<br/>
                                        &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                        &middot; Production : 90 hl. (l’équivalent de 10 000 bouteilles)<br/>
                                        &middot; Superficie totale : 3.5 ha.<br/>
                                        &middot; Vins produits : blancs<br/>
                                        &middot; Cépages dominants : viognier<br/>
                                        &middot; Rendement moyen : 37 à 41 hl./ha.<br/>
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 2 ==============-->

                <!-- =============== LE TEXTE 3 ==============-->
                <section id="marque3"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Châtillon-en-Diois</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>Le Châtillon-en-Diois est un vin rouge, rosé ou blanc, produit dans le Vignoble de la Vallée du Rhône dans la Drôme.
                                    </p>
                                    <h6 class="rose">CARACTERE :</h6>
                                    <p> Rouges :<br/>
                                        Bouche : ronde et oppulente<br/>
                                        Robe : pourpre soutenu, reflets violets<br/>
                                        Arômes : fruits rouges et noirs, épices<br/><br/>

                                        Rosés :<br/>
                                        Bouche : ronde et délicate<br/>
                                        Robe : rouge pâle<br/>
                                        Arômes : rose, violette, fruits exotiques (banane, litchi)<br/><br/>

                                        Blancs :<br/>
                                        Bouche : ronde et rafraichissante<br/>
                                        Robe : jaune paille<br/>
                                        Arômes : fruits à chair blanche, vanille, épices
                                    </p>
                                    <h6 class="rose">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Rouges :<br/>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 8 ans<br/>
                                        Accords mets/vins : agneau grillé<br/><br/>

                                        Rosés :<br/>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : grillades<br/><br/>

                                        Blancs :<br/>
                                        Température de service : 13 °C<br/>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : poissons, volailles, fromages de chèvre
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="rose">fiche d’identité :</h6>
                                    &middot; Désignation : Châtillon-en-Diois<br/>
                                    &middot; Appellation principale : Châtillon-en-Diois<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence montagnarde<br/>
                                    &middot; Production : 4000 hl.<br/>
                                    &middot; Vins produits : rouges et rosés (75 %) et blancs (25 %)<br/>
                                    &middot; Cépages dominants : gamay, aligoté et chardonnay<br/>
                                    &middot; Rendement moyen : 50 à 60 hl//ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 3 ==============-->

                <!-- =============== LE TEXTE 4 ==============-->
                <section id="marque4"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Clairette-de-Die</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>Le Clairette-de-Die est un vin blanc effervescent produit sur le Vignoble de la Vallée du Rhône et plus précisément dans la Drôme.
                                    </p>
                                    <h6 class="jaune">CARACTERE :</h6>
                                    <p>
                                        Bouche : fraîche et gourmande<br/>
                                        Robe : jaune pâle, reflets verts<br/>
                                        Arômes : fruits à chair blanche, rose, églantine, miel
                                    </p>
                                    <h6 class="jaune">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 8°C<br/>
                                        Temps de garde : 2 ans<br/>
                                        Accords mets/vins : apéritif
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="jaune">fiche d’identité :</h6>
                                    &middot; Désignation : Clairette-de-Die<br/>
                                    &middot; Appellation principale : Clairette-de-Die<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence montagnarde<br/>
                                    &middot; Production : 90 hl. (l’équivalent de 10 000 bouteilles)<br/>
                                    &middot; Superficie totale : 1 232 ha.<br/>
                                    &middot; Vins produits : blancs effervescents<br/>
                                    &middot; Cépages dominants : clairette, muscat à petits grains<br/>
                                    &middot; Rendement moyen : 60 à 70 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 4 ==============-->

                <!-- =============== LE TEXTE 5 ==============-->
                <section id="marque5"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Condrieu</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>Le Condrieu est un vin blanc produit dans le Vignoble de la Vallée du Rhône autour de la commune de Condrieu.
                                    </p>
                                    <h6 class="jaune">CARACTERE :</h6>
                                    <p>
                                        Bouche : fine et minérale<br/>
                                        Robe : or reflets dorés<br/>
                                        Arômes : fruits à chair blanche, violette
                                    </p>
                                    <h6 class="jaune">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 12°C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : foie gras
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="jaune">fiche d’identité :</h6>
                                    &middot; Désignation : Condrieu<br/>
                                    &middot; Appellation principale : Condrieu<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                    &middot; Production : 4 600 hl.<br/>
                                    &middot; Superficie totale : 168 ha.<br/>
                                    &middot; Vins produits : blancs<br/>
                                    &middot; Cépages dominants : viognier<br/>
                                    &middot; Rendement moyen : 41 à 46 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 5 ==============-->

                <!-- =============== LE TEXTE 6 ==============-->
                <section id="marque6"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Côte-Rôtie</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Côte-Rôtie est un vin rouge produit dans le Vignoble de la Vallée du Rhône sur les communes de Saint-Cyr-sur-le-Rhône, Ampuis et de Tupin-et-Semons, dans le département du Rhône. Il s’agit de l’un des crus les plus prestigieux du Vignoble.
                                    </p>
                                    <h6>CARACTERE :</h6>
                                    <p>
                                        Bouche : ronde et profonde<br/>
                                        Robe : rouge noire<br/>
                                        Arômes : fruits rouges et noirs, épices, poivre, violette, réglisse, cannelle
                                    </p>
                                    <h6>GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 16°C<br/>
                                        Temps de garde : plus de 15 ans<br/>
                                        Accords mets/vins : Gibiers
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    &middot; Désignation : Côte-Rôtie<br/>
                                    &middot; Appellation principale : Condrieu<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                    &middot; Production : 6 795 hl.<br/>
                                    &middot; Superficie totale : 229 ha.<br/>
                                    &middot; Vins produits : rouges<br/>
                                    &middot; Cépages dominants : syrah<br/>
                                    &middot; Rendement moyen : 40 à 46 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 6 ==============-->

                <!-- =============== LE TEXTE 7 ==============-->
                <section id="marque7"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Coteaux-de-Die</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Coteaux-de-die est un vin blanc produit dans le Vignoble de la Vallée du Rhône et plus précisément dans la Drôme.
                                    </p>
                                    <h6 class="jaune">CARACTERE :</h6>
                                    <p>
                                        Bouche : fine et élégante<br/>
                                        Robe : or pâle reflets verts<br/>
                                        Arômes : fruits à chair blanche, fleurs blanches
                                    </p>
                                    <h6 class="jaune">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 11°C<br/>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : poissons
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="jaune">fiche d’identité :</h6>
                                    &middot; Désignation : Coteaux-de-Die<br/>
                                    &middot; Appellation principale : Coteaux-de-Die<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence montagnarde<br/>
                                    &middot; Production : 147 hl.<br/>
                                    &middot; Superficie totale : 3 ha.<br/>
                                    &middot; Vins produits : blancs<br/>
                                    &middot; Cépages dominants : clairette<br/>
                                    &middot; Rendement moyen : 50 à 60 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 7 ==============-->

                <!-- =============== LE TEXTE 8 ==============-->
                <section id="marque8"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Coteaux-du-Lyonnais</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Coteaux-du-Lyonnais est un vin rouge, rosé ou blanc, produit dans le département du Rhône) l’ouest de Lyon.
                                    </p>
                                    <h6 class="rose">CARACTERE :</h6>
                                    <p> Rouges :<br/>
                                        Bouche : ronde et fine<br/>
                                        Robe : rouge brillante<br/>
                                        Arômes : fruits rouges et noirs, épices, réglisse<br/><br/>

                                        Rosés :<br/>
                                        Bouche : ronde et fraiche<br/>
                                        Robe : rose pâle<br/>
                                        Arômes : fruits rouges<br/><br/>

                                        Blancs :<br/>
                                        Bouche : ronde et délicate<br/>
                                        Robe : jaune pâle, reflets verts<br/>
                                        Arômes : fruits à chair blanche, agrumes, miel
                                    </p>
                                    <h6 class="rose">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Rouges :<br/>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 6 ans<br/>
                                        Accords mets/vins : saucisson de Lyon<br/><br/>

                                        Rosés :<br/>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : apéritif<br/><br/>

                                        Blancs :<br/>
                                        Température de service : 10 °C<br/>
                                        Accords mets/vins : poissons en sauce
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="rose">fiche d’identité :</h6>
                                    &middot; Désignation : Coteaux-du-Lyonnais<br/>
                                    &middot; Appellation principale : Coteaux-du-Lyonnais<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                    &middot; Production : 7 600 hl.<br/>
                                    &middot; Superficie plantée : 370 ha..<br/>
                                    &middot; Vins produits : rouges, quelques rosés et blancs<br/>
                                    &middot; Cépages dominants : gamay et chardonnay<br/>
                                    &middot; Rendement moyen : 60 à 69 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 8 ==============-->

                <!-- =============== LE TEXTE 9 ==============-->
                <section id="marque9"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Crémant de Die</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Crémant de Die est un vin effervescent (ou mousseux) produit dans le Vignoble de la vallée du Rhône.
                                    </p>
                                    <h6 class="rose">CARACTERE :</h6>
                                    <p> Bouche : mousse compacte et fine<br/>
                                        Robe : or pâle<br/>
                                        Arômes : fruits secs, fruits à chair blanche
                                    </p>
                                    <h6 class="rose">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Température de service : 8 °C<br/>
                                        Temps de garde : 3 ans<br/>
                                        Accords mets/vins : volaille pochée, poisson, apéritif
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="rose">fiche d’identité :</h6>
                                    &middot; Désignation : Crémant de Die<br/>
                                    &middot; Appellation principale : Crémant de Die<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence montagnarde<br/>
                                    &middot; Production (en hectolitres) : 800 000 cols<br/>
                                    &middot; Superficie totale : 400 ha.<br/>
                                    &middot; Vins produits : rouges et vins doux naturels<br/>
                                    &middot; Cépages dominants : clairette et aligoté<br/>
                                    &middot; Rendement moyen : 60 à 70 hl/ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 9 ==============-->

                <!-- =============== LE TEXTE 10 ==============-->
                <section id="marque10"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Crozes-Hermitages</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Crozes-Hermitages est un vin rouge ou blanc produit dans le Vignoble de la Vallée du Rhône sur 10 communes situées autour de Crozes-Hermitage dans le département de la Drôme.
                                    </p>
                                    <h6>CARACTERE :</h6>
                                    <p> Rouges :<br/>
                                        Bouche : ronde et gourmande<br/>
                                        Robe : grenat soutenu<br/>
                                        Arômes : fruits rouges et noirs, épices, violette, cacao<br/><br/>

                                        Blancs :<br/>
                                        Bouche : dense et généreuse<br/>
                                        Robe : jaune pâle reflets verts<br/>
                                        Arômes : agrumes, fruits à chair blanche et fruits exotiques
                                    </p>
                                    <h6>GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Rouges :<br/>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : volailles<br/><br/>

                                        Blancs :<br/>
                                        Température de service : 10°C<br/>
                                        Accords mets/vins : poissons
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>fiche d’identité :</h6>
                                    <p>
                                    &middot; Désignation : Crozes-Hermitages<br/>
                                    &middot; Appellation principale : Crozes-Hermitages<br/>
                                    &middot; Vignoble : Vallée du Rhône<br/>
                                    &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                    &middot; Production : 61 022 hl.<br/>
                                    &middot; Vins produits : rouges (90 %) et blancs (10 %)<br/>
                                    &middot; Cépages dominants : syrah, marsanne, roussanne<br/>
                                    &middot; Rendement moyen : 45 à 50 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 10 ==============-->

                <!-- =============== LE TEXTE 11 ==============-->
                <section id="marque11"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Hermitage</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Hermitage est un vin rouge ou blanc produit dans le Vignoble de la Vallée du Rhône sur 10 communes situées autour de Crozes-Hermitage dans le département de la Drôme.
                                    </p>
                                    <h6 class="jaune">CARACTERE :</h6>
                                    <p> Rouges :<br/>
                                        Bouche : ronde<br/>
                                        Robe : rubis intense<br/>
                                        Arômes : fruits rouges, fruits cuits, épices, sous-bois, tabac, musc, réglisse<br/><br/>

                                        Vin de paille :<br/>
                                        Arômes : miel, fruits confits<br/><br/>

                                        Blancs :<br/>
                                        Bouche : ronde et dense<br/>
                                        Robe : or pâle<br/>
                                        Arômes : aubépine, acacia, fruits confits, amande, miel
                                    </p>
                                    <h6 class="jaune">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Rouges :<br/>
                                        Température de service : 16 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : gibiers<br/><br/>

                                        Vin de paille :<br/>
                                        Temps de garde : plus de 50 ans<br/><br/>

                                        Blancs :<br/>
                                        Température de service :13 °C<br/>
                                        Temps de garde : 10 ans<br/>
                                        Accords mets/vins : poularde de bresse
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="jaune">fiche d’identité :</h6>
                                    <p>
                                        &middot; Désignation : Hermitage<br/>
                                        &middot; Appellation principale : Hermitage<br/>
                                        &middot; Vignoble : Vallée du Rhône<br/>
                                        &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                        &middot; Production : 4 783 hl.<br/>
                                        &middot; Superficie plantée : 130 ha.<br/>
                                        &middot; Vins produits : rouges, blancs et vins de paille<br/>
                                        &middot; Cépages dominants : roussanne, syrah, marsanne<br/>
                                        &middot; Rendement moyen : 40 à 46 hl/ha. – 15 hl. /ha. en vin de paille
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 11 ==============-->

                <!-- =============== LE TEXTE 12 ==============-->
                <section id="marque12"><!-- section -->
                    <div class="commentaires3"><!-- commentaires3 -->
                        <div class="row"><!--row -->
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <h3>Saint-Joseph</h3>
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
                            </div><!-- ../col-md-12 -->
                        </div><!-- ../row -->

                        <div class="row"><!--row -->
                            <div class="col-md-12"><!-- col-md-12 -->
                                <div class="col-md-6">
                                    <h6></h6>
                                    <p>
                                        Le Saint-Joseph est un vin rouge ou blanc produit dans le Vignoble de la Vallée du Rhône sur les départements de l’Ardèche et de la Loire.
                                    </p>
                                    <h6 class="jaune">CARACTERE :</h6>
                                    <p> Rouges :<br/>
                                        Bouche : profonde et puissante<br/>
                                        Robe : rouge profond<br/>
                                        Arômes : fruits rouges et noirs, épices, poivre<br/><br/>

                                        Blancs :<br/>
                                        Bouche : ronde et douce<br/>
                                        Robe : jaune, reflets verts<br/>
                                        Arômes : acacia, miel
                                    </p>
                                    <h6 class="jaune">GARDE, TEMPERATURE ET GASTRONOMIE :</h6>
                                    <p>
                                        Rouges :<br/>
                                        Température de service : 12 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : poissons en sauce<br/><br/>

                                        Blancs :<br/>
                                        Température de service : 12 °C<br/>
                                        Temps de garde : 5 ans<br/>
                                        Accords mets/vins : poissons en sauce
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="jaune">fiche d’identité :</h6>
                                    <p>
                                        &middot; Désignation : Saint-Joseph<br/>
                                        &middot; Appellation principale : Saint-Joseph<br/>
                                        &middot; Vignoble : Vallée du Rhône<br/>
                                        &middot; Climat : Tempéré méditerranéen sous influence continentale<br/>
                                        &middot; Production : 35 961 hl.<br/>
                                        &middot; Superficie totale : 1 005 ha.<br/>
                                        &middot; Vins produits : rouges et blancs<br/>
                                        &middot; Cépages dominants : roussanne, syrah, marsanne<br/>
                                        &middot; Rendement moyen : 40 à 46 hl./ha.
                                    </p>
                                </div>
                            </div><!-- ../col-md-12 -->
                        </div><!--../row -->
                    </div><!-- ../commentaires3 -->
                </section><!-- ../section -->
                <!-- =============== ../LE TEXTE 12 ==============-->

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
                                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Côtes du Rhône Septentrional
                                </a>
                                <ul>
                                    <li><a href="#marque1">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Vignoble de la Vallée du Rhône
                                        </a>
                                    </li>
                                    <li><a href="#marque2">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Château-grillé
                                        </a>
                                    </li>
                                    <li><a href="#marque3">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Châtillon-en-Diois
                                        </a>
                                    </li>
                                    <li><a href="#marque4">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Clairette-de-Die
                                        </a>
                                    </li>
                                    <li><a href="#marque5">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Condrieu
                                        </a>
                                    </li>
                                    <li><a href="{{ route('saintperaycornas') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Cornas
                                        </a>
                                    </li>
                                    <li><a href="#marque6">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Côte-Rôtie
                                        </a>
                                    </li>
                                    <li><a href="#marque7">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Coteaux-de-Die
                                        </a>
                                    </li>
                                    <li><a href="#marque8">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Coteaux-du-Lyonnais
                                        </a>
                                    </li>
                                    <li><a href="#marque9">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Crémant de Die
                                        </a>
                                    </li>
                                    <li><a href="#marque10">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Crozes-Hermitages
                                        </a>
                                    </li>
                                    <li><a href="#marque11">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Hermitage
                                        </a>
                                    </li>
                                    <li><a href="#marque12">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saint-Joseph
                                        </a>
                                    </li>
                                    <li><a href="{{ route('saintperaycornas') }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            &nbsp;Saint-Peray et Cornas
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
                </nav><!-- =============== LE MENU ==============-->

            </div><!-- cartebourgogne -->
            <!-- ================================= FIN CARTE ===============================-->

            <!-- ============================= ANNONCES DROITES =============================-->
            @include('layouts.2emeniveau.rhoneseptentrional.droite')
                    <!-- ========================== FIN ANNONCES DROITES ==========================-->

        </div><!-- End Row -->
        <!-- ==================================== MODAL  ===================================-->
        <div id="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="vert gras">Vins des Côtes du Rhône Septentrional</h3>
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
                        <div class="col-md-6">
                            <div id="cotesdurhonesmapmodal"></div>
                        </div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL  ===================================-->

@include('layouts.footer')

@include('layouts.2emeniveau.rhoneseptentrional.appelsjsrhoneseptentrional')
