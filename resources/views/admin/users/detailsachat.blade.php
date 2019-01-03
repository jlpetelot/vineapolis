@extends('admin.layouts.backend.main')

@section('title', 'Détails de votre achat')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Détails de votre achat</h1>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-danger"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-8 -->
                        <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Détails de votre achat effectué {{ $facture->created_at->diffForHumans() }}.
                        </h4>
                    </div><!-- ../col-xs-12 -->
                </div><!-- ../box-header -->

                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                Vineapolis ®
                                <small class="pull-right">Nous sommes le : {{ \Carbon\Carbon::now() }}</small>
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            de
                            <address>
                                <strong>Vineapolis</strong><br>
                                9, rue des Lions<br>
                                89170 Saint-Fargeau, France<br>
                                Téléphone : 03 86 74 11 85<br>
                                Email: contact@vineapolis.fr
                            </address>
                        </div>
                        <!-- /.col -->

                        <!-- DÉBUT DU FORMULAIRE CACHÉ -->
                        {!! Form::open([
                            'method' => 'POST',
                            'route' => ['admin.telechargerPDF', $facture->id]
                        ]) !!}
                        <div class="col-sm-4 invoice-col">
                            à
                            <address>
                                <strong>{{ $facture->name }}</strong><br>
                                {!! Form::hidden('name', $facture->name) !!}
                                {{ $facture->adresse }}<br>
                                {!! Form::hidden('adresse', $facture->adresse) !!}
                                Téléphone : {{ $facture->telephone }}<br>
                                {!! Form::hidden('telephone', $facture->telephone) !!}
                                Email : {{ $facture->email }}
                                {!! Form::hidden('email', $facture->email) !!}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Facture du : <strong>
                                {{ $facture->created_at->format('j/m/Y') }} à {{ $facture->created_at->format('h:m:s') }}
                                {!! Form::hidden('datefacture', $facture->created_at) !!}
                            </strong><br>
                            Identité unique de la transcation : <strong>{{ $facture->identiteunique }}</strong><br>
                            {!! Form::hidden('identiteunique', $facture->identiteunique) !!}
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Designation</th>
                                        <th>Contractée</th>
                                        <th>Durée contrat</th>
                                        <th>Echéance au</th>
                                        <th>Valable du</th>
                                        <th>Méthode de paiement</th>
                                        <th>Montant HT/an</th>
                                        <th>Sous-total HT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ ucfirst($facture->produit) }}</td>
                                        {!! Form::hidden('produit', $facture->produit) !!}
                                        <td>{{ $facture->created_at->diffForHumans() }} (le {{ $facture->created_at->format('j/m/Y') }})</td>
                                        @if($facture->qte <= 1)
                                            <td>{{ $facture->qte }} an</td>
                                            {!! Form::hidden('qte', $facture->qte) !!}
                                        @elseif($facture->qte > 1)
                                            <td>{{ $facture->qte }} ans</td>
                                        @endif
                                        <td>{{ $facture->updated_at->format('j/m/Y') }}</td>
                                        <td>{{ $facture->datefacture->format('j/m/Y') }} au {{ $facture->updated_at->format('j/m/Y') }}</td>
                                        @if($facture->type === 'Stripe')
                                            <td><img src="{{ asset('backend/img/logo-visa.svg') }}" width="15%" height="auto" alt="Visa"></td>
                                        @endif
                                        @if($facture->type === 'paypal')
                                            <td><img src="{{ asset('backend/img/logo-paypal.svg') }}" width="15%" height="auto" alt="Paypal"></td>
                                        @endif
                                        {!! Form::hidden('type', $facture->type) !!}
                                        <td>{{ $facture->prixHT }} €</td>
                                        {!! Form::hidden('prixHT', $facture->prixHT) !!}
                                        <td>{{ $facture->soustotalHT }} €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-6 col-xs-offset-6">
                            <p class="lead">
                                Payé le {{ $facture->created_at->format('j/m/Y') }},
                                échéance {{ $facture->updated_at->diffForHumans() }} (le {{ $facture->updated_at->format('j/m/Y') }})
                            </p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Sous-total HT :</th>
                                        <td>{{ $facture->soustotalHT }} €</td>
                                        {!! Form::hidden('soustotalHT', $facture->soustotalHT) !!}
                                    </tr>
                                    <tr>
                                        <th>Tax (20%) :</th>
                                        <td>{{ $facture->tva }} €</td>
                                        {!! Form::hidden('tva', $facture->tva) !!}

                                    </tr>
                                    <tr>
                                        <th>Total TTC :</th>
                                        <td>{{ $facture->totalTTC }} €</td>
                                        {!! Form::hidden('totalTTC', $facture->totalTTC) !!}

                                    </tr>
                                    <tr>
                                        <th>Imprimez votre facture :</th>
                                        <td>
                                            <button type="submit" class="btn btn-xs btn-danger"
                                               data-toggle="tooltip" title="Votre facture en PDF">
                                                <i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Votre facture en PDF
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                                {!! Form::close() !!}
                            <!-- FIN DU FORMULAIRE CACHÉ -->

                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Bouton de retour -->
                    <a href="{{ route('admin.achats', ['id'=> $facture->user_id]) }}"
                       class="btn btn-default">
                        <i class="fa fa-fw fa-long-arrow-right"></i>Retour à vos achats
                    </a>
                    <!-- /.row -->

                </section>

            </div>
            <!-- /.box -->
        </section><!-- ../Main content -->
    </div><!-- ../content-wrapper -->

@endsection