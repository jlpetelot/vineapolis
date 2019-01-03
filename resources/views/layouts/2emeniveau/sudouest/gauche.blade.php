<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image49->actif === 1)
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$image49->image }}" alt="{{ $image49->legende }}" title="{{ $image49->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image49->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image50->actif === 1)
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$image50->image }}" alt="{{ $image50->legende }}" title="{{ $image50->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image50->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Ici votre publicité</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image51->actif === 1)
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$image51->image }}" alt="{{ $image51->legende }}" title="{{ $image51->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image51->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image52->actif === 1)
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$image52->image }}" alt="{{ $image52->legende }}" title="{{ $image52->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image52->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminremplace1.$imageremplace1->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceur">
                <h5>Ici votre publicité</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image53->actif === 1)
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image53->image }}" alt="{{ $image53->legende }}" title="{{ $image53->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image53->internet }}" target="_blank" title="Accédez au site"></a>
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