@extends('layout.main')

@section('title')
    Connexion
@endsection

@section('content')
    <div class="container mt-4">
        <form method="POST" action="/connexion" class="form">
            @csrf
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
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </form>
    </div>
@endsection

