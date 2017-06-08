<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DarbaiGallery;

class DarbaiGalleryController extends Controller
{
    public function index()

    {
        $images = DarbaiGallery::get();
        return view('admin.darbai-gallery', ['images' => $images]);
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
//        $request->image->move(public_path('images'), $input['image']);
        $request->image->move(storage_path('app/public/images/darbai'), $input['image']);
        $input['type'] = $request->type;
        $input['link'] = $request->link;
        $input['title'] = $request->title;
        $input['name'] = $request->name;
        DarbaiGallery::create($input);
        return back()
            ->with('success','Įkelta.');
    }

    /**
     *
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $darbas = DarbaiGallery::find($id);
        $darboFileName = $darbas->image;
        DarbaiGallery::find($id)->delete();
        unlink(storage_path('app/public/images/darbai/' . $darboFileName));

        return back()
            ->with('success','Pašalinta.');
    }
}
