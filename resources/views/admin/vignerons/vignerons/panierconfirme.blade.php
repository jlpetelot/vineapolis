@extends('admin.layouts.backend.main')

@section('title', 'Commande confirmée')

@section('content')

<div class="content-wrapper"><!-- content-wrapper -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Commande Confirmée</h1>
    </section>

    <section class="content"><!-- Main content -->
        <!-- Default box -->
        <div class="box box-danger"><!-- box box-danger -->
            <div class="box-header"><!-- box-header -->
                <div class="col-xs-8"><!-- col-xs-8 -->

                    <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ $vigneron->societe }} | </span>Vous avez confirmé la commande.
                    </h4>
                    <br/>

                    <!-- Table row -->
                    <div class="row pub panier">
                        <div class="col-xs-12 table-responsive" id="panier">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Votre commande</th>
                                        <th>Prix à l'unité HT</th>
                                        <th>Quantite (1 par année)</th>
                                        <th>Prix total HT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($panier as $p)
                                    <tr>
                                        <td class="product_name">{{ ucfirst($p->name) }}.</td>
                                        @php
                                            // Je récupère l'id du produit en fonction de son nom ($p->name)
                                            $produit = \App\Product::where('name', $p->name)->first();
                                            $product_id = $produit->id;
                                            //dd($product_id);
                                        @endphp
                                        <td style="padding-top: 10px;">{{ number_format($p->price, 2, ',', ' ') }} €</td>
                                        <td>
                                            <div class="input-group-sm">
                                                {{ Form::model($vigneron, [
                                                    'method' => 'POST',
                                                    'route' => ['admin.vignerons.panier.paniermiseajour', $vigneron->user_id]
                                                 ]) }}
                                                {!! Form::text('qte', $p->qty,
                                                [
                                                    'class' => 'form-control-sm small-input',
                                                    'id' => 'input-{{ $p->id }}',
                                                    'aria-label' => 'qte'
                                                ]) !!}
                                                <span class="input-group-btn-sm">
                                                    <button class="btn btn-secondary addOne" type="submit"
                                                            data-toggle="tooltip" title="Mettre à jour" data-original-title="Mettre à jour"
                                                            data-input="{{ $p->qty }}">
                                                        <i class="fa fa-fw fa-refresh" style="margin-left: -10px"></i>
                                                    </button>
                                                </span>
                                                @if(session('success'))
                                                        {{ session('success') }}
                                                    @endif
                                                {{ Form::close() }}
                                            </div>
                                        </td>
                                        <td id="total-{{ $p->id }}">{{ number_format($p->price * $p->qty, 2, ',', ' ') }} €</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-6 col-xs-offset-6">
                            <p style="margin-top: 30px; margin-bottom: 10px;">Montant dû :</p>

                            <div class="table-responsive">
                                <table class="table">
                                    @foreach($panier as $p)
                                    <tr>
                                        <th id="total-{{ $p->id }}" style="font-weight: 500">Total HT</th>
                                        <td colspan="2" id="totalht">{{ number_format($p->price * $p->qty, 2, ',', ' ') }} €</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 500">TVA (20%)</th>
                                        <td colspan="2" id="tax">{{ number_format($p->price * 0.2 * $p->qty, 2, ',', ' ') }} €</td>
                                    </tr>
                                    <tr class="total">
                                        <th>Total TTC</th>
                                        <td colspan="2" id="total"><strong>{{ number_format($p->price * 1.2 * $p->qty, 2, ',', ' ') }} €</strong></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <br/>

                    <div style="display: inline-block">
                        {!! Form::model($vigneron, [
                         'method'    => 'POST',
                         'route'     => ['admin.vignerons.panier.panierpaiement', $vigneron->user_id]
                        ]) !!}
                        {!! Form::hidden("product_id", $product_id) !!}
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {!! Form::submit("Accédez au paiement", ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}

                {{--<div style="display: inline-block">--}}
                    {{--<div class="form-horizontal">--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-xs-12">--}}
                                {{--<a href="{{ route('admin.vignerons.panier.panierpaiement', $vigneron->user_id) }}"--}}
                                   {{--type="button" class="btn btn-primary">Accédez au paiement</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                <div style="display: inline-block; margin-left: 5px;">
                    {!! Form::model($vigneron, [
                         'method'    => 'PUT',
                         'route'     => ['admin.vignerons.annulation', $id]
                    ]) !!}
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>

                </div><!-- ../col-xs-8 -->
            </div><!-- ../box-header -->
        </div><!-- ../box box-danger -->
        <!-- /.box -->

    </section><!-- ../Main content -->
</div><!-- ../content-wrapper -->

@endsection