@include('main.includes.head')
@yield('head')
<div class="container">
    <div class="row">
        @yield('content')


    </div>
</div>
@include('main.includes.footer')
@yield('footer')
