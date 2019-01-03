@extends('admin.layouts.backend.main')

@section('title', 'Utilisateurs')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les administrateurs</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Tous les administrateurs</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header">
                    <h4>Administrateurs | <span style="color: #0073b7">Tous les administrateurs</span></h4>
                </div>
                @include('admin.users.partials.touslesutilisateurs')
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>

@endsection
