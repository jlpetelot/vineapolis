@extends('admin.layouts.backend.main')

@section('title', 'Vigneron mise à jour')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Mise à jour des annonces</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}"> Tous les annonceurs</a></li>
                <li class="active">Mise à jour des annonces</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-warning">
                <div class="box-header">
                    <h4>Annonceurs | Mise à jour des annonces de l'annonceur 
                    <span style="color: #f39c12">{{ $annonceur->societe }}</span></h4>
                    <p style="font-size: 12px; margin-top: -10px;">Pour mettre à jour le ou les annonces de l'annonceur,
                        vous devez sélectionnez la région concernée et téléverser un nouveau visuel.
                        Sinon, annulez.
                    </p>
                </div>

                <div class="box-body">
                    @include('admin.annonceurs.partials.editannonceurannonce')
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
