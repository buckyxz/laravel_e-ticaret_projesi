@extends('layouts.default')
<head>
    <title>Kategori Ekleme</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>Kategori Oluştuma Ekranı</h1>

<form method="POST" action="{{url('/kategoriekle')}}">
    @csrf
    <div class="form-group">
        <label for="katad">Kategori Ad:</label>
        <input type="text" name="katad" id="katad" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ustid">Kategori Üst ID:</label>
        <input type="number" step="1" name="ustid" id="ustid" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Kategori Oluştur</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Kategori Ad</th>
            <th>Kategori Ust ID</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($kategoriler as $tbkategori)
            <tr>
                <td>{{ $tbkategori->katad }}</td>
                <td>{{ $tbkategori->ustid }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection