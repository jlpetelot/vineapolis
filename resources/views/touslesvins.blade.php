@include('layouts.headerouvert')

    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            @include('layouts.touslesvins.gauche')
            <!-- ========================== ../ANNONCES GAUCHES ==========================-->

            <!-- HTML to write -->
            <a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a>

            <!-- =================================== CONTENU ================================-->
            @include('layouts.partials.contenu')
            <!-- =================================== ../CONTENU ================================-->
            <!-- Marge bottom 100px -->
            <div style="margin-bottom: 100px;"></div>
            <!-- Marge bottom 100px -->

            <!-- =========================== ANNONCES DROITES  ============================-->
            @include('layouts.touslesvins.droite')
            <!-- ========================== ../ANNONCES DROITES ==========================-->

            <!-- =================================== FOOTER2 ================================-->
            <!-- ============================================= FOOTER =============================================-->
            @include('layouts.footer2')
            <!-- =========================================== FIN FOOTER ============================================-->
            <!-- =================================== ../FOOTER2 ================================-->

        </div><!-- ../row -->
    </div><!-- ../container -->

    <!-- ========================================== APPELS JAVASCRIPTS ====================================-->
    <!-- js Boostrap -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- js site -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <!-- Appel javascript de l'application de recherche -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->

</body>

</html>