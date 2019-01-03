<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image65->actif === 1)
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$image65->image }}" alt="{{ $image65->legende }}" title="{{ $image65->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image65->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image66->actif === 1)
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$image66->image }}" alt="{{ $image66->legende }}" title="{{ $image66->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image66->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image67->actif === 1)
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$image67->image }}" alt="{{ $image67->legende }}" title="{{ $image67->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image67->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image68->actif === 1)
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$image68->image }}" alt="{{ $image68->legende }}" title="{{ $image68->legende }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image68->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image69->actif === 1)
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image69->image }}" alt="{{ $image69->legende }}" title="{{ $image69->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image69->internet }}" target="_blank" title="Accédez au site"></a>
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