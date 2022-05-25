<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    //
    public function testimonial(){
        $testimonials = Testimonial::orderBy('id','DESC')->get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function addTestimonial(){
         return view('admin.testimonial.add');
    }

    public function storeTestimonial(Request $request){
        $request->validate([

            "image" => "required|mimes:jpg,jpeg,png",
            "name" => "required|max:100",
            "position" => "required|max:100",
            "rating" => "required",
            "message" => "required|max:300",

        ]);

        $testimonial = new Testimonial();
        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/',$image);

            $testimonial->image = $image;
        }

        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->rating = $request->rating;
        $testimonial->message = $request->message;
        $testimonial->save();

        $notification = array(
            'messege' => 'Testimonial Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.testimonial'))->with('notification', $notification);
    }

    public function editTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function updateTestimonial(Request $request,$id){
        $request->validate([

            "name" => "required|max:100",
            "position" => "required|max:100",
            "rating" => "required",
            "message" => "required|max:300",

        ]);

        $testimonial = Testimonial::findOrFail($id);
        if($request->hasFile('image')){
            @unlink('assets/front/img/'.$testimonial->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/',$image);

            $testimonial->image = $image;
        }

        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->rating = $request->rating;
        $testimonial->message = $request->message;
        $testimonial->save();

        $notification = array(
            'messege' => 'Testimonial Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.testimonial'))->with('notification', $notification);

    }

    public function deleteTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        @unlink('assets/front/img/'.$testimonial->image);
        $testimonial->delete();


        $notification = array(
            'messege' => 'Testimonial Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.testimonial'))->with('notification', $notification);
    }
}
