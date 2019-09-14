<header>
    @auth
        <div class="container">
            <div class="col-lg-4 ml-auto mt-2">
                <div class="text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-0" >
                            <a
                                class="nav-link {{ request()->is(auth()->user()->email) ? 'active' : '' }}"
                                href="/{{ auth()->user()->email }}"
                                style="text-transform: uppercase; text-decoration: none;">
                            {{ auth()->user()->username }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endauth
    <nav class="navbar navbar-expand-lg navbar-light">
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
                    @auth
                        @include('layout.navbar-item', ['lien' => '/', 'nom' => 'Contact'])
                        @include('layout.navbar-item', ['lien' => 'mon-compte', 'nom' => 'mon-compte'])
                        @include('layout.navbar-item', ['lien' => 'deconnexion', 'nom' => 'deconnexion'])
                    @else
                        @include('layout.navbar-item', ['lien' => 'connexion', 'nom' => 'connexion'])
                        @include('layout.navbar-item', ['lien' => 'inscription', 'nom' => 'inscription'])auth
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
