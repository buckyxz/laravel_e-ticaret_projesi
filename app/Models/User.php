<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // İlişkileri tanımlayabilirsiniz
    public function posts()
    {
        return $this->hasMany(User::class); // Örnek bir ilişki tanımı, Post modelini kendi modelinize uygun şekilde güncelleyin
    }
}
