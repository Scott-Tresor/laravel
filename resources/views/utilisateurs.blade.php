@extends('layout.main')

@section('title')
    Utilisateurs
@endsection

@section('content')
    <div class="container mt-5">
        <h2>{{ $utilisateur->username }}</h2>
    </div>
@endsection
