@extends('layout.main')

@section('title','Actualite')

@section('content')
     <div class="container mt-5">
        <h2>
        <div class="row">
            <div class="col-lg-4">
                Actualite
            </div>
        </div>
        <hr>
        @foreach($messages as $message)
            <strong>{{ $message->created_at }}</strong> <br>
            <p>{{ $message->contenu }}</p>
        @endforeach
    </div>
@endsection
