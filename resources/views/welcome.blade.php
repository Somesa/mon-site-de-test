@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Welcome
    </div>

    <div class="links">
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('a-propos') }}">A propos</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
@endsection
