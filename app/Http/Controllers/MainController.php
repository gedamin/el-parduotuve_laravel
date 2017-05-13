<?php

namespace App\Http\Controllers;
use App\Seopost;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //$manufacturersS = Manufacturer::all();
        $posts = Seopost::orderBy('created','desc')->get();
        return view('SEO-optimizacija.SEO-optimizacija', ['posts' => $posts]);

        return view('SEO-optimizacija.seo-efektyviausia-reklama-internete');

    }
    public function post()
    {
        return view('SEO-optimizacija.seo-efektyviausia-reklama-internete');

    }
}
