@extends('admin.layouts.backend.main')

@section('title', 'Les annonceurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les annonceurs</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Déjà payé</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-warning">
                <div class="box-header">
                    <div class="col-xs-10">
                        <h4>
                            {{ $annonceur->societe }} | <span style="color: #f39c12">vous avez déjà acheté cette annonce !</span>
                        </h4>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-xs-12">
                        <p>Vous annonce sera encore effective jusqu'à <span style="color: #f39c12; font-weight:bold;">{{ $date->diffForHumans() }}.</span></p>
                        <p>Souhaitez-vous prolonger la durée de cette annonce ?&nbsp;<a href="{{ route('admin.annonceurs.envoiemail', Auth::user()->id) }}" class="btn btn-warning btn-sm">Prolonger la durée</a></p>
                        <p>Acquérir une nouvelle annonce ?&nbsp;<a href="{{ route('admin') }}" class="btn btn-warning btn-sm">Une autre annonce</a></p>
                        <p>Ou préférez-vous accéder à votre profil ?&nbsp;<a href="{{ route('admin.profil', $annonceur->id ) }}" class="btn btn-default btn-sm">Votre profil</a></p>
                    </div>
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection