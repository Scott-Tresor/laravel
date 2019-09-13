@extends('layout.main')

@section('title')
    Utilisateurs
@endsection

@section('content')
    <div class="container mt-5">
        <h2></h2>

        @if(auth()->check() AND auth()->user()->id === $utilisateur->id)

            <form method="POST" action="/messages" class="form mt-4">
                @csrf
                <div class="form-group">
                  <textarea class="form-control" name="contenue"  rows="3" placeholder="votre messages"></textarea>
                </div>
                @if($errors->has('contenue'))
                    <p class="text-danger">{{ $errors->first('contenue') }}</p>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publier <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                </div>
            </form>
        @endif

        <hr>
        @foreach($message as $messages)
            <strong>{{ $messages->created_at }}</strong> <br>

            <p>{{ $messages->contenu }}</p>
        @endforeach
    </div>
@endsection
