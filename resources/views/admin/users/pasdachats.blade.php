@extends('admin.layouts.backend.main')

@section('title', 'Vos achats')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Vos achats</h1>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-danger"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Vous n'avez pas effectué d'achats pour l'instant.
                        </h4>
                    </div><!-- ../col-xs-12 -->
                </div><!-- ../box-header -->
            </div><!-- ../box box-danger -->
            <!-- /.box -->
        </section><!-- ../Main content -->
    </div><!-- ../content-wrapper -->

@endsection