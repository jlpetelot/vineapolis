<!-- ============================================= FOOTER =============================================-->
<footer id="footer">
    <p>
        <img src="{{ asset('img/logobas.png') }}" id="logobas" alt="Logo du bas de la page"><span class="paddingdroite">|</span>
        <a href="conditionsgenerales">Conditions générales</a><span class="paddingdroite">|</span>
        <a href="{{ route('contact') }}">Contact</a><span class="paddingdroite">|</span>
        <a class="abonnes" href="{{ route('annonceurs') }}">Devenir annonceur</a>
        <span class="paddingdroite">|</span>
        <a class="abonnes" href="{{ route('contactvignerons') }}">Se démarquer des autres</a>
        <span class="paddingdroite">|</span>
        <span class="benoitfrance">Cartes Benoît France ®</span>
        <span class="paddingdroite">|</span>&nbsp;Powered by
        <a href="https://www.madinici.org" target="_blank">Madinici.org</a>
    </p>
</footer>
<!-- =========================================== FIN FOOTER ============================================-->
</div><!-- ../Container Général -->
</div><!-- ../page1erniveau -->
<!-- =============================== FIN DIV PAGE 1ER NIVEAU  =======================================-->

<!-- ========================================== APPELS JAVASCRIPTS ====================================-->
<!-- L'appel JS du menu déroulant (formatage des survols de la carte) -->
<script src="{{ asset('js/formatetexte.js') }}" type="text/javascript"></script>
<!-- L'appel JS du menu déroulant-->
<script src="{{ asset('js/menuderoulant.js') }}" type="text/javascript"></script>
<!-- js Boostrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js site -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

<!-- Les cartes -->
<script src="{{ asset('js/jquery.vmap.js') }}" type="text/javascript"></script>


</div>
</body>
</html>