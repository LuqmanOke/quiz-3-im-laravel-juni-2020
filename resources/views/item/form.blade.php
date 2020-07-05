@extends('layouts.master')
@section('content')
<div class="ml-3">

    <div class="card card-primay">
        <div class="card-header">
        <h2 class="card-title"> ---  New Artikel  ---</h2>
        </div>
        <form role="form" action="/items" method="POST">
            @csrf
        <div class="ml-3">
        <div class="form-group">
            <label for="judul">JUDUL</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
        </div>
        <div class="form-group">
            <label for="isi">isi</label>
            <input type="text-area" class="form-control" id="isi" name="isi" placeholder="Deskripsi Artikel">
        </div>
        <div class="form-group">
            <label for="tag">tag</label>
            <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag Artikel">
        </div>


        <div class="mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </div>
        </form>
    </div>
</div>
@endsection