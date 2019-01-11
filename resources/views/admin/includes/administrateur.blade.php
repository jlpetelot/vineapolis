<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Bonjour {{ Auth::user()->name }}, vous pouvez dès maintenant :</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <ul>

            <li style="list-style-type: none">
                <a href="{{ route('admin.gestionimages') }}">
                    <i class="fa fa-circle-o text-blue"></i>
                    <span style="color: #444;">Gérer les images</span>
                </a>
            </li>
            @if (Auth::user()->email === "jlpetelot@madinici.org")
            <li style="list-style-type: none">
                <a href="{{ route('admin.utilisateurs') }}">
                    <i class="fa fa-bars text-blue"></i>
                    <span style="color: #444;">Gérer les administrateurs</span>
                </a>
            </li>
            @endif
            <li style="list-style-type: none">
                <a href="{{ route('admin.all') }}">
                    <i class="fa fa-bars text-red"></i>
                    <span style="color: #444;">Gérer les vignerons</span>
                </a>
            </li>
            <li style="list-style-type: none">
                <a href="{{ route('admin.annonceurs') }}">
                    <i class="fa fa-bars text-yellow"></i>
                    <span style="color: #444;">Gérer les annonceurs</span>
                </a>
            </li>
            <li style="list-style-type: none">
                <a href="{{ route('factures.index') }}">
                    <i class="fa fa-file-pdf-o text-blue"></i>
                    <span style="color: #444;">Gérer les factures</span>
                </a>
            </li>
            <li style="list-style-type: none">
                <a href="{{ route('admin.messages') }}">
                    <i class="fa fa-envelope text-blue"></i>
                    <span style="color: #444;">Gérer les messages</span>
                </a>
            </li>
            <li style="list-style-type: none">
                <a href="{{ route('admin.profil', ['id' => Auth::user()->id]) }}">
                    <i class="fa fa-user text-blue"></i>
                    <span style="color: #444;">Gérer votre profil</span>
                </a>
            </li>
            <li style="list-style-type: none">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off text-red"></i>
                    <span style="color: #444;">Vous déconnecter</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.box-body -->
    <!-- /.box-footer-->
</div>


<!-- Tâches -->
<div class="box" style="border: none">
    <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Tâches à faire <small>(la liste se réordonne)</small></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="todo-list">
            @if (session('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif

            @foreach($taches as $tache)
                <li>
                    <!-- drag handle -->
                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <!-- todo text -->
                    <span class="text">{{ $tache->contenu }}</span>

                    <!-- On met Carbon (date) en local française -->
                    @php
                        \Carbon\Carbon::setLocale('fr');
                        $deadline = \Carbon\Carbon::now()->addDays(1); // Deadline
                    @endphp
                    <!-- ../On met Carbon (date) en local français -->
                    @if( $deadline >= $tache->delai )
                        <small class="label label-danger">
                        <i class="fa fa-clock-o"></i>
                        <!-- Il faut convertir Carbon pour pouvoir convertir le string en Date -->
                       <!-- On peut l'écrire de 2 mainières. Comme la ligne suivante ou la ligne d'après -->
                        {{--Deadline : {{ \Carbon\Carbon::createFromTimestamp(strtotime($tache->delai))->diffForHumans() }}--}}
                            Deadline : {{ \Carbon\Carbon::parse($tache->delai)->diffForHumans() }}
                        </small>
                    @else
                         <small class="label label-info">
                         <i class="fa fa-clock-o"></i>
                         {{--Deadline : {{ \Carbon\Carbon::createFromTimestamp(strtotime($tache->delai))->diffForHumans() }}--}}
                             Deadline : {{ \Carbon\Carbon::parse($tache->delai)->diffForHumans() }}
                         </small>
                    @endif

                    <!-- General tools such as edit or delete-->
                    <div class="tools">

                        {!! Form::open([
                           'method' => 'DELETE',
                           'route' => ['ajouttache.destroy', $tache->id]
                         ]) !!}

                        {{--<a href="{{ route('ajouttache.edit', $tache->id) }}"><i class="fa fa-edit"></i></a>--}}

                        <button type="submit"
                                onclick="return confirm('Êtes-vous certain de vouloir suprimer la tâche : &laquo;&nbsp;<?= $tache->contenu ?> ?&nbsp;&raquo; ATTENTION, cette opération est définitive !!!')"
                                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer">
                            <i class="fa fa-trash-o"></i>
                        </button>

                        {{ Form::close() }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix no-border">
        <a href="{{ route('ajouttache') }}" class="btn btn-default pull-right">
            <i class="fa fa-plus"></i>&nbsp;Ajouter une tâche
        </a>
    </div>
</div>
<!-- /.Tâches-->

<!-- Vignerons -->
<div class="box" style="border: none; max-height: 230px" id="vigneron">
    <div class="box-header">
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">Vignerons et annonceurs à accréditer <small>(la liste se réordonne)</small></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="todo-list">
            @if (session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
            @endif
            @if (!$messages->count())
                Il n'existe aucun vigneron ou annonceur accrédité pour l'instant.
            @endif
            @foreach($messages as $message)
                <li>
                    <!-- drag handle -->
                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                    </span>
                    <!-- todo text -->
                    <span class="text">{{ $message->contenu }}</span>
                    <!-- On met Carbon (date) en local française -->
                @php
                    \Carbon\Carbon::setLocale('fr');
                    $deadline = \Carbon\Carbon::now()->addDays(1); // Deadline
                @endphp
                <!-- ../On met Carbon (date) en local français -->
                    @if( $deadline > $message->created_at )
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <small class="label label-info">
                            <i class="fa fa-clock-o"></i>
                            <!-- Il faut convertir Carbon pour pouvoir convertir le string en Date -->
                            <!-- On peut l'écrire de 2 mainières. Comme la ligne suivante ou la ligne d'après -->
                            {{--Deadline : {{ \Carbon\Carbon::createFromTimestamp(strtotime($message->delai))->diffForHumans() }}--}}
                            Posté {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
                        </small>
                    @elseif( $deadline <= $message->created_at )
                        <small class="label label-danger">
                            <i class="fa fa-clock-o"></i>
                            {{--Deadline : {{ \Carbon\Carbon::createFromTimestamp(strtotime($message->delai))->diffForHumans() }}--}}
                             Posté le : {{ \Carbon\Carbon::parse($message->created_at) }}, deadline dépassé
                        </small>
                    @endif

                <!-- General tools such as edit or delete-->
                    <div class="tools">

                        {!! Form::open([
                           'method' => 'DELETE',
                           'route' => ['destroy.message', $message->id]
                         ]) !!}

                        {{--<a href="{{ route('ajouttache.edit', $$message->id) }}"><i class="fa fa-edit"></i></a>--}}

                        <button type="submit"
                                onclick="return confirm('Ce vigneron a été accrédité. On peut donc bien supprimmer le message ? ATTENTION, cette opération est définitive !!!')"
                                class="btn btn-xs btn-danger" data-toggle="tooltip" title="Supprimer">
                            <i class="fa fa-trash-o"></i>
                        </button>

                        {{ Form::close() }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- /.box-body -->
    <br/>
</div>
<!-- /.Messages-->

<!-- Main content -->
<div class="box" style="border: none; max-height: 230px">
    <div class="box-header">
        <i class="fa fa-database" aria-hidden="true"></i>
        <h3 class="box-title">Rapides statistiques</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Réduire">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Retirer">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </div>
    <!-- /.box -->
</div>
<!-- /.content -->



