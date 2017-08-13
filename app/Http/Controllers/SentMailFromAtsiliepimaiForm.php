<?php

namespace App\Http\Controllers;
use App\Mail\ContactForm;

use Illuminate\Http\Request;
use Mail;

class SentMailFromAtsiliepimaiForm extends Controller
{
    public function AtsiliepimaiFormMail(Request $request)
    {
//        dd($request);
        $EmailInfo = $request->all();
        Mail::to('el.parduotuve.lt@gmail.com')->send(new ContactForm($EmailInfo)); //kuriu nauja objejta ir tuomet pasileidzia konstuktorius ContacForm.php __construct($data) ir siuncoiu is formos duomenis $EmailInfo

        return redirect()->back();


    }
}
