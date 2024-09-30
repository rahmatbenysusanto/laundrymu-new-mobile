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
                <a href="{{ route('lainnya') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                        <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                    </svg>
                </a>
                <div class="logo-wrapper"><a href="#" class="title-page">Daftar Layanan</a></div>
                <div class="user-profile-wrapper">
                    <a href="{{ route('tambahLayanan') }}" class="text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">

        <section id="list-transaksi-header">
            <div class="container">
                <div class="pb-3 pt-3">
                    <input type="text" class="form-control" placeholder="Cari nama layanan" id="search">
                </div>
            </div>
        </section>

        <div class="mt-3"></div>
        <div class="container">
            <table class="w-100" id="listLayanan">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($layanan as $lay)
                    <tr>
                        <td>
                            <div class="card p-2 mb-3">
                                <p class="text-nama">{{ $lay->nama }}</p>
                                <p class="text-tipe">{{ $lay->type }}</p>
                                <p class="text-harga">Rp.{{ number_format($lay->harga) }}</p>
                                <div class="row mt-3">
                                    <div class="col-10">
                                        <a href="/edit-layanan/{{ base64_encode($lay->id) }}" class="btn btn-putih">Ubah</a>
                                    </div>
                                    <div class="col-2">
                                        <a onclick="pilihan('{{ $lay->id }}')" class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9 15.25C9 14.9185 9.1317 14.6005 9.36612 14.3661C9.60054 14.1317 9.91848 14 10.25 14C10.5815 14 10.8995 14.1317 11.1339 14.3661C11.3683 14.6005 11.5 14.9185 11.5 15.25C11.5 15.5815 11.3683 15.8995 11.1339 16.1339C10.8995 16.3683 10.5815 16.5 10.25 16.5C9.91848 16.5 9.60054 16.3683 9.36612 16.1339C9.1317 15.8995 9 15.5815 9 15.25ZM9 10.25C9 9.91848 9.1317 9.60054 9.36612 9.36612C9.60054 9.1317 9.91848 9 10.25 9C10.5815 9 10.8995 9.1317 11.1339 9.36612C11.3683 9.60054 11.5 9.91848 11.5 10.25C11.5 10.5815 11.3683 10.8995 11.1339 11.1339C10.8995 11.3683 10.5815 11.5 10.25 11.5C9.91848 11.5 9.60054 11.3683 9.36612 11.1339C9.1317 10.8995 9 10.5815 9 10.25ZM9 5.25C9 4.91848 9.1317 4.60054 9.36612 4.36612C9.60054 4.1317 9.91848 4 10.25 4C10.5815 4 10.8995 4.1317 11.1339 4.36612C11.3683 4.60054 11.5 4.91848 11.5 5.25C11.5 5.58152 11.3683 5.89946 11.1339 6.13388C10.8995 6.3683 10.5815 6.5 10.25 6.5C9.91848 6.5 9.60054 6.3683 9.36612 6.13388C9.1317 5.89946 9 5.58152 9 5.25Z" fill="#262626"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal fade bottom-modal" id="pilihan" tabindex="-1">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="bottomAlignModalLabel">Pilihan</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalPilihan">

                </div>
            </div>
        </div>
    </div>

    @include('components.menu')
    @include('cdn.script')

    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

    <script>
        let table = $("#listLayanan").DataTable({
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
            <a onclick="hapusLayanan('${id}')">
                <div class="d-flex align-items-center align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3.70024 3.70024C3.81618 3.58413 3.95388 3.49202 4.10545 3.42918C4.25702 3.36633 4.41949 3.33398 4.58358 3.33398C4.74766 3.33398 4.91013 3.36633 5.0617 3.42918C5.21327 3.49202 5.35097 3.58413 5.46691 3.70024L10.0002 8.23191L14.5336 3.70024C14.6496 3.58424 14.7873 3.49222 14.9389 3.42944C15.0904 3.36667 15.2529 3.33435 15.4169 3.33435C15.581 3.33435 15.7434 3.36667 15.895 3.42944C16.0465 3.49222 16.1842 3.58424 16.3002 3.70024C16.4162 3.81624 16.5083 3.95396 16.571 4.10552C16.6338 4.25708 16.6661 4.41952 16.6661 4.58358C16.6661 4.74763 16.6338 4.91007 16.571 5.06163C16.5083 5.21319 16.4162 5.35091 16.3002 5.46691L11.7686 10.0002L16.3002 14.5336C16.5345 14.7678 16.6661 15.0856 16.6661 15.4169C16.6661 15.7482 16.5345 16.066 16.3002 16.3002C16.066 16.5345 15.7482 16.6661 15.4169 16.6661C15.0856 16.6661 14.7678 16.5345 14.5336 16.3002L10.0002 11.7686L5.46691 16.3002C5.23263 16.5345 4.91489 16.6661 4.58358 16.6661C4.25226 16.6661 3.93452 16.5345 3.70024 16.3002C3.46597 16.066 3.33435 15.7482 3.33435 15.4169C3.33435 15.0856 3.46597 14.7678 3.70024 14.5336L8.23191 10.0002L3.70024 5.46691C3.58413 5.35097 3.49202 5.21327 3.42918 5.0617C3.36633 4.91013 3.33398 4.74766 3.33398 4.58358C3.33398 4.41949 3.36633 4.25702 3.42918 4.10545C3.49202 3.95388 3.58413 3.81618 3.70024 3.70024Z" fill="#F83535"/>
                    </svg>
                    <span class="menu-modal-danger ms-2">Hapus Layanan</span>
                </div>
            </a>
        `;
        }

        function hapusLayanan(id) {
            Swal.fire({
                title:"Apakah kamu yakin?",
                text:"Menghapus layanan ini",
                icon:"warning",
                showDenyButton: true,
                showCancelButton: false,
                denyButtonText: `Batal`,
                confirmButtonText: "Hapus"
            }).then(function(t){
                if (t.value) {
                    $.ajax({
                        url: '{{ route("hapusLayanan") }}',
                        method: 'GET',
                        data: {
                            id: id
                        },
                        success: function (res) {
                            if (res.status) {
                                Swal.fire({
                                    title: "Berhasil",
                                    text: "Layanan Berhasil dihapus",
                                    icon: "success"
                                }).then(function (e) {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: "Gagal",
                                    text: "Layanan Gagal dihapus",
                                    icon: "error"
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
