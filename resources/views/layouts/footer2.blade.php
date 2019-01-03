<!-- ============================================= FOOTER =============================================-->
<footer id="footer2">
    <p>
        <img src="{{ asset('img/logobas2.png') }}" id="logobas" alt="Logo du bas de la page"><span class="paddingdroite">|</span>
        <a href="conditionsgenerales">Conditions générales</a><span class="paddingdroite">|</span>
        @if ($header != "Vineapolis | Contact Annonceurs")
            <a href="{{ route('contact') }}"> Contact</a><span class="paddingdroite">|</span>
            <a class="signup" href="{{ route('annonceurs') }}" style="color: #f39c12; font-weight: bold">Devenez annonceur</a><span class="paddingdroite">|</span>
        @endif
        &nbsp;Sources cartes Benoît France ®
        <span class="paddingdroite">|</span>
        <span class="powered2">&nbsp;Powered by </span>
        <a href="http://madinici.org" target="_blank">Madinici.org</a>
    </p>
</footer>
<!-- =========================================== FIN FOOTER ============================================-->
