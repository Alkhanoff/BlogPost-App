<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Blog Admin Panel</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/login.css">
    <link rel="apple-touch-icon" href="/admin/images/icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin/images/icon.png">
</head>
<body>
<form class="form-signin" method="post" action="{{route('admin.enter')}}">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Admin Panel</h1>
    <hr>
    <label for="inputEmail" class="sr-only">E-Poçt</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-Poçt" required autofocus>
    <label for="inputPassword" class="sr-only">Şifrə</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Şifrə" required>
    <div class="checkbox mb-3">

    </div>
    <button class="btn mybtn btn-block" type="submit">Daxil ol</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
