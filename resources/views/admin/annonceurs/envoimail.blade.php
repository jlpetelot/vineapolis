@extends('admin.layouts.backend.main')

@section('title', 'Réponse au commentaire')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> <h1>Envoi d'un email à l'administration</h1></h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Envoi d'un email à l'administration</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-warning">
                <div class="box-header">
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #f39c12;; font-weight: 600">
                        {{ $user->name }} | </span>Vous souhaitez envoyer un email à l'administration.
                        </h4>
                    </div>

                    @if(session('message'))
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-xs-8">
                                    <div class="alert alert-warning">
                                        {{ session('message') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <div class="row">
                            <div class="box-body">
                                <!-- Le formulaire -->
                                {!! Form::open([
                                    'route' => ['admin.message.envoimessage', $user->id],
                                    'method' => 'post'
                                ]) !!}

                                <!-- Sujet -->
                                <div class="form-horizontal">
                                    <div class="form-group {{ $errors->has('sujet') ? 'has-error': '' }}">
                                        <div class="col-xs-8">
                                            {!! Form::label('sujet', 'Choisissez un sujet') !!}
                                        </div>
                                        <div class="col-xs-8">
                                            {{ Form::select('sujet', 
                                            [
                                                '1' => 'Je souhaite une offre personnalisée',
                                                '2' => 'Je souhaite prolonger la durée de mon annonce',
                                                '3' => 'Je souhaite modifier mon annonce',
                                                '4' => "Je souhaite changer d'annonce",
                                                '5' => 'Je souhaite acheter une autre annonce',
                                                '6' => "J'aimerais obtenir un remboursement",
                                                '7' => 'Autre sujet',
                                            ],
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Choisissez un sujet'
                                            ]) }}
                                                @if ($errors->has('sujet'))
                                                <span class="help-block">{{ $errors->first('sujet') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- ../Sujet -->

                                <!-- !!!! ON APELLE LA VARIABLE MESSAGE CONTENU CAR MESSAGE EST RÉSERVÉ À L'ENVOI DES MAILS !!!! -->
                                <div class="form-horizontal">
                                    <div class="form-group {{ $errors->has('contenu') ? 'has-error': '' }}">
                                        <div class="col-xs-8" style="margin-top: 30px">
                                            {!! Form::label('contenu', 'Votre message :') !!}
                                        </div>
                                        <div class="col-xs-8">
                                            {!! Form::textarea('contenu', NULL, [
                                                'class' => 'form-control',
                                                'rows' => '8',
                                                'id' => 'contenu',
                                                'placeholder' => 'Le contenu de votre message est :'
                                            ]) !!}
                                            @if ($errors->has('contenu'))
                                                <span class="help-block">{{ $errors->first('contenu') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- ../Message  -->

                                <!-- Bouton d'envoi -->
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-8">
                                            {!! Form::submit('Envoyer', ['class' => 'btn btn-warning']) !!}
                                            &nbsp;
                                            <a href="{{ route ('admin') }}" type="button" class="btn btn-default">Annulez</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ../Bouton d'envoi -->
    
                                {!! Form::close() !!}
                            </div>
                        </div>
                        
                        <!-- /.box-body -->
                    </div><!-- ../col-xs-12 -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div><!-- ../content-wrapper -->
@endsection
