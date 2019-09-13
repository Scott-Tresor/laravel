@extends('layout.main')

@section('title')
    Mon-Compte
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Mon Compte</h1>

        <p>Bienvue  tu est connecter</p>

        <a href="/modifier-compte" class="btn btn-warning">Deconnexion</a>

        <form method="POST" action="/inscription" class="form">
            @csrf
            <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="modifier votre mot de passe">
            </div>
            @if($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
            <div class="form-group">
              <input type="password" class="form-control" id="passwordHelpBlock" name="password_confirmation"  placeholder="modifier votre mot de passe(confirmation)">
            </div>
             @if($errors->has('password_confirmation'))
                <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
@endsection
