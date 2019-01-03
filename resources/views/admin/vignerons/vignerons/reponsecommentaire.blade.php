@extends('admin.layouts.backend.main')

@section('title', 'Réponse au commentaire')

@section('content')

    <div class="content-wrapper">
        {{-- On récupère l'id du user logué --}}
        @php
            $user = Auth()->user()->id;
        @endphp
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Répondre au commentaire</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.vignerons.commentaires', $user) }}"></i> Commentaires postés</a></li>
                <li class="active">Commentaire de {{ $commentaire->name }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Vous souhaitez répondre au commentaire de {{ $commentaire->name }}.
                        </h4>
                    </div>

                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <div style="font-size: 12px">
                            <p>
                                Nous nous réservons 24 heures pour définitivement accréditer votre réponse.
                            </p>
                        </div>
                        <br/>
                        <div class="row">
                                <div class="box-body" style="margin-left: 5px">
                                    <div class="col-xs-8" style="margin-left: -15px">
                                        <span style="border:1px solid #aaa; padding:5px">
                                            Contenu du commentaire de <strong>{{ $commentaire->name }}</strong>
                                        posté <strong>{{ $commentaire->created_at->diffForHumans() }}</strong> :
                                        </span>
                                        <p>{!! $commentaire->body_html !!}</p>
                                    </div>
                                    
                                    <!-- Le formulaire -->
                                    {!! Form::open([
                                        'route' => ['admin.vignerons.commentaire.update', $commentaire->id],
                                        'method' => 'put'
                                    ]) !!}
                                    <!-- !!!! ON APELLE LA VARIABLE MESSAGE CONTENT CAR MESSAGE EST RÉSERVÉ À L'ENVOI DES MAILS !!!! -->
                                    <div class="form-horizontal">
                                        <div class="form-group {{ $errors->has('reponse') ? 'has-error': '' }}">
                                            <div class="col-xs-8" style="margin-top: 30px">
                                                {!! Form::label('reponse', 'Votre réponse :') !!}
                                            </div>
                                            <div class="col-xs-8">
                                                {!! Form::textarea('reponse', NULL, [
                                                    'class' => 'form-control',
                                                    'rows' => '8',
                                                    'id' => 'reponse',
                                                    'placeholder' => 'Votre réponse à ce message est :'
                                                ]) !!}
                                                @if ($errors->has('reponse'))
                                                    <span class="help-block">{{ $errors->first('reponse') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ../Message  -->
    
                                    <!-- Bouton d'envoi -->
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-xs-8">
                                                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
                                                &nbsp;
                                                <a href="{{ route ('admin.vignerons.commentaires', $user) }}" type="button" class="btn btn-default">Annulez</a>
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
