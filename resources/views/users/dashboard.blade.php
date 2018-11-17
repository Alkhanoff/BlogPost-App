@extends('users.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mt-3 mb-3">
                    <h4>Mənim Postlarım</h4>

                </div>
                <div class="col-md-6 mt-3 mb-3">
                    <a href="{{route('user.new-post')}}" class="btn btn-success mt-2"><i class="fa fa-plus"></i>
                        Yenisini Yarat</a>

                </div>

            </div>
            <div class="row mt-4">
                @if (Session::has('status'))
                    <div class="alert alert-warning">{{ Session::get('status') }}</div>
                @endif
            </div>
            <div class="row mt-4">
                <div class="col-md-10">


                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Başlıq</th>

                            <th>Tarix</th>
                            <th>Vəziyyət</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>

                                <td>{{date('d.m.Y', strtotime($post->date))}}</td>
                                @if($post->status == 1)
                                    <td><span class="badge badge-success">Təsdiqlənmiş</span></td>
                                @else
                                    <td><span class="badge badge-primary">Passiv</span></td>

                                @endif


                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Başlıq</th>

                            <th>Tarix</th>
                            <th>Vəziyyət</th>

                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection