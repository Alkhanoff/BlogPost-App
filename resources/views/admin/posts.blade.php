@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 mt-3 mb-3">
                            <h4>Bütün Postlar</h4>

                        </div>

                    </div>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Başlıq </th>
                            <th>Yazar </th>
                            <th>Tarix </th>
                            <th>Vəziyyət</th>
                            <th>Dəyiş</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user->fullname}}</td>
                                <td>{{date('d.m.Y', strtotime($post->date))}}</td>
                                @if($post->status == 1)
                                    <td><span class="badge badge-success">Təsdiqlənmiş</span></td>
                                @else
                                    <td><span class="badge badge-primary">Passiv</span></td>

                                @endif
                                <td><a href="{{route('admin.post-details',$post->id)}}" class="btn btn-primary">Dəyiş</a></td>


                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Başlıq </th>
                            <th>Yazar </th>
                            <th>Tarix </th>
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