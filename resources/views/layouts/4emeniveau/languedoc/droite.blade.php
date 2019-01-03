<!-- ============================= ANNONCES DROITES =============================-->
@if ($image365->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image365->image }}" alt="{{ $image365->legende }}" title="{{ $image365->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image365->internet }}" target="_blank" title="Accédez au site"></a>
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


@if ($image366->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image366->image }}" alt="{{ $image366->legende }}" title="{{ $image366->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image366->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image367->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image367->image }}" alt="{{ $image367->legende }}" title="{{ $image367->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image367->internet }}" target="_blank" title="Accédez au site"></a>
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
@if ($image368->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image368->image }}" alt="{{ $image368->legende }}" title="{{ $image368->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image368->internet }}" target="_blank" title="Accédez au site"></a>
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