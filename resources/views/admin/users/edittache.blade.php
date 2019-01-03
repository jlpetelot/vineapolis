@extends('admin.layouts.backend.main')

@section('title', 'Éditer une tâche')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Éditer une tâche</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Éditer une tâche</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4>
                        Administrateur | <span style="color: #3c8dbc">Éditer une tâche</span>
                    </h4>
                </div>

                <div class="box-body">

                {!! Form::open([
                    'method' => 'PUT',
                    'route' => 'ajouttache.store',
                ]) !!}

                    <!-- Contenu de la tâche -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('contenu') ? 'has-error': '' }}">
                            <div class="col-xs-2  control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('contenu', "Descriptionde la tâche") !!}
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('contenu', null,
                                ['class' => 'form-control']) !!}
                                @if ($errors->has('contenu'))
                                    <span class="help-block">{{ $errors->first('contenu') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Contenu de la tâche -->

                    <!-- Deadline -->
                    <div class="form-horizontal">
                        <div class="form-group {{ $errors->has('deadline') ? 'has-error': '' }}">
                            <div class="col-xs-2  control-label">
                                <small style="font-size: 8px; position: absolute; margin: 0 0 0 -20px">
                                    (<i class="fa fa-fw fa-asterisk text-red"></i>)
                                </small>
                                {!! Form::label('deadline', "Deadline") !!}
                            </div>
                            <div class="col-xs-10">
                                {!! Form::text('deadline', null,
                                ['class' => 'form-control']) !!}
                                @if ($errors->has('deadline'))
                                    <span class="help-block">{{ $errors->first('deadline') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ../Deadline -->


                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-2 control-label">
                            </div>
                            <div class="col-xs-10">
                                {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
                                &nbsp;
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
                <br/><br/>

                <!-- /.box-body -->
                <br/>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection

