@extends('admin.layouts.backend.mainpdf')

@section('content')

    <!-- Default box -->
    <div class="box box-danger"><!-- box box-danger -->
        <section class="invoice">

            <div class="row"><!-- row -->
                <div class="col-xs-12">
                    <h2>Vineapolis ®</h2>
                    <address style="margin-top: -10px;">
                        9, rue des Lions<br>
                        89170 Saint-Fargeau, France<br>
                        Téléphone : 03 86 74 11 85<br>
                        Email: contact@vineapolis.fr
                    </address>
                    <p style="margin-top: -10px;margin-bottom: 10px;">à</p>
                    <address>
                        <strong>{{ $achat->name }}</strong><br>
                        @if ($achat->adresse)
                            {{ $achat->adresse }}<br>
                        @endif
                        @if ($achat->telephone)
                            {{ $achat->telephone }}<br>
                        @endif
                        Email : {{ $achat->email }}
                    </address>
                </div>
            </div><!-- ../row -->

            <div class="row"><!-- row -->
                <div class="col-sm-4">
                    {{--@php--}}
                        {{--Carbon\Carbon::setLocale('fr');--}}
                    {{--@endphp--}}
                    <p style="margin-bottom: 20px;">
                        Facture N° : <strong>{{ $achat->identiteunique }}</strong>
                        {{--<br/>éditée {{ \Carbon\Carbon::now()->diffForHumans() }}.--}}
                    </p>
                </div>
            </div><!-- /.row -->

            <div class="row"><!-- row -->
                <div class="col-xs-12">
                    Achat : {{ ucfirst($achat->produit) }}
                    <br/>Identité unique de la transaction : {{ $achat->identiteunique }}
                    <br/>Contractée le : {{ $achat->created_at->format('j/m/Y') }}
                    @if($achat->qte <= 1)
                        <br/>Durée du contrat : {{ $achat->qte }} an
                    @elseif($achat->qte > 1)
                        <br/>Durée du contrat : {{ $achat->qte }} ans
                    @endif
                    <br/>Echéance au : {{ $achat->updated_at->format('j/m/Y') }}
                    <br/>Valable du : {{ $achat->datefacture->format('j/m/Y') }} au {{ $achat->updated_at->format('j/m/Y') }}
                    @if($achat->type === "Carte bleue via Stripe")
                        <br/>Payé par : {{ $achat->type }}
                    @elseif($achat->type === "PayPal")
                        <br/>Payé par : {{ $achat->type }}
                    @elseif($achat->type === "Administration")
                        <br/>Payé par : {{ $achat->type }}
                    @endif
                    <br/>Montant HT / an : {{ $achat->prixHT }} &euro;
                    <br/>Sous-total HT : {{ $achat->soustotalHT }} &euro;
                    <br/>Tax (20%) : {{ $achat->tva }} &euro;
                    <br/>Total TTC : <strong>{{ $achat->totalTTC }} &euro;</strong>
                </div>

                <p class="lead" style="margin-left: 17px;">
                    @if($achat->qte <= 1)
                        Facture acquittée le {{ $achat->datefacture }},
                        dont l'échéance est dans {{ $achat->qte }} an.
                    @elseif($achat->qte > 1)
                        Payé le {{ $achat->datefacture }},
                        échéance dans {{ $achat->qte }} ans.
                    @endif
                </p>
             </div><!-- /.row -->

        </section>

    </div><!-- ../box box-danger -->

@endsection