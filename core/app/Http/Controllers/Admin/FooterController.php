<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{
    //
    public function footer(){
        return view('admin.footer.index');
    }

    public function updateFooter(Request $request){

        $request->validate([
            "copyright_text" => "required|max:250",
        ]);

        $setting = Setting::first();

        $setting->copyright_text = $request->copyright_text;
        $setting->save();

        $notification = array(
            'messege' => 'Footer Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.footer'))->with('notification', $notification);
    }
}
