<!-- ============================= ANNONCES DROITES =============================-->
@if ($publicite6->actif === 1)
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite6->image }}" alt="{{ $publicite6->legende }}" title="{{ $publicite6->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite6->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite6->image }}" alt="{{ $publicite6->legende }}" title="{{ $publicite6->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite7->actif === 1)
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite7->image }}" alt="{{ $publicite7->legende }}" title="{{ $publicite7->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite7->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite7->image }}" alt="{{ $publicite7->legende }}" title="{{ $publicite7->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($publicite8->actif === 1)
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminpub.$publicite8->image }}" alt="{{ $publicite8->legende }}" title="{{ $publicite8->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $publicite8->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur8">
    <figure class="effet">
        <img src="{{ $cheminpub.$publicite8->image }}" alt="{{ $publicite8->legende }}" title="{{ $publicite8->legende }}">
        <figcaption class="annonceurbas">
            <<h5>Voir les détails</h5>
        </figcaption>
        <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
    </figure>
</article>
@endif
<!-- ========================== FIN ANNONCES DROITES ==========================-->