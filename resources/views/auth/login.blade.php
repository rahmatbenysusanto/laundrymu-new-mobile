
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
@if($message = Session::get('success'))
    <script>
        Swal.fire({
            html:'<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Berhasil !</h4>' +
                '<p class="text-muted mx-4 mb-0">{{ $message }}.</p>' +
                '</div>' +
                '</div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"Kembali",
            buttonsStyling:!1,
            showCloseButton:!0
        });
    </script>
@endif

@if($message = Session::get('error'))
    <script>
        Swal.fire({
            html:'<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Gagal !</h4>' +
                '<p class="text-muted mx-4 mb-0">{{ $message }}</p>' +
                '</div>' +
                '</div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"Kembali",
            buttonsStyling:!1,
            showCloseButton:!0
        })
    </script>
@endif
</body>
</html>
