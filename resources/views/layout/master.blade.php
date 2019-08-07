<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <script src="{{asset('js/app.js')}}" ></script>

    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-2 ml-3">
                    <div class="text-center">
                        <i class="fas fa-ad fa-7x"></i>
                    </div>
                    <div class="text-center">
                            <span class="badge badge-primary text-center" style="width: 6rem;">
                                No more thing
                            </span>
                    </div>
                </div>
                <div class="col-10">
                </div>
            </div>
            <div class="row">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Game</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Category
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-3">
            <div class="nav flex-column nav-pills">
                <a class="nav-link active" href="#"><i class="fas fa-users"></i>&nbsp;&nbsp;Manage User</a>
                <a class="nav-link" href="#"><i class="fas fa-gamepad"></i>&nbsp;&nbsp;Manage Game</a>
                <a class="nav-link" href="#"><i class="fas fa-list"></i>&nbsp;&nbsp;Manage Category</a>
                <a class="nav-link" href="#"><i class="fas fa-calculator"></i>&nbsp;&nbsp;Statistic</a>
            </div>
        </div>
        <div class="col-9">
            @section('content')
            @show()
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-center">
                Copyright &copy; T1808A
            </div>
        </div>
    </div>
</div>
</body>
</html>