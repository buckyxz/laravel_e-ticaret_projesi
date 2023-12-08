@extends('layouts.default')
<head>
    <title>İlan Liste</title>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
</head>
@section('content')

<h1>İlan</h1>

<div class="text-right mb-3">
    <a href="/ilaneklefrm" class="btn btn-primary">İlan Ekle</a>
    <a href="/ilanarafrm" class="btn btn-primary">İlan Ara</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Başlık</th>
            <th>Fiyat</th>
            <th>Açıklama</th>
            <th>Resim</th>
            <th>İşlemler</th>
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
                <td>
                    <a href="{{ url('/ilanliste/'.$ilan->id.'/edit') }}" class="btn btn-warning">Düzenle</a>
                    <form action="{{ url('/ilanliste/'.$ilan->id) }}" method="POST" style="display: inline-block;">
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