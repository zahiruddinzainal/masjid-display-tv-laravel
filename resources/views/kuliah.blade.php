@extends('layout', ['titlePage' => __('Kuliah')])


@section('content')
<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</header>

<table class="table">
    <a type="button" href="tambahkuliah" class="btn btn-primary">Tambah kuliah</a>
    <thead>
        <tr>
            <th scope="col">Tajuk kuliah</th>
            <th scope="col">Tarikh kuliah</th>
            <th scope="col">Penceramah</th>
            <th scope="col">Gambar</th>
            <th scope="col">Status</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kuliahs as $kuliah)
        <tr>
            <td>{{$kuliah->tajuk}}</td>
            <td>{{$kuliah->tarikh}}</td>
            <td>{{$kuliah->penceramah}}</td>
            <td>{{$kuliah->gambar}}</td>
            <td>{{$kuliah->status}}</td>
            <td>
                <a type="button" href="update/{{$kuliah->id}}" class="btn btn-warning">Update</a>
            </td>
            <td>
                <a type="button" href="deleteproduct/{{$kuliah->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection