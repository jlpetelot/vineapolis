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
                                    <th>Société</th>
                                    <th>Désignation</th>
                                    <th>Contracté le</th>
                                    <th>Durée</th>
                                    <th>Échéance au</th>
                                    <th>Moyen de paiement</th>
                                    <th>Montant HT</th>
                                    <th>TVA (20%)</th>
                                    <th>Total TTC</th>
                                    <th>Statut</th>
                                    <th width="100px" style="text-align: center">Action</th>
                                </tr>
                                @foreach($lines as $achat)
                                    <tr>
                                        <td>{{ $achat->id }}</td>
                                        <td>{{ $achat->user->name }}</td>
                                        <td>{{ ucfirst($achat->product->name) }}</td>
                                        <td>{{ $achat->created_at->format('j/m/Y') }}</td>
                                        @if($achat->qte <= 1)
                                            <td>{{ $achat->qte }} an</td>
                                        @elseif($achat->qte > 1)
                                            <td>{{ $achat->qte }} ans</td>
                                        @endif
                                        <td>{{ $achat-> created_at->addYear($achat->qte)->format('j/m/Y') }}</td>
                                        @if($achat->type === 'Stripe')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="10%">
                                                &nbsp;(via Stripe)
                                            </td>
                                        @elseif ($achat->type === 'paypal')
                                            <td>
                                                <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="20%">
                                            </td>
                                        @endif
                                        {{-- <td>@price($achat->prix)</td> --}}
                                        <td>{{ number_format($achat->prix, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($achat->prix * 0.2 * $achat->qte, 2, ',', ' ') }} €</td>
                                        <td>{{ number_format($achat->prix * 1.2 * $achat->qte, 2, ',', ' ') }} €</td>
                                        <td><span class="label label-success">Confirmé</span></td>
                                        <td width="100px" style="text-align: center">
                                            <a href="{{ route('admin.detailsachat', $achat->id) }}"
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