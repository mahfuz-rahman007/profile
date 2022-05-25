<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExperienceController extends Controller
{
    public function experience(){
        $experiences = Experience::orderBy('id','DESC')->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function addExperience(){
        return view('admin.experience.add');
    }


    public function storeExperience(Request $request){
        $request->validate([
            "company"  => "required|max:250",
            "field"  => "required|max:250",
            "description" => "required|max:350",
            "from_date" => "required",
        ]);

        $experience = new Experience();


        $experience->company = $request->company;
        $experience->field = $request->field;
        $experience->description = $request->description;
        $experience->from_date = $request->from_date;
        $experience->date_to = $request->date_to;
        $experience->current = $request->current;
        $experience->save();

        $notification = array(
            'messege' => 'Experience Added Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.experience'))->with('notification', $notification);
    }

    public function editExperience($id){
        $experience = Experience::findOrFail($id);
        return view('admin.experience.edit', compact('experience'));
    }

    public function updateExperience(Request $request , $id){
        $request->validate([
            "company"  => "required|max:250",
            "field"  => "required|max:250",
            "description" => "required|max:350",
            "from_date" => "required",
        ]);

        $experience = Experience::findOrFail($id);
        $experience->company = $request->company;
        $experience->field = $request->field;
        $experience->description = $request->description;
        $experience->from_date = $request->from_date;
        $experience->date_to = $request->date_to;
        $experience->current = $request->current;
        $experience->save();

        $notification = array(
            'messege' => 'Experience Updated Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.experience'))->with('notification', $notification);
    }

    public function deleteExperience($id){
        $experience = Experience::findOrFail($id);

        $experience->delete();

        $notification = array(
            'messege' => 'Experience Deleted Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.experience'))->with('notification', $notification);
    }
}
