<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand {{ request()->is('/') ? 'active' : '' }}" href="/">
                <h3>FiveLab</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-lg-5" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    @if(auth()->check())
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('mon-compte') ? 'active' : '' }}" href="/mon-compte">Mon-compte</a>
                        </li>
                        <li class="nav-item d-md-inline-block pl-lg-3 pr-0">
                            <a class="nav-link {{ request()->is('deconnexion') ? 'active' : '' }}" href="/deconnexion">Deconnexion</a>
                        </li>
                    @else
                        <li class="nav-item d-md-inline-block pl-lg-3 pr-0">
                            <a class="nav-link {{ request()->is('connexion') ? 'active' : '' }}" href="/connexion">Connexion</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('inscription') ? 'active' : '' }}" href="/inscription">Inscription</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
