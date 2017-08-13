<?php

namespace App\Http\Controllers;
use App\Mail\JournalComment;
use Illuminate\Http\Request;
use Mail;

class SentMailFromJournalForm extends Controller
{
    public function JournalFormMail(Request $request)
    {
//        dd($request);
        $EmailInfo = $request->all();
        Mail::to('info@el-parduotuve.lt')->send(new JournalComment($EmailInfo)); //kuriu nauja objejta ir tuomet pasileidzia konstuktorius ContacForm.php __construct($data) ir siuncoiu is formos duomenis $EmailInfo

        return redirect()->back();


    }
}
