@extends('layouts.users')
@section('content')
    @csrf
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
<style>
/* Özel tablo stili */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

/* Başlık hücreleri için stil */
.table th {
    background-color: #f8f9fa; /* Gri tonunda arkaplan */
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #dee2e6;
}

/* Veri hücreleri için stil */
.table td {
    padding: 12px;
    border-top: 1px solid #dee2e6;
}

/* Çift sıralar için arka plan rengi */
.table tbody tr:nth-child(even) {
    background-color: #f5f5f5; /* Açık gri tonunda arkaplan */
}

/* Hover durumunda arka plan rengi */
.table tbody tr:hover {
    background-color: #e9ecef; /* Hafif mavi tonunda arkaplan */
}
</style>