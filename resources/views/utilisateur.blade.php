@extends('layout.main')

@section('title')
    Utilisateur
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Les utilisateurs</h1>
        <ul>
            @foreach($utilisateurs as $utilisateur)
                <li>{{ $utilisateur->email }}</li>
                <li>{{ $utilisateur->password }}</li>
                <li>{{ $utilisateur->username }}</li>
            @endforeach
        </ul>
    </div>
@endsection
