@extends('layouts.default')
<head>
    <title>Kategori Düzenle</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>Kategori Düzenleme Ekranı</h1>

<form method="POST" action="{{ url("/kategoriliste/{$kategoriler->id}") }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="baslik">Kategori ADI:</label>
        <input type="text" name="katad" id="katad" class="form-control" value="{{ $kategoriler->katad }}" required>
    </div>
    <div class="form-group">
        <label for="ustid">Üst ID:</label>
        <textarea name="ustid" id="ustid" class="form-control" required>{{ $kategoriler->ustid }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Kategori   Güncelle</button>
</form>

@endsection
