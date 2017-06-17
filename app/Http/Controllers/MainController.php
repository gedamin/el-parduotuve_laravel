<?php

namespace App\Http\Controllers;
use App\Seopost;
use App\DarbaiGallery;

use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainController extends Controller
{
    //    HOME page
    public function HomePage()
    {
        return view('home');
    }
    public function index()
    {
        $posts = Seopost::orderBy('created','desc')->paginate(8);
        return view('SEO-optimizacija.SEO-optimizacija', ['posts' => $posts]);
    }
    public function seoPostView($slug)
    {

//        $posts = Seopost::find($id); //vekiantis buvo kai vietoje slug id
        $posts = Seopost::where('slug', '=', $slug) -> first();
//        dd($posts);


//        return view('SEO-optimizacija.seoPostView', ['posts' => $posts]);
          return view('SEO-optimizacija.seoPostView', ['posts' => $posts]) -> withPost($posts);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AtliktiDarbai()
    {
        $images = DarbaiGallery::get();
        return view('atlikti-darbai.AtliktiDarbai', ['images' => $images]);

    }

//    STATIC pages
    public function ElektroninesParduotuvesKurimas()
    {
        return view('static-pages.elektronines-parduotuves-kurimas.ElektroninesParduotuvesKurimas');
    }



    public function contacts()
    {
        return view('static-pages.kontaktai');
    }
}
