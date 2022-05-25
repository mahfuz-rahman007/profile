<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Scategory;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
{
    public function skill(){
        $skills = Skill::orderBy('id','DESC')->get();
        return view('admin.skill.index', compact('skills'));
    }

    public function addSkill(){
        $scategories = Scategory::all();
        return view('admin.skill.add', compact('scategories'));
    }

    public function storeSkill(Request $request){
        $request->validate([
            "scategory_id"  => "required",
            "name"  => "required",
            "level" => "required"
        ]);

        $skill = new Skill();

        $skill->name = $request->name;
        $skill->level = $request->level;
        $skill->scategory_id = $request->scategory_id;
        $skill->save();

        $notification = array(
            'messege' => 'Skill Added successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.skill'))->with('notification', $notification);
    }

    public function editSkill($id){
        $scategories = Scategory::all();
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill','scategories'));
    }

    public function updateSkill(Request $request , $id){
        $request->validate([
            "scategory_id"  => "required",
            "name"  => "required",
            "level" => "required"
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->level = $request->level;
        $skill->scategory_id = $request->scategory_id;
        $skill->save();

        $notification = array(
            'messege' => 'Skill Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.skill'))->with('notification', $notification);
    }

    public function deleteSkill($id){
        $skill = Skill::findOrFail($id);
         $skill->delete();

         $notification = array(
            'messege' => 'Skill Deleted successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.skill'))->with('notification', $notification);
    }
}
