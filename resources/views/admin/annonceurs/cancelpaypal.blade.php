@extends('admin.layouts.backend.main')

@section('title', 'Annulation')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Annulation de votre commande PayPal</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $annonceur->societe }} | </span>
                            Vous avez annulé votre commande sur Paypal.
                        </h4>
                        <p>
                            Afin de la confirmer, cliquez sur le bouton ci-dessous :
                        </p>
                        {!! Form::model($annonceur, [
                                     'method'    => 'POST',
                                     'route'     => ['admin.annonceurs.annulation', $annonceur->id]
                                ]) !!}
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::submit("Confirmez l'annulation", ['class' => 'btn btn-danger']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
