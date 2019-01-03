@extends('admin.layouts.backend.main')

@section('title', 'Mise à jour d\'un utilisateur')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Mots de passe sauvegardés en clair</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.utilisateurs') }}"> Tous les utilisateurs</a></li>
                <li class="active">Mots de passe sauvegardés</li>
            </ol>
        </section>
        
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h4>
                        Utilisateurs | <span style="color: #0073b7">Mots de passe sauvegardés en clair</span>
                    </h4>
                </div>
                @include('admin.users.partials.motsdepasse')
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>

@endsection

