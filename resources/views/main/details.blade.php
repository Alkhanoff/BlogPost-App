@extends('main.index')
@section('content')
    @include('main.includes.side' , compact($cats))
    <div class="col-md-9">
        <!--       Slider   Area       -->

        <img class="mt-4" id="imagecss" src="/images/{{$post->image}}">

        <h4 class="text-center mt-4">{{$post->title}}</h4>
        <p>
            {{$post->text}}
        </p>
        <div class="row">
            <div class="col-md-6 ">
                <p>Paylaşdı : <b> {{$post->user->fullname}} </b> {{date('d.m.Y', strtotime($post->date))}}</p>
            </div>

        </div>
    </div>
@endsection