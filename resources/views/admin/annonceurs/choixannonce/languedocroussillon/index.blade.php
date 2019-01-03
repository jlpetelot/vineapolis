@extends('admin.layouts.backend.main')

@section('title', 'Les annonceurs')

@section('content')
    <style>
        .box.box-default {
            border-top-color: #f39c12;
        }
        .box-header.with-border {
            border-bottom: 1px solid #f39c12!important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Espace annonceurs</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Niveau communal</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-default" style="color: #990033">
                <div class="box-header with-border">
                    <h4>{{ $annonceur->societe }} | 
                        <span style="color: #f39c12">
                            Vous avez choisi les communes du Languedoc-Roussillon
                            [&nbsp;<img src="{{ asset('backend/img/Languedoc-Roussillon_admin.jpg') }}" 
                            class="img-circle" width="7%" height="auto">&nbsp;]
                        </span>
                    </h4>
                    <br/>
                    <div class="col-xs-12" style="margin-top:-40px">
                            C'est-à-dire une présence au chœur même de ces vignobles.
                            <p> 1 seul format, 1 seul tarif. Choisissez parmi les régions ou communes proposées et confirmez votre choix, si vous le voulez bien.
                            </p>
                            <p style="padding-top:15px"> &bull; 1 seul format de (198px) x (238px) à 790€ HT (*)</p>
                            <p style="font-size:10px">(*)
                                Nos tarifs s'entendent 12 mois consécutifs, hors TVA.
                                Le paiement s'effectue sur notre site grâce à nos comptes sécurisés Visa Carte Bleue et Paypal.
                                Un justificatif de paiement vous est adressé dès sa confirmation.
                            </p>
                        <br>
                        <p style="color:#f39c12;">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Choisissez parmi les disponibilités proposées et confirmez votre choix, si vous le voulez bien.
                        </p>
                         <!-- le formulaire -->
                        {!! Form::open([
                            'method'    => 'POST',
                            'route'     => ['admin.annonceurs.choixannonce.languedocroussillon.validation', $annonceur->id],
                        ]) !!}
                        <!-- Les erreurs -->
                        @if ($errors->has('disponible'))
                            <div class="alert alert-danger">
                                {{ $errors->first('disponible') }}
                            </div>
                        @endif

                        <!-- 1er rang -->
                        <div class="row">
                            <div class="col-xs-8">
                                @if ($pubs[0]->actif == 0 )
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238.jpg') }}">
                                        {{ Form::radio('disponible', 1, false) }}
                                        {!! Form::label('disponible', 'Disponible') !!}
                                    </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                                <!-- Le fond 3 -->
                                <div class="col-xs-5">
                                    <img src="{{ asset('backend/img/Fond3.jpg') }}" style="margin-left:48px">
                                </div>
                                <!-- Le fond 3 -->
                                @if ($pubs[1]->actif == 0 )
                                <div class="col-xs-1">
                                    <img src="{{ asset('backend/img/191x238.jpg') }}">
                                    {{ Form::radio('disponible', 2, false) }}
                                    {!! Form::label('disponible', 'Disponible') !!}
                                </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <!-- ../1er rang -->

                        <!-- 2ème rang -->
                        <div class="row">
                            <div class="col-xs-8">
                                @if ($pubs[2]->actif == 0 )
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238.jpg') }}">
                                        {{ Form::radio('disponible', 3, false) }}
                                        {!! Form::label('disponible', 'Disponible') !!}
                                    </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                                <!-- Le fond 3 -->
                                <div class="col-xs-5">
                                    <img src="{{ asset('backend/img/Fond3.jpg') }}" style="margin-left:48px">
                                </div>
                                <!-- Le fond 3 -->
                                @if ($pubs[3]->actif == 0 )
                                <div class="col-xs-1">
                                    <img src="{{ asset('backend/img/191x238.jpg') }}">
                                    {{ Form::radio('disponible', 4, false) }}
                                    {!! Form::label('disponible', 'Disponible') !!}
                                </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <!-- ../2ème rang -->

                        <!-- 3ème rang -->
                          <div class="row">
                            <div class="col-xs-8">
                                @if ($pubs[4]->actif == 0 )
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238.jpg') }}">
                                        {{ Form::radio('disponible', 5, false) }}
                                        {!! Form::label('disponible', 'Disponible') !!}
                                    </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                                <!-- Le fond 3 -->
                                <div class="col-xs-5">
                                    <img src="{{ asset('backend/img/Fond3.jpg') }}" style="margin-left:48px">
                                </div>
                                <!-- Le fond 3 -->
                                @if ($pubs[5]->actif == 0 )
                                <div class="col-xs-1">
                                    <img src="{{ asset('backend/img/191x238.jpg') }}">
                                    {{ Form::radio('disponible', 6, false) }}
                                    {!! Form::label('disponible', 'Disponible') !!}
                                </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <!-- ../3ème rang -->

                        <!-- 4ème rang -->
                        <div class="row">
                            <div class="col-xs-8">
                                @if ($pubs[6]->actif == 0 )
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238.jpg') }}">
                                        {{ Form::radio('disponible', 7, false) }}
                                        {!! Form::label('disponible', 'Disponible') !!}
                                    </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                                <!-- Le fond 3 -->
                                <div class="col-xs-5">
                                    <img src="{{ asset('backend/img/Fond3.jpg') }}" style="margin-left:48px">
                                </div>
                                <!-- Le fond 3 -->
                                @if ($pubs[7]->actif == 0 )
                                <div class="col-xs-1">
                                    <img src="{{ asset('backend/img/191x238.jpg') }}">
                                    {{ Form::radio('disponible', 8, false) }}
                                    {!! Form::label('disponible', 'Disponible') !!}
                                </div>
                                @else
                                    <div class="col-xs-1">
                                        <img src="{{ asset('backend/img/191x238_epuise.jpg') }}">
                                    </div>
                                @endif
                            </div>                            
                        </div>
                        <!-- ../4ème rang -->
        
                        <div class="row" style="margin-top:20px; margin-bottom:40px">
                            <div class="col-xs-6">
                                <input class="btn btn-warning" type="submit" value="Cochez et confirmez votre choix">
                                &nbsp;<a href="{{ route('admin') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                        {{ Form::close() }}
                        <!-- ../le formulaire -->
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
