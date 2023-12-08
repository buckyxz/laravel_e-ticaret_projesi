<?php
namespace App\Http\Controllers;

use App\Models\Ilan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('anasayfa.home');
    }


    public function hakkimizda()
    {
        // hakkımızda için gerekli işlemler ve view
        return view('anasayfa.hakkimizda');
    }

    public function iletisim()
    {
        // iletişim için gerekli işlemler ve view
        return view('anasayfa.iletisim');
    }
    public function ilanlar()
{
    $ilanlar = Ilan::all(); // İlanları alacak bir metot veya sorgu kullanın
    return view('anasayfa.ilanlar', compact('ilanlar'));
    
}
public function kategoriler()
{
    $kategoriler = Kategori::all(); // İlanları alacak bir metot veya sorgu kullanın
    return view('anasayfa.kategoriler', compact('kategoriler'));
    
}
}
