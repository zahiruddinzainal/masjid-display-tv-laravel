<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akaun Bank</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->
</head>

<body>
    <h1>Tambah Akaun Bank</h1>
    <form method="post" class="p-5" action="{{ url('insertakaunbank') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="akaun_no">Nombor akaun bank masjid</label>
            <input type="text" class="form-control" name="akaun_no" placeholder="Nombor akaun masjid">
        </div>
        <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Tambah ombor akaun</button>
    </form>
</body>

</html>