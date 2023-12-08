<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user() || $request->user()->role !== $role) {
            abort(403, 'BİR HATA OLUŞTU. LÜTFEN YÖNETİCİNİZLE İLETİŞİME GEÇİNİZ. (ROL UYUMSUZLUĞU)');
        }

        return $next($request);
    }
}
