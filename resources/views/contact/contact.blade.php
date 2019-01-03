@include('layouts.headerouvert')

        <!-- =================================== CONTENU ================================-->
<div class="row"><!-- row -->
    <div class="col-md-12"><!-- col-lg-12 -->
        <div id="cadrecontact"><!-- cadrecontact -->


            <!--====================== LE FORMULAIRE DE CONTACT =================-->
            <div class="col-md-4"><!-- col-md-4 -->
                <h3 class="gras" id="contact">Contact</h3>
                <p style="font-weight: bold">Vineapolis</p>
                <p>9, rue des Lions</p>
                <p>89170 Saint-Fargeau</p>
                <p>France</p>
                <p><i class="fa fa-phone"></i>&nbsp;03 86 74 11 85</p>
                <br/>
                {{--<p><i class="fa fa-envelope-o">&nbsp;</i>--}}
                    {{--<a href="mailto:contact@vineapolis.f" class="contact">--}}
                        {{--contact@vineapolis.fr--}}
                    {{--</a>--}}
                {{--</p>--}}

                <!-- Absence de formulaire et message de succès -->
                @if (session('success'))
                <div class="margehaute40px"><!-- margehaute40px -->
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <p style="margin-top: 20px">
                            <a href="{{ route('contact') }}" style="color: #333333">
                                <i class="fa fa-refresh"></i>
                                &nbsp;Réenvoyer un message
                            </a>
                        </p>
                    </div>
                </div><!-- margehaute40px -->
                <!-- ../Absence de formulaire et message de succès -->

                <!-- Le formulaire -->
                @else
                <div class="margehaute20px"><!-- margehaute40px -->
                    {!! Form::open(['route' => 'contact.post','method' => 'post']) !!}

                    <p class="plus5px">Adressez-nous un message</p>
                    <!-- Nom, Prénom -->
                    <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                        {!! Form::text('name', NUll, ['class' => 'form-control4','placeholder' => 'prénom, nom']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <!-- ../Nom, Prénom -->
                    <!-- Email -->
                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        {!! Form::text('email', NUll, ['class' => 'form-control4','placeholder' => 'email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <!-- ../Email  -->
                    <!-- Sujet -->
                    <div class="form-group {{ $errors->has('sujet') ? 'has-error': '' }}">
                        {!! Form::text('sujet', NUll, ['class' => 'form-control4','placeholder' => 'Sujet']) !!}
                        @if ($errors->has('sujet'))
                            <span class="help-block">{{ $errors->first('sujet') }}</span>
                        @endif
                    </div>
                    <!-- ../Sujet  -->
                    <!-- Message -->
                    <!-- !!!! ON APELLE LA VARIABLE MESSAGE CONTENT CAR MESSAGE EST RÉSEERVÉ À L'ENVOI DES MAILS !!!! -->
                    <div class="form-group {{ $errors->has('contenu') ? 'has-error': '' }}">
                        {!! Form::textarea('contenu', NUll, [
                            'class' => 'form-control4','rows' => 7,
                            'placeholder' => 'message'
                        ]) !!}
                        @if ($errors->has('contenu'))
                            <span class="help-block">{{ $errors->first('contenu') }}</span>
                        @endif
                    </div>
                    <!-- ../Message  -->
                    <!-- Bouton d'envoi -->
                    {!! Form::submit('Envoyez', ['class' => 'btn btn-rouge']) !!}

                    {!! Form::close() !!}

                </div><!-- margehaute40px -->
                <!-- ../formulaire -->
                @endif

            </div><!-- ../col-md-4 -->
            <!--====================== ../LE FORMULAIRE DE CONTACT =================-->

            <!-- ================================== GOOGLE MAP ========================================-->
            <div class="col-md-8"><!-- col-md-8 -->
                <div id="cartegooglecontact"></div>
            </div><!-- ../col-md-8 -->
            @include('contact.googlemap')
            <!-- ================================= FIN GOOGLE MAP =======================================-->

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

@include('layouts.footer4')

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