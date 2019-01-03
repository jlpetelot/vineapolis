<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        @if (Auth::user()->role === "administrateur")
            <span class="logo-mini"><b>V</b>/A</span>
        @elseif (Auth::user()->role === "annonceur")
            <span class="logo-mini"><b>V</b>/A</span>
        @elseif (Auth::user()->role === "vigneron")
            <span class="logo-mini"><b>V</b>/V</span>
        @elseif (Auth::user()->role === "internaute")
            <span class="logo-mini"><b>V</b>/I</span>
        @endif
    <!-- logo for regular state and mobile devices -->
        @if (Auth::user()->role === "administrateur")
            <span class="logo-lg"><b>Vineapolis</b>/Admin</span>
        @elseif (Auth::user()->role === "annonceur")
            <span class="logo-lg"><b>Vineapolis</b>/Annonceur</span>
        @elseif (Auth::user()->role === "vigneron")
            <span class="logo-lg"><b>Vineapolis</b>/Vigneron</span>
        @elseif (Auth::user()->role === "internaute")
            <span class="logo-lg"><b>Vineapolis</b>/Internaute</span>
        @endif
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- Pour tous voir le site -->
                <li class="dropdown messages-menu">
                    <a href="{{ route('accueil') }}" target="_blank">
                        <i class="fa fa-eye text-blanc"></i>
                        &nbsp;Voir le site
                    </a>
                </li>;
                <!-- ../Pour tous voir le site -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @php
                            $chemin = asset('backend/img/avatar/');
                            $avatar = Auth::user()->imageprofil ? asset($chemin.'/'.Auth::user()->imageprofil) : asset($chemin.'avatar-neutre.jpg');
                        @endphp
                            <img src="{{ $avatar }}" width="8%" height="8%"
                                 class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                                <img src="{{ $avatar }}" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::user()->name }} - {{ ucwords(Auth::user()->role) }}
                                <small>{{ ucwords(Auth::user()->qualite) }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        @if (Auth::user()->role === "administrateur")
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('admin/profil', ['id' => Auth::user()->id]) }}" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endif

                        @if (Auth::user()->role === "annonceur")
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('admin/profil', ['id' => Auth::user()->id]) }}" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat"
                                       href="{{ route('logoutannonceur') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ url('/logoutannonceur') }}" method="POST" style="display:none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endif

                        @if (Auth::user()->role === "vigneron")
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('admin/profil', ['id' => Auth::user()->id]) }}" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat"
                                       href="{{ route('logoutvigneron') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ url('/logoutvigneron') }}" method="POST" style="display:none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endif

                        @if (Auth::user()->role === "internaute")
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('admin/profil', ['id' => Auth::user()->id]) }}" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat"
                                       href="{{ route('logoutinternaute') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ url('/logoutinternaute') }}" method="POST" style="display:none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>