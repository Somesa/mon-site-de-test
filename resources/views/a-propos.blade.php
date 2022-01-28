@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        A propos
    </div>

    <div class="links">
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('a-propos') }}">A propos</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>

    <div class="container">
        <h2>What is Lorem Ipsum?</h2>
        <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
@endsection
