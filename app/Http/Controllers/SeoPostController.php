<?php

namespace App\Http\Controllers;

use App\seoPostComment;
use Illuminate\Http\Request;
use App\Seopost;
use Illuminate\Support\Facades\DB;

use Session;

class SeoPostController extends Controller
{
    public function index()
    {
        //fetch all posts data
        //$posts = Seopost::all();
        $posts = Seopost::orderBy('created','desc')->get();
        //pass posts data to view and load list view

        $comments = SeoPostComment::all();
        //SESSION MESAGGE
        $message = session()->get('message');

       return view('/SEO-optimizacija/admin.index', ['posts' => $posts, 'comments' => $comments, 'message' => $message ]);
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

    public function insertComent($id, Request $request){
        $comments = SeoPostComment::find($id);
        //validate post data
//        dd('$coments');

        $this->validate($request, [
            'comment_author' => 'required',
            'email' => 'required'
        ]);
        //get post data
        $postData = $request->all();
//        dump($postData);
        $postData ['seo_post_id']= $id;
//        dd($postData);

        //insert post data
        SeoPostComment::create($postData);

        return redirect()->back();
    }

    //take all coments list seoPostCommentsAll
    public function seoPostCommentsAll()
    {
        $comments = SeoPostComment::all();
        $posts = Seopost::all();


        return view('SEO-optimizacija.admin.comments', ['comments' => $comments,'posts' => $posts]);
    }




    public function seoPostCommentDelete($id){
        SeoPostComment::find($id)->delete($id);
        return redirect()->route('SEO-optimizacija.comments.list.all');
    }


    public function seoPostComment($id)
    {
        $comments = SeoPostComment::all();

        return view('SEO-optimizacija.admin.comments', ['comments' => $comments]);



    }
}
