@extends('layouts.master')
@section('content')
    <div class="ml-3 mt-3">
    <h3> Detail Artikel</h3>
        <p> Judul : {{$item->judul}}
        </p>
        <p> Isi : {{$item->isi}}
        </p>
        <p> Tag : {{$item->tag}}
        </p>
    </div>
    

@endsection