<!-- =========================== LES REQUÊTES EN DIRECT PAR LA VUE ============================-->
<?php
$cheminpub = asset('img/pub').'/';
$publicite1 = App\Publicite::where('categorie', '2emeniveau-gauche-haut')->inRandomOrder()->first();
$publicite2 = App\Publicite::where('categorie', '2emeniveau-gauche-haut')->inRandomOrder()->first();
$publicite3 = App\Publicite::where('categorie', '2emeniveau-gauche-haut')->inRandomOrder()->first();
$publicite4 = App\Publicite::where('categorie', '2emeniveau-gauche-haut')->inRandomOrder()->first();
$publicite5 = App\Publicite::where('categorie', '2emeniveau-gauche-bas')->inRandomOrder()->first();
?>
<!-- =========================== ../LES REQUÊTES EN DIRECT PAR LA VUE ============================-->

<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($publicite1->actif === 1)
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite1->image }}" alt="{{ $publicite1->legende }}" title="{{ $publicite1->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite1->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite1->image }}" alt="{{ $publicite1->legende }}" title="{{ $publicite1->legende }}">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite2->actif === 1)
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite2->image }}" alt="{{ $publicite2->legende }}" title="{{ $publicite2->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite1->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite2->image }}" alt="{{ $publicite2->legende }}" title="{{ $publicite1->legende }}">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite3->actif === 1)
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite3->image }}" alt="{{ $publicite3->legende }}" title="{{ $publicite3->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite3->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite3->image }}" alt="{{ $publicite3->legende }}" title="{{ $publicite3->legende }}">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite4->actif === 1)
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite4->image }}" alt="{{ $publicite4->legende }}" title="{{ $publicite4->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite4->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite4->image }}" alt="{{ $publicite4->legende }}" title="{{ $publicite4->legende }}">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite5->actif === 1)
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite5->image }}" alt="{{ $publicite5->legende }}" title="{{ $publicite5->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite5->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite5->image }}" alt="{{ $publicite5->legende }}" title="{{ $publicite5->legende }}">
            <figcaption class="annonceurbas">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif
<!-- ========================== FIN ANNONCES GAUCHES ==========================-->