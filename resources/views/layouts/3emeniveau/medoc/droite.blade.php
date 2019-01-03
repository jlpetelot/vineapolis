<!-- ============================= ANNONCES DROITES =============================-->
@if ($image206->actif === 1)
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image206->image }}" alt="{{ $image206->legende }}" title="{{ $image206->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image206->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminremplace2.$imageremplace2->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceurdroite">
                <h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
@endif

@if ($image207->actif === 1)
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image207->image }}" alt="{{ $image207->legende }}" title="{{ $image207->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image207->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image208->actif === 1)
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image208->image }}" alt="{{ $image208->legende }}" title="{{ $image208->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image208->internet }}" target="_blank" title="Accédez au site"></a>
        </figure>
    </article>
@else
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminremplace3.$imageremplace3->image }}" alt="Pub remplaçante" title="Pub remplaçante">
            <figcaption class="annonceurbas">
                <<h5>Voir les détails</h5>
            </figcaption>
            <a href="{{ url('/contact') }}" target="_self" title="Ici votre publicité"></a>
        </figure>
    </article>
    @endif
            <!-- ========================== FIN ANNONCES DROITES ==========================-->