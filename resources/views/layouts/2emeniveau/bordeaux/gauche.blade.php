<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image17->actif === 1)
    <article class="annonceur1">
        <figure class="effet">
            <img src="{{ $cheminpub.$image17->image }}" alt="{{ $image17->internet }}" title="{{ $image17->internet }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image17->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image18->actif === 1)
    <article class="annonceur2">
        <figure class="effet">
            <img src="{{ $cheminpub.$image18->image }}" alt="{{ $image18->internet }}" title="{{ $image18->internet }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image18->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image19->actif === 1)
    <article class="annonceur3">
        <figure class="effet">
            <img src="{{ $cheminpub.$image19->image }}" alt="{{ $image19->internet }}" title="{{ $image19->internet }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image19->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image20->actif === 1)
    <article class="annonceur4">
        <figure class="effet">
            <img src="{{ $cheminpub.$image20->image }}" alt="{{ $image20->internet }}" title="{{ $image20->internet }}">
            <figcaption class="annonceur">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image20->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image21->actif === 1)
    <article class="annonceur5">
        <figure class="effet">
            <img src="{{ $cheminpub.$image21->image }}" alt="{{ $image21->internet }}" title="{{ $image21->internet }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image21->internet }}" target="_blank" title="Accédez au site"></a>
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