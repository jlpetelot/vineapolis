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
                <li class="active">Niveau régional</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-default" style="color: #990033">
                <div class="box-header with-border">
                    <h4>{{ $annonceur->societe }} | <span style="color: #f39c12">Vous avez choisi le niveau régional</span></h4>
                    <br/>
                    <div class="col-xs-12">
                        C'est-à-dire une présence dans une des régions les plus importantes du vin : 
                        Bordeaux, Bourgogne, Champagne, Côtes du Rhône Septentrional et Sud-Ouest.
                        <p> Nous vous proposons 3 formats, à 3 tarifs différents. 
                            Choisissez parmi les régions proposées et confirmez votre choix, si vous le voulez bien.
                        </p>
                        <p style="padding-top:15px"> &bull; Le plus grand format : (382px) x (440px) à 3 990€ HT (*)</p>
                        <p> &bull; Le second format : (382px) x (238px) à 3 490€ HT (*)</p>
                        <p> &bull; Le troisième format : (198px) x (238px) à 2 990€ HT (*)</p>
                        <p style="font-size:10px">(*)
                            Nos tarifs s'entendent 12 mois consécutifs, hors TVA.
                            Le paiement s'effectue sur notre site grâce à nos comptes sécurisés Visa Carte Bleue et Paypal.
                            Un justificatif de paiement vous est adressé dès sa confirmation.
                        </p>
                        <br/>
                         <!-- le formulaire -->
                         {!! Form::open([
                            'method'    => 'POST',
                            'route'     => ['admin.annonceurs.choixannonce.regionalchoix', $annonceur->id],
                        ]) !!}
                        <!-- Les erreurs -->
                        @if ($errors->has('choix'))
                            <div class="alert alert-danger">
                                {{ $errors->first('choix') }}
                            </div>
                        @endif
                        <!-- ../Les erreurs -->

                        <!-- Bordeaux -->
                        <p>
                            {{ Form::radio('choix', 1, false) }}
                            &nbsp;{!! Form::label('choix', 'Bordeaux') !!}
                        </p>
                        <img src="{{ asset('backend/img/Bordeaux_admin.jpg') }}" width="20%" height="auto">
                        <br/><br/>
                        <!-- Bordeaux -->

                        <!-- Bourgogne -->
                        <p>
                            {{ Form::radio('choix', 2, false) }}
                            &nbsp;{!! Form::label('choix', 'Bourgogne') !!}
                        </p>
                        <img src="{{ asset('backend/img/Bourgogne_admin.jpg') }}" width="20%" height="auto">
                        <br/><br/>
                        <!-- ../Bourgogne -->
                        
                        <!-- Champagne -->
                        <p>
                            {{ Form::radio('choix', 3, false) }}
                            &nbsp;{!! Form::label('choix', 'Champagne') !!}
                        </p>
                        <img src="{{ asset('backend/img/Champagne_admin.jpg') }}" width="20%" height="auto">
                        <br/><br/>
                        <!-- ../Champagne -->

                        <!-- Côtes du Rhône Septentrional -->
                        <p>
                            {{ Form::radio('choix', 4, false) }}
                            &nbsp;{!! Form::label('choix', 'Côtes du Rhône Septentrional') !!}
                        </p>
                        <img src="{{ asset('backend/img/Rhone_Septen_admin.jpg') }}" width="20%" height="auto">
                        <br/><br/>
                        <!-- ../Côtes du Rhône Septentrional -->

                         <!-- Loire -->
                        <p>
                            {{ Form::radio('choix', 5, false) }}
                            &nbsp;{!! Form::label('choix', 'Loire') !!}
                        </p>
                        <img src="{{ asset('backend/img/Loire_admin.jpg') }}" width="20%" height="auto">
                        <br/><br/>
                        <!-- ../CLoire -->

                        <!-- Sud-Ouest -->
                        <p>
                            {{ Form::radio('choix', 5, false) }}
                            &nbsp;{!! Form::label('choix', 'Sud-Ouest') !!}
                        </p>
                        <img src="{{ asset('backend/img/Sud-Ouest_admin.jpg') }}" width="20%" height="auto">
                        <br/>
                        <!-- ../Sud-Ouest -->

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
