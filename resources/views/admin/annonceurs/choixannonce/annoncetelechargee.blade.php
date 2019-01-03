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
                <li class="active">Niveau national</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-default" style="color: #990033">
                <div class="box-header with-border">
                    <h4>{{ $annonceur->societe }} | 
                        <span style="color: #f39c12">
                            Votre annonce et l'adresse du site associée ont été téléchargés avec succès.
                            @if ($pub->image != NULL)
                                [&nbsp;<img src="/img/filemanager/annonceurs/{{ $pub->image }}"
                                width="8%" height="auto">&nbsp;]
                                {{ $pub->internet }}
                            @else
                                [&nbsp;<img src="{{ asset('backend/img/191x238.jpg') }}" 
                                width="5%" height="auto">&nbsp;]
                            @endif
                        </span>
                    </h4>
                    <div class="col-xs-12" style="margin-top:-20px">
                        <br>Afin d'accéder au paiement, veuillez vérifier vos données, svp.
                        </p>
                        <p>
                            Votre nom ou société : <strong>{{ $annonceur->societe }}</strong>
                            <br/>Votre email : <strong>{{ $annonceur->email }}</strong>
                            @if ($annonceur->adresse)
                                <br/>Votre adresse : <strong>{{ $annonceur->adresse }}</strong>
                            @endif
                            @if ($annonceur->telephone)
                                <br/>Votre téléphone : <strong>{{ $annonceur->telephone }}</strong>
                            @endif
                            <br/>Votre annonce téléversée au format .jpg : <strong>{{ $annonceur->annonce }}</strong>
                            <br/>L'url de votre site : <strong>{{ $annonceur->urlsite }}</strong>
                            <br/>L'emplacement : <strong>{{ $pub->label }}</strong> et la région choisie : <strong>{{ $pub->categorie }}</strong>
                            <br/>Le format de l'annonce : <strong>{{ $pub->format }}</strong>
                            <br/>Son prix HT : <strong>{{ number_format($pub->prix, 2, ',', ' ') }} €/an</strong>
                        </p>
                        <br/>
                        <div class="row">
                            <div class="col-xs-1">
                                <!-- On envoit des champs cachés pour la future carte -->
                                {!! Form::open([
                                    'method'    => 'POST',
                                    'route'     => ['admin.annonceurs.panier.ajouter', $annonceur->id]
                                ]) !!}
                                {!! Form::hidden('prix', $pub->prix) !!}
                                <input class="btn btn-warning" type="submit" value="Confirmez les données">
                                {!! Form::close() !!}
                                <!-- ../On envoit des champs cachés pour la future carte -->
                            </div>
                            <div class="col-xs-1" style="margin-left:27px">
                                {!! Form::open([
                                    'method'    => 'POST',
                                    'route'     => ['admin.annonceurs.annulation', $annonceur->id]
                                ]) !!}
                                <!-- On envoit des champs cachés pour la future carte -->
                                <input class="btn btn-danger" type="submit" value="Annulez l'opération">
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection
