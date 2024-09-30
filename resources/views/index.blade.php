<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn.head')
    <link type="text/css" href="{{ asset('assets/css/auth/home.css') }}" rel="stylesheet">

    <title>Home</title>
</head>
<body>

<div class="welcome-box">
    <h1>Selamat datang di Aplikasi kasir <span>LaundryMu!</span></h1>
    <p>nikmati beragam fitur canggih untuk mengoptimalkan
        bisnis laundry Anda dengan harga terjangkau!
    </p>
    <div class="d-grid gap-2">
        <a href="{{ route("register") }}" class="btn btn-primary">Coba Gratis 30 hari</a>
    </div>
    <div class="text-center">
        <span>Sudah punya akun? <a href="{{ route("login") }}" class="login"> Masuk</a></span>
    </div>
</div>

@include('cdn.script')

</body>
</html>
