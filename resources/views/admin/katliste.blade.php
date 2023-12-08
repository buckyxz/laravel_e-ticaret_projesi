@extends('layouts.default')
<head>
    <title>Kategori Liste</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>Kategoriler</h1>

<div class="text-right mb-3">
    <a href="/kategorieklefrm" class="btn btn-primary">Kategori Ekle
    <a href="/kategoriarafrm" class="btn btn-primary">Kategori Ara </a>
    </a>


<table class="table">
    <thead>
        <tr>
            <th>Kategori AD</th>
            <th>Kategori Ust ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategoriler as $tbkategori)
            <tr>
                <td>{{ $tbkategori->katad }}</td>
                <td>{{ $tbkategori->ustid }}</td>
                <td>
                    <a href="{{ url('/kategoriliste/'.$tbkategori->id.'/edit') }}" class="btn btn-warning">Düzenle</a>
                    <form action="{{ url('/kategoriliste/'.$tbkategori->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Emin misiniz?')">Sil</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection