@include('layouts.headerouvert')

<!-- =================================== CONTENU ================================-->
<div class="row"><!-- row -->
    <div class="col-md-12"><!-- col-lg-12 -->
        <div id="cadrecontact"><!-- cadrecontact -->

            <!--====================== LE FORMULAIRE DE CONTACT =================-->
            <div class="col-xs-12 margehaute60px"><!-- col-xs-12 -->
                <h3 style="margin-bottom: 20px;">
                    Vous souhaitez devenir <span style="color: #f39c12; font-weight: 700;">Annonceur.</span>
                </h3>
                <p>
                    Inscrivez-vous dans l'interface d'administration qui vous est réservé en cliquant sur le bouton inscription :
                </p>

                <!-- Bouton d'inscription -->
                <div class="form-horizontal" style="margin-top: 20px;">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <a href="{{ route('registerannonceur') }}" class="btn btn-rouge">Inscription</a>
                        </div>
                    </div>
                </div>
                <!-- ../Bouton d'inscription -->

            </div><!-- ../col-xs-12 -->
            <!--====================== ../LE FORMULAIRE DE CONTACT =================-->

            <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->
            <div class="col-md-12" id="presenceicons"><!-- col-md-12 -->
                <ul class="petits-sociaux-icons"><!-- social-icons -->
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                </ul><!-- ../social-icons -->
            </div><!-- ../col-md-12 -->
            <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->

        </div><!-- cadrecontact -->
    </div><!-- ../col-md-12 -->
</div><!-- ../row -->
<!--  ============================= ../CONTENU ====================================-->

@include('layouts.footer3')

</div><!-- ../row -->
<!-- ================================================ FIN DIV PAGE =========================================-->
</div><!-- ../page -->

<!-- ========================================== APPELS JAVASCRIPTS ====================================-->
<!-- js Boostrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js site -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->

</body>

</html>