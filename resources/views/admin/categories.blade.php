@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 mt-3 mb-3">
                            <h4>Bütün Kateqoriyalar</h4>
                            <a href="{{route('admin.createcategory')}}" class="btn btn-success mt-2"><i
                                        class="fa fa-plus"></i> Yenisini Yarat</a>
                        </div>

                    </div>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Ad </th>
                            <th>Vəziyyət</th>
                            <th>Dəyiş</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cats as $cat)
                            <tr>
                                <td>{{$cat->name}}</td>
                                @if($cat->status == 1)
                                    <td><span class="badge badge-success">Aktiv</span></td>
                                @else
                                    <td><span class="badge badge-primary">Passiv</span></td>

                                @endif
                                <td><a href="{{route('admin.category-details',$cat->id)}}" class="btn btn-primary">Dəyiş</a></td>


                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Ad </th>
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