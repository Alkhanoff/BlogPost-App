@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Kateqoriya Redaktə</h4>
                    <form method="post" action="{{route('admin.update-category',$cat->id)}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Ad </label>
                                <input type="text" class="form-control" name="name" id="" value="{{$cat->name}}">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Status </label>
                                <select name="status" class="form-control">
                                    @if($cat->status == 1)
                                        <option selected="selected" value="1">Aktiv</option>
                                        <option value="0">Passiv</option>
                                    @else
                                        <option selected="selected" value="0">Passiv</option>
                                        <option value="1">Aktiv</option>
                                    @endif
                                </select>


                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.categories')}}" class="btn btn-primary">Geri Qayıt</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Dəyiş</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection