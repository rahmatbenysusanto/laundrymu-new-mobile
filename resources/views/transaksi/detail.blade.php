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
    <style>
        p {
            margin-bottom: 5px;
        }

        .text-blue {
            color: #27BCCD;
            text-align: right;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px;
            letter-spacing: -0.084px;
        }

        .text-bold {
            color: #262626;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: 20px;
            letter-spacing: -0.084px;
        }

        .text-reguler {
            color: #616161;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: -0.084px;
        }

        .status-lunas {
            border-radius: 4px;
            background: #A3F3AC;
            color: #094510;
            text-align: center;
            font-family: Gantari, sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: 12px;
            padding: 4px 8px;
            margin-bottom: 8px;
        }

        .status-belum-lunas {
            border-radius: 4px;
            background: #FCB7B7;
            color: #A60606;
            text-align: center;
            font-family: Gantari, sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: 12px;
            padding: 4px 8px;
            margin-bottom: 8px;
        }

        .card-white {
            background-color: #ffffff !important;
        }

        .card-layanan {
            border-radius: 8px;
            border: 1px solid #C2C2C2;
            background: #FFF;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.12);
            padding: 16px;
        }

        .text-reguler-bold {
            color: #262626;
            text-align: right;
            font-family: Gantari, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: -0.084px;
        }
    </style>
</head>
<body style="background-color: #EDEDED">
    <div class="header-area" id="headerArea">
        <div class="container">
            <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('transaksi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                        <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                    </svg>
                </a>
                <div class="logo-wrapper"><a href="#" class="title-page">Detail Transaksi</a></div>
                <div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">

        <div class="card-white pt-3 pb-3">
            <div class="container">
                <div class="d-flex justify-content-between pb-2">
                    <p class="text-bold">
                        @if($transaksi->status == "baru")
                            Laundry Baru
                        @elseif($transaksi->status == "diproses")
                            Laundry Diproses
                        @elseif($transaksi->status == "selesai")
                            Laundry Selesai
                        @else
                            Laundry Diambil
                        @endif
                    </p>
                    <a href="/detail-status-transaksi/{{ $transaksi->order_number }}" class="text-blue">Lihat Detail</a>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="text-reguler">{{ $transaksi->order_number }}</p>
                    <a class="text-blue">Lihat Invoice</a>
                </div>
                <div class="pt-2 pb-2" style="border-bottom: 1px solid #C2C2C2;"></div>
                <div class="d-flex justify-content-between pt-3">
                    @if($transaksi->status_pembayaran == "lunas")
                        <span class="status-lunas">Lunas</span>
                    @else
                        <span class="status-belum-lunas">Belum Lunas</span>
                    @endif
                    <a class="text-blue">Ubah</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
{{--                    <div class="d-flex">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">--}}
{{--                            <path d="M11.427 3.004C10.082 3.041 9.0395 3.406 8.0245 3.759C6.939 4.136 5.9145 4.4915 4.495 4.506C3.5465 4.521 2.5965 4.357 1.663 4.034L1 3.805V12.346L1.333 12.4645C2.2025 12.772 3.0915 12.9495 3.9765 12.9915C4.117 12.998 4.2545 13.0015 4.3895 13.0015C5.896 13.0015 7.0495 12.6015 8.168 12.2155C9.347 11.8075 10.459 11.422 11.9765 11.4935C12.7808 11.5348 13.5748 11.6938 14.333 11.9655L15 12.2015V3.657L14.671 3.537C13.8202 3.22715 12.9271 3.0491 12.0225 3.009C11.8241 3.0002 11.6255 2.99853 11.427 3.004ZM11.454 3.997C11.624 3.992 11.798 3.992 11.9785 3.999C12.1655 4.007 12.3525 4.024 12.539 4.046C12.6151 4.35973 12.8098 4.63175 13.0822 4.8049C13.3547 4.97805 13.6837 5.03884 14 4.9745V9.5255C13.8362 9.49217 13.6674 9.49209 13.5036 9.52527C13.3397 9.55845 13.1843 9.62422 13.0463 9.71866C12.9084 9.81311 12.7909 9.9343 12.7007 10.0751C12.6106 10.2158 12.5496 10.3732 12.5215 10.538C12.3559 10.521 12.1898 10.5086 12.0235 10.501C10.316 10.426 9.057 10.8555 7.84 11.2775C6.6595 11.6865 5.541 12.073 4.0245 12.001C3.83563 11.9911 3.64717 11.9744 3.4595 11.951C3.38278 11.6381 3.18801 11.3671 2.91597 11.1946C2.64393 11.0221 2.3157 10.9615 2 11.0255V6.4745C2.16477 6.50804 2.33463 6.50788 2.49934 6.47406C2.66406 6.44023 2.82022 6.37342 2.95844 6.27767C3.09666 6.18191 3.21408 6.05917 3.30363 5.91685C3.39317 5.77452 3.453 5.61555 3.4795 5.4495C3.822 5.485 4.1645 5.5055 4.506 5.5C6.0885 5.484 7.239 5.0835 8.3525 4.6965C9.333 4.355 10.2675 4.034 11.454 3.997ZM8 5.5C6.897 5.5 6 6.6215 6 8C6 9.3785 6.897 10.5 8 10.5C9.103 10.5 10 9.3785 10 8C10 6.6215 9.103 5.5 8 5.5ZM8 6.5C8.542 6.5 9 7.187 9 8C9 8.813 8.542 9.5 8 9.5C7.458 9.5 7 8.813 7 8C7 7.187 7.458 6.5 8 6.5ZM11.75 6.5C11.5511 6.5 11.3603 6.57902 11.2197 6.71967C11.079 6.86032 11 7.05109 11 7.25C11 7.44891 11.079 7.63968 11.2197 7.78033C11.3603 7.92098 11.5511 8 11.75 8C11.9489 8 12.1397 7.92098 12.2803 7.78033C12.421 7.63968 12.5 7.44891 12.5 7.25C12.5 7.05109 12.421 6.86032 12.2803 6.71967C12.1397 6.57902 11.9489 6.5 11.75 6.5ZM4.25 8C4.05109 8 3.86032 8.07902 3.71967 8.21967C3.57902 8.36032 3.5 8.55109 3.5 8.75C3.5 8.94891 3.57902 9.13968 3.71967 9.28033C3.86032 9.42098 4.05109 9.5 4.25 9.5C4.44891 9.5 4.63968 9.42098 4.78033 9.28033C4.92098 9.13968 5 8.94891 5 8.75C5 8.55109 4.92098 8.36032 4.78033 8.21967C4.63968 8.07902 4.44891 8 4.25 8Z" fill="#19C22D"/>--}}
{{--                        </svg>--}}
{{--                        <p class="text-reguler ps-2">{{ $transaksi->pembayaran->nama }}</p>--}}
{{--                    </div>--}}
                    <p class="text-reguler">{{ $transaksi->pembayaran->nama }}</p>
                    <a class="text-blue">Ubah Pembayaran</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Nama Pelanggan</p>
                    <a class="text-reguler-bold">{{ $transaksi->pelanggan->nama }}</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Tanggal</p>
                    <a class="text-reguler-bold">{{ tanggal_jam_indo($transaksi->created_at) }}</a>
                </div>
            </div>
        </div>

        <div class="card-white mt-3 pt-3 pb-3">
            <div class="container">
                <div class="title-page-detail mb-3">Catatan</div>
                <p class="text-reguler">{{ $transaksi->catatan }}</p>
            </div>
        </div>

        <div class="card-white mt-3 pt-3 pb-3">
            <div class="container">
                <div class="title-page-detail mb-3">Detail Layanan</div>
                <div class="card-layanan">
                    @foreach($detail as $det)
                        <div class="d-flex justify-content-between pb-2">
                            <p class="text-reguler mb-0">Layanan No {{ $loop->iteration }}</p>
                            <p class="text-bold mb-0">{{ $det->layanan->nama }}</p>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-between pb-2">
                        <p class="text-reguler">Parfum</p>
                        <p class="text-bold">Mawar</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-reguler">Biaya</p>
                        <p class="text-bold">Rp.{{ number_format($transaksi->total_harga) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-white mt-3 pt-3 pb-3">
            <div class="container">
                <div class="title-page-detail mb-3">Informasi Pengiriman</div>
                <div>
                    <div class="d-flex justify-content-between pb-2">
                        <p class="text-reguler">Tipe Pengiriman</p>
                        <p class="text-reguler-bold text-start">{{ $transaksi->pengiriman->nama }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-white mt-3 pt-3 pb-3">
            <div class="container">
                <div class="title-page-detail mb-3">Rincian Pembayaran</div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Biaya ({{ count($detail) }} layanan)</p>
                    <a class="text-reguler-bold">Rp.{{ number_format($transaksi->harga) }}</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Parfum</p>
                    <a class="text-reguler-bold">Rp.{{ number_format($detail[0]->parfum->harga) }}</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Biaya Pengiriman</p>
                    <a class="text-reguler-bold">Rp.{{ number_format($transaksi->pengiriman->harga) }}</a>
                </div>
                <div class="d-flex justify-content-between pt-2">
                    <p class="text-reguler">Diskon</p>
                    <a class="text-reguler-bold">Rp.{{ number_format($transaksi->harga_diskon) }}</a>
                </div>
                <div class="pt-2 pb-2" style="border-bottom: 1px solid #C2C2C2;"></div>
                <div class="d-flex justify-content-between pt-3 pb-2">
                    <span class="title-page" style="font-weight: 600;">Total Harga</span>
                    <span class="title-page" style="font-weight: 600;">Rp.{{ number_format($transaksi->total_harga) }}</span>
                </div>
            </div>
        </div>

    </div>

    @if($transaksi->status == "diambil")
        @include('components.menu')
    @else
        <div class="footer-nav-area" id="footerNav">
            <div class="container">
                <div class="footer-nav position-relative shadow-sm footer-style-two">
                    <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                        <li>
                            <a onclick="prosesTransaksi('{{ $transaksi->id }}', '{{ $transaksi->status }}', '{{ $transaksi->order_number }}')" class="btn btn-lanjut">
                                @if($transaksi->status == "baru")
                                    Proses Laundry
                                @elseif($transaksi->status == "diproses")
                                    Laundry Selesai
                                @else
                                    Laundry Diambil
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @include('cdn.script')

    <script>
        function prosesTransaksi(id, status, orderNumber) {
            Swal.fire({
                title:"Apakah anda yakin?",
                text:"Untuk memproses transaksi ini.",
                icon:"warning",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Proses Transaksi",
                denyButtonText: "Kembali",
            }).then(function(t){
                if (t.value) {
                    $.ajax({
                        url: `/proses-transaksi/${id}/${status}`,
                        method: "GET",
                        success: function (params) {
                            console.log(params)
                            if (params.status) {
                                Swal.fire({
                                    title:"Berhasil",
                                    text: `Transaksi dengan order number ${orderNumber} telah diproses.`,
                                    icon:"success",
                                    showDenyButton: false,
                                    showCancelButton: false,
                                    confirmButtonText: "Kembali",
                                }).then(function (res) {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title:"Gagal",
                                    text: `Transaksi dengan order number ${orderNumber} gagal diproses.`,
                                    icon:"error",
                                    showDenyButton: false,
                                    showCancelButton: false,
                                    confirmButtonText: "Kembali",
                                })
                            }
                        }
                    });
                }
            });
        }
    </script>
</body>
</html>
