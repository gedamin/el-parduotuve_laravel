<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seopost;

use Session;

class SeoPostController extends Controller
{
    public function index()
    {
        //fetch all posts data
        //$posts = Seopost::all();
        $posts = Seopost::orderBy('created','desc')->get();
        //pass posts data to view and load list view

        //SESSION MESAGGE
        $message = session()->get('message');

       return view('/SEO-optimizacija/admin.index', ['posts' => $posts,'message' => $message ]);
    }

    public function edit($id)
    {
        //get post data by id
        $post = Seopost::find($id);
        //load form view
        return view('/SEO-optimizacija/admin.edit', ['post' => $post]);
    }

    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required | min:3',
//            'img' => 'required',
            'content' => 'required',
            'short_conten' => 'required',
            'author' => 'required'
        ]);
        //get post data
        $postData = $request->all();

        $file = $request->file('img');
        $path = $file->store('public/seo_post_img');
        $fileName = basename($path);
        $postData ['img']= $fileName;
        //update post data
        Seopost::find($id)->update($postData);

       // return view('/SEO-optimizacija/admin.index');

        return redirect()->route('SEO-optimizacija.admin.index');

    }
//    public function store(Request $request){
//        $file = $request->file('img');
//        $path = $file->store('public/seo_post_img');
//        $fileName = basename($path);
//        $postData ['img']= $fileName;
//
//    }

    public function add(){
        $posts = Seopost::all();
        //load form view
        return view('/SEO-optimizacija/admin.add', ['post' => $posts]);
    }
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'img' => 'required'
        ]);

        //get post data
        $postData = $request->all();

        $file = $request->file('img');
        $path = $file->store('public/seo_post_img');
        $fileName = basename($path);
        $postData ['img']= $fileName;

        //insert post data
        Seopost::create($postData);

        //SESSION MESAGGE
        session()->flash('message', 'Thank you');

        return redirect()->route('SEO-optimizacija.admin.index');
    }


    public function delete($id){
        Seopost::find($id)->delete($id);
        return redirect()->route('SEO-optimizacija.admin.index');
    }
}





