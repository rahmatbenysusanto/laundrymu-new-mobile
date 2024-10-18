<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/laporan/laporan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lainnya/lainnya.css') }}">
    @include('cdn.head')
</head>
<body>
@include('components.menu')
<div class="header-area" id="headerArea">
    <div class="container">
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                    <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                </svg>
                <div class="ms-3">
                    <p class="title-page mb-0">Laporan</p>
                    <p class="sub-title-page">Hari ini ({{ date('d M Y') }})</p>
                </div>
            </a>
            <div class="logo-wrapper"></div>
            <div>
                <a href="#">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.33301 2.33398V7.00065M18.6663 2.33398V7.00065" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.1667 4.66797H5.83333C4.54467 4.66797 3.5 5.71264 3.5 7.0013V23.3346C3.5 24.6233 4.54467 25.668 5.83333 25.668H22.1667C23.4553 25.668 24.5 24.6233 24.5 23.3346V7.0013C24.5 5.71264 23.4553 4.66797 22.1667 4.66797Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.5 11.668H24.5" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper">
    <div class="container" style="margin-top: 16px">
        <section class="mt-5 mb-3">
            <div class="scrollmenu">
                <a href="{{ route('laporan') }}">Operasional</a>
                <a href="{{ route('laporanPelanggan') }}">Pelanggan</a>
                <a href="{{ route('laporanPegawai') }}" class="aktif">Pegawai</a>
                <a href="{{ route('laporanKeuangan') }}">Keuangan</a>
            </div>
        </section>
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h3 class="title me-2">Pelanggan</h3>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Pelanggan Baru</p>
                            <p class="card-ringkasan-jumlah" id="transaksi-selesai">0</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Total Pelanggan</p>
                            <p class="card-ringkasan-jumlah" id="transaksi-batal">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('cdn.script')

</body>
</html>
