<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function katliste()
    {

        return view('admin.katliste');
    }
}
