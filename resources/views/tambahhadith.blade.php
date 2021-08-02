<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Hadith</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->
</head>

<body>
    <h1>Tambah Hadith</h1>
    <form method="post" class="p-5" action="{{ url('inserthadith') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="ayat">Hadith</label>
            <input type="text" class="form-control" name="ayat" placeholder="Hadith">
        </div>
        <div class="form-group mt-3">
            <label for="maksud">Maksud</label>
            <input type="text" class="form-control" name="maksud" placeholder="Maksud hadith">
        </div>
        <div class="form-group mt-3">
            <label for="riwayat">Riwayat</label>
            <input type="text" class="form-control" name="riwayat" placeholder="Nama perawi">
        </div>
        <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Tambah hadith</button>
    </form>
</body>

</html>