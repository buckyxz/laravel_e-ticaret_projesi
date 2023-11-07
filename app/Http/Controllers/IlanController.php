<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IlanController extends Controller
{
    //

    public function ilanliste()
    {
        $ilanlar=DB::table('ilan')->get();


        return view('admin.ilanliste',['ilanlar'=>$ilanlar]);
    }
}
