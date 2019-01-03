@extends('admin.layouts.backend.main')

@section('title', 'Paiement')

@section('content')

<!-- Transforamtion du bouton Stripe -->
<style>
    .stripe-button-el span {
        background: #3c8dbc!important;
        border-color: #367fa9!important;
        font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
        border-radius: 0!important;
        padding: 0 10px;
        white-space: nowrap;
        vertical-align: middle;
        height: 31px;
        text-shadow: none;
        box-shadow: none;
    }
    .stripe-button-el span:hover {
        background: #367fa9!important;
    }
</style>
<!-- ../Transforamtion du bouton Stripe -->


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
                        {{ $vigneron->societe }} | </span>Vous souhaitez régler votre commande.
                    </h4>
                    <br/>
                    <p>
                        L'option choisie est : {{ $produit }}.
                        @if($qte <= 0)
                            <br/>Pour une durée de : {{ $qte }} an.
                        @elseif($qte > 1)
                            <br/>Pour une durée de : {{ $qte }} ans.
                        @endif
                        <br/>Le montant total de votre achat : {{ $carte }} € TTC.
                        <p>
                        Choisissez votre moyen de paiement : carte bancaire ou Paypal.
                        <br/>Vous serez mis en relation par l'un ou l'autre du service choisi directement sur le site.
                    </p>
                    </p>
                    <br/>
                    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                        <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                    Carte Bancaire
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                    PayPal
                                </a>
                            </li>
                        </ul>

                        <!-- Paiment Stripe -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade in active" role="tabpanel" id="home" aria-labelledby="home-tab">
                                <p style="margin: 30px 0 20px 0;">
                                    Le paiement par carte bancaire est entièrement sécurisé via le protocole de cryptage SSL.
                                    Vineapolis ne conserve aucune information liée à votre carte.
                                </p>
                                <div style="margin-top: -5px; margin-bottom: 20px;">
                                    <img src="{{ asset('backend/img/logo-visa.svg') }}" alt="Visa" width="10%">
                                </div>
                                {{ Form::model($vigneron, [
                                    'method' => 'post',
                                    'route' => ['admin.vignerons.paiement.stripe', $vigneron->user_id]
                                ]) }}
                                {!! Form::hidden("product_id", $product_id) !!}
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-label="Payez ma commande de {{ $carte }} € TTC"
                                            data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                                            data-amount="{{ $carte * 100 }}"
                                            data-name="Vineapolis"
                                            data-description="Tous les vins du monde"
                                            data-image="{{ asset('backend/img/logov.png') }}"
                                            data-locale="auto"
                                            data-zip-code="false"
                                            data-currency="eur">
                                    </script>
                                {{ Form::close() }}
                                <div style="display: block; position: fixed; margin: -33px 0 0 248px">
                                    {!! Form::model($vigneron, [
                                         'method'    => 'PUT',
                                         'route'     => ['admin.vignerons.annulation', $vigneron->user_id]
                                    ]) !!}
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <br/>
                            </div>
                            <!-- ../Paiment Stripe -->

                            <!-- Paiement Paypal -->
                            <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                                <p style="margin: 30px 0 20px 0;">
                                    À l'aide de votre compte PayPal, en un clic, payez en toute sécurité.
                                </p>
                                <div style="margin-top: -5px;">
                                    <img src="{{ asset('backend/img/logo-paypal.svg') }}" alt="PayPal" width="14%">
                                </div>
                                <br/>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <a href="{{ route('admin.vignerons.paiement.paypal', $vigneron->user_id) }}"
                                               type="button" class="btn btn-primary">Payez ma commande de {{ $carte }} € TTC</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: block; position: fixed; margin: -49px 0 0 250px">
                                    {!! Form::model($vigneron, [
                                         'method'    => 'PUT',
                                         'route'     => ['admin.vignerons.annulation', $vigneron->user_id]
                                    ]) !!}
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                {!! Form::submit("Annulez l'opération", ['class' => 'btn btn-danger']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <!-- Paiement Paypal -->
                        </div>
                    </div>
                </div><!-- ../col-xs-8 -->
            </div><!-- ../box-header -->
        </div><!-- ../box box-danger -->
        <!-- /.box -->

    </section><!-- ../Main content -->
</div><!-- ../content-wrapper -->

@endsection