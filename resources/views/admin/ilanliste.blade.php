@extends('layouts.default')

@section('content')


İlan liste
<br>

@foreach($ilanlar as $ilan)


{{$ilan->baslik}}
{{$ilan->fiyat}}
{{$ilan->aciklama}}

<br>



@endforeach


@endsection