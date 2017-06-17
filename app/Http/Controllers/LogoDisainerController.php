<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoDisainer;
use App\LogoDisainerProfile;
use Illuminate\Support\Facades\Auth;
use  App\disainerslogo_image;
use File;

class LogoDisainerController extends Controller
{
    public function LogoDisainersView()
    {
        $disainerList = LogoDisainer::orderBy('disainer_sort','asc')->paginate(9);
//        dd($disainerList);


        return view('logotipu-kurimas.logotipuDizaineriai', ['disainers_lists' => $disainerList ]);
//        disainers_lists - nurodau blade koks bus kintamasisi
    }

//    public function LogoDisainersViewPortfolio($id) //veikianti buvo slug pagal id
    public function LogoDisainersViewPortfolio($slug)
    {
//        $disainerPorfolio = LogoDisainer::find($id); slug pagal id
        $disainerPorfolio = LogoDisainer::where('slug', '=', $slug) -> first();
//        dd($disainerPorfolio);
        $disainerImages = disainerslogo_image::all();
//        dd($disainerImages);

//        return view('logotipu-kurimas.logotipuDizainerioPortfolio', ['disainerPorfolio' => $disainerPorfolio, 'disainerImages' => '$disainerImages', 'dInfoDesc' => '$dInfoDesc']); //veikainti buvo slug pagal id

        return view('logotipu-kurimas.logotipuDizainerioPortfolio', ['disainerPorfolio' => $disainerPorfolio, 'disainerImages' => '$disainerImages', 'dInfoDesc' => '$dInfoDesc']) -> withPost($disainerPorfolio);

//        disainerPorfolio - nurodau blade koks bus kintamasisi
    }

    public function LogoDisainersAdminView()
    {

        if ( Auth::check() && Auth::user()->isAdmin() ) {
            $disainerList = LogoDisainer::orderBy('disainer_sort','asc')->paginate(8);
            return view('logotipu-kurimas.admin.DisainersList', ['disainers_lists' => $disainerList ]);

        } else {
//            dd(Auth::user());
            $disainerList = LogoDisainer::where('user_id' , Auth::user()->id)->paginate(8);
           // $disainerList = LogoDisainer::orderBy('disainer_sort','asc')->paginate(8);
            return view('logotipu-kurimas.admin.DisainersList', ['disainers_lists' => $disainerList ]);

        }


 //       $disainerList = LogoDisainer::all();
//        dd($disainerList);
 //       return view('logotipu-kurimas.admin.DisainersList', ['disainers_lists' => $disainerList ]);
//        disainers_lists - nurodau blade koks bus kintamasisi
    }

    public function DisainerEdit($id)
    {
        //get post data by id
        $disainer = LogoDisainer::find($id);
        $disainerPorfolio = LogoDisainerProfile::where('disainer_id', $id)->first();
        //load form view

        return view('/logotipu-kurimas/admin/editDisainer', ['disainer' => $disainer, 'disainerPorfolio' => $disainerPorfolio]);
    }

    public function DisainerUpdate($id, Request $request){
        //validate post data
        $this->validate($request, [
            'disainer_name' => 'required | min:3',
            'disainer_title' => 'required | min:3',
//            'disainerShort_description' => 'required | min:20',
//            'disainer_avatar' => 'required', buvo veikiantis
            'disainer_avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'content' => 'required',
            'disainer_phone' => 'required',
            'disainer_email' => 'required',
            'slug' => 'required',
//            'is_active_disainer' => 'required'
        ]);

        //get post data
//        $disainerData = $request->all();
        //vietoje all galima nurodyti konkrecias reiksmes

        if (Auth::check() && Auth::user()->isAdmin() ) {
                $disainerData = $request->only(['disainer_name', 'disainer_title', 'disainerShort_description', 'disainer_phone', 'disainer_email', 'is_active_disainer', 'disainer_sort', 'slug']);
            }else {
                $disainerData = $request->only(['disainer_name', 'disainer_title', 'disainerShort_description', 'disainer_phone', 'disainer_email', 'is_active_disainer', 'slug' ]);
        }

        if ($request->hasFile('disainer_avatar')) {

            $fileName = time().'.'.$request->file('disainer_avatar')->getClientOriginalExtension();
            $request->file('disainer_avatar')->move(public_path('images/disainer_avatar'),time().'.'.$request->file('disainer_avatar')->getClientOriginalExtension());

            $disainerData ['disainer_avatar']= $fileName;

             // Delete old flyer
            $disainer = LogoDisainer::find($id);
            $disainerAvatarFileName = $disainer->disainer_avatar;
            unlink(public_path('images/disainer_avatar/' . $disainerAvatarFileName));

        }






        //update  data
        LogoDisainer::find($id)->update($disainerData);

        $disainerPorfolio = $request->only(['disainer_description']);
        LogoDisainerProfile::where('disainer_id', $id)->update($disainerPorfolio);
        return redirect()->route('logotipu-kurimas.admin.disainer.view');

    }


    public function addDisainer(){
        $disainer = LogoDisainer::all();
        //load form view
        return view('/logotipu-kurimas/admin/addDisainer', ['disainer' => $disainer]);
    }



    public function insertDisainer(Request $request){
        //validate post data
//        dd($request->files);
        $this->validate($request, [
//            'disainer_name' => 'required | min:3',
//            'disainer_title' => 'required | min:3',
//            'disainerShort_description' => 'required | min:20',
//            'disainer_avatar' => 'required',
//            'content' => 'required',
//            'isainer_phone' => 'required',
//            'disainer_email' => 'required',
//            'is_active_disainer' => 'required'
        ]);
        //get post data
//        $disainerData  = $request->all();

//If Admin add disainer_sort ELSE disainer_sort = 99999
        if (Auth::check() && Auth::user()->isAdmin() ) {
            $disainerData = $request->only(['id','disainer_name', 'disainer_title', 'disainerShort_description', 'disainer_phone', 'disainer_email', 'is_active_disainer', 'disainer_sort', 'slug' ]);
        }else {
            $disainerData = $request->only(['id','disainer_name', 'disainer_title', 'disainerShort_description', 'disainer_phone', 'disainer_email', 'is_active_disainer', 'slug' ]);
        }

        $disainerData ['user_id'] = Auth::user()->id; //Paduodame userio id

//        $file = $request->file('disainer_avatar');
//        $path = $file->store('public/disainer');
//        $fileName    = basename($path);
        $fileName = time().'.'.$request->file('disainer_avatar')->getClientOriginalExtension();

        $request->file('disainer_avatar')->move(public_path('images/disainer_avatar'),time().'.'.$request->file('disainer_avatar')->getClientOriginalExtension());

        $disainerData ['disainer_avatar']= $fileName;

        //insert data
        $test = LogoDisainer::create($disainerData);
        $disainerPorfolio = $request->only(['disainer_description', 'disainer_id']);
        $disainerPorfolio ['disainer_id'] = $test->id;
        LogoDisainerProfile::create($disainerPorfolio);


        //SESSION MESAGGE
        session()->flash('message', 'Thank you');

        return redirect()->route('logotipu-kurimas.admin.disainer.view');
    }

    public function deleteDisainer($id){

        //take file name from data base IOT delete it
        $disainer = LogoDisainer::find($id);
        $disainerAvatarFileName = $disainer->disainer_avatar;
//        dd($disainerAvatarFileName);

        LogoDisainer::find($id)->delete($id);
        // Delete a single file
//        unlink(storage_path('app/public/disainer/' . $disainerAvatarFileName)); buvo veikiantis
        unlink(public_path('images/disainer_avatar/' . $disainerAvatarFileName));
        //storage_path - sugeneruoja path iki storage dalies

        return redirect()->route('logotipu-kurimas.admin.disainer.view');
    }

    //LOGO LIST
    public function LogoAdminListView($id)
    {
//        $logos = disainerslogo_image::find($id);
//        $logos = disainerslogo_image::all();
        $logos = disainerslogo_image::where('profile_id', $id)->get();

//        $disainerList = LogoDisainer::where('user_id' , Auth::user()->id)->get();
       // $disainerPorfolio = $logos->logo_img;

//         dd($logos); //


        return view('logotipu-kurimas/admin.LogoList', ['logos' => $logos]);


    }

}