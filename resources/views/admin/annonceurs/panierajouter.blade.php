@extends('admin.layouts.backend.main')

@section('title', 'Commande')

@section('content')

<!-- Transforamtion du bouton Stripe -->
<style>
    .stripe-button-el span {
        background: #3c8dbc!important;
        border-color: #367fa9!important;
        font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
        border-radius: 0!important;
        padding: 0 10px;
        white-space: nowrap;
        vertical-align: middle;
        height: 31px;
        text-shadow: none;
        box-shadow: none;
    }
    .stripe-button-el span:hover {
        background: #367fa9!important;
    }
</style>
<!-- ../Transforamtion du bouton Stripe -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Commande</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-warning">
            <div class="box-header"><!-- box-header -->
                <div class="col-xs-8"><!-- col-xs-8 -->
                    <h4>
                        <span style="color: #f39c12; font-weight: 600">
                        {{ $annonceur->societe }} | </span>Vous avez validé vos données et souhaitez commander.
                        
                    </h4>
                </div><!-- ../col-xs-8 -->
            </div><!-- ../box-header -->

            <div class="box-body">

            </div>

        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

@endsection