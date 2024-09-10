<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User; 

class Main extends Controller
{
   public function index(){
        return view('index');
   }

   public function login(){
    if(Auth::check()){
        return redirect('/dashboard');
    }else{
        return view('signin');

    }
    }

    public function dashboard(){
        if(Auth::check()){
            $smsgroups= DB::table('sms_group')->orderBy('sms_group_id')->get();
            $numbers= DB::table('phone')->orderBy('phone_id')->join('sms_group','sms_group_id','=','phone_group_id')->get();
            $emailsgroups= DB::table('email_group')->orderBy('email_group_id')->get();
            $emails= DB::table('emails')->join('email_group','email_group_id','=','emails_group_id')->orderBy('emails_id')->get();
            return view('dashboard',compact('smsgroups','numbers','emailsgroups','emails'));
        }else{
            return redirect('/admin-login');
        }
    }
}

