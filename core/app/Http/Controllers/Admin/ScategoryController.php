<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Scategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ScategoryController extends Controller
{
    public function scategory(){
        $scategories = Scategory::all();
        return view('admin.skill.skill-category.index', compact('scategories'));
    }

    public function addScategory(){
        return view('admin.skill.skill-category.add');
    }

    public function storeScategory(Request $request){
        $request->validate([
            "name"  => "required",
            "skill_type" => "required"
        ]);

        $scategory = new Scategory();

        $scategory->name = $request->name;
        $scategory->skill_type = $request->skill_type;
        $scategory->save();

        $notification = array(
            'messege' => 'Skill Category Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.scategory'))->with('notification', $notification);
    }

    public function editScategory($id){
        $scategory = Scategory::findOrFail($id);
        return view('admin.skill.skill-category.edit', compact('scategory'));
    }

    public function updateScategory(Request $request , $id){
        $request->validate([
            "name"  => "required",
            "skill_type" => "required"
        ]);

        $scategory = Scategory::findOrFail($id);


        $scategory->name = $request->name;
        $scategory->skill_type = $request->skill_type;
        $scategory->save();

        $notification = array(
            'messege' => 'Skill Category Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.scategory'))->with('notification', $notification);
    }

    public function deleteScategory($id){
        $scategory = Scategory::findOrFail($id);
        $scategory->delete();

        $notification = array(
            'messege' => 'Skill Category Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.scategory'))->with('notification', $notification);
    }
}
