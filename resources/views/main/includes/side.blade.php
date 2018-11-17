<div class="col-md-3">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="col-md-12">
        <div class="box-wrapper mt-4">
            <div class="search-widget">
                <form action="{{route('search')}}" class="search-form" method="post">
                    {{csrf_field()}}
                    <input type="text" name="search" placeholder="Axtar....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-wrapper mt-4">
            <h4 class="categories-title">Kateqoriyalar</h4>
            <ul class="categories-list">
                @foreach($cats as $cats)
                    <li><a href="{{route('category',$cats->id)}}">{{ $cats->name }} <span></span></a></li>
                @endforeach

            </ul>
        </div>
    </div>
</div>