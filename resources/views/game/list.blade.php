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
        <div class="col-6">
        </div>
        <div class="col-6">
            <div class="form-group float-left mr-2">
                <select name="categoryId" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" name="keyword"
                       placeholder="Enter keyword to search" value="{{$currentKeyword}}">
                <input type="hidden" name="currentPage" value="{{$currentPage}}">
            </div>
            <div class="form-group float-left">
                <button type="submit" id="btn-search" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">
                    <input type="checkbox" id="check-all">
                </th>
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
                    <th scope="row">
                        <input type="checkbox" class="check-item" value="{{$item->id}}">
                    </th>
                    <td>{{$item->id}}</td>
                    <td><img class="img-thumbnail rounded game-avatar" src="{{$item->thumbnail}}" alt="{{$item->name}}">
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="/game/{{$item->id}}" class="mr-2" title="View game detail">Detail</a>
                        <a href="javascript:void(0)" id="btn-edit-{{$item->id}}" class="mr-2 btn-edit" title="Edit this game">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-delete" title="Delete this game">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="form-group mr-3">
            <select class="form-control mr-2" id="select-action">
                <option value="0">--Chọn thao tác--</option>
                <option value="-1">Xoá</option>
                <option value="1">Phát hành</option>
            </select>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-outline-primary mb-2" id="btn-apply-all">Apply to all</button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
