@extends('layout.master')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> {{$game->name}}
            <small class="text-muted">Game description</small>
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
        <div class="col-12">
            <div class="media">
                <img src="{{$game->thumbnail}}" class="img-thumbnail game-avatar-detail mr-3" alt="{{$game->name}}">
                <div class="media-body">
                    <h5 class="mt-0">Price: ${{$game->price}}</h5>
                    <p class="mt-0">Public: {{$game->created_at}}</p>
                    <p class="mt-0">Update: {{$game->updated_at}}</p>
                    <a href="/game/{{$game->id}}/edit" class="mr-2" title="Edit this game">Edit</a>
                    <a href="" class="mr-2" title="Delete this game">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection