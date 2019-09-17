@extends('layout.main')

@section('title','Utilisateur')

@section('content')
    <div class="container mt-5">
        <h2>
        <div class="row">
            <div class="col-lg-4">
                {{ $utilisateur->username }}
            </div>
            <div class="col-lg-4">
                @auth
                    <form method="post" action="/{{ $utilisateur->email }}/suivis">
                        @csrf

                        @if(auth()->user()->suit($utilisateur))
                            {{ method_field('delete') }}
                        @endif
                        <button type="submit" class="btn btn-outline-success btn-sm">
                            @if(auth()->user()->suit($utilisateur))
                                Ne plus Suivre
                            @else
                                Suivre
                            @endif
                        </button>
                    </form>
                @endauth
            </div>
        </div>
        </h2>


        @if(auth()->check() AND auth()->user()->id === $utilisateur->id)

            <form method="POST" action="/messages" class="form mt-4">
                @csrf
                <div class="form-group">
                  <textarea class="form-control" name="contenue"  rows="2" placeholder="votre messages"></textarea>
                </div>
                @if($errors->has('contenue'))
                    <p class="text-danger">{{ $errors->first('contenue') }}</p>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Publier <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
                </div>
            </form>
        @endif

         <hr>
        @foreach($messages as $message)
            <strong>{{ $message->created_at }}</strong> <br>
            <p>{{ $message->contenu }}</p>
        @endforeach
    </div>
@endsection
