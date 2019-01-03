<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image22->actif === 1)
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image22->image }}" alt="{{ $image22->internet }}" title="{{ $image22->internet }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image22->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminremplace2.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceurdroite">
                <h5>Ici votre publicité</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_blank" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image23->actif === 1)
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image23->image }}" alt="{{ $image23->internet }}" title="{{ $image23->internet }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image23->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminremplace2.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceurdroite">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image24->actif === 1)
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image24->image }}" alt="{{ $image24->internet }}" title="{{ $image24->internet }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image24->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur8">
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