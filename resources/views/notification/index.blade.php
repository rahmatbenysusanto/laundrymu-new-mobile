@php use Illuminate\Support\Carbon; @endphp
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
        .card {
            height: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .notif-title {
            color: #262626;
            font-family: Gantari, serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: 20px;
            letter-spacing: -0.084px;
        }

        .notif-text {
            color: #616161;
            font-family: Gantari, serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: -0.176px;
        }
    </style>
</head>
<body>

    <div class="header-area" id="headerArea">
        <div class="container">
            <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M6.125 13.125H23.625C23.8571 13.125 24.0796 13.2172 24.2437 13.3813C24.4078 13.5454 24.5 13.7679 24.5 14C24.5 14.2321 24.4078 14.4546 24.2437 14.6187C24.0796 14.7828 23.8571 14.875 23.625 14.875H6.125C5.89294 14.875 5.67038 14.7828 5.50628 14.6187C5.34219 14.4546 5.25 14.2321 5.25 14C5.25 13.7679 5.34219 13.5454 5.50628 13.3813C5.67038 13.2172 5.89294 13.125 6.125 13.125Z" fill="#262626"/>
                        <path d="M6.48686 14.0001L13.7441 21.2556C13.9084 21.4199 14.0007 21.6428 14.0007 21.8751C14.0007 22.1075 13.9084 22.3303 13.7441 22.4946C13.5798 22.6589 13.357 22.7512 13.1246 22.7512C12.8923 22.7512 12.6694 22.6589 12.5051 22.4946L4.63011 14.6196C4.54863 14.5383 4.48398 14.4418 4.43986 14.3355C4.39575 14.2292 4.37305 14.1152 4.37305 14.0001C4.37305 13.885 4.39575 13.7711 4.43986 13.6648C4.48398 13.5585 4.54863 13.4619 4.63011 13.3806L12.5051 5.50563C12.6694 5.34133 12.8923 5.24902 13.1246 5.24902C13.357 5.24902 13.5798 5.34133 13.7441 5.50563C13.9084 5.66993 14.0007 5.89277 14.0007 6.12513C14.0007 6.35749 13.9084 6.58033 13.7441 6.74463L6.48686 14.0001Z" fill="#262626"/>
                    </svg>
                </a>
                <div class="logo-wrapper"><a class="title-page">Notifikasi</a></div>
                <div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="pt-2"></div>
        <div class="container">
            <div class="row pt-1">
                @foreach($notif as $n)
                    @php
                        $timestampInMilliseconds = $n->created_at;
                        $timestampInSeconds = $timestampInMilliseconds / 1000;
                        $carbonTime = Carbon::createFromTimestamp($timestampInSeconds);
                    @endphp
                    <a href="/notification/detail/{{ $n->id }}">
                        <div class="col-12 pb-2">
                            <div class="card card-white p-2">
                                <div class="notif-title">{{ $n->title }}</div>
                                <div class="notif-text">{{ $n->type }} - {{ $carbonTime->diffForHumans() }}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('components.menu')
    @include('cdn.script')
</body>
</html>
