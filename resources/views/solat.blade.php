<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
    html,
    body {
        margin: 0;
        height: 100%;
        overflow: hidden
    }

    .marquee {
        width: 100%;
        margin: 0 auto;
        background: #1e1e1e;
        color: #ffffff;
        box-sizing: border-box;
        padding-top: 10px;
        padding-bottom: 10px;

    }

    .marquee span {
        display: inline-block;
        width: max-content;
        padding-left: 100%;
        will-change: transform;
        animation: marquee 35s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(-100%, 0);
        }
    }

    #colon {
        visibility: hidden
    }
    </style>
</head>

<body>
    <div class="container">

        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="text-center">
                            <div class="content">
                                <p>Masjid logo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="text-center mt-5">
                            <div class="content mt-5">
                                <p>Zuhur</p>
                                <h1>1<span id="colon">:</span>30 PM</h1>
                                <p>15 jam 30 minit 23 saat lagi</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer class="page-footer font-small purple pt-4 fixed-bottom">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Jam</h5>
                        <span id="hours"></span>:</span><span id="minutes"></span>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Zuhur</h5>
                        <p>1:30PM</p>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Asar</h5>
                        <p>1:30PM</p>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Maghrib</h5>
                        <p>1:30PM</p>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Isya</h5>
                        <p>1:30PM</p>
                    </div>
                    <div class="col-md-2">
                        <h5 class="text-uppercase">Subuh</h5>
                        <p>1:30PM</p>
                    </div>
                    <div class="col-md-12">
                        <p class="marquee">

                            <span>
                                @foreach ($maklumans as $makluman)
                                {{$makluman->makluman}}
                                -
                                @endforeach
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
    var toggle = true;
    setInterval(function() {
        var d = new Date().toLocaleTimeString('en-US', {
            hour12: true,
            hour: 'numeric',
            minute: 'numeric'
        });
        var parts = d.split(":");
        $('#hours').text(parts[0]);
        $('#minutes').text(parts[1]);
        $("#colon").css({
            visibility: toggle ? "visible" : "hidden"
        });
        toggle = !toggle;
    }, 600);
    </script>
</body>


</html>