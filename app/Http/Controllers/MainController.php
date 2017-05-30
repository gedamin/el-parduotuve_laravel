<?php

namespace App\Http\Controllers;
use App\Seopost;
use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainController extends Controller
{
    public function index()
    {
        $posts = Seopost::orderBy('created','desc')->paginate(8);
        return view('SEO-optimizacija.SEO-optimizacija', ['posts' => $posts]);
        return view('SEO-optimizacija.seo-efektyviausia-reklama-internete');
    }
    public function post()
    {
        return view('SEO-optimizacija.seo-efektyviausia-reklama-internete');
    }
    public function contacts()
    {
        return view('static-pages.kontaktai');
    }

    public function seoPostView($id)
    {
        $posts = Seopost::find($id);
//        dd($posts->comments);
//        dd($posts);
        return view('SEO-optimizacija.seoPostView', ['posts' => $posts]);
//        try{
//            $posts = Seopost::findorFail($id);
//            return view('SEO-optimizacija.seoPostView', ['posts' => $posts]);
//        }
//        catch(ModelNotFoundException $err){
//            //if id doesnt exist it will skip return view('profil..
//            //and excute whatever in this section
//            return redirect('/SEO-optimizacija.php');
//        }
    }

}
