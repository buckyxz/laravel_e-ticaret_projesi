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
}
