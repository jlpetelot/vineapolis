<!-- L'éditeur de texte TINYMCE -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


@extends('admin.layouts.backend.main')

@section('title', 'Mise à jour du statut')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Mise à jour du statut</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons import</a></li>
                <li class="active">Mise à jour du statut</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h4>Vignerons | <span style="color: #00a65a">Mise à jour du statut de : </span>{{ $vigneron->societe }}</h4>
                </div>

                <div class="box-body">
                    @include('admin.importvignerons.partials.editvigneronimport')
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

    @include('admin.importvignerons.partials.script')

@endsection
