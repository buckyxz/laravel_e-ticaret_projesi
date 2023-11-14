<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ilan;

class IlanController extends Controller
{
    //

    public function ilanliste()
    {
        //$ilanlar=DB::table('ilan')->get();
        $ilanlar=Ilan::all();

        return view('admin.ilanliste',['ilanlar'=>$ilanlar]);
    }

    public function ilaneklefrm()
    {
        $ilanlar=Ilan::all();
        return view('admin.ilanliste',['ilanlar'=>$ilanlar]);
    }

    public function ilanekle(Request $request)
    {
        $yeniilan = new Ilan;
        $yeniilan->slug = 'slug';
        $yeniilan->katid = 1;
        $yeniilan->baslik = $request->input('baslik');
        $yeniilan->aciklama = $request->input('aciklama');
        $yeniilan->fiyat = $request->input('fiyat');
        $yeniilan->save();

        return redirect('/ilaneklefrm');

    }

    public function ilanarafrm()
    {
        $ilanlar=Ilan::all();
        return view('admin.ilanaraliste',['ilanlar'=>$ilanlar]);
    }

    public function ilanara(Request $gelen)
    {
        $aranan= $gelen->baslik;
        //$ilanlar=Ilan::Like('baslik', $aranan)->get();
        $ilanlar = Ilan::where('baslik', 'like', "{$aranan}%")->get();
        return view('admin.ilanaraliste',['ilanlar'=>$ilanlar]);
    }

}
