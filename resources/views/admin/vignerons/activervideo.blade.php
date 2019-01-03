@extends('admin.layouts.backend.main')

@section('title', 'Vigneron mise à jour')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Activer la vidéo d'un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Activer la vidéo d'un vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header">
                    <h4>Vignerons | <span style="color: #00a65a">Activer la vidéo du vigneron : </span>{{ $vigneron->societe }}</h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>

                <div class="box-body">
                    {!! Form::model($vigneron, [
                        'method'    => 'POST',
                        'route'     => ['admin.vignerons.storevideo', $vigneron->id]
                    ]) !!}

                    <!-- Fiche Youtube -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('video') ? 'has-error': '' }}">
                            <div class="col-xs-1 control-label">
                                {!! Form::label('video', "La vidéo Youtube") !!}
                            </div>
                            <div class="col-xs-11">
                                {!! Form::text('video', null,
                                ['class' => 'form-control',
                                'placeholder' => 'Par exemple : https://www.youtube.com/watch?v=CobeBZNlR8E']) !!}
                                 @if ($errors->has('video'))
                                 <span class="help-block">{{ $errors->first('video') }}</span>
                             @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Fiche Youtubee -->
                    
                    <br/>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-1 control-label">
                            </div>
                            <div class="col-xs-11">
                                {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                    </div>
                    
                    {!! Form::close() !!}
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

    @include('admin.vignerons.partials.script')

@endsection
