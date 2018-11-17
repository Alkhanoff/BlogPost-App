@extends('admin.index')
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Post Redaktə</h4>
                    <form method="post" action="{{route('admin.update-post',$post->id)}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Başlıq </label>
                                <textarea readonly type="text" rows="3" class="form-control"
                                          name="title">{{$post->title}}</textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label style="display: block" for="inputEmail4">Şəkil </label>
                                <img style="max-width: 600px;" src="/images/{{$post->image}}">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Mətn </label>
                                <textarea readonly rows="7" type="text" class="form-control"
                                          name="text">{{$post->text}}</textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4"> Kateqoriya </label>
                                <input readonly type="text" class="form-control" name="catId"
                                       value="{{$post->category->name}}">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4"> Tarix </label>
                                <input readonly type="text" class="form-control" name="date"
                                       value="{{date('d.m.Y', strtotime($post->date))}}">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Status </label>
                                <select name="status" class="form-control">
                                    @if($post->status == 1)
                                        <option selected="selected" value="1">Aktiv</option>
                                        <option value="0">Passiv et</option>
                                    @else
                                        <option selected="selected" value="0">Passiv</option>
                                        <option value="1">Aktiv et</option>
                                    @endif
                                </select>


                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-md-2">
                                <a href="{{route('admin.posts')}}" class="btn btn-primary">Geri Qayıt</a>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">Dəyiş</button>
                            </div>

                            <div class="col-md-2">
                                <a href="{{route('admin.soft-delete-the-post',$post->id)}}" class="btn btn-danger">Soft
                                    Deelete</a>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('admin.force-delete-the-post',$post->id)}}" class="btn btn-danger">Force
                                    Deelete</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection