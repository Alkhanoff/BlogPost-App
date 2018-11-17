@extends('main.index')
@section('content')
    @include('main.includes.side' , compact($cats))
    <div class="col-md-9">

        <h4 class="textstyle text-center mt-4 underline">Axtarış Nəticələri: </h4>
        <div class="posts">
            <div class="row">
                @if(count($posts ) == 0)
                    <div class="alert alert-warning">Heçbir Nəticə Tapılmadı</div>
                @endif
                @foreach($posts as $posts)
                    <div class="col-md-6">
                        <a style="text-decoration: none;" href="{{route('details', $posts->id)}}">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/images/{{$posts->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$posts->title}}</h5>
                                    <p class="card-text">{{strlen($posts->text) > 120 ? substr($posts->text ,0,120 ) . $end = '...'  : $posts->content}}  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="acolor"> {{$posts->user->fullname}}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="reviews">{{date('d.m.Y', strtotime($posts->date))}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection