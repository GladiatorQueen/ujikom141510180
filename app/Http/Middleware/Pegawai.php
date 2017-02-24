<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Penggajian;
class Pegawai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->type_user=='Pegawai') {

            return redirect()($request);

        }
        return $next($request);

    }
}
