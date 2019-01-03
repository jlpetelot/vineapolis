<!-- ============================= ANNONCES DROITES =============================-->
@if ($image133->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image133->image }}" alt="{{ $image133->legende }}" title="{{ $image133->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image133->internet }}" target="_blank" title="Accédez au site"></a>
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


@if ($image134->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image134->image }}" alt="{{ $image134->legende }}" title="{{ $image134->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image134->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image135->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image135->image }}" alt="{{ $image135->legende }}" title="{{ $image135->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image135->internet }}" target="_blank" title="Accédez au site"></a>
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
@if ($image136->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image136->image }}" alt="{{ $image136->legende }}" title="{{ $image136->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image136->internet }}" target="_blank" title="Accédez au site"></a>
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