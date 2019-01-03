<!-- Script JS TINYMCE -->
<script src="{{ asset('backend/js/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('backend/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 280,
        branding: false,
        language : 'fr_FR',
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code',
            "media",
            "code"
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify ' +
        '| link image | code',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });
</script>
<!-- ../Script JS TINYMCE -->


@extends('admin.layouts.backend.main')

@section('title', 'Mise à jour d\'un utilisateur')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Mise à jour d'un administrateur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.utilisateurs') }}"> Tous les administrateurs</a></li>
                <li class="active">Mise à jour d'un administrateur</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h4>
                        Administrateur | Mise à jour de l'administrateur <span style="color: #3c8dbc">{{ $user->name }}</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimiser/Etendre">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Retirer">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">

                {!! Form::model($user, [
                               'method'    => 'PUT',
                               'route'     => ['admin.utilisateur.update', $user->id]
                           ]) !!}

                    <!-- Nom de l'utilisateur -->
                    <div class="form-horizontal">
                       <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                           <div class="col-xs-2  control-label">
                               <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                   (<i class="fa fa-fw fa-asterisk text-red"></i>)
                               </small>
                               {!! Form::label('name', "Prénom et nom") !!}
                           </div>
                           <div class="col-xs-10">
                               {!! Form::text('name', null,
                               ['class' => 'form-control', 'placeholder' => 'Par exemple : Jacqueline Tartempion']) !!}
                               @if ($errors->has('name'))
                                   <span class="help-block">{{ $errors->first('name') }}</span>
                               @endif
                           </div>
                       </div>
                    </div>
                    <!-- ../Nom de l'utilisateur -->

                    <!-- Email de l'utilisateur -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                            <div class="col-xs-2  control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('email', "Email") !!}
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('email', null,
                                ['class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Email de l'utilisateur -->

                    <!-- Ancien mot de passe -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('old_password') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <strong>Ancien mot de passe</strong>
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('old_password', '',
                                ['class' => 'form-control',
                                    'placeholder' => "Pour changer de mot de passe, vous devez valider l'ancien. Si vous souhaitez le conserver, ne faites rien."
                                ]) !!}
                                @if ($errors->has('old_password'))
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
                            <div class="col-xs-2 control-label">
                                <strong>Nouveau mot de passe</strong>
                            </div>
                            <div class="col-xs-10">
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
                        <div class="form-group {{ $errors->has('new_password-confirm') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <strong>Confirmation du mot de passe</strong>
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('new_password-confirm', null,
                                ['class' => 'form-control'
                                ]) !!}
                                @if ($errors->has('new_password-confirm'))
                                    <span class="help-block">{{ $errors->first('new_password-confirm') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Confirmation du mot de passe -->

                    <!-- Rôle -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('name', 'Role') !!}
                            </div>
                            <div class="col-xs-10">
                                {!! Form::select('role', App\Role::pluck('name', 'name'),
                                null, [
                                'class' => 'form-control',
                                'placeholder' => 'Choisissez un rôle',
                                'order-by' => 'id'
                                ]) !!}
                                @if ($errors->has('role'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Rôle -->

                    <!-- Date de mise à jour -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('updated_at') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('updated_at', 'Date de mise à jour') !!}
                            </div>
                            <div class="col-xs-10">
                                {{--{!! Form::text('updated_at', null,--}}
                                {{--['class' => 'form-control', 'placeholder' => --}}
                                {{--'Format obligatoire : Y-m-d H:i:s (2018-04-14 16:30:26)']) !!}--}}
                                {!! Form::date('updated_at', \Carbon\Carbon::now()) !!}
                                @if ($errors->has('updated_at'))
                                    <span class="help-block">{{ $errors->first('updated_at') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Date de mise à jour -->

                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-2 control-label">
                            </div>
                            <div class="col-xs-10">
                                {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <a href="{{ route ('admin.utilisateurs') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
                </div>
                <br/><br/>

                <!-- /.box-body -->
               <br/>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection

