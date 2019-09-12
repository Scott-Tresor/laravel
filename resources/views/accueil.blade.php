@extends('layout.main')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="/inscription" id="soumettre">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="username"  placeholder="votre nom" value="{{ old('username') }}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="prenom"  placeholder="votre prenom" value="{{ old('prenom') }}">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="votre adresse email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="votre mot de passe">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password_confirmation"  placeholder="votre mot de passe(confirmation)">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

