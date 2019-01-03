<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image201->actif === 1)
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$image201->image }}" alt="{{ $image201->legende }}" title="{{ $image201->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image201->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Ici votre publicité</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image202->actif === 1)
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$image202->image }}" alt="{{ $image202->legende }}" title="{{ $image202->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image202->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image203->actif === 1)
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$image203->image }}" alt="{{ $image203->legende }}" title="{{ $image203->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image203->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image204->actif === 1)
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$image204->image }}" alt="{{ $image204->legende }}" title="{{ $image204->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image204->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image205->actif === 1)
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image205->image }}" alt="{{ $image205->legende }}" title="{{ $image205->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image205->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminremplace3.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceurbas">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
    @endif
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->