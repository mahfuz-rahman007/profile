<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function editProfile()
    {
        return view('admin.profile.edit');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'image'    => 'mimes:jpg,jpeg,png',
            'name'     => 'required|max:100',
            'username' => 'required|max:100',
            'email'   => 'required|email'
        ]);

        $adminProfile = Admin::first();

        if ($request->hasFile('image')) {
            @unlink('assets/front/img/' . $adminProfile->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = 'adminProfile' . time() . rand() . '.' . $extension;
            $file->move('assets/front/img/', $image);

            $adminProfile->image = $image;
        }

        $adminProfile->name = $request->name;
        $adminProfile->username = $request->username;
        $adminProfile->email = $request->email;
        $adminProfile->save();

        $notification = array(
            'messege' => 'Admin Profile Updated Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);
    }

    public function editPassword()
    {
        return view('admin.profile.changepass');
    }

    public function updatePassword(Request $request)
    {

        $messages = [
            'password.required' => 'The new password field is required',
            'password.confirmed' => "Password doesn't match"
        ];

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password'     => 'required|confirmed'

        ], $messages);

        // if given old password matches with the password of this authenticated user...
        if (Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
            $oldPassMatch = 'matched';
        } else {
            $oldPassMatch = 'not_matched';
        }

        if($validator->fails() || $oldPassMatch == 'not_matched'){
            if($oldPassMatch == 'not_matched'){
                $validator->errors()->add($oldPassMatch, true);
            }

            return redirect()->route('admin.editPassword')->withErrors($validator);
        }

        // updating ProfileIn Database
        $user = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $user->password = bcrypt($request->password);
        $user->save();

        $notification = array(
            'messege' => 'Password Changed Successfully',
            'alert'   => 'success'
        );

        return redirect()->back()->with('notification', $notification);

    }

    
}
