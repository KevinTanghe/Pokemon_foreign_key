@extends('templates/main')
@section('content')
    <div class="container">
        <form action="/type" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Créer ton type</label>
              <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection