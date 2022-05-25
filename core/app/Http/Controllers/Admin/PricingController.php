<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PricingController extends Controller
{
    public function pricing(){
        $pricings = Pricing::orderBy('id','DESC')->get();
        return view('admin.pricing.index', compact('pricings'));
    }

    public function addPricing(){
        return view('admin.pricing.add');
    }

    public function storePricing(Request $request){
        $request->validate([
            "currency"  => "required",
            "price"     => "required",
            "plan_name" => "required",
            "content"   => "required",
            "status"    => "required",
        ]);

        $pricing = new Pricing();

        $pricing->currency = $request->currency;
        $pricing->price = $request->price;
        $pricing->plan_name = $request->plan_name;
        $pricing->content = $request->content;
        $pricing->status = $request->status;
        $pricing->save();

        $notification = array(
            'messege' => 'Pricing Plan Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.pricing'))->with('notification', $notification);
    }

    public function editPricing($id){
        $pricing = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('pricing'));
    }

    public function updatePricing(Request $request , $id){
        $request->validate([
            "currency"  => "required",
            "price"     => "required",
            "plan_name" => "required",
            "content"   => "required",
            "status"    => "required",
        ]);

        $pricing = Pricing::findOrFail($id);

        $pricing->currency = $request->currency;
        $pricing->price = $request->price;
        $pricing->plan_name = $request->plan_name;
        $pricing->content = $request->content;
        $pricing->status = $request->status;
        $pricing->save();

        $notification = array(
            'messege' => 'Pricing Plan Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.pricing'))->with('notification', $notification);
    }

    public function deletePricing($id){
        $pricing = Pricing::findOrFail($id);
         $pricing->delete();

         $notification = array(
            'messege' => 'Pricing Plan Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.pricing'))->with('notification', $notification);
    }
}
