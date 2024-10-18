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
                        <p class="sub-title-page" id="titleTanggal">Hari ini ({{ date('d M Y') }})</p>
                    </div>
                </a>
                <div class="logo-wrapper"></div>
                <div>
                    <a onclick="modalTanggal()">
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
                    <a href="{{ route('laporan') }}" class="aktif">Operasional</a>
                    <a href="{{ route('laporanPelanggan') }}">Pelanggan</a>
                    <a href="{{ route('laporanPegawai') }}">Pegawai</a>
                    <a href="{{ route('laporanKeuangan') }}">Keuangan</a>
                </div>
            </section>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <h3 class="title me-2">Transaksi</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M10.5417 15.125H11.4583V10.0833H10.5417V15.125ZM11 8.77892C11.1601 8.77892 11.2939 8.72483 11.4015 8.61667C11.5097 8.5085 11.5638 8.37467 11.5638 8.21517C11.5638 8.05506 11.5097 7.92092 11.4015 7.81275C11.2939 7.70458 11.1601 7.6505 11 7.6505C10.8399 7.6505 10.7061 7.70458 10.5985 7.81275C10.4903 7.92092 10.4363 8.05506 10.4363 8.21517C10.4363 8.37467 10.4903 8.5085 10.5985 8.61667C10.7061 8.72483 10.8399 8.77892 11 8.77892ZM11.0028 19.25C9.86242 19.25 8.78992 19.0337 7.78525 18.601C6.78119 18.1677 5.90761 17.5798 5.1645 16.8373C4.42139 16.0954 3.83319 15.2228 3.39992 14.2193C2.96664 13.2159 2.75 12.1437 2.75 11.0028C2.75 9.86242 2.96633 8.78992 3.399 7.78525C3.83228 6.78119 4.42017 5.90761 5.16267 5.1645C5.90456 4.42139 6.77722 3.83319 7.78067 3.39992C8.78411 2.96664 9.85631 2.75 10.9972 2.75C12.1376 2.75 13.2101 2.96633 14.2148 3.399C15.2188 3.83228 16.0924 4.42017 16.8355 5.16267C17.5786 5.90456 18.1668 6.77722 18.6001 7.78067C19.0334 8.78411 19.25 9.85631 19.25 10.9972C19.25 12.1376 19.0337 13.2101 18.601 14.2148C18.1677 15.2188 17.5798 16.0924 16.8373 16.8355C16.0954 17.5786 15.2228 18.1668 14.2193 18.6001C13.2159 19.0334 12.1437 19.25 11.0028 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#262626"/>
                        </svg>
                    </div>
                    <p class="text mt-1">Evaluasi penyebab pembatalan & atur strategi untuk tingkatkan pendapatan</p>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="card-ringkasan">
                                <p class="card-ringkasan-title">Transaksi Selesai</p>
                                <p class="card-ringkasan-jumlah" id="transaksi-selesai">0</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-ringkasan">
                                <p class="card-ringkasan-title">Transaksi Dibatalkan</p>
                                <p class="card-ringkasan-jumlah" id="transaksi-batal">0</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <h3 class="title me-2">Preferensi Pelanggan</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M10.5417 15.125H11.4583V10.0833H10.5417V15.125ZM11 8.77892C11.1601 8.77892 11.2939 8.72483 11.4015 8.61667C11.5097 8.5085 11.5638 8.37467 11.5638 8.21517C11.5638 8.05506 11.5097 7.92092 11.4015 7.81275C11.2939 7.70458 11.1601 7.6505 11 7.6505C10.8399 7.6505 10.7061 7.70458 10.5985 7.81275C10.4903 7.92092 10.4363 8.05506 10.4363 8.21517C10.4363 8.37467 10.4903 8.5085 10.5985 8.61667C10.7061 8.72483 10.8399 8.77892 11 8.77892ZM11.0028 19.25C9.86242 19.25 8.78992 19.0337 7.78525 18.601C6.78119 18.1677 5.90761 17.5798 5.1645 16.8373C4.42139 16.0954 3.83319 15.2228 3.39992 14.2193C2.96664 13.2159 2.75 12.1437 2.75 11.0028C2.75 9.86242 2.96633 8.78992 3.399 7.78525C3.83228 6.78119 4.42017 5.90761 5.16267 5.1645C5.90456 4.42139 6.77722 3.83319 7.78067 3.39992C8.78411 2.96664 9.85631 2.75 10.9972 2.75C12.1376 2.75 13.2101 2.96633 14.2148 3.399C15.2188 3.83228 16.0924 4.42017 16.8355 5.16267C17.5786 5.90456 18.1668 6.77722 18.6001 7.78067C19.0334 8.78411 19.25 9.85631 19.25 10.9972C19.25 12.1376 19.0337 13.2101 18.601 14.2148C18.1677 15.2188 17.5798 16.0924 16.8373 16.8355C16.0954 17.5786 15.2228 18.1668 14.2193 18.6001C13.2159 19.0334 12.1437 19.25 11.0028 19.25ZM11 18.3333C13.0472 18.3333 14.7812 17.6229 16.2021 16.2021C17.6229 14.7812 18.3333 13.0472 18.3333 11C18.3333 8.95278 17.6229 7.21875 16.2021 5.79792C14.7812 4.37708 13.0472 3.66667 11 3.66667C8.95278 3.66667 7.21875 4.37708 5.79792 5.79792C4.37708 7.21875 3.66667 8.95278 3.66667 11C3.66667 13.0472 4.37708 14.7812 5.79792 16.2021C7.21875 17.6229 8.95278 18.3333 11 18.3333Z" fill="#262626"/>
                        </svg>
                    </div>
                    <p class="text mt-1">Rutin pantau preferensi pelanggan untuk meningkatkan kepuasan dengan memahami pengalaman pelanggan</p>

                    <div class="box-laporan mt-3">
                        <h3 class="title mb-1">Layanan</h3>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="50%">Nama</th>
                                <th scope="col" width="50%" class="text-center">Pemakaian</th>
                            </tr>
                            </thead>
                            <tbody id="listLayanan">

                            </tbody>
                        </table>
                    </div>

                    <div class="box-laporan mt-4">
                        <h3 class="title mb-1">Parfum</h3>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="50%">Nama</th>
                                <th scope="col" width="50%" class="text-center">Pemakaian</th>
                            </tr>
                            </thead>
                            <tbody id="listParfum">

                            </tbody>
                        </table>
                    </div>

                    <div class="box-laporan mt-4">
                        <h3 class="title mb-1">Diskon</h3>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="50%">Nama</th>
                                <th scope="col" width="50%" class="text-center">Pemakaian</th>
                            </tr>
                            </thead>
                            <tbody id="listDiskon">

                            </tbody>
                        </table>
                    </div>

                    <div class="box-laporan mt-4" style="margin-bottom: 70px">
                        <h3 class="title mb-1">Pembayaran</h3>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="50%">Nama</th>
                                <th scope="col" width="50%" class="text-center">Pemakaian</th>
                            </tr>
                            </thead>
                            <tbody id="listPembayaran">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="filterLaporan" tabindex="-1" aria-labelledby="filterLaporanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterLaporanLabel">Filter Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="filterForm">
                    <div class="mb-3">
                        <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalSelesai" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" value="{{ date('Y-m-d') }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a class="btn btn-primary" onclick="filterLaporan()">Terapkan Filter</a>
            </div>
        </div>
    </div>
    </div>

    @include('cdn.script')

    <script>
        // Default Date
        localStorage.setItem('tanggalMulai', JSON.stringify('{{ date('Y-m-d') }}'));
        localStorage.setItem('tanggalSelesai', JSON.stringify('{{ date('Y-m-d') }}'));
    </script>

    <script>
        laporanOperasional();

        function laporanOperasional() {
            // Default Run
            const start = JSON.parse(localStorage.getItem('tanggalMulai'));
            const end = JSON.parse(localStorage.getItem('tanggalSelesai'));

            $.ajax({
                url: '{{ route('laporan.jumlahTransaksi') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end
                },
                success: (res) => {
                    document.getElementById('transaksi-selesai').innerText = res.data.selesai;
                    document.getElementById('transaksi-batal').innerText = res.data.batal;
                }
            });

            $.ajax({
                url: '{{ route('laporan.layanan') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end
                },
                success: (res) => {
                    const layanan = res.data;
                    let html = '';

                    layanan.forEach((lay) => {
                        html += `
                            <tr>
                                <td>${lay.layanan}</td>
                                <td class="text-center">${lay.jumlah}</td>
                            </tr>
                        `;
                    });

                    document.getElementById('listLayanan').innerHTML = html;
                }
            });

            $.ajax({
                url: '{{ route('laporan.parfum') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end
                },
                success: (res) => {
                    const parfum = res.data;
                    let html = '';

                    parfum.forEach((par) => {
                        html += `
                            <tr>
                                <td>${par.parfum}</td>
                                <td class="text-center">${par.jumlah}</td>
                            </tr>
                        `;
                    });

                    document.getElementById('listParfum').innerHTML = html;
                }
            });

            $.ajax({
                url: '{{ route('laporan.diskon') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end
                },
                success: (res) => {
                    const diskon = res.data;
                    let html = '';

                    diskon.forEach((dis) => {
                        html += `
                            <tr>
                                <td>${dis.diskon}</td>
                                <td class="text-center">${dis.jumlah}</td>
                            </tr>
                        `;
                    });

                    document.getElementById('listDiskon').innerHTML = html;
                }
            });

            $.ajax({
                url: '{{ route('laporan.pembayaran') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end
                },
                success: (res) => {
                    const pembayaran = res.data;
                    let html = '';

                    pembayaran.forEach((pem) => {
                        html += `
                            <tr>
                                <td>${pem.pembayaran}</td>
                                <td class="text-center">${pem.jumlah}</td>
                            </tr>
                        `;
                    });

                    document.getElementById('listPembayaran').innerHTML = html;
                }
            });
        }
    </script>

    <script>
        function modalTanggal() {
            $('#filterLaporan').modal('show');
        }

        function formatTanggal(tanggal) {
            const options = { year: 'numeric', month: 'short', day: '2-digit' };
            return new Date(tanggal).toLocaleDateString('en-GB', options).replace(',', '');
        }

        function filterLaporan() {
            const tanggalMulai = document.getElementById('tanggalMulai').value;
            const tanggalSelesai = document.getElementById('tanggalSelesai').value;

            if (tanggalMulai === tanggalSelesai) {
                document.getElementById('titleTanggal').innerText = formatTanggal(tanggalMulai);
            } else {
                document.getElementById('titleTanggal').innerText = formatTanggal(tanggalMulai) + ' - ' + formatTanggal(tanggalSelesai);
            }

            localStorage.setItem('tanggalMulai', JSON.stringify(tanggalMulai))
            localStorage.setItem('tanggalSelesai', JSON.stringify(tanggalSelesai))

            laporanOperasional();
            $('#filterLaporan').modal('hide');
        }
    </script>

</body>
</html>
