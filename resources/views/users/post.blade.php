@extends('users.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Post Yarat</h4>
                    <form method="post" action="{{route('user.write-post')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Başlıq </label>
                                <textarea required type="text" rows="3" class="form-control" name="title"></textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label style="display: block" for="inputEmail4">Şəkil </label>
                                <input required class="form-control" type="file" name="image">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Mətn </label>
                                <textarea required rows="7" type="text" class="form-control" name="text"></textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4"> Kateqoriya </label>
                                <select required class="form-control" name="catId">
                                    @foreach($u as $u)
                                        <option value="{{$u->id}}">{{$u->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="row mt-4">
                            <div class="col-md-4">
                                <a href="{{route('user.dashboard')}}" class="btn btn-primary">Geri Qayıt</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Təsdiqlə</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection