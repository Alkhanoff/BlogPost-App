<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Blog App</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/blog/css/style.css">
    <link rel="apple-touch-icon" href="/blog/images/icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/blog/images/icon.png">
</head>
<body>
<!-- Head Start  -->
<div class="wrapper">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-xs-12">
                <a style="text-decoration: none;" href="{{route('home')}}"><h4 class="textstyle headtext ">Blog
                        Application</h4></a>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="loginsignup">
                    <button type="button" class="btn mybtn mr-4" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa fa-home"></i>
                        Giriş
                    </button>
                    <button type="button" class="btn mybtn" data-toggle="modal" data-target="#exampleModalCenter2">
                        <i class="fa fa-user"></i>
                        Qeydiyyat
                    </button>
                    <!-- Login Start  -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Giriş </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('user.enter')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-Poçt</label>
                                            <input type="email" class="form-control" name="email"
                                                   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Şifrə</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <button type="submit" class="btn mybtn">Təsdiq et</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login End  -->

                    <!-- Register Start  -->
                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Qeydiyyat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('register')}}">

                                        {{ csrf_field() }}


                                        <div class="form-group">
                                            <label for="fullname">Ad Soyad</label>
                                            <input type="text" class="form-control" name="fullname" id="fullname"
                                                   required aria-describedby="fullname" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-Poçt</label>
                                            <input type="email" class="form-control" name="email"
                                                   id="exampleInputEmail1" required aria-describedby="emailHelp"
                                                   placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Şifrə</label>
                                            <input type="password" name="password" class="form-control" required
                                                   id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <button type="submit" class="btn mybtn">Təsdiq et</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Register End  -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Head End  -->