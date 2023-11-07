<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //

    public function katliste()
    {

        $kategori=DB::table('tbkategori')->get();

        return view('admin.katliste',['kategorilistesi'=> $kategori]);
    }
}
