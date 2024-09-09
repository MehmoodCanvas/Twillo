<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class Account extends Controller
{

    public function post_login(Request $request){

        $user=DB::table('users')->where('email',$request->email)->first();
        if($user){
            $password=Hash::check($request->password, $user->password);
            if($password){
                $userdata=User::find($user->id);
                Auth::login($userdata);
                if(Auth::check()){
                    return redirect(url('/dashboard'));

                }else{
                    return redirect()->back()->with('error','Error in Logging the Site.');
                }
            }else{
                 return redirect()->back()->with('error','Incorrect Password');
            }
        }else{
            return redirect()->back()->with('error','Wrong Email or Password');
        }

    }

}
