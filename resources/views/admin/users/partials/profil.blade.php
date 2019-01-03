<div class="box"><!-- box box-primary -->

    <div class="box-header"><!-- box-header -->
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
        <div class="col-xs-8"><!-- col-xs-8 -->
            <h4>
                @if (session('message'))
                    <div class="alert alert-success" style="margin-bottom: -32px">
                        {{ Auth::user()->name }} | {{ session('message') }}
                    </div>
                @else
                    {{ Auth::user()->name }} | Ici, vous pouvez modifier votre mot de passe.
                @endif
            </h4>
        </div><!-- ../col-xs-8 -->
    </div><!-- ../box-header -->

    <div class="box-body"><!-- box-body -->
        {!! Form::model($user, [
           'method'    => 'PUT',
           'route'     => ['admin.updateprofil', Auth::user()->id]
        ]) !!}

        <!-- Texte profil -->
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-3 control-label">
                    <h4>Informations sur votre profil</h4>
                    <p style="font-size: 12px; margin-top: -10px;">
                        Vous ne pouvez pas modifier vos nom et email. <br/>Ils sont vos identifiants uniques.
                        @if(Auth::user()->role === 'administrateur')
                            <br/>Communs à vos qualités d'administrateur et d'utilisateur.
                        @elseif(Auth::user()->role === 'annonceur')
                            <br/>Communs à vos qualités d'administrateur et d'annonceur.
                        @elseif(Auth::user()->role === 'vigneron')
                            <br/>Communs à vos qualités d'administrateur et de vigneron.
                        @elseif(Auth::user()->role === 'internaute')
                            <br/>Communs à vos qualités d'internaute.
                        @endif
                    </p>
                </div>
                <div class="col-xs-5">
                    <p style="margin-top: 17px;"><strong>{{ Auth::user()->name }}</strong>
                        <br/><strong>{{ Auth::user()->email }}</strong>
                    </p>
                </div>
            </div>
        </div>
        <!-- ../Texte profil -->

        <!-- Ancien mot de passe caché -->
        {{ Form::hidden('password') }}
        <!-- Ancien mot de passe caché -->

        <!-- Le formulaire -->
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-3 control-label">
                    <h4>Vos accès</h4>
                    <p style="font-size: 12px; margin-top: -10px;">
                        Pour changer de mot de passe, vous devez valider l'ancien.
                        <br/>Si vous souhaitez le conserver, ne faites rien.
                    </p>
                </div>
                <div class="col-xs-5" style="margin-top: 17px;">

                    <!-- Ancien mot de passe -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('old_password') ? 'has-error': '' }}">
                            <div class="col-xs-3 control-label">
                                <strong>Ancien mot de passe</strong>
                            </div>
                            <div class="col-xs-9">
                                {!! Form::text('old_password', '',
                                ['class' => 'form-control',
                                ]) !!}
                                @if ($errors->has('od_password'))
                                    <span class="help-block">{{ $errors->first('old_password') }}</span>
                                @endif
                                @if (session('error-message'))
                                    <span class="text-danger">{{ session('error-message') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Ancien mot de passe -->

                    <!-- Mot de passe -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('new_password') ? 'has-error': '' }}">
                            <div class="col-xs-3 control-label">
                                <strong>Nouveau mot de passe</strong>
                            </div>
                            <div class="col-xs-9">
                                {!! Form::text('new_password', null,
                                ['class' => 'form-control',
                                ]) !!}
                                @if ($errors->has('new_password'))
                                    <span class="help-block">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Mot de passe -->

                    <!-- Confirmation du mot de passe -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('new_password_confirm') ? 'has-error': '' }}">
                            <div class="col-xs-3 control-label">
                                <strong>Confirmation</strong>
                            </div>
                            <div class="col-xs-9">
                                {!! Form::text('new_password_confirm', null,
                                ['class' => 'form-control'
                                ]) !!}
                                @if ($errors->has('new_password_confirm'))
                                    <span class="help-block">{{ $errors->first('new_password_confirm') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Confirmation du mot de passe -->

                    <!-- Rôle -->
                {!! Form::hidden('role') !!}
                <!-- ../Rôle -->

                    <!-- Bouton d'envoi -->
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-3 control-label">
                            </div>
                            <div class="col-xs-9">
                                {!! Form::submit('Validez', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <a href="{{ route('admin') }}" class="btn btn-default">Retour à l'accueil</a>
                            </div>
                        </div>
                    </div>
                    <!-- Bouton d'envoi -->
                </div>
            </div>
        </div>
        <!-- ../Le formulaire -->

        {!! Form::close() !!}
    </div><!-- box-body -->

</div><!-- box -->

<div class="box"><!-- box box-primary -->
    <div class="box-header"><!-- box-header -->
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
        <div class="col-xs-8"><!-- col-xs-8 -->
            <h4>
                @if (session('message-profil'))
                    <div class="alert alert-success col-xs-6">
                        {{ Auth::user()->name }} | {{ session('message-profil') }}
                    </div>
                @else
                    {{ Auth::user()->name }} | Ici, vous pouvez modifier votre avatar.
                @endif
            </h4>
        </div><!-- ../col-xs-8 -->
    </div><!-- ../box-header -->

    <div class="box-body"><!-- box-body -->
        {!! Form::model($user, [
           'method'    => 'PUT',
           'route'     => ['admin.updateprofilimage', Auth::user()->id],
           'files'     => true
        ]) !!}

        <!-- avatar homme -->
        <div class="form-horizontal">
            <div class="form-group">
                <img src="{{ asset('backend/img/avatar-homme.jpg') }}" style="margin-left: 15px">
                <div class="col-xs-2 control-label">
                    @if($user->imageprofil != "avatar-homme.jpg")
                        {!! Form::label('avatarhomme', "Choisissez cet avatar") !!}
                        {!! Form::checkbox('avatarhomme', 1, $user->imageprofil == "avatar-homme.jpg" ? true : false) !!}
                    @endif
                    @if($user->imageprofil == "avatar-homme.jpg")
                        {!! Form::label('avatarhomme', "Votre avatar actuel") !!}
                        {!! Form::checkbox('avatarhomme', 1, $user->imageprofil == "avatar-homme.jpg" ? true : false) !!}
                    @endif
                </div>
            </div>
        </div>
        <!-- avatar homme -->

        <!-- avatar femme -->
        <div class="form-horizontal">
            <div class="form-group">
                <img src="{{ asset('backend/img/avatar-femme.jpg') }}" style="margin-left: 15px">
                <div class="col-xs-2 control-label">
                    @if($user->imageprofil != "avatar-femme.jpg")
                        {!! Form::label('avatarfemme', "Choisissez cet avatar") !!}
                        {!! Form::checkbox('avatarfemme', 1, $user->imageprofil == "avatar-femme.jpg" ? true : false) !!}
                    @endif
                    @if($user->imageprofil == "avatar-femme.jpg")
                        {!! Form::label('avatarfemme', "Votre avatar actuel") !!}
                        {!! Form::checkbox('avatarfemme', 1, $user->imageprofil == "avatar-femme.jpg" ? true : false) !!}
                    @endif
                </div>
            </div>
        </div>
        <!-- avatar femme -->

        <!-- Image profil -->
        <div class="form-horizontal">
            <div class="form-group  {{ $errors->has('imageprofil') ? 'has-error': '' }}">
                <div class="col-xs-2 control-label">
                    @if($user->imageprofil == "avatar-neutre.jpg")
                        {!! Form::label('imageprofil', "Votre avatar actuel") !!}
                        {!! Form::checkbox('avatar', 1,
                        $user->imageprofil == "avatar-neutre.jpg" ? true : false) !!}
                        <br/>Téléchargez votre propre avatar.
                        <br/>L'image à teléverser, en &laquo;&nbsp;jpg,&nbsp;&raquo;
                        <br/>sera un dividende du format indiqué.
                        Idéalement exactement à
                        <br/><strong>215 x 215 pixels</strong>.
                    @endif
                    @if($user->imageprofil != "avatar-neutre.jpg")
                        {!! Form::label('imageprofil', "Votre avatar actuel") !!}
                        {!! Form::checkbox('avatar', 1, true) !!}
                        <br/>Téléchargez votre propre avatar.
                        <br/>L'image à teléverser, en &laquo;&nbsp;jpg,&nbsp;&raquo;
                        <br/>sera un dividende du format indiqué.
                        Idéalement exactement à
                        <br/><strong>215 x 215 pixels</strong>.
                    @endif
                </div>
                <div class="col-xs-10">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                            <img src="{{ $user->imageprofil != "avatar-neutre.jpg" ? asset($chemin.$user->imageprofil) : asset($chemin.'/'.'avatar-neutre.jpg') }}"
                            width="215" height="215">
                        </div>

                        <div style="margin-top: 75px">
                        @if ($errors->has('imageprofil'))
                            <span class="help-block">{{ $errors->first('imageprofil') }}</span>
                        @endif
                        <span class="btn btn-default btn-file">
                        <span class="fileinput-new">Sélectionnez votre image</span>
                        {!! Form::file('imageprofil') !!}
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Retirez-la</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <!-- ../Image profil -->

        <!-- Bouton d'envoi -->
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-2 control-label">
                </div>
                <div class="col-xs-10">
                    {!! Form::submit('Validez', ['class' => 'btn btn-primary']) !!}
                    &nbsp;
                    <a href="{{ route('admin') }}" class="btn btn-default">Retour à l'accueil</a>
                </div>
            </div>
        </div>
        <!-- Bouton d'envoi -->

        {!! Form::close() !!}
    </div><!-- box-body -->

</div><!-- box -->