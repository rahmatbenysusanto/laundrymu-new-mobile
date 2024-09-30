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
<body style="background-color: white !important;">
<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('outlet') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Tambah Outlet</a></div>
            <div>

            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container pt-3">
        <div class="row">
            <div class="col-12">
                <form id="createOutlet">
                    <div class="mb-2">
                        <label class="form-label">Nama Outlet</label>
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">No HP</label>
                        <input type="text" class="form-control form-control-sm" id="no_hp" name="no_hp">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Provinsi</label>
                        <select class="form-select form-select-sm" id="provinsi" onchange="getProvinsi(this)" name="provinsi">
                            <option>Pilih Provinsi</option>
                            @foreach($provinsi as $pro)
                                <option value="{{ $pro->nama_provinsi }}">{{ $pro->nama_provinsi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Kabupaten/Kota</label>
                        <select class="form-select form-select-sm" id="kota" onchange="getKota()" name="kota">

                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Kecamatan</label>
                        <select class="form-select form-select-sm" id="kecamatan" onchange="getKecamatan()" name="kecamatan">

                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Kelurahan</label>
                        <select class="form-select form-select-sm" id="kelurahan" onchange="getKelurahan()" name="kelurahan">

                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Kode POS</label>
                        <select class="form-select form-select-sm" id="kodePos" name="kodePos">

                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control form-control-sm" id="alamat" name="alamat"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="lisensi" class="form-label">Pilihan Durasi Lisensi</label>
                        <select class="form-select form-select-sm" name="lisensi" id="lisensi">
                            <option>Pilih Durasi Lisensi Outlet</option>
                            @foreach($lisensi as $lis)
                                <option value="{{ $lis->id }}">{{ $lis->nama }} | Rp {{ number_format($lis->harga) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="kodePromo" class="form-label">Kode Promo</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="kodePromo" id="kodePromo">
                            <span class="input-group-text cursor-pointer" id="basic-addon2">Cek Kode Promo</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer-nav-area" id="footerNav">
    <div class="container">
        <div class="footer-nav position-relative shadow-sm footer-style-two">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li>
                    <a onclick="prosesPembayaran()" class="btn btn-lanjut">Buat Outlet</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@include('cdn.script')
<script>
    let loadFile = function(event) {
        document.getElementById('output').style.display = 'block';
        document.getElementById('uploadLogoText').innerText = 'Ganti Logo';
        let image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    function prosesPembayaran() {
        let form = document.getElementById('createOutlet');
        let formData = new FormData(form);

        Swal.fire({
            title:"Apakah anda yakin?",
            text:"Untuk memproses pembayaran ini.",
            icon:"warning",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Proses Pembayaran",
            denyButtonText: "Kembali",
        }).then(async function(result) {
            if (result.isConfirmed) {
                try {
                    const response = await fetch('{{ route('createOutlet') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        }
                    });

                    if (response.ok) {
                        const result = await response.json();
                        console.log('Success:', result);
                    } else {
                        console.error('Failed:', response.statusText);
                    }
                } catch (error) {
                    console.error('Error:', error);
                }
            }
        });
    }

    function getProvinsi(data) {
        $.ajax({
            url: '{{ route('getKota') }}',
            method: 'GET',
            data: {
                provinsi: data.value
            },
            success: function (params) {
                let html = '<option>Pilih Kabupaten/Kota</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kota}">${kota.nama_kota}</option>
                        `;
                });

                document.getElementById('kota').innerHTML = html;
                document.getElementById('kecamatan').innerHTML = '';
                document.getElementById('kelurahan').innerHTML = '';
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKota() {
        $.ajax({
            url: '{{ route('getKecamatan') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value
            },
            success: function (params) {
                let html = '<option>Pilih kecamatan</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kecamatan}">${kota.nama_kecamatan}</option>
                        `;
                });

                document.getElementById('kecamatan').innerHTML = html;
                document.getElementById('kelurahan').innerHTML = '';
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKecamatan() {
        $.ajax({
            url: '{{ route('getKelurahan') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value,
                kecamatan: document.getElementById('kecamatan').value
            },
            success: function (params) {
                let html = '<option>Pilih Kelurahan</option';
                let dataKota = params.data;

                dataKota.forEach(function (kota) {
                    html += `
                            <option value="${kota.nama_kelurahan}">${kota.nama_kelurahan}</option>
                        `;
                });

                document.getElementById('kelurahan').innerHTML = html;
                document.getElementById('kodePos').innerHTML = '';
            }
        });
    }

    function getKelurahan() {
        $.ajax({
            url: '{{ route('getKodePos') }}',
            method: 'GET',
            data: {
                provinsi: document.getElementById('provinsi').value,
                kota: document.getElementById('kota').value,
                kecamatan: document.getElementById('kecamatan').value,
                kelurahan: document.getElementById('kelurahan').value
            },
            success: function (params) {
                let dataKota = params.data;

                document.getElementById('kodePos').innerHTML = `<option value="${dataKota[0].nama_kode_pos}">${dataKota[0].nama_kode_pos}</option>`;
            }
        });
    }
</script>
</body>
</html>

