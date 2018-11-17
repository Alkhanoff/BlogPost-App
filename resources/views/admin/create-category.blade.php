@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Kateqoriya Yarat</h4>
                    <form method="post" action="{{route('admin.new-category')}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Ad </label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.categories')}}" class="btn btn-primary">Geri Qayıt</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Yarat</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection