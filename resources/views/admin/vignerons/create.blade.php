<!-- L'éditeur de texte TINYMCE -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

@extends('admin.layouts.backend.main')

@section('title', 'Créer un vigneron')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Créer un vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Créer un vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h4>
                        Vignerons | <span style="color: #00a65a">Créer un vigneron</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>

                <div class="box-body">

                    @include('admin.vignerons.partialsadmin.formulairevigneron')

                </div>
                <br/><br/>

                <!-- /.box-body -->
                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

    @include('admin.vignerons.partials.script')

@endsection

