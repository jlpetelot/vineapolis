@extends('admin.layouts.backend.main')

@section('title', 'Le devis nous est parvenu')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Le devis nous est parvenu</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <!-- Fiche seule -->
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                            Votre demande de prix pour un reportage nous est parvenu avec succcès.
                        </h4>
                        <p>
                            Nous vous répondrons dans les 48 heures.
                            Le prix varie suivant la distance entre notre siège social et le lieu de toutnage.
                            A très bientôt sur Vineapolis.
                        </p>
                        <br/><i class="fa fa-fw fa-caret-right"></i>
                        Vous allez être redirigé vers votre profil d'ici 10 secondes.
                    </div>
                </div>

                <script>
                    function retouraladmin() {
                        document.location.href="/admin/profil/{{ Auth::user()->id }}"
                    }
                    setTimeout(retouraladmin, 10000);
                </script>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection
