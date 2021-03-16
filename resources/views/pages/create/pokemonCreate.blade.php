@extends('templates/main')
@section('content')
    <div class="container">
        <form action="/pokemon" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nom du pokemon</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image du pokemon</label>
                <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Level du pokemon</label>
                <input type="text" name="level" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type du pokemon</label>
                <select name="type_id" id="">
                    @foreach ($type as $item)
                        <option value="{{$item->id}}">{{$item->type}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
