<?php

namespace App\Http\Controllers;

use App\seoPostComment;
use Illuminate\Http\Request;
use App\Seopost;
use Illuminate\Support\Facades\DB;
use App\Mail\PostComment;
use Mail;

use Session;

class SeoPostController extends Controller
{
    public function index()
    {
        $posts = Seopost::orderBy('created','asc')->paginate(20);
        //pass posts data to view and load list view
        $comments = SeoPostComment::all();
        //SESSION MESAGGE
        $message = session()->get('message');

       return view('/SEO-optimizacija/admin.index', ['posts' => $posts, 'comments' => $comments, 'message' => $message ]);
    }

    public function edit($id)
    {
        $post = Seopost::find($id);
        //load form view
        return view('/SEO-optimizacija/admin.edit', ['post' => $post]);
    }

    public function update($id, Request $request){

        $this->validate($request, [
            'title' => 'required | min:3',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'content' => 'required',
//            'short_conten' => 'required',
            'author' => 'required'
        ]);
        //get post data
        $postData = $request->all();

        if ($request->hasFile('img')) {
        $fileName = time().'.'.$request->file('img')->getClientOriginalExtension();
        $request->file('img')->move(public_path('images/seo_post_img'),time().'.'.$request->file('img')->getClientOriginalExtension());

        $postData ['img']= $fileName;
        $deletePost = Seopost::find($id);
        $PostFileName = $deletePost->img;
        unlink(public_path('images/seo_post_img/' . $PostFileName));
//update post data
        }
        Seopost::find($id)->update($postData);

        return redirect()->route('SEO-optimizacija.admin.index');
    }
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
//            'content' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //get post data
        $postData = $request->all();
//        $file = $request->file('img');
//        $path = $file->store('public/seo_post_img');
//        $fileName = basename($path);
        $fileName = time().'.'.$request->file('img')->getClientOriginalExtension();
        $request->file('img')->move(public_path('images/seo_post_img'),time().'.'.$request->file('img')->getClientOriginalExtension());


        $postData ['img']= $fileName;

        //insert post data
        Seopost::create($postData);

        return redirect()->route('SEO-optimizacija.admin.index');
    }

    public function add(){
        $posts = Seopost::all();
        //load form view
        return view('/SEO-optimizacija/admin.add', ['post' => $posts]);
    }

    public function delete($id){
//        Seopost::find($id)->delete($id);

        $deletePost = Seopost::find($id);
//        ->delete($id);

        $PostFileName = $deletePost->img;
//        dd($PostFileName);

        Seopost::find($id)->delete();
        unlink(storage_path('app/public/seo_post_img/' . $PostFileName));

        return redirect()->route('SEO-optimizacija.admin.index');
    }

    public function insertComent($id, Request $request){
        $comments = SeoPostComment::find($id);

        $this->validate($request, [
            'comment_author' => 'required',
            'email' => 'required'
        ]);
        //get post data
        $postData = $request->all();
        $postData ['seo_post_id']= $id;

        //insert post data
        SeoPostComment::create($postData);
//Send emeil on post comment:
        $EmailInfo = $request->all();
        Mail::to('el.parduotuve.lt@gmail.com')->send(new PostComment($EmailInfo));

        return redirect()->back();
    }

    //take all coments list seoPostCommentsAll

    public function seoPostCommentsAll()
    {
        $comments = SeoPostComment::orderBy('id','asc')->paginate(20);
        $posts = Seopost::all();
//       dd($posts);

        return view('SEO-optimizacija.admin.AllComments', ['comments' => $comments,'posts' => $posts]);
    }

    public function seoPostComment($id)
    {
        $posts = Seopost::find($id);
        //surandam konretu posta pagal id /// turi sarysi commnets MODEL
        $comments = $posts->comments; //
//        dd($posts->comments); //coments per MODEL sarysis
        return view('SEO-optimizacija.admin.comments', ['comments' => $comments,'posts' => $posts]);
    }

    public function seoPostCommentDelete($id){
        SeoPostComment::find($id)->delete($id);
        return redirect()->route('SEO-optimizacija.comments.list.all');
    }

    public function CommentEdit($id)
    {
        $comments = SEOPostComment::find($id);
        //load form view

        return view('SEO-optimizacija.admin.CommentsEdit', ['comments' => $comments]);
    }

    public function CommentUpdate($id, Request $request){
        //get data
        $CommentData = $request->all();
        //update data
       SEOPostComment::find($id)->update($CommentData);
       return redirect()->route('SEO-optimizacija.comments.list.all');
    }
}
