@extends('layouts.users')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Kategori AD</th>
            <th>Kategori Ust ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategoriler as $tbkategori)
            <tr>
                <td>{{ $tbkategori->katad }}</td>
                <td>{{ $tbkategori->ustid }}</td>

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