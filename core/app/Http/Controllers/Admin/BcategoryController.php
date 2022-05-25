<?php

namespace App\Http\Controllers\Admin;

use App\Bcategory;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BcategoryController extends Controller
{
    public function bcategory(){
        $bcategories = Bcategory::orderBy('id','DESC')->get();
        return view('admin.blog.blog-category.index', compact('bcategories'));
    }

    public function addBcategory(){
        return view('admin.blog.blog-category.add');
    }

    public function storeBcategory(Request $request){
        $request->validate([
            "name"  => "required|max:100",
            "status" => "required"
        ]);

        $bcategory = new Bcategory();

        $bcategory->name = $request->name;
        $bcategory->status = $request->status;
        $bcategory->save();

        $notification = array(
            'messege' => 'Blog Category Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.bcategory'))->with('notification', $notification);
    }

    public function editBcategory($id){
        $bcategory = Bcategory::findOrFail($id);
        return view('admin.blog.blog-category.edit', compact('bcategory'));
    }

    public function updateBcategory(Request $request , $id){
        $request->validate([
            "name"  => "required|max:100",
            "status" => "required"
        ]);

        $bcategory = Bcategory::findOrFail($id);


        $bcategory->name = $request->name;
        $bcategory->status = $request->status;
        $bcategory->save();

        $notification = array(
            'messege' => 'Blog Category Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.bcategory'))->with('notification', $notification);
    }

    public function deleteBcategory($id){
        $bcategory = Bcategory::findOrFail($id);
        $blogs = Blog::where('bcategory_id',$id)->get();

        foreach($blogs as $blog){
            @unlink('assets/front/img/'.$blog->featured_image);
            $blog->delete();
        }

        $bcategory->delete();

        $notification = array(
            'messege' => 'Blog Category Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.bcategory'))->with('notification', $notification);
    }
}
