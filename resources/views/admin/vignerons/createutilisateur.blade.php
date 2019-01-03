@extends('admin.layouts.backend.main')

@section('title', 'Créer un identifiant unique')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Accréditation d'un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Conversion d'un vigneron en utilisateur</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Le vigneron utilisateur -->
            <div class="box box-danger">
                <div class="box-header">
                    <h4>
                        Accréditation | <span style="color: #dd4b39"> Conversion d'un vigneron en utilisateur</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                    @if (session('error'))
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="alert alert-danger text-center">{{ session('error') }}</div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="box-body"><!-- box-body -->
                    {!! Form::open([
                       'method'    => 'POST',
                       'route'     => 'admin.store.identifiant'
                    ]) !!}

                    <!-- Nom de l'utilisateur -->
                        <div class="form-horizontal">
                            <div class="form-group {{ $errors->has('societe') ? 'has-error': '' }}">
                                <div class="col-xs-2  control-label">
                                    <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                        (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                    </small>
                                    {!! Form::label('societe', "Nom du vigneron") !!}
                                </div>
                                <div class="col-xs-10">
                                    {!! Form::text('societe', $vigneron->societe,
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
                                    {!! Form::text('email', $vigneron->email,
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
                                    {!! Form::submit('Conversion du vigneron', ['class' => 'btn btn-danger']) !!}
                                    &nbsp;
                                    <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
                                </div>
                            </div>
                        </div>
                        <!-- ../Bouton d'envoi -->

                        {!! Form::close() !!}

                </div><!-- /.box-body -->

                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- ../Le vigneron utilisateur -->

            <!-- Récupération de l'id de l'utilisateur -->
            {{--<div class="box box-danger">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h4>--}}
                        {{--Vigneron | <span style="color: #dd4b39">2 - Récupération et affectation de l'identifiant unique du vigneron</span>--}}
                    {{--</h4>--}}
                    {{--<p style="font-size: 12px; margin-top: -10px;">(Le champ marqué d'une astérisque--}}
                        {{--<i class="fa fa-fw fa-asterisk text-red"></i>--}}
                        {{--est obligatoire)--}}
                    {{--</p>--}}

                    {{--<div class="box-tools pull-right">--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimiser/Etendre">--}}
                            {{--<i class="fa fa-minus"></i></button>--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Retirer">--}}
                            {{--<i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="box-body">--}}

                {{--{!! Form::open([--}}
                      {{--'method'    => 'POST',--}}
                      {{--'route'     => 'admin.utilisateur.store',--}}
                      {{--'files'      => true--}}
                   {{--]) !!}--}}

                    {{--<!-- Identifiant unique-->--}}
                    {{--<div class="form-horizontal">--}}
                        {{--<div class="form-group {{ $errors->has('user_id') ? 'has-error': '' }}">--}}
                            {{--<div class="col-xs-2 control-label">--}}
                                {{--{!! Form::label('user_id', "Récupération de l'identifiant unique") !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-10">--}}
                                {{--{!! Form::text('user_id', null,--}}
                                {{--['class' => 'form-control',--}}
                                {{--'placeholder' => 'Cette clé est nulle par défaut']) !!}--}}
                                {{--@if ($errors->has('user_id'))--}}
                                    {{--<span class="help-block">{{ $errors->first('user_id') }}</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ../Affectation de la clé étrangère user_id de l'utilisateur -->--}}

                    {{--<!-- Affectation de la clé étrangère user_id de l'utilisateur -->--}}
                    {{--<div class="form-horizontal">--}}
                        {{--<div class="form-group {{ $errors->has('user_id') ? 'has-error': '' }}">--}}
                            {{--<div class="col-xs-2 control-label">--}}
                                {{--<small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">--}}
                                    {{--(<i class="fa fa-fw fa-asterisk text-red"></i>)--}}
                                {{--</small>--}}
                                {{--{!! Form::label('user_id', "Affectation de l'dentifiant") !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-10">--}}
                                {{--{!! Form::text('user_id', null,--}}
                                {{--['class' => 'form-control',--}}
                                {{--'placeholder' => 'Cette clé est nulle par défaut']) !!}--}}
                                {{--@if ($errors->has('user_id'))--}}
                                    {{--<span class="help-block">{{ $errors->first('user_id') }}</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ../Affectation de la clé étrangère user_id de l'utilisateur -->--}}

                    {{--<!-- Bouton d'envoi -->--}}
                    {{--<div class="form-horizontal">--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-xs-2 control-label">--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-10">--}}
                                {{--{!! Form::submit("Affectation de l'identifiant", ['class' => 'btn btn-danger']) !!}--}}
                                {{--&nbsp;--}}
                                {{--<a href="{{ route ('admin.utilisateurs') }}" type="button" class="btn btn-default">Annulez</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ../Bouton d'envoi -->--}}

                    {{--{!! Form::close() !!}--}}

                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
                {{--<br/>--}}
                {{--<!-- /.box-footer-->--}}
            {{--</div>--}}
            <!-- ../Récupération de l'id de l'utilisateur -->

        </section>
        <!-- /.content -->
    </div>

@endsection

