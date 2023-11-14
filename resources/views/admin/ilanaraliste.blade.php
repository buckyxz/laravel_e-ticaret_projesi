@extends('layouts.default')

@section('content')

<h1>İlan</h1>

<div class="text-right mb-3">
    <a href="/ilaneklefrm" class="btn btn-primary">İlan Ekle</a>
</div>

<form method="POST" action="{{url('/ilanara')}}">
    @csrf
    <div class="form-group">
        <label for="baslik">baslik</label>
        <input type="text" name="baslik" id="baslik" class="form-control">
    </div>
    <div class="form-group">
        <label for="id">id</label>
        <textarea name="id" id="id" class="form-control" ></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">ARA</button>
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