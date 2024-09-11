<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Emails;
use App\Models\Email_group;
use Illuminate\Support\Facades\DB;
use App\Mail\Bulk_email;
use Illuminate\Support\Facades\Mail;
use Rap2hpoutre\FastExcel\FastExcel;

class Emails_control extends Controller
{
    public function add_email_group(Request $request){

        $group = new Email_group();
        $group->email_group_name=$request->email_group_name;
        $group->save();
        return redirect()->back()->with('success','Email Group Created');
        
    }
    public function add_email(Request $request){

        $phone = new Emails();
        $phone->emails_group_id=$request->emails_group_id;
        $phone->emails_email=$request->emails_email;
        $phone->save();
        return redirect()->back()->with('success','Email Added to the Group.');
    
    }

    public function sending_email(Request $request){

      $group = DB::table('emails')->where('emails_group_id',$request->email_group_id)->get();
      foreach($group as $groups){
        $data = [
            'subject' => $request->subject,
            'title' => $request->title,
            'body' => $request->body,
            'link1' => [
                'url' => route('approved').'?email='.$groups->emails_email,
                'text' => 'Interested',
            ],
            'link2' => [
                'url' => route('noapproval').'?email='.$groups->emails_email,
                'text' => 'Not Interested',
            ],
        ];

       Mail::to($groups->emails_email)->send(new Bulk_email($data));
      }
      return redirect()->back()->with('success','Emails Sent!');


    }

    public function approved(){
        $emaildata= DB::table('emails')->where('emails_email',$_GET['email'])->first();
        $email = Emails::find($emaildata->emails_id);
        $email->emails_status='Interested';
        $email->save();
        return view('emailresponse');

    }  

    public function noapproval(){
        $email = Emails::find($_GET['email']);
        $email->emails_status='Not-interested';
        $email->save();
        return view('emailresponse');

    }

    public function bulk_email(Request $request){
        $users = (new FastExcel)->import($request->import_email, function ($line) {
            Emails::create([
                'emails_group_id'=>1,
                'emails_email' => $line['email'],
            ]);
        });
        return redirect()->back()->with('success','Email Added to the Group.');
    }
}
