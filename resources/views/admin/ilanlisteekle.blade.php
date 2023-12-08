@extends('layouts.default')
<head>
    <title>İlan Ekleme</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>İlan Oluşturma Ekranı</h1>

<form method="POST" action="{{url('/ilanekle')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="baslik">Başlık:</label>
        <input type="text" name="baslik" id="baslik" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="aciklama">Açıklama:</label>
        <textarea name="aciklama" id="aciklama" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="fiyat">Fiyat:</label>
        <input type="number" step="0.01" name="fiyat" id="fiyat" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="resim1">Resim:</label>
        <input type="file" name="resim1" id="resim1" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">İlan Oluştur</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Fiyat</th>
            <th>Resim</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ilanlar as $ilan)
            <tr>
                <td>{{ $ilan->baslik }}</td>
                <td>{{ $ilan->aciklama }}</td>
                <td>{{ $ilan->fiyat }} TL</td>
                <td>
                    @if ($ilan->resim1)
                    <img src="{{ $ilan->resim1 }}" alt="Resim" width="80" height="80">
                    @else
                        Resim Yok
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
