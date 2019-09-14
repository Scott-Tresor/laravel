<li class="nav-item ">
    <a class="nav-link {{ request()->is($lien) ? 'active' : '' }}" href="{{ url($lien }}">{{ $nom }}</a>
</li>
