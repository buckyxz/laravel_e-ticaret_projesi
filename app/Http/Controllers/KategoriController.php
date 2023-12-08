<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //

    public function katliste()
    {

        $kategoriler=DB::table('tbkategori')->get();

        return view('admin.katliste',['kategoriler'=> $kategoriler]);
    }
    
        public function kategorieklefrm()
        {
            $kategoriler=Kategori::all();
            return view('admin.kategorilisteekle',['kategoriler'=>$kategoriler]);
        }
    
        public function kategoriekle(Request $request)
        {
            $yenikategori = new Kategori;
            $yenikategori->slug = 'slug';
            $yenikategori->katad = $request->input('katad');
            $yenikategori->ustid = $request->input('ustid');
            $yenikategori->save();
    
            return redirect('/kategorieklefrm');
    
        }
    
        public function kategoriarafrm()
        {
            $kategoriler=Kategori::all();
            return view('admin.kategoriaraliste',['kategoriler'=>$kategoriler]);
        }
    
        public function kategoriara(Request $gelen)
        {
            $aranan= $gelen->katad;
            //$ilanlar=Ilan::Like('baslik', $aranan)->get();
            $kategoriler = Kategori::where('katad', 'like', "{$aranan}%")->get();
            return view('admin.kategoriaraliste',['kategoriler'=>$kategoriler]);
        }
        public function edit($id)
        {
            $kategoriler = Kategori::find($id);
            return view('admin.kategoriduzenle', compact('kategoriler'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'katad' => 'required',
                'ustid' => 'required',
            ]);
    
            $kategoriler = Kategori::find($id);    
            $kategoriler->katad = $request->input('katad');
            $kategoriler->ustid = $request->input('ustid');
    
            $kategoriler->save();
    
            return redirect('/kategoriliste')->with('success', 'İlan güncellendi.');
        }
        public function destroy($id)
        {
            $kategoriler = Kategori::find($id);
            $kategoriler->delete();
    
            return redirect('/kategoriliste')->with('success', 'İlan silindi.');
        }
    
    }