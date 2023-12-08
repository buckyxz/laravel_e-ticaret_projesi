@extends('layouts.users')

@section('content')
<h1>Kayıt Sayfası</h1>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Adınızı girin">
    <input type="email" name="email" placeholder="E-mail adresinizi girin">
    <input type="password" name="password" placeholder="Şifrenizi girin">
    <input type="password" name="password_confirmation" placeholder="Şifrenizi tekrar girin">
    <button type="submit">Kayıt Ol</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@stop

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    max-width: 300px; /* Formun genişliğini sınırla */
    margin: 0 auto; /* Formu ortala */
}

input {
    margin-bottom: 15px;
    padding: 10px;
    display: block; /* Inputları blok elementlere dönüştür */
    width: 100%; /* Genişlik 100% */
    box-sizing: border-box; /* padding ve border dahil box modelini kullan */
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%; /* Genişlik 100% */
    box-sizing: border-box; /* padding ve border dahil box modelini kullan */
}
h1 {
    text-align: center;
}
button:hover {
    background-color: #0056b3;
}

</style>