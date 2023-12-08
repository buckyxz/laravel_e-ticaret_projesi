@extends('layouts.default')
<head>
    <title>Kategori Arama</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>Kategori Ara</h1>

<div class="buttons">
    <a href="/kategorieklefrm" class="btn btn-primary">Kategori Ekle</a>
</div>

<form method="POST" action="{{url('/kategoriara')}}">
    @csrf
    <div class="form-group">
        <label for="katad">Katad</label>
        <input type="text" name="katad" id="katad" class="form-control">
    </div>
    <div class="form-group">
        <label for="ustid">ustid</label>
        <input type="number" step="1" name="ustid" id="ustid" class="form-control" required>    
    </div>
   
    <button type="submit" class="btn btn-primary">ARA</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>katad</th>
            <th>ustid</th>
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
    