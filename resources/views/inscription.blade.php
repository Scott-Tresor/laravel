@extends('layout.main')

@section('title')
    Inscription
@endsection

@section('content')
    <div class="container mt-4">
        <form method="POST" action="/inscription" id="soumettre">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="prenom"  placeholder="votre prenom" value="{{ old('prenom') }}">
            </div>
            @if($errors->has('prenom'))
                <p>{{ $errors->first('prenom') }}</p>
            @endif
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="votre adresse email" value="{{ old('email') }}">
            </div>
            @if($errors->has('email'))
                <p>{{ $errors->first('email') }}</p>
            @endif
            <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="votre mot de passe">
            </div>
            @if($errors->has('password'))
                <p>{{ $errors->first('password') }}</p>
            @endif
            <div class="form-group">
              <input type="password" class="form-control" id="passwordHelpBlock" name="password_confirmation"  placeholder="votre mot de passe(confirmation)">
            </div>
             @if($errors->has('password_confirmation'))
                <small id="passwordHelpBlock" class="form-text text-muted">{{ $errors->first('password_confirmation') }}</smal>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

