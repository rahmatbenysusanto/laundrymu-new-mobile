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
            <a href="{{ route('transaksi') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
            </a>
            <div class="logo-wrapper"><a href="#" class="title-page">Daftar Layanan</a></div>
            <div>

            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">

    <div class="pt-2"></div>
    <div class="container">
        <div class="row pt-1">
            @foreach($layanan as $lay)
                <div class="col-12 pb-3">
                    <div class="card card-white p-3">
                        <div class="d-flex justify-content-between align-content-center align-items-center">
                            <div>
                                <p class="tra-lay-reguler-bold">{{ $lay->nama }}</p>
                                <p class="tra-lay-reguler">Rp. {{ number_format($lay->harga) }} / {{ $lay->type == "berat" ? "Kg" : "Pcs" }}</p>
                            </div>
                            <div>
                                <input type="hidden" id="lay_id_{{ $loop->iteration }}" value="{{ $lay->id }}">
                                <input type="hidden" id="lay_nama_{{ $loop->iteration }}" value="{{ $lay->nama }}">
                                <input type="hidden" id="lay_harga_{{ $loop->iteration }}" value="{{ $lay->harga }}">
                                <input type="hidden" id="lay_type_{{ $loop->iteration }}" value="{{ $lay->type }}">
                                <input type="number" class="form-control form-control-sm" min="0" id="lay_jumlah_{{ $loop->iteration }}" value="0" required>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

<div class="footer-nav-area" id="footerNav">
    <div class="container">
        <div class="footer-nav position-relative shadow-sm footer-style-two">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li>
                    <a onclick="prosesLayanan()" class="btn btn-lanjut">Lanjutkan Proses</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@include('cdn.script')
<script>
    function prosesLayanan() {
        let jumlahLayanan = {{ count($layanan) }};
        let layanan = [];
        for (let i = 1; i <= jumlahLayanan; i++) {
            if (document.getElementById(`lay_jumlah_${i}`).value > 0) {
                layanan.push({
                    'id' : document.getElementById(`lay_id_${i}`).value,
                    'nama' : document.getElementById(`lay_nama_${i}`).value,
                    'harga' : document.getElementById(`lay_harga_${i}`).value,
                    'type' : document.getElementById(`lay_type_${i}`).value,
                    'total' : document.getElementById(`lay_jumlah_${i}`).value
                });
            }
        }

        if (layanan.length !== 0) {
            localStorage.setItem('transaksiLayanan', JSON.stringify(layanan));
            window.location.href = '{{ route('tambahTransaksi') }}';
        }
    }
</script>
</body>
</html>
