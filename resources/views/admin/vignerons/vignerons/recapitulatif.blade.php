@extends('admin.layouts.backend.main')

@section('title', 'Commande')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Commande</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-danger">
            <div class="box-header"><!-- box-header -->
                <div class="col-xs-8"><!-- col-xs-8 -->

                    <!-- Fiche vidéo -->
                    <h4>
                        <span style="color: #dd4b39; font-weight: 600">
                            {{ $vigneron->societe }} | </span>Vous avez validé vos coordonnées et souhaitez commander.
                    </h4>

                    <!-- Le bouton validation -->

                        {!! Form::model($vigneron, [
                            'method'    => 'PUT',
                            'route'     => ['admin.vignerons.panier.ajouter', $id]
                        ]) !!}
                        <br/><br/>
                        Votre commande,
                        l'{{ $product->name }} pour un prix par an de <strong>{{ number_format($product->prix,2,'.', '') }} € HT.</strong>
                        {{ Form::hidden('produit', $product->name) }}
                        {{ Form::hidden('pht', $product->prix) }}
                       
                        <br/><br/>
                        <div class="form-horizontal pull-left">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::submit("Validez la commande", ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    <!-- ../Le bouton validation -->

                    <!-- Le bouton annulation -->

                        {!! Form::model($vigneron, [
                             'method'    => 'PUT',
                             'route'     => ['admin.vignerons.annulation', $id]
                         ]) !!}
                        <div class="form-horizontal pull-left" style="padding-left: 5px;">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    <!-- ../Le bouton annulation -->

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