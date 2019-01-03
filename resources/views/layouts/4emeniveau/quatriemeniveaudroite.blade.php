<!-- =========================== LES REQUÊTES EN DIRECT PAR LA VUE ============================-->
<?php
$cheminpub = asset('img/pub').'/';
$publicite5 = App\Publicite::where('categorie', '4emeniveau')->inRandomOrder()->first();
$publicite6 = App\Publicite::where('categorie', '4emeniveau')->inRandomOrder()->first();
$publicite7 = App\Publicite::where('categorie', '4emeniveau')->inRandomOrder()->first();
$publicite8 = App\Publicite::where('categorie', '4emeniveau')->inRandomOrder()->first();
?>
<!-- =========================== ../LES REQUÊTES EN DIRECT PAR LA VUE ============================-->


<!-- ============================= ANNONCES DROITES =============================-->
@if ($publicite5->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite5->image }}" alt="{{ $publicite5->legende }}" title="{{ $publicite5->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite5->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite5->image }}" alt="{{ $publicite5->legende }}" title="{{ $publicite5->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif


@if ($publicite6->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite6->image }}" alt="{{ $publicite6->legende }}" title="{{ $publicite6->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite6->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite6->image }}" alt="{{ $publicite6->legende }}" title="{{ $publicite6->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite7->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite7->image }}" alt="{{ $publicite7->legende }}" title="{{ $publicite7->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite7->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite7->image }}" alt="{{ $publicite7->legende }}" title="{{ $publicite7->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite8->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite8->image }}" alt="{{ $publicite8->legende }}" title="{{ $publicite8->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite8->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau8">
    <figure class="effet">
        <img src="{{ $cheminpub.$publicite8->image }}" alt="{{ $publicite8->legende }}" title="{{ $publicite8->legende }}">
        <figcaption class="annonceur p3emeniveau">
            <<h5>Voir les détails</h5>
        </figcaption>
        <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
    </figure>
</article>
@endif
<!-- ========================== FIN ANNONCES DROITES ==========================-->