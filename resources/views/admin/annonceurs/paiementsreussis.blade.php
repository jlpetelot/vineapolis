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
        <div class="box box-warning"><!-- box box-danger -->
            <div class="box-header"><!-- box-header -->
                <div class="col-xs-8"><!-- col-xs-8 -->
                    <h4><span style="color: #f39c12; font-weight: 600">
                        {{ Auth::user()->name }} | </span>Confirmation de paiement.
                    </h4>
                    <br/>
                    <!-- On récupère la dernière ligne insérée de la table lines-->
                    <p>
                        <strong>{{ Auth::user()->name }}</strong>, merci d'avoir choisi Vineapolis.
                        <br/>Nous sommes heureux de vous confirmer votre commande dont le numéro est : <strong>{{ $panier->id }}</strong>
                        <br/>La validation de votre transaction a pour identité unique : <strong>{{ $charge['id'] }}</strong>
                        @if($panier->paiement->type === 'Stripe')
                            <br/>Votre moyen de paiement est la <strong>carte bancaire</strong> via {{ $panier->paiement->type }}.
                        @endif
                        <br/>Le montant total de votre achat est de : <strong>{{ $panier->total }} € TTC</strong>
                        pour une durée de <strong>{{ $qty }}</strong> an(s)
                        à partir du <strong>{{ date_format($panier->created_at, 'd/m/Y') }}</strong>
                        à <strong>{{ date_format($panier->created_at, 'H:i:s') }}</strong>.
                    </p>

                    <p>Un message de confirmation de commande a été adressé à votre adresse email.</p>
                    <p>
                        Des détails supplémentaires, dont une facture détaillée de votre transaction, sont disponibles dans votre rubrique :
                        <a href="{{ route('admin.achatsannonceur', Auth::user()->id) }}">Achats</a>
                    </p>
                    <p>
                        <i class="fa fa-fw fa-caret-right"></i>
                        <span class="text-yellow">!!!! Ne rafraichîssez pas votre navigateur !!!!</span>
                        <br/>Vous allez être redirigé vers les détails de votre achat dans 10 secondes.
                    </p>
                    <br/>
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