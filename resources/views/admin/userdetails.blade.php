@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h4>İstifadəçi Redaktə</h4>
                    <form method="post" action="{{route('admin.update-user',$user->id)}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Ad Soyad</label>
                                <input type="text" readonly class="form-control" id="" value="{{$user->fullname}}">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">E-Poçt</label>
                                <input type="text" readonly class="form-control" id="inputPassword4"
                                       value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Vəziyyət </label>
                                <select name="isNew" class="form-control">
                                    @if($user->isNew == 1)
                                        <option selected="selected" value="1">Passiv</option>
                                        <option value="0">Aktiv et</option>
                                    @else
                                        <option selected="selected" value="0">Aktiv</option>
                                        <option value="1">Passiv et</option>
                                    @endif
                                </select>


                            </div>

                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-8">
                                <label style="display: block" for="inputEmail4">Kateqoriyalar</label>


                                <select class="js-example-basic-multiple" name="catId[]" multiple="multiple">
                                    @foreach($chosen as $chosen)
                                        <option selected="selected" value="{{$chosen->id}}">{{$chosen->name}}</option>
                                    @endforeach
                                    {{--@foreach($chosen as $c)--}}
                                    {{--<option  value="{{$c->category->id}}">{{$c->category->name}}</option>--}}
                                    {{--@endforeach--}}
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach

                                </select>

                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{route('admin.userlist')}}" class="btn btn-primary">Geri Qayıt</a>
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