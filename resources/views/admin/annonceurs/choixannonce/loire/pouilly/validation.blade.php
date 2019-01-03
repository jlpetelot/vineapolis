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
                    <h4>{{ $annonceur->societe }} | 
                        <span style="color: #f39c12">
                            Vous avez choisi l'espace {{ $pub->label }} dans les communes de Pouilly
                            [&nbsp;<img src="{{ asset('backend/img/'.$pub->formatremplace ) }}" 
                            width="5%" height="5%">&nbsp;]
                        </span>
                    </h4>
                    <br/>
                    <div class="col-xs-12" style="margin-top:-50px">
                        <p> Cette annonce, au format {{ $pub->format }} est au prix de {{ number_format($pub->prix, 2, ',', ' ') }} € HT/an.</p>
                        <p style="font-size:10px">(*)
                            Notre tarif s'entend 12 mois consécutifs, hors TVA.
                            Le paiement s'effectue sur notre site grâce à nos comptes sécurisés Visa Carte Bleue et Paypal.
                            Un justificatif de paiement vous est adressé dès sa confirmation.
                        </p>
                        <br>
                        <p>Veuillez téléverser l'url de votre site et votre annonce au format requis.
                        <!-- Formulaire -->
                        {!! Form::open([
                            'method'    => 'POST',
                            'route'     => ['admin.annonceurs.storeannonce', $annonceur->id],
                            'files'      => true
                         ]) !!}

                        @include('admin.annonceurs.choixannonce.partials.validationformulairepartie')
                        
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="btn btn-warning" type="submit" value="Validez et téléversez votre annonce">
                                &nbsp;<a href="{{ route('admin') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <!-- Formulaire -->
                        
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
