<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Funfact;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    //
    public function about(){
        return view('admin.about.about-me');
    }

    public function updateAbout(Request $request){
        $request->validate([
            "name"         => "required",
            "age"          => "required",
            "residence"    => "required",
            "freelance"    => "required",
            "position_type"=> "required",
            "resume"       => "mimes:pdf"
        ]);

        $about = About::first();
        if($request->hasFile('avatar')){
            @unlink('assets/front/img/'.$about->image);

            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $avatar = 'avatar_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/',$avatar);

            $about->avatar = $avatar;
        }



        if($request->hasFile('resume')){
            @unlink('assets/front/img/'.$about->resume);

            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $resume = 'resume_'.time().rand().'.'.$extension;
            $file->move('assets/front/file/',$resume);

            $about->resume = $resume;
        }

        $about->name       = $request->name;
        $about->age       = $request->age;
        $about->residence       = $request->residence;
        $about->freelance       = $request->freelance;
        $about->about_text       = $request->about_text;
        $about->position_type       = $request->position_type;
        $about->save();

        $notification = array(
            'messege' => 'About Information Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);
    }

    public function contactinfo(){
        return view('admin.about.contactinfo');
    }

    public function updateContactinfo(Request $request){

        $request->validate([
            "address"  => "required",
            "phone"    => "required",
            "mail"     => "required",
            "map"      => "required",
        ]);

        $setting = Setting::first();
        $setting->map = $request->map;
        $setting->save();

        $about = About::first();
        $about->address = $request->address;
        $about->phone = $request->phone;
        $about->mail = $request->mail;
        $about->latitude = $request->latitude;
        $about->longitude = $request->longitude;
        $about->save();


        $notification = array(
            'messege' => 'Contact Information Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);
    }

    public function funfact(){
        $funfacts = Funfact::all();
        return view('admin.about.funfact.index', compact('funfacts'));
    }

    public function addFunfact(){
        return view('admin.about.funfact.add');
    }

    public function storeFunfact(Request $request){
        $request->validate([
            "icon"  => "required",
            "name"  => "required",
            "value" => "required"
        ]);

        $funfact = new Funfact();
        if($request->hasFile('icon')){
          $file = $request->file('icon');
          $extension = $file->getClientOriginalExtension();
          $icon = time().rand().'.'.$extension;
          $file->move('assets/front/img/',$icon);

          $funfact->icon = $icon;
        }

        $funfact->name = $request->name;
        $funfact->value = $request->value;
        $funfact->save();

        Session::flash('success','New Funfacts Added Successfully');
        return redirect()->route('admin.funfact');
    }

    public function editFunfact($id){
        $funfact = Funfact::findOrFail($id);
        return view('admin.about.funfact.edit', compact('funfact'));
    }

    public function updateFunfact(Request $request , $id){
        $request->validate([
            "icon"  => "required",
            "name"  => "required",
            "value" => "required"
        ]);

        $funfact = Funfact::findOrFail($id);

        if($request->hasFile('icon')){
          $file = $request->file('icon');
          $extension = $file->getClientOriginalExtension();
          $icon = time().rand().'.'.$extension;
          $file->move('assets/front/img/',$icon);

          $funfact->icon = $icon;
        }

        $funfact->name = $request->name;
        $funfact->value = $request->value;
        $funfact->save();

        Session::flash('success','New Funfacts Added Successfully');
        return redirect()->route('admin.funfact');
    }

    public function deleteFunfact($id){
        $funfact = Funfact::findOrFail($id);
        @unlink('assets/front/img/'.$funfact->icon);
        $funfact->delete();

        Session::flash('success','Funfacts Deleted Successfully');
        return redirect()->route('admin.funfact');
    }
}
