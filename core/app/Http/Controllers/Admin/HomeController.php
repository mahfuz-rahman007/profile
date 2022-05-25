<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function home(){
        return view('admin.home.static');
    }


    public function updateHome(Request $request){
        $request->validate([
            "homearea_bg" => "mimes:jpg,jpeg,png",
        ]);

        $setting  = Setting::first();
        if($request->hasFile('homearea_bg')){
            @unlink('assets/front/img/'.$setting->homearea_bg);

            $file = $request->file('homearea_bg');
            $file->move('assets/front/img/','homearea_bg.jpg',);
        }

        $setting->save();

        $notification = array(
            'messege' => 'Home Section Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);
    }


}
