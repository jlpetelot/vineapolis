@include('layouts.header')

@include('layouts.france.menu')

    <!-- ========================================= PAGE 1ER NIVEAU  ==================================-->
    <div id="pagehome"><!-- page1erniveau -->
        <div class="container"><!-- Container Général -->
            <div class="row"><!-- Row -->
                <!-- =========================== ANNONCES GAUCHES ============================-->
                @if ($image1->actif === 1)
                    <article class="annonceur1">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image1->image }}" alt="{{ $image1->legende }}" title="{{ $image1->legende }}">
                            <figcaption class="annonceur">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image1->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur1">
                        <figure class="effet">
                            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceur">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image2->actif === 1)
                    <article class="annonceur2">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image2->image }}" alt="{{ $image2->legende }}" title="{{ $image2->legende }}">
                            <figcaption class="annonceur">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image2->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur2">
                        <figure class="effet">
                            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceur">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image3->actif === 1)
                    <article class="annonceur3">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image3->image }}" alt="{{ $image3->legende }}" title="{{ $image3->legende }}">
                            <figcaption class="annonceur">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image3->internet }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur3">
                        <figure class="effet">
                            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceur">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image4->actif === 1)
                    <article class="annonceur4">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image4->image }}" alt="{{ $image4->legende }}" title="{{ $image4->legende }}">
                            <figcaption class="annonceur">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image4->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur4">
                        <figure class="effet">
                            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceur">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image5->actif === 1)
                    <article class="annonceur5">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image5->image }}" alt="{{ $image5->legende }}" title="{{ $image5->legende }}">
                            <figcaption class="annonceurbas">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image5->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur5">
                        <figure class="effet">
                            <img src="{{ $cheminremplace3.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceurbas">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

                <!-- =================================== CARTE ================================-->
                <div id="cartes"><!-- cartefrance -->
                    <div id="textecartes">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                        <div id="titremap">
                            <p>Bienvenue. Découvrez chaque jour un nouveau vin.
                            </p>
                        </div>
                    </div>
                    <div id="francemap"></div>

                    <!-- =============== LE MENU ==============-->
                    <nav id="menu">
                        <ul>
                            <ul id="menuderoulant" class="france">
                                <li>
                                    <a href="#marque1">
                                        <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Régions vinicoles
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('/france/champagne') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Champagne
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/lorraine') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Lorraine
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/alsace') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;L'Alsace
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/loire') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Loire
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/bourgogne') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La bourgogne
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/jura') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Jura
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/cognac') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Cognac
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/auvergne') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;L'Auvergne
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/beaujolais') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Beaujolais
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/bugey') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Bugey
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/savoie') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Savoie
                                            </a>
                                        </li>
                                        <li><a href="{{ route('bordeaux') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Bordelais
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/sud-ouest') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Sud-Ouest
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/cotes-du-rhone-septentrional') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Côtes du Rhône Septentrional
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/cotes-du-rhone-meridional') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Côtes du Rhône Méridional
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/armagnac') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;L'armagnac
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/languedoc-roussillon') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;Le Languedoc-Roussillon
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/vins-de-provence') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Provence
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/france/corse') }}">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                &nbsp;La Corse
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
                        </ul>
                    </nav><!-- =============== LE MENU ==============-->

                </div><!-- cartefrance -->
                <!-- ================================= FIN CARTE ===============================-->

                <!-- ============================= ANNONCES DROITES =============================-->
                @if ($image6->actif === 1)
                    <article class="annonceur6">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image6->image }}" alt="{{ $image6->legende }}" title="{{ $image6->legende }}">
                            <figcaption class="annonceurdroite">
                            <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image6->internet }}" target="_blank" title="Accédez au site de {{$image6->legende }}"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur6">
                        <figure class="effet">
                            <img src="{{ $cheminremplace2.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceurdroite">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image7->actif === 1)
                    <article class="annonceur7">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image7->image }}" alt="{{ $image7->legende }}" title="{{ $image7->legende }}">
                            <figcaption class="annonceurdroite">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image7->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur7">
                        <figure class="effet">
                            <img src="{{ $cheminremplace2.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceurdroite">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif

                @if ($image8->actif === 1)
                    <article class="annonceur8">
                        <figure class="effet">
                            <img src="{{ $cheminpub.$image8->image }}" alt="{{ $image8->legende }}" title="{{ $image8->legende }}">
                            <figcaption class="annonceurbas">
                                <h5>Accédez au site</h5>
                            </figcaption>
                            <a href="{{ $image8->internet }}" target="_blank" title="Accédez au site"></a>
                        </figure>
                    </article>
                @else
                    <article class="annonceur8">
                        <figure class="effet">
                            <img src="{{ $cheminremplace3.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
                            <figcaption class="annonceurbas">
                                <h5>Ici votre publicité</h5>
                            </figcaption>
                            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
                        </figure>
                    </article>
                @endif
                <!-- ========================== FIN ANNONCES DROITES ==========================-->
            </div><!-- End Row -->

@include('layouts.footer')

@include('layouts.france.appelsjsfrance')