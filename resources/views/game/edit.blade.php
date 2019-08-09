@extends('layout.master')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Edit game information
            <small class="text-muted">Enter game information</small>
        </h3>
    </div>
    @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-6">
            <form action="{{ route('game.update', $game->id) }}" method="PUT">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Please enter name" value="{{$game->name}}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="Please enter price" value="{{$game->price}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Thumbnail</label>
                    <input type="text" name="thumbnail" class="form-control" placeholder="Please enter thumbnail url" value="{{$game->thumbnail}}">
                </div>
                <div class="form-group">
                    <img src="{{$game->thumbnail}}" class="img-thumbnail game-avatar-detail mr-3" alt="{{$game->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection