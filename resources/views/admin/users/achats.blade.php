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
                        {{ Auth::user()->name }} | </span>Vos achats.
                        </h4>
                        <br/>
                        <div class="box-header">
                            <h3 class="box-title">Tous vos achats du dernier au 1er effectué.</h3>
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Recherchez">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding"><!-- box-body table-responsive no-padding -->
                            <table class="table table-hover"><!-- table table-hover -->
                                <tr>
                                    <th>N°</th>
                                    <th width="170px">Société</th>
                                    <th width="220px">Désignation</th>
                                    <th width="100px">Contracté le</th>
                                    <th>Durée</th>
                                    <th width="100px">Échéance au</th>
                                    <th width="170px">Valable du</th>
                                    <th>Moyen de paiement</th>
                                    <th width="120px">Montant HT/an</th>
                                    <th width="100px">Sous total HT</th>
                                    <th width="100px">TVA (20%)</th>
                                    <th width="100px">Total TTC</th>
                                    <th>Statut</th>
                                    <th width="100px" style="text-align: center">Action</th>
                                </tr>
                                @foreach($factures as $facture)
                                    <tr>
                                        <td>{{ $facture->id }}</td>
                                        <td>{{ $facture->name }}</td>
                                        <td>{{ ucfirst($facture->produit) }}</td>
                                        <td>{{ $facture->created_at->format('j/m/Y') }}</td>
                                        @if($facture->qte <= 1)
                                            <td>{{ $facture->qte }} an</td>
                                        @elseif($facture->qte > 1)
                                            <td>{{ $facture->qte }} ans</td>
                                        @endif
                                        <td>{{ $facture->updated_at->format('j/m/Y') }}</td>
                                        <td>{{ $facture->datefacture->format('j/m/Y') }} au {{ $facture->updated_at->format('j/m/Y') }}</td>
                                        @if($facture->type === 'Stripe')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="30%">
                                                &nbsp;(via Stripe)
                                            </td>
                                        @elseif ($facture->type === 'paypal')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="50%">
                                            </td>
                                        @endif
                                        {{-- <td>@price($facture->prix)</td> --}}
                                        <td>{{ number_format($facture->prixHT, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($facture->soustotalHT, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($facture->tva, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($facture->totalTTC, 2, ',', ' ') }} €</td>
                                        <td><span class="label label-success">Confirmé</span></td>
                                        <td width="100px" style="text-align: center">
                                            <a href="{{ route('admin.detailsachat', $facture->id) }}"
                                            class="btn btn-xs btn-default" data-toggle="tooltip" title="Détails achat">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table><!-- ../table table-hover -->
                        </div><!-- ../box-body table-responsive no-padding -->
                        <br/>
                    </div><!-- ../col-xs-12 -->
                </div><!-- ../box-header -->
            </div><!-- ../box box-danger -->
            <!-- /.box -->
        </section><!-- ../Main content -->
        
    </div><!-- ../content-wrapper -->

@endsection