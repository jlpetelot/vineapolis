@include('layouts.headerouvert')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================-->
        @include('layouts.touslesvins.gauche')
         <!-- ========================== ../ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        @include('layouts.partials.contenudetail')
        <!-- =================================== ../CONTENU ================================-->

        <!-- Marge bottom 100px -->
        <div style="margin-bottom: 100px;"></div>
        <!-- Marge bottom 100px -->

        <!-- =========================== ANNONCES DROITES  ============================-->
        @include('layouts.touslesvins.droite')
                <!-- ========================== ../ANNONCES DROITES ==========================-->

        <!-- ============================================= FOOTER =============================================-->
        @include('layouts.footer2')
        <!-- =========================================== FIN FOOTER ============================================-->

        <!-- ==================================== MODAL REPORTAGES ===================================-->
        {!! $vin->reportage !!}
        <!-- ================================== ../MODAL REPORTAGES   ===================================-->

        <!-- ============================ MODAL CARTE GOOGLE ==================================== -->
        @include('layouts.partials.modalcartegoogle')
        <!-- ============================ ../MODAL CARTE GOOGLE ==================================== -->

        <!-- ============================= GOOGLE MAP JL PETELOT 2017 ============================ -->
        @include('layouts.partials.googlemap')
        <!-- =========================== FIN GOOGLE MAP JL PETELOT 2017 ========================== -->

        <!-- ============================ MODAL LOGIN INTERNAUTE ==================================== -->
        @include('layouts.partials.modalloginternaute')
        <!-- ============================ ../MODAL LOGIN INTERNAUTE  ==================================== -->

    </div><!-- ../row -->
</div><!-- ../container -->

<!-- ========================================== APPELS JAVASCRIPTS ====================================-->
<!-- js Boostrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js site -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->

</body>

</html>