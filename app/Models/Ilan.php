<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilan extends Model
{
    use HasFactory;
    protected $table='Ilan';
    protected  $fillable=['baslik','katid','fiyat','aciklama','resim1','resim2','resim3']; 

}
