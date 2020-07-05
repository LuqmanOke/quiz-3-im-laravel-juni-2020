@extends('layouts.master')
@section('content')
<div class="ml-3 mt-3 mb-3"></div>
<h1>Data Artikel</h1>
<a href="/items/create" class="btn btn-primary">
    Create New Artikel
</a>
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tag</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $key => $item)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
                <td>{{$item->judul}}</td>
                <td>{{$item->isi}}</td>
                <td>{{$item->tag}}</td>
                <td>
                <a href="/items/{{$item->id}}" class="btn btn-primary">
                    show
                </a>
                <a href="/items/{{$item->id}}/edit" class="btn btn-sm btn-default">
                    edit
                </a>
                <form action="/items/{{$item->id}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                delete </button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection