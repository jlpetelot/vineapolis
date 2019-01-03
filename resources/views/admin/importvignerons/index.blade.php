@extends('admin.layouts.backend.main')

@section('title', 'Les vignerons en importation')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les vignerons en importation</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Tous les vignerons en importation</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            Vignerons | <span style="color: #dd4b39">Tous les vignerons en importation</span>
                        </h4>
                    </div>
                </div>
                <div style="margin-bottom: -10px"></div>
                @include('admin.importvignerons.partials.touslesimportvignerons')
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
