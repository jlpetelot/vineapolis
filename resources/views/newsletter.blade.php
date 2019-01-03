@include('layouts.headerouvertsansgoogle')

    <div class="row"><!-- row -->

        <div class="row"><!-- row -->

            <!-- =================================== CONTENU ================================-->
            <div id="cadrerenewsletter"><!-- cadrerenewsletter -->
                <div class="row"><!-- row -->
                    <div class="col-md-12"><!-- col-lg-12 -->
                        <!-- ================================ FORMULAIRE D'ENVOI ==============================-->
                        <div class="col-md-4"><!-- col-md4 -->
                            <h3 class="gras retraitformcontact">Soyez les premiers à découvrir les nouveaux vignobles : inscrivez-vous à notre Newsletter.</h3>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quos, cupiditate officiis iusto fugiat in eligendi natus omnis qui tenetur quas ratione esse id. Quidem dolore dicta repellat natus nemo.
                                </p>
                                <p>Veuillez renseigner les champs ci-dessous pour recevoir la Newsletter.</p>

                                @if (session('message'))
                                    <div class="alert alert-success">
                                        <div class="text-center">{{ session('message') }}</div>
                                    </div>
                                @endif
                                
                                <!-- Formulaire -->
                                {!! Form::model($newsletters, [
                                    'method'    => 'POST',
                                    'route'     => 'newsletter.store'
                                ]) !!}
                                <!-- Nom et prénom de l'utilisateur -->
                                <div class="form-group">
                                    {!! Form::text('name', null,
                                    ['class' => 'form-control4', 'placeholder' => 'prénom, nom']) !!}
                                    @if ($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <!-- ../Nom et prénom de l'utilisateur -->
                                <!-- Email de l'utilisateur -->
                                <div class="form-group">
                                    {!! Form::text('email', null,
                                    ['class' => 'form-control4', 'placeholder' => 'email']) !!}
                                    @if ($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <!-- ../Email de l'utilisateur -->
                                <!-- Mot de passe de l'utilisateur -->
                                <div class="form-group">
                                    {!! Form::text('password', null,
                                    ['class' => 'form-control4', 'placeholder' => 'mot de passe']) !!}
                                    @if ($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!-- ../Mot de passe de l'utilisateur -->
                                <!-- Confirmation du mot de passe -->
                                <div class="form-group">
                                    {!! Form::text('password_confirm', null,
                                    ['class' => 'form-control4', 'placeholder' => 'confirmation du mot de passe']) !!}
                                    @if ($errors->has('password_confirm'))
                                        <span class="help-block">{{ $errors->first('password_confirm') }}</span>
                                    @endif
                                </div>
                                <!-- ../Confirmation du mot de passe -->
                                <!-- Bouton radio -->
                                <div class="form-group">
                                    {!! Form::label('inscrit', "Je m'inscris à la Newsletter") !!}
                                    {!! Form::checkbox('inscrit', 1, true) !!}
                                    @if ($errors->has('inscrit'))
                                        <span class="help-block">{{ $errors->first('inscrit') }}</span>
                                    @endif
                                </div>
                                <!-- ../Bouton radio -->
                                </div>
                                <!-- Bouton d'envoi -->
                                <div class="form-group">
                                    {!! Form::submit('Envoyez', ['class' => 'btn btn-rouge']) !!}
                                </div>
                                <!-- ../Bouton d'envoi -->
                                {!! Form::close() !!}
                                <!-- ../Formulaire -->
                            
                        </div><!-- Fin col-md-4 -->
                        <!-- ================================= FIN FORMULAIRE D'ENVOI ===========================-->
                        <!-- ================================== IMAGE DE LA NEWS ===============================-->
                        <div class="col-md-8"><!-- col-md-8 -->
                            <div id="newsletter">
                                <img src="{{ asset('img/newsletter.png')}}" alt="">
                            </div>
                        </div><!-- ../col-md-8 -->
                        <!-- ================================== FIN IMAGE DE LA NEWS ==============================-->
                    </div><!-- ../col-md-12 -->
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
                </div><!-- ../row -->
            </div><!-- cadrerenewsletter -->
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