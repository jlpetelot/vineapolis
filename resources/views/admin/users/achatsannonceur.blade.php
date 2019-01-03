@extends('admin.layouts.backend.main')

@section('title', 'Vos achats')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Vos achats</h1>
            <ol class="breadcrumb">
                    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                    <li class="active">Vos achats</li>
                </ol>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-warning"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-12 -->
                        <h4><span style="color: #f39c12; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Vos achats.
                        </h4>
                        <br/>
                        <div class="box-header" style="margin-bottom: 20px">
                            <h3 class="box-title">Tous vos achats du dernier au 1er effectué.</h3>
                            <div class="box-tools">
                                <a href="{{ route('admin') }}" class="btn btn-warning">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    &nbsp;Commander une nouvelle annonce
                                </a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding"><!-- box-body table-responsive no-padding -->
                            <table class="table table-hover"><!-- table table-hover -->
                                <tr>
                                    <th>N°</th>
                                    <th>Société</th>
                                    <th>Désignation</th>
                                    <th width="120px">Contracté le</th>
                                    <th>Durée</th>
                                    <th width="120px">Échéance au</th>
                                    <th width="170px">Valable du</th>
                                    <th>Moyen de paiement</th>
                                    <th>Montant HT</th>
                                    <th>TVA (20%)</th>
                                    <th>Total TTC</th>
                                    <th>Statut</th>
                                    <th width="150px" style="text-align: center">Action</th>
                                </tr>
                                @foreach($factures as $achat)
                                    <tr>
                                        <td>{{ $achat->id }}</td>
                                        <td>{{ $achat->name }}</td>
                                        <td>{{ ucfirst($achat->produit) }}</td>
                                        <td>{{ $achat->created_at->format('j/m/Y') }}</td>
                                        @if($achat->qte <= 1)
                                            <td>{{ $achat->qte }} an</td>
                                        @elseif($achat->qte > 1)
                                            <td>{{ $achat->qte }} ans</td>
                                        @endif
                                        <td>{{ $achat->updated_at->format('j/m/Y') }}</td>
                                        <td>{{ $achat->datefacture->format('j/m/Y') }} au {{ $achat->updated_at->format('j/m/Y') }}</td>
                                        @if($achat->type === 'Stripe')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="15%">
                                                &nbsp;(via Stripe)
                                            </td>
                                        @elseif ($achat->type === 'PayPal')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="25%">
                                            </td>
                                        @elseif ($achat->type === 'Administration')
                                        <td>
                                            Administration
                                        </td>
                                        @endif
                                        {{-- <td>@price($achat->prix)</td> --}}
                                        <td>{{ number_format($achat->soustotalHT, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($achat->tva, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($achat->totalTTC, 2, ',', ' ') }} €</td>
                                        <td><span class="label label-success">Confirmé</span></td>
                                        @if ($user->role === 'administrateur')
                                            <td width="100px" style="text-align: center">
                                                <a href="{{ route('admin.detailsachatannonceur', $achat->id) }}"
                                                class="btn btn-xs btn-default" data-toggle="tooltip" title="Détails achat">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        @endif
                                        @if ($user->role === 'annonceur')
                                        <td width="100px" style="text-align: center">
                                            <a href="{{ route('admin.annonceurs.detailsachatannonceur', $achat->id) }}"
                                            class="btn btn-xs btn-default" data-toggle="tooltip" title="Détails achat / Facture">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    @endif
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