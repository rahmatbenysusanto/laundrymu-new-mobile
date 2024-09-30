<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @include('cdn.head')
    <link href="{{ asset('assets/css/dashboard/dashboard.css') }}" rel="stylesheet">
</head>
<body style="background-color: #EDEDED!important;">
    <div class="header-area" id="headerArea">
        <div class="container">
            <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <div class="logo-wrapper">
                    <a href="#" class="title-page">Beranda</a>
                </div>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M7.01923 18.1665H7.51923V17.6665V12.2378C7.51923 9.00094 9.68468 6.33141 12.515 5.72673L12.9503 5.63375L12.9084 5.19069C12.8958 5.05742 12.9097 4.92312 12.9488 4.79684C12.9879 4.6706 13.0509 4.55643 13.1322 4.46106C13.2135 4.36578 13.3108 4.29166 13.417 4.24167C13.523 4.19174 13.6363 4.1665 13.75 4.1665C13.8637 4.1665 13.977 4.19174 14.083 4.24167C14.1892 4.29166 14.2865 4.36578 14.3678 4.46106C14.4491 4.55643 14.5121 4.6706 14.5512 4.79684C14.5903 4.92312 14.6042 5.05743 14.5916 5.19069L14.5498 5.63281L14.9839 5.72651C16.3854 6.02903 17.6517 6.83753 18.5647 8.02305C19.4782 9.20907 19.9803 10.6979 19.9808 12.2378C19.9808 12.2379 19.9808 12.2379 19.9808 12.238V17.6665V18.1665H20.4808H21.6923C21.764 18.1665 21.8392 18.1964 21.8995 18.2604C21.9608 18.3254 22 18.4196 22 18.5236C22 18.6276 21.9608 18.7218 21.8995 18.7868C21.8392 18.8508 21.764 18.8808 21.6923 18.8808H20.4808H5.80769C5.736 18.8808 5.66077 18.8508 5.60046 18.7868C5.53921 18.7218 5.5 18.6276 5.5 18.5236C5.5 18.4196 5.5392 18.3254 5.60046 18.2604C5.66077 18.1964 5.736 18.1665 5.80769 18.1665H7.01923ZM15.8924 21.3093C15.8024 21.7548 15.5936 22.1644 15.2899 22.4868C14.8761 22.9258 14.3215 23.1665 13.75 23.1665C13.1785 23.1665 12.6239 22.9258 12.2101 22.4868C11.9064 22.1644 11.6976 21.7548 11.6076 21.3093H15.8924Z" stroke="#404040"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="home-background-blue pt-2 position-relative">
            <img class="position-absolute big-logo" src="{{ asset('assets/img/big-logo.svg') }}" alt="laundrymu">
            <div class="container">
                <p class="text-white home-heading">Hello, {{ Session::get('toko')->nama }}</p>
                @if(Session::get('toko')->status == 'active')
                    <div class="d-flex align-items-center">
                        <p class="home-heading-second">Lisensi Aktif</p>
                    </div>
                @else
                    <div class="d-flex align-items-center">
                        <p class="home-heading-second">Lisensi Non Aktif</p>
                        <a class="btn btn-white">Upgrade</a>
                    </div>
                @endif
            </div>
        </div>

        <div class="container">
            <div class="card ringkasan">
                <h3 class="title-ringkasan">Ringkasan Aktivitas LaundryMU</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Laundry Baru</p>
                            <p class="card-ringkasan-jumlah" id="baru">0</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Laundry Diproses</p>
                            <p class="card-ringkasan-jumlah" id="proses">0</p>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Laundry Selesai</p>
                            <p class="card-ringkasan-jumlah" id="selesai">0</p>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Laundry Diambil</p>
                            <p class="card-ringkasan-jumlah" id="diambil">0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3 mb-3">
                <div class="row">
                    <div class="col-6">
                        <h3 class="title-ringkasan">Ringkasan Statistik</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Transaksi</p>
                            <p class="card-ringkasan-jumlah" id="transaksi">0</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-ringkasan">
                            <p class="card-ringkasan-title">Pendapatan</p>
                            <p class="card-ringkasan-jumlah" id="pendapatan">Rp&nbsp;0,00</p>
                        </div>
                    </div>
                </div>
                <div class="charts-wrapper mt-3">
                    <div id="chartJumlahTransaksi" style="min-height: 255px;"></div>
                </div>
                <div class="charts-wrapper mt-3">
                    <div id="chartNominalTransaksi" style="min-height: 255px;"></div>
                </div>
            </div>
        </div>
    </div>


    @include('components.menu')
    @include('cdn.script')
    <script>
        localStorage.setItem('dt', JSON.stringify('{{ base64_encode(Session::get('user_id')) }}'))

        statusTransaksi();
        transaksiHarian();
        chartJumlahTransaksi();
        chartNominalTransaksi();

        async function statusTransaksi() {
            try {
                const getData = await fetch('{{ route('statusLaundry') }}');
                const response = await getData.json();

                document.getElementById('baru').innerText = response.data[0].baru;
                document.getElementById('proses').innerText = response.data[0].diproses;
                document.getElementById('selesai').innerText = response.data[0].selesai;
                document.getElementById('diambil').innerText = response.data[0].close;
            } catch (e) {
                document.getElementById('baru').innerText = '0';
                document.getElementById('proses').innerText = '0';
                document.getElementById('selesai').innerText = '0';
                document.getElementById('diambil').innerText = '0';
            }
        }

        async function transaksiHarian() {
            try {
                const getData = await fetch('{{ route('transaksiHarian') }}');
                const response = await getData.json();

                document.getElementById('transaksi').innerText = response.data.jumlah;
                document.getElementById('pendapatan').innerText = new Intl.NumberFormat("id-ID", {style: "currency", currency: "IDR"}).format(response.data.nominal);
            } catch (e) {

            }
        }

        async function chartJumlahTransaksi() {
            try {
                const getData = await fetch('{{ route('getChart') }}');
                const response = await getData.json();

                let columnChart2 = {
                    chart: {
                        height: 240,
                        type: 'bar',
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 1000
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.1,
                            blur: 2,
                            left: -1,
                            top: 5
                        },
                        zoom: {
                            enabled: false
                        },
                        toolbar: {
                            show: false
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'rounded'
                        },
                    },
                    colors: ['#00A3FF'],
                    dataLabels: {
                        enabled: false
                    },
                    grid: {
                        borderColor: '#dbeaea',
                        strokeDashArray: 4,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                        yaxis: {
                            lines: {
                                show: false,
                            }
                        },
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    tooltip: {
                        theme: 'light',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    stroke: {
                        show: true,
                        colors: ['transparent'],
                        width: 3
                    },
                    labels: [
                        '{{ date('d M', strtotime('-7 day')) }}',
                        '{{ date('d M', strtotime('-6 day')) }}',
                        '{{ date('d M', strtotime('-5 day')) }}',
                        '{{ date('d M', strtotime('-4 day')) }}',
                        '{{ date('d M', strtotime('-3 day')) }}',
                        '{{ date('d M', strtotime('-2 day')) }}',
                        '{{ date('d M', strtotime('-1 day')) }}',
                    ],
                    series: [{
                        name: 'Transaksi',
                        data: response.data
                    }],
                    xaxis: {
                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 0,
                            style: {
                                colors: '#8380ae',
                                fontSize: '12px'
                            },
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            offsetX: -10,
                            offsetY: 0,
                            style: {
                                colors: '#8380ae',
                                fontSize: '12px'
                            },
                        }
                    },
                }

                let columnChart_02 = new ApexCharts(document.querySelector("#chartJumlahTransaksi"), columnChart2);
                columnChart_02.render();
            } catch (e) {
                console.log(e)
            }
        }

        async function chartNominalTransaksi() {
            try {
                const getData = await fetch('{{ route('getChart') }}');
                const response = await getData.json();

                let columnChart2 = {
                    chart: {
                        height: 240,
                        type: 'bar',
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 1000
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.1,
                            blur: 2,
                            left: -1,
                            top: 5
                        },
                        zoom: {
                            enabled: false
                        },
                        toolbar: {
                            show: false
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'rounded'
                        },
                    },
                    colors: ['#00A3FF'],
                    dataLabels: {
                        enabled: false
                    },
                    grid: {
                        borderColor: '#dbeaea',
                        strokeDashArray: 4,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                        yaxis: {
                            lines: {
                                show: false,
                            }
                        },
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    tooltip: {
                        theme: 'light',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    stroke: {
                        show: true,
                        colors: ['transparent'],
                        width: 3
                    },
                    labels: [
                        '{{ date('d M', strtotime('-7 day')) }}',
                        '{{ date('d M', strtotime('-6 day')) }}',
                        '{{ date('d M', strtotime('-5 day')) }}',
                        '{{ date('d M', strtotime('-4 day')) }}',
                        '{{ date('d M', strtotime('-3 day')) }}',
                        '{{ date('d M', strtotime('-2 day')) }}',
                        '{{ date('d M', strtotime('-1 day')) }}',
                    ],
                    series: [{
                        name: 'Transaksi',
                        data: response.data
                    }],
                    xaxis: {
                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 0,
                            style: {
                                colors: '#8380ae',
                                fontSize: '12px'
                            },
                        },
                        tooltip: {
                            enabled: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            offsetX: -10,
                            offsetY: 0,
                            style: {
                                colors: '#8380ae',
                                fontSize: '12px'
                            },
                        }
                    },
                }

                let columnChart_02 = new ApexCharts(document.querySelector("#chartNominalTransaksi"), columnChart2);
                columnChart_02.render();
            } catch (e) {
                console.log(e)
            }
        }
    </script>
</body>
</html>
