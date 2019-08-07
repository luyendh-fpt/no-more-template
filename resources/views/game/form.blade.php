@extends('layout.master')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Create new game
            <small class="text-muted">Enter game information</small>
        </h3>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/game" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Please enter name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Please enter price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Thumbnail</label>
                    <input type="text" name="thumbnail" class="form-control" placeholder="Please enter thumbnail url">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection