@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List game
                <small class="text-muted">All game availble</small>
            </h3>
            <a href="/admin/example/form"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new</a>
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
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter keyword to search">
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
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col">Avatar</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><input type="checkbox" class="form-control"></th>
                <td>1</td>
                <td>Mark</td>
                <td><img class="img-thumbnail rounded game-avatar" src="https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png" alt=""></td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row"><input type="checkbox" class="form-control"></th>
                <td>2</td>
                <td>Jacob</td>
                <td><img class="img-thumbnail rounded game-avatar" src="https://cdn1.iconfinder.com/data/icons/fs-icons-ubuntu-by-franksouza-/512/D_cstrike..png" alt=""></td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row"><input type="checkbox" class="form-control"></th>
                <td>3</td>
                <td>Larry</td>
                <td><img class="img-thumbnail rounded game-avatar" src="http://2.bp.blogspot.com/-HqSOKIIV59A/U8WP4WFW28I/AAAAAAAAT5U/qTSiV9UgvUY/s1600/icon.png" alt=""></td>
                <td>@twitter</td>
            </tr>
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
                <ul class="pagination justify-content-right">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection