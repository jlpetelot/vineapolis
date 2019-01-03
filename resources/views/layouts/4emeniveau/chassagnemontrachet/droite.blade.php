<!-- ============================= ANNONCES DROITES =============================-->
@if ($image197->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image197->image }}" alt="{{ $image197->legende }}" title="{{ $image197->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image197->internet }}" target="_blank" title="Accédez au site"></a>
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


@if ($image198->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image198->image }}" alt="{{ $image198->legende }}" title="{{ $image198->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image198->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image199->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image199->image }}" alt="{{ $image199->legende }}" title="{{ $image199->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image199->internet }}" target="_blank" title="Accédez au site"></a>
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
@if ($image200->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image200->image }}" alt="{{ $image200->legende }}" title="{{ $image200->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image200->internet }}" target="_blank" title="Accédez au site"></a>
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