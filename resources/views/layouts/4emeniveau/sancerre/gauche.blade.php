<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image337->actif === 1)
    <article class="a3emeniveau1">
        <figure class="effet">
            <img src="{{ $cheminpub.$image337->image }}" alt="{{ $image337->legende }}" title="{{ $image337->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image337->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau1">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image338->actif === 1)
    <article class="a3emeniveau2">
        <figure class="effet">
            <img src="{{ $cheminpub.$image338->image }}" alt="{{ $image338->legende }}" title="{{ $image338->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image338->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau2">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif
@if ($image339->actif === 1)
    <article class="a3emeniveau3">
        <figure class="effet">
            <img src="{{ $cheminpub.$image339->image }}" alt="{{ $image339->legende }}" title="{{ $image339->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image339->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau3">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif
@if ($image340->actif === 1)
    <article class="a3emeniveau4">
        <figure class="effet">
            <img src="{{ $cheminpub.$image340->image }}" alt="{{ $image340->legende }}" title="{{ $image340->legende }}">
            <figcaption class="annonceur p3emeniveau">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image340->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="a3emeniveau4">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace4->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur p3emeniveau">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
    @endif
 <!-- ========================== FIN ANNONCES GAUCHES ==========================-->