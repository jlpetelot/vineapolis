<!-- ============================= ANNONCES DROITES =============================-->
@if ($image93->actif === 1)
    <article class="a3emeniveau5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image93->image }}" alt="{{ $image93->legende }}" title="{{ $image93->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image93->internet }}" target="_blank" title="Accédez au site"></a>
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


@if ($image94->actif === 1)
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image94->image }}" alt="{{ $image94->legende }}" title="{{ $image94->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image94->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau6">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image95->actif === 1)
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image95->image }}" alt="{{ $image95->legende }}" title="{{ $image95->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image95->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau7">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image96->actif === 1)
    <article class="a3emeniveau8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image96->image }}" alt="{{ $image96->legende }}" title="{{ $image96->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image96->internet }}" target="_blank" title="Accédez au site"></a>
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