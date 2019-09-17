@extends('layout.main')

@section('title')
    Utilisateur
@endsection

@section('content')
    <div class="container mt-5">

        @auth
            <h1>Les utilisateurs Que je suis</h1>
                <ul>
                    @forelse(auth()->user()->suivis as $utilisateur)
                        <li>
                            <a href="/{{ $utilisateur->email }}">{{ $utilisateur->username }}</a>
                        </li>
                    @empty
                        Vous ne suivez personne
                    @endforelse
                </ul>
        @endauth

        <h1>Les utilisateurs inscrits</h1>
        <ul>
            @foreach($utilisateurs as $utilisateur)
                <li>
                    <a href="/{{ $utilisateur->email }}">{{ $utilisateur->username }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
