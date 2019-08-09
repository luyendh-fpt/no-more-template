@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List game
                <small class="text-muted">All game availble</small>
            </h3>
            <a href="/game/create"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new</a>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
        <div class="col-5">
            <div class="form-group float-left mr-2">
                <select class="form-control">
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                </select>
            </div>
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                       placeholder="Enter keyword to search">
            </div>
            <div class="form-group float-left">
                <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input type="checkbox" class="form-control"></th>
                <th scope="col">Id</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <th scope="row"><input type="checkbox" class="form-control"></th>
                    <td>{{$item->id}}</td>
                    <td><img class="img-thumbnail rounded game-avatar" src="{{$item->thumbnail}}" alt="{{$item->name}}">
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="/game/{{$item->id}}" class="mr-2" title="View game detail">Detail</a>
                        <a href="/game/{{$item->id}}/edit" class="mr-2" title="Edit this game">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-delete" title="Delete this game">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="form-group mr-3">
            <select class="form-control mr-2">
                <option>Delete</option>
                <option>Accept</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
        </div>

    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <nav aria-label="Page navigation example">
                {{$list->links()}}
            </nav>
        </div>
    </div>
@endsection
