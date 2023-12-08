@extends('layouts.default')
<head>
    <title>İlan Düzenleme</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>İlan Düzenleme Ekranı</h1>

<form method="POST" action="{{ url("/ilanliste/{$ilan->id}") }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="baslik">Başlık:</label>
        <input type="text" name="baslik" id="baslik" class="form-control" value="{{ $ilan->baslik }}" required>
    </div>
    <div class="form-group">
        <label for="aciklama">Açıklama:</label>
        <textarea name="aciklama" id="aciklama" class="form-control" required>{{ $ilan->aciklama }}</textarea>
    </div>
    <div class="form-group">
        <label for="fiyat">Fiyat:</label>
        <input type="number" step="0.01" name="fiyat" id="fiyat" class="form-control" value="{{ $ilan->fiyat }}" required>
    </div>
    <div class="form-group">
        <label for="resim1">Resim:</label>
        <input type="file" name="resim1" id="resim1" class="form-control" accept="image/*">
    </div>
    
    <button type="submit" class="btn btn-primary">İlan Güncelle</button>
</form>

@endsection
