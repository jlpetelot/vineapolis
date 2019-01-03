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
            <div class="box box-warning"><!-- box box-danger -->
                <div class="box-header"><!-- box-header -->
                    <div class="col-xs-12"><!-- col-xs-8 -->
                        <h4><span style="color: #f39c12; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Détails de votre achat effectué {{ $achat->created_at->diffForHumans() }}.
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
                                <strong>{{ $annonceur->societe }}</strong><br>
                                {!! Form::hidden('societe', $annonceur->societe) !!}
                                {{-- {!! Form::hidden('aliassociete', $annonceur->aliassociete) !!} --}}
                                {{ $annonceur->adresse }}<br>
                                {!! Form::hidden('adresse', $annonceur->adresse) !!}
                                Téléphone : {{ $annonceur->telephone }}<br>
                                {!! Form::hidden('telephone', $annonceur->telephone) !!}
                                Email : {{ Auth::user()->email }}
                                {!! Form::hidden('email', $annonceur->email) !!}
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
                                        <td>{{ $achat-> created_at->diffForHumans() }} (le {{ $achat->created_at->format('j/m/Y') }})</td>
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
                                            <td><img src="{{ asset('backend/img/logo-paypal.svg') }}" width="20%" height="auto" alt="Paypal"></td>
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
                    <a href="{{ route('admin') }}" class="btn btn-warning">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        &nbsp;Commander une nouvelle annonce
                    </a>
                    &nbsp;<a href="{{ route('admin.achatsannonceur', ['id'=> $annonceur->user_id]) }}"
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