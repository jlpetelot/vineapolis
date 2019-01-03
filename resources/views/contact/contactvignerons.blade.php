@include('layouts.headerouvert')

        <!-- =================================== CONTENU ================================-->
<div class="row"><!-- row -->
    <div class="col-md-12"><!-- col-lg-12 -->
        <div id="cadrecontact"><!-- cadrecontact -->

            <!--====================== LE FORMULAIRE DE CONTACT POUR LES VIGNERONS SANS ADRESSE =================-->
            <div class="col-xs-12 margehaute60px"><!-- col-xs-12 -->
                <h3 style="margin-bottom: 20px;">
                    Vous êtes vigneron, souhaitez vous démarquer de la concurrence et être plus visible sur le site Vineapolis et les moteurs de recherche.
                </h3>
                <p>
                    Complétez le formulaire ci-dessous afin de nous l'adresser.
                    <br/>Vous revevrez votre accréditation ajoutée de vos identifiants
                    par mail dans les 24 heures afin d'accéder à votre espace personnel.
                </p>
                @if (session('success'))
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="alert alert-info">{{ session('success') }}</div>
                        </div>
                    </div>
                @endif

                <div style="margin-top: 20px;"><!-- margin-top: 20px -->
                    <!-- Le formulaire -->
                {!! Form::open([
                   'method'    => 'POST',
                   'route'     => 'contactvignerons.post'
                ]) !!}

                <!-- Nom du vigneron -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('societe') ? 'has-error': '' }}">
                            <div class="col-xs-8">
                                {{--<small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">--}}
                                {{--(<i class="fa fa-fw fa-asterisk" style="color: #860043"></i>)--}}
                                {{--</small>--}}
                                {!! Form::label('societe', 'Votre nom, domaine ou société') !!}
                            </div>
                            <div class="col-xs-8">
                                {!! Form::text('societe', null,
                                ['class' => 'form-control4',
                                'placeholder' => 'Par exemple : Domaine Richer']) !!}
                                @if ($errors->has('societe'))
                                    <span class="help-block">{{ $errors->first('societe') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Nom du vigneron -->

                    <!-- Email du vigneron -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                            <div class="col-xs-8">
                                {{--<small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">--}}
                                {{--(<i class="fa fa-fw fa-asterisk" style="color: #860043"></i>)--}}
                                {{--</small>--}}
                                {!! Form::label('email', 'Votre email') !!}
                            </div>
                            <div class="col-xs-8">
                                {!! Form::text('email', null,
                                ['class' => 'form-control4', 'placeholder' =>
                                'Par exemple : contact@domainericher.com'
                                ]) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Email du vigneron -->

                    <!-- bouton d'envoi -->
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::submit('Envoyez', ['class' => 'btn btn-rouge']) !!}
                            </div>
                        </div>
                    </div>
                    <!-- ../bouton d'envoi -->

                {!! Form::close() !!}
                <!-- ../formulaire -->

                </div><!-- ../margin-top: 20px -->

            </div><!-- ../col-xs-12 -->
            <!--====================== ../LE FORMULAIRE DE CONTACT POUR LES VIGNERONS SANS ADRESSE =================-->

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

@include('layouts.footer2')

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