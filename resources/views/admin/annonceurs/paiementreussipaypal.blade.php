@extends('admin.layouts.backend.main')

@section('title', 'Paiement réussi')

@section('content')

<div class="content-wrapper"><!-- content-wrapper -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Paiement</h1>
    </section>

    <section class="content"><!-- Main content -->
        <!-- Default box -->
        <div class="box box-danger"><!-- box box-danger -->
            <div class="box-header"><!-- box-header -->
                <div class="col-xs-8"><!-- col-xs-8 -->
                    <h4><span style="color: #dd4b39; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Confirmation de votre paiement Paypal.
                    </h4>
                    <br/>
                    <p>
                        <strong>{{ Auth::user()->name }}</strong>, merci d'avoir choisi Vineapolis.
                        <br/>Nous sommes heureux de vous confirmer votre commande dont le numéro est : <strong>{{ $paypal->nomfacture }}</strong>
                        <br/>La validation de votre transaction a pour identité unique : <strong>{{ $paypal->identiteunique }}</strong>
                        <br/>Votre moyen de paiement est : <strong>{{ ucfirst($paypal->type) }}</strong>.
                        <br/>Le montant total de votre achat est de :
                        <strong> {{ $paypal->prixTTC }} € TTC</strong>
                        @if($paypal->qte == 1)
                            pour une durée de <strong>{{ $paypal->qte }}</strong> an
                        @elseif($paypal->qte > 1)
                            pour une durée de <strong>{{ $paypal->qte }}</strong> ans
                        @endif
                        à partir du <strong>{{ date_format($paypal->created_at, 'd/m/Y') }}</strong>
                        à <strong>{{ date_format($paypal->created_at, 'H:i:s') }}</strong>.
                    </p>
                    <p>Un message de confirmation de commande a été adressé à l'adresse email du propriétaire du compte PayPal.</p>
                    <p>
                        Des détails supplémentaires, dont une facture détaillée de votre transaction, sont disponibles dans votre rubrique :
                        <a href="{{ route('admin.achatsannonceur', Auth::user()->id) }}">Achats</a>
                    </p>
                    <p>
                        <i class="fa fa-fw fa-caret-right"></i>
                        <span class="text-red">!!!! Ne rafraichîssez pas votre navigateur !!!!</span>
                        <br/>Vous allez être redirigé vers les détails de votre achat dans 20 secondes.
                    </p>
                </div><!-- ../col-xs-8 -->
            </div><!-- ../box-header -->
        </div><!-- ../box box-danger -->
        <!-- /.box -->

        <script>
            function retourauxachats() {
                document.location.href="/admin/achatsannonceur/{{ Auth::user()->id }}"
            }
            setTimeout(retourauxachats, 10000);
        </script>

    </section><!-- ../Main content -->
</div><!-- ../content-wrapper -->

@endsection