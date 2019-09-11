@extends('layout.customer')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List game
                <small class="text-muted">All game availble</small>
            </h3>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-8">
        </div>
        <div class="col-4">
            <div class="form-group float-left mr-2">
                <select name="categoryId" class="form-control">
                    <option value="0" {{($currentCategoryId == 0) ? 'selected':''}}>Tất cả</option>
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
                <button type="submit" id="btn-home-search" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($list as $item)
        <div class="card m-2" style="width: 16rem;">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">$ {{$item->price}}</h6>
                <div class="card-body">
                    <img class="card-img" style="max-width: 200px; max-height: 100px" src="{{$item->thumbnail}}" alt="{{$item->name}}">
                </div>
                <div>
                    <a href="#" class="card-link">View detail</a>
                    <a href="javascript:void(0)"
                       class="card-link add-cart"
                       data-id="{{$item->id}}"
                       data-price="{{$item->price}}"
                       data-name="{{$item->name}}"
                       data-thumbnail="{{$item->thumbnail}}">Add cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-5">
        <div class="col-10"></div>
        <div class="col-2">
            <nav aria-label="Page navigation example">
                {{$list->links()}}
            </nav>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
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
