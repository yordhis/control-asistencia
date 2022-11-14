<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmailVerifiedAt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $vma = auth()->user()->email_verified_at ?? null;
        if(!$vma){

            if ($vma !== null) {
                return $next($request);
            }else {
                echo "<script>alert('El correo NO esta verificado, Te vamos a redireccionar al procesode verificación.')</script>"; 
                return redirect()->route('verify.email');
            }
        }else{
            return redirect()->route('profile.dashboard.index');
        }
     
    }
}
