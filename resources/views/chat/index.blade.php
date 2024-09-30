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
                <div class="logo-wrapper"><a href="#" class="title-page">Chat</a></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">

        <section style="padding-top: 18px">
            <div class="container">
                <div class="chat-content-wrap" id="listChat">

                </div>
            </div>
        </section>

    </div>


    <div class="chat-footer">
        <div class="container h-100">
            <div class="chat-footer-content h-100 d-flex align-items-center">
                <input class="form-control form-control-clicked" type="text" id="pesan" placeholder="Tulis Pesan ...">
                <a class="btn btn-submit ms-2" onclick="sendChat()">
                    <svg class="bi bi-cursor" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    @include('cdn.script')
    <script>
        getChat();

        async function getChat() {
            try {
                const getChat = await fetch('{{ route('getChat') }}');
                const response = await getChat.json();

                let chat = response.data;
                let html = '';

                chat.forEach(function (params) {
                    if (params.role === "admin") {
                        html += `
                            <div class="single-chat-item">
                                <div class="user-message">
                                    <div class="message-content">
                                        <div class="single-message">
                                            <p>${params.chat}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    } else {
                        html += `
                            <div class="single-chat-item outgoing">
                                <div class="user-message">
                                    <div class="message-content">
                                        <div class="single-message">
                                            <p>${params.chat}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    `;
                    }
                });

                document.getElementById('listChat').innerHTML = html;
            } catch (e) {

            }
        }

        async function sendChat() {
            try {
                const sendChat = await fetch('{{ route('sendChat') }}', {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        _token: '{{ @csrf_token() }}',
                        chat: document.getElementById('pesan').value
                    })
                });
                const response = await sendChat.json();

                document.getElementById('pesan').value = "";
                await getChat();
            } catch (e) {

            }
        }
    </script>
</body>
</html>
