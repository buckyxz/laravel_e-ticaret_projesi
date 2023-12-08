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
        return view('admin.ilanlisteekle',['ilanlar'=>$ilanlar]);
    }

    public function ilanekle(Request $request)
    {
        $yeniilan = new Ilan;
        $yeniilan->slug = 'slug';
        $yeniilan->katid = 1;
        $yeniilan->baslik = $request->input('baslik');
        $yeniilan->aciklama = $request->input('aciklama');
        $yeniilan->fiyat = $request->input('fiyat');
        if ($request->hasFile('resim1')) {
            $resimDosyasi = $request->file('resim1');
            $resimYolu = 'uploads/' . time() . '_' . $resimDosyasi->getClientOriginalName();
            $resimDosyasi->move(public_path('uploads'), $resimYolu);
    
            
            $yeniilan->resim1 = $resimYolu;
        }
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
    public function edit($id)
    {
        $ilan = Ilan::find($id);
        return view('admin.ilanduzenle', compact('ilan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'baslik' => 'required',
            'aciklama' => 'required',
            'fiyat' => 'required',
            'resim1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $ilan = Ilan::find($id);    
        $ilan->baslik = $request->input('baslik');
        $ilan->aciklama = $request->input('aciklama');
        $ilan->fiyat = $request->input('fiyat');

        if ($request->hasFile('resim1')) {
            $resimDosyasi = $request->file('resim1');
            $resimYolu = 'uploads/' . time() . '_' . $resimDosyasi->getClientOriginalName();
            $resimDosyasi->move(public_path('uploads'), $resimYolu);
            $ilan->resim1 = $resimYolu;
        }

        $ilan->save();

        return redirect('/ilanliste')->with('success', 'İlan güncellendi.');
    }
    public function destroy($id)
    {
        $ilan = Ilan::find($id);
        $ilan->delete();

        return redirect('/ilanliste')->with('success', 'İlan silindi.');
    }
}
