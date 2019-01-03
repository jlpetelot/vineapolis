@extends('admin.layouts.backend.main')

@section('title', 'Compléter sa fiche')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Annulation</h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>--}}
                {{--<li class="active">{{ Auth::user()->name }}</li>--}}
            {{--</ol>--}}
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">

                    </div>
                </div>
                <div class="box-body">

                    {{ $vigneron->name }}

                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
