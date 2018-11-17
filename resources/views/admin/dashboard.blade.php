@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row mt-4">

                <!--  Notification Area -->
                <div class="col-md-4">
                    <a style="text-decoration: none;" href="{{route('admin.userlist')}}">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Yazarlar</h3>
                            </div>
                            <div class="box-body">
                                Yeni yazar sayı : {{$newUser}}
                            </div>
                        </div>
                    </a>
                </div>
                <!--  Notification Area -->


                <!--  Notification Area -->
                <div class="col-md-4 offset-2">
                    <a style="text-decoration: none;" href="{{route('admin.posts')}}">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Postlar</h3>
                            </div>
                            <div class="box-body">
                                Yeni post sayı : {{$newPost}}
                            </div>
                        </div>
                    </a>
                </div>
                <!--  Notification Area -->
            </div>

        </div>
    </div>
@endsection