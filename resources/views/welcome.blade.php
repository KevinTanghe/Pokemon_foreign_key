@extends('templates/main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <p>Créer un Pokémon</p>
                <img height="100px" width="100px" src="{{asset('img/Bulbizarre-RFVF.png')}}" alt="">
                <a class="btn btn-success" href="{{route('pokemon.create')}}">Create</a>
            </div>
            <div class="col-4">
                <p>Créer un type</p>
                <img height="100px" width="100px" src="{{asset('img/Carapuce-RFVF.png')}}" alt="">
                <a class="btn btn-success" href="{{route('type.create')}}">Create</a>
            </div>
            <div class="col-4">
                <p>Mes pokémons</p>
                <img height="100px" width="100px" src="{{asset('img/Salamèche-RFVF.png')}}" alt="">
                <a class="btn btn-primary" href="/liste">Show</a>
            </div>
        </div>
    </div>
@endsection