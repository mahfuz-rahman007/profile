<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    public function education(){
        $educations = Education::orderBy('id','DESC')->get();
        return view('admin.education.index', compact('educations'));
    }

    public function addEducation(){
        return view('admin.education.add');
    }


    public function storeEducation(Request $request){
        $request->validate([
            "institution"  => "required|max:250",
            "field"  => "required|max:250",
            "description" => "required|max:350",
            "from_date" => "required",
        ]);

        $education = new Education();


        $education->institution = $request->institution;
        $education->field = $request->field;
        $education->description = $request->description;
        $education->from_date = $request->from_date;
        $education->date_to = $request->date_to;
        $education->current = $request->current;
        $education->save();

        $notification = array(
            'messege' => 'Eduction Added Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.education'))->with('notification', $notification);
    }

    public function editEducation($id){
        $education = Education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    public function updateEducation(Request $request , $id){
        $request->validate([
            "institution"  => "required|max:250",
            "field"  => "required|max:250",
            "description" => "required|max:350",
            "from_date" => "required",
        ]);

        $education = Education::findOrFail($id);
        $education->institution = $request->institution;
        $education->field = $request->field;
        $education->description = $request->description;
        $education->from_date = $request->from_date;
        $education->date_to = $request->date_to;
        $education->current = $request->current;
        $education->save();

        $notification = array(
            'messege' => 'Eduction Updated Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.education'))->with('notification', $notification);
    }

    public function deleteEducation($id){
        $education = Education::findOrFail($id);

        $education->delete();
        $notification = array(
            'messege' => 'Education Deleted Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.education'))->with('notification', $notification);
    }
}
