<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- On récupère l'avatar -->
                @php
                    $chemin = asset('backend/img/avatar');
                    $avatar = Auth::user()->imageprofil ? asset($chemin.'/'.Auth::user()->imageprofil) : asset($chemin.'avatar-neutre.jpg');
                @endphp
                <img src="{{ $avatar}}"
                     class="img-circle" alt="User Image">
                <!-- Fin avatar -->
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <!-- Rôle administrateur -->
            @role(['administrateur'])
            <li>
                <a href="{{ route('admin') }}" class="{{ Route::currentRouteName() == 'admin' ? 'actif' : '' }}">
                    <i class="fa fa-dashboard text-blue"></i>
                    Accueil</a>
            </li>
            <li class="header">Navigation</li>
            <li>
                <a href="{{ route('admin.gestionimages') }}" class="{{ Route::currentRouteName() == 'admin.gestionimages' ? 'actif' : '' }}">
                    <i class="fa fa-circle-o text-blue"></i>
                    Gestionnaire d'images
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars text-blue"></i> <span>Administrateurs</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.utilisateurs') }}">
                            <i class="fa  fa fa-circle-o text-blue"></i>
                            Tous les administrateurs</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.utilisateur.create') }}">
                            <i class="fa  fa fa-circle-o text-blue"></i>
                            Créer un administrateur</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.utilisateur.motdepasse') }}">
                            <i class="fa  fa fa-circle-o text-blue"></i>
                            Mots de passe sauvegardés
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars text-red"></i> <span>Vignerons</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.all') }}">
                            <i class="fa fa-circle-o text-red"></i>
                            Tous les vignerons
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.create') }}">
                            <i class="fa fa-circle-o text-red"></i>
                            Créer un vigneron
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.comments') }}">
                            <i class="fa fa-comments-o text-red"></i>
                            Modération commentaires
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.importvignerons.index') }}">
                            <i class="fa fa-fw fa-question text-red"></i>
                            Tous les vignerons import
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars text-yellow"></i> <span>Annonceurs</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.annonceurs') }}">
                            <i class="fa fa-circle-o text-yellow"></i>
                            Tous les annonceurs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.annonceurs.create') }}">
                            <i class="fa fa-circle-o text-yellow"></i>
                            Créer un annonceur
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{ route('factures.index') }}" class="{{ Route::currentRouteName() == 'admin.messages' ? 'actif' : '' }}">
                    <i class="fa fa-file-pdf-o text-blue"></i>
                    Factures
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('factures.create') }}" class="{{ Route::currentRouteName() == 'admin.messages' ? 'actif' : '' }}">
                    <i class="fa fa-circle-o text-blue"></i>
                    Créer une facture
                </a>
            </li> --}}
            <li>
          
                <a href="{{ route('admin.messages') }}" class="{{ Route::currentRouteName() == 'admin.messages' ? 'actif' : '' }}">
                    <i class="fa fa-fw fa-envelope text-blue" style="margin-left: -5px;"></i>&nbsp;&nbsp;Messages
                </a>
            </li>
            <li>
                <a href="{{ route('admin.profil', ['id' => Auth::user()->id]) }}">
                    <i class="fa fa-user text-blue"></i> <span>Gérer votre profil</span>
                </a>
            </li>
            <li class="header">Déconnexion</li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off text-red"></i>
                    Déconnexion
                </a>
            </li><!-- ../treeview -->
            @endrole
            <!-- ../Rôle administrateur -->

            <!-- Rôle annonceur -->
            @if(Auth::user()->role === 'annonceur')
             <!-- On va chercher si il y a des enregistrements de lignes pour les annonceurs -->
                <li>
                    <a href="{{ route('admin.statistiques', Auth::user()->id ) }}" class="{{ Route::currentRouteName() == 'admin.statistiques' ? 'actif' : '' }}">
                        <i class="ion ion-clipboard text-yellow"></i>
                        Statistiques</a>
                </li>
                <li>
                    <a href="{{ route('admin.achatsannonceur', Auth::user()->id ) }}" class="{{ Route::currentRouteName() == 'admin.achatsannonceur' ? 'actif' : '' }}">
                        <i class="ion ion-clipboard text-yellow"></i>
                        Achats
                    </a>
                </li>
                <!-- Si oui, on affiche l'ajout d'une commande -->
                <li>
                    <a href="{{ route('admin') }}" class="{{ Route::currentRouteName() == 'admin' ? 'actif' : '' }}">
                        <i class="ion fa-cart-plus text-yellow"></i>
                        Commander annonces
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.annonceurs.envoimail', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.annonceurs.envoimail' ? 'actif' : '' }}">
                        <i class="fa fa-envelope-o text-yellow"></i>
                        Email à l'administration
                    </a>
                    </li>
                <li>
                <li>
                    <a href="{{ route('admin.profil', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-user text-yellow"></i>
                        Gérez votre profil
                    </a>
                </li>
                <li class="header">Déconnexion</li>
                <li>
                    <a href="{{ route('logoutvigneron') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off text-yellow"></i>
                        Déconnexion
                    </a>
                </li><!-- ../treeview -->
            @endif
            <!-- ../Rôle annonceur -->

            <!-- Rôle vigneron -->
            @if(Auth::user()->role === 'vigneron')
                <li>
                    <a href="{{ route('admin') }}" class="{{ Route::currentRouteName() == 'admin' ? 'actif' : '' }}">
                        <i class="fa fa-dashboard text-red"></i>
                        Accueil</a>
                </li>
                <li>
                    <a href="{{ route('admin.statistiques', Auth::user()->id ) }}" class="{{ Route::currentRouteName() == 'admin.statistiques' ? 'actif' : '' }}">
                        <i class="ion ion-clipboard text-red"></i>
                        Statistiques</a>
                </li>
                <li>
                    <a href="{{ route('admin.achats', Auth::user()->id ) }}" class="{{ Route::currentRouteName() == 'admin.achats' ? 'actif' : '' }}">
                        <i class="ion ion-clipboard text-red"></i>
                        Achats</a>
                </li>
                <li>
                    <a href="{{ route('admin.vignerons.commentaires', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-comments-o text-red"></i>
                        Commentaires postés
                    </a>
                </li>
                {{-- Si il n'y a pas de commentaires postés pour le vigneron, pas de lien --}}
                <li>
                    <a href="{{ route('admin.vignerons.envoyeremail', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-envelope-o text-red"></i>
                        Email à l'administration
                    </a>
                    </li>
                <li>
                    <a href="{{ route('admin.profil', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-user text-red"></i>
                        Gérez votre profil
                    </a>
                </li>
                <li class="header">Déconnexion</li>
                <li>
                    <a href="{{ route('logoutvigneron') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off text-red"></i>
                        Déconnexion
                    </a>
                </li><!-- ../treeview -->
            @endif
            <!-- ../Rôle vigneron -->

            <!-- Rôle internaute -->
            @if(Auth::user()->role === 'internaute')
                <li>
                    <a href="{{ route('admin') }}" class="{{ Route::currentRouteName() == 'admin' ? 'actif' : '' }}">
                        <i class="fa fa-dashboard text-green"></i>
                        Accueil</a>
                </li>
                <li>
                    <a href="{{ route('admin.internaute.newsletter') }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-newspaper-o text-green"></i>
                        Insription newsletter
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.profil', Auth::user()->id) }}" class="{{ Route::currentRouteName() == 'admin.profil' ? 'actif' : '' }}">
                        <i class="fa fa-user text-green"></i>
                        Gérez votre profil
                    </a>
                </li>
                <li class="header">Déconnexion</li>
                <li>
                    <a href="{{ route('logoutvigneron') }}"
                       onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off text-green"></i>
                        Déconnexion
                    </a>
                </li><!-- ../treeview -->
        @endif
        <!-- ../Rôle internaute -->


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>