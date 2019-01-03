@extends('admin.layouts.backend.main')

@section('title', 'Créer un identifiant unique')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Créer un identifiant unique au vigneron</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('admin.all') }}"> Tous les vignerons</a></li>
                <li class="active">Créer un identifiant unique au vigneron</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Le vigneron utilisateur -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h4>
                        Identifiant unique | <span style="color: #dd4b39">1 - On assigne l'identifiant unique au vigneron</span>
                    </h4>

                </div>

                <div class="box-body"><!-- box-body -->
                    L'indentifiant unique est : {{ $user->id }}
                </div><!-- /.box-body -->

                <br/>
                <!-- /.box-footer-->
            </div>


        </section>
        <!-- /.content -->
    </div>

@endsection

