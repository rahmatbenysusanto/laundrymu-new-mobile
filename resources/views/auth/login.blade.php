
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn.head')
    <link type="text/css" href="{{ asset('assets/css/auth/login.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body>
<section>
    <h1>Login Akun</h1>
    <p>Nikmati beragam fitur canggih kami!</p>
</section>

<div class="form">
    <form action="{{ route('processLogin') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="nama" class="form-label">No HP</label><br>
            <input type="text" class="form-control" id="nama" name="username" placeholder="Contoh : 089xxxxxxxxx">
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Kata Sandi</label><br>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" value="">
                <span class="input-group-text">
                        <i class="fa fa-eye toggle-password" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>

        <div>
            <a href="{{ route('lupaKataSandi') }}" class="lupa-kata-sandi">Lupa kata sandi?</a>
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Masuk</button>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <p class="text-3">Belum punya akun Laundrymu?  <a href="{{ route("register") }}" class="lupa-kata-sandi">Daftar</a></p>
        </div>
    </form>
</div>

@include('cdn.script')

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let input = $($(this).attr("toggle"));
        let passwordField = document.getElementById('password');

        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    });

</script>
</body>
</html>
