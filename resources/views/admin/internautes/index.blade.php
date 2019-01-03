@extends('admin.layouts.backend.main')

@section('title', 'Les annonceurs')

@section('content')

    <div class="content-wrapper"><!-- content-wrapper -->
        <section class="content-header">
            <h1>Inscription à la Newsletter</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Inscription à la Newsletter</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h4>Internautes | Inscription à la Newsletter de <span style="color: #00a65a">{{ $user }}</span></h4>

                    <div class="row">
                        <div class="col-xs-12">
                            Vous souhaitez vous inscrire à la Newsletter de Vineapolis. Cliquez sur le bouton bleu &laquo;&nbsp;inscription&nbsp;&raquo; et vous le serez.
                        </div>
                        
                        <br/><br/><br/>
                        @if (session('message'))
                            <div class="col-xs-5 alert alert-success" style="margin-left:30px">
                                <div class="text-center">{{ session('message') }}</div>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="col-xs-6 alert alert-danger" style="margin-left:30px">
                                <div class="text-center">{{ session('error') }}</div>
                            </div>
                        @endif
                        {!! Form::model($newsletters, [
                            'method'    => 'POST',
                            'route'     => ['admin.internaute.newsletter.store', 'id' => $id]
                            ]) !!}
                        <!-- Inscription -->
                        <div class="col-xs-7 control-label" style="margin-left:20px">
                            <div class="form-group {{ $errors->has('inscrit') ? 'has-error': '' }}">
                                {!! Form::label('inscrit', "Je m'inscris à la Newsletter") !!}
                                {!! Form::checkbox('inscrit', 1, true) !!}
                                @if ($errors->has('inscrit'))
                                    <span class="help-block">{{ $errors->first('inscrit') }}</span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <!-- ../Inscription -->
                        <!-- Bouton d'envoi -->
                        <div class="col-xs-2 control-label" style="margin-left:5px">
                            <div class="form-group">
                                {!! Form::submit('Inscription', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <a href="{{ route ('admin') }}" type="button" class="btn btn-default">Annulez</a>
                            </div>
                        </div>
                        <!-- ../Bouton d'envoi -->
                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    
@endsection