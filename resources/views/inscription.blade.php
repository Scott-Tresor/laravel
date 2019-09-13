@extends('layout.main')

@section('title')
    Inscription
@endsection

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/inscription" class="form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="prenom"  placeholder="votre prenom" value="{{ old('prenom') }}">
            </div>
            @if($errors->any('prenom'))
                <p class="text-danger">{{ $errors->first('prenom') }}</p>
            @endif
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="votre adresse email" value="{{ old('email') }}">
            </div>
            @if($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
            <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="votre mot de passe">
            </div>
            @if($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
            <div class="form-group">
              <input type="password" class="form-control" id="passwordHelpBlock" name="password_confirmation"  placeholder="votre mot de passe(confirmation)">
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

