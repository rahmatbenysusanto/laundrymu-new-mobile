
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn.head')
    <link type="text/css" href="{{ asset('assets/css/auth/login.css') }}" rel="stylesheet">

    <title>Register</title>
</head>
<body>
<section>
    <h1>Daftar Akun</h1>
    <p>Gratis selama 30 hari!</p>
</section>

<div class="form">
    <form action="{{ route('processRegister') }}" method="POST" id="submit">
        @csrf
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label><br>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh : laundry amanah" required>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="email" name="email" placeholder="Contoh : laundrymu@gmail.com" required>
        </div>
        <div class="mb-2">
            <label for="noHp" class="form-label">No. Hp</label><br>
            <input type="number" class="form-control" id="noHp" name="no_hp" placeholder="Contoh : 08123456789" required>
        </div>
        <div class="mb-2">
            <label for="namaLaundry" class="form-label">Nama Laundry</label><br>
            <input type="text" class="form-control" id="namaLaundry" name="outlet" placeholder="Contoh : Mooda Laundry" required>
        </div>
        <div class="mb-2">
            <label for="password" class="form-label">Kata Sandi</label><br>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" value="" required>
                <span class="input-group-text">
                        <i class="fa fa-eye toggle-password" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>
        <div class="mb-2">
            <label for="passwordRepeat" class="form-label">Ulangi Kata Sandi</label><br>
            <div class="input-group">
                <input type="password" class="form-control" id="passwordRepeat" name="password" placeholder="Ulangi kata sandi anda" value="" required>
                <span class="input-group-text">
                        <i class="fa fa-eye toggle-password-repeat" style="cursor: pointer"></i>
                    </span>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center" style="margin-top: 16px">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
            <div style="margin-left: 8px;">
                <div class="text-1">Dengan mendaftar, saya menyatakan telah membaca dan menyetujui Ketentuan <span class="text-2">Layanan</span> & <span class="text-2">Kebijakan LaundryMu</span></div>
            </div>
        </div>

        <div class="d-grid gap-2">
            <a class="btn btn-primary" onclick="submit()">Daftar</a>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <p class="text-3">Sudah punya akun Laundrymu?  <a href="{{ route("login") }}" class="lupa-kata-sandi">Masuk</a></p>
        </div>
    </form>
</div>

@include('cdn.script')

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let input = $($(this).attr("toggle"));
        if (document.getElementById('password').type === "password") {
            document.getElementById('password').type = "text";
        } else {
            document.getElementById('password').type = "password";
        }
    });

    $(".toggle-password-repeat").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let input = $($(this).attr("toggle"));
        if (document.getElementById('passwordRepeat').type === "password") {
            document.getElementById('passwordRepeat').type = "text";
        } else {
            document.getElementById('passwordRepeat').type = "password";
        }
    });

    function submit() {
        if (document.getElementById('password').value === document.getElementById('passwordRepeat').value) {
            document.getElementById('submit').submit();
        } else {
            Swal.fire({
                html:'<div class="mt-3">' +
                    '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                    '<div class="mt-4 pt-2 fs-15">' +
                    '<h4>Gagal !</h4>' +
                    `<p class="text-muted mx-4 mb-0">Password harus sama.</p>` +
                    '</div>' +
                    '</div>',
                showCancelButton:!0,
                showConfirmButton:!1,
                cancelButtonClass:"btn btn-primary w-xs mb-1",
                cancelButtonText:"Kembali",
                buttonsStyling:!1,
                showCloseButton:!0
            });
        }
    }
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
