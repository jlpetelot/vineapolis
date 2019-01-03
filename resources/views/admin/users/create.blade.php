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

@section('title', 'Créer un administrateur')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Créer un administrateur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.utilisateurs') }}"> Tous les administrateurs</a></li>
                <li class="active">Créer un administrateur</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4>
                        Administrateur | <span style="color: #3c8dbc">Créer un administrateur</span>
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
                               'method'    => 'POST',
                               'route'     => 'admin.utilisateur.store',
                               'files'      => true
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

                    <!-- Mot de passe de l'utilisateur -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                            <div class="col-xs-2  control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('password', "Mot de passe") !!}
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('password', null,
                                ['class' => 'form-control']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Mot de passe de l'utilisateur -->

                    <!-- Confirmation du mot de passe -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('password_confirm') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                <strong>Confirmation du mot de passe</strong>
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('password_confirm', null,
                                ['class' => 'form-control'
                                ]) !!}
                                @if ($errors->has('password_confirm'))
                                    <span class="help-block">{{ $errors->first('password_confirm') }}</span>
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
                                    <span class="help-block">{{ $errors->first('role') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Rôle -->

                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-2 control-label">
                            </div>
                            <div class="col-xs-10">
                                {!! Form::submit('Créer un administrateur', ['class' => 'btn btn-primary']) !!}
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

