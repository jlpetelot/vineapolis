<!-- ============================= ANNONCES DROITES =============================-->
@if ($image62->actif === 1)
    <article class="annonceur6">
        <figure class="effet">
            <img src="{{ $cheminpub.$image62->image }}" alt="{{ $image62->legende }}" title="{{ $image62->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image62->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image63->actif === 1)
    <article class="annonceur7">
        <figure class="effet">
            <img src="{{ $cheminpub.$image63->image }}" alt="{{ $image63->legende }}" title="{{ $image63->legende }}">
            <figcaption class="annonceurdroite">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image63->internet }}" target="_blank" title="Accédez au site"></a>
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

@if ($image64->actif === 1)
    <article class="annonceur8">
        <figure class="effet">
            <img src="{{ $cheminpub.$image64->image }}" alt="{{ $image64->legende }}" title="{{ $image64->legende }}">
            <figcaption class="annonceurbas">
                <h5>Accédez au site</h5>
            </figcaption>
            <a href="{{ $image64->internet }}" target="_blank" title="Accédez au site"></a>
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