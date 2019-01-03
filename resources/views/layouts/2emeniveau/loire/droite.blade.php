<!-- =========================== ANNONCES GAUCHES ============================-->
@if ($image38->actif === 1)
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image38->image }}" alt="{{ $image38->legende }}" title="{{ $image38->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image38->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image39->actif === 1)
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image39->image }}" alt="{{ $image39->legende }}" title="{{ $image39->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image39->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image40->actif === 1)
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image40->image }}" alt="{{ $image40->legende }}" title="{{ $image40->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image40->internet }}" target="_blank" title="Accédez au site"></a>
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