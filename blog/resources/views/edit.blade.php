@extends('layout')

@section('index')
    <h1>Edit Data</h1>

    <form action="/update/{{ $article->id }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" value="{{ $article->penulis }}" name="penulis" class="form-control" id="penulis"
                placeholder="Masukan Nama">
        </div>

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" value="{{ $article->judul }}" name="judul" class="form-control" id="judul"
                placeholder="Masukan Judul">
        </div>

        <div class="form-group">
            <label for="halaman">Deskripsi</label>
            <input type="number" value="{{ $article->halaman }}" name="halaman" class="form-control" id="halaman"
                placeholder="Jumlah Halaman">
        </div>

        <div class="form-group">
            <label for="tahun">Deskripsi</label>
            <input type="number" value="{{ $article->tahun }}" name="tahun" class="form-control" id="tahun"
                placeholder="Tahun Terbit" min="1990" max="2022">
        </div>


        <button class="btn btn-primary">ubah</button>

    </form>



    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->

@endsection
