@extends('layouts.default')

@section('content')

<h1>İlan</h1>

<div class="text-right mb-3">
    <a href="/ilaneklefrm" class="btn btn-primary">İlan Ekle</a>
</div>

<form method="POST" action="{{url('/ilanekle')}}">
    @csrf
    <div class="form-group">
        <label for="baslik">baslik</label>
        <input type="text" name="baslik" id="baslik" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="aciklama">aciklama</label>
        <textarea name="aciklama" id="aciklama" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="fiyat">fiyat</label>
        <input type="number" step="0.01" name="fiyat" id="fiyat" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>baslik</th>
            <th>fiyat</th>
            <th>aciklama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ilanlar as $ilan)
            <tr>
                <td>{{ $ilan->baslik }}</td>
                <td>{{ $ilan->aciklama }}</td>
                <td>{{ $ilan->fiyat }} TL</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection