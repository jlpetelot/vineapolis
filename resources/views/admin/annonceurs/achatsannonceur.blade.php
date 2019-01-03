@extends('admin.layouts.backend.main')

@section('title', 'Vos achats')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Détails de votre achat</h1>
            <ol class="breadcrumb">
                    <li class="active">Détails de votre achat</li>
                </ol>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-warning"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #f39c12; font-weight: 600">
                        {{ $annonceur->societe }} | </span>Vos achats.
                        </h4>
                        <br/>
                        <!-- /.box-header -->
                      
                        <br/>
                    </div><!-- ../col-xs-12 -->
                </div><!-- ../box-header -->
            </div><!-- ../box box-danger -->
            <!-- /.box -->
        </section><!-- ../Main content -->
        
    </div><!-- ../content-wrapper -->

@endsection