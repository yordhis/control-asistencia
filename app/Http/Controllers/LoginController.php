<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\IpUtils;

use function Termwind\render;

class LoginController extends Controller
{
   /**
     * Display a form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function store(StoreLoginRequest $request)
    {
        $credentials = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){


            
            $user = Auth::user();
            $request->session()->has('users');
            $minutes = 10;
            $ipClient = request()->ip();
         
            if($user->rol_id === 1 && $ipClient == "127.0.0.1" ){
               
                // $_COOKIE['origin_sesion'] = cookie('origin_sesion', 'Login', $minutes);
                Cookie::queue('origin_sesion', 'Usted a aceptado los terminos', $minutes);
                return redirect()->route('profile.dashboard.index');
        
            }

            return redirect('/dashboard');


        }else{
            $data = ["message" => "Usuario o contraseña invalidos", "request" => $request];
            return view('login', $data);
        }

    }

    
    public function delete(Request $request){
        
       
        if (Auth::logout() == null){
            
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');

        }else{
            return view('/dashboard');
        }

     

      
     
        // return redirect('/');
    }

 
}
