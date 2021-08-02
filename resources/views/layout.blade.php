<!doctype html>
<html lang="en">

<head>
    <title>{{ $titlePage }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
<header class="header">
        <nav class="navbar">
            <div class="burger" id="burger">
                <span class="burger-open">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16">
                        <g fill="#252a32" fill-rule="evenodd">
                            <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
                        </g>
                    </svg>
                </span>
                <span class="burger-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                        <path fill="#252a32" fill-rule="evenodd" d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z" />
                    </svg>
                </span>
            </div>
            <ul class="menu" id="menu">
                <li class="menu-item"><a href="{{URL::to('/')}}" class="menu-link">Paparan utama TV</a></li>
                <li class="menu-item"><a href="{{URL::to('waktu')}}" class="menu-link">Waktu solat</a></li>
                <li class="menu-item"><a href="{{URL::to('kuliah')}}" class="menu-link">Kuliah</a></li>
                <li class="menu-item"><a href="{{URL::to('makluman')}}" class="menu-link">Makluman</a></li>
                <li class="menu-item"><a href="{{URL::to('paparanteks')}}" class="menu-link">Paparan teks</a></li>
                <li class="menu-item"><a href="{{URL::to('temasistem')}}" class="menu-link">Tema sistem</a></li>
                <li class="menu-item"><a href="{{URL::to('kamera')}}" class="menu-link">Kamera</a></li>
                <li class="menu-item"><a href="{{URL::to('hubungikami')}}">Hubungi kami</a></li>
            </ul>
            <h1><a href="./index.html" class="brand">Masjid</a></h1>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            <div class="wrapper">
                @yield('content')
            </div>
        </div>
    </main>

    

    <script>
        const burger = document.getElementById("burger");
        const menu = document.getElementById("menu");
        const main = document.querySelector(".main");

        // Sidebar Menu Toggle
        burger.addEventListener("click", function () {
            burger.classList.toggle("active");
            menu.classList.toggle("active");
        });

        // Close Sidebar by Click Outside
        main.addEventListener("click", function () {
            if (menu.classList.contains("active")) {
                burger.classList.remove("active");
                menu.classList.remove("active");
            }
        });

        // Close Sidebar by Press Escape(ESC)
        window.addEventListener("keyup", function (e) {
            if (e.key == "Escape" && menu.classList.contains("active")) {
                burger.classList.remove("active");
                menu.classList.remove("active");
            }
        });

    </script>



</body>

</html>