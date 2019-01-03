<!-- ============================= ANNONCES DROITES =============================-->
@if ($image165->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image165->image }}" alt="{{ $image165->legende }}" title="{{ $image165->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image165->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace4->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif


@if ($image166->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image166->image }}" alt="{{ $image166->legende }}" title="{{ $image166->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image166->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image167->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image167->image }}" alt="{{ $image167->legende }}" title="{{ $image167->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image167->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau7">
    <figure class="effet">
        <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
        <figcaption class="annonceur p3emeniveau">
            <<h5>Voir les détails</h5>
        </figcaption>
        <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
    </figure>
</article>
@endif
@if ($image168->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image168->image }}" alt="{{ $image168->legende }}" title="{{ $image168->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image168->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <<h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
    @endif
<!-- ========================== FIN ANNONCES DROITES ==========================-->