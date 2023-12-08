<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GirisController extends Controller
{
    public function loginfrm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt($credentials)) {
            // Kullanıcı girişi başarılı oldu
    
            // Kullanıcının rolünü kontrol et
            if (auth()->user()->role === 'admin') {
                // Admin ise 'index' sayfasına yönlendir
                return redirect()->route('index');
            } else {
                // Admin değilse 'home' sayfasına yönlendir
                return redirect()->route('home');
            }
        } else {
            // Giriş başarısız
            return response()->json(['message' => 'Giriş başarısız'], 401);
        }
    }
    public function registerfrm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ], [
            'email.unique' => 'Bu e-posta adresi zaten kullanimda.',
            'password.confirmed' => 'Parolaniz eslesmiyor.',
        ]);

        // $credentials dizisini burada oluşturuyoruz
        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Kayit basarili']);
        } else {
            return response()->json(['message' => 'Kayit basarisiz'], 401);
        }
    }
}
