@extends('admin.layouts.backend.main')

@section('title', 'Toutes les factures')

@section('content')

    <div class="content-wrapper"><!-- Content-wrapper -->
        <section class="content-header">
            <h1>Toutes les factures éditées</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary"><!-- box box-primary -->
                <div class="box-header">
                    <h4>
                        Factures | <span style="color: #3c8dbc">Toutes les factures éditées d'un vigneron ou d'un annonceur</span>
                        <small></small>
                    </h4>
                    <p style="font-size: 12px; margin-top: -10px;">(Les champs marqués d'une astérisque
                        <i class="fa fa-fw fa-asterisk text-red"></i>
                        sont obligatoires)
                    </p>
                </div>
                <div class="box-body"><!-- box-body -->
                        @if (!$comptefactures)
                            <div class="alert alert-info">
                                Il n'existe aucune facture pour l'instant.
                            </div>
                        @else
                        <div class="col-xs-12"><!-- col-xs-12 -->
                            <form action="{{ route('admin.annonceurs') }}">
                                <div class="col-xs-4 pull-right clearfix">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-lg"
                                            name="term" value="{{ request('term') }}"
                                            placeholder="Recherchez par nom de société ou par email.">
                                        <span class="input-group-btn">
                                        <button class="btn btn-lg btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                            </form>
{{--                             
                            <div class="box-header">
                                <div class="pull-left">
                                    <a href="{{ route('admin.creerfacture') }}" class="btn btn-primary">
                                        Créer une facture
                                    </a>
                                </div>
                            </div> --}}

                            @if (session('message'))
                                <div class="col-xs-12">
                                    <div class="alert alert-info">{{ session('message') }}</div>
                                </div>
                            @endif

                            <!-- /.box-header -->
                            <div class="box-body ">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <td>Société</td>
                                        
                                        <td width="180px">Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($factures as $facture)
                                        <tr>
                                            <td>{{ $facture->name }}</td>
                                            <td>{{ $facture->id }}</td>
                                            <td>
                                            <a href="{{ asset('admin/touslespedefs'.'/'.$facture->id) }}"
                                                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Télécharger la facture en PDF">
                                                <i class="fa fa-file-pdf-o"></i>
                                            </a>

                                            </form>
                                            </td>
                                        </tr>
                
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->


                        </div><!-- ../col-xs-12 -->
                        @endif
                    
                </div><!-- ../box-body -->
            <div><!-- ../box box-primary -->
        </section>
    </div><!-- ../Content-wrapper -->

@endsection