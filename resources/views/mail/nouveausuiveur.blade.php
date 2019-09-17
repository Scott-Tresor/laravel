@extends('layout.main')

@section('title','Mail')

@section('content')
    @component('mail::message')
        # Vous avez un *nouveausuiveur* {{ $suiveur->email }}
    @endcomponent
@endsection
