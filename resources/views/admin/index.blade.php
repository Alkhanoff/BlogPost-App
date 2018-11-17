<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Blog Admin Panel</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="apple-touch-icon" href="/blog/images/icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/blog/images/icon.png">
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Panel</a>


    <a href="{{route('admin.logout')}}" class="btn btn-outline-danger my-2 my-sm-0 logout" type="submit"><i
                class="fa fa-sign-out"></i> Çıxış</a>


</nav>
<!-- Navbar End -->

<div id="wrapper">
    <!-- Sidebar Start -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <p style="color: white;">
                    Sistem Admini
                </p>
            </li>
            <li>
                <a href="{{route('admin.userlist')}}"> İstifadəçilər</a>
            </li>
            <li>
                <a href="{{route('admin.categories')}}">Kateqoriyalar</a>
            </li>
            <li>
                <a href="{{route('admin.posts')}}">Paylaşımlar</a>
            </li>

        </ul>
    </div>
    <!-- Sidebar End -->

    <!-- Content Wrapper Start -->
    @yield('content');
    <!-- Content Wrapper End -->

</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();

    });

</script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2({width: '80%'});
    });
</script>
</body>
</html>
