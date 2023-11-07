@extends('layouts.default')

@section('content')
   
admin kategori liste

@foreach ($kategorilistesi as $kategori)

    {{$kategori->katad}}

@endforeach




@stop

