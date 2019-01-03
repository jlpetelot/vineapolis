@extends('admin.layouts.backend.main')

@section('title', 'Annulation')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Annulation</h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>--}}
                {{--<li class="active">{{ Auth::user()->name }}</li>--}}
            {{--</ol>--}}
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-danger">
                <div class="box-header">
                    <div class="col-xs-8">
                        <h4>
                            <span style="color: #dd4b39; font-weight: 600">{{ $vigneron->societe }} | </span>
                            votre inscription et votre activation ont bien été annulées.
                        </h4>
                        <p>
                            Nous regrettons de n'avoir pu vous satisfaire.
                            <br/>Sachez que vous restez présent dans le site ainsi que dans notre base de données.
                            Et si vous le demandez, nous ne manquerons pas de vous aider
                            quel qu'en soit son contenu.
                            <br/>À très bientôt. L'équipe de Vineapolis.
                            <br/><br/><i class="fa fa-fw fa-caret-right"></i>
                            Vous allez être redirigé vers l'accueil d'ici 10 secondes.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.box -->

            <script>
                function retouraladmin() {
                    document.location.href="/admin"
                }
                setTimeout(retouraladmin, 10000);
            </script>
        </section>
        <!-- /.content -->
    </div>

@endsection
