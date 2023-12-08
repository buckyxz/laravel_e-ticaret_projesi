@extends('layouts.default')
<head>
    <title>İlan Arama</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>İlan</h1>

<div class="text-right mb-3">
    <a href="/ilaneklefrm" class="btn btn-primary">İlan Ekle</a>
</div>

<form method="POST" action="{{url('/ilanara')}}">
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
   
    <button type="submit" class="btn btn-primary">ARA</button>
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