<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function slinks(){
        $socials = Social::all();
        return view('admin.settings.social.index', compact('socials'));
    }

    public function storeSlinks(Request $request){

        $request->validate([
            'icon' => 'required',
            'url'  => 'required|max:100'
        ]);

        $social = new Social();
        $social->icon = $request->icon;
        $social->url = $request->url;
        $social->save();


        $notification = array(
            'messege' => 'Social Links Added Successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function editSlinks($id){

        $slink = Social::where('id', $id)->first();

        return view('admin.settings.social.edit', compact('slink'));
    }

    public function updateSlinks(Request $request, $id){

        $request->validate([
            'icon' => 'required',
            'url'  => 'required|max:100'
        ]);

        $social = Social::where('id', $id)->first();
        $social->icon = $request->icon;
        $social->url = $request->url;
        $social->save();


        $notification = array(
            'messege' => 'Social Links Updated Successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function deleteSlinks($id){
        $social = Social::where('id', $id)->first();
        $social->delete();


        $notification = array(
            'messege' => 'Social Links Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);

    }

}
