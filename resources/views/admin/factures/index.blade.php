@extends('admin.layouts.backend.main')

@section('title', 'Toutes les factures')

@section('content')

    <div class="content-wrapper"><!-- Content-wrapper -->
        <section class="content-header">
            <h1>Toutes les factures</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary"><!-- box box-primary -->
                <div class="box-header">
                    <h4>
                        Factures | <span style="color: #3c8dbc">Toutes les factures des vignerons et annonceurs de la plus récente à la plus ancienne</span>
                        <small></small>
                    </h4>
                </div>
                <div class="box-body"><!-- box-body -->
                        @if (!$comptefactures)
                            <div class="alert alert-info">
                                Il n'existe aucune facture pour l'instant.
                            </div>
                        @else
                        <div class="col-xs-12"><!-- col-xs-12 -->
                            <form action="{{ route('factures.index') }}">
                                <div class="col-xs-4 pull-right clearfix">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg"
                                            name="term" value="{{ request('term') }}"
                                            placeholder="Recherchez par nom de société ou par email.">
                                        <span class="input-group-btn">
                                        <button class="btn btn-lg btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                            </form>

                            <!-- /.box-header -->
                            <div class="box-body ">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>N°</td>
                                        <td>Société</td>
                                        <td>Email</td>
                                        <td>Qualité</td>
                                        <td>Produit / Annonce</td>
                                        <td width="100px">Contractée le</td>
                                        <td>Durée</td>
                                        <td width="120px">Renouvelable le</td>
                                        <td width="150px">Payée avec</td>
                                        <td width="90px">Prix HT</td>
                                        <td width="90px">TVA</td>
                                        <td width="90px">Prix TTC</td>
                                        <td width="50px">Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($factures as $facture)
                                        <tr>
                                            <td>{{ $facture->id }}</td>
                                            <td><a href="{{ route('factures.show', $facture->id) }}">{{ $facture->user->name }}</a></td>
                                            <td>{{ $facture->email }}</td>
                                            <td>{{ ucfirst($facture->user->role) }}</td>
                                            <td>{{ $facture->produit }}</td>
                                            <td>{{ $facture->created_at->format('j/m/Y') }}</td>
                                            <td>
                                                @if ($facture->qte === 1)
                                                    {{ $facture->qte }} an
                                                @else
                                                    {{ $facture->qte }} ans
                                                @endempty
                                            </td>
                                            <td>{{ $facture->updated_at->addYear($facture->qte)->format('j/m/Y') }}</td>
                                            @if ($facture->type === 'Stripe')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="30%">
                                                    &nbsp;(via Stripe)
                                                </td>
                                            @endif
                                            @if ($facture->type === 'paypal')
                                                <td>
                                                    <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="Paypal" width="40%">
                                                </td>
                                            @endif
                                            @if ($facture->type === 'Administration')
                                                <td>
                                                    Administration                                                
                                                </td>
                                            @endif
                                            <td>
                                                {{ number_format($facture->prixHT, 2, ',', ' ') }} €
                                            </td>
                                            <td>
                                                {{ number_format($facture->tva, 2, ',', ' ') }} €
                                            </td>
                                            <td>
                                                {{ number_format($facture->totalTTC, 2, ',', ' ') }} €
                                            </td>
                                            <td>
                                                <a href="{{ route('factures.show', $facture->id) }}"
                                                    class="btn btn-xs btn-primary" data-toggle="tooltip" title="Éditez facture / Téléchargez PDF">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->


                        </div><!-- ../col-xs-12 -->
                        @endif
                    
                </div><!-- ../box-body -->
            <div><!-- ../box box-primary -->
        </section>
    </div><!-- ../Content-wrapper -->

@endsection