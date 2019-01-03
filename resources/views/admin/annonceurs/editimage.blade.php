@extends('admin.layouts.backend.main')

@section('title', 'Vigneron mise à jour')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Mise à jour de l'image d'vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Mise à jour de l'image d'un vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h4>Vignerons | <span style="color: #00a65a">Mise à jour de l'image du vigneron : </span>{{ $vigneron->societe }}</h4>
                </div>

                <!-- Récupération des champs à cacher -->
                @php
                    $nom                = $vigneron->societe;
                    $adresse            = $vigneron->adresse;
                    $telephone          = $vigneron->telephone;
                    $site               = $vigneron->site;
                    $latlong            = $vigneron->latlong;
                    $sortevin           = $vigneron->sortevin;
                    $qualitevin         = $vigneron->qualitevin;
                    $actif              = $vigneron->actif;
                    $departement        = $vigneron->departement;
                    $regionvinicole     = $vigneron->regionvinicole;
                    $communevinicole    = $vigneron->communevinicole;
                    $localitevinicole   = $vigneron->localitevinicole;
                    $latlongregion      = $vigneron->latlongregion;
                    $zoom               = $vigneron->zoom;
                    $reportage          = $vigneron->reportage;
                    $fiche              = $vigneron->fiche;
                    $video              = $vigneron->video;
                @endphp
                <!-- ../Récupération des champs à cacher -->


                <div class="box-body">

                    {!! Form::model($vigneron, [
                       'method'    => 'PUT',
                       'route'     => ['admin.updateimage', $vigneron->id],
                       'files'      => true
                   ]) !!}

                   <!-- Tous les champs cachés -->
                    {!! Form::hidden('societe') !!}
                    {!! Form::hidden('adresse') !!}
                    {!! Form::hidden('telephone') !!}
                    {!! Form::hidden('site') !!}
                    {!! Form::hidden('latlong') !!}
                    {!! Form::hidden('sortevin') !!}
                    {!! Form::hidden('qualitevin') !!}
                    {!! Form::hidden('actif') !!}
                    {!! Form::hidden('departement') !!}
                    {!! Form::hidden('regionvinicole') !!}
                    {!! Form::hidden('communevinicole') !!}
                    {!! Form::hidden('localitevinicole') !!}
                    {!! Form::hidden('latlongregion') !!}
                    {!! Form::hidden('zoom') !!}
                    {!! Form::hidden('reportage') !!}
                    {!! Form::hidden('fiche') !!}
                    {!! Form::hidden('video') !!}

                    <!-- ../Tous les champs cachés -->

                     <!-- Fiche individuelle vigneron : visuel -->
                    <div class="form-horizontal">
                        <div class="form-group  {{ $errors->has('visuelfiche') ? 'has-error': '' }}">
                            <div class="col-xs-2 control-label">
                                {!! Form::label('visuelfiche', 'Fiche individuelle vigneron : visuel') !!}
                            </div>
                            <div class="col-xs-10">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="https://fakeimg.pl/630x200/e9e1d0/666/?text=630x200 pixels" alt="">
                                    </div>
                                    <div style="margin-top: 60px;">
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Sélectionnez une image</span>
                                            {!! Form::file('visuelfiche') !!}
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Retirez</a>
                                    </div>
                                </div>
                                @if ($errors->has('visuelfiche'))
                                    <span class="help-block">{{ $errors->first('visuelfiche') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Fiche individuelle vigneron : visuel -->

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
                                {{--['class' => 'form-control',--}}
                                {{--'placeholder' => 'Format obligatoire : Y-m-d H:i:s (2018-04-14 16:30:26)']) !!}--}}
                                {!! Form::date('updated_at', \Carbon\Carbon::now()) !!}
                                @if ($errors->has('updated_at'))
                                <span class="help-block">{{ $errors->first('updated_at') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Date de mise à jour  -->

                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-2 control-label">
                            </div>
                            <div class="col-xs-10">
                                {!! Form::submit('Mise à jour', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <a href="{{ route ('admin.all') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                    </div>

                    <br/><br/>

                    {!! Form::close() !!}

                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
