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
                <div class="logo-wrapper"><a href="#" class="title-page">Buat Transaksi</a></div>
                <div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="card card-white p-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Detail Layanan</p>
                <a>
                    <p class="button-blue-transaksi">Tambah Layanan</p>
                </a>
            </div>
            <div class="list-layanan" id="list-layanan">

            </div>
        </div>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Catatan<span class="tra-lay-reguler"> (Opsional)</span></p>
            </div>
            <div class="pt-2">
                <textarea class="form-control form-control-clicked" id="catatan" name="textarea" cols="3" rows="5" placeholder="Catatan ..."></textarea>
            </div>
        </div>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Parfum<span class="tra-lay-reguler"> (Opsional)</span></p>
            </div>
            <div class="pt-2">
                <select class="form-select form-select-sm" onchange="changeParfum(this)" id="parfum">
                    @foreach($parfum as $par)
                        <option value="{{ $par->id }}|{{ $par->harga }}">{{ $par->nama }} | Rp. {{ number_format($par->harga) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Pelanggan<span class="transaksi-required"> Wajib diisi</span></p>
            </div>
            <div class="pt-2" id="pelanggan">
                <a class="btn btn-primary btn-sm" onclick="modalPelanggan()">Pilih Pelanggan</a>
            </div>
        </div>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Pengiriman<span class="tra-lay-reguler"> (Opsional)</span></p>
            </div>
            <div class="pt-2">
                <select class="form-select form-select-sm" onchange="changePengiriman(this)">
                    @foreach($pengiriman as $peng)
                        <option value="{{ $peng->id }}|{{ $peng->harga }}">{{ $peng->nama }} | Rp. {{ number_format($peng->harga) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Pembayaran<span class="transaksi-required"> Wajib diisi</span></p>
            </div>
            <div class="pt-2">
                <p class="tra-lay-reguler pb-1">Metode Pembayaran</p>
                <select class="form-select form-select-sm" id="pembayaran">
                    @foreach($pembayaran as $pem)
                        <option value="{{ $pem->id }}">{{ $pem->nama }}</option>
                    @endforeach
                </select>
                <p class="tra-lay-reguler pt-3">Status Pembayaran</p>
                <div class="row pt-2">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadio" id="primaryRadio" checked onclick="statusPembayaran('lunas')">
                            <p class="tra-lay-reguler">Lunas</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadio" id="primaryRadio" onclick="statusPembayaran('belum lunas')">
                            <p class="tra-lay-reguler">Belum Lunas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="card card-white p-3 mt-3" onclick="modalDiskon()">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.1375 2.49835C8.37198 2.23647 8.65906 2.02699 8.97999 1.88357C9.30091 1.74015 9.64848 1.66602 10 1.66602C10.3515 1.66602 10.6991 1.74015 11.02 1.88357C11.3409 2.02699 11.628 2.23647 11.8625 2.49835L12.4458 3.15002C12.5292 3.24328 12.6325 3.31657 12.748 3.36446C12.8636 3.41236 12.9884 3.43362 13.1133 3.42669L13.9883 3.37835C14.3392 3.35908 14.6902 3.414 15.0184 3.53952C15.3466 3.66504 15.6447 3.85835 15.8932 4.10683C16.1417 4.3553 16.335 4.65338 16.4605 4.9816C16.586 5.30982 16.6409 5.66081 16.6217 6.01169L16.5733 6.88669C16.5665 7.01144 16.5879 7.13613 16.6357 7.25153C16.6836 7.36693 16.7569 7.47008 16.85 7.55335L17.5025 8.13669C17.7645 8.37118 17.9741 8.6583 18.1176 8.97931C18.2611 9.30031 18.3353 9.64798 18.3353 9.9996C18.3353 10.3512 18.2611 10.6989 18.1176 11.0199C17.9741 11.3409 17.7645 11.628 17.5025 11.8625L16.85 12.4459C16.7567 12.5292 16.6835 12.6325 16.6356 12.7481C16.5877 12.8636 16.5664 12.9885 16.5733 13.1134L16.6217 13.9884C16.6409 14.3392 16.586 14.6902 16.4605 15.0184C16.335 15.3467 16.1417 15.6447 15.8932 15.8932C15.6447 16.1417 15.3466 16.335 15.0184 16.4605C14.6902 16.586 14.3392 16.641 13.9883 16.6217L13.1133 16.5734C12.9886 16.5665 12.8639 16.5879 12.7485 16.6358C12.6331 16.6837 12.5299 16.7569 12.4467 16.85L11.8633 17.5025C11.6288 17.7645 11.3417 17.9741 11.0207 18.1176C10.6997 18.2612 10.352 18.3353 10.0004 18.3353C9.64879 18.3353 9.30113 18.2612 8.98012 18.1176C8.65911 17.9741 8.37199 17.7645 8.1375 17.5025L7.55416 16.85C7.4708 16.7568 7.36751 16.6835 7.25196 16.6356C7.13641 16.5877 7.01156 16.5664 6.88666 16.5734L6.01166 16.6217C5.66079 16.641 5.3098 16.586 4.98157 16.4605C4.65335 16.335 4.35528 16.1417 4.1068 15.8932C3.85832 15.6447 3.66502 15.3467 3.5395 15.0184C3.41398 14.6902 3.35906 14.3392 3.37833 13.9884L3.42666 13.1134C3.43348 12.9886 3.41215 12.8639 3.36426 12.7485C3.31637 12.6331 3.24314 12.53 3.15 12.4467L2.49833 11.8634C2.23631 11.6289 2.02671 11.3417 1.88321 11.0207C1.7397 10.6997 1.66553 10.3521 1.66553 10.0004C1.66553 9.64882 1.7397 9.30115 1.88321 8.98014C2.02671 8.65913 2.23631 8.37201 2.49833 8.13752L3.15 7.55419C3.24325 7.47082 3.31655 7.36754 3.36444 7.25198C3.41234 7.13643 3.4336 7.01158 3.42666 6.88669L3.37833 6.01169C3.35906 5.66081 3.41398 5.30982 3.5395 4.9816C3.66502 4.65338 3.85832 4.3553 4.1068 4.10683C4.35528 3.85835 4.65335 3.66504 4.98157 3.53952C5.3098 3.414 5.66079 3.35908 6.01166 3.37835L6.88666 3.42669C7.01142 3.4335 7.13611 3.41217 7.25151 3.36428C7.3669 3.31639 7.47006 3.24316 7.55333 3.15002L8.13666 2.49835H8.1375ZM13.0892 6.91085C13.2454 7.06713 13.3332 7.27905 13.3332 7.50002C13.3332 7.72099 13.2454 7.93291 13.0892 8.08919L8.08916 13.0892C7.932 13.241 7.72149 13.325 7.503 13.3231C7.2845 13.3212 7.07549 13.2335 6.92098 13.079C6.76648 12.9245 6.67884 12.7155 6.67694 12.497C6.67504 12.2785 6.75903 12.068 6.91083 11.9109L11.9108 6.91085C12.0671 6.75463 12.279 6.66687 12.5 6.66687C12.721 6.66687 12.9329 6.75463 13.0892 6.91085ZM7.91667 6.66669C7.58514 6.66669 7.2672 6.79838 7.03278 7.0328C6.79836 7.26722 6.66667 7.58517 6.66667 7.91669V7.92502C6.66667 8.25654 6.79836 8.57448 7.03278 8.80891C7.2672 9.04333 7.58514 9.17502 7.91667 9.17502H7.925C8.25652 9.17502 8.57446 9.04333 8.80888 8.80891C9.0433 8.57448 9.175 8.25654 9.175 7.92502V7.91669C9.175 7.58517 9.0433 7.26722 8.80888 7.0328C8.57446 6.79838 8.25652 6.66669 7.925 6.66669H7.91667ZM12.0833 10.8334C11.7518 10.8334 11.4339 10.9651 11.1994 11.1995C10.965 11.4339 10.8333 11.7518 10.8333 12.0834V12.0917C10.8333 12.4232 10.965 12.7412 11.1994 12.9756C11.4339 13.21 11.7518 13.3417 12.0833 13.3417H12.0917C12.4232 13.3417 12.7411 13.21 12.9755 12.9756C13.21 12.7412 13.3417 12.4232 13.3417 12.0917V12.0834C13.3417 11.7518 13.21 11.4339 12.9755 11.1995C12.7411 10.9651 12.4232 10.8334 12.0917 10.8334H12.0833Z" fill="#00A3FF"/>
                    </svg>
                    <p class="text-bold-transaksi ps-2" id="changeDiskonText">Pelanggan makin puas pakai promo</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M7.5 5L12.5 10L7.5 15" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>

        <div class="card card-white p-3 mt-3">
            <div class="d-flex justify-content-between">
                <p class="text-bold-transaksi">Rincian Pembayaran</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <p class="tra-lay-reguler">Biaya Layanan</p>
                <p class="tra-lay-reguler" id="biayaLayanan">-</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <p class="tra-lay-reguler">Parfum</p>
                <p class="tra-lay-reguler" id="biayaParfum">-</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <p class="tra-lay-reguler">Biaya Pengiriman</p>
                <p class="tra-lay-reguler" id="biayaPengiriman">-</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <p class="tra-lay-reguler">Diskon</p>
                <p class="tra-lay-reguler" id="biayaDiskon">-</p>
            </div>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <p class="tra-lay-reguler-bold">Total Harga</p>
                <p class="tra-lay-reguler-bold" id="totalHarga">-</p>
            </div>
        </div>
    </div>


    <div class="footer-nav-area" id="footerNav">
        <div class="container">
            <div class="footer-nav position-relative shadow-sm footer-style-two">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li>
                        <a onclick="prosesLayanan()" class="btn btn-lanjut">Proses Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDiskon" tabindex="-1" aria-labelledby="fullscreenModalLabel">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="fullscreenModalLabel">Pilih Diskon</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach($diskon as $dis)
                        <div class="card diskon-card mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="tra-lay-reguler">{{ $dis->nama }}</p>
                                    <p class="text-bold-transaksi">Potongan {{ $dis->type == "nominal" ? "Rp ".number_format($dis->nominal) : $dis->nominal."%" }}</p>
                                </div>
                                <a class="btn btn-primary btn-sm" onclick="changeDiskon('{{ $dis->id }}','{{ $dis->nama }}','{{ $dis->nominal }}','{{ $dis->type }}')">Pilih Diskon</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPelanggan" tabindex="-1" aria-labelledby="fullscreenModalLabel">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="fullscreenModalLabel">Pilih Pelanggan</h6>
                    <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table" id="datatables">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Pilihan</th>
                        </tr>
                        </thead>
                        <tbody id="listPelanggan">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('cdn.script')
    <script>
        viewLayanan();
        localStorage.removeItem('biayaDiskon');
        localStorage.removeItem('biayaPengiriman');
        localStorage.removeItem('biayaParfum');
        localStorage.removeItem('diskon');
        localStorage.removeItem('totalHarga');
        localStorage.removeItem('pelanggan');
        localStorage.setItem('statusPembayaran', JSON.stringify('lunas'));

        function formatRupiah(angka, prefix){
            let number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

            let separator;
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix === undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        function modalPelanggan() {
            $.ajax({
                url: '{{ route('getByJson') }}',
                method: 'GET',
                success: function (res) {
                    let pelanggan = res.data
                    let html = '';
                    let no = 1;
                    pelanggan.forEach(function (params) {
                        html += `
                        <tr>
                            <td>${no++}</td>
                            <td>${params.nama}</td>
                            <td>${params.no_hp}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" onclick="pilihPelanggan('${params.id}','${params.nama}','${params.no_hp}')">Pilih</a>
                            </td>
                        </tr>
                    `;
                    });

                    document.getElementById('listPelanggan').innerHTML = html;
                    $("#modalPelanggan").modal("show");
                }
            });
        }

        function pilihPelanggan(id, nama, noHp) {
            localStorage.setItem('pelanggan', JSON.stringify({
                id: id,
                nama: nama,
                noHp: noHp
            }));

            document.getElementById('pelanggan').innerHTML = `
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="tra-lay-reguler-bold">${nama}</p>
                    <p class="tra-lay-reguler">${noHp}</p>
                </div>
                <a class="btn btn-primary btn-sm" onclick="modalPelanggan()">Ubah Pelanggan</a>
            </div>
        `;

            $("#modalPelanggan").modal("hide");
        }

        function viewLayanan() {
            let layanan = JSON.parse(localStorage.getItem('transaksiLayanan')) ?? [];
            let html = '';
            layanan.forEach(function (params) {
                let type = '';
                if (params.type === "berat") {
                    type = "Kg";
                } else {
                    type = "Pcs";
                }
                html += `
                <div class="pt-3">
                    <div class="row">
                        <div class="col-6">
                            <p class="tra-lay-reguler-bold">${params.nama}</p>
                            <p class="tra-lay-reguler">Rp. ${formatRupiah(params.harga)} / ${type}</p>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <input type="number" class="form-control form-control-sm" onchange="changeTotal('${params.id}', this)" value="${params.total}">
                                <a class="btn btn-danger ms-2" onclick="hapusLayanan('${params.id}')">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            });

            document.getElementById('list-layanan').innerHTML = html;
            biayaLayanan();
            biayaParfum();
            biayaPengiriman();
            biayaDiskon();
            totalHarga();
        }

        function changeTotal(id, data) {
            let layanan = JSON.parse(localStorage.getItem('transaksiLayanan')) ?? [];
            let datalayanan = [];
            layanan.forEach(function (params) {
                if (parseInt(id) === parseInt(params.id)) {
                    datalayanan.push({
                        harga: params.harga,
                        id: params.id,
                        nama: params.nama,
                        total: data.value,
                        type: params.type
                    });
                } else {
                    datalayanan.push(params);
                }
            });

            localStorage.setItem('transaksiLayanan', JSON.stringify(datalayanan));
            viewLayanan();
        }

        function hapusLayanan(id) {
            let layanan = JSON.parse(localStorage.getItem('transaksiLayanan')) ?? [];
            let datalayanan = [];
            layanan.forEach(function (params) {
                if (parseInt(id) !== parseInt(params.id)) {
                    datalayanan.push(params);
                }
            });

            localStorage.setItem('transaksiLayanan', JSON.stringify(datalayanan));
            viewLayanan();
        }

        function statusPembayaran(status) {
            localStorage.setItem('statusPembayaran', JSON.stringify(status));
        }

        function changeParfum(data) {
            let valueParfum = data.value;
            let parfum = valueParfum.split('|');
            localStorage.setItem('biayaParfum', parfum[1]);
            localStorage.setItem('parfum', JSON.stringify({
                id: parfum[0],
                nominal: parfum[1]
            }));
            viewLayanan();
        }

        function changePengiriman(data) {
            let valuePengiriman = data.value;
            let pengiriman = valuePengiriman.split('|');
            localStorage.setItem('biayaPengiriman', pengiriman[1]);
            localStorage.setItem('pengiriman', JSON.stringify({
                id: pengiriman[0],
                nominal: pengiriman[1]
            }));
            viewLayanan();
        }

        function changeDiskon(id, nama, nominal, type) {
            if (type === "nominal") {
                document.getElementById('changeDiskonText').innerText = nama + " Rp " + nominal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
            } else {
                document.getElementById('changeDiskonText').innerText = nama + " " +  nominal + "%"
            }

            let diskon = {
                id: id,
                nama: nama,
                nominal: nominal,
                type: type
            }
            localStorage.setItem('diskon', JSON.stringify(diskon));
            viewLayanan();
            $("#modalDiskon").modal("hide");
        }

        function modalDiskon() {
            $("#modalDiskon").modal("show");
        }

        function biayaLayanan() {
            let layanan = JSON.parse(localStorage.getItem('transaksiLayanan')) ?? [];
            let biayaLayanan = 0;
            layanan.forEach(function (params) {
                biayaLayanan += parseInt(params.harga) * parseFloat(params.total)
            });
            localStorage.setItem('biayaLayanan', biayaLayanan);
            document.getElementById('biayaLayanan').innerText = "Rp " + biayaLayanan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
        }

        function biayaParfum() {
            let parfum = JSON.parse(localStorage.getItem('biayaParfum')) ?? 0;
            document.getElementById('biayaParfum').innerText = "Rp " + parfum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
        }

        function biayaPengiriman() {
            let pengiriman = JSON.parse(localStorage.getItem('biayaPengiriman')) ?? 0;
            document.getElementById('biayaPengiriman').innerText = "Rp " + pengiriman.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
        }

        function biayaDiskon() {
            let biayaDiskon = JSON.parse(localStorage.getItem('biayaDiskon')) ?? 0;
            document.getElementById('biayaDiskon').innerText = "Rp " + biayaDiskon.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')

            let diskon = JSON.parse(localStorage.getItem('diskon')) ?? {
                id: 0,
                nama: '',
                nominal: 0,
                type: 'nominal'
            };
            let layanan = JSON.parse(localStorage.getItem('biayaLayanan')) ?? 0;
            let parfum = JSON.parse(localStorage.getItem('biayaParfum')) ?? 0;
            let pengiriman = JSON.parse(localStorage.getItem('biayaPengiriman')) ?? 0;

            if (diskon.type === "nominal") {
                let hitungDiskon = (layanan + parfum + pengiriman) - diskon.nominal;
                localStorage.setItem('totalHarga', JSON.stringify(hitungDiskon));
                localStorage.setItem('biayaDiskon', diskon.nominal);
                document.getElementById('biayaDiskon').innerText = "Rp " + diskon.nominal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
            } else {
                let hitungDiskon = (layanan + parfum + pengiriman) * (diskon.nominal / 100);
                let biayaDiskon = parseInt((layanan + parfum + pengiriman) - hitungDiskon);
                localStorage.setItem('totalHarga', biayaDiskon);
                localStorage.setItem('biayaDiskon', hitungDiskon);
                document.getElementById('biayaDiskon').innerText = "Rp " + hitungDiskon.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
            }
        }

        function totalHarga() {
            let totalHarga = JSON.parse(localStorage.getItem('totalHarga')) ?? 0;
            document.getElementById('totalHarga').innerText = "Rp " + totalHarga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
        }

        async function prosesLayanan() {
            // Validasi
            let scoreValidate = 0;
            let pelanggan = JSON.parse(localStorage.getItem('pelanggan')) ?? null
            if (pelanggan === null) {
                scoreValidate++;
                Swal.fire({
                    title:"Peringatan",
                    text: 'Pelanggan tidak boleh kosong',
                    icon:"warning",
                    showCancelButton:!0,
                    showConfirmButton:!1,
                    cancelButtonClass:"btn btn-primary w-xs mb-1",
                    cancelButtonText:"Kembali",
                    buttonsStyling:!1,
                    showCloseButton:!0
                });
            }

            if (scoreValidate === 0) {
                Swal.fire({
                    title:"Apakah anda yakin?",
                    text:"Untuk membuat transaksi ini.",
                    icon:"warning",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Buat Transaksi",
                    denyButtonText: "Kembali",
                }).then(async function (t) {
                    if (t.value) {
                        try {
                            const create = await fetch("{{ route('buatTransaksi') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify({
                                    _token: '{{ @csrf_token() }}',
                                    layanan: JSON.parse(localStorage.getItem('transaksiLayanan')) ?? null,
                                    diskon: JSON.parse(localStorage.getItem('diskon')) ?? null,
                                    parfum: JSON.parse(localStorage.getItem('parfum')) ?? null,
                                    pelanggan: JSON.parse(localStorage.getItem('pelanggan')) ?? null,
                                    pengiriman: JSON.parse(localStorage.getItem('pengiriman')) ?? null,
                                    pembayaran: document.getElementById('pembayaran').value,
                                    statusPembayaran: JSON.parse(localStorage.getItem('statusPembayaran')) ?? null,
                                    catatan: document.getElementById('catatan').value,
                                    harga: localStorage.getItem('biayaLayanan') ?? 0,
                                    biayaDiskon: JSON.parse(localStorage.getItem('biayaDiskon')) ?? 0,
                                    totalHarga: JSON.parse(localStorage.getItem('totalHarga')) ?? 0,
                                })
                            });
                            const response = await create.json();

                            console.log(response);
                            console.log('hahaha');

                            if (response.status) {
                                location.href = '{{ route('notifSuccessCreateTransaksi') }}';
                            } else {
                                Swal.fire({
                                    html: '<div class="mt-3">' +
                                        '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                                        '<div class="mt-4 pt-2 fs-15">' +
                                        '<h4>Gagal !</h4>' +
                                        '<p class="text-muted mx-4 mb-0">Buat Transaksi Gagal.</p>' +
                                        '</div>' +
                                        '</div>',
                                    showCancelButton: !0,
                                    showConfirmButton: !1,
                                    cancelButtonClass: "btn btn-primary w-xs mb-1",
                                    cancelButtonText: "Kembali",
                                    buttonsStyling: !1,
                                    showCloseButton: !0
                                });
                            }
                        } catch (e) {
                            Swal.fire({
                                html: '<div class="mt-3">' +
                                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
                                    '<div class="mt-4 pt-2 fs-15">' +
                                    '<h4>Gagal !</h4>' +
                                    '<p class="text-muted mx-4 mb-0">Buat Transaksi Gagal.</p>' +
                                    '</div>' +
                                    '</div>',
                                showCancelButton: !0,
                                showConfirmButton: !1,
                                cancelButtonClass: "btn btn-primary w-xs mb-1",
                                cancelButtonText: "Kembali",
                                buttonsStyling: !1,
                                showCloseButton: !0
                            });
                        }
                    }
                });
            }
        }
    </script>
</body>
</html>
