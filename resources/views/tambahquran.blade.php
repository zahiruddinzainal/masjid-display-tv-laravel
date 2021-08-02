<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ayat Quran</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->
</head>

<body>
    <h1>Tambah Ayat Quran</h1>
    <form method="post" class="p-5" action="{{ url('insertquran') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="ayat">Ayat Quran</label>
            <input type="text" class="form-control" name="ayat" placeholder="Ayat Quran">
        </div>
        <div class="form-group mt-3">
            <label for="maksud">Maksud</label>
            <input type="text" class="form-control" name="maksud" placeholder="Maksud ayat Quran">
        </div>
        <div class="form-group mt-3">
            <label for="surah">Surah</label>
            <input type="text" class="form-control" name="surah" placeholder="Nama dan nombor surah">
        </div>
        <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Tambah Ayat Quran</button>
    </form>
</body>

</html>