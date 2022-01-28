@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Welcome !
    </div>

    <div class="links">
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('a-propos') }}">A propos</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>

    <div class="container">
        <h2>Where does it come from?</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
    </div>
@endsection
