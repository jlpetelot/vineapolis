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
                        {{ $achat->adresse }}<br>
                        Téléphone : {{ $achat->telephone }}<br>
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
                <div class="col-xs-4">
                    Designation de l'achat :
                    <br/><br/>Identité unique de la transaction :
                    <br/>Contracté le :
                    <br/>Payé par :
                    <br/>Montant HT / an :
                    <br/>Durée du contrat :
                    <br/>Sous-total HT :
                    <br/>Tax (20%) :
                    <br/>Total TTC :
                </div>

                <div class="col-xs-8">
                    {{ ucfirst($achat->produit) }}
                    <br/>{{ $achat->identiteunique }}
                    <br/>{{ $achat-> datefacture }}
                    @if($achat->type == 'Stripe')
                        <br/>Visa (via {{ $achat->type }})
                    @elseif($achat->type == 'paypal')
                        <br/>{{ ucfirst($achat->type) }}
                    @endif
                    <br/>{{ $achat->prixHT }} &euro;
                    @if($achat->qte <= 1)
                        <br/>{{ $achat->qte }} an
                    @elseif($achat->qte > 1)
                        <br/>{{ $achat->qte }} ans
                    @endif
                    <br/>{{ $achat->soustotalHT }} &euro;
                    <br/>{{ $achat->tva }} &euro;
                    <br/>{{ $achat->totalTTC }} &euro;
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