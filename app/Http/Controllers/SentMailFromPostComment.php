<?php
//
//namespace App\Http\Controllers;
//use App\Mail\PostComment;
//
//use Illuminate\Http\Request;
//use Mail;
//
//class SentMailFromPostComment extends Controller
//{
//
//    public function PostCommentMail(Request $request)
//    {
////        dd($request);
//        $EmailInfo = $request->all();
//        Mail::to('el.parduotuve.lt@gmail.com')->send(new PostComment($EmailInfo)); //kuriu nauja objejta ir tuomet pasileidzia konstuktorius ContacForm.php __construct($data) ir siuncoiu is formos duomenis $EmailInfo
//
//        return redirect()->back();
//
//    }
//
//
//}


//Not needed inserted in SeoPostController.php