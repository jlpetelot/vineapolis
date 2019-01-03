@extends('admin.layouts.backend.main')

@section('title', 'Créer un identifiant unique')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Accréditation d'un annonceur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}"> Tous les annonceurs</a></li>
                <li class="active">Conversion d'un annonceur en utilisateur</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- L'annonceur utilisateur -->
            <div class="box box-warning">
                <div class="box-header">
                    <h4>
                        Accréditation | <span style="color: #f39c12"> Conversion d'un annonceur en utilisateur</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                    @if (session('error'))
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="alert alert-danger text-center">{{ session('error') }}</div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="box-body"><!-- box-body -->
                    {!! Form::open([
                       'method'    => 'POST',
                       'route'     => ['admin.annonceurs.store.identifiant']
                    ]) !!}

                    <!-- Nom de l'utilisateur -->
                        <div class="form-horizontal">
                            <div class="form-group {{ $errors->has('societe') ? 'has-error': '' }}">
                                <div class="col-xs-2  control-label">
                                    <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                        (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                    </small>
                                    {!! Form::label('societe', "Nom de l'annonceur") !!}
                                </div>
                                <div class="col-xs-10">
                                    {!! Form::text('societe', $annonceur->societe,
                                    ['class' => 'form-control', 'placeholder' => 'Par exemple : Jacqueline Tartempion']) !!}
                                    @if ($errors->has('societe'))
                                        <span class="help-block">{{ $errors->first('societe') }}</span>
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
                                    {!! Form::text('email', $annonceur->email,
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
                                    <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                        (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                    </small>
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

                        <!-- Bouton d'envoi -->
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-2 control-label">
                                </div>
                                <div class="col-xs-10">
                                    {!! Form::submit('Conversion d\'un annonceur', ['class' => 'btn btn-info']) !!}
                                    &nbsp;
                                    <a href="{{ route ('admin.annonceurs') }}" type="button" class="btn btn-default">Annulez</a>
                                </div>
                            </div>
                        </div>
                        <!-- ../Bouton d'envoi -->

                        {!! Form::close() !!}

                </div><!-- /.box-body -->

                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- ../L'annonceur utilisateur -->

        </section>
        <!-- /.content -->
    </div>

@endsection

