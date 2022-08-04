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
        if($request->hasFile('herosection_bg')){
            @unlink('assets/front/img/herosection_bg');

            $file = $request->file('herosection_bg');
            $extension = $file->getClientOriginalExtension();
            $herosection_bg = 'herosection_bg' . '.' . $extension;
            $file->move('assets/front/img/', $herosection_bg);
        }

        $setting->save();

        $notification = array(
            'messege' => 'Home Section Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);
    }


}
