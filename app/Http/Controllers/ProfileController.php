<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    
        public function index(Request $request){
            $user = Auth::user();
            $value2 = $request->cookie('origin_sesion');
            echo "<script>alert('index profile')</script>";
            // return view('dashboard', compact('user'));
        }


        public function confirmationEmail(User $user, Request $request){

            echo "Estamos confirmando tu correo...";
            $data = $user->find($request->id);
            if($data->markEmailAsVerified()){
                
                return redirect()->route('profile.dashboard.index');

            }else{
                $data = [
                    'alert' => true,
                    'message' => "Upss, No se puco confirmar tu correo."
                    
                ];

                $user = ['id' => $request->id ];
                return view('/verifyEmail', compact('data', 'user'));
            }
            

        }


}
