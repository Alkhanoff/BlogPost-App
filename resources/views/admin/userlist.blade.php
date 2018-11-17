@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Bütün İstifadəçilər</h4>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>E-Poçt</th>
                            <th>Vəziyyət</th>
                            <th>Dəyiş</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->fullname}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->isNew == 1)
                                    <td><span class="badge badge-success">Yeni</span></td>
                                @else
                                    <td><span class="badge badge-primary">Təsdiqlənmiş</span></td>

                                @endif
                                <td><a href="{{route('admin.user',$user->id)}}" class="btn btn-primary">Dəyiş</a></td>


                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>E-Poçt</th>
                            <th>Vəziyyət</th>
                            <th>Dəyiş</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection