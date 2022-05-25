<?php

namespace App\Http\Controllers\Admin;

use App\Bcategory;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class BlogController extends Controller
{
    public function  blog(){
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function addBlog(){
        $bcategories = Bcategory::where('status','1')->get();
         return view('admin.blog.add',compact('bcategories'));
    }

    public function storeBlog(Request $request){

        $slug = Str::slug($request->title,'-');
        $blogs = Blog::select('slug')->get();

        $request->validate([

            "main_image" => "required|mimes:jpg,jpeg,png",
            "title"  => [
                'required',
                'max:255',
                function($attribute ,$value ,$fail) use ($slug , $blogs){
                    foreach($blogs as $blog){
                        if($blog->slug == $slug){
                           return $fail("Title Already Exist!");
                        }
                    }
                }],
            "bcategory_id" =>"required",
            "content" => "required",
            "status" => "required",

        ]);

        $blog = new Blog();
        if($request->hasFile('main_image')){

            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $main_image = "blog_".time().rand().'.'.$extension;
            $file->move('assets/front/img/',$main_image);

            $blog->main_image = $main_image;
        }

        if($request->share_code != Null){
            $blog->share_code = $request->share_code;

        }


        $blog->title = $request->title;
        $blog->bcategory_id = $request->bcategory_id;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;

        $blog->slug = $slug;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();

        $notification = array(
            'messege' => 'Blog Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.blog'))->with('notification', $notification);
    }

    public function editBlog($id){

        $blog = Blog::findOrFail($id);
        $bcategories = Bcategory::where('status','1')->get();

        return view('admin.blog.edit', compact('blog','bcategories'));
    }

    public function updateBlog(Request $request,$id){
        $slug = Str::slug($request->title,'-');
        $blogs = Blog::select('slug')->get();
        $blog = Blog::findOrFail($id);

        $request->validate([

            "main_image" => "mimes:jpg,jpeg,png",
            "title"  => [
                'required',
                'max:255',
                function($attribute ,$value ,$fail) use ($slug , $blogs ,$blog){
                    foreach($blogs as $blg){
                        if($blog->slug != $slug){
                            if($blg->slug == $slug){
                                 return $fail("Title Already Exist!");
                            }
                        }
                    }
                }],
                "bcategory_id" =>"required",
                "content" => "required",
                "status" => "required",

        ]);

        if($request->hasFile('main_image')){
            @unlink('assets/front/img/',$blog->main_image);

            $file = $request->file('main_image');
            $extension = $file->getClientOriginalExtension();
            $main_image = "blog_".time().rand().'.'.$extension;
            $file->move('assets/front/img/',$main_image);

            $blog->main_image = $main_image;
        }


        $blog->share_code = $request->share_code;
        $blog->title = $request->title;
        $blog->bcategory_id = $request->bcategory_id;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;

        $blog->slug = $slug;
        $blog->content = $request->content;
        $blog->status = $request->status;
        $blog->save();

        $notification = array(
            'messege' => 'Blog Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.blog'))->with('notification', $notification);


    }



    public function deleteBlog($id){

        $blog = Blog::findOrFail($id);
        @unlink('assets/front/img/'.$blog->featured_image);
        $blog->delete();

        $notification = array(
            'messege' => 'Blog Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.blog'))->with('notification', $notification);
    }
}
