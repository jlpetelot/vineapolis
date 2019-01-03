@extends('admin.layouts.backend.main')

@section('title', 'Détails de votre achat')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Les vignerons</h1>
        </section>

        <section class="content"><!-- Main content -->
            <!-- Default box -->
            <div class="box box-danger"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-8 -->
                        <h4>
                        Les vignerons | Détails de l'achat de <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }}</span> effectué {{ $achat->created_at->diffForHumans() }}.
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
                            'route' => ['admin.telechargerPDF', $achat->id]
                        ]) !!}
                        <div class="col-sm-4 invoice-col">
                            à
                            <address>
                                <strong>{{ $vigneron->societe }}</strong><br>
                                {!! Form::hidden('name', $vigneron->societe) !!}
                                {{ $vigneron->adresse }}<br>
                                {!! Form::hidden('adresse', $vigneron->adresse) !!}
                                Téléphone : {{ $vigneron->telephone }}<br>
                                {!! Form::hidden('telephone', $vigneron->telephone) !!}
                                Email : {{ $vigneron->email }}
                                {!! Form::hidden('email', $vigneron->email) !!}
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Facture du : <strong>
                                {{ $achat->created_at->format('j/m/Y') }} à {{ $achat->created_at->format('h:m:s') }}
                                {!! Form::hidden('datefacture', $achat->created_at) !!}
                            </strong><br>
                            Identité unique de la transcation : <strong>{{ $charge }}</strong><br>
                            {!! Form::hidden('identiteunique', $charge) !!}
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
                                        <th>Contracté</th>
                                        <th>Durée contrat</th>
                                        <th>Echéance au</th>
                                        <th>Méthode de paiement</th>
                                        <th>Montant HT / an</th>
                                        <th>Sous-total HT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ ucfirst($achat->product->name) }}</td>
                                        {!! Form::hidden('produit', $achat->product->name) !!}
                                        <td>{{ $achat->created_at->diffForHumans() }} (le {{ $achat->created_at->format('j/m/Y') }})</td>
                                        @if($achat->qte <= 1)
                                            <td>{{ $achat->qte }} an</td>
                                            {!! Form::hidden('qte', $achat->qte) !!}
                                        @elseif($achat->qte > 1)
                                            <td>{{ $achat->qte }} ans</td>
                                        @endif
                                        <td>{{ $achat->created_at->addYear($achat->qte)->format('j/m/Y') }}</td>
                                        @if($achat->type === 'Stripe')
                                            <td><img src="{{ asset('backend/img/logo-visa.svg') }}" width="15%" height="auto" alt="Visa"></td>
                                        @endif
                                        @if($achat->type === 'paypal')
                                            <td><img src="{{ asset('backend/img/logo-paypal.svg') }}" width="15%" height="auto" alt="Paypal"></td>
                                        @endif
                                        {!! Form::hidden('type', $achat->type) !!}
                                        <td>{{ number_format($achat->prix, 2, ',', ' ') }} €</td>
                                        {!! Form::hidden('qte', $achat->qte) !!}
                                        {!! Form::hidden('prixHT', number_format($achat->prix, 2, ',', ' ')) !!}
                                        <td>{{ number_format($achat->prix * $achat->qte, 2, ',', ' ') }} €</td>
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
                                @if($achat->qte <= 1)
                                    Payé le {{ $achat->created_at->format('j/m/Y') }},
                                    échéance {{ $achat->created_at->addYear($achat->qte)->diffForHumans() }} (le {{ $achat->created_at->addYear($achat->qte)->format('j/m/Y') }}).
                                @elseif($achat->qte > 1)
                                    Payé le {{ $achat->created_at->format('j/m/Y') }},
                                    échéance dans {{ $achat->qte }} ans.
                                @endif

                            </p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Sous-total HT :</th>
                                        <td>{{ number_format($achat->prix * $achat->qte, 2, ',', ' ') }} €</td>
                                        {!! Form::hidden('soustotalHT', number_format($achat->prix * $achat->qte, 2, ',', ' ') ) !!}
                                    </tr>
                                    <tr>
                                        <th>Tax (20%) :</th>
                                        <td>{{ number_format($achat->prix * 0.2 * $achat->qte, 2, ',', ' ') }} €</td>
                                        {!! Form::hidden('tva', number_format($achat->prix * 0.2 * $achat->qte, 2, ',', ' ') ) !!}

                                    </tr>
                                    <tr>
                                        <th>Total TTC :</th>
                                        <td>{{ number_format($achat->prix * 1.2 * $achat->qte, 2, ',', ' ') }} €</td>
                                        {!! Form::hidden('totalTTC', number_format($achat->prix * 1.2 * $achat->qte, 2, ',', ' ') ) !!}

                                    </tr>
                                    <tr>
                                        <th>Imprimez la facture :</th>
                                        <td>

                                            <button type="submit" class="btn btn-xs btn-danger"
                                               data-toggle="tooltip" title="Votre facture en PDF">
                                                <i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;La facture en PDF
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
                    <a href="{{ route('admin.all') }}"
                       class="btn btn-default">
                        <i class="fa fa-fw fa-long-arrow-right"></i>Retour à la liste
                    </a>
                    <!-- /.row -->

                </section>

            </div>
            <!-- /.box -->
        </section><!-- ../Main content -->
    </div><!-- ../content-wrapper -->

@endsection