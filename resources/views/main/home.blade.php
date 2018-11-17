@extends('main.index')
@section('content')
    @include('main.includes.side' , compact($cats))
    <div class="col-md-9">

        <h4 class="textstyle text-center mt-4 underline">Paylaşımlar</h4>
        <div class="posts">
            <div class="row">
                @if(count($posts)>0)
                    @foreach($posts as $posts)
                        <div class="col-md-6">
                            <a style="text-decoration: none;" href="{{route('details', $posts->id)}}">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/images/{{$posts->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{strlen($posts->title) > 35 ? substr($posts->title ,0,35 ) . $end = '...'  : $posts->title}}</h5>
                                        <p class="card-text">{{strlen($posts->text) > 80 ? substr($posts->text ,0,80 ) . $end = '...'  : $posts->text}}  </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <p class="acolor"> {{$posts->user->fullname}}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="reviews">{{date('d.m.Y', strtotime($posts->date))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                @else
                    <div class="alert alert-warning">Heçbir nəticə yoxdur</div>
                @endif
            </div>
        </div>
    </div>
@endsection