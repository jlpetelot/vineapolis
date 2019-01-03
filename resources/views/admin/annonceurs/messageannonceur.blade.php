@extends('admin.layouts.backend.main')

@section('title', 'Envoyer un message à un vigneron')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Envoyer un message à un annonceur</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.annonceurs') }}"> Tous les annonceurs</a></li>
                <li class="active">Envoyer un message à un annonceur</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-warning">
                <div class="box-header">
                    <h4>
                        Annonceurs | Envoyer un message à<span style="color: #f39c12"> {{ $annonceur->societe }}</span>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>

                <div class="box-body">

                    @include('admin.annonceurs.partials.formulairemessageannonceur')

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

@endsection