@extends('templates.main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($pokemon as $item)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('storage/'.$item->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">Level : {{$item->level}}</p>
                            <p class="card-text">Type : {{$item->types->type}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration %3 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
    </div>
@endsection
