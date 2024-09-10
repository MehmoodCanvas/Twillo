<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\TwiML\MessagingResponse;
use App\Models\Sms_group;
use App\Models\Phone_number;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class Sms extends Controller
{
    public function index(Request $request)
    {
        $sid    = env('key1');
        $token  = env('key2');
        $twilio = new Client($sid, $token);

        $users = DB::table('phone')->where('phone_group_id',$request->group)->get();
        if($request->group==00 && !empty($request->sms_single)){
            $message = $twilio->messages->create(
                "$request->sms_single",
                [
                    "from" => "+19382014323",
                    "body" => "$request->sms_content",
                ]
            );
            return redirect()->back()->with('success','Sms Sent!');

        }else{
            foreach ($users as $user) {
         
                $message = $twilio->messages->create(
                    "$user->phone_number",
                    [
                        "from" => "+19382014323",
                        "body" => "$request->sms_content",
                    ]
                );
            }
            return redirect()->back()->with('success','Sms Sent!');

        }

    }


    public function response(Request $request)
    {
        $from = $request->input('From');
        $body = strtolower(trim($request->input('Body')));

        if ($body == 'interested' || $body == 'Interested') {
            $user = User::where('phone_number', $from)->first();
            if ($user) {
                $user->phone_number_status = 'Interested'; 
                $user->save();
            }
        }

        $response = new MessagingResponse();
        $response->message('Thank you for your response.');

        return response($response)->header('Content-Type', 'text/xml');
    }



    public function add_group(Request $request){
        $group = new Sms_group();
        $group->sms_group_name=$request->sms_group_name;
        $group->save();
        return redirect()->back()->with('success','Group Created');


    }




    public function add_phone(Request $request){
        
        $phone = new Phone_number();
        $phone->phone_group_id=$request->phone_group_id;
        $phone->phone_number=$request->phone_number;
        $phone->save();
        return redirect()->back()->with('success','Phone Number Added to the Group.');

    }

    public function bulk_number(Request $request){
        $users = (new FastExcel)->import($request->import_file, function ($line) {
             Phone_number::create([
                'phone_group_id'=>2,
                'phone_number' => '+'.$line['number'],
            ]);
        });
        return redirect()->back()->with('success','Phone Number Added to the Group.');
    }

}
