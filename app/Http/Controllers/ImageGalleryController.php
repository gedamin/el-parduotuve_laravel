<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ImageGallery;
use Illuminate\Support\Facades\Auth; //mano
use App\LogoDisainer; //mano
use App\LogoDisainerProfile; //mano
class ImageGalleryController extends Controller
{

    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $disainer = LogoDisainer::find($id); //mano
        $images = ImageGallery::where('profile_id', $id)->get();
        return view('logotipu-kurimas.admin.image-gallery', ['images' => $images, 'disainer' => $disainer]);
    }

    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */

    public function upload($id, Request $request)
    {
        $this->validate($request, [
//            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/logotipai'), $input['image']);
//        $request->image->move(storage_path('app/public/images'), $input['image']);

        $input['title'] = $request->title;
        $input['type'] = $request->type;
        $disainer = LogoDisainer::find($id);
        $input ['profile_id'] = $disainer->id; //Paduodame userio id
        ImageGallery::create($input);

        return back()
            ->with('success','Jūsų logotipas įkeltas.');
    }
    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        $logo = ImageGallery::find($id);
        $logoFileName = $logo->image;
        ImageGallery::find($id)->delete();
//        unlink(public_path('images/' . $logoFileName));
//        unlink(storage_path('app/public/images/' . $logoFileName));
        unlink(public_path('images/logotipai/' . $logoFileName));

        return back()
            ->with('success','Jūsų logotipas ištrintas.');
    }
}