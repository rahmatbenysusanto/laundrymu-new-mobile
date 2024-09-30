<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('cdn.head')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('pembayaran') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Edit Pembayaran</a></div>
            <div>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">

    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <form action="{{ route('prosesEditPembayaran') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $pembayaran->id }}" name="id">
                        <div class="form-group">
                            <label class="form-label" for="nama">Nama Pembayaran</label>
                            <input class="form-control" value="{{ $pembayaran->nama }}" id="nama" type="text" placeholder="Masukan nama pembayaran" name="nama" required>
                        </div>
                        <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@include('components.menu')
@include('cdn.script')

<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

<script>
    let table = $("#listPembayaran").DataTable({
        paging: false,
        order: false
    });

    $('#search').on( 'keyup', function () {
        table.search( this.value ).draw();
    });
</script>

<script>
    function pilihan(id) {
        $("#pilihan").modal("show");
        document.getElementById('modalPilihan').innerHTML = `
            <a onclick="hapusPembayaran('${id}')">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3.70024 3.70024C3.81618 3.58413 3.95388 3.49202 4.10545 3.42918C4.25702 3.36633 4.41949 3.33398 4.58358 3.33398C4.74766 3.33398 4.91013 3.36633 5.0617 3.42918C5.21327 3.49202 5.35097 3.58413 5.46691 3.70024L10.0002 8.23191L14.5336 3.70024C14.6496 3.58424 14.7873 3.49222 14.9389 3.42944C15.0904 3.36667 15.2529 3.33435 15.4169 3.33435C15.581 3.33435 15.7434 3.36667 15.895 3.42944C16.0465 3.49222 16.1842 3.58424 16.3002 3.70024C16.4162 3.81624 16.5083 3.95396 16.571 4.10552C16.6338 4.25708 16.6661 4.41952 16.6661 4.58358C16.6661 4.74763 16.6338 4.91007 16.571 5.06163C16.5083 5.21319 16.4162 5.35091 16.3002 5.46691L11.7686 10.0002L16.3002 14.5336C16.5345 14.7678 16.6661 15.0856 16.6661 15.4169C16.6661 15.7482 16.5345 16.066 16.3002 16.3002C16.066 16.5345 15.7482 16.6661 15.4169 16.6661C15.0856 16.6661 14.7678 16.5345 14.5336 16.3002L10.0002 11.7686L5.46691 16.3002C5.23263 16.5345 4.91489 16.6661 4.58358 16.6661C4.25226 16.6661 3.93452 16.5345 3.70024 16.3002C3.46597 16.066 3.33435 15.7482 3.33435 15.4169C3.33435 15.0856 3.46597 14.7678 3.70024 14.5336L8.23191 10.0002L3.70024 5.46691C3.58413 5.35097 3.49202 5.21327 3.42918 5.0617C3.36633 4.91013 3.33398 4.74766 3.33398 4.58358C3.33398 4.41949 3.36633 4.25702 3.42918 4.10545C3.49202 3.95388 3.58413 3.81618 3.70024 3.70024Z" fill="#F83535"/>
                    </svg>
                    <span class="menu-modal-danger ms-2">Hapus Pembayaran</span>
                </div>
            </a>
        `;
    }

    function hapusPembayaran(id) {
        Swal.fire({
            title:"Apakah kamu yakin?",
            text:"Menghapus pembayaran ini",
            icon:"warning",
            showCancelButton:!0,
            confirmButtonText:"Hapus",
            cancelButtonText:"Batal",
            confirmButtonClass:"btn btn-primary w-xs me-2 mt-2",
            cancelButtonClass:"btn btn-danger w-xs mt-2",
            buttonsStyling:!1,showCloseButton:!0
        }).then(function(t){
            if (t.value) {
                $.ajax({
                    url: '{{ route("hapusPembayaran") }}',
                    method: 'GET',
                    data: {
                        id: id
                    },
                    success: function (res) {
                        if (res.status) {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Berhasil !</h4>' +
                                    '<p class="text-muted mx-4 mb-0">Hapus pembayaran berhasil.</p>' +
                                    '</div>' +
                                    '</div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"Kembali",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            }).then(function (e) {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                html:'<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Gagal !</h4>' +
                                    `<p class="text-muted mx-4 mb-0">${res.message}</p>` +
                                    '</div>' +
                                    '</div>',
                                showCancelButton:!0,
                                showConfirmButton:!1,
                                cancelButtonClass:"btn btn-primary w-xs mb-1",
                                cancelButtonText:"Kembali",
                                buttonsStyling:!1,
                                showCloseButton:!0
                            }).then(function (e) {
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    }
</script>
</body>
</html>
